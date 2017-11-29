<?php 
require_once 'Mobile_Detect.php'; 
$detect = new Mobile_Detect;
?>

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

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
    <meta name="viewport" content="width=device-width">
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
    
	 <!-- Custom CSS -->
 <style>
body { 
    background-color: transparent !important;
	color:#fff !important;
}
.container{
	background-color: transparent !important;
	
}

.nav-header{postion:fixed;}
nav .mastheadnav li a {color:#ccc !important; font: 20px arial,sans-serif !important;}
nav .mastheadnav li a:hover{color:#C70509 !important;}
nav .mainnav >li >ul >li >a{color:#000 !important;}

html {
    background: url('_bg.jpg') no-repeat center center fixed;

margin-top:0px !important;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
	color:#DAD6D6;
	
}
h1{
	color:#fff;
	z-index:5;
}
h3{
	color:#fff;
}
html:after{
position:fixed;
    content:"";
    top:0;
    left:0;
    right:0;
    bottom:0;
    background:rgba(0,0,0,0.8);
    z-index:-1;	
}

.parent{position: relative;
		width:100%;
		height:100%;
		}
		
.vertical-center {

  min-height: 100%;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  display: -webkit-flex; /* For Safari */
  -webkit-justify-content: center; /* For Safari */
  -webkit-align-items: center; /* For Safari */
  top:30%;
  
}
.zoomtimeline{
	margin-bottom:auto !important;
	
}
.social_buttons{
	margin-top:5em;
display:inline-block;
/*height:2em;*/

}
.zoomtimeline a{
	letter-spacing: -0.05em;
	font-weight: bolder;
}

 .zoomtimeline.mode-blackwhite .ztm-item .the-heading {
    font-size: 14px;
    font-weight: bold;
    font-family:inherit;
    margin-top: 0;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 12px;
    margin-bottom: 15px; }

 .zoomtimeline.mode-3dslider .details-container > .next-next-item .detail-image, .zoomtimeline.mode-3dslider .details-container > .prev-prev-item .detail-image {
        opacity: 0.15 !important;
    }
		.zoomtimeline.mode-3dslider .details-container > .next-item .detail-image, .zoomtimeline.mode-3dslider .details-container > .prev-item .detail-image {
        opacity: 0.75 !important;
      }
	     .zoomtimeline.mode-3dslider .details-container > .detail .detail-image, .zoomtimeline.mode-3dslider .details-container > .detail .detail-image--border{
			     border-radius: 5px;
				 border:#fff 5px solid; 
		 }
@media (max-width:768px){
	 .zoomtimeline.mode-blackwhite .ztm-item .the-heading {
    font-size: 12px;
    font-weight: bold;
    font-family:inherit;
    margin-top: 0;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 12px;
    margin-bottom: 15px; 
	}
	.social_buttons{
	margin-top:2em;
display:inline-block;
/*height:2em;*/

}
	.goleft{
		margin-left: 16.666666666666664%;
	}
	span{
		display:none !important;
	} 
	.right_essay {
diaplay:block;
position:fixed;
top:0;
left:0;

    height:auto;

  width:100%;
   

	
	
}
	

	
.right_essay {
diaplay:block;
position:fixed;
top:0;
left:0;

    height:30px;

  width:100%;
    

	
	
}
h3{
	font-size: 12px !important;
	color:#fff;
}
h4{
	font-size: 10px !important;
	float:left;
}
	h1{
	font-size: 40px !important;
 
  letter-spacing:-2px !important;
  
}
img.bottom {
	width:30%;
	max-width:50px;
	
}
}
@media (min-width:992px){
	.social_buttons{
	margin-top:5em;
display:inline-block;
/*height:2em;*/

}
	.navbar-inverse{background-color:#222;border-color:#080808}
	.right_essay {
diaplay:block;

    height:152px;
    width: 152px;
    background:#fff;

	border-radius:5px;
	
}
	h1{
	font-size: 45px !important;
 
  letter-spacing:-2px !important;
  
}

}
@media (min-width:1200px){
	.social_buttons{
	margin-top:7em;
display:inline-block;
/*height:2em;*/

}
	
	.navbar-inverse{background-color:#222;border-color:#080808}
	.right_essay {
diaplay:block;

    height:152px;
    width: 152px !important;
    background:#fff;

	border-radius:5px;
	
}
		h1{
			color:#fff;
	font-size: 50px !important;
 
letter-spacing:-2px !important;
  
}

}
h2{
	 letter-spacing:10px !important;
	 font-weight:bold !important;
	 color:#fff !important;
}
img.bottom {
	width:50%;
	max-width:70px;
	
    vertical-align: text-bottom;
	
}
span.newtext{
	color:#fff;
	
}


</style>
	<?php 
	
		wp_head(); 
	

		if (of_get_option('of_th_customcolors', 0) == 1) { 
			get_template_part( 'css/customizedcss', '' );
		}	
	?>


</head>



<body>

<div class="container-fluid">

<div class="fixtop_header">	

   <div class="row">
			<div class="over_menu"><a id="top_nav" href="#" ><i class="fa fa-bars fa-2x pull-left"></i></a><span id="menu_text">Menu</span></div>
           
            <div class="col-md-2 col-xs-6 col-lg-2 pull-right">
            <a href="<?php echo site_url('/home/'); ?>" title="<?php bloginfo('description'); ?>">
                        
<img class="svg-transparent" src=".svg"  alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
							
						</a>
                </div>  
                
                </div>
               <div class="clearfix">
                <div class="row"> 
                 <div class="pull-left  col-sm-12 col-md-4 col-lg-4 social_buttons">
                      <?php
		$dt = new DateTime("now", new DateTimeZone('America/Los_Angeles'));


		?>
         <p class="text-left;"><?php echo $dt->format('F j, Y'); ?></p>
                     </div>
               <div  class="col-md-4 col-xs-12 col-lg-4 pull-right social_buttons"> 
      <ul>
        	<?php if (of_get_option('of_socialhead' ) == 0) { ?>
							<li class="pull-right social_header">
								<?php if ( of_get_option('of_th_facebook') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_facebook'); ?>" target="_blank" data-toggle="tooltip" title="<?php _e('Facebook', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-facebook pull-left"></i>
									</a>
								<?php } ?>

								<?php if ( of_get_option('of_th_twitter') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_twitter'); ?>" target="_blank" title="<?php _e('Twitter', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-twitter pull-left"></i>
									</a>
								<?php } ?>
                                
								<?php if ( of_get_option('of_th_ytube') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_ytube'); ?>" target="_blank" title="<?php _e('Youtube', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-youtube pull-left"></i>
									</a>
								<?php } ?>	
                                <?php if ( of_get_option('of_th_vimeo') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_vimeo'); ?>" target="_blank" title="<?php _e('Vimeo', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-vimeo-square pull-left"></i>
									</a>
								<?php } ?>

								<?php if ( of_get_option('of_th_gplus') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_gplus'); ?>" target="_blank" title="<?php _e('Google+', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-google-plus pull-left"></i>
									</a>
								<?php } ?>

								<?php if ( of_get_option('of_th_linkedin') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_linkedin'); ?>" target="_blank" title="<?php _e('LinkedIn', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-linkedin pull-left"></i>
									</a>
								<?php } ?>

								<?php if ( of_get_option('of_th_pinterest') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_pinterest'); ?>" target="_blank" title="<?php _e('Pinterest', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-pinterest pull-left"></i>
									</a>
								<?php } ?>
								
								<?php if ( of_get_option('of_th_tumblr') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_tumblr'); ?>" target="_blank" title="<?php _e('tumblr', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-tumblr"></i>
									</a>
								<?php } ?>							
								
								<?php if ( of_get_option('of_th_instagram') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_instagram'); ?>" target="_blank" title="<?php _e('Instagram', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-instagram pull-left"></i>
									</a>
								<?php } ?>							
								
								
								

								<?php if ( of_get_option('of_th_email') <> "" ) { ?>
									<a href="<?php echo of_get_option('of_th_email'); ?>" target="_blank" title="<?php _e('Subscribe by Email', 'gabfire'); ?>" rel="nofollow">
										<i class="fa fa-envelope-o pull-left"></i>
									</a>
								<?php } ?>	
                                							
<?php if ( of_get_option('of_rssaddr') <> "" ) { ?>
								<a href="<?php echo of_get_option('of_rssaddr'); ?>"
                                title="<?php _e('Site feed', 'gabfire'); ?> target="_blank"" rel="nofollow">
									 <i class="fa fa-rss pull-left"></i></a>
                               <?php }
                                else { ?><a href="<?php echo bloginfo('rss2_url');?>" title="<?php _e('Site feed', 'gabfire'); ?> target="_blank"" rel="nofollow">
									 <i class="fa fa-rss pull-left"></i></a>
                                
                                <?php } ?>
								
								
							<?php } ?>						
						</li>
						<!--<li class="pull-right gabfire_headersearch"> <a data-toggle="modal" href="#searchModal"><i class="fa fa-search"></i> <?php //_e('Search','gabfire'); ?></a></li>-->
					</ul>
				
            </div> 
            
                      </div>  
                      <div class="row">
                     
                     <div class="headerbanner col-sm-12 col-md-6 col-lg-6 pull-right">
    
         
         </div>
        </div>
                      </div>
                        
                      
             
             <div id="top_menu"><?php include("top_navigation.php"); ?></div>
	

 
    
 </div>


     


</div>

<div class="clearfix"></div>