@extends('frontEnd.' . config('theme.THEME') . '.layouts.master')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ @$search_word != '' ? __('backend.resultsFoundFor') . ' [ ' . @$search_word . ' ]' : $title ?? 'no ...' }}
                </h2>
                <ul>
                    <li>
                        <a href="{{ Helper::homeURL() }}">{{ __('backend.home') }}</a>
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
                    </div>




                    <div class="apply-form">
                        <!-- Laravel Blade Form with Validation -->
                        <form action="{{ route('membership.store') }}" method="POST" enctype="multipart/form-data"
                            class="row">
                            @csrf <!-- CSRF Protection -->

                            <!-- بيانات مقدم الطلب -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="separator-title text-center">
                                    <p>بيانات مقدم الطلب</p>
                                </div>
                            </div>

                            <!-- الاسم بالكامل -->
                            <div class="col-lg-2">
                                <label for="full_name" class="main-label">الإسم بالكامل*</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="text" name="full_name"
                                        class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                        value="{{ old('full_name') }}" placeholder="ادخل اسمك بالكامل">
                                </div>
                                @error('full_name')
                                    <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                @enderror
                            </div>


                            <!-- مكان وتاريخ الولادة -->
                            <div class="col-lg-2">
                                <label for="birth_place" class="main-label">مكان وتاريخ الولادة*</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3 d-flex gap-3">
                                    <input type="text" name="birth_place" class="form-control {{ $errors->has('birth_place') ? 'is-invalid' : '' }}"
                                        value="{{ old('birth_place') }}" placeholder="ادخل مكان الولادة">
                                    <input type="date" name="birth_date" class="form-control {{ $errors->has('birth_place') ? 'is-invalid' : '' }}"
                                        value="{{ old('birth_date') }}">
                                </div>
                                @error('birth_place')
                                   <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                @enderror
                                @error('birth_date')
                                   <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- عنوان السكن -->
                            <div class="col-lg-2">
                                <label for="address" class="main-label">عنوان السكن*</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="text" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address') }}"
                                        placeholder="ادخل عنوان السكن">

                                </div>
                                @error('address')
                                <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                             @enderror
                            </div>

                            <!-- الجنسية -->
                            <div class="col-lg-2">
                                <label class="main-label">الجنسية*</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3 d-flex gap-3 radio-section">
                                    <div class="additional-label">اختر الجنسية</div>
                                    <div class="form-checkers d-flex gap-3 ">
                                        <div class="form-check">
                                            <input class="form-check-input {{ $errors->has('gender') ? 'is-invalid' : '' }}" type="radio" name="gender" value="male"
                                                {{ old('gender') == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label">ذكر</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input  " type="radio" name="gender" value="female"
                                                {{ old('gender') == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label">أنثى</label>
                                        </div>
                                    </div>
                                </div>
                                @error('gender')
                                   <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- رقم الهاتف -->
                            <div class="col-lg-2">
                                <label for="phone" class="main-label">رقم الهاتف *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}"
                                        placeholder="رقم الهاتف *">

                                </div>
                                @error('phone')
                                <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                             @enderror
                            </div>

                            <!-- البريد الإلكتروني -->
                            <div class="col-lg-2">
                                <label for="email" class="main-label">البريد الإلكتروني *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                                        placeholder="ادخل بريدك الإلكتروني">

                                </div>
                                @error('email')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="separator-title text-center">
                                    <p>بيانات العمل</p>
                                </div>
                            </div>
                            <!-- عنوان العمل -->
                            <div class="col-lg-2">
                                <label for="work_address" class="main-label">عنوان العمل *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="text" name="work_address" class="form-control {{ $errors->has('work_address') ? 'is-invalid' : '' }}"
                                        value="{{ old('work_address') }}" placeholder="ادخل عنوان العمل">

                                </div>
                                @error('work_address')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>

                            <!-- الأعمال التي مارستها -->
                            <div class="col-lg-2">
                                <label for="previous_jobs" class="main-label">الأعمال التي مارستها *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <textarea name="previous_jobs" class="form-control {{ $errors->has('previous_jobs') ? 'is-invalid' : '' }}" rows="5" placeholder="ادخل الأعمال التي مارستها">{{ old('previous_jobs') }}</textarea>

                                </div>
                                @error('previous_jobs')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="separator-title text-center">
                                    <p>الشهادات والمؤهلات</p>
                                </div>
                            </div>
                            <!-- رفع صورة المؤهل العلمي -->
                            <div class="col-lg-2">
                                <label for="degreeFile" class="main-label">صورة المؤهل العلمي *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="file" name="degreeFile" class="form-control {{ $errors->has('degreeFile') ? 'is-invalid' : '' }}">

                                </div>
                                @error('degreeFile')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>

                            <!-- رفع صورة الشهادات -->
                            <div class="col-lg-2">
                                <label for="certificateFile" class="main-label">صورة الشهادات *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="file" name="certificateFile" class="form-control {{ $errors->has('certificateFile') ? 'is-invalid' : '' }}">

                                </div>
                                @error('certificateFile')
                                <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                             @enderror
                            </div>

                            <!-- الأعمال التي مارستها -->
                            <div class="col-lg-2">
                                <label class="main-label">الأعمال التي مارستها *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <textarea name="previous_jobs" class="form-control {{ $errors->has('previous_jobs') ? 'is-invalid' : '' }}" rows="5"
                                        placeholder=" ادخل الأعمال التي مارستها منذ حصولك علي المؤهل ( تذكر بالتفصيل )">{{ old('previous_jobs') }}</textarea>

                                </div>
                                @error('previous_jobs')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>

                            <!-- عناوين الصيادلة -->
                            <div class="col-lg-2">
                                <label class="main-label">عناوين الصيادلة *</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="input-group mb-3">
                                    <input type="text" name="pharmacist_address" class="form-control {{ $errors->has('pharmacist_address') ? 'is-invalid' : '' }}"
                                        placeholder="عناوين الصيادلة أو الهيئات التي يمكنها تزكية الطلب">

                                </div>
                                @error('pharmacist_address')
                                       <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-group mb-3 d-flex gap-3 accept-terms">
                                    <div class="form-check">
                                        <label class="form-check-label" for="accept-terms">
                                            <input class="form-check-input {{ $errors->has('accept-terms') ? 'is-invalid' : '' }}" type="radio" name="accept-terms"
                                                id="accept-terms" value="accept-terms">
                                            هذا وأقر بأنة لم يسبق أن اتخد
                                            قرار بشطب اسمي من سجلات الصيادلة أو أدنت بقضية تتعلق بالسلوك المهني في دولة
                                            الكويت او في دولة أخري ( إذا سبق ذكرة بالتفصيل ) </label>
                                        <textarea class="form-control" name='note' id="exampleFormControlTextarea1" rows="3"></textarea>

                                    </div>

                                </div>
                                @error('accept-terms')
                                           <div class="alert alert-danger py-1 px-2 mt-1">{{ $message }}</div>
                                        @enderror
                            </div>

                            <!-- زر الإرسال -->
                            {{-- <div class="col-lg-12 text-center"> --}}
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn primary-btn">تقديم الطلب</button>
                            </div>
                            {{-- </div> --}}
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>



    <!-- about Section End -->
@endsection
