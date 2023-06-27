@extends('layouts.app')
@section('title','Все участники')


@section('content')

    <div class="mx-auto h-auto max-w-7xl px-5 pt-5 xl:px-0">
        <div>
            <form class="grid h-full grid-cols-1 grid-rows-2 justify-between gap-5 p-4 bg-main shadow-header md:grid-cols-5 md:grid-rows-1" method="POST" action="{{route('members.search')}}">
                @csrf
                <input class="h-full rounded-2xl px-4 text-2xl shadow-header NunitoSans md:col-span-4" type="text" name="search"/>
                <button class="rounded-2xl bg-white px-3 py-2 text-2xl text-main shadow-header md:col-span-1">Поиск</button>
            </form>
        </div>
        <div>
            @isset($users)
                @foreach($users as $user)
                    <a href="{{route('profile',[$user->id])}}">
                        <div class="grid grid-cols-10 items-center border-b-2 px-5 py-3 border-main">
                            @if($user->profile_photo_path)
                                <img class="col-span-10 mx-auto h-24 w-32 object-cover object-center text-center sm:col-span-1 sm:mx-0 sm:block" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Not found"/>
                            @else
                                <img class="col-span-10 mx-auto h-24 w-32 text-center sm:col-span-1 sm:mx-0 sm:block" src="{{ URL::asset('storage/img/logo.svg')}}" alt="Not found"/>
                            @endif

                            <div class="col-span-10 sm:col-span-1">

                            </div>
                            <div class="col-span-10 flex flex-col text-center NunitoSans sm:col-span-4 sm:text-start">
                                <div>
                                    <p class="text-lg font-extrabold sm:text-2xl">{{$user->login}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->car}} {{$user->car_body}} {{$user->car_year}}  </p>
                                </div>
                            </div>
                            <div class="col-span-10 flex flex-col text-center NunitoSans sm:col-span-4 sm:text-start">
                                <div>
                                    <p class="text-lg font-extrabold sm:text-2xl">{{$user->city}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->vk}}</p>
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach
                    <div class="col-span-7 mb-12">
                        {{ $users->links('pagination.tailwind') }}
                    </div>
            @endisset

        </div>
    </div>

@endsection
