<?php
/**
 *  Assets functions for the theme
 * 
 * @package toranj theme
 * @author owwwlab
 */


/**
 * ----------------------------------------------------------------------------------------
 * Add custom breadcrumbs 
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'the_owlab_breadcrumbs' ) ) {

	function the_owlab_breadcrumbs() {
	 
	    global $post;

	    if (!is_home()) {

	        echo "<li><a href='";
	        echo home_url();
	        echo "'>";
	        echo bloginfo('name');
	        echo "</a></li>";

	        if (is_category() || is_single()) {

	        	//@TODO : Don't we need to search for custom taxonomies of the single page?

	            $cats = get_the_category( $post->ID );

	            foreach ( $cats as $cat ){
	                echo "<li>";
	                echo $cat->cat_name;
	                echo " </li> ";
	            }
	            if (is_single()) {
	                echo "<li class='active'>";
	                the_title();
	                echo "</li>";
	            }
	        } elseif (is_page()) {

	            if($post->post_parent){
	                $anc = get_post_ancestors( $post->ID );
	                $anc_link = get_page_link( $post->post_parent );

	                foreach ( $anc as $ancestor ) {
	                    $output = "<li><a href=".$anc_link.">".get_the_title($ancestor)."</a> </li>";
	                }

	                echo $output;
	                echo "<li class='active'>";
	                the_title();
	                echo "</li>";

	            } else {
	                echo "<li class='active'>";
	                the_title();
	                echo "</li>";
	            }
	        }
	    }
	    elseif (is_tag()) {
	    	echo "<li class='active'>";
	    	single_tag_title();
	    	echo "</li>";
	    }
	    elseif (is_day()) {
	    	echo "<li class='active'>";
	    	echo "Archive: "; the_time('F jS, Y'); 
	    	echo'</li>';
	    }
	    elseif (is_month()) {
	    	echo "<li class='active'>";
	    	echo"Archive: "; the_time('F, Y'); 
	    	echo'</li>';
	    }
	    elseif (is_year()) {
	    	echo "<li class='active'>";
	    	echo"Archive: "; the_time('Y'); 
	    	echo'</li>';
	    }
	    elseif (is_author()) {
	    	echo "<li class='active'>";
	    	echo "Author's archive: "; 
	    	echo '</li>';
	    }
	    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
	    	echo "<li class='active'>";
	    	echo "Blogarchive: "; echo '';
	    	echo "</li>";
	    }
	    elseif (is_search()) {
	    	echo "<li class='active'>";
	    	echo "Search results: ";
	    	echo "</li>";
	    }
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * Display navigation to the next/previous set of posts for blog grid
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_blog_grid_paging_nav' ) ) {
	function owlab_blog_grid_paging_nav($max=0) { 
		
		$next = get_previous_posts_link(__( 'Prev', 'toranj' ),$max);
		$prev = get_next_posts_link(__( 'Next', 'toranj' ),$max);
		
		if ($next OR $prev){
		?>
			<div id="post-nav">
				<?php 
					if ( $next ) : ?>
					<?php echo $next; ?>
					<?php endif;
				 ?>
				<?php 
					if ( $prev ) : ?>
					<?php echo $prev; ?>
					<?php endif;
				 ?>
				<div class="clearfix"></div>
			</div><!--/ post-nav --><?php
		}
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * Display navigation to the next/previous post
  * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_blog_single_paging_nav' ) ) {
	function owlab_blog_single_paging_nav() { 
		
		$next = get_next_post();
		$prev = get_previous_post();
		
		if ($next OR $prev){
		?>
			<div id="post-nav">
				<?php 
					if ( $next ) : ?>
					<a class="next-post btn btn-lg btn-simple pull-right" href="<?php echo get_permalink( $next->ID ); ?>" title="<?php echo $next->post_title; ?>"><?php _e('Next','toranj') ?></a>
					<?php endif;
				 ?>
				<?php 
					if ( $prev ) : ?>
					<a class="prev-post btn btn-lg btn-simple pull-left" href="<?php echo get_permalink( $prev->ID ); ?>" title="<?php echo $prev->post_title; ?>"><?php _e('Prev','toranj') ?></a>
					<?php endif;
				 ?>
				<div class="clearfix"></div>
			</div><!--/ post-nav --><?php
		}
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_post_meta' ) ) {
	function owlab_post_meta() {
		

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<span class="sticky-span"><i class="fa fa-lg fa-thumb-tack"></i>' . __( 'Sticky', 'toranj' ) . '</span>';
			}

			// Get the post author.
			printf(
				'<span class="author-span"><i class="fa fa-lg fa-edit"></i><a href="%1$s">%2$s</a></span>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			// Get the date.
			printf(
				'<span class="date-span"><i class="fa fa-lg fa-clock-o"></i>%s</span>',
				get_the_date()
			);

			// The categories.
			$category_list = get_the_category_list( ', ' );
			if ( $category_list ) {
				echo '<span class="category-span"><i class="fa fa-lg fa-folder"></i> ' . $category_list . ' </span>';
			}

			// The tags.
			if(is_single()){
				$tag_list = get_the_tag_list( '', ', ' );
				if ( $tag_list ) {
					echo '<span class="tags-span"><i class="fa fa-lg fa-tags"></i> ' . $tag_list . ' </span>';
				}
			}

			// Comments link.
			if ( comments_open() ) :
				echo '<span class="tags-span"><i class="fa fa-lg fa-comments"></i>';
				comments_popup_link( __( 'No Comments', 'toranj' ), __( 'One comment', 'toranj' ), __( '%s comments', 'toranj' ) );
				echo '</span>';
			endif;

		}//end if post type
	}//end function declaration
}//end function exists



/**
 * ----------------------------------------------------------------------------------------
 * shorten the excerpt for blog minimal or any other purpose
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owl_shorten_excerpt' ) ) {
	function owl_shorten_excerpt($text,$chars=200) {
		
		//check if we need to do do the truncate or not
		if (strlen(utf8_decode($text)) > $chars){
			$text = $text." ";
		    $text = substr($text,0,$chars);
		    $text = substr($text,0,strrpos($text,' '));
		    $text = $text."...";
		}

		echo $text;
		
	}
}



/**
 * ----------------------------------------------------------------------------------------
 * get and maka available the options for blog
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'owlab_get_blog_options' ) ) {
	function owlab_get_blog_options() {
		
		$options = array(
			'blog_index_layout' => ot_get_option('blog_index_layout','grid')
		);
		
		return $options;
	}
}



/**
 * ----------------------------------------------------------------------------------------
 * comments list layout
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_shape_comment' ) ) {
	function owlab_shape_comment( $comment, $args, $depth ) {
	    $GLOBALS['comment'] = $comment;
	    switch ( $comment->comment_type ) :
	        case 'pingback' :
	        case 'trackback' :
	    ?>
	    <li class="post pingback">
	        <p><?php _e( 'Pingback:', 'toranj' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'toranj' ), ' ' ); ?></p>
	    </li>
	    <?php
	            break;
	        default :
	    ?>
	    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	        
	    	<div class="author-image">
				<?php echo get_avatar( $comment, 80 ); ?>
			</div>

			<div class="comment-body" id="comment-<?php comment_ID(); ?>">
				<div class="comment-meta">
					<ul>
					    <li class="author-name">
					    	<?php comment_author_link(); ?><span>-</span>
					    </li>
					    <li><?php printf( __( '%1$s at %2$s', 'toranj' ), get_comment_date(), get_comment_time() ); ?><span>-</span></li>
					    <li><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></li>
					   
					</ul>
				</div>
				<div class="comment-content">
					<?php comment_text(); ?>
				</div>

				<div class="reply">
					
				</div>
			</div>

	        
	 	</li>
	    <?php
	            break;
	    endswitch;
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * Sharing buttons for full cover layout
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'owlab_sharing_btns_style1' ) ) {
	function owlab_sharing_btns_style1() {
	    
	    if (ot_get_option('show_sharings') == 'on'): ?>
		<!-- Post Social sharing -->
		<div id="post-share" class="box-social">
			<h4 class="u-heading"><?php echo ot_get_option('sharing_title'); ?></h4>
			<ul>
			<?php foreach (ot_get_option('sharings') as $btn): ?>
			
                <?php if ( $btn == 'sharing_facebook' ): ?>

                	<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" target="_blank"><i class="fa fa-facebook"></i></a></li>

            	<?php elseif ( $btn == 'sharing_twitter' ): ?>

                	<li><a href="https://twitter.com/intent/tweet?original_referer=<?php echo site_url(); ?>&amp;text=<?php the_title(); ?>&amp;url=<?php the_permalink();?>" target="_blank"><i class="fa fa-twitter"></i></a></li>

                <?php elseif ( $btn == "sharing_google_plus" ): ?>

                	<li><a href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                	
                <?php endif; ?>
            <?php endforeach; ?>
            </ul>
		</div>
		<!-- /Post Social sharing -->
		<?php endif;
	}
}



/**
 * ----------------------------------------------------------------------------------------
 * Post meta at the single full cover layout
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'owlab_post_meta_single_full' ) ) {
	function owlab_post_meta_single_full() {
	    
	    echo '<div class="post-author-image">';
			echo get_avatar( get_the_author_meta( 'ID' ), 100 ); 
		echo '</div>';
		echo '<div class="post-meta-inner">';
			printf(
				'<div class="post-author-name"><i class="fa fa-pencil-square-o list-icon"></i><a href="%1$s">%2$s</a></div>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			); 
		    echo '<div class="post-date"><i class="fa fa-calendar-o list-icon"></i>'.get_the_date().'</div>';
		    
		    $category_list = get_the_category_list( ', ' );
		    if ( $category_list ) : 
		    echo '<div class="post-categories">
		    		<i class="fa fa-folder-o list-icon"></i>';
		    	echo $category_list;
		    echo '</div>';
			endif; 
		    
		    $tag_list = get_the_tag_list( '', ', ' );
		    if ( $tag_list ) : 
		    echo '<div class="post-tags">
		    		<i class="fa fa-tags list-icon"></i>'; 
		    		echo $tag_list;
		    echo '</div>';
			endif;
		echo '</div>';
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * List of related posts for single blog posts
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'owlab_get_related_posts' ) ) {
	function owlab_get_related_posts($echo = true) {
	    // post types
        $type = ot_get_option('related_posts_gather_data_based_on')!= null ? ot_get_option('related_posts_gather_data_based_on') : 'category';
        $limit = ot_get_option('related_post_limit')!= null ? ot_get_option('related_post_limit') : 4;
        $q_args = '';

        // category
        if($type == '' || $type == 'category')
        { 
         
            $getPostCat = get_the_category();
            $postCat = '';
            if(!empty($getPostCat)) 
            {
                $postCats = '';
                foreach ($getPostCat as $cat) {
                    $postCats .= $cat->term_id . ',';
                }
                $postCat  = rtrim($postCats , ',');
            }

            if($postCats != ''){

                $q_args = array(
                    'posts_per_page' => $limit,
                    'post_type' => 'post' ,
                    'cat' => $postCats,
                    'post__not_in' => array(get_the_ID())
                );
            }
        }else{
            // related posts by tags
            $tags = get_the_tags();
            $post_tags = '';
            if(!empty($tags))
            {
                foreach ($tags as $tag) {
                    $post_tags .= $tag->name . ',';
                }
                $post_tags = rtrim($post_tags , ',');
            }

            if($post_tags != '')
            {
	            $q_args = array(
	                'posts_per_page' => $limit , 
	                'post_type' => 'post' ,
	                'tag' => $post_tags,
	                'post__not_in' => array(get_the_ID())
	            );
            }
        }

        //make teh query
		$related_query = new WP_Query($q_args);


		//waht should we do now?
		if ( $echo ){ // so you want theme as a piece of cake? allready buddy..
			
			echo "<ul class='list-related-posts list-border list-hover'>";
			if($related_query->have_posts() ) : while( $related_query->have_posts() ) : $related_query->the_post();
            
          		echo '<li><a href="' . get_permalink(). '">' . get_the_title() . '</a></li>';

            endwhile; endif; wp_reset_query();
            echo "</ul>";
		}else{ // take them and do whatevere you want
			/**
	         * DONT FORGET TO wp_reset_query() AFTER YOU USED THE DATA
	         */
			return $related_query;
		}

	}
}


/**
 * ----------------------------------------------------------------------------------------
 * get links of custom taxonomy
 * ----------------------------------------------------------------------------------------
 */
function custom_taxonomies_terms_links($taxonomy_slug=''){
	// get post by post id
	//$post = get_post( $post->ID );
	global $post;
	
	$terms = get_the_terms( $post->ID, $taxonomy_slug );

	$out = '';
	if ( !empty( $terms ) ) {
		
		foreach ( $terms as $term ) {
			$out .=
			'<span><a href="'
			. get_term_link( $term->slug, $taxonomy_slug ) .'">'
			. $term->name
			. "</a></span> ";
		}
	}

	return $out;
}


/**
 * ----------------------------------------------------------------------------------------
 * Display navigation to the next/previous post
  * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_portfolio_single_nav' ) ) {
	function owlab_portfolio_single_nav() { 
		
		$next = get_next_post();
		$prev = get_previous_post();
		
		$prev_class = "fa-angle-left";
		$next_class = "fa-angle-right";
		if ( is_rtl() ){
			$next_class = "fa-angle-left";
			$prev_class = "fa-angle-right";
		}

		if ($next OR $prev){
		?>
			<ul class="portfolio-nav">
				
				<?php if ( $prev ) : ?>
				<li>
					<a class="portfolio-prev" href="<?php echo get_permalink( $prev->ID ); ?>">
						<i class="fa <?php echo $prev_class; ?>"></i>
						<span><?php _e('Prev','toranj') ?></span>
					</a>
				</li>
				<?php endif; ?>

				<li class="portfolio-close-li">
					<a class="portfolio-close" href="#">
						<i class="fa fa-times"></i>
						<span><?php _e('Close','toranj') ?></span>
					</a>
				</li>

				<?php if ( $next ) : ?>
				<li>
					<a class="portfolio-next" href="<?php echo get_permalink( $next->ID ); ?>">
						<i class="fa <?php echo $next_class; ?>"></i>
						<span><?php _e('Next','toranj') ?></span>
					</a>
				</li>
				<?php endif; ?>

			</ul><?php
		}
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * Display navigation to the next/previous post
  * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_portfolio_regular_nav' ) ) {
	function owlab_portfolio_regular_nav() { 
		
		$next = get_next_post();
		$prev = get_previous_post();
		
		

		if ($next OR $prev){
		?>
			<hr>
			<div id="post-nav">
				<?php if ( $prev ) : ?>
				<a class="portfolio-prev prev-post btn btn-lg btn-simple pull-left" href="<?php echo get_permalink( $prev->ID ); ?>"><?php _e('Prev','toranj') ?></a>
				<?php endif; ?>
				
				<a class="portfolio-close close-post btn btn-lg btn-simple" href="#"><i class="fa fa-bars"></i></a>
				
				<?php if ( $next ) : ?>
				<a class="portfolio-next next-post btn btn-lg btn-simple pull-right" href="<?php echo get_permalink( $next->ID ); ?>"><?php _e('Next','toranj') ?></a>
				<?php endif; ?>
			</div>
		<?php
		}
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * Display portfolio meta
  * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_portfolio_meta' ) ) {
	function owlab_portfolio_meta($owlabpfl_meta) { 
		

		//get fields from theme options
		if ( function_exists("ot_get_option")){
			if ( ot_get_option('incr_portfolio_fields') ){
				$pp_fileds = ot_get_option('incr_portfolio_fields');
			    
			    foreach ($pp_fileds as $f) {
			    	
			    	if ( !empty($f['title']) and !empty($f["id"]) and array_key_exists("owlabpfl_".$f["id"] , $owlabpfl_meta) ){
			    		echo '
			    		<li>
							<div class="list-label">'.__($f['title'],'toranj').'</div>
							<div class="list-des">'.$owlabpfl_meta["owlabpfl_".$f["id"]][0].'</div>
						</li>
			    		';
			    	} 
			    }

			    
			}
		}
		?>
			<?php if (ot_get_option('portfolio_show_date') == 'on' && !empty($owlabpfl_meta["owlabpfl_date"]) ): ?>
			<li>
				<div class="list-label"><?php _e('Date','toranj'); ?></div>
				<div class="list-des"><?php echo date_i18n( get_option( 'date_format' ),$owlabpfl_meta['owlabpfl_date'][0]); ?></div>
			</li>
			<?php endif; ?>

			<?php $groups = custom_taxonomies_terms_links('owlabpfl_group'); ?>
			<?php if (ot_get_option('portfolio_show_groups') == 'on'  && !empty($groups) ): ?>
			<li>
				<div class="list-label"><?php _e('Group','toranj'); ?></div>
				<div class="list-des"><?php echo $groups; ?></div>
			</li>
			<?php endif; ?>

			<?php $tags = custom_taxonomies_terms_links('label'); ?>
			<?php if (ot_get_option('portfolio_show_tags') == 'on' && !empty($tags) ): ?>
			<li>
				<div class="list-label"><?php _e('Label','toranj'); ?></div>
				<div class="list-des"><?php echo $tags; ?></div>
			</li>
			<?php endif; ?>
		<?php
		
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * gallery overlay type 
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists('owlab_get_gallery_overlay')){
	function owlab_get_gallery_overlay($type='simple-icon',$icon='')
	{	

		//if there is no icon passed get it from gallery options
		if ($icon == ''){
			if ( function_exists("ot_get_option")){
				$icon = ot_get_option('gallery_overlay_icon_class', 'fa-link');
			}else{
				$icon = "fa-link";
			}
		}

		switch ($type) {
			case 'simple-icon':
				$markup = '<div class="tj-overlay">
							<i class="fa '.$icon.' overlay-icon"></i>
						</div>';
				$parent_class = 'tj-hover-4';
				break;

			case 'circle':
				
				$markup = '
				<!-- Item Overlay -->	
				<div class="tj-overlay">
					<div class="content">
						<div class="circle">
							<i class="fa '.$icon.'"></i>
						</div>
					</div>
				</div>
				<!-- /Item Overlay -->
				';
				$parent_class = 'tj-circle-hover';

				break;

			case 'plus-light':
				$markup = '<div class="tj-overlay"></div>';
				$parent_class = 'tj-hover-5 reverse';
				break;

			case 'plus-dark':
				$markup = '<div class="tj-overlay"></div>';
				$parent_class = 'tj-hover-5';
				break;

			case 'plus-color':
				$markup = '<div class="tj-overlay"></div>';
				$parent_class = 'tj-hover-5 colorbg';
				break;
			
			default:
				$markup = '<div class="tj-overlay"></div>';
				$parent_class = 'tj-hover-5';
				break;
		}
		

		return array ('markup' => $markup, 'parent_class'=>$parent_class);
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * portfolio overlay type 
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists('owlab_get_portfolio_overlay')){
	function owlab_get_portfolio_overlay($type='tj-hover-1', $title="", $subtitle="")
	{	


		switch ($type) {
			case 'tj-hover-1':
				$markup = '<div class="tj-overlay">
							<h3 class="title">'.$title.'</h3>
							<h4 class="subtitle">'.$subtitle.'</h4>
						</div>';
				$parent_class = 'tj-hover-1';
				break;

			case 'tj-hover-2':
				
				$markup = '<div class="tj-overlay">
								<i class="fa fa-angle-right overlay-icon"></i>
								<div class="overlay-texts">
									<h3 class="title">'.$title.'</h3>
									<h4 class="subtitle">'.$subtitle.'</h4>
								</div>
							</div>';
				$parent_class = 'tj-hover-2';

				break;
			
			default:
				$markup = '';
				$parent_class = '';
				break;
		}
		

		return array ('markup' => $markup, 'parent_class'=>$parent_class);
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * decide between lazyload and not
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_lazy_image' ) ) {
	function owlab_lazy_image($img='', $title='', $echo=true,$class="img-responsive") {
		
		
		if(empty($img) || $img == NULL){
			$img_src = get_template_directory_uri().'/assets/img/blank.jpg';
		}else{
			if ( is_array($img) ){
				$img_src = $img[0];
				$img_width = $img[1];
				$img_height = $img[2];
			}else{
				$img_src = $img;
			}
		}
			

		$data = '';
		if ( isset( $img_width) )
			$data .= 'data-width='.$img_width;
		if ( isset( $img_height ) )
			$data .= ' data-height='.$img_height;

		if (ot_get_option('enable_lazyloud') == "on"): 
		$out =  '<img data-original="'.$img_src.'" alt="'.$title.'" class="'.$class.' lazy" '.$data.'>';
		else:
		$out = '<img src="'.$img_src.'" alt="'.$title.'" class="'.$class.'" '.$data.'>';
		endif;


		if ( $echo ){
			echo $out;
		}else{
			return $out;
		} 
	}
}

/**
 * ----------------------------------------------------------------------------------------
 * echo video background markup
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'owlab_video_background' ) ) {
	function owlab_video_background($owlabpfl_meta, $img, $echo=true) {
		
		$data = 'data-poster="'.$img.'"';
		$data .=' data-src="'.$owlabpfl_meta['owlabpfl_video_mp4'][0].'"';
		if ( array_key_exists("owlabpfl_video_webm", $owlabpfl_meta) ){
			$data.= ' data-src-webm="'.$owlabpfl_meta['owlabpfl_video_webm'][0].'"';
		}
		if ( array_key_exists("owlabpfl_video_ogg", $owlabpfl_meta) ){
			$data.= ' data-src-ogg="'.$owlabpfl_meta['owlabpfl_video_ogg'][0].'"';
		}
		$out = '<div class="owl-videobg hoverPlay"'.$data.'></div>';
		
		if ( $echo ){
			echo $out;
		}else{
			return $out;
		}
		
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * horizontal scroll markup
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists('owlab_horizontalscroll_gallery')){
	function owlab_horizontalscroll_gallery($data,$type="loop"){

		//extract the data
		extract(shortcode_atts(array(
            'loop'          => '',
            'hide_sidebar'  => 'no',
            'title2'        => '',
            'title'         => '',
            'content'       => '',
            'width_mode'    => 'fixed_width',
            'default_width' => 350,
            'overlay_type'  => '',
            'fill_mode'     => 'fill_cover',
            'sub_albums_title' => '',
            'the_album_childs' => array()
        ), $data));

		// do we want to have a sidebar 
		$nosideClass='';
        if($hide_sidebar=="yes"){
            $nosideClass = " no-side";
        }

        $output='';
		if ( $hide_sidebar != "yes" ){
            $output .= '<!-- Page sidebar -->
            <div class="page-side">
                <div class="inner-wrapper vcenter-wrapper">
                    <div class="side-content vcenter">

                        <!-- Page title -->
                        <h1 class="title">
                            <span class="second-part">'.esc_html( $title2 ).'</span>
                            <span>'.esc_html( $title ).'</span>
                        </h1>
                        <!-- /Page title -->
            ';
            if ( isset($content) ){
                $output .='
                        <div class="hidden-sm hidden-xs">
                            '.$content.'
                        </div>
                ';
            }

           if (count($the_album_childs) >0 ):
					
				$output .= '<div class="hidden-sm hidden-xs"><h5 class="lined">'.$sub_albums_title.'</h5>';
				$output .='<ul class="list list-unstyled">';
					foreach ($the_album_childs as $child):
						$output .='<li><a href="'.get_term_link( $child->term_id, $child->taxonomy ).'">'.$child->name.'</a></li>';
					endforeach;
				$output .='</ul></div>';	
					
			endif;

            $output .= '
                    </div>
                </div>
            </div>
            <!-- /Page sidebar -->
            ';
        }

        

        $output .='
        <!-- Page main content -->
        <div class="page-main horizontal-folio-wrapper set-height-mobile tj-lightbox-gallery'. $nosideClass .'" data-mode="'.$width_mode.'" data-default-width="'.$default_width.'">

            <!-- Portfolio wrapper -->  
            <div class="horizontal-folio">';
        
        if ( $type == 'loop'){

	        if ( $loop->have_posts() ) {
	        	while( $loop->have_posts() ) 
	    		{ 
	    			$loop->the_post(); 
	        
		            $owlabgal_meta = get_post_meta( $loop->post->ID ); 
		            $item_overlay = owlab_get_gallery_overlay($overlay_type);
		            $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID), 'blog-thumb' );
		            // [0] => url
		            // [1] => width
		            // [2] => height
		            // [3] => boolean: true if $url is a resized image, false if it is the original.

		            $img_full=wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID), 'full' );

		            $img_url=$img_full[0];

		            //Ratio of original image 
		            $img_ratio=($img_full[2]>0)?round($img_full[1]/$img_full[2],2):0;


		            $output .='
		                    <!-- Portfolio Item -->     
		                    <div class="gp-item '.$item_overlay['parent_class'].'" data-ratio="'.$img_ratio.'">
		                        <a href="'.$img_url.'" class="lightbox-gallery-item set-bg '.$fill_mode.'" title="'. get_the_title().'">
		                            <img src="'.$thumb_url[0].'" alt="'.get_the_title().'" class="img-responsive">

		                            '.$item_overlay['markup'].'  
		                        </a>
		                    </div>
		                    <!-- /Portfolio Item -->
		            ';
	    		} 
		    } else{
		    	$output.= __('No items found.','toranj');
		    }

		} elseif ( $type == 'array' ) {


			if ( !empty($loop) ) {

				foreach( $loop as $group ) { 

					$group = (Array) $group;
					$term_link = get_term_link( $group['slug'],'owlabgal_album' );

		            $output .='
		                    <!-- Portfolio Item -->     
		                    <div class="gp-item tj-circle-hover">
		                        <a href="'.$term_link.'" class="set-bg">';
		                    $output.=owlab_lazy_image(isset($group['owlabgal_album_image'])?$group['owlabgal_album_image']:false,$group['name'],false);
		                    $output .='<div class="tj-overlay">
		                                <div class="content">
		                                    <div class="circle">
		                                        <i class="fa fa-link"></i>
		                                    </div>
		                                    <div class="details">
		                                        <h4 class="title">'.$group['name'].'</h4>
		                                    </div>  
		                                </div>
		                            </div>  
		                        </a>
		                    </div>
		                    <!-- /Portfolio Item -->
		            ';
	        	}

	        }else{ 
	            $output.= __('No items found.','toranj');
	        }
		}
            
                           
                    
        $output .='</div><!-- /Portfolio wrapper --> 
        	</div><!-- Page main content -->';

        return $output;
        
	}
}


function owlab_getExtraClass( $el_class ) {
	$output = '';
	if ( $el_class != '' ) {
		$output = " " . str_replace( ".", "", $el_class );
	}
	return $output;
}





/**
 * ----------------------------------------------------------------------------------------
 * Debug
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'd' ) ) {
	function d($p,$die=false) {
		
		echo "<pre>";var_dump($p);echo "</pre>";
		if ($die)
			die();
	}
}
