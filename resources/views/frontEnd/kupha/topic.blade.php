@extends('frontEnd.'. config('theme.THEME').'.layouts.master')
@section('content')
    <div>
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

   
        <div class=" pt-5" style="background-color: #fafafa;">
            <div class="container about_header">
                <span><a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a></span>
               

                @if ($webmaster_section_title != '')
                <span>/</span>
                    <span><a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! @$WebmasterSection->id == 1 ? $title : $webmaster_section_title !!}</a>
                    </span>
                @else
                <span>/</span>
                    <span>{{ $title }}</span>
                @endif
                
                @if ($category_title != '')
                <span>/</span>
                    <span><a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $category_title }}</a>
                    </span>
                @endif
            </div>
        </div>

        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 text-center">
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="mt-2">
                            <img src="./assets/images/product - Copy.png" class="rounded w-100 thumbnail" alt="Thumbnail 1">
                        </div>
                        <div class="mt-2">
                            <img src="./assets/images/product - Copy (2).png" class="rounded w-100 thumbnail" alt="Thumbnail 2">
                        </div>
                        <div class="mt-2">
                            <img src="./assets/images/product - Copy (3).png" class="rounded w-100 thumbnail" alt="Thumbnail 3">
                        </div>
                        <div class="mt-2">
                            <img src="./assets/images/product - Copy (4).png" class="rounded w-100 thumbnail" alt="Thumbnail 4">
                        </div>
                    </div>
                    <img src="./assets/images/product.png" class="rounded product-image w-100 col-9" alt="product Image">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="product-title  font-weight-bold mb-3">كوع 90 باب</h3>
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
                <button class="btn red_border_button btn-block mt-2 rounded">تحميل الكتالوج</button>
                <button class="btn red_button btn-block mt-2 rounded">اضف لقائمة طلب السعر</button>
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
                        <div class="tab-pane container active " id="description">
                            <p class="mt-4">لا تعد منظمات الحرارة من مارت مجرد وسيلة أكثر روعة للتحكم في درجة حرارة منزلك. تتيح لك منظمات
                                الحرارة الذكية المعاصرة تحكمًا أكبر بكثير في درجة الحرارة والرطوبة الداخلية مقارنة بأي منظم
                                حرارة تقليدي. سيساعدك هذا التحكم المتزايد على توفير المال الذي تنفقه على الطاقة، واستخدام
                                نظام التدفئة والتهوية وتكييف الهواء (HVAC) بكفاءة أكبر، والعيش براحة أكبر. لا تعد منظمات
                                الحرارة من مارت مجرد وسيلة أكثر روعة للتحكم في درجة حرارة منزلك. تتيح لك منظمات الحرارة
                                الذكية المعاصرة تحكمًا أكبر بكثير في درجة الحرارة والرطوبة الداخلية مقارنة بأي منظم حرارة
                                تقليدي. سيساعدك هذا التحكم المتزايد على توفير المال الذي تنفقه على الطاقة، واستخدام نظام
                                التدفئة والتهوية وتكييف الهواء (HVAC) بكفاءة أكبر، والعيش براحة أكبر. لا تعد منظمات الحرارة
                                من مارت مجرد وسيلة أكثر روعة للتحكم في درجة حرارة منزلك. تتيح لك منظمات الحرارة الذكية
                                المعاصرة تحكمًا أكبر بكثير في درجة الحرارة والرطوبة الداخلية مقارنة بأي منظم حرارة تقليدي.
                                سيساعدك هذا التحكم المتزايد على توفير المال الذي تنفقه على الطاقة، واستخدام نظام التدفئة
                                والتهوية وتكييف الهواء (HVAC) بكفاءة أكبر، والعيش براحة أكبر.</p>
                                <div class="row my-5">
                                    <div class="col  border rounded p-5">
                                        <h5 class="mb-3 font-weight-bold">المواصفات الفنية</h5>
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th style="border: none; color:#8D8C8C;">الكود</th>
                                                    <th style="border: none; color:#8D8C8C;">الحجم</th>
                                                    <th style="border: none; color:#8D8C8C;">الوزن</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12555</td>
                                                    <td>30</td>
                                                    <td>0.06</td>
                                                </tr>
                                                <tr>
                                                    <td>525524</td>
                                                    <td>32</td>
                                                    <td>0.256</td>
                                                </tr>
                                                <tr>
                                                    <td>2745254</td>
                                                    <td>33</td>
                                                    <td>23.1</td>
                                                </tr>
                                                <tr>
                                                    <td>425242</td>
                                                    <td>40</td>
                                                    <td>0.03</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane container fade " id="other-details">
                            <p class="mt-4">هذه هي التفاصيل الأخرى التي قد تهم العميل. يمكن أن تحتوي على معلومات إضافية حول المنتج.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> --}}

        <section id="content">
            <div class="container topic-page">
                <div class="row">
                    @if ($Categories->count() > 1)
                        @include('frontEnd.layouts.side')
                    @endif
                    <div
                        class="col-lg-{{ $Categories->count() > 1 ? '9' : '12' }} col-md-{{ $Categories->count() > 1 ? '7' : '12' }} col-sm-12 col-xs-12">
                        <article class="mb-5">
                            @if ($WebmasterSection->type == 2 && $Topic->video_file != '')
                                {{-- video --}}
                                <div class="post-video">
                                    @if ($WebmasterSection->title_status)
                                        <div class="post-heading">
                                            <h1>
                                                @if ($Topic->icon != '')
                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                @endif
                                                {{ $title }}
                                            </h1>
                                        </div>
                                    @endif
                                    <div class="video-container">
                                        @if ($Topic->video_type == 1)
                                            <?php
                                            $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                            ?>
                                            @if ($Youtube_id != '')
                                                {{-- Youtube Video --}}
                                                <iframe allowfullscreen class="video-iframe"
                                                    src="https://www.youtube.com/embed/{{ $Youtube_id }}?autoplay=1&mute=1"
                                                    allow="autoplay">
                                                </iframe>
                                            @endif
                                        @elseif($Topic->video_type == 2)
                                            <?php
                                            $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                            ?>
                                            @if ($Vimeo_id != '')
                                                {{-- Vimeo Video --}}
                                                <iframe allowfullscreen class="video-iframe"
                                                    src="https://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                                </iframe>
                                            @endif
                                        @elseif($Topic->video_type == 3)
                                            @if ($Topic->video_file != '')
                                                {{-- Embed Video --}}
                                                {!! $Topic->video_file !!}
                                            @endif
                                        @else
                                            <video class="video-js" controls autoplay preload="auto" width="100%"
                                                height="500" poster="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}"
                                                data-setup="{}">
                                                <source src="{{ URL::to('uploads/topics/' . $Topic->video_file) }}"
                                                    type="video/mp4" />
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider upgrading
                                                    to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/"
                                                        target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>
                                        @endif

                                    </div>
                                </div>
                            @elseif($WebmasterSection->type == 3 && $Topic->audio_file != '')
                                {{-- audio --}}
                                <div class="post-audio">
                                    @if ($WebmasterSection->title_status)
                                        <div class="post-heading">
                                            <h1>
                                                @if ($Topic->icon != '')
                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                @endif
                                                {{ $title }}
                                            </h1>
                                        </div>
                                    @endif
                                    @if ($Topic->photo_file != '')
                                        <img src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}" loading="lazy"
                                            alt="{{ $title }}" />
                                    @endif
                                    <div class="audio-player">
                                        <audio crossorigin preload="none">
                                            <source src="{{ URL::to('uploads/topics/' . $Topic->audio_file) }}"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                                <br>
                            @elseif(count($Topic->photos) > 0)
                                {{-- photo slider --}}
                                <div>
                                    @if ($WebmasterSection->title_status)
                                        <div class="post-heading">
                                            <h1>
                                                @if ($Topic->icon != '')
                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                @endif
                                                {{ $title }}
                                            </h1>
                                        </div>
                                    @endif

                                    @if ($Topic->photo_file != '')
                                        <div class="post-image mb-2">
                                            <a href="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}"
                                                class="galelry-lightbox" title="{{ $title }}">
                                                <img loading="lazy"
                                                    src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}"
                                                    alt="{{ $title }}" class="post-main-photo">
                                            </a>
                                        </div>
                                    @endif

                                    <div id="gallery" class="gallery line-frame mb-3 post-gallery">
                                        <div class="row g-0 m-0">
                                            <?php
                                            $cols_lg = 3;
                                            $cols_md = 4;
                                            if ($Categories->count() > 1) {
                                                $cols_lg = 4;
                                                $cols_md = 6;
                                            }
                                            if ($Topic->photos->count() == 3) {
                                                $cols_lg = 4;
                                                $cols_md = 4;
                                            }
                                            if ($Topic->photos->count() == 2) {
                                                $cols_lg = 6;
                                                $cols_md = 6;
                                            }
                                            ?>
                                            @foreach ($Topic->photos as $photo)
                                                <div class="col-lg-{{ $cols_lg }} col-md-{{ $cols_md }}">
                                                    <div class="gallery-item">
                                                        <a href="{{ URL::to('uploads/topics/' . $photo->file) }}"
                                                            class="galelry-lightbox" title="{{ $photo->title }}">
                                                            <img src="{{ URL::to('uploads/topics/' . $photo->file) }}"
                                                                loading="lazy" alt="{{ $photo->title }}" class="img-fluid">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{-- one photo --}}
                                <div class="post-image">
                                    @if ($WebmasterSection->title_status)
                                        <div class="post-heading">
                                            <h1>
                                                @if ($Topic->icon != '')
                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                @endif
                                                {{ $title }}
                                            </h1>
                                        </div>
                                    @endif
                                    @if ($Topic->photo_file != '')
                                        <img src="{{ URL::to('uploads/topics/' . $Topic->photo_file) }}" loading="lazy"
                                            alt="{{ $title }}" title="{{ $title }}"
                                            class="post-main-photo" />
                                        <br>
                                    @endif
                                </div>
                            @endif

                            @include('frontEnd.topic.fields', [
                                'cols' => 6,
                                'Fields' => @$Topic->webmasterSection->customFields->where('in_page', true),
                            ])

                            <div class="article-body">
                                {!! str_replace('"#', '"' . Request::url() . '#', $Topic->$details) !!}
                            </div>

                            @if ($attach_file != '')
                                <?php
                                $file_ext = strrchr($Topic->attach_file, '.');
                                $file_ext = strtolower($file_ext);
                                ?>
                                <div class="bottom-article">
                                    <a href="{{ URL::to('uploads/topics/' . $Topic->attach_file) }}" target="_blank">
                                        <strong>
                                            {!! Helper::GetIcon(URL::to('uploads/topics/'), $Topic->attach_file) !!}
                                            &nbsp;{{ __('frontend.downloadAttach') }}</strong>
                                    </a>
                                </div>
                            @endif
                        </article>
                        @include('frontEnd.topic.files')

                        @include('frontEnd.topic.maps')

                        @if ($WebmasterSection->type == 7)
                            <a href="{!! Helper::sectionURL($Topic->webmaster_id) !!}" class="btn btn-lg btn-secondary" style="width: 100%"><i
                                    class="fa-solid fa-reply"></i> {{ __('backend.clickToNewSearch') }}
                            </a>
                        @else
                            @include('frontEnd.topic.share')
                        @endif

                        @include('frontEnd.topic.comments')

                        @if (@$Topic->form_id > 0)
                            <br>
                            @include('frontEnd.form', ['FormSectionID' => @$Topic->form_id])
                        @elseif($WebmasterSection->order_status)
                            @include('frontEnd.topic.order')
                        @endif

                        @include('frontEnd.topic.related')

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@if (@in_array(@$WebmasterSection->type, [2]))
    @push('before-styles')
        <link rel="stylesheet"
            href="{{ URL::asset('assets/frontend/vendor/video-js/css/video-js.min.css') }}?v={{ Helper::system_version() }}" />
    @endpush
    @push('after-scripts')
        <script
            src="{{ URL::asset('assets/frontend/vendor/video-js/js/video-js.min.css') }}?v={{ Helper::system_version() }}">
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
    @endpush
@endif
