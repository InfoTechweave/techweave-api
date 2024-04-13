<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('css/home/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" />
</head>

<body>
    <div class="my-profile">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="add-cash-label-parent">
                    <div class="add-cash-label">
                        <div class="add-cash-label-child"></div>
                        <button class="rectangle-parent">
                            <div class="frame-child"></div>
                            <div class="add-cash-wrapper">
                                {{-- <div class="add-cash">Add Cash</div> --}}
                                <a href="{{ route('addcash') }}" class="add-cash">Add Cash</a>
                            </div>
                            <div class="withdrawal-label">
                                <img class="deposit-label-icon" alt=""
                                    src="{{ asset('img/home/vector-21.svg') }}" />

                                <img class="wallet-icon" alt="" src="{{ asset('img/home/wallet1@2x.png') }}" />
                            </div>
                        </button>
                        <div class="score-board">
                            <img class="score-board-child" alt=""
                                src="{{ asset('img/home/polygon-11.svg') }}" />

                            <img class="score-board-item" alt="" src="{{ asset('img/home/polygon-21.svg') }}" />

                            <img class="close-icon" loading="lazy" alt=""
                                src="{{ asset('img/home/close.svg') }}" />
                        </div>
                        <img class="icon" alt="" src="{{ asset('img/home/1-101@2x.png') }}" />
                    </div>
                    <div class="timer">
                        <div class="icon-winning-team">
                            <img class="prize-label-icon" alt="" src="{{ asset('img/home/polygon-31.svg') }}" />

                            <img class="discount-icon" loading="lazy" alt=""
                                src="{{ asset('img/home/discount1@2x.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="game-section">
                    <img class="game-section-child" alt="" src="{{ asset('img/home/rectangle-12.svg') }}" />

                    <div class="rules-link-wrapper">
                        <div class="rules-link">
                            <div class="logo-footer-wrapper">
                                <div class="logo-footer">
                                    <div class="cricket-wrapper">
                                        <img class="cricket-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/cricket@2x.png') }}" />
                                    </div>
                                    <div class="cricket">Cricket</div>
                                </div>
                            </div>
                            <div class="search-input">
                                <div class="search-icon">
                                    <img class="sport-day-3-converted-1" loading="lazy" alt=""
                                        src="{{ asset('img/home/sport-day-3-converted-1@2x.png') }}" />
                                </div>
                                <div class="kabaddi">Kabaddi</div>
                            </div>
                            <div class="setting-button">
                                <div class="profile-button">
                                    <img class="soccer-ball-icon" loading="lazy" alt=""
                                        src="{{ asset('img/home/soccer-ball@2x.png') }}" />
                                </div>
                                <div class="football">Football</div>
                            </div>
                            <div class="error-icon">
                                <div class="input-field-label">
                                    <img class="basketball-icon" loading="lazy" alt=""
                                        src="{{ asset('img/home/basketball@2x.png') }}" />
                                </div>
                                <div class="basketball">Basketball</div>
                            </div>
                        </div>
                    </div>
                    <div class="button"></div>
                    <div class="my-account-parent">
                        <div class="my-account">My Account</div>
                        <div class="frame-item"></div>
                        <div class="view-transactions">View Transactions</div>
                        <div class="frame-inner"></div>
                        <div class="withdraw">Withdraw</div>
                        <div class="line-div"></div>
                        <div class="withdraw-history">Withdraw History</div>
                        <div class="frame-child1"></div>
                        <div class="bonus-summary">Bonus Summary</div>
                        <div class="frame-child2"></div>
                        <div class="kyc-verification">KYC Verification</div>
                        <div class="frame-child3"></div>
                        <div class="join-private-contest">Join Private Contest</div>
                        <div class="frame-child4"></div>
                        <div class="points-system">Points System</div>
                        <div class="frame-child5"></div>
                        <div class="how-to-play">How To Play</div>
                        <div class="frame-child6"></div>
                        <div class="legality">Legality</div>
                        <div class="frame-child7"></div>
                        <div class="terms-of-service">Terms Of Service</div>
                        <div class="frame-child8"></div>
                        <div class="about-us">About Us</div>
                        <div class="frame-child9"></div>
                        <div class="help">Help</div>
                        <div class="frame-child10"></div>
                        <div class="log-out">Log Out</div>
                    </div>
                </div>
            </div>
            <div class="telecast-updates-wrapper">
                <div class="telecast-updates">
                    <button class="rectangle-group" onclick="showUpcoming(this)">Upcoming</button>
                    <button class="rectangle-group" onclick="showLive(this)">Live</button>
                    <button class="rectangle-group" onclick="showCompleted(this)">Completed</button>
                </div>
            </div>
            {{-- Upcoming MAtch Record --}}
            <div class="team-section-1-parent upcoming-matches">
                <div class="team-section-1">
                    <div class="european-cricket-icon">
                        <div class="frame-container">
                            <div class="i-n-d-i-a-pakistan-team-parent">
                                <div class="i-n-d-i-a-pakistan-team">
                                    <div class="european-cricket-">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-div">
                                    <div class="hms-timer-parent">
                                        <img class="hms-timer-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-wrapper">
                                            <b class="india">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="team-pakistan-icon">
                                        <div class="v-parent">
                                            <i class="v">V</i>
                                            <div class="s-wrapper">
                                                <i class="s">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="squad-members-list">
                                        <div class="prize-pool">
                                            <div class="india-flag-icon">
                                                <b class="pakistan">PAKISTAN</b>
                                            </div>
                                            <img class="prize-pool-child" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timer-h-m-s">
                                <div class="h-17m-2s">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="v-s-logo">
                        <div class="v-s-logo-child"></div>
                        <div class="wrapper-3dicons">
                            <img class="dicons" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="prize-pool-amount" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-3">
                    <div class="team-section-3-inner">
                        <div class="frame-parent1">
                            <div class="frame-parent2">
                                <div class="european-cricket-spain-t10-wrapper">
                                    <div class="european-cricket-1">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent3">
                                    <div class="ellipse-parent">
                                        <img class="ellipse-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-container">
                                            <b class="india1">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper">
                                        <div class="v-group">
                                            <i class="v1">V</i>
                                            <div class="s-container">
                                                <i class="s1">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper1">
                                        <div class="frame-parent4">
                                            <div class="pakistan-wrapper">
                                                <b class="pakistan1">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child11" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-wrapper">
                                <div class="h-17m-2s1">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-container">
                        <div class="frame-child12"></div>
                        <div class="wrapper-3dicons1">
                            <img class="dicons1" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-input" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-2">
                    <div class="team-section-2-inner">
                        <div class="frame-parent5">
                            <div class="frame-parent6">
                                <div class="european-cricket-spain-t10-container">
                                    <div class="european-cricket-2">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent7">
                                    <div class="ellipse-group">
                                        <img class="frame-child13" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-frame">
                                            <b class="india2">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper2">
                                        <div class="v-container">
                                            <i class="v2">V</i>
                                            <div class="s-frame">
                                                <i class="s2">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper3">
                                        <div class="frame-parent8">
                                            <div class="pakistan-container">
                                                <b class="pakistan2">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child14" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-container">
                                <div class="h-17m-2s2">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-parent1">
                        <div class="frame-child15"></div>
                        <div class="wrapper-3dicons2">
                            <img class="dicons2" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-child16" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-5">
                    <img class="team-section-5-child" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <div class="ellipse-container">
                        <img class="frame-child17" alt="" src="{{ asset('img/home/ellipse-6@2x.png') }}" />
                        <div class="india-wrapper1">
                            <b class="india3">INDIA</b>
                        </div>
                    </div>
                    <i class="v3">V</i>
                    <i class="s3">S</i>
                    <b class="pakistan3">PAKISTAN</b>
                    <div class="european-cricket-3">European Cricket - Spain, T10</div>
                    <div class="team-section-5-item"></div>
                    <div class="win-samsung-smartphone">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s3">1h 17m 2s</div>
                    <div class="contestant-score-label">
                        <div class="wrapper-3dicons3">
                            <img class="dicons3" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="team-section-6">
                    <img class="team-section-6-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-6-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v4">V</i>
                    <i class="s4">S</i>
                    <b class="pakistan4">PAKISTAN</b>
                    <div class="european-cricket-4">European Cricket - Spain, T10</div>
                    <div class="team-section-6-inner"></div>
                    <div class="win-samsung-smartphone1">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s4">1h 17m 2s</div>
                    <div class="team-section-6-inner1">
                        <div class="frame-parent9">
                            <div class="india-wrapper2">
                                <b class="india4">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons4">
                                <img class="dicons4" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-7">
                    <img class="team-section-7-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-7-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v5">V</i>
                    <i class="s5">S</i>
                    <b class="pakistan5">PAKISTAN</b>
                    <div class="european-cricket-5">European Cricket - Spain, T10</div>
                    <div class="team-section-7-inner"></div>
                    <div class="win-samsung-smartphone2">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s5">1h 17m 2s</div>
                    <div class="team-section-7-inner1">
                        <div class="frame-parent10">
                            <div class="india-wrapper3">
                                <b class="india5">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons5">
                                <img class="dicons5" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-4">
                    <img class="team-section-4-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-4-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v6">V</i>
                    <i class="s6">S</i>
                    <b class="pakistan6">PAKISTAN</b>
                    <div class="european-cricket-6">European Cricket - Spain, T10</div>
                    <div class="team-section-4-inner"></div>
                    <div class="win-samsung-smartphone3">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s6">1h 17m 2s</div>
                    <div class="team-section-4-inner1">
                        <div class="frame-parent11">
                            <div class="india-wrapper4">
                                <b class="india6">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons6">
                                <img class="dicons6" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Live Match Record --}}
            <div class="team-section-1-parent live-matches">
                <div class="team-section-1">
                    <div class="european-cricket-icon">
                        <div class="frame-container">
                            <div class="i-n-d-i-a-pakistan-team-parent">
                                <div class="i-n-d-i-a-pakistan-team">
                                    <div class="european-cricket-">
                                    </div>
                                </div>
                                <div class="frame-div">
                                    <div class="hms-timer-parent">
                                        <img class="hms-timer-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-wrapper">
                                            <b class="india">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="team-pakistan-icon">
                                        <div class="v-parent">
                                            <i class="v">V</i>
                                            <div class="s-wrapper">
                                                <i class="s">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="squad-members-list">
                                        <div class="prize-pool">
                                            <div class="india-flag-icon">
                                                <b class="pakistan">PAKISTAN</b>
                                            </div>
                                            <img class="prize-pool-child" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timer-h-m-s">
                                <div class="h-17m-2s">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="v-s-logo">
                        <div class="v-s-logo-child"></div>
                        <div class="wrapper-3dicons">
                            <img class="dicons" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="prize-pool-amount" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-3">
                    <div class="team-section-3-inner">
                        <div class="frame-parent1">
                            <div class="frame-parent2">
                                <div class="european-cricket-spain-t10-wrapper">
                                    <div class="european-cricket-1">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent3">
                                    <div class="ellipse-parent">
                                        <img class="ellipse-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-container">
                                            <b class="india1">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper">
                                        <div class="v-group">
                                            <i class="v1">V</i>
                                            <div class="s-container">
                                                <i class="s1">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper1">
                                        <div class="frame-parent4">
                                            <div class="pakistan-wrapper">
                                                <b class="pakistan1">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child11" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-wrapper">
                                <div class="h-17m-2s1">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-container">
                        <div class="frame-child12"></div>
                        <div class="wrapper-3dicons1">
                            <img class="dicons1" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-input" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-2">
                    <div class="team-section-2-inner">
                        <div class="frame-parent5">
                            <div class="frame-parent6">
                                <div class="european-cricket-spain-t10-container">
                                    <div class="european-cricket-2">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent7">
                                    <div class="ellipse-group">
                                        <img class="frame-child13" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-frame">
                                            <b class="india2">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper2">
                                        <div class="v-container">
                                            <i class="v2">V</i>
                                            <div class="s-frame">
                                                <i class="s2">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper3">
                                        <div class="frame-parent8">
                                            <div class="pakistan-container">
                                                <b class="pakistan2">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child14" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-container">
                                <div class="h-17m-2s2">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-parent1">
                        <div class="frame-child15"></div>
                        <div class="wrapper-3dicons2">
                            <img class="dicons2" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-child16" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-5">
                    <img class="team-section-5-child" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <div class="ellipse-container">
                        <img class="frame-child17" alt="" src="{{ asset('img/home/ellipse-6@2x.png') }}" />
                        <div class="india-wrapper1">
                            <b class="india3">INDIA</b>
                        </div>
                    </div>
                    <i class="v3">V</i>
                    <i class="s3">S</i>
                    <b class="pakistan3">PAKISTAN</b>
                    <div class="european-cricket-3">European Cricket - Spain, T10</div>
                    <div class="team-section-5-item"></div>
                    <div class="win-samsung-smartphone">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s3">1h 17m 2s</div>
                    <div class="contestant-score-label">
                        <div class="wrapper-3dicons3">
                            <img class="dicons3" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="team-section-6">
                    <img class="team-section-6-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-6-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v4">V</i>
                    <i class="s4">S</i>
                    <b class="pakistan4">PAKISTAN</b>
                    <div class="european-cricket-4">European Cricket - Spain, T10</div>
                    <div class="team-section-6-inner"></div>
                    <div class="win-samsung-smartphone1">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s4">1h 17m 2s</div>
                    <div class="team-section-6-inner1">
                        <div class="frame-parent9">
                            <div class="india-wrapper2">
                                <b class="india4">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons4">
                                <img class="dicons4" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-7">
                    <img class="team-section-7-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-7-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v5">V</i>
                    <i class="s5">S</i>
                    <b class="pakistan5">PAKISTAN</b>
                    <div class="european-cricket-5">European Cricket - Spain, T10</div>
                    <div class="team-section-7-inner"></div>
                    <div class="win-samsung-smartphone2">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s5">1h 17m 2s</div>
                    <div class="team-section-7-inner1">
                        <div class="frame-parent10">
                            <div class="india-wrapper3">
                                <b class="india5">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons5">
                                <img class="dicons5" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-4">
                    <img class="team-section-4-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-4-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v6">V</i>
                    <i class="s6">S</i>
                    <b class="pakistan6">PAKISTAN</b>
                    <div class="european-cricket-6">European Cricket - Spain, T10</div>
                    <div class="team-section-4-inner"></div>
                    <div class="win-samsung-smartphone3">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s6">1h 17m 2s</div>
                    <div class="team-section-4-inner1">
                        <div class="frame-parent11">
                            <div class="india-wrapper4">
                                <b class="india6">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons6">
                                <img class="dicons6" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Completed Match Record --}}
            <div class="team-section-1-parent completed-matches">
                <div class="team-section-1">
                    <div class="european-cricket-icon">
                        <div class="frame-container">
                            <div class="i-n-d-i-a-pakistan-team-parent">
                                <div class="i-n-d-i-a-pakistan-team">
                                    <div class="european-cricket-">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-div">
                                    <div class="hms-timer-parent">
                                        <img class="hms-timer-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-wrapper">
                                            <b class="india">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="team-pakistan-icon">
                                        <div class="v-parent">
                                            <i class="v">V</i>
                                            <div class="s-wrapper">
                                                <i class="s">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="squad-members-list">
                                        <div class="prize-pool">
                                            <div class="india-flag-icon">
                                                <b class="pakistan">PAKISTAN</b>
                                            </div>
                                            <img class="prize-pool-child" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timer-h-m-s">
                                <div class="h-17m-2s">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="v-s-logo">
                        <div class="v-s-logo-child"></div>
                        <div class="wrapper-3dicons">
                            <img class="dicons" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="prize-pool-amount" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-3">
                    <div class="team-section-3-inner">
                        <div class="frame-parent1">
                            <div class="frame-parent2">
                                <div class="european-cricket-spain-t10-wrapper">
                                    <div class="european-cricket-1">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent3">
                                    <div class="ellipse-parent">
                                        <img class="ellipse-icon" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-container">
                                            <b class="india1">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper">
                                        <div class="v-group">
                                            <i class="v1">V</i>
                                            <div class="s-container">
                                                <i class="s1">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper1">
                                        <div class="frame-parent4">
                                            <div class="pakistan-wrapper">
                                                <b class="pakistan1">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child11" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-wrapper">
                                <div class="h-17m-2s1">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-container">
                        <div class="frame-child12"></div>
                        <div class="wrapper-3dicons1">
                            <img class="dicons1" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-input" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-2">
                    <div class="team-section-2-inner">
                        <div class="frame-parent5">
                            <div class="frame-parent6">
                                <div class="european-cricket-spain-t10-container">
                                    <div class="european-cricket-2">
                                        European Cricket - Spain, T10
                                    </div>
                                </div>
                                <div class="frame-parent7">
                                    <div class="ellipse-group">
                                        <img class="frame-child13" loading="lazy" alt=""
                                            src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                                        <div class="india-frame">
                                            <b class="india2">INDIA</b>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper2">
                                        <div class="v-container">
                                            <i class="v2">V</i>
                                            <div class="s-frame">
                                                <i class="s2">S</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper3">
                                        <div class="frame-parent8">
                                            <div class="pakistan-container">
                                                <b class="pakistan2">PAKISTAN</b>
                                            </div>
                                            <img class="frame-child14" loading="lazy" alt=""
                                                src="{{ asset('img/home/ellipse-7@2x.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-17m-2s-container">
                                <div class="h-17m-2s2">1h 17m 2s</div>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-parent1">
                        <div class="frame-child15"></div>
                        <div class="wrapper-3dicons2">
                            <img class="dicons2" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                        <input class="frame-child16" placeholder="Win Samsung Smartphone + ₹1 Lakh as 1st Prize"
                            type="text" />
                    </div>
                </div>
                <div class="team-section-5">
                    <img class="team-section-5-child" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <div class="ellipse-container">
                        <img class="frame-child17" alt="" src="{{ asset('img/home/ellipse-6@2x.png') }}" />
                        <div class="india-wrapper1">
                            <b class="india3">INDIA</b>
                        </div>
                    </div>
                    <i class="v3">V</i>
                    <i class="s3">S</i>
                    <b class="pakistan3">PAKISTAN</b>
                    <div class="european-cricket-3">European Cricket - Spain, T10</div>
                    <div class="team-section-5-item"></div>
                    <div class="win-samsung-smartphone">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s3">1h 17m 2s</div>
                    <div class="contestant-score-label">
                        <div class="wrapper-3dicons3">
                            <img class="dicons3" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="team-section-6">
                    <img class="team-section-6-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-6-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v4">V</i>
                    <i class="s4">S</i>
                    <b class="pakistan4">PAKISTAN</b>
                    <div class="european-cricket-4">European Cricket - Spain, T10</div>
                    <div class="team-section-6-inner"></div>
                    <div class="win-samsung-smartphone1">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s4">1h 17m 2s</div>
                    <div class="team-section-6-inner1">
                        <div class="frame-parent9">
                            <div class="india-wrapper2">
                                <b class="india4">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons4">
                                <img class="dicons4" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-7">
                    <img class="team-section-7-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-7-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v5">V</i>
                    <i class="s5">S</i>
                    <b class="pakistan5">PAKISTAN</b>
                    <div class="european-cricket-5">European Cricket - Spain, T10</div>
                    <div class="team-section-7-inner"></div>
                    <div class="win-samsung-smartphone2">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s5">1h 17m 2s</div>
                    <div class="team-section-7-inner1">
                        <div class="frame-parent10">
                            <div class="india-wrapper3">
                                <b class="india5">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons5">
                                <img class="dicons5" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-section-4">
                    <img class="team-section-4-child" alt=""
                        src="{{ asset('img/home/ellipse-6@2x.png') }}" />

                    <img class="team-section-4-item" alt=""
                        src="{{ asset('img/home/ellipse-7@2x.png') }}" />

                    <i class="v6">V</i>
                    <i class="s6">S</i>
                    <b class="pakistan6">PAKISTAN</b>
                    <div class="european-cricket-6">European Cricket - Spain, T10</div>
                    <div class="team-section-4-inner"></div>
                    <div class="win-samsung-smartphone3">
                        Win Samsung Smartphone + ₹1 Lakh as 1st Prize
                    </div>
                    <div class="h-17m-2s6">1h 17m 2s</div>
                    <div class="team-section-4-inner1">
                        <div class="frame-parent11">
                            <div class="india-wrapper4">
                                <b class="india6">INDIA</b>
                            </div>
                            <div class="wrapper-3dicons6">
                                <img class="dicons6" alt="" src="{{ asset('img/home/3dicons@2x.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame-parent12">
            <div class="rectangle-parent2">
                <img class="rectangle-icon" alt="" src="{{ asset('img/home/rectangle-31@2x.png') }}" />

                <img class="vignette-icon" alt="" src="{{ asset('img/home/vignette1@2x.png') }}" />

                <img class="vignette-icon1" alt="" src="{{ asset('img/home/vignette1@2x.png') }}" />
            </div>
            <img class="vignette-icon2" alt="" src="{{ asset('img/home/vignette1@2x.png') }}" />
        </div>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.querySelector('.close-icon');
        const sideMenu = document.querySelector('.my-account-parent');

        closeButton.addEventListener('click', function() {
            sideMenu.classList.toggle('hidden');
        });
    });
   
    function showUpcoming(button) {
        document.querySelectorAll('.rectangle-group').forEach(btn => {
            btn.classList.remove('selected');
        });
        button.classList.add('selected');
        document.querySelector('.upcoming-matches').style.display = 'block';
        document.querySelector('.live-matches').style.display = 'none';
        document.querySelector('.completed-matches').style.display = 'none';
    }

    function showLive(button) {
        document.querySelectorAll('.rectangle-group').forEach(btn => {
            btn.classList.remove('selected');
        });
        button.classList.add('selected');

        document.querySelector('.upcoming-matches').style.display = 'none';
        document.querySelector('.live-matches').style.display = 'block';
        document.querySelector('.completed-matches').style.display = 'none';
    }

    function showCompleted(button) {
        document.querySelectorAll('.rectangle-group').forEach(btn => {
            btn.classList.remove('selected');
        });
        button.classList.add('selected');
        document.querySelector('.upcoming-matches').style.display = 'none';
        document.querySelector('.live-matches').style.display = 'none';
        document.querySelector('.completed-matches').style.display = 'block';
    }
</script>


<style>
   .my-account-parent.hidden {
        display: none;
    }

    .telecast-updates-wrapper {
        display: flex;
    }

    .rectangle-group {
        background-color: #ccc;
        /* Default background color */
    }

    .rectangle-group.selected {
        background-color: #007bff;
        /* Selected background color */
        color: #fff;
        /* Text color when selected */
    }

    .live-matches,
    .completed-matches {
        display: none; /* Initially hide these sections */
    }
</style>
