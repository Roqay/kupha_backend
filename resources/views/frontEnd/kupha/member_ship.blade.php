@extends('frontEnd.'. config('theme.THEME').'.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ (@$search_word != "") ? __('backend.resultsFoundFor') . " [ " . @$search_word . " ]" : $title ?? 'no ...' }}</h2>
            <ul>
                <li>
                    <a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a>
                </li>

                <li class="active">
                    <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $title ?? 'no ..' }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- about Section Start -->
<section class="member-ship-details ptb-32">
    <div class="container">
        <div class="row narrow-row">
            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                <div class="header-body">
                    <div class="header-holder">
                        <span class="top-title">العضوية</span>
                        <h2 class="section-title"> كيكفة الإشتراك في العضوية</h2>
                    </div>
                    <div class="apply-now">
                        <button type="submit" class="primary-btn">
                            تقديم الطلب
                        </button>
                    </div>
                </div>
                <div class="apply-form">
                    <!-- Using Laravel Blade Form -->
                    @extends('frontEnd.'. config('theme.THEME').'.layouts.master')

                    @section('content')
                    
                    <div class="page-title-area">
                        <div class="container">
                            <div class="page-title-content">
                                <h2>{{ (@$search_word != "") ? __('backend.resultsFoundFor') . " [ " . @$search_word . " ]" : $title ?? 'no ...' }}</h2>
                                <ul>
                                    <li>
                                        <a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $title ?? 'no ..' }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- about Section Start -->
                    <section class="member-ship-details ptb-32">
                        <div class="container">
                            <div class="row narrow-row">
                                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                                    <div class="header-body">
                                        <div class="header-holder">
                                            <span class="top-title">العضوية</span>
                                            <h2 class="section-title">كيفية الإشتراك في العضوية</h2>
                                        </div>
                                        <div class="apply-now">
                                            <button type="submit" class="primary-btn">تقديم الطلب</button>
                                        </div>
                                    </div>
                    
                                    <div class="apply-form">
                                        <!-- Laravel Blade Form with Validation -->
                                        <form action="{{ route('membership.store') }}" method="POST" enctype="multipart/form-data" class="row">
                                            @csrf <!-- CSRF Protection -->
                    
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="separator-title text-center">
                                                    <p>بيانات مقدم الطلب</p>
                                                </div>
                                            </div>
                    
                                            <!-- Full Name -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="name" class="main-label">الإسم بالكامل*</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="ادخل اسمك بالكامل">
                                                    @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Birthplace and Birthdate -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="birthplace" class="main-label">مكان وتاريخ الولادة*</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3 d-flex justify-content-between gap-3">
                                                    <input type="text" name="birthplace" class="form-control" value="{{ old('birthplace') }}" placeholder="ادخل مكان الولادة">
                                                    <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate') }}" placeholder="حدد تاريخ الولادة">
                                                    @error('birthplace')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    @error('birthdate')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Address -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="address" class="main-label">عنوان السكن*</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="ادخل عنوان السكن">
                                                    @error('address')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Gender -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="gender" class="main-label">الجنسية*</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3 d-flex gap-3 radio-section">
                                                    <div class="form-checkers d-flex gap-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="male">ذكر</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="female">أنثى</label>
                                                        </div>
                                                    </div>
                                                    @error('gender')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Phone -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="phone" class="main-label">رقم الهاتف *</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="رقم الهاتف *">
                                                    @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Email -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="email" class="main-label">البريد الإلكتروني *</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="ادخل بريدك الإلكتروني">
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Work Information -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="separator-title text-center">
                                                    <p>بيانات العمل</p>
                                                </div>
                                            </div>
                    
                                            <!-- Work Address -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="work_address" class="main-label">عنوان العمل *</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="work_address" class="form-control" value="{{ old('work_address') }}" placeholder="ادخل عنوان العمل">
                                                    @error('work_address')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Work Type and Phone -->
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <label for="work_type" class="main-label">نوع العمل ورقم الهاتف *</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="input-group mb-3 d-flex justify-content-between gap-3">
                                                    <select class="form-select" name="work_type">
                                                        <option value="">اختر نوع العمل</option>
                                                        <option value="1" {{ old('work_type') == '1' ? 'selected' : '' }}>حكومى</option>
                                                        <option value="2" {{ old('work_type') == '2' ? 'selected' : '' }}>خاص</option>
                                                        <option value="3" {{ old('work_type') == '3' ? 'selected' : '' }}>حر</option>
                                                    </select>
                                                    <input type="text" name="work_phone" class="form-control" value="{{ old('work_phone') }}" placeholder="ادخل رقم هاتف العمل">
                                                    @error('work_type')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    @error('work_phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <!-- Submit Button -->
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="primary-btn">إرسال</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- about Section End -->
                    
                    @endsection
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about Section End -->
@endsection
