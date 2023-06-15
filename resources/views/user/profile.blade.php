@extends('layouts.app')
@section('title','Профиль')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-cols-5 px-5 xl:px-0">
        <div class=" col-span-5   ">
            <p class="text-2xl md:text-4xl pb-10">Профиль</p>
            <div class="grid grid-cols-8">
                <div class="col-span-2 shadow  p-5 bg-gray-100 flex flex-col gap-3">
                    <img class="flex w-56 mx-auto h-48 shadow rounded" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Изображение отсутствует">
                    <p>Никнейм : <span class="NunitoSans">{{$user->login}}</span></p>
                    <p>Машина : <span class="NunitoSans">{{$user->car}} {{$user->car_year}} г.</span> </p>
                    <p>Email : <span class="NunitoSans">{{$user->email}}</span></p>
                    <p>День рождения : <span class="NunitoSans">{{$user->birth_date}}</span></p>
                    <p>Город : <span class="NunitoSans">{{$user->city}}</span></p>
                    <p>VK : <span class="NunitoSans"><a href="{{$user->vk}}">{{$user->vk}}</a></span> </p>
                    <p>discord : <span class="NunitoSans">{{$user->discord}}</span> </p>
                    @if($user->is($current_user))
                    <a class="bg-black text-white px-5 py-2 rounded-2xl text-center" href="{{route('profile.create')}}">Редактировать</a>
                    @endif
                </div>
                <div class="col-span-6 text-center px-14">
                    Темы пользователя
                    @foreach($topics as $topic)
                        <a href="{{route('forum.topic.show',[$topic->id])}}">
                            <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                                <img class="h-16 col-span-1 hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                                <div class="flex flex-col col-span-3 NunitoSans">
                                    <div>
                                        <p class="text-lg sm:text-2xl  font-extrabold">{{$topic->title}}  </p>
                                    </div>
                                </div>
                                <div class="hidden sm:flex  h-full col-span-2 text-base sm:text-xl NunitoSans justify-end items-end">
                                    {{$topic->created_at}}
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="col-span-7 mb-12">
                        {{ $topics->links('pagination.tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
