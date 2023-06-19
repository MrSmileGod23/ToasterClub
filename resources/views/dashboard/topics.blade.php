@extends('layouts.error')
@section('title','Админ панель')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-7">
            @foreach($topics as $key => $topic)
                    <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                        <a href="{{route('forum.topic.show',[$topic->id])}}">
                        <img class="h-16 col-span-1 hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                        </a>
                        <div class="flex flex-col col-span-4 NunitoSans">
                            <div>
                                <p class="text-lg sm:text-2xl  font-extrabold">{{$topic->title}}  </p>
                                <p class="text-base sm:text-xl">{{$topic->text}}  </p>
                            </div>
                            <div class="flex gap-5 text-base sm:text-xl">
                                <p>Сообщений: {{$topic->answers->count()}}</p>
                            </div>
                        </div>
                        <div class="col-span-10 sm:col-span-1">
                            <form action="{{route('dashboard.topics.destroy',['id'=>$topic->id])}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Удалить</button></form>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
