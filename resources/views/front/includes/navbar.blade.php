			<!--start of navbar-->
			<nav class="navbar navbar-default">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			            <span class="sr-only">القائمة الرئيسية</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand show-xs hidden-lg hidden-md hidden-sm" href="{{route('front.index')}}"><b>S.L.C.O</b></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse hidden-xs" id="bs-example-navbar-collapse-1">
			        <ul class="nav navbar-nav navbar-right">
			            <li class="active"><a href="{{route('front.index')}}"><i class="fa fa-home fa-2x"></i> <span
			                        class="sr-only">(current)</span></a></li>
			        </ul>
			        <form action="search" method="post" class="navbar-form navbar-left hidden-sm">
			            <div class="form-group">
			                <input type="text" class="form-control" name="search" placeholder="ابحث هنا">
			                <button type="submit" name="submit" class="btn serch">بحث</button>
			            </div>
			        </form>
			        <ul class="nav navbar-nav navbar-right">
			            <!--li><a href="support/chat.html" target="new">الدعم الفوري</a></li -->
			            <li class="dropdown">
			                <a href="#">الوسائط</a>
			                <ul class="sub-menu">
			                    <li><a href="{{route('front.imageshow')}}">معرض الصور</a></li>
			                    <li><a href="{{route('front.videos')}}">الفديوهات</a></li>
			                </ul>
			            </li>
			            <li><a href="{{route('front.contact-us')}}">اتصل بنا</a></li>
			            <li><a href="{{route('front.sitemap')}}">خريطة الموقع</a></li>
			            <li class="dropdown">
			                <a href="#">مراكز الرخصة</a>
			                <ul class="sub-menu">
			                    <li><a href="{{route('front.accredited-training-centers')}}">مراكز التدريب المعتمده</a></li>
			                    <li><a href="{{route('front.accredited-exam-centers')}}">مراكز الإمتحان المعتمده</a></li>
			                </ul>
			            </li>
			            <li><a href="{{route('front.faqs')}}">اسئلة متكررة</a></li>
			            <li class="dropdown">
			                <a href="#"> الخدمات والإجراءات</a>
			                <ul class="sub-menu">
			                    <li><a href="{{route('front.trainingcnt-procedures')}}">اعتماد مراكز التدريب</a></li>
			                    <li><a href="{{route('front.examcnt-procedures')}}">اعتماد مراكز الإمتحان</a></li>
			                    <li><a href="{{route('front.trainers-procedures')}}">اعتماد المدربين</a></li>
			                    <li><a href="{{route('front.skillcard-procedures')}}">شراء بطاقة المهارات</a></li>
			                    <li><a href="{{route('front.getexam-procedures')}}">شراء الإمتحانات</a></li>

			                </ul>
			            </li>
			            <li class="dropdown"><a href="#">التشريعات والمعايير </a>
			                <ul class="sub-menu">
			                    <li><a href="{{route('front.accreditation-conditions')}}">اعتماد مراكز التدريب والامتحانات</a></li>
			                    <li><a href="{{route('front.training-center-standards')}}">معايير مراكز التدريب</a></li>
			                    <li><a href="{{route('front.exam-center-standards')}}">معايير مراكز الإمتحان</a></li>
			                    <li><a href="{{route('front.trainer-standards')}}">معايير المتدربين</a></li>
			                </ul>
			            </li>
			            <li class="dropdown"><a href="#">عن الرخصة</a>
			                <ul class="sub-menu">
			                    <li><a href="{{route('front.about')}}">من نحن</a></li>
			                    <li><a href="{{route('front.goals')}}">اهداف الرخصة</a></li>
			                    <li><a href="{{asset('front/docs/sloc.pdf')}}" download>قرار اجازة الرخصة</a></li>
			                    <li><a href="{{asset('front/docs/list.pdf')}}">لائحة الرخصة</a></li>
			                </ul>

			            </li>

			        </ul>
			    </div><!-- /.navbar-collapse -->
			    <!--mobile navbar-->
			    <ul class="nav navbar-nav mobile-menu  navbar-right hidden-lg hidden-md hidden-sm">
			        <li class="mob-dropdown">
			            <a href="#">عن الرخصة
			                <span class="arraw" style="display: inline;">&nbsp;&nbsp;<i class="fa fa-sort-desc"
			                        aria-hidden="true"></i></span>
			                <span class="arraw" style="display: none;">&nbsp;&nbsp;<i class="fa fa-sort-asc"
			                        aria-hidden="true"></i></span>
			            </a>
			            <ul class="mob-sub-menu">
                            <li><a href="{{route('front.about')}}">من نحن</a></li>
                            <li><a href="{{route('front.goals')}}">اهداف الرخصة</a></li>
                            <li><a href="{{asset('front/docs/sloc.pdf')}}" download>قرار اجازة الرخصة</a></li>
                            <li><a href="{{asset('front/docs/list.pdf')}}">لائحة الرخصة</a></li>
			            </ul>
			        </li>
			        <li class="mob-dropdown">
			            <a href="#">التشريعات والمعايير
			                <span class="arraw" style="display: inline;">&nbsp;&nbsp;<i class="fa fa-sort-desc"
			                        aria-hidden="true"></i></span>
			                <span class="arraw" style="display: none;">&nbsp;&nbsp;<i class="fa fa-sort-asc"
			                        aria-hidden="true"></i></span>

			            </a>
			            <ul class="mob-sub-menu">
			                <li><a href="{{route('front.trainingcnt-procedures')}}">اعتماد مراكز التدريب والامتحانات</a></li>
			                <li><a href="{{route('front.training-center-standards')}}">معايير مراكز التدريب</a></li>
			                <li><a href="{{route('front.exam-center-standards')}}">معايير مراكز الإمتحان</a></li>
			                <li><a href="{{route('front.trainer-standards')}}">معايير المتدربين</a></li>
			            </ul>
			        </li>
			        <li class="mob-dropdown">
			            <a href="#"> الخدمات والإجراءات
			                <span class="arraw" style="display: inline;">&nbsp;&nbsp;<i class="fa fa-sort-desc"
			                        aria-hidden="true"></i></span>
			                <span class="arraw" style="display: none;">&nbsp;&nbsp;<i class="fa fa-sort-asc"
			                        aria-hidden="true"></i></span>
			            </a>
			            <ul class="mob-sub-menu">
			                <li><a href="{{route('front.trainingcnt-procedures')}}">اعتماد مراكز التدريب</a></li>
			                <li><a href="{{route('front.examcnt-procedures')}}">اعتماد مراكز الإمتحان</a></li>
			                <li><a href="{{route('front.trainers-procedures')}}">اعتماد المدربين</a></li>
			                <li><a href="{{route('front.skillcard-procedures')}}">شراء بطاقة المهارات</a></li>
			                <li><a href="{{route('front.getexam-procedures')}}">شراء الإمتحانات</a></li>
			            </ul>
			        </li>
			        <li><a href="{{route('front.faqs')}}">اسئلة متكررة</a></li>
			        <li class="mob-dropdown">
			            <a href="#">مراكز الرخصة <span class="arraw" style="display: inline;">&nbsp;&nbsp;<i
			                        class="fa fa-sort-desc" aria-hidden="true"></i></span>
			                <span class="arraw" style="display: none;">&nbsp;&nbsp;<i class="fa fa-sort-asc"
			                        aria-hidden="true"></i></span>
			            </a>
			            <ul class="mob-sub-menu">
			                <li><a href="{{route('front.accredited-training-centers')}}">مراكز التدريب المعتمده</a></li>
			                <li><a href="{{route('front.accredited-exam-centers')}}">مراكز الإمتحان المعتمده</a></li>
			            </ul>
			        </li>
			        <li><a href="{{route('front.sitemap')}}">خريطة الموقع</a></li>
			        <li><a href="{{route('front.contact-us')}}">اتصل بنا</a></li>

			        <!--li><a href="support/chat.html" target="new">الدعم الفوري</a></li -->
			        <li class="mob-dropdown">
			            <a href="#">الوسائط <span class="arraw" style="display: inline;">&nbsp;&nbsp;<i class="fa fa-sort-desc"
			                        aria-hidden="true"></i></span>
			                <span class="arraw" style="display: none;">&nbsp;&nbsp;<i class="fa fa-sort-asc"
			                        aria-hidden="true"></i></span>
			            </a>
			            <ul class="mob-sub-menu">
			                <li><a href="{{route('front.imageshow')}}">معرض الصور</a></li>
			                <li><a href="{{route('front.videos')}}">الفديوهات</a></li>
			            </ul>
			        </li>


			    </ul>
			</nav>
