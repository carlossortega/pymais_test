@php
$current_route = Route::currentRouteName();
@endphp

<div class="col-lg-3">
    <div class="gradient-border">
        <div class="course-sideBar">
            <div class="profile-info">
                <img class="photo"
                    src="{{ Auth()->user()->photo ? get_image(Auth()->user()->photo) : asset('assets/frontend/default/image/foto-perfil.png') }}"
                    alt="">
                <div class="upload-new">
                    <a href="#"
                        onclick="ajaxModal('{{ route('modal', ['frontend.default.upload_profile_pic', 'id' => auth()->user()->id]) }}', '{{ __('Upload picture') }}')">
                        <span>
                            <i class="fi-rr-cloud-upload"></i><br>
                            {{ __('Upload New') }}
                        </span>
                    </a>
                </div>
                <h5 class="name">{{ auth()->user()->name }}</h5>
                <p class="email">{{ auth()->user()->email }}</p>
            </div>
            <ul class="couses-tab-list">

                <li class="@if ($current_route == 'my.courses') active @endif">
                    <a href="{{ route('my.courses') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.40672 21.45C4.87409 21.45 4.42298 21.2652 4.0534 20.8956C3.68381 20.526 3.49902 20.0749 3.49902 19.5423V4.4077C3.49902 3.87507 3.68381 3.42396 4.0534 3.05438C4.42298 2.68479 4.87409 2.5 5.40672 2.5H16.5913C17.1239 2.5 17.575 2.68479 17.9446 3.05438C18.3142 3.42396 18.499 3.87507 18.499 4.4077V10.3923C18.499 10.6051 18.4188 10.7917 18.2586 10.9519C18.0983 11.1122 17.9118 11.1923 17.699 11.1923C17.4862 11.1923 17.2996 11.1122 17.1394 10.9519C16.9791 10.7917 16.899 10.6051 16.899 10.3923V4.4077C16.899 4.33077 16.8669 4.26024 16.8028 4.19613C16.7387 4.13203 16.6682 4.09998 16.5913 4.09998H11.999V9.8134C11.999 10.0116 11.9096 10.1589 11.7307 10.2553C11.5519 10.3517 11.3772 10.3448 11.2067 10.2346L9.724 9.32495L8.24132 10.2346C8.07081 10.3448 7.89612 10.3517 7.71727 10.2553C7.53844 10.1589 7.44902 10.0116 7.44902 9.8134V4.09998H5.40672C5.32979 4.09998 5.25926 4.13203 5.19515 4.19613C5.13105 4.26024 5.099 4.33077 5.099 4.4077V19.5423C5.099 19.6192 5.13105 19.6897 5.19515 19.7538C5.25926 19.8179 5.32979 19.85 5.40672 19.85H11.0048C11.2176 19.85 11.4041 19.9301 11.5644 20.0904C11.7246 20.2506 11.8048 20.4371 11.8048 20.65C11.8048 20.8628 11.7246 21.0493 11.5644 21.2096C11.4041 21.3698 11.2176 21.45 11.0048 21.45H5.40672ZM17.696 22.3461C16.4326 22.3461 15.3589 21.9031 14.475 21.0171C13.591 20.1312 13.149 19.0565 13.149 17.7931C13.149 16.5297 13.592 15.4561 14.478 14.5721C15.3639 13.6881 16.4386 13.2462 17.702 13.2462C18.9654 13.2462 20.039 13.6891 20.923 14.5751C21.807 15.4611 22.2489 16.5358 22.2489 17.7991C22.2489 19.0625 21.806 20.1362 20.92 21.0201C20.034 21.9041 18.9593 22.3461 17.696 22.3461ZM17.5432 19.3134L19.1778 18.2134C19.3355 18.1198 19.4143 17.9743 19.4143 17.7769C19.4143 17.5794 19.3355 17.4339 19.1778 17.3404L17.5432 16.2404C17.3727 16.1134 17.1964 16.1014 17.0144 16.2043C16.8323 16.3072 16.7413 16.4647 16.7413 16.6769V18.8769C16.7413 19.089 16.8323 19.2466 17.0144 19.3495C17.1964 19.4523 17.3727 19.4403 17.5432 19.3134ZM11.0048 4.09998H5.099H16.899H11.0048Z"
                                fill="#6B7385" />
                        </svg>
                        {{ __('My Courses') }}
                    </a>
                </li>

                <li
                    class="@if ($current_route == 'my.bootcamps' || $current_route == 'my.bootcamp.details') active @endif">
                    <a href="{{ route('my.bootcamps') }}">
                        <i class="fi-rr-video-camera text-23px me-3 ms-1"></i>
                        {{ __('My Bootcamps') }}
                    </a>
                </li>

                <li
                    class="@if ($current_route == 'my.team.packages' || $current_route == 'my.team.packages.details' || $current_route == 'team.package.invoice') active @endif">
                    <a href="{{ route('my.team.packages') }}">
                        <i class="fi-rr-users-alt text-23px me-3 ms-1"></i>
                        {{ __('My Teams') }}
                    </a>
                </li>

                <li class="@if ($current_route == 'team.members') active @endif">
                    <a href="{{ route('team.members') }}">
                        <i class="fa-duotone fa-solid fa-people-group fs-3 me-3 ms-1"></i>
                        {{ __('Team Members') }}
                    </a>
                </li>

                <li class="@if ($current_route == 'my.profile') active @endif">
                    <a href="{{ route('my.profile') }}">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.99978 7.66692C7.00396 7.66692 6.17168 7.33255 5.50293 6.66382C4.83418 5.99507 4.4998 5.16278 4.4998 4.16697C4.4998 3.17113 4.83418 2.33885 5.50293 1.67012C6.17168 1.00137 7.00396 0.666992 7.99978 0.666992C8.9956 0.666992 9.82788 1.00137 10.4966 1.67012C11.1654 2.33885 11.4998 3.17113 11.4998 4.16697C11.4998 5.16278 11.1654 5.99507 10.4966 6.66382C9.82788 7.33255 8.9956 7.66692 7.99978 7.66692ZM13.9556 15.3073H2.044C1.59472 15.3073 1.21254 15.1497 0.897454 14.8346C0.582354 14.5196 0.424805 14.1374 0.424805 13.6881V13.0092C0.424805 12.5028 0.561988 12.0452 0.836354 11.6362C1.1107 11.2272 1.46766 10.9187 1.90723 10.7106C2.88433 10.2597 3.88826 9.91312 4.91903 9.67082C5.9498 9.42852 6.97671 9.30737 7.99978 9.30737C9.02285 9.30737 10.0539 9.42852 11.093 9.67082C12.1321 9.91312 13.1292 10.2599 14.0844 10.7112C14.5292 10.9189 14.8889 11.2272 15.1632 11.6362C15.4376 12.0452 15.5748 12.5028 15.5748 13.0092V13.6881C15.5748 14.1374 15.4172 14.5196 15.1021 14.8346C14.787 15.1497 14.4048 15.3073 13.9556 15.3073ZM2.02478 13.7073H13.9748V13.0028C13.9748 12.8045 13.9203 12.6275 13.8113 12.4717C13.7023 12.316 13.5555 12.2086 13.3709 12.1496C12.5427 11.7586 11.6642 11.4538 10.7355 11.2352C9.80671 11.0166 8.89481 10.9073 7.99978 10.9073C7.10475 10.9073 6.19285 11.0208 5.26408 11.2477C4.33531 11.4746 3.45683 11.7753 2.62863 12.1496C2.44235 12.2405 2.29514 12.3558 2.187 12.4957C2.07885 12.6355 2.02478 12.8045 2.02478 13.0028V13.7073ZM7.99978 6.06697C8.54978 6.06697 9.00395 5.8878 9.36228 5.52947C9.72061 5.17113 9.89978 4.71697 9.89978 4.16697C9.89978 3.61697 9.72061 3.1628 9.36228 2.80447C9.00395 2.44613 8.54978 2.26697 7.99978 2.26697C7.44978 2.26697 6.99561 2.44613 6.63728 2.80447C6.27895 3.1628 6.09978 3.61697 6.09978 4.16697C6.09978 4.71697 6.27895 5.17113 6.63728 5.52947C6.99561 5.8878 7.44978 6.06697 7.99978 6.06697Z"
                                fill="#6B7385" />
                        </svg>
                        {{ __('My Profile') }}
                    </a>
                </li>

                <li class="@if ($current_route == 'wishlist') active @endif">
                    <a href="{{ route('wishlist') }}">
                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.99133 16.9092C9.77723 16.9092 9.56217 16.8707 9.34615 16.7938C9.13012 16.7168 8.94005 16.5963 8.77595 16.4322L7.33945 15.1265C5.56637 13.5098 3.98335 11.9217 2.5904 10.3621C1.19745 8.80244 0.500977 7.13162 0.500977 5.34959C0.500977 3.93037 0.979501 2.74224 1.93655 1.78519C2.8936 0.828135 4.08174 0.349609 5.50095 0.349609C6.30735 0.349609 7.10383 0.53551 7.89038 0.90731C8.67691 1.27911 9.38044 1.88296 10.001 2.71886C10.6215 1.88296 11.325 1.27911 12.1115 0.90731C12.8981 0.53551 13.6946 0.349609 14.501 0.349609C15.9202 0.349609 17.1083 0.828135 18.0654 1.78519C19.0224 2.74224 19.5009 3.93037 19.5009 5.34959C19.5009 7.15085 18.7926 8.84027 17.3759 10.4178C15.9593 11.9954 14.3798 13.5701 12.6375 15.1419L11.2163 16.4322C11.0522 16.5963 10.8606 16.7168 10.6413 16.7938C10.4221 16.8707 10.2054 16.9092 9.99133 16.9092ZM9.28173 4.23806C8.74071 3.41369 8.17116 2.80953 7.57308 2.42556C6.97499 2.04158 6.28429 1.84958 5.50095 1.84958C4.50095 1.84958 3.66762 2.18292 3.00095 2.84959C2.33429 3.51625 2.00095 4.34959 2.00095 5.34959C2.00095 6.15215 2.2596 6.99125 2.7769 7.86689C3.2942 8.74252 3.94355 9.61302 4.72495 10.4784C5.50637 11.3438 6.35284 12.1893 7.26438 13.0149C8.17591 13.8406 9.02079 14.6079 9.799 15.3169C9.8567 15.3682 9.92402 15.3938 10.001 15.3938C10.0779 15.3938 10.1452 15.3682 10.2029 15.3169C10.9811 14.6079 11.826 13.8406 12.7375 13.0149C13.6491 12.1893 14.4955 11.3438 15.277 10.4784C16.0584 9.61302 16.7077 8.74252 17.225 7.86689C17.7423 6.99125 18.001 6.15215 18.001 5.34959C18.001 4.34959 17.6676 3.51625 17.001 2.84959C16.3343 2.18292 15.501 1.84958 14.501 1.84958C13.7176 1.84958 13.0269 2.04158 12.4288 2.42556C11.8307 2.80953 11.2612 3.41369 10.7202 4.23806C10.6356 4.36626 10.5292 4.46242 10.401 4.52654C10.2727 4.59064 10.1394 4.62269 10.001 4.62269C9.8625 4.62269 9.72917 4.59064 9.60095 4.52654C9.47275 4.46242 9.36634 4.36626 9.28173 4.23806Z"
                                fill="#6B7385" />
                        </svg>
                        {{ __('Wishlist') }}
                    </a>
                </li>

                <li class="@if ($current_route == 'message') active @endif">
                    <a href="{{ route('message') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.89939 14.1503H13.4994C13.6839 14.1503 13.8383 14.0886 13.9627 13.9652C14.0872 13.8418 14.1494 13.6886 14.1494 13.5056C14.1494 13.3226 14.0872 13.1677 13.9627 13.0408C13.8383 12.9138 13.6839 12.8504 13.4994 12.8504H6.89939C6.71491 12.8504 6.56046 12.9121 6.43604 13.0355C6.31162 13.1589 6.24941 13.3121 6.24941 13.4951C6.24941 13.6781 6.31162 13.833 6.43604 13.96C6.56046 14.0869 6.71491 14.1503 6.89939 14.1503ZM6.89939 10.8503H17.0994C17.2839 10.8503 17.4383 10.7886 17.5627 10.6652C17.6872 10.5418 17.7494 10.3886 17.7494 10.2056C17.7494 10.0226 17.6872 9.86768 17.5627 9.74077C17.4383 9.61385 17.2839 9.55039 17.0994 9.55039H6.89939C6.71491 9.55039 6.56046 9.61209 6.43604 9.73549C6.31162 9.85891 6.24941 10.0121 6.24941 10.1951C6.24941 10.3781 6.31162 10.533 6.43604 10.66C6.56046 10.7869 6.71491 10.8503 6.89939 10.8503ZM6.89939 7.55034H17.0994C17.2839 7.55034 17.4383 7.48864 17.5627 7.36524C17.6872 7.24182 17.7494 7.08862 17.7494 6.90564C17.7494 6.72264 17.6872 6.56768 17.5627 6.44077C17.4383 6.31385 17.2839 6.25039 17.0994 6.25039H6.89939C6.71491 6.25039 6.56046 6.31209 6.43604 6.43549C6.31162 6.55891 6.24941 6.71211 6.24941 6.89509C6.24941 7.07809 6.31162 7.23305 6.43604 7.35997C6.56046 7.48688 6.71491 7.55034 6.89939 7.55034ZM6.03786 17.5003L4.26389 19.2743C4.01066 19.5275 3.71994 19.5854 3.39174 19.4478C3.06352 19.3103 2.89941 19.0624 2.89941 18.7042V4.50809C2.89941 4.05796 3.05483 3.67747 3.36566 3.36664C3.6765 3.05581 4.05698 2.90039 4.50711 2.90039H19.4917C19.9418 2.90039 20.3223 3.05581 20.6331 3.36664C20.9439 3.67747 21.0994 4.05796 21.0994 4.50809V15.8926C21.0994 16.3428 20.9439 16.7233 20.6331 17.0341C20.3223 17.3449 19.9418 17.5003 19.4917 17.5003H6.03786ZM4.89174 16.2004H19.4917C19.5686 16.2004 19.6391 16.1683 19.7032 16.1042C19.7673 16.0401 19.7994 15.9696 19.7994 15.8926V4.50809C19.7994 4.43116 19.7673 4.36063 19.7032 4.29652C19.6391 4.23242 19.5686 4.20037 19.4917 4.20037H4.50711C4.43018 4.20037 4.35966 4.23242 4.29554 4.29652C4.23144 4.36063 4.19939 4.43116 4.19939 4.50809V16.8927L4.89174 16.2004Z"
                                fill="#6B7385" />
                        </svg>
                        {{ __('Messages') }}
                    </a>
                </li>

                <li class="@if ($current_route == 'purchase.history' || $current_route == 'invoice') active @endif">
                    <a href="{{ route('purchase.history') }}">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.9806 16.9C5.87035 16.9 4.06939 16.1949 2.57772 14.7846C1.08606 13.3744 0.25754 11.6378 0.0921732 9.57503C0.0716566 9.39298 0.124857 9.24363 0.251773 9.12698C0.37869 9.01031 0.533623 8.95518 0.716573 8.96158C0.88874 8.968 1.03925 9.02505 1.1681 9.13273C1.29693 9.24043 1.3684 9.3821 1.3825 9.55773C1.54662 11.2526 2.25431 12.6834 3.5056 13.8501C4.75687 15.0167 6.24853 15.6001 7.9806 15.6001C9.79726 15.6001 11.3514 14.9542 12.6431 13.6626C13.9348 12.3709 14.5806 10.8167 14.5806 9.00006C14.5806 7.18339 13.9348 5.62922 12.6431 4.33756C11.3514 3.04589 9.79726 2.40006 7.9806 2.40006C7.00496 2.40006 6.10169 2.58935 5.27077 2.96793C4.43987 3.34652 3.722 3.86747 3.11715 4.53081H5.00755C5.1917 4.53081 5.34607 4.59262 5.47065 4.71626C5.59523 4.83989 5.65752 4.99309 5.65752 5.17586C5.65752 5.35862 5.59523 5.51346 5.47065 5.64038C5.34607 5.76731 5.1917 5.83078 5.00755 5.83078H1.3845C1.15675 5.83078 0.96584 5.75374 0.811773 5.59966C0.657706 5.44559 0.580673 5.25468 0.580673 5.02693V1.40391C0.580673 1.21974 0.64249 1.06537 0.766123 0.940782C0.889756 0.816199 1.04296 0.753906 1.22572 0.753906C1.40849 0.753906 1.56333 0.816199 1.69025 0.940782C1.81717 1.06537 1.88062 1.21974 1.88062 1.40391V4.02316C2.60882 3.13214 3.49728 2.42221 4.546 1.89336C5.59471 1.36451 6.73958 1.10008 7.9806 1.10008C9.07723 1.10008 10.1044 1.30733 11.0622 1.72183C12.0199 2.13631 12.8552 2.69994 13.5679 3.41271C14.2807 4.12549 14.8443 4.96069 15.2588 5.91831C15.6733 6.87592 15.8805 7.90299 15.8805 8.99951C15.8805 10.096 15.6733 11.1233 15.2588 12.0813C14.8443 13.0392 14.2807 13.8746 13.5679 14.5874C12.8552 15.3002 12.0199 15.8638 11.0622 16.2783C10.1044 16.6928 9.07723 16.9 7.9806 16.9ZM8.65942 8.34621L11.1594 10.8462C11.2979 10.9847 11.3646 11.1337 11.3594 11.2933C11.3543 11.4529 11.2793 11.6052 11.1344 11.7501C10.9896 11.8949 10.8348 11.9674 10.67 11.9674C10.5053 11.9674 10.3505 11.8949 10.2056 11.7501L7.61282 9.15726C7.53109 9.07552 7.46843 8.98623 7.42485 8.88938C7.38125 8.79253 7.35945 8.69245 7.35945 8.58913V4.84193C7.35945 4.66006 7.42302 4.50762 7.55017 4.38461C7.67732 4.26157 7.83052 4.20006 8.00977 4.20006C8.18904 4.20006 8.34213 4.26235 8.46905 4.38693C8.59597 4.51151 8.65942 4.66588 8.65942 4.85003V8.34621Z"
                                fill="#6B7385" />
                        </svg>
                        {{ __('Purchase History') }}
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="d-flex">
                        <i class="fi-rr-sign-out-alt text-23px me-3 ms-1"></i>
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
            @if (auth()->user()->role == 'student')
            <div class="my-course-btn justify-content-center mt-5">
                <a href="{{ route('become.instructor') }}"
                    class="eBtn gradient px-4">{{ __('Become an instructor') }}</a>
            </div>
            @endif
        </div>
    </div>
</div>