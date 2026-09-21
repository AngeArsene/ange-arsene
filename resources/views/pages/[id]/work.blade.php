<?php
use App\Support\Portfolio;
use function Laravel\Folio\name;
name('portfolio.work');
?>
@php
    $locale = $id;
    $portfolio = Portfolio::page($locale, 'work');
    extract($portfolio);
    $metaTitle = $locale === 'fr' ? 'Projets — Ange Arsène' : 'Selected Work — Ange Arsène';
    $metaDescription = $content['work_heading'];
@endphp
<x-layouts.portfolio :locale="$locale" :content="$content" :page="$page" :meta-title="$metaTitle" :meta-description="$metaDescription">
    <section class="mx-auto max-w-7xl px-6 pb-20 pt-32 sm:px-10 lg:px-16 lg:pt-40"><x-eyebrow>{{ $content['work_label'] }}</x-eyebrow><h1 class="display-type max-w-4xl text-5xl leading-tight text-paper sm:text-7xl">{{ $content['work_heading'] }}</h1><div class="mt-8 flex flex-wrap gap-2" role="group" aria-label="Filter selected work">
        @foreach (['All', 'Websites', 'Full-Stack Apps', 'Packages'] as $category)
            <button type="button" data-project-filter="{{ $category }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}" class="rounded-full border px-4 py-2 text-xs font-semibold transition {{ $loop->first ? 'border-gold bg-gold text-ink' : 'border-white/10 text-muted hover:border-gold hover:text-gold' }}">{{ $category }}</button>
        @endforeach
    </div></section>
    <section class="mx-auto grid max-w-7xl gap-x-8 gap-y-14 px-6 pb-24 sm:px-10 md:grid-cols-2 lg:grid-cols-3 lg:px-16">@foreach ($projects as $project)<x-project-card :project="$project" />@endforeach</section>
</x-layouts.portfolio>
