@extends('layouts.back') 
@section('title') عرض الرسالة
@endsection
@section('style') 
    <style type="text/css">
        .message{
            width: 100%;
            min-height: 200px;
            padding: 10px;
            border: 2px solid #ccc;
            margin-right: 10px;
        }
        .lead{
            margin-top: 20px;
        }
    </style>
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الرسائل </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('back.dashboard')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> الرسائل
                            </li>
                            <li class="breadcrumb-item active">عرض الرسالة
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
                                <h4 class="card-title">عرض الرسالة</h4>
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
                                <div class="card" style="width: 80%" >
                                    <div class="message">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h3>{{$message->name}}</h3>
                                                <h6>{{$message->email}}</h6>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="pull-left">{{$message->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                        <p class="lead">{{$message->message}}</p>
                                        <button class="btn btn-default btn-sm pull-left">رد</button>
                                    </div>
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