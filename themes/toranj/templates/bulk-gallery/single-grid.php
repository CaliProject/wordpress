<?php
/**
 *  Single template page for bulk gallery horizontal scroll
 * 
 * @package Toranj
 * @author owwwlab
 */
?>






<div id="main-content" class="dark-template"> 

<?php if($config['sidebar']== 'on'): ?>

<!-- Page sidebar -->
<div class="page-side">
    <div class="inner-wrapper vcenter-wrapper">
        <div class="side-content vcenter">

            <!-- Page title -->
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <!-- /Page title -->

            <div class="hidden-sm hidden-xs">
                <?php echo $config['sidebar_content'] ?>
            </div>

        </div>
    </div>
</div>
<!-- /Page sidebar -->

<?php endif; ?>

<?php 
$nosideClass='';
if($config['sidebar']!= 'on'){
    $nosideClass = " no-side";
} 
$sizer_defined = 0;

if ( $config['same_ratio'] == "on"){
    $same_ratio_thumbs = " same-ratio-items";
}else{
    $same_ratio_thumbs = '';
}

if($config['nopadding']=='on'){
    $remove_spaces_between_images = " no-padding";
}else{
    $remove_spaces_between_images = '';
}
?>



<!-- Page main content -->
<div class="page-main tj-lightbox-gallery<?php echo $nosideClass ?>">

	<?php if ( post_password_required() ) : ?>
		
    	<?php include(locate_template(OWLAB_TEMPLATES . '/password-protect/form-center.php')); ?>
    	
    <?php else: ?>
    	<div class="page-wrapper">  
		    <!-- Portfolio wrapper -->  
		    <div class="grid-portfolio<?php echo $same_ratio_thumbs ?><?php echo $remove_spaces_between_images ?>"
		    	lg-cols="<?php echo $config['lg_col'] ?>"
		    	md-cols="<?php echo $config['md_col'] ?>"
		    	sm-cols="<?php echo $config['sm_col'] ?>"
		    	xs-cols="<?php echo $config['xs_col'] ?>"
		    	>

			    <?php foreach ($imgs as $img_id=>$img_data): ?>

		    	<?php 
		    		$thumb_url = wp_get_attachment_image_src( $img_id, 'blog-thumb' );
		            $img_url = $img_data['src'];
		            
		            $ratio ='';
		            if ( isset($img_data['ratio']) ){
		            	if ( intval($img_data['ratio'])>0 ){
						    $ratio.= ' data-width-ratio="'. intval($img_data['ratio']).'"';
						}
		            }
					


					$sizer='';
					if ( isset($img_data['grid_sizer']) ){
						if ( $img_data['grid_sizer']=='on' && $sizer_defined !=1 ){
						    $sizer_defined == 1;
						    $sizer=" grid-sizer";
						}
					}
		    	?>
		    	<!-- Gallery Item -->       
	            <div class="gp-item <?php echo $item_overlay['parent_class'] ?> <?php echo $sizer ?>" <?php echo $ratio ?>> 
	                <a href="<?php echo $img_url; ?>"  class="lightbox-gallery-item" title="<?php echo $img_data['title'] ?>">
	                    
	                    <?php echo owlab_lazy_image($thumb_url, get_the_title(), false); ?>
	                    
	                    <!-- Item Overlay -->   
	                    <?php echo $item_overlay['markup']  ?>
	                    <!-- /Item Overlay -->  
	                </a>
	            </div>
	            <!-- /Gallery Item -->

		    <?php endforeach; ?>
		    </div>
		    <!-- /Portfolio wrapper -->
		</div>
	<?php endif; ?>
</div>
<!-- Page main content -->

</div>

<?php do_action('owlab_after_content'); ?>
