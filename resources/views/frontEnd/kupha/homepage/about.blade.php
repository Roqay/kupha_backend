
<?php
$HomePage = Helper::Topic(121 );
?>

@if(!empty($HomePage))
@if(@$HomePage->$details_var !="")
<div class="home_section2">
    <img src="{{  URL::to('uploads/topics/'.$HomePage->photo_file) }}">
    <div>
        <div class="d-flex about_company">
            <hr class="separator">
            <span class="mx-3">عن الشركة</span>
            <hr class="separator">
        </div>
        {!! @$HomePage->$details_var !!}
    </div>
</div>
@endif
@endif
