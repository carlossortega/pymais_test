@extends('layouts.' . get_frontend_settings('theme'))
@push('title', get_phrase('Sign Up'))
@push('meta')@endpush
@push('css')
    <style>
        .form-icons .right {
            right: 20px;
            cursor: pointer !important;
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
                        <h4 class="g-title text-center">{{ get_phrase('Sign Up') }}</h4>
                        <p class="description text-center">{{ get_phrase('See your growth and get consulting support! ') }}</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Main contact name') }}</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter main contact name">

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Position in company') }}</label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter your position in company">

                                    @error('position')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Company Phone -Ext') }}</label>
                                    <input type="text" name="company_phone" class="form-control" placeholder="Enter company phone">

                                    @error('company_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Cellphone Number') }}</label>
                                    <input type="text" name="cellphone" class="form-control" placeholder="Enter your cellphone number">

                                    @error('cellphone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Email') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">

                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Company Commercial Name') }}</label>
                                    <input type="text" name="comercial_name" class="form-control" placeholder="Enter your company comercial name">

                                    @error('comercial_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Fiscal Name (Mexico)') }}</label>
                                    <input type="text" name="fiscal_name" class="form-control" placeholder="Enter your company fiscal name">

                                    @error('fiscal_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Fiscal Number (RFC)') }}</label>
                                    <input type="text" name="RFC" class="form-control" placeholder="Enter your company fiscal number">

                                    @error('RFC')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Razon Social') }}</label>
                                    <input type="text" name="razon_social" class="form-control" placeholder="Enter your razon social">

                                    @error('razon_social')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Fiscal Name (USA)') }}</label>
                                    <input type="text" name="fiscal_name_usa" class="form-control" placeholder="Enter your fiscal name">

                                    @error('fiscal_name_usa')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('NAICS') }}</label>
                                    <input type="text" name="naics" class="form-control" placeholder="Enter your NAICS">

                                    @error('naics')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Fed. Employer Identification Number') }}</label>
                                    <input type="text" name="fein" class="form-control" placeholder="Enter your Fed. Employer Identification Number:">

                                    @error('fein')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Tax ID') }}</label>
                                    <input type="text" name="taxid" class="form-control" placeholder="Enter your Tax ID">

                                    @error('taxid')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Address') }}</label>
                                    <input type="text" name="address" class="form-control" placeholder="(Enter Street, number, ZipCode, City)">

                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Facebook') }}</label>
                                    <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook page company">

                                    @error('facebook')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Linkedin') }}</label>
                                    <input type="text" name="linkedin" class="form-control" placeholder="Enter Linkedin">

                                    @error('linkedin')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Instagram') }}</label>
                                    <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram">

                                    @error('instagram')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Website') }}</label>
                                    <input type="text" name="website" class="form-control" placeholder="Enter Website">

                                    @error('website')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Main products or services') }}</label>
                                    <input type="text" name="products_services" class="form-control" placeholder="Enter the main products or services of your company">

                                    @error('products_services')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Total employees') }}</label>
                                    <input type="text" name="employees" class="form-control" placeholder="Enter the total employees of your company">

                                    @error('employees')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Number of employees in Mexico') }}</label>
                                    <input type="text" name="employees_mexico" class="form-control" placeholder="Enter number of employees in Mexico">

                                    @error('employees_mexico')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Number of employees in USA') }}</label>
                                    <input type="text" name="employees_usa" class="form-control" placeholder="Enter number of employees in USA">

                                    @error('employees_usa')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Operation start date') }}</label>
                                    <input type="text" name="operation_start_date" class="form-control" placeholder="Enter operation start date">

                                    @error('operation_start_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Annual Sales (past three years average)') }}</label>
                                    <input type="text" name="annual_sales" class="form-control" placeholder="Enter the Annual Sales">

                                    @error('annual_sales')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Certifications (Current)') }}</label>
                                    <input type="text" name="certifications" class="form-control" placeholder="Enter Certifications">

                                    @error('certifications')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Main customers') }}</label>
                                    <input type="text" name="customers" class="form-control" placeholder="Enter your main customers">

                                    @error('customers')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Are you a current regional manufacturing supplier?') }}</label>
                                    <input type="text" name="is_supplier" class="form-control" placeholder="Are you a current regional manufacturing supplier?">

                                    @error('is_supplier')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Name of the companies you supply to') }}</label>
                                    <input type="text" name="companies_supply" class="form-control" placeholder="Enter the name of the companies you supply">

                                    @error('companies_supply')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Have you previously participated in a supply') }}</label>
                                    <input type="text" name="has_participated" class="form-control" placeholder="">

                                    @error('has_participated')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="" class="form-label">{{ get_phrase('Password') }}</label>
                                    <input type="password" name="password" class="form-control" placeholder="*********">

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="eBtn gradient w-100">{{ get_phrase('Sign Up') }}</button>
                        <p class="mt-20">{{ get_phrase('Already have account.') }} <a href="{{ route('login') }}">{{ get_phrase('Sign in') }}</a></p>
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
