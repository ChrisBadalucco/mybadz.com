<?php
include ("system_files/system.php");


	make_header();
	make_minimenu();
	make_menu();

	echo'
	<div id = "maincontent">
		<div id="bioDiv" style="clear:both; display:none; position:absolute;">
			<img src="system_files/img/me.jpg" alt="Pic of ME" />
            <h3>
			Christopher Badalucco<br /><br />
			Siena College Graduate 2010<br />
			B.S. Computer Science <br />
			Minor in Business<br />
			</h3>
            
			<p>Over the course of my education, I became intrigued with web design and web development.  I believe one of the reasons I became so interested was because the majority of my college projects were web based.  I also believe I find web design and web development so stimulating because of the way you can integrate multiple languages and scripts within one another. I  enjoy the visual aspect of web design.  Aside from this, I am gratified when I can view my work in progress after I upload a finished piece of code.  My most difficult, yet most fulfilling project, was the Saintbook project which can be seen in my Portfolio section ( <span id="portLink" style="text-decoration: underline; color:#33C;" onclick="fadeMe(\'#portfolioDiv\')">link</span> ).</p>
			<p>Some of the courses I have taken at Siena College that helped develop my passion for web design are: Object Oriented Programming in Java; Oracle databases; Software Engineering; and Web Design. Besides web design, I am interested in the application security area and mobile development for the iPhone and/or Android Operating System.</p>
			
			<p>I am looking for a full time position in one of these fields; however I am open to other options if they are available.   I am extremely self-motivated and I have learned the importance of working as a team to achieve meaningful goals.  If you have any questions or opportunities, please contact me at your earliest convenience.</p>
			<p>- Chris Badalucco
			</p>
		</div>
			
		<div id="resumeDiv" style="clear:both; display:none; position:absolute;">
			<a href="system_files/docs/christopher badalucco resume-new.pdf" target="_blank">Click here to download my Resume (.PDF)</a>
			<br />
			<hr />
			<h3>EDUCATION</h3> 
			<dl>
				<dt><strong>Siena College, Loudonville, NY. </strong></dt>
				<dd>Bachelor of Science Degree in Computer Science with a Business Minor, (May 2010)
					<ul>
						<li>3.07 GPA in Computer Science</li>
						<li><a href="http://www.siena.edu/uploadedfiles/home/8-25-10-Deans%20List%20Spring%202010.pdf" target="_blank">Dean\'s List Spring Semester 2010</a></li>
					</ul>
				</dd>
				<dt><strong>Nassau Community College, Garden City, NY.</strong></dt>
				<dd>Associate of Science Degree in Liberal Arts and Sciences, (May 2007)
					<ul>
						<li>3.89 Overall GPA</li>
						<li>Graduated Magna Cum Laude</li>
					</ul>
				</dd>
			</dl>
			<h3>EXPERIENCE</h3>
			<dl>
			<dt><strong>Coming Soon!</strong></dt>
				<dd>This part of my page is still being worked on.  For the time being please reference my resume in .PDF form (available above) and my live projects available through the Portfolio section. 
				</dd>
			</dl>
		</div>
			
		<div id="portfolioDiv" style="clear:both; display:none; position:absolute;">
			<div id="portMenu">
				<span id="portDescLink" style="color:#33C;" onmouseover="this.style.textDecoration=\'underline\'" 
				onmouseout="this.style.textDecoration=\'none\'" onclick="slideMe(\'#hide\')">Portfolio Home</span>
	
				<span id="digevolLink" style="color:#33C;" onmouseover="this.style.textDecoration=\'underline\'"
				onmouseout="this.style.textDecoration=\'none\'" onclick="slideMe(\'#digevol\')">Digital Evolutions Team Website</span>
				
				<span id="saintbookLink" style="color:#33C;" onmouseover="this.style.textDecoration=\'underline\'"
				onmouseout="this.style.textDecoration=\'none\'" onclick="slideMe(\'#saintbook\')">SaintBook</span>
				
				<span id="pcptLink" style="color:#33C;" onmouseover="this.style.textDecoration=\'underline\'"
				onmouseout="this.style.textDecoration=\'none\'" onclick="slideMe(\'#pcpt\')">Professional Care PT</span>
				
				<span id="mumdLink" style="color:#33C;" onmouseover="this.style.textDecoration=\'underline\'" onmouseout="this.style.textDecoration=\'none\'"
				onclick="slideMe(\'#mumd\')">Multimedia Team Project</span>
			</div>
			
			<div id="hide" style="display:none;"></div>
			<div id="hideDesc">
				<p>The Portfolio tab links you to projects on which I have worked that are still live on the web today. Some projects were team-based while others were independent.  Each link provides a preview image that links to the live site as well as a more detailed description specific to that project set beneath the image.  Please email me if you have any questions regarding my work.
				<br /><br />
				If you have any questions regarding my work feel free to email me.</p>
			</div>
			
			<div id="portContainer">
			<div id="digevol" style="position:absolute;">
			<a href="http://oraserv.cs.siena.edu/~perm_digevol" target="_blank"><img style="width:550px; height:auto;" src="system_files/img/port/550/digevol.gif" alt="Digital Evolutions Team Website"/></a>
			</div><br />
			<div id="digevolDesc" style="display:none; margin-top:455px; margin-left:15px;">Digital Evolutions was the name of my Software Engineering team at Siena College.  We experienced the full software life-cycle starting with analysis of requirements, all the way through development and testing.  Our final project was SaintBook.   <br /><strong>Highlights - </strong>team site written in PHP, HTML, CSS, and a menu that utlizies JavaScript.  The website was co-developed by a teammate and myself.
			</div>
			
			<div id="saintbook" style="position:absolute;">
			<a href="http://sb.sienacs.com" target="_blank"><img style="width:550px; height:auto;" src="system_files/img/port/550/saintbook.gif" alt="SaintBook"/></a>
			</div><br />
			<div id="saintbookDesc" style="display:none; margin-top:400px; margin-left:15px;">Saintbook was my Software Engineering team\'s final project. Full documentation regarding the analysis of requirements, prototyping, development, testing, and the final source-code is available from the Digital Evolutions website.  <br /><strong>Highlights - </strong>developed using Object Oriented programming in PHP, HTML, CSS, a MySQL database fully designed and implemented by our team, parameterized queries used to prevent SQL injection, and the use of an open source utility to allow dynamic dragging and dropping of content while saving the state of content using AJAX (as seen in the preview image above).</div>
			
			<div id="pcpt" style="position:absolute;">
			<a href="http://professionalcarept.com" target="_blank"><img style="width:550px; height:auto;" src="system_files/img/port/550/pcpt.gif" alt="Professional Care PT"/></a>
			</div><br />
			<div id="pcptDesc" style="display:none; margin-top:370px; margin-left:15px;">Professional Care Physical Therapy is a new PT practice on Long Island that approached me about designing and developing a site.  Initial discussions of the site began while I was still at Siena College but after I graduated I developed the site and it is now live on their host.  <br /><strong>Highlights - </strong> the site was developed using PHP, HTML, CSS, JavaScript and a third-party gallery application based in the jQuery framework.</div>
			
			<div id="mumd" style="position:absolute;">
			<a href="http://null.sienacs.com" target="_blank"><img style="width:550px; height:auto;" src="system_files/img/port/550/mumd.gif" alt="Multimedia Team Project"/></a>
			</div><br />
			<div id="mumdDesc" style="display:none; margin-top:418px;">The Multimedia team project was an attempt to design an interactive tool for prospective students of Siena College.  <br /><strong>Highlights - </strong> developed using PHP, HTML, CSS, and the jQuery framework.  The site was designed to be modular (engaging as a stand-alone webpage, or be able to embed into an existing webpage).  This was a team project where I specifically learned parts of jQuery and implemented the fade effects.</div>
		</div>	
		</div>
	</div>
	';
	make_footer();		
?>