@extends('layouts.layout')
@section('content')
    <div class="own-container gallery-title">
        <div class="title">
            <h3>OBJAVE</h3>
            <p>Ovde možete pogledati objave galerije "{{ $gallery->name }}".</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">
            @if(count($posts) > 0)
                @foreach ($posts as $post)
                    <a href="#">
                        <div class="image">
                            <div class="overlay-text">{{ strtoupper($post->name) }}</div>
                            <img src="{{asset('assets/images/posts/'. $post->path)}}" alt="{{ $post->name }}"/>
                        </div>
                    </a>
                @endforeach
            @else
                <p class="bg-red-100 text-red-600 border border-red-600 rounded-md p-2 w-100">Za ovu galeriju nema dodatih objava.</p>
            @endif
        </div>
    </div>
@endsection