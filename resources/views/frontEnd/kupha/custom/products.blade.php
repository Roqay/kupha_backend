{{-- @extends('frontEnd.layouts.master') --}}
@extends('frontEnd.' . config('theme.THEME') . '.layouts.master')

@section('content')
    <?php
    $title_var = 'title_' . @Helper::currentLanguage()->code;
    $title_var2 = 'title_' . config('prosys.default_language');
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
    if (!empty($CurrentCategory) and $CurrentCategory != 'none') {
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
    ?>

<div class=" pt-5" style="background-color: #fafafa;">
    <div class="container about_header">
        <span><a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a></span>
       

        @if ($webmaster_section_title != '')
        <span>/</span>
            <span><a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! @$WebmasterSection->id == 1 ? $title : $webmaster_section_title !!}</a>
            </span>
        @else
        <span>/</span>
            <span>{{ $title }}</span>
        @endif
        
        @if ($category_title != '')
        <span>/</span>
            <span><a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $category_title }}</a>
            </span>
        @endif
    </div>
</div>

    <div class="home_section3 py-5 ">
        <!-- Search -->
        <div class="search-section bg-white container m-auto">
            <h5 class="mb-4">{{$webmaster_section_title}}</h5>
            {{ Form::open(['url' => Helper::sectionURL(1), 'method' => 'GET', 'class' => 'd-flex justify-content-center']) }}
            <div class="input-group mx-2 w-100">
                <img src="./assets/images/search_icon.png" alt="Search">
                {{-- <input type="text" class="form-control form-control-sm rounded" id="searchInput" placeholder="بحث"> --}}
                {!! Form::text('search_word', @$search_word, [
                    'placeholder' => __('backend.search'),
                    'class' => 'form-control form-control-sm rounded',
                    'id' => 'search_word',
                    'required' => '',
                    'maxlength' => 50,
                    'autocomplete' => 'off',
                ]) !!}
            </div>
            <button class="btn btn-sm" type="submit" id="button-addon2"><i class="fa fa-search"></i>
            </button>
            {{ Form::close() }}
        </div>
        <div class="d-flex justify-content-center flex-wrap mt-2 text-center">
            @if ($Topics->total() == 0)
                <div class="p-5 card text-center no-data">
                    <i class="fa fa-desktop fa-5x opacity-50"></i>
                    <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                </div>
            @else
                <?php
                $title_var = 'title_' . @Helper::currentLanguage()->code;
                $title_var2 = 'title_' . config('prosys.default_language');
                $details_var = 'details_' . @Helper::currentLanguage()->code;
                $details_var2 = 'details_' . config('prosys.default_language');
                $slug_var = 'seo_url_slug_' . @Helper::currentLanguage()->code;
                $slug_var2 = 'seo_url_slug_' . config('prosys.default_language');
                $i = 0;
                $cols_lg = 4;
                $cols_md = 6;
                if (count($Categories) > 0) {
                    $cols_lg = 3;
                    $cols_md = 12;
                }
                ?>
                @foreach ($Topics as $Topic)
                    <?php
                    if ($Topic->$title_var != '') {
                        $title = $Topic->$title_var;
                    } else {
                        $title = $Topic->$title_var2;
                    }
                    if ($Topic->$details_var != '') {
                        $details = $details_var;
                    } else {
                        $details = $details_var2;
                    }
                    
                    $topic_link_url = Helper::topicURL($Topic->id);
                    ?>
                    <div class="bg-white mx-4 p-4 mt-4">

                            <div class="d-flex mb-4">
                                @if ($Topic->photo_file != '')
                                <div></div>
                                    <img class="card-img-top" loading="lazy" style="width:235px; height:168px;"
                                        src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}"
                                        alt="{{ $title }}" />
                                @endif
                            </div>
                            <h3> {{ mb_substr($title, 0, 20) . '..' }} </h3>
                            <p> {!! mb_substr(strip_tags($Topic->$details), 0, 30) . '...' !!}</p>
                            <a href="{{ $topic_link_url }}" class="red_border_button"> 
                                 عرض التفاصيل  </a>
                    </div>
                    <?php
                    $i++;
                    ?>
                @endforeach
            @endif

        </div>
    </div>

@endsection
