<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="الرخصة السودانية لتشغيل الحاسوب برنامج تدريب سوداني ذو توجه وطني ويتطلع للإقليمية ومن ثم العالمية شعاره بناء القدرات البشرية فى مجالات الحاسب الآلي المختلفة ، و ينشد التميز والجودة ويلتزم بالأسس والمعايير العالمية فى ذلك.">
    <meta name="keywords"
        content="الرخصة السودانية , تشغيل الحاسوب , slco ,الرخصة,كورسات حاسوب,مراكز تدريب, امتحان الرخصة,الرخصة الدولية,icdl">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('Front/css/normalize.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/liMarquee.css')}}">
    <!--wow js file-->
    <link rel="stylesheet" href="{{asset('Front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/lightboxgallery-min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/Hamburger.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/media.css')}}">
    <link href="{{asset('Front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <!-- media query maker-->
    <script src="{{asset('Front/js/respond.min.js')}}"></script>
    <!--[if lt IE 9]>
			<script src="layout/js/html5shiv.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('front.includes.header')
    @include('front.includes.navbar')
    @yield('content')
    @include('front.includes.footer')
    <!-- jQuery -->
    <script src="{{asset('Front/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
    <!--jquery marquee file-->
    <script src="{{asset('Front/js/jquery.liMarquee.js')}}"></script>
    <!--frond end js file-->
    <script src="{{asset('Front/js/frontend.js')}}"></script>
    <!--wow js-->
    <script src="{{asset('Front/js/wow.min.js')}}"></script>
    <!-- parteners scroll plugins-->
    <script src="{{asset('Front/js/jquery.imageslider.js')}}"></script>
    <!--mobile nav js-->
    <script src="{{asset('Front/js/Hamburger.js')}}"></script>
    <!--lightbox image galery-->
    <script src="{{asset('Front/js/lightboxgallery-min.js')}}"></script>
    <!--disqus-->
    <script id="dsq-count-scr" src="//sloc-gov-sd.disqus.com/count.js" async></script>
    <script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
            event.preventDefault();
            $(this).lightboxgallery({
                showCounter: true,
                showTitle: true,
                showDescription: true
            });
        });
    });
    </script>
    <script>
    wow = new WOW({

        })
        .init();
    </script>
</body>

</html>
