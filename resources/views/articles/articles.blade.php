@extends('layouts.app')
@section('title','Статьи')


@section('content')

    <div class="max-w-7xl pt-5 mx-auto h-auto px-5 xl:px-0">
        @foreach($articles as $article)
            <a href="{{route('article.show',[$article->id])}}">
                <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                    <div class="text-start ">
                        <div>{{$article->user->login}}</div>
                        @if($article->user->profile_photo_path)
                            <img class="w-32 h-24 object-cover object-center my-3 hidden sm:block"  src="{{ URL::asset('storage/avatars/'.$article->user->profile_photo_path)}}"    alt="Not found" />
                        @else
                            <img class="h-16 my-3 hidden sm:block"  src="{{ URL::asset('storage/img/logo.svg')}}"    alt="Not found" />
                        @endif
                        <div class="text-start text-sm NunitoSans">
                            <p>{{$article->user->city}}</p>
                            <p>{{$article->user->car}} {{$article->user->car_body}} {{$article->user->car_year}}</p>
                        </div>

                    </div>
                    <div class="flex flex-col col-span-3 NunitoSans">
                        <div>
                            <p class="text-lg sm:text-2xl  font-extrabold">{{$article->title}}  </p>

                        </div>
                    </div>
                    <div class="hidden sm:flex  h-full col-span-2 text-base sm:text-xl NunitoSans justify-end items-end">
                        {{$article->created_at}}
                    </div>
                </div>
            </a>
        @endforeach
            <div class="col-span-7 mb-12">
                {{ $articles->links('pagination.tailwind') }}
            </div>
    </div>
@endsection
