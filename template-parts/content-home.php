<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid mb-0 text-center">
		<div class="row">
			<?php if ( has_post_thumbnail() ) : ?>
			<div class="pl-0 pr-0 image-wrapperA" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<div class="mainLogo justify-content-md-center">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class="pt-5">
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#418de3;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
				<h1>Your life in<br>
				our hands</h1>
				<p>Your hands are incredibly important to your everyday life, and we understand the frustration caused by either one or both of them being injured. You want to get back to your normal activity, be that tennis or taxidermy. We will work with you on fitting your treatment plan around your schedule, ensuring you have a speedy recovery through a highly targeted rehabilitation process.</p>
				</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#7da6b8;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row align-items-end">
				<div class="col-sm-12 col-md-6 text-center p-4 mt-3 mb-3">
					<h1>Ramon<br>Tahmassebi</h1>
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class="pt-4 pb-4">
					</div><p>Ramon is an orthopaedic surgeon who specialises in treating conditions of the hand, wrist and upper limb. His focus is always on developing a treatment plan tailored to the individual. He is also the lead orthopaedic consultant at King's College Hospital London and is involved in treating some of the capital's most seriously injured people. He is equally happy looking after professional sports teams and treating elite level athletes.</p>

				</div>
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 ">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-image1.jpg" class="align-bottom">
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#d1d2d4;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<h1>Hand conditions<br>
	& sports injuries</h1>
				<p>Fractures of the wrist, scaphoid and hand<br />

Sports injuries and rehabilitation<br />

Keyhole surgery and minimally invasive techniques<br />

Neurological conditions including nerve injury and entrapment<br />

Ligament and tendon reconstructiony<br />

Arthritis of the hand and wrist including joint replacement surgery</p>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#0052c2;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row align-items-center">
				<div class="col-sm-12 col-md-6 text-center p-4 mt-3 mb-3 testimonial-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Donec id orci leo. Donec felis lorem,<br />
							<span class="text-white"><i>Ramon Tahmassebi</i></span>

				</div>
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 align-self-end">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonial-image-new11.jpg" class="align-bottom">
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row  justify-content-md-center text-center">
			<div class="col-md-6 col-sm-12 mt-5 mb-5">
				<h1>Enquiry Form</h1>				
				<?php 
					gravity_form(1, false, false, false, '', true, 12);
				?>

			</div>
		</div>
	</div>



</article><!-- #post-## -->
