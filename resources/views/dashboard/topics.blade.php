@extends('layouts.error')
@section('title','Админ панель')


@section('content')
    <div class="mx-auto grid h-full max-w-7xl grid-rows-1 px-5 pt-5 lg:grid-cols-7 xl:px-0">
        <div class="col-span-7">
            @foreach($topics as $key => $topic)
                    <div class="grid items-center border-b-2 px-5 py-3 border-main sm:grid-cols-6">
                        <a href="{{route('forum.topic.show',[$topic->id])}}">
                        <img class="col-span-1 hidden h-16 sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                        </a>
                        <div class="col-span-4 flex flex-col NunitoSans">
                            <div>
                                <p class="text-lg font-extrabold sm:text-2xl">{{$topic->title}}  </p>
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
