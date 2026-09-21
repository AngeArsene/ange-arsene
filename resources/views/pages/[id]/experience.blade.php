<?php
use App\Support\Portfolio;
use function Laravel\Folio\name;
name('portfolio.experience');
?>
@php
    $locale = $id;
    $portfolio = Portfolio::page($locale, 'experience');
    extract($portfolio);
    $metaTitle = $locale === 'fr' ? 'Expérience — Ange Arsène' : 'Experience — Ange Arsène';
    $metaDescription = $content['experience_heading'];
@endphp
<x-layouts.portfolio :locale="$locale" :content="$content" :page="$page" :meta-title="$metaTitle" :meta-description="$metaDescription">
    <section class="mx-auto max-w-7xl px-6 pb-20 pt-32 sm:px-10 lg:px-16 lg:pt-40"><x-eyebrow>{{ $content['experience_label'] }}</x-eyebrow><h1 class="display-type max-w-4xl text-5xl leading-tight text-paper sm:text-7xl">{{ $content['experience_heading'] }}</h1></section>
    <section class="mx-auto max-w-5xl px-6 pb-24 sm:px-10 lg:px-16"><div class="divide-y divide-white/10 border-y border-white/10">@foreach ($experience as $entry)<article class="grid gap-6 py-10 md:grid-cols-[180px_1fr]"><div><p class="text-xs uppercase tracking-[0.16em] text-gold">{{ $entry['period'] }}</p><p class="mt-2 text-sm text-faint">{{ $entry['location'] }}</p></div><div><p class="text-xs uppercase tracking-[0.16em] text-teal">{{ $entry['company'] }}</p><h2 class="display-type mt-2 text-3xl text-paper">{{ $entry['role'] }}</h2><p class="mt-4 max-w-2xl leading-7 text-muted">{{ $entry['summary'] }}</p><div class="mt-5 flex flex-wrap gap-2">@foreach ($entry['technologies'] as $technology)<span class="rounded-full border border-white/10 px-3 py-1 text-[10px] uppercase tracking-[0.12em] text-faint">{{ $technology }}</span>@endforeach</div></div></article>@endforeach</div></section>
</x-layouts.portfolio>
