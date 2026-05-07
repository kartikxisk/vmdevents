@php
    $navLinks = [
        'Our Work' => route('work'),
        'Services' => route('services'),
        'About'    => route('about'),
        'Contact'  => route('contact'),
    ];

    $servicesMenu = [
        ['label' => 'Corporate Events',       'href' => route('service', 'corporate-events')],
        ['label' => 'Artist Management',      'href' => route('service', 'artist-management')],
        ['label' => 'Manpower Management',    'href' => route('service', 'manpower-management')],
        ['label' => 'Fabrication & Branding', 'href' => route('service', 'fabrication-branding')],
    ];
@endphp

<header
    id="site-nav"
    data-mobile-nav
    {{-- Full-width solid black bar. The thin border softens the edge once the user scrolls past the hero. --}}
    class="fixed inset-x-0 top-0 z-50 bg-black border-b border-transparent transition-colors duration-300 in-[.is-scrolled]:border-white/5 in-[.is-scrolled]:bg-black/90 in-[.is-scrolled]:backdrop-blur-md"
>
    <div class="container-page flex h-16 items-center md:h-20">
        {{-- Left section (flex-1) — keeps the centre column centred on every breakpoint --}}
        <div class="flex flex-1 items-center justify-start">
            <button
                type="button"
                data-mobile-toggle
                aria-controls="mobile-menu"
                aria-expanded="false"
                aria-label="Open menu"
                class="-ml-2 flex h-11 w-11 items-center justify-center rounded-full text-white transition-colors hover:bg-white/10 lg:hidden"
            >
                <svg data-icon-open class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
                <svg data-icon-close class="hidden h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <path d="M6 6l12 12M6 18L18 6"/>
                </svg>
            </button>

            <x-logo class="hidden h-11 w-auto shrink-0 lg:block" />
        </div>

        {{-- Mobile-only centred logo (sits between the two flex-1 siblings) --}}
        <a href="{{ route('home') }}" aria-label="VMD home" class="flex shrink-0 items-center lg:hidden">
            <img src="{{ asset('images/logo.png') }}" alt="VMD Promotion & Events" class="block h-9 w-auto translate-y-0.5" width="78" height="46">
        </a>

        {{-- Centre section — desktop nav. Sits between two equal-width flex-1
             flanks so it stays geometrically centred regardless of the logo
             or CTA widths. --}}
        <nav class="hidden items-center gap-8 text-base font-medium text-white lg:flex" aria-label="Primary">
            @foreach ($navLinks as $label => $href)
                @if ($label === 'Services')
                    <div class="group relative py-1">
                        <a href="{{ $href }}" class="relative inline-flex items-center gap-1 py-1 transition-colors group-hover:text-primary-500
                            after:absolute after:inset-x-0 after:bottom-0 after:h-px after:origin-left after:scale-x-0 after:bg-primary-500 after:transition-transform after:duration-300
                            group-hover:after:scale-x-100">
                            {{ $label }}
                            <svg class="h-3 w-3 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 9l6 6 6-6"/>
                            </svg>
                        </a>
                        <div class="invisible absolute top-full left-1/2 z-10 mt-3 w-64 -translate-x-1/2 translate-y-2 rounded-2xl border border-white/5 bg-black/95 p-2 opacity-0 shadow-2xl backdrop-blur-md transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                            @foreach ($servicesMenu as $svc)
                                <a href="{{ $svc['href'] }}" class="block rounded-xl px-4 py-3 text-sm transition-colors hover:bg-white/5 hover:text-primary-500">
                                    {{ $svc['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $href }}" class="relative py-1 transition-colors hover:text-primary-500
                        after:absolute after:inset-x-0 after:bottom-0 after:h-px after:origin-left after:scale-x-0 after:bg-primary-500 after:transition-transform after:duration-300
                        hover:after:scale-x-100">
                        {{ $label }}
                    </a>
                @endif
            @endforeach
        </nav>

        {{-- Right section (flex-1) — mirrors the left flank's width so the
             centred nav stays exactly in the middle of the header. --}}
        <div class="flex flex-1 items-center justify-end">
            {{-- Desktop CTA — opens the enquiry modal --}}
            <x-btn size="sm" data-enquiry-open class="hidden lg:inline-flex cursor-pointer">Enquiry</x-btn>

            {{-- Mobile enquiry icon --}}
            <button
                type="button"
                data-enquiry-open
                aria-label="Open enquiry form"
                class="-mr-2 flex h-11 w-11 items-center justify-center rounded-full text-white transition-colors hover:bg-primary-500 hover:text-ink-500 lg:hidden"
            >
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile drawer --}}
    <div
        id="mobile-menu"
        data-mobile-panel
        class="hidden border-t border-white/5 bg-black lg:hidden"
    >
        <nav class="container-page flex flex-col gap-1 py-4 text-white" aria-label="Mobile">
            @foreach ($navLinks as $label => $href)
                @if ($label === 'Services')
                    <div class="rounded-xl">
                        <a href="{{ $href }}" class="block px-3 pt-3 pb-2 text-lg font-medium transition-colors hover:text-primary-500">
                            {{ $label }}
                        </a>
                        <div class="ml-3 flex flex-col border-l border-white/10 pl-3">
                            @foreach ($servicesMenu as $svc)
                                <a href="{{ $svc['href'] }}" class="rounded-lg px-3 py-2 text-sm text-white/80 transition-colors hover:bg-white/5 hover:text-primary-500">
                                    {{ $svc['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $href }}" class="rounded-xl px-3 py-3 text-lg font-medium transition-colors hover:bg-white/5 hover:text-primary-500">
                        {{ $label }}
                    </a>
                @endif
            @endforeach
            <div class="mt-3 px-3 pb-2">
                <x-btn size="sm" data-enquiry-open class="w-full cursor-pointer">Enquiry</x-btn>
            </div>
        </nav>
    </div>
</header>

@push('scripts')
    <script>
        (() => {
            const root = document.querySelector('[data-mobile-nav]');
            if (!root) return;
            const btn   = root.querySelector('[data-mobile-toggle]');
            const panel = root.querySelector('[data-mobile-panel]');
            const open  = root.querySelector('[data-icon-open]');
            const close = root.querySelector('[data-icon-close]');

            const setOpen = (isOpen) => {
                btn.setAttribute('aria-expanded', String(isOpen));
                btn.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
                panel.classList.toggle('hidden', !isOpen);
                open.classList.toggle('hidden', isOpen);
                close.classList.toggle('hidden', !isOpen);
                document.body.style.overflow = isOpen ? 'hidden' : '';
            };

            btn.addEventListener('click', () => {
                setOpen(btn.getAttribute('aria-expanded') !== 'true');
            });

            // Close after a navigation tap or modal trigger inside the panel.
            panel.addEventListener('click', (e) => {
                if (e.target.closest('a, [data-enquiry-open]')) setOpen(false);
            });

            // Close when crossing into desktop breakpoint.
            window.matchMedia('(min-width: 1024px)').addEventListener('change', (e) => {
                if (e.matches) setOpen(false);
            });
        })();
    </script>
@endpush
