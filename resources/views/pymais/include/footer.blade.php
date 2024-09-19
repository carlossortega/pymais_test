<footer class="ep-footer ep-footer--style2 position-relative">
    <div class="ep-footer__overlay"></div>
    <div class="container ep-container">
        <div class="ep-footer__top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-footer__widget footer-about">
                        <div class="ep-footer__logo ep-footer__logo--style2">
                            <a href="index.html">
                                <img src="{{asset('assets/frontend/pymais/images/logo-2.svg')}}" alt="footer-logo" />
                            </a>
                        </div>
                        <p class="ep-footer__text mg-top-46"> Modernize, engage and promote: A proven acceleration program to strengthen & professionalize industry supply chain.
                        </p>
                        <div class="ep-footer__social mg-top-42">
                            <h5 class="ep-footer__social-title">Follow Us</h5>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-footer__widget footer-services--style2">
                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Useful Links </h4>
                        <ul class="ep-footer__links-list ep-footer__links-list--style2">
                            <li>
                                <a href="#">
                                    <i class="fi fi-br-angle-double-small-right ep10-color"></i>Become a participant </a>
                            </li>
                            <li>
                                <a href="ß">
                                    <i class="fi fi-br-angle-double-small-right ep10-color"></i>All courses </a>
                            </li>
                            <li>
                                <a href="ß">
                                    <i class="fi fi-br-angle-double-small-right ep10-color"></i>Sign up </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-footer__widget footer-contact">
                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Help </h4>
                        <div class="ep-footer__contact">
                            <div class="ep-footer__contact-single">
                                <div class="ep-footer__contact-info">
                                    <span>Contact Us</span>
                                </div>
                            </div>
                            <div class="ep-footer__contact-single">
                                <div class="ep-footer__contact-info">
                                    <span>About Us</span>
                                </div>
                            </div>
                            <div class="ep-footer__contact-single">
                                <div class="ep-footer__contact-info">
                                    <span>FAQ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="col-lg-3 col-md-6 col-12">
                    <div class="ep-footer__widget footer-newsletter">
                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Newsletter </h4>
                        <p class="ep-footer__text m-0"> Subscribe to our newletter and stay up with the latest news. </p>
                        <form action="{{ route('newsletter.store') }}" method="post" class="ep-footer__newsletter ep-footer__newsletter--style2 mg-top-30">
                            @csrf
                            <input type="email" name="email" placeholder="Your e-mail" required />
                            <button type="submit">
                                <i class="fi fi-ss-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>  --}}
            </div>
        </div>
        <div class="ep-footer__bottom">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ep-footer__copyright">
                        <p> © PYMAIS @php echo date('Y'); @endphp | All Rights Reserved </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ep-footer__bottom-link">
                        <ul>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ep-footer__brand">
        {{--  <img src="{{asset('assets/frontend/pymais/images/logo-2.svg')}}" alt="footer-brand-name" />  --}}
    </div>
</footer>
