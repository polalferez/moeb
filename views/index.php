
   
                      
  <style>
 
  
	
	
	    /* Large desktop */
    @media (min-width: 1200px) { ... }
     .tipo_menu16 {
		font-size:13px;
	
	}
	
    /* Portrait tablet to landscape and desktop */
    @media (min-width: 768px) and (max-width: 979px) { 
	.tipo_menu16 {
		font-size:13px;
	
	}
	#rat{
	
	display:none;}
	
	
	
	 }
     
    /* Landscape phone to portrait tablet */
    @media (max-width: 767px) { 
	
	
	.tipo_menu16 {
		font-size:13px;
	
	}
	#rat{
	
	display:none;}
	}
    /* Landscape phones and down */
    @media (max-width: 480px) { 
.tipo_join_titol2 {
    color: #EC1C24;
    font-family: "telefon-web",sans-serif;
    font-size: 25px;
    font-weight: bold;
    line-height: 29px;
}
	
	#rat{
	
	display:none;}
	
	 }
	 
	 
	 #search_button{}
	 #search_container{
		 display:none;
		 
		 }
		 
		 .tipo_search{
			 
			 
			 font-family: "telefon-web",sans-serif;
			 font-size:60px;
			 font-weight:bold;
			 color:#d1d2d3;}

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
          
          <a class="brand" href="index.php"><img src="views/imatges/logo.png" width="216" height="71"></a>
          <a class="brand2 pull-right" href=" http://www.biocat.cat/en" target="_blank"><img src="views/imatges/logo_bio.png"></a>
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
              <li class="tipo_menu1"><a id="search_button" href="#" style="border:none;"><img src="views/imatges/home/search_small.jpg" width="11" height="11"> SEARCH</a>
              
             
              
              
              
              
              </li>
            </ul>
            
           
          </div><!--/.nav-collapse -->
          
        </div>
        
        
        
      
      
      </div>
      
      
    </div><!--header-->

    <div id="search_container">
      <div id="backgroundupcoming" style="box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1); background-image:none;">
      <div class="container">
        
      <img src="views/imatges/search_gros2.png" width="356" height="66" style="margin-top:40px; margin-bottom:40px;">
      <!--<input type="text" placeholder="SEARCH" style="''" > -->
            
        </div>
      </div>
      </div>
      <!-- Begin page content -->
      <div class="container">
      
      
      
      
        <div class="hero-unit">
        <div class="row">
        
        <div class="span8">
          <img src="data/img/<?= $items[0]['img'] ?>" width="736" height="423"></div>
          
          <div class="span5">
        <h2 span class="tipo_menu14"><?= $items[0]['title'] ?></h2>
        <h2 span class="tipo_menu15"><?= $items[0]['description'] ?></h2>
 <p><a href="<?= $items[0]['url'] ?>"><img src="views/imatges/knowmoreverd.png" onmouseover="this.src='views/imatges/knowmorevermell.png'"
onmouseout="this.src='views/imatges/knowmoreverd.png'" style="margin-top:10px;"></a></p>
        </div>
          
        </div>
        </div>
        
        
        <div class="row-fluid" style="margin-bottom:75px; margin-top:90px; text-decoration:none;">
        <div class="span3">
          <a href="the_initiative.php"><h2 class="tipo_menu3"><img src="views/imatges/redarrow.png" width="10" height="auto" style="margin-top:-5px;"> <?= $about[0]['title'] ?></h2>
          <p  class="tipo_menu4"><?= $about[0]['content'] ?></p></a>
          
        </div>
        <div class="span3">
          <a href="the_initiative.php"><h2 class="tipo_menu3"><img src="views/imatges/redarrow.png" width="10" height="auto" style="margin-top:-5px;"> <?= $about[1]['title'] ?></h2>
          <p class="tipo_menu4"><?= $about[1]['content'] ?></p></a>
          
       </div>
        <div class="span3">
          <a href="the_initiative.php"><h2 class="tipo_menu3"><img src="views/imatges/redarrow.png" width="10" height="auto" style="margin-top:-5px;"> <?= $about[2]['title'] ?></h2>
          <p class="tipo_menu4"><?= $about[2]['content'] ?></p></a>
          
        </div>
        <div class="span3" style="border:none;">
          <a href="the_initiative.php"><h2 class="tipo_menu3"><img src="views/imatges/redarrow.png" width="10" height="auto" style="margin-top:-5px;"> <?= $about[3]['title'] ?></h2>
          <p class="tipo_menu4"><?= $about[3]['content'] ?></p></a>
          
        </div>
        </div>
        
        
        
        
        
        <div class="span6" style="float:none; margin-top:0px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— CROSS CONCEPTS</h1>
       
      </div>
      <h1>
       <hr>
       </h1>
       <div class="row-fluid" style="margin-bottom:75px; margin-top:50px;">
       
        <div class="span3" style="border:none; text-align:center; margin-bottom:30px;" >
         <a href="#">
          
         
        <div class="img-wrap" style="text-align:center;">
        <img src="data/img/<?= $cross[0]['img'] ?>" width="231" height="auto" alt="" />
        <div class="img-info2" >
        
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[0]['title'] ?></h4>
          
        </div>
        
        <div class="img-info" >
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[0]['title'] ?></h4>
            
        </div>
        
        
    </div>
       
         </a>
        </div>
        
        <div class="span3" style="border:none; text-align:center; margin-bottom:30px;" >
         <a href="#">
          
         
        <div class="img-wrap" style="text-align:center;">
        <img src="data/img/<?= $cross[1]['img'] ?>" width="231" height="auto" alt="" />
        <div class="img-info2" >
        
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[1]['title'] ?></h4>
          
        </div>
        
        <div class="img-info" >
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[1]['title'] ?></h4>
            
        </div>
        
        
    </div>
       
         </a>
        </div>
       
        <div class="span3" style="border:none; text-align:center; margin-bottom:30px;" >
         <a href="#">
          
         
        <div class="img-wrap" style="text-align:center;">
        <img src="data/img/<?= $cross[2]['img'] ?>" width="231" height="auto" alt="" />
        <div class="img-info2" >
        
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[2]['title'] ?></h4>
          
        </div>
        
        <div class="img-info" >
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[2]['title'] ?></h4>
            
        </div>
        
        
    </div>
       
         </a>
        </div>
        
        <div class="span3" style="border:none; text-align:center; margin-bottom:30px;" >
         <a href="#">
          
         
        <div class="img-wrap" style="text-align:center;">
        <img src="data/img/<?= $cross[3]['title'] ?>" width="231" height="auto" alt="" />
        <div class="img-info2" >
        
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[3]['title'] ?></h4>
          
        </div>
        
        <div class="img-info" >
            <h4 style="margin-left:10px; margin-right:10px; display: inline-block;" ><?= $cross[3]['title'] ?></h4>
            
        </div>
        
        
    </div>
       
         </a>
        </div>
        
        </div>
        
        
        
        
        
        
      
      
      </div>
      
      
      
      
      <div id="backgroundbio">
      <div class="container">
       <div class="container">
       
      <img class="pull-right" src="views/imatges/label1.png" width="48" height="104" style="margin-top:-10px;">
      <div class="span6" style="float:none; margin-top:30px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— HIGHLIGHT PROGRAM</h1>
       
      </div>
      </div>
       <div class="row" style="margin-bottom:50px;">
       <div class="span11">
       <h1 span class="tipo_menu7" style="margin-left:0px; margin-top:0px; margin-bottom:0px;">d·HEALTH Barcelona</h1>
       <img src="views/imatges/lineabio.png" width="647" height="3" style="margin-top:0px;">
       <p class="tipo_menu5" style="margin-top:30px; margin-bottom:30px;">A Higher Education Program inspired in the 
prestigious Stanford University's Biodesign Fellowship.</p>
       <p span class="tipo_menu6">Design Health Barcelona seeks change-makers. It takes the initiative to solve real, global, major challenges in the healthcare and medical technologies industries starting up new, innovative business models, products and services. It guides participants beyond their boundaries. It teaches them to think outside the box to identify new opportunities and develop the advancing technologies that will set the future of medical practice and will positively impact people' lives.</p>
       <p><a href="d-health-barcelona.php"><img src="views/imatges/learn_red.png" onmouseover="this.src='views/imatges/learn_green.png'"
onmouseout="this.src='views/imatges/learn_red.png'" style="margin-top:30px;"></a></p>
       </div>
       
       <div class="span3" style="margin-top:25px;">
        <div id="video_image">
       <img src="views/imatges/video_home.jpg" width="296" height="170">
      
       </div>
       <div id="video_play">
     <div class="video-container"><iframe src="http://player.vimeo.com/video/65852671" width="573" height="322" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
     </div>
     </div>
     
       <div class="pull-left">
     <img src="views/imatges/picto_calendari.png" width="19" height="22" style="margin-right:10px; margin-top:25px;"></div>
       <p span class="tipo_menu8" style="margin-top:25px; ">8 MONTH <span class="tipo_menu9">Full Time Program</span></p>
       <p><img src="views/imatges/lineabio_small.png"></p>
       <div class="pull-left">
       <img src="views/imatges/picto_rellotge.png" style="margin-right:10px;">
       </div>
       <p span class="tipo_menu8">STARTING DATE: <span class="tipo_menu9">September 2013</span></p>
       <p><img src="views/imatges/lineabio_small.png"></p>
       <div class="pull-left">
       <img src="views/imatges/picto_profile.png" style="margin-right:10px;  margin-bottom:30px;">
       </div>
      
       <p span class="tipo_menu8">PROFILES: <span class="tipo_menu9">Graduates and PhDs in Health, Bio, Tech, Business and Design.</span></p>
      
      <a href="admissions.php"><img src="views/imatges/apply_green.png" onmouseover="this.src='views/imatges/apply_red.png'"
onmouseout="this.src='views/imatges/apply_green.png'" style="margin-top:30px;"></a>
       
       </div>
       
       
       </div>
      
      </div>
      </div>


      <div id="backgroundupcoming">
      <div class="container">
      <div class="span6" style="float:none; margin-top:60px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— OTHER PROGRAMS</h1>
       
      </div>
       <div class="row-fluid" style="margin-bottom:50px;">
       <div class="span6">
      <div class="label pull-right">
       <img style="margin-bottom:-30px;" src="views/imatges/home/programs/label_mostassa.png" width="43" height="92">
       </div>
       <img  style="margin-top:-55px;" src="views/imatges/home/programs/img_programs1.jpg" width="485" height="auto">
       
       <h1 class="tipo_focused_titol" style="margin-top:45px;">One day programs</h1>
       <p class="tipo_agenda_text">The robot will sort scalpels, sterilize tools, and prepare operating rooms for surgery.</p>
       </div>
       
       <div class="span6">
       <div class="label pull-right">
       <img style="margin-bottom:-30px;" src="views/imatges/home/programs/label_turquesa.png" width="43" height="92">
       </div>
       <img style="margin-top:-55px;" src="views/imatges/home/programs/img_programs2.jpg" width="485" height="auto">
       <h1 class="tipo_focused_titol" style="margin-top:45px; color:#00aaba;">Specialized tracks</h1>
       <p class="tipo_agenda_text">The robot will sort scalpels, sterilize tools, and prepare operating rooms for surgery.</p>
       </div>
       
    
       
       
       
       </div>
      
      </div>
      </div>


      <div class="container">
     <div class="span6" style="float:none; margin-top:60px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— HIGHLIGHTS</h1>
       
      </div>
       <div class="row-fluid" style="margin-bottom:50px;">
       <div class="span6">
       <p class="hightlights_titol">MOEBIO LAUNCHES A NEW CROSS-CONCEPT</p>
       <p class="hightlights_titol" style="color: #6DC5A0;">COLLINOVATE BY ALFONS CORNELLA</p>
      <p class="tipo_bio_text">The only way to innovate these days is through collaboration. Innovation is a team sport. Innovating through collaboration will be the soft skill of the next decade. We will all need to be Collinovators.<br><br>

Innovation does not take place in isolation. Truly productive invention is a team sport that requires the collaboration of minds from myriad perspectives. In the next decade we all will need to become Collinovators.</p>
       
       <a href="cross_concepts.php"><img src="views/imatges/home/highlights/button_verd.png" onmouseover="this.src='views/imatges/home/highlights/button_vermell.png'"
onmouseout="this.src='views/imatges/home/highlights/button_verd.png'" style="margin-top:30px; margin-bottom:30px;"></a>
       
       </div>
       
       <div class="span6">
       
       <img src="views/imatges/home/highlights/video_highlights.jpg" width="485" height="auto">
       
       </div>
       
    
       
       
       </div>
      
      </div>
      
      
      <div id="backgroundupcoming">
      <div class="container">
      <div class="span6" style="float:none; margin-top:60px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— UPCOMING EVENTS</h1>
       
      </div>
      
<hr style="border-color: #EEEEEE -moz-use-text-color;">
<img  class="pull-right" style="margin-top:-40px;" src="views/imatges/home/upcomming/picto_upcomming.png" width="35" height="35">      
       <div class="row-fluid" style="margin-bottom:50px;">
       <? $i=1; foreach( $events as $item): ?>
   <div class="span3" style="border:none; margin-top:20px;">
       <p class="tipo_agenda_text">
<img width="20" height="auto" src="views/imatges/agenda/picto_agenda.png"><?= $item['date_ini']  ?></p>
<p class="tipo_agenda_titol_home"><?= $item['title']  ?></p>
<p class="tipo_agenda_text"><?= $item['description']  ?>
</p>
<a href="agendaDetail.php">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_verd.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_vermell.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_verd.png">
</a>
       </div>
   <?
   	endforeach; ?></div>
</div>
  
       
       </div>
      
      </div>
      </div>






    
      <div class="container">
      <div class="span6" style="float:none; margin-top:60px;  margin-left:0px;">
       <h1 span class="tipo_menu10">— LATEST NEWS</h1>
       
      </div>
      
<hr>
<img  class="pull-right" style="margin-top:-40px;" src="views/imatges/home/latest_news/picto_latestnews.png" width="35" height="35">      
       <div class="row-fluid" style="margin-bottom:50px;">
       <? $i=1; foreach($news as $item): ?>
      <div class="span3" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol_home" style="color:#EC1C24;"><?= $item['title'] ?></p>
<p class="tipo_agenda_text"><?= $item['description'] ?></p>
<a href="#">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_vermell.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_verd.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_vermell.png">
</a>
       </div>
    <?
   endforeach; ?></div>
       <!--
<div class="span3" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol_home" style="color:#EC1C24;">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text">
The event counted on the participation of professors and BioDesign Standford's Fellows such as Anurag Mairal (Director - Global Exchange Programs)
<br>
<br>
Anurag Mairal (Director - Global Exchange Programs)
</p>
<a href="#">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_vermell.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_verd.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_vermell.png">
</a>
       </div>
       <div class="span3" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol_home" style="color:#EC1C24;">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text">
The event counted on the participation of professors and BioDesign Standford's Fellows such as Anurag Mairal (Director - Global Exchange Programs)
<br>
<br>
Anurag Mairal (Director - Global Exchange Programs)
</p>
<a href="#">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_vermell.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_verd.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_vermell.png">
</a>
       </div>
       <div class="span3" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol_home" style="color:#EC1C24;">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text">
The event counted on the participation of professors and BioDesign Standford's Fellows such as Anurag Mairal (Director - Global Exchange Programs)
<br>
<br>
Anurag Mairal (Director - Global Exchange Programs)
</p>
<a href="#">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_vermell.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_verd.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_vermell.png">
</a>
       </div>
       <div class="span3" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol_home" style="color:#EC1C24;">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text">
The event counted on the participation of professors and BioDesign Standford's Fellows such as Anurag Mairal (Director - Global Exchange Programs)
<br>
<br>
Anurag Mairal (Director - Global Exchange Programs)
</p>
<a href="#">
<img width="77" height="auto" onmouseout="this.src='views/imatges/agenda/moreinfo_vermell.png'" onmouseover="this.src='views/imatges/agenda/moreinfo_verd.png'" style="cursor:pointer;" src="views/imatges/agenda/moreinfo_vermell.png">
</a>
       </div>
       
    
       
       
       
       </div>
      
-->
      </div>
      

 <div class="container">
     
       <div class="row-fluid" style="margin-bottom:50px; margin-top:50px;">
       <div class="span6">
       <h1 span class="tipo_menu10">— THOUGHTS</h1>
       
       
      <div class="row-fluid" style="margin-bottom:50px;">
      <? $i=1; foreach($thoughts as $item): ?>
       <div class="span6" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol"><?= $item['title'] ?></p>
<? if ($item['video'] != ''): ?>
<iframe width="100%" height="100%" src="http://www.youtube.com/embed/<?= $item['video'] ?>" frameborder="0" allowfullscreen></iframe>
<? else: ?>
<p class="tipo_agenda_text"><?= $item['description'] ?></p>
<? endif; ?>

<a href="#">
<img onmouseout="this.src='views/imatges/v1.png'" onmouseover="this.src='views/imatges/v2.png'" src="views/imatges/v1.png" style="margin-top:20px;">
</a>
       </div>
       <? if ($i % 2 == 0) echo '</div><div class="row-fluid">';
   	$i++;
       endforeach; ?></div>
       
       <!--

       <div class="span6" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text"><?= $item['description'] ?></p>
<a href="#">
<img onmouseout="this.src='views/imatges/v1.png'" onmouseover="this.src='views/imatges/v2.png'" src="views/imatges/v1.png" style="margin-top:20px;">
</a>
       </div>
       
       
       
       </div>
       <div class="row-fluid" style="margin-bottom:50px;">
       <div class="span6" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<p class="tipo_agenda_text">
The event counted on the participation of professors and BioDesign Standford's Fellows such as Anurag Mairal (Director - Global Exchange Programs)
<br>
<br>
Anurag Mairal (Director - Global Exchange Programs)
</p>
<a href="#">
<img onmouseout="this.src='views/imatges/v1.png'" onmouseover="this.src='views/imatges/v2.png'" src="views/imatges/v1.png" style="margin-top:20px;">
</a>
       </div>
       <div class="span6" style="border:none; margin-top:20px;">
       
<p class="tipo_agenda_titol">DESIGN HEALTH BARCELONA INTRODUCTION EVENT</p>
<img src="views/imatges/home/thoughts/img_video.jpg" width="224" height="123">
<a href="#">
<img onmouseout="this.src='views/imatges/v1.png'" onmouseover="this.src='views/imatges/v2.png'" src="views/imatges/v1.png" style="margin-top:20px;">
</a>
       </div>
       
       
       
       
       </div>
-->
       
       </div>
       
       <div class="span6">
       <h1 span class="tipo_menu10">— LATEST TWEETS</h1>
       <div class="row-fluid" style="margin-bottom:50px;">
       <div class="span6" style="border:none; margin-top:20px;">
       
<img src="views/imatges/home/latest_tweets/bocata_gris.png" width="223" height="150">
<div class="back_bocata">
         <p class="tipo_bio_comillas">

Life isn't about finding yourself. Life is about creating yourself." George Bernard Shaw.
</p>
 
       </div>
       <p class="tipo_agenda_titol" style="color:#A5A7AA; font-size:15px;">
       <img  style="margin-top:40px;" src="views/imatges/home/latest_tweets/img_face.jpg" width="43" height="43">
       <span style="float:right; max-width:150px; margin-top:40px; margin-right: 20px;">
       MARTIN LUTZ<br><span style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;">21/03/2013</span></span></p>
       </div>
       <div class="span6" style="border:none; margin-top:20px;">
       
<img src="views/imatges/home/latest_tweets/bocata_gris.png" width="223" height="150">
<div class="back_bocata">
         <p class="tipo_bio_comillas">

Life isn't about finding yourself. Life is about creating yourself." George Bernard Shaw.
</p>
 
       </div>
       <p class="tipo_agenda_titol" style="color:#A5A7AA; font-size:15px;">
       <img  style="margin-top:40px;" src="views/imatges/home/latest_tweets/img_face.jpg" width="43" height="43">
       <span style="float:right; max-width:150px; margin-top:40px; margin-right: 20px;">
       MARTIN LUTZ<br><span style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;">21/03/2013</span></span></p>
       </div>
       
       
       
       
       
       </div>
       
        <div class="row-fluid" style="margin-bottom:50px;">
       <div class="span6" style="border:none; margin-top:20px;">
       
<img src="views/imatges/home/latest_tweets/bocata_gris.png" width="223" height="150">
<div class="back_bocata">
         <p class="tipo_bio_comillas">

Life isn't about finding yourself. Life is about creating yourself." George Bernard Shaw.
</p>
 
       </div>
       <p class="tipo_agenda_titol" style="color:#A5A7AA; font-size:15px;">
       <img  style="margin-top:40px;" src="views/imatges/home/latest_tweets/img_face.jpg" width="43" height="43">
       <span style="float:right; max-width:150px; margin-top:40px; margin-right: 20px;">
       MARTIN LUTZ<br><span style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;">21/03/2013</span></span></p>
       </div>
       <div class="span6" style="border:none; margin-top:20px;">
       
<img src="views/imatges/home/latest_tweets/bocata_gris.png" width="223" height="150">
<div class="back_bocata">
         <p class="tipo_bio_comillas">

Life isn't about finding yourself. Life is about creating yourself." George Bernard Shaw.
</p>
 
       </div>
       <p class="tipo_agenda_titol" style="color:#A5A7AA; font-size:15px;">
       <img  style="margin-top:40px;" src="views/imatges/home/latest_tweets/img_face.jpg" width="43" height="43">
       <span style="float:right; max-width:150px; margin-top:40px; margin-right: 20px;">
       MARTIN LUTZ<br><span style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;">21/03/2013</span></span></p>
       </div>
       
       
       
       
       </div>
       
       
       </div>
       
    
       
       
       
       </div>
      
      </div>








<div id="backgroundwantto">

<div class="container" style="margin-top:70px; margin-bottom:50px; ">

<div id="push">
        
        
        <a href="http://applicationsform.moebio.org/request-info" target="_blank"><img src="views/imatges/wantto.png"
onmouseover="this.src='views/imatges/wantto_verd.png'"
onmouseout="this.src='views/imatges/wantto.png'"></a> 
      
 
      
      
      </div>

</div>

</div>

 <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<a href="#" data-dismiss="modal" aria-hidden="true" class="pull-right"><img src="views/imatges/modal/cross.png" width="37" height="37" style="margin-top:-40px;"></a>
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
<option value="no info" selected="selected"> nationality</option> 
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





<button type="submit" class="btn btn-link" ><img src="views/imatges/modal/request.png" class="pull-right" width="106" height="29"  style="margin-bottom:40px;"></img></button>



</form>
</div>
       
       
<div id="push" style="margin-top:70px; margin-bottom:50px;">
        
        
        <a href="http://es.linkedin.com/in/moebiobarcelona/" target="_blank"><img src="views/imatges/socialpictos/linkedin1.png"
onmouseover="this.src='views/imatges/socialpictos/linkedin2.png'"
onmouseout="this.src='views/imatges/socialpictos/linkedin1.png'"></a> 
        
        <a href="http://www.facebook.com/moebiobarcelona" target="_blank"><img src="views/imatges/socialpictos/facebook1.png" onmouseover="this.src='views/imatges/socialpictos/facebook2.png'"
onmouseout="this.src='views/imatges/socialpictos/facebook1.png'" style="margin-left:20px;"></a> 
        
       
        <a href="https://twitter.com/moebiobarcelona" target="_blank"><img src="views/imatges/socialpictos/twiteer1.png" onmouseover="this.src='views/imatges/socialpictos/twiteer2.png'"
onmouseout="this.src='views/imatges/socialpictos/twiteer1.png'"  style="margin-left:20px;"></a> 
        
       
       
        
       
       
       
       </div>



      <div id="push"><p><img src="views/imatges/triangle.png" width="30" height="17"></p></div>
   

    <div id="footer">
      <div class="container">
        
        <div class="row" style="margin-bottom:85px; margin-top:85px">
        
      <div class="span_footer1" style="min-height:120px;">
      <p span class="tipo_menu17"><a href="the_initiative.php">About Moebio</a></p>
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
   
    
    
    
    <script src="views/assets/js/jquery.js"></script>
    <script src="views/assets/js/bootstrap-transition.js"></script>
    <script src="views/assets/js/bootstrap-alert.js"></script>
    <script src="views/assets/js/bootstrap-modal.js"></script>
    <script src="views/assets/js/bootstrap-dropdown.js"></script>
    <script src="views/assets/js/bootstrap-scrollspy.js"></script>
    <script src="views/assets/js/bootstrap-tab.js"></script>
    <script src="views/assets/js/bootstrap-tooltip.js"></script>
    <script src="views/assets/js/bootstrap-popover.js"></script>
    <script src="views/assets/js/bootstrap-button.js"></script>
    <script src="views/assets/js/bootstrap-collapse.js"></script>
    <script src="views/assets/js/bootstrap-carousel.js"></script>
    <script src="views/assets/js/bootstrap-typeahead.js"></script>
    
    <script src="views/moebio.js"></script>
    



  </body>
</html>
