@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>GALERIJE</h3>
            <p>Ovde možete pogledati neku od galerija mojih projekata.</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">

            @if(count($galleries) > 0)
            @foreach ($galleries as $gal)
                <a href="{{ route('posts', ['gallery' => $gal->id]) }}">
                    <div class="image">
                        <div class="overlay-text">{{ strtoupper($gal->name) }}</div>
                        <img src="{{asset('assets/images/galleries/'. $gal-> primary_image)}}" alt="{{ $gal->name }}"/></div>
                </a>
            @endforeach
            @else
                <p class="bg-red-100 text-red-600 border border-red-600 rounded-md p-2 w-100">Za ovu kategoriju nema dodatih galerija.</p>
            @endif
        </div>
    </div>
@endsection