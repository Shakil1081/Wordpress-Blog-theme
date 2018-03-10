		<!-- Home page slider section 
			=========================================== -->
<?php 
$colorpost = get_field( "colorpost" );
$caption_title = get_field( "article_feature_caption_title" );
$caption_descrption = get_field( "article-feature-caption" );
$sub_headline = get_field( "sub_headline" );
?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="primary" id="skip">
							<section class="toppart">
								<div class="col-sm-4">
									<div class="top-wrapper feature-top">
										<div class="article-head" >
											<div class="breadcrumb category Arts &amp; Culture">
												<span class="daycolor" style="background:<?php the_field('colorpost', get_the_ID()); ?>;">&nbsp;</span>&nbsp;<?php the_category( ' > ' ); ?>
											</div>
											
											<h1 class="headline"><?php the_title(); ?></h1>
											<p class="sub-headline large"><?php the_field('sub_headline', get_the_ID()); ?></p>

											<div class="meta"><?php the_time('F jS, Y'); ?><?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {
												if($tag->name =="Popular"){
													echo ' |&nbsp&nbsp<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>&nbsp'.$tag->name.'&nbsp&nbsp';
												}
												if($tag->name =="Edit choice"){
													echo '|&nbsp&nbsp<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp'.$tag->name.'&nbsp&nbsp';
												}}}?>
											</div>
											<!--/.meta-->
										</div>
									</div>
								</div>
								<div class="col-sm-8">
							
										<!--===========================================================-->
										<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="10000" id="myCarousel" style="margin:  0px;">
										
										       
													<?php
													//Get the images ids from the post_metadata
													$images = acf_photo_gallery('slider_image', get_the_ID());
													/*echo '<pre>';
													print_r($images);
													echo '<pre>';*/
													?>
													     <ol class="carousel-indicators" style=" text-align:  center;  bottom: -20px;  background-color: #35341578; padding-top:  10px;">
													     <?php for ($x = 0; $x <= count($images)-1; $x++) {?>										
															 <li data-target="#myCarousel" data-slide-to="<?php echo $x;?>" class="<?php if($x == 1){echo "active"; }?>"></li>
															
															<?php }?>
														</ol>
														
                                                      
													<div class="carousel-inner">
														<?php for ($u = 0; $u <= count($images)-1; $u++) {?>
																<div class="item <?php if($u == 1){echo "active";} ?>">
																<img src="<?php echo $images[$u]['full_image_url'];?>" alt="Chicago" style="width:100%;">
																</div>
															
														<?php }?>
											</div>

											<!-- Left and right controls -->
											<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<span class="glyphicon glyphicon-arrow-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<span class="glyphicon glyphicon-arrow-right"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
							</section>
							<!-- Home page Srory section 
			=========================================== -->
			<section class="articalarea">
									<div class="col-sm-8">
										<div class="">
											<div class="split-2-1 clearfix">
												<div class="col first">
													<div class="article-byline"> By <?php echo get_the_author(); ?></div>
												</div>
												<!--/.col-->

											</div>
											<!--/.split-2-1-->

											<div class="article-body">
												<?php the_content(); ?>
										 <?php endwhile; else : ?>
                                      <?php endif; ?>

												<?php $next_post = get_next_post();	if (!empty( $next_post )): ?>
												<div class="row nextblog">
													<div class="next-img">
														<img src="<?php the_post_thumbnail_url(array(100, 100)); ?>" alt="<?php echo esc_attr( $next_post->post_title ); ?>">
													</div>
													<div class="next-description">
														<div class="next-story nocontent">
															<div class="header">  <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">Next</a></div>
															<h3 class="nextss">
																<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
																	<?php echo esc_attr( $next_post->post_title ); ?>
																</a>
															</h3>
															<div class="date"><?php the_date(); ?></div>
														</div>
													</div>
													<div class="next-right">
														<i class="	fa fa-angle-right" style="font-size:74px"></i>
													</div>
													<?php endif; ?>
												</div>
												</div>
											</div>
										</div>
									<div class="col-sm-4 slidebar">
										<div class="article-feature-caption hide-on-tablet">
											<p class="photo-credit"><?php echo $caption_title;?></p>
											<p><?php echo $caption_descrption; ?></p>
										</div>

										<div class="clearfix"></div>
										<div class="post-feature-side">
									<?php  get_template_part('template-parts/event'); ?>
									<?php  get_template_part('template-parts/news'); ?>

										</div>
									</div>
							
							</section>
							<!-- Home page blog section 
			=========================================== -->

						</div>
					</div>
					<!-- content -->
				</div>
				<!-- primary -->
			</div>
			<!-- container -->