<meta charset="utf-8">
<title>{{(@$PageTitle !="")? @$PageTitle:Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code)}}</title>
<meta name="description" content="{{(@$PageDescription !="")? @$PageDescription:Helper::GeneralSiteSettings("site_desc_" . @Helper::currentLanguage()->code)}}"/>
<meta name="keywords" content="{{(@$PageKeywords !="")? @$PageKeywords:Helper::GeneralSiteSettings("site_keywords_" . @Helper::currentLanguage()->code)}}"/>
<meta name="author" content="{{ URL::to('') }}"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 

 

<link rel="icon" href="{{ URL::asset('kupha/assets/images/favicon.ico')}}" type="image/x-icon">
@if( @Helper::currentLanguage()->direction=="rtl")
<link rel="stylesheet" href="{{ asset('kupha/assets/css/bootstrap.rtl.min.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('kupha/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/flaticon_mycollection.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('kupha/assets/css/responsive.css') }}">

<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.svg') }}">

{{-- <link href="{{ URL::asset('assets/frontend/vendor/fontawesome/css/all.min.css') }}?v={{ Helper::system_version() }}"  rel="stylesheet" media/>  --}}
 <link href="{{ URL::asset('assets/frontend/vendor/fontawesome/css/font-awesome.min.css') }}?v={{ Helper::system_version() }}" rel="stylesheet" media/>
@if( @Helper::currentLanguage()->direction=="rtl")
<link rel="stylesheet" href="{{ asset('kupha/assets/css/rtl.css') }}">
    @else
    <link rel="stylesheet" href="{{ URL::asset('kupha/assets/bootstrap/bootstrap.min.css')}}">
@endif

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon"
          type="image/png">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif
@if(Helper::GeneralSiteSettings("style_apple") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="144x144">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif

<meta property='og:title'
      content='{{@$PageTitle}} {{(@$PageTitle =="")? Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code):""}}'/>
@if(@$Topic->photo_file !="")
    <meta property='og:image' content='{{ URL::asset('uploads/topics/'.@$Topic->photo_file) }}'/>
@elseif(Helper::GeneralSiteSettings("style_apple") !="")
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}'/>
@else
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/nofav.png') }}'/>
@endif
<meta property="og:site_name" content="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}">
<meta property="og:description" content="{{@$PageDescription}}"/>
<meta property="og:url" content="{{ url()->full()  }}"/>
<meta property="og:type" content="website"/>

<link rel="canonical" href="{{ url()->current() }}">

@if(Helper::GeneralSiteSettings("css")!="")
    <style type="text/css">
        {!! Helper::GeneralSiteSettings("css") !!}
    </style>
@endif
{{-- Google Tags and google analytics --}}
@if(@$WebmasterSettings->google_tags_status && @$WebmasterSettings->google_tags_id !="")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{!! @$WebmasterSettings->google_tags_id !!}');</script>
    <!-- End Google Tag Manager -->
@endif
