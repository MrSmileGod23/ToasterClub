<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


                    }
                }
            }
        }
    </script>

        <style>
        @font-face {
            font-family: 'MultiroundPro';
            font-style: normal;
            font-weight: 900;
            src: url('{{  URL::asset('storage/fonts/MultiroundPro.otf') }}');
        }
        body{
           font-family: "MultiroundPro";
        }
    </style>
</head>
<body class="antialiased bg-layout">


    @include('components.header')




</body>
</html>
