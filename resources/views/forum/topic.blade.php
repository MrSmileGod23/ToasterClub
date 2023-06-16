@extends('layouts.app')
@section('title',$topic->title)


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-7">
            <p class="text-base sm:text-lg md:text-xl mb-5"><a href="{{route('forum.topics.all',['id'=>$topic->subcategory->id])}}">{{$topic->subcategory->title}}</a></p>
            <p class="text-base sm:text-2xl md:text-5xl ">{{$topic->title}}</p>
            <p class="text-sm sm:text-xl md:text-2xl NunitoSans ">{{$topic->text}}</p>
            <p class="text-sm md:text-lg mb-10 NunitoSans ">{{$topic->created_at}}</p>
        </div>

        @auth()
            <form action="{{route('forum.answer.store')}}" method="POST" class="col-span-7">
                @csrf
                    <input value="{{$topic->id}}" hidden name="id">
                    <label for="text" class="text-sm md:text-lg">
                      Введите сообщение
                    </label>
                    <textarea  class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="text"></textarea>
                    @if($errors->has('text'))
                        <div class="text-red-500 text-sm mt-1 absolute">{{ $errors->first('text') }}</div>
                    @endif
                    <button type="submit" class="mt-4 bg-black text-white px-2  text-sm sm:text-md  rounded-2xl mb-10  py-3">Отправить</button>
            </form>
        @endauth

        <div class="col-span-7 mb-12">
            {{ $answers->links('pagination.tailwind') }}
        </div>
        @foreach($answers as $answer)
        <div class="col-span-7">
            <div class="px-5 py-3  grid grid-cols-12 items-center border-b-2 border-main drop-shadow-md">
                <a href="{{route('profile',['id'=>$answer->user->id])}}" class="col-span-12 md:col-span-2">
                <div class="text-start ">
                    <div>{{$answer->user->login}}</div>
                    @if($answer->user->profile_photo_path)
                        <img class="w-32 h-24 object-cover object-center my-3 hidden sm:block"  src="{{ URL::asset('storage/avatars/'.$answer->user->profile_photo_path)}}"    alt="Not found" />
                    @else
                        <img class="h-16 my-3 hidden sm:block"  src="{{ URL::asset('storage/img/logo.svg')}}"    alt="Not found" />
                    @endif
                    <div class="text-start text-sm NunitoSans">
                        <p>{{$answer->user->city}}</p>
                        <p>{{$answer->user->car}} {{$answer->user->car_body}} {{$answer->user->car_year}}</p>
                    </div>

                </div>
                </a>
                <div class="col-span-12 md:col-span-1">

                </div>
                <div class="flex flex-col NunitoSans col-span-12 md:col-span-7">
                    <div>
                        <p class="text-lg sm:text-2xl  font-extrabold">  </p>
                        <p class="text-base sm:text-xl"> </p>
                    </div>
                    <div class="flex gap-5 my-5 sm:my-0 text-base sm:text-xl">
                        <pre>{{$answer->text}}</pre>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-2">
                    <div class="text-sm text-start md:text-right md:text-base">
                        {{$answer->created_at}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
