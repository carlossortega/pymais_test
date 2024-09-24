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
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px">{{ __('Sign up') }}</h3>

                        {{--  Sing up information  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Full Name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Full Name" name="name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" class="form-control pymais-input-background" aria-label="Email"
                                        name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" class="form-control pymais-input-background"
                                        aria-label="Password" name="password">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Cellphone') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Cellphone" name="cellphone">
                                </div>
                            </div>
                        </div>

                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px; margin-top: 60px">
                            {{ __('Company details') }}</h3>
                        {{--  Company details  --}}
                        <div class="pymais-padding-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Company name') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Company Name" name="razon_social">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Position in company') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Position in company" name="position">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Company Phone -Ext') }}</label>
                                    <input type="text" name="company_phone" class="form-control pymais-input-background">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Fiscal number') }} (RFC)</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Fiscal number" name="RFC">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Fiscal name') }} (USA)</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Fiscal name" name="fiscal_name_usa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>{{ __('Tax ID') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Tax id"
                                        name="taxid">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Naics') }}</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Naics"
                                        name="naics">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ __('Address') }}</label>
                                    <textarea type="text" class="form-control pymais-input-background" aria-label="Address" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <h3 class="g-title" style="color:#2849E6; margin-bottom: 60px; margin-top: 60px">
                            {{ __('Social media') }}</h3>
                        {{--  Social media  --}}
                        <div class="pymais-padding-section mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Linkedin"
                                        name="linkedin">
                                </div>
                                <div class="col-md-6">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Instagram" name="instagram">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control pymais-input-background" aria-label="Facebook"
                                        name="facebook">
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('Website') }}</label>
                                    <input type="text" class="form-control pymais-input-background"
                                        aria-label="Website" name="website">
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
