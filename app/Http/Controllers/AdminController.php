<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $mangas = Manga::latest()->get();

        return view('admin.index', compact('mangas'));
    }
}
