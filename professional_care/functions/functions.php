<?



/***********************************************************************/
/*HEADER*/
/***********************************************************************/
function make_header($place)
{
	echo'
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
		"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		
		<head>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
			
			<title>Professional Care PT | ',$place,'</title>
			<link rel="icon" type="image/png" href="/favicon.png" />
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<script type="text/javascript" src="js/jquery.js"></script>
		    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
		    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
			
			<script type="text/javascript">
				$(function() {
					$(\'#gallery a\').lightBox();
				});
			</script>

		</head>
		<body>
			<div id="container">
				<div id="header">
				<a href="?loc=home"><img src="img/jpg/pc_banner.jpg" alt="banner" border="0"/></a>
				</div>
	';
}
/***********************************************************************/
/*MENU*/
/***********************************************************************/
function make_menu()
{
	$place = $_GET['loc'];
	echo'
	<div id = "menu">
		<div id = "menufloat">
		';
		if (($place == "home") || ($place == "" )){
			echo'<div class="menuitem">';
				?>
				<a href="?loc=home"><img id = "home" src="img/icons/gif/home3-38px.gif" alt="HOME"
				onmouseover="document.getElementById('home').setAttribute('src', 'img/icons/gif/home2-38px.gif')"
                onmouseout="document.getElementById('home').setAttribute('src', 'img/icons/gif/home3-38px.gif')"/></a>
              	<?
			 	 echo'</div>';
		}
		else {
			echo'<div class="menuitem">';
				?>
				<a href="?loc=home"><img id = "home" src="img/icons/gif/home1-38px.gif" alt="home"
				onmouseover="document.getElementById('home').setAttribute('src', 'img/icons/gif/home2-38px.gif')"
                onmouseout="document.getElementById('home').setAttribute('src', 'img/icons/gif/home1-38px.gif')"/></a>
				<?
			echo'</div>';
		}
		
		if (($place == "directions")){
			echo'<div class="menuitem">';
			?>
				<a href="?loc=directions"><img id = "direct" src="img/icons/gif/directions3-38px.gif" alt="DIRECTIONS"
				onmouseover="document.getElementById('direct').setAttribute('src', 'img/icons/gif/directions2-38px.gif')"
				onmouseout="document.getElementById('direct').setAttribute('src', 'img/icons/gif/directions3-38px.gif')"/></a>
				
			<?
			echo'</div>';
		}
		else {
			echo'<div class="menuitem">';
			?>
				<a href="?loc=directions"><img id = "direct" src="img/icons/gif/directions1-38px.gif" alt="directions"
				onmouseover="document.getElementById('direct').setAttribute('src', 'img/icons/gif/directions2-38px.gif')"
				onmouseout="document.getElementById('direct').setAttribute('src', 'img/icons/gif/directions1-38px.gif')"/></a>
		
			<?
			echo'</div>';
		}
		
		if (($place == "staff")){
			echo'<div class="menuitem">';
			?>
				<a href="?loc=staff"><img id = "staff" src="img/icons/gif/staff3-38px.gif" alt="STAFF"
                onmouseover="document.getElementById('staff').setAttribute('src', 'img/icons/gif/staff2-38px.gif')"
                onmouseout="document.getElementById('staff').setAttribute('src', 'img/icons/gif/staff3-38px.gif')"/></a>
                
            <?
			echo'</div>';
		}
		else {
			echo'<div class="menuitem">';
			?>
				<a href="?loc=staff"><img id = "staff" src="img/icons/gif/staff1-38px.gif" alt="staff"
                onmouseover="document.getElementById('staff').setAttribute('src', 'img/icons/gif/staff2-38px.gif')"
                onmouseout="document.getElementById('staff').setAttribute('src', 'img/icons/gif/staff1-38px.gif')"/></a>
                
            <?
			echo'</div>';
		}
		if (($place == "images")){
			echo'<div class="menuitem">';
			?>
				<a href="?loc=images"><img id = "images" src="img/icons/gif/images3-38px.gif" alt="IMAGES"
                onmouseover="document.getElementById('images').setAttribute('src', 'img/icons/gif/images2-38px.gif')"
                onmouseout="document.getElementById('images').setAttribute('src', 'img/icons/gif/images3-38px.gif')"/></a>
                
            <?
			echo'</div>';
		}
		else {
			echo'<div class="menuitem">';
			?>
				<a href="?loc=images"><img id = "images" src="img/icons/gif/images1-38px.gif" alt="images"
                onmouseover="document.getElementById('images').setAttribute('src', 'img/icons/gif/images2-38px.gif')"
                onmouseout="document.getElementById('images').setAttribute('src', 'img/icons/gif/images1-38px.gif')"/></a>
                
            <?
			echo'</div>';
		}
		echo'</div></div>';
}
	

/***********************************************************************/
/*FOOTER*/
/***********************************************************************/
function make_footer()
{
			echo'<div id = "footer">
					&copy; 2010 Professional Care Physical Therapy
			</div>
		</div>
		<!----------MENU IMAGES PRELOAD---------->
		<!----------MENU IMAGES PRELOAD---------->
		
		<img src="img/icons/gif/directions1-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/directions2-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/directions3-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/forms1-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/forms2-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/forms3-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/images1-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/images2-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/images3-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/home1-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/home2-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/home3-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/staff1-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/staff2-38px.gif" class="hiddenPic">
		<img src="img/icons/gif/staff3-38px.gif" class="hiddenPic">
		
		<!----------MENU IMAGES PRELOAD---------->
		<!----------MENU IMAGES PRELOAD---------->
	</body>
</html>';
}


/***********************************************************************/
/*SIDE PANEL*/
/***********************************************************************/
function make_sidepanel()
{
	echo'<div id = "sidepanel">
			<a href="?loc=images"><img src="img/office/sm/smIMG_5192.jpg" alt="Front Door" /></a>
			<a href="?loc=images"><img src="img/office/sm/smDSC_0177.jpg" alt="Equipment1"/></a>
			<a href="?loc=images"><img src="img/office/sm/smIMG_5198.jpg" alt="Equipment2"/></a>
		</div>';
}

?>