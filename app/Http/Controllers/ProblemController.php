<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index()
    {
        return view('pages.problem.problems');
    }

    public function problemDashboard()
    {
        return view('pages.problem.problem_description');
    }

    public function problemDetail()
    {
        return view('pages.problem.problem_description');
    }

    public function problemRankBoard()
    {
        return view('pages.problem.problem_rankboard');
    }

    public function problemSubmissionBoard()
    {
        return view('pages.problem.submission');
    }
}
