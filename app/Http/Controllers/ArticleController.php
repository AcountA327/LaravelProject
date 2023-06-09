<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Thumbnail;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::all();
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        //dd($articles);
        return view('kadai06_1',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kadai08_1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $article -> title = $request -> input('title');
        $article -> body = $request -> input('body');
        //サムネイルテーブル
        $thumbnail = new Thumbnail();
        if (isset($request -> image)) {
            $image = Storage::disk('public')->put('/article_images/', $request->image);
            $thumbnail->name = basename($image);
        }
        DB::transaction(function () use ($article, $thumbnail){
            $article -> save();
            if ($thumbnail->name != "") {
                $thumbnail->article_id = $article->id; //外部キー設定
                $thumbnail->save();
            }
        });
        $request->session()->regenerateToken();
        return redirect('/kadai06_1/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('kadai08_2', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::find($id);
        $thumbnail = Article::find($article['thumbnails']['id']);
        //dd($thumbnail);
        dd($article['thumbnails']['article_id']);
        //$thumbnail = Article::find();
        $article -> title = $request -> input('title');
        $article -> body = $request -> input('body');
        if (isset($request -> image)) {
            $image = Storage::disk('public') -> put('/article_images/', $request -> image);
            $thumbnail->name = basename($image);
        }
        DB::transaction(function () use ($article, $thumbnail){
            $article -> save();
            if ($thumbnail->name != "") {
                $thumbnail->article_id = $article->id; //外部キー設定
                $thumbnail->save();
            }
        });
        $request->session()->regenerateToken();

        return redirect('/kadai06_1/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        DB::transaction(function () use ($id){
            Article::destroy($id);
        });
        return redirect('/kadai06_1/');
    }
}
