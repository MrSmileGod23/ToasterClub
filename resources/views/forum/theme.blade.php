@extends('layouts.app')
@section('title',$theme->title)


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-7">
            <p class="text-4xl md:text-5xl pb-10">{{$theme->title}}</p>

        </div>
    </div>
@endsection
