<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TopicsController extends Controller
{

   public function index(){

       $topics = Topic::all();

       return Response::json(['data' => [
           'code' => 200,
           'topics' => $topics
       ]], 200);
   }

    public function show(Topic $id){

        return Response::json(['data' => [
            'code' => 200,
            'topic' => $id
        ]], 200);

    }

    public function store(Topic $id,Request $request){

        $id = Topic::create($request->all());

        return Response::json(['data' => [
            'code' => 201,
            'message' => 'Запись добавлена',
            'topic' => $id
        ]], 201);


    }

    public function update(Topic $id,Request $request){

        $id->update($request->all());

        return Response::json(['data' => [
            'code' => 200,
            'message' => 'Запись обновлена',
            'topic' => $id
        ]], 200);

    }

    public function destroy(Topic $id){

        $id->delete();

        return Response::json(['data' => [
            'code' => 200,
            'message' => 'Запись удалена'
        ]], 200);

    }
}
