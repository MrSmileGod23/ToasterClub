<div class="bg-main h-auto sm:h-48 px-5 xl:px-0">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between ">
        <div>
            <img class="mx-auto" src="{{ URL::asset('storage/img/logo.svg') }}" />
        </div>
        <div class="text-center sm:text-right  py-5 sm:py-0">
            <p class="text-3xl md:text-6xl lg:text-8xl">ToasterClub</p>
            <p class="text-2xl md:text-3xl lg:text-4xl">Российский клуб владельцев тостеров</p>
        </div>
    </div>
</div>
<div class="bg-main h-auto px-5 py-5 shadow-nav block md:hidden ">
    <div class="max-w-7xl mx-auto h-full " x-data="{ mobileMenuOpen : false }">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-8 h-8 rounded-2xl bg-black text-black p-1">
            <svg fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <nav class="h-full text-2xl w-full flex justify-between hidden " :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">
            <div class="h-full text-2xl w-full flex flex-col justify-between ">
            <ul class="h-full flex flex-col items-center gap-5 ">
                <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Главная</a></li>
                <li class="nav-item {{ Request::path() ==  'forum' ? 'underline-bold' : ''  }}"><a href="{{route('forum.index')}}"   class="nav-link">Форум</a></li>
                <li class="nav-item {{ Request::path() ==  'articles' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Статьи</a></li>
                <li class="nav-item {{ Request::path() ==  'gallery' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Галлерея</a></li>
                <li class="nav-item {{ Request::path() ==  'market' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Барахолка</a></li>
                <li class="nav-item {{ Request::path() ==  'members' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Участники</a></li>
            </ul>
            <div class="h-full flex flex-col justify-between text-center gap-5 py-3.5">
                @auth()
                    <button class="bg-black text-white px-5 rounded-2xl"><a href="{{route('/')}}">Профиль</a></button>
                @endauth
                @guest()
                    <a class="bg-white px-5 rounded-2xl flex text-center justify-center items-center" href="{{route('login')}}"><button class="text-center flex justify-center items-center">Войти</button></a>
                    <a class="bg-black text-white px-5 rounded-2xl text-center flex justify-center items-center" href="{{route('register')}}"> <button class="text-center" >Регистрация</button></a>
                @endguest
            </div>
            </div>
        </nav>
    </div>
</div>
<div class="bg-main h-20 shadow-nav hidden md:block">
    <div class="max-w-7xl mx-auto h-full ">
        <nav class="h-full text-sm xl:text-2xl lg:text-lg sm:text-sm w-full flex justify-between px-5 xl:px-0">
                <ul class="h-full flex items-center gap-2 lg:gap-5  ">
                    <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Главная</a></li>
                    <li class="nav-item {{ Request::path() ==  'forum' ? 'underline-bold' : ''  }}"><a href="{{route('forum.index')}}"   class="nav-link">Форум</a></li>
                    <li class="nav-item {{ Request::path() ==  'articles' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Статьи</a></li>
                    <li class="nav-item {{ Request::path() ==  'gallery' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Галлерея</a></li>
                    <li class="nav-item {{ Request::path() ==  'market' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Барахолка</a></li>
                    <li class="nav-item {{ Request::path() ==  'members' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"   class="nav-link">Участники</a></li>
                </ul>
            <div class="h-full flex justify-between gap-5 py-3.5">
                @auth()
                    <button class="bg-black text-white px-5 rounded-2xl"><a href="{{route('/')}}">Профиль</a></button>
                @endauth
                @guest()
                        <a class="bg-white px-5 rounded-2xl flex items-center" href="{{route('login')}}"><button >Войти</button></a>
                        <a class="bg-black text-white px-5 rounded-2xl flex items-center" href="{{route('register')}}"> <button >Регистрация</button></a>
                @endguest
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

                    @if(Request::is('forum'))
                        <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Создать статью</a></li>
                        <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Поиск темы</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    @endif

