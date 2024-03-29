@extends('master_page')
@section('page_css')
@include('pages.contest.contest_css')
<link rel="stylesheet" href="../css/problem_a_details.css">
<link rel="stylesheet" href="../css/single_page.css">
<link rel="stylesheet" href="../css/single_contest_page.css">
<script>
    function myInputOutputShow(){
        var x = document.getElementById("inOutDiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myInputOutputShow2(){
        var x = document.getElementById("inOutDiv2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function myInputOutputShow3(){
        var x = document.getElementById("inOutDiv3");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myInputShow0(){
        var x = document.getElementById("inputDiv0");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myOutputShow0(){
        var x = document.getElementById("outputDiv0");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myExOutputShow0(){
        var x = document.getElementById("exOutputDiv0");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myInputShow1(){
        var x = document.getElementById("inputDiv1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myOutputShow1(){
        var x = document.getElementById("outputDiv1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myExOutputShow1(){
        var x = document.getElementById("exOutputDiv1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myInputShow3(){
        var x = document.getElementById("inputDiv3");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myOutputShow3(){
        var x = document.getElementById("outputDiv3");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myExOutputShow3(){
        var x = document.getElementById("exOutputDiv3");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function myCustomInput(){
        var x = document.getElementById("customInputDiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection
@section('main_content')
    @include('pages.contest.contest_topnav')
        <div class="problem-description">
            <div class="problem-body-content">
                <div class="contest-problem-header">
                    <div class="problem-titel">
                        <h1>Array Roted</h1>
                    </div>
                    <div class="contest-problem-info">
                    <p>Author : GeeksforGeek</p>
                        <span>Time : </span> <span>1s, </span>
                        <span>Memory: </span> <span>1000KB</span>
                    </div>
                </div>

                <div class="description-part">
                    <p>John Watson knows of an operation called a right circular rotation on an array of integers.
                        One rotation operation moves the last array element to the first position and shifts all remaining elements right one.
                        To test Sherlock's abilities, Watson provides Sherlock with an array of integers.
                        Sherlock is to perform the rotation operation a number of times then determine the value of the element at a given position.</p>

                        <p>For each array, perform a number of right circular rotations and return the value of the element at a given index.</p>

                        <p>For example, array a = [3,4,6], number of rotations k = 2 and indices to check m = [1,2].</p>

                        <p>First we perform the two rotations:</p>

                        <strong>[3,4,5] -&gt; [5,3,4] -&gt; [4,5,3]</strong>

                        <p>Now return the values from the zero-based indices 1 and 2 as indicated in the m array.</p>
                    <strong>a[1] = 5</strong>
                    <strong>a[2] = 3</strong>
                    <br>
                    <h4>Function Description</h4>
                    <p>Complete the circularArrayRotation function in the editor below. It should return an array of integers representing the values at the specified indices.</p>

                    <p>circularArrayRotation has the following parameter(s):</p>
                    <ul class="text-sty">
                    <li> a: an array of integers to rotate</li>
                    <li> k: an integer, the rotation count</li>
                    <li> queries: an array of integers, the indices to report</li>
                     </ul>
                    <h4>Input Format</h4>
                    <p>The first line contains 3 space-separated integers, n , k, and q, the number of elements in the integer array, the rotation count and the number of queries.</p>
                    <p>The second line contains n space-separated integers, where each integer i describes array element a[i] (where 0 ≤ i &lt; n ).
                        Each of the q subsequent lines contains a single integer denoting m, the index of the element to return from a.</p>
                    <h4>Constraints</h4>
                    <ul class="text-sty">
                        <li>1 ≤ n &lt; 10^5 </li>
                        <li>1 ≤ a[i] &lt; 10^5</li>
                        <li>1 ≤ k &lt; 10^5</li>
                        <li>1 ≤ q &lt; 500</li>
                        <li>0 ≤ m &lt; n</li>
                    </ul>
                    <h4>Output Format</h4>

                    <p>For each query, print the value of the element at index m of the rotated array on a new line.</p>
                    <div class="problem">
                        <table>
                            <thead>
                            <tr>
                                <td>Sample Input</td>
                                <td>Sample Output</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="division">
                                    <div class="input" style="padding: 25px;">
                                        <p>3 2 3</p>
                                        <p>1 2 3</p>
                                        <p>0</p>
                                        <p>1</p>
                                        <p>2</p>
                                    </div>


                                </td>
                                <td>
                                    <div class="output" style="padding: 25px;"> <p>2<br>3<br>1<br></p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                            <tr>
                                <td class="division">
                                    <div class="input" style="padding: 25px;">
                                        <p>3 2 3</p>
                                        <p>1 2 3</p>
                                        <p>0</p>
                                        <p>1</p>
                                        <p>2</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="output" style="padding: 25px;"> <p>2<br>3<br>1<br></p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="code-file-upload">
                        <div class="file-upload-title">
                            <h1>Upload your code file</h1>
                        </div>
                        <form action="" class="">
                        <div class="choos-language">
                          <select>
                            <option value="">Choose Your code Language</option>
                            <option value="books">C</option>
                            <option value="html">C++</option>
                            <option value="css">Java</option>
                            <option value="php">Python</option>
                            <option value="js">JavaScript</option>
                          </select>
                        </div>
                        <div class="code-upload">
                            <input id="code-file-id1" type="file" name="fileToUpload" id="fileToUpload" style="padding: 7px 20px!important;">
                            <input id="code-file-id2" type="submit" value="Upload Code" name="submit">
                        </div>
                        </form>
                    </div>
                    <!-- <div class="problem-description"> -->
                            <div class="problem-body-content" style="margin-top:20px!important;">

                                <div class="editor-left-part">
                                    <div class="editor-bar">
                                        <div class="left-bar" id="theme">
                                        <!-- <form action=""> -->
                                          <label class="theme-select-class">Theme </label>
                                            <select onchange="selectTheme()" id="select">
                                                <option selected="">default</option>
                                                <option>bespin</option>
                                                <option>blackboard</option>
                                                <option>cobalt</option>
                                                <option>colorforth</option>
                                                <option>darcula</option>
                                                <option>dracula</option>
                                                <option>eclipse</option>
                                                <option>elegant</option>
                                                <option>icecoder</option>
                                                <option>idea</option>
                                                <option>isotope</option>
                                                <option>lesser-dark</option>
                                                <option>liquibyte</option>
                                                <option>material</option>
                                                <option>material-darker</option>
                                                <option>material-ocean</option>
                                                <option>midnight</option>
                                                <option>night</option>
                                                <option>panda-syntax</option>
                                                <option>pastel-on-dark</option>
                                                <option>railscasts</option>
                                                <option>rubyblue</option>
                                                <option>seti</option>
                                                <option>shadowfox</option>
                                                <option>solarized dark</option>
                                                <option>solarized light</option>
                                                <option>the-matrix</option>
                                                <option>tomorrow-night-bright</option>
                                                <option>tomorrow-night-eighties</option>
                                                <option>twilight</option>
                                                <option>vibrant-ink</option>
                                                <option>xq-dark</option>
                                                <option>xq-light</option>
                                                </select>                        <!-- </form> -->

                                        </div>
                                        <div class="right-bar">
                                            <div class="editbar-manu">
                                            <div class="class="Select  select-language has-value is-searchable Select--single">
                                                <div class="">
                                                    <div class="language_code">
                                                    <select class="form-control select2-hidden-accessible" style="width:300px;" tabindex="-1" aria-hidden="true">

                                                    <option value="3003" data-mime="text/x-c++src">C++14 (GCC 5.4.1)</option>
                                                    <option value="3002" data-mime="text/x-csrc">C (GCC 5.4.1)</option>
                                                    <option value="3006" data-mime="text/x-csharp">C# (Mono 4.6.2.0)</option>
                                                    <option value="3013" data-mime="text/x-go">Go (1.6)</option>
                                                    <option value="3014" data-mime="text/x-haskell">Haskell (GHC 7.10.3)</option>
                                                    <option value="3015" data-mime="text/x-java">Java7 (OpenJDK 1.7.0)</option>
                                                    <option value="3016" data-mime="text/x-java">Java8 (OpenJDK 1.8.0)</option>
                                                    <option value="3017" data-mime="text/javascript">JavaScript (node.js v5.12)</option>
                                                    <option value="3021" data-mime="text/x-php">PHP (5.6.30)</option>
                                                    <option value="3022" data-mime="text/x-python">Python2 (2.7.6)</option>
                                                    <option value="3023" data-mime="text/x-python">Python3 (3.4.3)</option>
                                                    <option value="3025" data-mime="text/x-scala">Scala (2.11.7)</option>
                                                    <option value="3029" data-mime="text/x-c++src">C++ (GCC 5.4.1)</option>
                                                    <option value="3503" data-mime="text/x-swift">Swift (swift-2.2-RELEASE)</option>
                                                    <option value="3523" data-mime="text/x-kotlin">Kotlin (1.0.0)</option>
                                                    <option value="3524" data-mime="text/x-php">PHP7 (7.0.15)</option>
                                            </select>
                <!--                                         <select name="" id="">
                                                            <option value="c">C</option>
                                                            <option value="cpp">C++</option>
                                                            <option value="java">Java</option>
                                                            <option value="python">Python</option>
                                                            <option value="php">Php</option>
                                                        </select> -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <span style="padding-right:10px; "><i class="fa fa-cog" style="font-size: 25px;"></i></span>
                                        </div>
                                    </div>
                                    <div class="code-box">
                                        <form action="" id="preview-formn" method="" class="form-class">
                                            <textarea name="code" id="code" class="codemirror-textarea">
                # Python3 program to find maximum
                # in arr[] of size n

                # python function to find maximum
                # in arr[] of size n
                def largest(arr,n):

                    # Initialize maximum element
                    max = arr[0]

                    # Traverse array elements from second
                    # and compare every element with
                    # current max
                    for i in range(1, n):
                        if arr[i] > max:
                            max = arr[i]
                    return max

                # Driver Code
                arr = [10, 324, 45, 90, 9808]
                n = len(arr)
                Ans = largest(arr,n)
                print ("Largest in given array is",Ans)

                # This code is contributed by Smitha Dinesh Semwal
                                            </textarea>
                                            <br>

                                            <!-- <div class="row_and_col"></div> -->
                                            <div class="input-btn">
                                                    <input type="submit" name="preview-form-submit" id="preview-form-submit" value="Submit Code" style="width: 150px; float: right; background: #17A583; color: #ffffff; box-shadow: 0 0 5px gray;font-weight: bold;height: 40px;">
                                                    <input type="submit" name="preview-form-submit" id="preview-form-submit" value="Run Code" style="width: 150px; float: right;background: #7CA517; color: #ffffff; box-shadow: 0 0 5px gray;font-weight: bold;height: 40px;">
                                            </div>
                                            <label>
                                                <div class="custom-input inline" onclick="myCustomInput()">
                                                    <span style="padding-left: 20px;font-size: 16px;color: #B29504;font-weight: bold;">Custom Input</span>
                                                    <input type="checkbox" class="custom-input-checkbox" style="width: 10%!important;">
                                                </div>
                                                <div id="customInputDiv">
                                                    <form action="">
                                                        <textarea name="" id="" cols="25" rows="6" style="background: #e7eeef;"></textarea>
                                                    </form>
                                                </div>
                                            </label>
                                            <!-- <div class="custom-input">
                                                <span style="padding-left: 20px;font-size: 16px;color: #B29504;font-weight: bold;">Custom Input</span>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                                <div class="editor-right-part">
                                    <div id="preview-comment">
                                        <div class="test-case-title" onclick="myInputOutputShow()">
                                            <h2>Test Case 0</h2>
                                        </div>
                                        <div class="input-output-details hide" id="inOutDiv">
                                                <div class="input-detials">
                                                        <div class="test-case-title" onclick="myInputShow0()">
                                                            <h2>Input</h2>
                                                        </div>
                                                        <div class="input-detials" id="inputDiv0">
                                                                <p>3 2 3</p>
                                                                <p>1 2 3</p>
                                                                <p>0</p>
                                                                <p>1</p>
                                                                <p>2</p>
                                                        </div>

                                                    </div>
                                                    <div class="output-detials">
                                                        <div class="test-case-title" onclick="myOutputShow0()">
                                                            <h2>Your Output</h2>
                                                        </div>
                                                        <div class="output-detials" id="outputDiv0">
                                                                <p>2<br>3<br>1<br></p>
                                                        </div>
                                                    </div>
                                                    <div class="expected-output-detials">
                                                        <div class="test-case-title" onclick="myExOutputShow0()">
                                                            <h2>Expected Output</h2>
                                                        </div>
                                                        <div class="ex-output-detials" id="exOutputDiv0">
                                                                <p>2<br>3<br>1<br></p>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div id="preview-comment">
                                            <div class="test-case-title" onclick="myInputOutputShow2()">
                                                <h2>Test Case 1</h2>
                                            </div>
                                            <div class="input-output-details hide" id="inOutDiv2">
                                                <div class="input-detials">
                                                    <div class="test-case-title" onclick="myInputShow1()">
                                                        <h2>Input</h2>
                                                    </div>
                                                    <div class="input-detials" id="inputDiv1">
                                                            <p>3 2 3</p>
                                                            <p>1 2 3</p>
                                                            <p>0</p>
                                                            <p>1</p>
                                                            <p>2</p>
                                                    </div>

                                                </div>
                                                <div class="output-detials">
                                                    <div class="test-case-title" onclick="myOutputShow1()">
                                                        <h2>Your Output</h2>
                                                    </div>
                                                    <div class="output-detials" id="outputDiv1">
                                                            <p>2<br>3<br>1<br></p>
                                                    </div>
                                                </div>
                                                <div class="expected-output-detials">
                                                    <div class="test-case-title" onclick="myExOutputShow1()">
                                                        <h2>Expected Output</h2>
                                                    </div>
                                                    <div class="ex-output-detials" id="exOutputDiv1">
                                                            <p>2<br>3<br>1<br></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="preview-comment">
                                                <div class="test-case-title" onclick="myInputOutputShow3()">
                                                    <h2>Test Case 2</h2>
                                                </div>
                                                <div class="input-output-details hide" id="inOutDiv3">
                                                    <div class="input-detials">
                                                            <div class="test-case-title" onclick="myInputShow3()">
                                                                <h2>Input</h2>
                                                            </div>
                                                            <div class="input-detials" id="inputDiv3">
                                                                    <p>3 2 3</p>
                                                                    <p>1 2 3</p>
                                                                    <p>0</p>
                                                                    <p>1</p>
                                                                    <p>2</p>
                                                            </div>

                                                        </div>
                                                        <div class="output-detials">
                                                            <div class="test-case-title" onclick="myOutputShow3()">
                                                                <h2>Your Output</h2>
                                                            </div>
                                                            <div class="output-detials" id="outputDiv3">
                                                                    <p>2<br>3<br>1<br></p>
                                                            </div>
                                                        </div>
                                                        <div class="expected-output-detials">
                                                            <div class="test-case-title" onclick="myExOutputShow3()">
                                                                <h2>Expected Output</h2>
                                                            </div>
                                                            <div class="ex-output-detials" id="exOutputDiv3">
                                                                    <p>2<br>3<br>1<br></p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    <!-- </div> -->

            </div>
        </div>
    </div>
</div>
@endsection
@section('page_js')

    <script type="text/JavaScript" src="../codemirror/js/jquery_codemirror.min.js"></script>
    <script type="text/JavaScript" src="../codemirror/plugin/codemirror/lib/codemirror.js" ></script>
    <script type="text/JavaScript" src="../codemirror/plugin/codemirror/mode/python/python.js" ></script>
    <script type="text/JavaScript" src="../codemirror/plugin/codemirror/mode/clike/clike.js" ></script>
    <script type="text/JavaScript" src="../codemirror/plugin/codemirror/mode/cmake/cmake.js" ></script>
    <script type="text/JavaScript" src="../codemirror/js/default.js" ></script>


    <!-- <script>
    $("#themeName").on("click",function(){
        if(theme_name != "") theme_name = "";
        var theme_name =  $("#themeName").val();
        if(theme_name != "") my_theme_change(theme_name);
    });
    </script> -->
    <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        styleActiveLine: true,
        matchBrackets: true
    });
    var input = document.getElementById("select");
    function selectTheme() {
        var theme = input.options[input.selectedIndex].textContent;
        editor.setOption("theme", theme);
        location.hash = "#" + theme;
    }
    var choice = (location.hash && location.hash.slice(1)) ||
                (document.location.search &&
                    decodeURIComponent(document.location.search.slice(1)));
    if (choice) {
        input.value = choice;
        editor.setOption("theme", choice);
    }
    CodeMirror.on(window, "hashchange", function() {
        var theme = location.hash.slice(1);
        if (theme) { input.value = theme; selectTheme(); }
    });
    </script>
    <script>
        var cEditor = CodeMirror.fromTextArea(document.getElementById("c-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-csrc"
        });
        var cppEditor = CodeMirror.fromTextArea(document.getElementById("cpp-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-c++src"
        });
        var javaEditor = CodeMirror.fromTextArea(document.getElementById("java-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-java"
        });
        var objectivecEditor = CodeMirror.fromTextArea(document.getElementById("objectivec-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-objectivec"
        });
        var scalaEditor = CodeMirror.fromTextArea(document.getElementById("scala-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-scala"
        });
        var kotlinEditor = CodeMirror.fromTextArea(document.getElementById("kotlin-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-kotlin"
        });
        var ceylonEditor = CodeMirror.fromTextArea(document.getElementById("ceylon-code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-ceylon"
        });
        var mac = CodeMirror.keyMap.default == CodeMirror.keyMap.macDefault;
        CodeMirror.keyMap.default[(mac ? "Cmd" : "Ctrl") + "-Space"] = "autocomplete";
        </script>
@endsection
