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
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post();?>
                        <h1 class="page-title"> <?php echo the_title(); ?> </h1>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                       
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>