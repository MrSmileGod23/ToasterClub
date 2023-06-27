@extends('layouts.auth')
@section('title','Вход')

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

        @if($errors->has('error'))
            <div class="absolute mt-1 text-xs text-red-500 sm:text-sm">{{$errors->first('error') }}</div>
        @endif
    </div>
@endsection
