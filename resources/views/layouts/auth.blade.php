<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="91e37e8dd4622c35" />
    <meta name="keywords" content="toasterclub, форум тостеров, toyotabb, bB forum, вопрос по toyota bB, сходки toyota bB, тостеры, форум , авто" />
    <link rel="icon" href="{{  URL::asset('storage/img/logo.svg') }}"  type="image/x-icon">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'layout' : '#F3F3F3',
                        'main': '#FAAE18'
                    },
                    boxShadow: {
                        'header': '0px 4px 4px rgba(0, 0, 0, 0.25)',
                        'nav': '0px -4px 19px -3px rgba(0, 0, 0, 0.6)',
                        'button':'0px 4px 4px rgba(0, 0, 0, 0.25)',

                    }
                }
            }
        }
    </script>


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93085342, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93085342" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
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

        .underline-bold {
            text-decoration: none;
            position: relative;
        }
        .underline-bold:after {
            position: absolute;
            height: 6px;
            margin: 0 auto;
            content: '';
            left: 0;
            right: 0;
            color: #000;
            background-color: black;
            border-radius: 50px;
            bottom: -4px;
        }
        body::-webkit-scrollbar {
            width: 10px;
        }
        body::-webkit-scrollbar-track {
            background: #F3F3F3;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #FAAE18;
            border: 3px solid #FAAE18;
        }
        .NunitoSans{
            font-family: "Nunito Sans";
        }
    </style>
</head>
<body class="antialiased h-screen " >
<div class="grid grid-cols-1 lg:grid-cols-2 h-full w-full">
    <div class="flex justify-center bg-main  hidden lg:flex">
        <a class="flex" href="{{ route('/') }}">
            <div class="flex flex-col justify-center gap-20">
                <div class="text-center flex flex-col gap-4">
                    <p class="text-6xl">TOASTERCLUB</p>
                    <p class="text-4xl">Российский клуб владельцев тостеров</p>
                </div>
                <img class="mx-auto" src="{{ URL::asset('storage/img/LogoAuth.svg') }}" />
            </div>
        </a>
    </div>
    <div class="flex bg-layout  flex-col justify-center items-center">
                <p class="text-4xl sm:text-6xl text-main mb-10">@yield('title')</p>
        <p class="text-xl sm:text-3xl text-black mb-5 flex text-center lg:hidden ">  <a class="flex" href="{{ route('/') }}">Вернуться назад</a></p>
                <form method="POST" action=" {{ Request::path() ==  'login' ? route('login.store') : route('register.store') }}">
                    @csrf
                    @yield('content')
                    <button class="flex mx-auto bg-main text-white mt-10 px-16 sm:px-30 xl:px-40 py-2 shadow-button text-xl sm:text-4xl rounded-xl border-4 border-white "> @yield('title') </button>
                </form>
    </div>
</div>


</body>
</html>
