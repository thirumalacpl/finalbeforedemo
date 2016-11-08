<!DOCTYPE HTML>
<html>
	<head>
		<title>My Heart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/jquery.mobile.min.css" />
		<link rel="stylesheet" href="vendor/waves/waves.min.css" />
		<link rel="stylesheet" href="vendor/wow/animate.css" />
		<link rel="stylesheet" href="css/nativedroid2.css" />

		<meta name="mobile-web-app-capable" content="yes">
	 	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

<script src="js/jquery.mobile.min.js"></script>
   <script src="js/jquery-1.11.3.min.js"></script>
   	<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.mobile-1.4.5.min.js"></script>
<!-- <script src="js/jquery.min.js"></script> -->


  <link rel="stylesheet" href="css/heart.css" />
   <script type="text/javascript" src="cordova.js"></script>

<script type="text/javascript">
	//handle Back button
function onDeviceReady() {
    // Register the event listener
    document.addEventListener("backbutton", onBackKeyDown, false);
    console.log('Device ready - register onBackKeyDown()');                
}

document.addEventListener("deviceready", onDeviceReady, false);

function onBackKeyDown() {
    var active_page = $( ":mobile-pagecontainer" ).pagecontainer( "getActivePage" );
    var id =active_page.page().attr('id');
    if (id==='pageone') {
        if (confirm('Do you want to exit the app?')==true){
            navigator.app.exitApp();
        }
    }
    else{
    navigator.app.backHistory();
    }
}
//**
</script>

	</head>
	<body>

<!--Page one starts-->

       <div data-role="page"  id="pageone" class="main-bg">
<script type="text/javascript" src="js/condition.js"></script>
 <script type="text/javascript" src="cordova.js"></script>
			<nd2-include data-src=".//examples/fragments/panel.left.html"></nd2-include>

			<div data-role="panel" id="bottomsheet" data-animate="false" data-position='bottom' data-display="overlay">
				<nd2-include data-src=".//examples/fragments/bottom.sheet.html"></nd2-include>
			</div>

			<!-- <div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
				<a href="#bottomsheet" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-more-vert"></i></a>
				<a href="#leftpanel" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a>
				<h1 class="wow fadeIn" data-wow-delay='0.4s'>Page Title</h1>
			</div>-->
			<div role="main" class="ui-content main-top" data-inset="false" >
			
				<div class="main-both1">&nbsp;</div>

				<div class="main-center"> <img src="./img/logo.PNG"></div>
                <div class="main-both2">&nbsp;</div>

				<a href="" class="ui-btn ui-btn-raised emr-nonemer" id="emergency">Emergency</a>
				
				 <div class="main-both3">&nbsp;</div>
				<a href="#" class="ui-btn ui-btn-raised emr-nonemer">Non -Emergency</a>
			</div>

		</div>
<!--Page one ends-->

<!--Page two starts-->

 <div data-role="page" id="cond_patient_details">
<script type="text/javascript" src="js/condition_pat_detail.js"></script>
		<style type="text/css">
.ui-input-text, .ui-input-search, textarea.ui-input-text.ui-textinput-autogrow {
    margin: 0px 0px 26px 0px !important;
    padding: 5px !important;
}
.lega{
    /* background-color: #53a596 !important; */
    background-color: #00A5B8 !important;
    /* background-color: #7E8AAF !important; */
    width: 97%;
    color: white !important;
    padding: 12px;
    font-size: 18px !important;
    height: 17px;
    font-weight: 800 !important;
}
.rwa {
    /* background-color: #2a303c!important; */
    /*1background-color: #425B93!important;*/
        background-color: rgb(32, 122, 144) !important;
    margin-left: 5px;
    margin-right: 5px;
}
.ssecc{
	color: white;
    font-size: 25px;
    font-family: sans-serif;
    text-align: center;
    padding-top: 12px;
    font-weight: 600;
    position: fixed;
    left: 20%;
    right: 20%;
}
.bg-radio-col{
    background-color:#58a698!important;
}
.select_agea{
/*    background-color: #7C949A !important ;*/
     /*background-color: #838C8E !important;*/
     background-color: #CAD2D4 !important;

}
.select_agelab{
        background-color: #CAD2D4 !important;
        color:#124652 !important;
        font-weight:600 !important; 
}
</style>


			<nd2-include data-src="examples/fragments/panel.left.html"></nd2-include>

			<div data-role="panel" id="bottomsheet" data-animate="false" data-position='bottom' data-display="overlay">
				<nd2-include data-src="examples/fragments/bottom.sheet.html"></nd2-include>
			</div>

			 <div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
			<!-- 	<a href="#bottomsheet" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-more-vert"></i></a> -->
				<!-- <a href="#leftpanel" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a> -->
          <a href="#pageone" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s' id="ypageion"><i class="zmdi  zmdi-arrow-back" ></i></a>
				<h1 class="wow fadeIn" data-wow-delay='0.4s'>My Heart</h1>
			</div>

			<div role="main" class="ui-content sec-bg" data-inset="false">
	

<p class="sec-head ssecc">Patient Details</p>

<div class="sec-both">&nbsp;</div>
<br>
  <form method="post"  id="pat_detai" style="margin-top:50px"> 
	<div class="ui-grid-solo sec-mainsolo">

    <div class="ui-block-a"> 
      	<div class="ui-grid-solo">
		<div class="col-md-12">
		<div class="box">


<div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient  Name</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <textarea  style="background-color: #ffffff !important;"cols="40" rows="8" name="name2" id="pat_name" value="" placeholder="Patient Name"></textarea>


</div>

       <!--  <input type="text" name="name2" id="pat_name" value="" data-clear-btn="true" placeholder="Patient  Name..."> -->
 <br>
 <div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient  Age</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <!-- <textarea  style="background-color: #ffffff !important;"cols="40" rows="8" name="age" id="age_n" value="" placeholder="Age"></textarea> -->
     <input type="number"  style="background-color: #ffffff !important;"  class="age_n_style" cols="40" rows="8" name="age" id="age_n" value=""  placeholder="Age">


</div>

    <br>
<div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient  Height (in cm)</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <!-- <textarea  style="background-color: #ffffff !important;"cols="40" rows="8" name="age" id="age_n" value="" placeholder="Age"></textarea> -->
     <input type="number"  style="background-color: #ffffff !important;"  class="age_n_style" cols="40" rows="8" name="age_cm_h" id="age_cm_h" value=""  placeholder="Height in cm">


</div>

    <br>
<div class="row" style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient  Weight (in kg)</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <!-- <textarea  style="background-color: #ffffff !important;"cols="40" rows="8" name="age" id="age_n" value="" placeholder="Age"></textarea> -->
     <input type="number"  style="background-color: #ffffff !important;"  class="age_n_style" cols="40" rows="8" name="age_kg_w" id="age_kg_w" value=""  placeholder="Weight in kg">


</div>

    <br>

 <div class="ui-grid-b select_agea">
  <div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient Gender</label>
        <fieldset data-role="controlgroup">                 
      
        <div class="ui-block-a medilef" style="margin-left:30px">
          <input type="radio" name="gender_de" id="radio-choice-1b"  value="male" checked="checked">
           <label for="radio-choice-1b" class="select_agelab bg-radio-col" >Male</label> 
         </div>
        <div class="ui-block-b medilef" style="margin-left:30px">
          <input type="radio" name="gender_de" id="radio-choice-2b" value="female">
           <label for="radio-choice-2b" class="select_agelab bg-radio-col uiradbac">Female</label> 
        </div>          
        </fieldset> 
        </div>
    </div> 

        <!--   <p id="geolocation">Waiting for location...</p> -->

    <br>
 <div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Patient Mobile Number</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <!-- <textarea  style="background-color: #ffffff !important;" cols="40" rows="8" name="mob_no" id="mob_no" value="" placeholder="Enter Your Mobile Number"></textarea> -->
    <input type="number"  style="background-color: #ffffff !important;" class="age_n_style_mob" cols="40" rows="8" name="mob_no" id="mob_no" value=""  placeholder="Enter Your Mobile Number">


</div>

<!--   <a href="#myPopup1d" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-position-to="window">Position popup to window</a> -->

     <div data-role="popup" id="myPopup1d" class="ui-content" data-dismissible="false" >
      <p class="popsi">Thanks For The Information</p>
<!--       <a href="#question_li" class="txt-dec">  <input type="button" value="ok" style="opacity: inherit; border-radius: 0px;background-color:white" id=""> dsfdas</a> -->
    <!--  <a href="#" > <button style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;background-color:#00A3B5;color:white;font-size:larger" id="oktoquestio">OK</button></a> -->
<div style="float:center;margin-left:25%;margin-right:25%">
<a href="#" class="txt-dec" id="oktoquestio" > <button class="search_near_by_buttt">OK</button></a>
</div> 
    </div>
<!--     <div >
	<input type="text" name="mob_no" id="mob_no" value="" data-clear-btn="true" placeholder="Enter Your Mobile Number...">
    </div> -->

     <br>

<!-- <div style="float:center;margin-left:25%;margin-right:25%">
	  <a href="#" class="txt-dec">  <input type="button" value="Submit" style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;" id="pate_enter_but"> </a>
</div> -->
<div style="float:center;margin-left:25%;margin-right:25%">
<a href="#" class="txt-dec" id="pate_enter_but" > <button class="search_near_by_buttt">Submit</button></a>
</div> 
<!-- 
    <button style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;background-color:#00A3B5;color:white;font-size:larger" id="pate_enter_but">submit</button> -->
<br>

 </div>
</div>
</div>





</div>

</div>
</form>
</div>
</div>

<!--Page two end-->



<!--page three start-->


 <div data-role="page" id="question_li" style="background-color: #f5f0e1;" >
<!-- <script type="text/javascript" src="js/question_frl.js"></script> -->
<script src="js/five.js"></script>
<style type="text/css">

.ui-controlgroup-horizontal .ui-controlgroup-controls .ui-btn.ui-radio-on {
    background-color: #5ABECA !important;
    color: #ffffff;
}

.pads{
padding: 5em;
}

.mtop{
margin-top: -1em;
}

</style>
<style type="text/css">
.ui-input-text, .ui-input-search, textarea.ui-input-text.ui-textinput-autogrow {
    margin: 0px 0px 26px 0px !important;
    padding: 5px !important;
}
</style>
<style type="text/css">
/*  .ui-checkbox .ui-btn, .ui-radio .ui-btn, .ui-checkbox .ui-btn:hover, .ui-radio .ui-btn:hover {
    background-color: rgb(235, 235, 235);
    font-weight: 400;
}
*/

/*.ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
    background-color: #151922 !important;
    border-color: rgba(0,0,0,.87);
    color: rgba(0, 0, 0, 0.87);
}
*/
/*.ui-checkbox .ui-btn, .ui-radio .ui-btn, .ui-checkbox .ui-btn:hover, .ui-radio .ui-btn:hover {
   
    background-color: #1E5A69 !important;
    font-weight: 400;
}*/

.ui-radio .ui-btn.ui-radio-on:before {
    position: absolute;
    content: "";
    top: 20px !important;
    left: 10px !important;
    display: inline-block;
    box-sizing: border-box;
    width: 20px;
    height: 20px;
    margin: 0;
    cursor: pointer;
    border: 0px;
    border-radius: 50%;
    z-index: 3;
    background-color: rgba(0,0,0,0.54);
}
/*.ui-radio .ui-btn.ui-radio-on:before {
    position: absolute;
    content: "";
    top: 20px !important;
    left: 10px !important;
    display: inline-block;
    box-sizing: border-box;
    width: 6px;
    height: 6px;
    margin: 0;
    cursor: pointer;
    border: 0px;
    border-radius: 50%;
    z-index: 3;
    background-color: rgba(0,0,0,0.54);
}
*/
/*.ui-btn.ui-radio-off:after, .ui-btn.ui-radio-on:after {
    position: absolute;
    top: 15px !important;
    left: 5px !important;
    display: inline-block;
    box-sizing: border-box;
    width: 16px;
    height: 16px;
    margin: 0;
    cursor: pointer;
    border: 2px solid rgba(0,0,0,.54);
    border-radius: 50%;
    z-index: 2;
}*/
.ui-btn.ui-radio-off:after, .ui-btn.ui-radio-on:after {
    position: absolute;
    top: 15px !important;
    left: 5px !important;
    display: inline-block;
    box-sizing: border-box;
    width: 16px;
    height: 16px;
    margin: 0;
    cursor: pointer;
    border: 15px solid #F5F0E1;
    border-radius: 50%;
    z-index: 2;
}
/*.third-bg {
    background-color: #151922;
    padding: 0px;
    margin: 0px;
    color: #ffffff;
    padding: 20px;
}
*/
/*.ui-mobile label, .ui-controlgroup-label, .ui-controlgroup-label legend {
    font-size: 20px !important;
    font-weight: 400;
    color: #696969;
    margin-bottom: 0px;
}*/

.third-bg {
    /*ackground-color: #9d9fa5 !important;*/
     background-color: rgb(83, 114, 122) !important;
    padding: 0px;
    margin: 0px;
    color: #fff3f3;
    padding: 18px !important;
}
.third-q {
    text-align: center;
    color: #ffffff!important;
    font-size: 23px;
    font-weight: 500;
}
/*.ui-page-theme-a .ui-radio .ui-btn.ui-radio-on:before {
    background-color: #009688;
}
*/

.ui-controlgroup-controls, .ui-controlgroup-controls .ui-radio, .ui-controlgroup-controls .ui-checkbox, .ui-controlgroup-controls .ui-select, .ui-controlgroup-controls li {
    background-color: rgba(255, 255, 255, 0);
    border-radius: 0px;
}
.ui-mini {
    margin: .446em;
    width: 100%;
}

.ui-controlgroup-horizontal .ui-controlgroup-controls {
    display: inline-block;
    vertical-align: middle;
    width: 100%;
}


/*clas*/
.rw{
/*  background-color: #2a303c!important;*/
  /*background-color: #425b93!important;*/
    margin-left: 5px;
    margin-right: 5px;
}

.field{


	/*sdafasdfds*/

  width: 100% !important;
  margin: 0px 0px !important;
}

/*.leg{
 
        background-color: #0B4250 !important;
    
    width: 97%;
    color: white !important;
    padding: 12px ;
    font-size: 18px !important;
    height: 17px;
}*/

.lab{
    background-color: #3E6771 !important;
    /*background-color: #1E5A69 !important;*/
    color: white !important;
    border: solid 1px #151922 !important;
    padding-top: 15px;
    padding-bottom: 15px
}
.lab2{
    background-color: #3E6771 !important;
    /*background-color: #1E5A69 !important;*/
    color: white !important;
    border: solid 1px #151922 !important;
    padding-top: 15px;
    padding-bottom: 15px
}
</style>
<style type="text/css">
    html .ui-page-theme-a .ui-btn.ui-checkbox-on.ui-checkbox-on:after {
    background-color: #5abeca !important;
    border-color: #5abeca !important;
}

/*.ui-page-theme-a .ui-btn.ui-radio-on:after {
    border-color: #00bbd3 !important;
}*/

.ui-page-theme-a .ui-btn.ui-radio-on:after {
    border-color: #F5F0E1 !important;
    border: 15px solid #F5F0E1;
    }

/*.ui-page-theme-a .ui-radio .ui-btn.ui-radio-on:before {
    background-color: #00bbd3 !important;
}
*/
.ui-page-theme-a .ui-radio .ui-btn.ui-radio-on:before {
    background-color: #00A3B5 !important;
}

.ui-icon-check:after, html .ui-btn.ui-checkbox-on.ui-checkbox-on:after {
    content: "";
    background-color: #cccccc;
    background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgi…sZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO3N0cm9rZTpub25lIiAvPgo8L3N2Zz4K") ;
    width: 35px !important;
    height: 35px !important;
    border: 2px solid #cccccc;
    border-radius: 2px;
    overflow: hidden;
}
 
 .ui-btn.ui-checkbox-off:after {
    border: 20px solid rgba(0,0,0,.54) !important;
}

</style>
<!-- <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css"> -->
<!-- <link rel="stylesheet" href="css/my.css"> -->

<!-- <script src="js/jquery.mobile-1.4.5.js"></script> -->

<!-- <script src="js/map.js"></script> -->
			<!-- <nd2-include data-src=".//examples/fragments/panel.left.html"></nd2-include> -->

			<div data-role="panel" id="bottomsheet" data-animate="false" data-position='bottom' data-display="overlay">
				<nd2-include data-src=".//examples/fragments/bottom.sheet.html"></nd2-include> 
			</div>

			 <div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
				<a href="#bottomsheet" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-more-vert"></i></a>
				<a href="#cond_patient_details" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi  zmdi-arrow-back"></i></a>
				<h1 class="wow fadeIn" data-wow-delay='0.4s'>Question</h1>
			</div>

			<div role="main" class="ui-content full"  style="background-color: #F5F0E1 !important;" >
	
<div  class="third-bg">
<div class="third-q" ><span>SELECT THE APPROPRIATE OPTIONS </span></div>
</div>

<br>
<form action="" id="callAjaxFormradio" style="background-color: rgb(245, 240, 225);margin-left:25px;margin-right:25px">

<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">1.Do you have Chest pain?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpaina" id="cpaina1" value="83" checked="checked">

                            <label  for="cpaina1" class="waves-effect lab">Yes</label>

                            <input type="radio" name="cpaina" id="cpaina2" value="84">

                            <label  for="cpaina2" class="waves-effect lab">No</label>
                         

                        
                           
  </fieldset>
</div>

<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">2.When did the pain start ?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainb" id="cpaina4" value="50" checked="checked">

                            <label  for="cpaina4" class="waves-effect lab"> < 1 hour</label>

                            <input type="radio" name="cpainb" id="cpaina5" value="51">

                            <label  for="cpaina5" class="waves-effect lab"> 2 to 12 Hours</label>
                            <input type="radio" name="cpainb" id="cpaina6" value="52">
                            <label  for="cpaina6" class="waves-effect lab"> >12 hours</label>

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">3. Is the pain present all the time?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainc" id="cpaina7" value="85" checked="checked">

                            <label  for="cpaina7" class="waves-effect lab">Yes</label>

                            <input type="radio" name="cpainc" id="cpaina8" value="86">

                            <label  for="cpaina8" class="waves-effect lab">No - Intermittent</label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">4. Is the pain getting worse?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpaind" id="cpaina9" value="87" checked="checked">

                            <label  for="cpaina9" class="waves-effect lab">Yes - becoming unbearable</label>

                            <input type="radio" name="cpaind" id="cpaina10" value="88">

                            <label  for="cpaina10" class="waves-effect lab">N0 - same as it started </label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" id="">
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">5.How is Chest pain ?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="checkbox" name="cpaine" id="cpainaa11" value="46" checked="">

                            <label  for="cpainaa11" class="waves-effect lab">Crushing - tightening with a rope</label>

                            <input type="checkbox" name="cpaine" id="cpainaa12" value="47">

                            <label  for="cpainaa12" class="waves-effect lab">Heaviness - pressing with a heavy weight</label>
                            <input type="checkbox" name="cpaine" id="cpainaa13" value="48">
                            <label  for="cpainaa13" class="waves-effect lab">Burning - acid burn</label>

                            <input type="checkbox" name="cpaine" id="cpainaa14" value="49">
                            <label for="cpainaa14" class="waves-effect lab">Sharp - stabbing with knife / pins</label>

                              <input type="checkbox" name="cpaine" id="cpainaa15" value="90">
                            <label for="cpainaa15" class="waves-effect lab">Does the pain spread to shoulder / neck / hands / back</label>
                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">6.Is the pain relieved by any of the following ?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="checkbox" name="cpainf" id="cpaina15" value="91" checked="checked">

                            <label for="cpaina15" class="lab waves-effect">resting - sitting / lying down</label>

                            <input type="checkbox" name="cpainf" id="cpaina16" value="92">

                            <label  for="cpaina16" class="waves-effect lab">Isordil tablet / NTG spray</label>

                            <input type="checkbox" name="cpainf" id="cpaina17" value="93">

                            <label  for="cpaina17" class="waves-effect lab">Drinking. warm water</label>

                              <input type="checkbox" name="cpainf" id="cpaina18" value="94">

                            <label  for="cpaina18" class="waves-effect lab">Taking ant acid Tablet/ gel</label>
                    
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">7.Have you had similar pain in the past ? </legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpaing" id="cpaina19" value="95" checked="checked">

                            <label for="cpaina19" class="lab waves-effect">Yes</label>

                            <input type="radio" name="cpaing" id="cpaina20" value="96">

                            <label  for="cpaina20" class="waves-effect lab">No</label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">8.Do you have any breathing difficulty?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainh" id="cpaina21" value="58" checked="checked">

                            <label  for="cpaina21" class="waves-effect lab">Yes</label>

                            <input type="radio" name="cpainh" id="cpaina22" value="59">

                            <label  for="cpaina22" class="waves-effect lab">No</label>
                      
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">9.How bad is your breathing difficulty ?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpaini" id="cpaina23" value="97" checked="checked">

                            <label  for="cpaina23" class="waves-effect lab">Unable to speak a full sentence</label>

                            <input type="radio" name="cpaini" id="cpaina24" value="98">

                            <label  for="cpaina24" class="waves-effect lab">unable to  lie down</label>


                            <input type="radio" name="cpaini" id="cpaina244" value="99">

                            <label  for="cpaina244" class="waves-effect lab">feel it on exertion -  walking up slope / climbing stairs</label>
                      
  </fieldset>
</div>

<br>

<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">10.Do you have Palpitation (Feeling the heart beat going fast above 90 beats in a minute)?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainj" id="cpaina25" value="63" >

                            <label  for="cpaina25" class="waves-effect lab">Yes</label>


                             <input type="radio" name="cpainj" id="cpaina26" value="64" checked="checked">

                            <label  for="cpaina26" class="waves-effect lab">NO</label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">11.Did you have vomiting more than twice?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpaink" id="cpaina27" value="65" >

                            <label  for="cpaina27" class="waves-effect lab">Yes</label>


                             <input type="radio" name="cpaink" id="cpaina28" value="66" checked="checked">

                            <label  for="cpaina28" class="waves-effect lab">NO</label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">12.Do you have profuse sweating?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainl" id="cpaina29" value="100" >

                            <label  for="cpaina29" class="waves-effect lab">Yes</label>


                             <input type="radio" name="cpainl" id="cpaina30" value="101" checked="checked">

                            <label  for="cpaina30" class="waves-effect lab">NO</label>
                         

                        
                           
  </fieldset>
</div>
<br>
<div class="row rw" style="background-color: #009688 !important;" >
  

  <fieldset data-role="controlgroup" class="field">
                            <legend class="fnt1 leg">13.Do you have feeling of fear?</legend>
                           <div  class="fnt2" id="" ></div>
                       
                            <input type="radio" name="cpainm" id="cpaina31" value="69" >

                            <label  for="cpaina31" class="waves-effect lab">Yes</label>


                             <input type="radio" name="cpainm" id="cpaina32" value="70" checked="checked">

                            <label for="cpaina32" class="waves-effect lab">NO</label>
                         

                        
                           
  </fieldset>
</div>

<br>

 <div class="row rw" >
 
                        <fieldset data-role="controlgroup" style="width: 100%;">
                            <legend class="fnt1 leg">14.Do you have these risk factors?</legend>
                            <div class="fnt2" id=""></div>
                            <input type="checkbox" name="painstrtt11" id="checkbox-1ab" value="71" checked="">
                            <label class="lab waves-effect " for="checkbox-1ab">Diabetes</label>
                            <input type="checkbox" name="painstrtt11" id="checkbox-2ab" value="72">
                            <label class="lab waves-effect " for="checkbox-2ab">High Blood pressure</label>
                            <input type="checkbox" name="painstrtt11" id="checkbox-3ab" value="73">
                            <label class="lab waves-effect " for="checkbox-3ab">High cholesterol</label>
                            <input type="checkbox" name="painstrtt11" id="checkbox-4ab" value="74">
                            <label class="lab waves-effect " for="checkbox-4ab">Current or ex- smoker</label>
                            <input type="checkbox" name="painstrtt11" id="checkbox-4ab5" value="75">
                            <label  class="lab waves-effect " for="checkbox-4ab5">Heart attack parents / brother / sister</label>
                        </fieldset>


</div>
<br>
 <div class="row rw" >
 
                        <fieldset data-role="controlgroup" style="width: 100%;">
                            <legend class="fnt1 leg">15.Previous Medical History?</legend>
                            <div  class="fnt2" id=""></div>
                            <input type="checkbox" name="painstrtt12" id="checkbox-1abw" value="76" checked="">
                            <label  class="lab waves-effect " for="checkbox-1abw">Angina / heart problems</label>
                            <input type="checkbox" name="painstrtt12" id="checkbox-2abw" value="77">
                            <label class="lab waves-effect " for="checkbox-2abw">Asthma / lung disease</label>
                            <input type="checkbox" name="painstrtt12" id="checkbox-3abw" value="78">
                            <label class="lab waves-effect " for="checkbox-3abw">Stomach acid / ulcer</label>
                            <input type="checkbox" name="painstrtt12" id="checkbox-4abw" value="79">
                            <label class="lab waves-effect " for="checkbox-4abw">Urine problem</label>
                    
                        </fieldset>


</div>
<br>

<!--
<div class="row" style="background-color: #ebebeb;  background-color: #ebebeb;margin-left: 5px;
    margin-right: 5px;">
  
  <fieldset data-role="controlgroup">
                            <legend style="font-size: 14px;color: black;font-weight: 400;">Any Operations</legend>
                            <div id="painstrt13"></div>
                        <input type="text" name="anyop" id="anyop" value="" data-clear-btn="true" placeholder="Any Operation">
                        </fieldset>


 cond_patient_details
</div> 
<br>
-->

<div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 leg rw" >Any Operations</label>
  <div  style="width: 99%;" class="fnt2" id="" ></div>

    <textarea  style="background-color: #ffffff !important;" cols="40" rows="8" name="anyop" id="anyop" placeholder="Any Operations"></textarea>


</div>
<br>
</div>

<!-- <div class="row">
<div class="col-xs-3 padz"></div>
 <div class="col-xs-6 padz">
<a href="" class="txt-dec">  <input type="button" value="Submit" style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;" id="chatSendBut_qu"> </a>
 </div>
<div class="col-xs-3 padz"></div>
</div> -->

<div style="float:center;margin-left:25%;margin-right:25%">
<a href="#" class="txt-dec" id="chatSendBut_qu" > <button class="search_near_by_buttt">Submit</button></a>
</div>

</form>
<br>
<!--   <a href="#myPopup1d" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-position-to="window">Position popup to window</a> -->

     <div data-role="popup" id="myPopup1da" class="ui-content" data-dismissible="false" >
      <p class="popsi">Report Submitted Succesfully</p>
     <!--  <a href="#sear_nearby_mapp" class="txt-dec">  <input type="button" value="ok" style="opacity: inherit; border-radius: 0px;" id=""> </a> -->

    <!--   <a href="#" > <button style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;background-color:#00A3B5;color:white;font-size:larger" id="tosear_nearby_mapp">OK</button></a> -->

      <div style="float:center;margin-left:25%;margin-right:25%">
<a href="#" class="txt-dec" id="tosear_nearby_mapp" > <button class="search_near_by_buttt">OK</button></a>
</div> 

    </div>

<div data-role="popup" id="positionWindow" class="ui-content" style="max-width:380px;background-color:#007A88;color:white;padding:50px;border-radius:10px;font-weight:500">
    
<p>Report Submitted Succesfully.</p>
      <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left" id="sear_nearby_mappp">ok</button>
</div>


</div>
</div>

<!--page three end-->




<!--page four start-->


 <div data-role="page" id="sear_nearby_mapp" >
<script type="text/javascript" src="js/sear_nearby_mapp.js"></script>

<!-- <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css"> -->
<!-- <link rel="stylesheet" href="css/my.css"> -->
<link href="css/uploadfilemulti.css" rel="stylesheet">
<script src="js/jquery.fileuploadmulti.min.js"></script>
<script src="js/jquery.mobile-1.4.5.js"></script>
<style type="text/css">
   div.upload {
    width: 50px !important;
    height: 50px !important;
    background: url(../www/images/primary/qwe.png);
    /*background: url(../www/images/upload-img.png);*/
    /* background-color: red; */
    
    background-size: 100% 100%;
    background-repeat: no-repeat;
    position: absolute;
    box-shadow: 0 2px 0 0 rgba(19, 100, 141, 0);
    padding-left: 0%;
padding-right: 0%;
padding: 0px 0px 0px 0px;
}
</style>
<!-- <script src="js/map.js"></script> -->
			<!-- <nd2-include data-src=".//examples/fragments/panel.left.html"></nd2-include> -->

	    <div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
        <a href="#bottomsheet" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-more-vert"></i></a>
        <!-- <a href="#leftpanel" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a> -->
          <a href="#question_li" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi  zmdi-arrow-back" id=""></i></a>
        <h1 class="wow fadeIn" data-wow-delay='0.4s'>My Heart</h1>
      </div>

			<div role="main" class="ui-content full" data-inset="false" id="main">




<div data-role="popup" id="popupPhotoPortrait" class="photopopup imj " data-overlay-theme="a" data-corners="false" data-tolerance="30,15">
</div>




<div class="row center-xs" style="padding-bottom: 30px;">
    <div class="col-xs-12">
        <div class="box">
           <div style="background-color: rgb(239, 239, 239);
padding: 15px;"><span style="font-weight: bold;font-size: 20px;">Upload </span>
<div style="clear:both;height:0px;">&nbsp;</div>
<br>(&nbsp;ECG,&nbsp; X-Ray ,&nbsp;Blood Test&nbsp;-Troponin,&nbsp;Echo )</div>
        </div>
    </div>
</div>




<div class="row center-xs">
    <div class="col-xs-12">
        <div class="box">
           <img src="images/upload-img.jpg"> </div>
        </div>
    </div>
</div>



<div class="row center-xs" style="padding-top: 15px;">
    <div class="col-xs-12">
        <div class="box">
           <!-- div class="upload" id="mulitplefileuploader"></div> -->

           <a href="#" style="/*ackground-color:#f6f6f6;*/background-color: #3198c0;
color: white;" class="ui-btn ui-btn-inline waves-effect waves-button waves-effect waves-button " id="mulitplefileuploader"><!-- <i class="zmdi zmdi-folder-outline"> --></i>Choose Files to Upload</a>
    
</div>




<!--  <div class="row " style="margin-left:5px;margin-right:5px">
 <label  for="textarea2b" class="fnt1 lega rwa" >Upload any of the Reports</label>
 <div style="float:left">
  <label  for="textarea2b" class="fnt1 lega rwa" >1.ECG  </label>
  <label  for="textarea2b" class="fnt1 lega rwa" >3.Chest X - Ray </label>
 </div>
  <div style="float:left">
  <label  for="textarea2b" class="fnt1 lega rwa" >2.Blood tests - Troponin </label>
  <label  for="textarea2b" class="fnt1 lega rwa" >4.Echo  </label>
 </div>
 <br>
 </div> -->
<!-- 
<div id="chatr">

</div>

  <div class="upload_box">
 <div class="ui-grid-a">
 <div class="ui-block-a" style="width:15%;">
<div class="upload" id="mulitplefileuploader">
      


    </div>
    </div>
    </div>
</div> 
 <div id="status"></div>  -->
<!--upload end-->


<!-- <div style="margin-top:50px;margin-left:20%;margin-right:20% ">
<a href="" class="txt-dec">  <input type="button" value="SEARCH NEARBY LOCATION" style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;" id="sear_Addre" > </a>
<a href="#search_near_twokm" class="txt-dec" id="" >  <input type="button" value="SEARCH NEARBY LOCATION" style="border: solid 2px #00BBD3;opacity: inherit; border-radius: 0px;color:red !important" > </a>
</div> -->

<!-- <div class="row center-xs">
    <div class="col-xs-12">
        <div class="box">
<div style="float:center;margin-left:25%;margin-right:25%">
<a href="#search_near_twokm" class="txt-dec" id="" > <button class="search_near_by_buttt">Submit</button></a>
</div>

</div>
</div>
</div> -->

</div>
</div>
<!--map test end-->

<!--Page four starts-->

 <div data-role="page" id="search_near_twokm" >
<script type="text/javascript" src="js/search_near_twokm.js"></script>
<link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
<link rel="stylesheet" href="css/material-design-iconic-font.css" />
<style type="text/css">
      .nd2-card .card-title .card-subtitle {
    font-size: 14px;
    margin: 0px;
    color: #8e8e8e;
    font-weight: 400;
    line-height: 20px;
    max-width: 75%;
    overflow: hidden;
     white-space:inherit;
 
}

.nd2-card .card-title .card-primary-title {
    margin: 0px;
    font-weight: 500;
    font-size: 22px;
    line-height: 26px;
    max-width: 90%;
    overflow: hidden;
   white-space:inherit;;
    text-overflow: ellipsis;
}
.nd2-card {
    display: block;
    border-radius: 4px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 15px auto;
    max-width: 98%;
    overflow: hidden;
}
.bgc{
        background-color: #00a3b5;
    }
  </style>
<!-- <script src="js/map.js"></script> -->

			<!-- <nd2-include data-src=".//examples/fragments/panel.left.html"></nd2-include> -->

			<div data-role="panel" id="bottomsheet" data-animate="false" data-position='bottom' data-display="overlay">
				<nd2-include data-src=".//examples/fragments/bottom.sheet.html"></nd2-include>
			</div>

			 <div data-role="header" data-position="fixed" class="wow fadeInDown" data-wow-delay="0.2s">
				<a href="#bottomsheet" class="ui-btn ui-btn-right wow fadeIn" data-wow-delay='1.2s'><i class="zmdi zmdi-more-vert"></i></a>
				<a href="#" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s' id="doctaroundtopageone"><i class="zmdi zmdi-arrow-back"></i></a>
				<h1 class="wow fadeIn" data-wow-delay='0.4s'>My Heart</h1>
			</div>

			<div role="main" class="ui-content four-bg" data-inset="false">
	

<p class="sec-head2">HERE IS OUR RECOMMENDED CHOICE OF CARDIOLOGISTS IN YOUR NEAR BY LOCATION</p>

<div class="sec-both2">&nbsp;</div>
</div>
  <div class="ui-grid-solo sec-mainsolo" style="width:100%;">

    <div class="ui-block-a"> 
        <div class="ui-grid-solo">

<ul data-role="listview" data-icon="false" id="cadd">
  


</ul>

</div>




</div>
</div>

</div>

<!--Page four end-->






		
	
		

		<script src="vendor/waves/waves.min.js"></script>
		<script src="vendor/wow/wow.min.js"></script>

		<script src="js/nativedroid2.js"></script>
		<script src="nd2settings.js"></script>


	</body>
</html>