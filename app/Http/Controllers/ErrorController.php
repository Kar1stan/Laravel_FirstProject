<?php

namespace App\Http\Controllers;

class ErrorController extends Controllers{
    public function index() {
        return renderView('error');
    }
}