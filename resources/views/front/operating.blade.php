@extends('layouts.front')
@section('title')
منهج الرخصة - التشغيل
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
        <li class="breadcrumb-item active" aria-current="page">نظام الإمتحانات</li>
        <li class="breadcrumb-item active" aria-current="page">الوحدات الاساسية - التشغيل</li>
    </ol>
</nav>
<!--sloc exam section-->
<!--sloc exam section-->
<section class="exam-section exam-details">
				<h1 class="text-center"> التشغيل operating</h1>
				<hr></hr>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
							<P>
                             وتتطلب من الدارس إظهار المعرفة والعلم والعمل في استخدام المهام الأساسية للحاسوب ونظم التشغيل في إدارة الملفات وتنظيم الأدلة والحفظ والنقل والنسخ الاحتياطي.

							</p>
							<h4>بعد الانتهاء من هذه الوحدة يكون الدارس قادر علي :</h4>
							<ul>
								<li> التعرف علي المهاارت الأساسية للتعامل مع الحاسوب</li>
								<li>التعرف على معلومات الحاسوب الأساسية</li>
								<li>معرفة الاجزاء الرئيسية للحاسب </li>
								<li> تغيير اعدادات سطح المكتب</li>
								<li>التعامل مع الأقارص المثبتة</li>
								<li>التعرف علي تثبيت البرامج وازالتها</li>
							</ul>
						</div>
						<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
							<ul class="list-group">
							  <h5 class="list-group-title">
							  	  <span class="arraw" style="display: inline;"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
								  <span class="arraw" style="display: none;"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></span>
								  الوحدات الاساسية
							  </h5>
							  <li class="list-group-item"><a href="{{route('front.intro')}}">المقدمة introduction</a></li>
							  <li class="list-group-item active"><a href="{{route('front.operating')}}">التشغيل operating</a></li>
							  <li class="list-group-item"><a href="word.php">معالج النصوص word</a></li>
							  <li class="list-group-item"><a href="powerpoint.php">العروض التقديمية powerpoint</a></li>
							  <li class="list-group-item"><a href="excel.php">الجداول الإلكترونيه excel</a></li>
							  <li class="list-group-item"><a href="access.php">ادارة قواعد البيانات access</a></li>
							  <li class="list-group-item"><a href="info.php">المعلومات والتواصل information & communication</a></li>
							</ul>
							
							<ul class="list-group">
							  <h5 class="list-group-title">
								  <span class="arraw" style="display: none;"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></span>
								  <span class="arraw" style="display: inline;"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
								  مواضيع ذات صلة
							  </h5>
							  <li class="list-group-item"><a href="exam-steps.php">الحصول علي الامتحان</a></li>
							  <li class="list-group-item"><a href="skillcard.php">بطاقة المهارات</a></li>
							  <li class="list-group-item"><a href="exam-credit.php">شراء رصيد امتحان</a></li>
							  <li class="list-group-item"><a href="pass-exam.php">اجتياز الاختبارات</a></li>
							  <li class="list-group-item"><a href="exam-admin.php">نظام ادارة الإمتحانات</a></li>

							</ul>
						</div>
					</div>
				</div>
			</section>
@endsection