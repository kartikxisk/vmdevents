@php
    $livewire ??= null;
    $renderHookScopes = $livewire?->getRenderHookScopes();
@endphp

<x-filament-panels::layout.base :livewire="$livewire">
    <div class="vmd-auth-shell">
        <aside class="vmd-auth-aside">
            <div class="vmd-auth-aside__glow" aria-hidden="true"></div>

            <a href="{{ url('/') }}" class="vmd-auth-aside__brand" aria-label="VMD Events home">
                <img src="{{ asset('images/logo.png') }}" alt="VMD Events" width="78" height="46">
            </a>

            <div class="vmd-auth-aside__copy">
                <p class="vmd-auth-aside__eyebrow">VMD Promotion &amp; Events</p>
                <h1 class="vmd-auth-aside__title">
                    Run the show from one place.
                </h1>
                <p class="vmd-auth-aside__lede">
                    Manage enquiries, projects and content for India's leading
                    brand promotion, corporate event and artist management agency.
                </p>

                <ul class="vmd-auth-aside__list">
                    <li><span>•</span> Real-time enquiry inbox</li>
                    <li><span>•</span> Service &amp; case-study CMS</li>
                    <li><span>•</span> Role-based team access</li>
                </ul>
            </div>

            <p class="vmd-auth-aside__foot">
                © {{ date('Y') }} VMD Events. All rights reserved.
            </p>
        </aside>

        <main class="vmd-auth-main">
            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_LAYOUT_START, scopes: $renderHookScopes) }}

            <div class="vmd-auth-main__inner">
                {{ $slot }}
            </div>

            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_LAYOUT_END, scopes: $renderHookScopes) }}
        </main>
    </div>

    <style>
        .vmd-auth-shell {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr;
            background: #f3f0f0;
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif;
        }

        @media (min-width: 1024px) {
            .vmd-auth-shell {
                grid-template-columns: 1.05fr 1fr;
            }
        }

        /* ─── Left brand panel ─── */
        .vmd-auth-aside {
            position: relative;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            padding: 3rem;
            color: #fafafa;
            background:
                radial-gradient(120% 90% at 0% 0%, rgba(255, 160, 39, 0.55), transparent 55%),
                radial-gradient(80% 80% at 100% 100%, rgba(240, 142, 16, 0.35), transparent 60%),
                #080808;
            overflow: hidden;
            isolation: isolate;
        }

        @media (min-width: 1024px) {
            .vmd-auth-aside { display: flex; }
        }

        .vmd-auth-aside__glow {
            position: absolute;
            inset: auto -25% -25% auto;
            width: 36rem;
            height: 36rem;
            border-radius: 9999px;
            background: radial-gradient(closest-side, rgba(255, 160, 39, 0.45), transparent 70%);
            filter: blur(60px);
            z-index: -1;
        }

        .vmd-auth-aside__brand img {
            height: 3.25rem;
            width: auto;
        }

        .vmd-auth-aside__copy { max-width: 30rem; }

        .vmd-auth-aside__eyebrow {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            color: rgba(250, 250, 250, 0.7);
            margin-bottom: 1.25rem;
        }

        .vmd-auth-aside__title {
            font-size: clamp(2.25rem, 3.5vw, 3.25rem);
            font-weight: 600;
            line-height: 1.05;
            letter-spacing: -0.02em;
            margin-bottom: 1.25rem;
        }

        .vmd-auth-aside__lede {
            font-size: 1.0625rem;
            line-height: 1.55;
            color: rgba(250, 250, 250, 0.78);
            margin-bottom: 2rem;
        }

        .vmd-auth-aside__list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 0.625rem;
            color: rgba(250, 250, 250, 0.85);
        }

        .vmd-auth-aside__list li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.95rem;
        }

        .vmd-auth-aside__list span {
            color: #ffa027;
            font-size: 1.5rem;
            line-height: 1;
        }

        .vmd-auth-aside__foot {
            font-size: 0.8125rem;
            color: rgba(250, 250, 250, 0.55);
        }

        /* ─── Right form panel ─── */
        .vmd-auth-main {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
        }

        @media (min-width: 768px) {
            .vmd-auth-main { padding: 3rem; }
        }

        .vmd-auth-main__inner {
            width: 100%;
            max-width: 28rem;
        }

        /* Override Filament's centered-card chrome inside the right column */
        .vmd-auth-main .fi-simple-page,
        .vmd-auth-main .fi-simple-page-content {
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
            border: 0 !important;
        }

        .vmd-auth-main .fi-simple-header {
            text-align: left !important;
            margin-bottom: 1.75rem;
        }

        .vmd-auth-main .fi-simple-header-heading {
            font-size: 2rem !important;
            font-weight: 600 !important;
            letter-spacing: -0.02em;
            color: #080808 !important;
        }

        .vmd-auth-main .fi-simple-header-subheading {
            color: #5a5a5a !important;
        }

        /* Pill buttons to match the marketing site */
        .vmd-auth-main .fi-btn {
            border-radius: 9999px !important;
        }

        /* Mobile-only mini brand above the form so users still see it on phones */
        .vmd-auth-main__inner::before {
            content: '';
        }

        @media (max-width: 1023px) {
            .vmd-auth-main__mobile-brand {
                display: flex;
            }
        }
    </style>
</x-filament-panels::layout.base>
