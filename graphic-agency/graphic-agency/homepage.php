<?php

 /* Template Name: Home page */
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Graphic_agency
 */

get_header(); ?>


	<!-- MAIN CONTENT
	================================================== -->
<?php 
$tiptitle = get_field( "top_slogan" );
$home_pahe = get_field( "home_pahe_" );
$title_ = get_field( "title_" );
$home_page_date = get_field( "home_page_date" );
?>

	<?php if( $tiptitle ) { ?>
	<div class="row">
		<div id="blue-bar">
			<div class="slogan container">
				<?php echo $tiptitle ?>
			</div>
		</div>
	</div>
	<?php }?>
	<?php if( $home_pahe ) { ?>
	<div class="row tip-title-badcam">
		<div class="container">
			<header class="page-header clearfix">
				<h1 class="page-title breadcon">
					<?php echo $home_pahe; ?>
				</h1>
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
		<div class="col-sm-12">
			<div class="row" id="primary">
				<!-- SIDEBAR
			================================================== -->
				<div class="col-sm-3 leftside-bar">
					<div class="row">
						<aside id="secondary" class="widget-area">
							<?php dynamic_sidebar( 'sidebar-11' ); ?>
						</aside>
						<!-- #secondary -->
					</div>
				</div>
				<div id="content" class="col-sm-9">
					<!-- Home page slider section 
			=========================================== -->
					<div class="primary" id="skip">
						<section class="toppart">
								<div class="col-sm-8">
									<!-- Begin Carousel-->

			<?php
			$args = array('category_name'    => 'slider','posts_per_page' => '4');
			$the_query = new WP_Query ( $args );
			?>


			<div id="carouselBlog" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">

					<!-- the Loop -->
					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li data-target="#carouselBlog"
						    data-slide-to="<?php echo $the_query->current_post; ?>"
						    class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
					<?php endwhile; endif; ?>

				</ol>

				<!-- rewind loop back to zero without losing data-->
				<?php rewind_posts(); ?>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) :
						$the_query->the_post(); ?>

						<?php
						$thumbnail_id   = get_post_thumbnail_id();
						$thumbnail_url  = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
						$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attatchment_image_alt', true );
						?>

						<div class="item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">							
							             <?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(full); ?>
												</a>
												<?php endif; ?>
												<div class="carousel-caption">
													<a class="category-name captionar" href="#">
														<span class="daycolor" style="background:  RED;">&nbsp;</span>
														<span>art&amp; Culture</span>
													</a>
													<h3> <?php the_title(); ?></h3>
													<div class="abstract"><?php the_excerpt(); ?></div>
												</div>
						</div>

					<?php endwhile;
					endif; ?>

				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carouselBlog" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carouselBlog" role="button" data-slide="next">
					<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--			End Image Carousel-->


								</div>
								<div class="col-sm-4 slidebar">
									<ul class="nav nav-tabs bloglist">
										<li class="active">
											<a data-toggle="tab" href="#s1">
												<i class="fa fa-newspaper-o ilg"></i>&nbsp; Latest
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#s2">
												<i class="fa fa-comments-o ilg"></i>&nbsp; Popular
											</a>
										</li>
									</ul>

									<div class="tab-content tbsid">
										<div id="s1" class="tab-pane fade in active">

										<?php $the_query = new WP_Query(array(
										'category_name'    => 'latest',
										'posts_per_page' => '6',
										'order' => 'DESC', // Show only the published posts
										));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										
										
										     <div class="story-info">
											 <a class="category-name arts texunset" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<span class="daycolor" style="background:<?php the_field('colorpost'); ?>;">&nbsp;</span>
														<span>
															<?php the_title(); ?>
														</span>
													</a>
													<div class="date">
														<?php the_time('F jS, Y') ?> &nbsp;|&nbsp;
														<i class="fa fa-signal"></i>
													</div>
												</div>
												<hr>
												

										<?php endwhile; ?>
										<?php endif; ?>
									
												<div class="story-more">
													<a href="#" data-category="home_latest" data-action="btn_more">More »</a>
												</div>
										</div>
										<div id="s2" class="tab-pane fade">
											<?php $the_query = new WP_Query(array(
										'category_name'    => 'popular',
										'posts_per_page' => '6',
										'order' => 'DESC', // Show only the published posts
										));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										
										
										     <div class="story-info">
											 <a class="category-name arts texunset" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<span class="daycolor" style="background:<?php the_field('colorpost'); ?>;">&nbsp;</span>
														<span>
															<?php the_title(); ?>
														</span>
													</a>
													<div class="date">
														<?php the_time('F jS, Y') ?> &nbsp;|&nbsp;
														<i class="fa fa-signal"></i>
													</div>
												</div>
												<hr>
												

										<?php endwhile; ?>
										<?php endif; ?>
												
												<div class="story-more">
													<a href="#" data-category="home_latest" data-action="btn_more">More »</a>
												</div>
										</div>
									</div>
								</div>
						</section>
						<!-- Home page Srory section 
			=========================================== -->
						<section class="sorypart">

							<div class="col-sm-8">
								<div class="row">


									<?php $the_query = new WP_Query(array( 'category_name'    => 'story','posts_per_page' => '4'));?>
									<?php if( $the_query->have_posts() ): ?>
									<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
									<div class="col-sm-6">
										<div class="story-block">

											<div class="story-photo">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(medium); ?>
												</a>
												<?php endif; ?>

											</div>
											<!--/.story-photo-->

											<div class="category-name arts">
												<span class="daycolor" style="background:<?php the_field('colorpost'); ?>;">&nbsp;</span>
												<span><?php the_category(' > '); ?></span>
											</div>
											<div class="story-info">
												<h3>
													<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<?php the_title(); ?>
													</a>
												</h3>
												<div class="date">
													<?php the_time('F jS, Y') ?> |
													<i class="fa fa-signal"></i>
												</div>
												<div class="abstract">
													<?php the_excerpt(); ?>
												</div>
											</div><!--/story-info-->
											
										</div>
									</div>
									<?php endwhile; ?>
									<?php endif; ?>

									<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


								</div>
							</div>
							<div class="col-sm-4 slidebar">
								<div class="homepage-feature-side">
									<?php  get_template_part('template-parts/event'); ?>
									<?php  get_template_part('template-parts/news'); ?>
									<!--/.sidebar-block-->

								</div>
								</div>


						</section>
						<!-- Home page blog section 
			=========================================== -->
						</div>
						<div class="clearfix"></div>
						<section class="homblog">
							<div class="col-sm-12">
								<!-- Tab menu blog list home page -->
								<ul class="nav nav-tabs bloglist">
									<li class="active">
										<a data-toggle="tab" href="#home">
											<i class="fa fa-clock-o ilg" aria-hidden="true"></i>&nbsp; Latest
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu1">
											<i class="fa fa-check-circle-o ilg" aria-hidden="true"></i>&nbsp; Editor's Pick
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu2">
											<i class="fa fa-youtube-play ilg" aria-hidden="true"></i>&nbsp; Audio/Video
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu3">
											<i class="fa fa-camera-retro ilg" aria-hidden="true"></i>
											Photography
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu4">
											<i class="fa fa-signal ilg" aria-hidden="true"></i>
											Popular
										</a>
									</li>
								</ul>

								<!-- tab-content start -->
								<div class="tab-content">
									<div id="home" class="tab-pane fade in active">

										<?php $the_query = new WP_Query(array(															
															'posts_per_page' => '6',
															'post_status' => 'publish',
															'order' => 'DESC', // Show only the published posts
															));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										<div class="row widthpost">
											<div class="col-sm-2 thuming">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(thumbnail); ?>
												</a>
												<?php endif; ?>
											</div>
											<!-- thuming image-->
											<div class="col-sm-10 blogexpected">
												<div class="story-block">
													<span class="daycolor expost" style="background:<?php the_field('colorpost'); ?>;">.</span>
													<h3>
														<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="date">
														<?php the_author(); ?>
														<span class="byline"></span>
														<?php the_time('F jS, Y') ?>
													</div>
													<div class="abstract">
														<?php the_excerpt(); ?>
													</div>
												</div>
												<!-- story-block -->
											</div>
											<!-- col-sm-10 -->
											<!--<div class="col-sm-2 editingo">
<span class="label editorpick">Editor's Pick</span>
</div>-->
										</div>


										<?php endwhile; ?>
										<?php endif; ?>

										<!-- widthpost End-->
										<hr>
									</div>
									<div id="menu1" class="tab-pane fade">

										<?php $the_query = new WP_Query(array(
										                    'category_name'    => 'editors-pick',
															'posts_per_page' => '6',
															'post_status' => 'publish',
															'order' => 'DESC', // Show only the published posts
															));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										<div class="row widthpost">
											<div class="col-sm-2 thuming">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(thumbnail); ?>
												</a>
												<?php endif; ?>
											</div>
											<!-- thuming image-->
											<div class="col-sm-10 blogexpected">
												<div class="story-block">
													<span class="daycolor expost" style="background:<?php the_field('colorpost'); ?>;">.</span>
													<h3>
														<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="date">
														<?php the_author(); ?>
														<span class="byline"></span>
														<?php the_time('F jS, Y') ?>
													</div>
													<div class="abstract">
														<?php the_excerpt(); ?>
													</div>
												</div>
												<!-- story-block -->
											</div>
											<!-- col-sm-10 -->
											<!--<div class="col-sm-2 editingo">
<span class="label editorpick">Editor's Pick</span>
</div>-->
										</div>


										<?php endwhile; ?>
										<?php endif; ?>
									</div>
									<div id="menu2" class="tab-pane fade">

										<?php $the_query = new WP_Query(array('category_name'    => 'audio-video',
										'post_status' => 'publish'));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										<div class="row widthpost">
											<div class="col-sm-2 thuming">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(thumbnail); ?>
												</a>
												<?php endif; ?>
											</div>
											<!-- thuming image-->
											<div class="col-sm-10 blogexpected">
												<div class="story-block">
													<span class="daycolor expost" style="background:<?php the_field('colorpost'); ?>;">.</span>
													<h3>
														<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="date">
														<?php the_author(); ?>
														<span class="byline"></span>
														<?php the_time('F jS, Y') ?>
													</div>
													<div class="abstract">
														<?php the_excerpt(); ?>
													</div>
												</div>
												<!-- story-block -->
											</div>
											<!-- col-sm-10 -->
											<!--<div class="col-sm-2 editingo">
<span class="label editorpick">Editor's Pick</span>
</div>-->
										</div>


										<?php endwhile; ?>
										<?php endif; ?>
									</div>
									<div id="menu3" class="tab-pane fade">

										<?php $the_query = new WP_Query(array(
															'category_name'    => 'photography',
															'posts_per_page' => '6',
															'post_status' => 'publish',
															'order' => 'DESC', // Show only the published posts
															));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										<div class="row widthpost">
											<div class="col-sm-2 thuming">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(thumbnail); ?>
												</a>
												<?php endif; ?>
											</div>
											<!-- thuming image-->
											<div class="col-sm-10 blogexpected">
												<div class="story-block">
													<span class="daycolor expost" style="background:<?php the_field('colorpost'); ?>;">.</span>
													<h3>
														<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="date">
														<?php the_author(); ?>
														<span class="byline"></span>
														<?php the_time('F jS, Y') ?>
													</div>
													<div class="abstract">
														<?php the_excerpt(); ?>
													</div>
												</div>
												<!-- story-block -->
											</div>
											<!-- col-sm-10 -->
											<!--<div class="col-sm-2 editingo">
<span class="label editorpick">Editor's Pick</span>
</div>-->
										</div>


										<?php endwhile; ?>
										<?php endif; ?>


									</div>
							
									<div id="menu4" class="tab-pane fade">


										<?php $the_query = new WP_Query(array(
															'category_name'    => 'popular',
															'posts_per_page' => '6',
															'post_status' => 'publish',
															'order' => 'DESC', // Show only the published posts
															));?>
										<?php if( $the_query->have_posts() ): ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
										<div class="row widthpost">
											<div class="col-sm-2 thuming">
												<?php if ( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_post_thumbnail(thumbnail); ?>
												</a>
												<?php endif; ?>
											</div>
											<!-- thuming image-->
											<div class="col-sm-10 blogexpected">
												<div class="story-block">
													<span class="daycolor expost" style="background:<?php the_field('colorpost'); ?>;">.</span>
													<h3>
														<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<div class="date">
														<?php the_author(); ?>
														<span class="byline"></span>
														<?php the_time('F jS, Y') ?>
													</div>
													<div class="abstract">
														<?php the_excerpt(); ?>
													</div>
												</div>
												<!-- story-block -->
											</div>
											<!-- col-sm-10 -->
											<!--<div class="col-sm-2 editingo">
<span class="label editorpick">Editor's Pick</span>
</div>-->
										</div>


										<?php endwhile; ?>
										<?php endif; ?>


									</div>
								</div>
								<!-- tab container end-->
							</div>
						</section>

						</div>
						<!-- content -->
					</div>
					<!-- primary -->
				</div>
				<!-- container -->
			</div>


			<?php
get_footer();