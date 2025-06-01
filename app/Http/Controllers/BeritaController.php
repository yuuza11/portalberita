<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    public function show($slug)
{
    $news = News::where('slug', $slug)->firstOrFail();
    return view('show', compact('news'));
}

}

