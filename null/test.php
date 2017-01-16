<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <script type="text/javascript" src="jquery-autocomplete/lib/jquery-1.4.2.min.js"></script>  
  <script type="text/javascript" src="jquery-autocomplete/lib/jquery.bgiframe.min.js"></script>
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.dimensions.js"></script>
  <script type="text/javascript" src="jquery-autocomplete/jquery.autocomplete.js"></script>
  <script type="text/javascript" src="jquery.imageLoader.1.2.js"></script>  
  <script>

	$(document).ready(function(){	
	
	$("#slideShow").imageLoader({
	   images: [{ src: 'img/premed.jpg' }
		  ,{ src: 'img/prelaw.jpg' }
		  ,{ src: 'img/cjustice.jpg' }
		  ,{ src: 'img/business.jpg' }]
	   }, function(){
		  $('#slideShow').cycle({
			 fx: 'fade',
			 speed: 1000,
			 timeout: 3000,
			 random:  0
		  });
	   });
	});

</script>
</head>

<body>

<div id="slideShowContainer">
			<div id="slideShow">

			</div>
		</div>

</body>
</html>
