<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailTutorsController extends Controller
{
    public function viewDetail() {
        return view('tutor.detailTutor');
    }
}
