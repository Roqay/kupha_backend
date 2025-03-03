@include('website.layout.master')

@section('content')
    <!-- Banner Start -->
    <section class="hero-slider-area">
        <div class="bg-banner">
            <img src="./assets/images/banner/home-banner.jpg" alt="">
        </div>
    </section>
    <!--end Banner Start -->

    <!--feature Start -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="icon-holder">
                            <img src="assets/images/features/1.svg" alt="Feature Image 1">
                        </div>
                        <div class="feature-body">
                            <h3>الخدمات الإلكترونية </h3>
                            <p>قم بإدارة ملف العضوية بالجمعية الصيدلية الكويتية من خلال المصادقة مع هويتي </p>
                        </div>
                        <div class="icon-link">
                            <img src="assets/images/features/arrow-up-left.svg" alt="Feature Image 2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="icon-holder">
                            <img src="assets/images/features/2.svg" alt="Feature Image 2">
                        </div>
                        <div class="feature-body">
                            <h3>المجلة الطبية</h3>
                            <p>كعضو يمكنك الوصول إلي مجموعة من المقالات والمجلات الإلكترونية</p>
                        </div>
                        <div class="icon-link">
                            <img src="assets/images/features/arrow-up-left.svg" alt="Feature Image 2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="icon-holder">
                            <img src="assets/images/features/3.svg" alt="Feature Image 3">
                        </div>
                        <div class="feature-body">
                            <h3>الندوات والمؤتمرات</h3>
                            <p>اشترك في الندوات والمؤتمرات الطبية وال‘جتماعية</p>
                        </div>
                        <div class="icon-link">
                            <img src="assets/images/features/arrow-up-left.svg" alt="Feature Image 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end feature -->

    <!-- about Section Start -->
    <section class="about-area ptb-48">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="top-title">نبذة عن الجمعية</span>
                        <h2>الجمعية الصيدلية الكويتية</h2>
                        <p>
                            انشئت الجمعية الصيدلية الكويتية في دولة الكويت بتاريخ 23/10/1963 لتكون أول جمعية مهنية في
                            دول
                            مجلس التعاون الخليجي وهى تضم 19635 طبيب وطبيبة بشري يعملون في القطاعين الحكومي والخاص بدولة
                            الكويت و يدير شئون الجمعية مجلس إدارة مكون من سبعة أعضاء ينتخبهم اعضاء الجمعية لمدة سنتان من
                            بين أعضائها
                        </p>
                        <h3>ومن أهدافها</h3>
                        <ul class="about-list">
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                السعي إلى رفع مستوى مهنة الطب والأطباء البشريين بما يحقق أكبر قدر من الرعاية الصحية .
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                المحافظة على شرف المهنة وآدابها وأغراضها النبيلة ، وبحث الأمور المتعلقة بسلوك المهنة
                                لأعضائها .
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-fill"></i>
                                إجراء الدراسات والبحوث العلمية في مختلف فروع الطب التي تحقق مواكبة مهنة الطب في البلاد
                                والتقدم والتطور في عالم الطب ، والتعاون مع الجامعات والكليات والمؤسسات العلمية المحلية
                                والخارجية في هذا المجال .
                            </li>
                        </ul>
                        <div class="read-more-btns">
                            <a href="login.html" class="primary-btn">تسجيل عضو بالجمعية</a>
                            <a href="about.html" class="secondary-btn">عرض المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="assets/images/about/about.png" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Section End -->

    <!--counter section End -->
    <section class="counter-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="single-counter  align-items-center col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-content">
                        <h3 data-count="215">00</h3>
                        <p>المؤتمرات والفعاليات</p>
                    </div>
                </div>
                <div class="single-counter  align-items-center col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-content">
                        <h3 data-count="2240">00</h3>
                        <p>الروابط</p>
                    </div>
                </div>
                <div class="single-counter  align-items-center col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-content">
                        <h3 data-count="60">00</h3>
                        <p>الاعضاء</p>
                    </div>
                </div>
                <div class="single-counter  align-items-center col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-content">
                        <h3 data-count="55000">00</h3>
                        <p>الصيدليات</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--counter section end -->

    <!--our partners start -->
    <section class="partners-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 text-center">
                    <span class="top-title centered">شركاؤنا</span>
                    <h2 class="section-title">الجمعية الصيدلية الكويتية</h2>
                    <p class="section-sub-title">
                        نحن نفتخر بشراكاتنا مع الجهات الداعمة التي تساهم في تطوير مهنة الصيدلة وتعزيز خدمات النقابة.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center logos-row">
                <div class="col-lg-2 col-md-4 col-sm-6 partner-logo">
                    <a href="https://partner1.com" target="_blank">
                        <img src="assets/images/partners/1.png" alt="Partner 1">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 partner-logo">
                    <a href="https://partner2.com" target="_blank">
                        <img src="assets/images/partners/2.png" alt="Partner 2">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 partner-logo">
                    <a href="https://partner3.com" target="_blank">
                        <img src="assets/images/partners/3.png" alt="Partner 3">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 partner-logo">
                    <a href="https://partner4.com" target="_blank">
                        <img src="assets/images/partners/4.png" alt="Partner 4">
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 partner-logo">
                    <a href="https://partner5.com" target="_blank">
                        <img src="assets/images/partners/5.png" alt="Partner 5">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--our partners end -->

    <!--team-members  start -->
    <section class="team-members-area ptb-32">
        <div class="container team-members-area-container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title">تعرف على فريقنا ذو الخبرة</span>
                    <h2 class="section-title">أعضاء مجلس الإدراة</h2>
                </div>
            </div>
            <div class="row">
                <div class="team-members-slider  owl-carousel owl-theme">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="./assets/images/team/1.png" alt="team image">
                        </div>
                        <div class="caption">
                            <h6>الدكتور / إبراهيم طاولة</h6>
                            <span>رئييس مجلس الإدارة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team-members  end -->

    <!--news-area  start -->
    <section class="news-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 text-center">
                    <span class="top-title centered">أخبارونا</span>
                    <h2 class="section-title">أخر أخبار الجمعية</h2>
                    <p class="section-sub-title">
                        ابق علي إطلاع بأحدث الأخبار والتحديثات المتعلقة بالجمعية الطيدلية،
                    </p>
                </div>
            </div>
            <div class="row  ptb-32">
                <div class="col-lg-7 col-md-7 col-sm-12 d-flex flex-row gap-4">
                    <div class="col-lg-6 col-md-6 col-sm-12 news-item-block">
                        <div class="banner-holder">
                            <img src="./assets/images/news/banner.png" alt="banner">
                        </div>
                        <div class="content">
                            <span class="date">18 مارس 2024 - 10:00 م</span>
                            <h3>بيان الجمعية الطبية بشأن تطبيق البصمة على الأطباء</h3>
                            <p>
                                بعد توارد الانباء عن التعميم الاخير الصادر عن وزارة الصحة بشأن تطبيق البصمة على الأطباء
                                والأنباء المتعلقة به .
                            </p>
                            <div class="control">
                                <a href="news-details.html" class="read-more">
                                    عرض المزيد
                                    <i class="ri-arrow-left-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 news-item-block">
                        <div class="banner-holder">
                            <img src="./assets/images/news/banner.png" alt="banner">
                        </div>
                        <div class="content">
                            <span class="date">18 مارس 2024 - 10:00 م</span>
                            <h3>بيان الجمعية الطبية بشأن تطبيق البصمة على الأطباء</h3>
                            <p>
                                بعد توارد الانباء عن التعميم الاخير الصادر عن وزارة الصحة بشأن تطبيق البصمة على الأطباء
                                والأنباء المتعلقة به .
                            </p>
                            <div class="control">
                                <a href="news-details.html" class="read-more">
                                    عرض المزيد
                                    <i class="ri-arrow-left-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <ul class="recent-news">
                        <li>
                            <a href="news-details.html">
                                <div class="news-img">
                                    <img src="assets/images/news/icon.svg" alt="news image">
                                </div>
                                <div class="news-content">
                                    <h3>اشهار رابطة أطباء زراعة الأعضاء الكويتية</h3>
                                    <span>18 مارس 2024 - 10:00 م</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="news-details.html">
                                <div class="news-img">
                                    <img src="assets/images/news/icon.svg" alt="news image">
                                </div>
                                <div class="news-content">
                                    <h3>اشهار رابطة أطباء زراعة الأعضاء الكويتية</h3>
                                    <span>18 مارس 2024 - 10:00 م</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="news-details.html">
                                <div class="news-img">
                                    <img src="assets/images/news/icon.svg" alt="news image">
                                </div>
                                <div class="news-content">
                                    <h3>اشهار رابطة أطباء زراعة الأعضاء الكويتية</h3>
                                    <span>18 مارس 2024 - 10:00 م</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="news-details.html">
                                <div class="news-img">
                                    <img src="assets/images/news/icon.svg" alt="news image">
                                </div>
                                <div class="news-content">
                                    <h3>اشهار رابطة أطباء زراعة الأعضاء الكويتية</h3>
                                    <span>18 مارس 2024 - 10:00 م</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--news-area  end -->

    <!--support-area  start -->
    <section class="support-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title centered">بحاجة الى مساعدة مهنية</span>
                    <h2 class="section-title">سيقوم موظفو الدعم بالإجابة على أسئلتك!</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="support-areaTwo ptb-32">
        <div class="container">
            <div class="row bk-white all-borders">
                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 no-padding">
                    <div class="support-form-holder">
                        <h3 class="form-title">تواصل معنا</h3>
                        <form>
                            <div class="mb-3 d-flex flex-row gap-4">
                                <input type="text" class="form-control" placeholder="الاسم بالكامل">
                                <input type="tel" class="form-control" placeholder="رقم الهاتف">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="الرسالة"></textarea>
                            </div>
                            <button type="submit" class="primary-btn w-100">إرسال</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 no-padding">
                    <div class="support-img-holder">
                        <img src="assets/images/banner/support.png" alt="support image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--support-area  end -->

    <!--latest-offers-area  start -->
    <section class="latest-offers-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title">العروض</span>
                    <h2 class="section-title">اخر عروض الجمعية</h2>
                </div>
            </div>
            <div class="row">
                <div class="latest-offers-slider  owl-carousel owl-theme">
                    <div class="item">
                        <img src="./assets/images/offers/1.png" alt="offer image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/offers/2.png" alt="offer image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/offers/3.png" alt="offer image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/offers/2.png" alt="offer image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/offers/3.png" alt="offer image">
                    </div>
                    <div class="item">
                        <img src="./assets/images/offers/1.png" alt="offer image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="read-more-btns">
                        <a href="about.html" class="secondary-btn">عرض المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest-offers-area  end -->

    <!-- working-hours Section start -->
    <section class="working-hours-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="single-hours  align-items-center col-lg-4 col-md-4 col-sm-12">
                    <div class="hours-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <div class="hours-content">
                        <h3>تواصل معانا</h3>
                        <p>(952+)454545452</p>
                    </div>
                </div>
                <div class="single-hours  align-items-center col-lg-4 col-md-4 col-sm-12">
                    <div class="hours-icon">
                        <i class="ri-mail-line"></i>
                    </div>
                    <div class="hours-content">
                        <h3>للتواصل من خلال البريد الإلكتروني</h3>
                        <p>info@gmail.com</p>
                    </div>
                </div>
                <div class="single-hours  align-items-center col-lg-4 col-md-4 col-sm-12">
                    <div class="hours-icon">
                        <i class="ri-map-pin-line"></i>
                    </div>
                    <div class="hours-content">
                        <h3>ساعات العمل الرسمية</h3>
                        <p>الأحد - الخميس 09:00 - 13:00</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--working-hours end -->
@endsection
