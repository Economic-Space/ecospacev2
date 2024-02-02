<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
    public function index() {
        // all by default -> dikasih gini agar filter ga error
        $major = 'all';
        $semester = 'all';
        $subjects = Subject::where('status', 'active')->get();
        return view('tutor.viewTutors', compact('subjects', 'major', 'semester'));
    }

    // FILTER SUBJECT BASED ON MAJOR AND SEMESTER
    public function filterSubjects(Request $request)
    {
        $major = $request->input('major');
        $semester = $request->input('semester');
        $subjects = Subject::whereJsonContains('subject_majors', $major)
                                ->where('subject_semester', $semester)
                                ->where('status', 'active')
                                ->get();

        if($semester == 'all') {
            $subjects = Subject::whereJsonContains('subject_majors', $major)
                                ->where('status', 'active')
                                ->get();
        }

        if($major == 'all') {
            $subjects = Subject::where('subject_semester', $semester)
                                ->where('status', 'active')
                                ->get();
        }

        if ($subjects->isEmpty()) {
            $subjects = null;
        }

        // kalau ga set semester n major, secara default adalah all
        if (!isset($semester)) {
            $semester = 'all';
        }

        if (!isset($major)) {
            $major = 'all';
        }

        return view('tutor.viewTutors', compact('subjects', 'semester', 'major'));
    }

    // SEARCH BASED ON SUBJECT TITLE
    public function searchSubjects(Request $request)
    {
        $major = $semester = 'all';
        $searchTerm = $request->input('tutorSearchBar');

        $subjects = Subject::where('subject_title', 'like', "%{$searchTerm}%")
                        ->where('status', 'active')
                        ->get();

        return view('tutor.viewTutors', compact('subjects', 'major', 'semester'));
    }

    // CLEAR FILTER BUTTON FUNCTIONALITY
    public function clearFilters() {
        return redirect()->route('viewTutors');
    }


}
