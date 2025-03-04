<?php 
$HomeTopicsLimit = 0; // 0 = all
$HomeTopics = Helper::Topic(127);
$require_mp3_player = 0;
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . config('prosys.default_language');
$details_var = "details_" . @Helper::currentLanguage()->code;
$details_var2 = "details_" . config('prosys.default_language');
if ($HomeTopics->$title_var != "") {
    $title = $HomeTopics->$title_var;
} else {
    $title = $HomeTopics->$title_var2;
}
if ($Topic->$details_var != "") {
    $details = $HomeTopics->$details_var;
} else {
    $details = $HomeTopics->$details_var2;
}
 
?> 
@if(!empty($HomeTopics))
<div class="home_section8 why_us px-5 pt-5 d-flex flex-wrap justify-content-center ">
    
    <div class="row">
        <div class="d-flex why_us_sections">
            <div class="why_us_section1">
                <img alt="why us" src="{{ URL::to('uploads/topics/'.$HomeTopics->photo_file) }}" class="w-100">
            </div>
            
            <div class="w-75 mx-5 why_us_section2">
                <div class="why_us_div">    
                    <div class="d-flex about_company">
                        <hr class="separator">
                        <span class="mx-3">لماذا اخترتنا</span>
                        <hr class="separator">
                    </div>
                   {!! @$details !!} 
                </div>
            </div>
        </div>
    </div>
        
    <div class="card custom-card no-shadow position-absolute" style="max-width: 100%; margin-top: 20%;">
        <div class="card-body row">
            <div class="col-md-5">
                <h5 class="card-title">رؤيتنا</h5>
                <p class="card-text">تمتلك شركتنا رؤية واضحة وخطط طوحة تسعى لتحقيقها فى العام 2030 وهى ان تصبح
                    الشركات الرائدة فى مجال تغذية وصرف المياة فى مصر والوطن العربى حيث أننا نساهم بشكل فعال فى
                    تنمية وتطوير الاقتصاد المصرى وأكساب العميل الثقة فى منتاجات بلده</p>
            </div>
            <div class="our_mission col-md-5">
                <h5 class="card-title">مهمتنا</h5>
                <p class="card-text">تهتم شركتنا بالعنصر البشرى فهو عماد اى نجاح (نطور - ننمى - ندرب) على
                    المستويين الفنى والادارى والانسانى فنحن نتميز بخدمة ما بعد البيع فنمتلك فريقا مؤهلا ومدربا
                    على اعلى مستوى لخدمة العملاء وأصبحت تصدر بالفعل منتجاتها المتميزة للدول العربية</p>
            </div>
        </div>
    </div>
</div>
@endif