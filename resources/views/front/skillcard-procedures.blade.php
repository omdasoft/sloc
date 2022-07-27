@extends('layouts.front')
@section('title')
    اجراءات شراء بطاقة المهارات
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">الخدمات والاجراءات</a></li>
            <li class="breadcrumb-item active" aria-current="page">اجراءات شراء بطاقة المهارات</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="approved-cnt wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
    <h1><i class="fa fa-tasks" aria-hidden="true"></i> اجراءات شراء بطاقة المهارات</h1>
    <hr></hr>
    <br><br>
    <p class="lead">
    <ul>
        <li>يتم توفير بطاقة المهارات للمراكز المعتمدة لامتحانات الرخصة فقط </li>
        <li>للحصول على بطاقة المهارات يقوم  مركز الامتحانات المعتمد بتسجيل الراغبين فى الجلوس لامتحان الرخصة . </li>
        <li>يسدد الممتحنين رسوم البطاقة مباشرة لمركز الامتحان</li>
        <li>تعد مراكز الإمتحانات كشفاً /كشوفات باسماء الراغبين فى الجلوس للإمتحان منها</li>
        <li>تقدم مراكز الامتحانات طلباتها لادارة البرنامج ببرج الاتصالات الطابق الخامس  بعد تعبئة إستمارة الشراء (<a href="#">للتحميل اضغط هنا</a>) للتقديم الكترونيا (<a href="#">اضغط هنا</a>)</li>
        <li>تسديد الرسوم المحددة أثناء ساعات العمل الرسمية .</li>
        <li>تتسلم المراكز بطاقتها وتقوم بمتابعة بقية الإجراءات مع الممتحنين </li>
    </ul>
    </p>
    </section>
@endsection
