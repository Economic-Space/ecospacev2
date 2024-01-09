<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
    public function index() {
        return view('tutor.viewTutors');
    }

    public function viewDetail() {
        return view('tutor.detailTutor');
    }
}
