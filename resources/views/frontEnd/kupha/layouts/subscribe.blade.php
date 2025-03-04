@if(Helper::GeneralSiteSettings("style_subscribe"))


<div class="mt-3">
    {{-- <input type="email" placeholder="البريد الإلكتروني" class="px-5 py-2 mx-2 border-none">
    <a href="#" class="red_button">اشترك</a> --}}
    {{Form::open(['route'=>['subscribeSubmit'],'method'=>'POST','id'=>'subscribeForm'])}}
    {!! Form::email('subscribe_email',"", array('placeholder' => __('frontend.yourEmail'),'class' => 'px-5 py-2 mx-2 border-none','id'=>'subscribe_email', 'required'=>'required', 'autocomplete'=>'off')) !!}
    <button type="submit" class="red_button" id="subscribeFormSubmit">{{ __('frontend.subscribe') }}</button>
    {{Form::close()}}
</div>
    {{-- <div class="col-lg-4 col-md-12 footer-newsletter">
        <div class="footer-title">
            <h1>{{ __('frontend.newsletter') }}</h1>
        </div>
        <p>{{ __('frontend.subscribeToOurNewsletter') }}</p>
       
    </div> --}}
@endif
