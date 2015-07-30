<?php /* Template Name: Home */

get_header(); ?>

	<div class="content-area">

		<h1 class="tagline"> Your Adventure. Your Impact. </h1>

		<div class="header-slider">
		</div>

		<section class="icons">
				<div class="plane-wrap">
				</div>
				<div class="footprints-wrap">
				</div>
				<div class="case-wrap">
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

		<section class="video">
			<div class="video-wrap">
			</div>
			<div class="join-wrap">

			</div>
		</section>

		<section class="contact">
			<div>
				<span>Volunteer UCF Office:</span> (407) 823-3318
			</div>
			<div>
				<span>Office of Student Involvement Office:</span> (407) 823-6471
			</div>
			<div>
				<span>OSI Fax:</span> (407) 823-5899
			</div>
			<div>The Volunteer UCF Cubicle is located in the Office of Student Involvement (SU 208).</div>
			<div class="vucf-address"> 
				University of Central Florida
				<br>
				Volunteer UCF
				<br>
				Attention: ABP
				<br>
				PO Box 160245
				<br>
				Orlando, FL 32816
			</div>
		</section>

		<section class="social">
			<div class="social-btns">
				<div class="facebook-btn">
					<a href="#" target="_blank">
					<img></img>
					
					</a>
				</div>
				<div class="twitter-btn">
					<a href="#" target="_blank">
					<img></img>
					</a>
				</div>
				<div class="instagram-btn">
					<a href="#" target="_blank">
					<img></img>
					</a>
				</div>
			</div>
		</section>


<?php get_footer(); ?>