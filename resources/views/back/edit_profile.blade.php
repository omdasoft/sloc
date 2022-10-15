@extends('layouts.back')
@section('title')
تعديل الملف الشخصي
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الملف الشخصي </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الملف الشخصي
                                </li>
                                <li class="breadcrumb-item active">تعديل الملف الشخصي
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
                                    <h4 class="card-title">تعديل الملف الشخصي</h4>
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
                                        <form action="{{ route('profile.update') }}" method="post" class="mt-5 text-right">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="title" class="text-right">الاسم</label>
                                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name">
                                                    @error('name')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                            
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="title" class="text-right">البريد</label>
                                                    <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="email">
                                                    @error('email')
                                                    <span class="text-danger"> {{$message}} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9 {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="title" class="text-right">كلمة المرور</label>
                                                    <input type="password" class="form-control" placeholder="اترك الحقل فارغا لاستخدام كلمة المرور القديمة" name="password" id="password">
                                                    @error('password')
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

