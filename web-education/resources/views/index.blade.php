@extends('layout')
@section('content')

@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif

@include('header')
  <!-- Start Banner
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel text-light text-center top-pad text-dark slide animate_text" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bootcarousel" data-slide-to="1"></li>
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active bg-cover" style="background-image: url(assets/img/banner/4.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Học hỏi từ chúng tôi <strong>  tăng tốc tương lai tươi sáng của bạn.</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                            # Cải thiện cuộc sống thông qua học tập
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Tìm hiểu thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url(assets/img/banner/17.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Học từ khóa đào tạo trực tuyến tốt nhất<strong></strong></h2>
                                            <p data-animation="animated slideInLeft">
                                            # Cải thiện cuộc sống thông qua học tập
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Tìm hiểu thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Trước</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Tiếp</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2>Chào mừng ! <span>Chúng tôi là Học viện Giáo dục Toàn cầu</span></h2>
                        <h2>Welcome ! <span>Were Global Education Academy</span></h2>
                        <blockquote>
                        Một người đàn ông chưa bao giờ đi học có thể ăn cắp từ một chiếc xe chở hàng; nhưng nếu anh ta có một nền giáo dục đại học, anh ta có thể ăn cắp toàn bộ đường sắt.
                        </blockquote>
                        <div class="semester-apply">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 item">
                                    <h4>Học kỳ mùa thu 2020</h4>
                                    <p>
                                        Affection additions nay. He no an nature ye talent houses wisdom.
                                    </p>
                                    <a class="btn btn-dark effect btn-sm" href="#"><i class="fas fa-angle-right"></i> Apply Now</a>
                                </div>
                                <div class="col-md-6 col-sm-6 item">
                                    <h4>Scholarship</h4>
                                    <p>
                                        Northward affection additions nay. He no an nature ye talent houses.
                                    </p>
                                    <a class="btn btn-dark effect btn-sm" href="#"><i class="fas fa-angle-right"></i> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item mariner">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-panel"></i>
                                        </div>
                                        <div class="info">
                                            <h2>12</h2>
                                            <h4>Expert faculty</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item brilliantrose">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-ruler-pencil"></i>
                                        </div>
                                        <div class="info">
                                            <h2>68</h2>
                                            <h4>Best Teachers</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item casablanca">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-server"></i>
                                        </div>
                                        <div class="info">
                                            <h2>120</h2>
                                            <h4>Online Courses</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="equal-height col-md-6 col-sm-6">
                                <div class="item malachite">
                                    <a href="#">
                                        <div class="icon">
                                            <i class="ti-desktop"></i>
                                        </div>
                                        <div class="info">
                                            <h2>689</h2>
                                            <h4>Scholarship</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Categories
    ============================================= -->
    <div class="category-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Top Categories</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="category-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item mariner">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-pulse"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Analysis of Algorithms</h5>
                                        <p>
                                            Current enrolled <strong>1278</strong>
                                        </p>
                                        <span>28 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item java">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-desktop"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Computer Science</h5>
                                        <p>
                                            Current enrolled <strong>9577</strong>
                                        </p>
                                        <span>56 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item malachite">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-server"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Data Science</h5>
                                        <p>
                                            Current enrolled <strong>2544</strong>
                                        </p>
                                        <span>29 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item brilliantrose">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-panel"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Engineering</h5>
                                        <p>
                                            Current enrolled <strong>6788</strong>
                                        </p>
                                        <span>87 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item casablanca">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-ruler-pencil"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Architecture</h5>
                                        <p>
                                            Current enrolled <strong>1766</strong>
                                        </p>
                                        <span>39 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item emerald">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-paint-bucket"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Art & Design</h5>
                                        <p>
                                            Current enrolled <strong>4355</strong>
                                        </p>
                                        <span>36 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Popular Courses
        ============================================= -->
        <div class="popular-courses-area weekly-top-items default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="top-course-items">
                        <!-- Single Item -->
                        @foreach($dsKhoaHoc as $khoaHoc)
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/courses/1.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="assets/img/team/1.jpg" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Education</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>(1k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#" class="lam-gon-van-ban-mo-ta"> {{ $khoaHoc->ten_khoa_hoc }}</a>
                                    </h4>
                                    <p class="lam-gon-van-ban-mo-ta">
                                        {{ $khoaHoc->mo_ta_ngan }}
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Mua Ngay</a>
                                        <h4>{{ number_format($khoaHoc->gia) }} VNĐ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
<!-- End Popular Courses -->

    <!-- Start Campus Story
    ============================================= -->
    <div class="campus-story-area video-bg-live text-light text-center bg-fixed" style="background-image: url(assets/img/banner/15.jpg);">
        <div class="player" data-property="{videoURL:'DKz_EEoJRs4',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:39, opacity:1, quality:'default'}"></div>
        <div class="story-items default-padding shadow dark-hard">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading">
                            <h2>Campus Story</h2>
                        </div>
                        <div class="content campus-carousel owl-carousel owl-theme">
                            <div class="item">
                                <h4>Buparlin - Campus</h4>
                                <p>
                                     Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless.
                                </p>
                                <a href="https://www.youtube.com/watch?v=DKz_EEoJRs4" class="popup-youtube relative light video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="item">
                                <h4>Tahumas - Campus</h4>
                                <p>
                                     Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless.
                                </p>
                                <a href="https://www.youtube.com/watch?v=DKz_EEoJRs4" class="popup-youtube relative light video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Story -->

    <!-- Start Portfolio
    ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Our Gallery</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".campus">Campus</button>
                            <button data-filter=".teachers">Teachers</button>
                            <button data-filter=".education">Education</button>
                            <button data-filter=".ceremony">Ceremony</button>
                            <button data-filter=".students">Students</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                <div class="pf-item ceremony students">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/1.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Philosophy</h4>
                                            <a href="assets/img/gallery/1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers ceremony">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/2.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Contemporary Art</h4>
                                            <a href="assets/img/gallery/2.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus education">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/3.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Geometry Course</h4>
                                            <a href="assets/img/gallery/3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item education students">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/4.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Biology Course</h4>
                                            <a href="assets/img/gallery/4.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers campus">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/5.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Live Drawing</h4>
                                            <a href="assets/img/gallery/5.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony teachres">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/6.jpg" alt="thumb">
                                        <div class="overlay">
                                            <h4>Informatic Course</h4>
                                            <a href="assets/img/gallery/6.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
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
    <!-- End Portfolio -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url(assets/img/shape-bg.png);">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>What Students Says</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/team/1.jpg" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Jonat Harik</h4>
                                <span>Student of DIU</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Ashamed herself has distant can studied mrs. Led therefore its middleton perpetual fulfilled provision frankness. Small he drawn after among every three no.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/team/2.jpg" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Bunah Ahem</h4>
                                <span>Student of COO</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="ti-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <img src="assets/img/team/3.jpg" alt="Thumb">
                            </div>
                            <div class="author">
                                <h4>Proda Huk</h4>
                                <span>Student of ICC</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Event
    ============================================= -->
    <div class="event-area flex-less default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/event/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>16</strong> Apr, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">Social Science & Humanities</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 8:00 - 16:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 126 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/event/2.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>08</strong> Jul, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">Secondary Schools United Nations</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 10:00 - 14:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 58 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/event/3.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>19</strong> Aug, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">International Conference</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 11:00 - 19:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 256 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/event/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="info-box">
                                    <div class="date">
                                        <strong>26</strong> Jul, 2020
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">Leadership Network Seminar</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 08:00 - 16:00</li>
                                            <li><i class="fas fa-map-marked-alt"></i> California, TX 70240</li>
                                        </ul>
                                        <p>
                                            Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                        </p>
                                        <div class="bottom">
                                            <a href="#" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> Book Now
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-ticket-alt"></i> 256 Available
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
                <div class="more-btn col-md-12 text-center">
                    <a href="#" class="btn btn-theme effect btn-md">View All Events</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Event -->

    <!-- Start Registrationg
    ============================================= -->
    <div class="registration-area default-padding bg-dark text-light">
        <!-- Fixed BG-->
        <div class="fixed-bg bg-cover" style="background-image: url(assets/img/banner/3.jpg);"></div>
        <!-- End Fixed BG-->
        <div class="container">
            <div class="row">
                <div class="col-md-7 countdown">
                    <h2>Register today</h2>
                    <h4>Get 50s of online Courses For Free!</h4>
                    <p>
                        Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Adapted mr savings venture it or comfort affixed friends. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.
                    </p>
                    <ul>
                        <li>Design Instruments for Communication</li>
                        <li>Own partiality motionless</li>
                        <li>Considered sympathize</li>
                        <li>Letter of on become</li>
                    </ul>
                    <div class="counter-class" data-date="2020-3-24 23:59:59"><!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                        <div class="row">
                            <div class="item-list">
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-days"></span> Days
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-hours"></span> Hours
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-minutes"></span> Minutes
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-seconds"></span> Seconds
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 reg-form">
                    <form action="#">
                        <h5>Free</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select>
                                        <option value="1">Chose Subject</option>
                                        <option value="2">Computer Engineering</option>
                                        <option value="4">Accounting Technologies</option>
                                        <option value="5">Web Development</option>
                                        <option value="6">Machine Language</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit">
                                    Rigister Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registrationg -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/blog/1.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 14 Jun, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Event</a>
                                        <a href="#">Education</a>
                                    </div>
                                    <h4>
                                        <a href="#">Inquietude assistance precaution any impression man sufficient.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/blog/2.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 25 Jul, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Learing</a>
                                        <a href="#">Geography</a>
                                    </div>
                                    <h4>
                                        <a href="#">Discourse ye continued pronounce we Particular abilities.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/blog/3.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> 18 Sep, 2020</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="tags">
                                        <a href="#">Courses</a>
                                        <a href="#">Tech</a>
                                    </div>
                                    <h4>
                                        <a href="#">Deficient discourse do newspaper be an eagerness continued.</a>
                                    </h4>
                                    <p>
                                        Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished.
                                    </p>
                                    <a href="#"><i class="fas fa-plus"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Newsletter
    ============================================= -->
    <div class="newsletter-area fixed">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                <div class="row">
                    <div class="col-md-7 left-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h3>Subscribe to our newsletter</h3>
                                <p>
                                    Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <button type="submit">
                                    Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->
@endsection
