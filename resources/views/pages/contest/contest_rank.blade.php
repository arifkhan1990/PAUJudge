@extends('master_page')

@section('page_css')
    @include('pages.contest.contest_css')
        <link rel="stylesheet" href="../css/single_page.css">
        <link rel="stylesheet" href="../css/contest_rank.css">
@endsection
@section('main_content')
    @include('pages.contest.contest_topnav')
                <div class="problem-description">
                    <div class="problem-body-content">
                        <div class="contest-rank">
                            <div class="rank_by">
                                <form action="">
                                    <select>
                                        <option value="">Rank By ... </option>
                                        <option value="all">All</option>
                                        <option value="country">Country</option>
                                        <option value="university">University</option>
                                        <option value="friends">Friends</option>
                                    </select>
                                </form>
                            </div>
                            <div class="display-rank">
                                <div id="table">
                                    <div class="list">
                                        <div id="element">

                                            <table id="contest-rank">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="left">Contestant</th>
                                                        <th><a href="/judge/en/challenges/view/470/1" target="_blank">A</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/2" target="_blank">B</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/3" target="_blank">C</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/4" target="_blank">D</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/5" target="_blank">E</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/6" target="_blank">F</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/7" target="_blank">G</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/8" target="_blank">H</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/9" target="_blank">I</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/10" target="_blank">J</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/11" target="_blank">K</a></th>
                                                        <th><a href="/judge/en/challenges/view/470/12" target="_blank">L</a></th>
                                                        <th>•</th>
                                                        <th>•</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="c-data"></td>
                                                        <td></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>28</sup>/<sub>111</sub></p></strong></div></td>

                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>225</sup>/<sub>399</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>0</sup>/<sub>2</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>30</sup>/<sub>96</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>0</sup>/<sub>26</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>7</sup>/<sub>19</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>143</sup>/<sub>798</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>9</sup>/<sub>107</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>15</sup>/<sub>46</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>4</sup>/<sub>10</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>37</sup>/<sub>93</sub></p></strong></div></td>
                                                        <td class="c-data"><div class="c-data-summary"><strong><p><sup>43</sup>/<sub>159</sub></p></strong></div></td>
                                                        <td class="c-data"></td>
                                                        <td class="c-data"></td>
                                                        <td class="c-data"></td>
                                                        </tr>
                                                </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="c-box-h">1</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389089" target="_blank">Brandon Zhang</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389089-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>102</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>8</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">4</p>
                                                                    <span>174</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-4">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>216</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">1</p>
                                                                    <span>160</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>33</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-7">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-h">1</p>
                                                                    <span>46</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">1</p>
                                                                    <span>163</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-9">

                                                                <div class="c-status">
                                                                    <p class="c-no">4</p>
                                                                    <span>328</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>28</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389089-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">9</p>
                                                                    <span>809</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">2</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/59022" target="_blank">ACM Mornings</a><br>
                                                                <em>
                                                                ESCOM, Mexico                                            </em>
                                                            </td>
                                                            <td class="c-box u-59022-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>39</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>6</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>62</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">3</p>
                                                                    <span>202</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">4</p>
                                                                    <span>131</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">2</p>
                                                                    <span>170</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>98</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59022-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>49</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">9</p>
                                                                    <span>912</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">3</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/268387" target="_blank">Rehim Memmedli</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-268387-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>72</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>54</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-4">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>286</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">3</p>
                                                                    <span>234</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>36</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">1</p>
                                                                    <span>172</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">1</p>
                                                                    <span>142</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>69</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-268387-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">9</p>
                                                                    <span>936</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">4</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/212986" target="_blank">Adán López Alatorre</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-212986-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">3</p>
                                                                    <span>169</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>23</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>51</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>26</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">4</p>
                                                                    <span>103</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">1</p>
                                                                    <span>199</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">2</p>
                                                                    <span>128</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212986-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>26</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">8</p>
                                                                    <span>865</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">5</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389109" target="_blank">David Berard</a><br>
                                                                <em>
                                                                UBC, Canada                                            </em>
                                                            </td>
                                                            <td class="c-box u-389109-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>93</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>37</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>118</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">1</p>
                                                                    <span>320</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">7</p>
                                                                    <span>58</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">2</p>
                                                                    <span>221</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">2</p>
                                                                    <span>136</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389109-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>71</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">8</p>
                                                                    <span>1214</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">6</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/96390" target="_blank">Felipe Kallás Silva</a><br>
                                                                <em>
                                                                UNIFEI, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-96390-c-0">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>6</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-3">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>34</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-6">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>6</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">3</p>
                                                                    <span>221</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">5</p>
                                                                    <span>199</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-96390-c-11">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>5</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">7</p>
                                                                    <span>606</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">7</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/3051" target="_blank">Dilson Guimarães</a><br>
                                                                <em>
                                                                UFMG, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-3051-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>78</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>5</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>112</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>9</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">8</p>
                                                                    <span>314</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">3</p>
                                                                    <span>190</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">2</p>
                                                                    <span>211</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-3051-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>36</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">7</p>
                                                                    <span>721</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">8</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/70433" target="_blank">Manuel Salazar</a><br>
                                                                <em>
                                                                UFPS, Colombia                                            </em>
                                                            </td>
                                                            <td class="c-box u-70433-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>209</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>122</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>18</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">1</p>
                                                                    <span>242</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-8">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>327</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>99</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-70433-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>55</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">7</p>
                                                                    <span>760</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">9</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389098" target="_blank">Henry X</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389098-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>33</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>44</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-2">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>328</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-5">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-f">1</p>
                                                                    <span>80</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>61</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-9">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-j">1</p>
                                                                    <span>241</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>113</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389098-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">4</p>
                                                                    <span>125</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">7</p>
                                                                    <span>777</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">10</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/25504" target="_blank">Emerson Lucena</a><br>
                                                                <em>
                                                                UFCG, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-25504-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>188</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>6</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>140</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>33</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>295</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">2</p>
                                                                    <span>172</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>223</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-25504-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>26</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p class="c-yes c-yes-total">7</p>
                                                                    <span>828</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">11</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389096" target="_blank">jason chiu</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389096-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>64</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>27</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">1</p>
                                                                    <span>247</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>37</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">14</p>
                                                                    <span>329</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">1</p>
                                                                    <span>318</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>94</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389096-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>52</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>7</p>
                                                                    <span>839</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">12</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/57234" target="_blank">Lucas Renan Vieira de Freitas Pereira</a><br>
                                                                <em>
                                                                UFMG, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-57234-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">3</p>
                                                                    <span>160</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>11</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>225</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">4</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">4</p>
                                                                    <span>328</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">3</p>
                                                                    <span>146</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>173</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-57234-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>46</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>7</p>
                                                                    <span>945</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">13</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/253211" target="_blank">GabrielNexT</a><br>
                                                                <em>
                                                                UFRJ, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-253211-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>105</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">5</p>
                                                                    <span>225</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>35</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">5</p>
                                                                    <span>297</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>191</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-253211-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>66</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>7</p>
                                                                    <span>1154</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">14</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/178821" target="_blank">CalopsITA</a><br>
                                                                <em>
                                                                ITA                                            </em>
                                                            </td>
                                                            <td class="c-box u-178821-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">4</p>
                                                                    <span>195</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>8</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>42</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">6</p>
                                                                    <span>311</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">3</p>
                                                                    <span>126</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>74</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-178821-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>43</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>367</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">15</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389086" target="_blank">TheyPutBeesInMinecraft</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389086-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>160</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">3</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>86</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">7</p>
                                                                    <span>292</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>118</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389086-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>43</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>534</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">16</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/301599" target="_blank">Mastropiero Limit Exceeded</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-301599-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>97</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>12</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>170</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>29</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">5</p>
                                                                    <span>325</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>292</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-301599-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>78</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>718</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">17</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/2890" target="_blank">Marcos Kawakami</a><br>
                                                                <em>
                                                                USP, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-2890-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-1">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-5">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>329</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>187</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">5</p>
                                                                    <span>184</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">2</p>
                                                                    <span>119</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-9">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-j">2</p>
                                                                    <span>92</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-10">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>18</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-2890-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>8</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>728</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">18</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/212258" target="_blank">jonno</a><br>
                                                                <em>
                                                                UBA, Argentina                                            </em>
                                                            </td>
                                                            <td class="c-box u-212258-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>131</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>18</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>185</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>46</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>223</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-212258-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>76</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>739</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">19</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/240883" target="_blank">Miseri</a><br>
                                                                <em>
                                                                Canada                                            </em>
                                                            </td>
                                                            <td class="c-box u-240883-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>25</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>252</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-4">

                                                                <div class="c-status">
                                                                    <p class="c-no">4</p>
                                                                    <span>312</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>112</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-9">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-j">2</p>
                                                                    <span>135</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>204</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-240883-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>156</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>944</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">20</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/388964" target="_blank">joylintp</a><br>
                                                                <em>
                                                                Taiwan                                            </em>
                                                            </td>
                                                            <td class="c-box u-388964-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>227</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>7</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>204</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">11</p>
                                                                    <span>315</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">2</p>
                                                                    <span>130</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388964-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>100</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>6</p>
                                                                    <span>991</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">21</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/44031" target="_blank">Ubiratan Correia Barbosa Neto</a><br>
                                                                <em>
                                                                UFBA, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-44031-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>73</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>8</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>96</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>17</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>47</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-44031-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>189</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">22</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389059" target="_blank">Samvel Andreasyan</a><br>
                                                                <em>
                                                                Armenia                                            </em>
                                                            </td>
                                                            <td class="c-box u-389059-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>30</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>84</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>40</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">2</p>
                                                                    <span>107</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389059-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>51</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>392</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">23</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/17587" target="_blank">Naum Azeredo</a><br>
                                                                <em>
                                                                IME, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-17587-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>100</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>10</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>180</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>39</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>250</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>104</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-17587-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>83</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>396</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">24</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/113643" target="_blank">Samyra Vitória</a><br>
                                                                <em>
                                                                Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-113643-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">4</p>
                                                                    <span>133</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>19</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>34</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-113643-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">3</p>
                                                                    <span>87</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>426</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">25</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/46344" target="_blank">Dani e Pedro</a><br>
                                                                <em>
                                                                Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-46344-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-1">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>3</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>204</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>11</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">4</p>
                                                                    <span>104</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-46344-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>60</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>502</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">26</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/29430" target="_blank">RCF123</a><br>
                                                                <em>
                                                                UCR, Costa Rica                                            </em>
                                                            </td>
                                                            <td class="c-box u-29430-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>11</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>160</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>22</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>231</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-29430-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>71</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>515</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">27</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/236578" target="_blank">Yan Matheus</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-236578-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">4</p>
                                                                    <span>139</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>9</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>35</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">8</p>
                                                                    <span>53</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-10">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>179</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-236578-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">3</p>
                                                                    <span>81</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>577</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">28</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/83361" target="_blank">Pufe</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-83361-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>62</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>145</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>128</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>150</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>242</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-83361-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>179</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>684</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">29</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/362191" target="_blank">Vijay Krishan Pandey</a><br>
                                                                <em>
                                                                MNNIT                                            </em>
                                                            </td>
                                                            <td class="c-box u-362191-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">2</p>
                                                                    <span>124</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">5</p>
                                                                    <span>81</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>169</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-362191-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>209</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>5</p>
                                                                    <span>716</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">30</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/31278" target="_blank">Yuri Cardoso Santamarina</a><br>
                                                                <em>
                                                                UFU, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-31278-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>5</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-5">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-f">5</p>
                                                                    <span>107</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-31278-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>18</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>254</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">31</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/24870" target="_blank">Rodrigo Pinto</a><br>
                                                                <em>
                                                                UFCG, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-24870-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>6</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">5</p>
                                                                    <span>248</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-8">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-i">1</p>
                                                                    <span>222</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24870-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>42</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>324</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">32</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/911" target="_blank">Rodrigo Zhou</a><br>
                                                                <em>
                                                                UFRJ, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-911-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>9</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>16</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>193</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-911-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">3</p>
                                                                    <span>151</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>409</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">33</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/136580" target="_blank">Tiago Gonçalves</a><br>
                                                                <em>
                                                                UFPE, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-136580-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">1</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-1">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-6">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-7">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-h">7</p>
                                                                    <span>164</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-8">

                                                                <div class="first-to-solve">

                                                                    <p class="c-yes c-yes-i">2</p>
                                                                    <span>83</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>39</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-136580-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>450</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">34</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/26102" target="_blank">Kleiber</a><br>
                                                                <em>
                                                                UNSAAC, Peru                                            </em>
                                                            </td>
                                                            <td class="c-box u-26102-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>5</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">5</p>
                                                                    <span>236</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-26102-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>128</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>463</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">35</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389091" target="_blank">Deobrah</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389091-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>135</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">6</p>
                                                                    <span>70</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389091-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>237</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>555</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">36</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/195668" target="_blank">Sebastian Vega</a><br>
                                                                <em>
                                                                UFPS, Colombia                                            </em>
                                                            </td>
                                                            <td class="c-box u-195668-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>231</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>12</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>321</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">5</p>
                                                                    <span>44</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>148</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-195668-c-11">

                                                                <div class="c-status">
                                                                    <p class="c-no">5</p>
                                                                    <span>278</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>605</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">37</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/59929" target="_blank">Ian Kury</a><br>
                                                                <em>
                                                                Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-59929-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">11</p>
                                                                    <span>178</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>15</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">5</p>
                                                                    <span>297</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">5</p>
                                                                    <span>30</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-59929-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">4</p>
                                                                    <span>225</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>788</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">38</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389133" target="_blank">jacketsj</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389133-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>150</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>239</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>147</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">3</p>
                                                                    <span>319</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389133-c-11">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>280</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>935</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">39</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389149" target="_blank">mad_scientist</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389149-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>251</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-3">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-d">1</p>
                                                                    <span>237</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>242</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">1</p>
                                                                    <span>311</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389149-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>4</p>
                                                                    <span>1041</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">40</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/388903" target="_blank">Equipe1 [Unicamp] (CCL-SPSO)</a><br>
                                                                <em>
                                                                UNICAMP                                            </em>
                                                            </td>
                                                            <td class="c-box u-388903-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>4</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>11</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-10">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>99</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388903-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>20</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>35</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">41</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/191334" target="_blank">Carlos Cabral de Menezes Filho</a><br>
                                                                <em>
                                                                UFU, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-191334-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>279</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>10</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>32</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-10">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>293</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-191334-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>120</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>182</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">42</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/81747" target="_blank">Lamartine</a><br>
                                                                <em>
                                                                UECE, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-81747-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>33</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>38</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-8">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>178</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-81747-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">2</p>
                                                                    <span>117</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>228</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">43</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/24787" target="_blank">Paulo R. S. Sousa</a><br>
                                                                <em>
                                                                UFMS, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-24787-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>61</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>77</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-9">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-j">1</p>
                                                                    <span>164</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-24787-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>322</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">44</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/54716" target="_blank">Allan Nozomu Fukasawa</a><br>
                                                                <em>
                                                                UNICAMP, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-54716-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">3</p>
                                                                    <span>63</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>146</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>82</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-54716-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>117</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>342</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">45</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/76052" target="_blank">Rodolfo Riyoei Goya</a><br>
                                                                <em>
                                                                FIT, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-76052-c-0">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-a">2</p>
                                                                    <span>168</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>78</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>104</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-76052-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>410</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">46</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/289261" target="_blank">Mircea Maierean</a><br>
                                                                <em>
                                                                CNPR, Romania                                            </em>
                                                            </td>
                                                            <td class="c-box u-289261-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>60</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">5</p>
                                                                    <span>79</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">5</p>
                                                                    <span>189</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-289261-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>251</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>470</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">47</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/92541" target="_blank">Rosklin Juliano Chagas</a><br>
                                                                <em>
                                                                CEFET, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-92541-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>21</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>32</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-92541-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">13</p>
                                                                    <span>248</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>561</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">48</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/346184" target="_blank">Kaio Vieira</a><br>
                                                                <em>
                                                                UFV, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-346184-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">11</p>
                                                                    <span>327</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">10</p>
                                                                    <span>90</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">6</p>
                                                                    <span>209</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-346184-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>592</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">49</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/389171" target="_blank">naim2</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-389171-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>237</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-6">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-10">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-k">4</p>
                                                                    <span>233</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-389171-c-11">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-l">1</p>
                                                                    <span>247</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>3</p>
                                                                    <span>777</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">50</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/120497" target="_blank">Diego Rangel Piranga Costa</a><br>
                                                                <em>
                                                                UFMG, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-120497-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>7</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-120497-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>21</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">51</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/235593" target="_blank">Patrick Melo</a><br>
                                                                <em>
                                                                UnB-Gama, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-235593-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>13</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>22</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235593-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>35</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">52</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/73181" target="_blank">Rafael Eduardo</a><br>
                                                                <em>
                                                                UDEA, Colombia                                            </em>
                                                            </td>
                                                            <td class="c-box u-73181-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>11</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>152</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>27</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-10">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>193</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-73181-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>38</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">53</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/798" target="_blank">Thiago J. Barbalho</a><br>
                                                                <em>
                                                                UERN, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-798-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>17</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>27</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-798-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>44</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">54</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/75571" target="_blank">Felipe Mota</a><br>
                                                                <em>
                                                                Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-75571-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>4</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>21</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-75571-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>45</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">55</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/145554" target="_blank">Leandro Rodrigues</a><br>
                                                                <em>
                                                                UFOP, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-145554-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>3</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>24</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-145554-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>47</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">56</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/430" target="_blank">Sebastião E. Alves Filho</a><br>
                                                                <em>
                                                                UERN, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-430-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>9</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>23</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-430-c-11">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>244</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>52</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">57</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/388894" target="_blank">Equipe1 [Facens] (CCL-SPSO)</a><br>
                                                                <em>
                                                                -                                            </em>
                                                            </td>
                                                            <td class="c-box u-388894-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>21</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>39</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-388894-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>60</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">58</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/225854" target="_blank">devman</a><br>
                                                                <em>
                                                                UFRRJ, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-225854-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">2</p>
                                                                    <span>23</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>235</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>18</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-7">

                                                                <div class="c-status">
                                                                    <p class="c-no">3</p>
                                                                    <span>305</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-225854-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>61</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">59</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/16055" target="_blank">Rafael Monteiro</a><br>
                                                                <em>
                                                                UNIFESO, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-16055-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>14</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>51</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-10">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>59</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-16055-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>65</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">60</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/235152" target="_blank">Sérgio de Almeida Cipriano Júnior</a><br>
                                                                <em>
                                                                UnB-Gama, Brazil                                            </em>
                                                            </td>
                                                            <td class="c-box u-235152-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>20</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-3">

                                                                <div class="c-status">
                                                                    <p class="c-no">2</p>
                                                                    <span>31</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">2</p>
                                                                    <span>30</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-235152-c-11">

                                                                <div class="c-status">
                                                                    <p class="c-no">4</p>
                                                                    <span>278</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>70</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">61</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/143372" target="_blank">alvaro iporre</a><br>
                                                                <em>
                                                                UPDS, Bolivia                                            </em>
                                                            </td>
                                                            <td class="c-box u-143372-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>10</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>28</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-143372-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>78</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">62</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/316651" target="_blank">Cangaceiro</a><br>
                                                                <em>
                                                                PUCGO                                            </em>
                                                            </td>
                                                            <td class="c-box u-316651-c-0">

                                                                <div class="c-status">
                                                                    <p class="c-no">1</p>
                                                                    <span>200</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>7</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">3</p>
                                                                    <span>32</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-316651-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>79</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td class="c-box-h">63</td>
                                                            <td class="c-contestant">
                                                                <a href="/judge/en/profile/162281" target="_blank">Jean Tello</a><br>
                                                                <em>
                                                                UCSM, Peru                                            </em>
                                                            </td>
                                                            <td class="c-box u-162281-c-0">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-1">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-b">1</p>
                                                                    <span>26</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-2">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-3">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-4">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-5">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-6">

                                                                <div class="c-status">

                                                                    <p class="c-yes c-yes-g">1</p>
                                                                    <span>56</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-7">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-8">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-9">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-10">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box u-162281-c-11">

                                                                <div class="c-status">
                                                                    <p>&nbsp;</p>
                                                                    <span>•</span>
                                                                </div>
                                                            </td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box"></td>
                                                            <td class="c-box-t">
                                                                <div class="c-status">
                                                                    <p>2</p>
                                                                    <span>82</span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="17" class="c-box-null">+878 contestants participating!</td>
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
                        </div>
@endsection
