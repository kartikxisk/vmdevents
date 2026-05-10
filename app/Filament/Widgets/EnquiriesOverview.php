<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EnquiriesOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Enquiry pipeline';

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $now       = now();
        $weekAgo   = $now->copy()->subDays(7);
        $monthAgo  = $now->copy()->subDays(30);

        $total       = Enquiry::count();
        $newCount    = Enquiry::where('status', 'new')->count();
        $inProgress  = Enquiry::where('status', 'in_progress')->count();
        $wonThisMonth = Enquiry::where('status', 'won')->where('updated_at', '>=', $monthAgo)->count();

        $last7d  = Enquiry::where('created_at', '>=', $weekAgo)->count();
        $prev7d  = Enquiry::whereBetween('created_at', [
            $weekAgo->copy()->subDays(7),
            $weekAgo,
        ])->count();

        $delta = match (true) {
            $prev7d === 0 && $last7d > 0 => '+' . $last7d . ' vs last week',
            $prev7d === 0                => 'No prior data',
            default                      => sprintf('%+d%% vs last week', round((($last7d - $prev7d) / $prev7d) * 100)),
        };

        $deltaColor = $last7d >= $prev7d ? 'success' : 'danger';

        return [
            Stat::make('Total enquiries', number_format($total))
                ->description($last7d . ' new this week')
                ->descriptionIcon(Heroicon::ArrowTrendingUp)
                ->color('primary')
                ->chart($this->weeklyTrend()),

            Stat::make('Awaiting reply', number_format($newCount))
                ->description('Status: New')
                ->descriptionIcon(Heroicon::Bell)
                ->color($newCount > 0 ? 'warning' : 'gray'),

            Stat::make('In progress', number_format($inProgress))
                ->description('Currently being handled')
                ->descriptionIcon(Heroicon::ArrowPath)
                ->color('info'),

            Stat::make('Won (last 30d)', number_format($wonThisMonth))
                ->description($delta)
                ->descriptionIcon(Heroicon::Trophy)
                ->color($deltaColor),
        ];
    }

    /**
     * Returns enquiry counts per day for the last 7 days, oldest → newest.
     */
    protected function weeklyTrend(): array
    {
        $start = now()->subDays(6)->startOfDay();

        $rows = Enquiry::where('created_at', '>=', $start)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as count')
            ->groupBy('day')
            ->pluck('count', 'day');

        return collect(range(0, 6))
            ->map(fn (int $offset) => (int) ($rows[$start->copy()->addDays($offset)->toDateString()] ?? 0))
            ->all();
    }
}
