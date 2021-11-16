@extends('master_page')
@section('page_css')
    @include('pages.contest.contest_css')
        <link rel="stylesheet" href="../css/clearifiction.css">
        <link rel="stylesheet" href="../css/single_page.css">
        <link rel="stylesheet" href="../css/solution_submission_page.css">
@endsection
@section('main_content')
   @include('pages.contest.contest_topnav')
                <div class="clearification">
                   <div class="question-form">
                        <div class="container">
                            <form action="" method="">
<!--                                 <div class="row_q">
                                    <div class="col-25">
                                        <label for="fname">Problem Id</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="problem-id" placeholder="Problem Id">
                                    </div>
                                </div> -->
                                <div class="row_q">
                                    <div class="col-25">
                                        <label for="fname">Problem Id</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="" id="" style="height:44px !important;">
                                            <option value=""></option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                            <option value="e">E</option>
                                        </select>
                                        <!-- <input type="text" id="fname" name="problem-id" placeholder="Problem Id">
 -->                                    </div>
                                </div>

                                <div class="row_q">
                                    <div class="col-25">
                                        <label for="subject">Asking</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea id="subject" name="question" placeholder="Ask your dauod..." style="height:100px"></textarea>
                                    </div>
                                </div>
                                <div class="row_q">
                                <div class="col-25"></div>
                                    <div class="col-75" id ="q-input">
                                       <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                   </div>
                    <div class="single-clearification">
                        <div class="question">
                        <div class="question-left">
                        <div class="basic_info_question_user">
                            <span id="q_by_user"><a href="#">Rutba88</a></span>
                            <span id="problem_id"><a href="#">Array Roted</a></span>
                        </div>
                           <div class="question_details">
                            <span id="question_tag">Q.</span>
                            <span id="question_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid, corrupti temporibus sequi voluptates?</span>
                           </div>
                        </div>
                        <div class="question-right">
                            <input id="ans-button" type="text" value="Ans">
                        </div>
                        </div>
                    </div>
                    <div class="single-clearification">

                        <div class="anwser">
                        <div class="basic_info_anwser">
                            <span id="q_by_user"><a href="#">Author</a></span>
                            <span id="problem_id"><a href="#">Array Roted</a></span>
                        </div>
                           <div class="anwser_details">
                            <span id="question_tag">A.</span>
                            <span id="question_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid, corrupti temporibus sequi voluptates?</span>
                           </div>
                        </div>
                    </div>

                    <div class="single-clearification">
                     <div class="question">
                        <div class="question-left">
                        <div class="basic_info_question_user">
                            <span id="q_by_user"><a href="#">Faysal143</a></span>
                            <span id="problem_id"><a href="#">Lover Life</a></span>
                        </div>
                           <div class="question_details">
                            <span id="question_tag">Q.</span>
                            <span id="question_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quos dolores non magni laboriosam, tempora, sequi ullam iure aperiam neque molestias ab eius nesciunt omnis eveniet ipsam illo fugiat explicabo.</span>
                           </div>
                        </div>
                        <div class="question-right">
                            <!-- <input id="ans-button" type="text" value="Ans"> -->
                        </div>
                    </div>
                    </div>
                     <div class="single-clearification">
                        <div class="question">
                        <div class="question-left">
                        <div class="basic_info_question_user">
                            <span id="q_by_user"><a href="#">HamidHossain</a></span>
                            <span id="problem_id"><a href="#">Bubli Sort</a></span>
                        </div>
                           <div class="question_details">
                            <span id="question_tag">Q.</span>
                            <span id="question_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid, corrupti temporibus sequi voluptates?</span>
                           </div>
                        </div>
                        <div class="question-right">
                            <input id="ans-button" type="text" value="Ans">
                        </div>
                        </div>
                    </div>
                    <div class="single-clearification">

                        <div class="anwser">
                        <div class="basic_info_anwser">
                            <span id="q_by_user"><a href="#">Author</a></span>
                            <span id="problem_id"><a href="#">Array Roted</a></span>
                        </div>
                           <div class="anwser_details">
                            <span id="question_tag">A.</span>
                            <span id="question_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid, corrupti temporibus sequi voluptates?</span>
                           </div>
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
        <script src="../js/prism.js"></script>
@endsection
