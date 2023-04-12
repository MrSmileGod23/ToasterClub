@extends('layouts.app')
@section('title','Главная')


@section('content')
    <div class="max-w-7xl pt-5 mx-auto h-full grid grid-cols-7 px-5 xl:px-0">
        <div class=" col-span-5 pr-10">
            <div id="dropdown-wrapper" class="flex flex-col">
                <button onclick="toggleMenu()" class="flex justify-between items-center w-full py-5 px-3 bg-main text-2xl text-black shadow-xl">
                    <p> Клубная жизнь</p>
                    <img id="arrow1" class="rotate-180" src="{{ URL::asset('storage/img/ARROW.svg') }}" />
                </button>
                <div id="menu" class="hidden flex flex-col bg-white drop-shadow-md">
                    <a href="">
                    <div class="px-5 py-3 grid grid-cols-6 items-center border-b-2 border-main">
                        <img class="h-16 col-span-1" src="{{ URL::asset('storage/img/logo.svg') }}" />
                        <div class="flex flex-col col-span-3 NunitoSans">
                            <div>
                                <p class="text-2xl  font-extrabold">Мероприятия</p>
                            </div>
                            <div class="flex gap-5 text-xl ">
                                <p>Тем: </p>
                                <p>Сообщений:</p>
                            </div>
                        </div>
                        <div class="flex h-full col-span-2 text-xl NunitoSans justify-end items-end">
                            15 авг 2020, 10:51
                        </div>

                    </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div id="dropdown-wrapper2" class="flex flex-col">
                <button onclick="toggleMenu2()"
                        class="flex w-full bg-amber-500 hover:bg-amber-600 focus:bg-rose-500 text-white">
                    Toggle Menu</button>
                <div id="menu2" class="hidden flex flex-col bg-white drop-shadow-md">
                    <a class="px-5 py-3 hover:bg-amber-300 border-b border-gray-200" href="#">About KindaCode.com</a>
                    <a class="px-5 py-3 hover:bg-amber-300 border-b border-gray-200" href="#">Contact Us</a>
                    <a class="px-5 py-3 hover:bg-amber-300 border-b border-gray-200" href="#">Privacy Policy</a>
                    <a class="px-5 py-3 hover:bg-amber-300" href="#">Hello There</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript code -->
    <script>
        var menu = document.getElementById("menu");
        var arrow1 = document.getElementById("arrow1");

        var menus = document.getElementById("menu2");
        // open/close the menu when the user clicks on the button
        function toggleMenu() {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                arrow1.classList.remove('rotate-180');
            } else {
                arrow1.classList.add('rotate-180');
                menu.classList.add('hidden');
            }
        }

        function toggleMenu2() {
            if (menus.classList.contains('hidden')) {
                menus.classList.remove('hidden');
            } else {
                menus.classList.add('hidden');
            }
        }

    </script>
@endsection
