/**
 * Created by PhpStorm.
 * User: gww
 * Date: 2017/8/5
 * Time: 11:24
 */

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>mokabag</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Preloader -->
    <link rel="stylesheet" href="{{asset('css/myheart/preloader.css')}}" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="{{asset('css/myheart/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/myheart/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/myheart/owl.theme.default.css')}}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{asset('css/myheart/animate.css')}}">
    <!-- Bootstrap -->
    <link href="{{asset('css/myheart/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('css/myheart/responsive.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/myheart/lte-ie7.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>




<header id="HOME" style="background-position: 50% -125px;">
    <div class="section_overlay">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('img/myheart/logo.png')}}" alt=""></a>
                    <span class="corporationname">MOKA</span>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#HOME">Home</a></li>
                        <li><a href="#SERVICE">Services</a></li>
                        <li><a href="#ABOUT">About</a></li>
                        <li><a href="#TESTIMONIAL">Testimonial</a></li>
                        <li><a href="#GALLERY">GALLERY</a></li>
                        <li><a href="/artwork">WORK</a></li>
                        <li><a href="#CONTACT">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="home_text wow fadeInUp animated">
                        <h2>M O K A BAG</h2>
                        <p>we only make expert bag,we only design distinctive bag!</p>
                        <img src="{{asset('img/myheart/shape.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="scroll_down">
                        <a href="#SERVICE"><img src="{{asset('img/myheart/scroll.png')}}" alt=""></a>
                        <h4>Scroll Down</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</header>


<section class="services" id="SERVICE">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="1s">
                    <i class="icon-pencil"></i>
                    <h2>Design</h2>
                    <p>Expert design only for your taste.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="2s">
                    <i class="icon-gears"></i>
                    <h2>Development</h2>
                    <p>Constantly develope new style.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="3s">
                    <i class="icon-camera"></i>
                    <h2>Material</h2>
                    <p>Consist of premium material.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="single_service wow fadeInUp" data-wow-delay="4s">
                    <i class="icon-magnifying-glass"></i>
                    <h2>Service</h2>
                    <p>Custom service let you get comfort.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_us_area" id="ABOUT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="about_title">
                    <h2>About Me</h2>
                    <img src="{{asset('img/myheart/shape.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4  wow fadeInLeft animated">
                <div class="single_progress_bar">
                    <h2>DESIGN - 90%</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="single_progress_bar">
                    <h2>DEVELOPMENT - 60%</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="single_progress_bar">
                    <h2>Material - 75%</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="single_progress_bar">
                    <h2>Service - 95%</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  wow fadeInRight animated">
                <p class="about_us_p">Moka is a female bag brand, create in 1983. We have excess 10 years experience for abroad customer to serve.</p>
            </div>
            <div class="col-md-4  wow fadeInRight animated">
                <p class="about_us_p">Moka have already served more than 58 mall and enterprise. We are the supplier of first-rate brand and have cooperation deeply yet.</p>
            </div>
        </div>
    </div>
</section>


<section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
    <div class="container">
        <div class="icon">
            <i class="icon-quote"></i>
        </div>
        <div class="owl-carousel">
            <div class="single_testimonial text-center wow fadeInUp animated">
                <p>Moka is an expert corporation which has many experience in bag domain.<br/>They give me a very comfortable trade experience.</p>
                <h4>Wal-Mart vice president - JOHN SMITH</h4>
            </div>
            <div class="single_testimonial text-center">
                <p>They give me very good impress,their service is very patient.<br/>Their product is very distinctive.</p>
                <h4>Amazon bags division chief advisor - David</h4>
            </div>
        </div>
    </div>
</section>


<div class="fun_facts">
    <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
        <div class="section_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single_count">
                                    <i class="icon-toolbox"></i>
                                    <h3>300+</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_count">
                                    <i class="icon-clock"></i>
                                    <h3>8+</h3>
                                    <p>international brands supplier</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_count">
                                    <i class="icon-trophy"></i>
                                    <h3>37</h3>
                                    <p>Patent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
                        <div class="imac">
                            <img src="{{asset('img/myheart/imac.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
<section class="work_area" id="GALLERY">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work_title  wow fadeInUp animated">
                    <h1>Latest Works</h1>
                    <img src="{{asset('img/myheart/shape.png')}}" alt="">
                    <p> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('img/myheart/m1.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('img/myheart/m2.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('img/myheart/m3.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pad_top">
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('img/myheart/m4.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image">
                    <img src="{{asset('img/myheart/m5.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no_padding">
                <div class="single_image last_padding">
                    <img src="{{asset('img/myheart/w6.jpg')}}" alt="">
                    <div class="image_overlay">
                        <a href="">View Full Project</a>
                        <h2>drawing</h2>
                        <h4>with pencil colors</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeInLeft animated">
                <div class="left">
                    <h2>LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                    <p>Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor.
                        Integer non dapibus diam, ac eleifend lectus.</p>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                <div class="baton">
                    <a href="#CONTACT">
                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="CONTACT">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contact_title  wow fadeInUp animated">
                    <h1>get in touch</h1>
                    <img src="{{asset('img/myheart/shape.png')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3  wow fadeInLeft animated">
                {{--<div class="single_contact_info">--}}
                    {{--<h2>Call Me</h2>--}}
                    {{--<p>+88 00 123 456 01</p>--}}
                {{--</div>--}}
                <div class="single_contact_info">
                    <h2>Email Me</h2>
                    <p>mokaguru@gmail.com</p>
                </div>
                {{--<div class="single_contact_info">--}}
                    {{--<h2>Address</h2>--}}
                    {{--<p>216 Street Address, Barisal, BD</p>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-9  wow fadeInRight animated">
                <form  id="contactform" class="contact-form" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Linkedin">
                            <input type="text" name="corporation" class="form-control" id="corporation" placeholder="Corporation">
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                            <button id="contactbtn" type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="work-with   wow fadeInUp animated">
                    <h3>looking forward to hearing from you!</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="{{asset('img/myheart/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href="#/abdullah.noman99"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#/absconderm"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; brandy 2015.</p>
                        <p>Made with love for creative people.</p>
                        More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>











<!-- =========================
     SCRIPTS
============================== -->


<script src="{{asset('js/myheart/jquery.min.js')}}"></script>
<script src="{{asset('js/myheart/bootstrap.min.js')}}"></script>
<script src="{{asset('js/myheart/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/myheart/owl.carousel.js')}}"></script>
<script src="{{asset('js/myheart/wow.js')}}"></script>
<script src="{{asset('js/myheart/script.js')}}"></script>

<script>
    $('#contactbtn').on('click',function () {
       var formdata = $('#contactform').serialize();
       console.log(formdata);
        $.ajax({
            type: "post",
//            dataType: "json",
            url: '/contact/guestinfo',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $('#contactform').serialize(),
            success: function (data) {
                console.log(data)
            }
        });
    });
</script>


</body>

</html>