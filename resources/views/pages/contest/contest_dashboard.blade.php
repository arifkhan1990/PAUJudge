@extends('master_page')
@section('page_css')
    @include('pages.contest.contest_css')
    <link rel="stylesheet" href="../css/single_page.css">
    <link rel="stylesheet" href="../css/single_contest_page.css">
@endsection

@section('main_content')

    <div class="problem-page-header-part">
        <div class="problem-row-header-part">
            <div class="header-part">
                <a href="../contest/contest.html">
                    Contests
                    <h1>Red Coder Contest</h1>
                    </a>
            </div>
        </div>
    </div>
    <div class="details-content">
        <div class="details-page">
            <div class="problem-description">
                <div class="problem-body-content">
                        <div class="contest-problem-list" style="background: #c3ffbc;">
                            <div class="problem-a">
                                <a href="{{ url('/contest_problem_detail') }}">
                                    <div class="problem-a-left">
                                    <span>A. </span>
                                        <span>Array Roted</span>
                                    </div>
                                </a>
                                <div class="problem-a-right">
                                    <span style="padding-right: 60px;">100</span>
                                    <span>x1100</span>
                                </div>
                            </div>
                        </div>
                    </a>
                <div class="contest-problem-list" style="background: #c3ffbc;">
                    <div class="problem-a">
                        <a href="#">
                            <div class="problem-a-left">
                                <span>B. </span>
                                <span>Bubla Sort</span>
                            </div>
                        </a>
                        <div class="problem-a-right">
                            <span style="padding-right: 60px;">200</span>
                            <span>x540</span>
                        </div>
                    </div>
                </div>
                <div class="contest-problem-list" style="background: #c3ffbc;">
                    <div class="problem-a">
                        <a href="#">
                            <div class="problem-a-left">
                            <span>C. </span>
                                <span>Graphical Loss</span>
                            </div>
                        </a>
                        <div class="problem-a-right">
                            <span style="padding-right: 60px;">300</span>
                            <span>x100</span>
                        </div>
                    </div>
                </div>
                <div class="contest-problem-list" style="background: #f38383;">
                    <div class="problem-a">
                        <a href="#">
                            <div class="problem-a-left">
                            <span>D. </span>
                                <span>Mamu Mathematisian</span>
                            </div>
                        </a>
                        <div class="problem-a-right">
                            <span style="padding-right: 60px;">400</span>
                            <span>x21</span>
                        </div>
                    </div>
                </div>
                <div class="contest-problem-list" style="background: none;">
                    <div class="problem-a">
                        <a href="#">
                            <div class="problem-a-left">
                            <span>E. </span>
                                <span>Lover Life</span>
                            </div>
                        </a>
                        <div class="problem-a-right">
                            <span style="padding-right: 60px;">500</span>
                            <span>x07</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
