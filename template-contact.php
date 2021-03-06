<?php /* Template Name: Contact */

get_header(); ?>

	<div class="content-area">

			<h1 class="page-title">Contact</h1>

			<section class="contact-wrap">

				<div class="contact">
					<h2>Contact Us</h2>
					<p><span>VUCF Office:</span>(407) 823-3318</p>
					<p><span>OSI Main:</span> (407) 823-6471</p>
					<p><span>OSI Fax:</span> (407) 823-5899</p>
					<p>vucfabp@ucf.edu</p>
				</div>

				<div class="find-us">
					<h2>Find Us</h2>
					<p>The Volunteer UCF Cubicle is located in the Office of Student Involvement (SU 208).</p>
					<div class= "vucf-address">
						<p>
							University of Central Florida
							<br>
							Volunteer UCF
							<br>
							Attention: ABP
							<br>
							PO Box 160245
							<br>
							Orlando, FL 32816
						</p>
					</div>
				</div>

				<div class="follow-us">
					<div class="social-btns">
						<h2>Follow Us</h2>
						<div class="facebook-btn">
							<a href="https://www.facebook.com/UCFAlternativeBreakProgram" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/facebook-logo.png" />
							<p>FACEBOOK</p>
							</a>
						</div>
						<div class="twitter-btn">
							<a href="https://twitter.com/vucfabp" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/twitter-logo.png" />
							<p>TWITTER</p>
							</a>
						</div>
						<div class="instagram-btn">
							<a href="https://instagram.com/vucfabp/" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/instagram-logo.png" />
							<p>INSTAGRAM</p>
							</a>
						</div>
					</div>
				</div>

			</section>

			<div class="main">
<?php
				while (have_posts()) {
					the_post();
					get_template_part( 'content' );
				}
?>

			</div>

	</div>

<?php get_footer(); ?>