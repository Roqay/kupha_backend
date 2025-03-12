@extends('frontEnd.' . config('theme.THEME') . '.layouts.master')

@section('content')
    <div>
        <?php
        $title_var = 'title_' . @Helper::currentLanguage()->code;
        $title_var2 = 'title_' . config('prosys.default_language');
        $details_var = 'details_' . @Helper::currentLanguage()->code;
        $details_var2 = 'details_' . config('prosys.default_language');
        $webmaster_section_title = '';
        $category_title = '';
        $page_title = '';
        $category_image = '';
        if (@$WebmasterSection != 'none') {
            if (@$WebmasterSection->$title_var != '') {
                $webmaster_section_title = @$WebmasterSection->$title_var;
            } else {
                $webmaster_section_title = @$WebmasterSection->$title_var2;
            }
            $page_title = $webmaster_section_title;
            if (@$WebmasterSection->photo != '') {
                $category_image = URL::to('uploads/topics/' . @$WebmasterSection->photo);
            }
        }
        if ($CurrentCategory != 'none') {
            if (!empty($CurrentCategory)) {
                if (@$CurrentCategory->$title_var != '') {
                    $category_title = @$CurrentCategory->$title_var;
                } else {
                    $category_title = @$CurrentCategory->$title_var2;
                }
                $page_title = $category_title;
                if (@$CurrentCategory->photo != '') {
                    $category_image = URL::to('uploads/sections/' . @$CurrentCategory->photo);
                }
            }
        }
        ?>




        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ @$search_word != '' ? __('backend.resultsFoundFor') . ' [ ' . @$search_word . ' ]' : $page_title }}
                    </h2>
                    <ul>
                        <li>
                            <a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a>
                        </li>
                        @if (@$search_word != '')
                            <li class="active">{!! __('backend.search') !!}</li>
                        @elseif($webmaster_section_title != '')
                            <li class="active">
                                <a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! $webmaster_section_title !!}</a>
                            </li>
                        @elseif(@$search_word != '')
                            <li class="active">{{ @$search_word }}</li>
                        @else
                            <li class="active">{{ $User->name }}</li>
                        @endif
                        @if ($category_title != '')
                            <li class="active">
                                <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $category_title }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>


        {{-- @if ($category_image != '') --}}
        {{-- @include('frontEnd.'. config('theme.THEME').'.topic.cover', ['pageTitle' => $page_title]) --}}


        {{-- @endif --}}
        <section id="membership-area-pg" class="membership-area ptb-32">
            <div class="container">

                @if ($Topics->total() == 0)
                    <div class="p-5 card text-center no-data">
                        <i class="fa fa-desktop fa-5x opacity-50"></i>
                        <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                    </div>
                @else
                    <div class="row">
                        @foreach ($Topics as $Topic)
                            <?php
                            $title = $Topic->$title_var ?: $Topic->$title_var2;
                            $details = $Topic->$details_var ?: $Topic->$details_var2;
                            $topic_link_url = @Helper::currentLanguage()->code . '/member-ship';
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="membership-item-block">
                                    <div class="banner-holder">
                                        @if ($Topic->photo_file != '')
                                            <img class="card-img-top"
                                                src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}" width="100%"
                                                height="100%" alt="{{ $title }}" loading="lazy" />
                                        @else
                                            <?php
                                            $img_url = '';
                                            ?>
                                            @if ($Topic->video_type == 1)
                                                <?php
                                                $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                                $img_url = 'http://img.youtube.com/vi/' . $Youtube_id . '/0.jpg';
                                                ?>
                                                <img class="card-img-top" src="{{ $img_url }}" width="100%"
                                                    height="100%" alt="{{ $title }}" loading="lazy" />
                                            @else
                                                <div class="bg-secondary w-100 rounded-top h-200px"></div>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="content">
                                        <div class="heading">
                                            <h3>{{ $title }}</h3>
                                            <span class="type">مجانية</span> {{-- يمكن التعديل لجعلها ديناميكية --}}
                                        </div>
                                        <p>
                                            {{ Str::limit(strip_tags($details), 100) }}
                                        </p>
                                        <div class="control">
                                            <a href="{{ url($topic_link_url) }}" class="read-more">
                                                اشترك الان
                                                <i class="ri-arrow-left-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            {!! $Topics->appends($_GET)->links() !!}
                        </div>
                        <div class="col-lg-4 text-end">
                            <h5 style="padding-top: 18px">
                                {{ $Topics->firstItem() }} - {{ $Topics->lastItem() }} {{ __('backend.of') }}
                                ( {{ $Topics->total() }} ) {{ __('backend.records') }}
                            </h5>
                        </div>
                    </div>
                @endif
            </div>
    </section>

@endsection
@if (@in_array(@$WebmasterSection->type, [3]))
    @push('before-styles')
        <link rel="stylesheet"
            href="{{ URL::asset('assets/frontend/vendor/green-audio-player/css/green-audio-player.min.css') }}?v={{ Helper::system_version() }}" />
    @endpush
    @push('after-scripts')
        <script
            src="{{ URL::asset('assets/frontend/vendor/green-audio-player/js/green-audio-player.min.js') }}?v={{ Helper::system_version() }}">
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
    @endpush
@endif
