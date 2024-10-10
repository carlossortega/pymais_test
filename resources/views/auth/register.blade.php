@extends('layouts.' . get_frontend_settings('theme'))
@push('title', __('Sign Up'))
@push('meta')@endpush
@push('css')
    <style>
        body {
            background-color: #f2f2f2 !important;
        }
    </style>
@endpush
@section('content')
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                    <!-- Titulo y encabezado -->
                    <div class="global-form login-form mt-25" >
                        <div class="row d-flex text-center">
                            <h1 class="g-title" style="color:#2849E6; margin-bottom: 60px">{{ __('SME Form') }}</h1>
                        </div>                        
                        <div class="row d-flex">
                            <div class="col-md-6 p-3">
                                <button type="button" id="form-student-btn" class="w-100 btn btn-outline-primary btn-lg active" style="border: 2px solid blue;"  onclick="showForm('form-student')">
                                    <h4>{{ __('Student') }}</h4>
                                </button>
                            </div>

                            <div class="col-md-6 p-3">
                                <button type="button" id="form-instructor-btn" class="w-100 btn btn-outline-primary btn-lg" style="border: 2px solid blue;"  onclick="showForm('form-instructor')">
                                    <h4>{{ __('Instructor') }}</h4>
                                </button>
                            </div>

                        </div>
                    </div>                   

                    <!-- Inicia formulario Student-->                                        
                    <form id="form-student" action="{{ route('save.application') }}" class="global-form login-form mt-25" method="post" style="display: block;">
                        @csrf                            
                        <h2 style="margin-top: 120px; margin-bottom: 30px">{{ __('Please fill in the following information to continue with the registration') }}.</h2>
                        
                        
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 20px">{{ __('Main Contact') }}</h3>
                        <p class="description">{{ __('This person will manage the company\'s profile') }}.</p>

                        {{--  Main Contact  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Name" name="name" autofocus value="{{ old('name') }}">
                                           @error('name') <div class="bg-info">{{ __('The contact name is required') }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Last name') }}(s)</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Last name"
                                           name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" class="form-control pymais-input-background @error('phone') border border-danger @enderror"
                                        aria-label="Phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Position"
                                        name="position" value="{{ old('position') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Job area (e.g. Sales)') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Area of the post" name="job_area" value="{{ old('job_area') }}">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('LinkedIn profile') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="LinkedIn profile" name="linkedin" value="{{ old('linkedin') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('User email') }}</label>
                                    <input type="email" class="form-control pymais-input-background @error('email') border border-danger @enderror" aria-label="Email"
                                           name="email" value="{{ old('email') }}">
                                           @error('email') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4 @error('password_user') border border-danger @enderror"
                                            id="password" aria-label="Password" name="password_user" value="{{ old('password_user') }}">
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showPassword" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @error('password_user') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <label>{{ __('Confirm password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4 @error('confirm_password_user') border border-danger @enderror"
                                            id="confirmPassword" aria-label="Confirm Password" name="confirm_password_user" value="{{ old('confirm_password_user') }}">
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showConfirmPassword" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @error('confirm_password_user') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>


                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px; margin-top: 60px">
                            {{ __('Company Information') }}</h3>
                        {{--  Company details  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ __('Trade Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Trade Name" name="trade_name" value="{{ old('trade_name') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('RFC') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="RFC" name="rfc" value="{{ old('rfc') }}">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Legal Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Legal Name" name="legal_name" value="{{ old('legal_name') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Contact phone') }}</label>
                                    <input type="text" aria-label="Contact phone" name="company_contact_phone" class="form-control pymais-input-background @error('company_contact_phone') border border-danger @enderror" value="{{ old('company_contact_phone') }}">
                                    @error('company_contact_phone') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Contact email') }}</label>
                                    <input type="email" class="form-control pymais-input-background"
                                           aria-label="Contact email" name="company_contact_mail" value="{{ old('company_contact_mail') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('NAICS Code') }}</label> <a href="https://www.naics.com/search/" style="color:blue" target="_blank">{{ __('Search') }}</a>
                                    <select class="form-control pymais-select-background @error('naics_code') border border-danger @enderror" name="naics_code">
                                        <optgroup>
                                            <option value="">{{ __('Select an option') }}</option>
                                            @foreach ($naics_code as $codes)
                                                <option value="{{ $codes->id }}" {{ old('naics_code') == $codes->id ? 'selected' : '' }}>
                                                    {{ $codes->code }} - {{ $codes->name }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                    @error('naics_code') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Number of employees') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Number of employees" name="number_employees" value="{{ old('number_employees') }}">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Seniority in the company') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Seniority in the company" name="seniority" value="{{ old('seniority') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Sector to which it belongs') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Sector to which it belongs"
                                           name="sector" value="{{ old('sector') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <label>{{ __('Products and/or Services they offer') }}</label>
                                    <textarea type="text" class="form-control pymais-input-background" 
                                        aria-label="Products and/or Services they offer" name="products_services">{{ old('products_services') }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="mt-5 mb-3">{{ __('Address') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Street') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Street"
                                           name="street" value="{{ old('street') }}">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Number') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Number"
                                           name="number" value="{{ old('number') }}">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Postal code') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Postal code"
                                           name="postal_code" value="{{ old('postal_code') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Neighborhood') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Neighborhood"
                                           name="neighborhood" value="{{ old('neighborhood') }}">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('City') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="City"
                                           name="city" value="{{ old('city') }}">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('State') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="State"
                                           name="state" value="{{ old('state') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center p-3">
                                    <input type="checkbox" id="toggleInputs" class="m-3" name="incorporated_united_states" value="{{ old('incorporated_united_states') }}"
                                        style="width: 20px; height: 20px; cursor: pointer; position: relative; margin-top; 20px">
                                    <label for="toggleInputs" class="mt-2 ms-2">{{ __('Are you incorporated in the United States?') }}</label>
                                </div>
                                <div id="additionalInputs" style="display: none;" class="row">
                                    <div class="col-md-6">
                                    <label>{{ __('Company Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Company Name"
                                           name="company_name" value="{{ old('company_name') }}">
                                    </div>
                                    <div class="col-md-6">
                                    <label>{{ __('Business Line') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Business Line"
                                           name="business_line" value="{{ old('business_line') }}">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 20px; margin-top: 60px">
                            {{ __('Digital Presence') }}</h3>
                        {{--  Social media  --}}
                        <p class="description">{{ __('In which digital platforms can your company be found?') }}.</p>

                        <div class="pymais-padding-section mb-5">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Company LinkedIn') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Company LinkedIn"
                                        name="company_linkedin" value="{{ old('company_linkedin') }}">
                                    <div class="d-flex align-items-center p-1">
                                        <label class="me-3">{{ __('Does your company not yet have a presence on LinkedIn?') }}</label>
                                        <a href="https://www.linkedin.com/learning/growing-your-business-with-linkedin-pages-22873022" target="_blank" style="color:#2849E6;">{{ __('Learn how') }}.</a>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Website') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Website" name="website" value="{{ old('website') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Social Networking') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Social Networking" name="social_networking" value="{{ old('social_networking') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 p-3">
                                    <button type="button" class="w-100 btn btn-outline-primary btn-lg" style="border: 2px solid blue;">
                                        <h4>{{ __('Add networks') }}</h4>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-5">
                            {{-- <div class="row">
                                <div class="col-md-3 mb-3">
                                    <button type="button" class="w-100 btn btn-outline-primary btn-lg" style="border: 2px solid blue;" id="showParticipantModal">
                                        <h4>{{ __('Add participant') }}</h4>
                                    </button>
                                </div>
                            </div> --}}
                            
                            <div class="d-flex align-items-center" style="margin-top: 60px;">
                                <input type="checkbox" id="toggleInputs" class="m-3 @error('accept_terms_and_conditions') border border-danger @enderror" name="accept_terms_and_conditions" 
                                    style="width: 20px; height: 20px; cursor: pointer; position: relative; margin-top; 20px">
                                <label for="toggleInputs" class="mt-2 ms-2">{{ __('I accept') }}
                                <a href="{{ asset(app()->getLocale() == 'es' ? 'pdfs/Terminos_y_Condiciones.pdf' : 'pdfs/Terminos_y_Condiciones.pdf') }}"
                                    class="text-info" target="_blank">
                                    {{ __('terms and conditions') }}
                                </a>
                            </div>
                            @error('accept_terms_and_conditions') <p class="text-danger ms-2 mb-3">{{ __('Confirm terms and conditions') }}</p> @enderror
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 d-grid gap-2">
                                <button type="submit" class="pymais-button-gradient btn-lg">
                                    {{ __('Submit') }}
                                </button>
                                <p class="mt-20">{{ __('Already have account') }}.
                                    <a href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                </p>
                            </div>
                        </div>
                    </form>       

                    <!-- Inicia formulario Intructor-->
                    <form id="form-instructor" action="{{ route('save.application.instructor') }}" class="global-form login-form mt-25" method="post" style="display: none;">
                        @csrf                        
                        <h2 style="margin-top: 120px; margin-bottom: 30px">{{ __('Please fill in the following information to continue with the registration') }}.</h2>
                        
                        
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 20px">{{ __('Instructor Contact') }}</h3>
                        <p class="description">{{ __('This person will manage the profile') }}.</p>

                        {{--  Main Contact  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Name" name="name" autofocus value="{{ old('name') }}">
                                           @error('name') <div class="bg-info">{{ __('The contact name is required') }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Last name') }}(s)</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Last name"
                                           name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" class="form-control pymais-input-background @error('phone') border border-danger @enderror"
                                        aria-label="Phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Position"
                                        name="position" value="{{ old('position') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Job area (e.g. Sales)') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Area of the post" name="job_area" value="{{ old('job_area') }}">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('LinkedIn profile') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="LinkedIn profile" name="linkedin" value="{{ old('linkedin') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('User email') }}</label>
                                    <input type="email" class="form-control pymais-input-background @error('email') border border-danger @enderror" aria-label="Email"
                                           name="email" value="{{ old('email') }}" >
                                           @error('email') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4 @error('password_instructor') border border-danger @enderror"
                                            id="password2" aria-label="Password" name="password_instructor" value="{{ old('password_instructor') }}" >
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showPassword2" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @error('password_instructor') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <label>{{ __('Confirm password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4 @error('confirm_password_instructor') border border-danger @enderror"
                                            id="confirmPassword2" aria-label="Confirm Password" name="confirm_password_instructor" value="{{ old('confirm_password_instructor') }}" >
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showConfirmPassword2" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @error('confirm_password_instructor') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="d-flex align-items-center" style="margin-top: 60px;">
                                <input type="checkbox" id="toggleInputs" class="m-3 @error('accept_terms_and_conditions') border border-danger @enderror" name="accept_terms_and_conditions" 
                                    style="width: 20px; height: 20px; cursor: pointer; position: relative; margin-top; 20px" required>
                                <label for="toggleInputs" class="mt-2 ms-2">{{ __('I accept') }}
                                <a href="{{ asset(app()->getLocale() == 'es' ? 'pdfs/Terminos_y_Condiciones.pdf' : 'pdfs/Terminos_y_Condiciones.pdf') }}"
                                    class="text-info" target="_blank">
                                    {{ __('terms and conditions') }}
                                </a>
                            </div>
                            @error('accept_terms_and_conditions') <p class="text-danger ms-2 mb-3">{{ __('Confirm terms and conditions') }}</p> @enderror
                        </div>                        

                        <div class="row mt-5">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 d-grid gap-2">
                                <button type="submit" class="pymais-button-gradient btn-lg">
                                    {{ __('Submit') }}
                                </button>
                                <p class="mt-20">{{ __('Already have account') }}.
                                    <a href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                </p>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        "use strict";
        let participants = [];

        $(document).ready(function() {
            $('#toggleInputs').change(function() {
                $('#additionalInputs').toggle(this.checked);
            });

            $('#showParticipantModal').on('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('participantModal'));
                modal.show();
            });


            
            function togglePasswordBtn(btnId, inputId) {
                $(btnId).on('click', function(e) {
                    e.preventDefault();
                    const passwordInput = $(inputId);
                    const type = passwordInput.attr('type');

                    if (type == 'password') {
                        passwordInput.attr('type', 'text');
                        $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                    } else {
                        passwordInput.attr('type', 'password');
                        $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                    }
                });
            }

            togglePasswordBtn('#showPassword', '#password');
            togglePasswordBtn('#showConfirmPassword', '#confirmPassword');

            togglePasswordBtn('#showPassword2', '#password2');
            togglePasswordBtn('#showConfirmPassword2', '#confirmPassword2');
        });
    </script>        
@endpush

@push('js')
    <script>
        function showForm(formId) {        
            document.getElementById('form-student').style.display = 'none';
            document.getElementById('form-instructor').style.display = 'none';        
            
            document.getElementById(formId).style.display = 'block';        
            
            document.getElementById('form-student-btn').classList.remove('active');
            document.getElementById('form-instructor-btn').classList.remove('active');
            document.getElementById(formId + '-btn').classList.add('active');
            }
    </script>
@endpush
