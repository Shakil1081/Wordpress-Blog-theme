<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Graphic_agency
 */

?>
<?php 
$tiptitle = get_field( "top_slogan" );
$home_pahe = get_field( "home_pahe_" );
$title_ = get_field( "title_" );
$home_page_date = get_field( "home_page_date" );
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
						
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				graphic_agency_posted_on();
				graphic_agency_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php graphic_agency_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'graphic-agency' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'graphic-agency' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
							
						<!-- content -->
					</div>
					<!-- primary -->
				</div>
				<!-- container -->
				</div>
				</div>
				</div>



