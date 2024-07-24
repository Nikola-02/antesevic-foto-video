@extends('layouts.admin-layout')
@section('content')

    <div class="categories-admin">
        <div class="title-and-button d-flex align-content-center gap-3 mt-3 mb-5">
            <h3 class="text-2xl fw-bolder">Kategorije</h3>
            <a href="/admin/categories/create" class="btn btn-primary">Dodaj kategoriju</a>
        </div>

        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
{{--                    <h5 class="card-title fw-semibold mb-4">Kategorije</h5>--}}
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Thumbnail Image</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Created At</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Edit</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Delete</h6>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $index => $cat)
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$index + 1}}</h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-bold">{{strtoupper($cat->name)}}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><img src="{{asset('assets/images/categories/' . $cat->primary_image)}}" alt="{{$cat->name}}" width="80px"></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{$cat->created_at}}</p>

                                </td>
                                <td class="border-bottom-0">
                                    <a href="/admin/categories/{{$cat->id}}/edit" class="btn btn-primary mb-0"><i class="ti ti-pencil"></i></a>
                                </td>
                                <td class="border-bottom-0">
                                    <form action="/admin/categories/{{$cat->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection