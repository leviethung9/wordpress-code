<?php get_header(); ?>
            <!-- content -->
          <div class="container">
          <div class="row mt-2 mb-2">
                    <div class="col-9">
                        <!-- slider bai viet noi bat -->
                        <?php get_template_part('post-slide') ?>
                        <!-- slider bai viet noi bat end -->
                        <?php get_template_part('post-3-cloumn') ?>
                        <div class="box-bvtdm">
                            <!-- bai viet ngang -->
                            <?php get_template_part('post-by-category') ?>
                            <!-- bai viet ngang end -->
                        </div>
                    </div>
                    <div class="col-3">
                        <?php get_sidebar() ?>
                    </div>
                </div>
          </div>

            <!-- content end -->
            <?php get_footer(); ?>