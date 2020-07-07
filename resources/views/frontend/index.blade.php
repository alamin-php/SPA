<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slicknav.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/extras.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset($setting->image) }}" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#sliders">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">
                  Portfolio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature">
                  Features
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  Pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll" href="#sliders">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#about">
              About
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              Services
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">
              Portfolio
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#feature">
              Features
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#team">
              Team
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">
              Pricing
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
@if (count($sliders) !=0)
    @php
    $count = 0;
@endphp
      <!-- sliders -->
      <div id="sliders">
        <div class="full-width">
          <!-- light slider -->
          <div id="light-slider" class="carousel slide">
            <div id="carousel-area">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  @foreach ($sliders as $key => $item)
                  <li data-target="#carousel-slider" data-slide-to="{{ $key }}" class="{{ $count == 0 ? 'active' : '' }}"></li>
                  @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">

                  @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $count == 0 ? 'active' : '' }}">
                      <img src="{{ asset($slider->image) }}" alt="">
                      <div class="carousel-caption">
                        <h3 class="slide-title animated fadeInDown">{{ $slider->title }}</h3>
                        <h5 class="slide-text animated fadeIn">{!! $slider->intro !!}</h5>
                        <a href="#" class="btn btn-lg btn-{{ $slider->btn_class }} animated fadeInUp">{{ $slider->btn_text }}</a>
                      </div>
                    </div>
                    @php
                        $count ++
                    @endphp
                  @endforeach
                </div>

                <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sliders -->
@else
    <div id="sliders">
    </div>
@endif


    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <div id="about" class="section-padding">
      <div class="container">
        <div class="row">
          @foreach ($abouts as $data)
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="{{ asset($data->image) }}" alt="">
              <h5><a href="#">{{ $data->title }}</a></h5>
              <p>{!! Str::limit( $data->intro, 120, ' :)') !!}</p>
            </div>
          </div>
              
          @endforeach
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Services</h2>
          </div>
        </div>
        <div class="row">
          <!-- Start Service Icon 1 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Easy to Customize</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">100+ Components</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-tachometer"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Super Fast</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-check"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Clean Design</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 4 -->

          <!-- Start Service Icon 5 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-flash"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Bootstrap 4 UI Kit</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 5 -->
          
          <!-- Start Service Icon 6 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-hand-pointer-o"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Advanced Features</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 6 -->
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".branding">
                Branding 
              </a>
              <a class="filter btn btn-common" data-filter=".marketing">
                Marketing
              </a>
              <a class="filter btn btn-common" data-filter=".planning">
                Planning 
              </a>
              <a class="filter btn btn-common" data-filter=".research">
                Research 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img1.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix branding planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img2.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix branding research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img3.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img4.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix marketing planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img5.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix planning research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="{{ asset('frontend/img/portfolio/img6.jpg') }}" alt="" />
                </div>
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="fa fa-link"></i></a>
                        <a class="right-link" href="#"><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#">
                          <h4>TITLE HERE</h4>
                        </a>
                        <p class="sup-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente vel quisquam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->

     <!-- Feature Section Start -->
    <div id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Features</h2>
          </div>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-bolt"></i>
              </div>
              <div class="featured-content">
                <h4>Bootstrap 4</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-diamond"></i>
              </div>
              <div class="featured-content">
                <h4>Clean Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="featured-content">
                <h4>100+ Components</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="featured-content">
                <h4>Easy to Customize</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-check"></i>
              </div>
              <div class="featured-content">
                <h4>Pixel Perfect</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box-item">
              <div class="featured-icon">
                <i class="fa fa-cloud"></i>
              </div>
              <div class="featured-content">
                <h4>Cloud Backup</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- facts Section Start -->
    <div id="counter">
      <div class="container">
        <div class="row count-to-sec">
          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-download"> </i></span>
            <h3 class="timer count-value" data-to="561" data-speed="1000">561</h3>
            <hr class="width25-divider">
            <small class="count-title">Downloads</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-user"> </i></span>
            <h3 class="timer count-value" data-to="950" data-speed="1000">950</h3>
            <hr class="width25-divider">
            <small class="count-title">Developers</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-desktop"> </i></span>
            <h3 class="timer count-value" data-to="978" data-speed="1000">978</h3>
            <hr class="width25-divider">
            <small class="count-title">Lines of code written</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fa fa-coffee"> </i></span>
            <h3 class="timer count-value" data-to="1700" data-speed="1000">1700</h3>
            <hr class="width25-divider">
            <small class="count-title">Cups of coffee consumed</small>
          </div>
        </div>
      </div>
    </div>
    <!-- facts Section End -->
    
    <!-- Team Section Start -->
    <div id="team" class="team-members-tow section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{ asset('frontend/img/team/team-05.jpg') }}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Melody Clark</strong>
                    <span>UX Specialist</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{ asset('frontend/img/team/team-06.jpg') }}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Danny Burton</strong>
                    <span>Senior Designer</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <figure>
              <img src="{{ asset('frontend/img/team/team-07.jpg') }}" alt="">
              <div class="image-overlay">
                <div class="overlay-text text-center">
                  <div class="info-text">
                    <strong>Elizabeth Jones</strong>
                    <span>Art Director</span>
                  </div>
                  <hr class="small-divider">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- Team Section End -->

    <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Pricing Table</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item">
              <div class="plan-name">
                <h3>Basic</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$ 10</div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>2GB Disk Space</li>
                  <li><i class="fa fa-check"></i>3 Sub Domains</li>
                  <li><i class="fa fa-check"></i>12 Database</li>
                  <li><i class="fa fa-check"></i>Unlimited Users</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item table-active">
              <div class="plan-name">
                <h3>Premium</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$ 69 </div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>10GB Disk Space</li>
                  <li><i class="fa fa-check"></i>5 Sub Domains</li>
                  <li><i class="fa fa-check"></i>12 Database</li>
                  <li><i class="fa fa-check"></i>Unlimited Users</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item">
              <div class="plan-name">
                <h3>Unltimate</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$ 79 </div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>50GB Disk Space</li>
                  <li><i class="fa fa-check"></i>20 Sub Domains</li>
                  <li><i class="fa fa-check"></i>36 Database</li>
                  <li><i class="fa fa-check"></i>Unlimited Users</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

    <!-- Single testimonial Start -->
    <div class="single-testimonial-area">
      <div class="container">
        <div id="single-testimonial-item" class="owl-carousel">
          <!-- Single testimonial Item -->
          <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="{{ asset('frontned/img/testimonial/img1.jpg') }}" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Arman
                    <a href="#"> UIdeck</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single testimonial Item -->
          <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="{{ asset('frontend/img/testimonial/img2.jpg') }}" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Jeniffer
                    <a href="#"> GrayGrids</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single testimonial Item -->
          <div class="item">
            <div class="row justify-content-md-center">
              <div class="col-lg-8 col-md-12 col-xs-12 col-md-auto">
                <div class="testimonial-inner text-md-center">
                  <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam, non ut molestiae rerum praesentium repellat debitis iure reiciendis, eius culpa beatae commodi facere ad numquam. Quisquam dignissimos similique sunt iure fugit, omnis vel cupiditate repellendus magni nihil molestiae quam, delectus
                  </blockquote>
                  <div class="testimonial-images">
                    <img class="img-circle text-md-center" src="{{ asset('frontend/img/testimonial/img3.jpg') }}" alt="">
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-user"></i> Elon Musk<a href="#"> Tesla</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <!-- Contact Form Section Start -->
    <section id="contact" class="contact-form section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-6 col-xs-12">
            <h3 class="title-head text-left">Get in touch</h3>
            <form class="contact-form" data-toggle="validator" action="{{ route('message') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-user"></i>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-envelope-o"></i>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-pencil-square-o"></i>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <textarea class="form-control" id="message" rows="4" name="intro" placeholder="Message" required data-error="Please enter your message"></textarea>
                  <div class="help-block with-errors"></div>
                  <button type="submit" id="form-submit" class="btn btn-common btn-form-submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <h4 class="contact-info-title text-left">Contact Information</h4>
            <div class="contact-info">
              <address>
              <i class="lni-map-marker icons cyan-color contact-info-icon"></i>
              {{ $setting->address }}
            </address>
              <div class="tel-info">
                <a href="tel:1800452308"><i class="lni-mobile icons cyan-color contact-info-icon"></i>{{ $setting->phone1 }}</a>
                <a href="tel:+61(8)82343555"><i class="lni-phone icons cyan-color contact-info-icon"></i>{{ $setting->phone2 }}</a>
              </div>
              <a href="mailto:hello@spiritapp.com"><i class="lni-envelope icons cyan-color contact-info-icon"></i>admin@uideck.com</a>
              <a href="{{ $setting->website }}" target="_blank"><i class="lni-tab icons cyan-color contact-info-icon"></i>www.amsoftit.com</a>
              <ul class="social-links">
                <li>
                  <a href="{{ $setting->fblink }}" class="fa fa-facebook"></a>
                </li>
                <li>
                  <a href="{{ $setting->twlink }}" class="fa fa-twitter"></a>
                </li>
                <li>
                  <a href="{{ $setting->instlink }}" class="fa fa-instagram"></a>
                </li>
                <li>
                  <a href="{{ $setting->lilink }}" class="fa fa-linkedin"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form Section End -->

	  <!-- Footer Section -->
    <footer class="footer">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              About Us
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <div class="social-footer">
              <a href="#"><i class="fa fa-facebook icon-round"></i></a>
              <a href="#"><i class="fa fa-twitter icon-round"></i></a>
              <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
              <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              Links
            </h3>
            <ul class="menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Works</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#"><img src="{{ asset('frontend/img/flicker/img1.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('frontend/img/flicker/img2.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('frontend/img/flicker/img3.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('frontend/img/flicker/img4.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('frontend/img/flicker/img5.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('frontend/img/flicker/img6.jpg') }}" alt=""></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              SUBSCRIBE US
            </h3>
            <div class="contact-us">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-common">Submit</button>
              </form>
            </div>
          </div>
          <!-- Footer Widget Ends -->
        </div>
        <!-- Row Ends -->
      </div>
      <!-- Container Ends -->

      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <p class="copyright-text">All copyrights reserved © 2018 - Designed &amp; Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a>
              </p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
              <ul class="nav nav-inline  justify-content-end ">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->

    </footer>
    <!-- Footer Section End-->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/js/jquery-min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('frontend/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
  </body>
</html>
