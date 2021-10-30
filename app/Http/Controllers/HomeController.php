<?php

namespace App\Http\Controllers;

class HomeController extends Controllers{
    public function index() {
        return renderView('home');
    }
}