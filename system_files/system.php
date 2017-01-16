<?php
//----------HEADER----------//
function make_header()
{
	echo'
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chris Badalucco</title>
		<link rel="icon" href="/system_files/img/favicon.png" type="image/ico"/>
		<link rel="bookmark" href="system_files/img/favicon.png" type="image/ico"/>
		<link type="text/css" href="system_files/css/style1.css" rel="stylesheet"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript">
		</script>

		<script type="text/javascript">
		
		$(document).ready(function(){
				$(\'#bioDiv\').fadeIn(1700);
			});
		
		var foId=\'#bioDiv\';

	    function fadeMe(fIn){
		  var toFade = fIn;
		  
		  if(toFade != foId){
			
			$(foId).fadeOut(500);
			$(toFade).fadeIn(500);
			foId=toFade;
		  }
		  else {}
			  
		}
			
		var suId=\'#hide\';
		var Desc = \'Desc\';

			
		function slideMe(slideDown){
			var sdId = slideDown;
			if (sdId != suId){
			  var upDesc = suId+Desc;
			  if (upDesc == \'#hideDesc\'){
				  $(sdId).slideDown(400,function(){$(upDesc).fadeOut(375,function(){var downDesc = sdId+Desc; $(downDesc).fadeIn(375);});});
			  }
			  $(upDesc).fadeOut(375,function(){var downDesc = sdId+Desc;
			  $(downDesc).fadeIn(375);});
			  $(suId).slideUp(400, function(){$(sdId).slideDown(400);});
			  
			  
			  
			  
			  suId=sdId;
	  
			  }	
			  else{}
		}
		
		function mouseOver(value){
			var menuIMG = value;
		  
		  if (menuIMG == "bio") {document.bio.src ="system_files/img/bio2Hov.gif";}
		  else if (menuIMG == "resume") {document.resume.src ="system_files/img/resume2Hov.gif";}
		  else if (menuIMG == "portfolio") {document.portfolio.src ="system_files/img/portfolio2Hov.gif";}
		  else if (menuIMG == "linkedin") {document.linkedin.src ="system_files/img/linkedinHov.gif";}
		}
		  
		function mouseOut(value){
			var menuIMG = value;
			
		  if (menuIMG == "bio") {document.bio.src ="system_files/img/bio2.gif";}
		  else if (menuIMG == "resume") {document.resume.src ="system_files/img/resume2.gif";}
		  else if (menuIMG == "portfolio") {document.portfolio.src ="system_files/img/portfolio2.gif";}
		  else if (menuIMG == "linkedin") {document.linkedin.src ="system_files/img/linkedin.gif";}
		}
		
		</script>
	</head>

	<body>
		<div id="container">
			<div id="banner"><img src="system_files/img/banner2.gif" alt="banner"></div>
	';
}

//----------MINIMENU----------//
function make_minimenu()
{
	echo'
			<div class="minimenu">
				<div id="linkedin"><a href="http://www.linkedin.com/in/cbadalucco"><img name="linkedin" src="system_files/img/linkedin.gif" "onmouseover="mouseOver(\'linkedin\')" onMouseOut="mouseOut(\'linkedin\')"></a></div>
			</div>';
}

//----------MENU----------//
function make_menu()
{
	echo'
			<ul id="menu">
				<li><img id="bioIMG" name="bio" src="system_files/img/bio2.gif" onclick="fadeMe(\'#bioDiv\')" onmouseover="mouseOver(\'bio\')" onMouseOut="mouseOut(\'bio\')"></li>
				<li><img id="resumeIMG" name="resume" src="system_files/img/resume2.gif" onclick="fadeMe(\'#resumeDiv\')" onmouseover="mouseOver(\'resume\')" onMouseOut="mouseOut(\'resume\')"></li>
				<li><img id="portfolioIMG" name="portfolio" src="system_files/img/portfolio2.gif" onclick="fadeMe(\'#portfolioDiv\')" onmouseover="mouseOver(\'portfolio\')" onMouseOut="mouseOut(\'portfolio\')"></li>
			</ul>';
			
}

//----------FOOTER----------//
function make_footer()
{
	echo'
			<div class="footer">&copy; 2010 Chris Badalucco. All rights reserved.</div>
		</div>
		
		<!----------MENU IMAGES PRELOAD---------->
		<!----------MENU IMAGES PRELOAD---------->
		
		<img src="system_files/img/bio2Hov.gif" class="hiddenPic">
		<img src="system_files/img/resume2Hov.gif" class="hiddenPic">
		<img src="system_files/img/portfolio2Hov.gif" class="hiddenPic">
		<img src="system_files/img/linkedinHov.gif" class="hiddenPic">
		<!----------MENU IMAGES PRELOAD---------->
		<!----------MENU IMAGES PRELOAD---------->
	</body>
	</html>';
}
?>