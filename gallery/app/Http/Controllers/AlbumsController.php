<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('photos')->get();
        return view('albums.index')->with('albums',$albums);
    }
    
    public function create(){
        return view('albums.create');
    }

    public function show($id){
        $album = Album::with('photos')->find($id);
        return view('albums.show')->with('album',$album);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'image|max:1999'
        ]);
           
        //Get filename with extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        // Get just the FileName
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        // Get just the Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        // Create new filename and to Store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/album_covers',$filenameToStore);
        
        // Create album
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;
        $album->save();

        return redirect('/albums')->with('success','Album Created');






    }
}
