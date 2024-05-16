@extends('layouts.admin-layout')
@section('content')
    <h2 class="text-2xl fw-bolder text-center mt-8 mb-5">Izmeni kategoriju</h2>

    <form class="max-w-sm mx-auto mb-12" action="/admin/categories/{{$category->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-4">
            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Naziv</label>
            <input type="text" value="{{$category->name}}" id="cat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:!ring-indigo-500 focus:!border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="18. rodjendani" name="name" />
            <p class="mt-2 ml-1">Kategoriju upiši u množini</p>
            @error('name')
                <p class="alert alert-danger mt-3">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Thumbnail slika</label>
            <input name="primary_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file"/>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Dozvoljen format slike: PNG, JPG</p>
            <img class="mt-3 w-75" src="{{asset('assets/images/categories/' . $category->primary_image)}}" alt="{{$category->name}}">
            @error('primary_image')
                <p class="alert alert-danger mt-3">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Izmeni</button>
        @if(session('error'))
            <div class="bg-red-100 border-0 border-solid border-red-300 text-red-700 mt-2 px-3 py-3 rounded" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </form>


@endsection