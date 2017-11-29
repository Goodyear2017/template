<?php
/*
Template Name Posts: image scroll
*/
?>
<?php include ('header_specialreport_scrolling_image.php'); ?>

<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
		$author_id = $wp_query->post->post_author;
	/* Assing custom field values to variables */
	$post_layout = get_post_meta($postid, 'gabfire_post_template', true);
	$subtitle = get_post_meta($postid, 'subtitle', true);

	
	/* Post lead - used for all post layouts*/ ?>
<div class="container">

			<section class="row">
				<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 text-center">
					
						
						
						<p class="post-datecomment">
							<?php
						//echo the_author_meta( 'user_nicename', $author_id );
					//$authorlink = '<a href="'.get_author_posts_url(get_the_author_meta($author_id)).'" rel="author" class="author vcard"><span class="fn">'. get_the_author_meta( 'display_name', $author_id ). '</span></a>';
							
							
							echo '<p class="text-center">'.get_the_time('F j, Y g:i a').'</p>';
							?>
                           
                           
							
						</p>
						
						
					
				</div>
			</section>

			
	
	
	
	<?php
	/* Set correct classes based on post layout (fullwidth/leftsidebar or default) to adjust the layout below */
		
			$outer_class = 'fullwidth_wrapper';
			$inner_class = 'col-md-12';
			?>
		
		
				<section class="row <?php echo $outer_class; ?>">
					<div class="post-wrapper <?php echo $inner_class; ?>">		
						<div class="flex flex--center">
                        <div class="col-md-10 col-xs-12 body-text">
							<?php get_template_part('loop', 'special'); ?>
							</div>
                            </div>
					</div><!-- col-md-8 -->
					
					<div class="clearfix hidden-lg hidden-md"></div>

					
				</section>
	
<?php get_footer(); ?>
</div>
