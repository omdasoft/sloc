@extends('layouts.back') 
@section('title') عرض كل الرسائل
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
                            <li class="breadcrumb-item active">عرض الكل
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
                                <h4 class="card-title">عرض كل الرسائل</h4>
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
                                <div class="card-body card-dashboard">
                                    @include('back.includes.alerts.success')
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>الهاتف</th>
                                                <th>البريد</th>
                                                <th>التاريخ</th>
                                                <th>#</th>
                                                <th>#</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($messages) > 0) @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->date }}</td>
                                                <td><span class="badge {{$message->replied == 1 ? "badge-success":"badge-secondary"}}">{{ $message->replied == 1 ? "تم الرد":"لم يتم الرد"}}</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('messages.show', $message->id) }}" class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">عرض الرسالة</a>
                                                        <form method="POST" action="{{ route('messages.destroy', $message->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" onclick="return confirm('هل تريد حذف الرسالة ؟')" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach @endif
                                        </tbody>
                                    </table>

                                    {{ $messages->links() }}
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