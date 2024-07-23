@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>GALERIJE</h3>
            <p>Ovde možete videti i izabrati neku od kategorija mojih projekata.</p>
            <p>Takodje, ovde možete videti za koje me sve prilike možete angažovati.</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">

            <a href="">
                <div class="image">
                    <div class="overlay-text">18. ROĐENDANI</div>
                    <img src="{{asset('assets/images/18-birthday.jpg')}}" alt=""/></div>
            </a>
            <a href="">
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
            </a>
            {{--            <a href="">--}}
            {{--                <div class="image">--}}
            {{--                    <div class="overlay-text">18. ROĐENDANI</div>--}}
            {{--                    <img src="{{asset('assets/images/gallery-category-4.jpg')}}" alt=""/></div>--}}
            {{--            </a>--}}


        </div>
    </div>
@endsection