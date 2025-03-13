<?php
$SliderBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_banners_section_id"));
?>
@if(count($SliderBanners) > 0)
    <section class="hero-slider-area">
        <div class="hero-slider owl-theme owl-carousel" data-slider-id="1">
            @foreach($SliderBanners as $SliderBanner)
                <?php
                $title_var = "title_" . @Helper::currentLanguage()->code;
                $title_var2 = "title_" . config('prosys.default_language');
                $details_var = "details_" . @Helper::currentLanguage()->code;
                $details_var2 = "details_" . config('prosys.default_language');
                $file_var = "file_" . @Helper::currentLanguage()->code;
                $file_var2 = "file_" . config('prosys.default_language');

                // جلب العنوان
                $BTitle = $SliderBanner->$title_var ?? $SliderBanner->$title_var2;

                // جلب التفاصيل
                $BDetails = $SliderBanner->$details_var ?? $SliderBanner->$details_var2;

                // جلب الملف (الصورة)
                $BFile = $SliderBanner->$file_var ?? $SliderBanner->$file_var2;
                $BFilePath = $BFile ? URL::to('uploads/banners/' . $BFile) : null;
                ?>

                @if($BFilePath)
                    <div class="hero-slider-item bg-banner" style="background-image: url('{{ $BFilePath }}');">
                        <div class="hero-slider-content">
                            @if($BTitle and count($BTitle) > 2)
                                <h1>{{ $BTitle }}</h1>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="thumbs-wrap">
            <div class="owl-thumbs hero-slider-thumb" data-slider-id="1">
                @foreach($SliderBanners as $index => $SliderBanner)
                    <div class="owl-thumb-item">
                        <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
