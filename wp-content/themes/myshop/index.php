<?php get_header(); ?>

<!-- Slider -->
<?php get_template_part('slider'); ?>

<!-- Banner -->
<?php get_template_part('banner'); ?>

<!-- Product -->
<section class="sec-product bg0">
    <div class="container">
        <div class="p-b-32 mt-5">
            <h3 class="ltext-105 cl5 txt-center respon1 ">
                Thời trang nam
            </h3>
        </div>
        <div class="row mt-2 mb-2">
            <?php $getposts = new WP_query();
			$getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=thoi-trang-nam'); ?>
            <?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()):
				$getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
            <div class="col-4">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="<?php echo $featured_img_url ?>" alt="IMG-PRODUCT">
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="<?php echo the_permalink(); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?php echo the_title(); ?>
                            </a>

                            <span class="stext-105 cl3">
                                Giá: <?php echo the_field('gia'); ?>
                            </span>
                            <div>
                                <span> Màu sắc: <?php echo the_field('mau_sac'); ?> </span>
                                <br>
                                <span> Kích thước: <?php echo the_field('kich_thuoc'); ?> </span>
                            </div>
							<div class="mx-auto p-2">
									<a href="<?php the_permalink(); ?>" class="btn btn-danger"> Xem thêm </a>
							</div>
                        </div>

                    </div>
                </div>

            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <div class="p-b-32 mt-5">
            <h3 class="ltext-105 cl5 txt-center respon1 ">
                Thời trang nữ
            </h3>
        </div>
        <div class="row mt-2 mb-2">
            <?php $getposts = new WP_query();
			$getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=thoi-trang-nu'); ?>
            <?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()):
				$getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
            <div class="col-4">
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
                                Giá: <?php echo the_field('gia'); ?>
                            </span>
                            <div>
                                <span> Màu sắc: <?php echo the_field('mau_sac'); ?> </span>
                                <br>
                                <span> Kích thước: <?php echo the_field('kich_thuoc'); ?> </span>
                            </div>
							<div class="mx-auto p-2">
									<a href="<?php the_permalink(); ?>" class="btn btn-danger"> Xem thêm </a>
							</div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile;
			wp_reset_postdata(); ?>
        </div>
        <div class="p-b-32 mt-5">
            <h3 class="ltext-105 cl5 txt-center respon1 ">
                phụ kiện
            </h3>
        </div>
        <div class="row mt-2 mb-2">
            <?php 
				$getposts = new WP_query();
				$getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh-muc=phu-kien'); 
			?>
            <?php 
				global $wp_query;
				$wp_query->in_the_loop = true; 
			?>
            <?php 
				while ($getposts->have_posts()):$getposts->the_post(); 
			?>
            <?php 
				$featured_img_url = get_the_post_thumbnail_url('', array(600, 400));
			?>
            <div class="col-4">
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
                                Giá: <?php echo the_field('gia'); ?>
                            </span>
                            <div>
                                <span> Màu sắc: <?php echo the_field('mau_sac'); ?> </span>
                                <br>
                                <span> Kích thước: <?php echo the_field('kich_thuoc'); ?> </span>
                            </div>
							<div class="mx-auto p-2">
									<a href="<?php the_permalink(); ?>" class="btn btn-danger"> Xem thêm </a>
							</div>
                        </div>

                    </div>
                </div>

            </div>
            <?php 
				endwhile; wp_reset_postdata();
			?>
        </div>
    </div>
</section>
<!-- Blog -->
<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Tin tức - Bài viết
            </h3>
        </div>

        <div class="row">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post&cat=18'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php 
			$featured_img_url = get_the_post_thumbnail_url('', array(600, 400));
		?>
            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="<?php echo the_permalink() ?>">
                            <img src="<?php echo $featured_img_url; ?>" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span class="m-r-3">
                                <span class="cl4">
                                    Viết bởi:
                                </span>

                                <span class="cl5">
                                    <?php echo the_author_posts_link(); ?>
                                </span>
                            </span>

                            <span>
                                <span class="cl4">
                                    Đăng ngày:
                                </span>

                                <span class="cl5">
                                    <?php echo the_date(); ?>
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
                                <?php echo the_title(); ?>
                            </a>
                        </h4>

                        <p class="stext-108 cl6">
                            <?php echo wp_trim_words( get_the_excerpt() , 50 ) ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
        </div>
    </div>
    </div>
</section>
<script>
$('.carousel').carousel({
    interval: 2000
})
</script>

<!-- Footer -->
<?php get_footer(); ?>