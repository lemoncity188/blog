<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Artwork</title>
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
    <link href="{{asset('css/myheart/artwork.css')}}" rel="stylesheet">
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
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul  class="nav navbar-nav navbar-right">
                        <li><a href="#HOME">Home</a></li>
                        <li><a href="#SERVICE">Services</a></li>
                        <li><a href="#ABOUT">About</a></li>
                        <li><a href="#TESTIMONIAL">Testimonial</a></li>
                        <li><a href="#WORK">Work</a></li>
                        <li><a href="#CONTACT">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div>
</header>


<div id="artworklist">
    <div id="list-left">
        <div id="bagcategory" class="list-group">

            <a href="#" class="list-group-item " genre="shouldbag">shouldbag</a>
            <a href="#" class="list-group-item " genre="wallet">wallet</a>
            <a href="#" class="list-group-item " genre="backbag">backbag</a>

        </div>
    </div>
    <div id="product-right">
        <div class="row product-right-row">
            @foreach ($sort as $item)
                    @if ($item->prodid <=4)

                        <div class="goodsshelf" prodid={{$item->prodid}}>
                            <img class="goods-main-img" src="{{asset($item->mainpic)}}">
                        </div>
                        @continue
                    @endif
            @endforeach



        </div>
        <div class="row product-right-row">
            @foreach ($sort as $item)
                @if ($item->prodid > 4)
                    <div class="goodsshelf" prodid={{$item->prodid}}>
                        <img class="goods-main-img" src="{{asset($item->mainpic)}}">
                    </div>
                    @continue
                @endif
            @endforeach

        </div>
    </div>
</div>


{{--<div style="color:red;margin-top:200px">--}}

{{--@foreach ($sort as $item)--}}
    {{--{{$item->prodid}}--}}
{{--@endforeach--}}
{{--</div>--}}


</body>

</html>

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
    $(function(){

        //init prodcategory
//        $.ajax({
//            type: "post",
//            dataType: "json",
//            url: '/artwork/initprodcategory',
//            headers: {
//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//            },
//            success: function (data) {
//
//            }
//        });



        var category=['shouldbag','wallet','backbag'];
        $('#bagcategory').on('click','a',function (evt) {
            console.log($(evt.target).attr('genre'));
            var type = $(evt.target).attr('genre');
            $.ajax({
                type: "post",
                dataType: "json",
                url: '/artwork/sort/'+type,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data);
                }
            });
        })




    });
</script>