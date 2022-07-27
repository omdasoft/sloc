@extends('layouts.front')
@section('title')
التشريعات والمعايير
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">التشريعات والمعايير</li>
				  </ol>
			</nav>
			<!--start of all news section-->
			<section class="legislation wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h1><i class="fa fa-gavel" aria-hidden="true"></i> التشريعات والمعايير</h1>
				<hr></hr>
				<br><br>
				<div class="row">
					<div class="col-lg-12">
						<table>
							<tr>
								<td>قرار إجازة الرخصة</td><td><a href="{{asset('front/docs/sloc.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/sloc.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td> لائحة الرخصة السودانية لتشغيل الحاسوب </td><td><a href="{{asset('front/docs/list.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/list.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td><a href="{{route('front.accreditation-conditions')}}"> شروط إعتماد مراكز التدريب ومراكز الامتحانات </a></td><td><a href="{{asset('front/docs/condition.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/condition.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td><a href="{{route('front.trainer-standards')}}"> معايير المدربين </a></td><td><a href="{{asset('front/docs/trainer.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/trainer.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td><a href="{{route('front.exam-center-standards')}}">معايير مراكز الامتحانات</a></td><td><a href="{{asset('front/docs/exam.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/exam.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td><a href="{{route('front.training-center-standards')}}">معايير مراكز التدريب</a></td><td><a href="{{ asset('front/docs/center.pdf')}}" target="new"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td><td><a href="{{asset('front/docs/center.pdf')}}" download><i class="fa fa-download fa-2x" aria-hidden="true"></i></a></td>
							</tr>
						</table>
					</div>
				</div>
				
			</section>
@endsection