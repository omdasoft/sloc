@extends('layouts.front')
@section('title')
    إجراءات شراء إمتحانات
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">الخدمات والاجراءات</a></li>
            <li class="breadcrumb-item active" aria-current="page">إجراءات شراء إمتحانات</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="approved-cnt">
        <h1><i class="fa fa-tasks" aria-hidden="true"></i> إجراءات شراء إمتحانات</h1>
        <hr></hr>
        <br><br>
        <p class="lead">
        <ul>
            <li>يتم توفير الإمتحانات عبرالنظام المركزى لإمتحانات الرخصة للمراكز المعتمدة كمراكز إمتحانات فقط </li>
            <li>تقوم المراكز بتعبئة استمارة شراء رصيد إمتحانات وتسديد الرسوم المقررة وفق حجم الرصيد </li>
            <li>يتم تخصيص رصيد الامتحان للمراكز ، ويتم حجز الزمن  حسب الاتفاق بين إدارة البرنامج ومركز الامتحان</li>
        </ul>
        </p>
    </section>
@endsection
