<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlintroController extends Controller
{
    public function index(){
        return view('admin.html2.index');
    }
    public function index_next(){
        return view('admin.html2.index_next');
    }
}
