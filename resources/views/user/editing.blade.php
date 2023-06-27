@extends('layouts.app')
@section('title','Редактрование профиля')


@section('content')

    <div class="mx-auto grid h-full max-w-7xl grid-cols-5 content-center px-5 pt-5 xl:px-0">
        <div class="col-span-1 hidden sm:block">

        </div>
        <div class="container col-span-5 sm:col-span-3">
            <form class="mt-5" action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="user" class="block text-center text-xl font-medium text-black sm:text-4xl">Редактирование профиля </label>
                    <input hidden name="user" id="user" value="{{$user->id}}">
                </div>

                <div class="mb-6">
                    <label for="profile_photo_path" class="block text-sm font-medium text-black sm:text-2xl">Аватар</label>
                    <input  type="file" name="profile_photo_path" id="profile_photo_path" autocomplete="profile_photo_path" value="{{$user->profile_photo_path}}" class="mt-2 file:mr-4 block w-full file:rounded-full file:border-0 file:px-4 file:py-2 text-sm file:text-sm file:font-semibold file:text-black text-gray-500 file:bg-main hover:file:bg-amber-500">
                </div>

                <div class="mb-6">
                    <label for="car" class="block text-sm font-medium text-black sm:text-2xl">Машина</label>
                    <input  type="text" name="car" id="car" autocomplete="car" value="{{$user->car}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="car_year" class="block text-sm font-medium text-black sm:text-2xl">Год машины</label>
                    <input  type="text" name="car_year" id="car_year" autocomplete="car_year" value="{{$user->car_year}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="city" class="block text-sm font-medium text-black sm:text-2xl">Город</label>
                    <input  type="text" name="city" id="city" autocomplete="city" value="{{$user->city}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="birth_date" class="block text-sm font-medium text-black sm:text-2xl">День рождения</label>
                    <input  type="date" name="birth_date" id="birth_date" autocomplete="birth_date" value="{{$user->birth_date}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="vk" class="block text-sm font-medium text-black sm:text-2xl">ВК</label>
                    <input  type="text" name="vk" id="vk" autocomplete="vk" value="{{$user->vk}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="discord" class="block text-sm font-medium text-black sm:text-2xl">Дискорд</label>
                    <input  type="text" name="discord" id="discord" autocomplete="discord" value="{{$user->discord}}" class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:text-sm sm:leading-6">
                </div>

                <div class="mb-6">
                    <label for="occupation" class="block text-sm font-medium text-black sm:text-2xl">Интересы</label>
                    <div class="mt-1">
                        <textarea  id="occupation" name="occupation" rows="3"class="mt-1 block w-full rounded-md border-0 p-2 placeholder:text-gray-400 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 NunitoSans focus:ring-2 sm:py-1.5 sm:text-sm sm:leading-6">{{$user->occupation}}</textarea>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="mx-auto rounded-2xl bg-black px-8 py-3 text-sm text-white sm:text-xl" type="submit">Обновить данные</button>
                </div>
            </form>
        </div>
        <div class="col-span-1 hidden sm:block">

        </div>
    </div>

@endsection
