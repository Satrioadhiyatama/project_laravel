<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlCommentsController extends Controller
{
    public function index(){
        return view('admin.html2.comments');
    }
    public function index_next(){
        return view('admin.html2.comments_next');
    }
}