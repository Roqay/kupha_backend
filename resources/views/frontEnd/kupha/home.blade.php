@extends('frontEnd.'. config('theme.THEME').'.layouts.master')

@section('content')
    {{-- <div class="home-page"> --}}
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('prosys.default_language');
        $details_var = "details_" . @Helper::currentLanguage()->code;
        $details_var2 = "details_" . config('prosys.default_language');
        ?>

@include('frontEnd.'. config('theme.THEME').'.layouts.slider') 
@include('frontEnd.'. config('theme.THEME').'.homepage.row1')  
@include('frontEnd.'. config('theme.THEME').'.homepage.row2')
@include('frontEnd.'. config('theme.THEME').'.homepage.row3')
@include('frontEnd.'. config('theme.THEME').'.homepage.row4')
@include('frontEnd.'. config('theme.THEME').'.homepage.row5')
@include('frontEnd.'. config('theme.THEME').'.homepage.news')
  @include('frontEnd.'. config('theme.THEME').'.homepage.contact')
  @include('frontEnd.'. config('theme.THEME').'.homepage.row6')


    {{-- </div> --}}
@endsection
@push('after-styles')
    @if(Helper::GeneralSiteSettings("style_header") && Helper::GeneralSiteSettings("style_bg_type"))
        <style>
            .fixed-top-margin {
                margin-top: 0 !important;
            }


            .header-bg, .header-bg a {
                color: #444444;
            }

            @media (min-width:968px) {

                .header-no-bg, .header-no-bg a, .topbar-no-bg, .topbar-no-bg a {
                    color: #fff;
                }

                .header-no-bg .navbar a, .topbar-no-bg .header-dropdown .btn {
                    color: #fff;
                }

                .dropdown-item {
                    color: #212529 !important;
                }

                .header-scrolled .navbar a, .header-scrolled .header-dropdown .btn {
                    color: #444444;
                }
            }
            .topbar-no-bg {
                box-shadow: 0 0 1px rgba(255, 255, 255, 0.5) !important;
            }
        </style>
    @endif
@endpush

@section('footInclude')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#contactForm').submit(function (evt) {
                evt.preventDefault();
                let btn = $('#contactFormSubmit');
                btn.html("<img src=\"{{ asset('assets/dashboard/images/loading.gif') }}\" style=\"height: 20px\"/> {!! __('frontend.sendMessage') !!}");
                btn.prop('disabled', true);
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route("contactPageSubmit") }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        let stat = 'alert-danger';
                        if (result.stat === 'success') {
                            stat = 'alert-success';
                            $('#contactForm')[0].reset();
                        }
                        let confirm = '<div class="alert ' + stat + ' alert-dismissible fade show mt-3" role="alert">' + result.msg + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        $("#contactForm .submit-message").html(confirm);
                        btn.html('<i class="fa-solid fa-paper-plane"></i> {!! __('frontend.sendMessage') !!}');
                        btn.prop('disabled', false);
                    }
                });
                return false;
            });
        });
    </script>
@endsection
