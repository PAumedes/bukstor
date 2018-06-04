<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }
}
