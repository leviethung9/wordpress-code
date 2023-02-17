<?php get_header(); ?>
<div id="content">
    <div class="container">
        <?php get_template_part('slider'); ?>
    </div>
    <div class="product-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
                    <div class="product-section">
                        <h2 class="title-product">
                            <a href="#" class="title">Sản phẩm nổi bật</a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <?php
                                        $args = array(
                                            'type'      => 'product',
                                            'child_of'  => 0,
                                            'parent'    => 0,
                                            'hide_empty' => 1,
                                            'taxonomy'   => 'product_cat',
                                            'number' => 3
                                        );
                                        $categories = get_categories( $args );
                                        foreach ( $categories as $category ) { ?>
                                   
                                    <li><a href="<?php echo get_term_link($category->slug, 'product_cat');?>"> <?php echo $category->name ; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <?php
                                    $tax_query[] = array(
                                        'taxonomy' => 'product_visibility',
                                        'field'    => 'name',
                                        'terms'    => 'featured',
                                        'operator' => 'IN',
                                    );
                                ?>
                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php get_template_part('content/item_product') ?>
                                <?php endwhile; wp_reset_postdata(); ?> 
                            </div>
                        </div>
                    </div>
                    <a href="#"><img src="https://phongtrodn.com/wp-content/uploads/2020/02/huykira.png" alt=""></a>
                    <br>
                    <br>
                    <div class="product-section">
                    <h2 class="title-product">
                    <?php $cat = get_term_by('id', 36, 'product_cat') ?>
                    <a class="title" href="<?php echo get_term_link($cat->slug, 'product_cat');?>"> <?php echo $cat->name ; ?></a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">HTC</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php get_template_part('content/item_product') ?>
                                <?php endwhile; wp_reset_postdata(); ?> 
                
                            </div>
                        </div>
                    </div>
                    <div class="product-section">
                    <h2 class="title-product">
                    <?php $cat = get_term_by('id', 34, 'product_cat') ?>
                    <a class="title" href="<?php echo get_term_link($cat->slug, 'product_cat');?>"> <?php echo $cat->name ; ?></a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">HTC</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php get_template_part('content/item_product') ?>
                                <?php endwhile; wp_reset_postdata(); ?> 
                
                            </div>
                        </div>
                    </div>
                    <div class="product-section">
                    <h2 class="title-product">
                    <?php $cat = get_term_by('id', 35, 'product_cat') ?>
                    <a class="title" href="<?php echo get_term_link($cat->slug, 'product_cat');?>"> <?php echo $cat->name ; ?></a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">HTC</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php get_template_part('content/item_product') ?>
                                <?php endwhile; wp_reset_postdata(); ?> 
                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>