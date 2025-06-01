<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class OlahragaController extends Controller
{
    public function index()
    {
        $newsItems = News::where('category', 'olahraga')->latest()->get();
        return view('olahraga', compact('newsItems'))->with('title', 'Olahraga');
    }
}

