<?php 
$HomeTopicsLimit = 0; // 0 = all
$HomeTopics = Helper::Topics(15, 0, $HomeTopicsLimit);
$require_mp3_player = 0; 
?>
@if(count($HomeTopics)>0)
<div class="home_section5" style="background-image: url({{ URL::asset('/assets/'. config('theme.THEME').'/images/certificate_bg.png')}});">

        <div class="home_section5_content m-auto">
            <div class="d-flex about_company">
                <hr class="separator">
                <span class="mx-3">العضويات والشهادات</span>
                <hr class="separator">
            </div>
            <div class="d-flex justify-content-between">
                <h1>شهاداتنا</h1>
                <p>يحتاج أصحاب العمل إلى معرفة أن سباك الخدمة الذي يوظفونه كفؤ ومؤهل وذو خبرة جيدة.</p>
            </div>
            <div class="swiper-container swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-c21727109bceac6b" aria-live="off" style="transition-duration: 0ms; transform: translate3d(319px, 0px, 0px); transition-delay: 0ms;">
                    
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
                    
                    <div class="swiper-slide">
                        <div class="slide_container">
                            <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" class="certificate" alt="{{$title}}">
                        </div>
                    </div> 
                    @endforeach
                   
                </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>
    @endif