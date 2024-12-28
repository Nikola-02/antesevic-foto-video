@extends('layouts.admin-layout')
@section('content')

    <div class="categories-admin">
        <div class="title-and-button d-flex align-content-center gap-3 mt-3 mb-2">
            <h3 class="text-2xl fw-bolder">Postovi</h3>

{{--            <a href="/admin/galleries/create" class="btn btn-primary">Dodaj galeriju</a>--}}
        </div>
        <div class="gallery-category-titles d-flex gap-5 align-items-center mt-4">
            <h4 class="text-xl ">Galerija: <span class="text-primary">{{ $gallery->name }}</span></h4>
            <h5 class="text-lg  ">Kategorija: <span class="text-primary">{{$gallery->category->name}}</span></h5>
        </div>

        <div class="col-lg-12 d-flex align-items-stretch pt-4">
            <div class="card w-100 shadow">
                <div class="card-body p-5">
                    <label class="block mb-2 text-sm font-medium text-gray font-semibold w-25" for="posts">Izaberi fajlove</label>
                    <div class="add-posts-and-sort flex align-items-center justify-content-between mb-5">
                        <div class="add-posts-input w-50">
                            <div class="upload-files-buttons">
                                <form action="/admin/posts/{{$gallery->id}}" method="post" enctype="multipart/form-data" class="flex align-items-center gap-4">
                                    @csrf
                                    @method('put')
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="posts[]" id="posts" type="file" multiple/>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                                @error('posts')
                                    <p class="text-red-600 text-sm">{{$message}}</p>
                                @enderror
                                @if(session('error'))
                                    <p class="text-red-600 text-sm">{{ session('error') }}</p>
                                @endif
                                @if(session('success'))
                                    <p class="text-green-600 text-sm">{{ session('success') }}</p>
                                @endif
                            </div>

                        </div>
                        <div class="sort-ddl">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="btn btn-primary text-white hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2 text-center inline-flex items-center" type="button">Sortiraj po: <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-500 hover:bg-blue-600 hover:text-white">Najnovije</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-500 hover:bg-blue-600 hover:text-white">Najstarije</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="gallery-posts grid grid-cols-3 gap-4">

{{--                        Staro dodavanje plus u sredini --}}
{{--                        <div class="add-post-img-div max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <form method="post">--}}

{{--                                <i class="ti ti-plus"></i>--}}
{{--                                <img class="rounded-t-lg" src="{{asset('assets/images/' . 'first-post.jpg')}}" alt="" />--}}
{{--                            </form>--}}
{{--                        </div>--}}

                        @foreach($posts as $post)
                            <div class="single-post shadow-xl max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                                <img class="my-3" src="{{asset('assets/images/posts/' . $post->path)}}" alt="{{$post->path}}" />

                                <div class="flex items-center p-3 justify-between border-t border-black-400">
                                    <div class="title-post flex flex-wrap">
                                        <p class="mr-2 font-semibold">Created at:</p>
                                        <p>{{$post->created_at}}</p>
                                    </div>

                                    <div class="buttons-post flex items-center gap-2">
                                    <span class="border-bottom-0">
                                    <form action="/admin/posts/{{$post->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </span>
                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection