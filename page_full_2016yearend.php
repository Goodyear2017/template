<?php

/*
Template Name: Yearend-2016
*/?>
<div class="parent">

<?php include ('header_full_2016yearend.php');
?>





<div class="vertical-center">
 
<div class="row col-md-12 col-xs-12">
  <div class="text-center"><h1 class="text-center"><?php echo the_title(); ?></h1>

  </div>
  
</div>

<?php 

if($detect->isTablet()){
	echo '<div class="zoomtimeline mode-3dslider auto-init" data-options="{
startItem: 1,
mode_3dslider_item_width:\'500\',
 mode_3dslider_item_height: \'273\',
 color_highlight: \'rgba(123, 123, 167, 1)\',}">';
	
}
elseif( $detect->isMobile() && !$detect->isTablet()){
echo '<div class="zoomtimeline mode-3dslider auto-init" data-options="{
startItem: 1,
mode_3dslider_item_width:\'300\',
 mode_3dslider_item_height: \'164\',
 color_highlight: \'rgba(123, 123, 167, 1)\',}">';
		
	
}else{
echo '<div class="zoomtimeline mode-3dslider auto-init" data-options="{
startItem: 1,
mode_3dslider_item_width:\'750\',
 mode_3dslider_item_height: \'410\',
 color_highlight: \'rgba(123, 123, 167, 1)\',}">';	
}
?>
                    
                     <div class="items">
                  
                    <?php 
					global $post;
					
					$post_array = array();
					
				
					$the_query = new WP_Query(array(
   'post__in' => $post_array, 
    'posts_per_page' => -1,
	'orderby' => 'rand',
    )); 
					if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();
$subcategory_id=array();
					$subcategories = get_categories(array( 'child_of' => 8));
					 foreach($subcategories as $subcategory){
					$subcategory_id[]=$subcategory->cat_ID;
					
		
					
					 }
					 $post_categories = get_the_category(); 
		$post_category_id=array();
		foreach($post_categories as $post_category){
					$post_category_id[]=$post_category->cat_ID;
					
					 }
				
					 	
		
$post_cat = array_intersect($subcategory_id, $post_category_id);

$post_cat_id=array_values($post_cat);
$post_cat_name=get_cat_name($post_cat_id[0]);



$coolcustom = get_post_meta($post->ID, 'messages', true);
$post_url=	get_permalink();								
$bitly= get_post_meta($post->ID, 'bitly', true);
if($bitly !=''){
$post_url=	$bitly;
}else{
	$post_url=	get_permalink();	
}
$post_title=get_the_title();		

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'th-fea1', true);
$thumb_url = $thumb_url_array[0];

					?>
 
         
 
                <div class="ztm-item" data-image="<?php echo $thumb_url; ?>">
 
 
                    <div class="hex-desc-con">
 
                        <div class="hex-desc">
                          <?php echo '<a href="'.esc_url(get_category_link($post_cat_id[0])).'">'.$post_cat_name.'</a>'; ?>
                        </div>
                    </div>
 
                    <div class="ztm-content">
                        <h3 class="the-heading"><a href="<?php echo $post_url; ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
 
                        <p>
                          <?php if($coolcustom !==''){
								echo '<p>'.$coolcustom.'</p>';}else{
							echo '<p>' . string_limit_words(100) . '&hellip;</p>';
								} ?>
                        </p>
                    </div>
 
 
                </div>
 
         
 
    
 
<?php endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
?>
        
   </div>  
            <!-- the preloader START -->
            <div class="preloader-wave">
            <?php 
			$i=0; 
			do{
               echo '<span></span>';
                
			}while($i++<11);
			?>
            </div>
            <!-- the preloader END -->   
        
        
        
 </div>    



</div>
</div>






