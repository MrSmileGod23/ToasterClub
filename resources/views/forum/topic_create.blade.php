@extends('layouts.app')
@section('title','Создание темы')


@section('content')

    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 px-5 xl:px-0">
        <div class="container">
            <form class="mt-5" action="{{route('forum.topic.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="category" class="block text-sm sm:text-2xl font-medium text-black">Выбранная категория - {{$subcategory->title}} </label>
                    <input hidden name="category" id="category" value="{{$subcategory->id}}">
                </div>
                <div class="mb-6">
                    <label for="title" class="block   text-sm sm:text-2xl  font-medium text-black">Название темы</label>
                    <input required type="text" name="title" id="title" autocomplete="title" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-6">
                    <label for="text" class="block   text-sm sm:text-2xl  font-medium text-black">Информация</label>
                    <div class="mt-1">
                        <textarea required id="text" name="text" rows="3" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2  sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <button class="bg-black text-white px-8  text-sm sm:text-xl  rounded-2xl py-3" type="submit">Создать</button>
            </form>
        </div>
    </div>

@endsection
