@extends('frontEnd.'. config('theme.THEME').'.layouts.master')

@section('content')
    <div>
        <?php
        $title_var = "title_" . Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('prosys.default_language');
        $webmaster_section_title = optional($WebmasterSection)->$title_var ?? optional($WebmasterSection)->$title_var2 ?? '';
        $category_title = optional($CurrentCategory)->$title_var ?? optional($CurrentCategory)->$title_var2 ?? '';
        $page_title = $category_title ?: $webmaster_section_title;
        $category_image = optional($WebmasterSection)->photo
    ? URL::to('uploads/topics/' . $WebmasterSection->photo)
    : (optional($CurrentCategory)->photo
        ? URL::to('uploads/sections/' . $CurrentCategory->photo)
        : '');
        $details_var = 'details_' . @Helper::currentLanguage()->code;
        $details_var2 = 'details_' . config('prosys.default_language');
        ?>

        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ @$search_word ? __('backend.resultsFoundFor') . " [ " . @$search_word . " ]" : $page_title }}</h2>
                    <ul>
                        <li><a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a></li>
                        @if(@$search_word)
                            <li class="active">{!! __('backend.search') !!}</li>
                        @elseif($webmaster_section_title)
                            <li class="active"><a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! $webmaster_section_title !!}</a></li>
                        @else
                            <li class="active">{{ optional($User)->name }}</li>
                        @endif
                        @if($category_title)
                            <li class="active"><a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $category_title }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>


        <div class="ptb-32">
            <section id="content">
                <div class="container">
                    <div class="row">

                        @if(@count($Categories) > 1)
                            @include('frontEnd.layouts.side')
                        @endif
                        <div class="col-lg-{{ @count($Categories) > 1 ? "9" : "12" }} col-md-{{ @count($Categories) > 1 ? "7" : "12" }} col-sm-12 col-xs-12">
                            @if($Topics->isEmpty())
                                <div class="p-5 card text-center no-data">
                                    <i class="fa fa-desktop fa-5x opacity-50"></i>
                                    <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                                </div>
                            @else
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                                    <span class="top-title">{{$webmaster_section_title ??   ""}}</span>
                                    {{-- <h2>{{$category_title ?? $webmaster_section_title ?? $title ?? ""}}</h2> --}}
                                    <h2 >
                                        @if ($WebmasterSection->row_no == 4)
                                            أخبار الجمعية
                                        @endif
                                    </h2>
                                </div>
                            </div>
                                <div class="row">
                                    @foreach($Topics as $Topic)
                                        <div class="col-lg-{{ count($Categories) > 0 ? '6' : '4' }} col-md-{{ count($Categories) > 0 ? '12' : '6' }}">
                                            @include("frontEnd.kupha.topic.card",["Topic"=>$Topic])
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">{!! $Topics->appends($_GET)->links() !!}</div>
                                    <div class="col-lg-4 text-end">
                                        <h5 style="padding-top: 18px">{{ $Topics->firstItem() }} - {{ $Topics->lastItem() }} {{ __('backend.of') }} ( {{ $Topics->total() }} ) {{ __('backend.records') }}</h5>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@if (in_array(optional($WebmasterSection)->type, [3]))
    @push('before-styles')
        <link rel="stylesheet" href="{{ URL::asset('assets/frontend/vendor/green-audio-player/css/green-audio-player.min.css') }}?v={{ Helper::system_version() }}"/>
    @endpush
    @push('after-scripts')
        <script src="{{ URL::asset('assets/frontend/vendor/green-audio-player/js/green-audio-player.min.js') }}?v={{ Helper::system_version() }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
    @endpush
@endif
