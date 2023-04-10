<div class="bg-main h-48">
    <div class="max-w-7xl mx-auto flex items-center justify-between ">
        <div>
            <img class="mx-auto" src="{{ URL::asset('storage/img/logo.svg') }}" />
        </div>
        <div class="text-right">
            <p class="text-8xl">ToasterClub</p>
            <p class="text-4xl">Российский клуб владельцев тостеров</p>
        </div>
    </div>
</div>
<div class="bg-main h-20 shadow-nav">
    <div class="max-w-7xl mx-auto h-full">
        <nav class="h-full text-2xl w-full flex justify-between">
                <ul class="h-full flex items-center gap-5 ">
                    <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Главная</a></li>
                    <li class="nav-item {{ Request::path() ==  '/forum' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Форум</a></li>
                    <li class="nav-item {{ Request::path() ==  '/articles' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Статьи</a></li>
                    <li class="nav-item {{ Request::path() ==  '/gallery' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Галлерея</a></li>
                    <li class="nav-item {{ Request::path() ==  '/market' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Барахолка</a></li>
                    <li class="nav-item {{ Request::path() ==  '/members' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Участники</a></li>
                </ul>
            <div class="h-full flex justify-between gap-5 py-3.5">
                <button class="bg-white px-5 rounded-2xl">Войти</button>
                <button class="bg-black text-white px-5 rounded-2xl">Регистрация</button>
            </div>
        </nav>
    </div>
</div>
@if(Request::is('/'))

@else
    <div class="bg-white h-16">
        <div class="max-w-7xl mx-auto h-full">
            <nav class="h-full text-xl w-full flex justify-between">
                <ul class="h-full flex items-center gap-5 ">

                    @if(Request::is('/forum'))
                        <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Создать статью</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    @endif

