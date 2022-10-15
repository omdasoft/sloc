@extends('layouts.back') 
@section('title') عرض كل الاخبار
@endsection
 
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الاخبار </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> الاخبار
                            </li>
                            <li class="breadcrumb-item active">عرض الخبر
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">عرض الخبر</h4>
                                <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card" style="width: 80%">
                                    <img class="card-img-top" src="{{ asset("storage/uploads/$post->image") }}" alt="post image">
                                    <h5 class="card-title mt-2">{{ $post->title }}</h5>
                                    <div class="card-body">
                                        <p class="card-text" style="text-align:justify;line-height:2em;">{!! $post->text !!}</p>
                                    </div>

                                    <span class="pull-left">{{ $post->date }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
 
@section('script')
<script src="/js/app.js"></script>
@endsection