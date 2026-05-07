@extends('layouts.app')

@section('title', 'Terms of Use — VMD Events')
@section('description', 'Terms governing your use of vmdevents.com and the services provided by VMD Promotion & Events.')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Terms of Use', 'item' => route('terms')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    <x-section pad="lg" class="pt-28 md:pt-40">
        <div class="mx-auto max-w-3xl">
            <p class="eyebrow mb-3 text-ink-300">Legal</p>
            <h1 class="heading-lg">Terms of Use</h1>
            <p class="mt-3 text-sm text-ink-300">Last updated: {{ now()->format('F Y') }}</p>

            <div class="mt-10 space-y-8 text-base leading-relaxed text-ink-400">
                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Acceptance</h2>
                    <p>By accessing vmdevents.com you agree to these Terms. If you do not agree, please do not use the website.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Use of the site</h2>
                    <p>The content on this site is provided for information about VMD Promotion &amp; Events and our services. You may not use the site to (a) misrepresent your identity, (b) attempt to gain unauthorised access, (c) introduce malware, or (d) scrape content for republication without permission.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Intellectual property</h2>
                    <p>All text, graphics, photographs, logos and trademarks on this site are owned by VMD Promotion &amp; Events or used with permission of their owners. Reproduction without prior written consent is prohibited.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Enquiries are not contracts</h2>
                    <p>Submitting an enquiry through the website does not create a binding contract. Any engagement is governed by a separate written agreement, statement of work or purchase order signed by both parties.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Limitation of liability</h2>
                    <p>The site is provided on an "as is" basis. To the maximum extent permitted by applicable law, VMD is not liable for any indirect, incidental or consequential losses arising from your use of the site.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Governing law</h2>
                    <p>These Terms are governed by the laws of India. Any dispute is subject to the exclusive jurisdiction of the courts at New Delhi.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Contact</h2>
                    <p>For questions about these Terms, write to <a href="mailto:Dipender@vmdevents.com" class="underline hover:text-ink-500">Dipender@vmdevents.com</a>.</p>
                </section>
            </div>
        </div>
    </x-section>
@endsection
