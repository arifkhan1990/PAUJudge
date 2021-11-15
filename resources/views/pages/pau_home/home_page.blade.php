
@extends('master_page')

@section('page_css')
@stop
@section('main_content')

<div class="main-page">
    <div class="main-row">
        <h1 style="color: #d65266;">Top 10 Programmer.</h1>
        <div class="table-box">
            <div class="table-title">
                <h5></h5>
            </div>
            <div class="table-content">
                <table class="table table-bordered">
                    <thead class="table-headding">
                    <tr>
                        <th class="table-hover">Rank</th>
                        <th class="table-hover">Name</th>
                        <th class="table-hover">Points</th>
                        <th class="table-hover">Total Accepted Solution</th>
                        <th class="table-hover">Total Winning Contest</th>
                    </tr>
                    </thead>
                    <tbody class="table-data">
                    <tr class="odd gradeX">
                        <td>01</td>
                        <td><a href="">Gennady Korotkevich</a></td>
                        <td class="total_points">3104</td>
                        <td class="center total_soutions">1208</td>
                        <td class="center total_winning">34</td>
                    </tr>
                    <tr class="even gradeC">
                        <td>02</td>
                        <td><a href="">uwi</a></td>
                        <td class="total_points">3095</td>
                        <td class="center total_soutions">1206</td>
                        <td class="center total_winning">30</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>03</td>
                        <td><a href="">Alex_2008</a></td>
                        <td class="total_points">2900</td>
                        <td class="center total_soutions">1190</td>
                        <td class="center total_winning">28</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>04</td>
                        <td><a href="">Kmcode</a></td>
                        <td class="total_points">2780</td>
                        <td class="center total_soutions">1140</td>
                        <td class="center total_winning">18</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>05</td>
                        <td><a href="">rushiya</a></td>
                        <td class="total_points">2720</td>
                        <td class="center total_soutions">1110</td>
                        <td class="center total_winning">11</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>06</td>
                        <td><a href="">I_love_see</a></td>
                        <td class="total_points">2670</td>
                        <td class="center total_soutions">1095</td>
                        <td class="center total_winning">17</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>07</td>
                        <td><a href="">Faysal Mahamud</a></td>
                        <td class="total_points">2610</td>
                        <td class="center total_soutions">1090</td>
                        <td class="center total_winning">12</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>08</td>
                        <td><a href="">Petar Moor</a></td>
                        <td class="total_points">2499</td>
                        <td class="center total_soutions">1067</td>
                        <td class="center total_winning">15</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>09</td>
                        <td><a href="">Abdullaha</a></td>
                        <td class="total_points">2440</td>
                        <td class="center total_soutions">980</td>
                        <td class="center total_winning">18</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>10</td>
                        <td><a href="">Gegor</a></td>
                        <td class="total_points">2300</td>
                        <td class="center total_soutions">969</td>
                        <td class="center total_winning">14</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="main-row">
        <h1>Top 5 Contubutor</h1>
        <div class="table-box">
            <div class="table-title">
                <h5></h5>
            </div>
            <div class="table-content">
                <table class="table table-bordered">
                    <thead class="table-headding">
                    <tr>
                        <th class="table-hover">Rank</th>
                        <th class="table-hover">Name</th>
                        <th class="table-hover">Contributing Points</th>
                        <th class="table-hover">Total Contribution</th>
                        <th class="table-hover">Last Month Contribution</th>
                    </tr>
                    </thead>
                    <tbody class="table-data">
                    <tr class="odd gradeX">
                        <td>01</td>
                        <td><a href="">Gennady Korotkevich</a></td>
                        <td class="total_points">3104</td>
                        <td class="center total_soutions">1208</td>
                        <td class="center total_winning">34</td>
                    </tr>
                    <tr class="even gradeC">
                        <td>02</td>
                        <td><a href="">uwi</a></td>
                        <td class="total_points">3095</td>
                        <td class="center total_soutions">1206</td>
                        <td class="center total_winning">30</td>
                    </tr>
                    <tr class="odd gradeA">
                        <td>03</td>
                        <td><a href="">Alex_2008</a></td>
                        <td class="total_points">2900</td>
                        <td class="center total_soutions">1190</td>
                        <td class="center total_winning">28</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>04</td>
                        <td><a href="">Kmcode</a></td>
                        <td class="total_points">2780</td>
                        <td class="center total_soutions">1140</td>
                        <td class="center total_winning">18</td>
                    </tr>
                    <tr class="even gradeA">
                        <td>05</td>
                        <td><a href="">rushiya</a></td>
                        <td class="total_points">2720</td>
                        <td class="center total_soutions">1110</td>
                        <td class="center total_winning">11</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="main-row">
        <div class="left-row ">
        <h1 class="table-title">Last Month Top 5 points Achivers</h1>
            <div class="half-table-box">
                <div class="table-title">
                    <h5></h5>
                </div>
                <div class="half-table-content">
                    <table class="half-table table-bordered">
                        <thead class="half-table-headding">
                        <tr>
                            <th class="table-headding-hover">Rank</th>
                            <th class="table-headding-hover">Name</th>
                            <th class="table-headding-hover">Contribution Points</th>
                            <th class="table-headding-hover">Solving Points</th>
                            <th class="table-headding-hover">Total Points</th>
                        </tr>
                        </thead>
                        <tbody class="half-table-data">
                        <tr class="even gradeA">
                            <td>01</td>
                            <td><a href="" class="user_name">I_love_see</a></td>
                            <td class="total_points">2670</td>
                            <td class="center total_soutions">1095</td>
                            <td class="center total_winning">17</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>02</td>
                            <td><a href="" class="user_name">Faysal Mahamud</a></td>
                            <td class="total_points">2610</td>
                            <td class="center total_soutions">1090</td>
                            <td class="center total_winning">12</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>03</td>
                            <td><a href="" class="user_name">Petar Moor</a></td>
                            <td class="total_points">2499</td>
                            <td class="center total_soutions">1067</td>
                            <td class="center total_winning">15</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>04</td>
                            <td><a href="" class="user_name">Abdullaha</a></td>
                            <td class="total_points">2440</td>
                            <td class="center total_soutions">980</td>
                            <td class="center total_winning">18</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>05</td>
                            <td><a href="" class="user_name">Gegor</a></td>
                            <td class="total_points">2300</td>
                            <td class="center total_soutions">969</td>
                            <td class="center total_winning">14</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
        <div class="right-row">
            <h1 class="table-title">Last Contest Winner</h1>
            <div class="half-table-box">
                <div class="table-title">
                    <h5></h5>
                </div>
                <div class="half-table-content">
                    <table class="half-table table-bordered">
                        <thead class="half-table-headding">
                        <tr>
                            <th class="table-headding-hover">Rank</th>
                            <th class="table-headding-hover">Name</th>
                            <th class="table-headding-hover">Contest Points</th>
                            <th class="table-headding-hover">Total Accepted Solution</th>
                            <th class="table-headding-hover">Total Winning Contest</th>
                        </tr>
                        </thead>
                        <tbody class="half-table-data">
                        <tr class="">
                            <td>01</td>
                            <td><a href="" class="user_name">Uwi</a></td>
                            <td class="total_points">3104</td>
                            <td class="center total_soutions">1208</td>
                            <td class="center total_winning">34</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>02</td>
                            <td><a href="" class="user_name">Arif Khan</a></td>
                            <td class="total_points">3095</td>
                            <td class="center total_soutions">1206</td>
                            <td class="center total_winning">30</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>03</td>
                            <td><a href="" class="user_name">Alex_2008</a></td>
                            <td class="total_points">2900</td>
                            <td class="center total_soutions">1190</td>
                            <td class="center total_winning">28</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>04</td>
                            <td><a href="" class="user_name">Kmcode</a></td>
                            <td class="total_points">2780</td>
                            <td class="center total_soutions">1140</td>
                            <td class="center total_winning">18</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>05</td>
                            <td><a href="" class="user_name">rushiya</a></td>
                            <td class="total_points">2720</td>
                            <td class="center total_soutions">1110</td>
                            <td class="center total_winning">11</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page_js')
@stop

