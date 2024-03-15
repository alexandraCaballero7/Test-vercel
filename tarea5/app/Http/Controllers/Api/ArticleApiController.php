<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleApiController extends Controller
{
    public function index()
    {
      return response()->json([
        'success'=> true,
         'data'=> Article::all(),
      ]);
    }

    public function show($id)
    {
      return response()->json([
        'success'=> true,
         'data'=> Article::find($id),
      ]);
    }

    public function delete($id){
       
      Article::destroy($id);
      return response()->json([
        'success'=> true,
         'data'=> 'deleted'
      ]);
    }

}
//probando

