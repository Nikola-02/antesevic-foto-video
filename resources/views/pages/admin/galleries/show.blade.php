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
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>
                        </div>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{asset('assets/images/galleries/' . '1721772383_mic-6127818_1280.jpg')}}" alt="" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection