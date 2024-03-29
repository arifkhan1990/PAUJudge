@extends('master_page')
@section('page_css')
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="stylesheet" href="css/rankboard.css">
    <link rel="stylesheet" href="css/problems.css">
    <link rel="stylesheet" href="css/problem_rankboard.css">
@endsection
@section('main_content')

<div class="problem-page-header-part">
  <div class="problem-row-header-part">
      <div class="header-part">
          <a href="#">Rankboard
            <h1>Rankboard</h1>
            </a>
      </div>
  </div>
</div>

<div class="problem-row-header-part">
    <hr>
</div>

<div class="problem-page-main-part">
    <div class="problem-row-main-part">
        <!-- <div class="top-header-part">
            <a href="#">Category </a><span>  |  </span><a href="#"> SubCategory </a><span>  |  </span><a href="#"> Difficulty </a><span>  |  </span><a href="#"> Status </a></span>
        </div> -->
        <div class="rankboard-left-containe">
                <div class="rank-part">
                        <table>
                            <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>User</th>
                                <th>Instituite</th>
                                <th>Counrty</th>
                                <th>Points</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 14px; font-weight: 500; color: dimgrey;">

                            <tr class="impar">
                                <td class="id">1</td>
                                <td class="large" id="user1">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/76" target="_blank" class="large1" style="color: green;">BrunoZanoelo</a>
                                    <div class="tooltiptext">
                                        <img src="images/user1.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Bruno Zanoelo</strong>,
                                            commonly known as <a href="#">BrunoZanoelo</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 2234, Total Win: 43</p>
                                            <p>Total Accepted Solution: 2532</p>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td class="large">University of Dhaka</td>
                                <td class="small"><img src="images/IN.png" alt=""></td>
                                <td class="center">1820</td>
                                <td class="center">67</td>
                            </tr>

                            <tr class="impar" id="par">
                                <td class="id">2</td>
                                <td class="large" id="user2">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/03" target="_blank" style="color: red;">Arif Khan</a>
                                        <div class="tooltiptext">
                                            <img src="images/arif2.jpg" alt="" style="width: 230px;height: 150px;">
                                            <div class="short-info"><strong>Arif Khan</strong>, commonly known as <a href="#">arif77</a>,
                                                is an Bangladeshi programmer.
                                                <p>Total Points: 2134, Total Win: 40</p>
                                                <p>Total Accepted Solution: 2522</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="large">University of Chittagong</td>
                                <td class="small"><img src="images/BD.png" alt=""></td>
                                <td class="center">2270</td>
                                <td class="center">45</td>
                            </tr>

                            <tr class="impar">
                                <td class="id">3</td>
                                <td class="large" id="user3">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/32" target="_blank" style="color: firebrick;">See_you</a>
                                    <div class="tooltiptext">
                                        <img src="images/user1.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Zubayer Zico</strong>,
                                            commonly known as <a href="#">See_you</a>,
                                            is an American programmer.
                                            <p>Total Points: 2034, Total Win: 36</p>
                                            <p>Total Accepted Solution: 1932</p>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="large">Bangladesh University of Engineering & Technology</td>
                                <td class="small"><img src="images/US.png" alt=""></td>
                                <td class="center">2111</td>
                                <td class="center">32</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">4</td>
                                <td class="large" id="user4">
                                    <div class="tooltip">
                                        <a href="/judge/en/profile/76" target="_blank" style="color: sienna;">Lavelo</a>
                                    <div class="tooltiptext">
                                        <img src="images/arif1.jpg" alt="" style="width: 228px;height: 150px; padding-left: 1px;padding-right: 1px;border-radius: 5px; ">
                                        <div class="short-info"><strong>Sajuno Lavely</strong>,
                                            commonly known as <a href="#">Lavelo</a>,
                                            is an Espanis programmer.
                                            <p>Total Points: 1834, Total Win: 34</p>
                                            <p>Total Accepted Solution: 1732</p>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="large">Jahangirnagar University</td>
                                <td class="small"><img src="images/ES.png" alt=""></td>
                                <td class="center">1980</td>
                                <td class="center">17</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">5</td>
                                <td class="large" id="user5">
                                    <div class="tooltip">
                                        <a href="/judge/en/profile/76" target="_blank" style="color: firebrick;">Zico143</a>
                                    <div class="tooltiptext">
                                        <img src="images/user2.jpg" alt="" style="width: 228px;height: 150px; padding-left: 1px;padding-right: 1px;">
                                        <div class="short-info"><strong>Zordan Zico</strong>,
                                            commonly known as <a href="#">Zico143</a>,
                                            is an Bangladeshi programmer.
                                            <p>Total Points: 1534, Total Win: 23</p>
                                            <p>Total Accepted Solution: 1632</p>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="large">University of Dhaka</td>
                                <td class="small"><img src="images/PH.png" alt=""></td>
                                <td class="center">2100</td>
                                <td class="center">18</td>
                            </tr>
                            <tr class="impar">
                                <td class="id">6</td>
                                <td class="large" id="user6">
                                    <div class="tooltip">
                                    <a href="/judge/en/profile/76" target="_blank">Sriya_Shoud</a>
                                    <div class="tooltiptext">
                                        <img src="images/arif.jpg" alt="" style="width: 230px;height: 150px;">
                                        <div class="short-info"><strong>Sriya Shoud</strong>,
                                            commonly known as <a href="#">Sriya_Shoud</a>,
                                            is an Turusko programmer.
                                            <p>Total Points: 1634, Total Win: 18</p>
                                            <p>Total Accepted Solution: 1532</p>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="large">Khulna University</td>
                                <td class="small"><img src="images/TR.png" alt=""></td>
                                <td class="center">1500</td>
                                <td class="center">12</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
        </div>
        <div class="right-side">
            <div class="problem-right-containe">
                <div class="top-title">
                    <h2>Filter By</h2>
                </div>
                <div class="right-main-containe">
                    <div class="search-problem">
                        <form action="#" class="problem-search">
                            <input type="text" placeholder="Search User Name" name="problem-search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="category-search" style="margin-top: 25px;">
                        <span>Country</span>
                        <select class="category-name">
                            <option value="1">All</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <form action="">
                    <div class="category-search" style="margin-top: 25px;">
                        <span id="subCategory">Instituite</span>
                        <select class="subcategory-name">
                            <option value="1">All</option>
                            <option value="DU">University of Dhaka</option>
                            <option value="RU">University of Rajshahi</option>
                            <option value="BAU">Bangladesh Agricultural University</option>
                            <option value="BUET">Bangladesh University of Engineering & Technology</option>
                            <option value="CU">University of Chittagong</option>
                            <option value="JU">Jahangirnagar University</option>
                            <option value="IU">Islamic University, Bangladesh</option>
                            <option value="SUST">Shahjalal University of Science and Technology</option>
                            <option value="KU">Khulna University</option>
                            <option value="BSMMU">Bangabandhu Sheikh Mujib Medical University</option>
                            <option value="BSMRAU">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
                            <option value="HSTU">Hajee Mohammad Danesh Science & Technology University</option>
                            <option value="PAU">Primeasia University</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="category-search" style="margin-top: 25px;">
                        <span id="difficulty">Rating</span> <br />
                        <input type="radio" name="rating" value="contest" style="width: 20px!important;margin-left: 20px;margin-top: 10px;"><span style="font-size: 14px;font-weight: 600;color: darkslategray;"> Contest</span><br>
                        <input type="radio" name="rating" value="browser" style="width: 20px!important;margin-left: 20px;margin-top: 10px;"><span style="font-size: 14px;font-weight: 600;color: darkslategray;"> Browser</span><br>
                        <!-- <select class="difficulty-level">
                            <option value="Easy" class="easy" style="color: forestgreen;">Easy</option>
                            <option value="Medium" class="Medium" style="color: #b366ff">Medium</option>
                            <option value="Hard" class="hard" style="color: indianred">Hard</option>
                            <option value="Expart" class="expart" style="color: #ff80aa">Expart</option>
                        </select> -->
                    </div>
                    <button type="submit" class="search_button" style="margin-top: 10px;">GO</button>
                </form>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
