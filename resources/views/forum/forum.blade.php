@extends('layouts.app')
@section('title','Форум')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-rows-1 lg:grid-cols-7 px-5 xl:px-0">
        <div class="col-span-5 pr-0 lg:pr-10">
            @foreach($treeView as $key => $category)
            <div id="dropdown-wrapper-{{$key+1}}" class="flex flex-col mb-4">
                <button onclick="toggleMenu{{$key+1}}()" class="flex justify-between items-center w-full py-5 px-3 bg-main text-2xl text-black shadow-xl">
                        <p class="text-base sm:text-2xl text-left">{{$category->title}}</p>
                    <img id="arrow{{$key+1}}" class="rotate-180" src="{{ URL::asset('storage/img/ARROW.svg') }}" />
                </button>
                <div id="menu{{$key+1}}" class="hidden flex flex-col bg-white drop-shadow-md">
                    @if($category->subcategories->count())
                        @foreach($category->subcategories as $subcategory)
                    <a href="{{route('forum.topics.all',[$subcategory->id])}}">
                    <div class="px-5 py-3 grid  sm:grid-cols-6 items-center border-b-2 border-main">
                        <img class="h-16 col-span-1 hidden sm:block" src="{{ URL::asset('storage/img/logo.svg') }}" />
                        <div class="flex flex-col col-span-3 NunitoSans">
                            <div>
                                <p class="text-lg sm:text-2xl  font-extrabold">{{$subcategory->title}}  </p>
                                <p class="text-base sm:text-xl">{{$subcategory->text}}  </p>
                            </div>
                            <div class="flex gap-5 text-base sm:text-xl">
                                <p>Тем: {{$subcategory->topics->count()}} </p>
                                <p>Сообщений:</p>
                            </div>
                        </div>
                        <div class="hidden sm:flex  h-full col-span-2 text-base sm:text-xl NunitoSans justify-end items-end">
                            {{$subcategory->created_at}}
                        </div>

                    </div>
                    </a>
                    @endforeach
                    @endif
                </div>

            </div>
            @endforeach
        </div>
        <div class="col-span-5 lg:col-span-2  grid-rows-2">
            <div id="dropdown-wrapper-lastThemes" class="flex flex-col mb-4">
                <button onclick="toggleMenulastThemes()" class="flex justify-between items-center w-full py-5 px-3 bg-main text-2xl text-black shadow-xl">
                    <p class="text-base sm:text-2xl">Последние темы</p>
                    <img id="arrowlastThemes" class="rotate-180" src="{{ URL::asset('storage/img/ARROW.svg') }}" />
                </button>
                <div id="menulastThemes" class="hidden flex flex-col bg-white drop-shadow-md">
                    @foreach($lastTopics as $lastTopic)
                    <a href="{{route('forum.topic.show',[$lastTopic->id])}}">
                        <div class="px-5 py-3 NunitoSans items-center border-b-2 border-main">
                            <p class="text-xl capitalize">{{$lastTopic->title}}  </p>
                            <p class="text-sm">{{$lastTopic->text}}  </p>
                            <p class="text-sm">{{$lastTopic->created_at}}  </p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div id="dropdown-wrapper-Forum" class="flex flex-col mb-4">
                <button onclick="toggleMenuForum()" class="flex justify-between items-center w-full py-5 px-3 bg-main text-2xl text-black shadow-xl">
                    <p class="text-base sm:text-2xl">Статистика форума</p>
                    <img id="arrowForum" class="rotate-180" src="{{ URL::asset('storage/img/ARROW.svg') }}" />
                </button>
                <div id="menuForum" class="hidden flex flex-col bg-white drop-shadow-md">
                        <a href="">
                            <div class="px-5 py-3 grid grid-rows-4 NunitoSans items-center border-b-2 border-main">
                                <p class="text-base">Тем: {{$countTopics}} </p>
                                <p class="text-base">Категорий: {{$countCategories}} </p>
                                <p class="text-base">Подкатегорий: {{$countSubcategories}} </p>
                                <p class="text-base">Пользователей: {{$countUsers}}</p>
                                <p class="text-base">Последний пользователь: {{$lastUser->login}}</p>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript code -->
    <script>
        var menuForum = document.getElementById("menuForum");
        var arrowForum = document.getElementById("arrowForum");

        function toggleMenuForum() {
            if (menuForum.classList.contains('hidden')) {
                menuForum.classList.remove('hidden');
                arrowForum.classList.remove('rotate-180');
            } else {
                arrowForum.classList.add('rotate-180');
                menuForum.classList.add('hidden');
            }
        }

        var menulastThemes = document.getElementById("menulastThemes");
        var arrowlastThemes = document.getElementById("arrowlastThemes");

        function toggleMenulastThemes() {
            if (menulastThemes.classList.contains('hidden')) {
                menulastThemes.classList.remove('hidden');
                arrowlastThemes.classList.remove('rotate-180');
            } else {
                arrowlastThemes.classList.add('rotate-180');
                menulastThemes.classList.add('hidden');
            }
        }

        var menu1 = document.getElementById("menu1");
        var arrow1 = document.getElementById("arrow1");

        function toggleMenu1() {
            if (menu1.classList.contains('hidden')) {
                menu1.classList.remove('hidden');
                arrow1.classList.remove('rotate-180');
            } else {
                arrow1.classList.add('rotate-180');
                menu1.classList.add('hidden');
            }
        }

        var menu2 = document.getElementById("menu2");
        var arrow2 = document.getElementById("arrow2");

        function toggleMenu2() {
            if (menu2.classList.contains('hidden')) {
                menu2.classList.remove('hidden');
                arrow2.classList.remove('rotate-180');
            } else {
                arrow2.classList.add('rotate-180');
                menu2.classList.add('hidden');
            }
        }

        var menu3 = document.getElementById("menu3");
        var arrow3 = document.getElementById("arrow3");

        function toggleMenu3() {
            if (menu3.classList.contains('hidden')) {
                menu3.classList.remove('hidden');
                arrow3.classList.remove('rotate-180');
            } else {
                arrow3.classList.add('rotate-180');
                menu3.classList.add('hidden');
            }
        }

        var menu4 = document.getElementById("menu4");
        var arrow4 = document.getElementById("arrow4");

        function toggleMenu4() {
            if (menu4.classList.contains('hidden')) {
                menu4.classList.remove('hidden');
                arrow4.classList.remove('rotate-180');
            } else {
                arrow4.classList.add('rotate-180');
                menu4.classList.add('hidden');
            }5
        }

        var menu5 = document.getElementById("menu5");
        var arrow5 = document.getElementById("arrow5");

        function toggleMenu5() {
            if (menu5.classList.contains('hidden')) {
                menu5.classList.remove('hidden');
                arrow5.classList.remove('rotate-180');
            } else {
                arrow5.classList.add('rotate-180');
                menu5.classList.add('hidden');
            }
        }

        var menu6 = document.getElementById("menu6");
        var arrow6 = document.getElementById("arrow6");

        function toggleMenu6() {
            if (menu6.classList.contains('hidden')) {
                menu6.classList.remove('hidden');
                arrow6.classList.remove('rotate-180');
            } else {
                arrow6.classList.add('rotate-180');
                menu6.classList.add('hidden');
            }
        }

        var menu7 = document.getElementById("menu7");
        var arrow7 = document.getElementById("arrow7");

        function toggleMenu7() {
            if (menu7.classList.contains('hidden')) {
                menu7.classList.remove('hidden');
                arrow7.classList.remove('rotate-180');
            } else {
                arrow7.classList.add('rotate-180');
                menu7.classList.add('hidden');
            }
        }

        var menu8 = document.getElementById("menu8");
        var arrow8 = document.getElementById("arrow8");

        function toggleMenu8() {
            if (menu8.classList.contains('hidden')) {
                menu8.classList.remove('hidden');
                arrow8.classList.remove('rotate-180');
            } else {
                arrow8.classList.add('rotate-180');
                menu8.classList.add('hidden');
            }
        }

        var menu9 = document.getElementById("menu9");
        var arrow9 = document.getElementById("arrow9");

        function toggleMenu9() {
            if (menu9.classList.contains('hidden')) {
                menu9.classList.remove('hidden');
                arrow9.classList.remove('rotate-180');
            } else {
                arrow9.classList.add('rotate-180');
                menu9.classList.add('hidden');
            }
        }


    </script>
@endsection
