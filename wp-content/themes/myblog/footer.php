       <!-- footer -->
        <div class="footer mt-3">
            <div class="container">
                <div class="row pt-3 mb-3 ">
                    <div class="col-4">
                        <div class="title-footer w-100">
                            <h3 class="text-white fs-5"> Giới thiệu </h3>
                        </div>
                        <div class="box-text-footer ">
                            <p class="text-white">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, esse, cum dolorum
                            aspernatur rerum cupiditate temporibus ipsum dolores nihil labore nostrum nam, amet
                            exercitationem delectus fuga facilis optio! Aut, modi.
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="title-footer w-100">
                            <h3 class="text-white fs-5"> Chuyên mục </h3>
                        </div>
                        <div class="box-list-cate">
                          
                            <ul class="list-group">
            <?php
                                    $args = array(
                                        'type' => 'post',
                                        'child_of' => 0,
                                        'parent' => ''
                                    );
                                    $categories = get_categories($args);
                                    ?>
            <?php foreach ($categories as $item): ?>
            <li class="list-group">
                <a href="<?php echo get_term_link($item->slug, 'category');?>" class="text-white text-decoration-none"> <?php echo $item->cat_name ?> </a>
            </li>
            <?php endforeach; ?>
        </ul>
                           
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="title-footer w-100">
                            <h3 class="text-white fs-5"> Liên hệ </h3>
                        </div>
                        <div class="box-footer-contact">
                            <ul>
                                <li> <p class="text-white pe-auto">Số điện thoại: 0362247154</p> </li>
                                <li><p class="text-white pe-auto"> Email: demo@gmail.com </p> </li>
                                <li><p class="text-white pe-auto"> Địa chỉ: Hà Nội </p> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer end -->
            <!-- footer coppyright -->
            <div class="footer-coppyright">
                <h4 class="text-white text-uppercase text-white text-center fs-6 p-2">Bản quyền thuộc về demoweb</h4>
            </div>
            <!-- footer coppyright -->
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <script src="<?php bloginfo('template_directory') ?>/assets/js/custom.js"> </script>
            <?php wp_footer(); ?>