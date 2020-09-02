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
            [ 'name' => 'ข้อมูลของฉัน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">แ</div><h1 class="color2">บบสำรวจความคิดเห็น</h1>
                <p><strong>กรมอนามัย</strong> เชิญชวนทุกท่านร่วมตอบแบบสอบถาม</p>
            </div>
            <div class="grids">
            
                <div class="grid xl-75 lg-70 md-100 sm-100">

                    <form action="./" method="POST">
                        <div class="pb-1-5 border-bottom">
                            <div class="ss-icon-title mt-0">
                                <div class="icon bg-color4"><i class="fas fa-exclamation-triangle"></i></div>
                                <h2>
                                    คุณคิดว่า <span class="color4">"www.anamai.moph.go.th"</span> 
                                    ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ
                                </h2>
                            </div>
                            <div class="d-flex jc-space-between fw-wrap pl-1-5">
                                <div class="answers mt-1-5">
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_1" id="q_1_1">
                                            <label for="q_1_1">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_1" id="q_1_2">
                                            <label for="q_1_2">เว็บไซต์รกเกินไป</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_1" id="q_1_3">
                                            <label for="q_1_3">หาข้อมูลไม่พบหรือพบยาก</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_1" id="q_1_4">
                                            <label for="q_1_4">เว็บไซต์ทำงานไม่สมบูรณ์</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_1" id="q_1_5">
                                            <label for="q_1_5">เว็บไซต์ทำงานช้า</label>
                                        </div>
                                    </div>
                                    <div class="btns mt-1-5">
                                        <button type="submit" class="btn btn-action btn-secondary">
                                            โหวต
                                        </button>
                                    </div>
                                </div>
                                <div class="chart-container mt-1-5">
                                    <img class="lazy-img" data-src="./assets/img/default/pie_chart.png" alt="Pie Chart 01" />
                                </div>
                            </div>
                        </div> 
                        <div class="pt-1-5 pb-1-5 border-bottom">
                            <div class="ss-icon-title mt-0">
                                <div class="icon bg-color1"><i class="fas fa-exclamation-triangle"></i></div>
                                <h2>
                                    คุณคิดว่า <span class="color4">"www.anamai.moph.go.th"</span> 
                                    ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ
                                </h2>
                            </div>
                            <div class="d-flex jc-space-between fw-wrap pl-1-5">
                                <div class="answers mt-1-5">
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_2" id="q_2_1">
                                            <label for="q_2_1">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_2" id="q_2_2">
                                            <label for="q_2_2">เว็บไซต์รกเกินไป</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_2" id="q_2_3">
                                            <label for="q_2_3">หาข้อมูลไม่พบหรือพบยาก</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_2" id="q_2_4">
                                            <label for="q_2_4">เว็บไซต์ทำงานไม่สมบูรณ์</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control radio-control">
                                            <input type="radio" name="q_2" id="q_2_5">
                                            <label for="q_2_5">เว็บไซต์ทำงานช้า</label>
                                        </div>
                                    </div>
                                    <div class="btns mt-1-5">
                                        <button type="submit" class="btn btn-action btn-secondary">
                                            โหวต
                                        </button>
                                    </div>
                                </div>
                                <div class="chart-container mt-1-5">
                                    <img class="lazy-img" data-src="./assets/img/default/pie_chart.png" alt="Pie Chart 02" />
                                </div>
                            </div>
                        </div> 
                    </form>

                    <div class="pagination mt-2">
                        <div class="wrapper">
                            <a href="#" class="page-btn page-first disabled"></a>
                            <a href="#" class="page-btn page-prev disabled"></a>
                            <a href="#" class="page-btn active">01</a>
                            <a href="#" class="page-btn">02</a>
                            <a href="#" class="page-btn">03</a>
                            <a href="#" class="page-btn">04</a>
                            <a href="#" class="page-btn">05</a>
                            <a href="#" class="page-btn page-next"></a>
                            <a href="#" class="page-btn page-last"></a>
                            <a class="btn btn-action btn-sm btn-secondary next-icon" href="#">
                                ดูแบบสำรวจทั้งหมด
                            </a>
                        </div>
                    </div>

                </div>
            
                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/34.jpg">
                        <img class="float-img type-15" src="./assets/img/hero/31.png" alt="Slot Float Image 01" />
                        <div class="slot mt-1">
                            <h2 class="header-text quote-text quote-inline">
                                <span class="fw-400">กรรมอนามัย</span> <br>
                                เรามีสาระสุขภาพดีๆ <br>
                                <span class="text-xl fw-400 color1">ส่งตรงถึงคุณ</span> <br>
                                <span class="text-xl">ทุกวัน</span>
                            </h2>
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