@extends('layouts.app')
@section('title',$article->title)

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
    <link rel="stylesheet"   href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
@endpush
@section('content')
    <style>

    </style>
    <div class="mx-auto grid h-full max-w-7xl grid-rows-1 px-5 pt-5 lg:grid-cols-7 xl:px-0">
        <div class="col-span-7">
            <p class="text-base sm:text-2xl md:text-5xl">{{$article->title}}</p>
            <div class="text-sm prose NunitoSans sm:text-xl md:text-2xl lg:prose-xl">{!! $article->text !!}</div>
            <p class="mb-10 text-sm NunitoSans md:text-lg">{{$article->created_at}}</p>
        </div>

{{--        @auth()--}}
{{--            <form action="{{route('forum.answer.store')}}" method="POST" class="col-span-7">--}}
{{--                @csrf--}}
{{--                <input value="{{$article->id}}" hidden name="id">--}}
{{--                <label for="text" class="text-sm md:text-lg">--}}
{{--                    Введите сообщение--}}
{{--                </label>--}}
{{--                <textarea  class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-2 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none" name="text"></textarea>--}}
{{--                @if($errors->has('text'))--}}
{{--                    <div class="absolute mt-1 text-sm text-red-500">{{ $errors->first('text') }}</div>--}}
{{--                @endif--}}
{{--                <button type="submit" class="mt-4 mb-10 rounded-2xl bg-black px-2 py-3 text-sm text-white sm:text-md">Отправить</button>--}}
{{--            </form>--}}
{{--        @endauth--}}

        <div class="col-span-7 mb-12">
            {{ $answers->links('pagination.tailwind') }}
        </div>
        @foreach($answers as $answer)
            <div class="col-span-7">
                <div class="grid grid-cols-12 items-center border-b-2 px-5 py-3 drop-shadow-md border-main">
                    <a href="{{route('profile',['id'=>$answer->user->id])}}" class="col-span-12 md:col-span-2">
                        <div class="text-start">
                            <div>{{$answer->user->login}}</div>
                            @if($answer->user->profile_photo_path)
                                <img class="my-3 hidden h-24 w-32 object-cover object-center sm:block"  src="{{ URL::asset('storage/avatars/'.$answer->user->profile_photo_path)}}"    alt="Not found" />
                            @else
                                <img class="my-3 hidden h-16 sm:block"  src="{{ URL::asset('storage/img/logo.svg')}}"    alt="Not found" />
                            @endif
                            <div class="text-start text-sm NunitoSans">
                                <p>{{$answer->user->city}}</p>
                                <p>{{$answer->user->car}} {{$answer->user->car_body}} {{$answer->user->car_year}}</p>
                            </div>

                        </div>
                    </a>
                    <div class="col-span-12 md:col-span-1">

                    </div>
                    <div class="col-span-12 flex flex-col NunitoSans md:col-span-7">
                        <div>
                            <p class="text-lg font-extrabold sm:text-2xl">  </p>
                            <p class="text-base sm:text-xl"> </p>
                        </div>
                        <div class="my-5 flex gap-5 text-base sm:my-0 sm:text-xl">
                            <pre>{{$answer->text}}</pre>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-2">
                        <div class="text-start text-sm md:text-right md:text-base">
                            {{$answer->created_at}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
