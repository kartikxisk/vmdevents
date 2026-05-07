<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $serviceSlugs = array_keys(config('service_pages'));
        $sources      = array_keys(Enquiry::SOURCES);

        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name'  => ['nullable', 'string', 'max:120'],
            'email'      => ['required', 'email', 'max:160'],
            'phone'      => ['nullable', 'string', 'max:40'],
            'company'    => ['nullable', 'string', 'max:160'],
            'services'   => ['nullable', 'array'],
            'services.*' => ['string', Rule::in($serviceSlugs)],
            'message'    => ['nullable', 'string', 'max:5000'],
            'source'     => ['required', Rule::in($sources)],
        ]);

        Enquiry::create([
            ...$data,
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        $back = $request->input('source') === 'modal'
            ? (URL::previous() ?: route('home'))
            : route('contact');

        return redirect($back)
            ->with('enquiry.success', 'Thanks — our team will be in touch within one business day.');
    }
}
