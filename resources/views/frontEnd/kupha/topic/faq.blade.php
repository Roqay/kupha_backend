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
$accordion_id = "accordion".@$CatId."-".$Topic->id;
?>

<div class="faq-item">
    <div class="faq-question">
        <a href="#" class="btn btn-link" type="button" data-toggle="collapse" aria-expanded="false" data-target="#{{ $accordion_id }}" aria-controls="{{ $accordion_id }}">
            {{ $title }}
        </a>
    </div>
    <div id="{{ $accordion_id }}" class="collapse">
        <div class="faq-answer">
            {!! $Topic->$details !!}
        </div>
    </div>
</div> 