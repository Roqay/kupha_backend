@extends('frontEnd.'. config('theme.THEME').'.layouts.master')
<?php
$title_var = 'title_' . @Helper::currentLanguage()->code;
$title_var2 = 'title_' . config('prosys.default_language');
$details_var = 'details_' . @Helper::currentLanguage()->code;
$details_var2 = 'details_' . config('prosys.default_language');
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
$section = '';
try {
    if ($Topic->section->$title_var != '') {
        $section = $Topic->section->$title_var;
    } else {
        $section = $Topic->section->$title_var2;
    }
} catch (Exception $e) {
    $section = '';
}

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
if (!empty($CurrentCategory)) {
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

$attach_file = @$Topic->attach_file;
if (@$Topic->attach_file != '') {
    $file_ext = strrchr($Topic->attach_file, '.');
    $file_ext = strtolower($file_ext);
    if (in_array($file_ext, ['.jpg', '.jpeg', '.png', '.gif', '.webp'])) {
        $category_image = URL::to('uploads/topics/' . @$Topic->attach_file);
        $attach_file = '';
    }
}
?>
@section('content')

<div class=" pt-5" style="background-color: #fafafa;">
    <div class="container about_header">
        <span><a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a></span>
       

         
        <span>/</span>
            <span>{{ $title }}</span> 
         
    </div>
</div>

{{-- {{dd($Topic)}}  --}}
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-center">
        <div class="row mt-3">
            <div class="col-3">
                <div class="mt-2">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images')}}/product.png" class="rounded w-100 thumbnail" alt="Thumbnail 1">
                </div>
                <div class="mt-2">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images')}}/product%20-%20Copy.png" class="rounded w-100 thumbnail" alt="Thumbnail 2">
                </div>
                <div class="mt-2">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images')}}/product%20-%20Copy%20(2).png" class="rounded w-100 thumbnail" alt="Thumbnail 3">
                </div>
                <div class="mt-2">
                    <img src="{{ URL::asset('/assets/'. config('theme.THEME').'/images')}}/product%20-%20Copy%20(3).png" class="rounded w-100 thumbnail" alt="Thumbnail 4">
                </div>
            </div>
            <img src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}" class="rounded product-image w-100 col-9" alt="{{ $title }}">
        </div>
    </div>
    <div class="col-md-6">
        <h3 class="product-title  font-weight-bold mb-3">{{$title}}</h3>
        <table class="table text-center product_table" style="background-color: #FAFAFA; border-radius: 12px;">
            <thead>
                <tr>
                    <th style="color:#E31E25;">الكمية</th>
                    <th style="color:#E31E25;">المقاس</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>48</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        {{-- <button class="btn red_border_button btn-block mt-2 rounded">تحميل الكتالوج</button> --}}
        <a href="{{ URL::to('uploads/topics/' . $Topic->attach_file) }}" target="_blank" class="btn red_border_button btn-block mt-2 rounded">
            <strong>
                {!! Helper::GetIcon(URL::to('uploads/topics/'), $Topic->attach_file) !!}
                &nbsp;{{ __('frontend.downloadAttach') }}</strong>
        </a>
        {{-- <button class="btn red_button btn-block mt-2 rounded">اضف لقائمة طلب السعر</button> --}}
    </div>
    </div>
    
    <div class="row mt-5">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#description">الوصف</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#other-details">تفاصيل أخرى</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane container active" id="description">
                    
                    <p class="mt-4">
                        {!! @$Topic->$details !!} 
                    </p> 
                </div>
                <div class="tab-pane container fade" id="other-details">
                    <p class="mt-4">هذه هي التفاصيل الأخرى التي قد تهم العميل. يمكن أن تحتوي على معلومات إضافية حول المنتج.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col  border rounded p-5">
    @include('frontEnd.topic.order')
    </div>
</div>
@include('frontEnd.'. config('theme.THEME').'.homepage.newsletter')
@endsection