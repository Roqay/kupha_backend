@extends('dashboard.layouts.auth')
@section('title', __('backend.signedInToControl'))
@section('content')
    <div class="center-block w-xxl p-a-2">
        <div class="box-color r box-shadow-z4 text-color m-b-0">
            <div class="p-a-md text-center">
                @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
                    <img alt="" class="app-logo"
                         src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}">
                @else
                    <img alt="" src="{{ URL::to('uploads/settings/nologo.png') }}">
                @endif
            </div>
            <div class="p-a text-center">
                <h5 class="text-muted m-b-0"><strong>{{ __('backend.signedInToControl') }}</strong></h5>
            </div>
            <div class="p-a-md">
            <form name="form" method="POST" action="{{ url('/'.config('roqay.backend_path').'/login') }}" onsubmit="document.getElementById('login_form_submit').disabled = true; return true;">
                {{ csrf_field() }}
                @if($errors ->any())
                    <div class="alert alert-danger m-b-0">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="md-form-group float-label {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" value="{{ old('email') }}" class="md-input" required>
                    <label>{{ __('backend.connectEmail') }}</label>
                </div>
                <div class="md-form-group float-label {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="md-input" required>
                    <label>{{ __('backend.connectPassword') }}</label>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                @if(config('roqay.nocaptcha_status'))
                    <div class="form-group">
                        {!! NoCaptcha::renderJs(@Helper::currentLanguage()->code) !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                @endif
                <div class="m-b-md text-left">
                    <label class="md-check">
                        <input type="checkbox" name="remember"><i
                            class="primary"></i> {{ __('backend.keepMeSignedIn') }}
                    </label>
                </div>
                <button type="submit" id="login_form_submit" class="btn primary btn-block p-x-md m-b">{{ __('backend.signIn') }}</button>
            </form>
            @if(config('roqay.facebook_status') && config('roqay.facebook_id') && config('roqay.facebook_secret'))
                <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block text-left">
                    <i class="fa fa-facebook"></i> {{ __('backend.loginWithFacebook') }}
                </a>
            @endif
            @if(config('roqay.twitter_status') && config('roqay.twitter_id') && config('roqay.twitter_secret'))
                <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block text-left">
                    <i class="fa  fa-twitter"></i> {{ __('backend.loginWithTwitter') }}
                </a>
            @endif
            @if(config('roqay.google_status') && config('roqay.google_id') && config('roqay.google_secret'))
                <a href="{{ route('social.oauth', 'google') }}" class="btn danger btn-block text-left">
                    <i class="fa fa-google"></i> {{ __('backend.loginWithGoogle') }}
                </a>
            @endif
            @if(config('roqay.linkedin_status') && config('roqay.linkedin_id') && config('roqay.linkedin_secret'))
                <a href="{{ route('social.oauth', 'linkedin') }}" class="btn btn-primary btn-block text-left">
                    <i class="fa fa-linkedin"></i> {{ __('backend.loginWithLinkedIn') }}
                </a>
            @endif
            @if(config('roqay.github_status') && config('roqay.github_id') && config('roqay.github_secret'))
                <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default dark btn-block text-left">
                    <i class="fa fa-github"></i> {{ __('backend.loginWithGitHub') }}
                </a>
            @endif
            @if(config('roqay.bitbucket_status') && config('roqay.bitbucket_id') && config('roqay.bitbucket_secret'))
                <a href="{{ route('social.oauth', 'bitbucket') }}" class="btn primary btn-block text-left">
                    <i class="fa fa-bitbucket"></i> {{ __('backend.loginWithBitbucket') }}
                </a>
            @endif

            @if(Helper::GeneralWebmasterSettings("register_status"))
                <a href="{{ url('/'.config('roqay.backend_path').'/register') }}" class="btn info btn-block text-left">
                    <i class="fa fa-user-plus"></i> {{ __('backend.createNewAccount') }}
                </a>
            @endif
            <div class="p-v-lg text-center">
                <div class="m-t"><a href="{{ url('/'.config('roqay.backend_path').'/password/reset') }}"
                                    class="text-primary _600">{{ __('backend.forgotPassword') }}</a></div>
            </div>
            </div>
        </div>


    </div>
@endsection

