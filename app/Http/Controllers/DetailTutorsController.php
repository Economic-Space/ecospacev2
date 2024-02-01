<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class DetailTutorsController extends Controller
{
    public function index($id) {
        $subject = Subject::with('topics')->find($id);
        $other_subjects = Subject::where('id', '!=', $id)->where('status', 'active')->limit(3)->get();
        return view('tutor.detailTutor', compact('subject', 'other_subjects'));
    }
}
