<?php
/**
 * The default template for the "roof"
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<ul class="menu simple roof-menu align-right">
	<li class="roof-padding"><a href="https://www.jhu.edu/admissions/visit/" target="_blank" rel="noopener">Visit</a></li>
	<li class="bar"></li>
	<li class="roof-padding"><a href="http://krieger.jhu.edu/magazine/" target="_blank" rel="noopener">A&S Magazine</a></li>
	<li><a class="button" href="#" aria-label="Explore KSAS" data-toggle="offCanvasTop1">Explore KSAS <span class="fas fa-bars" aria-hidden="true"></span></a></li>
</ul>

<div class="off-canvas position-top" id="offCanvasTop1" data-off-canvas aria-hidden="true">
	<div id="global-links" class="grid-x grid-padding-x small-up-2 medium-up-3 large-up-3">
	<h1 class="show-for-sr">Explore KSAS</h1>
		<div class="cell">
			<h2>Academics</h2>
			<ul class="vertical menu" role="menu">
				<li role="menuitem"><a href="http://krieger.jhu.edu/academics/departments-programs-and-centers/" onclick="ga('send', 'event', 'Offcanvas', 'Academics', 'Departments')">Departments, Programs, and Centers</a></li>
				<li role="menuitem"><a href="http://krieger.jhu.edu/people/faculty-directory/" onclick="ga('send', 'event', 'Offcanvas', 'Academics', 'Faculty')">Faculty Directory</a></li>
				<li role="menuitem"><a href="http://krieger.jhu.edu/academics/fields/" onclick="ga('send', 'event', 'Offcanvas', 'Academics', 'Fields of Study')">Fields of Study</a></li>
				<li role="menuitem"><a href="http://www.library.jhu.edu/" onclick="ga('send', 'event', 'Offcanvas', 'Academics', 'Libraries')">Libraries</a></li>
				<li role="menuitem"><a href="http://krieger.jhu.edu/academics/majors-minors/" onclick="ga('send', 'event', 'Offcanvas', 'Academics', 'Majors & Minors')">Majors & Minors</a></li>
			</ul>
		</div>
		<div class="cell">
			<h2>Student & Faculty Resources</h2>
			<ul class="vertical menu" role="menu">
				<li role="menuitem"><a href="https://sis.jhu.edu/sswf/" onclick="ga('send', 'event', 'Offcanvas', 'Resources', 'ISIS')">Course Listings & Registration</a></li>
				<li role="menuitem"><a href="https://www.jhu.edu/admissions/financial-aid/" onclick="ga('send', 'event', 'Offcanvas', 'Resources', 'Financial Aid')">Financial Aid</a></li>
				<li role="menuitem"><a href="https://hrnt.jhu.edu/" onclick="ga('send', 'event', 'Offcanvas', 'Resources', 'Human Resources')">Human Resources</a></li>
				<li role="menuitem"><a href="http://web.jhu.edu/registrar" onclick="ga('send', 'event', 'Offcanvas', 'Resources', 'Registrars')">Registrar's Office</a></li>
			</ul>
		</div>
		<div class="cell">
			<h2>Across Campus</h2>
			<ul class="vertical menu" role="menu">
				<li role="menuitem"><a href="https://www.jhu.edu/admissions/" onclick="ga('send', 'event', 'Offcanvas', 'Campus', 'Admissions')">Admissions Information</a></li>
				<li role="menuitem"><a href="https://www.jhu.edu/" onclick="ga('send', 'event', 'Offcanvas', 'Campus', 'JHU Home')">Johns Hopkins University Website</a></li>
				<li role="menuitem"><a href="https://www.jhu.edu/maps-directions/" onclick="ga('send', 'event', 'Offcanvas', 'Campus', 'Maps/Directions')">Maps & Directions</a></li>
				<li role="menuitem"><a href="https://my.jh.edu/portal/web/jhupub" onclick="ga('send', 'event', 'Offcanvas', 'Campus', 'myJHU')">myJHU</a></li>
				<li role="menuitem"><a href="http://hub.jhu.edu/" onclick="ga('send', 'event', 'Offcanvas', 'Campus', 'TheHub')">The Hub</a></li>
			</ul>
		</div>
		<button class="close-button" aria-label="Close menu" type="button" data-close>
		  <span aria-hidden="true">&times;</span>
		</button>			
	</div>
</div>