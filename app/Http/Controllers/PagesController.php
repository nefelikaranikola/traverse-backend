<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//a function inside of a class is called method
class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function support(){
        return view('pages.support');
    }

    public function guides(){
        return view('pages.guides');
    }

    public function recomended(){
        return view('pages.recomended');
    }

    public function agencies(){
        return view('pages.agencies');
    }
}