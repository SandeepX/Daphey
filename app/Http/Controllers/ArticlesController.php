<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Image;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles=Articles::orderBy('created_at','desc')->get();
        return view('articles.articles',compact('articles'));
    }

    public function create()
    {
        return view('articles.article-form');

    }

    public function store(Request $request)
    {
        $articles = new Articles();
        $articles->title = $request->input('title');
        $articles->body = $request->input('body');

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);
            Image::make($image)->save($location);

            $articles->image = $fileName;
        }
        $articles->save();


        return redirect()->route('article-index' , compact('articles'));
    }

    public function show($id)
    {
        $articles=new Articles();
        $articles = Articles::find($id);
        return view('articles.article-main',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
