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
        $words = Word::all()->where('likes', '>=', 800)->random(1);
        return response()->json($words);
    }

    //
}