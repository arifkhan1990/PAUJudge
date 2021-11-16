@extends('master_page')
@section('page_css')
    <link rel="stylesheet" href="../css/main_page.css">
    <link rel="stylesheet" href="../css/single_page.css">
    <link rel="stylesheet" href="../css/editorial.css">
    <script src="../js/like-dislike.js"></script>
    <script src="../js/demo.js"></script>
@endsection

@section('main_content')
    @include('pages.problem.problem_page_topnav')
        <div class="editorial-page">
            <div class="editorial-left-part">
                <div class="editorial-table-body">
                    <div class="explaine-part">
                        <div class="editorial-boarder">
                           <div class="explanation"><h2>Explanation</h2></div>
                            <div class="editorial-body">
                                <div class="explaine-body">
                                    <div class="editorial-p">
                                    <div class="editorialByName">
                                        <img src="../images/arif.jpg" alt="user_name" class="image-style">
                                        <span id="byEditorial">Editorial by </span><span id="nameByeditorial">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/03" target="_blank">Arif77</a>
                                    <div class="tooltiptext">
                                        <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 2134, Total Win: 40</p>
                                            <p>Total Accepted Solution: 2522</p>
                                        </div>
                                    </div>
                                </div>
                                </span>
                                </div>
                                    <div class="like-unlike">
                                        <div id="demo" class="likeDislike">
                                            <button class="dislike" id="disL"><i class="fa fa-thumbs-down"></i>
                                                <span class="likes">0</span>
                                            </button>
                                            <button class="like" id="lik"><i class="fa fa-thumbs-up"></i>
                                                <span class="dislikes">0</span>
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="problem-explaine">
                                        <p>Given the fixed small size of the problem, brute force is fine.</p>
                                        <p>Points to note:-</p>
                                        <ol>
                                            <li>Negative values possible.</li>
                                            <li>Maximum sum can be less than zero.</li>
                                            <li>Range of element value is -9 to 9.</li>
                                            <li>Numbers to be summed for each hourglass = 7.</li>
                                            <li>Minimum possible value for sum = 7 * -9 = -63</li></ol>
                                        <p>So we'll initialize our maxSum to -63.  From there, we just calculate the sums of all hourglasses and return the maxSum.  Here is an implementation of the function in Python:</p>
                                    </div>
                                    <div class="editorial-code">
                                        <!--<div class="code-part">-->
                                            <pre>
                                                <span></span><span class="k">def</span> <span class="nf">array2D</span><span class="p">(</span><span class="n">arr</span><span class="p">):</span>
                                                <span class="c1"># want to find the maximum hourglass sum</span>
                                                <span class="c1"># minimum hourglass sum = -9 * 7 = -63</span>

                                                <span class="n">maxSum</span> <span class="o">=</span> <span class="o">-</span> <span class="mi">63</span>

    <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">4</span><span class="p">):</span>
        <span class="k">for</span> <span class="n">j</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">4</span><span class="p">):</span>

            <span class="c1"># sum of top 3 elements</span>
            <span class="n">top</span> <span class="o">=</span> <span class="nb">sum</span><span class="p">(</span><span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="p">][</span><span class="n">j</span><span class="p">:</span><span class="n">j</span><span class="o">+</span><span class="mi">3</span><span class="p">])</span>

            <span class="c1"># sum of the mid element</span>
            <span class="n">mid</span> <span class="o">=</span> <span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">][</span><span class="n">j</span><span class="o">+</span><span class="mi">1</span><span class="p">]</span>

            <span class="c1"># sum of bottom 3 elements</span>
            <span class="n">bottom</span> <span class="o">=</span> <span class="nb">sum</span><span class="p">(</span><span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="o">+</span><span class="mi">2</span><span class="p">][</span><span class="n">j</span><span class="p">:</span><span class="n">j</span><span class="o">+</span><span class="mi">3</span><span class="p">])</span>

            <span class="n">hourglass</span> <span class="o">=</span> <span class="n">top</span> <span class="o">+</span> <span class="n">mid</span> <span class="o">+</span> <span class="n">bottom</span>

            <span class="k">if</span> <span class="n">hourglass</span> <span class="o">&gt;</span> <span class="n">maxSum</span><span class="p">:</span>
                <span class="n">maxSum</span> <span class="o">=</span> <span class="n">hourglass</span>

    <span class="k">return</span> <span class="n">maxSum</span>
                                            </pre>
                                        <!--</div>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                            <div class="tested"><h2>Tester's Code</h2></div>
                            <div class="tested-body">
                                <div class="editorial-body">
                                    <div class="explaine-body">
                                        <div class="editorial-p">
                                        <div class="editorialByName">
                                            <img src="../images/arif.jpg" alt="user_name" class="image-style">
                                            <span id="byEditorial">Editorial by </span><span id="nameByeditorial">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/03" target="_blank">Arif77</a>
                                    <div class="tooltiptext">
                                        <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 2134, Total Win: 40</p>
                                            <p>Total Accepted Solution: 2522</p>
                                        </div>
                                    </div>
                                </div>
                                </span>
                                        </div>
                                        <div class="like-unlike">
                                            <select class="subcategory-name" id="selectNew">
                                                <option value="Sorting">C</option>
                                                <option value="Serching">C++</option>
                                                <option value="Array">Python3</option>
                                                <option value="Graph_Terversal">Java</option>
                                                <option value="Number_Theory">Javascript</option>
                                                <option value="Geometry">PHP</option>
                                                <option value="Stack">C#</option>
                                                <option value="Queue">Kotlin</option>
                                                <option value="Linked_List">Swift</option>
                                                <option value="Tree">Go</option>
                                            </select>
                                            <button class="apply" id="apply">Apply</button>
                                        </div>
                                        </div>
                                        <div class="editorial-code">
                                            <!--<div class="code-part">-->
                                            <pre>
                                                <span></span><span class="k">def</span> <span class="nf">array2D</span><span class="p">(</span><span class="n">arr</span><span class="p">):</span>
                                                <span class="c1"># want to find the maximum hourglass sum</span>
                                                <span class="c1"># minimum hourglass sum = -9 * 7 = -63</span>

                                                <span class="n">maxSum</span> <span class="o">=</span> <span class="o">-</span> <span class="mi">63</span>

    <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">4</span><span class="p">):</span>
        <span class="k">for</span> <span class="n">j</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">4</span><span class="p">):</span>

            <span class="c1"># sum of top 3 elements</span>
            <span class="n">top</span> <span class="o">=</span> <span class="nb">sum</span><span class="p">(</span><span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="p">][</span><span class="n">j</span><span class="p">:</span><span class="n">j</span><span class="o">+</span><span class="mi">3</span><span class="p">])</span>

            <span class="c1"># sum of the mid element</span>
            <span class="n">mid</span> <span class="o">=</span> <span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">][</span><span class="n">j</span><span class="o">+</span><span class="mi">1</span><span class="p">]</span>

            <span class="c1"># sum of bottom 3 elements</span>
            <span class="n">bottom</span> <span class="o">=</span> <span class="nb">sum</span><span class="p">(</span><span class="n">arr</span><span class="p">[</span><span class="n">i</span><span class="o">+</span><span class="mi">2</span><span class="p">][</span><span class="n">j</span><span class="p">:</span><span class="n">j</span><span class="o">+</span><span class="mi">3</span><span class="p">])</span>

            <span class="n">hourglass</span> <span class="o">=</span> <span class="n">top</span> <span class="o">+</span> <span class="n">mid</span> <span class="o">+</span> <span class="n">bottom</span>

            <span class="k">if</span> <span class="n">hourglass</span> <span class="o">&gt;</span> <span class="n">maxSum</span><span class="p">:</span>
                <span class="n">maxSum</span> <span class="o">=</span> <span class="n">hourglass</span>

    <span class="k">return</span> <span class="n">maxSum</span>
                                            </pre>
                                            <!--</div>-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="editorial-right-part">
                <div class="right-info">
                    <div class="editorial-info">
                        <span class="editorial-heading">Difficulty :</span>
                        <span class="editorial-text">Easy</span>
                    </div>
                    <div class="editorial-info">
                        <span class="editorial-heading">Time Complexity :</span>
                        <span class="editorial-text">2s</span>
                    </div>
                    <div class="editorial-info">
                        <span class="editorial-heading">Memory Complexity :</span>
                        <span class="editorial-text">256 KB</span>
                    </div>
                    <div class="editorial-info">
                        <span class="editorial-heading">Publish Date :</span>
                        <span class="editorial-text">10 Jan 2019</span>
                    </div>
                    <p>
                        <span class="editorial-heading"><span id="bestSolution">Best Submission</span> by <span id="byName"><a
                                href="">Arif77</a></span></span>
                    </p>
                </div>
            </div>
            <div class="editorial-right-part" id="bgColor">
                <div class="right-info">
                    <h2>Feedback</h2>
                    <p>
                        <span class="editorial-heading"><span>Was this editorial helpful?</span></span>
                    </p>
                    <button class="editorialHelp">Yes</button>
                    <button class="editorialHelp">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection



