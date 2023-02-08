<!-- trang san pham -->
<?php get_header(); ?>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
            <div class="row">
                <div class="col-3">
                <?php get_template_part('sidebar'); ?>
                </div>
                <div class="col-9">
                    <div class="row">

                    
                <?php $getposts = new WP_query();
			$getposts->query('post_status=publish&showposts=6&post_type=san-pham'); ?>
            <?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()):
				$getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $featured_img_url ?>" alt="IMG-PRODUCT">

						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo the_title(); ?>
								</a>

								<span class="stext-105 cl3">
									<?php echo the_field('gia') ?> vnd
								</span>
							</div>
                            <div class="border w-100 p-1">
                                <div> Màu sắc:<?php echo the_field('mau_sac') ?> </div>
                                <div> Kích thước:<?php echo the_field('kich_thuoc') ?> </div>
                            </div>
                            <div class="mx-auto mt-2 mb-2">
                                <a class="btn btn-danger" href="<?php echo the_permalink(); ?>" >Xem thêm</a>
                            </div>
						</div>
					</div>
				</div>
                <?php endwhile;
			wp_reset_postdata(); ?>
                </div>
            </div>
            </div>
            <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
                        <?php if (paginate_links() != '') { ?>
                            <div class="quatrang">
                                <?php
                                global $wp_query;
                                $big = 999999999;
                                echo paginate_links(
                                    array(
                                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                        'format' => '?paged=%#%',
                                        'prev_text' => __('«'),
                                        'next_text' => __('»'),
                                        'current' => max(1, get_query_var('paged')),
                                        'total' => $wp_query->max_num_pages
                                    ));
                                ?>
                            </div>
                        <?php } ?>
                    </div>
		</div>
	</div>
<?php get_footer(); ?>