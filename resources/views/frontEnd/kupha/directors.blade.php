@extends('frontEnd.' . config('theme.THEME') . '.layouts.master')
@php

    $teamMembers = Helper::Topics(29, 0, 0, 1); // جلب أعضاء الفريق

    $title_var = 'title_' . @Helper::currentLanguage()->code;
    $title_var2 = 'title_' . config('prosys.default_language');
    $details_var = 'details_' . @Helper::currentLanguage()->code;
    $details_var2 = 'details_' . config('prosys.default_language');

@endphp
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ @$search_word != '' ? __('backend.resultsFoundFor') . ' [ ' . @$search_word . ' ]' : $title ?? '' }}
                </h2>
                <ul>
                    <li>
                        <a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a>
                    </li>

                    <li class="active">
                        <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $title ?? '' }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <section id="out-team-members-pg" class="out-team-members ptb-32">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                    <span class="top-title">من نحن</span>
                    <h2 class="section-title">مجلس الإدراة</h2>
                </div>
            </div>
            <div class="row narrow-row">
                @foreach ($teamMembers as $member)
                    <?php
                    $name = $member->$title_var ?? $member->$title_var2;
                    $position = $member->$details_var ?? $member->$details_var2;
                    $email = $member->email ?? '';
                    $image = $member->photo_file ? URL::to('uploads/topics/' . $member->photo_file) : './assets/images/team/default.png';
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-member">
                            <img src="{{ $image }}" alt="{{ $name }}">
                            <div class="header">
                                <h5>{{ $name }}</h5>
                                <span class="position">{{ $position }}</span>
                            </div>
                            <div class="mail">{{ $email }}</div>

                            <div class="send-mgs">
                                <a href="mailto:{{ $email }}"><img src="{{asset("kupha/assets/images/team/msg.svg")}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('footInclude')
    {{-- add you custom js code here --}}
@endsection
@push('before-styles')
    {{-- add your custom css links here --}}
@endpush
@push('after-scripts')
    {{-- add your custom js links here --}}
@endpush
