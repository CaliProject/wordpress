<?php
/**
 *  Archive Grid template page for bulk gallery
 * 
 * @package Toranj
 * @author owwwlab
 */
 
if ( function_exists('ot_get_option')){
	$layout = ot_get_option('bulk_gallery_grid___layout_type','full');
}else{
	$layout = 'full';
} ?>

<?php if ( $layout == "full"): ?>

<div id="main-content" class="dark-template">
	<div class="page-wrapper">
		<div class="page-main no-side">
			<!-- Gallery wrapper -->	
			<div class="grid-portfolio <?php if (ot_get_option('bulk_gallery_grid___same_ratio_thumbs') =="on") echo " same-ratio-items"; ?><?php if (ot_get_option('bulk_gallery_grid___remove_spaces_between_images') =="on") echo" no-padding";?>" lg-cols="<?php echo ot_get_option('bulk_gallery_grid___larg_screen_column_count',5); ?>" md-cols="<?php echo ot_get_option('bulk_gallery_grid___medium_screen_column_count',4); ?>" sm-cols="<?php echo ot_get_option('bulk_gallery_grid___small_column_count',2); ?>" xs-cols="<?php echo ot_get_option('bulk_gallery_grid___xs_column_count',1); ?>">
				
				<?php $sizer_defined=0; ?>
				
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php 
					
					$owlabgal_meta = get_post_meta( $post->ID );
					$owlabbulk_meta = unserialize($owlabgal_meta['_owlabbulkg_slider_data'][0]);
					$ratio = isset($owlabbulk_meta['config']['ratio']) ? $owlabbulk_meta['config']['ratio'] : 1;
					
					$grid_sizer = 'off';
					if ( isset($owlabbulk_meta['config']['grid_sizer']) )
						$grid_sizer = $owlabbulk_meta['config']['grid_sizer'] == NUll ? 'off' : 'on';
					

					$short_des = isset($owlabbulk_meta['config']['short_des']) ? $owlabbulk_meta['config']['short_des'] : '';

				 	$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-thumb' );
				 	
				 	
				?>

				<!-- Gallery Item -->		
				<div class="gp-item <?php echo ot_get_option('bulk_gallery_grid_hover','tj-hover-1'); ?> <?php if ( $grid_sizer =='on' && $sizer_defined !=1 ): $sizer_defined == 1; ?> grid-sizer <?php endif;?>" data-width-ratio="<?php echo intval($ratio); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php owlab_lazy_image($thumb_url,get_the_title()); ?>
						
						<!-- Item Overlay -->	
						<?php if (ot_get_option('bulk_gallery_grid_hover','tj-hover-1')=='tj-hover-1'): ?>
						<div class="tj-overlay">
							<h3 class="title"><?php the_title(); ?></h3>
							<h4 class="subtitle"><?php echo $short_des; ?></h4>
						</div>
						<?php else: ?>
						<div class="tj-overlay">
							<i class="fa fa-angle-right overlay-icon"></i>
							<div class="overlay-texts">
								<h3 class="title"><?php the_title(); ?></h3>
								<h4 class="subtitle"><?php echo $short_des; ?></h4>
							</div>
						</div>
						<?php endif; ?>
						<!-- /Item Overlay -->

					</a>
				</div>
				<!-- /Gallery Item -->

				<?php endwhile; else: ?>
					<?php _e('No items found.','toranj'); ?>
				<?php endif; ?>

			</div>
			<!-- /Gallery wrapper -->	

			
		</div>
	</div>
</div>

<?php else: ?>

<!-- Page main wrapper -->
<div id="main-content" class="dark-template">
	<div class="page-wrapper">

		<!-- Page sidebar -->
		<div class="page-side">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">

					<!-- Page title -->
					<h1 class="title">
						<span class="second-part"><?php echo ot_get_option('bulk_gallery_title_1',__('Browse our','toranj')); ?></span>
						<span><?php echo ot_get_option('bulk_gallery_title_2',__('Galleries','toranj')); ?></span>
					</h1>
					<!-- /Page title -->

					

					<?php echo ot_get_option('bulk_gallery_side_content'); ?>

				</div>
			</div>
		</div>
		<!-- /Page sidebar -->

		<!-- Page main content -->
		<div class="page-main">

			<!-- Gallery wrapper -->	
			<div class="grid-portfolio <?php if (ot_get_option('bulk_gallery_grid___same_ratio_thumbs') =="on") echo " same-ratio-items"; ?><?php if (ot_get_option('bulk_gallery_grid___remove_spaces_between_images') =="on") echo" no-padding";?>" lg-cols="<?php echo ot_get_option('bulk_gallery_grid___larg_screen_column_count',5); ?>" md-cols="<?php echo ot_get_option('bulk_gallery_grid___medium_screen_column_count',4); ?>" sm-cols="<?php echo ot_get_option('bulk_gallery_grid___small_column_count',2); ?>" xs-cols="<?php echo ot_get_option('bulk_gallery_grid___xs_column_count',1); ?>">
				
				<?php $sizer_defined=0; ?>
				
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php 
					
					$owlabgal_meta = get_post_meta( $post->ID );
					$owlabbulk_meta = unserialize($owlabgal_meta['_owlabbulkg_slider_data'][0]);
					$ratio = isset($owlabbulk_meta['config']['ratio']) ? $owlabbulk_meta['config']['ratio'] : 1;
					
					$grid_sizer = 'off';
					if ( isset($owlabbulk_meta['config']['grid_sizer']) )
						$grid_sizer = $owlabbulk_meta['config']['grid_sizer'] == NUll ? 'off' : 'on';
					

					$short_des = isset($owlabbulk_meta['config']['short_des']) ? $owlabbulk_meta['config']['short_des'] : '';

				 	$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-thumb' );
				 	
				 	
				?>

				<!-- Gallery Item -->		
				<div class="gp-item <?php echo ot_get_option('bulk_gallery_grid_hover','tj-hover-1'); ?> <?php if ( $grid_sizer =='on' && $sizer_defined !=1 ): $sizer_defined == 1; ?> grid-sizer <?php endif;?>" data-width-ratio="<?php echo intval($ratio); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php owlab_lazy_image($thumb_url,get_the_title()); ?>
						
						<!-- Item Overlay -->	
						<?php if (ot_get_option('bulk_gallery_grid_hover','tj-hover-1')=='tj-hover-1'): ?>
						<div class="tj-overlay">
							<h3 class="title"><?php the_title(); ?></h3>
							<h4 class="subtitle"><?php echo $short_des; ?></h4>
						</div>
						<?php else: ?>
						<div class="tj-overlay">
							<i class="fa fa-angle-right overlay-icon"></i>
							<div class="overlay-texts">
								<h3 class="title"><?php the_title(); ?></h3>
								<h4 class="subtitle"><?php echo $short_des; ?></h4>
							</div>
						</div>
						<?php endif; ?>
						<!-- /Item Overlay -->

					</a>
				</div>
				<!-- /Gallery Item -->

				<?php endwhile; else: ?>
					<?php _e('No items found.','toranj'); ?>
				<?php endif; ?>

			</div>
			<!-- /Gallery wrapper -->	
			
		</div>
		<!-- /Page main content -->

	</div>
</div>
<!-- /Page main wrapper -->

<?php endif; ?>



<?php do_action('owlab_after_content'); ?>







