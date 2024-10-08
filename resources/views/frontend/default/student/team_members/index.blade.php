@extends('layouts.default')
@push('title', __('My profile'))
@push('meta')@endpush
@push('css')@endpush
@section('content')
    <!------------ My profile area start  ------------>
    <section class="course-content">
        <div class="profile-banner-area"></div>
        <div class="container profile-banner-area-container">
            <div class="row">
                @include('frontend.default.student.left_sidebar')
                <div class="col-lg-9">
                    <h4 class="g-title mb-5">{{ __('Team Members') }}</h4>
                    <div class="my-panel message-panel edit_profile">
                        {{-- <form action="" method="POST">@csrf --}}
                        <div class="row h-100 mb-5">
                            <div class="d-flex justify-content-end mb-5">
                                <button class="eBtn btn gradient mt-10 w-25 h-75" id="showParticipantModal">{{ __('Add participant') }}</button>
                            </div>
                            <div class="table-responsive course_list" id="course_list">
                                <table class="table eTable eTable-2 print-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">{{ get_phrase('Name') }}</th>
                                            <th scope="col">{{ get_phrase('Last name') }}</th>
                                            <th scope="col">{{ get_phrase('Position') }}</th>
                                            <th scope="col">{{ get_phrase('Email') }}</th>
                                            <th scope="col" class="print-d-none">{{ __('Options') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(session('participants', []) as $participant)
                                            <tr>
                                                <td>{{ $participant['name'] }}</td>
                                                <td>{{ $participant['last_name'] }}</td>
                                                <td>{{ $participant['position'] }}</td>
                                                <td>{{ $participant['email'] }}</td>
                                                <td>{{ $participant['user_phone'] }}</td>
                                                <td>{{ $participant['user_linkedin'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal fade" id="participantModal" tabindex="-1" aria-labelledby="participantModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header p-4">
                                        <h3 class="modal-title" id="participantModalLabel">{{ __('Participant') }}</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="participantForm" >
                                            @csrf
                                            <div class="p-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>{{ __('Participants name') }}</label>
                                                        <input type="text" class="form-control pymais-input-background" aria-label="Participant Name" name="name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>{{ __('Participant\'s last name(s)') }}</label>
                                                        <input type="text" class="form-control pymais-input-background" aria-label="Participant Name" name="last_name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>{{ __('Position') }}</label>
                                                        <input type="text" class="form-control pymais-input-background" aria-label="Position" name="position">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>{{ __('Email') }}</label>
                                                        <input type="email" class="form-control pymais-input-background" aria-label="Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>{{ __('Phone') }}</label>
                                                        <input type="text" class="form-control pymais-input-background" aria-label="Phone" name="user_phone">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>{{ __('LinkedIn profile') }}</label>
                                                        <input type="text" class="form-control pymais-input-background" aria-label="LinkedIn profile" name="user_linkedin">
                                                    </div>
                                                </div>
                                                <div class="row mt-5 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-primary w-75"><h3>{{ __('Add Participant') }}</h3></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------ My profile area end  ------------>
@endsection
@push('js')
    <script>
        "use strict";

        $(document).ready(function() {
            $('#showParticipantModal').on('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('participantModal'));
                modal.show();
            });
        });
    </script>
@endpush