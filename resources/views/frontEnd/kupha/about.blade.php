@extends('frontEnd.'. config('theme.THEME').'.layouts.master')
@php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . config('prosys.default_language');
$details_var = "details_" . @Helper::currentLanguage()->code;
$details_var2 = "details_" . config('prosys.default_language');
if ($Topic->$title_var != "") {
    $title = $Topic->$title_var;
} else {
    $title = $Topic->$title_var2;
}
if ($Topic->$details_var != "") {
    $details = $details_var;
} else {
    $details = $details_var2;
}
@endphp
@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ (@$search_word != "") ? __('backend.resultsFoundFor') . " [ " . @$search_word . " ]" : $title }}</h2>
            <ul>
                <li>
                    <a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a>
                </li>

                <li class="active">
                    <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $title }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>
    @include('frontEnd.'. config('theme.THEME').'.homepage.row5')
    {{-- @include('frontEnd.'. config('theme.THEME').'.topic.whyus')
    @include('frontEnd.'. config('theme.THEME').'.homepage.contact') --}}
@endsection
@section('footInclude')
    {{-- add you custom js code here --}}
@endsection
@push('before-styles')
    {{-- add your custom css links here --}}
@endpush
@push('after-scripts')
    {{-- add your custom js links here--}}
@endpush
