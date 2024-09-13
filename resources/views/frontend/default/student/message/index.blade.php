@extends('layouts.default')
@push('title', get_phrase('Message'))
@push('meta')@endpush
@push('css')@endpush
@section('content')
    <section class="wishlist-content">
        <div class="profile-banner-area"></div>
        <div class="container profile-banner-area-container">
            <div class="row">
                @include('frontend.default.student.left_sidebar')

                <div class="col-lg-9">
                    <h4 class="g-title mb-5">{{ get_phrase('Message') }}</h4>

                    <div class="my-panel message-panel">
                        <div class="row">
                            <div class="col-lg-4 pe-0">
                                @include('frontend.default.student.message.sidebar')
                            </div>

                            <div class="col-lg-8">
                                @if (request()->has('inbox'))
                                    @include('frontend.default.student.message.inbox')
                                @else
                                    <div class="welcome-msg">
                                        <div>
                                            <svg width="152" height="152" viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="76" cy="76" r="76" fill="#F4F7FD" />
                                                <path
                                                    d="M76.0007 71.2858C74.6539 71.2858 73.3373 71.6851 72.2175 72.4334C71.0977 73.1816 70.2249 74.2451 69.7095 75.4894C69.1941 76.7337 69.0592 78.1028 69.322 79.4238C69.5847 80.7447 70.2333 81.958 71.1856 82.9104C72.1379 83.8627 73.3513 84.5112 74.6722 84.774C75.9931 85.0367 77.3623 84.9019 78.6065 84.3865C79.8508 83.8711 80.9143 82.9983 81.6626 81.8785C82.4108 80.7586 82.8102 79.4421 82.8102 78.0953C82.8081 76.2899 82.09 74.5591 80.8134 73.2825C79.5368 72.0059 77.806 71.2878 76.0007 71.2858ZM76.0007 82.8096C75.0683 82.8096 74.1568 82.5331 73.3815 82.0151C72.6063 81.4971 72.002 80.7608 71.6452 79.8994C71.2884 79.0379 71.1951 78.0901 71.377 77.1756C71.5589 76.2611 72.0078 75.4211 72.6672 74.7618C73.3265 74.1025 74.1665 73.6535 75.0809 73.4716C75.9954 73.2897 76.9433 73.383 77.8047 73.7399C78.6662 74.0967 79.4024 74.7009 79.9204 75.4762C80.4385 76.2514 80.7149 77.1629 80.7149 78.0953C80.7136 79.3452 80.2164 80.5435 79.3326 81.4273C78.4488 82.3111 77.2505 82.8082 76.0007 82.8096ZM94.8578 71.2858C93.511 71.2858 92.1945 71.6851 91.0746 72.4334C89.9548 73.1816 89.082 74.2451 88.5666 75.4894C88.0512 76.7337 87.9164 78.1028 88.1791 79.4238C88.4419 80.7447 89.0904 81.958 90.0427 82.9104C90.9951 83.8627 92.2084 84.5112 93.5293 84.774C94.8502 85.0367 96.2194 84.9019 97.4637 84.3865C98.708 83.8711 99.7715 82.9983 100.52 81.8785C101.268 80.7586 101.667 79.4421 101.667 78.0953C101.665 76.2899 100.947 74.5591 99.6706 73.2825C98.394 72.0059 96.6632 71.2878 94.8578 71.2858ZM94.8578 82.8096C93.9254 82.8096 93.0139 82.5331 92.2387 82.0151C91.4634 81.4971 90.8592 80.7608 90.5024 79.8994C90.1456 79.0379 90.0522 78.0901 90.2341 77.1756C90.416 76.2611 90.865 75.4211 91.5243 74.7618C92.1836 74.1025 93.0236 73.6535 93.9381 73.4716C94.8526 73.2897 95.8005 73.383 96.6619 73.7399C97.5233 74.0967 98.2596 74.7009 98.7776 75.4762C99.2956 76.2514 99.5721 77.1629 99.5721 78.0953C99.5707 79.3452 99.0736 80.5435 98.1898 81.4273C97.306 82.3111 96.1077 82.8082 94.8578 82.8096ZM57.1435 71.2858C55.7967 71.2858 54.4802 71.6851 53.3603 72.4334C52.2405 73.1816 51.3677 74.2451 50.8523 75.4894C50.3369 76.7337 50.2021 78.1028 50.4648 79.4238C50.7276 80.7447 51.3761 81.958 52.3285 82.9104C53.2808 83.8627 54.4941 84.5112 55.815 84.774C57.136 85.0367 58.5051 84.9019 59.7494 84.3865C60.9937 83.8711 62.0572 82.9983 62.8054 81.8785C63.5537 80.7586 63.953 79.4421 63.953 78.0953C63.951 76.2899 63.2329 74.5591 61.9563 73.2825C60.6797 72.0059 58.9489 71.2878 57.1435 71.2858ZM57.1435 82.8096C56.2111 82.8096 55.2997 82.5331 54.5244 82.0151C53.7491 81.4971 53.1449 80.7608 52.7881 79.8994C52.4313 79.0379 52.3379 78.0901 52.5198 77.1756C52.7017 76.2611 53.1507 75.4211 53.81 74.7618C54.4693 74.1025 55.3093 73.6535 56.2238 73.4716C57.1383 73.2897 58.0862 73.383 58.9476 73.7399C59.809 74.0967 60.5453 74.7009 61.0633 75.4762C61.5813 76.2514 61.8578 77.1629 61.8578 78.0953C61.8564 79.3452 61.3593 80.5435 60.4755 81.4273C59.5917 82.3111 58.3934 82.8082 57.1435 82.8096Z"
                                                    fill="url(#paint0_linear_967_646)" />
                                                <path d="M33.0476 111.619C33.6262 111.619 34.0952 111.15 34.0952 110.571C34.0952 109.993 33.6262 109.524 33.0476 109.524C32.469 109.524 32 109.993 32 110.571C32 111.15 32.469 111.619 33.0476 111.619Z" fill="#2D4356" />
                                                <path
                                                    d="M37.7636 109.524H36.1922C35.9143 109.524 35.6478 109.634 35.4514 109.831C35.2549 110.027 35.1445 110.294 35.1445 110.571C35.1445 110.849 35.2549 111.116 35.4514 111.312C35.6478 111.509 35.9143 111.619 36.1922 111.619H37.7636C38.0414 111.619 38.3079 111.509 38.5044 111.312C38.7008 111.116 38.8112 110.849 38.8112 110.571C38.8112 110.294 38.7008 110.027 38.5044 109.831C38.3079 109.634 38.0414 109.524 37.7636 109.524ZM115.811 109.524H114.24C113.962 109.524 113.695 109.634 113.499 109.831C113.303 110.027 113.192 110.294 113.192 110.571C113.192 110.849 113.303 111.116 113.499 111.312C113.695 111.509 113.962 111.619 114.24 111.619H115.811C116.089 111.619 116.356 111.509 116.552 111.312C116.748 111.116 116.859 110.849 116.859 110.571C116.859 110.294 116.748 110.027 116.552 109.831C116.356 109.634 116.089 109.524 115.811 109.524Z"
                                                    fill="#2D4356" />
                                                <path d="M118.952 111.619C119.53 111.619 120 111.15 120 110.571C120 109.993 119.53 109.524 118.952 109.524C118.373 109.524 117.904 109.993 117.904 110.571C117.904 111.15 118.373 111.619 118.952 111.619Z" fill="#2D4356" />
                                                <path
                                                    d="M93.8906 113.714H89.5387C89.2749 113.735 89.0285 113.854 88.8488 114.048C88.669 114.242 88.5692 114.497 88.5692 114.762C88.5692 115.026 88.669 115.281 88.8488 115.476C89.0285 115.67 89.2749 115.789 89.5387 115.809H93.8906C94.1544 115.789 94.4008 115.67 94.5805 115.476C94.7603 115.281 94.8601 115.026 94.8601 114.762C94.8601 114.497 94.7603 114.242 94.5805 114.048C94.4008 113.854 94.1544 113.735 93.8906 113.714ZM62.462 113.714H58.1102C57.8463 113.735 57.5999 113.854 57.4202 114.048C57.2405 114.242 57.1406 114.497 57.1406 114.762C57.1406 115.026 57.2405 115.281 57.4202 115.476C57.5999 115.67 57.8463 115.789 58.1102 115.809H62.462C62.7258 115.789 62.9722 115.67 63.152 115.476C63.3317 115.281 63.4315 115.026 63.4315 114.762C63.4315 114.497 63.3317 114.242 63.152 114.048C62.9722 113.854 62.7258 113.735 62.462 113.714ZM86.4766 113.714H65.5242C65.2463 113.714 64.9799 113.825 64.7834 114.021C64.5869 114.218 64.4766 114.484 64.4766 114.762C64.4766 115.04 64.5869 115.306 64.7834 115.503C64.9799 115.699 65.2463 115.809 65.5242 115.809H73.8737V116.857H69.7147C69.4368 116.857 69.1703 116.967 68.9739 117.164C68.7774 117.36 68.667 117.627 68.667 117.905C68.667 118.183 68.7774 118.449 68.9739 118.645C69.1703 118.842 69.4368 118.952 69.7147 118.952H82.8099C83.0877 118.952 83.3542 118.842 83.5507 118.645C83.7471 118.449 83.8575 118.183 83.8575 117.905C83.8575 117.627 83.7471 117.36 83.5507 117.164C83.3542 116.967 83.0877 116.857 82.8099 116.857H78.127V115.809H86.4766C86.7544 115.809 87.0209 115.699 87.2173 115.503C87.4138 115.306 87.5242 115.04 87.5242 114.762C87.5242 114.484 87.4138 114.218 87.2173 114.021C87.0209 113.825 86.7544 113.714 86.4766 113.714Z"
                                                    fill="url(#paint1_linear_967_646)" />
                                                <path
                                                    d="M110.947 109.524H109.19C107.124 104.794 105.751 99.7909 105.113 94.6691C108.519 88.7031 110.01 81.8348 109.385 74.9935C108.759 68.1522 106.047 61.6682 101.615 56.4191C97.183 51.1699 91.2455 47.4091 84.6059 45.6454C77.9663 43.8817 70.9451 44.2004 64.4926 46.5583C58.04 48.9162 52.4677 53.1995 48.5295 58.8285C44.5914 64.4575 42.4776 71.1605 42.4743 78.0304C42.471 84.9002 44.5782 91.6053 48.5109 97.2381C52.4436 102.871 58.0119 107.16 64.4621 109.524H41.0489C40.8998 109.504 40.7484 109.517 40.6046 109.561C40.4608 109.604 40.3279 109.678 40.215 109.777C40.102 109.877 40.0115 109.999 39.9495 110.136C39.8875 110.273 39.8555 110.421 39.8555 110.571C39.8555 110.722 39.8875 110.87 39.9495 111.007C40.0115 111.144 40.102 111.266 40.215 111.365C40.3279 111.465 40.4608 111.538 40.6046 111.582C40.7484 111.626 40.8998 111.639 41.0489 111.619H110.947C111.096 111.639 111.247 111.626 111.391 111.582C111.535 111.538 111.667 111.465 111.78 111.365C111.893 111.266 111.984 111.144 112.046 111.007C112.108 110.87 112.14 110.722 112.14 110.571C112.14 110.421 112.108 110.273 112.046 110.136C111.984 109.999 111.893 109.877 111.78 109.777C111.667 109.678 111.535 109.604 111.391 109.561C111.247 109.517 111.096 109.504 110.947 109.524ZM44.5694 78.0701C44.5665 73.2419 45.6761 68.4779 47.812 64.1478C49.9479 59.8177 53.0528 56.038 56.8856 53.1019C60.7185 50.1657 65.1763 48.1521 69.9132 47.2174C74.65 46.2826 79.5386 46.4517 84.1995 47.7117C88.8604 48.9717 93.1684 51.2885 96.7891 54.4826C100.41 57.6766 103.246 61.662 105.078 66.1293C106.909 70.5967 107.687 75.4259 107.35 80.2424C107.013 85.0589 105.572 89.7331 103.137 93.9022C103.031 94.0829 102.982 94.291 102.995 94.4999C103.013 94.7796 103.463 101.117 106.913 109.523C99.0885 109.502 93.0433 105.282 92.9804 105.237C92.8159 105.12 92.6211 105.053 92.4194 105.044C92.2176 105.034 92.0176 105.084 91.8432 105.186C87.0697 107.973 81.6455 109.451 76.1181 109.472C70.5906 109.494 65.1553 108.057 60.3605 105.306C55.5657 102.556 51.5811 98.5901 48.8086 93.8081C46.0361 89.0262 44.5739 83.5976 44.5694 78.0701ZM87.526 109.524C89.1837 108.917 90.7907 108.181 92.3319 107.32C93.7109 108.178 95.1615 108.916 96.6675 109.524H87.526ZM67.7768 36.1905C68.0876 36.1905 68.3914 36.0983 68.6498 35.9256C68.9082 35.753 69.1096 35.5075 69.2286 35.2204C69.3475 34.9333 69.3786 34.6173 69.318 34.3125C69.2574 34.0076 69.1077 33.7276 68.8879 33.5079C68.6682 33.2881 68.3882 33.1384 68.0833 33.0778C67.7785 33.0172 67.4626 33.0483 67.1754 33.1672C66.8883 33.2862 66.6429 33.4876 66.4702 33.746C66.2975 34.0044 66.2053 34.3082 66.2053 34.619C66.2058 35.0357 66.3715 35.4351 66.6661 35.7297C66.9607 36.0244 67.3601 36.19 67.7768 36.1905ZM67.7768 33.8333C67.9322 33.8333 68.0841 33.8794 68.2133 33.9657C68.3425 34.0521 68.4432 34.1748 68.5027 34.3184C68.5622 34.4619 68.5777 34.6199 68.5474 34.7723C68.5171 34.9247 68.4422 35.0647 68.3324 35.1746C68.2225 35.2845 68.0825 35.3593 67.9301 35.3897C67.7776 35.42 67.6197 35.4044 67.4761 35.3449C67.3325 35.2855 67.2098 35.1848 67.1235 35.0556C67.0371 34.9263 66.9911 34.7744 66.9911 34.619C66.9912 34.4107 67.074 34.2109 67.2213 34.0636C67.3687 33.9163 67.5684 33.8335 67.7768 33.8333ZM114.92 68.1428C114.712 68.1428 114.51 68.2043 114.338 68.3194C114.165 68.4345 114.031 68.5981 113.952 68.7896C113.872 68.981 113.852 69.1916 113.892 69.3948C113.933 69.5981 114.032 69.7847 114.179 69.9312C114.325 70.0778 114.512 70.1775 114.715 70.218C114.918 70.2584 115.129 70.2376 115.321 70.1583C115.512 70.079 115.676 69.9448 115.791 69.7725C115.906 69.6002 115.967 69.3977 115.967 69.1905C115.967 68.9127 115.857 68.6464 115.66 68.45C115.464 68.2536 115.197 68.1431 114.92 68.1428ZM114.92 69.7143C114.816 69.7143 114.715 69.6835 114.629 69.626C114.542 69.5684 114.475 69.4866 114.436 69.3909C114.396 69.2952 114.386 69.1899 114.406 69.0883C114.426 68.9867 114.476 68.8933 114.549 68.8201C114.623 68.7468 114.716 68.6969 114.817 68.6767C114.919 68.6565 115.024 68.6669 115.12 68.7065C115.216 68.7462 115.298 68.8133 115.355 68.8994C115.413 68.9856 115.443 69.0869 115.443 69.1905C115.443 69.3293 115.388 69.4625 115.29 69.5607C115.192 69.6589 115.059 69.7141 114.92 69.7143ZM110.729 35.6667C110.522 35.6667 110.319 35.7281 110.147 35.8432C109.975 35.9583 109.841 36.1219 109.761 36.3134C109.682 36.5048 109.661 36.7154 109.702 36.9187C109.742 37.1219 109.842 37.3085 109.988 37.4551C110.135 37.6016 110.322 37.7013 110.525 37.7418C110.728 37.7822 110.939 37.7614 111.13 37.6821C111.321 37.6029 111.485 37.4686 111.6 37.2963C111.715 37.124 111.777 36.9215 111.777 36.7143C111.776 36.4365 111.666 36.1702 111.47 35.9738C111.273 35.7774 111.007 35.6669 110.729 35.6667ZM110.729 37.2381C110.626 37.2381 110.524 37.2074 110.438 37.1498C110.352 37.0922 110.285 37.0104 110.245 36.9147C110.206 36.819 110.195 36.7137 110.215 36.6121C110.236 36.5105 110.286 36.4171 110.359 36.3439C110.432 36.2706 110.525 36.2207 110.627 36.2005C110.729 36.1803 110.834 36.1907 110.93 36.2303C111.025 36.27 111.107 36.3371 111.165 36.4233C111.222 36.5094 111.253 36.6107 111.253 36.7143C111.253 36.8532 111.198 36.9863 111.099 37.0845C111.001 37.1827 110.868 37.2379 110.729 37.2381Z"
                                                    fill="#2D4356" />
                                                <path
                                                    d="M106.539 54.5238C106.331 54.5238 106.129 54.5852 105.957 54.7003C105.784 54.8154 105.65 54.9791 105.571 55.1705C105.491 55.3619 105.471 55.5726 105.511 55.7758C105.552 55.979 105.651 56.1657 105.798 56.3122C105.944 56.4587 106.131 56.5585 106.334 56.5989C106.537 56.6393 106.748 56.6186 106.94 56.5393C107.131 56.46 107.295 56.3257 107.41 56.1534C107.525 55.9811 107.586 55.7786 107.586 55.5714C107.586 55.2936 107.475 55.0273 107.279 54.8309C107.083 54.6345 106.816 54.5241 106.539 54.5238ZM106.539 56.0952C106.435 56.0952 106.334 56.0645 106.248 56.0069C106.161 55.9494 106.094 55.8676 106.055 55.7718C106.015 55.6761 106.005 55.5708 106.025 55.4692C106.045 55.3676 106.095 55.2743 106.168 55.201C106.241 55.1277 106.335 55.0779 106.436 55.0577C106.538 55.0374 106.643 55.0478 106.739 55.0875C106.835 55.1271 106.917 55.1942 106.974 55.2804C107.032 55.3665 107.062 55.4678 107.062 55.5714C107.062 55.7103 107.007 55.8434 106.909 55.9416C106.811 56.0398 106.677 56.0951 106.539 56.0952ZM51.5386 47.1904C51.5386 46.9832 51.4772 46.7807 51.362 46.6084C51.2469 46.4361 51.0833 46.3019 50.8919 46.2226C50.7005 46.1433 50.4898 46.1225 50.2866 46.163C50.0834 46.2034 49.8967 46.3032 49.7502 46.4497C49.6037 46.5962 49.5039 46.7828 49.4635 46.9861C49.4231 47.1893 49.4438 47.3999 49.5231 47.5913C49.6024 47.7828 49.7367 47.9464 49.909 48.0615C50.0812 48.1766 50.2838 48.2381 50.491 48.2381C50.7687 48.2378 51.035 48.1273 51.2315 47.9309C51.4279 47.7345 51.5383 47.4682 51.5386 47.1904ZM49.9672 47.1904C49.9672 47.0868 49.9979 46.9856 50.0554 46.8994C50.113 46.8133 50.1948 46.7462 50.2905 46.7065C50.3862 46.6669 50.4916 46.6565 50.5932 46.6767C50.6948 46.6969 50.7881 46.7468 50.8614 46.8201C50.9346 46.8933 50.9845 46.9866 51.0047 47.0883C51.0249 47.1899 51.0146 47.2952 50.9749 47.3909C50.9353 47.4866 50.8681 47.5684 50.782 47.626C50.6959 47.6835 50.5946 47.7143 50.491 47.7143C50.3521 47.7141 50.2189 47.6589 50.1207 47.5607C50.0225 47.4625 49.9673 47.3293 49.9672 47.1904Z"
                                                    fill="#2D4356" />
                                                <path
                                                    d="M37.7057 68.1486L38.4846 67.1246L37.9928 66.8459L37.4925 67.9931H37.4763L36.9682 66.8538L36.468 67.1408L37.2385 68.1408V68.157L36.0332 68.0014V68.5588L37.2463 68.4032V68.4194L36.468 69.4189L36.9347 69.7143L37.4679 68.5588H37.4842L37.976 69.7059L38.4925 69.411L37.7057 68.4273V68.4111L38.943 68.5588V68.0014L37.7057 68.1649V68.1486ZM36.7592 36.2256L36.3108 36.8013L36.5801 36.971L36.887 36.3057H36.8959L37.1793 36.9663L37.4768 36.7965L37.0237 36.2298V36.2203L37.7361 36.3057V35.9846L37.0237 36.0789V36.0695L37.4721 35.4797L37.1893 35.3194L36.9012 35.9799H36.8917L36.5989 35.3236L36.3108 35.4891L36.7545 36.0648V36.0742L36.0604 35.9846V36.3057L36.7592 36.2162V36.2256ZM119.115 48.6116V48.0653L117.901 48.2261V48.2098L118.665 47.2052L118.182 46.9317L117.692 48.0569H117.676L117.178 46.9396L116.687 47.2214L117.443 48.202V48.2182L116.26 48.0653V48.6116L117.45 48.4592V48.4754L116.687 49.456L117.145 49.7456L117.668 48.6116H117.684L118.166 49.7373L118.673 49.4481L117.901 48.4833V48.467L119.115 48.6116ZM90.5372 41.2117L91.1961 40.3448L90.7797 40.1091L90.357 41.0797H90.3428L89.9133 40.1159L89.4895 40.359L90.1417 41.2049V41.2185L89.1223 41.0871V41.5585L90.1485 41.4265V41.4406L89.4895 42.2866L89.885 42.5364L90.336 41.5585H90.3496L90.7661 42.5291L91.2029 42.2798L90.5372 41.4474V41.4333L91.5837 41.5585V41.0871L90.5372 41.2253V41.2117Z"
                                                    fill="url(#paint2_linear_967_646)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_967_646" x1="50.334" y1="71.2858" x2="57.0852" y2="96.7327" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#2F57EF" />
                                                        <stop offset="0.9375" stop-color="#C464FD" />
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_967_646" x1="57.1406" y1="113.714" x2="58.5679" y2="123.992" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#2F57EF" />
                                                        <stop offset="0.9375" stop-color="#C464FD" />
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_967_646" x1="36.0332" y1="35.3194" x2="60.3448" y2="94.0444" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#2F57EF" />
                                                        <stop offset="0.9375" stop-color="#C464FD" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>

                                        <p>{{ get_phrase('Message someone and chat right now!') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------ My wishlist area End  ------------>
@endsection
@push('js')
    <script>
        "use strict";
        $(document).ready(function() {

            $(document).on('click', function(event) {
                if (!$(event.target).closest('.search-box').length) {
                    $('#msg-search-list').removeClass('active');
                }
            });

            $('.Esearch_entry').on('click', function(e) {
                e.preventDefault();
                $('#msg-search-list').addClass('active');
            });


            $('#search_student').keyup(function(e) {
                let searchTerm = $(this).val();

                if (searchTerm.indexOf('@') !== -1) {
                    $.ajax({
                        type: "post",
                        url: "{{ route('search.student') }}",
                        data: {
                            search_mail: searchTerm
                        },
                        success: function(response) {
                            $('#msg-search-list').empty().append(response);
                        }
                    });
                }
            });
        });
    </script>
@endpush
