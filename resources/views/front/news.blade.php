@extends('layouts.front')
@section('title')
كل الاخبار
@endsection
@section('content')
<!--breadcrumb nav -->
<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">الاخبار</li>
				  </ol>
			</nav>
			<!--start of all news section-->
			<section class="all-news" id="last-news">
				<div class="container-fluid">
					عرض كل الاخبار
				</div>
			</section>
@endsection