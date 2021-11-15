
@extends('master_page')
@section('page_css')
<link rel="stylesheet" href="../css/main_page.css">
<link rel="stylesheet" href="../css/single_page.css">
<link rel="stylesheet" href="../css/problem_rankboard.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<script type="text/javascript">
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer1", {
            theme: "light1", // "light2", "dark1", "dark2"
            animationEnabled: false, // change to true
            title:{
            },
            data: [
                {
                    // Change type to "bar", "area", "spline", "pie",etc.
                    type: "column",
                    dataPoints: [
                        { label: "AC",  y: 60, color: "#27AE60"  },
                        { label: "WA",  y: 48, color: "#E74C3C"  },
                        { label: "PE", y: 28, color: "#86862C"  },
                        { label: "CE", y: 15, color: "#F1C40F"  },
                        { label: "TL",  y: 30, color: "#2980B9"  },
                        { label: "RE", y: 25, color: "#00AAAA"  },
                        { label: "PRE",  y: 30, color: "#8E44AD"  },

                    ]
                }
            ]
        });
        chart.render();
        var options = {
            animationEnabled: true,
            title: {
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: [
                    { label: "C", y: 4034,color: "#3498db", },
                    { label: "C++", y: 3200,color: "#2980b9", },
                    { label: "Java", y: 2267,color: "#e74c3c", },
                    { label: "Python", y: 1234,color: "#8e44ad", },
                    { label: "C#", y: 912,color: "#e67e22", },
                    { label: "Go", y: 712,color: "#3CB371", },
                    { label: "Javascript", y: 454,color: "#FFD700", },
                    { label: "Swift", y: 524,color: "#D2691E", },
                    { label: "Kotlin", y: 418,color: "#20B2AA", },

                ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);
    }
</script>
@endsection

@section('main_content')
@include('pages.problem.problem_page_topnav')

            <div class="problem-description">
                <div class="problem-body-content">
                    <div class="description-part">
                        <div class="solution-static-part">
                            <h3>Submissions By Answer</h3>
                            <div class="solution-left-static-part">
                                <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                            </div>
                            <div class="solution-right-static-part">
                                <div id="solution-info">
                                    <ul class="type-details">
                                        <li><span style="background-color:#27AE60"></span>Accepted</li>
                                        <li><span style="background-color:#F1C40F"></span>Compilation error</li>
                                        <li><span style="background-color:#00AAAA"></span>Runtime error</li>
                                        <li><span style="background-color:#2980B9"></span>Time limit exceeded</li>
                                        <li><span style="background-color:#86862C"></span>Presentation error</li>
                                        <li><span style="background-color:#E74C3C"></span>Wrong answer</li>
                                        <li><span style="background-color:#8E44AD"></span>Possible runtime error</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="language-static-part">
                            <h3>Languagues Statistics</h3>
                            <div class="language-up-static-part">
                                <div id="chartContainer" style="height: 280px; width: 100%;"></div>
                            </div>
                            <div class="language-down-static-part">
                                <h3>Basic Info</h3>
                                <dl>
                                    <dt>Difficulty: </dt>
                                    <dd style="color: #1c7430;">Easy</dd>
                                    <dt>Submission: </dt>
                                    <dd>10243</dd>
                                    <dt>Accepted: </dt>
                                    <dd>5532</dd>
                                    <dt>Success Rate: </dt>
                                    <dd>60%</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="problem-rank">
                <div class="problem-rank-body">
                    <div class="rank-part">
                        <table>
                            <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>User</th>
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
                                <th class="dropdown">
                                    Country <i class="fa fa-caret-down"></i>
                                    <div class="dropdown-content">
                                        <a href="" value="Country" selected="">Country</a>
                                        <a href="" value="school">School</a>
                                    </div>
                                </th>
                                <th>Submission Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="impar">
                                <td class="id">1</td>
                                <td class="large" id="user1">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/76" target="_blank" class="large1">BrunoZanoelo</a>
                                    <div class="tooltiptext">
                                        <img src="../images/user1.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Bruno Zanoelo</strong>,
                                            commonly known as <a href="#">BrunoZanoelo</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 2234, Total Win: 43</p>
                                            <p>Total Accepted Solution: 2532</p>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/IN.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>

                            <tr class="impar" id="par">
                                <td class="id">2</td>
                                <td class="large" id="user2">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/03" target="_blank">Arif Khan</a>
                                        <div class="tooltiptext">
                                            <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                            <div class="short-info"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>,
                                                is an Bangladeshi programmer.
                                                <p>Total Points: 2134, Total Win: 40</p>
                                                <p>Total Accepted Solution: 2522</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/BD.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>

                            <tr class="impar">
                                <td class="id">3</td>
                                <td class="large" id="user3"><a href="/judge/en/profile/32" target="_blank">See_you</a>
                                    <div class="user_info">
                                        <img src="../images/user1.jpg" alt="" style="width: 248px;height: 150px;">
                                        <div class="short-info"><strong>Zubayer Zico</strong>,
                                            commonly known as <a href="#">See_you</a>,
                                            is an American programmer.
                                            <p>Total Points: 2034, Total Win: 36</p>
                                            <p>Total Accepted Solution: 1932</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/US.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">4</td>
                                <td class="large" id="user4">
                                    <div class="tooltip">
                                        <a href="/judge/en/profile/76" target="_blank">Lavelo</a>
                                    <div class="tooltiptext">
                                        <img src="../images/arif1.jpg" alt="" style="width: 228px;height: 150px; padding-left: 1px;padding-right: 1px;border-radius: 5px; ">
                                        <div class="short-info"><strong>Sajuno Lavely</strong>,
                                            commonly known as <a href="#">Lavelo</a>,
                                            is an Espanis programmer.
                                            <p>Total Points: 1834, Total Win: 34</p>
                                            <p>Total Accepted Solution: 1732</p>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/ES.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">5</td>
                                <td class="large" id="user5">
                                    <div class="tooltip">
                                        <a href="/judge/en/profile/76" target="_blank">Zico143</a>
                                    <div class="tooltiptext">
                                        <img src="../images/user2.jpg" alt="" style="width: 228px;height: 150px; padding-left: 1px;padding-right: 1px;">
                                        <div class="short-info"><strong>Zordan Zico</strong>,
                                            commonly known as <a href="#">Zico143</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 1534, Total Win: 23</p>
                                            <p>Total Accepted Solution: 1632</p>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/PH.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">6</td>
                                <td class="large" id="user6"><a href="/judge/en/profile/76" target="_blank">Sriya_Shoud</a>
                                    <div class="user_info">
                                        <img src="../images/arif.jpg" alt="" style="width: 248px;height: 150px;">
                                        <div class="short-info"><strong>Sriya Shoud</strong>,
                                            commonly known as <a href="#">Sriya_Shoud</a>,
                                            is an Turusko programmer.
                                            <p>Total Points: 1634, Total Win: 18</p>
                                            <p>Total Accepted Solution: 1532</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="small">C++</td>
                                <td class="small">10.0</td>
                                <td class="small">0.000</td>
                                <td class="small"><img src="../images/TR.png" alt=""></td>
                                <td class="center">3/15/12, 10:24:34 PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('page_js')

@endsection
