<?php
$home_page_id = Helper::GeneralWebmasterSettings("home_content4_section_id");
?>
@if($home_page_id >0)
<?php
$HomePage = Helper::Topic(Helper::GeneralWebmasterSettings("home_content4_section_id"));
$page_form = @$HomePage->form;
?>
@if(!empty($HomePage))
@if(@$HomePage->$details_var !="")



<section class="feature-area">
    <div class="container">
        <div class="row">
        {!! @$HomePage->$details_var !!}
        @if(!empty($page_form))
        <?php
        $form_url = Helper::sectionURL($page_form->id);
        ?>
        <div class="text-center mt-3">
            <a href="{{ $form_url }}" class="btn btn-lg btn-primary">
                <i class="fa-solid fa-send-o"></i> {{ __('backend.submit') }} {!!  $page_form->{"title_".@Helper::currentLanguage()->code} !!}
            </a>
        </div>
        @endif
    </div>
</section>
@endif
@endif
@endif
<?php
$TextBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_text_banners_section_id"));
?>
@if(count($TextBanners)>0)
    @foreach($TextBanners->slice(0,1) as $TextBanner)
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    @endforeach
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;
    $title_var2 = "title_" . config('prosys.default_language');
    $details_var = "details_" . @Helper::currentLanguage()->code;
    $details_var2 = "details_" . config('prosys.default_language');
    $file_var = "file_" . @Helper::currentLanguage()->code;
    $file_var2 = "file_" . config('prosys.default_language');

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>


<section class="feature-area">
    <div class="container">
        <div class="row">
                @foreach($TextBanners as $TextBanner)
                    <?php
                    if ($TextBanner->$title_var != "") {
                        $BTitle = $TextBanner->$title_var;
                    } else {
                        $BTitle = $TextBanner->$title_var2;
                    }
                    if ($TextBanner->$details_var != "") {
                        $BDetails = $TextBanner->$details_var;
                    } else {
                        $BDetails = $TextBanner->$details_var2;
                    }
                    if ($TextBanner->$file_var != "") {
                        $BFile = $TextBanner->$file_var;
                    } else {
                        $BFile = $TextBanner->$file_var2;
                    }
                    ?>
                     <div class="col-lg-{{$col_width}} col-md-6">
                        <div class="single-feature">
                        <div class="icon-holder">
                            @if($TextBanner->icon !="")
                            <i class="fa {{$TextBanner->icon}} fa-2x" style="color:#15a570"></i>
                            @elseif($BFile !="")
                                <img src="{{ URL::to('uploads/banners/'.$BFile) }}" loading="lazy"
                                     alt="{{ $BTitle }}"/>
                            @endif

                        </div>
                            @if($TextBanner->code !="")
                                {!! $TextBanner->code !!}
                            @else


                                        <div class="feature-body">
                                            <h3> {!! $BTitle !!}</h3>
                                            @if($BDetails !="")
                                            <p>{!! nl2br($BDetails) !!}</p>
                                            @endif
                                        </div>
                                        @if($TextBanner->link_url !="")
                                            <div class="icon-link">
                                                <img src="{{url('kupha/assets/images/features/arrow-up-left.svg')}}" alt="Feature Image 2">
                                            </div>
                                        @endif

                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endif
