<?php

namespace App\Http\Controllers;

use App\Gallery;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class GalleryController extends Controller
{
    public function index()
    {
        $gallery=Gallery::orderBy('id','desc')->get();
        return view('Gallery.index' , compact('gallery'));

    }

    function images($id)
    {
        $images = \App\Image::where('gallaries_id',$id)->get();
        return view('Gallery.album',compact('images'));
    }
    
    public function create()
    {
        $gallery=Gallery::orderBy('id','desc')->get();
        return view('Gallery.create', compact('gallery'));
    }



    public function store(Request $request)
    {
        $gallery = new Gallery();
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $fileName);
        Image::make($image)->save($location);
        $gallery->image = $fileName;
        $gallery->save();
        return redirect()->action('GalleryController@create');
    }


    public function show($id)
    {
//        $gallery = Gallery::where('id',$id)->get();
//        return view('Gallery.index',compact('gallery'));

    }
    public function edit(Gallery $gallery)
    {}
    public function update(Request $request, Gallery $gallery)
    {}
    public function destroy(Gallery $gallery)
    {}
}
