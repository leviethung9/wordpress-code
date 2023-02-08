<!-- get slider -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=anh-slidera'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url('', array(600,400));  ?>
					<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo $featured_img_url;  ?>" alt="First slide">
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
					<!-- Get post News Query -->
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=anh-slidera&offset=1'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url('', array(600,400));  ?>
					<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo $featured_img_url;  ?>" alt="First slide">
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>


