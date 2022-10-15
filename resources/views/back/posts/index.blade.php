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
                                <h4 class="card-title">عرض كل الاخبار</h4>
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
                                                <th>العنوان</th>
                                                <th>الخبر</th>
                                                <th>التاريخ</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($posts) > 0) @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $post->title }}</td>
                                                <td>{!! $post->sub_text !!}</td>
                                                <td>{{ $post->date }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">عرض الخبر</a>
                                                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" onclick="return confirm('هل تريد حذف الخبر ؟')" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</button>
                                                        </form>
                                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach @endif
                                        </tbody>
                                    </table>

                                    {{ $posts->links() }}
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