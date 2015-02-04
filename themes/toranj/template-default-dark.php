<?php 
/**
 * Template Name: Default Template Dark
 *
 * The template for displaying all regular pages.
 */
?>

<?php get_header(); ?>

<!--Page main wrapper-->
<div id="main-content" class="dark-template"> 
	<div class="page-wrapper padding-top">
		<div class="container">

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<?php if(function_exists('the_owlab_breadcrumbs')) the_owlab_breadcrumbs(); ?>
			</ol>
			<!--/ breadcrumbs -->

			<?php while( have_posts() ) : the_post(); ?>
				
				<!-- page title -->	
				<h2 class="section-title double-title">
					<?php the_title(); ?>
				</h2>
				<!--/ page title -->

				<?php the_content(); ?>

				<?php wp_link_pages(); ?>

				<?php //comments_template(); ?>
			
			<?php endwhile; ?>
			<hr/>
			<a class="back-to-top" href="#"></a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--/Page main wrapper-->

<?php get_footer(); ?>