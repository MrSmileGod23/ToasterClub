@extends('layouts.app')
@section('title','Поиск темы')


@section('content')

    <div class="mx-auto h-auto max-w-7xl px-5 pt-5 xl:px-0">
        <div>
            <form class="grid h-full grid-cols-1 grid-rows-2 justify-between gap-5 p-4 bg-main shadow-header md:grid-cols-5 md:grid-rows-1" method="POST" action="{{route('forum.search.store')}}">
                @csrf
                <input class="h-full rounded-2xl px-4 text-2xl shadow-header NunitoSans md:col-span-4" type="text" name="search"/>
                <button class="rounded-2xl bg-white px-3 py-2 text-2xl text-main shadow-header md:col-span-1">Поиск</button>
            </form>
        </div>
        <div>
            @isset($topics)
                @foreach($topics as $topic)
                    <a href="{{route('forum.topic.show',[$topic->id])}}">
                        <div class="grid items-center border-b-2 px-5 py-3 border-main sm:grid-cols-6">
                            <img class="col-span-1 hidden h-16 sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                            <div class="col-span-3 flex flex-col NunitoSans">
                                <div>
                                    <p class="text-lg font-extrabold sm:text-2xl">{{$topic->title}}  </p>
                                    <p class="text-base sm:text-xl">{{$topic->text}}  </p>
                                </div>
                            </div>
                            <div class="col-span-2 hidden h-full items-end justify-end text-base NunitoSans sm:flex sm:text-xl">
                                {{$topic->created_at}}
                            </div>

                        </div>
                    </a>
                @endforeach
            @endisset

        </div>
    </div>

@endsection
