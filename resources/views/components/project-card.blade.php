<article data-project-card data-project-category="{{ $project['category_key'] }}" class="group border-b border-white/10 pb-6">
    <div class="relative aspect-[4/3] overflow-hidden rounded-[14px] border border-white/10 bg-surface">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(201,162,75,.4),transparent_35%),linear-gradient(135deg,#1b1f25,#0a0c0f)] transition duration-500 group-hover:scale-105"></div>
        <span class="absolute left-4 top-4 rounded-full bg-gold px-3 py-1 text-[10px] font-bold uppercase tracking-[0.15em] text-ink">No. {{ $project['number'] }}</span>
        <span class="absolute bottom-4 left-4 text-[10px] uppercase tracking-[0.18em] text-teal">{{ $project['category'] }}</span>
    </div>
    <div class="pt-5">
        <h3 class="display-type text-2xl text-paper">{{ $project['title'] }}</h3>
        <p class="mt-2 max-w-sm text-sm leading-6 text-muted">{{ $project['description'] }}</p>
        <div class="mt-4 flex flex-wrap gap-2">
            @foreach ($project['tags'] as $tag)
                <span class="rounded-full border border-white/10 px-2.5 py-1 text-[10px] uppercase tracking-[0.12em] text-faint">{{ $tag }}</span>
            @endforeach
        </div>
        @if ($project['url'])
            <a href="{{ $project['url'] }}" target="_blank" rel="noreferrer" class="mt-5 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.15em] text-gold hover:text-gold-light">{{ $content['open_project'] ?? 'Open project' }} <span>↗</span></a>
        @endif
    </div>
</article>
