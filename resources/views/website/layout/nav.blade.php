<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('assets/website/images/logo.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/website/images/logo.svg') }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">من نحن <i class="ri-arrow-down-s-line"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">عن الجمعية</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">الرسالة</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">مجلس الإدارة</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">الروابط</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">العضوية</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">الأخبار</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">مؤتمرات وفعاليات</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">تواصل معنا</a></li>
                    </ul>
                    <div class="others-options">
                        <ul>
                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name">العربية</span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                        <a class="dropdown-item" href="#">
                                            <img src="{{ asset('assets/website/images/language/english.png') }}" alt="Image"> English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="{{ asset('assets/website/images/language/arabic.png') }}" alt="Image"> العربية
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li><a class="primary-btn" href="#">الدخول</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li class="login-item">
                                <a class="login-btn" href="#"><i class="ri-user-settings-line"></i> تسجيل دخول</a>
                            </li>
                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-global-line"></i> <span class="lang-name">English</span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                        <a class="dropdown-item" href="#">
                                            <img src="{{ asset('assets/website/images/language/english.png') }}" alt="Image"> English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="{{ asset('assets/website/images/language/arabic.png') }}" alt="Image"> العربية
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
