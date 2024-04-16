<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    {{-- <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/login/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/index.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica Neue:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
</head>

<body>
    <div class="desktop-2">
        <div class="desktop-2-inner">
            <div class="rectangle-parent">
                <img class="frame-child" alt="" src="{{ asset('img/login/rectangle-31@2x.png') }}" />

                <div class="vignette-parent">
                    <img class="vignette-icon" alt="" src="{{ asset('img/login/vignette@2x.png') }}" />

                    <img class="vignette-icon1" alt="" src="{{ asset('img/login/vignette@2x.png') }}" />

                    <b class="download-message">8010400200</b>
                    <h3 class="to-download-our-container">
                        <p class="to-download-our">To Download our App</p>
                        <p class="give-a-missed">GIVE A MISSED CALL</p>
                    </h3>
                    <div class="prize-info">
                        <div class="prize-info-child"></div>
                        <div class="missing-out-on">
                            Missing out on winning guaranteed prizes worth Crores on the
                        </div>
                        <b class="new-leaderboard-feature">NEW LEADERBOARD FEATURE</b>
                        <div class="vector-parent">
                            <img class="frame-item" alt="" src="{{ asset('img/login/vector-2.svg') }}" />

                            <img class="bar-icon" alt="" src="{{ asset('img/login/bar-icon.svg') }}" />
                        </div>
                    </div>
                    <button class="login-form">
                        <img class="app-features-icon" alt="" src="{{ asset('img/login/app-features.svg') }}" />

                        <div class="app-only-feature">App Only Feature</div>
                    </button>
                    <button class="rectangle-group">
                        <div class="frame-inner"></div>
                        <div class="available-on">AVAILABLE ON</div>
                        <img class="android-icon" alt="" src="{{ asset('img/login/android.svg') }}" />

                        <img class="apple-icon" alt="" src="{{ asset('img/login/apple.svg') }}" />
                    </button>
                </div>
            </div>
        </div>
        <img class="screenshot-5-1" alt="" src="{{ asset('img/login/screenshot-5-1@2x.png') }}" />

        <img class="mobile-design-1" loading="lazy" alt=""
            src="{{ asset('img/login/mobile-design-1@2x.png') }}" />

        <div class="frame-parent">
            <div class="welcome-to-wrapper">
                <div class="welcome-to">Welcome to</div>
            </div>
            <div class="continue-button">
                <div class="login-wrapper">
                    <div class="login">LOGIN</div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="continue-button-inner">
                    <div class="rectangle-container">
                        <div class="rectangle-div"></div>
                        <div class="user-i-d-label">
                            <img class="email-1-icon" alt="" src="{{ asset('img/login/email-1.svg') }}" />
                        </div>
                        <div class="registration-button"></div>
                        <input class="forgot-password-link" placeholder="Mobile Number"  name="mobile_number" type="number" />
                    </div> 
                </div>
                <div class="login-register-call">
                    <button class="missing-call-message" type="submit">
                        <div class="missing-call-message-child"></div>
                        <div class="continue">CONTINUE</div>
                    </button>
                </div>
                </form>
                <div class="continue-button-child">
                    <div class="frame-group">
                        <div class="privacy-policy-link-parent">
                            <div class="privacy-policy-link"></div>
                            <div class="help-support-link">18+</div>
                        </div>
                        <div class="by-logging-in-you-accept-you-wrapper">
                            <div class="by-logging-in-container">
                                <span class="tc-privacy">By logging in, you accept you are 18+ and agree to our
                                </span>
                                <span class="tc-privacy">T&C & Privacy Policy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loginregister-using-mobile-wrapper">
                    <div class="loginregister-using-container">
                        <span>
                            <span>Login/Register using</span>
                            <span class="span"> - </span>
                        </span>
                        {{-- <span class="">
                <span></span>
              </span> --}}
                        <a href="{{ route('register') }}">Mobile Number</a>
                    </div>
                </div>
                <div class="just-give-a-missed-call-on-wrapper">
                    <div class="just-give-a">JUST GIVE A MISSED CALL ON</div>
                </div>
                <div class="login-register-message">
                    <div class="rights-reserved-box">
                        <div class="rights-reserved-box-child"></div>
                        <b class="b">08010400200</b>
                        <div class="missed-call-c-t-a">
                            <div class="download-app-now">Download App Now</div>
                        </div>
                    </div>
                </div>
                <div class="rights-reserved">
                    <div class="mobile-num-login">
                        <div class="call-to-action">
                            <img class="all-rights-reserved-1" loading="lazy" alt=""
                                src="{{ asset('img/login/all-rights-reserved-1@2x.png') }}" />
                        </div>
                        <div class="play-games-24x7">
                            2018 Play Games 24x7 Pvt. Ltd All rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
