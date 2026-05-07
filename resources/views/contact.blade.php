@extends('layouts.app')

@section('title', 'Contact VMD Events — Brand & Event Production, New Delhi')
@section('description', 'Talk to VMD Events about your next brand activation, corporate event or artist booking. Call +91 95409 08009 or email Dipender@vmdevents.com.')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => route('contact')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    <x-section pad="lg" class="pt-28 md:pt-40">
        <div class="grid gap-12 md:grid-cols-2 md:gap-20">
            {{-- ───── Left: company info ───── --}}
            <div class="reveal">
                <h1 class="heading-lg" data-split-words>
                    <span class="block">Get in touch</span>
                    <span class="block">with <span class="text-primary-500">VMD</span>.</span>
                </h1>

                <p class="mt-6 max-w-md text-base leading-relaxed text-ink-400 md:mt-8">
                    We'd love to hear from you! Whether you're planning a brand activation, corporate event, or a one-of-a-kind celebration, our team is here to make it happen.
                </p>

                {{-- Offices --}}
                <div class="mt-10 flex items-start gap-4 md:mt-16 md:gap-5">
                    <span class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center text-ink-500">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 22s8-7.5 8-13a8 8 0 1 0-16 0c0 5.5 8 13 8 13z"/><circle cx="12" cy="9" r="3"/>
                        </svg>
                    </span>
                    <div class="grid gap-x-12 gap-y-6 text-sm leading-relaxed text-ink-400 md:grid-cols-2 md:gap-y-2">
                        <div>
                            <p class="mb-2 font-semibold tracking-wide text-ink-500">HEAD OFFICE</p>
                            <p>J-81, Raj Nagar-1, Old Mehrauli Road,<br>Near Arya Samaj Mandir,<br>Palam Colony, New Delhi – 110045</p>
                        </div>
                        <div>
                            <p class="mb-2 font-semibold tracking-wide text-ink-500">REGISTERED OFFICE</p>
                            <p>RZ-121B, Raj Nagar-1, Street No. 4,<br>Palam Colony, New Delhi – 110045</p>
                        </div>
                    </div>
                </div>

                {{-- Phone --}}
                <div class="mt-8 flex items-start gap-4 md:mt-10 md:items-center md:gap-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center text-ink-500">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </span>
                    <p class="flex flex-wrap items-center gap-x-2 gap-y-1 text-base text-ink-400">
                        <a href="tel:01141688009" class="transition-colors hover:text-ink-500">011-41688009</a>
                        <span class="text-ink-200" aria-hidden="true">|</span>
                        <a href="tel:+919540908009" class="transition-colors hover:text-ink-500">+91 95409 08009</a>
                    </p>
                </div>

                {{-- Email --}}
                <div class="mt-6 flex items-start gap-4 md:items-center md:gap-5">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center text-ink-500">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>
                        </svg>
                    </span>
                    <p class="flex min-w-0 flex-wrap items-center gap-x-2 gap-y-1 break-all text-base text-ink-400 sm:break-normal">
                        <a href="mailto:Dipender@vmdevents.com" class="underline transition-colors hover:text-ink-500">Dipender@vmdevents.com</a>
                        <span class="text-ink-200" aria-hidden="true">|</span>
                        <a href="mailto:Dipendervmd@gmail.com" class="underline transition-colors hover:text-ink-500">Dipendervmd@gmail.com</a>
                    </p>
                </div>

                {{-- Connect with us --}}
                <div class="mt-12 md:mt-20">
                    <p class="mb-5 text-sm font-semibold tracking-wide text-ink-500">CONNECT WITH US</p>
                    <div class="flex items-center gap-3">
                        <a href="{{ config('social.instagram') }}" rel="noopener" target="_blank" aria-label="VMD Events on Instagram" class="flex h-12 w-12 items-center justify-center rounded-xl bg-black text-white transition-all hover:-translate-y-0.5 hover:bg-ink-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 3.3.1 4.8 1.7 4.9 4.9.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 3.3-1.7 4.8-4.9 4.9-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-3.3-.1-4.8-1.7-4.9-4.9-.1-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-3.3 1.7-4.8 4.9-4.9 1.2-.1 1.6-.1 4.8-.1zm0 1.8c-3.1 0-3.5 0-4.7.1-2.4.1-3.4 1.2-3.5 3.5-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c.1 2.4 1.2 3.4 3.5 3.5 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c2.4-.1 3.4-1.2 3.5-3.5.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c-.1-2.4-1.2-3.4-3.5-3.5-1.2-.1-1.6-.1-4.7-.1zm0 3.1a4.9 4.9 0 110 9.8 4.9 4.9 0 010-9.8zm0 1.8a3.1 3.1 0 100 6.2 3.1 3.1 0 000-6.2zm5.1-2a1.2 1.2 0 110 2.3 1.2 1.2 0 010-2.3z"/></svg>
                        </a>
                        <a href="{{ config('social.twitter') }}" rel="noopener" target="_blank" aria-label="VMD Events on X" class="flex h-12 w-12 items-center justify-center rounded-xl bg-black text-white transition-all hover:-translate-y-0.5 hover:bg-ink-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.81l-4.74-6.2L4.8 22H2.04l6.96-7.95L1.6 2h6.93l4.27 5.66L18.24 2zm-1.2 18.4h1.6L7.04 3.5H5.36l11.68 16.9z"/></svg>
                        </a>
                        <a href="{{ config('social.youtube') }}" rel="noopener" target="_blank" aria-label="VMD Events on YouTube" class="flex h-12 w-12 items-center justify-center rounded-xl bg-black text-white transition-all hover:-translate-y-0.5 hover:bg-ink-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.5a3 3 0 00-2.1-2.1C19.4 4 12 4 12 4s-7.4 0-9.4.4A3 3 0 00.5 6.5C.1 8.5.1 12 .1 12s0 3.5.4 5.5a3 3 0 002.1 2.1c2 .4 9.4.4 9.4.4s7.4 0 9.4-.4a3 3 0 002.1-2.1c.4-2 .4-5.5.4-5.5s0-3.5-.4-5.5zM9.6 15.6V8.4l6.4 3.6-6.4 3.6z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- ───── Right: form ───── --}}
            @php
                $servicesList    = config('service_pages');
                $oldContactSvcs  = (array) old('services', []);
                $contactSuccess  = session('enquiry.success') && old('source') === 'contact_page';
                $contactErrors   = $errors->any() && old('source') === 'contact_page';
            @endphp

            <form method="POST" action="{{ route('enquiry.store') }}" class="reveal">
                @csrf
                <input type="hidden" name="source" value="contact_page">

                <h2 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">CONTACT US</h2>

                @if ($contactSuccess)
                    <div class="mt-8 flex items-start gap-3 rounded-2xl bg-primary-500/10 px-5 py-4 text-sm text-ink-500">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        <span>{{ session('enquiry.success') }}</span>
                    </div>
                @endif

                @if ($contactErrors)
                    <p class="mt-8 rounded-2xl bg-red-50 px-5 py-4 text-sm text-red-700">
                        Please check the highlighted fields and try again.
                    </p>
                @endif

                <div class="mt-8 grid gap-6 sm:grid-cols-2 md:mt-12">
                    <label class="block">
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">FIRST NAME *</span>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First name" required
                               class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none @error('first_name') ring-2 ring-red-400 @enderror">
                    </label>
                    <label class="block">
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">LAST NAME</span>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last name"
                               class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none">
                    </label>
                    <label class="block">
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">EMAIL *</span>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required
                               class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none @error('email') ring-2 ring-red-400 @enderror">
                    </label>
                    <label class="block">
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">PHONE</span>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone number"
                               class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none">
                    </label>
                    <label class="block sm:col-span-2">
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">COMPANY NAME</span>
                        <input type="text" name="company" value="{{ old('company') }}" placeholder="Company or Organization name"
                               class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none">
                    </label>
                </div>

                <fieldset class="mt-6">
                    <legend class="mb-2 text-xs font-semibold tracking-wide text-ink-500">SERVICES OF INTEREST</legend>
                    <p class="mb-3 text-xs text-ink-300">Select all that apply.</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($servicesList as $slug => $svc)
                            <label class="cursor-pointer">
                                <input
                                    type="checkbox"
                                    name="services[]"
                                    value="{{ $slug }}"
                                    class="peer sr-only"
                                    @checked(in_array($slug, $oldContactSvcs, true))
                                >
                                <span class="inline-flex select-none items-center rounded-full border border-ink-100/70 bg-white px-4 py-2 text-sm font-medium text-ink-400 transition-all hover:border-ink-300 peer-checked:border-primary-500 peer-checked:bg-primary-500/10 peer-checked:text-primary-600 peer-checked:shadow-[0_0_0_1px_var(--color-primary-500)]">
                                    {{ $svc['title'] }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                    @error('services')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </fieldset>

                <label class="mt-6 block">
                    <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">EVENT DETAILS</span>
                    <textarea name="message" rows="6"
                              class="block w-full rounded-2xl bg-ink-50 px-5 py-4 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none">{{ old('message') }}</textarea>
                </label>

                <div class="mt-10 flex justify-center md:mt-12">
                    <x-btn class="w-full max-w-sm px-8 text-base font-semibold uppercase tracking-wide sm:w-auto sm:px-12">Submit Request</x-btn>
                </div>
            </form>
        </div>
    </x-section>

    <x-section pad="none" class="pb-24 md:pb-32">
        <div class="reveal">
            <div class="mb-6 flex flex-wrap items-end justify-between gap-4 md:mb-10">
                <div>
                    <p class="eyebrow text-ink-300">Find us</p>
                    <h2 class="mt-2 heading-md">Visit our <span class="text-primary-500">office</span>.</h2>
                </div>
                <a href="https://www.google.com/maps/dir/?api=1&destination=VMD+Promotion+and+Events,+J-81,+Raj+Nagar-1,+Palam+Colony,+New+Delhi+110045&destination_place_id=ChIJ0bFtzmMbDTkR8Xfz0WYOixU"
                   target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 rounded-full bg-ink-500 px-5 py-2.5 text-sm font-semibold text-white transition-all hover:-translate-y-0.5 hover:bg-ink-400">
                    Get directions
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 17L17 7M9 7h8v8"/>
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 md:grid-cols-12 md:gap-8">
                <div class="surface-card md:col-span-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.045366585969!2d77.0926898!3d28.598415799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b63ce6db1d1%3A0x158b0ee618d377f1!2sVMD%20Promotion%20and%20Events!5e0!3m2!1sen!2sin!4v1778090401564!5m2!1sen!2sin"
                        title="VMD Promotion and Events location map"
                        class="block w-full"
                        style="border:0; height:480px;"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="surface-card flex flex-col justify-between gap-6 bg-ink-500 p-6 text-white md:col-span-4 md:p-8">
                    <div>
                        <p class="text-xs font-semibold tracking-[0.25em] text-primary-500">HEAD OFFICE</p>
                        <p class="mt-4 text-base leading-relaxed text-white/80">
                            J-81, Raj Nagar-1,<br>
                            Old Mehrauli Road,<br>
                            Near Arya Samaj Mandir,<br>
                            Palam Colony,<br>
                            New Delhi – 110045
                        </p>
                    </div>

                    <div class="space-y-3 border-t border-white/10 pt-6">
                        <a href="tel:+919540908009" class="flex items-center gap-3 text-sm text-white/90 transition-colors hover:text-primary-500">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </span>
                            +91 95409 08009
                        </a>
                        <a href="mailto:Dipender@vmdevents.com" class="flex items-center gap-3 text-sm text-white/90 transition-colors hover:text-primary-500">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>
                                </svg>
                            </span>
                            Dipender@vmdevents.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-section>
@endsection

