<?php @include('templates/header.php') ?>
			<section id="home" class="content group">
				<p><em>Howdy!</em> I'm a <strong>web developer in the Phoenix, Arizona area</strong>. I specialize in front-end web development, and I <strong>love</strong> <a href="http://wordpress.org/">Wordpress</a> as a <abbr title="Content Management System">CMS</abbr>.
				<p>I enjoy helping small and medium-sized businesses cultivate an incredible web presence, using leading-edge web development techniques. To find out more about me, hit the <a href="#about" class="aboutLink">About section</a>. If you want to see my work, check out my <a href="#portfolio" class="portfolioLink">portfolio</a>.
				<p class="p"><a href="#contact" class="contactLink">Contact me</a> if you'd like to talk about your project.</p>
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

					<img src="lib/img/portfolio1.jpg" alt="Portfolio 1">
					<img src="lib/img/portfolio1.jpg" alt="Portfolio 2">
					<img src="lib/img/portfolio1.jpg" alt="Portfolio 3">

			</section>
			
		</div><!-- end content -->
<?php @include('templates/footer.php') ?>