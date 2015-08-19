<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $article = Article::all()->last();
        $previous = Article::where('id', '<', $article->id)->max('id');

        // get next user id
        $next = Article::where('id', '>', $article->id)->min('id');
        return view('articles.show',compact('article','previous','next'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

}
