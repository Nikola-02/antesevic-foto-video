@extends('layouts.admin-layout')
@section('content')

    <div class="categories-admin">
        <div class="title-and-button d-flex align-content-center gap-3 mt-3 mb-2">
            <h3 class="text-2xl fw-bolder">{{ $gallery->name }} (galerija) - slike</h3>
            <a href="/admin/galleries/create" class="btn btn-primary">Dodaj galeriju</a>
        </div>

        <div class="col-lg-12 d-flex align-items-stretch pt-4">
            <div class="card w-100 shadow">
                <div class="card-body p-5">
                    <label class="block mb-2 text-sm font-medium text-gray font-semibold" for="posts">Izaberi fajlove</label>
                    <div class="add-posts-and-sort flex align-items-center justify-content-between mb-5">
                        <div class="add-posts-input w-50">
                            <div class="upload-files-buttons flex align-items-center gap-4">
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="posts[]" id="posts" type="file" multiple/>
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </div>

                        </div>
                        <div class="sort-ddl">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="btn btn-primary text-white hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Sortiraj po: <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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
{{--                        <div class="add-post-img-div max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">--}}
{{--                            <form method="post">--}}

{{--                                <i class="ti ti-plus"></i>--}}
{{--                                <img class="rounded-t-lg" src="{{asset('assets/images/' . 'first-post.jpg')}}" alt="" />--}}
{{--                            </form>--}}
{{--                        </div>--}}

                        <div class="shadow-xl max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>

                            <div class="flex items-center p-3 justify-between">
                                <div class="title-post flex flex-wrap">
                                    <p class="mr-2 font-semibold">Created at:</p>
                                    <p>10/05/2020 18:30:55</p>
                                </div>

                                <div class="buttons-post flex items-center gap-2">
                                    <span class="border-bottom-0">
                                    <form action="/admin/categories/2" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </span>
                                </div>

                            </div>

                        </div>

                        <div class="shadow-xl max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>

                            <div class="flex items-center p-3 justify-between">
                                <div class="title-post flex flex-wrap">
                                    <p class="mr-2 font-semibold">Created at:</p>
                                    <p>10/05/2020 18:30:55</p>
                                </div>

                                <div class="buttons-post flex items-center gap-2">
                                    <span class="border-bottom-0">
                                    <form action="/admin/categories/2" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </span>
                                </div>

                            </div>

                        </div>

                        <div class="shadow-xl max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>

                            <div class="flex items-center p-3 justify-between">
                                <div class="title-post flex flex-wrap">
                                    <p class="mr-2 font-semibold">Created at:</p>
                                    <p>10/05/2020 18:30:55</p>
                                </div>

                                <div class="buttons-post flex items-center gap-2">
                                    <span class="border-bottom-0">
                                    <form action="/admin/categories/2" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </span>
                                </div>

                            </div>

                        </div>

                        <div class="shadow-xl max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>

                            <div class="flex items-center p-3 justify-between">
                                <div class="title-post flex flex-wrap">
                                    <p class="mr-2 font-semibold">Created at:</p>
                                    <p>10/05/2020 18:30:55</p>
                                </div>

                                <div class="buttons-post flex items-center gap-2">
                                    <span class="border-bottom-0">
                                    <form action="/admin/categories/2" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </span>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection