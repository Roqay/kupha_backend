<section class="support-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                <span class="top-title centered">بحاجة الى مساعدة مهنية</span>
                <h2 class="section-title">سيقوم موظفو الدعم بالإجابة على أسئلتك!</h2>
            </div>
        </div>
    </div>
</section>

<section class="support-areaTwo ptb-32">
    <div class="container">
        <div class="row bk-white all-borders">
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 no-padding">
                <div class="support-form-holder">
                    <h3 class="form-title">تواصل معنا</h3>
                    {{Form::open(['route'=>['contactPageSubmit'],'method'=>'POST','class'=>' ','id'=>'contactForm'])}}
                        <div class="mb-3 d-flex flex-row gap-4">
                            {!! Form::text('contact_name',@Auth::user()->name, array('placeholder' => 'الاسم بالكامل','class' => 'form-control','id'=>'name','required'=>'required')) !!}
                            {!! Form::text('contact_phone',"", array('placeholder' => 'رقم الهاتف','class' => 'form-control','id'=>'phone','required'=>'required')) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::email('contact_email',@Auth::user()->email, array('placeholder' => 'البريد الإلكتروني','class' => 'form-control','id'=>'email','required'=>'required')) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::textarea('contact_message','', array('placeholder' => 'الرسالة','class' => 'form-control','id'=>'message','rows'=>'4','required'=>'required')) !!}
                        </div>

                        @if(config('prosys.nocaptcha_status'))
                            <div class="form-group mt-3">
                                {!! NoCaptcha::renderJs(@Helper::currentLanguage()->code) !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        @endif
                        
                        <button type="submit" class="primary-btn w-100">إرسال</button>
                    {{Form::close()}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 no-padding">
                <div class="support-img-holder">
                    <img src="{{ URL::asset( config('theme.THEME').'/assets/images/banner/support.png')}}" alt="support image">
                </div>
            </div>
        </div>
    </div>
</section>

            


            