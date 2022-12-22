<div class="row mt-3 mb-3">
    <h3> Bài viết mới </h3>
    <!-- post column 3 -->
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
    <div class="col-4 box-post-3-column">
        <a href="<?php echo the_permalink() ?>">
            <?php echo the_post_thumbnail() ?>
        </a>
        <div class="box-post-text">
            <h5> <?php echo the_title() ?> </h5>
            <p class="date-post fst-italic color-black">
                Ngày đăng: <span> <?php echo get_the_date() ?> </span>
            </p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

</div>