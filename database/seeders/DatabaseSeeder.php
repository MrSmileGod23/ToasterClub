<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@mail.ru',
                'login' => 'admin',
                'password' => 'admin',
                'car' => 'Toyota bB',
                'car_year' => '2003',
            ],
        ]);
        DB::table('categories')->insert([
            [
                'title' => 'Клубная жизнь'
            ],
            [
                'title' => 'Страна bB/xB'
            ],
            [
                'title' => 'Технический раздел bB, xB'
            ],
            [
                'title' => 'Технический раздел bB2, Daihatsu Coo'
            ],
            [
                'title' => 'Технический раздел Rumion, xB2'
            ],
            [
                'title' => 'Другой транспорт'
            ],
            [
                'title' => 'Купи-продай'
            ],
            [
                'title' => 'Отзывы и бортовые журналы'
            ],
            [
                'title' => 'Разное'
            ]
        ]);
        DB::table('subcategories')->insert([
            [
                'category_id' => '1',
                'title' => 'Мероприятия',
                'text' => 'Клубные выставки, поездки и т.д.',
            ],
            [
                'category_id' => '1',
                'title' => 'Встречи',
                'text' => 'На дорогах, еженедельные и т.д.',
            ],
            [
                'category_id' => '1',
                'title' => 'Владельцы и владелицы',
                'text' => 'Новички отписываются тут, выкладываем свои фотки и т.д.',
            ],
            [
                'category_id' => '1',
                'title' => 'Путешествие',
                'text' => 'Описываем свои автопробеги, впечатления от дороги и пункта назначения...',
            ],
            [
                'category_id' => '1',
                'title' => 'Клубная аттрибутика',
                'text' => 'Майки, флаги, стаканчики, наклейки, рамки',
            ],
            [
                'category_id' => '1',
                'title' => 'Разные события',
                'text' => '',
            ],
            [
                'category_id' => '1',
                'title' => 'Дни рождения',
                'text' => '',
            ],
            [
                'category_id' => '1',
                'title' => 'Друзья клуба',
                'text' => '',
            ],
            [
                'category_id' => '1',
                'title' => 'Партнеры клуба',
                'text' => 'Предложения от партнеров клуба. Создание новых тем только по запросу, через администратора.',
            ],
            [
                'category_id' => '2',
                'title' => 'Центральный регион',
                'text' => '',
            ]
        ]);
        DB::table('topics')->insert([
            [
                'subcategory_id' => '1',
                'user_id' => '1',
                'title' => 'фестиваль в г.Дубна М.о 23 июля',
                'text' => 'Други!! Москва и область!! :) немного поздно спохватился !))'
            ],
        ]);
    }
}
