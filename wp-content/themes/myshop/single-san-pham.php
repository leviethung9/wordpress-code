<!-- chi tiet san pham -->
<?php get_header(); ?>
<?php if (have_posts()): ?>
<?php while (have_posts()):
        the_post(); ?>
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="<?php echo bloginfo('url'); ?>" class="stext-109 cl8 hov-cl1 trans-04">
            Trang chủ
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="<?php echo bloginfo('url'); ?>/san-pham" class="stext-109 cl8 hov-cl1 trans-04">
            Sản phẩm
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            <?php echo the_title(); ?>
        </span>
    </div>
</div>


<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">

                <?php $featured_img_url = get_the_post_thumbnail_url('', array(600, 400)); ?>
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <?php $thumbnail = get_field('hinh_anh') ?>

                    <div class="wrap-slick3 flex-sb flex-w">

                        <div class="slick3 gallery-lb">
                            <?php foreach ($thumbnail as $item): ?>
                            <div class="item-slick3" data-thumb="">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="<?php echo $item['url'] ?>" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                        href="<?php echo $item['url'] ?>">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        <?php echo the_title(); ?>
                    </h4>

                    <span class="mtext-106 cl2">
                        <?php echo the_field('gia') ?> vnd
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        <?php echo wp_trim_words(get_the_excerpt(), 35) ?>
                    </p>
                    <p class="stext-102 cl3 p-t-23">
                        Màu sắc:
                        <?php echo the_field('mau_sac') ?>
                    </p>
                    <p class="stext-102 cl3 p-t-23">
                        Kích thước:
                        <?php echo the_field('kich_thuoc') ?>
                    </p>
                    <div class="flex-w flex-r-m p-b-10">
                        <div class="size-204 flex-w flex-m respon6-next">
                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                </div>

                                <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product"
                                    value="1">

                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                </div>
                            </div>

                            <button
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                Đặt hàng
                            </button>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                            data-tooltip="Add to Wishlist">
                            <i class="zmdi zmdi-favorite"></i>
                        </a>
                    </div>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                        data-tooltip="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bor10 m-t-50 p-t-43 p-b-40">
        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item p-b-10">
                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả sản phẩm</a>
                </li>

                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#information" role="tab">Thông số số</a>
                </li>

                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-43">
                <!-- - -->
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <div class="how-pos2 p-lr-15-md">
                        <p class="stext-102 cl6">
                            <?php echo the_content(); ?>
                        </p>
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="information" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                            <ul class="p-lr-28 p-lr-15-sm">
                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Màu sắc
                                    </span>

                                    <span class="stext-102 cl6 size-206">
                                        <?php echo the_field('mau_sac') ?>
                                    </span>
                                </li>

                                <li class="flex-w flex-t p-b-7">
                                    <span class="stext-102 cl3 size-205">
                                        Kích thước
                                    </span>

                                    <span class="stext-102 cl6 size-206">
                                        <?php echo the_field('kich_thuoc') ?>
                                    </span>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">

        <span class="stext-107 cl6 p-lr-25">
            Danh mục:
            <?php echo the_category(); ?>
        </span>
    </div>
</section>

<?php endwhile;
    wp_reset_postdata(); ?>
<?php endif; ?>
<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Sản phẩm liên quan
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <?php

            $terms = get_the_terms(get_the_id(), 'danh-muc');
            $current_term = $terms[0]->slug;
            $args = array(
                'danh-muc' => $current_term,
                'post__not_in' => array(get_the_id()),
                'showposts' => 4,
                // Số bài viết bạn muốn hiển thị.
                'caller_get_posts' => 1,
                'post_type' => 'san-pham'
            );
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                echo '<div class="row">';
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
            <div class="col-3">
                <div class="new-img"><a class="w-100 img-fluid" href="<?php the_permalink(); ?>"><?php
                          the_post_thumbnail(array(250, 350)); ?></a></div>
                <div class="item-list">
                    <h4 class="stext-111"><a href="<?php the_permalink() ?>"
                            title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <p class="stext-111">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
            <?php
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>