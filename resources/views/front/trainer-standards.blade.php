@extends('layouts.front')
@section('title')
    معايير المدربين
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item">التشريعات والمعايير</li>
            <li class="breadcrumb-item active" aria-current="page"> معايير المدربين</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="goals">
        <h1><i class="fa fa-gavel" aria-hidden="true"></i> معاير اعتماد المدربين</h1>
        <hr></hr>
        <br><br>
        <ul>
            <li>يجب أن يكون  المدرب من حملة الشهادات الجامعية في مجالات تقانة المعلومات (IT) (بكاليريوس علي الأقل) </li>
            <li>الخبرة التدريبية التى لا تقل عن عامان </li>
            <li>يجب أن يحصل  المدرب على شهادة المدربين لبرنامج الرخصة السودانية لقيادة الحاسوب مع إعطائه فرصة 6 أشهر للحصول علي الرخصة السودانية لقيادة الحاسوب</li>
        </ul>
    </section>
@endsection
