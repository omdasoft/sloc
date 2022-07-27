@extends('layouts.front')
@section('title')
شروط اعتماد مراكز التدريب والإمتحانات
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">التشريعات والمعايير</a></li>
            <li class="breadcrumb-item active" aria-current="page">شروط اعتماد مراكز التدريب والإمتحانات</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="goals">
        <h1><i class="fa fa-gavel" aria-hidden="true"></i> شروط إعتماد مراكز التدريب ومراكز الامتحانات </h1>
        <hr></hr>
        <br><br>
        <ul>
            <li> ان يكون المركز / المعهد مسجل لدي المجلس القومي للتدريب</li>
            <li>أن يكون التسجيل سارى المفعول لمدة لا تقل عن ستة أشهر</li>
            <li>أن يلتزم بالاسس واللوائح والمعايير الخاصة بالبرنامج </li>
            <li>أن يقوم بتسديد الرسوم المقررة قبل تحديد  زيارة الاعتماد للمركز </li>
            <li>فترة الاعتماد للمركز عام واحد وتجدد سنويا</li>
        </ul>
    </section>
@endsection
