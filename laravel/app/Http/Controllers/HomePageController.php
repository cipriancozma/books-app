<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $title = "Welcome to Movies App!";
        return view('pages.index', compact('title'));
    }
}
