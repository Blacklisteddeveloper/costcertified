<?php
/**
 * Template Name: Contact Us Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package costcertified
 */
get_header(); ?>

<section class="contact_us">
	<section class="about_content">
		<div class="heading">
			<h3>Want a demo? Need to talk?</h3>
			<h2>Get in touch with us today.</h2>
		</div>
		<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/image/contact_txt.png" title="" /></div>
		<div class="form">
			<?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]');?>
		</div>
	</section>
</section>

<?php get_footer(); 
