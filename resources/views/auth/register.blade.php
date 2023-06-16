@extends('layouts.auth')
@section('title','Регистрация')

@section('content')

    <div class="mb-12 sm:mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="email">
            E-mail
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('email')}}" id="email" name="email" type="email" placeholder="E-mail">
        @if($errors->has('email'))
            <div class="text-red-500 text-xs sm:text-sm mt-1 absolute">{{ $errors->first('email') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="password">
            Пароль
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('password')}}" id="password" name="password" type="password" placeholder="Пароль">
        @if($errors->has('password'))
            <div class="text-red-500 text-xs sm:text-sm mt-1 absolute">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="login">
            Логин
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('login')}}" id="login" name="login" type="text" placeholder="Логин">
        @if($errors->has('login'))
            <div class="text-red-500 text-xs sm:text-sm mt-1 absolute">{{ $errors->first('login') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="car">
            Машина
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  value="{{old('car')}}" id="car" name="car" type="text" placeholder="Машина">
        @if($errors->has('car'))
            <div class="text-red-500 text-xs sm:text-sm mt-1 absolute">{{ $errors->first('car') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="car_year">
            Год машины
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  value="{{old('car_year')}}" id="car_year" name="car_year" type="number" placeholder="Год машины">
        @if($errors->has('car_year'))
            <div class="text-red-500 text-xs sm:text-sm mt-1 absolute">{{ $errors->first('car_year') }}</div>
        @endif
    </div>


@endsection
