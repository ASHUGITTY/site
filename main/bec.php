<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type="text/css" href="bec_main.css"/>
<link type="image" rel="icon" href="new_1.jpg"/>
<script type="text/javascript" src="jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" type="text/css" href="modernizr.custom.79639.js"/>
<link rel="stylesheet" type="text/css" href="common.css"/>
<link rel="stylesheet" type="text/css" href="style2.css"/>


<title>BEC</title>
<style>
#loading{
	background-color:#FB7D00;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
	}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 200px;
	width: 200px;
	margin-top: -100px;
	margin-left: -100px;
	-ms-transform: rotate(-135deg); 
   	-webkit-transform: rotate(-135deg); 
    transform: rotate(-135deg);

}
.object{

	-moz-border-radius: 50% 50% 50% 50%;
	-webkit-border-radius: 50% 50% 50% 50%;
	border-radius: 50% 50% 50% 50%;
	position: absolute;
	border-top: 5px solid #000;
	border-bottom: 5px solid transparent;
	border-left:  5px solid #000;
	border-right: 5px solid transparent;
	
	-webkit-animation: animate 2s infinite;
	animation: animate 2s infinite;	

	}


#object_one{
	left: 75px;
	top: 75px;
	width: 50px;
	height: 50px;
	}
							
#object_two{
	left: 65px;
	top: 65px;
	width: 70px;
	height: 70px;
	-webkit-animation-delay: 0.2s;
    animation-delay: 0.2s;
	}
		
#object_three{
	left: 55px;
	top: 55px;
	width: 90px;
	height: 90px;
	-webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
	}
#object_four{
	left: 45px;
	top: 45px;
	width: 110px;
	height: 110px;
	-webkit-animation-delay: 0.6s;
    animation-delay: 0.6s;
	
	}	

@-webkit-keyframes animate {
 

50% {

	-ms-transform: rotate(360deg) scale(0.8); 
   	-webkit-transform: rotate(360deg) scale(0.8); 
    transform: rotate(360deg) scale(0.8); 
  }
	  
  

}

@keyframes animate {
	
50% {

	-ms-transform: rotate(360deg) scale(0.8); 
   	-webkit-transform: rotate(360deg) scale(0.8); 
    transform: rotate(360deg) scale(0.8); 
  }	
	
	}




</style>
<!--javascript for slide-->
<script language="javascript">
function InitializeImages()
 { 
 this.src = InitializeImages.arguments[0]; 
 } 
var ImageArray = new Object(); 
ImageArray[0] = new InitializeImages("188H.jpg"); 
ImageArray[1] = new InitializeImages("DSC_1869.JPG"); 
ImageArray[2] = new InitializeImages("DSCN1394.JPG"); 
ImageArray[3] = new InitializeImages("DSCN1396.JPG");

ImageArray.length=4;

</script>
<script type="text/javascript" src="easing1.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
$(".scroll").click(function(event)
{
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1800);
});
});

</script>
</head>

<body>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>

</div>
</div>
 
</div>


<div id='header'><script type="text/javascript" src="../../Users/Ashu/Desktop/PHP training/main.js"></script>
<ul style="list-style-type:none; margin:0; padding:0;">
<li  >
  <div id="hbutton" style="width:48px;height:48px;margin-bottom:10px;"><a id="head2" href="#home" class="scroll"><img src="1436925756_free-08.png"/></a></div>
</li>
<li><a  id="head" href="#abt" class="scroll">About Us</a></li>
<li><a id="head" href="#ment" class="scroll">Mentors</a></li>
<li><a id="head"href="#tm" class="scroll">Team</a></li>
<li><a id="head" href="#con" class="scroll">Contact Us</a></li>
</ul>
</div>


<div class="club" id="home">

<img src="windmill-on-the-plains--black-and-white-justin-woodhouse.jpg"/>
<div class="c_content">
<h1 style="font:'Times New Roman', Times, serif;font-weight:bold;color:#000;margin-top:-45%;margin-left:35%;font-size:66px;font-weight:300">B.K.B.I.E.T ENERGY CLUB</h1>

<h2 style="color:#000;font-family:'Comic Sans MS', cursive;font-weight:300;margin-left:40%;font-size:20px">A STEP TOWARD INNOVATION IN CONSERVATION</h2>

<!--<h2 style="color:#000;font:'Times New Roman', Times, serif;font-weight:300;margin-left:50%;font-size:34px;">CONSERVATION</h2>-->
</div>

 </div>


<FORM NAME= "testform" > 

    <input type="text" NAME="msgbox"  style="height:100px ;width:966px;padding-left:400px;font-family:'Times New Roman', Times, serif;font-size:30px;color:#000;background-color:transparent;margin-top:-10%;border:hidden;font-weight:300"/>
     <SCRIPT> 

  <!-- Hide from old browsers 

MsgSeperator = '#';

CharacterPos=0; 

MsgBuffer         = "";

var TypeDelay = 80; 

var NxtMsgDelay   = 1800; 

MsgIndex=0; 

var MsgArray = Array("#","Energy Saved is Energy Created...... #","Save Energy For a Better Tommorow.... #","Today’s wastage is tomorrow’s shortage. #","Make conservation a worldwide innovation. #")



   function StartTyping(CharacterPos) { 

   if (MsgArray[MsgIndex].charAt(CharacterPos) != MsgSeperator) { 

      MsgBuffer    = MsgBuffer + MsgArray[MsgIndex].charAt(CharacterPos) 

     self.document.forms[0].elements[0].value=MsgBuffer 

     delay=TypeDelay 

    } 



    else { 

       delay=NxtMsgDelay 

       MsgBuffer   = "" 

     CharacterPos=-1 

if (MsgIndex!=MsgArray.length-1){ 

      MsgIndex++ 

} 

else {MsgIndex=0 } 

    } 

    CharacterPos++ 

    setTimeout("StartTyping('"+CharacterPos+"')",delay) 

  } 



//--> 

StartTyping(0) 

</SCRIPT> 

 </form>
 
<div class="au" id="abt" style="margin-top:0px;color:#000;background-image:url(wind-turbine-7.jpg)>
<ul><li class="heading"><div class="Aboutus">
  <h3 style="font-family:'Times New Roman', Times, serif;font-size:42px;color:#000;margin-left:65%;margin-top:100px;font-weight:300">About Us</h3></div></li>
<li class="heading"><div class="content">
<p style="font-family:'Times New Roman', Times, serif;font-size:34px;color:#000;font-weight:300">B.K BIET Energy Club is an initiative by B.KBIET,Pilani in association with Rajasthan Renewable Energy Corporation(RRECL)to conserve and manage energy.It brings the togetherness of students,scholars,alumni,faculty who want to be a part of innovation related to energy conservation.We facilitates students in making tangible impact on the campus as well as near-by areas,ensuring greener and energy efficient enviroment.It was initiated to promote and support all technical and non-technical endeavours such as projects,awareness drives etc that have better energy uttilization and sustainability.<br/>We believe in:<br/>
<span class="quotes"">"Energy Conservation is the foundation of energy independence."</span></p></div></li>
</div>
<div id="ment"></div>
<h3 style="font-family:'Comic Sans MS', cursive;font-size:24px;color:#FB7D00;margin-left:44%;">MENTORS</h3>

<div class="main_mentors">
<div class="block">
<ul class="m_ul">
<li class="m_li">
<div class="m_img1">
  
</div>
</li>
<li class="m_li">
<div class="m_content"><p>Dr. P.S Bhatnagar</p>
<h6>Director,BKBIET</h6>
<span style="font-family:'Comic Sans MS', cursive;color:#A0A0A0;margin-top:-10%">A visionary having many publications and patent to his credit.He has recieved many scientific awards in scientific,technical and social Service.He has been Chairman in various international confrences across the globe.</span>
</div>
</li>

</div>
<div class="block1">
<ul class="m_ul">
<li class="m_li">
<div class="m_content1">
<p>Shridhar B Dandin</p>
<h6>Principal,Administration</h6>
<span style="font-family:'Comic Sans MS', cursive;color:#A0A0A0;margin-top:-10%">A dedicated teacher having a vast experience of 20 years.He has authored many books and research papers.He has visited many international laborartory and institutes as visiting faculty.</span>
</li>
<li class="m_li">
<div class="m_img2"></div></li>
</div>
<div class="block">
<ul class="m_ul">
<li class="m_li">
<div class="m_img3">
  
</div>
</li>
<li class="m_li">
<div class="m_content"><p>Dinesh Saini</p>
<h6 style="margin-left:-3%">Assistant Professor,BKBIET</h6>
<h5></h5>
</div>
</li>

</div>
<div class="block1">
<ul class="m_ul">
<li class="m_li">
<div class="m_content1">
<p>Navtej Singh Swaroop</p>
<h6>Alumni,B.K.BIET</h6>
<span style="font-family:'Comic Sans MS', cursive;color:#A0A0A0;margin-top:-10%">He is the founding Chairperson of the BEC ,having innovation and entrepreneurship at his core.He has recived various accreditiation and awards from natioanl and international organisation.He is currently working as Development Engineer in Schneider Electric,Bangalore.</span>
</li>
<li class="m_li">
<div class="m_img4"></div></li>
</div>




</div>





<div class="edi" style="margin-top:-18px;" >
<img src="188H.jpg" name="slide" height="800px" width="1366px"/>
<script> 

//variable that will increment through the images 
var num=0 
function RotateImages(){

document.images.slide.src=ImageArray[num].src

if (num<ImageArray.length-1) {num++} 
else {num=1} 
setTimeout("RotateImages()",2500) 
} 
RotateImages() 

</script>



</div>
<div id="tm" ></div>
<h3 style="font-family:'Times New Roman', Times, serif;font-size:28px;color:#FB7D00;margin-left:48%;"><b>TEAM</b></h3>
<div class="t_main1">
<ul class="t_ul">
<li class="t_li"> 
<div class="t_img1">
</div>
</li>
<li class="t_li">
<div class="t_con">
<p class="name">Ashutosh Verma</p>
<p class="designation">Chairperson</p>
<p class="mail">hani.verma110@gmail.com</p>
<p class="fon">+919057109501</p>
</div>
</li>
<li class="t_li">
<div class="t_conn">
<p class="name">Ishan Sharma</p>
<p class="designation">Vice-chair</p>
<p class="mail">ishansharma2303@gmail.com</p>
<p class="fon">+919680803759</p>
</div>
<li class="t_li"> 
<div class="t_img2">
</div>
</li>

</ul></div>
<ul class="t_ul1">
<li class="t_li1">
<div class="t_img3">
</div>

</li>
<li class="t_li1">
<div class="t_con1">
<p class="name">Chirag Gupta</p>
<p class="designation">Seceratary</p>
<p class="mail">cggupta26@gmail.com</p>
<p class="fon">+919694661634</p>
</div></li>
<li class="t_li1">
<div class="t_conn1">
<p class="name">Bavessh Raina</p>
<p class="designation">Technical Head</p>
<p class="mail">bavesshraina@yahoo.com</p>
<p class="fon">+918739952186</p>
</div>
</li>
<li class="t_li1">
<div class="t_img4">
</div>
</li>
</ul>






<ul class="t_ul1">
<li class="t_li1">
<div class="t_img5">
</div>

</li>
<li class="t_li1">
<div class="t_con1">
<p class="name">Kirti Sharma</p>
<p class="designation">Prog. Incharge</p>
<p class="mail">kirtisharma972@gmail.com</p>
<p class="fon"></p>
</div></li>
<li class="t_li1">
<div class="t_conn1">
<p class="name">Anmol Sharma</p>
<p class="designation">PR Head</p>
<p class="mail">anmolsharma1119@gmail.com</p>
<p class="fon"></p>
</div>
</li>
<li class="t_li1">
<div class="t_img6">
</div>
</li>
</ul>



<ul class="t_ul1">
<li class="t_li1">
<div class="t_img7">
</div>

</li>
<li class="t_li1">
<div class="t_con1">
<p class="name">Yagya Prakash</p>
<p class="designation">PR Head</p>
<p class="mail">prakashyagya@gmail.com</p>
<p class="fon">+918239819844</p>
</div></li>
<li class="t_li1">
<div class="t_conn1">
<p class="name">Hitesh Rohilla</p>
<p class="designation">Editorial Head</p>
<p class="mail">hiteshrohilla@outlook.com</p>
<p class="fon">+919413221221</p>
</div>
</li>
<li class="t_li1">
<div class="t_img8">
</div>
</li>
</ul>
</div>



<div class="t_bg">
</div>
<div class="nb">
<div class="nb_head">
<input type="text" name="notice" style="font-family:'Times New Roman', Times, serif;font-size:34px;color:#000;font-weight:300;margin-top:2%;margin-left:40%;width:260px;height:80px;border:solid;padding-left:3px" value="NOTICE BOARD"/>
<input type="text" name="notices" style="height:600px;width:80%;border:solid;margin-left:10%;background-color:#800;border-width:thick;" value="<?php 
echo "Will be updated Soon"; ?>"/>

</div>
</div>









<div class="footer" id="con">
<ul class="f_ul">
<li class="f_li">
<div class="sm">
<ul class="sm_ul">
<li class="sm_li">
<div class="fb">
<a href="https://www.facebook.com/pages/Bkbiet-Energy-CLUB/619718921454516"><img src="1440146460_Facebook.png"/></a></div>
<div class="tw">
<img src="1440146633_Rss_feeds.png"/></div>
<div class="lin"><img src="1440146693_Linkedin.png"/></div>
</li></ul>
</div>
<li class="f_li">
<div class="location">
<h2 style="color:#FFF;font-family:'Times New Roman', Times, serif; font-weight:300">Find Us</h2>
<a href="http://www.bkbiet.ac.in/"><img src="1440146765_location_placeholder_pin_map.png"/></a>


</div></li>
<li class="f_li">
<div class="head_copy">
<h2 style="color:#FB7D00;font-family:'Times New Roman', Times, serif;font-weight:300;color:#FFF">ENERGY CLUB</h2>
<h4 style="color:#FB7D00;font-weight:300"><a  id="head" href="#abt" class="scroll">About us</a></h4>
<h4 style="color:#FB7D00;font-weight:300"><a id="head" href="#ment" class="scroll">Mentors</a></h4>
<h4 style="color:#FB7D00;font-weight:300"><a id="head"href="#tm" class="scroll">Team</a></h4>
<h4 style="color:#FB7D00;font-weight:300"><a href="Members_list.php"class="jo" >Members</a></h4>
</div>
</li>
<li class="f_li">
<div class="join">
<h2 style="color:#FFF;font-family:'Times New Roman', Times, serif; font-weight:300">BE A MEMBER</h2>
<h4 style="color:#FB7D00;margin-left:10%;font-weight:300"><a href="Register.html" class="jo">Join Us</a></h4>
</div>

</li>

<li class="f_li">
<div class="info">
<p style="font-family:'Times New Roman', Times, serif;font-weight:50;font-size:15px;color:#FFF">&copy;2015&nbsp;Designed &amp;Developed by<a href="https://twitter.com/ashu_0909" style="text-decoration:none;color:#FFF"> Ashutosh Verma</a></p>
</div>
</li>


</ul>
</div>
<div class="avaii">
</div>

</body>
</html>