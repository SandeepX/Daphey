<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ImageController extends Controller
{
    public function create($id){
        $gallery_id = $id;
        return view('imageUpload',compact('gallery_id'));
    }

    public function index(){
        return view('album');
    }

    public function uploadFiles(Request $request,$id)
    {
            $imageFile = $request->file('file');
            $imageName = uniqid() . $imageFile->getClientOriginalName();
            $imageFile->move(public_path('uploads'), $imageName);
            $image = new Image();
            $image->picture = $imageName;
            $image->gallaries_id = $id;
            $image->save();
    }
}