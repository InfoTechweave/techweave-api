<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('css/otp/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/otp/index.css') }}">
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica Neue:wght@700&display=swap"/>
  </head>
  <body>
    <div class="otp-page">
      <div class="otp-page-inner">
        <div class="frame-parent">
          <div class="welcome-to-wrapper">
            <div class="welcome-to">Welcome to</div>
          </div>
          <div class="frame-group">
            <div class="frame-container">
              <div class="verify-with-otp-wrapper">
                <div class="verify-with-otp">Verify with OTP</div>
              </div>
              <div class="otp-has-been-sent-to-pkrushang-wrapper">
                <div class="otp-has-been">
                  OTP has been sent to 
                </div>
              </div>
              <div class="change-wrapper">
                <div class="change">Change</div>
              </div>
              <div class="frame-wrapper">
                <form >
                  @csrf
                  <div class="frame-wrapper">
                     
                          <div class="frame-child"></div>
                          <input class="enter-otp" placeholder="Enter OTP" name="otp" />
                          {{-- <div class="frame-div">
                          <button class="rectangle-group" type="submit"> <div class="frame-item"></div>
                            <div class="verify">Verify</div>
                        </button>
                          </div> --}}
                  </div>
                  <div class="frame-div">
                      <button type="submit" class="rectangle-group">
                          <div class="frame-item"></div>
                          <div class="verify">Verify</div>
                      </button>
                  </div>
              </form>
              </div>
              {{-- <div class="resend-otp-in-20s-wrapper">
                <div class="resend-otp-in">Resend OTP in 20s</div>
              </div> --}}
              {{-- <div class="frame-div">
                <button class="rectangle-group">
                  <div class="frame-item"></div>
                  <div class="verify">Verify</div>
                </button>
              </div> --}}
              <div class="facing-any-issue-please-emai-wrapper">
                <div class="facing-any-issue-container">
                  <span>Facing any issue ? Please email us at </span>
                  <span class="supportmy11circlecom"
                    >support@my11circle.com</span
                  >
                </div>
              </div>
              <div class="login-with-password-wrapper">
                <div class="login-with-container">
                  <span>
                    <span>Login with </span>
                    <span class="span">- </span>
                  </span>
                  <span class="password">
                    <span>Password</span>
                  </span>
                </div>
              </div>
              <div class="just-give-a-missed-call-on-wrapper">
                <div class="just-give-a">JUST GIVE A MISSED CALL ON</div>
              </div>
              <div class="rectangle-container">
                <div class="frame-inner"></div>
                <b class="b">08010400200</b>
                <div class="download-app-now-wrapper">
                  <div class="download-app-now">Download App Now</div>
                </div>
                <img
                  class="mobile-design-1"
                  loading="lazy"
                  alt=""
                  src="{{ asset('img/otp/mobile-design-1@2x.png') }}"
                />
              </div>
            </div>
            <div class="frame-wrapper1">
              <div class="frame-parent1">
                <div class="all-rights-reserved-1-wrapper">
                  <img
                    class="all-rights-reserved-1"
                    loading="lazy"
                    alt=""
                    src="{{ asset('img/otp/all-rights-reserved-1@2x.png') }}"
                  />
                </div>
                <div class="play-games-24x7">
                  2018 Play Games 24x7 Pvt. Ltd All rights Reserved
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="frame-parent2">
        <div class="rectangle-parent1">
          <img
            class="rectangle-icon"
            alt=""
            src="{{ asset('img/otp/rectangle-31@2x.png') }}"
          /> 

          <img class="vignette-icon" alt="" src=" {{ asset('img/otp/vignette@2x.png') }}" />
         
          <img class="vignette-icon1" alt="" src=" {{ asset('img/otp/vignette@2x.png') }}" />
        </div>
        <div class="frame-parent3">
          <div class="frame-parent4">
            <button class="vector-parent">
              <img class="vector-icon" alt="" src=" {{ asset('img/otp/vector-1.svg') }}" />
             
              <div class="app-only-feature">App Only Feature</div>
            </button>
            <div class="rectangle-parent2">
              <div class="rectangle-div"></div>
              <div class="frame-wrapper2">
                <div class="vector-group">
                  <img
                    class="frame-child1"
                    alt=""
                    src="{{ asset('img/otp/vector-2.svg') }}"
                  />

                  <img class="bar-icon"
                    loading="lazy"
                    alt=""
                    src="{{ asset('img/otp/bar-icon.svg') }}"
                  />
                </div>
              </div>
              <div class="frame-wrapper3">
                <div class="missing-out-on-winning-guarant-parent">
                  <div class="missing-out-on">
                    Missing out on winning guaranteed prizes worth Crores on the
                  </div>
                  <h1 class="new-leaderboard-feature">
                    NEW LEADERBOARD FEATURE
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-wrapper4">
            <div class="to-download-our-app-give-a-mis-parent">
              <h2 class="to-download-our-container">
                <p class="to-download-our">To Download our App</p>
                <p class="give-a-missed">GIVE A MISSED CALL</p>
              </h2>
              <div class="wrapper">
                <b class="b1">8010400200</b>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-wrapper5">
          <button class="frame-button">
            <div class="frame-child2"></div>
            <div class="available-on-wrapper">
              <div class="available-on">AVAILABLE ON</div>
            </div>
            <img class="android-icon" alt="" src="{{ asset('img/otp/android.svg') }}" />
            
            <img class="apple-icon" alt="" src="{{ asset('img/otp/apple.svg') }}" />
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
