<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Trang chủ</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <!-- header -->
        <div class="header-top">
            <div class="header-top-container">
                <div class="slogan">
                    <h5>Mẫu website tin tức</h5>
                </div>
                <div class="menu-top">
                    <ul>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="">Chăm sóc khách hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <header>
                <div class="header-main">
                    <div class="row">
                        <div class="col-4">
                            <div class="logo">
                                <a href="<?php bloginfo('url') ?>" >
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/logo/Logo_blog_up.png"
                                    alt="" class="img-fluid ">
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="banner">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/banner/banner_top.jpg"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom pt-1">
                    <div class="row">
                        <div class="col-8">
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'header-menu', 
                                'container' => 'false', 
                                'menu_id' => 'header-menu', 
                                'menu_class' => 'header-menu'
                            ) 
                            ); ?>
                        </div>
                        <div class="col-4">
                            <div class="box-search">
                                <form action="" method="get" class="d-flex ">
                                    <input type="text" name="" id="" class="input-search">
                                    <button type="submit" class="btn btn-primary ">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- header end -->