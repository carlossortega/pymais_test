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
                    <form action="{{ route('save.application') }}" class="global-form login-form mt-25" method="post">
                        @csrf

                        <h2 style="margin-bottom: 60px">{{ __('Please fill in the following information to continue with the registration') }}.</h2>
                        
                        
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 20px">{{ __('Main Contact') }}</h3>
                        <p class="description">{{ __('This person will manage the company\'s profile') }}.</p>

                        {{--  Main Contact  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Name" name="contact_name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Last name') }}(s)</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Last name"
                                           name="contact_last_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Email"
                                        name="contact_email">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Phone" name="contact_phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Position"
                                        name="contact_position">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Job area (e.g. Sales)') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Area of the post" name="contact_area_position">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('LinkedIn profile') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="LinkedIn profile" name="contact_linkedin">
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
                                        aria-label="Trade Name" name="trade_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('RFC') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="RFC" name="rfc">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Legal Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Legal Name" name="legal_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Contact phone') }}</label>
                                    <input type="text" aria-label="Contact phone" name="company_contact_phone" class="form-control pymais-input-background">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Contact email') }}</label>
                                    <input type="email" class="form-control pymais-input-background"
                                           aria-label="Contact email" name="company_contact_mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('NAICS Code') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="NAICS Code"
                                           name="naics_code">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Number of employees') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Number of employees" name="number_employees">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Seniority in the company') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Seniority in the company" name="seniority">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Sector to which it belongs') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Sector to which it belongs"
                                           name="sector">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <label>{{ __('Products and/or Services they offer') }}</label>
                                    <textarea type="text" class="form-control pymais-input-background" 
                                        aria-label="Products and/or Services they offer" name="products_services"></textarea/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="mt-5 mb-3">{{ __('Address') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Street') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Street"
                                           name="street">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Number') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Number"
                                           name="number">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('Postal code') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Postal code"
                                           name="postal_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Neighborhood') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Neighborhood"
                                           name="neighborhood">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('City') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="City"
                                           name="city">
                                </div>
                                <div class="col-md-3">
                                    <label>{{ __('State') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="State"
                                           name="state">
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex align-items-center p-3">
                                    <input type="checkbox" id="toggleInputs" class="m-3" name="incorporated_united_states"
                                        style="width: 20px; height: 20px; cursor: pointer; position: relative; margin-top; 20px">
                                    <label for="toggleInputs" class="mt-2 ms-2">{{ __('Are you incorporated in the United States?') }}</label>
                                </div>
                                <div id="additionalInputs" style="display: none;" class="row">
                                    <div class="col-md-6">
                                    <label>{{ __('Company Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Company Name"
                                           name="company_name">
                                    </div>
                                    <div class="col-md-6">
                                    <label>{{ __('Business Line') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Business Line"
                                           name="business_line">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 20px; margin-top: 60px">
                            {{ __('Digital Precense') }}</h3>
                        {{--  Social media  --}}
                        <p class="description">{{ __('In which digital platforms can your company be found?') }}.</p>

                        <div class="pymais-padding-section mb-5">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Company LinkedIn') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Company LinkedIn"
                                        name="company_linkedin">
                                    <div class="d-flex align-items-center p-1">
                                        <label class="me-3">{{ __('Does your company not yet have a presence on LinkedIn?') }}</label>
                                        <a href="https://www.linkedin.com/learning/growing-your-business-with-linkedin-pages-22873022" target="_blank" style="color:#2849E6;">{{ __('Learn how') }}.</a>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Website') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Website" name="website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>{{ __('Social Networking') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Social Networking" name="social_networking">
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

                        <h3 class="g-title" style="color:#2849E6; margin-top: 60px; margin-bottom: 20px">{{ __('User registration') }}</h3>

                        {{--  Sing up information  --}}
                        <p class="description">{{ __('Enter the details of the other participants from the company. Register up to 4 people') }}.</p>
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Participants name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Participant Name" name="name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Participant\'s last name(s)') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Participant Name" name="last_name" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Position"
                                           name="position">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Email"
                                           name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Phone" name="user_phone">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('LinkedIn profile') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="LinkedIn profile" name="user_linkedin">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4"
                                            id="password" aria-label="Password" name="password">
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showPassword" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Confirm password') }}</label>
                                    <div class="input-group justify-content-end">
                                        <input type="password" class="form-control pymais-input-background rounded-4"
                                            id="confirmPassword" aria-label="Confirm Password" name="confirm_password">
                                        <div class="input-group-append position-absolute mt-3" style="z-index: 99">
                                            <button id="showConfirmPassword" class="btn btn-outline-secondary w-25 rounded-circle d-flex justify-content-center" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-5">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <button type="button" class="w-100 btn btn-outline-primary btn-lg" style="border: 2px solid blue;" id="showParticipantModal">
                                        <h4>{{ __('Add participant') }}</h4>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center" style="margin-top: 60px;">
                                <input type="checkbox" id="toggleInputs" class="m-3" name="accept_terms"
                                    style="width: 20px; height: 20px; cursor: pointer; position: relative; margin-top; 20px">
                                <label for="toggleInputs" class="mt-2 ms-2">{{ __('I accept') }} <span class="text-info">{{ __('terms and conditions') }}.</span></label>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 d-grid gap-2">
                                <button type="submit" class="pymais-button-gradient btn-lg">
                                    {{ __('Submit') }}
                                </button>
                                <p class="mt-20">{{ __('Already have account') }}.
                                    <a href="{{ route('login') }}">{{ __('Sign in') }}</a>
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
        $(document).ready(function() {
            $('#toggleInputs').change(function() {
                $('#additionalInputs').toggle(this.checked);
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
        });
    </script>
@endpush
