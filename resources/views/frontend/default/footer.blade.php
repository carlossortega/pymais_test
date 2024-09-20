  <!-----------  Footer Area Start   ------------->
  <footer class="footer-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4">
                  <div class="footer-content">
                      <img src="{{ asset('assets/frontend/pymais/images/logo.svg') }}" alt="logo">
                      <p class="description">
                          {{ get_phrase('It is a long established fact that a reader will be the distract by the read content of a page layout.') }}
                      </p>
                      <ul class="f-socials d-flex">
                          <li><a href="{{ get_frontend_settings('twitter') }}"><i class="fa-brands fa-twitter"></i></a>
                          </li>
                          <li><a href="{{ get_frontend_settings('facebook') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                          <li><a href="{{ get_frontend_settings('linkedin') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8">
                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <div class="footer-widget">
                              <h4>{{ get_phrase('Useful Links') }}</h4>
                              <ul>
                                <li><a href="{{route('register')}}">{{get_phrase('Become a participant')}}</a></li>
                                <li><a href="#">{{get_phrase('All courses')}}</a></li>
                                <li><a href="{{route('sme.signup')}}">{{get_phrase('Sign up')}}</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="footer-widget">
                              <h4>{{ get_phrase('Help') }}</h4>
                              <ul>
                                  <li><a href="{{ route('contact.us') }}">{{ get_phrase('Contact Us') }}</a></li>
                                  <li><a href="{{ route('about.us') }}">{{ get_phrase('About Us') }}</a></li>
                                  <li><a href="#">{{ get_phrase('FAQ') }}</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <ul class="footer-policy">
                          <li><a href="{{ route('about.us') }}">{{ get_phrase('About Us') }}</a></li>
                          <li><a href="{{ route('privacy.policy') }}">{{ get_phrase('Privacy Policy') }}</a></li>
                          <li><a href="{{ route('terms.condition') }}">{{ get_phrase('Terms And Use') }}</a></li>
                          <li><a href="{{ route('refund.policy') }}">{{ get_phrase('Sales and Refunds') }}</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4">
                      <div class="copyright-text">
                          <p>© PYMAIS @php echo date('Y')@endphp {{ get_phrase('All Rights Reserved') }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-----------  Footer Area End   ------------->
