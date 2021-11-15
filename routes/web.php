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
