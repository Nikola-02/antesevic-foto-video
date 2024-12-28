<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendToEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'surname' => 'required|string|min:2',
            'email' => 'required|email',
            'date' => 'required|date',
            'note' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'surname', 'email', 'date', 'note']);

        try {
            Mail::send([], [], function ($message) use ($data) {
                $message->to('tastgg@gmail.com')
                    ->from($data['email'], $data['name'] . ' ' . $data['surname'])
                    ->replyTo($data['email'], $data['name'] . ' ' . $data['surname'])
                    ->subject('Rezervacija datuma')
                    ->html(
                        "<p><strong>Ime:</strong> {$data['name']}</p>
                     <p><strong>Prezime:</strong> {$data['surname']}</p>
                     <p><strong>Email:</strong> {$data['email']}</p>
                     <p><strong>Datum:</strong> {$data['date']}</p>
                     <p><strong>Napomena:</strong> " . nl2br($data['note'] ?? 'Nema napomene') . "</p>"
                    );
            });

            return back()->with('success', 'Vaša poruka je uspešno poslata!');
        } catch (\Exception $e) {
            return back()->with('error', 'Došlo je do greške prilikom slanja poruke. Pokušajte ponovo kasnije.');
        }
    }
}
