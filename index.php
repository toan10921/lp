<?php
//toanngo92
?>
<!DOCTYPE html>
<html amp lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:url" content="http://maia2.web888.vn/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="FPT GREENWICH TUYỂN SINH ĐẠI HỌC 2019"/>
    <meta property="og:description"
          content="FPT Greenwich tuyển sinh Đại học 2019 các khối ngành Công nghệ thông tin, Quản trị kinh doanh, Thiết kế đồ họa theo hình thức xét tuyển hồ sơ, không thi tuyển. Đăng ký ngay!"/>
    <meta property="og:image" content="http://tuyensinh.greenwich.edu.vn/img/shareFB.jpg"/>
    <title>FPT GREENWICH TUYỂN SINH ĐẠI HỌC 2019</title>
    <!-- Base href for relative path -->
    <!--<base href="http://localhost/gw/lp/">-->
    <!--<link rel="amphtml" href="http://localhosthost/gw/lp/index-amp.html" />-->
    <base href="http://web888.vn/demo/greenwich/">

    <!-- css -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto:400,500,700,900&display=swap&subset=vietnamese"
          rel="stylesheet">
    <!-- Bootstrap libs -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/bootstrap-theme.min.css">
    <!-- Owl libs -->
    <link rel="stylesheet" href="assets/css/lib/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/lib/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/lib/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lib/animations.min.css">
    <link rel="stylesheet" href="assets/css/lib/hover.min.css">
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- js -->
    <!--<script async src="https://cdn.ampproject.org/v0.js"></script>-->
    <script>
        // amp version
        if (screen.width <= 768) {
            document.location = "http://web888.vn/demo/greenwich/mobile.html";
            // document.location = "http://localhost/gw/lp/mobile.html";
        }

    </script>
    <script src="assets/js/lib/jquery-3.2.1.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/lib/owl.carousel.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<section class="header" id="header">
    <div class="row-wrapper  bg-color">
        <div class="container header-row-wrapper hd-row1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="address-contact-wrap flex-wrap flex-wrap-wrap jtf-content-end">
                        <a class="white" href="tel:+8402473002266">
                            <i class="fa fa-phone"></i> <span class="title14 font-500">HOTLINE: 024.7300.2266</span>
                        </a>
                        <a class="white" href="javascript:void(0)">
                            <i class="fa fa-phone"></i> <span class="title14 font-500">HOTLINE: 0236.7300.2266</span>
                        </a>
                        <a class="white" href="javascript:void(0)">
                            <i class="fa fa-phone"></i> <span class="title14 font-500">HOTLINE: 024.7300.2266</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container header-row-wrapper">
        <div class="row">
            <div class="col-sm-3 col-logo">
                <h1 class="logo no-margin">
                    <a href="#"><img src="assets/images/logo-greenwich.png"/></a>
                </h1>
            </div>
            <div class="col-sm-7 col-menu">
                <div class="main-nav text-uppercase font-bold">
                    <ul class="list-none flex-wrap flex-wrap-wrap jtf-content-end">
                        <li><a href="http://greenwich.edu.vn/">Trang chủ</a></li>
                        <li><a href="#box_gioi_thieu">Giới thiệu</a></li>
                        <li><a href="#">Chuyên ngành</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Truyền thông</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-register">
                <a data-toggle="modal" data-target="#register_form_modal" class="btn-dk  pull-right dang_ky_btn text-uppercase text-center font-500 fontosw title18 white hvr-white bg-color-orange inline-block"
                   href="javascript:void(0)">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</section>
<section class="main-content js-main-content" id="content">
    <div class="row1 row-banner pst-relative" style="background: url('assets/images/banner/banner1.jpg')">
        <div class="image-bn visible-hidden">
            <img src="assets/images/banner/banner-greenwich-1.jpg"/>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 form-dangky pst-absolute">
                    <div class="row-form">
                        <div class="dong-form text-center">
                            <h3>ĐĂNG KÝ XÉT TUYỂN</h3>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <input type="text" placeholder="Họ và tên" class="kichthuoc" id="name">
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <input type="text" placeholder="Trường THPT của bạn" class="kichthuoc" id="truong">
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <input type="number" placeholder="Điện thoại" class="kichthuoc" id="dienthoai">
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <input type="text" placeholder="Địa chỉ" class="kichthuoc" id="diachi">
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <select name="tp" id="noidangky" class="kichthuoc">
                                <option disabled="disabled" selected="selected">Nơi đăng ký tuyển sinh</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Tp.Hồ Chí Minh">Tp.Hồ Chí Minh</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <select name="tp" id="chuyennganh" class="kichthuoc">
                                <option disabled="disabled" selected="selected">Chuyên ngành</option>
                                <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                <option value="Thiết kế đồ họa">Thiết kế đồ họa</option>
                                <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
                                <option value="Quản trị marketing">Quản trị marketing</option>
                                <option value="Quản trị sự kiện">Quản trị sự kiện</option>
                                <option value="Quản trị truyền thông">Quản trị truyền thông</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form">
                            <select name="tp" id="phuongtienbietden" class="kichthuoc">
                                <option disabled="disabled" selected="selected">Bạn biết thông tin qua</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Tìm kiếm Google">Tìm kiếm Google</option>
                                <option value="Website Lop12.edu.vn">Website Lop12.edu.vn</option>
                                <option value="Nguồn khác">Nguồn khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="dong-form  text-center text-uppercase">
                            <button  type="submit" class="btn text-uppercase radius30 fontosw dangky kichthuoc" value="Đăng ký"><span>Đăng ký</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 wcs-content">
                <div id="box_gioi_thieu" class="wcs-title">
                    <div class="title-box-wrap text-center">
                        <h2 class="title-box color pst-relative fontosw no-margin title30 text-uppercase">Vì sao nên LỰA
                            CHỌN ĐẠI HỌC
                            GREENWICH VIỆT NAM</h2>
                        <p class="title-desc font-600 pst-relative">
                            Đại học Greenwich (Việt Nam) được hình thành trên cơ sở liên kết giữa Đại học Greenwich
                            (Vương Quốc Anh) và Tổ chức giáo dục FPT từ năm 2009 với hơn 10.000 sinh viên từ 10 quốc gia
                            trên thế giới đã và đang theo học.
                        </p>
                    </div>
                </div>
                <div class="row wcs-wrap">
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden"  data-toggle="modal" data-target="#myModal">
                                <div class="icon-box2">
                                    <i class='fa fa-address-card-o'></i>
                                    <h3 class="title16 font-bold no-margin">Học tại Việt Nam - Nhận bằng Anh Quốc</h3>
                                </div>
                                <div>
                                    <div class="wcs-short-desc title14">
                                        Sinh viên sau quá trình học tập trực tiếp tại Việt Nam được cấp bằng tại Anh Quốc do Đại Học Greenwich cấp
                                        [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Nền giáo dục Vương quốc Anh nổi tiếng khắp thế giới với những tiêu chuẩn khắt
                                                khe nhằm đảm bảo được tính chuyên nghiệp và thực dụng, đáp ứng nhu cầu phát
                                                triển trong công việc.
                                            </li>
                                            <li>Tốt nghiệp được nhân bằng Cử nhân do đại học Greenwich cấp.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal1">
                                <div class="icon-box2">
                                    <i class='fa fa-file-text-o'></i>
                                    <h3 class="title16 font-bold no-margin">Được bộ Giáo dục & Đào tạo Việt Nam công
                                        nhận</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Chương trình học được Bộ Giáo dục & Đào tạo Việt Nam công nhận, cấp giấy phép hoạt động chính thức tại Việt Nam
                                        [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Chương trình được Bộ Giáo dục & Đào tạo Việt Nam công nhận, cấp giấy phép số
                                                2526/QĐ-BGD ĐT ngày 10/07/2012, 432/QĐ-BGD ĐT ngày 01/02/2013, 2455/QĐ-BGD ĐT
                                                ngày 10/07/2015 và 3689/QD-BGD ĐT ngày 22/09/2016.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal2">
                                <div class="icon-box2">
                                    <i class='fa fa-building-o'></i>
                                    <h3 class="title16 font-bold no-margin">Chương trình thực tập đặc Doanh nghiệp
                                        (OJT)</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Theo thống kê, sau kì OJT trên 40% Sinh viên Greenwich (Việt Nam) được kí hợp đồng chính
                                        thức khi chưa tốt nghiệp [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal2" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>OJT (On the job tranning) là chương trình thực tập đặc biệt tại doanh nghiệp với
                                                tổng thời lượng 4 - 8 tháng với 2 giai đoạn đào tạo, mang đến cho sinh viên kiến
                                                thức thực tiễn, giúp sinh viên trải nghiệm nghề nghiệp, tích lũy kinh nghiệm
                                                thực tiễn cho công việc và sự nghiệp sau khi ra trường
                                            </li>
                                            <li>Theo thống kê, sau kì OJT có tới 40% sinh viên Đại học Greenwich (Việt Nam) được
                                                kí hợp đồng chính thức ngay khi chưa tốt nghiệp
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5 last-item">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal3">
                                <div class="icon-box2">
                                    <i class='fa fa-graduation-cap'></i>
                                    <h3 class="title16 font-bold no-margin">Cơ hội việc làm ngay sau khi tốt nghiệp</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Sinh viên Đại học Greenwich (Việt Nam) được chào đón làm việc tại nhiều doanh nghiệp
                                        Trong nước và quốc tế [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal3" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Sinh viên tốt nghiệp Đại học Greenwich (Việt Nam) được chào đón làm việc tại Tập
                                                đoàn FPT (với 7 công ty thành viên và hơn 30,000 cán bộ nhân viên), và hàng trăm
                                                doanh nghiệp, tập đoàn đối tác lớn ở Việt Nam cũng như trên toàn thế giới:
                                                Viettel, GameLoft, Vietinbank, Mercedes-Benz, Prudential, Sacombank, Haveynash,
                                                SAP…
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal4">
                                <div class="icon-box2">
                                    <i class='fa fa-university'></i>
                                    <h3 class="title16 font-bold no-margin">Môi trường giảng viên và sinh viên Quốc tế</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Sinh viên được học tập trong môi trường du học tại Việt Nam với giáo trình quốc tế,
                                        giảng viên và sinh viên đến từ nhiều quốc gia trên thế giới [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal4" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Sinh viên học tại Đại học Greenwich (Việt Nam) sẽ được học tập trong môi trường
                                                giống như du học với giáo trình quốc tế, giảng viên và sinh viên đến từ nhiều
                                                quốc gia trên thế giới.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal5">
                                <div class="icon-box2">
                                    <i class='fa fa-plane'></i>
                                    <h3 class="title16 font-bold no-margin">Cơ hội học tập và làm việc tại nước ngoài</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Ngay trong quá trình theo học tại trường, sinh viên Đại học Greenwich (Việt Nam) có cơ
                                        hội trải nghiệm môi trường học tập tại các quốc gia ngoài Việt Nam [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal5" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>
                                                <div class="chance-desc">
                                                    Ngay trong quá trình theo học tại trường, sinh viên Đại học Greenwich (Việt
                                                    Nam) có cơ hội trải nghiệm môi trường học tập tại các quốc gia ngoài Việt
                                                    Nam thông qua các chương trình trao đổi sinh viên , thực tập, hội thảo...
                                                    tiêu biểu như:
                                                </div>
                                                <div class="list-chance">
                                                    <span class="chance-item">Chương trình học tiếng Anh tại các nước Philippines,Malaysia,Singapore...</span>
                                                    <span class="chance-item">Học một kì học chuyên nghành tại Đại học Greenwich - Anh Quốc</span>
                                                    <span class="chance-item">Trải nghiệm cuộc sống bản địa và giao lưu văn hóa tại các nước</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal6">
                                <div class="icon-box2">
                                    <i class='fa fa-check'></i>
                                    <h3 class="title16 font-bold no-margin">Hoàn thiện bản thân - Phát triển kĩ năng</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Sinh viên sẽ được phát triển toàn diện với chương trình đào tạo kĩ năng sống, kỹ năng
                                        mềm thông qua các lớp học kỹ năng và nhiều hoạt động trải nghiệm thú vị [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal6" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Sinh viên sẽ được phát triển toàn diện với chương trình đào tạo kĩ năng sống, kỹ
                                                năng mềm thông qua các lớp học kỹ năng và nhiều hoạt động trải nghiệm thú vị
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="wcs-item  radius5 last-item">
                            <div class="img-wrap radius5 overflow-hidden" data-toggle="modal" data-target="#myModal7">
                                <div class="icon-box2">
                                    <i class='fa fa-money'></i>
                                    <h3 class="title16 font-bold no-margin">Chi phí bằng 1/10 so với đi du học tại Anh</h3>
                                </div>
                                <div class="">
                                    <div class="wcs-short-desc title14">
                                        Du học trong nước với phi phí chỉ bằng 1/10 so với đi du học tại Anh. Chất lượng học tập chuẩn quốc tế - Tốt nghiệp bằng Cử Nhân đại học Greenwich cấp [...]
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal7" role="dialog">
                                <div class="modal-dialog">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="wcs-desc">
                                        <ul class="list-none">
                                            <li>Nền giáo dục Vương quốc Anh nổi tiếng khắp thế giới với những tiêu chuẩn khắt
                                                khe nhằm đảm bảo được tính chuyên nghiệp và thực dụng, đáp ứng nhu cầu phát
                                                triển trong công việc.
                                            </li>
                                            <li>Tốt nghiệp được nhân bằng Cử nhân do đại học Greenwich cấp.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap text-center">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#register_form_modal"
                       class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                        ký</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End why choose us -->
    <!-- Gioi thieu -->
    <div class="data-wrap bg-color">
        <div class="container fullwidth">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-thongke pst-relative">
                    <div class="anh-gt text-center pst-absolute bg-overlay flex-wrap jtf-content-center align-items-center">
                        <div class="anh-gt-items">
                            <a class=" title70 color hvr-grow" href="https://www.youtube.com/watch?v=i3OK_ZNshbI" data-fancybox data-caption="" >
                                <i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-gioithieu">
                    <h4 class="title-box pst-relative fontosw white no-margin font-bold title30 text-uppercase ">Giới thiệu về đại học Greenwich</h4>
                    <div class="white font-500">
                        <div class="desc">
                            <p>Đại học Greenwich (Việt Nam) được hình thành trên cơ sở liên kết giữa Đại học Greenwich
                                (Vương Quốc Anh) và Tổ chức giáo dục FPT từ năm 2009 với hơn 10.000 sinh viên từ 10 quốc gia
                                trên thế giới đã và đang theo học.
                            </p>
                            <p>Nội dung đào tạo, giảng viên và cơ sở vật chất được thẩm định, công nhận về chất lượng bởi
                                các chuyên gia của Vương quốc Anh và Đại học Greenwich.
                            </p>
                            <p>Sinh viên tốt nghiệp sẽ nhận bằng Cử nhân (Bằng Đại học) do Đại học Greenwich cấp, có giá
                                trị toàn cầu. Với bằng cấp này, sinh viên có thể học tiếp lên Thạc sỹ, Tiến sỹ tại nhiều
                                nước trên thế giới.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End gioi thieu -->
    <!-- Chuyen nganh -->
    <div class="chuyen-nganh-wrap-outer">
        <div class="chuyen-nganh-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box-wrap text-center">
                            <h2 class="title-box color pst-relative fontosw no-margin title30 text-uppercase">Chuyên ngành đào tạo</h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#IT" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-cntt.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#IT" href="javascript:;" class="color">Công nghệ thông tin</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#IT" href="javascript:;" class="color font-500 readmore text-uppercase">Xem thêm</a>
                                    </div>

                                    <div id="IT" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-cntt.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">CÔNG NGHỆ THÔNG TIN</h4>
                                                        <p class="job-content white">
                                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Ngoài những công ty chuyên về nghiên cứu, phát triển phần mềm ứng dụng, công nghệ, hiện nay hầu như mọi tổ chức, doanh nghiệp đều sử dụng hệ thống máy tính, website và cần người có chuyên môn về CNTT để quản trị hệ thống. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại các vị trí phù hợp sau:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li> Kỹ sư Thiết kế phần mềm</li>
                                                        <li> Kỹ sư Thiết kế và quản trị Cơ Sở Dữ Liệu</li>
                                                        <li> Chuyên viên Quản trị dự án</li>
                                                        <li> Chuyên viên Quản trị chất lượng phần mềm</li>
                                                        <li> Kỹ sư Triển khai giải pháp phần mềm</li>
                                                        <li> Kỹ sư Phát triển web</li>
                                                        <li> Kỹ sư lập trình Ứng dụng cho thiết bị Di động (iOS, Android)</li>
                                                        <li> Kỹ sư lập trình Games</li>
                                                        <li> Chuyên viên Quản trị hệ thống</li>
                                                        <li> Chuyên viên Nghiên cứu công nghệ</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#DESIGN" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#DESIGN" href="javascript:;" class="color">Thiết kế đồ họa</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#DESIGN" href="javascript:;" class="color font-500 readmore text-uppercase">Xem thêm</a>
                                    </div>
                                    <div id="DESIGN" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">THIẾT KẾ ĐỒ HỌA</h4>
                                                        <p class="job-content white">
                                                            Chương trình đào tạo sẽ trang bị cho sinh viên kiến thức vững chắc từ nền tảng nghệ thuật cơ bản đến phương pháp thiết kế, các kỹ thuật ứng dụng và sử dụng công nghệ trong thiết kế đồ họa, xu hướng phát triển các ứng dụng đồ họa trên thế giới. Sinh viên sau khi tốt nghiệp có thể đảm nhận các vị trí công việc sau:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li>Chuyên viên thiết kế quảng cáo, marketing</li>
                                                        <li>Chuyên viên thiết kế đồ hoạ 2D, 3D</li>
                                                        <li>Chuyên gia hiệu ứng hình ảnh</li>
                                                        <li>Chuyên gia thiết kế game</li>
                                                        <li>Chuyên viên thiết kế giao diện Website</li>
                                                        <li>Chuyên viên xử lý ảnh, phim</li>
                                                        <li>Chuyên viên sáng tạo</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#QTKD" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-qtkd.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#QTKD" href="javascript:;" class="color">Quản trị kinh doanh</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#QTKD" href="javascript:;" class="color font-500 readmore text-uppercase">Xem thêm</a>
                                    </div>
                                    <div id="QTKD" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">QUẢN TRỊ KINH DOANH</h4>
                                                        <p class="job-content white">
                                                            Chuyên ngành Quản trị Kinh doanh sẽ trang bị cho sinh viên những kiến thức về xây dựng, vận hành, quản lý doanh nghiệp một cách đầy đủ, chính xác và toàn diện. Ngoài ra sinh viên còn được rèn luyện ý chí, kỹ năng, phẩm chất và thái độ cần thiết để trở thành những nhà quản lý chuyên nghiệp của các tổ chức trong tương lai. Cơ hội nghề nghiệp cho các sinh viên tốt nghiệp ngành Quản trị Kinh doanh rất phong phú. Một số công việc phù hợp như:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li>Chuyên viên Kinh doanh</li>
                                                        <li>Chuyên viên Phát triển thị trường</li>
                                                        <li>Chuyên viên Phân tích hoạt động kinh doanh</li>
                                                        <li>Chuyên viên Quản lý và chăm sóc khách hàng</li>
                                                        <li>Chuyên viên Hành chính Nhân sự</li>
                                                        <li>Chuyên viên Makerting</li>
                                                        <li>Chuyên viên Đối ngoại</li>
                                                        <li>Chuyên viên Xuất nhập khẩu</li>
                                                        <li>Chuyên viên Quan hệ công chúng</li>
                                                        <li>Trợ lý giám đốc</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#QTSK" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-qtsk.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#QTSK" href="javascript:;" class="color">Quản trị sự kiện</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#QTSK" href="javascript:;" class="color font-500  readmore text-uppercase">Xem thêm</a>
                                    </div>

                                    <div id="QTSK" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">QUẢN TRỊ SỰ KIỆN</h4>
                                                        <p class="job-content white">
                                                            Chương trình này sẽ trang bị cho sinh viên kiến thức từ cơ bản đến chuyên sâu về ngành Quản trị Sự kiện. Hơn nữa, sinh viên còn được trau dồi kỹ năng sáng tạo, nhạy bén trong suy nghĩ để trở nên linh hoạt hơn trong ngành nghề sôi động và đầy thử thách này. Tốt nghiệp ngành Quản trị Sự kiện, sinh viên sẽ có đủ kiến thức để đảm nhận các vị trí như sau:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li>Chuyên viên Quản lý Sự kiện</li>
                                                        <li>Chuyên viên Truyền thông</li>
                                                        <li>Chuyên viên Quảng cáo</li>
                                                        <li>Chuyên viên Quản lý Quan hệ Công chúng</li>
                                                        <li>Chuyên viên Quản lý Mạng xã hội</li>
                                                        <li>Chuyên viên Sáng tạo</li>
                                                        <li>Chuyên viên Đối ngoại</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#QTMKT" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-qtmkt.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#QTMKT" href="javascript:;" class="color">Quản trị Marketing</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#QTMKT" href="javascript:;" class="color font-500 readmore text-uppercase">Xem thêm</a>
                                    </div>
                                    <div id="QTMKT" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">QUẢN TRỊ MARKETING</h4>
                                                        <p class="job-content white">
                                                            Kết hợp giữa lý thuyết và thực hành, chương trình sẽ trang bị cho sinh viên kiến thức chuyên môn từ cơ bản đến nâng cao về Marketing hiện đại cùng những kỹ năng cần thiết như phân tích, tư duy sáng tạo, giao tiếp... Các công việc và vị trí mà sinh viên tốt nghiệp chuyên ngành Marketing có thể đảm nhiệm:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li>Chuyên viên Marketing</li>
                                                        <li>Chuyên viên Kinh doanh</li>
                                                        <li>Chuyên viên Quản lý nhãn hiệu</li>
                                                        <li>Chuyên viên Quản lý kênh phân phối</li>
                                                        <li>Chuyên viên Kinh doanh Quốc tế</li>
                                                        <li>Chuyên viên truyền thông</li>
                                                        <li>Chuyên viên Nghiên cứu thị trường</li>
                                                        <li>Chuyên viên Quản lý và chăm sóc khách hàng</li>
                                                        <li>Chuyên viên Giám sát bán hàng</li>
                                                        <li>Chuyên viên Quan hệ khách hàng</li>
                                                        <li>Chuyên viên Đối ngoại</li>
                                                        <li>Chuyên viên Quan hệ công chúng</li>
                                                        <li>Chuyên viên Quản lý sự kiện</li>
                                                        <li>Trợ lý Giám đốc</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chuyen-nganh-item">
                                    <a data-fancybox="" data-src="#QTTT" href="javascript:;" class="text-center img-wrap overflow-hidden">
                                        <img class="transition hvr-grow" src="assets/images/chuyen-nganh/chuyen-nganh-qttt.jpg"/>
                                    </a>
                                    <div class="text-wrap">
                                        <h3 class="title24 font-500 no-margin fontosw">
                                            <a data-fancybox="" data-src="#QTTT" href="javascript:;" class="color">Quản trị truyền thông</a>
                                        </h3>
                                        <p class="desc">
                                            Môi trường làm việc trong ngành CNTT rất đa dạng với nhu cầu nhân lực rất lớn. Sinh viên tốt nghiệp chương trình FPT Greenwich ngành CNTT có cơ hội làm việc tại nhiều vị trí phù hợp...
                                        </p>
                                        <a data-fancybox="" data-src="#QTTT" href="javascript:;" class="color font-500 readmore text-uppercase">Xem thêm</a>
                                    </div>
                                    <div id="QTTT" class="fancybox-chuyen-nganh" style="display: none">
                                        <div class="row">
                                            <div class="content-popup col-sm-5 first-block">
                                                <div class="first-block-inner bg-color-orange">
                                                    <img src="assets/images/chuyen-nganh/chuyen-nganh-do-hoa.jpg"/>
                                                    <div class="content-text">
                                                        <h4 class="no-margin title20 fontosw white">QUẢN TRỊ TRUYỀN THÔNG</h4>
                                                        <p class="job-content white">
                                                            Với nhu cầu về các hoạt động kinh tế dựa trên truyền thông như quảng cáo, PR, xây dựng nhãn hiệu, tiếp thị, truyền thông tập đoàn trong xã hội đang tăng mạnh. Nhu cầu về nhân lực truyền thông được đào tạo chuyên nghiệp vì thế đang tăng lên. Sinh viên sau khi tốt nghiệp có thể đảm nhận các vị trí công việc sau:
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-popup col-sm-7 second-block">
                                                <div class="second-block-inner">
                                                    <ul class="job-target list-none">
                                                        <li>Lãnh đạo các bộ phận truyền thông của các cơ quan, doanh nghiệp.</li>
                                                        <li>Chuyên gia tổ chức, triển khai các hoạt động truyền thông, quảng cáo, tổ chức sự kiện, quan hệ công chúng.</li>
                                                        <li>Biên tập viên, phóng viên tại các tòa soạn báo in, báo điện tử; đài phát thanh, đài truyền hình; nhà xuất bản</li>
                                                        <li>Chuyên gia marketing, quan hệ khách hàng tại các doanh nghiệp</li>
                                                        <li>Cán bộ nghiên cứu, giảng dạy tại các cơ sở đào tạo về lĩnh vực Ngành Công nghệ truyền thông</li>
                                                    </ul>
                                                    <div class="btn-wrap text-center">
                                                        <a href="#" data-toggle="modal" data-target="#register_form_modal" class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                                            ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-bg-wrap">
            <img src="assets/images/body-bg.jpg" alt="chuyên ngành đào tạo" />
        </div>
        <div class="container">
            <div class="tu-row-2 chuyen-nganh-wrap">
                <div class="row">
                    <div class=" col-sm-4 col-dangky">
                        <div class="col-dangky-inner  ">
                            <div class="form-dangky">
                                <div class="row-form">
                                    <div class="dong-form text-center">
                                        <h3 class="no-margin">ĐĂNG KÝ XÉT TUYỂN</h3>
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <input type="text" placeholder="Họ và tên" class="kichthuoc">
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <input type="text" placeholder="Trường THPT của bạn" class="kichthuoc" >
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <input type="number" placeholder="Điện thoại" class="kichthuoc" >
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <input type="text" placeholder="Địa chỉ" class="kichthuoc">
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <select name="tp" class="kichthuoc">
                                            <option disabled="disabled" selected="selected">Nơi đăng ký tuyển sinh</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Tp.Hồ Chí Minh">Tp.Hồ Chí Minh</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <select name="tp" class="kichthuoc">
                                            <option disabled="disabled" selected="selected">Chuyên ngành</option>
                                            <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                            <option value="Thiết kế đồ họa">Thiết kế đồ họa</option>
                                            <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
                                            <option value="Quản trị marketing">Quản trị marketing</option>
                                            <option value="Quản trị sự kiện">Quản trị sự kiện</option>
                                            <option value="Quản trị truyền thông">Quản trị truyền thông</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form">
                                        <select name="tp"  class="kichthuoc">
                                            <option disabled="disabled" selected="selected">Bạn biết thông tin qua</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Tìm kiếm Google">Tìm kiếm Google</option>
                                            <option value="Website Lop12.edu.vn">Website Lop12.edu.vn</option>
                                            <option value="Nguồn khác">Nguồn khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-form">
                                    <div class="dong-form  text-center text-uppercase">
                                        <button  type="submit" class="btn text-uppercase radius30 fontosw dangky kichthuoc" value="Đăng ký"><span>Đăng ký</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="bang-greenwich bg-color-orange pst-relative">
                                <h3 class="no-margin white title24 fontosw text-uppercase">Bằng cử nhân do đại học Greenwich Cấp</h3>
                            </div>
                            <a class="xem-mau-bang"  href="assets/images/certificate.png" data-fancybox>
                            <span class="white hvr-white text-uppercase" >
                            Xem mẫu bằng
                            </span>
                                <i class="fa fa-graduation-cap title30 white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-content">
                        <div class="col-content-inner">
                            <h3 class="chuyen-nganh-title white title24 bg-color fontosw no-margin text-uppercase font-500">Thông tin tuyển sinh</h3>
                            <div class="thong-tin-content">
                                <div class="han-nop font-bold title18 color-orange">Hạn nộp hồ sơ: 30/10/2019</div>
                                <table class="tbl-thongtin">
                                    <tr>
                                        <td>
                                            ĐỐI TƯỢNG
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Tốt nghiệp THPT hoặc tương đương</li>
                                                <li>Chuyển đổi tín chỉ từ các trường Đại học, Cao đẳng khác</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            hình thức
                                        </td>
                                        <td>
                                            <ul>
                                                <li>Xét tuyển theo chỉ tiêu - Ưu tiên nộp hồ sơ sớm</li>
                                                <li>
                                                    Tuyển thẳng:
                                                    - Đối với thí sinh có điểm tổng kết lớp 11 hoặc lớp 12 từ 6.5 trở lên.
                                                    - Hoặc thí sinh có điểm thi THPTQG 15 điểm trở lên
                                                </li>
                                                <li>
                                                    Thí sinh không thuộc diện tuyển thẳng sẽ xét học bạ và phỏng vấn đầu vào
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HỒ SƠ ĐĂNG KÝ XÉT TUYỂN</td>
                                        <td>
                                            <ul>
                                                <li>Đơn đăng ký xét tuyển (theo mẫu) <a class="mau-dk-xettuyen bg-color white  hvr-white"  href="http://greenwich.edu.vn/dondangky/Phieu_DANG_KY_XET_TUYEN.pdf">Download</a> </li>
                                                <li>Bản sao giấy khai sinh</li>
                                                <li>Bản sao bằng tốt nghiệp THPT hoặc giấy chứng nhận tốt nghiệp tạm thời (Công chứng)</li>
                                                <li>Bản sao học bạ THPT</li>
                                                <li>Bản sao CMND</li>
                                                <li>4 ảnh 3x4</li>
                                                <li>Chứng chỉ tiếng Anh (nếu có)</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HỌC BỔNG</td>
                                        <td>
                                            <div class="hocbong-desc">
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">TÀI NĂNG - GREEN TALENT</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Trị giá 30 - 50 -70 - 100% học phí toàn chương trình</p>
                                                <p class="font-500"><i class="fa fa-check-square-o  color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Thí sinh có điểm trung bình lớp 11 hoặc học kỳ I lớp 12 từ 9.0 trở lên.</li>
                                                    <li>Hoặc điểm thi THPT Quốc gia của tổ hợp 3 môn các khối thi A, A1, B, C, D, H, V từ 26 điểm trở lên.</li>
                                                    <li>Hoặc giải khuyến khích trở lên trong các kỳ thi cấp quốc gia, quốc tế hoặc giải ba trở lên cấp quận huyện ở các môn học: Toán, Ngoại ngữ, Tin học dành cho học sinh THPT.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">CHÌA KHÓA VÀNG</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Trị giá 10 triệu – 20 triệu – 40 triệu đồng</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Thí sinh có điểm trung bình lớp 11 hoặc học kỳ I lớp 12 từ 7.0 trở lên.</li>
                                                    <li>Tổng điểm thi THPT Quốc gia của tổ hợp 3 môn các khối thi A, A1, B, C, D, H, V từ 18 điểm trở lên.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">GREEN OVERSEA</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - 1 kỳ du học nước ngoài - mỗi suất trị giá tương đương vé máy bay 2 chiều, chi phí chỗ ở và học phí 1 kỳ học tiếng Anh trong vòng 1 tháng tại Malaysia hoặc Brunei</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Điểm trung bình môn Anh văn lớp 11 hoặc kỳ I lớp 12 từ 9.0 trở lên.</li>
                                                    <li>Hoặc có chứng chỉ IELTS từ 6.0 trở lên.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">GREEN FIELD STUDY</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Mỗi suất trị giá 18,000,000 đồng miễn học phí kỳ thực tập OJT, sinh viên trải nghiệm tại nước ngoài trong 1 tuần.</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Điểm trung bình môn Anh văn lớp 11 hoặc kỳ I lớp 12 từ 8.0 trở lên.</li>
                                                    <li>Hoặc có chứng chỉ IELTS từ 5.5 trở lên.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">CÔNG NGHỆ 4.0</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Dành cho thí sinh đăng ký nhập học ngành Công nghệ thông tin.</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Mỗi suất trị giá 30 triệu đồng.</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i>- Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Có điểm trung bình môn Toán & Tin học lớp 11 hoặc học kỳ I lớp 12 từ 8.0 trở lên.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Ưu đãi <strong class="color">MIỄN PHÍ GHI DANH</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - 4.6 triệu đồng/suất</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Áp dụng cho SV nhập học sớm, và cho tới khi hết số suất ưu đãi.</li>
                                                    <li>Ưu đãi được khấu trừ trực tiếp vào lần đóng học phí đầu tiên của sinh viên.</li>
                                                </ul>
                                                <h5><i class="fa fa-gift color-orange"></i> Học bổng <strong class="color">PHÁT TRIỂN NGUỒN NHÂN LỰC MIỀN TRUNG & MIỀN TÂY (*)</strong></h5>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Trị giá 30% trên tổng học phí toàn chương trình</p>
                                                <p class="font-500"><i class="fa fa-check-square-o color"></i> - Điều kiện xét duyệt:</p>
                                                <ul>
                                                    <li>Học sinh tốt nghiệp THPT, làm thủ tục nhập học tại cơ sở Đà Nẵng hoặc Cần Thơ.</li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="btn-wrap text-center">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#register_form_modal"
                               class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                                ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-bg-wrap">
            <img src="assets/images/body-bg.jpg" alt="chuyên ngành đào tạo" />
        </div>
    </div>
    <!-- End Chuyen nganh -->
    <!-- Cau chuyen sinh vien -->
    <div class="container cau-chuyen-sv-wrap">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box-wrap text-center">
                    <h2 class="title-box color pst-relative fontosw no-margin title30 text-uppercase">Câu chuyện sinh viên</h2>
                    <p class="title-desc font-600 pst-relative">
                        Với sứ mệnh đào tạo hàng ngàn sinh viên Việt Nam thì thành công của học viên cũng chính là thành công của Đại Học Greenwich (Việt Nam)
                    </p>
                </div>
                <div class="sinhvien_slider-outer">
                    <div class="js_sinhvien-slider sinhvien_slider owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="sinhvien-item radius5">
                            <p class="sv-desc">
                                Mặc dù tương đối bận rộn với những hoạt động nghệ thuật bên ngoài, nhưng em vẫn luôn quan niệm "quan trọng nhất trong thời gian này là phải luôn đảm bảo việc học tập của mình tại trường".
                            </p>
                            <h4 class="sv-career title12">Sinh viên chuyên ngành Quản trị Sự kiện</h4>
                            <h3 class="sv-name title18 font-500 no-margin">Lê Tam Triều Dâng</h3>
                            <div class="img-wrap overflow-hidden  radius5 clearfix">
                                <img class="hvr-grow" src="assets/images/sv-slider/le-tan-chieu-dang-1.jpg" />
                            </div>
                        </div>
                        <div class="sinhvien-item radius5">
                            <p class="sv-desc">
                                Học tại Đại học Greenwich (Việt Nam), em được tiếp cận với chương trình học tân tiến nhất, đồng thời nhà trường không ngừng đổi mới, cải tiến nhằm tạo nên môi trường học tập chuẩn quốc tế cho sinh viên.
                            </p>
                            <h4 class="sv-career title12">Sinh viên chuyên ngành CNTT</h4>
                            <h3 class="sv-name title18 font-500  no-margin">Lý Tùng Nam</h3>
                            <div class="img-wrap overflow-hidden  radius5 clearfix">
                                <img class="hvr-grow" src="assets/images/sv-slider/cam-nhan-3.jpg" />
                            </div>
                        </div>
                        <div class="sinhvien-item radius5">
                            <p class="sv-desc">
                                Em mong muốn sau khi tốt nghiệp THPT sẽ được tiếp cận môi trường giáo dục ở các nước khác. Sau khi tìm hiểu Đại học Greenwich (Việt Nam), em quyết định chọn chuyên ngành Quản trị sự kiện mà em thích.
                            </p>
                            <h4 class="sv-career title12">Sinh viên ngành quản trị sự kiện</h4>
                            <h3 class="sv-name  title18 font-500 no-margin">Phí Quỳnh Anh (SHYN)</h3>
                            <div class="img-wrap overflow-hidden  radius5 clearfix">
                                <img class="hvr-grow" src="assets/images/sv-slider/cam-nhan-2.jpg" />
                            </div>
                        </div>
                        <div class="sinhvien-item radius5">
                            <p class="sv-desc">
                                Học tại Đại học Greenwich (Việt Nam), em được tiếp cận với chương trình học tân tiến nhất, đồng thời nhà trường không ngừng đổi mới, cải tiến nhằm tạo nên môi trường học tập chuẩn quốc tế cho sinh viên.
                            </p>
                            <h4 class="sv-career title12">Sinh viên chuyên ngành CNTT</h4>
                            <h3 class="sv-name  title18 font-500 no-margin">Nguyễn Thanh Tùng</h3>
                            <div class="img-wrap overflow-hidden  radius5 clearfix">
                                <img class="hvr-grow" src="assets/images/sv-slider/Nguyen-thanh-tung-1.jpg" />
                            </div>
                        </div>
                        <div class="sinhvien-item radius5">
                            <p class="sv-desc">
                                Tôi muốn cảm ơn các giảng viên và nhân viên của Đại học Greenwich (Việt Nam) đã hỗ trợ tôi hơn ba năm theo học tại trường.
                                Tại đây, tôi cùng các bạn Việt Nam tham gia các câu lạc bộ, hoạt động ngoại khoá.
                            </p>
                            <h4 class="sv-career title12">Sinh viên chuyên ngành CNTT - Quốc tịch GHANA</h4>
                            <h3 class="sv-name  title18 font-500 no-margin">Awele Ndubuisi</h3>
                            <div class="img-wrap overflow-hidden  radius5 clearfix">
                                <img class="hvr-grow" src="assets/images/sv-slider/cam-nhan-1.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cau chuyen sinh vien -->
    <!-- Famous people -->
    <div class="nguoinoitieng">
        <div class="container fullwidth ">
            <div class="row">
                <div class="img-noitieng">
                    <div class="famous-img">
                        <a href="assets/images/famous-people/bich_phuong.jpg" data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/hari.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/huavivan.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/huavivan-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/thuy_chi.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/thuy_chi-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/bich_phuong.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/bich_phuong.jpg" data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" />
                            <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="img-noitieng">
                    <div class="famous-img">
                        <a href="assets/images/famous-people/bich_phuong.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/hari.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/huavivan.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/huavivan-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/thuy_chi.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/thuy_chi-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/bich_phuong.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/bich_phuong-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                    <div class="famous-img">
                        <a href="assets/images/famous-people/thuy_chi.jpg"  data-fancybox="gallery" data-gallery="http://web888.vn/demo/greenwich/assets/images/famous-people/bich_phuong.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/huavivan.jpg,http://web888.vn/demo/greenwich/assets/images/famous-people/thuy_chi.jpg" data-caption="" >
                            <img src="assets/images/famous-people/op/thuy_chi-op.jpg" /></a>
                        <span class="instagram-text-follow"><i class="fa fa-camera transition text-center title30"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Famous people -->
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="tu-gt col-sm-3">
                <h3 class="white no-margin fontosw text-uppercase font-500 ft-title">Giới thiệu</h3>
                <div>
                    <p class="grayd2">
                        Đại học Greenwich (Việt Nam) được hình thành trên cơ sở liên kết giữa Đại học Greenwich (Vương
                        Quốc Anh) và Tổ chức giáo dục FPT với sinh viên từ 10 quốc gia trên thế giới đã và đang theo
                        học.
                    </p>
                </div>
                <div>
                    <p class="grayd2">
                        Sinh viên tốt nghiệp sẽ nhận bằng Cử nhân (Bằng Đại học) do Đại học Greenwich cấp, có giá trị
                        toàn cầu.
                    </p>
                </div>
                <div class="logo-ft-wrap">
                    <img src="assets/images/logo-greenwich.png" />
                </div>
            </div>
            <div class="tu-cs col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-uppercase font-500 white no-margin fontosw ft-title">Hệ thống cơ sở</h3>
                    </div>
                    <div class="col-sm-6 cs-col-1">
                        <div class="cs-row-1">
                            <div class="text-uppercase font-bold">
                                <h4 class="title16 white no-margin adr-title">Hà nội</h4>
                            </div>
                            <div class="infor-desc">
                                <p class="grayd2">
                                    Tòa nhà DETECH - Số 8 Tôn Thất Thuyết - P.Mỹ Đình 2
                                    Q.Nam Từ Liêm.
                                    <br>
                                    Điện thoại: 024.7300.2266
                                    <br>
                                    Hotline: 0971.274.545 | 0981558080
                                </p>
                            </div>
                        </div>
                        <div class="cs-row-2">
                            <div class="text-uppercase font-bold">
                                <h4 class="title16 white no-margin adr-title">Hồ chí minh</h4>
                            </div>
                            <div class="infor-desc">
                                <p class="grayd2">
                                    CS1: Số 142-146 Phạm Phú Thứ - Phường 4 - Quận 6
                                    (Cuối đường 3/2)
                                    <br>
                                    CS2: 205 Nguyễn Xí, Phường 26, Bình Thạnh
                                    <br>
                                    Điện thoại: 028.7300.2266
                                    <br>
                                    Hotline: 0933.108.554 | 0971.294.545
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 cs-col-2">
                        <div class="cs-row-1">
                            <div class="text-uppercase font-bold">
                                <h4 class="title16 white no-margin adr-title">Đà nẵng</h4>
                            </div>
                            <div class="infor-desc">
                                <p class="grayd2">
                                    Tầng 2, Tòa nhà FPT, Đường số 1, KCN An Đồn, P. An Hải Bắc, Q. Sơn Trà, ĐN (593 Ngô
                                    Quyền rẽ vào)
                                    <br>
                                    Điện thoại: 0236.730.2266
                                    <br>
                                    Hotline: 0934.892.687
                                </p>
                            </div>
                        </div>
                        <div class="cs-row-2">
                            <div class="text-uppercase font-bold">
                                <h4 class="title16 white no-margin adr-title">Cần thơ</h4>
                            </div>
                            <div class="infor-desc">
                                <p class="grayd2">
                                    160 Đường 30/4 , Phường An phú, Quận ninh kiều , TP Cần Thơ
                                    <br>
                                    Điện thoại: 0292.3512369
                                    <br>
                                    Hotline: 0968.670.804 | 0936.600.861
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tu-bd col-sm-3">
                <h3 class="text-uppercase font-500 white no-margin fontosw  ft-title">Bản đồ</h3>
                <div>
                    <div class="thu-vien-anh-item radius5 overflow-hidden">
                        <a href="https://www.google.com/maps/place/Detech+Tower+Building/@21.028752,105.7795148,17z/data=!4m5!3m4!1s0x0:0x6fdddfac0aef54d0!8m2!3d21.0287521!4d105.7817034" data-fancybox data-caption="" ><img src="assets/images/maps.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="register_form_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-color">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title title24 white text-center fontosw">ĐĂNG KÝ TƯ VẤN</h4>
            </div>
            <div class="modal-body">
                <form class="form-tu-van" action="" method="post">
                    <div class="input-wrap flex-wrap flex-wrap-wrap">
                        <input type="text" placeholder="Họ và tên" name="ho_ten"/>
                        <input type="text" placeholder="Trường THPT bạn tốt nghiệp" name="truong_thpt"/>
                    </div>
                    <div class="input-wrap flex-wrap flex-wrap-wrap">
                        <input type="text" placeholder="Điện thoại" name="dien_thoai"/>
                        <input type="text" placeholder="Địa chỉ" name="dia_chi"/>
                    </div>
                    <div class="select-wrap flex-wrap flex-wrap-wrap">
                        <select>
                            <option value="0">Nơi đăng ký xét tuyển</option>
                            <option value="1">Hà nội</option>
                            <option value="2">TP. HCM</option>
                            <option value="3">Đà Nẵng</option>
                            <option value="4">Cần Thơ</option>
                        </select>
                        <select>
                            <option value="0">Chuyên ngành</option>
                            <option value="1">Công nghệ thông tin</option>
                            <option value="2">Thiết kế đồ họa</option>
                            <option value="3">Quản trị kinh doanh</option>
                            <option value="4">Quản trị marketing</option>
                            <option value="5">Quản trị sự kiện</option>
                            <option value="6">Quản trị truyền thông</option>
                        </select>
                    </div>
                    <div class="input-wrap textarea-wrap flex-wrap flex-wrap-wrap">
                        <textarea>Nội dung đăng ký ...</textarea>
                    </div>
                    <div class="btn-wrap text-center">
                        <a href="javascript:void(0)"
                           class="btn-dk dang_ky_btn text-center text-uppercase font-500 title18 fontosw white hvr-white bg-color inline-block">Đăng
                            ký</a>
                    </div>
                </form>
            </div>
            <!--<div class="modal-footer">-->
            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            <!--</div>-->
        </div>

    </div>
</div>
</body>
</html>