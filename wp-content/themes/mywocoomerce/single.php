<!-- danh sach bai viet của chuyen muc -->
<?php get_header(); ?>
<div id="content">
    <div class="product-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                    <div>
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()):the_post(); ?>
                                <h3> <?php echo the_title(); ?></h3>
                                <div class="author">
                                    <p>Đăng bởi: <span> <?php echo the_author(); ?></span></p>
                                    <p>Ngày đăng: <span>  <?php echo the_date(); ?> </span> </p>
                                </div>
                                <div class="content-post">
                                <?php echo the_content(); ?>
                                </div>
                                <div class="tags">
                                    <p> Từ khóa: <span> <?php echo the_tags(); ?></span> </p>
                                </div>
                                <div class="comment">
                                <?php echo the_comment(); ?>
                                </div>
                            <?php endwhile;wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>