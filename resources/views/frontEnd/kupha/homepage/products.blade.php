<?php 
$HomeTopicsLimit = 3; // 0 = all
$HomeTopics = Helper::Topics(8, 0, $HomeTopicsLimit);
$require_mp3_player = 0;
?>
@if(count($HomeTopics)>0)
<div class="home_section3 py-5 text-center" dir="rtl">
    <div class="d-flex about_company justify-content-center">
        <hr class="separator">
        <span class="mx-3">المنتجات</span>
        <hr class="separator">
    </div>
    <h1>المنتجات</h1>
    <p>لدينا أحدث الآلات والتقنيات للوصول بمنتجاتنا إلى اعلي مستوي من الجودة</p>
    <div class="d-flex justify-content-center flex-wrap mt-2">
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
        <div class="bg-white mx-4 p-4 mt-4">
            <div class="d-flex mb-4">
                <div>
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/eye.png')}}" alt="Eye Icon" class="d-block">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/cart.png')}}" alt="Cart Icon" class="d-block mt-1">
                </div>
                <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="Product Name">
            </div>
            <h3>{{  mb_substr(strip_tags($title),0, 30)."..."}}</h3>
            <p>مواسير ووصلات الصرف الصحي</p>
            @if(strip_tags($Topic->$details) !="")
            <p >
                {!! mb_substr(strip_tags($Topic->$details),0, 40)."..." !!}
            </p>
        @endif
            <a href="{{$topic_link_url}}" class="red_border_button"><i class="fa fa-download" aria-hidden="true"></i>
                {{ __("frontend.moreDetails") }}</a>
        </div>

        @endforeach
        {{-- <div class="bg-white mx-4 p-4 mt-4">
            <div class="d-flex mb-4">
                <div>
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/eye.png')}}" alt="Eye Icon" class="d-block">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/cart.png')}}" alt="Cart Icon" class="d-block mt-1">
                </div>
                <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/product2.png')}}" alt="Product Name">
            </div>
            <h3>أنابيبPVC</h3>
            <p>مواسير ووصلات الصرف الصحي</p>
            <a href="#" class="red_border_button"><i class="fa fa-download" aria-hidden="true"></i>
                تحميل الكتالوج</a>
        </div>
        <div class="bg-white mx-4 p-4 mt-4">
            <div class="d-flex mb-4">
                <div>
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/eye.png')}}" alt="Eye Icon" class="d-block">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/cart.png')}}" alt="Cart Icon" class="d-block mt-1">
                </div>
                <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/product3.png')}}" alt="Product Name">
            </div>
            <h3>أنابيبPVC</h3>
            <p>مواسير ووصلات الصرف الصحي</p>
            <a href="#" class="red_border_button"><i class="fa fa-download" aria-hidden="true"></i>
                تحميل الكتالوج</a>
        </div>
        <div class="bg-white mx-4 p-4 mt-4">
            <div class="d-flex mb-4">
                <div>
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/eye.png')}}" alt="Eye Icon" class="d-block">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/cart.png')}}" alt="Cart Icon" class="d-block mt-1">
                </div>
                <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images/product4.png')}}" alt="Product Name">
            </div>
            <h3>أنابيبPVC</h3>
            <p>مواسير ووصلات الصرف الصحي</p>
            <a href="#" class="red_border_button"><i class="fa fa-download" aria-hidden="true"></i>
                تحميل الكتالوج</a>
        </div> --}}
    </div>
    <div class="mt-5">
        <a href="{{ url( $section_url ) }}" class="red_border_button"> {{ __("frontend.showMore") }} </a>
    </div>
</div>
@endif