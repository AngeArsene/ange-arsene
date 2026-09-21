<?php
use App\Support\Portfolio;
use function Laravel\Folio\name;
name('portfolio.about');
?>
@php
    $locale = $id;
    $portfolio = Portfolio::page($locale, 'about');
    extract($portfolio);
    $metaTitle = $locale === 'fr' ? 'À propos — Ange Arsène' : 'About — Ange Arsène';
    $metaDescription = $content['about_body'];
@endphp
<x-layouts.portfolio :locale="$locale" :content="$content" :page="$page" :meta-title="$metaTitle" :meta-description="$metaDescription">
    <section class="mx-auto max-w-7xl px-6 pb-20 pt-32 sm:px-10 lg:px-16 lg:pt-40"><div class="grid gap-12 lg:grid-cols-[.75fr_1.25fr] lg:items-end"><div><x-portrait /></div><div><x-eyebrow>{{ $content['about_label'] }}</x-eyebrow><h1 class="display-type max-w-3xl text-5xl leading-tight text-paper sm:text-7xl">{{ $content['about_heading'] }}</h1><p class="mt-8 max-w-2xl text-lg leading-8 text-muted">{{ $content['about_body'] }}</p></div></div></section>
    <section class="mx-auto max-w-7xl border-t border-white/10 px-6 py-20 sm:px-10 lg:px-16"><div class="grid gap-16 lg:grid-cols-[.7fr_1.3fr]"><div><x-eyebrow>Skills</x-eyebrow><p class="text-sm leading-7 text-muted">A working set of tools shaped by production projects, not a decorative list.</p></div><div class="divide-y divide-white/10">@foreach ($skills as $skill)<div class="flex items-center justify-between gap-6 py-5"><div><p class="text-paper">{{ $skill['name'] }}</p><p class="mt-1 text-xs uppercase tracking-[0.16em] text-faint">{{ $skill['category'] }}</p></div><div class="flex w-1/2 items-center gap-4"><div class="h-px flex-1 bg-white/10"><div class="h-px bg-gold" style="width: {{ $skill['proficiency'] }}%"></div></div><span class="text-xs text-gold">{{ $skill['proficiency'] }}%</span></div></div>@endforeach</div></div></section>
    <section class="mx-auto max-w-7xl px-6 pb-24 sm:px-10 lg:px-16"><div class="grid gap-10 lg:grid-cols-2"><div><x-eyebrow>Education</x-eyebrow><div class="space-y-8">@foreach ($education as $entry)<div class="border-l border-gold/50 pl-5"><p class="text-xs uppercase tracking-[0.16em] text-gold">{{ $entry['period'] }}</p><h2 class="mt-2 text-lg text-paper">{{ $entry['degree'] }}</h2><p class="mt-1 text-sm text-muted">{{ $entry['institution'] }} · {{ $entry['location'] }}</p></div>@endforeach</div></div><div class="flex items-end"><p class="display-type text-4xl leading-tight text-paper sm:text-5xl">PHP, Laravel, WordPress, React, APIs <em class="text-gold">and the details between.</em></p></div></div></section>
</x-layouts.portfolio>
