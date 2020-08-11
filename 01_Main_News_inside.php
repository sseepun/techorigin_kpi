<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Banner 02 */
        .banner-02 .container {width: inherit; position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        /* date display */
        .date-display {position:absolute; bottom:0; width:20%; height: 20%; color:#fff; }
        .date-display .wrapper {position:relative; width:100%; height:100%; display:flex; flex-wrap:wrap;}
        .date-display .day-container{width: 40%; display:flex; justify-content: flex-end; align-items:center;}
        .date-display .day-container .day {font-size:400%;}
        .date-display .month-year-container {width:60%; display:flex; flex-wrap:wrap;}
        .date-display .month-year-container .month {height:50%; width:100%; font-size:150%; display:flex; align-items:flex-end;}
        .date-display .month-year-container .year {height:50%; width:100%; font-size:150%; display:flex; align-items:flex-start;}
        
        /* content-03 */
        .content-03 .container {width:inherit;}
        .content-03 .container .title {position:relative; display:flex;}
        .content-03 .container .title .lead {font-size:800%; position:absolute; top: calc(-50% - 0.25rem); font-weight:200;}
        .content-03 .container .title .heading {font-size:200%; padding-left:3.5rem;}
        .content-03 .container .text-container p {margin:0; font-size:150%; padding-top:2rem;}
        
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-news-inside">
        <div class="container">
            <div class="grids">
                <section class="grid lg-75">
                    <!-- Banner 02 -->
                    <section class="banner-02">
                        <div class="container">
                            <div class="img-container">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');">
                                </div>
                            </div>
                            <div class="date-display">
                                <div class="wrapper">
                                    <div class="day-container">
                                        <div class="day">28</div>
                                    </div>
                                    <div class="month-year-container">
                                        <div class="month">กรกฎาคม</div>
                                        <div class="year">2563</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div style="padding-top:2rem;"></div>
                    <section class="content-03">
                        <div class="container">
                            <div class="title">
                                <div class="lead">ก</div>
                                <div class="heading">
                                    รมอนามัย เตือนขับรถทางไกลดื่มกาแฟเกิน <span>4 แก้วต่อวันเสี่ยงหัวใจเต้นเร็ว</span> <br>
                                    มือสั่น ใจสั่นแนะคุมปริมาณแต่พอดี
                                </div>
                            </div>
                            <div class="text-container">
                                <p>กรมอนามัย กระทรวงสาธารณสุข แนะคนขับรถทางไกลดื่มกาแฟมากไปเกิน 4 แก้วต่อวัน หวั่นคาเฟอีน
                                    เกินปริมาณที่ร่างกายต้องการ เสี่ยงทำให้หัวใจเต้นเร็ว มือสั่น ใจสั่น แนะดื่มปริมาณพอสมควรเพื่อสร้างความตื่นตัว
                                    พร้อมย้ำเครื่องดื่มชูกำลังควรเลี่ยงเช่นกัน เปลี่ยนเป็นดื่มน้ำสะอาดให้เพีนงพอ หรือกินผลไม้หรือดื่มน้ำผลไม้เปรี้ยว
                                    ให้วิตามินซีแทนจะดีกว่า
                                </p>
                                <p>
                                    แพทย์หญิงอัมพร เบญจพลพิทักษ์ รองอธิบดีกรมอนามัยและโฆษกกระทรวงสาธารณสุข เปิดเผยว่า ช่วงเทศกาลสงกรานต์
                                    ประชาชนส่วนใหญ่จะเดินทางกลับภูมิลำเนาหรือท่องเที่ยวต่างจังหวัด ซึ่งระหว่างการเดินทางผู้ขับรถอาจมีอาการง่วงและเหนื่อยล้า
                                    อ่อนเพลียผู้ขับรถบางรายจึงใช้วิธีการดื่มกาแฟซึ่งมีสารคาเฟอีนเพื่อกระตุ้นให้ร่างกายตื่นตัว แต่การดื่มกาแฟหากดื่มมากกว่า
                                    4 แก้วต่อวันจะทำให้ร่างกายได้รับคาเฟอีนมากถึง 500 - 1000 มิลลิกรัม ทั้ง ๆ ที่โดยปกติร่างกายควรได้รับคาเฟอีนไม่เกิน
                                    400 มิลลิกรมต่อวันเท่านั้น จึงอาจส่งผลให้อาการหัวใจเต้นเร็ว มือสั่น ใจสั่น และยังส่งผลต่อระบบทางเดินปัสสาวะด้วย
                                    เพราะเมื่อดื่มกาแฟไปแล้วประมาณ 30 นาทีถึง 1 ชั่วโมง คาเฟอีนจะออกฤทธิ์และภายในระยะเวลา 4 ชั่วโมงสารคาเฟอีนกว่าครึ่ง
                                    จะถูกขับออกมาพร้อมกับปัสสาวะที่เพิ่มมากขึ้น
                                </p>
                            </div>
                        </div>
                    </section>


                </section>
                <section class="grid lg-25">
                </section>
            </div>
        </div>
    
    </section>
    <?php include_once('include/script.php'); ?>
</body>
</html>
