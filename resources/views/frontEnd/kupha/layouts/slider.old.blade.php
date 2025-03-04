<?php
$SliderBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_banners_section_id"));
?>
@if(count($SliderBanners) > 0)
    <section class="hero-slider-area">
        <div class="hero-slider owl-theme owl-carousel" data-slider-id="1">
            @foreach($SliderBanners as $SliderBanner)
                <?php
                // جلب العنوان والتفاصيل والصورة
                $title_var = "title_" . @Helper::currentLanguage()->code;
                $title_var2 = "title_" . config('prosys.default_language');
                $file_var = "file_" . @Helper::currentLanguage()->code;
                $file_var2 = "file_" . config('prosys.default_language');

                $BTitle = $SliderBanner->$title_var ?? $SliderBanner->$title_var2;
                $BFile = $SliderBanner->$file_var ?? $SliderBanner->$file_var2;
                $BFilePath = $BFile ? URL::to('uploads/banners/' . $BFile) : './assets/images/banner/default.png'; // استبدال الصورة الافتراضية إذا كانت غير متوفرة
                ?>
                <div class="hero-slider-item bg-banner" style="background-image: url('{{ $BFilePath }}');">
                    <div class="hero-slider-content">
                        <h1>{{ $BTitle ?? 'نرحب بكم في الجمعية الصيدلية الكويتية' }}</h1>
                    </div>
                </div>
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
