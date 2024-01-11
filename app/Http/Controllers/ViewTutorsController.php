<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
    public function index() {
        // $subjects = Subject::where('status', 'active')->get();
        return view('tutor.viewTutors');
    }

    // FILTER SUBJECT BASED ON MAJOR AND SEMESTER
    public function filterSubjects($major, $semester)
    {
        $filteredSubjects = Subject::where('subject_major', $major)
                                ->where('subject_semester', $semester)
                                ->where('status', 'active')
                                ->get();

        return view('subject.index', compact('filteredSubjects'));
    }

    // SEARCH BASED ON SUBJECT TITLE
    public function searchSubjects(Request $request)
    {
        $searchTerm = $request->input('search');

        $subjects = Subject::where('subject_title', 'like', "%{$searchTerm}%")
                        ->where('status', 'active')
                        ->get();

        return view('subject.index');
    }

    // CLEAR FILTER BUTTON FUNCTIONALITY
    public function clearFilters() {
        return redirect()->route('viewSubject');
    }


}
