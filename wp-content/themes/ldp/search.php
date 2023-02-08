<!-- tra ve ket qua tim kiem --><!-- chua noi dung cua chuyen muc -->
<?php
get_header();
?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-9">
            <div class="post-news">
						<h1 class="title-news">Kết quả tìm kiếm</h1>
						<div class="content-news">
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
							<h1 class=" color-black py-1 fw-bold border-bottom"> <?php echo $item->name ?> </h1>
<div class="row mt-2 mb-2">
<div class="col-4">
    <a href="<?php echo the_permalink() ?>">
        <img src="<?php echo get_the_post_thumbnail_url (); ?>" alt="" class="img-fluid">
    </a>
</div>
<div class="col-8">
    <div class="post-text">
        <a href="<?php echo the_permalink() ?>" class="text-decoration-none fw-bold">
        <?php echo the_title() ?>
        </a>
        <p> Ngày đăng: <span><?php echo  get_the_date() ?></span> </p>
        <p class="text-more">
        <?php echo wp_trim_words( get_the_excerpt() , 50 ) ?>
        </p>
    </div>
</div>
</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<?php if(paginate_links()!='') {?>
						<div class="quatrang">
							<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('«'),
								'next_text'    => __('»'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
								) );
						    ?>
						</div>
						<?php } ?>
					</div>
            </div>
            <div class="col-3">
            <?php get_sidebar() ?>
            </div>
        </div>
    </div>
    <?php get_footer() ?>
</div>
