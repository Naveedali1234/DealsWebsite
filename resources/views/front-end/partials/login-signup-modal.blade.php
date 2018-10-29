<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="container">
                           <div class="row text-left">
                              <div class="col-md-12 p0">
                                 <div class="modal-tab-section wd-modal-tabs">
                                    <ul class="nav nav-tabs wd-modal-tab-menu text-center" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-expanded="true">Login</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up">Sign up</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                       <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                          <div class="row">
                                             <div class="col-md-6 p0 brand-description-area">
                                                <img src="{{URL::asset('assets/img/login-img-1.jpg')}}" class="img-fluid" alt="">
                                                <div class="brand-description">
                                                   <div class="brand-logo">
                                                      <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
                                                   </div>
                                                   <div class="modal-description">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
                                                   </div>
                                                   <ul class="list-unstyled">
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media my-4">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="col-md-12 col-lg-6 p0">
                                                <div class="login-section text-center">
                                                   <div class="social-media">
                                                      <a href="{{ url('/auth/facebook') }}" class="facebook-bg"><i class="fa fa-facebook" aria-hidden="true"></i> Login</a>
                                                      
                                                      <a href="{{ url('/auth/google') }}" class="google-bg"><i class="fa fa" aria-hidden="true"></i>Google Login</a>
                                                   </div>
                                                   <div class="login-form text-left">
                                                      <form method="POST" action="{{ route('login') }}">
                                                         @csrf
                                                         <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Johnmist@gmail.com |">
                                                            @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="*********">
                                                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                         </div>
                                                         <button type="submit" class="btn btn-primary wd-login-btn">LOGIN</button>
                                                         <div class="form-check">
                                                            <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Save this password
                                                            </label>
                                                         </div>
                                                         <div class="wd-policy">
                                                            <p>
                                                               By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
                                                            </p>
                                                         </div>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                                          <div class="row">
                                             <div class="col-md-6 p0 brand-login-section">
                                                <img src="{{URL::asset('assets/img/login-img-2.jpg')}}" class="img-fluid" alt="">
                                                <div class="brand-description">
                                                   <div class="brand-logo">
                                                      <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
                                                   </div>
                                                   <div class="modal-description">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
                                                   </div>
                                                   <ul class="list-unstyled">
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media my-4">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="col-md-6 p0">
                                                <div class="sign-up-section text-center">
                                                   <div class="login-form text-left">
                                                      <form method="POST" action="/register">
                                                         @csrf
                                                         <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" placeholder="John Smith" name="username">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" id="password" placeholder="*********" name="password">
                                                         </div>
                                                         <button type="submit" class="btn btn-primary wd-login-btn">Sign Up</button>
                                                         <div class="wd-policy">
                                                            <p>
                                                               By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
                                                            </p>
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>