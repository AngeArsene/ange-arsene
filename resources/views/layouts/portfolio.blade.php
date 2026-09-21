@php
    $locale = $locale ?? 'en';
    $content = $content ?? [];
    $page = $page ?? 'home';
    $routePath = fn (string $target, ?string $targetLocale = null): string => route('portfolio.'.$target, ['id' => $targetLocale ?? $locale]);
    $oppositeLocale = $locale === 'fr' ? 'en' : 'fr';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? $content['intro'] }}">
    <meta property="og:title" content="{{ $metaTitle ?? 'Ange Arsène — Full-Stack Engineer' }}">
    <meta property="og:description" content="{{ $metaDescription ?? $content['intro'] }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en" href="{{ $routePath($page, 'en') }}">
    <link rel="alternate" hreflang="fr" href="{{ $routePath($page, 'fr') }}">
    <title>{{ $metaTitle ?? 'Ange Arsène — Full-Stack Engineer' }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen overflow-x-hidden">
    <aside class="fixed inset-y-0 left-0 z-40 hidden w-[var(--rail-width)] flex-col items-center justify-between border-r border-white/10 bg-[#0a0c0f]/95 py-7 backdrop-blur-md md:flex" aria-label="Primary navigation">
        <div class="flex flex-col items-center gap-10">
            <a href="{{ $routePath('home') }}" class="flex h-11 w-11 items-center justify-center rounded-full border border-gold/60 text-sm font-semibold text-gold" aria-label="Ange Arsène home">AA</a>
            <nav class="flex flex-col items-center gap-3">
                @foreach ([['home', '⌂', $content['home_label']], ['about', '◌', $content['about_label']], ['work', '◈', $content['work_label']], ['experience', '↗', $content['experience_label']], ['contact', '✦', $content['contact_label']]] as [$target, $icon, $label])
                    <a href="{{ $routePath($target) }}" class="flex h-11 w-11 items-center justify-center rounded-full border {{ $page === $target ? 'border-gold bg-gold text-ink' : 'border-transparent text-muted hover:border-white/15 hover:text-gold' }} text-lg transition" aria-label="{{ $label }}" @if ($page === $target) aria-current="page" @endif>{{ $icon }}</a>
                @endforeach
            </nav>
        </div>
        <div class="flex flex-col items-center gap-3">
            <a href="{{ $routePath($page, $oppositeLocale) }}" class="text-[10px] font-semibold uppercase tracking-[0.2em] text-muted hover:text-gold" aria-label="Switch language to {{ strtoupper($oppositeLocale) }}">{{ strtoupper($oppositeLocale) }}</a>
            <button type="button" data-theme-toggle aria-pressed="false" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-muted hover:border-gold hover:text-gold" aria-label="Toggle theme">☼</button>
        </div>
    </aside>

    <main class="min-h-screen md:pl-[var(--rail-width)]">
        {{ $slot }}
        <footer class="mx-auto max-w-7xl px-6 pb-24 pt-24 sm:px-10 lg:px-16">
            <div class="border-t border-white/10 pt-8">
                <p class="max-w-md text-sm leading-7 text-muted">“{{ $content['footer_quote'] }}”</p>
                <div class="mt-8 overflow-hidden whitespace-nowrap text-[clamp(4rem,13vw,12rem)] font-semibold uppercase leading-none ghost-wordmark">Ange Arsène</div>
                <div class="mt-5 flex flex-wrap items-center justify-between gap-4 text-xs uppercase tracking-[0.18em] text-faint">
                    <span>© {{ date('Y') }} Ange Arsène</span>
                    <span>Douala · Cameroon</span>
                </div>
            </div>
        </footer>
    </main>

    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 sm:bottom-8 sm:right-8" aria-label="Quick contact">
        <a href="https://wa.me/237699512438" class="flex h-12 w-12 items-center justify-center rounded-full bg-gold text-lg text-ink shadow-[0_12px_30px_rgba(0,0,0,.35)]" aria-label="Contact Ange Arsène on WhatsApp">W</a>
        <a href="tel:+237699512438" class="flex h-12 w-12 items-center justify-center rounded-full border border-gold bg-ink text-lg text-gold shadow-[0_12px_30px_rgba(0,0,0,.35)]" aria-label="Call Ange Arsène">☎</a>
    </div>

    <div class="fixed inset-x-4 bottom-4 z-40 flex items-center justify-around rounded-full border border-white/10 bg-surface/95 p-2 backdrop-blur-md md:hidden" aria-label="Mobile navigation">
        @foreach ([['home', '⌂'], ['about', '◌'], ['work', '◈'], ['experience', '↗'], ['contact', '✦']] as [$target, $icon])
            <a href="{{ $routePath($target) }}" class="flex h-10 w-10 items-center justify-center rounded-full {{ $page === $target ? 'bg-gold text-ink' : 'text-muted' }}" aria-label="{{ $target }}">{{ $icon }}</a>
        @endforeach
        <a href="{{ $routePath($page, $oppositeLocale) }}" class="px-2 text-[10px] font-bold text-gold" aria-label="Switch language">{{ strtoupper($oppositeLocale) }}</a>
    </div>
</body>
</html>
