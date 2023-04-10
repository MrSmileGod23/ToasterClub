@extends('layouts.auth')
@section('title','Вход')

@section('content')

    <div class="mb-8">

        <label class="block text-main text-xl font-bold mb-2" for="email">
            E-mail
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('email')}}" id="email" name="email" type="email" placeholder="E-mail">
        @if($errors->has('email'))
            <div class="text-red-500 text-sm mt-1 absolute">{{ $errors->first('email') }}</div>
        @endif
    </div>
    <div class="mb-8">
        <label class="block text-main text-xl font-bold mb-2" for="password">
            Пароль
        </label>
        <input class="shadow border-4 NunitoSans text-lg border-main rounded-2xl appearance-none border rounded w-full py-3 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('password')}}" id="password" name="password" type="password" placeholder="Пароль">
        @if($errors->has('password'))
            <div class="text-red-500 text-sm mt-1 absolute">{{ $errors->first('password') }}</div>
        @endif

        @if($errors->has('error'))
            <div class="text-red-500 text-sm mt-1 absolute">{{$errors->first('error') }}</div>
        @endif
    </div>
@endsection
