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
				<h1>Back to health<br>
				Back to life</h1>
				<p>Small things can make a big difference. An injured hand or wrist has a huge impact on work, family, sports – on life. The Hand Specialist can help you get you back to health, and back to what’s important to you. The emphasis is on treating you as a whole rather than just your injury. That’s why you’ll receive a bespoke, contemporary treatment plan, tailored to your individual needs and goals.</p>
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
					</div><p>Ramon is a consultant orthopaedic surgeon who has specialised in treatment of the hand, wrist and upper limb. He has been a consultant since 2012, working in both the NHS and private practice. 
					His NHS practice is based at King's College Hospital - one of London's largest and busiest teaching hospitals. Ramon's private practice is based in London at Fortius Clinic.</p>

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
				<p>Ramon has a wide range of expertise in several areas of hand and wrist surgery but his special interests include:</p>
<p>Fractures of the hand, wrist and scaphoid<br />
Sports injuries and rehabilitation<br />
Keyhole wrist surgery and minimally invasive techniques<br />
Neurological conditions including carpal tunnel syndrome and ulnar nerve entrapment<br />
Tendon injury and inflammation<br />
Ligament reconstruction following sports injury<br />
Arthritis of the hand and wrist<br />
Joint replacement and reconstruction surgery<br />
</p>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#0052c2;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row align-items-center">
				<div class="col-sm-12 col-md-6 text-center p-4 mt-3 mb-3 testimonial-body">
							Our aim is always to get people back on an even keel and out of pain before targeting a return to sporting fitness over the longer term<br />
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
	<div class="container-fluid mb-0" style="background-color:#31c0e2;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row align-items-center">
				<div class="col-sm-12 col-md-12 text-center text-white mt-5 align-self-end">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/newhands.jpg" class="align-bottom">
				</div>
				</div>
			</div>
		</div>
	</div>



</article><!-- #post-## -->
