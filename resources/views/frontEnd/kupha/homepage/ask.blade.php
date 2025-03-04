<?php
$FAQLimit = 3; // 0 = all
$FAQs = Helper::Topics(Helper::GeneralWebmasterSettings("home_content7_section_id"), 0, $FAQLimit, 1);
$FAQs1 = @$FAQs->slice(0,5);
$FAQs2 = @$FAQs->slice(5,5);
?>




@if(count($FAQs)>0)
<div class="p-5   home_section4">
    <div class="row w-100">
        <div class="col-md-6">
            <div class="d-flex about_company">
                <hr class="separator">
                <span class="mx-3">{{ __('frontend.homeFAQTitle') }}</span>
                <hr class="separator">
            </div>
            <h1 class="lead">نحن جاهزون <span class="text-danger">للإجابة</span> علي استفساراتك</h1>
            <p dir="rtl" class="mt-4 mb-5">
                {{ __('frontend.homeFAQDesc') }}
            </p>
            <a href="{{url('ar/contact')}}" class="red_border_button">اسأل سؤال</a>
        </div>
        
        <div class="col-md-6">
            <div class="faq-box">
                <?php
                    $i = 0;
                    $section_url = "";
                    ?>
                @foreach($FAQs1 as $Topic)
                <?php
                
                $i++;

                if ($section_url == "") {
                    $section_url = Helper::sectionURL($Topic->webmaster_id);
                }
                ?>
                    @include("frontEnd.". config('theme.THEME').".topic.faq",["Topic"=>$Topic,"CatId"=>0])
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif


