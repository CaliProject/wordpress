<?php
/**
 *  Archive Vertical template page for portfolio
 * 
 * @package Toranj
 * @author owwwlab
 */
 
?>

<!-- Page main wrapper -->
<div id="main-content" class="abs dark-template">
	<div class="page-wrapper">
		
		<!-- Sidebar -->
		<div class="page-side ajax-element">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">
					<div class="title">
						<span class="second-part"><?php _e('Browse Group','toranj'); ?></span>
						<span><?php echo $the_group->name; ?></span>
					</div>
					
					<p><?php echo wpautop($the_group->description); ?></p>

					<?php if (count($the_group_childs) >0 ): ?>
					
						<h5 class="lined"><?php _e('Sub Groups','toranj'); ?></h5>
						
						<ul class="list list-unstyled">
						<?php foreach ($the_group_childs as $child) :?>
							<li><a href="<?php echo get_term_link( $child->term_id, $child->taxonomy ); ?>"><?php echo $child->name ?></a></li>
						<?php endforeach; ?>
						</ul>	
					
					<?php endif; ?>

				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Main Content -->
		<div class="page-main horizontal-folio-wrapper ajax-element set-height-mobile">
			<!-- Portflio wrapper -->	
			<div class="horizontal-folio">
				
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php 
				$owlabpfl_meta = get_post_meta( $id );
				$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		            // [0] => url
		            // [1] => width
		            // [2] => height
		            // [3] => boolean: true if $url is a resized image, false if it is the original.
				?>

				<!-- Portflio Item -->		
				<div class="gp-item tj-circle-hover">
					<a href="<?php the_permalink(); ?>" class="ajax-portfolio set-bg">
						<img src="<?php echo $thumb_url[0] ?>" alt="<?php the_title(); ?>" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay">
							<div class="content">
								<div class="circle">
									<i class="fa fa-link"></i>
								</div>
								<div class="details">
									<h4 class="title"><?php the_title(); ?></h4>
									<h5 class="subtitle"><?php echo array_key_exists('owlabpfl_short_des', $owlabpfl_meta) ? $owlabpfl_meta['owlabpfl_short_des'][0] : ''; ?></h5>
								</div>	
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->
				
				<?php endwhile; else: ?>
					<?php _e('No items found.','toranj'); ?>
				<?php endif; ?>

					
			</div>
			<!-- /Portflio wrapper -->	
		</div>
		<!-- /Main Content -->


		<!--Ajax folio-->
		<div id="ajax-folio-loader">
			<!-- loading css3 -->
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG">
				</div>
				<div id="followingBallsG_2" class="followingBallsG">
				</div>
				<div id="followingBallsG_3" class="followingBallsG">
				</div>
				<div id="followingBallsG_4" class="followingBallsG">
				</div>
			</div>
		</div>
		<div id="ajax-folio-item"></div>
		<!--Ajax folio-->
	</div>
</div>
<!-- /Page main wrapper -->
