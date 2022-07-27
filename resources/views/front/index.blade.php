@extends('layouts.front')
@section('title')
الرخضة السودانية لتشغيل الحاسوب
@endsection
@section('content')
<!--show logo in extra small screen-->
<center>
    <div class="mobile-logo hidden-lg hidden-md hidden-sm">
        <image src="{{asset('Front/images/mobile-logo.png')}}">
    </div>
</center>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs hidden-sm">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <!--start of item-->
        <div class="item active">
            <img src="{{asset('Front/images/1.jpg')}}" alt="slider 1" title="slider 1">
        </div>
        <!--end of item-->

        <!--start of item-->
        <div class="item">
            <img src="{{asset('Front/images/2.jpg')}}" alt="slider 2" title="slider 2">
        </div>
        <!--end of item-->

        <!--start of item-->
        <div class="item">
            <img src="{{asset('Front/images/3.jpg')}}" alt="slider 3" title="slider 3">
        </div>
        <!--end of item-->


        <!--start of item-->
        <div class="item">
            <img src="{{asset('Front/images/4.jpg')}}" alt="slider 4" title="slider 4">
        </div>
        <!--end of item-->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--end of slider-->

<!--dashbaord section section-->
<div class="container-fluid">
    <section class="dash-board">
        <div class="row">
            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                    <image src="{{asset('Front/images/book.png')}}" title="slco materials" alt="slco materials" />
                    <h5><a href="{{route('front.curricula')}}">مناهج الرخصة</a></h5>
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.4s">
                    <image src="{{asset('Front/images/leg.png')}}" title="legislations and procedures"
                        alt="legislations and procedures" />
                    <h5><a href="{{route('front.legislations')}}">التشريعات والمعايير</a></h5>
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.5s">
                    <image src="{{asset('Front/images/center.png')}}" title="slco center" alt="slco center" />
                    <h5><a href="{{route('front.slco-centers')}}">مراكز الرخصة</a></h5>
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                    <image src="{{asset('Front/images/news.png')}}" title="last news" alt="last news" />
                    <h5><a href="{{route('front.news')}}">اخر الاخبار</a></h5>
                </div>
            </div>

            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.7s">
                    <image src="{{asset('Front/images/fees.png')}}" title="slco service fees" alt="slco service fees" />
                    <h5><a href="{{route('front.fees')}}">رسوم خدمات الرخصه</a></h5>
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="block text-center wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                    <image src="{{asset('Front/images/service.png')}}" title="slco services" alt="slco services" />
                    <h5><a href="{{route('front.procedures')}}">الخدمات والاجراءات</a></h5>
                </div>
            </div>
        </div>
    </section>
</div>
<!--end of dashboard section-->
<!--section about-->
<section class="about text-center">
    <div class="container-fluid bg-overlay">
        <div class="row">
            <h1 class="h1-white"><i class="fa fa-info-circle" aria-hidden="true"></i> عن الرخصة</h1>
            <hr>
            </hr>
            <p>
                الرخصة السودانية لتشغيل الحاسوب برنامج تدريب سوداني ذو توجه وطني ويتطلع للإقليمية ومن ثم العالمية شعاره
                بناء القدرات البشرية فى مجالات الحاسب الآلي المختلفة ، و ينشد التميز والجودة ويلتزم بالأسس والمعايير
                العالمية فى ذلك. وإذ يسعى البرنامج لنشر تدريب الحاسوب فى كل إرجاء الوطن ، فإنه يطمح إلى أن يكون استخدام
                التقانة الحديثة فى كل المجالات وبما يعزز حق المواطن في المعرفة والحصول على كل ما يحتاجه من خدمات بأسهل
                وأيسر الطرق والوسائل الحديثة.
                .... <a href="{{route('front.about')}}">المذيد</a>
            </p>
        </div>
    </div>
</section>
<!--section last news-->
<section class="last-news text-center" id="last-news">
    <h1><i class="fa fa-newspaper-o" aria-hidden="true"></i> اخر الاحداث</h1>
    <hr>
    </hr>

</section>
<!--start of section slco in sudan-->
<section class="slco-sudan" id="slco-sudan">
    <h1><i class="fa fa-eye-slash " aria-hidden="true"></i> الرخصة في السودان</h1>
    <hr>
    </hr><br>
    <div class="row">
        <div class="col-lg-3 col-sm-2 hidden-xs"></div>
        <div class="col-lg-2 col-sm-3 col-xs-4">
            <div class="block text-center wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <image src="{{asset('Front/images/emp.png')}}" title="employee" alt="employee image">
                    <p><a href="{{route('front.slco-employees')}}">ما تقدمة الرخصه للموظفين</a></p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-4">
            <div class="block text-center wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
                <image src="{{asset('Front/images/man.png')}}" title="busness" alt="busness image">
                    <p><a href="{{route('front.slco-business')}}">ما تقدمه الرخصه لاصحاب الاعمال</a></p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-4">
            <div class="block text-center wow fadeInRight" data-wow-offset="0" data-wow-delay="0.7s">
                <image src="{{asset('Front/images/stu.png')}}" title="student" alt="student image">
                    <p><a href="{{route('front.slco-students')}}">ما تقدمه الرخصه للطلاب</a></p>
            </div>
        </div>

    </div>
</section>

<!--sloc exam section-->
<section class="exam-section">
    <h1 class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> نظام الامتحانات</h1>
    <hr>
    </hr>
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
                <P>
                    نظام امتحانات الرخصة السودانية لتشغيل الحاسوب هو عبارة عن نظام الكتروني تفاعلي يستخدم لقياس مدي تمتع
                    المتدربين بالكفاءة الكاملة فى إستخدام الكمبيوتر الشخصي وتطبيقات الكمبيوتر العامة، حيث يوفر النظام
                    واجهة سهلة للتعامل المباشر مع الامتحان، يتوفر نظام الامتحان باللغتين العربية والانجليزية فترة
                    الاختبار لكل وحدة هي 60 دقيقة، نسبة النجاح %65 ذلك لجميع الوحدات وعند اجتياز 4 اختبارات بنجاح يحصل
                    .... <a href="{{route('front.exam-system')}}">المذيد</a>
                </p>
                <a class="btn btn-info pull-left"> الدخول لنظام ادارة الامتاحانات <i class="fa fa-caret-square-o-left"
                        aria-hidden="true"></i></a>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <image src="{{asset('Front/images/exam-section.png')}}" class="pull-left">
            </div>
        </div>
    </div>
</section>
<!--section map-->
<section class="map-section">
    <h3 class="heading text-center">
        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><br>
        <span class="text" style="display: inline;">Open map</span>
        <span class="text" style="display: none;">Close map</span>
    </h3>
    <div class="map">
        <iframe frameborder="0" style="border:0"
            src="https://www.google.com/maps?q=NTC%20Tower%2C%20Khartoum%2C%20Sudan&t=&z=14&ie=UTF8&iwloc=&output=embed">
        </iframe>
    </div>
</section>
<!--start of section send message-->
<section class="send-msg text-center">
    <h1><i class="fa fa-envelope" aria-hidden="true"></i> راسلنا</h1>
    <hr>
    </hr>
    <br><br>
    <div class="row">
        <div class="col-md-3 col-xs-1"></div>
        <div class="col-lg-6 col-md-6 col-xs-10">
            <form id="message">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="الاسم" required="required"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="البريد" required="required"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required="required"
                        autocomplete="off">
                </div>
                <div class="form-group text">
                    <textarea class="form-control" required="required" name="msg">
									</textarea>
                </div>
                <p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
                <div class="form-group">
                    <input type="text" class="form-control" size="6" maxlength="5" name="captcha" value=""
                        required="required" autocomplete="off" placeholder="ادخل كود التحقق">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="ارسال">
                </div>
            </form>
        </div>
        <div class="col-md-3 col-xs-1"></div>
    </div>
</section>
<!--start of parteners section for mobile-->
<section class="parteners hidden-xs">
    <div class="container-fluid bg-overlay">
        <h1><i class="fa fa-users" aria-hidden="true"></i> شركاؤنا</h1>
        <hr>
        </hr><br>
        <div class="my-slider js-imageslider">
            <ul class="my-slider-list">
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/edu.png')}}">
                        <span>وزارة التربيه والتعليم العام</span>
                </li>
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/ncrs.png')}}">
                        <span>مفوضية الاختيار للخدمة المدنيه</span>
                </li>
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/mic.png')}}">
                        <span>وزارة الاتصالات وتكنولوجيا المعلومات</span>
                </li>
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/nic.png')}}">
                        <span>المركز القومي للمعلومات</span>
                </li>
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/high-study.png')}}">
                        <span>وزارة التعليم العالى والبحث العلمي</span>
                </li>
                <li class="my-slider-item">
                    <image src="{{asset('Front/images/interior.png')}}">
                        <span>وزارة الداخليه</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--mobile parteners section -->
<section class="mobile-parteners hidden-lg hidden-sm hidden-md">
    <div class="container-fluid bg-overlay">
        <h1><i class="fa fa-users" aria-hidden="true"></i> شركاؤنا</h1>
        <hr>
        </hr><br>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/ncrs.png')}}">
                        <span>مفوضية الاختيار للخدمة المدنيه</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/mic.png')}}">
                        <span>وزارة الاتصالات وتكنولوجيا المعلومات</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/nic.png')}}">
                        <span>المركز القومي للمعلومات</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/edu.png')}}">
                        <span>وزارة التربيه والتعليم العام</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/high-study.png')}}">
                        <span>وزارة التعليم العالى والبحث العلمي</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="block">
                    <image src="asset('front/images/interior.png')}}">
                        <span>وزارة الداخليه</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
