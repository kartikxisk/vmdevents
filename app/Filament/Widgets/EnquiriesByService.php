<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Widgets\ChartWidget;

class EnquiriesByService extends ChartWidget
{
    protected ?string $heading = 'Demand by service';

    protected ?string $description = 'Which services prospects ask about most.';

    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 1;

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $serviceLabels = Enquiry::serviceOptions();

        $counts = collect($serviceLabels)
            ->map(fn (string $label, string $key) => Enquiry::whereJsonContains('services', $key)->count())
            ->filter(fn (int $count) => $count > 0);

        if ($counts->isEmpty()) {
            return [
                'labels' => ['No enquiries yet'],
                'datasets' => [[
                    'data' => [1],
                    'backgroundColor' => ['#e5e7eb'],
                    'borderWidth' => 0,
                ]],
            ];
        }

        return [
            'labels' => $counts->keys()->map(fn ($key) => $serviceLabels[$key] ?? $key)->values()->all(),
            'datasets' => [[
                'label' => 'Enquiries',
                'data' => $counts->values()->all(),
                'backgroundColor' => [
                    '#ffa027',
                    '#f08e10',
                    '#c46e0c',
                    '#9b5710',
                    '#7d4811',
                    '#432505',
                ],
                'borderWidth' => 0,
            ]],
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => ['boxWidth' => 12, 'padding' => 12],
                ],
            ],
            'cutout' => '62%',
        ];
    }
}
