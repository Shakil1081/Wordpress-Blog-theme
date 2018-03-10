<?php
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
	<div class="row tip-title-badcam">
		<div class="container">
			<header class="page-header clearfix">
				<h1 class="page-title container breadcon">"The Youth Of A Nation Are The Trustees Of Posterity." - Benjamin Disraeli</h1>
			</header>
		</div>
	</div>
	<div class="container">
		<!-- Home page Title section
			=========================================== -->
		<div class="col-sm-12">
					<div class="row">
							<div id="logo">
									<a href="#" class="webTital"><h1>HARVARD <span>Gazette</span> </h1></a>
										  <div class="date">Friday, June 26, 2015</div>
										</div>
					</div>

			</div>

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
							<section class="toppart">
								<div class="">
									<div class="col-sm-8">
										<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="false" id="myCarousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
												<li data-target="#myCarousel" data-slide-to="2"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner">
												<div class="item active">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pope.jpg" alt="Los Angeles" style="width:100%;">
													<div class="carousel-caption">
														<a class="category-name captionar" href="#">
															<span class="daycolor" style="background:  RED;">&nbsp;</span>
															<span>art&amp; Culture</span>
														</a>
														<h3> The art of political persuasion</h3>
														<p class="abstract">New research says ‘cognitive dissonance’ helps to ingrain political attitudes</p>
													</div>
												</div>

												<div class="item">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pope.jpg" alt="Chicago" style="width:100%;">
													<div class="carousel-caption">
														<a class="category-name captionar" href="#">
															<span class="daycolor" style="background:  RED;">&nbsp;</span>
															<span>art&amp; Culture</span>
														</a>
														<h3> The art of political persuasion</h3>
														<p class="abstract">New research says ‘cognitive dissonance’ helps to ingrain political attitudes</p>
													</div>
												</div>

												<div class="item">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pope.jpg" alt="New york" style="width:100%;">
													<div class="carousel-caption">
														<a class="category-name captionar" href="#">
															<span class="daycolor" style="background:  RED;">&nbsp;</span>
															<span>art&amp; Culture</span>
														</a>
														<h3> The art of political persuasion</h3>
														<p class="abstract">New research says ‘cognitive dissonance’ helps to ingrain political attitudes</p>
													</div>
												</div>
											</div>

											<!-- Left and right controls -->
											<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>


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
											
											
<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 6, // Number of recent posts thumbnails to display
        'post_status' => 'publish',
        'tag' => 'Latest'		// Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>	
						<div class="story-info">
						<a class="category-name arts texunset" href="<?php echo get_permalink($post['ID']) ?>">
						<span class="daycolor" style="background:  RED;">&nbsp;</span>
						<span><?php echo $post['post_title'] ?></span>
						</a>
						<div class="date"><?php the_time('F jS, Y') ?> &nbsp;|&nbsp;<i class="fa fa-signal"></i> </div>
						</div>
						<hr>
    <?php endforeach; wp_reset_query(); ?>
												<div class="story-more">
													<a href="#" data-category="home_latest" data-action="btn_more">More »</a>
												</div>
											</div>
											<div id="s2" class="tab-pane fade">
													<?php
													$recent_posts = wp_get_recent_posts(array(
													'numberposts' => 6, // Number of recent posts thumbnails to display
													'post_status' => 'publish',
													'tag' => 'Popular'		// Show only the published posts
													));
													foreach($recent_posts as $post) : ?>	
													<div class="story-info">
													<a class="category-name arts texunset" href="<?php echo get_permalink($post['ID']) ?>">
													<span class="daycolor" style="background:  RED;">&nbsp;</span>
													<span><?php echo $post['post_title'] ?></span>
													</a>
													<div class="date"><?php the_time('F jS, Y') ?> &nbsp;|&nbsp;<i class="fa fa-signal"></i> </div>
													</div>
													<hr>
													<?php endforeach; wp_reset_query(); ?>
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
																			<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
					<div class="col-sm-6">
												<div class="story-block">

													<div class="story-photo">
														<?php if ( has_post_thumbnail() ) : ?>
														<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
														<img class="w100" src="<?php $thumb_id = get_post_thumbnail_id($post['ID']); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
														echo $thumb_url[0]; ?>"/>
														</a>
														<?php endif; ?>
													</div>
													<!--/.story-photo-->

													<a class="category-name arts" href="#">
														<span class="daycolor" style="background:  RED;">&nbsp;</span>
														<span>art&amp; Culture</span>
													</a>
													<div class="story-info">
														<h3>
															<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
														</h3>
														<div class="date"><?php the_time('F jS, Y') ?> | <i class="fa fa-signal"></i>
														</div>
														<div class="abstract">
														<?php the_excerpt(); ?>
														</div>
													</div>
													<!--/story-info-->
												</div>
											</div>
											
										
    <?php endforeach; wp_reset_query(); ?>
	
										</div>
									<div class="col-sm-4 slidebar">
										<div class="homepage-feature-side">
											<div class="sidebar-block story-simple-list">
												<h3 class="header events">
													<i class="fa fa-calendar fa-2" aria-hidden="true"></i>&nbsp;&nbsp; Events</a>
												</h3>

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_events" data-action="title">Pop Up Performance with Rebecca Kreshak and Penny Larsen</a>
														</h3>
														<div class="date">June 26, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_events" data-action="title">Pop Up Performance with the Cambridge Suzuki School of Music</a>
														</h3>
														<div class="date">June 26, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_events" data-action="title">Bioinspired Robotics: Softer, Smarter, Safer</a>
														</h3>
														<div class="date">June 29, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_events" data-action="title">Pop-Up Performance with the Fine and Dandy Trio</a>
														</h3>
														<div class="date">June 30, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_events" data-action="title">Visible Solutions: How Neuroimaging Helps Law Re-envision Pain</a>
														</h3>
														<div class="date">June 30, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->


												<div class="story-more">
													<a href="#" data-category="home_events" data-action="btn_more">More »</a>
												</div>
												<!--/.story-more-->
												<!-- put the filter-anchor here -->


											</div>
											<!--/.sidebar-block-->

											<div class="sidebar-block story-simple-list newsplus">
												<h3 class="header newsplus">
													<i class="fa fa-file-text fa-2" aria-hidden="true"></i>&nbsp;&nbsp; News+</h3>
												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_newsplus" data-action="title">Community gathers to mourn Charleston victims, combat racism</a>
														</h3>
														<div class="date">June 25, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_newsplus" data-action="title">New target identified for inhibiting malaria parasite invasion</a>
														</h3>
														<div class="date">June 25, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->

												<div class="story-block">
													<div class="story-info">
														<h3>
															<a href="#" data-category="home_newsplus" data-action="title">A MOOC spreads the word on global health quality</a>
														</h3>
														<div class="date">June 24, 2015</div>
													</div>
													<!--/.story-info-->
												</div>
												<!--/.story-block-->


												<div class="story-more">
													<a href="#" data-category="home_newsplus" data-action="btn_more">More »</a>
												</div>
												<!--/.story-more-->

											</div>
											<!--/.sidebar-block-->

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
										<!-- start expected post section -->
										
<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 4, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
						<div class="row widthpost">
						<div class="col-sm-2 thuming">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
														<img class="w100" src="<?php $thumb_id = get_post_thumbnail_id($post['ID']); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
														echo $thumb_url[0]; ?>"/>
														</a>
						</div>
						<!-- thuming image-->
						<div class="col-sm-10 blogexpected">
						<div class="story-block">
						<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
						<h3>
						<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
						</h3>
						<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
						<p class="abstract"><?php the_excerpt(); ?></p>
						</div>
						<!-- story-block -->
						</div>
						<!-- col-sm-10 -->
						<!--<div class="col-sm-2 editingo">
						<span class="label editorpick">Editor's Pick</span>
						</div>-->
						</div>									
										
    <?php endforeach; wp_reset_query(); ?>
										<!-- widthpost End-->
										<hr>
									</div>
		<div id="menu1" class="tab-pane fade">
										<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
						<div class="row widthpost">
						<div class="col-sm-2 thuming">
						<a href="<?php echo get_permalink($post['ID']) ?>">
						 <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?> 
						</a>
						</div>
						<!-- thuming image-->
						<div class="col-sm-10 blogexpected">
						<div class="story-block">
						<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
						<h3>
						<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
						</h3>
						<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
						<p class="abstract"><?php the_excerpt(); ?></p>
						</div>
						<!-- story-block -->
						</div>
						<!-- col-sm-10 -->
						<!--<div class="col-sm-2 editingo">
						<span class="label editorpick">Editor's Pick</span>
						</div>-->
						</div>									
										
    <?php endforeach; wp_reset_query(); ?>
									</div>
									<div id="menu2" class="tab-pane fade">
										<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
						<div class="row widthpost">
						<div class="col-sm-2 thuming">
						<a href="<?php echo get_permalink($post['ID']) ?>">
						 <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?> 
						</a>
						</div>
						<!-- thuming image-->
						<div class="col-sm-10 blogexpected">
						<div class="story-block">
						<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
						<h3>
						<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
						</h3>
						<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
						<p class="abstract"><?php the_excerpt(); ?></p>
						</div>
						<!-- story-block -->
						</div>
						<!-- col-sm-10 -->
						<!--<div class="col-sm-2 editingo">
						<span class="label editorpick">Editor's Pick</span>
						</div>-->
						</div>									
										
    <?php endforeach; wp_reset_query(); ?>
									</div>
									<div id="menu3" class="tab-pane fade">
										<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach($recent_posts as $post) : ?>
						<div class="row widthpost">
						<div class="col-sm-2 thuming">
						<a href="<?php echo get_permalink($post['ID']) ?>">
						 <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?> 
						</a>
						</div>
						<!-- thuming image-->
						<div class="col-sm-10 blogexpected">
						<div class="story-block">
						<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
						<h3>
						<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
						</h3>
						<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
						<p class="abstract"><?php the_excerpt(); ?></p>
						</div>
						<!-- story-block -->
						</div>
						<!-- col-sm-10 -->
						<!--<div class="col-sm-2 editingo">
						<span class="label editorpick">Editor's Pick</span>
						</div>-->
						</div>									
										
    <?php endforeach; wp_reset_query(); ?>
	</div>
								<div id="menu3" class="tab-pane fade">
								<?php
								$recent_posts = wp_get_recent_posts(array(
								'numberposts' => 10, // Number of recent posts thumbnails to display
								'post_status' => 'publish' // Show only the published posts
								));
								foreach($recent_posts as $post) : ?>
								<div class="row widthpost">
								<div class="col-sm-2 thuming">
								<a href="<?php echo get_permalink($post['ID']) ?>">
								<?php echo get_the_post_thumbnail($post['ID'], array(123,108)); ?> 
								</a>
								</div>
								<!-- thuming image-->
								<div class="col-sm-10 blogexpected">
								<div class="story-block">
								<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
								<h3>
								<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
								</h3>
								<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
								<p class="abstract"><?php the_excerpt(); ?></p>
								</div>
								<!-- story-block -->
								</div>
								<!-- col-sm-10 -->
								<!--<div class="col-sm-2 editingo">
								<span class="label editorpick">Editor's Pick</span>
								</div>-->
								</div>									

								<?php endforeach; wp_reset_query(); ?>
								</div>
								<div id="menu4" class="tab-pane fade">
								<?php
								$recent_posts = wp_get_recent_posts(array(
								'numberposts' => 10, // Number of recent posts thumbnails to display
								'post_status' => 'publish' // Show only the published posts
								));
								foreach($recent_posts as $post) : ?>
								<div class="row widthpost">
								<div class="col-sm-2 thuming">
								<a href="<?php echo get_permalink($post['ID']) ?>">
								<?php echo get_the_post_thumbnail($post['ID'], array(123,108)); ?> 
								</a>
								</div>
								<!-- thuming image-->
								<div class="col-sm-10 blogexpected">
								<div class="story-block">
								<span class="daycolor expost" style="background:  rgb(59, 55, 55);">.</span>
								<h3>
								<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
								</h3>
								<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
								<p class="abstract"><?php the_excerpt(); ?></p>
								</div>
								<!-- story-block -->
								</div>
								<!-- col-sm-10 -->
								<!--<div class="col-sm-2 editingo">
								<span class="label editorpick">Editor's Pick</span>
								</div>-->
								</div>									

								<?php endforeach; wp_reset_query(); ?>
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


<?php
get_footer();
