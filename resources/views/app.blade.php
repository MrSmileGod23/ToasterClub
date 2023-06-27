<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="91e37e8dd4622c35" />
    <meta name="keywords" content="toasterclub, форум тостеров, toyotabb, bB forum, вопрос по toyota bB, сходки toyota bB, тостеры, форум , авто" />
    <link rel="icon" href="{{  URL::asset('storage/img/logo.svg') }}"  type="image/x-icon">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
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
    </style>
</head>
<body class="antialiased bg-layout ">
@inertia
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
