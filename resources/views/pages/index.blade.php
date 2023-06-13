<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rozan Contracting</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One page parallax responsive HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/"/>

    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{asset('plugins/lightbox2/css/lightbox.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body id="body">

<!--
Start Preloader
==================================== -->
<div id="preloader">
    <div class='preloader'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--
End Preloader
==================================== -->

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <!-- logo -->
            <a class="navbar-brand logo" href="{{url('/')}}">
                <img src="{{asset('images/logo-R.png')}}" alt="">
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="#section-one">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#our-story">Our Story</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#our-services">Our services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">العربيه</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<div class="hero-slider" id="section-one">
    <div class="slider-item th-fullpage hero-area" style="background-image: url(images/pngtree-the-construction-site-in-a-city-picture-image_2494612.jpg);">
        <div class="slider-item hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">WELCOME TO Rozan
                            CONSTRUCTION<br>
                        </h1>
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"> Since 1961 we remain
                            reliable, trustworthy, and efficient General Contractor Company. Whether you need help on a
                            small project or a larger job, we want to take the load off your shoulders by providing our
                            specialized services. </p>
                        {{--                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"--}}
                        {{--                       href="service.blade.php">Explore Us</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
Start About Section
==================================== -->
<section class="about-2 section" id="our-story">
    <div class="container">
        {{--        <div class="row justify-content-center">--}}
        {{--            <!-- section title -->--}}
        {{--            <div class="col-lg-6">--}}
        {{--                <div class="title text-center">--}}
        {{--                    <h2>We Are Bingo Agency</h2>--}}
        {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,--}}
        {{--                        aut, eum itaque illo totam tempora eius.</p>--}}
        {{--                    <div class="border"></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <!-- /section title -->--}}
        {{--        </div>--}}

        <div class="row">

            <div class="col-md-6">
                <h1>OUR STORY</h1>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.

                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.

                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.

                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.

               </p>
                {{--                <a href="about.html" class="btn btn-main mt-20">Learn More</a>--}}
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <img loading="lazy" src="{{asset('images/pic4.jpg')}}" class="img-fluid" alt="">
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->
<!--
Start About Section
==================================== -->
<section class="service-2 section" id="our-services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Our Services</h2>
                    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur--}}
                    {{--                        adipisicing elit. Voluptates, earum. </p>--}}
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <img src="{{asset('images/pic1.jpg')}}" alt="">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <img src="{{asset('images/pic2.jpg')}}" alt="">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <img src="{{asset('images/pic3.jpg')}}" alt="">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item">
                            <img src="{{asset('images/pic4.jpg')}}" alt="">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

{{--<section class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-lg-6">--}}
{{--            <!-- section title -->--}}
{{--            <div class="title text-center">--}}
{{--                <h2>Our Services (Example 2 )</h2>--}}
{{--                --}}{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur--}}
{{--                --}}{{--                        adipisicing elit. Voluptates, earum. </p>--}}
{{--                <div class="border"></div>--}}
{{--            </div>--}}
{{--            <!-- /section title -->--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <img src="{{asset('images/test500.jpg')}}" class="card-img" alt="Image">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card Title</h5>--}}
{{--                            <p class="card-text">name</p>--}}
{{--                            <p class="card-text">age : </p>--}}
{{--                            <p class="card-text">yores</p>--}}
{{--                            <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <img src="{{asset('images/test500.jpg')}}" class="card-img" alt="Image">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card Title</h5>--}}
{{--                            <p class="card-text">name</p>--}}
{{--                            <p class="card-text">age : </p>--}}
{{--                            <p class="card-text">yores</p>--}}
{{--                            <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <img src="{{asset('images/test500.jpg')}}" class="card-img" alt="Image">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card Title</h5>--}}
{{--                            <p class="card-text">name</p>--}}
{{--                            <p class="card-text">age : </p>--}}
{{--                            <p class="card-text">yores</p>--}}
{{--                            <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <img src="{{asset('images/test500.jpg')}}" class="card-img" alt="Image">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card Title</h5>--}}
{{--                            <p class="card-text">name</p>--}}
{{--                            <p class="card-text">age : </p>--}}
{{--                            <p class="card-text">yores</p>--}}
{{--                            <a href="#" class="btn btn-primary">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--
Start Call To Action
==================================== -->
{{--<section class="call-to-action section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-xl-6 col-lg-8 text-center">--}}
{{--                <h2>Let's Create Something Together</h2>--}}
{{--                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, nisi elit consequat ipsum,--}}
{{--                    nesagittis sem nid elit. Duis sed odio sitain elit.</p>--}}
{{--                <a href="contact.html" class="btn btn-main">Contact Us</a>--}}
{{--            </div>--}}
{{--        </div> <!-- End row -->--}}
{{--    </div> <!-- End container -->--}}
{{--</section> <!-- End section -->--}}

<!--
Start Counter Section
==================================== -->
{{--<section class="counter-wrapper section-sm">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-xl-6 col-lg-8 text-center">--}}
{{--                <div class="title">--}}
{{--                    <h2>Lorem Ipsum</h2>--}}
{{--                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been--}}
{{--                        the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <!-- first count item -->--}}
{{--            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">--}}
{{--                <div class="counters-item">--}}
{{--                    <i class="fa-solid fa-hourglass-start"></i>--}}
{{--                    <div>--}}
{{--                        <span class="counter" data-count="150">0</span>--}}
{{--                    </div>--}}
{{--                    <h3>Time</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end first count item -->--}}

{{--            <!-- second count item -->--}}
{{--            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">--}}
{{--                <div class="counters-item">--}}
{{--                    <i class="fa-solid fa-user-shield"></i>--}}
{{--                    <div>--}}
{{--                        <span class="counter" data-count="130">0</span>--}}
{{--                    </div>--}}
{{--                    <h3>Project Completed</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end second count item -->--}}

{{--            <!-- third count item -->--}}
{{--            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">--}}
{{--                <div class="counters-item kill-border">--}}
{{--                    <i class="fa-solid fa-people-arrows"></i>--}}
{{--                    <div>--}}
{{--                        <span class="counter" data-count="99">0</span>--}}
{{--                    </div>--}}
{{--                    <h3>People advice</h3>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end third count item -->--}}
{{--        </div> <!-- end row -->--}}
{{--    </div> <!-- end container -->--}}
{{--</section> <!-- end section -->--}}

{{--<!-- Start Testimonial--}}
{{--=========================================== -->--}}

{{--<section class="testimonial section" id="testimonial">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <!-- testimonial wrapper -->--}}
{{--                <div class="testimonial-slider">--}}
{{--                    <!-- testimonial single -->--}}
{{--                    <div class="item text-center">--}}
{{--                        <i class="tf-ion-chatbubbles"></i>--}}
{{--                        <!-- client info -->--}}
{{--                        <div class="client-details">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>--}}
{{--                        </div>--}}
{{--                        <!-- /client info -->--}}
{{--                        <!-- client photo -->--}}
{{--                        <div class="client-thumb">--}}
{{--                            <img loading="lazy" src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="client-meta">--}}
{{--                            <h3>William Martin</h3>--}}
{{--                            <span>CEO , Company Name</span>--}}
{{--                        </div>--}}
{{--                        <!-- /client photo -->--}}
{{--                    </div>--}}
{{--                    <!-- /testimonial single -->--}}

{{--                    <!-- testimonial single -->--}}
{{--                    <div class="item text-center">--}}
{{--                        <i class="tf-ion-chatbubbles"></i>--}}
{{--                        <!-- client info -->--}}
{{--                        <div class="client-details">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>--}}
{{--                        </div>--}}
{{--                        <!-- /client info -->--}}
{{--                        <!-- client photo -->--}}
{{--                        <div class="client-thumb">--}}
{{--                            <img loading="lazy" src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="client-meta">--}}
{{--                            <h3>Emma Harrison</h3>--}}
{{--                            <span>CEO , Company Name</span>--}}
{{--                        </div>--}}
{{--                        <!-- /client photo -->--}}
{{--                    </div>--}}
{{--                    <!-- /testimonial single -->--}}

{{--                    <!-- testimonial single -->--}}
{{--                    <div class="item text-center">--}}
{{--                        <i class="tf-ion-chatbubbles"></i>--}}
{{--                        <!-- client info -->--}}
{{--                        <div class="client-details">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>--}}
{{--                        </div>--}}
{{--                        <!-- /client info -->--}}
{{--                        <!-- client photo -->--}}
{{--                        <div class="client-thumb">--}}
{{--                            <img loading="lazy" src="images/client-logo/clients-3.jpg" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="client-meta">--}}
{{--                            <h3>Alexander Lucas</h3>--}}
{{--                            <span>CEO , Company Name</span>--}}
{{--                        </div>--}}
{{--                        <!-- /client photo -->--}}
{{--                    </div>--}}
{{--                    <!-- /testimonial single -->--}}
{{--                </div>--}}
{{--            </div> 		<!-- end col lg 12 -->--}}
{{--        </div>	    <!-- End row -->--}}
{{--    </div>       <!-- End container -->--}}
{{--</section>    <!-- End Section -->--}}

{{--<!----}}
{{--Start Blog Section--}}
{{--=========================================== -->--}}
{{--<section class="blog" id="blog">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <!-- section title -->--}}
{{--            <div class="col-xl-6 col-lg-8">--}}
{{--                <div class="title text-center ">--}}
{{--                    <h2> Latest <span class="color">Posts</span></h2>--}}
{{--                    <div class="border"></div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /section title -->--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <!-- single blog post -->--}}
{{--            <article class="col-lg-4 col-md-6">--}}
{{--                <div class="post-item">--}}
{{--                    <div class="media-wrapper">--}}
{{--                        <img loading="lazy" src="images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-fluid">--}}
{{--                    </div>--}}

{{--                    <div class="content">--}}
{{--                        <h3><a href="single-post.html">Reasons to Smile</a></h3>--}}
{{--                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf--}}
{{--                            moon officia aute, non skateboard dolor brunch.</p>--}}
{{--                        <a class="btn btn-main" href="single-post.html">Read more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <!-- /single blog post -->--}}

{{--            <!-- single blog post -->--}}
{{--            <article class="col-lg-4 col-md-6">--}}
{{--                <div class="post-item">--}}
{{--                    <div class="media-wrapper">--}}
{{--                        <img loading="lazy" src="images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-fluid">--}}
{{--                    </div>--}}

{{--                    <div class="content">--}}
{{--                        <h3><a href="single-post.html">A Few Moments</a></h3>--}}
{{--                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf--}}
{{--                            moon officia aute, non skateboard dolor brunch.</p>--}}
{{--                        <a class="btn btn-main" href="single-post.html">Read more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <!-- end single blog post -->--}}

{{--            <!-- single blog post -->--}}
{{--            <article class="col-lg-4 col-md-6">--}}
{{--                <div class="post-item">--}}
{{--                    <div class="media-wrapper">--}}
{{--                        <img loading="lazy" src="images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-fluid">--}}
{{--                    </div>--}}

{{--                    <div class="content">--}}
{{--                        <h3><a href="single-post.html">Hints for Life</a></h3>--}}
{{--                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf--}}
{{--                            moon officia aute, non skateboard dolor brunch.</p>--}}
{{--                        <a class="btn btn-main" href="single-post.html">Read more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <!-- end single blog post -->--}}
{{--        </div> <!-- end row -->--}}
{{--    </div> <!-- end container -->--}}
{{--</section> <!-- end section -->--}}
<section class="contact-us" id="contact">
    <div class="container">
        {{--        <div class="row justify-content-center">--}}
        {{--            <!-- section title -->--}}
        {{--            <div class="col-xl-6 col-lg-8">--}}
        {{--                <div class="title text-center">--}}
        {{--                    <h2>Get In Touch</h2>--}}
        {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam--}}
        {{--                        ut numquam molestiae quaerat incidunt?</p>--}}
        {{--                    <div class="border"></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <!-- /section title -->--}}
        {{--        </div>--}}
        <div class="row">
            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h1 class="mb-3">Contact </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
                    blanditiis ex
                    explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam
                    labore
                    adipisci.</p>
                <ul class="contact-short-info mt-4">
                    <li class="mb-3">
                        <i class="fa-solid fa-house"></i>
                        <span>Zarqa , street asa3adeh</span>
                    </li>
                    <li class="mb-3">
                        <i class="fa-solid fa-phone"></i>
                        <span>Phone: +962 79 945 997 5</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-envelope-open"></i>
                        <span>Email: Test@gmail.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="https://www.google.com/"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="https://www.google.com/"><i class="tf-ion-social-whatsapp"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Name" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" placeholder="Email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Phone" class="form-control" name="phone" id="email" required>
                    </div>

                    <div class="form-group mb-4">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"
                                  required></textarea>
                    </div>
                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->


<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
                    <h3>about</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
                    <ul>
                        <li>
                            <h3>Our Services </h3>
                        </li>
                        <li><a href="http://www.google.com">Lorem Ipsum</a></li>

                    </ul>
                </div>
                <!-- End of .col-sm-3 -->


            </div>
        </div> <!-- end container -->
    </div>
</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->
<!--
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap4 -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Parallax -->
<script src="{{asset('plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
<!-- lightbox -->
<script src="{{asset('plugins/lightbox2/js/lightbox.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('plugins/smooth-scroll/smooth-scroll.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('js/script.js')}}"></script>

</body>

</html>
