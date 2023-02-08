
<?php
$categories = get_categories( array(
	'orderby' => 'name',
	'order'   => 'ASC'
) );
?>
<?php foreach($categories as $item): ?>
    <?php
        $cao = new WP_Query(array(
            'post_type'=>'post',
            'post_status'=>'publish',
            'cat' => $item->term_id,
            'orderby' => 'ID',
            'order' => 'DESC',
            'posts_per_page'=> 5));
    ?>
<?php while ($cao->have_posts()) : $cao->the_post(); ?>
<h5 class=" color-black py-1 fw-bold border-bottom"> <?php echo $item->name ?> </h5>
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
<?php endwhile ; wp_reset_query() ;?>
<?php endforeach; ?>
