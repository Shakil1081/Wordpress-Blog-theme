<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Graphic_agency
 */

get_header(); 
$layout = get_field( "common_postlayout" );
$tiptitle = get_field( "post_slogan" );
$home_pahe = get_field( "second_slogan" );
$custom_title = get_field( "custom_title" );
?>

 <?php if( $tiptitle ) { ?>
   <div id="blue-bar">
		<div class="slogan container"><?php echo $tiptitle ?></div>
	</div>
     <?php }?>
	 
	 <?php if( $home_pahe ) { ?>
	<div class="row tip-title-badcam">
		<div class="container">
			<header class="page-header clearfix">
				<h1 class="page-title container breadcon"><?php echo $home_pahe; ?></h1>
			</header>
		</div>
	</div>
     <?php }?>
	<div class="container">
		<!-- Home page Title section
			=========================================== -->
			<!-- Home page Title section
			=========================================== -->
			
			<?php if($title_) { ?>
						<div class="col-sm-12">
							<div class="row">
									<div id="logo">
											<a href="#" class="webTital"><h1><?php echo $title_;?></h1></a>
												  <div class="date"><?php echo $home_page_date;?></div>
												</div>
							</div>

						</div>
              <?php }?>	
			

		<div class="row" id="primary">
		<!-- SIDEBAR
			================================================== -->
			<div class="col-sm-3 leftside-bar">
				<div class="row">

					<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar( 'sidebar-11' ); ?>
					</aside><!-- #secondary -->
				</div>
				</div>
<div id="content" class="col-sm-9">
						<!-- Home page slider section 
			=========================================== -->	
<?php if( $layout === "full-Image-only") { 
   get_template_part('template-parts/p_full_img');
 }
  if($layout === "slider-post") { 
	 get_template_part('template-parts/p_slider');
 }
  if($layout === "right-Image-only") { 
	get_template_part('template-parts/p_half_img');
 }
  if($layout ==="compost") { 
	 get_template_part('template-parts/p_commt');
	
 }?>
	 
</div>
					<!-- container -->
<?php
get_footer();
