<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('back.dashboard')}}"><i class="la la-dashboard"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item"><a href="">
                    <i class="la la-bell"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> طلبات الاشتراك</span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">5</span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.dash.crypto"> اشتراكات مفعلة</a>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">اشتراكات غير مفعلة</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href="">
                    <i class="la la-bell"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الرعايات</span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">5</span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.dash.crypto"> رعايات مفعلة</a>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">رعايات غير مفعلة</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">تسجيل الزوار</span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">6</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> ملتقي التحول</span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">3</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>


            

            <li class="nav-item"><a href=""><i class="la la-envelope"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الرسائل  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">60</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-rss"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاخبار  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2">50</span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> خبر جديد </a>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ft-power"></i>
                    تسجيل الخروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
