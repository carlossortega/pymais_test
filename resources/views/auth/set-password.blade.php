@extends('layouts.' . get_frontend_settings('theme'))
@push('title', __('Set Your New Password'))
@push('meta')@endpush
@push('css')
@endpush
@section('content')
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="login-img ">
                        <img src="{{ asset('assets/frontend/pymais/images/favicon.svg') }}"   alt="..." style="width:70%; height:70%; float: center">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <form action="{{ route('set.password.update', $id) }}" class="global-form login-form mt-25" method="POST">
                        @csrf
                        <h4 class="g-title">{{ __('Set Your New Password') }}</h4>
                        <p class="description">{{ __('See your growth and get consulting support') }}!</p>
                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="{{ __('Your Email') }}">
                            @error('email') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">{{ __('Password') }}</label>
                            <input type="password" id="password" name="password" class="form-control @error('password') border border-danger @enderror" placeholder="*********">
                            @error('password') <p class="text-danger ms-2 mb-3">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group mb-25 d-flex justify-content-between align-items-center remember-me">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">{{ __('Remember Me') }}</label>
                            </div>
                            <a href="{{route('password.request')}}">{{ __('Forgot Password') }}?</a>
                        </div>
                        <button type="submit" class="eBtn gradient w-100">{{ __('Sign In') }}</button>
                        <p class="mt-20">{{ __('Not have an account yet') }}?
                            <a href="{{ route('register') }}">{{ __('Create Account') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')@endpush
