@extends('layouts.front')
@section('title')
    إجراءات اعتماد المدربين
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">الخدمات والاجراءات</a></li>
            <li class="breadcrumb-item active" aria-current="page">إجراءات اعتماد المدربين</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="approved-cnt wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h1><i class="fa fa-tasks" aria-hidden="true"></i> إجراءات اعتماد المدربين</h1>
        <hr></hr>
        <br><br>
        <p class="lead">
            لاعتماد مدرب  لدى برنامج الرخصة لابد من :
        <ul>
            <li>
                استيفاء  معايير مدربي الرخصة <a href="{{route('front.trainer-standards')}}">اضغط هنا</a> او (<a href="{{asset('front/docs/trainer.pdf')}}">للتحميل pdf</a>)
            </li>
            <li>
                ملء استمارة اعتماد المدربين (<a href="{{asset('front/docs/trainer-form.doc')}}">اضغط هنا للتحميل word</a>)
            <li>
                تسليم الاستمارة الى إدارة البرنامج .
            </li>
            <li>
                دفع الرسوم المقررة خلال ساعات العمل الرسمية من 8 صباحا وحتى الرابعة مساء عدا  يوم الجمعة .
            </li>
            <li>
                حضور ورشة تدريب المدربين واستيفاء المتطلبات اللازمة التى قد تشمل امتحانات خاصة بالمدربين
            </li>
            <li>
                إصدار شهادة مدرب معتمد  ويتم إرسالها الى المدرب او تسليمها له من ادار ة البرنامج .
            </li>
        </ul>
        يحق بعد ذلك للمدرب الالتحاق باى مركز تدريب معتمد وممارسة تدريب برنامج الرخصة

        </p>
    </section>
@endsection
