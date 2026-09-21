<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.[id].index', ['id' => 'en']);
});

Route::post('/{locale}/contact', ContactController::class)
    ->whereIn('locale', ['en', 'fr'])
    ->name('contact.send');

Route::get('/sitemap.xml', function (): Response {
    $urls = collect(['en', 'fr'])->flatMap(fn (string $locale): array => collect(['home', 'about', 'work', 'experience', 'contact'])
        ->map(fn (string $page): string => route('portfolio.'.$page, ['id' => $locale]))
        ->all())->values();

    return response()->view('seo.sitemap', compact('urls'))->header('Content-Type', 'application/xml');
})->name('sitemap');
