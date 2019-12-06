<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MIKHSANNAJ</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- ##### STYLESHEETS ##### -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Linea Icons -->
    <link href="linea/styles.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Magnific popup -->
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <!-- Preloader -->
    <link href="css/preloader.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="css/styles.min.css" rel="stylesheet">
    <!-- Responsive -->
    <link href="css/responsive.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader-container">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>
</div>
<!-- end Preloader -->

<!-- Toggle menu -->
<button class="toggle-btn">
    <span class="lines"></span>
</button><!-- hamburger button will only appear on mobile -->
<div class="menu">
    <ul>
        <li class="page-link active-page" data-page="home">
            <i class="icon icon-basic-home"></i>
        </li>
        <li class="page-link" data-page="portfolio">
            <i class="icon icon-basic-case"></i>
        </li>
        <li class="page-link" data-page="services">
            <i class="icon icon-basic-gear"></i>
        </li>
        <li class="page-link" data-page="resume">
            <i class="icon icon-basic-sheet-txt"></i>
        </li>
        <li class="page-link" data-page="blog">
            <i class="icon icon-basic-message-multiple"></i>
        </li>
        <li class="page-link" data-page="contact">
            <i class="icon icon-basic-mail"></i>
        </li>
    </ul>
</div>
<!-- end Toggle menu -->

<!-- Pages Container -->
<div class="container">

    <!-- Home Page -->
    <section id="home" class="page-content active-page fill">
        <div class="home-background">
            <div class="home-layer">
                <div class="home-content">
                    <div class="home-avatar home-avatar-multi">
                        <img src="images/avatar.jpg" alt=""><!-- Image source -->
                        <img src="images/avatar-2.jpg" alt=""><!-- Image 2 source -->
                    </div>
                    <h1>Mohamad Ikhsan Nudin</h1>
                    <h3>I'm a Professional. . . <br>&amp; Buzzer</h3>
                    <a class="btn-style" href="#">See Works</a><!-- button -->
                </div>
                <!-- social media links -->
                <div class="home-social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/mikhsannaj"><span data-hover="Facebook">Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/mikhsannaj"><span data-hover="Twitter">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ikhs.n/"><span data-hover="Behance">Instagram</span></a>
                        </li>
                    </ul>
                </div><!-- end social media links -->
            </div>
        </div>
    </section>
    <!-- end Home Page -->

    <!-- Portfolio Page -->
    <section id="portfolio" class="page-content">
        <div class="portfolioWrapper">
            <!-- Portfolio -->
            <div class="portfolio-background">
                <h2 class="section-title"><i class="icon icon-basic-case"></i>Galery</h2><!-- Section Title -->
                <!-- Portfolio filter -->
                <div class="portfolio-filter">
                    <ul>
                        <li class="filter" data-filter="all"><span data-hover="All">All</span></li>
                        <li class="filter" data-filter=".category-1"><span data-hover="First">First</span></li>
                        <li class="filter" data-filter=".category-2"><span data-hover="Second">Second</span></li>
                        <li class="filter" data-filter=".category-3"><span data-hover="Third">Third</span></li>
                    </ul>
                </div>
                <!-- end Portfolio filter -->
                <div id="mix-container">
                    <div class="row">
                        <!-- Portfolio box 1 -->
                        <div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-1">
                            <div class="portfolio-image">
                                <img src="images/portfolio-img-1.jpg" alt=""><!-- Image source -->
                                <a class="lightbox" href="#popup-1"></a><!-- link to popup content -->
                            </div>
                            <!-- Popup content -->
                            <div id="popup-1" class="mfp-hide popup-box">
                                <img src="images/portfolio-img-1.jpg" alt=""><!-- Image source -->
                                <div>
                                    <h4>Project Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                </div>
                            </div>
                            <!-- end Popup content -->
                        </div>


                        <!-- Portfolio box 2 -->
                        {{--<div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-2">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<img src="images/portfolio-img-2.jpg" alt=""><!-- Image source -->--}}
                                {{--<a class="lightbox" href="#popup-2"></a><!-- link to popup content -->--}}
                            {{--</div>--}}
                            {{--<!-- Popup content -->--}}
                            {{--<div id="popup-2" class="mfp-hide popup-box">--}}
                                {{--<img src="images/portfolio-img-2.jpg" alt=""><!-- Image source -->--}}
                                {{--<div>--}}
                                    {{--<h4>Project Title</h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- end Popup content -->--}}
                        {{--</div>--}}


                        <!-- Portfolio box 3 -->
                        {{--<div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-3">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<img src="images/portfolio-img-3.jpg" alt=""><!-- Image source -->--}}
                                {{--<a class="lightbox" href="#popup-3"></a><!-- link to popup content -->--}}
                            {{--</div>--}}
                            {{--<!-- Popup content -->--}}
                            {{--<div id="popup-3" class="mfp-hide popup-box">--}}
                                {{--<img src="images/portfolio-img-3.jpg" alt=""><!-- Image source -->--}}
                                {{--<div>--}}
                                    {{--<h4>Project Title</h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- end Popup content -->--}}
                        {{--</div>--}}
                        {{--<!-- Portfolio box 4 -->--}}
                        {{--<div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-1">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<img src="images/portfolio-img-4.jpg" alt=""><!-- Image source -->--}}
                                {{--<a class="lightbox" href="#popup-4"></a><!-- link to popup content -->--}}
                            {{--</div>--}}
                            {{--<!-- Popup content -->--}}
                            {{--<div id="popup-4" class="mfp-hide popup-box">--}}
                                {{--<img src="images/portfolio-img-4.jpg" alt=""><!-- Image source -->--}}
                                {{--<div>--}}
                                    {{--<h4>Project Title</h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- end Popup content -->--}}
                        {{--</div>--}}
                        {{--<!-- Portfolio box 5 -->--}}
                        {{--<div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-2">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<img src="images/portfolio-img-5.jpg" alt=""><!-- Image source -->--}}
                                {{--<a class="lightbox" href="#popup-5"></a><!-- link to popup content -->--}}
                            {{--</div>--}}
                            {{--<!-- Popup content -->--}}
                            {{--<div id="popup-5" class="mfp-hide popup-box">--}}
                                {{--<img src="images/portfolio-img-5.jpg" alt=""><!-- Image source -->--}}
                                {{--<div>--}}
                                    {{--<h4>Project Title</h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- end Popup content -->--}}
                        {{--</div>--}}
                        {{--<!-- Portfolio box 6 -->--}}
                        {{--<div class="col-xs-12 col-sm-6 col-md-4 portfolio-box mix category-3">--}}
                            {{--<div class="portfolio-image">--}}
                                {{--<img src="images/portfolio-img-6.jpg" alt=""><!-- Image source -->--}}
                                {{--<a class="lightbox" href="#popup-6"></a><!-- link to popup content -->--}}
                            {{--</div>--}}
                            {{--<!-- Popup content -->--}}
                            {{--<div id="popup-6" class="mfp-hide popup-box">--}}
                                {{--<img src="images/portfolio-img-6.jpg" alt=""><!-- Image source -->--}}
                                {{--<div>--}}
                                    {{--<h4>Project Title</h4>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- end Popup content -->--}}
                        {{--</div>--}}
                        <!-- end Portfolio box 6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end Portfolio -->
            <!-- Skills -->
            <div class="skills-background">
                <div class="row">
                    <!-- Skills box 1 -->
                    <div class="col-xs-12 col-sm-4 skills-box">
                        <h4>HTML5 &amp; CSS3</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span>90%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Skills box 2 -->
                    <div class="col-xs-12 col-sm-4 skills-box">
                        <h4>Photoshop</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span>95%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Skills box 3 -->
                    <div class="col-xs-12 col-sm-4 skills-box">
                        <h4>Illustrator</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span>80%</span>
                            </div>
                        </div>
                    </div><!-- end Skills box 3 -->
                </div><!-- end row -->
            </div>
            <!-- end Skills -->
        </div>
    </section>
    <!-- end Portfolio Page -->

    <!-- Services page -->
    <section id="services" class="page-content">
        <div class="servicesWrapper">
            <div class="services-background">
                <h2 class="section-title"><i class="icon icon-basic-gear"></i>What I Do</h2><!-- Section Title -->
                <div class="row">
                    <!-- Services box 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-gear"></i>
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- Services box 2 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-photo"></i>
                            <h4>Photography</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- Services box 3 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-laptop"></i>
                            <h4>Online Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- Services box 4 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-pencil-ruler"></i>
                            <h4>Graphic Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- Services box 5 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-webpage-img-txt"></i>
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- Services box 6 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 services-box">
                        <div>
                            <i class="icon icon-basic-world"></i>
                            <h4>SEO Optimization</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <!-- end Services box 6 -->
                </div><!-- end row -->
            </div>
            <!-- Facts -->
            <div class="facts-background">
                <div class="row">
                    <!-- Facts box 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 facts-box">
                        <span>240</span>
                        <h4>Cups of Coffee</h4>
                    </div>
                    <!-- Facts box 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 facts-box">
                        <span>119</span>
                        <h4>Hours of Cycling</h4>
                    </div>
                    <!-- Facts box 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 facts-box">
                        <span>101</span>
                        <h4>Slices of Pizza</h4>
                    </div>
                    <!-- Facts box 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 facts-box">
                        <span>500</span>
                        <h4>Happy Clients</h4>
                    </div><!-- end Facts box 4 -->
                </div><!-- end row -->
            </div><!-- end Facts -->
        </div>
    </section>
    <!-- end Services page -->

    <!-- Resume page -->
    <section id="resume" class="page-content">
        <div class="resumeWrapper">
            <!-- resume -->
            <div class="resume-background">
                <h2 class="section-title"><i class="icon icon-basic-sheet-txt"></i>My Resume</h2>
                <div class="row">
                    <!-- Education -->
                    <div class="col-xs-12 col-md-6 education-content">
                        <!-- Education box 1 -->
                        <div class="education-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-book"></i>
                            </div>
                            <span>2016-2017</span><h4>University of IT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <!-- Education box 2 -->
                        <div class="education-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-book"></i>
                            </div>
                            <span>2015-2016</span><h4>University of Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <!-- Education box 3 -->
                        <div class="education-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-book"></i>
                            </div>
                            <span>2014-2015</span><h4>University of Art</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- end Education box 3 -->
                    </div><!-- end education-content -->
                    <!-- Employment -->
                    <div class="col-xs-12 col-md-6 employment-content">
                         <!-- Employment box  -->
                        <div class="menu">
                            <ul>
                                <li class="page-link active-page" data-page="home">
                                    <i class="icon icon-basic-home"></i>
                                </li>
                                <li class="page-link" data-page="portfolio">
                                    <i class="icon icon-basic-case"></i>
                                </li>
                                <li class="page-link" data-page="services">
                                    <i class="icon icon-basic-gear"></i>
                                </li>
                                <li class="page-link" data-page="resume">
                                    <i class="icon icon-basic-sheet-txt"></i>
                                </li>
                                <li class="page-link" data-page="blog">
                                    <i class="icon icon-basic-message-multiple"></i>
                                </li>
                                <li class="page-link" data-page="contact">
                                    <i class="icon icon-basic-mail"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="employment-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-case"></i>
                            </div>
                            <h4>ThemeForest</h4><span>2016-2017</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <!-- Employment box 2 -->
                        <div class="employment-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-case"></i>
                            </div>
                            <h4>PhotoDune</h4><span>2015-2016</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <!-- Employment box 3 -->
                        <div class="employment-box">
                            <div class="resume-icon">
                                <i class="icon icon-basic-case"></i>
                            </div>
                            <h4>CodeCanyon</h4><span>2014-2015</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div><!-- end Employment box 3 -->
                    </div><!-- end employment-content -->
                </div><!-- end row -->
            </div>
            <!-- end resume -->
            <!-- Testimonial -->
            <div class="testimonial-background">
                <div class="testimonial-layer">
                    <div class="testimonial-content">
                        <div id="testimonialSlider" class="owl-carousel">
                            <!-- Testimonial box 1 -->
                            <div class="testimonial-box">
                                <i class="fa fa-quote-right"></i>
                                <h4>Thomas Love</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <!-- Testimonial box 2 -->
                            <div class="testimonial-box">
                                <i class="fa fa-quote-right"></i>
                                <h4>Julia Giardina</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <!-- Testimonial box 3 -->
                            <div class="testimonial-box">
                                <i class="fa fa-quote-right"></i>
                                <h4>Robert Lindsey</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div><!-- end Testimonial box 3 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Testimonial -->
        </div>
    </section>
    <!-- end Resume page -->

    <!-- Blog page -->
    <section id="blog" class="page-content">
        <div class="blog-background">
            <h2 class="section-title"><i class="icon icon-basic-message-multiple"></i>Blog Posts</h2><!-- Section title -->
            <div id="blogSlider" class="owl-carousel">
                <!-- @if(!is_null($post))
                @foreach($post as $item) -->
                <div class="blog-post-box">
                    <div class="blog-post-box-image">
                        <!-- <img src="/storage/{{ $item->image }}" alt="">  -->
                        <!-- Image source -->
                        <a href="#"><!-- blog post link -->
                            <i class="icon icon-basic-link"></i>
                        </a>
                    </div>
                    <div class="blog-post-box-content">
                        <!-- {{--<span>{{ \TCG\Voyager\Models\Category::find($item->category_id)->name }}</span>--}} -->
                        <!-- <h3>{{ $item->title }}</h3> -->
                        <!-- Blog Post title -->
                        <!-- <p>{{ $item->excerpt }}</p> -->
                        <!-- Blog post short description -->
                        <!-- <a href="/post/{{$item->id}}" class="btn-style">Read More</a> -->
                    </div>
                </div>
                <!-- @endforeach
                @endif -->
            </div>
            <!-- Custom navigation -->
            <div class="customNavigation">
                <ul>
                    <li id="prev"><span><i class="fa fa-angle-left"></i></span></li>
                    <li id="next"><span><i class="fa fa-angle-right"></i></span></li>
                </ul>
            </div>
            <!-- end Custom navigation -->
        </div>
    </section>
    <!-- end Blog page -->

    <!-- Post page -->
    <section id="postdetail" class="page-content">
        <div class="resumeWrapper">
            <!-- Post -->
            <div class="resume-background">
                <h2 class="section-title"><i class="icon icon-basic-sheet-txt"></i>Title</h2>
                <div class="row">

                </div>
                <!-- end Post -->

                <!-- Testimonial -->
                <div class="testimonial-background">
                    <div class="testimonial-layer">
                        <div class="testimonial-content">
                            <div id="testimonialSlider" class="owl-carousel">
                                <!-- Testimonial box 1 -->
                                <div class="testimonial-box">
                                    <i class="fa fa-quote-right"></i>
                                    <h4>Thomas Love</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                                <!-- Testimonial box 2 -->
                                <div class="testimonial-box">
                                    <i class="fa fa-quote-right"></i>
                                    <h4>Julia Giardina</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                                <!-- Testimonial box 3 -->
                                <div class="testimonial-box">
                                    <i class="fa fa-quote-right"></i>
                                    <h4>Robert Lindsey</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div><!-- end Testimonial box 3 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Testimonial -->
            </div>
    </section>
    <!-- end Post Page -->

    <!-- Contact page -->
    <section id="contact" class="page-content">
        <div class="contactWrapper">
            <div class="contact-background">
                <h2 class="section-title"><i class="icon icon-basic-mail"></i>Get In Touch</h2><!-- Section title -->
                <div class="row">
                    <!-- Contact form -->
                    <div class="col-xs-12 col-sm-6 contact-form">
                        <form method="post" id="contactform">
                            <div class="input-style">
                                <div>
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </div>
                                <div>
                                    <input type="email" id="email" name="email" placeholder="E-Mail">
                                </div>
                            </div>
                            <div class="text-style">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <button type="submit">Send Message</button>
                            <div class="submit-result"><!-- It will only appear after pushing submit button -->
                                <p id="success">Your Message has been sent!</p>
                                <p id="error">Something went wrong, go back and try again!</p>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-6 contact-info">
                        <ul>
                            <li>
                                <h4>Phone</h4>
                                <p>+(987) 654 321 01</p>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <p>paul.artis@domain.com</p>
                            </li>
                            <li>
                                <h4>Address</h4>
                                <p>121 King St, Melbourne VIC 3000</p>
                            </li>
                        </ul>
                    </div><!-- end Contact Info -->
                </div><!-- end row -->
            </div>
            <!-- Google Maps -->
            <div class="google-maps">
                <div id="map-canvas"></div>
            </div><!-- end Google Maps -->
            <!-- Footer -->
            <div class="footer-background">
                <p>&copy; 2017 Flatheme, All Rights Reserved.</p>
            </div><!-- end Footer -->
        </div>
    </section>
    <!-- end Contact page -->

    </div>
    </section>
    <!-- end Resume page -->

</div><!-- end Pages Container -->

<!-- ##### JAVASCRIPTS ##### -->
<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- Google Maps Library -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Retina Graphics -->
<script src="js/retina.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Theme Plugins -->
<script src="js/theme-plugins.min.js"></script>
<!-- Custom Scripts -->
<script src="js/scripts.min.js"></script>
</body>
</html>