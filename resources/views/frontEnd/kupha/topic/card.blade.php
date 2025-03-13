@if (!empty($Topic))
    @php
        $topic_link_url = Helper::topicURL($Topic->id);
        $title = $Topic->$title_var;
        $details = $Topic->$details_var;
        $image = !empty($Topic->photo_file) ? URL::to('uploads/topics/'.$Topic->photo_file) : asset('assets/images/news/banner.png');
    @endphp

        <div class="membership-item-block">
            <div class="banner-holder">
                <a href="{{ $topic_link_url }}">
                    <img class="card-img-top" src="{{ $image }}" width="100%" height="100%" alt="{{ $title }}" loading="lazy">
                </a>
            </div>
            <div class="content">
                <div class="heading">
                    <h3><a href="{{ $topic_link_url }}">{{ $title }}</a></h3>
                </div>
                <p>
                    {!! mb_substr(strip_tags($details), 0, 180) . '...' !!}
                </p>
            </div>
    </div>
@endif


