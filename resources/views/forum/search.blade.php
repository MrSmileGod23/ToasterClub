@extends('layouts.app')
@section('title','Поиск темы')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-auto px-5 xl:px-0">
        <div>
            <form class="bg-main grid grid-rows-2 grid-cols-1 md:grid-rows-1 md:grid-cols-5 gap-5 h-full justify-between p-4 shadow-header" method="POST" action="{{route('forum.search.store')}}">
                @csrf
                <input class="rounded-2xl shadow-header h-full md:col-span-4 px-4 text-2xl NunitoSans" type="text" name="search"/>
                <button class="bg-white text-main shadow-header px-3 py-2 rounded-2xl text-2xl md:col-span-1">Поиск</button>
            </form>
        </div>
        <div>
            @isset($topics)
            @foreach($topics as $topic)
                <a href="{{route('forum.topic.show',[$topic->id])}}">
                    <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                        <img class="h-16 col-span-1 hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                        <div class="flex flex-col col-span-3 NunitoSans">
                            <div>
                                <p class="text-lg sm:text-2xl  font-extrabold">{{$topic->title}}  </p>
                                <p class="text-base sm:text-xl">{{$topic->text}}  </p>
                            </div>
                        </div>
                        <div class="hidden sm:flex  h-full col-span-2 text-base sm:text-xl NunitoSans justify-end items-end">
                            {{$topic->created_at}}
                        </div>

                    </div>
                </a>
            @endforeach
            @endisset

        </div>
    </div>
@endsection
