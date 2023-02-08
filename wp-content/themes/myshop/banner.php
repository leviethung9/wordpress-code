<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
                <!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=banner'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url('', array(600,400));  ?>
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="<?php echo $featured_img_url ?>" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									<?php echo the_title(); ?>
								</span>

								<span class="block1-info stext-102 trans-04">
									<?php echo the_content(); ?>
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Xem sản phẩm
								</div>
							</div>
						</a>
					</div>
				</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
			</div>
		</div>
	</div>