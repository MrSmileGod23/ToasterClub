@extends('layouts.error')
@section('title','Админ панель')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-auto px-5 xl:px-0">
        <div>
            @isset($users)
                @foreach($users as $user)
                        <div class="px-5 py-3 grid  grid-cols-10 items-center border-b-2 border-main">
                            <a href="{{route('profile',[$user->id])}}">
                            @if($user->profile_photo_path)
                                <img class="w-32 h-24 mx-auto sm:mx-0 object-cover object-center col-span-10 sm:col-span-1 sm:block text-center" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Not found"/>
                            @else
                                <img class="w-32 h-24 mx-auto sm:mx-0  col-span-10 sm:col-span-1 sm:block text-center" src="{{ URL::asset('storage/img/logo.svg')}}" alt="Not found"/>
                            @endif
                            </a>
                            <div class="col-span-10 sm:col-span-1">

                            </div>
                            <div class="flex flex-col col-span-10 text-center sm:text-start sm:col-span-4 NunitoSans">
                                <div>
                                    <p class="text-lg sm:text-2xl  font-extrabold">{{$user->login}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->car}} {{$user->car_body}} {{$user->car_year}}  </p>
                                </div>
                            </div>
                            <div class="flex flex-col col-span-10 text-center sm:text-start sm:col-span-2 NunitoSans">
                                <div>
                                    <p class="text-lg sm:text-2xl  font-extrabold">{{$user->city}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->vk}}</p>
                                </div>
                            </div>
                            <div class="col-span-10 sm:col-span-2">
                                <form action="{{route('dashboard.users.destroy',['id'=>$user->id])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Удалить</button></form>
                            </div>
                        </div>
                @endforeach
                <div class="col-span-7 mb-12">
                    {{ $users->links('pagination.tailwind') }}
                </div>
            @endisset

        </div>
    </div>
@endsection
