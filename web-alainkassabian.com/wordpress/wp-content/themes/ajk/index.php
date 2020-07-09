<?php get_header(); ?>

	<div class="bg-ajk-dark">	
		<div class="container content-main">
			<div class="row row-bio">						
				<div class="col-6 d-flex bio_pic_col">
					<img class="display_pic" src="<?php echo get_template_directory_uri(); ?>/images/display_pic.jpg" width="250px" height="250px">
				</div>
				<div class="col-6">
					<p>Hello! My name is Alain.</p>
					<p>I am a Mississauga based web developer.</p>
					<p>I grew up in Whitby, Ontario. I'm an autodidactic polymath (self taught on broad range of topics) that gravitates towards technology, art, health, and social systems. I began developing websites professionaly near the end of 2018.</p>
				</div>
			</div>
		</div>

	
		<div class="container">
			<ul class="row row-topics">
				<li class="col-6 d-flex justify-content-center flex-wrap">
					<a href="#" class="topics-container">						
						<img src="<?php echo get_template_directory_uri(); ?>/images/web-resume.svg">						
						<div class="topics-overlay text-center d-flex flex-column justify-content-center">
							<span>View Resume</span>
						</div>
					</a>
					<p>Web</p>
				</li>
				<li class="col-6 d-flex justify-content-center flex-wrap">
					<a href="#" class="topics-container">						
						<img src="<?php echo get_template_directory_uri(); ?>/images/tech.svg">						
						<div class="topics-overlay text-center d-flex flex-column justify-content-center">
							<span>View Blog</span>
						</div>
					</a>
					<p>Technology</p>
				</li>
				<li class="col-3"></li>
				<li class="col-6 d-flex justify-content-center flex-wrap">
					<a href="#" class="topics-container">						
						<img src="<?php echo get_template_directory_uri(); ?>/images/health.svg">						
						<div class="topics-overlay text-center d-flex flex-column justify-content-center">
							<span>View Blog</span>
						</div>
					</a>
					<p>Health</p>
				</li>
				<li class="col-3"></li>
			</ul>
		</div>
	</div>

	<div class="bg-ajk-primary">
		<div class="container">
			<div class="row row-cta">
				<div class="col">
					<p class="text-center">
						Need help on a project?
					<br>
					<a href="#" class="ajk-button" style=>Free Consultation</a>
				</div>
			</div>
		</div>
	</div>


		


	<?php get_footer();