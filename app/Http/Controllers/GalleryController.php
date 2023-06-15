<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $photos = Gallery::paginate(6);
        return view('gallery.gallery',[
            'photos' => $photos
        ]);

    }

    public function store(Request $request){

        $current_user = $request->user();

        $request->validate([
            'gallery' => 'required'
        ]);

        if ($request->hasFile('gallery')) {
            $destinationPath = storage_path('app/public/gallery/');
            $fileName = md5(microtime()).'_'.$request->name;
            $request->file('gallery')->move($destinationPath, $fileName);
            Gallery::create([
                'user_id'=>$current_user->id,
                'photo'=>$fileName,
            ]);
        }



        return redirect()->route('gallery.index');
    }
}
