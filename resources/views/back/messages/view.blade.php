@extends('layouts.back') 
@section('title') عرض الرسالة
@endsection
@section('style') 
    <style type="text/css">
        .card {
            padding-right: 10px;
        }
        .message{
            width: 100%;
            min-height: 200px;
            padding: 10px;
            border: 2px solid #ccc;
        }
        .message-reply{
            margin-top: 10px;
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
                                    <button class="btn btn-default btn-sm pull-left reply {{$message->replied == 1 ? "hidden":""}}">رد</button>
                                    </div>
                                    <div class="message-reply">
                                        <form method="POST" action="{{ route('message.reply') }}">
                                            @csrf
                                            <input type="hidden" name="email" value="{{$message->email}}">
                                            <input type="hidden" name="id" value="{{$message->id}}">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="10" name="reply" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-sm pull-left">ارسال</button>
                                            </div>
                                        <form>
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
<script>
    $(document).ready(function() {
        $('.message-reply').hide();
        $('.reply').click(function() {
            $('.message-reply').slideToggle();
        });
    });
</script>
@endsection