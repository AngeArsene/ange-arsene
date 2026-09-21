<?php
use App\Support\Portfolio;
use function Laravel\Folio\name;

name('portfolio.home');
?>
@php
    $locale = $id;
    $portfolio = Portfolio::page($locale, 'home');
    extract($portfolio);
    $metaTitle = $locale === 'fr' ? 'Ange Arsène — Ingénieur Full-Stack' : 'Ange Arsène — Full-Stack Engineer';
    $metaDescription = $content['intro'];
@endphp

<x-layouts.portfolio :locale="$locale" :content="$content" :page="$page" :meta-title="$metaTitle" :meta-description="$metaDescription">
    <section class="editorial-grid relative flex min-h-[min(820px,100vh)] items-end overflow-hidden px-6 pb-20 pt-32 sm:px-10 lg:px-16">
        <div class="absolute right-[8%] top-20 hidden h-[min(72vh,720px)] w-[min(40vw,480px)] overflow-hidden rounded-[24px] border border-white/10 lg:block">
            <img src="{{ asset('images/portrait-primary.jpg') }}" alt="Portrait of Nken Mandeng Ange Arsène" class="h-full w-full object-cover grayscale opacity-80">
            <div class="absolute inset-0 bg-gradient-to-t from-ink via-transparent to-ink/10"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <x-eyebrow>{{ $content['eyebrow'] }}</x-eyebrow>
            <h1 class="display-type max-w-4xl text-6xl leading-[.96] text-paper sm:text-7xl lg:l-[clamp(5rem,9vw,9rem)]">{{ $content['headline'] }}</h1>
            <p class="mt-8 max-w-xl text-base leading-8 text-muted sm:text-lg">{{ $content['intro'] }}</p>
            <div class="mt-9 flex flex-wrap items-center gap-4">
                <a href="{{ route('portfolio.work', ['id' => $locale]) }}" class="rounded-full bg-gold px-6 py-3 text-sm font-semibold text-ink transition hover:bg-gold-light">{{ $content['view_work'] }} <span class="ml-2">↗</span></a>
                <a href="{{ route('portfolio.contact', ['id' => $locale]) }}" class="rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-paper transition hover:border-gold hover:text-gold">{{ $content['contact_cta'] }}</a>
                <a href="{{ asset('downloads/'.($locale === 'fr' ? 'Ange_Arsene_Resume_FR.pdf' : 'Ange_Arsene_Resume.pdf')) }}" class="text-sm text-muted underline decoration-white/20 underline-offset-8 hover:text-gold">{{ $content['download_resume'] }}</a>
            </div>
        </div>
        <div class="absolute bottom-8 right-8 hidden text-right text-[10px] uppercase tracking-[0.2em] text-faint lg:block">Scroll to explore<br><span class="text-gold">↓</span></div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-12 px-6 py-24 sm:px-10 lg:grid-cols-[.8fr_1.2fr] lg:px-16 lg:py-36">
        <div><x-eyebrow>{{ $content['about_label'] }}</x-eyebrow><p class="text-sm uppercase tracking-[0.18em] text-faint">01 — Perspective</p></div>
        <div><h2 class="display-type max-w-3xl text-4xl leading-tight text-paper sm:text-6xl">{{ $content['about_heading'] }}</h2><p class="mt-7 max-w-2xl text-base leading-8 text-muted">{{ $content['about_body'] }}</p><a href="{{ route('portfolio.about', ['id' => $locale]) }}" class="mt-8 inline-flex text-sm font-semibold text-gold">Read the full profile <span class="ml-2">↗</span></a></div>
    </section>

    <section class="mx-auto max-w-7xl px-6 pb-24 sm:px-10 lg:px-16 lg:pb-36">
        <div class="flex flex-wrap items-end justify-between gap-6"><div><x-eyebrow>{{ $content['work_label'] }}</x-eyebrow><h2 class="display-type text-4xl text-paper sm:text-6xl">{{ $content['work_heading'] }}</h2></div><a href="{{ route('portfolio.work', ['id' => $locale]) }}" class="text-sm font-semibold text-gold">See all work ↗</a></div>
        <div class="mt-12 grid gap-10 md:grid-cols-2 lg:grid-cols-3">@foreach (array_slice($projects, 0, 3) as $project)<x-project-card :project="$project" :content="$content" />@endforeach</div>
    </section>
</x-layouts.portfolio>
