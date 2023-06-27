<div class="h-auto px-5 bg-main sm:h-48 xl:px-0">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between sm:flex-row">
        <div>
            <img class="mx-auto" src="{{ URL::asset('storage/img/logo.svg') }}" />
        </div>
        <div class="py-5 text-center sm:py-0 sm:text-right">
            <p class="text-3xl md:text-6xl lg:text-8xl">ToasterClub</p>
            <p class="text-2xl md:text-3xl lg:text-4xl">Российский клуб владельцев тостеров</p>
        </div>
    </div>
</div>
<div class="block h-auto px-5 py-5 bg-main shadow-nav md:hidden">
    <div class="mx-auto h-full max-w-7xl" x-data="{ mobileMenuOpen : false }">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block h-8 w-8 rounded-2xl bg-black p-1 text-black md:hidden">
            <svg fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <nav class="flex hidden h-full w-full justify-between text-2xl" :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">
            <div class="flex h-full w-full flex-col justify-between text-2xl">
            <ul class="flex h-full flex-col items-center gap-5">
                <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Главная</a></li>
                <li class="nav-item {{ Request::path() ==  'forum' ? 'underline-bold' : ''  }}"><a href="{{route('forum.index')}}"   class="nav-link">Форум</a></li>
                <li class="nav-item {{ Request::path() ==  'articles' ? 'underline-bold' : ''  }}"><a href="{{route('articles.index')}}"   class="nav-link">Статьи</a></li>
                <li class="nav-item {{ Request::path() ==  'gallery' ? 'underline-bold' : ''  }}"><a href="{{route('gallery.index')}}"   class="nav-link">Галлерея</a></li>
                <li class="nav-item {{ Request::path() ==  'market' ? 'underline-bold' : ''  }}"><a href="{{route('market.index')}}"   class="nav-link">Барахолка</a></li>
                <li class="nav-item {{ Request::path() ==  'members' ? 'underline-bold' : ''  }}"><a href="{{route('members.index')}}"   class="nav-link">Участники</a></li>
            </ul>
            <div class="flex h-full flex-col justify-between gap-5 text-center py-3.5">
                @auth()
                    <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('profile',['id' => Auth::user()->id])}}">Профиль</a></button>
                    @if(Auth::user()->isAdmin())
                        <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('dashboard.index')}}">Админка</a></button>
                    @endif
                @endauth
                @guest()
                    <a class="flex items-center justify-center rounded-2xl bg-white px-5 text-center" href="{{route('login')}}"><button class="flex items-center justify-center text-center">Войти</button></a>
                    <a class="flex items-center justify-center rounded-2xl bg-black px-5 text-center text-white" href="{{route('register')}}"> <button class="text-center" >Регистрация</button></a>
                @endguest
            </div>
            </div>
        </nav>
    </div>
</div>
<div class="hidden h-20 bg-main shadow-nav md:block">
    <div class="mx-auto h-full max-w-7xl">
        <nav class="flex h-full w-full justify-between px-5 text-sm sm:text-sm lg:text-lg xl:px-0 xl:text-2xl">
                <ul class="flex h-full items-center gap-2 lg:gap-5">
                    <li class="nav-item {{ Request::path() ==  '/' ? 'underline-bold' : ''  }}"><a href="{{route('/')}}"  class="nav-link">Главная</a></li>
                    <li class="nav-item {{ Request::path() ==  'forum' ? 'underline-bold' : ''  }}"><a href="{{route('forum.index')}}"   class="nav-link">Форум</a></li>
                    <li class="nav-item {{ Request::path() ==  'articles' ? 'underline-bold' : ''  }}"><a href="{{route('articles.index')}}"   class="nav-link">Статьи</a></li>
                    <li class="nav-item {{ Request::path() ==  'gallery' ? 'underline-bold' : ''  }}"><a href="{{route('gallery.index')}}"   class="nav-link">Галлерея</a></li>
                    <li class="nav-item {{ Request::path() ==  'market' ? 'underline-bold' : ''  }}"><a href="{{route('market.index')}}"   class="nav-link">Барахолка</a></li>
                    <li class="nav-item {{ Request::path() ==  'members' ? 'underline-bold' : ''  }}"><a href="{{route('members.index')}}"   class="nav-link">Участники</a></li>
                </ul>
            <div class="flex h-full justify-between gap-5 py-3.5">
                @auth()
                    <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('profile',['id' => Auth::user()->id])}}">Профиль</a></button>
                @if(Auth::user()->isAdmin())
                    <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('dashboard.index')}}">Админка</a></button>
                @endif
                @endauth
                @guest()
                        <a class="flex items-center rounded-2xl bg-white px-5" href="{{route('login')}}"><button >Войти</button></a>
                        <a class="flex items-center rounded-2xl bg-black px-5 text-white" href="{{route('register')}}"> <button >Регистрация</button></a>
                @endguest
            </div>
        </nav>
    </div>
</div>
@if(Request::is('/') or Request::is('profile/*') or Request::is('profile')  or Request::is('forum/topic/*') or Request::is('members') or Request::is('forum/topic/create') or Request::is('article/create') or Request::is('articles/article/*') or Request::is('gallery'))

@else
    <div class="h-auto bg-white md:h-16">
        <div class="mx-auto h-full max-w-7xl">
            <nav class="flex h-full w-full justify-center py-3 text-xl md:justify-between md:py-0">
                <ul class="flex h-full flex-col items-center gap-5 px-5 md:flex-row xl:px-0">

                    @if(Request::is('forum') or Request::is('forum/search'))
                        <li class="nav-item {{ Request::path() ==  'forum/search' ? 'underline-bold' : ''  }}"><a href="{{route('forum.search.index')}}"  class="nav-link">Поиск темы</a></li>
                    @endif

                    @if(Request::is('forum/topics/*'))
                        <li class="nav-item {{ Request::path() ==  'topic/create' ? 'underline-bold' : ''  }}"><a href="{{route('forum.topic.create',['id' => $subcategory->id])}}"  class="nav-link">Создать тему</a></li>
                        <li class="nav-item {{ Request::path() ==  'forum/search' ? 'underline-bold' : ''  }}"><a href="{{route('forum.search.index')}}"  class="nav-link">Поиск темы</a></li>
                    @endif

                    @if(Request::is('articles') or Request::is('articles/search'))
                        <li class="nav-item {{ Request::path() ==  'articles/create' ? 'underline-bold' : ''  }}"><a href="{{route('article.create')}}"  class="nav-link">Создать статью</a></li>
                        <li class="nav-item {{ Request::path() ==  'articles/search' ? 'underline-bold' : ''  }}"><a href="{{route('article.search')}}"  class="nav-link">Поиск статьи</a></li>
                    @endif
                    @auth()
                        @if(Auth::user()->isAdmin())
                            <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('dashboard.users.index')}}">Пользователи</a></button>
                            <button class="rounded-2xl bg-black px-5 text-white"><a href="{{route('dashboard.topics.index')}}">Темы</a></button>
                        @endif
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
@endif

