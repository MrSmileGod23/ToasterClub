@extends('layouts.app')
@section('title','Профиль')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-cols-5 px-5 xl:px-0">
        <div class=" col-span-5   ">
            <p class="text-2xl md:text-4xl pb-10">Профиль</p>
            <div class="grid grid-cols-8">
                <div class="col-span-2 shadow  p-5 bg-gray-100 flex flex-col gap-3">
                    <img class="flex w-56 mx-auto h-48 shadow rounded" src="" alt="Изображение отсутствует">
                    <p>Никнейм : <span class="NunitoSans">{{$user->login}}</span></p>
                    <p>Машина : <span class="NunitoSans">{{$user->car}} {{$user->car_year}} г.</span> </p>
                    <p>Email : <span class="NunitoSans">{{$user->email}}</span></p>
                    <p>VK : <span class="NunitoSans">{{$user->vk}}</span> </p>
                    <p>discord : <span class="NunitoSans">{{$user->discord}}</span> </p>
                </div>
                <div class="col-span-4">

                </div>
                @if($user->is($current_user))
                <div class="col-span-2 shadow  p-5 bg-gray-100 flex flex-col">
                    <p class="text-xl md:text-2xl pb-10">Действия</p>
                    <a class="bg-black text-white px-5 py-2 rounded-2xl" href="{{route('profile.create')}}">Редактировать</a>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
