<!-- NCI -->
<div class='mm_nu_offer' style="display:none;">
    <div class='mm_nu_offer_inner'>
        <div class='mm_left mm_new_message'> Welcome :) It looks like your first visit, so for the next hour get <strong>20% off any card</strong> with code <strong>NEWCUST1920</strong></div>
        <div class='mm_left mm_ret_message' style="display:none;"><span></span>Welcome back. Buy 1 card and get another HALF PRICE with code <strong>BOGOHP7</strong></div>
        <div class="mm_left mm-nci-min-label"><div class="mm-nu-min">20% OFF Cards<br><span>use code: NEWCUST1920</span></div><div class="mm-ru-min">Buy 1 Card Get 1 Half Price<br><span>use code: BOGOHP7</span></div></div>
        <div class='mm_right'> 
            <div class='mm_timer'></div>
        </div>
    </div>
    <div class="mm-nci-min"><span></span><span></span></div>
</div>

<script defer type="text/javascript">
    // NCI LOGIC

    var NCIMultiSess = function () {
        if ($('#nci-active').val() == 1) {
            var NCIcheckPurchases = $('#ctl00_uclHeader1_is_having_orders').val();
            var currentURL = document.location.href;
            var checkBASKET = currentURL.indexOf('Basket') > -1;
            if (sessionStorage.seenNCI == '1') {
                if (NCIcheckPurchases == 'true') {
                    if ($('#ctl00_uclHeader1_lblGreetingAccount').length > 0) {
                        $('.mm_ret_message span').text($('#ctl00_uclHeader1_lblGreetingAccount').html() + ', ');
                    }
                    $('.mm_new_message').hide();
                    $('.mm_ret_message').show();
                    $('html').addClass('NCI_active');
                    $('#basket').addClass('basket_margin');
                    $('.mm_timer').hide();
                    //console.log('Basket CONDITION');
                }
                else {
                    $('html').addClass('NCI_active');
                    $('#basket').addClass('basket_margin');
                }
            }
            //console.log('call NCIMultiSess');
        }
    };

    $('.mm-nci-min').click(function () {
        $('.mm_nu_offer').addClass('mm-nci-minimised').removeClass('mm-nci-expanded');
        $('html').addClass('NCI_active_min');
        sessionStorage.nciMinimised = '1';
        //console.log('minimise');
    });

    $('.mm-nci-min-label').click(function () {
        $('.mm_nu_offer').removeClass('mm-nci-minimised').addClass('mm-nci-expanded');
        $('html').removeClass('NCI_active_min');
        //console.log('expand');
    });

    if (sessionStorage.nciMinimised == 1) {
        $('.mm_nu_offer').addClass('mm-nci-minimised');
        $('html').addClass('NCI_active_min');
    }

    var currentURL = document.location.href;
    var checkCResults = currentURL.indexOf('/cards/') > -1;
    var checkGResults = currentURL.indexOf('/gifts/') > -1;
    var checkPDP = currentURL.indexOf('/card/') > -1;
    var checkGiftPDP = currentURL.indexOf('/gift/') > -1;
    if (checkCResults || checkGResults) {
        $('.mm_nu_offer').addClass('mm-nci-minimised').removeClass('mm-nci-expanded');
    }
    if (checkPDP || checkGiftPDP) {
        $('html').addClass('NCI_showing');
    }

    var bannerLocation = function () {
        var currentURL = document.location.href;
        var checkHP = currentURL.indexOf('Personalised') > -1;
        var checkREG = currentURL.indexOf('CustomerAdd') > -1;
        var checkREGsocial = currentURL.indexOf('CustomerAdd') > -1;
        var checkQG = currentURL.indexOf('GiftCardMall_WC') > -1;
        var checkCA = currentURL.indexOf('ChooseAddressType_WC') > -1;
        var checkOC = currentURL.indexOf('OrderConfirmation') > -1;
        var checkLI = currentURL.indexOf('CustomerLogin_WC') > -1;
        var checkMA = currentURL.indexOf('/cards/') > -1;
        var checkMAGifts = currentURL.indexOf('/gifts/') > -1;
        var checkBASKET = currentURL.indexOf('Basket') > -1;

        var userGroup = Cookies.get('userTitleGroup');
        //console.log('usergroup is '+userGroup);

        var NCIcheckPurchases = $('#ctl00_uclHeader1_is_having_orders').val();

        // CHECK IF NEW USER
        if (userGroup == 1 && sessionStorage.checkReg != 1 || userGroup == 2 && sessionStorage.checkReg != 1 || sessionStorage.NCIcheck == 1) {
            // returning user
            //console.log('returning user');
            NCIMultiSess();
            //console.log(NCIcheckPurchases);
        }
        else {
            // IF NCI ACTIVE
            if ($('#nci-active').val() == 1) {
                //console.log('NEW user');
                sessionStorage.seenNCI = '1';
                if (checkREG || checkREGsocial) {
                    sessionStorage.checkReg = 1;
                }
                if (checkQG || checkLI) {
                    // SHOW IN NEW FLOW HEADER
                    sessionStorage.checkReturn = 1;
                }
                else if (checkOC || checkCA) {
                    // do nothing
                }
                else if (checkMA || checkMAGifts) {
                    if ($('#template_wrapper').hasClass('prod_results')) {
                        // show condensed version
                        $('.mm_nu_offer_inner .mm_left').text("Time left to redeem offer");
                        $('html').addClass('NCI_active');
                        $('.mm_nu_offer').addClass('mm_condensed');
                    }
                    else {
                        $('html').addClass('NCI_active');
                    }
                }
                else if (checkBASKET) {
                    //if (sessionStorage.checkReg != 1) {
                    //    // do nothing as returning user
                    //    //console.log('RETURNING USER');
                    //    sessionStorage.NCIcheck = 1;
                    //}
                    //else {
                    //    $('body').addClass('NCI_active');
                    //    $('#basket').addClass('basket_margin');
                    //}
                    $('html').addClass('NCI_active');
                    $('#basket').addClass('basket_margin');
                    //console.log('Basket CONDITION');

                }
                else {
                    $('html').addClass('NCI_active');
                    //console.log('New User Offer Banner');
                }

                //console.log('New User');
            }
        }
        // style adjustments
        if (checkHP) {
            $('.mm_nu_offer').addClass('marg_top_eight');
            $('.mm_nu_offer').addClass('app_smart');
        }

        //console.log('bannerLocation function called');

    };

    var component = function (x, v) {
        return Math.floor(x / v);
    };

    var countDownLaunch = function () {

        //var timestamp = sessionStorage.OneHourStamp;
        var timestampEND = sessionStorage.OneHourStampEND;
        var timestampOneHourNOW = Date.now();
        var timestamp = timestampEND - timestampOneHourNOW;
        if (timestamp <= 0) {
            jQuery('.mm_timer').html('00:00:00');
            jQuery('.mm_nu_offer').remove();
            jQuery('body').addClass('mm_offer_expired');
            jQuery('#wrapper_whole').removeClass('mm_NCI_UI');
        }
        else {

            //bannerLocation();

            timestamp /= 1000; // from ms to seconds

            setInterval(function () {

                timestamp--;

                var days = component(timestamp, 24 * 60 * 60),
                    hours = component(timestamp, 60 * 60) % 24,
                    minutes = component(timestamp, 60) % 60,
                    seconds = component(timestamp, 1) % 60;

                jQuery('.mm_timer').html("00:" + minutes + ":" + seconds);

            }, 1000);
        }

        sessionStorage.stampCount = 1;
    };

    var createCountdownOneHour = function () {
        var NCIcheckPurchases = $('#ctl00_uclHeader1_is_having_orders').val();
        if (sessionStorage.stampCount == 1) {
            countDownLaunch();
            //alert('Loaded at least ONCE');
        }
        else {
            var timestampOneHour = (Date.now() + 3600000) - Date.now();
            if (sessionStorage.seenNCI == '1' && NCIcheckPurchases == 'true') {
                var timestampOneHourEND = Math.floor(Date.now() + 86400000);
            }
            else {
                var timestampOneHourEND = Math.floor(Date.now() + 3600000);
            }

            sessionStorage.OneHourStamp = timestampOneHour;
            sessionStorage.OneHourStampEND = timestampOneHourEND;
            countDownLaunch();
        }
    };


    createCountdownOneHour();

    //NEW DELIVERY MESSAGE
    function topDeliveryMessage() {

        //OPEN DELIVERY POPUP
        $('.mm-del-info, .m-icon, .d-t-show').click(function () {
            $('.mm-del-info-pop').fadeIn(300);
        });

        //CLOSE DELIVERY POPUP
        $('.popUpCloseBtn').click(function () {
            $('.mm-del-info-pop').fadeOut(300);
        });

        //REMOVE DELIVERY PROMPT
        $('.mm-del-ban-close').click(function () {
            $('body').addClass('dpBannerOff');
            $('html').removeClass('dp-showing');
            sessionStorage.dpBanner = 1;
        });

        if (sessionStorage.dpBanner == 1) {
            $('body').addClass('dpBannerOff');
            $('html').removeClass('dp-showing');
        } else {
            $('body').removeClass('dpBannerOff');
            $('html').addClass('dp-showing');
        }

        //COUNTDOWN TIMER
        var showHideDelivery = function () {
            var now = new Date();
            var nowDay = now.getDay();
            var isWeekend = (nowDay === 6) || (nowDay === 0);
            var countdownVal = new Date(now.getFullYear(), now.getMonth(), now.getDate(), $('#sw-next-day-del-cutoff').val(), 0, 0, 0) - now;
            var countdownValtoFive = new Date(now.getFullYear(), now.getMonth(), now.getDate(), $('#sw-standard-del-cutoff').val(), 0, 0, 0) - now;
            //console.log(countdownVal);            
            //console.log(countdownValtoFive);
            if (isWeekend) {
                // do nothing
                $('.mm-del-prompt').hide();
                sessionStorage.dpBanner = 1;
            }
            else {
                if (countdownVal > 0) {
                    //console.log('its before 3pm');
                    $('.mm-del-prompt').show();
                }
                else if (countdownValtoFive > 0) {
                    $('.mm-del-prompt, .mm-del-info-pop').addClass('fclass-options');
                    //console.log('its between 3pm and 5pm');
                    $('.mm-del-prompt').show();
                    $('.pre-five').remove();
                }
                else {
                    $('.mm-del-prompt').hide();
                    sessionStorage.dpBanner = 1;
                    $('body').addClass('dpBannerOff');
                    //console.log('its after 3pm');
                }
            }
        };

        showHideDelivery();

    }

    topDeliveryMessage();

    function userBand() {
        var UBGroup = Cookies.get('userBandGroup');
        if (UBGroup) {
            //console.log('band exists');
            ga('send', 'event', 'UserBand', 'action', {
                'dimension16': UBGroup
            });
        }
        else {
            //console.log('band DOES NOT exists');
        }
    }

</script>