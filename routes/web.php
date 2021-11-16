<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.pau_home.home_page');
});

Route::resource('signup_signin', 'HomeController');

Route::get('problems', 'ProblemController@index');
Route::get('/problem_dashboard', 'ProblemController@problemDashboard');
Route::get('/problem_details', 'ProblemController@problemDetail');
Route::get('/problem_rank_board', 'ProblemController@problemRankBoard');
Route::get('/problem_submission_board', 'ProblemController@problemSubmissionBoard');
Route::get('/view_submission', 'ProblemController@viewSubmission');
Route::get('/problem_editorial', 'ProblemController@viewProblemEditorial');
Route::get('/problem_related_resources', 'ProblemController@viewProblemResources');


Route::get('contest', 'ContestController@index');
Route::get('/contest_dasboard', 'ContestController@contestDashboard');
Route::get('/contest_problem_detail', 'ContestController@problemDetail');
Route::get('/contest_submission_borad', 'ContestController@submissionBoard');
Route::get('/contest_submission_code', 'ContestController@submissionCode');
Route::get('/contest_rank_board', 'ContestController@rankBoard');
Route::get('/clearification', 'ContestController@problemClearification');
