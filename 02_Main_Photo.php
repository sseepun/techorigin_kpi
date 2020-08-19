<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'คลังภาพ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ค</div><h1 class="color2">ลังภาพ</h1>
                <p><span class="fw-400">กรมอนามัย</span> อัพเดท รวบรวม ภาพกิจกรรมหรือข้อมูลเพื่อประชาชน</p>
            </div>

            <div class="grids">

                <div class="grid sm-100 lg-70 xl-75" data-aos="fade-up" data-aos-delay="300">
                    <?php include_once('component/list-header.php'); ?>

                    <a class="ss-img" href="#">
                        <div class="img-bg" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                        <div class="tag">
                            <div class="date">28</div>
                            <div class="text-container">
                                <div class="month">กรกฎาคม</div>
                                <div class="year">2563</div>
                            </div>
                        </div>
                    </a>
                    <div class="grids">
                        <?php for($i=0; $i<12; $i++){?>
                            <div class="grid md-25 ss-card-2">
                                <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                    <div class="socials">
                                        <ul>
                                            <li><a class="social social-fw" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a></li>
                                            <li><a class="social social-tw" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                            <li><a class="social social-ig" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-<?php echo $i % 11 + 1; ?>"></div>
                                </div>
                                <div class="ss-date">02.04.2563</div>
                                <a class="ss-h5" href="#">
                                    กรมอนามัย แนะ 10 วิธีกินแบบพอเพียงช่วงโควิด 19
                                    สร้างร่างกายแข็งแรง ไร้พุง
                                </a>
                                <div class="btns">
                                    <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                        อ่านรายละเอียด
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    
                    <?php include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot bg-color4">
                            <div class="ss-header color-white">
                                <div class="ss">อั</div><h1 class="fw-300">ลบั้มภาพ</h1>
                                <p>พร้อมอัพเดท</p>
                            </div>
                            <p class="color-white no-margin">สาระสุขภาพทันสมัยให้คุณเข้าใจง่าย</p>
                            <h2 class="color1 no-margin">ไม่ตกเทรนด์!</h2>
                            <div class="btns">
                                <a class="btn btn-action btn-primary next-icon" href="#">
                                    อัลบั้มภาพทั้งหมด
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>