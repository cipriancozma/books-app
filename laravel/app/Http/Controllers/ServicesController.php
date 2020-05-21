<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $title = "Services";
        return view('pages.services', compact("title"));
    }
}
