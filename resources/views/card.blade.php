<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/card/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" />
</head>
<body>
    <div class="debit-card">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="frame-wrapper">
                    <div class="title-section-parent">
                        <img class="title-section-icon" alt=""
                            src="{{ asset('img/card/title-section.svg') }}" />
                        <a href="{{ route('addcash') }}">
                            <img class="arrow-1-icon" loading="lazy" alt=""
                                src="{{ asset('img/card/arrow-1.svg') }}" />
                        </a>
                        <img class="main-logo-1" loading="lazy" alt=""
                            src="{{ asset('img/card/main-logo-1@2x.png') }}" />
                    </div>
                </div>
                <div class="rectangle-parent">
                    <div class="frame-child"></div>
                    <div class="amount-to-pay-container">
                        <span class="amount-to-pay">Amount to Pay: </span>
                        <span class="span">₹1000</span>
                    </div>
                </div>
            </div>
            <div class="frame-wrapper2">
                <div class="frame-parent1">
                    <div class="frame-parent2">
                        <div class="enter-card-number-label-parent">
                            <div class="enter-card-number-label">
                                <div class="debit-cards-container">
                                    <div class="frame-parent3">
                                        <div class="frame-wrapper3">
                                            <div class="ellipse-parent">
                                                <input type="radio" id="credit_card" name="payment_method"
                                                    value="credit_card" checked>
                                            </div>
                                        </div>
                                        <div class="debit-card1">Credit Card</div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-parent4 nilay">
                                <div class="wrapper-frame-27">
                                    <input class="wrapper-frame-27-child" placeholder="Enter Card Number" type="text" />

                                <div class="rectangle-group">
                                    <div class="rectangle-div"></div>
                                    <div class="enter-card-number">Enter Card Number</div>
                                </div>
                            </div>
                                <div class="expiry-date-parent">
                                    <div class="expiry-date">Expiry Date</div>
                                    <input class="expiry-date-container" placeholder="MM/YY" type="text" />
                                </div>
                                <div class="layout-for-c-v-v-and-enter-nam">
                                    <div class="cvv">CVV</div>
                                    <input class="expiry-date-container" placeholder="CVV" type="text" />
                                </div>
                                <div class="layout-for-c-v-v-and-enter-nam1">
                                    <input class="enter-name" placeholder="Enter Name" type="text" />

                                    <div class="layout-for-c-v-v-and-enter-nam-item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="enter-card-number-label-parent">
                            <div class="enter-card-number-label">
                                <div class="debit-cards-container">
                                    <div class="frame-parent3">
                                        <div class="frame-wrapper3">
                                            <div class="ellipse-parent">
                                                <input type="radio" id="DEBIT_card" name="payment_method"
                                                    value="DEBIT_card">
                                            </div>
                                        </div>
                                        <div class="debit-card1">Debit Card</div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-parent4 nilay1">
                                <div class="wrapper-frame-27">
                               
                                <input class="wrapper-frame-27-child" placeholder="Enter Card Number" type="text" />

                                <div class="rectangle-group">
                                    <div class="rectangle-div"></div>
                                    <div class="enter-card-number">Enter Card Number</div>
                                </div>
                            </div>
                                <div class="expiry-date-parent">
                                    <div class="expiry-date">Expiry Date</div>
                                    <input class="expiry-date-container" placeholder="MM/YY" type="text" />
                                </div>
                                <div class="layout-for-c-v-v-and-enter-nam">
                                    <div class="cvv">CVV</div>
                                    <input class="expiry-date-container" placeholder="CVV" type="text" />
                                </div>
                                <div class="layout-for-c-v-v-and-enter-nam1">
                                    <input class="enter-name" placeholder="Enter Name" type="text" />

                                    <div class="layout-for-c-v-v-and-enter-nam-item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="net-banking-container">
                            <div class="frame-wrapper1">
                                <input type="radio" id="net_banking" name="payment_method" value="net_banking">
                            </div>
                            <div class="net-banking1">Net Banking</div>
                            <div class="net-banking-item"></div>
                           <div class="net">
                            <img class="rectangle-icon" loading="lazy" alt=""
                                src="{{ asset('img/card//Newfolder/rectangle-296@2x.png') }}" />

                            <img class="net-banking-child1" loading="lazy" alt=""
                                src="{{ asset('img/card//Newfolder/rectangle-297@2x.png') }}" />

                            <img class="net-banking-child2" loading="lazy" alt=""
                                src="{{ asset('img/card//Newfolder/rectangle-298@2x.png') }}" />
                           </div>
                        </div>
                        <div class="you-must-be-to-play-a-p-t-warn">
                            <div class="warning-with-vignette-shape">
                                <button class="rectangle-container">
                                    <div class="frame-child1"></div>
                                    <b class="next">Next</b>
                                </button>
                                <div class="layout-with-age-verification-a-wrapper">
                                    <div class="layout-with-age-verification-a">
                                        <img class="paytm-icon" loading="lazy" alt=""
                                            src="{{ asset('img/card/paytm.svg') }}" />

                                        <img class="visa-icon" loading="lazy" alt=""
                                            src="{{ asset('img/card/visa.svg') }}" />

                                        <img class="master-card-icon" loading="lazy" alt=""
                                            src="{{ asset('img/card/master-card.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="warning-message">
                        <div class="you-must-be-18-to-play-andhr-parent">
                            <div class="you-must-be-container">
                                <p class="you-must-be">You must be 18+ to play.</p>
                                <p class="andhra-pradesh-telangana">
                                    Andhra Pradesh, Telangana, Sikkim, Nagaland and Assam
                                    players are not allowed to play cash
                                </p>
                                <p class="games">games.</p>
                            </div>
                            <img class="warning-1-icon" loading="lazy" alt=""
                                src="{{ asset('img/card/warning-1.svg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="name-input">
            <div class="m-m-y-y-field-parent">
                <img class="m-m-y-y-field" alt="" src=" {{ asset('img/card/rectangle-31@2x.png') }}" />

                <img class="vignette-icon" alt="" src="{{ asset('img/card/vignette1@2x.png') }}" />

                <img class="vignette-icon1" alt="" src="{{ asset('img/card/vignette1@2x.png') }}" />
            </div>
            <img class="vignette-icon2" alt="" src="{{ asset('img/card/vignette1@2x.png') }}" />
        </div>
    </div>
</body>
</html>
<script>

document.addEventListener("DOMContentLoaded", function () {
    const creditCardRadio = document.getElementById('credit_card');
    const debitCardRadio = document.getElementById('DEBIT_card');
    const netBankingRadio = document.getElementById('net_banking');
    const creditCardDetails = document.querySelector('.nilay');
    const debitCardDetails = document.querySelector('.nilay1');
    const netDetails = document.querySelector('.net');

    debitCardDetails.style.display = 'none';
    netDetails.style.display = 'none';

    creditCardRadio.addEventListener('click', function () {
        creditCardDetails.style.display = 'block';
        debitCardDetails.style.display = 'none';
        netDetails.style.display = 'none';
    });

    debitCardRadio.addEventListener('click', function () {
        creditCardDetails.style.display = 'none';
        debitCardDetails.style.display = 'block';
        netDetails.style.display = 'none';
    });

    netBankingRadio.addEventListener('click', function () {
        creditCardDetails.style.display = 'none';
        debitCardDetails.style.display = 'none';
        netDetails.style.display = 'block';
    });
});

</script>