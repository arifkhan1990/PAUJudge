<?php

namespace App\Http\Controllers;

use App\CoderRank;
use Illuminate\Http\Request;

class CoderRankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.coder_rank.rank_dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoderRank  $coderRank
     * @return \Illuminate\Http\Response
     */
    public function show(CoderRank $coderRank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoderRank  $coderRank
     * @return \Illuminate\Http\Response
     */
    public function edit(CoderRank $coderRank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoderRank  $coderRank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoderRank $coderRank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoderRank  $coderRank
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoderRank $coderRank)
    {
        //
    }
}
