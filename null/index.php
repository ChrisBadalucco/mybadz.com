<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      	<link rel="stylesheet" href="css/main.css" type="text/css" />
  	  	<link rel="stylesheet" href="css/jquery.autocomplete.css" type="text/css" />
  <script type="text/javascript" src="jquery-autocomplete/lib/jquery-1.4.2.min.js"></script>  
  <script type="text/javascript" src="jquery-autocomplete/lib/jquery.bgiframe.min.js"></script>
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.dimensions.js"></script>
  <script type="text/javascript" src="jquery-autocomplete/jquery.autocomplete.js"></script>
  <script type="text/javascript" src="jquery.imageLoader.1.2.js"></script>  




  <script src="popup.js" type="text/javascript"></script>
  <script src="functions.js" type="text/javascript"></script>
  <script src="loadpic.js" type="text/javascript"></script>
  
	<title>Multimedia Project</title>
</head>

<script type="text/javascript">

$(document).ready(function(){	
	$('#search').hide();
	$('#major').hide();
	$("#slideShow").imageLoader({
   images: [{ src: 'img/premed.jpg' }
      ,{ src: 'img/prelaw.jpg' }
      ,{ src: 'img/cjustice.jpg' }
      ,{ src: 'img/business.jpg' }
	  ,{ src: 'img/vet.jpg' }
	  ,{ src: 'img/ninja.jpg' }
	  ,{ src: 'img/creativearts.jpg' }
	  ,{ src: 'img/communications.jpg' }
	  ,{ src: 'img/physicaltherapy.jpg' }
	  ,{ src: 'img/pharmacy.jpg' }]
   });
});


$(document).ready(function(){

$("#example").autocomplete(arr);
});
  
</script>





<body>
	<div id = "container">
		<div id = "header">
       		<h1><img id = "img_header" src="img/png/header.png" alt="image" /></h1>
        </div>
    	<div id ="search">   
            <form name="form">
            <input id="example" onkeypress="onEnter(event)" name="search" value="<? $_POST['search']?>" disabled/><br />
            <img id = "searchbutton" name = "searchbutton" onClick="checkSearch()" src="css/images/search_button.png" onmouseup="this.src='css/images/search_button_over.png'" onmousedown="this.src='css/images/search_button_down.png'"  onmouseout="this.src='css/images/search_button.png'" onmouseover="this.src='css/images/search_button_over.png'"/>
            </form>
        </div>
    	<div id="slideShowContainer">
       		<div id="slideShow">
            </div>
   		</div>
   		<div id= "major"> 
        	<img id = "img_dis" src="img/ninja.jpg" alt="image" /> 
        </div>
	</div>
</body>
</html>
