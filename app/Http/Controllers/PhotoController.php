<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'photo_id'=> 'required|string',
            'photo'=>'required|file'
        ]);
        $photo= new \App\Models\photo();
        $photo->idx = $request ->photo_id;
        
       $path = $request->file('photo')->store('photos');
       $photo->file_path = $path;
       $photo->save();
       return back()->with(['successMessage' => "photo added"]);
;    }
    public function create()
    {
        return view('admin.create-photo');
    }
    public function show(Request $request)
    {
        $photo = \App\Models\photo::where('idx',$request->id)->first();
        if($photo == null){
            return abort(404);
        }
        return view('site.pages.show-photo')->with(['photo'=>$photo]);
    }
}
