@extends('layouts.app')
@section('title',$topic->title)


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-7">
            <p class="text-lg md:text-xl mb-5">{{$topic->subcategory->title}}</p>
            <p class="text-2xl md:text-5xl ">{{$topic->title}}</p>
            <p class="text-xl md:text-2xl NunitoSans ">{{$topic->text}}</p>
            <p class="text-sm md:text-lg mb-10 NunitoSans ">{{$topic->created_at}}</p>
        </div>

        @auth()
            <a class="bg-black text-white px-2  text-sm sm:text-md  rounded-2xl mb-10  py-3" href="{{route('forum.answer.create')}}">Добавить ответ</a>
        @endauth


        @foreach($answers as $answer)
        <div class="col-span-7">
            <div class="px-5 py-3  grid grid-cols-12 items-center border-b-2 border-main drop-shadow-md">
                <div class="text-center col-span-1">
                    <div>{{$answer->user->login}}</div>
                    <img class="h-16 mx-auto  hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                </div>
                <div class="col-span-1">

                </div>
                <div class="flex flex-col NunitoSans col-span-10">
                    <div>
                        <p class="text-lg sm:text-2xl  font-extrabold">  </p>
                        <p class="text-base sm:text-xl"> </p>
                    </div>
                    <div class="flex gap-5 text-base sm:text-xl">
                        <div>{{$answer->text}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
