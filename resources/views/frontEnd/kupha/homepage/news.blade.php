<?php
$HomeTopicsLimit = 6; // 0 = all
$HomeTopics = Helper::Topics(3, 0, $HomeTopicsLimit);
$require_mp3_player = 0;

?>
@if(count($HomeTopics)>0)




<section class="news-area ptb-32">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 text-center">
                <span class="top-title centered">أخبارونا</span>
                <h2 class="section-title">أخر أخبار الجمعية</h2>
                <p class="section-sub-title">
                    ابق علي إطلاع بأحدث الأخبار والتحديثات المتعلقة بالجمعية الصيدلية،
                </p>
            </div>
        </div>
    <div class="row ptb-32">
            @php
            $rowCount = 0; // متغير لحساب الصفوف
        @endphp

        @php
        $rowCount = 0;
    @endphp

    <div class="col-lg-7 col-md-7 col-sm-12 d-flex flex-row gap-4 flex-wraper">
        @foreach($HomeTopics as $Topic)
            @if ($rowCount < 2)
                @php
                    if ($Topic->$title_var != "") {
                        $title = $Topic->$title_var;
                    } else {
                        $title = $Topic->$title_var2;
                    }

                    if ($Topic->$details_var != "") {
                        $details = $Topic->$details_var;
                    } else {
                        $details = $Topic->$details_var2;
                    }

                    $section_url = Helper::sectionURL($Topic->webmaster_id);
                    $topic_link_url = Helper::topicURL($Topic->id);
                    $HomeSectionType = @$Topic->webmasterSection->type;

                    if (!@$require_mp3_player && $HomeSectionType == 3) {
                        $require_mp3_player = 1;
                    }
                @endphp

                <div class="col-lg-6 col-md-6 col-sm-12 news-item-block">
                    <div class="banner-holder">
                        <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="{{ $title }}">
                    </div>
                    <div class="content">
                        <span class="date">{{ $Topic->created_at->format('d M Y - h:i A') }}</span>
                        <h3>{{ $title }}</h3>
                        <p>{{ strip_tags(Str::limit($details, 300)) }}</p>
                        <div class="control">
                            <a href="{{ url($topic_link_url) }}" class="read-more">
                                عرض المزيد
                                <i class="ri-arrow-left-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @php
                    $rowCount++;
                @endphp
            @endif
        @endforeach
    </div>

    @if ($rowCount >= 2)
    <div class="col-lg-5 col-md-5 col-sm-12">
        <ul class="recent-news"  >
            @php
                $listCount = 0; // عداد لبدء عرض الصفوف من الثالث
            @endphp
            @foreach($HomeTopics as $Topic)
                @if ($listCount >= 2)
                    @php
                        if ($Topic->$title_var != "") {
                            $title = $Topic->$title_var;
                        } else {
                            $title = $Topic->$title_var2;
                        }

                        $section_url = Helper::sectionURL($Topic->webmaster_id);
                        $topic_link_url = Helper::topicURL($Topic->id);
                    @endphp

                    <li>
                        <a href="{{ url($topic_link_url) }}">
                            <div class="news-img">
                                <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="{{ $title }}">
                            </div>
                            <div class="news-content">
                                <h3>{{ $title }}</h3>
                                <span>{{ $Topic->created_at->format('d M Y - h:i A') }}</span>
                            </div>
                        </a>
                    </li>
                @endif
                @php
                    $listCount++;
                @endphp
            @endforeach
        </ul>
    </div>
    @endif


    </div>

    </div>
</div>
@endif
