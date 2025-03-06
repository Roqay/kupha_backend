{{-- <div id="page-cover" class="page-cover" style="width: 100%;height: 200px;
    text-align: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url('{{ $category_image }}');background-color: {{ Helper::GeneralSiteSettings("style_color2") }}"></div> --}}


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $pageTitle ?? 'العنوان الافتراضي' }}</h2> {{-- اجعل العنوان ديناميكي --}}
                <ul>
                    <li>
                        <a href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li class="active">{{ $pageTitle ?? 'العنوان الحالي' }}</li>
                </ul>
            </div>
        </div>
    </div>

