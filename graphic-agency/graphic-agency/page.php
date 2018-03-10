<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Graphic_agency
 */

get_header(); 
$tiptitle = get_field( "top_slogan" );
$home_pahe = get_field( "home_pahe_" );
$title_s = get_field( "title_" );
$custom_title = get_field( "home_page_date" );
?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Graphic_agency
 */

?>

  <?php if( $tiptitle ) { ?>
  <div class="row">
   <div id="blue-bar">
		<div class="slogan container"><?php echo $tiptitle ?></div>
	</div>
</div>
     <?php }?>



	<?php if( $home_pahe ) { ?>
	<div class="row tip-title-badcam">
		<div class="container">
			<header class="page-header clearfix">
				<h1 class="page-title breadcon"><?php echo $home_pahe; ?></h1>
			</header>
		</div>
	</div>
     <?php }?>	
 
	<div class="container">
		<!-- Home page Title section
			=========================================== -->
			
			<?php if($title_s) { ?>
						<div class="col-sm-12">
							<div class="row">
									<div id="logo">
											<h1><?php echo $title_s;?></h1>
												  <div class="date"><?php echo $custom_title;?></div>
												</div>
							</div>

						</div>
              <?php }?>	

	<div class="col-sm-12">
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
						<div class="primary" id="skip">
								<?php if($title_) { ?>
		<div class="col-sm-12">
			<div class="row">
				<div id="logo">
					<a href="#" class="webTital">
						<h1>
							<?php echo $title_;?>
						</h1>
					</a>
					<div class="date">
						<?php echo $home_page_date;?>
					</div>
				</div>
			</div>

		</div>
		<?php }?>
		
	 <!-- Start the Loop. -->
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Test if the current post is in category 3. -->
<!-- If it is, the div box is given the CSS class "post-cat-three". -->
<!-- Otherwise, the div box is given the CSS class "post". -->

<?php if ( in_category( '3' ) ) : ?>
	<div class="post-cat-three">
<?php else : ?>
	<div class="post">
<?php endif; ?>


<!-- Display the Title as a link to the Post's permalink. -->

<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


<!-- Display the Post's content in a div box. -->

<div class="entry">
	<?php the_content(); ?>
</div>


<!-- Display a comma separated list of the Post's Categories. -->

<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
</div> <!-- closes the first div box -->


<!-- Stop The Loop (but note the "else:" - see next line). -->

<?php endwhile; else : ?>


<!-- The very first "if" tested to see if there were any Posts to -->
<!-- display.  This "else" part tells what do if there weren't any. -->
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


<!-- REALLY stop The Loop. -->
<?php endif; ?>
							
						<!-- content -->
					</div>
					<!-- primary -->
				</div>
				<!-- container -->
				</div>
				</div>
				</div>




<?php
get_footer();
