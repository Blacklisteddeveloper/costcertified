<?php
/**
 * Template Name: Contractors Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package costcertified
 */
get_header(); ?>
<section class="contractors">
	<section class="banner">
		<div class="heading">
			<h3>Land the contract with real-time, accurate quotes in minutes.</h3>
			<h2>Then, find subcontractors to get the job done.</h2>
			<div class="banner-img"><?php inline_svg('contractors');?></div>
			<a href="#" class="button">BOOK A DEMO</a>
		</div>
	</section>
	<section class="marketplace">
		<div class="heading">
			<h3>Give quotes & get estimates. Win contracts & source trades.</h3>
			<h2>All in one marketplace</h2>
			<ul>
				<li>
					<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_1.svg" /></div>
					<h3>Highly Accurate<br/>Quotes In Minutes</h3>
					<p>Predict Working Relationships With Customers, Contractors And Subcontractors.</p>
				</li>
				<li>
					<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_2.svg" /></div>
					<h3>Rate<br/>Everyone</h3>
					<p>Predict Working Relationships With Customers, Contractors And Subcontractors.</p>
				</li>
				<li>
					<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_3.svg" /></div>
					<h3>Market<br/>Place</h3>
					<p>Predict Working Relationships With Customers, Contractors And Subcontractors.</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="quote_engine">
		<div class="heading">
			<h3>Scale your business faster & gain more trust:</h3>
			<h2>The H-A-R-T™ quote engine</h2>
		</div>
	</section>
	<section class="job_done">
		<div class="heading">
			<h3>Get the job done right.</h3>
			<h2>See what CostCertified can do for your project</h2>
		</div>
		<ul class="list">
			<li>
				<div class="content">
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_11.svg" title="" /></div>
					<div class="head">Real-time, Accurate Quotes</div>
					<p>Our dashboard is clean and simple allowing you to see stats at a glance or get where you <br/>need to go fast.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_12.svg" title="" /></div>
					<div class="head">Access To National Cost Database</div>
					<p>We have an entire cost database that you get access to and integrates with our unique quoting engine. You can even customize the costs on the go if you wish.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_13.svg" title="" /></div>
					<div class="head">Intuitive Interface</div>
					<p>You can even add pictures to your quotes or any file type. We provide a file management system integrated with the quoting engine.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/svg/icon_14.svg" title="" /></div>
					<div class="head">Save Time and Money</div>
					<p>With a click of a button youcan link<br/> floor areas making it super fast to create<br/> a quote.</p>
				</div>	
			</li>
		</ul>
	</section>
	<section class="calltoaction">
		<div class="container">
			<div class="title">
				<div class="small">FIND</div>
				<div class="big">WORK</div>
				<div class="big right">FASTER</div>
			</div>
			<div class="right_box">
				<span>Get Paid for a Job Done Right.</span>
				<a href="#" class="button">GET COSTCERTIFIED</a>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/testimonial' ); ?>
	<section class="star_company">
		<div class="heading">
			<h3>See what our partners think..</h3>
			<h2>Highly recommended</h2>
		</div>
		<div class="star_box">
			<ul>
				<li><img src="<?php bloginfo('template_url'); ?>/assets/image/logo1.png" title="" /></li>
				<li><img src="<?php bloginfo('template_url'); ?>/assets/image/logo2.png" title="" /></li>
				<li><img src="<?php bloginfo('template_url'); ?>/assets/image/logo3.png" title="" /></li>
			</ul>
		</div>
	</section>
</section>
<?php get_footer(); 
