<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id',$album_id);
    }

    public function show($id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo',$photo);
    }

    public function destroy($id){
        $photo = Photo::find($id);
        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
            $photo->delete();
            return redirect('/')->with('success','Photo Deleted');
        }
    }
        

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'photo'=>'image|max:1999'
        ]);
           
        //Get filename with extension
        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        // Get just the FileName
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        // Get just the Extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // Create new filename and to Store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'),$filenameToStore);
        
        // Create photo
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;
        $photo->save();

        return redirect('/albums/'.$request->input('album_id'))->with('success','Photo Uploaded');
    }
}
