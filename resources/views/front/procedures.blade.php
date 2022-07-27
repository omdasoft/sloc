@extends('layouts.front')
@section('title')
الخدمات والاجراءات
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">الخدمات والاجراءات</li>
				  </ol>
			</nav>
			<!--start of all news section-->
			<section class="procedures">
				<h1><i class="fa fa-tasks" aria-hidden="true"></i> الخدمات والاجراءات</h1>
				<hr></hr>
				<br><br>
				<ul>
					<li><a href="{{route('front.trainingcnt-procedures')}}">إجراءات اعتماد مراكز التدريب</a></li>
					<li><a href="{{route('front.examcnt-procedures')}}">إجراءات اعتماد مراكز الامتحان</a></li>
					<li><a href="{{route('front.trainers-procedures')}}">إجراءات اعتماد المدربين</a></li>
					<li><a href="{{route('front.skillcard-procedures')}}"> إجراءات شراء بطاقة  المهارات</a></li>
					<li><a href="{{route('front.getexam-procedures')}}">إجراءات شراء الامتحانات </a></li>
				</ul>
				
			</section>
@endsection