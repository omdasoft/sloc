@extends('layouts.front')
@section('title')
    إجراءات اعتماد مركز امتحان
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">الخدمات والاجراءات</a></li>
            <li class="breadcrumb-item active" aria-current="page">إجراءات اعتماد مركز امتحان</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="approved-cnt wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h1><i class="fa fa-tasks" aria-hidden="true"></i> إجراءات اعتماد مركز إمتحان </h1>
        <hr></hr>
        <br><br>
        <p class="lead">
            لاعتماد اى مركز امتحان لدى برنامج الرخصة لابد من :

        <ul>
            <li>
                استيفاء معايير مراكز الامتحان <a href="{{route('front.exam-center-standards')}}">من هنا</a>
                او(<a href="{{asset('front/docs/exam.pdf')}}">للتحميل pdf</a>)
            </li>
            <li>
                ملء استمارة اعتماد المراكز التدريبية(<a href="{{asset('front/docs/form.doc')}}" download>للتحميل word</a>)
                للتقديم اونلاين عبر الموقع الالكتروني <a href="#">اضغط هنا</a>

            </li>
            <li>
                تسليم الاستمارة إلى إدارة البرنامج في حالة التقديم اليدوي او اكمال بقية الخطوات في حاله التسجيل الالكتروني
            </li>
            <li>
                دفع الرسوم المقررة خلال ساعات العمل الرسمية من 8 صباحا وحتى الرابعة مساء عدا  يوم الجمعة .
            </li>
            <li>
                ستقوم إدارة البرنامج بتحديد تاريخ زيارة فريق الجودة للمركز للتأكد من حالة وصلاحية المركز والتوصية بالاعتماد او تحديد

                اى متطلبات وزيارات أخرى .
            </li>
            <li>
                اصدار شهادة الاعتماد النهائية ويتم إرسالها الى المركز او تسليمها من ادار ة لبرنامج .
            </li>

        </ul>
        يحق
        بعد ذلك للمركز الإعلان عبر مختلف الوسائل الإعلامية ورفع لافتة باسم برنامج الرخصة السودانية لتشغيل الحاسوب

        حسب التصميم الموحد لدى إدارة البرنامج
        <br>
        <b>
            ملاحظة:
            فترة صلاحية اعتماد المركز سنة واحده فقط  تحسب من تاريخ اعتماد المركز ويجب تجديدها
            مره اخري
        </b>
        </p>
    </section>
@endsection
