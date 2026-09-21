<?php
use App\Support\Portfolio;
use function Laravel\Folio\name;
name('portfolio.contact');
?>
@php
    $locale = $id;
    $portfolio = Portfolio::page($locale, 'contact');
    extract($portfolio);
    $metaTitle = 'Contact — Ange Arsène';
    $metaDescription = $content['contact_body'];
@endphp
<x-layouts.portfolio :locale="$locale" :content="$content" :page="$page" :meta-title="$metaTitle" :meta-description="$metaDescription">
    <section class="mx-auto max-w-7xl px-6 pb-20 pt-32 sm:px-10 lg:px-16 lg:pt-40"><div class="grid gap-16 lg:grid-cols-[.8fr_1.2fr]"><div><x-eyebrow>{{ $content['contact_label'] }}</x-eyebrow><h1 class="display-type text-5xl leading-tight text-paper sm:text-7xl">{{ $content['contact_heading'] }}</h1><p class="mt-8 max-w-md leading-8 text-muted">{{ $content['contact_body'] }}</p><a href="mailto:nkenmandenga@gmail.com" class="mt-8 inline-block text-lg text-gold underline decoration-gold/30 underline-offset-8">nkenmandenga@gmail.com</a></div><form method="POST" action="{{ route('contact.send', ['locale' => $locale]) }}" class="space-y-8">@csrf<div><label for="name" class="text-xs uppercase tracking-[0.16em] text-faint">{{ $content['name'] }}</label><input id="name" name="name" value="{{ old('name') }}" required class="mt-3 w-full border-0 border-b border-white/15 bg-transparent px-0 py-3 text-paper outline-none ring-0 placeholder:text-faint focus:border-gold" /></div><div><label for="email" class="text-xs uppercase tracking-[0.16em] text-faint">{{ $content['email'] }}</label><input id="email" type="email" name="email" value="{{ old('email') }}" required class="mt-3 w-full border-0 border-b border-white/15 bg-transparent px-0 py-3 text-paper outline-none ring-0 placeholder:text-faint focus:border-gold" /></div><div><label for="message" class="text-xs uppercase tracking-[0.16em] text-faint">{{ $content['message'] }}</label><textarea id="message" name="message" rows="4" required class="mt-3 w-full resize-y border-0 border-b border-white/15 bg-transparent px-0 py-3 text-paper outline-none ring-0 placeholder:text-faint focus:border-gold">{{ old('message') }}</textarea></div><button type="submit" class="rounded-full bg-gold px-6 py-3 text-sm font-semibold text-ink hover:bg-gold-light">{{ $content['send_message'] }} <span class="ml-2">↗</span></button>@if (session('status'))<p class="text-sm text-gold">{{ session('status') }}</p>@endif @if ($errors->any())<p class="text-sm text-danger">{{ $errors->first() }}</p>@endif</form></div></section>
</x-layouts.portfolio>
