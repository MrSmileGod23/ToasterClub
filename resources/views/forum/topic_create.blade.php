@extends('layouts.app')
@section('title','Создание темы')


@section('content')

    <div class="mx-auto grid h-full max-w-7xl grid-rows-1 px-5 pt-5 xl:px-0">
        <div class="container">
            <form class="mt-5" action="{{route('forum.topic.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="category" class="block text-sm font-medium text-black sm:text-2xl">Выбранная категория - {{$subcategory->title}} </label>
                    <input hidden name="category" id="category" value="{{$subcategory->id}}">
                </div>
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-black sm:text-2xl">Название темы</label>
                    <input required type="text" name="title" id="title" autocomplete="title" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-6">
                    <label for="text" class="block text-sm font-medium text-black sm:text-2xl">Информация</label>
                    <div class="mt-1">
                        <textarea required id="text" name="text" rows="3" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <button class="rounded-2xl bg-black px-8 py-3 text-sm text-white sm:text-xl" type="submit">Создать</button>
            </form>
        </div>
    </div>

@endsection
