<?php
/**
 *  album term grid view
 * 
 * @package TORANJ
 * @author owwwlab ( Alireza Jahandideh & Ehsan Dalvand @owwwlab )
 */

?>


<!-- Page main wrapper -->
<div id="main-content" class="dark-template">
	<div class="page-wrapper">

		<!-- Page sidebar -->
		<div class="page-side">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">

					<!-- Page title -->
					<div class="title">
						<span class="second-part"><?php _e('Browse Album','toranj'); ?></span>
						<span><?php echo $the_album->name; ?></span>
					</div>
					<!-- /Page title -->
					<p><?php echo wpautop($the_album->description); ?></p>

					<?php if (count($the_album_childs) >0 ): ?>
					<div class="grid-filters-wrapper">
						<a href="#" class="select-filter"><i class="fa fa-filter"></i> <?php ot_get_option('gallery_grid___filter_title'); ?></a>
						<ul class="grid-filters">
						  	<li class="active"><a href="#" data-filter="*"><?php _e('All','toranj'); ?></a></li>
						  	
						  	<?php foreach ($the_album_childs as $album): ?>
						  	<li><a href="#" data-filter=".<?php echo $album->slug; ?>"><?php echo $album->name; ?> - <?php echo $album->count ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
		<!-- /Page sidebar -->

		<!-- Page main content -->
		<div class="page-main">
			<?php $same_ratio = isset ($the_album->owlabgal_same_ratio_grid) ? $the_album->owlabgal_same_ratio_grid : ''; ?>
			<!-- Gallery wrapper -->	
			<div class="grid-portfolio tj-lightbox-gallery<?php if ($same_ratio =="on") echo " same-ratio-items"; ?><?php if (ot_get_option('gallery_grid___remove_spaces_between_images') =="on") echo" no-padding";?>"lg-cols="<?php echo ot_get_option('gallery_grid___larg_screen_column_count',3); ?>" md-cols="<?php echo ot_get_option('gallery_grid___medium_screen_column_count',3); ?>" sm-cols="<?php echo ot_get_option('gallery_grid___small_column_count',2); ?>">
				

				<?php $sizer_defined = 0; ?>
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php 
					$owlabgal_meta = get_post_meta( $post->ID );


				 	$the_terms = wp_get_post_terms( $post->ID, 'owlabgal_album', array('fileds' => 'all') ); 
				 	//d($the_terms);
				 	$this_terms =array();
				 	if (is_array($the_terms)){
					 	foreach($the_terms as $term){
					 		$this_terms[]= $term->slug;
					 	}
				 	}
				 	$album_terms = implode(' ', $this_terms);

				 	$item_overlay = owlab_get_gallery_overlay(ot_get_option("gallery_index_overlay_type"));
				 	
				 	$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-thumb' );
				 	// [0] => url
					// [1] => width
					// [2] => height
					// [3] => boolean: true if $url is a resized image, false if it is the original.

				 	$img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

				?>
				

				<!-- Gallery Item -->		
				<div class="gp-item <?php echo $item_overlay['parent_class']; ?> <?php echo $album_terms; ?><?php if ( array_key_exists('owlabgal_grid_sizer', $owlabgal_meta) && $sizer_defined !=1 ): $sizer_defined == 1; ?> grid-sizer <?php endif;?>" <?php if (!empty($owlabgal_meta['owlabgal_grid_ratio'][0])): ?>data-width-ratio="<?php echo intval($owlabgal_meta['owlabgal_grid_ratio'][0]); ?>"<?php endif; ?>> 
					<a href="<?php echo $img_url; ?>"  class="lightbox-gallery-item" title="<?php the_title(); ?><?php echo (array_key_exists('owlabgal_short_des', $owlabgal_meta) ) ? " | ".$owlabgal_meta['owlabgal_short_des'][0] : ''; ?>">
						<?php owlab_lazy_image($thumb_url,get_the_title()); ?>
						<!-- Item Overlay -->	
						<?php echo $item_overlay['markup']; ?>
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
<?php do_action('owlab_after_content'); ?>

