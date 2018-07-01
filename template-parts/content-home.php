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
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class="pt-4">
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#418de3;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
				<h1>Your life in<br>
				our hands</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Donec id orci leo. Donec felis lorem, iaculis et eros vitae, dictum tincidunt orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Donec id orci leo. Donec felis lorem, iaculis et eros vitae, dictum tincidunt orci.</p>
				</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#adc9d4;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
				</div>
				<div class="col-sm-12 col-md-6 text-center p-5 mt-5 mb-5">
					<h1>Ramon<br>Tahmassebi</h1>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class="pt-4 pb-4">
					<p>Orthopaedic Consultant Ramon, has been. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Ddolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet.</p>

				</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#d1d2d4;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<h1>Hand conditions<br>
				and sports injuries</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Donec id orci leo. Donec felis lorem, iaculis et eros vitae, dictum tincidunt orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis semper quam, at tincidunt elit commodo sit amet. Ut commodo tristique euismod. Donec id orci leo. Donec felis lorem, iaculis et eros vitae, dictum tincidunt orci.</p>
				</div>
		</div>
	</div>




	<div class="container-fluid">
		<div class="row">
		</div>
	</div>


	<div class="container-fluid mb-0">
		<div class="row">



			<div class="entry-content">





				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
