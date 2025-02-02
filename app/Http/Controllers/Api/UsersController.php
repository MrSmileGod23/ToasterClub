<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UsersController extends Controller
{
    public function index(){

        $topics = User::all();

        return Response::json(['data' => [
            'code' => 200,
            'topics' => $topics
        ]], 200);
    }

    public function show(User $id){

        return Response::json(['data' => [
            'code' => 200,
            'topic' => $id
        ]], 200);

    }

    public function store(User $id,Request $request){

        $id = User::create($request->all());

        return Response::json(['data' => [
            'code' => 201,
            'message' => 'Пользователь добавлен',
            'topic' => $id
        ]], 201);


    }

    public function update(User $id,Request $request){

        $id->update($request->all());

        return Response::json(['data' => [
            'code' => 200,
            'message' => 'Пользователь обновлен',
            'topic' => $id
        ]], 200);

    }

    public function destroy(User $id){

        $id->delete();

        return Response::json(['data' => [
            'code' => 200,
            'message' => 'Пользователь удален'
        ]], 200);

    }
}
