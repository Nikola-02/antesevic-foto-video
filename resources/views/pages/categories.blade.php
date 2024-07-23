@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>KATEGORIJE GALERIJE</h3>
            <p>Ovde možete videti i izabrati neku od kategorija mojih projekata.</p>
            <p>Takodje, ovde možete videti za koje me sve prilike možete angažovati.</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">

            @foreach ($categories as $cat)
                <a href="">
                    <div class="image">
                        <div class="overlay-text">{{ strtoupper($cat->name) }}</div>
                        <img src="{{asset('assets/images/categories/'. $cat-> primary_image)}}" alt="{{ $cat->name }}"/></div>
                </a>
            @endforeach
            
            {{-- <a href="">
                <div class="image">
                    <div class="overlay-text">1. ROĐENDANI</div>
                    <img src="{{asset('assets/images/1-birthday.jpg')}}" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">KRŠTENJA</div>
                    <img src="{{asset('assets/images/gallery-category-3.jpg')}}" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">SVADBE</div>
                    <img src="{{asset('assets/images/gallery-category-4.jpg')}}" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">REKLAMNI MATERIJALI</div>
                    <img src="{{asset('assets/images/gallery-category-4.jpg')}}" alt=""/></div>
            </a> --}}
            {{--            <a href="">--}}
            {{--                <div class="image">--}}
            {{--                    <div class="overlay-text">18. ROĐENDANI</div>--}}
            {{--                    <img src="{{asset('assets/images/gallery-category-4.jpg')}}" alt=""/></div>--}}
            {{--            </a>--}}


        </div>
    </div>
@endsection