
@extends('master_page')
@section('page_css')
<link rel="stylesheet" href="../css/main_page.css">
<link rel="stylesheet" href="../css/single_page.css">
<!--<link rel="stylesheet" href="../css/problem_rankboard.css">-->
<link rel="stylesheet" href="../css/solution_submission_page.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
@endsection

@section('main_content')
 @include('pages.problem.problem_page_topnav')
        <div class="submission-page">
            <div class="submission-left-part">
                <div class="submission-table-body">
                <div class="rank-part">
                    <table>
                        <thead>
                        <tr id="">
                            <th>Status</th>
                            <th>Description</th>
                            <th class="dropdown">
                                Language <i class="fa fa-caret-down"></i>
                                <div class="dropdown-content">
                                    <a href="" value="all">All</a>
                                    <a href="" value="c">C</a>
                                    <a href="" value="c++" selected="">C++</a>
                                    <a href="" value="java">Java</a>
                                    <a href="" value="python">Python</a>
                                    <a href="" value="c#">C#</a>
                                    <a href="" value="swift">Swift</a>
                                    <a href="" value="go">Go</a>
                                    <a href="" value="php">Php</a>
                                    <a href="" value="javascript">Javascript</a>
                                    <a href="" value="kotlin">Kotlin</a>
                                </div>
                            </th>
                            <th>Score</th>
                            <th>Time</th>
                            <th>Submission Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="impar">
                            <td class="id" style="color: #1e7e34;">Acceptd</td>
                            <td class="id">All test case are passed.</td>
                            <td class="small">C++</td>
                            <td class="small">10.0</td>
                            <td class="small">0.000</td>
                            <td class="center">1 Year ago</td>
                            <td class="center"><a href="{{ url('/view_submission') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                        </tr>
                        <tr class="impar">
                            <td class="id" style="color: firebrick;">Worng Answer</td>
                            <td class="id">Faild the test case 32.</td>
                            <td class="small">C++</td>
                            <td class="small">2.0</td>
                            <td class="small">0.000</td>
                            <td class="center">1.5 Year ago</td>
                            <td class="center"><a href="{{ url('/view_submission') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                        </tr>
                        <tr class="impar">
                            <td class="id" style="color: #1e7e34;">Acceptd</td>
                            <td class="id">All test case are passed.</td>
                            <td class="small">C++</td>
                            <td class="small">10.0</td>
                            <td class="small">0.000</td>
                            <td class="center">1 Year ago</td>
                            <td class="center"><a href="{{ url('/view_submission') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="submission-right-part">
                <div class="right-info">
                    <p style="float: left;"><strong>Score : </strong>10.0</p>
                    <p style=""><strong>Status : </strong><span style="color: #1e7e34;">Accepted</span></p>
                    <p style="color: #5a6268;">Total Attemp : 3</p>
                    <p><a href="#">View The Top Submissions</a></p>
                    <p><a href="#">Practices more same type</a></p>
                    <p style="padding-bottom: 15px;"><a href="#"><i class="fa fa-trophy" style="color: #6A5ACD;"></i> Your best submission</a></p>
                </div>
            </div>

        </div>
        </div>

        </div>
@endsection

