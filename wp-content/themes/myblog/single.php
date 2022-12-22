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
                        <span>Tác giả: <?php echo the_author(); ?></span>
                        <span>Chuyên mục: <?php echo the_category(); ?></span>
                    </div>
                    <div class="content-post">
                        <?php echo the_content(); ?>
                    </div>
                    <div class="tag">
                        <p>Từ khóa: <span> <?php echo the_tags(); ?> </span></p>
                    </div>
                    <div class="box-cmt">
                    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=711658356004573&autoLogAppEvents=1" nonce="SmAQ36i6"></script>
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