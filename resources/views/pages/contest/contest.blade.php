@extends('master_page')
@section('page_css')
   @include('pages.contest.contest_css')
@endsection
@section('main_content')
    <div class="problem-page-header-part">
        <div class="problem-row-header-part">
            <div class="header-part">
                <a href="../contest/contest.html">
                All Contests
                <h1>Contests</h1>
                </a>
            </div>
            <div class="problem-create-part">
            <button class="create-problem"><a href="../problem/create_contest.html">Create Contest</a></button>
        </div>
        </div>
    </div>
    <div class="problem-row-header-part">
        <hr>
    </div>

    <div class="problem-page-main-part">
        <div class="problem-row-main-part">
            <div class="top-header-part">
                <a href="#">RunningContests </a><span>  |  </span><a href="#"> UpCommingContests </a><span>  |  </span><a href="#"> PastContests </a>
            </div>
            <div class="running-contest">
                <h1 style="padding-top: 10px;">Running Contests</h1>
            </div>
            <div class="contest-containe">
                <div class="running-contest-part">
                        <table>
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">Red Coder Contest</h3></td>
                                <td class="center">30/10/19, 10:30:00 PM</td>
                                <td class="small">Running</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">
                                    <a href="{{ url('/contest_dasboard') }}">View</a></Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">Zico2 Contest</h3></td>
                                <td class="center">16/09/19, 10:30:00 AM</td>
                                <td class="small">Running</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">
                                    <a href="{{ url('/contest_dasboard') }}">View</a></Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">October Dev 2 Contest</h3></td>
                                <td class="center">10/01/19, 5:30:00 PM</td>
                                <td class="small">Running</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">
                                    <a href="{{ url('/contest_dasboard') }}">View</a></Button></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="upcomming-contest">
                <h1 style="padding-top: 10px;">UpComming Contests</h1>
            </div>
            <div class="contest-containe">
                <div class="upcomming-contest-part">
                        <table>
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">New Year Contest</h3></td>
                                <td class="center">01/01/20, 10:30:00 PM</td>
                                <td class="small" style="padding-right: 10px;"><Button style="background: #48C9B0;">Registation</Button></td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">Mother Day Contest</h3></td>
                                <td class="center">02/15/20, 10:30:00 AM</td>
                                <td class="small" style="padding-right: 10px;"><Button style="background: #48C9B0;">Registation</Button></td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">March Dev 2 Contest</h3></td>
                                <td class="center">03/15/20, 5:30:00 PM</td>
                                <td class="small" style="padding-right: 10px;"><Button style="background: #48C9B0;">Registation</Button></td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">Batch-193 Class Contest</h3></td>
                                <td class="center">3/21/20, 10:00:00 PM</td>
                                <td class="small" style="padding-right: 10px;"><Button style="background: #48C9B0;">Registation</Button></td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="past-contest">
                <h1 style="padding-top: 10px;">Past Contests</h1>
            </div>
            <div class="contest-containe">
                <div class="past-contest-part">
                        <table>
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Start Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">Boul Contest</h3></td>
                                <td class="center">10/09/17, 10:30:00 PM</td>
                                <td class="small">Finished</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">Zico Contest</h3></td>
                                <td class="center">10/23/18, 10:30:00 AM</td>
                                <td class="small">Finished</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Public</td>
                                <td class="center"><h3 style="color: #48C9B0;">Monthly Dev 2 Contest</h3></td>
                                <td class="center">8/11/18, 5:30:00 PM</td>
                                <td class="small">Finished</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">Batch-172 Class Contest</h3></td>
                                <td class="center">7/15/18, 10:00:00 PM</td>
                                <td class="small">Finished</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>

                            </tr>
                            <tr class="impar">
                                <td class="small-left">Private</td>
                                <td class="center"><h3 style="color: #48C9B0;">Batch-183 Class Contest</h3></td>
                                <td class="center">3/15/18, 10:00:00 PM</td>
                                <td class="small">Finished</td>
                                <td class="small-right"><Button style="background: #D2B4DE;">View</Button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection
