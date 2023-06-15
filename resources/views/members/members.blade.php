@extends('layouts.app')
@section('title','Все участники')


@section('content')

    <div class="max-w-7xl pt-5 mx-auto h-auto px-5 xl:px-0">
        <div>
            <form class="bg-main grid grid-rows-2 grid-cols-1 md:grid-rows-1 md:grid-cols-5 gap-5 h-full justify-between p-4 shadow-header" method="POST" action="{{route('members.search')}}">
                @csrf
                <input class="rounded-2xl shadow-header h-full md:col-span-4 px-4 text-2xl NunitoSans" type="text" name="search"/>
                <button class="bg-white text-main shadow-header px-3 py-2 rounded-2xl text-2xl md:col-span-1">Поиск</button>
            </form>
        </div>
        <div>
            @isset($users)
                @foreach($users as $user)
                    <a href="{{route('profile',[$user->id])}}">
                        <div class="px-5 py-3 grid  sm:grid-cols-10 items-center border-b-2 border-main">
                            <img class="h-16 col-span-1 sm:block text-center" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Not found"/>
                            <div class="col-span-1">

                            </div>
                            <div class="flex flex-col col-span-4 NunitoSans">
                                <div>
                                    <p class="text-lg sm:text-2xl  font-extrabold">{{$user->login}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->car}} {{$user->car_body}} {{$user->car_year}}  </p>
                                </div>
                            </div>
                            <div class="flex flex-col col-span-4 NunitoSans">
                                <div>
                                    <p class="text-lg sm:text-2xl  font-extrabold">{{$user->city}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->vk}}</p>
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach
            @endisset

        </div>
    </div>

@endsection
