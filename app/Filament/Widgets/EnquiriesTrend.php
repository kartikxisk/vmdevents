<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Widgets\ChartWidget;

class EnquiriesTrend extends ChartWidget
{
    protected ?string $heading = 'Enquiry volume — last 30 days';

    protected ?string $description = 'Daily inbound enquiries from the public site.';

    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = 1;

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $days = 30;
        $start = now()->subDays($days - 1)->startOfDay();

        $rows = Enquiry::where('created_at', '>=', $start)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as count')
            ->groupBy('day')
            ->pluck('count', 'day');

        $labels = [];
        $values = [];

        foreach (range(0, $days - 1) as $offset) {
            $date = $start->copy()->addDays($offset);
            $labels[] = $date->format('d M');
            $values[] = (int) ($rows[$date->toDateString()] ?? 0);
        }

        return [
            'labels' => $labels,
            'datasets' => [[
                'label' => 'Enquiries',
                'data' => $values,
                'borderColor' => '#ffa027',
                'backgroundColor' => 'rgba(255, 160, 39, 0.18)',
                'fill' => true,
                'tension' => 0.35,
                'pointBackgroundColor' => '#f08e10',
                'pointRadius' => 3,
            ]],
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => ['legend' => ['display' => false]],
            'scales' => [
                'y' => ['beginAtZero' => true, 'ticks' => ['precision' => 0]],
            ],
        ];
    }
}
