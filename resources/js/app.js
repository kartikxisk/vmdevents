// ─────────────────────────────────────────────────────────────────────────
//  app.js — page enhancement layer
//  Each function is a small, no-dependency progressive enhancement that
//  bails cleanly when its target nodes or required APIs aren't present.
// ─────────────────────────────────────────────────────────────────────────

const reduceMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const noHover = () =>
    window.matchMedia('(hover: none), (pointer: coarse)').matches;

// Split text-only nodes inside a heading into <span class="word"> wrappers,
// preserving any inline element wrappers (e.g. a primary-tinted span).
const splitTextNodes = (root, counter) => {
    Array.from(root.childNodes).forEach((node) => {
        if (node.nodeType === Node.TEXT_NODE) {
            const text = node.textContent;
            if (!text || !text.trim()) return;
            const fragment = document.createDocumentFragment();
            text.split(/(\s+)/).forEach((part) => {
                if (!part) return;
                if (/^\s+$/.test(part)) {
                    fragment.appendChild(document.createTextNode(part));
                    return;
                }
                const word = document.createElement('span');
                word.className = 'word';
                const inner = document.createElement('span');
                inner.className = 'word-inner';
                inner.style.transitionDelay = `${counter.i * 60}ms`;
                inner.textContent = part;
                word.appendChild(inner);
                fragment.appendChild(word);
                counter.i++;
            });
            node.replaceWith(fragment);
        } else if (node.nodeType === Node.ELEMENT_NODE) {
            splitTextNodes(node, counter);
        }
    });
};

const splitWords = () => {
    document.querySelectorAll('[data-split-words]').forEach((el) => {
        if (el.dataset.splitDone === 'true') return;
        splitTextNodes(el, { i: 0 });
        el.dataset.splitDone = 'true';
    });
};

// Single shared IntersectionObserver flips `.is-visible` for any reveal
// pattern (fade, stagger, mask-reveal, split-words headline).
const reveal = () => {
    const els = document.querySelectorAll(
        '.reveal, .reveal-stagger, .mask-reveal, [data-split-words]'
    );
    if (!els.length) return;
    if (!('IntersectionObserver' in window)) {
        els.forEach((el) => el.classList.add('is-visible'));
        return;
    }
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.18, rootMargin: '0px 0px -40px 0px' }
    );
    els.forEach((el) => io.observe(el));
};

// Animate `[data-counter]` elements from 0 to their target on first view.
const counters = () => {
    const els = document.querySelectorAll('[data-counter]');
    if (!els.length) return;

    const animate = (el, target) => {
        if (reduceMotion()) {
            el.textContent = target;
            return;
        }
        const start = performance.now();
        const duration = 1400;
        const tick = (now) => {
            const t = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - t, 3); // easeOutCubic
            el.textContent = Math.round(target * eased);
            if (t < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    };

    if (!('IntersectionObserver' in window)) {
        els.forEach((el) => animate(el, parseInt(el.dataset.counter, 10) || 0));
        return;
    }

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const target = parseInt(entry.target.dataset.counter, 10) || 0;
                animate(entry.target, target);
                io.unobserve(entry.target);
            });
        },
        { threshold: 0.5 }
    );
    els.forEach((el) => {
        el.textContent = '0';
        io.observe(el);
    });
};

// 3D tilt on `.tilt` cards based on cursor position. Skipped on touch and
// when the user has reduced motion enabled.
const tilt = () => {
    if (reduceMotion() || noHover()) return;
    const els = document.querySelectorAll('.tilt');
    els.forEach((el) => {
        let raf = null;
        el.addEventListener('mousemove', (e) => {
            if (raf) return;
            raf = requestAnimationFrame(() => {
                const rect = el.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;
                const max = 5;
                el.style.transform = `perspective(1200px) translateY(-4px) rotateX(${(-y * max).toFixed(2)}deg) rotateY(${(x * max).toFixed(2)}deg)`;
                raf = null;
            });
        });
        el.addEventListener('mouseleave', () => {
            el.style.transform = '';
        });
    });
};

// Magnetic effect — primary CTAs subtly track the cursor when it's nearby.
const magnetic = () => {
    if (reduceMotion() || noHover()) return;
    document.querySelectorAll('.btn-primary, [data-magnetic]').forEach((el) => {
        let raf = null;
        el.addEventListener('mousemove', (e) => {
            if (raf) return;
            raf = requestAnimationFrame(() => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                el.style.translate = `${(x * 0.18).toFixed(1)}px ${(y * 0.25).toFixed(1)}px`;
                raf = null;
            });
        });
        el.addEventListener('mouseleave', () => {
            el.style.translate = '';
        });
    });
};

// Scroll progress bar at the top of the viewport.
const scrollProgress = () => {
    const bar = document.querySelector('.scroll-progress');
    if (!bar) return;
    let raf = null;
    const update = () => {
        const h = document.documentElement.scrollHeight - window.innerHeight;
        const p = h > 0 ? Math.min(window.scrollY / h, 1) : 0;
        bar.style.setProperty('--progress', p.toFixed(4));
    };
    const onScroll = () => {
        if (raf) return;
        raf = requestAnimationFrame(() => {
            update();
            raf = null;
        });
    };
    update();
    window.addEventListener('scroll', onScroll, { passive: true });
};

// Sticky-nav state on scroll
const stickyNav = () => {
    const nav = document.getElementById('site-nav');
    if (!nav) return;
    const update = () => {
        if (window.scrollY > 12) nav.classList.add('is-scrolled');
        else nav.classList.remove('is-scrolled');
    };
    update();
    window.addEventListener('scroll', update, { passive: true });
};

// Mild parallax for hero background
const heroParallax = () => {
    const hero = document.querySelector('[data-hero-img]');
    if (!hero || reduceMotion()) return;
    let raf = null;
    const onScroll = () => {
        if (raf) return;
        raf = requestAnimationFrame(() => {
            const y = Math.min(window.scrollY * 0.25, 200);
            hero.style.setProperty('--parallax', `${y}px`);
            raf = null;
        });
    };
    window.addEventListener('scroll', onScroll, { passive: true });
};

// Single-open FAQ — closes other items when one opens
const faqAccordion = () => {
    const items = document.querySelectorAll('.faq-item');
    items.forEach((item) => {
        item.addEventListener('toggle', () => {
            if (item.open) {
                items.forEach((other) => {
                    if (other !== item) other.open = false;
                });
            }
        });
    });
};

const init = () => {
    splitWords();      // must run before reveal so word inners exist
    reveal();
    counters();
    tilt();
    magnetic();
    scrollProgress();
    stickyNav();
    heroParallax();
    faqAccordion();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}
