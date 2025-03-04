{{-- <header id="header" class="{{ (Helper::GeneralSiteSettings("style_header"))?"fixed-top":"" }} {{ (Helper::GeneralSiteSettings("style_bg_type"))?"header-no-bg":"header-bg" }}">
    <div class="container d-flex align-items-center">
        <a class="logo me-auto" href="{{ Helper::homeURL() }}">
            @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
                     src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}"  class="img-fluid" width="230" height="50">
            @else
                <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  class="img-fluid"  width="172" height="50">
            @endif
        </a>

        @include('frontEnd.layouts.menu')
    </div>
</header> --}}
 <!-- Navbar -->
<?php
//  <nav class="navbar navbar-expand-lg" dir="rtl">
//     <div class="container">
//         <a class="navbar-brand mx-5" href="./Home.html">
//             @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
//                 <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
//                      src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}"  >
//             @else
//                 <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  class="img-fluid"  width="172" height="50">
//             @endif
//             {{-- <img src="./assets/images/logo.png" alt="Logo"> --}}
//         </a>
//         <a href="#" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
//             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
//             <i class="fa fa-bars" aria-hidden="true" style="font-size: 30px; color: #E31E25;"></i>
//         </a> 
//         @include('frontEnd.kupha.layouts.menu')
//     </div>
// </nav>
?>

<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        {{-- <img src="assets/images/logo.svg" alt="logo"> --}}
                        @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
                                src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}"  alt="logo" >
                        @else
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  alt="logo" class="img-fluid"  width="172" height="50">
                        @endif
                    </a>
                </div>


            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    {{-- <img src="kupha/assets/images/logo.svg" alt="logo"> --}}
                    @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
                                src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}"  alt="logo" >
                        @else
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  alt="logo" class="img-fluid"  width="172" height="50">
                        @endif
                </a>

                @include('frontEnd.kupha.layouts.menu')
                
            </nav>
        </div>
    </div>
    {{-- <div class="others-option-for-responsive">
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
                                <a class="login-btn" href="login.html"><i class="ri-user-settings-line"></i> تسجيل
                                    دخول</a>
                            </li>
                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-global-line"></i>
                                        <span class="lang-name">
                                            
                                            English
                                        </span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/english.png" alt="Image">
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/arbic.png" alt="Image">
                                            العربيّة
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
