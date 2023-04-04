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
        body{
           font-family: "MultiroundPro";
        }
    </style>
</head>
<body class="antialiased bg-layout">


    @include('components.header')

    <!-- Yandex.Metrika informer -->
    <a href="https://metrika.yandex.ru/stat/?id=93085342&amp;from=informer"
       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/93085342/3_0_FFCE38FF_FAAE18FF_0_pageviews"
                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="93085342" data-lang="ru" /></a>
    <!-- /Yandex.Metrika informer -->


</body>
</html>
