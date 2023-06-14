@extends('layouts.app')
@section('title','Редактрование профиля')


@section('content')

    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-cols-5 content-center  px-5 xl:px-0">
        <div class="col-span-1">

        </div>
        <div class="container col-span-3 ">
            <form class="mt-5" action="{{route('profile.create')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="user" class="block text-xl sm:text-4xl font-medium text-black text-center">Редактирование профиля </label>
                    <input hidden name="user" id="user" value="{{$user->id}}">
                </div>

                <div class="mb-6">
                    <label for="login" class="block   text-sm sm:text-2xl  font-medium text-black">Никнейм</label>
                    <input required type="text" name="login" id="login" autocomplete="login" value="{{$user->login}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="car" class="block   text-sm sm:text-2xl  font-medium text-black">Машина</label>
                    <input required type="text" name="car" id="car" autocomplete="car" value="{{$user->car}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="car_year" class="block   text-sm sm:text-2xl  font-medium text-black">Год машины</label>
                    <input required type="text" name="car_year" id="car_year" autocomplete="car_year" value="{{$user->car_year}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="vk" class="block   text-sm sm:text-2xl  font-medium text-black">ВК</label>
                    <input required type="text" name="vk" id="vk" autocomplete="vk" value="{{$user->vk}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="discord" class="block   text-sm sm:text-2xl  font-medium text-black">Дискорд</label>
                    <input required type="text" name="discord" id="discord" autocomplete="discord" value="{{$user->discord}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="occupation" class="block   text-sm sm:text-2xl  font-medium text-black">Интересы</label>
                    <div class="mt-1">
                        <textarea required id="occupation" name="occupation" rows="3" value="{{$user->occupation}}" class="NunitoSans mt-1 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2  sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="flex justify-center">
                    Временно не работает
{{--                    <button class="bg-black text-white px-8 mx-auto text-sm sm:text-xl  rounded-2xl py-3" type="submit">Обновить данные</button>--}}
                </div>
            </form>
        </div>
        <div class="col-span-1">

        </div>
    </div>

@endsection