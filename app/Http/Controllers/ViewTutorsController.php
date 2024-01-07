<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
        public function index() {
        return view('general.viewTutors');
    }
}