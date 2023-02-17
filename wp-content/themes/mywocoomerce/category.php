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
                    <div class="category-page-content">
                        <h1 class="title-category">
                            <?php echo single_cat_title(); ?>
                        </h1>
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()):the_post(); ?>
                        <div class="list-news">
                            <div class="row">
                                <div class="col-4">
                                    <a  href="<?php echo the_permalink(); ?>"> 
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <a class="title-post" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                                    <p>
                                        <?php echo the_excerpt(); ?>
                                    </p>
                                    <a class="btn btn-danger" href="<?php echo the_permalink(); ?>">Xem thêm</a>
                                </div>
                            </div>
                        </div>    
                       
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if(paginate_links()!='') {?>
	<div class="quatrang">
		<?php
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'prev_text'    => __('« Mới hơn'),
			'next_text'    => __('Tiếp theo »'),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
			) );
	    ?>
	</div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>