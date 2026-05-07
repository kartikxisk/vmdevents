<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'services',
        'message',
        'source',
        'status',
        'notes',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'services' => 'array',
    ];

    public const SOURCES = [
        'contact_page' => 'Contact Page',
        'modal'        => 'Header Modal',
    ];

    public const STATUSES = [
        'new'         => 'New',
        'in_progress' => 'In Progress',
        'won'         => 'Won',
        'lost'        => 'Lost',
        'spam'        => 'Spam',
    ];

    public static function serviceOptions(): array
    {
        return collect(config('service_pages'))
            ->map(fn ($p) => $p['title'])
            ->toArray();
    }

    protected function fullName(): Attribute
    {
        return Attribute::get(fn () => trim($this->first_name . ' ' . $this->last_name));
    }
}
