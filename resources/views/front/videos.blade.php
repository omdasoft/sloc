@extends('layouts.front')
@section('title')
الفديوهات
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
					<li class="breadcrumb-item"><a href="#">الوسائط</a></li>
					<li class="breadcrumb-item active" aria-current="page">الفديوهات</li>
				  </ol>
			</nav>
			<section class="vedios">
			<h1 class="text-center"><i class="fa fa-play" aria-hidden="true"></i> فديوهات</h1>
			<hr></hr>
			<div class="row text-center">
					<div class="col-sm-3"></div>
					<div class="col-sm-6 col-xs-12">
						<center>
							<iframe  src="https://www.youtube.com/embed/wOZcXQWcg10?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</center>
					</div>
					<div class="col-sm-3"></div>
					
			
			</div>
			</section>
@endsection