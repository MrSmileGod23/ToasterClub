<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="91e37e8dd4622c35" />
    <meta name="keywords" content="toasterclub, форум тостеров, toyotabb, bB forum, вопрос по toyota bB, сходки toyota bB, тостеры, форум , авто" />
    <link rel="icon" href="{{  URL::asset('storage/img/logo.svg') }}"  type="image/x-icon">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <style>
        @font-face {
            font-family: 'MultiroundPro';
            font-style: normal;
            font-weight: 900;
            src: url('{{  URL::asset('storage/fonts/MultiroundPro.otf') }}');
        }
        @font-face {
            font-family: 'Nunito Sans';

            src: url('{{  URL::asset('storage/fonts/NunitoSans-Regular.ttf') }}');
        }
        body{
            font-family: "MultiroundPro";
        }
    </style>
</head>
<body class="h-screen antialiased" >
<div class="grid h-full w-full grid-cols-1 lg:grid-cols-2">
    <div class="flex hidden justify-center bg-main lg:flex">
        <a class="flex" href="{{ route('/') }}">
            <div class="flex flex-col justify-center gap-20">
                <div class="flex flex-col gap-4 text-center">
                    <p class="text-6xl">TOASTERCLUB</p>
                    <p class="text-4xl">Российский клуб владельцев тостеров</p>
                </div>
                <img class="mx-auto" src="{{ URL::asset('storage/img/LogoAuth.svg') }}" />
            </div>
        </a>
    </div>
    <div class="flex flex-col items-center justify-center py-2 bg-layout sm:py-0">
                <p class="mb-4 text-4xl text-main sm:text-6xl">@yield('title')</p>
        <p class="mb-5 flex text-center text-xl text-black sm:text-3xl lg:hidden">  <a class="flex" href="{{ route('/') }}">Вернуться назад</a></p>
                <form method="POST"  action=" {{ Request::path() ==  'login' ? route('login.store') : route('register.store') }}">
                    @csrf
                    @yield('content')
                    <button class="flex mx-auto bg-main text-white mt-10 @if(Request::path() ==  'login') px-28 sm:px-36  @else px-16 sm:px-30 @endif xl:px-40 py-2 shadow-button text-xl sm:text-4xl rounded-xl border-4 border-white "> @yield('title') </button>
                </form>
    </div>
</div>


</body>
</html>
