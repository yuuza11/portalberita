<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class OtomotifController extends Controller
{
    public function index()
    {
        $newsItems = News::where('category', 'otomotif')->latest()->get();
        return view('otomotif', compact('newsItems'))->with('title', 'Otomotif');
    }
}
