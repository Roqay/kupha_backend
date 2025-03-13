
<?php
$bg_color = Helper::GeneralSiteSettings("style_color2");
$footer_style = "background: #ffffff" ;//. $bg_color;
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $footer_style = "style='background-image: url($bg_file);background-color: $bg_color;'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
$contacts_cols = 3;
if (!Helper::GeneralSiteSettings("style_subscribe")) {
    $contacts_cols = 12;
}
?>
<footer id="footer" class="footer position-absolute mt-0">
    @if(Helper::GeneralSiteSettings("style_footer")==1)
                <div class="row">
                    <div class="col-md-4 mx-5">
                        @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
                                src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" class="mb-3" >
                        @else
                            <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  class="img-fluid"  width="172" height="50">
                        @endif
                        <p class="footer_about">بيلا سيتي هي الشركة الرائدة المبتكرة التي تجمع بين التكنولوجيا المتقدمة وخدمة
                            العملاء المتميزة لإنشاء المنتجات الأكثر تطورًا وتنوعًا في الصناعة.</p>
                    </div>
                    {{-- <div class="col-md-2">
                        <div class="footer-title">
                            <h1>{{ __('frontend.contactDetails') }}</h1>
                        </div>
                        @if(Helper::GeneralSiteSettings("contact_t1_" . @Helper::currentLanguage()->code) !="")
                            <address>
                                <strong>{{ __('frontend.address') }}</strong><br>
                                <i class="bi bi-geo-alt"></i>
                                &nbsp;{{ Helper::GeneralSiteSettings("contact_t1_" . @Helper::currentLanguage()->code) }}
                            </address>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t3") !="")
                            <p>
                                <strong>{{ __('frontend.callUs') }}</strong><br>
                                <i class="bi bi-telephone"></i> &nbsp;<a
                                    href="tel:{{ Helper::GeneralSiteSettings("contact_t3") }}"><span
                                        dir="ltr">{{ Helper::GeneralSiteSettings("contact_t3") }}</span></a></p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t6") !="")
                            <p>
                                <strong>{{ __('frontend.email') }}</strong><br>
                                <i class="bi bi-envelope"></i> &nbsp;<a
                                    href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}">{{ Helper::GeneralSiteSettings("contact_t6") }}</a>
                            </p>
                        @endif
                    </div> --}}
                    @if(Helper::GeneralWebmasterSettings("footer_menu_id") >0)
                        <?php
                        // Get list of footer menu links by group Id
                        $MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("footer_menu_id"));
                        $max_menu_cols = 2;
                        if (!Helper::GeneralSiteSettings("style_subscribe")) {
                            $max_menu_cols = 4;
                        }
                        $mi = 0;
                        ?>
                        @if(count($MenuLinks) == $max_menu_cols)
                            @foreach($MenuLinks as $MenuLink)
                                <div class="col-md-2">
                                    {{-- <div class="footer-title"> --}}
                                        <h1 class="pb-3">{{ @$MenuLink->title }}</h1>
                                    {{-- </div> --}}
                                    @if(@$MenuLink->sub)
                                        {{-- <ul> --}}
                                            @foreach($MenuLink->sub as $SubLink)
                                                <a  href="{{ @$SubLink->url }}"
                                                       target="{{ @$SubLink->target }}">{!! (@$SubLink->icon)?"<i class='".@$SubLink->icon."'></i> ":"" !!} {{ @$SubLink->title }}
                                                    </a>
                                                {{-- @if(@$SubLink->sub)
                                                    @foreach($SubLink->sub as $SubLink2)
                                                        <li><a
                                                                class="nav-link"
                                                                href="{{ @$SubLink2->url }}"
                                                                target="{{ @$SubLink2->target }}">
                                                                &nbsp;&nbsp; {!! (@Helper::currentLanguage()->direction=="rtl")?"&#8617;":"&#8618;" !!} {!! (@$SubLink2->icon)?"<i class='".@$SubLink2->icon."'></i> ":"" !!} {{ @$SubLink2->title }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif --}}
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                @php($mi++)
                            @endforeach
                        @elseif(count($MenuLinks) > $max_menu_cols)
                            <div class="col-lg-3 col-md-6 footer-links2">
                                <div class="footer-title">
                                    <h1>{{ __('frontend.quickLinks') }}</h1>
                                </div>
                                <ul>
                                    @foreach($MenuLinks as $MenuLink)
                                        <li><a class="nav-link" href="{{ @$MenuLink->url }}"
                                               target="{{ @$MenuLink->target }}">{!! (@$MenuLink->icon)?"<i class='".@$MenuLink->icon."'></i> ":"" !!} {{ @$MenuLink->title }}
                                            </a>
                                        </li>
                                        @if(@$MenuLink->sub)
                                            @foreach($MenuLink->sub as $SubLink)
                                                <li><a
                                                        class="nav-link"
                                                        href="{{ @$SubLink->url }}"
                                                        target="{{ @$SubLink->target }}">
                                                        &nbsp;&nbsp; {!! (@Helper::currentLanguage()->direction=="rtl")?"&#8617;":"&#8618;" !!} {!! (@$SubLink->icon)?"<i class='".@$SubLink->icon."'></i> ":"" !!} {{ @$SubLink->title }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                </div>
    @endif
    <hr>
    <div class="d-flex justify-content-between footer_2">
        @include("frontEnd.". config('theme.THEME').".layouts.social",["tt_position"=>"top"])
        <div class="copyright">
            <?php
            $site_title_var = "site_title_" . @Helper::currentLanguage()->code;
            ?>
            &copy; <?php echo date("Y") ?> {{ __('frontend.AllRightsReserved') }}
            . <a href="#">{{Helper::GeneralSiteSettings($site_title_var)}}</a>
        </div>
    </div>

</footer>

@if(Helper::GeneralSiteSettings('social_link10'))
<style>
    .whatsapp_float {
  position:fixed;
  width:75px;
  height:75px;
  bottom:15px;
  right:15px;
  background-color:#25d366;
  color:#fff;
  border-radius:50px;
  text-align:center;
  font-size:44px;
  z-index:100;
  padding:10px;
  border:5px solid rgba(255,255,255,.6);
  font-family:Arial,Helvetica,sans-serif!important;
  line-height:40px
}
.whatsapp-icon {
  margin-top:16px
}
</style>
    <a href="https://wa.me/{{Helper::GeneralSiteSettings('social_link10')}}" class="whatsapp_float" target="_blank"  aria-label="Whatsapp"
       rel="noopener noreferrer">
        <i class="fa fa-whatsapp"></i>
    </a>
@endif
@if (@Auth::check())
    @if(!Helper::GeneralSiteSettings("site_status"))
        <div class="text-center alert alert-warning m-0">
            <div class="h6 mb-0">
                {{__('backend.websiteClosedForVisitors')}}
            </div>
        </div>
    @endif
@endif

@if(0)
<?php
// $bg_color = Helper::GeneralSiteSettings("style_color2");
// $footer_style = "background: " . $bg_color;
// if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
//     $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
//     $footer_style = "style='background-image: url($bg_file);background-color: $bg_color;'";
// }
// if (Helper::GeneralSiteSettings("style_footer") != 1) {
//     $footer_style = "style=padding:0";
// }
// $contacts_cols = 3;
// if (!Helper::GeneralSiteSettings("style_subscribe")) {
//     $contacts_cols = 4;
// }
?>
{{-- <footer id="footer" {!!  $footer_style !!}>
    @if(Helper::GeneralSiteSettings("style_footer")==1)
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-{{ $contacts_cols }} col-md-12 footer-links">
                        <div class="footer-title">
                            <h1>{{ __('frontend.contactDetails') }}</h1>
                        </div>
                        @if(Helper::GeneralSiteSettings("contact_t1_" . @Helper::currentLanguage()->code) !="")
                            <address>
                                <strong>{{ __('frontend.address') }}</strong><br>
                                <i class="bi bi-geo-alt"></i>
                                &nbsp;{{ Helper::GeneralSiteSettings("contact_t1_" . @Helper::currentLanguage()->code) }}
                            </address>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t3") !="")
                            <p>
                                <strong>{{ __('frontend.callUs') }}</strong><br>
                                <i class="bi bi-telephone"></i> &nbsp;<a
                                    href="tel:{{ Helper::GeneralSiteSettings("contact_t3") }}"><span
                                        dir="ltr">{{ Helper::GeneralSiteSettings("contact_t3") }}</span></a></p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t6") !="")
                            <p>
                                <strong>{{ __('frontend.email') }}</strong><br>
                                <i class="bi bi-envelope"></i> &nbsp;<a
                                    href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}">{{ Helper::GeneralSiteSettings("contact_t6") }}</a>
                            </p>
                        @endif
                    </div>
                    @if(Helper::GeneralWebmasterSettings("footer_menu_id") >0)
                        <?php
                        // Get list of footer menu links by group Id
                        $MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("footer_menu_id"));
                        $max_menu_cols = 2;
                        if (!Helper::GeneralSiteSettings("style_subscribe")) {
                            $max_menu_cols = 4;
                        }
                        $mi = 0;
                        ?>
                        @if(count($MenuLinks) == $max_menu_cols)
                            @foreach($MenuLinks as $MenuLink)
                                <div class="col-lg-{{($mi==0)?3:2}} col-md-6 footer-links">
                                    <div class="footer-title">
                                        <h1>{{ @$MenuLink->title }}</h1>
                                    </div>
                                    @if(@$MenuLink->sub)
                                        <ul>
                                            @foreach($MenuLink->sub as $SubLink)
                                                <li><a class="nav-link" href="{{ @$SubLink->url }}"
                                                       target="{{ @$SubLink->target }}">{!! (@$SubLink->icon)?"<i class='".@$SubLink->icon."'></i> ":"" !!} {{ @$SubLink->title }}
                                                    </a>
                                                </li>
                                                @if(@$SubLink->sub)
                                                    @foreach($SubLink->sub as $SubLink2)
                                                        <li><a
                                                                class="nav-link"
                                                                href="{{ @$SubLink2->url }}"
                                                                target="{{ @$SubLink2->target }}">
                                                                &nbsp;&nbsp; {!! (@Helper::currentLanguage()->direction=="rtl")?"&#8617;":"&#8618;" !!} {!! (@$SubLink2->icon)?"<i class='".@$SubLink2->icon."'></i> ":"" !!} {{ @$SubLink2->title }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                @php($mi++)
                            @endforeach
                        @elseif(count($MenuLinks) > $max_menu_cols)
                            <div class="col-lg-3 col-md-6 footer-links">
                                <div class="footer-title">
                                    <h1>{{ __('frontend.quickLinks') }}</h1>
                                </div>
                                <ul>
                                    @foreach($MenuLinks as $MenuLink)
                                        <li><a class="nav-link" href="{{ @$MenuLink->url }}"
                                               target="{{ @$MenuLink->target }}">{!! (@$MenuLink->icon)?"<i class='".@$MenuLink->icon."'></i> ":"" !!} {{ @$MenuLink->title }}
                                            </a>
                                        </li>
                                        @if(@$MenuLink->sub)
                                            @foreach($MenuLink->sub as $SubLink)
                                                <li><a
                                                        class="nav-link"
                                                        href="{{ @$SubLink->url }}"
                                                        target="{{ @$SubLink->target }}">
                                                        &nbsp;&nbsp; {!! (@Helper::currentLanguage()->direction=="rtl")?"&#8617;":"&#8618;" !!} {!! (@$SubLink->icon)?"<i class='".@$SubLink->icon."'></i> ":"" !!} {{ @$SubLink->title }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                    @include('frontEnd.layouts.subscribe')
                </div>
            </div>
        </div>
    @endif
    <div class="footer-bottom">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <?php
                    $site_title_var = "site_title_" . @Helper::currentLanguage()->code;
                    ?>
                    &copy; <?php echo date("Y") ?> {{ __('frontend.AllRightsReserved') }}
                    . <a href="#">{{Helper::GeneralSiteSettings($site_title_var)}}</a>
                </div>
                <div class="credits">
                    Powered by <a href="https://prosys.app">prosys</a>
                </div>
            </div>
            @include("frontEnd.layouts.social",["tt_position"=>"top"])
        </div>
    </div>
</footer>
@if(Helper::GeneralSiteSettings('social_link10'))
    <a href="https://wa.me/{{Helper::GeneralSiteSettings('social_link10')}}" class="whatsapp_float" target="_blank"  aria-label="Whatsapp"
       rel="noopener noreferrer">
        <i class="fa fa-whatsapp"></i>
    </a>
@endif
@if (@Auth::check())
    @if(!Helper::GeneralSiteSettings("site_status"))
        <div class="text-center alert alert-warning m-0">
            <div class="h6 mb-0">
                {{__('backend.websiteClosedForVisitors')}}
            </div>
        </div>
    @endif
@endif --}}
<footer class="footer position-absolute mt-0">
    <div class="row" dir="rtl">
        <div class="col-md-4 mx-5">
            {{-- <img src="./assets/images/logo2.png" alt="Bella City Logo" class="mb-3"> --}}
            @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}"
                     src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" class="mb-3" >
            @else
                <img alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}" src="{{ URL::to('uploads/settings/nologo.png') }}"  class="img-fluid"  width="172" height="50">
            @endif
            <p class="footer_about">بيلا سيتي هي الشركة الرائدة المبتكرة التي تجمع بين التكنولوجيا المتقدمة وخدمة
                العملاء المتميزة لإنشاء المنتجات الأكثر تطورًا وتنوعًا في الصناعة.</p>
        </div>
        <div class="col-md-2">
            <h1 class="pb-3">روابط سريعة</h1>
            <a href="#">الرئيسية</a>
            <a href="./About_us.html">من نحن</a>
            <a href="./Products.html">المنتجات</a>
            <a href="./Jobs.html">الوظائف</a>
        </div>
        <div class="col-md-4 mt-5 footer_links2">
            <a href="./Blog.html">المدونة</a>
            <a href="./News.html">الأخبار والفعاليات</a>
            <a href="./Contact_us.html">اتصل بنا</a>
            <a href="./FAQs.html">الأسئلة الشائعة</a>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-between footer_2">
        <div class="social">
            <a href="#" class="d-inline">
                <i class="far fa-facebook"></i>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link5')}}" class="d-inline">
                <i class="far fa-youtube"></i>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link3')}}" class="d-inline">
                <i class="far fa-twitter"></i>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link6')}}" class="d-inline">
                <i class="far fa-instagram"></i>
            </a>
        </div>
        <div> جميع الحقوق محفوظة لدي <span style="color:#E31E25"Brosys</span> 2025 ©</div>
    </div>
</footer>
@if(Helper::GeneralSiteSettings('social_link10'))

    <a href="https://wa.me/{{Helper::GeneralSiteSettings('social_link10')}}" class="whatsapp_float" target="_blank"  aria-label="Whatsapp"
       rel="noopener noreferrer">
        <i class="fa fa-whatsapp"></i>
    </a>
@endif
@endif
