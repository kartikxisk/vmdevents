@extends('layouts.app')

@section('title', 'Privacy Policy — VMD Events')
@section('description', 'How VMD Events collects, uses and protects the personal information shared via our enquiry forms and email.')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',           'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Privacy Policy', 'item' => route('privacy')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    <x-section pad="lg" class="pt-28 md:pt-40">
        <div class="mx-auto max-w-3xl">
            <p class="eyebrow mb-3 text-ink-300">Legal</p>
            <h1 class="heading-lg">Privacy Policy</h1>
            <p class="mt-3 text-sm text-ink-300">Last updated: {{ now()->format('F Y') }}</p>

            <div class="mt-10 space-y-8 text-base leading-relaxed text-ink-400">
                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Who we are</h2>
                    <p>VMD Promotion &amp; Events ("VMD", "we", "us") operates this website at vmdevents.com and provides brand promotion, events, artist management, manpower and fabrication services across India. Our registered office is at RZ-121B, Raj Nagar-1, Street No. 4, Palam Colony, New Delhi – 110045.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Information we collect</h2>
                    <p>When you submit an enquiry through our contact form, we collect your name, email address, phone number, company name, the services you're interested in and any details you provide in the message field. We also collect basic technical information (IP address, browser type, pages visited) for analytics and security.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">How we use your information</h2>
                    <ul class="list-disc space-y-2 pl-5">
                        <li>To respond to your enquiry and prepare a brief or quotation.</li>
                        <li>To send service-related communications about your project.</li>
                        <li>To improve the website and our services through aggregate analytics.</li>
                        <li>To comply with legal obligations under applicable Indian law including the Digital Personal Data Protection Act, 2023.</li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Sharing</h2>
                    <p>We do not sell personal information. We share data only with vetted service providers (e.g. email and hosting infrastructure) under contractual confidentiality obligations, or where required by law.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Your rights</h2>
                    <p>You may request access to, correction of, or deletion of your personal information by emailing us at <a href="mailto:Dipender@vmdevents.com" class="underline hover:text-ink-500">Dipender@vmdevents.com</a>. We will respond within a reasonable time as required by applicable law.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Retention</h2>
                    <p>Enquiry data is retained for as long as needed to evaluate and respond to your request and for our legitimate business records, after which it is deleted or anonymised.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-3 text-ink-500">Contact</h2>
                    <p>Questions about this policy? Write to <a href="mailto:Dipender@vmdevents.com" class="underline hover:text-ink-500">Dipender@vmdevents.com</a> or call +91 95409 08009.</p>
                </section>
            </div>
        </div>
    </x-section>
@endsection
