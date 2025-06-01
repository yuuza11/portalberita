<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $newsItems = News::latest()->take(6)->get();
        return view('home', compact('newsItems'))->with('title', 'Trending');
    }
}

