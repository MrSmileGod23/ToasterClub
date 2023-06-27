@extends('layouts.app')
@section('title','Статьи')


@section('content')

    <div class="mx-auto h-auto max-w-7xl px-5 pt-5 xl:px-0">
        @foreach($articles as $article)
            <a href="{{route('article.show',[$article->id])}}">
                <div class="grid items-center border-b-2 px-5 py-3 border-main sm:grid-cols-6">
                    <div class="text-start">
                        <div>{{$article->user->login}}</div>
                        @if($article->user->profile_photo_path)
                            <img class="my-3 hidden h-24 w-32 object-cover object-center sm:block"  src="{{ URL::asset('storage/avatars/'.$article->user->profile_photo_path)}}"    alt="Not found" />
                        @else
                            <img class="my-3 hidden h-16 sm:block"  src="{{ URL::asset('storage/img/logo.svg')}}"    alt="Not found" />
                        @endif
                        <div class="text-start text-sm NunitoSans">
                            <p>{{$article->user->city}}</p>
                            <p>{{$article->user->car}} {{$article->user->car_body}} {{$article->user->car_year}}</p>
                        </div>

                    </div>
                    <div class="col-span-3 flex flex-col NunitoSans">
                        <div>
                            <p class="text-lg font-extrabold sm:text-2xl">{{$article->title}}  </p>

                        </div>
                    </div>
                    <div class="col-span-2 hidden h-full items-end justify-end text-base NunitoSans sm:flex sm:text-xl">
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
