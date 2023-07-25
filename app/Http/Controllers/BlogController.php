<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
    $page = 'HOME';
    return view('blog.index', compact('page'));
    }
    public function about() {
    $page = 'ABOUT';
    return view('blog.about', compact('page'));
    }
    public function contact() {
    return view('blog.contact');
    }
    public function post() {
    return view('blog.post');
    }
}
