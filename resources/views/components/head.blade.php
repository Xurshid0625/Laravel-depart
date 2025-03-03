<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="images/favicon.png" type="image/gif" />

    <title>{{ $title ?? 'Home' }}</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- lightbox Gallery-->
    <link rel="stylesheet" href="css/ekko-lightbox.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="/">{{ __('Home') }}</a>
                            <a class="nav-link" href="about">{{ __('About') }}</a>
                            <a class="nav-link" href="gallery">{{ __('Gallery') }}</a>
                            <a class="nav-link" href="service">{{ __('service') }}</a>
                            <a class="nav-link" href="blog">{{ __('Blog') }}</a>
                            <a class="nav-link" href="contact">{{ __('contact') }}</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ route('post')}}" class="slider-link">
                        Post yaratish
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->


    {{ $slot }}
    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row info_main_row">
                <div class="col-md-6 col-lg-3">
                    <div class="info_insta">
                        <h4>
                            <a href="index.html" class="navbar-brand m-0 p-0">
                                <span>
                                    Department
                                </span>
                            </a>
                        </h4>
                        <p class="mb-0">
                            Asperiores at, error, delectus aut voluptatem provident cum quam magni necessitatibus
                            molestias eveniet reprehenderit maiores voluptate.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_detail">
                        <h4>
                            Company
                        </h4>
                        <p class="mb-0">
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4>
                        Contact Us
                    </h4>
                    <div class="info_contact">
                        <a href="https:/google.com/maps">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                        <a href="https:telefon.contact">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call +998981888915
                            </span>
                        </a>
                        <a href="https://mail.google.com">
                            <i class="fa fa-envelope"></i>
                            <span>
                                abdumannonovxurshid0625@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h4>
                        Follow Us
                    </h4>
                    <div class="social_box">
                        <a href="https://t.me/xurshid_0625">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                        <a href="https://instagram.com/xurshid_0625">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://linkedin.com/in/xurshid-abdumannonov">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://github.com/xurshid0625">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->


    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- lightbox Gallery-->
    <script src="js/ekko-lightbox.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

</body>

</html>
