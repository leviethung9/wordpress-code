<!-- box widget -->
<div class="box-widget">
    <div class="widget-heading">
        <h5 class="text-white text-center text-uppercase fw-bold p-1 fs-6">Chuyên mục</h5>
    </div>
    <div class="widget-body">
        <ul class="list-group">
            <?php
                                    $args = array(
                                        'type' => 'post',
                                        'child_of' => 0,
                                        'parent' => ''
                                    );
                                    $categories = get_categories($args);
                                    ?>
            <?php foreach ($categories as $item): ?>
            <li class="list-group-item">
                <a href="<?php echo get_term_link($item->slug, 'category');?>" class="color-black text-decoration-none"> <?php echo $item->cat_name ?> </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- box widget end -->
<!-- box widget -->
<div class="box-widget">
    <div class="widget-heading">
        <h5 class="text-white text-center text-uppercase fw-bold p-1 fs-6">Bài viết nổi bật</h5>
    </div>
    <div class="widget-body">
        
       <?php
                            $args = array(
                                'post_status' => 'publish',
                                // Chỉ lấy những bài viết được publish
                                'post_type' => 'post',
                                // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                                'showposts' => 5,
                                // số lượng bài viết
                                'cat' => 9, // lấy bài viết trong chuyên mục có id là 1
                            );
                            ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query;
$wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()):
    $getposts->the_post(); ?>
        <div class="d-flex w-100 border-bottom py-2">
            <div class="widget-post-box-img w-25">
                <a href="<?php echo the_permalink() ?>" class="p-1">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
                        class="img-fluid">
                </a>
            </div>
            <div class="widget-post-box-text w-75 px-1">
                <div class="ps-2">
                    <p class="fw-bold">
                    <?php  echo wp_trim_words(get_the_title(), 10, '...'); ?>
                    </p>
                    <p>
                        Ngày đăng: <span> <?php echo get_the_date() ?> </span>
                    </p>
                </div>

            </div>
        </div>
        <?php endwhile;
wp_reset_postdata(); ?>

    </div>
</div>
<!-- box widget end -->
<!-- box widget -->
<div class="box-widget">
    <div class="widget-heading">
        <h5 class="text-white text-center text-uppercase fw-bold p-1 fs-6">Bài viết mới</h5>
    </div>
    <div class="widget-body">
    <?php
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()):
            $the_query->the_post(); ?>
    <div class="d-flex w-100 border-bottom py-2">
            <div class="widget-post-box-img w-25">
                <a href="<?php echo the_permalink() ?>" class="p-1">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
                        class="img-fluid">
                </a>
            </div>
            <div class="widget-post-box-text w-75 px-1">
                <div class="ps-2">
                    <p class="fw-bold">
                    <?php  echo wp_trim_words(get_the_title(), 10, '...'); ?>
                    </p>
                    <p>
                        Ngày đăng: <span> <?php echo get_the_date() ?> </span>
                    </p>
                </div>

            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </div>
</div>
<!-- box widget end -->
<!-- box widget -->
<div class="box-widget">
    <div class="widget-heading">
        <h5 class="text-white text-center text-uppercase fw-bold p-1 fs-6">Quảng cáo</h5>
    </div>
    <div class="widget-body">
        <a href="">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/post.jpg" alt="" class="img-fluid">
        </a>
    </div>
</div>
<!-- box widget end -->