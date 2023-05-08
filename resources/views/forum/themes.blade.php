@extends('layouts.app')
@section('title',$subcategory->title)


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-7">
            <p class="text-4xl md:text-5xl pb-10">{{$subcategory->title}}</p>
            @foreach($themes as $key => $theme)
            <a href="{{route('forum.theme.get',[$theme->id])}}">
                <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                    <img class="h-16 col-span-1 hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                    <div class="flex flex-col col-span-3 NunitoSans">
                        <div>
                            <p class="text-lg sm:text-2xl  font-extrabold">{{$theme->title}}  </p>
                            <p class="text-base sm:text-xl">{{$theme->text}}  </p>
                        </div>
                        <div class="flex gap-5 text-base sm:text-xl">
                            <p>Сообщений:</p>
                        </div>
                    </div>
                    <div class="hidden sm:flex  h-full col-span-2 text-base sm:text-xl NunitoSans justify-end items-end">
                        {{$theme->created_at}}
                    </div>

                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
