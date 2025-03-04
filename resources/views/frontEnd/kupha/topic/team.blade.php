<?php
$Team = Helper::WebmasterSection(12);
$Teams = Helper::Topics(12);
$cf_title_var = 'title_' . @Helper::currentLanguage()->code;
$cf_title_var2 = 'title_' . config('prosys.default_language');
$title_var = 'title_' . @Helper::currentLanguage()->code;
$title_var2 = 'title_' . config('prosys.default_language');
$details_var = 'details_' . @Helper::currentLanguage()->code;
$details_var2 = 'details_' . config('prosys.default_language');
if ($Team->$title_var != '') {
    $title = $Team->$title_var;
} else {
    $title = $Team->$title_var2;
}
if ($Team->$details_var != '') {
    $details = $Team->$details_var;
} else {
    $details = $Team->$details_var2;
}
?>
@if (!empty($Team))
    <div class="home_section5 team_section"
        style="background-image: url({{ URL::asset('/assets/' . config('theme.THEME') . '/images/certificate_bg.png') }});">

        <div class="home_section5_content m-auto">
            <div class="d-flex about_company">
                <hr class="separator">
                <span class="mx-3"> {!! $title !!} </span>
                <hr class="separator">
            </div>
            <div class="d-flex justify-content-between">
                <h1>
                    فريق بيلا ستي
                </h1>
            </div>
            <div class="swiper-container swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-c21727109bceac6b" aria-live="off"
                    style="transition-duration: 0ms; transform: translate3d(319px, 0px, 0px); transition-delay: 0ms;">
                    @foreach ($Teams as $Topic)
                        <?php
                        
                        if ($Topic->$title_var != '') {
                            $title = $Topic->$title_var;
                        } else {
                            $title = $Topic->$title_var2;
                        }
                        if ($Topic->$details_var != '') {
                            $details = $Topic->$details_var;
                        } else {
                            $details = $Topic->$details_var2;
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
                                <img src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}" class="certificate"
                                    alt="{{ $title }}">
                            </div>
                            <h3> {{ $title }} </h3>
                            <span> 
                                @foreach ($Team->customFields as $customField)
                                    {{ $Topic->fields->where('field_id', $customField->id)->first()['field_value'] }}
                                @endforeach
                            </span>
                        </div>
                    @endforeach

                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
@endif
