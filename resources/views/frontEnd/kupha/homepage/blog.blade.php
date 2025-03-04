<?php 
$HomeTopicsLimit = 3; // 0 = all
$HomeTopics = Helper::Topics(Helper::GeneralWebmasterSettings("home_content1_section_id"), 0, $HomeTopicsLimit);
$require_mp3_player = 0;
?>
@if(count($HomeTopics)>0)

<div class="home_section8 px-5 pt-5">
    <div class="d-flex about_company justify-content-center">
        <hr class="separator">
        <span class="mx-3">المدونة</span>
       
        <hr class="separator">
    </div>
    <h1 class="text-center mb-3">{{ __('frontend.homeContents1Title') }}</h1>
    <p class="text-center mb-5">{{ __('frontend.homeContents1desc') }}</p>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach($HomeTopics as $Topic)
        <?php
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
        // if ($section_url == "") {
            // dd($section_url);
            $section_url = Helper::sectionURL($Topic->webmaster_id);
        // }
        $topic_link_url = Helper::topicURL($Topic->id);
        $HomeSectionType = @$Topic->webmasterSection->type;
        if (!@$require_mp3_player && $HomeSectionType == 3) {
            $require_mp3_player = 1;
        }
        ?>
        <div class="custom-card-container custom-card-container3" style="background-image: url('{{ URL::to('uploads/topics/'.$Topic->photo_file) }}');">
            <div class="card custom-card">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">10:00 AM - 18 مارس 2024</small></p>
                    <h5 class="card-title">{{$title}}</h5>
                    @if(strip_tags($Topic->$details) !="")
                        <p class="card-text">
                            {!! mb_substr(strip_tags($Topic->$details),0, 120)."..." !!}
                        </p>
                    @endif
                </div>
                <a href="{{ $topic_link_url }}" class="card-footer text-right d-flex justify-content-between">
                    <span>{{ __("frontend.moreDetails") }}</span>
                    <i class="fa-light fa-arrow-left mr-2"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5 pb-5">
        <a href="{{ url( $section_url ) }}" class="red_border_button"> {{ __("frontend.moreDetails") }} </a>
    </div>
</div>
@endif