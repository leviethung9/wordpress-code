<!-- sidebar -->
<div class="side-menu">
    <div class=" of-hidden pos-relative">
    <form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
	<div class="form-group">
		<input type="text" name="s" class="form-control" id="" placeholder="Từ khóa">
	</div>
	<div class="form-group">
		<select name="cat" id="input" class="form-control" required="required">
			<option value="">Chọn chuyên mục</option>
			<?php $args = array( 
			    'hide_empty' => 0,
			    'taxonomy' => 'category',
			    'orderby' => id,
			    'parent' => 0
			    ); 
			    $cates = get_categories( $args ); 
			    foreach ( $cates as $cate ) {  ?>
					<option value="<?php echo $cate->term_id ?>"><?php echo $cate->name; ?></option>
			<?php } ?>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>
    </div>

    <div class="p-t-55">
        <h4 class="mtext-112 cl2 p-b-33">
            Chuyên mục bài viết
        </h4>

        <ul>
            <!-- Get category -->
            <?php $args = array(
                'hide_empty' => 0,
                'taxonomy' => 'category',
                'orderby' => 'id',
            );
            $cates = get_categories($args);
            foreach ($cates as $cate) { ?>
                <li class="bor18">
                    <a class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4" href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name ?></a>
                </li>
            <?php } ?>
            <!-- Get category -->
            
        </ul>
    </div>

    <div class="p-t-65">
        <h4 class="mtext-112 cl2 p-b-33">
            Sản phẩm mới
        </h4>

        <ul>
        <?php $getposts = new WP_query();
			$getposts->query('post_status=publish&showposts=5&post_type=san-pham'); ?>
            <?php global $wp_query;
			$wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()):
				$getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
            <li class="flex-w flex-t p-b-30">
                <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                    <img src="<?php echo $featured_img_url ?>" alt="PRODUCT" class="w-100 img-fluid">
                </a>

                <div class="size-215 flex-col-t p-t-8">
                    <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                        <?php echo the_title(); ?>
                    </a>

                    <span class="stext-116 cl6 p-t-20">
                        <?php echo the_field('gia') ?> vnd
                    </span>
                </div>
            </li>
            <?php endwhile;
			wp_reset_postdata(); ?>
            
        </ul>
    </div>

    <div class="p-t-50">
        <h4 class="mtext-112 cl2 p-b-27">
            Từ khóa
        </h4>

        <div class="flex-w m-r--5">
            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Fashion
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Lifestyle
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Denim
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Streetstyle
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Crafts
            </a>
        </div>
    </div>
</div>