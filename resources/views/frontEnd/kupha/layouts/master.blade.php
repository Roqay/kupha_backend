<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">

<head>
    <!-- ======= Meta & CSS ======= -->
    @stack('before-styles')
    @include('frontEnd.'. config('theme.THEME').'.layouts.head')
    {{-- @include('frontEnd.kupha.layouts.colors') --}}
    @yield('headInclude')
    {{-- @stack('after-styles') --}}
</head> 
<body class="home {{ @Helper::currentLanguage()->direction }} lang-{{ @Helper::currentLanguage()->code }}" >
<!-- ======= Top Bar ======= -->
{{-- @include('frontEnd.'. config('theme.THEME').'.layouts.topbar') --}}

<!-- ======= Header ======= -->
@include('frontEnd.'. config('theme.THEME').'.layouts.header')

<!-- ======= Main contents ======= -->
{{-- <main id="main" class="{{ (Helper::GeneralSiteSettings("style_header"))?"fixed-top-margin":"" }}"> --}}
@yield('content')
{{-- </main> --}}
<!-- ======= Footer ======= -->
@include('frontEnd.'. config('theme.THEME').'.layouts.footer')
{{-- @include('frontEnd.layouts.footer') --}}
@if(Helper::GeneralSiteSettings("style_preload"))
<div id="preloader"></div>
@endif
<!-- ======= JS Including ======= -->
@stack('before-scripts')
@include('frontEnd.'. config('theme.THEME').'.layouts.foot')
{{-- @yield('footInclude') --}}
{{-- @stack('after-scripts') --}}
</body>
</html>
