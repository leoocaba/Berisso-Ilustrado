<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Publication;
use App\Picture;
use App\User;

class PublicationController extends Controller
{
    public function createPublication(Request $request){


        $publication = new Publication();

        $publication->name = $request['title'];
        $publication->description = $request['description'];
        $publication->user_id = Auth::user()->id;
        
        $publication->save();

        $publication_id = $publication->id;

        if($request->hasFile('image')){
            $images = $request->file('image');

            foreach ($images as $image) {

                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save( public_path('/images/image/' . $filename));

                $imagenes = new Picture();

                $imagenes->image = $filename;
                $imagenes->publication_id =  $publication_id;
                $imagenes->user_id = Auth::user()->id;
                $imagenes->save();
            }

        }

        return redirect('/bienvenidos');

    }


    public function listPublications() {
        $usuarios = User::with('publications')->orderBy('updated_at', 'DESC')->with('pictures')->get();
        $vac = compact('usuarios');
        return view('feed', $vac);
    }
}
