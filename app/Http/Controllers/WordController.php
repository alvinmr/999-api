<?php

namespace App\Http\Controllers;

use App\Word;

class WordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $words = Word::inRandomOrder()->limit(1)->get();
        return response()->json($words);
    }

    public function show($id)
    {
        $word = Word::find($id);
        return response()->json($word);
    }

    //
}