@php
    $columns = [
        'Company' => [
            'About'   => route('about'),
            'Our Work' => route('work'),
            'Contact' => route('contact'),
        ],
        'Services' => [
            'Corporate Events'       => route('service', 'corporate-events'),
            'Artist Management'      => route('service', 'artist-management'),
            'Manpower Management'    => route('service', 'manpower-management'),
            'Fabrication & Branding' => route('service', 'fabrication-branding'),
        ],
        'Legal' => [
            'Privacy Policy' => route('privacy'),
            'Terms of Use'   => route('terms'),
        ],
    ];
@endphp

<footer class="border-t border-black/5 bg-ink-50">
    <div class="container-page grid gap-10 py-12 sm:grid-cols-2 md:grid-cols-4 md:gap-12 md:py-16">
        <div class="sm:col-span-2 md:col-span-1">
            <x-logo class="mb-4 h-10 w-auto" />
            <p class="max-w-xs text-sm leading-relaxed text-ink-300">
                Crafting promotions, performances, and unforgettable moments for India's most loved brands.
            </p>

            {{-- NAP block — name, address, phone — surfaces local-business signals to crawlers. --}}
            <address class="mt-6 not-italic text-sm leading-relaxed text-ink-300">
                <p class="font-semibold text-ink-500">VMD Promotion &amp; Events</p>
                <p>J-81, Raj Nagar-1, Old Mehrauli Road,<br>Palam Colony, New Delhi – 110045</p>
                <p class="mt-2">
                    <a href="tel:+919540908009" class="hover:text-ink-500">+91 95409 08009</a>
                </p>
                <p>
                    <a href="mailto:Dipender@vmdevents.com" class="hover:text-ink-500">Dipender@vmdevents.com</a>
                </p>
            </address>
        </div>

        @foreach ($columns as $heading => $links)
            <div>
                <h3 class="mb-4 text-sm font-semibold text-ink-500">{{ $heading }}</h3>
                <ul class="space-y-2 text-sm text-ink-300">
                    @foreach ($links as $label => $href)
                        <li><a class="transition-colors hover:text-ink-500" href="{{ $href }}">{{ $label }}</a></li>
                    @endforeach
                </ul>

                @if ($loop->last)
                    <div class="mt-6 flex items-center gap-4 text-ink-400">
                        <a href="{{ config('social.instagram') }}" rel="noopener" target="_blank" aria-label="VMD Events on Instagram" class="transition-colors hover:text-primary-500">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 3.3.1 4.8 1.7 4.9 4.9.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 3.3-1.7 4.8-4.9 4.9-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-3.3-.1-4.8-1.7-4.9-4.9-.1-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-3.3 1.7-4.8 4.9-4.9 1.2-.1 1.6-.1 4.8-.1zm0 1.8c-3.1 0-3.5 0-4.7.1-2.4.1-3.4 1.2-3.5 3.5-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c.1 2.4 1.2 3.4 3.5 3.5 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c2.4-.1 3.4-1.2 3.5-3.5.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c-.1-2.4-1.2-3.4-3.5-3.5-1.2-.1-1.6-.1-4.7-.1zm0 3.1a4.9 4.9 0 110 9.8 4.9 4.9 0 010-9.8zm0 1.8a3.1 3.1 0 100 6.2 3.1 3.1 0 000-6.2zm5.1-2a1.2 1.2 0 110 2.3 1.2 1.2 0 010-2.3z"/></svg>
                        </a>
                        <a href="{{ config('social.youtube') }}" rel="noopener" target="_blank" aria-label="VMD Events on YouTube" class="transition-colors hover:text-primary-500">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.5a3 3 0 00-2.1-2.1C19.4 4 12 4 12 4s-7.4 0-9.4.4A3 3 0 00.5 6.5C.1 8.5.1 12 .1 12s0 3.5.4 5.5a3 3 0 002.1 2.1c2 .4 9.4.4 9.4.4s7.4 0 9.4-.4a3 3 0 002.1-2.1c.4-2 .4-5.5.4-5.5s0-3.5-.4-5.5zM9.6 15.6V8.4l6.4 3.6-6.4 3.6z"/></svg>
                        </a>
                        <a href="{{ config('social.twitter') }}" rel="noopener" target="_blank" aria-label="VMD Events on X" class="transition-colors hover:text-primary-500">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.81l-4.74-6.2L4.8 22H2.04l6.96-7.95L1.6 2h6.93l4.27 5.66L18.24 2zm-1.2 18.4h1.6L7.04 3.5H5.36l11.68 16.9z"/></svg>
                        </a>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="border-t border-black/5">
        <div class="container-page flex flex-col items-center justify-between gap-2 py-6 text-xs text-ink-200 md:flex-row">
            <p>&copy; {{ date('Y') }} VMD Promotion &amp; Events. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="hover:text-ink-500">Privacy</a>
                <a href="{{ route('terms') }}" class="hover:text-ink-500">Terms</a>
            </div>
        </div>
    </div>
</footer>
