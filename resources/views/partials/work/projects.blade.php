{{-- ───── Our Work — project sections ─────
     Each section is anchorable (id), has an eyebrow, a lede,
     and a view-all link to the matching service page.
--}}
@foreach ($sections as $section)
    <x-section id="{{ $section['id'] ?? null }}" pad="normal" class="pt-0!">
        <div class="reveal mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between md:mb-14">
            <div class="max-w-2xl">
                @if (! empty($section['eyebrow']))
                    <p class="eyebrow mb-3 text-ink-300">{{ $section['eyebrow'] }}</p>
                @endif
                <h2 class="heading-md">{{ $section['title'] }}</h2>
                @if (! empty($section['lede']))
                    <p class="mt-3 text-base text-ink-300">{{ $section['lede'] }}</p>
                @endif
            </div>
            <div class="flex shrink-0 items-center gap-3 text-sm text-ink-300">
                <span class="rounded-full border border-ink-100/60 px-3 py-1 text-xs font-medium text-ink-300">
                    {{ count($section['projects']) }} projects
                </span>
                <a href="{{ route('contact') }}" class="font-medium text-ink-500 underline-offset-4 hover:text-primary-600 hover:underline">
                    Brief us →
                </a>
            </div>
        </div>

        <div class="reveal-stagger grid gap-6 md:grid-cols-2">
            @foreach ($section['projects'] as $project)
                <x-project-card
                    :title="$project['title']"
                    :image="$project['image']"
                />
            @endforeach
        </div>
    </x-section>
@endforeach
