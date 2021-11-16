@extends('master_page')
@section('page_css')
<link rel="stylesheet" href="../css/main_page.css">
<link rel="stylesheet" href="../css/single_page.css">
<link rel="stylesheet" href="../css/solution_view_page.css">
<link rel="stylesheet" href="../css/solution_submission_page.css">
<link href="../css/prism.css" rel="stylesheet" />
<script src="../js/prism.js"></script>
@endsection

@section('main_content')
    @include('pages.problem.problem_page_topnav')
            <div class="submission-page">
                <div class="submission-left-part">
                    <div class="submission-table-body">
                        <div class="rank-part">
                            <div class="code-part">
                                <div class="language-part">
                                    <p><strong>Language : </strong> C++</p>
                                    <a href="{{ url('/problem_submission_board') }}">Back to editor</a>
                                </div>
                                <pre>
                                    <code class="language-cpp">
                                    <div class="code">
                                    #include < bits/stdc++.h>
                                    using namespace std;

                                    int main()
                                    {
                                    int n, m, sum = 0;
                                    cin >> n >> m;
                                    sum = n+m;
                                    cout << sum << endl;
                                    return 0;
                                    }

                                </div>
                                    </code>
                                </pre>

                            </div>
                            <div class="judgement-part">
                                <h2>Judgement</h2>
                                <hr class="style15">
                                <div class="testcase-part">
                                    <div class="test-case">
                                        <h3>Test Case 1# </h3>
                                        <p>Time : 12ms , Memory : 5mb, Result : Ok</p>
                                    </div>
                                    <div class="input">
                                        <div class="input-left"><h4>Input</h4></div>
                                        <div class="input-right">
                                            <p> 12  13</p>
                                        </div>
                                    </div>
                                    <div class="user-output">
                                        <div class="user-output-left"><h4>Your Output</h4></div>
                                        <div class="user-output-right">
                                            <p> 25 </p>
                                        </div>
                                    </div>
                                    <div class="judge-output">
                                        <div class="judge-output-left"><h4>Judge Output</h4></div>
                                        <div class="judge-output-right">
                                            <p> 25 </p>
                                        </div>
                                    </div>
                                    <div class="compile-msg">
                                        <h3>Compile Message : Success</h3>
                                    </div>
                                </div>
                                <div class="testcase-part">
                                    <div class="test-case">
                                        <h3>Test Case 2# </h3>
                                        <p>Time : 12ms , Memory : 5mb, Result : Ok</p>
                                    </div>
                                    <div class="input">
                                        <div class="input-left"><h4>Input</h4></div>
                                        <div class="input-right">
                                            <p> 2  13</p>
                                        </div>
                                    </div>
                                    <div class="user-output">
                                        <div class="user-output-left"><h4>Your Output</h4></div>
                                        <div class="user-output-right">
                                            <p> 15 </p>
                                        </div>
                                    </div>
                                    <div class="judge-output">
                                        <div class="judge-output-left"><h4>Judge Output</h4></div>
                                        <div class="judge-output-right">
                                            <p> 15 </p>
                                        </div>
                                    </div>
                                    <div class="compile-msg">
                                        <h3>Compile Message : Success</h3>
                                    </div>
                                </div>
                                <div class="testcase-part">
                                    <div class="test-case">
                                        <h3>Test Case 3# </h3>
                                        <p>Time : 12ms , Memory : 5mb, Result : Ok</p>
                                    </div>
                                    <div class="input">
                                        <div class="input-left"><h4>Input</h4></div>
                                        <div class="input-right">
                                            <p> -4  12</p>
                                        </div>
                                    </div>
                                    <div class="user-output">
                                        <div class="user-output-left"><h4>Your Output</h4></div>
                                        <div class="user-output-right">
                                            <p> 8 </p>
                                        </div>
                                    </div>
                                    <div class="judge-output">
                                        <div class="judge-output-left"><h4>Judge Output</h4></div>
                                        <div class="judge-output-right">
                                            <p> 8 </p>
                                        </div>
                                    </div>
                                    <div class="compile-msg">
                                        <h3>Compile Message : Success</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submission-right-part">
                    <div class="right-info">
                        <p style="float: left;"><strong>Score : </strong>10.0</p>
                        <p style=""><strong>Status : </strong><span style="color: #1e7e34;">Accepted</span></p>
                        <p style="color: #5a6268;">Failed the test case 12</p>
                        <p style="color: #5a6268;">Time : 2 Years ago </p>
                        <p><a href="#">View The Correct Submissions</a></p>
                        <p style="padding-bottom: 15px;"><a href="#">View the Editorial</a></p>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

@endsection
