@extends('frontEnd.' . config('theme.THEME') . '.layouts.master')

@section('content')
    <div>
        <?php
        $title_var = 'title_' . @Helper::currentLanguage()->code;
        $title_var2 = 'title_' . config('prosys.default_language');
        $details_var = 'details_' . @Helper::currentLanguage()->code;
        $details_var2 = 'details_' . config('prosys.default_language');
        if ($Topic->$title_var != '') {
            $title = $Topic->$title_var;
        } else {
            $title = $Topic->$title_var2;
        }
        if ($Topic->$details_var != '') {
            $details = $details_var;
        } else {
            $details = $details_var2;
        }
        $section = '';
        try {
            if ($Topic->section->$title_var != '') {
                $section = $Topic->section->$title_var;
            } else {
                $section = $Topic->section->$title_var2;
            }
        } catch (Exception $e) {
            $section = '';
        }
        ?>

{{-- {{dd($Topic->maps)}} --}}



        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ (@$search_word != "") ? __('backend.resultsFoundFor') . " [ " . @$search_word . " ]" : $title }}</h2>
                    <ul>
                        <li>
                            <a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a>
                        </li>

                        <li class="active">
                            <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

            <!-- contact Section Start -->
    <section id="contact-area-pg" class="contact-area ptb-48">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <span class="top-title">تواصل معنا</span>
                    <h2>سيقوم موظفو الدعم بالإجابة على أسئلتك!</h2>
                    <div class="support-form-holder">
                        {{ Form::open(['route' => ['contactPageSubmit'], 'method' => 'POST', 'class' => 'php-email-form', 'id' => 'contactForm']) }}

                            <div class="submit-message">
                            </div>

                        <div class="mb-3 d-flex flex-row gap-4">
                            {!! Form::text('contact_name', @Auth::user()->name, [
                                'placeholder' => __('frontend.yourName'),
                                'class' => 'form-control',
                                'required' => 'required',
                            ]) !!}
                            @error('contact_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            {!! Form::text('contact_phone', '', [
                                'placeholder' => __('frontend.phone'),
                                'class' => 'form-control',
                                'required' => 'required',
                            ]) !!}
                            @error('contact_phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            {!! Form::email('contact_email', @Auth::user()->email, [
                                'placeholder' => __('frontend.yourEmail'),
                                'class' => 'form-control',
                                'required' => 'required',
                            ]) !!}
                            @error('contact_email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            {!! Form::textarea('contact_message', '', [
                                'placeholder' => __('frontend.message'),
                                'class' => 'form-control',
                                'rows' => '4',
                                'required' => 'required',
                            ]) !!}
                            @error('contact_message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="primary-btn w-100">{{ __('frontend.sendMessage') }}</button>
                        {{ Form::close() }}
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-img">
                        <img src="{{asset('kupha/assets/images/about/about.png')}}" alt="contact Image">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    {{-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781277.5431980786!2d48.999757903420104!3d29.30998302837021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2z2KfZhNmD2YjZitiq4oCO!5e0!3m2!1sar!2seg!4v1741470659153!5m2!1sar!2seg"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        @include("frontEnd.kupha.topic.maps")
                </div>
            </div>
        </div>
    </section>
    <!-- contact Section End -->




@endsection

@section('footInclude')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contactForm').submit(function(evt) {
                evt.preventDefault();
                let btn = $('#contactFormSubmit');
                btn.html(
                    "<img src=\"{{ asset('assets/dashboard/images/loading.gif') }}\" style=\"height: 20px\"/> {!! __('frontend.sendMessage') !!}"
                );
                btn.prop('disabled', true);
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('contactPageSubmit') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        let stat = 'alert-danger';
                        if (result.stat === 'success') {
                            stat = 'alert-success';
                            $('#contactForm')[0].reset();
                        }
                        let confirm = '<div class="alert ' + stat +
                            ' alert-dismissible fade show mt-3" role="alert">' + result.msg +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#contactForm .submit-message").html(confirm);
                        btn.html(
                            '<i class="fa-solid fa-paper-plane"></i> {!! __('frontend.sendMessage') !!}'
                        );
                        btn.prop('disabled', false);
                    }
                });
                return false;
            });
        });
    </script>
@endsection
