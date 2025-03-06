<?php
$offersLimit = 0; // 0 = all
$offers = Helper::Topics(27, 0, $offersLimit, 1);

?>
@if(count($offers)>0)
    <!-- Latest Offers Section Start -->
    <section class="latest-offers-area ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title">العروض</span>
                    <h2 class="section-title">اخر عروض الجمعية</h2>
                </div>
            </div>
            <div class="row">
                <div class="latest-offers-slider owl-carousel owl-theme">
                    @foreach($offers as $Topic)
                        <?php
                        $title = $Topic->$title_var != "" ? $Topic->$title_var : $Topic->$title_var2;
                        $details = $Topic->$details_var != "" ? $details_var : $details_var2;
                        $image = $Topic->photo_file != "" ? URL::to('uploads/topics/'.$Topic->photo_file) : './assets/images/offers/default.png';
                        ?>
                        <div class="item">
                            <img src="{{ $image }}" alt="{{ $title }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="read-more-btns">
                        <a href="about.html" class="secondary-btn">عرض المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Offers Section End -->
@endif
