@extends('master_page')
@section('page_css')
    @include('pages.contest.contest_css')
    <link rel="stylesheet" href="../css/single_page.css">
    <link rel="stylesheet" href="../css/solution_submission_page.css">
    <link rel="stylesheet" href="../css/contest_submission.css">
@endsection

@section('main_content')
    @include('pages.contest.contest_topnav')
        <div class="problem-description">
            <div class="problem-body-content">
                <div class="contest-submission-page">
                    <div class="contest-submission-left-part">
                        <div class="submission-table-body">
                        <div class="rank-part">
                            <table>
                                <thead>
                                <tr id="">
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Problem</th>
                                    <th>Description</th>
                                    <th class="dropdown">
                                        Lang <i class="fa fa-caret-down"></i>
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
                                    <th>When</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="impar">
                                    <td class="id">123244334</td>
                                    <td class="center">Arif Khan</td>
                                    <td id="problem_short_name"><a href="">A. Array Roted</a></td>
                                    <td class="id">All test case are passed.</td>
                                    <td class="small">C++</td>
                                    <td class="small">10.0</td>
                                    <td class="small">0.000</td>
                                    <td class="center">1 Year ago</td>
                                    <td class="id" style="color: #1e7e34;">Acceptd</td>
                                    <td class="center"><a href="{{ url('/contest_submission_code') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                                </tr>
                                <tr class="impar">
                                    <td class="id">19342434</td>
                                    <td class="center">I_See_You</td>
                                    <td id="problem_short_name"><a href="">B. Bubli Sort</a></td>
                                    <td class="id">Faild the test case 32.</td>
                                    <td class="small">C++</td>
                                    <td class="small">20.0</td>
                                    <td class="small">0.000</td>
                                    <td class="center">1.5 Year ago</td>
                                    <td class="id" style="color: firebrick;">Worng Answer</td>
                                    <td class="center"><a href="{{ url('/contest_submission_code') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                                </tr>
                                <tr class="impar">
                                    <td class="id">457657234</td>
                                    <td class="center">Arif Khan</td>
                                    <td id="problem_short_name"><a href="">A. Array Roted</a></td>
                                    <td class="id">All test case are passed.</td>
                                    <td class="small">C++</td>
                                    <td class="small">10.0</td>
                                    <td class="small">0.000</td>
                                    <td class="center">1 Year ago</td>
                                    <td class="id" style="color: #1e7e34;">Acceptd</td>
                                    <td class="center"><a href="{{ url('/contest_submission_code') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                                </tr>
                                <tr class="impar">
                                    <td class="id">23454334</td>
                                    <td class="center">Rasel77</td>
                                    <td id="problem_short_name"><a href="">C. Graphical Loss</a></td>
                                    <td class="id">On the way</td>
                                    <td class="small">C++</td>
                                    <td class="small">10.0</td>
                                    <td class="small">0.000</td>
                                    <td class="center">1 Year ago</td>
                                    <td class="id" style="color: #000;">Inqueue</td>
                                    <td class="center"><a href="{{ url('/contest_submission_code') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                                </tr>
                                <tr class="impar">
                                    <td class="id">5734534</td>
                                    <td class="center">Rutba Rosie</td>
                                     <td id="problem_short_name"><a href="">E. Lover Life</a></td>
                                    <td class="id">Pass test case 23 ....</td>
                                    <td class="small">C++</td>
                                    <td class="small">10.0</td>
                                    <td class="small">0.000</td>
                                    <td class="center">1 Year ago</td>
                                    <td class="id" style="color: orange;">Judging...</td>
                                    <td class="center"><a href="{{ url('/contest_submission_code') }}" target="_blank" style="color: #2e2eb8;">View Solution</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
