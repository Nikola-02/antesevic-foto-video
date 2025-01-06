@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>REZERVIŠI DATUM</h3>
            <p>Ovde me možete kontaktirati putem forme i izabrati željeni datum</p>
        </div>
    </div>
    <div class="contact-content">
        <div class="own-container content-grid">
            <form action="{{ route('contact.sendToEmail') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md space-y-5 w-full max-w-2xl mx-auto">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-medium text-base mb-2">Ime *</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" value="dhuaiw" placeholder="Unesite ime" required/>
                </div>
                <div>
                    <label for="surname" class="block text-gray-700 font-medium text-base mb-2">Prezime *</label>
                    <input type="text" id="surname" name="surname" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" value="dhuaiw" placeholder="Unesite prezime" required/>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium text-base mb-2">Email *</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" value="tastgg@gmail.com" placeholder="Unesite email adresu" required email/>
                    <span class="block text-sm text-gray-500 mt-1">
                        Unesite email u ispravnom formatu (primer: antesevic@gmail.com).
                    </span>
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-medium text-base mb-2">Broj telefona *</label>
                    <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" value="012436712" placeholder="Unesite broj telefona" required/>
                </div>
                <div>
                    <label for="date" class="block text-gray-700 font-medium text-base mb-2">Željeni datum *</label>
                    <input type="date" id="date" name="date" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" value="2024-10-10" required/>
                    <span class="block text-sm text-gray-500 mt-1">
                        Unesite željeni datum rezervacije.
                    </span>
                </div>
                <div>
                    <label for="note" class="block text-gray-700 font-medium text-base mb-2">Napomena</label>
                    <textarea id="note" name="note" class="w-full border border-gray-300 rounded-md p-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Dodajte napomenu ili pitanje" rows="4">Napomena</textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white font-medium px-6 py-3 text-base rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Rezerviši
                    </button>
                    <span class="block text-sm text-gray-500 mt-2">
                        Sva polja označena sa * su obavezna.
                    </span>
                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection