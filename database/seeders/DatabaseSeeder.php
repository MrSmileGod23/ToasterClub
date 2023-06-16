<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'login' => 'adminbB',
                'password' => Hash::make('adminbB'),
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Встречи',
                'text' => 'На дорогах, еженедельные и т.д.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Владельцы и владелицы',
                'text' => 'Новички отписываются тут, выкладываем свои фотки и т.д.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Путешествие',
                'text' => 'Описываем свои автопробеги, впечатления от дороги и пункта назначения...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Клубная аттрибутика',
                'text' => 'Майки, флаги, стаканчики, наклейки, рамки',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Разные события',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Дни рождения',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Друзья клуба',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '1',
                'title' => 'Партнеры клуба',
                'text' => 'Предложения от партнеров клуба. Создание новых тем только по запросу, через администратора.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Центральный регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Северо-Западный регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Южный регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Приволжский регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Уральский регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Сибирский регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '2',
                'title' => 'Дальневосточный регион',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '3',
                'title' => 'Общие вопросы',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '3',
                'title' => 'Ремонт',
                'text' => 'Отчеты о ремонтах своими силами',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '3',
                'title' => 'Тюнинг',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '3',
                'title' => 'F.A.Q.',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '3',
                'title' => 'Эксплуатация',
                'text' => 'Куда, чего, сколько лить в граммах',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '4',
                'title' => 'Общие вопросы',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '4',
                'title' => 'Ремонт',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '4',
                'title' => 'Тюнинг',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '4',
                'title' => 'F.A.Q.',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '4',
                'title' => 'Эксплуатация',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '5',
                'title' => 'Общие вопросы',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '5',
                'title' => 'Ремонт',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '5',
                'title' => 'Тюнинг',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '5',
                'title' => 'F.A.Q.',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '5',
                'title' => 'Эксплуатация',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '6',
                'title' => 'Все о других, не таких квадратных авто',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '6',
                'title' => 'Байки, багги, квадро',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '6',
                'title' => 'Водный транспорт',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'Целые bB и Xb',
                'text' => 'Продаем и покупаем табуретки целиком',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'bB и xB по кускам',
                'text' => 'Покупаем/продаем отдельные части табуреток',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'QNC по кускам',
                'text' => 'Покупка/продажа запчастей на Toyota bB II и Daihatsu Materia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'Другое',
                'text' => 'Все, что не касается машин',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'Отдам даром',
                'text' => 'Все что угодно за спасибо или за пиво.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'Белый и черный списки',
                'text' => 'Отзывы о покупателях и продавцах',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '7',
                'title' => 'Попрошайка',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '8',
                'title' => 'Бортовые журналы безумных тюнингистов',
                'text' => 'Здесь каждый может себе завести топик о том, как он лично тюнит свою коробочку',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '8',
                'title' => 'Отзывы',
                'text' => 'Каждый владелец может рассказать впечатления от bB/xB',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '8',
                'title' => 'Отзывы об автосервисах',
                'text' => 'Пишем про плюсы и минусы автосервисов, не являющихся партнерами клуба',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Новости',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Работа форума',
                'text' => 'Замечания, предложения, сообщения об ошибках',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Интересное',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Юмор =)',
                'text' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Black Log',
                'text' => 'Отписываемся АРГУМЕНТИРОВАННО где наших соклубников обманули/кинули',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'bBод и закон',
                'text' => 'Темы посвященные правовым вопросам, как-то что делать при дтп, взаимоотношения с гаишниками, с другими органами власти.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'category_id' => '9',
                'title' => 'Курилка',
                'text' => 'Можно говорить обо всем, только без мата и наездов.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
        DB::table('topics')->insert([
            [
                'subcategory_id' => '1',
                'user_id' => '1',
                'title' => 'фестиваль в г.Дубна М.о 23 июля',
                'text' => 'Други!! Москва и область!! :) немного поздно спохватился !))',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
        DB::table('answer_topics')->insert([
            [
                'user_id' => '1',
                'topic_id' => '1',
                'text' => 'фестиваль в г.Дубна М.о 23 июля',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
