<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class Kadai10_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArticleResource::collection(Article::all());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::find($id);
        if($data){
            return new ArticleResource($data);
        }else{
        $json = array('error' => array(
            'message' => '該当のレコードが存在しません。',
            'code' => 404,
        ));
            return response()->json($json, 404);
        }

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::find($id);

        if ($data) {
            DB::transaction(function () use ($id){
                Article::destroy($id);
            });

            $json = array('error' => array(
                'message' => '成功',
                'code' => 200,
            ));
            return response() -> json($json, 200);
            //return new ArticleResource($data);
        } else {
            $json = array('error' => array(
                'message' => '該当のレコードが存在しません。',
                'code' => 404,
            ));
            return response() -> json($json, 404);
        }
    }
}
