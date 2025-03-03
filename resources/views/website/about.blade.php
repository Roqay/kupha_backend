@extends('website.layout.master')
@section('content')
    <!--breadcrumbs Start -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>من نحن</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active">من نحن</li>
                </ul>
            </div>
        </div>
    </div>
    <!--breadcrumbs end -->
    <!-- about Section Start -->
    <section class="out-team-members ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title">من نحن</span>
                    <h2 class="section-title"> مجلس الإدراة</h2>
                </div>
            </div>
            <div class="row narrow-row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-member">
                        <img src="{{asset('assets/website/images/team/p1.png')}}" alt="">
                        <div class="header">
                            <h5><span>الصيدلي / </span> علي عبد الله</h5>
                            <span class="position">عضو مجلس إدرة</span>
                        </div>
                        <div class="mail">Ali.abdullah@Kupha.org.Kw</div>
                        <div class="send-mgs"><a href="#"><img src="{{asset('assets/website/images/team/msg.svg')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-member">
                        <img src="{{asset('assets/website/images/team/p2.png')}}" alt="">
                        <div class="header">
                            <h5><span>الدكتور / </span> أحمد تقــي</h5>
                            <span class="position">رئيس مجلس الإدارة</span>
                        </div>
                        <div class="mail">a.taqi@Kupha.org.Kw</div>
                        <div class="send-mgs"><a href="#"><img src="{{asset('assets/website/images/team/msg.svg')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-member">
                        <img src="{{asset('assets/website/images/team/p3.png')}}" alt="">
                        <div class="header">
                            <h5><span>الصيدلانية / </span> ولاء معرفــي</h5>
                            <span class="position">أمين الصندوق</span>
                        </div>
                        <div class="mail">walaa.marafi@Kupha.org.Kw</div>
                        <div class="send-mgs"><a href="#"><img src="{{asset('assets/website/images/team/msg.svg')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-member">
                        <img src="{{asset('assets/website/images/team/p4.png')}}" alt="">
                        <div class="header">
                            <h5><span>الصيدلي / </span> فيصل العنــزي</h5>
                            <span class="position">الأمين العام</span>
                        </div>
                        <div class="mail">faisal.alenezi@Kupha.org.Kw</div>
                        <div class="send-mgs"><a href="#"><img src="{{asset('assets/website/images/team/msg.svg')}}" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-member">
                        <img src="{{asset('assets/website/images/team/p5.png')}}" alt="">
                        <div class="header">
                            <h5><span>الصيدلي / </span> بدر الخرينــج</h5>
                            <span class="position">عضو مجلس إدرة</span>
                        </div>
                        <div class="mail">Bader.alkhurainej@Kupha.org.Kw</div>
                        <div class="send-mgs"><a href="#"><img src="{{asset('assets/website/images/team/msg.svg')}}" alt=""></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about Section End -->
@endsection
