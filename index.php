<!DOCTYPE html>

	<!--
	// designed & developed exclusively
	// in the browser, by matt chandler
	//
	// no photoshop here. just clean code.
	// http://mattchandleraz.com/clean-code
	-->	

<html>
	
	<head>

		<meta charset="utf-8">
		<title>mattchandleraz.com</title>
		<meta name="description" content="Phoenix-based web developer Matt Chandler. Specializing in front end web development and Wordpress as a CMS.">
		<meta name="author" content="Matt Chandler">
		<meta name="keywords" content="web developer, web development, web designer, phoenix, arizona, tempe, mesa, scottsdale">
		
		<!-- mobile specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="lib/css/style.css">
		
		<!-- html5 for older browsrers -->
		<!--[if lt IE 9]>
	        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	    <script src="lib/js/mcaz.js"></script>

	</head>

	<body>
		<div id="content">
			<header id="header" class="group">
				<nav>
					<ul>
						<li class="homeLink"><a href="#top">Home</a></li>
						<li class="aboutLink"><a href="#about">About</a></li>
						<li class="contactLink"><a href="#contact">Contact</a></li>
						<li class="portfolioLink"><a href="#portfolio">Portfolio</a></li>
					</ul>
				</nav>
				<hgroup>
					<h1 id="headline"><a href="index.php">mattchandleraz.com</a></h1>
					<h2 id="tagline"><strong>Front-End Web Developer &amp; UX Evangelist</strong></h2>
				</hgroup>
			</header>

			<section id="home" class="content group">
				<p><em>Howdy!</em> I'm a <strong>web developer in the Phoenix, Arizona area</strong>. I specialize in front-end web development, and I <strong>love</strong> <a href="http://wordpress.org/">Wordpress</a> as a <abbr title="Content Management System">CMS</abbr>.
				<p>I enjoy helping small and medium-sized businesses cultivate an incredible web presence, using leading-edge web development techniques. To find out more about me, hit the <a href="#about" class="aboutLink">About section</a>. If you want to see my work, check out my <a href="#portfolio" class="portfolioLink">portfolio</a>.
				<p class="h2 p"><a href="#contact" class="contactLink">Contact me</a> if you'd like to talk about your project.</p>
			</section>

			<section id="about" class="content group">
				<article>
					<h3>About</h3>
					<p>In case you missed it, my name's Matt. I'm a web developer primarily serving the Phoenix area, but have worked with clients from Idaho to New York. I tackle projects from email newsletter templates to database-driven CMS-powered websites for businesses. I'm the founder &amp; creator of <a href="#" id="meta">META</a>, an HTML5 mobile web app for vintage motorcycle enthusiasts.</p>
					<section id="recentClients">
						<h4 class="h6">Recent Clients</h4>
						<ul>
							<li>AZ Rattlers</li>
							<li>TannerNet Technologies</li>
							<li>Digital News Aggregation</li>
							<li>Prophecy Technologies</li>
							<li>Tuner Ready Motorsports</li>
							<li>Gilbert Daily PRSS</li>
							<li>Quest National</li>
						</ul>
					</section>
				</article>
				<aside>
					<h5>Curriculum Vitae</h5>
					<h6>Skills</h6>
					<ul>
						<li>HTML5</li>
						<li>CSS3</li>
						<li>Responsive Web Design</li>
						<li>PHP</li>
						<LI>MySQL</LI>
						<li>Javascript/jQuery</li>
						<li>Wordpress</li>
						<li>Adobe Photoshop and Illustrator</li>
					</ul>
				</aside>

			</section>

			<section id="contact" class="content group">
				
				<h3>Contact</h3>
				<p>I'm always interested in hearing from prospective clients, partners, or anyone else. Use the form to holler at me.</p>

				<form>
					
					<fieldset>
						<legend>Your Details</legend>
						<label for="name">Name</label><input id="name" type="text" placeholder="Name" required />
						<label for="email">Email Address</label><input id="email" type="text" placeholder="Email Address" required />
						<label for="phone">Phone Number</label><input id="phone" type="text" placeholder="Phone Number" />
					</fieldset>

					<fieldset>
						<legend>Your Message</legend>
						<input id="message" type="textarea" required />
					</fieldset>

				</form>

			</section>

			<section id="portfolio" class="content group">

				<h3>Portfolio</h3>

				<p>Some of my most recent work.</p>

					<img src="lib/img/portfolio1.jpg" alt="Portfolio 1">
					<img src="lib/img/portfolio1.jpg" alt="Portfolio 2">
					<img src="lib/img/portfolio1.jpg" alt="Portfolio 3">

			</section>

			<footer class="group">
				<a id="html5badge" href="http://www.w3.org/html/logo/">
					<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-device-semantics.png" width="100" alt="HTML5 Powered with CSS3 / Styling, Device Access, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, and Semantics">
					<h5>This site was hand-crafted in Phoenix, Arizona using the latest HTML5 and CSS3 techniques.</h5>
				</a>
			</footer>
			
		</div>
	</body>

</html>