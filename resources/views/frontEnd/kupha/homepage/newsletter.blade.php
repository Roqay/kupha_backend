<div class="d-flex flex-wrap justify-content-between footer_top" dir="rtl">
    <div class="text-white text-right">
        <h2 class="mb-3"> {{ __('frontend.newsletter') }} </h2>
        <p> {{ __('frontend.subscribeToOurNewsletter') }}</p>
    </div>
   
    @include('frontEnd.'. config('theme.THEME').'.layouts.subscribe')
</div>