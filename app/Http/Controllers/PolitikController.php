<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PolitikController extends Controller
{
    public function index()
    {
        $newsItems = News::where('category', 'politik')->latest()->get();
        return view('politik', compact('newsItems'))->with('title', 'Politik');
    }
}
