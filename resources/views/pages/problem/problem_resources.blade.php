@extends('master_page')

@sectionMissing('page_css')
<link rel="stylesheet" href="../css/main_page.css">
<link rel="stylesheet" href="../css/single_page.css">
<link rel="stylesheet" href="../css/resources.css">
@endif

@section('main_content')
    @include('pages.problem.problem_page_topnav')
        <div class="editorial-page">
            <div class="editorial-left-part">
                <div class="editorial-table-body">
                    <div class="explaine-part">
                        <div class="editorial-boarder">
                            <div class="editorial-body">
                                <div class="explaine-body">
                                    <div class="editorial-p">
                                        <div class="editorialByName">
                                            <div class="topic-name"><h2>Array</h2></div>
                                            <span id="byEditorial">by </span><span id="nameByeditorial">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/03" target="_blank" class="userNameTopic">Arif77</a>
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
                                        <p>An array is a sequential collection of elements of same data type and stores data elements in a continuous memory location. The elements of an array are accessed by using an index. The index of an array of size N can range  from 0 to N - 1.For example, if your array size is 5, then your index will range from 0 to 4(5-1).Each element of an array can be accessed by using arr[index].</p>
                                        <br /><p>Consider following array. The size of this array is 5.If you want to access 12.then you can access it by using arr[ 1 ] i.e. 12.</p>
                                        <br><p><strong>Array declaration</strong> </p>
                                        <p>For example, in C/C++, to declare an array, you must specify, the following:</p>
                                        <ol>
                                            <li>
                                                <p>Size of the array: This defines the number of elements that can be
                                                    stored in the array.  </p>
                                            </li>
                                            <li>
                                                <p>Type of array: This defines the type of each element i.e. number,
                                                    character, or any other data type.</p>
                                            </li>
                                        </ol>
                                        <br>
                                        <p>A C++ example would be:</p>
                                        <pre class="codeArea">
                                            <code>
                                                <span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">];</span>
                                            </code>
                                        </pre>
                                        <p>This is a static array and the other kind is dynamic array, where type is just enough for declaration. In dynamic arrays, size increases as more elements are added to the array.</p>
                                        <br><p><strong>Array Initialization:</strong> </p><br>
                                        <p>Array can be initialized either at the time of declaration or after that.</p>
                                        <br>
                                        <p>The sample format if an array is initialized at the time of declaration is</p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="pln">type arr</span><span class="pun">[</span><span class="pln">size</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">elements</span><span class="pun">}</span>
                                            </code>
                                        </pre>
                                        <p>The sample format of an array that is initialized in C++, is </p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">12</span><span class="pun">,</span><span class="pln"> </span><span class="lit">7</span><span class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">9</span><span class="pun">};</span>
                                        </code>
                                        </pre>
                                        <p>An array can be initialized after declaration by assigning values to each index of the array as follows</p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="pln"> type arr</span><span class="pun">[</span><span class="pln">size</span> <span class="pun">]</span>
                                            </code>
                                            <code>
                                               <span class="pln"></span> <span class="pln">arr</span><span class="pun">[</span><span class="pln">index</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">12</span>
                                            </code>
                                        </pre>
                                        <p>C++ example:</p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">];</span>
                                            </code>
                                            <code>
                                                <span class="pln">arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">4</span><span class="pun">;</span>
                                            </code>
                                            <code>
                                                <span class="pln">arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">12</span><span class="pun">;</span>
                                            </code>
                                        </pre>
                                        <p><strong>Processing an Array:</strong> </p><br>
                                        <p>The most basic form of processing an array is to loop over the array and print all its elements.</p>
                                        <br>
                                        <p>A sample of processing an array by looping over the array and printing its elements is as follows:</p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="pln">type arr</span><span class="pun">[</span><span class="pln">size</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">elements</span><span class="pun">}</span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="kwd">for</span><span class="pln"> idx </span><span class="kwd">from</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> to size</span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="kwd">print</span><span class="pln"> arr</span><span class="pun">[</span><span class="pln">idx</span><span class="pun">]</span>
                                            </code>
                                        </pre>
                                        <br><p><strong>C++ example: </strong></p>
                                        <pre class="codeArea" style="">
                                            <code>
                                                <span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pun">{</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="com">// Array declaration and initialization</span><span class="pln"></span>
                                            </code>
                                            <code>
                                               <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span> <span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">12</span><span class="pun">,</span><span class="pln"> </span><span class="lit">7</span><span class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">9</span><span class="pun">};</span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="com">// Iterate over the array</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> idx</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> idx</span><span class="pun">&lt;</span><span class="lit">5</span><span class="pun">;</span><span class="pln"> idx</span><span class="pun">++)</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pun">{</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="com">// Print out each element in a new line</span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln">cout </span><span class="pun">&lt;&lt;</span><span class="pln"> arr</span><span class="pun">[</span><span class="pln">idx</span><span class="pun">]</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pun">}</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="pln"></span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"></span>
                                            </code>
                                            <code>
                                                <span class="pun">}</span>
                                            </code>
                                        </pre>
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
               <div class="more-topics">
                   <h2>More Topics</h2>
               </div>
                <div class="topic-name">

                    <span class="sp1"><a href="">Vector </a><span class="pln byName">by </span>
                        <div class="tooltip">
                        <span class="topicAuthorName">
                            <a href="/judge/en/profile/03" target="_blank" class="userNameTopic">Arif77</a>
                            <div class="tooltiptext">
                                <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                <div class="short-info-author"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>
                                    <div class="author-info">
                                        <span>Contribution : <span class="numContribute pln"> +134</span></span><br>
                                        <span>Rating : <span class="numContribute pln"> 2345</span></span><br>
                                        <span>Friends : <span class="numContribute pln"> 221</span></span>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </div>
                    </span>
                </div>
                <div class="topic-name">

                    <span class="sp1"><a href="">List </a><span class="pln byName">by </span>
                        <div class="tooltip">
                        <span class="topicAuthorName">
                            <a href="/judge/en/profile/03" target="_blank" class="userNameTopic">Arif77</a>
                            <div class="tooltiptext">
                                <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                <div class="short-info-author"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>
                                    <div class="author-info">
                                        <span class="info-style">Contribution : <span class="numContribute pln"> +134</span></span><br>
                                        <span class="info-style">Rating : <span class="numContribute pln"> 2345</span></span><br>
                                        <span class="info-style">Friends : <span class="numContribute pln"> 221</span></span>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </div>
                    </span>
                </div>
                <div class="topic-name">

                    <span class="sp1"><a href="">Map </a><span class="pln byName">by </span>
                        <div class="tooltip">
                        <span class="topicAuthorName">
                            <a href="/judge/en/profile/03" target="_blank" class="userNameTopic">Arif77</a>
                            <div class="tooltiptext">
                                <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                <div class="short-info-author"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>
                                    <div class="author-info">
                                        <span>Contribution : <span class="numContribute pln"> +134</span></span><br>
                                        <span>Rating : <span class="numContribute pln"> 2345</span></span><br>
                                        <span>Friends : <span class="numContribute pln"> 221</span></span>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </div>
                    </span>
                </div>
                <div class="topic-name">

                    <span class="sp1"><a href="">Set </a><span class="pln byName">by </span>
                        <div class="tooltip">
                        <span class="topicAuthorName">
                            <a href="/judge/en/profile/03" target="_blank" class="userNameTopic">Arif77</a>
                            <div class="tooltiptext">
                                <img src="../images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                <div class="short-info-author"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>
                                    <div class="author-info">
                                        <span>Contribution : <span class="numContribute pln"> +134</span></span><br>
                                        <span>Rating : <span class="numContribute pln"> 2345</span></span><br>
                                        <span>Friends : <span class="numContribute pln"> 221</span></span>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </div>
                    </span>
                </div>
                </div>
            </div>
        <!-- </div> -->
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
    <script src="../js/like-dislike.js"></script>
    <script src="../js/demo.js"></script>
@endsection


