<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request){

        switch ($request->status){

            case('topics'):

                return Topic::whereRaw('lower(title) like ?', ['%' . strtolower($request->value) . '%'])->orderBy('title')->get();

            break;

            case('users'):

                return User::whereRaw('lower(login) like ?', ['%' . strtolower($request->value) . '%'])->orderBy('login')->get();

            break;

            default:
                return 'Ничего не найдено';
        }

    }

}
