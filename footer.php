<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

	$description = get_bloginfo( 'description', 'display' );

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer class="site-footer" role="contentinfo">
		<div class="container site-info">
			<div class="row">
				<div class="col-md-3 site-info__brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
					</a>

					<p>Hadron specialises in targeted infection control for workplaces across a wide range of sectors. With more than two decades of medical experience, we help our clients to achieve total peace of mind on hygiene, ensuring best practice for the optimal safety of their employees and customers.</p>
				</div>

				<div class="col-md-3 col-md-offset-3 site-info__form">
					<h4>Email Us</h4>
					<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form"]'); ?>
				</div>

				<div class="col-md-3 site-info__contact">
					<h4>Contact</h4>
					<p><img src="<?php echo get_template_directory_uri(); ?>/images/address-icon.svg" alt="Find us">Address:<br />
						Hadron Group Ltd, <br />
						Wellington House <br />
						65 Wellington Street,<br />
						Stapleford,<br />
						Nottingham, NG9 7BE,<br />
						UK
					</p>
					<p><img src="<?php echo get_template_directory_uri(); ?>/images/headphones-icon.svg" alt="Call Us"><a href="tel:0800 707 6212"></a>0800 707 6212</p>
					<p><img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.svg" alt="Call Us"><a href="mailto:support@hadrongroup.co.uk">support@hadrongroup.co.uk</a></p>
				</div>
			</div>

		</div><!-- .site-info -->
		<div class="container site-sig">
			<div class="row">
				<div class="col-md-4">
					© Copyright 2020 Hadron.<span>Design by <a href="https://creativemediani.com/" target="_blank">Creative Media</a></span>
				</div>

				<div class="col-md-5">
					<?php wp_nav_menu( array(
							'theme_location' => 'footer-1',
							'items_wrap' => '<ul id="" class="footer-nav">%3$s</ul>' ) );
							?>
				</div>

				<div class="col-md-3 site-sig__social">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_footer.svg" alt="Follow Hadron On Twitter"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/fb_footer.svg" alt="Follow Hadron On Facebook"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin_footer.svg" alt="Follow Hadron On Linkedin"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/insta_footer.svg" alt="Follow Hadron On Instagram"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/youtube_footer.svg" alt="Follow Hadron On YouTube"></li>
					</ul>
				</div>

			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
