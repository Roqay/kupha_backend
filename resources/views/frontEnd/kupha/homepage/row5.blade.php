<?php
$teamMembers = Helper::Topics(29, 0, 0, 1); // جلب أعضاء الفريق
?>

@if(count($teamMembers) > 0)
<section class="team-members-area ptb-32">
    <div class="container team-members-area-container">
        <div class="row">
            <div class="col-md-12">
                <span class="top-title">تعرف على فريقنا ذو الخبرة</span>
                <h2 class="section-title">أعضاء مجلس الإدارة</h2>
            </div>
        </div>
        <div class="row">
            <div class="team-members-slider owl-carousel owl-theme">
                @foreach($teamMembers as $member)
                    <?php
                    $name = $member->$title_var ?? $member->$title_var2;
                    $position = $member->$details_var ?? $member->$details_var2;
                    $image = $member->photo_file ? URL::to('uploads/topics/'.$member->photo_file) : './assets/images/team/default.png';
                    ?>
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="{{ $image }}" alt="{{ $name }}">
                        </div>
                        <div class="caption">
                            <h6>{{ $name }}</h6>
                            <span>{{ $position }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
