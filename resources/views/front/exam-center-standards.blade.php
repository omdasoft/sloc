@extends('layouts.front')
@section('title')
    معايير مراكز الامتحان
@endsection
@section('content')
    <!--breadcrumb nav -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.index')}}">الرئيسية</a></li>
            <li class="breadcrumb-item">التشريعات والمعايير</li>
            <li class="breadcrumb-item active" aria-current="page">معايير مراكز الامتحان</li>
        </ol>
    </nav>
    <!--start of all news section-->
    <section class="goals wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h1><i class="fa fa-gavel" aria-hidden="true"></i> معاير اعتماد مراكز الامتحان</h1>
        <hr></hr>
        <br><br>
        <p class="lead">
            هناك مجموعة من المتطلبات التي يجب الامتثال لها في مراكز تطبيق الرخصة السودانية لقيادة الحاسوب لتقديم الإمتحانات, وتنقسم هذه المتطلبات إلي ثلاث فئات مختلفة القوي العاملة (البشرية), الوسائل وبيئة الإمتحان .
        </p>
        <h3>القوة البشرية الكافية:</h3>
        <br>
        <p class="lead">
            مدير مركز إمتحان علي معرفة ودراية كافية ببرنامج الرخصة السودانية لقيادة الحاسوب ويفضل من يحمل شهادة الرخصة السودانية لقيادة الحاسوب.
            عدد(2) ممتحنين بالمؤهلات التالية:.
        </p>
        <ul>
            <li> يحمل شهادة الرخصة السودانية لقيادة الحاسوب.</li>
            <li>يحمل مؤهل جامعي - بكالريوس علي الأقل - في أحد أفرع تقانة  المعلومات </li>
            <li>سنتين خبرة علي الأقل في مجال تقانة المعلومات</li>
            <li>يعمل في المركز المعني بدوام كامل</li>
            <li>يتميز بأخلاقيات العمل المهني إلى جانب السرعة والاعتمادية والتقيد بالقواعد والأنظمة</li>
            <li>القوى العاملة الكافية للاضطلاع بالمسؤوليات الإدارية / التقنية للبرنامج</li>
        </ul>
        <h3>الوسائل الواجب توفرها:</h3>
        <h5>وسائل التوثيق والأغراض العامة:</h5>
        <ul>
            <li>إتاحة ونشر سياسة تكافؤ الفرص</li>
            <li>إتاحة ونشر إجراءات الإعتراضات والإستئنافات.</li>
            <li>وجود علامات وإشارات واضحة  تبين إتجاه المركز المعني.</li>
            <li>وجود مكتب لطلب المساعدة مدعوم بالأشخاص والمصادر الكافية.</li>
            <li>وجود خطوط هواتف وخدمات إتصال كافية يتضمن ذلك وجود بريد إلكتروني.</li>
            <li>وجود لوحة إعلانات لأوقات الإمتحانات والإعلانات المختلفة.</li>
            <li>وجود سعة تخزين كافية للمواد والوثائق المختلفة</li>
            <li>وسيلة مغلقة وسرية (خزنة....................الخ).</li>
        </ul>
        <h3>الاجهزة : </h3>
        <p class="lead">علي الأقل عدد 10 أجهزة حاسوب مع البرمجيات المطلوبة للرخصة السودانية لقيادة الحاسوب ومواصفات الأجهزة في حدها الأدني: </p>
        <br>
        <ul>
            <li>المعالج Pentium 4.</li>
            <li>الزاكره 1GB</li>
            <li>الهارد ديسك 60GB</li>
        </ul>
        <P class="lead">
            عدد كافي من الطابعات (علي الأقل طابعة واحدة لكل معمل) مع سهولة الوصول للطابعة بواسطة أي جهاز في المعمل.
            الأجهزة مدعومه بواسطة بطاريات Un-interrupted Power Supply (UPS)
        </p>
        <h3> البرمجيات :</h3>
        <br>
        <ul>
            <li>نظم تشغيل كافية وكاملة الوظائف علي الأقل (MS Windows 7).</li>
            <li>تطبيقات كافية وكاملة الوظائف علي الأقل (MS XP Office2010).</li>
            <li>التطبيقات يجب أن تكون منصبة بالكامل وبكل الوظائف المطلوبة (مساعدة، التدقيق الإملائي، المعالجات (wizards) ، المخططات الهيكلية ......الخ)</li>
            <li>برنامج مضاد للفيروسات (Anti-Virus).</li>
        </ul>
        <h3>الإنترنت والإنترانت : </h3>
        <br>
        <ul>
            <li>شبكات محلية كافية وكاملة التشغيل داخل المعامل</li>
            <li>خدمة أنترنت كافية وموثوق بها متصلة بكل جهاز حاسوب  (DSL: 2 MBPS for Downloading and 512 MBPS for Uploading).</li>
        </ul>
        <h3>بيئة الإمتحانات:</h3>
        <br>
        <ul>
            <li>يفضل أن   يكون المعمل علي شكل يو (U) وتكون هنالك مساحات بين الأجهزة.</li>
            <li>وجود بيئة هادئة وتهوية كافية .</li>
        </ul>
    </section>
@endsection
