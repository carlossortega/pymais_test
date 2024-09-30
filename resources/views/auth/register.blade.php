@extends('layouts.' . get_frontend_settings('theme'))
@push('title', get_phrase('Sign Up'))
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


                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px">{{ __('Main Contact') }}</h3>

                        {{--  Main Contact  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Full Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Full Name" name="contact_name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Email"
                                           name="contact_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Phone / Cellphone') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Phone / Cellphone" name="contact_phone">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Position" name="contact_position">
                                </div>
                            </div>
                        </div>


                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px; margin-top: 60px">
                            {{ __('Company Information') }}</h3>
                        {{--  Company details  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Company Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Company Name" name="company_name">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Fiscal number') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="RFC" name="rfc">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Trade Name') }}</label>
                                    <input type="text" aria-label="Trade Name" name="trade_name" class="form-control pymais-input-background">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Contact email') }}</label>
                                    <input type="email" class="form-control pymais-input-background"
                                           aria-label="Contact Email" name="contact_mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }} </label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Phone" name="company_phone">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('NAICS Code') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Naics Code"
                                           name="naics_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Products and/or Services') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Products Services"
                                           name="products_services">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Number of employees') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Number Employees"
                                           name="number_employees">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Seniority in the company') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Seniority"
                                           name="seniority">
                                </div>
                            </div>
                        </div>
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px; margin-top: 60px">
                            {{ __('Digital Precense') }}</h3>
                        {{--  Social media  --}}
                        <div class="pymais-padding-section mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Linkedin"
                                        name="company_linkedin">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Social Networking') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Socila Networking" name="social_networking">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Website') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Website" name="website">
                                </div>
                            </div>
                        </div>

                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px">{{ __('User Regitration') }}</h3>

                        {{--  Sing up information  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Participants name') }} ({{ __('First and last name')}})</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Participant Name" name="name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Position') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Position"
                                           name="position">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Email"
                                           name="email">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Phone" name="user_phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Linkedin') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                           aria-label="Linkedin" name="user_linkedin">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" class="form-control pymais-input-background"
                                           aria-label="Password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 d-grid gap-2">
                                <button type="submit" class="pymais-button-gradient btn-lg">
                                    {{ get_phrase('Sign Up') }}
                                </button>
                                <p class="mt-20">{{ get_phrase('Already have account.') }}
                                    <a href="{{ route('login') }}">{{ get_phrase('Sign in') }}</a>
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
            $('#showpassword').on('click', function(e) {
                e.preventDefault();
                const type = $('#password').attr('type');

                if (type == 'password') {
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                }
            });
        });

        $(document).ready(function() {
            $('#showcpassword').on('click', function(e) {
                e.preventDefault();
                const type = $('#cpassword').attr('type');

                if (type == 'password') {
                    $('#cpassword').attr('type', 'text');
                } else {
                    $('#cpassword').attr('type', 'password');
                }
            });
        });
    </script>
@endpush
