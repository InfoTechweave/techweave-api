<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('css/addcash/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addcash/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
</head>

<body>
    <div class="add-cash">
        <div class="frame-parent">
            <div class="frame-wrapper">
                <div class="title-section-parent">
                    <img class="title-section-icon" alt="" src="{{ asset('img/addcash/title-section.svg') }}" />
                    <a href="{{ route('home') }}">
                    <img class="arrow-1-icon" loading="lazy" alt="" src="{{ asset('img/addcash/arrow-1.svg') }}" />
                    </a>
                </div>
            </div>
            <div class="frame-container">
                <div class="frame-group">
                    <div class="frame-div">
                        <div class="parent">
                            <div class="div" onclick="toggleSelection(this)">
                                <div class="currency-symbols"></div>
                                <div class="child"></div>
                                <div class="bonus-cash-labels">
                                    <div class="div1">₹500</div>
                                </div>
                                <div class="bonus-cash">₹500 Bonus Cash</div>
                            </div>
                            <div class="rectangle-parent" onclick="toggleSelection(this)">
                                <div class="frame-child"></div>
                                <div class="frame-item"></div>
                                <div class="wrapper">
                                    <div class="div2">₹100</div>
                                </div>
                                <div class="bonus-cash1">₹50 Bonus Cash</div>
                            </div>
                            <div class="free-bonus-label">
                                <div class="enter-amount">Enter Amount</div>
                                <div class="div3 selected-amount">₹0</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-parent1">
                        <div class="frame-parent2" >
                            <div class="vignette-container-parent frame-parent2" onclick="toggleSelection(this)">
                                <div class="vignette-container" >
                                    <div class="vignette-container-child"></div>
                                    <div class="vignette-container-item"></div>
                                    <div class="container">
                                        <div class="div4">₹1000</div>
                                    </div>
                                    <div class="bonus-cash2">₹1500 Bonus Cash</div>
                                </div>
                                <div class="rectangle-group">
                                    <div class="frame-inner"></div>
                                    <div class="top-pick">Top Pick</div>
                                </div>
                                <img class="vector-icon" loading="lazy" alt="" src="{{ asset('img/addcash/vector-18.svg') }}" />
                            </div>
                            <div class="div5" onclick="toggleSelection(this)">
                                <div class="bonus-cash-vignette"></div>
                                <div class="item"></div>
                                <div class="frame">
                                    <div class="div6">₹200</div>
                                </div>
                                <div class="bonus-cash3">₹150 Bonus Cash</div>
                            </div>
                        </div>
                        <div class="secure-label">
                            <div class="to-10000">( ₹50 to ₹10000 )</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-wrapper">
                <div class="line-div"></div>
            </div>
            <div class="includes-deposit-g-s-t-info-wrapper">
                <div class="includes-deposit-g-s-t-info">
                    <div class="free-bonus-0-parent">
                        <div class="free-bonus-0 selected-bonus">Free Bonus ₹0</div>
                        <div class="includes-deposit-gst-wrapper">
                            <div class="includes-deposit">Includes Deposit & GST</div>
                        </div>
                    </div>
                    <div class="vignette-background-wrapper">
                        <div class="vignette-background">
                            <a class="amount-input-label" href="{{ route('card') }}">
                                <div class="amount-input-label-child"></div>
                                <b class="next">Next</b>
                            </a>
                            
                            <div class="warning-icon-wrapper">
                                <div class="warning-icon">
                                    <img class="secure-1-icon" loading="lazy" alt=""
                                        src="{{ asset('img/addcash/secure-1.svg') }}" />
                                        
                                    <div class="secure-area">
                                        <b class="secure">100% SECURE</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-logo">
                        <div class="payment-icons">
                            <img class="paytm-icon" loading="lazy" alt="" src="{{ asset('img/addcash/paytm.svg') }}" />
                            
                            <img class="visa-icon" loading="lazy" alt="" src="{{ asset('img/addcash/visa.svg') }}" />
                            
                            <img class="master-card-icon" loading="lazy" alt=""
                                src="{{ asset('img/addcash/master-card.svg') }}" />
                        </div>
                    </div>
                    <div class="background-vignette">
                        <div class="caution-mark">
                            <div class="you-must-be-container">
                                <p class="you-must-be">You must be 18+ to play.</p>
                                <p class="andhra-pradesh-telangana">
                                    Andhra Pradesh, Telangana, Sikkim, Nagaland and Assam
                                    players are not allowed to play cash
                                </p>
                                <p class="games">games.</p>
                            </div>
                            <img class="warning-1-icon" loading="lazy" alt=""
                                src="{{ asset('img/addcash/warning-1.svg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="add-cash-child" loading="lazy" alt="" src="{{ asset('img/addcash/vector-17.svg') }}" />
        
        <div class="frame-parent3">
            <div class="background-pattern-parent">
                <img class="background-pattern-icon" alt="" src="{{ asset('img/addcash/rectangle-31@2x.png') }}" />
                
                <img class="vignette-icon" alt="" src="{{ asset('img/addcash/vignette1@2x.png') }}" />
                
                <img class="vignette-icon1" alt="" src="{{ asset('img/addcash/vignette1@2x.png') }}" />
            </div>
            <img class="vignette-icon2" alt="" src="{{ asset('img/addcash/vignette1@2x.png') }}" />
        </div>
    </div>
</body>

</html>
<script>
    function toggleSelection(element) {
        var allElements = document.querySelectorAll('.selected');
        allElements.forEach(function(el) {
            el.classList.remove('selected');
        });
        element.classList.add('selected');
    }
</script>


<style>
    .frame-parent1 {
        display: flex;
        justify-content: space-between;
    }
    .frame-parent2 {
        border: 2px solid transparent; 
        transition: border-color 0.3s ease; /* Smooth transition for border color change */
    }
    .selected {
        border-color: green; /* Green border color when selected */
    }
</style>
