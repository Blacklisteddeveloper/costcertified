<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package costcertified
 */
get_header(); ?>

<section class="homepage">
	<section class="banner">
		<div class="heading">
			<h3>You’ve got a project to complete, on time & within budget.</h3>
			<h2>There’s a better way.</h2>
			<a href="#" class="videobtn"><i></i><span>WATCH & LEARN HOW</span></a>
		</div>
		<div class="banner-txt left">
			<div class="text">
				<div class="title">It’s the only<br/>way to hire a <br/>trusted contractor</div>
				<p>Get accurate quotes for time & materials like never before</p>
				<p><strong>Finally, you can trust the quote you’re given.</strong></p>
				<a href="#" class="gradientbtn">I’M A CUSTOMER</a>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/assets/image/girl_img.png" title="" />
		</div>
		<div class="banner-txt right">
			<div class="text">
				<div class="title">The best way for<br/>contractors to quote,<br/>sell and get paid.</div>
				<p>Create real-time<br/>accurate quotes in<br/>just minutes</p>
				<p><strong>Win more jobs & easily<br/>scale your business with<br/>seamless technology</strong></p>
				<a href="#" class="gradientbtn">I’M A CONTRACTOR</a>
				<a href="#" class="borderbtn">I’M A SUBCONTRACTOR</a>
				<a href="#" class="largebtn">BOOK A DEMO</a>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/assets/image/boy_img.png" title="" />
		</div>
	</section>
	<section class="services">
		<div class="heading">
			<h3>One simple, powerful platform,</h3>
			<h2>Intuitive by design.</h2>
		</div>
		<ul class="list">
			<li>
				<div class="content">
					<div class="head">Make more money</div>
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/img1.png" title="" /></div>
					<p>See how our contractors reduce estimating time by 78% and made more money by knowing their costs, in real-time.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="head">One seamless process</div>
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/img2.png" title="" /></div>
					<p>Eliminate emails, paper files, change orders, invoices, work orders, accounting entries, in one seamless, automated process. Stop doing admin work, start being a contractor.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="head">Payment guarrantee</div>
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/img3.png" title="" /></div>
					<p>CostCertified ensures you get paid fast for the work you do. A trusted process, automatic financing, and consumer transparency will win you more bids and amaze your clients.</p>
				</div>
			</li>
			<li>
				<div class="content">
					<div class="head">Access the right person for the job</div>
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/img4.png" title="" /></div>
					<p>Use our marketplace to find qualified trades to bid on your project. CostCertified makes this a breeze so that you get your jobs done with ease.</p>
				</div>	
			</li>
		</ul>
	</section>
	<section class="demobox">
		<div class="itmeansbox left">
			<h3>IT MEANS</h3>
			<p>Quotes from contractors can finally be trusted since they are highly accurate, based on real costs. Customers can receive their quotes in real-time, plus have it sent to their email right away.  </p>
			<p>And the best part is the money is securely held in escrow so that payment is guaranteed!</p>
			<div class="seprater"></div>
			<a href="#" class="button">BOOK A DEMO</a>
		</div>
		<div class="bookdemo">
			<div class="heading">
				<h2>Book a demo</h2>
				<h3>See firsthand why we are so different.</h3>
				<p>We are confident that CostCertified is solving some major problems in the construction and renovation industry.  Why not book a demo to see how CostCertified can help you.</p>
				<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/img5.png" title="" /></div>
			</div>
		</div>
		<div class="itmeansbox right">
			<div class="seprater"></div>
			<h3>FEATURES</h3>
			<ul>
				<li>Provide highly accurate quotes without needing an estimator</li>
				<li>Use it "out of the box" or customize your own line item costs and profit margins</li>
				<li>Save time by using assemblies (templates you build from common quotes)</li>
				<li>Create a sense of trust and clarity with the customer while quoting in real-time</li>
				<li>Don't lose money by forgetting an item... quote your job or project with</li>
			</ul>
			<a href="#" class="button">VIEW MORE</a>
		</div>
		<div class="clearfix"></div>
	</section>
	<section class="calltoaction">
		<h3>Our vision</h3>
		<p>To revolutionize the construction marketplace with a platform designed to create trust, multiply efficiency, profit and customer satisfaction!</p>
		<a href="#" class="arrow"></a>
		<a href="#" class="button">BOOK A DEMO</a>
	</section>
	<?php get_template_part( 'template-parts/testimonial' ); ?>
</section>

<?php get_footer(); 
