@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>O MENI</h3>
            <p>Ovde možete pronaći više informacija o meni.</p>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="bg-white shadow-2xl rounded-2xl max-w-4xl w-full flex flex-col md:flex-row items-center overflow-hidden">
            <!-- Sekcija za sliku -->
            <div class="w-full md:w-50">
                <img
                        src="{{asset('assets/images/filip-nova.jpeg')}}"
                        alt="Autor"
                        class="d-block leading-[0]"
                >
            </div>

            <!-- Sekcija za tekst -->
            <div class="w-full md:w-50 p-8 text-center md:text-left flex flex-col justify-center">
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    <strong class="text-2xl">Ja sam Filip,</strong> <br/> Fotograf i videograf sa preko 6+ godina iskustva u ovom prelepom poslu. Kroz svoj rad, trudim se da uhvatim posebne trenutke i stvorim trajne uspomene koje će vam doneti radost, sreću, emocije...
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Fotografijom se bavim pet godina, prenoseći emocije i priče kroz jedinstvene kadrove prilagođene vašim željama i viziji.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Ukoliko tražite stručnog i posvećenog fotografa ili videografa koji će vaše posebne trenutke pretvoriti u nezaboravne uspomene, obratite mi se s poverenjem. Radujem se saradnji sa vama!
                </p>
            </div>
        </div>
    </div>
@endsection
