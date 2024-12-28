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

            @foreach ($galleries as $gal)
                <a href="">
                    <div class="image">
                        <div class="overlay-text">{{ strtoupper($gal->name) }}</div>
                        <img src="{{asset('assets/images/galleries/'. $gal-> primary_image)}}" alt="{{ $gal->name }}"/></div>
                </a>
            @endforeach

        </div>
    </div>
@endsection