<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all articles are extracted from the database and assigned to the variable $articles
        $articles = DB::select('call total_articles()');
        
        return view('article.index')->with('articles', $articles);
        // return view('article.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('article.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$date = new DateTime();
        $article = DB::select('call save_articles( ?, ?, ?, ?, ?)', array(
            $request->get('code')
            , $request->get('category_id')
            , $request->get('description')
            , $request->get('amount')
            , $request->get('price')
        ));                             
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article =  Article::find($id);
        $categories = Category::all();
        return view('article.edit')->with(['article'=>$article, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $article = DB::select('call update_articles( ?, ?, ?, ?, ?, ?)', array(
            $id
            , $request->get('code')
            , $request->get('category_id')
            , $request->get('description')
            , $request->get('amount')
            , $request->get('price')
        ));                             
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article =  DB::select('call delete_articles( ? )', array($id));
        return redirect('articles');
    }
}
