@extends('layouts.front')
@section('title')
خريطة الموقع
@endsection
@section('content')
    <!--breadcrumb nav -->
			<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">خريطة الموقع</li>
				  </ol>
			</nav>
			<!--start of all news section-->
			<section class="site-links wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">			
				<h1><i class="fa fa-sitemap" aria-hidden="true"></i> خريطة الموقع</h1>
				<hr></hr>
				<br><br>
				<dl>
					<dt>عن الرخصة</dt>
						<dd><a href="{{route('front.about')}}">من نحن</a></dd>
						<dd><a href="{{route('front.goals')}}">أهداف الرخصة</a></dd>
						<dd><a href="{{asset('front/docs/sloc.pdf')}}">قرار اجازة الرخصة</a></dd>
						<dd><a href="{{asset('front/docs/list.pdf')}}">لائحة الرخصة</a></dd>
					<dt>التشريعات والمعايير</dt>
						<dd><a href="{{route('front.accreditation-conditions')}}">اعتماد مراكز التدريب والإمتحانات</a></dd>
						<dd><a href="{{route('front.training-center-standards')}}">معايير مراكز التدريب</a></dd>
						<dd><a href="{{route('front.exam-center-standards')}}">معايير مراكز الامتحانات</a></dd>
						<dd><a href="{{route('front.trainer-standards')}}">معايير المدربين </a></dd>
					<dt>الخدمات والاجراءات</dt>
						<dd><a href="{{route('front.trainingcnt-procedures')}}">إعتماد مراكز التدريب</a></dd>
						<dd><a href="{{route('front.examcnt-procedures')}}">إعتماد مراكز الإمتحان</a></dd>
						<dd><a href="{{route('front.trainers-procedures')}}">إعتماد المدربين</a></dd>
						<dd><a href="{{route('front.skillcard-procedures')}}">شراء بطاقة المهارات</a></dd>
						<dd><a href="{{route('front.getexam-procedures')}}">شراء الامتحانات</a></dd>
					<a href="{{route('front.faqs')}}">أسئلة متكررة</a>

					<dt>مراكز الرخصة</dt>
						<dd><a href="{{route('front.accredited-training-centers')}}">مراكز التدريب المعتمدة</a></dd>
						<dd><a href="{{route('front.accredited-exam-centers')}}">مراكز الامتحان المعتمدة</a></dd>
						<a href="contact-us.php">اتصل بنا</a>
					<dt>الوسائط</dt>
						<dd><a href="{{route('front.imageshow')}}">معرض الصور</a></dd>
						<dd><a href="{{route('front.videos')}}">الفديوهات</a></dd>
						<!--a href="support/chat.html" target="new">الدعم الفوري</a-->
						
					
				</dl>
			</section>
@endsection
