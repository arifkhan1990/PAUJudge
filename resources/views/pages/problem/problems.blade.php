@extends('master_page')
@section('page_css')
    <link rel="stylesheet" href="../css/problems.css">
@stop


@section('main_content')
<div class="problem-page-header-part">
    <div class="problem-row-header-part">
        <div class="header-part">
            <a href="#">All Problems
              <h1>Problems</h1>
              </a>
        </div>
        <div class="problem-create-part">
            <button class="create-problem"><a href="../problem/create_problem.html">Create Problem</a></button>
        </div>
    </div>
  </div>

  <div class="problem-row-header-part">
      <hr>
  </div>

  <div class="problem-page-main-part">
      <div class="problem-row-main-part">
          <div class="top-header-part">
              <a href="#">Category </a><span>  |  </span><a href="#"> SubCategory </a><span>  |  </span><a href="#"> Difficulty </a><span>  |  </span><a href="#"> Status </a></span>
          </div>
          <div class="problem-left-containe">
              <a href="{{ url('/problem_dashboard') }}">
              <div class="single-problem-containe">
                  <div class="problem-details">
                      <div class="problem-info">
                          <span id="problem-name">Array Rotation</span><br/>
                          <span class="problem-difficulty">Easy , </span>
                          <span class="problem-score">Score : 15 , </span>
                          <span class="problem-AC-rate"> Acception rate: 65%</span>
                      </div>
                  </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn STL in C++ . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="unsolved" value="Unsolved">Unsolved <i class="fa fa-lock" id="unsolved-icon"></i></button>
                          </div>
                      </div>
              </div>
              </a>
              <a href="">
              <div class="single-problem-containe">
                      <div class="problem-details">
                          <div class="problem-info">
                              <span id="problem-name">Array Reverse Rotation</span><br/>
                              <span class="problem-difficulty">Easy , </span>
                              <span class="problem-score">Score : 15 , </span>
                              <span class="problem-AC-rate"> Acception rate: 60%</span>
                          </div>
                      </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn STL in C++ . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="solved" value="Solved">Solved <i class="fa fa-check" id="solved-icon"></i></button>
                          </div>
                      </div>
              </div>
              </a>
              <a href="">
              <div class="single-problem-containe">
                      <div class="problem-details">
                          <div class="problem-info">
                              <span id="problem-name">Matrix Multipication</span><br/>
                              <span class="problem-difficulty">Easy , </span>
                              <span class="problem-score">Score : 20 , </span>
                              <span class="problem-AC-rate"> Acception rate: 45%</span>
                          </div>
                      </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn STL in C++ . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="unsolved" value="Unsolved">Unsolved <i class="fa fa-lock" id="unsolved-icon"></i></button>
                          </div>
                      </div>
              </div>
              </a>
              <div class="single-problem-containe">
                  <a href="">
                      <div class="problem-details">
                          <div class="problem-info">
                              <span id="problem-name">DP Coien Change</span><br/>
                              <span class="problem-difficulty">Easy , </span>
                              <span class="problem-score">Score : 15 , </span>
                              <span class="problem-AC-rate"> Acception rate: 25%</span>
                          </div>
                      </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn Dynamic Programming approche . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="solved" value="Solved">Solved <i class="fa fa-check" id="solved-icon"></i></button>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="single-problem-containe">
                  <a href="">
                      <div class="problem-details">
                          <div class="problem-info">
                              <span id="problem-name">Who is The Old person?</span><br/>
                              <span class="problem-difficulty">Easy , </span>
                              <span class="problem-score">Score : 10 , </span>
                              <span class="problem-AC-rate"> Acception rate: 80%</span>
                          </div>
                      </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn sorting technique . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="solved" value="Solved">Solved <i class="fa fa-check" id="solved-icon"></i></button>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="single-problem-containe">
                  <a href="">
                      <div class="problem-details">
                          <div class="problem-info">
                              <span id="problem-name">Dictionery Sorting</span><br/>
                              <span class="problem-difficulty">Easy , </span>
                              <span class="problem-score">Score : 25 , </span>
                              <span class="problem-AC-rate"> Acception rate: 15%</span>
                          </div>
                      </div>
                      <div class="problem-extra-info">
                          <div class="extra-info-left">
                              <p>Learn STL in C++ . Then solve this problem.</p>
                          </div>
                          <div class="extra-info-right">
                              <button id="unsolved" value="Unsolved">Unsolved <i class="fa fa-lock" id="unsolved-icon"></i></button>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
          <div class="right-side">
              <div class="problem-right-containe">
                  <div class="top-title">
                      <h2>Problem Search</h2>
                  </div>
                  <div class="right-main-containe">
                      <div class="search-problem">
                          <form action="#" class="problem-search">
                              <input type="text" placeholder="Search Problem" name="problem-search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                      <div class="category-search">
                          <span>Category</span>
                          <select class="category-name">
                              <option value="Algorithms">Algorithms</option>
                              <option value="DataStructure">Data Structure</option>
                              <option value="Mathematics">Mathematics</option>
                              <option value="Strings">Strings</option>
                              <option value="Dynamic_Programming">Dynamic Programming</option>
                              <option value="Gready">Gready</option>
                              <option value="AdHoc">AdHoc</option>
                              <option value="Graph Theory">Graph Theory</option>
                              <option value="Unknown">Unknown</option>
                          </select>
                      </div>
                      <div class="category-search">
                          <span id="subCategory">SubCategory</span>
                          <select class="subcategory-name">
                              <option value="Sorting">Sorting</option>
                              <option value="Serching">Serching</option>
                              <option value="Array">Array</option>
                              <option value="Graph_Terversal">Graph Terversal</option>
                              <option value="Number_Theory">Number Theory</option>
                              <option value="Geometry">Geometry</option>
                              <option value="Stack">Stack</option>
                              <option value="Queue">Queue</option>
                              <option value="Linked_List">Linked List</option>
                              <option value="Tree">Tree</option>
                              <option value="Spanning_Tree">Spanning Tree</option>
                              <option value="Shotest_Path">Shotest Path</option>
                              <option value="Others">Others</option>
                          </select>
                      </div>
                      <div class="category-search">
                          <span id="difficulty">Difficulty level</span>
                          <select class="difficulty-level">
                              <option value="Easy" class="easy" style="color: forestgreen;">Easy</option>
                              <option value="Medium" class="Medium" style="color: #b366ff">Medium</option>
                              <option value="Hard" class="hard" style="color: indianred">Hard</option>
                              <option value="Expart" class="expart" style="color: #ff80aa">Expart</option>
                          </select>
                      </div>
                      <button type="submit" class="search_button">GO</button>
                  </div>
              </div>

              <div class="problem-right-containe">
                  <div class="top-title"  id="new-problem">
                      <h2>New Problems</h2>
                  </div>
                  <div class="right-main-containe">
                      <a href="">
                          <div class="single-problem-containe">
                              <div class="new-problem-details">
                                  <div class="problem-info">
                                      <span id="problem-name" style="color: #117a8b">Array Rotation</span><br/>
                                      <span class="problem-difficulty">Easy , </span>
                                      <span class="problem-score">Score : 15 , </span>
                                      <span class="problem-AC-rate"> Author: GeekforGeek</span>
                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="single-problem-containe">
                              <div class="new-problem-details">
                                  <div class="problem-info">
                                      <span id="problem-name" style="color: #117a8b">Maximum Sum</span><br/>
                                      <span class="problem-difficulty">Easy , </span>
                                      <span class="problem-score">Score : 10 , </span>
                                      <span class="problem-AC-rate"> Author: Arif Khan</span>
                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="single-problem-containe">
                              <div class="new-problem-details">
                                  <div class="problem-info">
                                      <span id="problem-name" style="color: #117a8b">Tree Treversal</span><br/>
                                      <span class="problem-difficulty" style="color: #7300e6;">Medium , </span>
                                      <span class="problem-score">Score : 30 , </span>
                                      <span class="problem-AC-rate"> Author: Zico</span>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('page_js')

@endsection



