<?php get_header(); ?>
<div class="wrapper-tkp">
    <div class="tkp-section1">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/1-5-DuongSinhThuThai.jpg" alt="" srcset="">
    </div>
    <div class="tkp-section2">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/1-2-1-AnNhien.jpg" alt="" srcset="">
    </div>
    <div class="tkp-section3">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/1-2-2-DuongSinh.jpg" alt="" srcset="">
    </div>
    <div class="tkp-section3">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/1-2-3-TanHuong.jpg" alt="" srcset="">
    </div>
    <div class="tkp-section3">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/1-3-ChamSoc.jpg" alt="" srcset="">
    </div>
    <div class="tkp-section3">
        <img src="<?php bloginfo('template_directory') ?>/assets/img-tkp/ 1-4-5000KH.jpg" alt="" srcset="">
    </div>
    <div class="tkp-box-tk" id="tkp">
        <div class="content">

        </div>
        <img src="LOGO1.png" alt="">
        <h3 style="
            position: absolute;
width: 192px;
height: 48px;
left: 91px;
top: 361px;

            font-family: 'Montserrat';
			font-style: normal;
			font-weight: 600;
			font-size: 13px;
			line-height: 16px;
			text-align: center;
			color: #EAC58E;">Cảm ơn bạn đã đặt lịch,
Emer sẽ liên hệ bạn trong thời gian sớm nhất!</h3>
    </div>
    <button onclick="hideBox()">X</button>
</div>
<script>
    var hidebox = document.getElementById("tkp");
    function hideBox()
    {
        alert("ghfgfgfg");
        hidebox.style.display = none;
    }
</script>
<?php get_footer(); ?>
