<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$project->name}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="/css/agency.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">{{$project->name}}</a>
        </div>

        <!-- 导航栏-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#header">首页</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">项目进度</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">开发者介绍</a>
                </li>
                <li>
                    <a class="page-scroll" href="#footer">底部</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- header宣传图 -->
<header id = header >
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">{{$project->user->name}}</div>
            <div class="intro-heading">{{$project->name}}</div>
            <a href="#services" class="page-scroll btn btn-xl">了解更多</a>
        </div>
    </div>
</header>

<!-- 关于本项目 -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">关于本项目</h2>
                <h3 class="section-subheading text-muted">{{$project->content}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    @foreach($progress as $val)
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="/img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$val->created_at}}</h4>
                                <h4 class="subheading">{{$val->title}}</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">{{$val->content}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <a href="/progress/{{$project}}"><h4 style="color: white"><br>查看<br>更多</h4></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 开发者介绍 -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">开发者介绍</h2>
                <h3 class="section-subheading text-muted">开发本项目的作者</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="/img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>开发者</h4>
                    <p class="text-muted">{{$project->user->name}}</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Less is More-简单的东西往往带给人们的是更多的享受</p>
            </div>
        </div>
    </div>
</section>


<!--底部footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Franary 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="http://www.franary.org/">Franary</a>
                    </li>
                    <li><a href="https://laravel.com/">Laravel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--项目展示-->

{{--<!-- Project 4 -->--}}
{{--<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="close-modal" data-dismiss="modal">--}}
{{--<div class="lr">--}}
{{--<div class="rl">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-lg-8 col-lg-offset-2">--}}
{{--<div class="modal-body">--}}
{{--<!-- Project Details Go Here -->--}}
{{--<h2>Project Name</h2>--}}
{{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
{{--<img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">--}}
{{--<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>--}}
{{--<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>--}}
{{--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Project 5 -->--}}
{{--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="close-modal" data-dismiss="modal">--}}
{{--<div class="lr">--}}
{{--<div class="rl">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-lg-8 col-lg-offset-2">--}}
{{--<div class="modal-body">--}}
{{--<!-- Project Details Go Here -->--}}
{{--<h2>Project Name</h2>--}}
{{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
{{--<img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">--}}
{{--<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>--}}
{{--<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>--}}
{{--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Project 6 -->--}}
{{--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}
{{--<div class="close-modal" data-dismiss="modal">--}}
{{--<div class="lr">--}}
{{--<div class="rl">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-lg-8 col-lg-offset-2">--}}
{{--<div class="modal-body">--}}
{{--<!-- Project Details Go Here -->--}}
{{--<h2>Project Name</h2>--}}
{{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
{{--<img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">--}}
{{--<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>--}}
{{--<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>--}}
{{--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!--项目展示末-->
<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>
<script src="/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="/js/agency.min.js"></script>

</body>

</html>
