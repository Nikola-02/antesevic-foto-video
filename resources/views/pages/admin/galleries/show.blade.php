@extends('layouts.admin-layout')
@section('content')

    <div class="categories-admin">
        <div class="title-and-button d-flex align-content-center gap-3 mt-3 mb-5">
            <h3 class="text-2xl fw-bolder">{{ $gallery->name }} (galerija) - slike</h3>
            <a href="/admin/galleries/create" class="btn btn-primary">Dodaj galeriju</a>
        </div>

        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-5">
                    <div class="gallery-posts grid grid-cols-3 gap-4">
                        <div class="add-post-img-div max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <i class="ti ti-plus"></i>
                                <img class="rounded-t-lg" src="{{asset('assets/images/' . 'first-post.jpg')}}" alt="" />
                            </a>
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