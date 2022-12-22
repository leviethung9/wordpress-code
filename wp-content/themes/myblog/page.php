<!-- chua noi dung cua chuyen muc -->
<?php
get_header();
?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-9">

                <!-- Get post mặt định -->
                <?php if (have_posts()): ?>
                <?php while (have_posts()):the_post(); ?>
                    <h1> <?php echo the_title(); ?> </h1>
                    <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d/m/y'); ?></span>
                    </div>
                    <div class="content-post">
                        <?php echo the_content(); ?>
                    </div>
                   
                
                <?php endwhile;  ?>
        
                <?php endif; ?>
                <!-- Get post mặt định -->
            </div>
            <div class="col-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
    <?php get_footer() ?>
</div>