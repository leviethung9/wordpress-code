<!-- trang chi tiet bai viet -->
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <?php echo get_template_part('sidebar'); ?>
        </div>
        <div class="col-9">
            <div class="p-r-45 p-r-0-lg">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):the_post(); ?>
                        <div class="p-t-32">
                            <span class="flex-w flex-m stext-111 cl2 p-b-19">
                                <span>
                                    <span class="cl4">Đăng bởi:</span>
                                    <?php echo the_author_posts_link(); ?>
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>

                                <span>
                                    <?php echo the_date(); ?>
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>
                            </span>

                            <h4 class="ltext-109 cl2 p-b-28">
                                <?php echo the_title(); ?>
                            </h4>

                            <p class="stext-117 cl6 p-b-26">
                                <?php echo the_content(); ?>
                            </p>

                        </div>

                        <div class="flex-w flex-t p-t-16">
                            <span class="size-216 stext-116 cl8 p-t-4">
                                Tags
                            </span>

                            <div class="flex-w size-217">
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    <?php echo the_tags(); ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
                <!--  -->
                <div class="p-t-40">
                    <h5 class="mtext-113 cl2 p-b-12">
                        Comment
                    </h5>

                    <p class="stext-107 cl6 p-b-40">
                        <?php
                        $cmt = get_comments(
                            array(
                                'status' => 'approve',
                                'number' => 10,
                            )
                        );
                        ?>
                    </p>

                    <div class="content-w content-news">
                        <ul>
                            <?php foreach ($cmt as $value) { ?>
                                <li>
                                    <a
                                        href="<?php the_permalink($value->comment_post_ID); ?>#comment-<?php echo $value->comment_ID; ?>"><?php
                                             echo get_avatar($value->comment_author_email, 150); ?></a>
                                    <a
                                        href="<?php the_permalink($value->comment_post_ID); ?>#comment-<?php echo $value->comment_ID; ?>"><?php
                                             echo $value->comment_author; ?></a> - <span style="color: #cd8a35;font-size: 12px;">
                                        <?php echo $value->comment_date; ?>
                                    </span>
                                    <p style="font-size: 13px;">
                                        <?php echo cuttitle($value->comment_content); ?>
                                    </p>
                                    <div class="clear"></div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    </p>
                    <div class="cmt">
                        <div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>"
                            data-numposts="3"></div>
                    </div>

                    <div id="fb-root"></div>
                    <script>
                        (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=750688268378229";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <?php
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $individual_category)
                            $category_ids[] = $individual_category->term_id;

                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts' => 5,
                            // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts' => 1
                        );
                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {
                            echo '<h3 class="pt-1 pb-1 ">Bài viết liên quan</h3><ul class="ltext-109 cl2 p-b-28">';
                            echo '<div class="row">';
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <div class="col-4">
                                    <div class="new-img"><a class="img-fluid" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(250, 300)); ?></a></div>
                                    <div class="item-list p-1">
                                        <h4 class="stext-111"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php
                                            the_title(); ?></a></h4>
                                       <p class="stext-108 cl6">
                            <?php echo wp_trim_words( get_the_excerpt() , 20 ) ?>
                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


    </div>
</div>
<?php get_footer(); ?>