<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function index() {
        return view('welcome');
    }

    // public function about() {
    //     return view('about');
    // }

    // public function movies() {
    //     return view('movies/index');
    // }

    public function galeria() {
        return view('galeria');
    }
};