{{-- ───── Enquiry modal ─────
     Native <dialog> element for built-in focus trap, Escape handling,
     and accessible modality. Triggered by [data-enquiry-open] anywhere.
     Auto-opens if the previous request flashed errors or success against
     the modal source so users don't lose their submission state.
--}}
@php
    $services       = config('service_pages');
    $errors         = $errors ?? new \Illuminate\Support\ViewErrorBag;
    $hasErrors      = $errors->any() && old('source') === 'modal';
    $modalSuccess   = session('enquiry.success') && old('source') === 'modal';
    $oldServices    = (array) old('services', []);
    $autoOpen       = $hasErrors || $modalSuccess;
@endphp

<dialog
    id="enquiry-modal"
    data-enquiry-modal
    aria-labelledby="enquiry-modal-title"
    class="enquiry-dialog max-w-2xl w-[calc(100%-2rem)] m-auto rounded-card bg-white p-0 shadow-2xl backdrop:bg-black/70 backdrop:backdrop-blur-sm"
>
    <div data-enquiry-panel class="relative">
        {{-- Close button --}}
        <button
            type="button"
            data-enquiry-close
            aria-label="Close"
            class="absolute top-4 right-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-ink-50 text-ink-500 transition-colors hover:bg-ink-100/40"
        >
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                <path d="M6 6l12 12M6 18L18 6"/>
            </svg>
        </button>

        <div class="max-h-[85vh] overflow-y-auto">
            <div class="bg-black px-6 py-8 text-white sm:px-10 sm:py-10">
                <p class="eyebrow mb-2 text-primary-500">Enquiry</p>
                <h2 id="enquiry-modal-title" class="text-3xl font-semibold tracking-tight sm:text-4xl">
                    Tell us about your project.
                </h2>
                <p class="mt-3 max-w-md text-sm text-white/70">
                    Share the brief — we'll respond within one business day with next steps.
                </p>
            </div>

            @if ($modalSuccess)
                <div class="px-6 py-10 text-center sm:px-10 sm:py-12">
                    <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-full bg-primary-500/15 text-primary-600">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Thanks — message received.</h3>
                    <p class="mx-auto mt-3 max-w-sm text-sm text-ink-300">
                        {{ session('enquiry.success') }}
                    </p>
                    <button type="button" data-enquiry-close class="btn btn-sm btn-primary mt-8">Close</button>
                </div>
            @else
                <form method="POST" action="{{ route('enquiry.store') }}" class="px-6 py-8 sm:px-10 sm:py-10">
                    @csrf
                    <input type="hidden" name="source" value="modal">

                    @if ($hasErrors)
                        <p class="mb-6 rounded-2xl bg-red-50 px-5 py-4 text-sm text-red-700">
                            Please check the highlighted fields and try again.
                        </p>
                    @endif

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">FIRST NAME *</span>
                            <input
                                type="text" name="first_name" value="{{ old('first_name') }}" required
                                class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none @error('first_name') ring-2 ring-red-400 @enderror"
                            >
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">LAST NAME</span>
                            <input
                                type="text" name="last_name" value="{{ old('last_name') }}"
                                class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none"
                            >
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">EMAIL *</span>
                            <input
                                type="email" name="email" value="{{ old('email') }}" required
                                class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none @error('email') ring-2 ring-red-400 @enderror"
                            >
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">PHONE</span>
                            <input
                                type="tel" name="phone" value="{{ old('phone') }}"
                                class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none"
                            >
                        </label>
                        <label class="block sm:col-span-2">
                            <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">COMPANY</span>
                            <input
                                type="text" name="company" value="{{ old('company') }}"
                                class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none"
                            >
                        </label>
                    </div>

                    <fieldset class="mt-6">
                        <legend class="mb-2 text-xs font-semibold tracking-wide text-ink-500">SERVICES OF INTEREST</legend>
                        <p class="mb-3 text-xs text-ink-300">Select all that apply.</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($services as $slug => $svc)
                                <label class="cursor-pointer">
                                    <input
                                        type="checkbox"
                                        name="services[]"
                                        value="{{ $slug }}"
                                        class="peer sr-only"
                                        @checked(in_array($slug, $oldServices, true))
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
                        <span class="mb-2 block text-xs font-semibold tracking-wide text-ink-500">MESSAGE</span>
                        <textarea
                            name="message" rows="4"
                            class="block w-full rounded-2xl bg-ink-50 px-5 py-3.5 text-base text-ink-500 transition-colors placeholder:text-ink-200 focus:bg-white focus:shadow-[0_0_0_2px_var(--color-primary-500)] focus:outline-none"
                            placeholder="Tell us about the brief, dates, and audience."
                        >{{ old('message') }}</textarea>
                    </label>

                    <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                        <button type="button" data-enquiry-close class="btn btn-sm rounded-full px-6 py-3 text-sm font-medium text-ink-400 hover:text-ink-500">
                            Cancel
                        </button>
                        <x-btn>
                            Send Enquiry
                            <x-icon-arrow class="h-4 w-4" />
                        </x-btn>
                    </div>
                </form>
            @endif
        </div>
    </div>
</dialog>

@push('scripts')
    <script>
        (() => {
            const modal = document.querySelector('[data-enquiry-modal]');
            if (!modal) return;
            const panel = modal.querySelector('[data-enquiry-panel]');

            const open = () => {
                if (typeof modal.showModal === 'function') {
                    modal.showModal();
                } else {
                    modal.setAttribute('open', '');
                }
                document.body.style.overflow = 'hidden';
            };
            const close = () => {
                if (typeof modal.close === 'function') {
                    modal.close();
                } else {
                    modal.removeAttribute('open');
                }
                document.body.style.overflow = '';
            };

            document.querySelectorAll('[data-enquiry-open]').forEach(el => {
                el.addEventListener('click', (e) => { e.preventDefault(); open(); });
            });

            modal.querySelectorAll('[data-enquiry-close]').forEach(el => {
                el.addEventListener('click', close);
            });

            // Backdrop click closes (clicks on the dialog element itself, not the panel inside).
            modal.addEventListener('click', (e) => {
                if (!panel.contains(e.target)) close();
            });

            // Native dialog dispatches `close` on Escape — sync our scroll lock.
            modal.addEventListener('close', () => { document.body.style.overflow = ''; });

            @if ($autoOpen)
                open();
            @endif
        })();
    </script>
@endpush
