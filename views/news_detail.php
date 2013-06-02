                  
                                    
   <style>
  
  
	
	
	    /* Large desktop */
    @media (min-width: 1200px) { ... }
   
	
    /* Portrait tablet to landscape and desktop */
    @media (min-width: 768px) and (max-width: 979px) { 
	
	#rat{
	
	display:none;}
	
	 }
     
    /* Landscape phone to portrait tablet */
    @media (max-width: 767px) { 
	
	
	#rat{
	
	display:none;}
     
    /* Landscape phones and down */
    @media (max-width: 480px) { 
	
	
	#rat{
	
	display:none;}
	
	 }

  </style>                      
   <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
<![endif]-->  
  </head>

  <body>

 <div class="navbar navbar-inverse navbar-fixed-top"><!--header-->
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="brand" href="index.php"><img src="imatges/logo.png" width="216" height="71"></a>
          <a class="brand2 pull-right" href=" http://www.biocat.cat/en" target="_blank"><img src="imatges/logo_bio.png"></a>
          <div class="nav-collapse collapse">
            
             
            <ul class="nav">
              <li  class="tipo_menu2 dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT MOEBIO</a>
              
             <ul class="dropdown-menu">
                 <li class="tipo_menu4"><a href="the_initiative.php">The initiative</a></li>
                 <li class="tipo_menu4"><a href="why_barcelona.php">Why Barcelona</a></li>
                 <li class="tipo_menu4"><a href="advisory_board.php">Advisory board</a></li>
                  <li class="tipo_menu4"><a href="cross_concepts.php">Cross-concepts</a></li>
                </ul>
              </li>
              
               
              
              
              
              <li  class="tipo_menu2"><a href="courses.php">COURSES</a></li>
              <li  class="tipo_menu2"><a href="thoughts.php">THOUGHTS</a></li>
            </ul>
            <ul class="nav2">
            <li class="tipo_menu1"><a href="#" target="_blank">COMMUNITY</a></li>
             <div id="rat">|</div>
             <li class="tipo_menu1"><a href="http://blog.moebio.org" target="_blank">BLOG</a></li>
             <div id="rat">|</div>
              <li class="tipo_menu1"><a href="news.php">NEWS</a></li>
              <div id="rat">|</div>
              <li class="tipo_menu1"><a href="agenda.php">AGENDA</a></li>
              <div id="rat">|</div>
              <li class="tipo_menu1"><a href="media.php" style="border:none;">MEDIA</a></li>
              <div id="rat">|</div>
              <li class="tipo_menu1"><a href="contact.php" style="border:none;">CONTACT</a></li>
              <div id="rat">|</div>
              <li class="tipo_menu1"><a href="#" style="border:none;"><img src="imatges/home/search_small.jpg" width="11" height="11"> SEARCH</a>
              
              
              
              
              </li>
            </ul>
           
          </div><!--/.nav-collapse -->
        </div>
        
        
        
      </div>
    </div><!--header-->

    
      <!-- Begin page content -->
      <div class="container" style="margin-top:20px;">
      <h1 class="tipo_fil">News  >  Hospital robot could reduce human errors and save lives<div class="dropdown pull-right">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="imatges/about/share.png" onmouseover="this.src='imatges/about/share_verd.png'"
onmouseout="this.src='imatges/about/share.png'" width="39" height="9" style="margin-right:10px;"></a>
    
    
    <img src="imatges/about/linia_vermella.png" width="3" height="16"><a href='javascript:window.print(); void 0;'><img src="imatges/about/print.png" width="16" height="14" style="margin-right:10px; margin-left:10px;"></a><!--<img src="imatges/about/linia_vermella.png" width="3" height="16">
    
    <img src="imatges/about/rss.png" width="14" height="14" style="margin-left:10px;">-->
   <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <img src="imatges/popup_share/logo_in.png" width="11" height="11"> <span class="tipo_popup_share"><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.moebio.org/news1.php&title=moebio &summary=moebio & source= moebio" target="_new">  Linkedin</a></span><br>
    <img src="imatges/popup_share/logo_f.png" width="11" height="11"> <span class="tipo_popup_share"><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://moebio.org/news1.php&amp;p[images][0]=http://&amp;p[title]=moebio&amp;p[summary]=moebio">Facebook</a></span><br>
    <img src="imatges/popup_share/logo_t.png" width="11" height="11"> <span class="tipo_popup_share"><a target="_blank" href="https://twitter.com/intent/tweet?url=http://moebio.org/news1.php&amp;text=moebio&amp;via=moebio">Twitter</a></span><br>
    </ul>
    </div>
      
         
      
      
      
      
      </h1>
      <div class="span6" style="float:none; margin-left:0px;">
      <h1 class="tipo_titol1">— NEWS</h1>
      </div>
      <h1><hr></h1>
      
     <div class="row" style="margin-bottom:50px;">
     <div class="span_text_about">
     <p class="tipo_search_results3"><img src="imatges/agenda/picto_agenda.png"> <strong>Date:</strong><?= $items['data'] ?></p>
     <h1 class="tipo_titol_thoughts_video"><?= $items['title'] ?></h1>
     <p class="tipo_news_titol2" style="margin-bottom:25px;"><?= $items['description'] ?></p>
     
      <div id="video_image">
     <img src="file/img/<?= $items['foto'] ?>" width="646" height="354">
     </div>
     <div id="video_play">
     <div class="video-container">
          <iframe width="646" height="363" src="<?= $items['video'] ?>" frameborder="0" allowfullscreen></iframe>
         </div>
     </div>
     <p class="tipo_news_text" style="margin-top:20px;"><?= $items['content'] ?></p>
<hr>
<p class="tipo_search_results3"><img src="imatges/source.png"> <strong>Source:</strong><?= $items['autor'] ?></p>
 <hr>    
     </div>
     
      <div class="span_pastilladreta offset1" style="margin-top:0px; max-width:296px; margin-bottom:40px; ">
      <div id="backgroundpastilla">
      <h2 class="tipo_menu3" style="padding-left:25px; padding-top:20px;"><a href="news.php">— MORE NEWS</a></h2>

      <img src="imatges/about/linia_pastilla1.png" width="240" height="3"  style="padding-left:25px;">
    
     <p class="tipo_agenda_titol" style="padding-left:25px; padding-right:25px;">DEVICE TESTS DRUGS ON A TUMOUR THAT'S STILL IN THE BODY</p>
      <p class="tipo_agenda_text" style="padding-left:25px; padding-right:25px;">The technology would allow oncologists to test potentially harmful compounds in tiny amounts before giving patients a full dose.</p>
     
      <a href="news2.php"><img src="imatges/agenda/moreinfo_verd.png" style="cursor:pointer; padding-left:25px;" width="77" height="auto" onmouseover="this.src='imatges/agenda/moreinfo_vermell.png'"
onmouseout="this.src='imatges/agenda/moreinfo_verd.png'"></a>
         
          

</div>
 
      <img src="imatges/about/pastilla_dreta_puntes.png" width="296" height="46">
      
    
</div>
     
     
     </div>
     
     
     
      
      
  </div><!-- container -->
      
      
     
     

    



    




<div id="backgroundwantto" style="margin-top:40px;">

<div class="container" style="margin-top:70px; margin-bottom:50px; ">

<div id="push">
        
        
        <a href="http://applicationsform.moebio.org/request-info" target="_blank"><img src="imatges/wantto.png"
onmouseover="this.src='imatges/wantto_verd.png'"
onmouseout="this.src='imatges/wantto.png'"></a> 
      
 
      
      
      </div>

</div>

</div>

 <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="pull-right"><img src="imatges/modal/cross.png" width="37" height="37" style="margin-top:-40px;"></a>
<h3 id="myModalLabel" class="tipo_titol_modal">—  REQUEST INFO</h3>
<p class="tipo_text_modal">Do you want to keep updated of future events of MOEBIO?<br>
Are you interested in applying to Design Health Barcelona 2013 program?<br> 
Do you have any other question?<br><br> 

<strong>Contact us and we will solve all your doubts!</strong><br>
Complete the form below explaining your enquiry and we will reply the earliest (and it will be soon, promise):</p>
</div>


<hr style="margin:0;">

<form method="post" action="enviar.php" name="form" style="padding:25px;" onsubmit="return marcado();">

<div class="controls controls-row">
<select id="program" name="program" class="input-large" >

    <option value="no info">choose a program</option>
    <option value="Moebio's Informative Sessions">Moebio's Informative Sessions</option>
    <option value="Design Health Barcelona">Design Health Barcelona</option>
    <option value="Short Focused Programs">Short Focused Programs</option>
</select>
</div>
<div class="controls controls-row">
<input class="span3" name="nombre" id="nombre" type="text" placeholder="* name" style="margin-top:0px;">
<input class="span3" name="apellido" id="apellido" type="text" placeholder="* surname" style="margin-top:0px;">

</div>
<div class="controls controls-row">
<select id="nacionalidad" name="nacionalidad" class="input-large">
<option value="no info" selected="selected">nationality</option> 
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
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
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
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
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
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

<select id="nacimiento" name="nacimiento" class="input-large">
<option  value="no info">Year of birth </option>

	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
</select>


</div>
<div class="controls controls-row">
<select id="ocupation" name="ocupation" class="input-large">

<option value="no info">Occupation</option>
<option value="Student">Student</option>
<option value="Entrepreneur">Entrepreneur</option>
<option value="Active Worker">Active Worker</option>
<option value="Unemployed">Unemployed</option>

</select>
<select id="estudios" name="estudios" class="input-large">

<option value="no info"> Level Education</option>
<option value="Undergraduate degree">Undergraduate degree </option>
<option value="Higher educational degree">Higher educational degree </option>
<option value="PhD">PhD</option>
<option value="Post-doctorate ">Post-doctorate </option>

</select>
<select id="areas" name="areas" class="input-large">

<option value="no info"> Area Studies</option>
<option value="Medicine/Life Sciences">Medicine/Life Sciences </option>
<option value="Business/Economics">Business/Economics</option>
<option value="Engineering/IT">Engineering/IT </option>
<option value="Design">Design </option>
<option value="Other">Other </option>
</select>
</div>
<div class="controls controls-row">
<input class="span3" name="mail" type="text" id="mail" placeholder="* e-mail" style="margin-top:0px;">
<input id="linkedin" name="linkedin" class="span3" type="text" placeholder="linkedin" style="margin-top:0px;">

</div>
<textarea name="mensaje" id="mensaje" rows="3" placeholder="Do you have any comments / questions?..."></textarea>
<label>
<input type="checkbox" value="I accept" name="termin" id="termin" />


</label>
<p class="tipo_text_modal" style="margin-top:-20px; margin-left:20px;">I accept the terms and conditions of use.<span class="tipo_text_modal" style="color:#d4191f;"><a href="data.php" target="_blank"> Personal Data Protection</a></span></p>





<button type="submit" class="btn btn-link" ><img src="imatges/modal/request.png" class="pull-right" width="106" height="29"  style="margin-bottom:40px;"></img></button>



</form>
</div>
     

     
       
<div id="push" style="margin-top:70px; margin-bottom:50px;">
        
        
         <a href="http://es.linkedin.com/in/moebiobarcelona/" target="_blank"><img src="imatges/socialpictos/linkedin1.png"
onmouseover="this.src='imatges/socialpictos/linkedin2.png'"
onmouseout="this.src='imatges/socialpictos/linkedin1.png'"></a> 
        
        <a href="http://www.facebook.com/moebiobarcelona" target="_blank"><img src="imatges/socialpictos/facebook1.png" onmouseover="this.src='imatges/socialpictos/facebook2.png'"
onmouseout="this.src='imatges/socialpictos/facebook1.png'" style="margin-left:20px;"></a> 
        
       
        <a href="https://twitter.com/moebiobarcelona" target="_blank"><img src="imatges/socialpictos/twiteer1.png" onmouseover="this.src='imatges/socialpictos/twiteer2.png'"
onmouseout="this.src='imatges/socialpictos/twiteer1.png'"  style="margin-left:20px;"></a>
        
       
        
        
       
       
       
       </div>



      <div id="push"><p><img src="imatges/triangle.png" width="30" height="17"></p></div>
   

       <div id="footer">
      <div class="container">
        
        <div class="row" style="margin-bottom:85px; margin-top:85px">
        
      <div class="span_footer1" style="min-height:120px;">
      <p span class="tipo_menu17"><a href="aboutmoebio.php">About Moebio</a></p>
      <p span class="tipo_menu17"><a href="courses.php">Courses</a></p>
      <p span class="tipo_menu17"><a href="thoughts.php">Thoughts</a></p>
      </div>
      <div class="span_footer2 offset_footer" style="min-height:120px;">
      <p span class="tipo_menu17"><a href="news.php">News</a></p>
      <p span class="tipo_menu17"><a href="agenda.php">Agenda</a></p>
      <p span class="tipo_menu17"><a href="contact.php">Contact</a></p>
      </div>
      <div class="span_footer2 offset_footer" style="height:132px;">
      <p span class="tipo_menu18"><a href="legal.php">Legal disclaimer</a><br>
      <a href="http://blog.moebio.org" target="_blank">Blog</a><br>
       Webmap<br>
       
       </p>
       
       <br>
      <p span class="tipo_menu18"><em>© Biocat 2013</em></p>
      </div>
      <div class="span_footer2 offset_footer2" style="border:none;">
      <p span class="tipo_menu18"><strong>Address:</strong><br><br>
    Biocat, Passeig de Gràcia 103.<br>
08008 Barcelona (Spain)<br>
T. +34 933 10 33 30<br>
<a href="mailto:info@moebio.org">info@moebio.org</a></p>
      </div>
      
      </div>
        
        
        
        
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    
    <script src="moebio.js"></script>
    



  </body>
</html>
