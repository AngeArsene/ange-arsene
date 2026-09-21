<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

final class ContactController
{
    public function __invoke(Request $request, string $locale): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::raw($validated['message'], function (Message $mail) use ($validated): void {
            $mail->to('nkenmandenga@gmail.com')
                ->replyTo(new Address($validated['email'], $validated['name']))
                ->subject('Portfolio enquiry from '.$validated['name']);
        });

        return to_route('portfolio.contact', ['locale' => $locale])
            ->with('status', $locale === 'fr' ? 'Merci. Votre message a bien été envoyé.' : 'Thank you. Your message has been sent.');
    }
}
