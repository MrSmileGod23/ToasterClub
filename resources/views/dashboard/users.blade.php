@extends('layouts.error')
@section('title','Админ панель')


@section('content')
    <div class="mx-auto h-auto max-w-7xl px-5 pt-5 xl:px-0">
        <div>
            @isset($users)
                @foreach($users as $user)
                        <div class="grid grid-cols-10 items-center border-b-2 px-5 py-3 border-main">
                            <a href="{{route('profile',[$user->id])}}">
                            @if($user->profile_photo_path)
                                <img class="col-span-10 mx-auto h-24 w-32 object-cover object-center text-center sm:col-span-1 sm:mx-0 sm:block" src="{{ URL::asset('storage/avatars/'.$user->profile_photo_path) }}" alt="Not found"/>
                            @else
                                <img class="col-span-10 mx-auto h-24 w-32 text-center sm:col-span-1 sm:mx-0 sm:block" src="{{ URL::asset('storage/img/logo.svg')}}" alt="Not found"/>
                            @endif
                            </a>
                            <div class="col-span-10 sm:col-span-1">

                            </div>
                            <div class="col-span-10 flex flex-col text-center NunitoSans sm:col-span-4 sm:text-start">
                                <div>
                                    <p class="text-lg font-extrabold sm:text-2xl">{{$user->login}}  </p>
                                    <p class="text-base sm:text-xl">{{$user->car}} {{$user->car_body}} {{$user->car_year}}  </p>
                                </div>
                            </div>
                            <div class="col-span-10 flex flex-col text-center NunitoSans sm:col-span-2 sm:text-start">
                                <div>
                                    <p class="text-lg font-extrabold sm:text-2xl">{{$user->city}}  </p>
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
