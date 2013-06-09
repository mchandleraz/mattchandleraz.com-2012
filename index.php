<?php @include('templates/header.php') ?>
		<div id="main">
			<section id="home" class="content group">
				<p><em>Howdy!</em> I'm a <strong>web developer in the Phoenix, Arizona area</strong>. I specialize in front-end web development, and I <strong>love</strong> <a href="http://wordpress.org/">Wordpress</a> as a <abbr title="Content Management System">CMS</abbr>.
				<p>I enjoy helping small and medium-sized businesses cultivate an incredible web presence, using leading-edge web development techniques. To find out more about me, hit the <a href="#about" class="aboutLink">About section</a>. If you want to see my work, check out my <a href="#portfolio" class="portfolioLink">portfolio</a>.
				<p class="p"><a href="#contact" class="contactLink">Contact me</a> if you'd like to talk about your project.</p>
			</section>

			<div id="preloader">
				<img class="preload" src="lib/img/portfolio/prophecy_lg.jpg" alt="">
				<img class="preload" src="lib/img/portfolio/ksport_lg.jpg" alt="">
				<img class="preload" src="lib/img/portfolio/gilbert-news-blog_lg.jpg" alt="">
				<img class="preload" src="lib/img/portfolio/rattlers_lg.jpg" alt="">
			</div>

			<section id="about" class="content group">
				<article>
					<h3>About</h3>
					<p>In case you missed it, my name's Matt. I'm a web developer primarily serving the Phoenix area, but have worked with clients from Idaho to New York. I tackle projects from email newsletter templates to database-driven CMS-powered websites for businesses. I'm the founder &amp; creator of <a href="#" id="meta">META</a>, an HTML5 mobile web app for vintage motorcycle enthusiasts.</p>
					<p>My Github profile: <a href="https://github.com/mchandleraz">https://github.com/mchandleraz</a><br>My tweets: <a href="https://twitter.com/mchandleraz">https://twitter.com/mchandleraz</a></p>
					<section id="recentClients">
						<h4 class="h6">Recent Clients</h4>
						<ul>
							<li><a href="http://rtlrs.mattchandleraz.com">AZ Rattlers</a></li>
							<li><a href="http://tannernet.com/">TannerNet Technologies</a></li>
							<li><a href="http://dnaprss.com/">Digital News Aggregation</a></li>
							<li><a href="http://prophecy.mattchandleraz.com/">Prophecy Technologies</a></li>
							<li>Tuner Ready Motorsports</li>
							<li><a href="http://gilbert-news.dailyprss.com/">Gilbert Daily PRSS</a></li>
							<li><a href="http://questltc.com/">Quest National</a></li>
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
						<li>Git</li>
						<li>PHP</li>
						<LI>MySQL</LI>
						<li>Javascript &amp; jQuery</li>
						<li>WordPress</li>
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

				<div class="group portfolio-item">
					<a class="close">[ X ] Close</a>
					<img src="lib/img/portfolio/rattlers.jpg" alt="Arizona Rattlers WordPress-powered HTML5 website">
					<aside>
						<h1>Arizona Rattlers</h1>
						<ul class="tags group">
							<li>WordPress</li>
							<li>PHP</li>
							<li>HTML5</li>
							<li>jQuery</li>
							<li>CSS3</li>
							<li>Responsive Web Design</li>
						</ul>
						<p>The Arizona Rattlers needed a new web presence for the 2013 season, and had specific functionality goals in mind. We worked together to achieve the functionality, refresh the look, and incorporate the Rattlers 2013 season branding strategy into their online efforts.</p>
						<p><a href="http://rtlrs.mattchandleraz.com/">Visit Website</a></p>
					</aside>
				</div>

				<div class="group portfolio-item">
					<a class="close">[ X ] Close</a>
					<img src="lib/img/portfolio/gilbert-news-blog.jpg" alt="Gilbert Daily PRSS CMS website">
					<aside>
						<h1>Gilbert Daily News</h1>
						<ul class="tags group">
							<li>Theme Modification</li>
							<li>WordPress</li>
							<li>jQuery</li>
							<li>Responsive Web Design</li>
						</ul>
						<p>DiscoverMINE needed some help customizing and tweaking a WordPress theme they were using for the Gilbert Daily PRSS blog. I modified the theme to suit their needs, as well as improved usability on smaller devices.</p>
						<p><a href="http://gilbert-news-blog.dailyprss.com">Visit Website</a></p>
					</aside>
				</div>

				<div class="group portfolio-item">
					<a class="close">[ X ] Close</a>
					<img src="lib/img/portfolio/ksport.jpg" alt="Ksport WordPress website">
					<aside>
						<h1>Ksport USA</h1>
						<ul class="tags group">
							<li>WordPress</li>
							<li>e-commerce</li>
							<li>Javascript</li>
							<li>PHP</li>
						</ul>
						<p>Ksport was looking for an updated look and lots of new functionality from their website. Through knowledge of their target demographic, I was able to deliver a feature-rich website that was more aligned with the brand, and gave Ksport staff the tools needed to succesfully maintain their website.</p>
						<p><a href="http://ksportusa.com/">Visit website</a></p>
					</aside>
				</div>

				<div class="group portfolio-item">
					<a class="close">[ X ] Close</a>
					<img src="lib/img/portfolio/prophecy.jpg" alt="Prophecy Technologies website">
					<aside>
						<h1>Prophecy Technologies</h1>
						<ul class="tags group">
							<li>WordPress</li>
							<li>CSS3</li>
							<li>HTML5</li>
							<li>Responsive Web Design</li>
						</ul>
						<p>Prophecy Technologies is an IT service startup in Gilbert.</p>
					</aside>
				</div>

			</section>
		</div> <!-- end main -->
		</div><!-- end content -->
<?php @include('templates/footer.php') ?>