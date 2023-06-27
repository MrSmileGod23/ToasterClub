@extends('layouts.app')
@section('title',$subcategory->title)


@section('content')
    <div class="mx-auto grid h-full max-w-7xl grid-rows-1 px-5 pt-5 lg:grid-cols-7 xl:px-0">
        <div class="col-span-7">
            <p class="pb-10 text-4xl md:text-5xl">{{$subcategory->title}}</p>
            @foreach($topics as $key => $topic)
            <a href="{{route('forum.topic.show',[$topic->id])}}">
                <div class="grid items-center border-b-2 px-5 py-3 border-main sm:grid-cols-6">
                    <img class="col-span-1 hidden h-16 sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                    <div class="col-span-3 flex flex-col NunitoSans">
                        <div>
                            <p class="text-lg font-extrabold sm:text-2xl">{{$topic->title}}  </p>
                            <p class="text-base sm:text-xl">{{$topic->text}}  </p>
                        </div>
                        <div class="flex gap-5 text-base sm:text-xl">
                            <p>Сообщений: {{$topic->answers->count()}}</p>
                        </div>
                    </div>
                    <div class="col-span-2 hidden h-full items-end justify-end text-base NunitoSans sm:flex sm:text-xl">
                        {{$topic->created_at}}
                    </div>

                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
