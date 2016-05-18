<?php
/**
* Template Name: Home
 * @package dazzling
 */

get_header(); ?>
	<div class="top-section">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
        </div>
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div class ="col-md-12">
			<h3 class="text-center">NHỮNG MÔN HỌC</h3>
			<?php 
				$categories = get_categories( $args );
				foreach ($categories as $cat) { 
			?>
				<div class = "col-md-4">
					<a href="<?php echo get_category_link($cat->term_id); ?>" class="thumbnail">
    					<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="img-circle" style="width:150px;height:150px"/>
    					<p class="text-center"><?php echo $cat->cat_name; ?></p>
					</a>
				</div>
			<?php } ?>
			</div>
			<div class="col-md-12">
				<h3 class="text-center">NHỮNG BÀI ĐĂNG MỚI NHẤT</h3>
				<ul>
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"]. $recent["post_content"] . '</a> </li> ';
	}
?>
</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>