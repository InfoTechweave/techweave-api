<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/register/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica Neue:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
</head>

<body>
    <?php
        /* Please replace XXXXXXXXXX with client id shown under profile section in admin dashboard (https://admin.phone.email) */
        $CLIENT_ID = '18373326995746576499';
        $REDIRECT_URL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $AUTH_URL = 'https://auth.phone.email/log-in?client_id='.$CLIENT_ID.'&redirect_url=http://localhost:8000/home';
    ?>

    <div class="register-page">
        <div class="register-page-inner">
            <div class="rectangle-parent">
                <img class="frame-child" alt="" src="{{ asset('img/register/rectangle-31@2x.png') }}" />
                <div class="vignette-parent">
                    <img class="vignette-icon" alt="" src="{{ asset('img/register/vignette@2x.png') }}" />
                    <img class="vignette-icon1" alt="" src="{{ asset('img/register/vignette@2x.png') }}" />
                    <b class="b">8010400200</b>
                    <h3 class="to-download-our-container">
                        <p class="to-download-our">To Download our App</p>
                        <p class="give-a-missed">GIVE A MISSED CALL</p>
                    </h3>
                    <div class="rectangle-group">
                        <div class="frame-item"></div>
                        <div class="missing-out-on">
                            Missing out on winning guaranteed prizes worth Crores on the
                        </div>
                        <b class="new-leaderboard-feature">NEW LEADERBOARD FEATURE</b>
                        <div class="vector-parent">
                            <img class="frame-inner" alt="" src="{{ asset('img/register/vector-2.svg') }}" />

                            <img class="bar-icon" alt="" src="{{ asset('img/register/bar-icon.svg') }}" />
                        </div>
                    </div>
                    <button class="vector-group">
                        <img class="vector-icon" alt="" src="{{ asset('img/register/vector-1.svg') }}" />
                        <div class="app-only-feature">App Only Feature</div>
                    </button>
                    <button class="available-on">
                        <div class="available-on-child"></div>
                        <div class="available-on1">AVAILABLE ON</div>
                        <img class="android-icon" alt="" src="{{ asset('img/register/android.svg') }}" />
                        <img class="apple-icon" alt="" src="{{ asset('img/register/apple.svg') }}" />
                    </button>
                </div>
            </div>
        </div>
        <img class="screenshot-5-1" alt="" src="{{ asset('img/register/screenshot-5-1@2x.svg') }}" />
        <img class="mobile-design-1" loading="lazy" alt=""
            src="{{ asset('img/register/mobile-design-1@2x.png') }}" />
        <div class="frame-parent">
            <div class="welcome-to-wrapper">
                <div class="welcome-to">Welcome to</div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="frame-group">
                    <div class="login-register-wrapper">
                        <div class="login-register">LOGIN / REGISTER</div>
                    </div>
                    <div class="frame-wrapper">
                        <div class="rectangle-container">
                            <div class="rectangle-div"></div>
                            <div class="call-1-wrapper">
                                <img class="call-1-icon" alt=""
                                    src="{{ asset('img/register/call-1@2x.png') }}" />
                            </div>
                            <div class="line-div"></div>
                            <input class="frame-input" placeholder="Enter Mobile Number" type="text"
                                name="email" />
                        </div>
                    </div>
                    <div class="frame-container">
                        <button type="submit" class="frame-button">
                            <div class="frame-child1"></div>
                            <div class="continue">CONTINUE</div>
                        </button>
                    </div>
            </form>
            <button
            style="display: flex; align-items: center; justify-content:center; padding: 14px 20px; background-color: #02BD7E; font-weight: bold; color: #ffffff; border: none; border-radius: 3px; font-size: inherit;cursor:pointer; max-width:320px; width:100%"
            id="btn_ph_login" name="btn_ph_login" type="button"
            onclick="window.open('<?php echo $AUTH_URL; ?>', 'peLoginWindow', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0, width=500, height=560, top=' + (screen.height - 600) / 2 + ', left=' + (screen.width - 500) / 2);">
            <img src="https://storage.googleapis.com/prod-phoneemail-prof-images/phem-widgets/phem-phone.svg"
                alt="phone email" style="margin-right:10px;">
            Sign In with Phone
        </button>
            <div class="frame-div">
                <div class="frame-parent1">
                    <div class="ellipse-parent">
                        <div class="ellipse-div"></div>
                        <div class="div">18+</div>
                    </div>
                    <div class="by-logging-in-you-accept-you-wrapper">
                        <div class="by-logging-in-container">
                            <span>By logging in, you accept you are 18+ and agree to our
                            </span>
                            <span class="tc-privacy">T&C & Privacy Policy</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-using-email-wrapper">
                <div class="login-using-container">
                    <span>
                        <span>Login Using</span>
                        <span class="span"> - </span>
                    </span>
                    <a href="{{ route('login') }}">Email</a>
                </div>
            </div>
            <div class="just-give-a-missed-call-on-wrapper">
                <div class="just-give-a">JUST GIVE A MISSED CALL ON</div>
            </div>
            <div class="frame-wrapper1">
                <div class="rectangle-parent1">
                    <div class="frame-child2"></div>
                    <b class="b1">08010400200</b>
                    <div class="download-app-now-wrapper">
                        <div class="download-app-now">Download App Now</div>
                    </div>
                </div>
            </div>
            <div class="frame-wrapper2">
                <div class="frame-parent2">
                    <div class="all-rights-reserved-1-wrapper">
                        <img class="all-rights-reserved-1" loading="lazy" alt=""
                            src="{{ asset('img/register/all-rights-reserved-1@2x.png') }}" />
                    </div>
                    <div class="play-games-24x7">
                        2018 Play Games 24x7 Pvt. Ltd All rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div id="pheIncludedContent"></div>
<script src="https://auth.phone.email/login_automated_v1_3.js"></script>
<script>
  var reqJson='{"client_id":"18373326995746576499","button_text":"Sign in with Phone","email_icon_position":"left","redirect_url":"{{ route("home") }}"}';
log_in_with_phone(reqJson);
</script> --}}
</body>

</html>
