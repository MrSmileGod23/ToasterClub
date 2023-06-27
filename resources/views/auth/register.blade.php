@extends('layouts.auth')
@section('title','Регистрация')

@section('content')

    <div class="mb-12 sm:mb-8">
        <label class="mb-2 block text-xl font-bold text-main" for="email">
            E-mail
        </label>
        <input class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-3 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none" value="{{old('email')}}" id="email" name="email" type="email" placeholder="E-mail">
        @if($errors->has('email'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{ $errors->first('email') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="mb-2 block text-xl font-bold text-main" for="password">
            Пароль
        </label>
        <input class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-3 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none" value="{{old('password')}}" id="password" name="password" type="password" placeholder="Пароль">
        @if($errors->has('password'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="mb-2 block text-xl font-bold text-main" for="login">
            Логин
        </label>
        <input class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-3 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none" value="{{old('login')}}" id="login" name="login" type="text" placeholder="Логин">
        @if($errors->has('login'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{ $errors->first('login') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="mb-2 block text-xl font-bold text-main" for="car">
            Машина
        </label>
        <input class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-3 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none"  value="{{old('car')}}" id="car" name="car" type="text" placeholder="Машина">
        @if($errors->has('car'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{ $errors->first('car') }}</div>
        @endif
    </div>

    <div class="mb-12 sm:mb-8">
        <label class="mb-2 block text-xl font-bold text-main" for="car_year">
            Год машины
        </label>
        <input class="w-full appearance-none rounded rounded-2xl border-4 border px-2 py-3 text-lg leading-tight text-gray-700 shadow NunitoSans border-main focus:shadow-outline focus:outline-none"  value="{{old('car_year')}}" id="car_year" name="car_year" type="number" placeholder="Год машины">
        @if($errors->has('car_year'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{ $errors->first('car_year') }}</div>
        @endif
    </div>


@endsection
