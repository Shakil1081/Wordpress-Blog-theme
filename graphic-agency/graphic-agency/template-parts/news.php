<div class="sidebar-block story-simple-list newsplus">
<h3 class="header newsplus"><i class="fa fa-file-text fa-2" aria-hidden="true"></i>&nbsp;&nbsp; News+</h3>
<?php
$recent_posts = wp_get_recent_posts(array(
'numberposts' => 5, // Number of recent posts thumbnails to display
'post_status' => 'publish',
'category_name' => "News"
// Show only the published posts
));
foreach($recent_posts as $post) : ?>

<div class="story-block">
<div class="story-info">
<h3>
<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a>
</h3>
<div class="date"><?php the_author(); ?><span class="byline"></span><?php the_time('F jS, Y') ?></div>
</div>
<!--/.story-info-->
</div>

<?php endforeach; wp_reset_query(); ?>

<div class="story-more">
<a href="#" data-category="home_newsplus" data-action="btn_more">More »</a>
</div>
<!--/.story-more-->

</div>