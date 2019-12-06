<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Wolf - Personal vCard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <!-- ##### STYLESHEETS ##### -->
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Linea Icons -->
    <link href="/linea/styles.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Magnific popup -->
    <link href="/css/magnific-popup.min.css" rel="stylesheet">
    <!-- Preloader -->
    <link href="/css/preloader.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="/css/styles.min.css" rel="stylesheet">
    <!-- Responsive -->
    <link href="/css/responsive.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Toggle menu -->
<button class="toggle-btn">
    <span class="lines"></span>
</button><!-- hamburger button will only appear on mobile -->
<div class="menu">
    <ul>
        <li>
            <a style="background: none; color: #fff" href="/" onclick="window.location.href='/'"><i class="fa fa-arrow-left"></i></a>
        </li>
    </ul>

</div>
<!-- end Toggle menu -->

<!-- Pages Container -->
<div class="container">

    <!-- Resume page -->
    <section id="home" class="page-content active-page fill">
        <div class="resumeWrapper">
            <!-- resume -->
            <div class="resume-background">

                <h2 class="section-title"><i class="icon icon-basic-sheet-txt"></i> {{ $post->title }} </h2>
                <div class="row">
                    <?php echo $post->body; ?>
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



</div>
<!-- end Pages Container -->

<!-- ##### JAVASCRIPTS ##### -->
<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- Google Maps Library -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Bootstrap js -->
<script src="/js/bootstrap.min.js"></script>
<!-- Retina Graphics -->
<script src="/js/retina.min.js"></script>
<!-- Magnific Popup -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Theme Plugins -->
<script src="/js/theme-plugins.min.js"></script>
<!-- Custom Scripts -->
<script src="/js/scripts.min.js"></script>
</body>
</html>