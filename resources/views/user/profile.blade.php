@extends('layouts.app')
@section('title','Профиль')


@section('content')
    <div class="mx-auto grid h-full max-w-7xl grid-cols-5 px-5 pt-5 xl:px-0">
        <div class="col-span-5">
            <p class="pb-10 text-2xl md:text-4xl">Профиль</p>
            <div class="grid grid-cols-9">
                <div class="col-span-9 flex flex-col gap-3 bg-gray-100 p-5 shadow lg:col-span-3">
                    @if($user->profile_photo_path)
                        <img class="mx-auto flex h-48 w-56 rounded object-cover object-center shadow" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Изображение отсутствует">
                    @else
                        <img class="mx-auto flex h-48 w-56 rounded object-cover object-center shadow" src="{{ URL::asset('storage/img/AvatarNotFound.jpg')}}" alt="Изображение отсутствует">
                    @endif
                    <p>Никнейм : <span class="NunitoSans">{{$user->login}}</span></p>
                    <p>Машина : <span class="NunitoSans">{{$user->car}} {{$user->car_year}} г.</span> </p>
                    <p>Email : <span class="NunitoSans">{{$user->email}}</span></p>
                    <p>День рождения : <span class="NunitoSans">{{$user->birth_date}}</span></p>
                    <p>Город : <span class="NunitoSans">{{$user->city}}</span></p>
                    <p>VK : <span class="NunitoSans"><a href="{{$user->vk}}">{{$user->vk}}</a></span> </p>
                    <p>discord : <span class="NunitoSans">{{$user->discord}}</span> </p>
                    @if($user->is($current_user))
                    <a class="rounded-2xl bg-black px-5 py-2 text-center text-white" href="{{route('profile.create')}}">Редактировать</a>
                    <a class="rounded-2xl bg-black px-5 py-2 text-center text-white" href="{{route('logout')}}">Выйти из аккаунта</a>
                    @endif
                </div>
                <div class="col-span-9 mt-8 px-14 text-center lg:col-span-6 lg:mt-0">
                    Темы пользователя
                    @foreach($topics as $topic)
                        <a href="{{route('forum.topic.show',[$topic->id])}}">
                            <div class="grid items-center border-b-2 px-5 py-3 border-main sm:grid-cols-6">
                                <img class="col-span-1 hidden h-16 sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                                <div class="col-span-3 flex flex-col NunitoSans">
                                    <div>
                                        <p class="text-lg font-extrabold sm:text-2xl">{{$topic->title}}  </p>
                                    </div>
                                </div>
                                <div class="col-span-2 hidden h-full items-end justify-end text-base NunitoSans sm:flex sm:text-xl">
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
