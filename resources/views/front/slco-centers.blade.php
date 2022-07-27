@extends('layouts.front')
@section('title')
مراكز الرخصة
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
        <li class="breadcrumb-item active" aria-current="page">مراكز الرخصة</li>
    </ol>
</nav>
<!--start of all news section-->
<section class="slco-center">
    <h1><i class="fa fa-archive" aria-hidden="true"></i> مراكز الرخصة </h1>
    <hr>
    </hr>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="center-block wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                    <i class="fa fa-pie-chart fa-4x"></i>
                    <h4><a href="{{route('front.accredited-training-centers')}}">مراكز تدريب معتمده</a></h4>
                    <span>20</span>
                </div>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="center-block wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
                    <i class="fa fa-line-chart fa-3x"></i>
                    <h4><a href="{{route('front.accredited-exam-centers')}}">مراكز امتحانات معتمده</a></h4>
                    <span>30</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection