<?php
include ("functions/functions.php");

$location = $_GET['loc'];

if (($location == "home") || ($location =="")) 	{ 

	make_header("Home");
	make_menu();

	echo'
	<div id = "maincontent">
		<h2>Welcome to Professional Care Physical Therapy</h2>
		
			<p>Where patients benefit from an owner-operated, state of the art Physical Therapy facility utilizing the latest hands-on manual therapy techniques in a caring and comfortable environment.<br /><br />
			Owners are George Ciresi, D.P.T. and James Blair, P.T.</p>

			<div id = "contactInfo">
				<div id = "addr">
					<p>285 Sills Road, Building 10, Suite D<br />
					East Patchogue, NY 11772</p>
				</div>
				
				<div id = "phone">
					<p>Phone: 631-775-0971<br />
					Fax: 631-475-0975</p>
				</div>
			</div>
	</div>
	';
	make_sidepanel();
	make_footer();		
}

else if ($location == "directions"){

	make_header("Directions");
	make_menu();

	echo'
	<div id = "maincontent">

	<div id = "gmaps"><iframe width="600" height="330" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;client=firefox-a&amp;ie=UTF8&amp;q=285+sills+road+east+patchogue+11772+professional+care+pt&amp;fb=1&amp;gl=us&amp;hq=professional+care+pt&amp;hnear=285+sills+road+east+patchogue+11772&amp;cid=0,0,9458497343974734722&amp;ei=JPtfS5T0F5aINe3ruNcD&amp;ved=0CAgQnwIwAA&amp;ll=40.780574,-72.972951&amp;spn=0.045495,0.072956&amp;z=13&amp;output=embed"></iframe><br /><a href="http://maps.google.com/maps?hl=en&client=firefox-a&ie=UTF8&q=285+sills+road+east+patchogue+11772+professional+care+pt&fb=1&gl=us&hq=professional+care+pt&hnear=285+sills+road+east+patchogue+11772&view=map&f=d&daddr=285+Sills+Road,+East+Patchogue,+Suffolk,+NY+11772&geocode=CTH-JiOirtu-FV5BbgId_H-m-w&ved=0CBMQ_wY&sa=X&ei=1vxfS7KsJo_wMrWOgboJ">Click Here to get directions from Google Maps</a></div>

	

	</div>
	';
	make_sidepanel();
	make_footer();		
}

else if ($location == "staff"){

	make_header("Staff");
	make_menu();

	echo'
	<div id = "maincontent">
		<h3>Staff</h3>	
		<div class="bio" style="margin:5px 0px 10px 40px;"> <img src="img/employees/George2.jpg" alt="George Ciresi" /><p> - George Ciresi, D.P.T: Co-Owner of Professional Care PT</p>
		</div>

		<div class="bio"style="margin-left:40px;"> <img src="img/employees/Jim2.jpg" alt="James J. Blair" /><p> - James J. Blair, P.T: Co-Owner of Professional Care PT</p>
		</div>
	</div>
	';
	make_sidepanel();
	make_footer();		
}

else if ($location == "images"){

	make_header("Images");
	make_menu();
	$gallery = $_GET['gallery'];
	if ($gallery == 0 || $gallery ==""){
	echo'
	<div id = "maincontent">
		<h3>Click the Images for Full Size</h3>	
		<div id= "gallery">
		<ul>';
			if ($handle = opendir('img/office/sm/')) 
 
			while (false !== ($file = readdir($handle))) 
			{
				if ($file != ".." && $file != "."){
					$fsub = substr_replace($file,'',0,2);
				echo "<li><a href='/img/office/$fsub'><img src=img/office/sm/$file></a></li>";
			}}
			closedir();
	}
	//if ($gallery == 1){
//	<a href="?loc=status&amp;gallery=0">Click to go back to Images</a>
			
			
	echo '</ul>
	</div>
	</div>
	';
	make_sidepanel();
	make_footer();		
}
?>