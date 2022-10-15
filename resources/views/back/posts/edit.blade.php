@extends('layouts.back')
@section('title')
اضافة خبر جديد
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
                                <li class="breadcrumb-item active">تعديل الخبر
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
                                    <h4 class="card-title">تعديل الخبر</h4>
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
                                        <form action="{{route('posts.update', $post->id)}}" method="post" class="mt-5 text-right" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('title') ? ' has-error' : '' }}">
                                                    <label for="title" class="text-right">العنوان</label>
                                                    <input type="text" class="form-control" value="{{ $post->title }}" name="title" id="title"
                                                           placeholder="ادخل العنوان">
                                                    @error('title')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                            
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('text') ? ' has-error' : '' }}">
                                                    <label for="text" class="text-right">الخبر</label>
                                                    <textarea class="tinymce-editor form-control" id="text" name="text"  rows="15"
                                                             
                                                >{!! $post->text !!}</textarea>
                                                    @error('text')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('image') ? ' has-error' : '' }}">
                                                    <label for="image">ارفق الصورة </label>
                                                    <input type="file" class="form-control"  name="image" id="imag">
                                                    @error('image')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-md-6">
                                                    <button  type="submit" class="btn btn-primary">تحديث</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: false,
        directionality: "rtl",
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
@stop

