<?php error_reporting(E_ALL);?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
   <?php if ( has_post_thumbnail())
     {
     $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>
<meta property="og:image" content="<?php echo $fb_image[0];?>" />
	
	<title><?php wp_title(); ?></title>   
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( of_get_option('of_rssaddr') <> '' ) { echo of_get_option('of_rssaddr'); } else { echo bloginfo('rss2_url'); } ?>" />	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	

	
</script>


	<?php 
	
		wp_head(); 
	
		if (of_get_option('of_th_customcolors', 0) == 1) { 
			get_template_part( 'css/customizedcss', '' );
		}	
	?>



<style>
@media only screen and (min-width: 767px){
.fa-bars{
	color:#fff;
}
html body{
	width:100%;
	hight:100%;
}
 h1 > a {
  text-decoration: none;
  color: rgba(0,0,0,.4);
  z-index: 1;
}
h1 > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background: #9CF5A6;
  visibility: hidden;
  border-radius: 5px;
  transform: scaleX(0);
  transition: .25s linear;
}
h1 > a:hover:before,
h1 > a:focus:before {
  visibility: visible;
  transform: scaleX(1);
}
</style>
</head>

<?php 
$do_not_duplicate = '';
global $do_not_duplicate;
?>

<body <?php body_class(); ?>>


<div class="container-fluid fixtop_header">	
    	<!--mobile header-->
<div class="navbar-fixed-top">

<div class="visible-xs navbar-fixed-top" id="mobile-header">
<div style="z-index:200;float:left;"><?php include("top_navigation_1.php"); ?> </div>

<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
<img  src=""  
style="position:fixed;width:180px; height: auto;left:50%;transform:translateX(-50%);z-index:300;margin-top:10px;" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/ >
</a>

<div  style="position: fixed;right:0;z-index:200;">
<?php include('signup.php'); ?>
</div>
</div>
</div>
<!--end mobile header---->
		

<div class="col-lg-3 col-md-4 col-xs-12 col-sm-4 pull-left hidden-xs" style="position: absolute;
   top: 15px;
   left: 0px !important; z-index:300;">
             
             
       <?php include("top_navigation_2.php"); ?> 
       </div>
            <div class="col-md-2 col-sm-4 col-lg-2 pull-right hidden-xs">
            <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
                        
							<img class="svg-transparent" src=""  alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
							
						</a></div>
     

  <div class="visible-xs" style="display:block;height:50px;"><p>&nbsp;</p></div>




  <?php 
	
	 $title = isset( $post->post_title ) ? $post->post_title : '';
	
	$half_img1=get_post_meta( $post->ID,'scroll_img_half1', true);
	$half_img2=get_post_meta( $post->ID,'scroll_img_half2', true);
	$half_img11=get_post_meta( $post->ID,'scroll_img_half11', true);
	$half_img22=get_post_meta( $post->ID,'scroll_img_half22', true);
$sub_titles = get_post_meta( $post->ID,'sub_title');
	 $author_id=isset( $post->post_author ) ? $post->post_author : '';
	  $authord = get_the_author_meta( 'display_name', $author_id);
	  $authorlink = '<a href="'.get_author_posts_url($author_id).'" rel="author" class="author vcard"><span class="fn">'. get_the_author_meta( 'display_name', $author_id ). '</span></a>';
	?>
	 




<section class="full_screen_img">
  

<!--<canvas id="manCanvas" width="800" height="400"></canvas>-->

<img id="half1" src="<?php echo $half_img1;?>"   class="fade-in-up emp-question-set" width="25%" height="100%" />
<img id="half2"  src="<?php echo $half_img11;?>"   class="fade-in-down emp-question-set" width="25%" height="100%"  />
<img id="half11"  src="<?php echo $half_img2;?>"   class="fade-in-up emp-question-set" width="25%" height="100%"  />
<img id="half22"  src="<?php echo $half_img22;?>"   class="fade-in-down emp-question-set" width="25%" height="100%"  />

<div class="col-md-10 col-md-push-1 full_screen_img_text header_text  fade-in-down">

     <h1>
	  <?php
      if(strpos($title, ':') !== false){
		  $words=array(":","Supports");
				$replace=array(":<br/>","Supports<br/>");
				echo (str_replace($words,$replace,$title));
	 
	  }?>
      
      </h1>
  
       <h4><?php echo  $authorlink;  ?></h4>

</div>

 
 
    </section>

<p class="author_bottom pull-right"><?php echo get_post_meta($post->ID, 'photo_author', true); ?></p>   
 </div>



<div class="clearfix"></div>

  
