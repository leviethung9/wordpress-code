<h1 class="display-6"> Bài viết nổi bật </h1>
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
		'showposts' => 1, // số lượng bài viết
		'cat' => 9, // lấy bài viết trong chuyên mục có id là 1
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <div class="p-1 content-bvnb">
      <a href="<?php echo the_permalink() ?>">
      <?php echo the_post_thumbnail() ?>
      </a>
      <h3> <?php echo the_title() ?> </h3>
      <p> Ngày đăng: <?php  echo the_date() ?> </p>
      <p> <?php echo the_excerpt() ?>  </p>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
