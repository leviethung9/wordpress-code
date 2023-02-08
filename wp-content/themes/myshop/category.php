<!-- chuyen muc bai viet -->
<?php get_header(); ?>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Tin tức - bài viết
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-62 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!-- Get post News Query -->
                    <?php $getposts = new WP_query();
                    $getposts->query('post_status=publish&showposts=10&post_type=post&cat=18'); ?>
                    <?php global $wp_query;$wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()): $getposts->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
                        <!-- item blog -->
                        <div class="p-b-63">
                            <a href="<?php echo the_permalink(); ?>" class="hov-img0 how-pos5-parent">
                                <img src="<?php echo $featured_img_url; ?>" alt="IMG-BLOG">
                            </a>

                            <div class="p-t-32">
                                <h4 class="p-b-15">
                                    <a href="<?php echo the_permalink(); ?>" class="ltext-108 cl2 hov-cl1 trans-04">
                                        <?php echo the_title(); ?>
                                    </a>
                                </h4>

                                <p class="stext-117 cl6">
                                    <?php echo the_excerpt(); ?>
                                </p>

                                <div class="flex-w flex-sb-m p-t-18">
                                    <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                        <span>
                                            <span class="cl4">Đăng bởi:
                                                <?php echo the_author_posts_link(); ?>
                                            </span>
                                            <span class="cl12 m-l-4 m-r-6">|</span>
                                        </span>

                                        <span>
                                            <?php echo the_tags(); ?>
                                            <span class="cl12 m-l-4 m-r-6">|</span>
                                        </span>

                                        <span>

                                        </span>
                                    </span>

                                    <a href="<?php echo the_permalink() ?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                        Xem thêm
                                        <i class="fa fa-long-arrow-right m-l-9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <!-- Get post News Query -->
                    <!-- Pagination -->
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

            <div class="col-md-4 col-lg-3 p-b-80">
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>