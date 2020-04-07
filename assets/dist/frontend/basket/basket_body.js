
        function addToCart(product) {
            //var google_tag_params = { ecomm_prodid: '10391,10391,10391,133247,149009,163747,163833', ecomm_pagetype: 'cart', ecomm_totalvalue: 23.03 }; </script><script type='text/javascript'>ga('create', 'UA-1744929-8');ga('require', 'ec');
            ga('ec:addProduct', {
                'id': '10391',
                'name': 'Full Photo No Text Portrait Card - Basic',
                'category': 'Photo Upload Card',
                'price': '3.2900','quantity': '1'}
                );
            ga('ec:addProduct', {
                'id': '146818',
                'name': 'Lily OBriens Ultimate Chocolate Collection',
                'category': 'Quick Gift','price': '12.9900','quantity': '1'
            });
            ga('ec:addProduct', {
                'id': '10391','name': 'Full Photo No Text Portrait Card - Basic',
                'category': 'Photo Upload Card','price': '3.2900',
                'quantity': '1'
            });
            ga('ec:setAction', 'add');
            ga('send', 'event', 'UX', 'click', 'add to cart');
        }

        $(document).ready(function () {
                $('#ctl00_ContentPlaceHolder1_VisaCheckoutButton .visa-checkout-link').click(function () {
                    if ($(this).hasClass('vco-inactive')) {
                        $.ajax({
                            type: "POST",
                            url: "/Pages/payment/PaymentReview.aspx/CheckPaymentByMerchantRef",
                            data: JSON.stringify(),
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function (msg) {
                                var res = eval(msg.d);
                                if (res.ErrorCode == "1") {
                                    $('#ctl00_ContentPlaceHolder1_VisaCheckoutButton .visa-checkout-link').removeClass('vco-inactive');
                                    $('#ctl00_ContentPlaceHolder1_VisaCheckoutButton img')[0].click();                                   
                                }
                                else if (res.ErrorCode == 2) {
                                    //var returnURL = res.Error
                                    location.href = res.Error;
                                       
                                }
                            }
                        });
                    }

                    
                    
                    //$('#ctl00_ContentPlaceHolder1_VisaCheckoutButton').removeClass('vco-inactive');
                    //$('#ctl00_ContentPlaceHolder1_VisaCheckoutButton img')[0].click();
                });

                COoptionSelect();
                COremoveItem();

                // CRUK Donation //
                var CRUKdonation = function () {
                    // check status
                    if ($('.CRUK_checkbox input').is(':checked')) {
                        $('.CRUK_input').addClass('CRUK_true');
                        $('.CRUK_don_total').html('<u>remove<br>donation</u>').addClass('CRUK_remove');
                        $('.total .right').addClass('CRUK_donation_made');
                        $('html, body').animate({
                            scrollTop: $(".promocode_holder").offset().top
                        }, 500);
                    }
                    // trigger input click
                    $('.CRUK_input, .CRUK_remove').click(function () {
                        $('.CRUK_checkbox input')[0].click();
                    });
                    // donation values
                    var donationIncl = $('.CRUK_txt select option:selected').text();
                    //var donationIncl = $('.CRUK_txt select option:selected').text();
                    $('.CRUK_don_incl').text(donationIncl);
                    // check if mobile
                    if ($('#ctl00_uclHeader1_detect_mobile_vp').val() == 'mobile_vp') {
                        $('.CRUK_txt').after($('.CRUK_input'));
                        $('.CRUK_blue').html('Cancer Research<br>UK');
                        $('.CRUK_don_total').html('<u>remove donation</u>');
                        $('.CRUK_input').after($('.CRUK_raised'));
                        $('.CRUK_raised').html('Total Raised for Cancer Research UK:<br /> <span>&pound;154,422.01</span><br><span style="font-size:10px; clear:both; float:left; padding:0 15%; text-align:center;">100% of your donations go to CRUK to fund life-saving research</span>');
                    }
                };

                var frameOptionCheck = function() {
                    $(".basket_product_title:contains('Large Square')").parent().parent().find('.frameCardBtn').hide();
                    $(".basket_product_title:contains('Giant')").parent().parent().find('.giftCardBtn').text('Add A Gift');
                    $(".responsive_stage1 .basket_product_title:contains('Giant')").parent().parent().find('.giftCardBtn').css('background', '#b191c0');
                    //$(".basket_product_title:contains('A4')").parent().parent().find('.frameCardBtn').hide();
                };

                var laybuyValues = function () {
                    var laybuyCutoffAmount = parseFloat($('#ctl00_uclHeader1_layBuyOrderCutoff').val())
                    var totalBasketAmount = parseFloat($('.dl_basketTotal').text().replace('£', '').replace('€', ''));
                    var value = laybuyCutoffAmount - totalBasketAmount;
                    var laybuyDifferenceAmount = value.toFixed(2);
                    var countrySymbol = $('#country_price_symbol').val();

                    if (totalBasketAmount >= laybuyCutoffAmount) {
                        $('#ctl00_ContentPlaceHolder1_divLayBuyButton').removeClass('button_disabled');
                        $('.laybuy_textline').html('Pay over 6 weeks, interest free');
                        $('.laybuy_textline').addClass('bigger_info_text');
                    } else {
                        $('#ctl00_ContentPlaceHolder1_divLayBuyButton').addClass('button_disabled');
                        $('.laybuy_textline').html('Spend another <span>' + countrySymbol + laybuyDifferenceAmount + '</span> and pay over 6 weeks.');
                    }

                };

                CRUKdonation();
                promocodeFormatting();
                //addToCart();
                frameOptionCheck();
                laybuyValues();
                basketContinueShopping();
 
                //GTMcheckoutChoice('visa');
                
            
        });

        function COoptionSelect() {
            console.log('COoptionSelect ready to pass to GTMcheckoutChoice');
            $('.btn_pay').one("click", function () {
                GTMcheckoutChoice($(this).data('co-method'));
                console.log('Payment Btn Click');
            });
        };

        function COremoveItem() {
            $('.deleteItem').click(function () {
                var br_id = $(this).parent().parent().data('prodid');
                var br_name = $(this).parent().find('.basket_product_title span').text();
                var br_cat = $(this).parent().parent().data('product-type');
                var br_price = $(this).parent().parent().find('.basket_price').text();
                var br_price = br_price.replace("£", "");
                var br_price = br_price.replace("€", "");
                var br_price = $.trim(br_price);
                var br_quantity = $(this).parent().parent().find('.basket_qnty span').text();
                var br_quantity = $.trim(br_quantity);
                GTMBasketRemove(br_id, br_name, br_cat, br_price, br_quantity);
                //console.log('id is '+ br_id +', name is '+ br_name +', category is '+ br_cat +', price is '+ br_price +', qty is '+ br_quantity);
            });
        };

        //function GTMBasketRemove(br_id, br_name, br_cat, br_price, br_quantity) {
        //    dataLayer.push({
        //        'event': 'removeFromCart',
        //        'ecommerce': {
        //            'remove': {
        //                'products': [{
        //                    'id': br_id, 'name': br_name, 'category': br_cat, 'price': br_price, 'quantity': br_quantity
        //                }]}
        //        }
        //    });
        //}


  
        var basketContinueShopping = function () {
            var catLinkCheck = sessionStorage.prevCategoryURLCategory;
            if (catLinkCheck) {
                $('.continue_shopping_btn').attr('href', sessionStorage.prevCategoryURLCategory);
            }
        };

        var promocodeFormatting = function() {
            $('.FormTextbox_code').keyup(function () {
                var promoFormat = $(this).val();
                $(this).val(promoFormat.toUpperCase());
            });
            $('.FormTextbox_code').blur(function () {
                var promoFormat = $(this).val();
                $(this).val(promoFormat.toUpperCase());
            });
        };

        var closehighstreetpopup = function () {
            $('.prodPreviewOverlay').hide();
        };

        
            $('#A4').show();
            $('#survey_trigger').hide();
        

        //$("a#Final_preview_A").fancybox({
        //    'scrolling': 'no'
        //});

        $('body').addClass('the_basket_page');

        //DETECT PRODUCT TYPE
        $('.BasketItemContents').each(function () {
            var BalloonShapeSelected = $(this).data('product-type');
            var HighStreetCardSelected = $(this).data('prod-occ');
            var StagHenInBasket = $(this).data('product-type');

            if (BalloonShapeSelected == '84') {
                //STAR BALLOON
                $(this).addClass('star_balloon');
            }

            if (BalloonShapeSelected == '85') {
                //CIRCLE BALLOON
                $(this).addClass('circle_balloon');
            }

            if (BalloonShapeSelected == '86') {
                //HEART BALLOON
                $(this).addClass('heart_balloon');
            }

            //HIGHSTREET CARD
            if (HighStreetCardSelected == 'Highstreet') {
                $(this).find('a#Final_preview_A').hide();
            }

            // STAG HEN CONDITION
            if (StagHenInBasket == 'Stag_Hen_Tshirt') {
                var stagColorClass = $(this).find('.tshirtColor').text();
                var stagColorClass = stagColorClass.replace(/\s/g, '');
                $(this).find('.basket_itemPreview').addClass('stagHenColor_' + stagColorClass);
                console.log(stagColorClass);
            }
        });

        // FLOW BREADCRUMBS //
        $('.basket_flow_crumb ul li:nth-child(1), .basket_flow_crumb ul li:nth-child(2), .basket_flow_crumb ul li:nth-child(3), .basket_flow_crumb ul li:nth-child(4)').addClass('active_crumb');
        $('.basket_flow_crumb ul li:nth-child(4)').addClass('current_crumb');
        
        // CHECK IF ITEM IS A FRAME //
        if($('.BasketItemContents').find('.addFrameBorder').length != 0) {
            $('.addFrameBorder').parent().parent().parent().addClass('BasketFrameItem');
           
        }
        
        detectFrames();
        
        function detectFrames() {
            var A4framePresent = $(".basket_product_title:contains('Black Frame A4')");
            A4framePresent.each(function(){
                $(this).parent().parent().find('.addFrameBorder h2').html('Large Size Frame');
            });
            var A6framePresent = $(".basket_product_title:contains('Black Frame A6')");
            A6framePresent.each(function(){
                $(this).parent().parent().find('.addFrameBorder h2').html('Small Size Frame');
            });
            
            // DETECT CHOCOLATE CARD //
            var ChocCardPresent = $(".basket_product_title:contains('Chocolate Card')");
            ChocCardPresent.each(function(){
                $(this).parent().parent().addClass('ChocolateCardHolder');
                
                // DETECT LS CHOCOLATE CARD //
                var ChocolateCardThumbClass = $(this).parent().parent().find('.item_thumb');
                
                if( $(ChocolateCardThumbClass).hasClass('img_l') ) {
                    $(this).parent().parent().addClass('LSChocCard');
                }
                
            });
        }

        function detectBalloonBouquet() {
            var BalloonBouquetItem = $(".basket_product_title:contains('Balloon Bouquet upgrade')");
            BalloonBouquetItem.each(function () {
                $(this).parent().parent().addClass('balloonBouquetItem');
                $(this).html('Balloon Bunch Added');
                $(this).parent().parent().find('.basket_itemPreview').html('<img src="/Images/Basket/balloonBouquetThumb.jpg" />');
                $(this).parent().parent().find('.basket_itemPreview').after('<p class="balloonBoquetMessage">This will accompany your balloon above.</p>');
            });
        }

        detectBalloonBouquet();

        // NEW PREVIEW FUNCTION
        function openProdPreview(orderHash) {
            console.log(orderHash);
            //alert(id + " - " + setname);
            ClickPreview();
            $('.prodPreviewOverlay').show();
            $.ajax({
                cache: false,
                type: "GET",
                url: "/basket/CardPreview?olid=" + orderHash,
                //data: { id: id, setname: setname, fip: fip, poid: poid, ptid: ptid, sid: sid, name: name },
                dataType: "html",
                error: function (jqXHR, textStatus) { },
                success: function (theResponse) {
                    $("#prodPreviewHolder").html(theResponse).fadeIn(300);
                }
            });
            console.log('CALL openProdPreview');
        }
        
        // CHECK IF FRAME HAS BEEN ADDED //
        $('.FrameAddedBtn').parent().parent().addClass('CardWithFrame');
        $('.addFrameBorder a[framesize*="L"]').parent().parent().parent().addClass('LandscapeFrame');
        $('.addFrameBorder a[framesize*="S"]').parent().parent().parent().addClass('SquareFrame');
        
        // FRAME PREVIEW LOADER//
        function framePreviewLoader() {
            $('.SmallFramePreview img').load(function() {
              $('#dialogAddFrame .AddFrameImageLoader').hide();
            });
        }
        // CHANGE CHOC CARD THUMB OVERLAY //
        $(".ChocolateCardHolder").each(function() {
            var TypeOfChocolateCardChosen = $(this).attr("data-prod-occ");

            if (TypeOfChocolateCardChosen == "Flower General Chocolate Card") {
                $(this).addClass('MDChocChosen');
                $('.MDChocChosen .ChocCardOverlay img').attr('src', '/Images/Basket/chocolateCardBox_overlay_md.png');
                $('.MDChocChosen .ChocCardOverlayLandscape img').attr('src', '/Images/Basket/chocolateCardBoxLS_overlay_md.png');
            }

            if (TypeOfChocolateCardChosen == "Love Chocolate Card") {
                $(this).addClass('AnniversaryChocChosen');
                $('.AnniversaryChocChosen .ChocCardOverlay img').attr('src', '/Images/Basket/chocolateCardBox_overlay_anniversary.png');
                $('.AnniversaryChocChosen .ChocCardOverlayLandscape img').attr('src', '/Images/Basket/chocolateCardBoxLS_overlay_anniversary.png');
            }

            if (TypeOfChocolateCardChosen == "Cheers Chocolate Card") {
                $(this).addClass('FDChocChosen');
                $('.FDChocChosen .ChocCardOverlay img').attr('src', '/Images/ChocolateCards/chocolateCardBox_overlay_fathersday.png');
                $('.FDChocChosen .ChocCardOverlayLandscape img').attr('src', '/Images/ChocolateCards/chocolateCardBoxLS_overlay_anniversary.png');
            }

            if (TypeOfChocolateCardChosen == "Present Chocolate Card") {
                $(this).addClass('PresentChocChosen');
                $('.PresentChocChosen .ChocCardOverlay img').attr('src', '/Images/ChocolateCards/chocolateCardBox_overlay_christmas.png');
                $('.PresentChocChosen .ChocCardOverlayLandscape img').attr('src', '/Images/ChocolateCards/chocolateCardBoxLS_overlay_christmas.png');
            }

            if (TypeOfChocolateCardChosen == "Mum Chocolate Card") {
                $(this).addClass('MumChocChosen');
                $('.MumChocChosen .ChocCardOverlay img').attr('src', '/Images/Basket/chocolateCardBox_overlay_mum.png');
                $('.MumChocChosen .ChocCardOverlayLandscape img').attr('src', '/Images/Basket/chocolateCardBoxLS_overlay_mum.png');
            }

        });
        
        copyHintInfo();
        
        //checkFrameChoc();
        
        $('body').addClass('show_mm_menu');
        $('body').addClass('mob_basket');
        
        function copyHintInfo() {
            $( ".copyCardItem" ).hover(
                  function() {
                    $(this).next(".copy_tip_reveal").fadeIn();
                    //alert('hovered');
                  }, function() {
                    $(this).next(".copy_tip_reveal").stop().fadeOut();
                  }
            );
            
            $( ".emailProductItem" ).hover(
                  function() {
                    $(this).next(".emailcard_tip_reveal").fadeIn();
                    //alert('hovered');
                  }, function() {
                    $(this).next(".emailcard_tip_reveal").stop().fadeOut();
                  }
            );
            
            $( ".emailProductItemPending" ).hover(
                  function() {
                    $(this).next(".emailcard_tip_reveal").fadeIn();
                    //alert('hovered');
                  }, function() {
                    $(this).next(".emailcard_tip_reveal").stop().fadeOut();
                  }
            );                                    
        }
        
        function checkFrameChoc() {
            var basketItem = $('.BasketItemContents');
            basketItem.each(function() {
                if ( $(this).find('.chocoCardBtn').length == 1 ) {
                    $(this).find('.frameCardBtn').hide();
                }
            });
            
        }
        
        //$('#ctl00_SiteBreadCrump').hide();

        //OPEN FRAME POPUP
        $('a[id$=butFrame]').click(function(){
           $('img[id$=frameDSUrl]').attr("src",$(this).attr('DSURL'));
           $('input[id$=txtOrderLineItemId]').val($(this).attr('orderLineItemId'));
           
           //alert($(this).attr('frameHeading'));
           $('#dialogAddFrame .hat_header h1').html($(this).attr('frameHeading'));
           framePreviewLoader();
           
           $('#dialogAddFrame').addClass($(this).attr('FrameSize'));
           $('#dialogAddFrame').addClass($(this).attr('frameHeading'))
           document.getElementById('dialogAddFrame').style.visibility = 'visible'; 
           placeIt('dialogAddFrame');
           return false;
        }
        );
        
        //OPEN FRAME POPUP
        $('#butFrameClose').click(function () {      
          document.getElementById('dialogAddFrame').style.visibility = 'hidden';
          $('#dialogAddFrame').removeClass();   
          return false;
        });
        
        //OPEN CHOCO CARD POPUP
        $('a[id$=butChoco]').click(function(){
            
            //FATHERS DAY CHOCOLATE OPTIONS
            $('.AddChocoHolder').removeClass('fathersDayChocolateOptions');
            if ($(this).hasClass('father')) {
                $('.AddChocoHolder').addClass('fathersDayChocolateOptions');
            }

            var thumbSrc = $(this).closest('.basket_table_holder').find('.item_thumb').attr('src');
            $('.card_dupe').attr('src',thumbSrc);
            ////alert(thumbSrc);
       
            // landscape preview
            var card_side = $(this).closest('.basket_table_holder').find('.item_thumb').width();
            var card_height = $(this).closest('.basket_table_holder').find('.item_thumb').height();
            
            if (card_side > card_height) {                
                $('#dialogAddChoco').addClass('landscapeChocCard');                
            }
                        
            clickLoadChocos($(this).attr('productId'), $(this).attr('orderLineItemId'));
            
            //$('input[id$=txtOrderLineItemId]').val($(this).attr('orderLineItemId'));
            //document.getElementById('dialogAddChoco').style.visibility = 'visible'; 
            //placeIt('dialogAddFrame');
            return false;
        });

        function clickLoadChocos(pid, olid) {
            var cur_url = $(location).attr('protocol') + "//" + $(location).attr('host') + "/";
            $.ajax({
                type: "POST",
                url: cur_url + "ServerCall.aspx" + "/GetAutoFeatureProducts",
                data: '{"productId": ' + pid + '}',
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                error: function (jqXHR, textStatus) {
                    return;
                },
                success: function (msg) {
                    listChocoCards(msg.d);

                    $('input[id$=txtOrderLineItemId]').val(olid);
                    document.getElementById('dialogAddChoco').style.visibility = 'visible';
                    placeIt('dialogAddFrame');
                }
            });
        }

        function listChocoCards(data) {
            var remonder_body = "";

            if (data != "") {
                var chocoList = eval(data);
                var style_set = "";
                for (i = 0; i < chocoList.length; i++) {
                    style_set = "choco_";
                    var selected_id = ($("input[id$='hidFpid']").val().length == 0) ? 0 : parseInt($("input[id$='hidFpid']").val());
                    if (selected_id == chocoList[i].FpId) {
                        style_set += " SelectedChocolate";
                    }
                    remonder_body += "<span id=\"" + chocoList[i].Name + "\" title=\"" + chocoList[i].Name + "\" class=\"" + style_set + "\" onclick=\"selectChoco('" + chocoList[i].FpId + "')\"></span>";
                }

            }

            $("#chocList").html(remonder_body);
            var choc_count = chocoList.length;
            $("#chocList").addClass('chocCount'+ choc_count);
            ChangeChocolateIDName();
            PreselectBirthdayChocolate();
            SelectedChocolate();
        }

        function selectChoco(id) {
            //SelectedChocolate();
            $("input[id$='hidFpid']").val(id);
            //console.log($("input[id$='hidFpid']").val());           
            //$('.BTNaddChoc').trigger('click');
        }

        //ADD SELECTED CLASS TO CHOSEN CHOCOLATE
        function SelectedChocolate() {
            $('.choco_').click(function () {      
                $('.choco_').removeClass('SelectedChocolate');
                $(this).addClass('SelectedChocolate');
            });
            //alert('SELECTED');
        }

        //CHANGE CHOCOLATE ID NAMES
        function ChangeChocolateIDName() {
            $('.choco_').each(function (index) {
                var storedChocolateID = $(this).attr('id');
                var storedChocolateIDNew = storedChocolateID.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');

                $(this).attr('id', storedChocolateIDNew);
            });
        }

        //PRESELECT BIRTHDAY CHOCOLATE CARD
        function PreselectBirthdayChocolate() {
            $('#BirthdayChocolateCard').trigger('click').trigger('click');
        }

        ////OPEN CHOCO CARD POPUP
        //function chocSwitch () {
        //    $('.switch').click(function(){
        //        var switchVal = $(this).data('switch');
        //        var switchVal = $(this).data('switch');
        //        $('.chocolatePreview').hide();
        //        $('.'+switchVal+'Choc').show();
        //        $('.switch').removeClass('active');
        //        $(this).addClass('active');
        //    });
        //    var chocCat = $('.chocSelected').val();
        //    if ( chocCat.indexOf("Birthday") >= 0 ) {
        //        $('.chocolatePreview').hide();
        //        $('.birthdayChoc').show();
        //        $('.chocCardText:last-of-type').html('perfect for a birthday');
        //    }
        //}
                
        //CLOSE CHOCO CARD POPUP
        $('#butChocoClose').click(function () {      
            document.getElementById('dialogAddChoco').style.visibility = 'hidden';
            $('#dialogAddChoco').removeClass();   
            return false;
        });        
        
        $('.editQty').click(function() {
            $('input[id$=txtOrderLineItemId]').val($(this).attr('orderLineItemId'));
            $('input[id$=hidOrderId]').val($(this).attr('orderId'));      
            $('input[id$=txtQuantity]').val($(this).attr('quantity'));

            $("#dialogCopy").css("width", "310px");
            $("#dialogCopy").css("visibility", "visible");
            $("#divQtyUpdate").css("visibility", "hidden");

            placeIt('dialogCopy');

            if ($(this).attr('mult') == "1") {
                $('input[id$=txtQuantity]').attr("readonly", "readonly");
                $("#divQtyUpdate").css("visibility", "visible");
                $('input[id$=txtQuantity]').data("inc", $(this).attr('inc'));
            } else {
                $('input[id$=txtQuantity]').removeAttr("readonly");
            }

            return false;
        });
        
        $('#butClose').click(function () {      
            document.getElementById('dialogCopy').style.visibility = 'hidden';
            $('#divQtyUpdate').css('visibility', 'hidden');
          return false;
        });
        
        function increaseQty() {
            var qty = $("input[id$='txtQuantity']").val();
            var q = $('input[id$=txtQuantity]').data("inc");
            qty = parseInt(qty) + parseInt(q);
            $("input[id$='txtQuantity']").val(qty);
        }

        function decreaseQty() {
            var qty = $("input[id$='txtQuantity']").val();
            var q = $('input[id$=txtQuantity]').data("inc");
            //alert(q);
            if (parseInt(qty) > 10) {
                qty = parseInt(qty) - parseInt(q);
            }
            $("input[id$='txtQuantity']").val(qty);
        }

        $('a[id$=butYes]').click(function() {
          if ($('input[id$=txtQuantity]').val().trim() == '' || $('input[id$=txtQuantity]').val() <= '0') {
              alert('Please enter valid quantity.');
              return false;
          } else {
            
            // Added to handle only postive integers
            var RE = /^\d*$/;

            if (!RE.test($('input[id$=txtQuantity]').val().trim())) {
              alert("*Please select a valid quantity");
              return false;
            } else {
                var quantity = $('input[id$=txtQuantity]').val();
                if (parseInt(quantity) < 1) {
                  alert('Please enter valid quantity.');
                  return false;
                } else {
                    $('input[id$=hidQuantity]').val(quantity);
                }                
            }
          }
        });
        
        $('input[id$=butCreateMailingList]').click(function() {
            if (jQuery.trim($('input[id$=txtName]').val()) == '') {
              alert('Please enter a Quantity');
              return false;
            }
        });  
        
        // FIND NOTEBOOKS IN BASKET //
        //detectNotebooks();

        // FIND GIFT BAGS
        detectGiftBag();
        detectBookBox();

        // COASTER PACK QNTY
        detectCoasterQnty();

        function moveAddonsMobile() {
            if ($(window).width() < 736) {
                $('.mm-product-addons').each(function () {
                    $(this).parent().after($(this));
                });
            }
        }

        moveAddonsMobile();

        // DETECT MOBILE BROWSER AND STORE HIDDEN VALUE //
        var windowwidth = $(window).width();
                if ( windowwidth <= 736 ) {
                    //window.location.href = 'CustomiseCardsMobile.aspx';
                    $('input#ctl00_ContentPlaceHolder1_detect_mobile_vp').attr('value','mobile_vp');
                    $('.basket_min ').text('-');
                    $('.basket_max ').text('+');
                    $("#ctl00_ContentPlaceHolder1_divPayMessage").appendTo('td#ctl00_ContentPlaceHolder1_Td2');
                } 
                
                //SWITCH MIN AND MAX TEXT - SCREEN RESIZE
		        $( window ).resize(function() {
                    if ($(window).width() < 736) {
                    $('.basket_min ').text('-');
                    $('.basket_max ').text('+');
                    $("#ctl00_ContentPlaceHolder1_divPayMessage").appendTo('td#ctl00_ContentPlaceHolder1_Td2');
                    }
                    if ($(window).width() > 736) {
                    $('.basket_min ').text('Minimize');
                    $('.basket_max ').text('Maximize');
                    $("#ctl00_ContentPlaceHolder1_divPayMessage").appendTo('.summary_bottom');
                    }
                    
                });
    
        // MINIMIZE ITEM HOLDER //
        $('.basket_min').click(function() {
            minfunc($(this));
        });

        var minfunc = function (thisObj) {
            //thisObj.parent('.basket_table_header').next().next('.basket_table_holder').addClass('CLOSE THIS');
            //thisObj.parent('.basket_table_header').next().next('.basket_table_holder').toggle();
            thisObj.parent('.basket_table_header').next().next('.basket_table_holder').hide();
            thisObj.hide();
            thisObj.siblings('.basket_max').show();
        };
        
        // MAXIMIZE ITEM HOLDER //
        $('.basket_max').click(function() {
            maxfunc($(this));
        });

        var maxfunc = function (thisObj) {
            //thisObj.parent('.basket_table_header').next().next('.basket_table_holder').toggle();
            thisObj.parent('.basket_table_header').next().next('.basket_table_holder').show();
            thisObj.hide();
            thisObj.siblings('.basket_min').show();
        };
         
        // ADD RED CLASS TO PRICE //
        $('.basket_top_discount').each(function(){
            if ($(this).html().length > 0) {
            $(this).siblings('.basket_top_price').addClass('red');
            }
            else {
                $(this).hide();
            }
        });
        
        $('.tshirt_label:empty').remove();
        $('.tshirt_basket_color:empty').hide();                                         

        $('.tshirt_label span[data-tshirt-colour="Black"]').parent().parent().addClass('tshirt_search_thumb_TBla');
        $('.tshirt_label span[data-tshirt-colour="Red"], .tshirt_label span[data-tshirt-colour="Cherry"]').parent().parent().addClass('tshirt_search_thumb_TChe');
        $('.tshirt_label span[data-tshirt-colour="Grey"]').parent().parent().addClass('tshirt_search_thumb_TGry');
        $('.tshirt_label span[data-tshirt-colour="Green"]').parent().parent().addClass('tshirt_search_thumb_TGre');
        $('.tshirt_label span[data-tshirt-colour="Azalea"]').parent().parent().addClass('tshirt_search_thumb_TApi');
        $('.tshirt_label span[data-tshirt-colour="Light"]').parent().parent().addClass('tshirt_search_thumb_TLpi');
        $('.tshirt_label span[data-tshirt-colour="Navy"]').parent().parent().addClass('tshirt_search_thumb_TNav');
        $('.tshirt_label span[data-tshirt-colour="White"]').parent().parent().addClass('tshirt_search_thumb');
        $('.tshirt_label span[data-tshirt-colour="Womens"]').parent().parent().addClass('basket_t_women');
        
        // ADD CLASS TO OPTIONS HOLDER IF IT CONTAINS A GIFT //
        $('.basket_options:contains("Edit Item")').addClass('gift_options');
        $("[id$='_editSizePnl']").addClass('GoLargeBtn');
        
        // CHANGE BASKET WIZARD RADIO BUTTONS TO BUTTONS //
        //$('#ctl00_ContentPlaceHolder1_rblChoice input:radio').screwDefaultButtons();
        
        // ADD CLASS BASKET WIZARD BUTTONS //
        $('#ctl00_ContentPlaceHolder1_rblChoice_0').parent().addClass('basket_exit_btn1');
        $('#ctl00_ContentPlaceHolder1_rblChoice_1').parent().addClass('basket_exit_btn2');
        $('#ctl00_ContentPlaceHolder1_rblChoice_2').parent().addClass('basket_exit_btn3');
        $('#ctl00_ContentPlaceHolder1_rblChoice_3').parent().addClass('basket_exit_btn4');

        // DISPLAY MESSAGE HOLDER //
        $('.styledRadio').click(function() {
            $('.basket_message_area').css('display','block');
            $('input#ctl00_ContentPlaceHolder1_btnSubmit').css('display','block');
        });
        
        // DISPLAY MESSAGE 1 //
        $('.basket_exit_btn1').click(function() {
            $('.message1').css('display','block');
        });
        
        // DISPLAY MESSAGE 2 //
        $('.basket_exit_btn2').click(function() {
            $('.message2').css('display','block');
        });
        
        // DISPLAY MESSAGE 3//
        $('.basket_exit_btn3').click(function() {
            $('.message3').css('display','block');
        });
        
        // DISPLAY MESSAGE 4//
        $('.basket_exit_btn4').click(function() {
            $('.message4').css('display','block');
        });
        
        // ... Detect if a notbook is in basket
        
        //function detectNotebooks() {
        //    var notebookPresent = $(".basket_product_title:contains('Notebook')");
        //    var totalNotebooks = 0;
            
        //    notebookPresent.each(function(){
        //        var notebookHTML = $(this).parent().next().next().find('.basket_item_prices .basket_qnty span.left').html();
                
        //        totalNotebooks += parseFloat(notebookHTML);
        //        //alert(total);
        //    });
            
        //    //FREE PEN WITH NOTEBOOK
        //    if (totalNotebooks > 0) {
        //        $('#ctl00_ContentPlaceHolder1_lstBasket_groupPlaceholderContainer').after("<div class='basket_table_header'> <div class='basket_product_title left'>FREE Funky Pigeon pen with every notebook</div> <div class='basket_min right'>Minimize</div> <div class='basket_max right' style='display:none;'>Maximize</div> </div><div class='purple_underline'></div><div class='basket_table_holder basket_pen'> <img src='../../Images/Structure/basket_pen.jpg' class='item_thumb left' style='border:1px solid #e5e5e5 !important;' /> <div style='padding-top: 40px;' class='basket_sendto left'><h2 class='left'>Quantity:</h2> <span class='left' style='font-size: 24px; font-family: Arial; color: #a987b8; padding: 0 15px 0 10px; margin-top: -2px;'>" + totalNotebooks + "</span> </div> <div class='basket_item_prices right'><div class='total_discounts_holder'> <div class='basket_price' style='height:56px;'> <span style='color:red'>FREE</span> </div> <div class='basket_figures'>Discount: <span class='basket_grey'>£0.00</span></div> <div class='basket_figures'>P&amp;P Costs: <span class='basket_grey'>£0.00</span></div> <div class='basket_figures'>P&amp;P Discount: <span class='basket_grey'>£0.00</span></div> </div> </div> </div>");
        //    }
        //}

        // GIFT BAG IN BASKET 
        function detectGiftBag() {
            $('.BasketItemContents[data-giftbag="1"]').each(function () {
                var giftbagPrice = $(this).data('giftbagprice');
                var giftBagType = $(this).data('giftbagtype');
                if (giftBagType.length >0) {
                    giftBagType = "_" + giftBagType;
                }
                $(this).parent().after("<tr><td colspan='1'><div class='basket_table_header'> <div class='basket_product_title left'>Gift Bag Added</div> <div class='basket_min right' onclick='javascript:minfunc($(this));'>Minimize</div> <div class='basket_max right' style='display:none;' onclick='javascript:maxfunc($(this));'>Maximize</div> </div><div class='purple_underline'></div><div class='basket_table_holder basket_giftbag'> <img src='/Images/Structure/basket_giftBag" + giftBagType + ".jpg' class='item_thumb left' style='border:1px solid #e5e5e5 !important;' /> <div style='padding-top: 40px;' class='basket_sendto left'> </div> <div class='basket_item_prices right'><div class='basket_qnty right'><h2 class='left'>Quantity:</h2> <span class='left' style='font-size: 24px; font-family: Arial; color: #a987b8; padding: 0 15px 0 10px; margin-top: -2px;'>1</span></div><div class='total_discounts_holder'> <div class='basket_price' style='height:56px;'> <span>&pound;" + giftbagPrice + "</span><br><span style='font-size:12px;'>included in gift total above</span> </div> </div> </div> </div></td></tr>");
                
            });
        }

        function detectBookBox() {
            $('.BasketItemContents[data-product-type="Personalised Books"]').parent().next().find('.basket_giftbag').find('img').attr('src', '/assets/dist/images/BookGiftBoxMobile.jpg');
            $('.BasketItemContents[data-product-type="Personalised Books"]').parent().next().find('.basket_giftbag').find('img').css('width', '170px');
            $('.BasketItemContents[data-product-type="Personalised Books"]').parent().next().find('.basket_product_title').text('Gift Box Added');
        }


        function detectCoasterQnty() {
            $('.BasketItemContents[data-product-type*="Coaster"]').each(function () {
                var coasterQnty = $(this).data('qtyinbatch');
                var coasterItemTitle = $(this).find('.basket_product_title').text();
                if (coasterQnty >= 2) {
                    $(this).find('.basket_product_title').html(coasterItemTitle + ' - ' + coasterQnty + ' pack');
                }
              
            });
        }

        $('.basket_top_discount:empty').remove();

            
            //$("a#survey_trigger").fancybox({type: 'inline', content: '#survey_container' });
            
            //$('.styledRadio').click(function(){ $('#fancybox-close').hide(); });
        
        function isBrowserIE(){
            var isIEBrowser = false;
            if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
                 var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
                 if (ieversion>=8)
                    isIEBrowser = true;
                else if (ieversion>=7)
                    isIEBrowser = true;
                else if (ieversion>=6)
                    isIEBrowser = true;
                else if (ieversion>=5)
                    isIEBrowser = true;
           }
           return isIEBrowser;
       }

        function placeIt(boxid) {
          try{
            var isIE = isBrowserIE();          
            if(isIE == true){
                var scroll = GetScrollOffset();        
                document.getElementById(boxid).style.top = scroll.y + 300;
            }else{
                document.getElementById(boxid).style.top = window.pageYOffset + (window.innerHeight - (window.innerHeight)) + + 300 +  "px"; 
            }
          }catch(err){
           // alert(err.description);
          }    
        }

        function noAddresssAvail()
        {
           alert("No contact address available for this selected mailing list, please add new contacts.");
        }

        function DisplayOutOfStockMessage() {
            alert("out of stock!");
        }
    //-->

    //Sys.WebForms.PageRequestManager.getInstance().add_endRequest(mobileappend);    
    
    /*
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -- CARD PREVIEW SPECIAL FUNCTIONS  ** START **
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    */
    
    var final_preview_lCount = 1;
    var final_preview_rCount = 0;
    var final_preview_image;
    var final_preview_image_left;     
    var final_preview_width;
    var final_preview_height;    
    var final_preview_isRunnig = false;
        
    function ClickPreview(olid) {
        final_preview_lCount = 1;
        final_preview_rCount = 0;
    }        
    
    function imgClick(dir) {       
        var orgWidth = document.getElementById('card_preview_width').value;       
        var orgHeight = 316;
         
        if (final_preview_isRunnig) return;
        
        switch(dir)
        {
            case "L":
            {
                if (final_preview_lCount == 0) return;
                final_preview_width = orgWidth;
                
                if (final_preview_lCount == 1) {
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_lCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }

                final_preview_lCount++; 
                final_preview_rCount++;
                
                if (final_preview_lCount > 2) {
                    final_preview_lCount = 0;
                    final_preview_rCount = 2;
                }                              
                                                    
                turnLeft();            
                
                break;
            }
            case "R":
            {
                if (final_preview_rCount == 0) return;
                final_preview_width = -orgWidth;
                
                if (final_preview_rCount == 1) {
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_rCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }

                if (final_preview_rCount == 1) {
                    final_preview_rCount = 0; final_preview_lCount = 1;
                } else if (final_preview_rCount == 2) {
                    final_preview_rCount = 1; final_preview_lCount = 2;
                }
                
                turnRight();            
                
                break;
            }
            case "U":
            {
                if (final_preview_lCount == 0) return;
                final_preview_height = orgHeight;
                
                if (final_preview_lCount == 1){
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_lCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }
                
                final_preview_lCount++; 
                final_preview_rCount++;
                
                if(final_preview_lCount > 2) {
                    final_preview_lCount = 0;
                    final_preview_rCount = 2;
                }
                
                turnUp();
                
                break;
            }
            case "D":
            {
                if(final_preview_rCount == 0) return;
                final_preview_height = -orgHeight;
                
                if (final_preview_rCount == 1){
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_rCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }
                
                if (final_preview_rCount == 1){
                    final_preview_rCount = 0; final_preview_lCount = 1;
                } else if(final_preview_rCount == 2) {
                    final_preview_rCount = 1; final_preview_lCount = 2;
                }
                
                turnDown();
                          
                break;
            }                                    
        }
                         
        final_preview_isRunnig = true;
    }
    
    function turnLeft() {       
        var orgWidth = document.getElementById('card_preview_width').value;       
        var orgLeft = 325;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_width -= sChng;
        if (final_preview_width <= 0 && final_preview_width > -orgWidth) {
            final_preview_image_left.style.left = (orgLeft + final_preview_width) + 'px';
            final_preview_image_left.style.width = (-final_preview_width) + 'px';
            final_preview_image_left.style.visibility = 'visible';
            final_preview_image.style.visibility = 'hidden';
        } else if (final_preview_width > 0) {
            final_preview_image.style.width = final_preview_width + 'px';
        } else {
            final_preview_image.style.visibility = 'hidden';
            final_preview_image_left.style.left = (orgLeft - orgWidth) + 'px';
            final_preview_image_left.style.width = orgWidth + 'px';
            stopCount();
            return;
        }
        t = setTimeout("turnLeft()", interval);
    }
    
    function turnRight() {       
        var orgWidth = document.getElementById('card_preview_width').value;     
        var orgLeft = 325;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_width += sChng;
        if (final_preview_width >= 0 && final_preview_width < orgWidth) {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.visibility = 'visible';
            final_preview_image.style.width = final_preview_width + 'px';
        } else if (final_preview_width < 0) {
            final_preview_image_left.style.left = (orgLeft + final_preview_width) + 'px';
            final_preview_image_left.style.width = (-final_preview_width) + 'px';
        } else {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.width = orgWidth + 'px';
            stopCount();
            return;
        }
        t = setTimeout("turnRight()", interval);
    }
    
    function turnUp() {
        var orgHeight = 316;     
        var orgTop = 520;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_height -= sChng;
        if (final_preview_height <= 0 && final_preview_height > -orgHeight) {
            final_preview_image_left.style.top = (orgTop + final_preview_height) + 'px';
            final_preview_image_left.style.height = (-final_preview_height) + 'px';
            final_preview_image_left.style.visibility = 'visible';
            final_preview_image.style.visibility = 'hidden';
        } else if (final_preview_height > 0) {
            final_preview_image.style.height = final_preview_height + 'px';
        } else {
            final_preview_image.style.visibility = 'hidden';
            final_preview_image_left.style.top = (orgTop - orgHeight) + 'px';
            final_preview_image_left.style.height = orgHeight + 'px';
            stopCount();
            return;
        }    
        t=setTimeout("turnUp()",interval);
    }
    
    function turnDown(){
        var orgHeight = 316;     
        var orgTop = 520;
        var sChng = 25;
        var interval = 60; 
            
        final_preview_height += sChng;
        if (final_preview_height >= 0 && final_preview_height < orgHeight) {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.visibility = 'visible';
            final_preview_image.style.height = final_preview_height + 'px';
        } else if (final_preview_height < 0){
            final_preview_image_left.style.top = (orgTop+final_preview_height) + 'px';
            final_preview_image_left.style.height = (-final_preview_height) + 'px';
        } else {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.height = orgHeight + 'px';
            stopCount();
            return;
        }    
        t=setTimeout("turnDown()",interval);
    }    
    
    function stopCount() {
        final_preview_isRunnig = false;
        clearTimeout(t);
    }    
    
    /*
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -- CARD PREVIEW SPECIAL FUNCTIONS  ** END **
    ----------------------------------------------------------------------------------------------------------------------------------------------------------    
    */
    

    /*
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -- EMAIL PRODUCT SPECIAL FUNCTIONS  ** START **
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    */
    
    function OpenEmailForm(olid) {
        //alert(olid);  
        var ctr = 'div_email_product_' + olid;
        
        //if($('#' + ctr).html() != "Email this Card") { return false; }
                  
        var heading = 'Email Your Card After Purchase';
        var erHtml = '<div id="shortlistPopup" class="email_card_from_heading">';
                       erHtml += '<div class="hat_header">' + heading + '<img class="icon_send_email_card" src="/Images/Structure/icon_send_email_card.png" /></div>';
                       erHtml += '<p>Complete the details below and we will send a link so that they can view their card!</p>';
                       erHtml += '<div class="ec_label">Send to...</div><input placeholder="name" type="text" id="txt_recipient_name" name="txt_recipient_name" maxlength="200" value="' + $('#emailproduct_hidden_name_' + olid).val() + '" onclick="RemoveErrorInEmailForm(this)" />';
                       erHtml += '<div class="ec_label">Email Address</div><input placeholder="name@email.com" type="text" id="txt_recipient_email" name="txt_recipient_email" maxlength="150" value="' + $('#emailproduct_hidden_email_' + olid).val() + '" onclick="RemoveErrorInEmailForm(this)" />';
                       erHtml += '<div class="ec_label">Send Date</div><input placeholder="Click to select date" type="text" id="txt_send_date" name="txt_send_date" maxlength="10" value="' + $('#emailproduct_hidden_date_' + olid).val() + '" onclick="RemoveErrorInEmailForm(this)"  readonly />';
                       erHtml += '<div class="btn_purple" onclick="javascript:SendEmailNotify(' + olid + ', \'S\');">Send Card</div>';
                       if($('#emailproduct_hidden_name_' + olid).val().length>0) { erHtml += '<div class="btn_purple btn_resend" onclick="javascript:SendEmailNotify(' + olid + ', \'D\');">Delete</div>'; }
                       erHtml += '<div class="btn_cancel" onclick="javascript:CloseOpenEmailForm();"><img src="/assets/dist/images/icon_send_email_close.png" /></div>';
                       erHtml += '<div id="shortlistPopup_error_message"></div>';
                       erHtml += '<p class="nb">NB: You must purchase the card to activate this feature</p>';
                    erHtml += '</div>';
                    
        $("#fancierbox_ppsso").html(erHtml);
        $('#fancierbox_ppsso').addClass('block');
        
        jQuery('#txt_send_date').datetimepicker({
          timepicker:false,
          format:'d/m/Y',
          minDate:'-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
          onChangeDateTime:function(dp,$input){
           jQuery('#txt_send_date').datetimepicker('hide');
          }              
        });
    }

    function CloseOpenEmailForm() {
        $('#fancierbox_ppsso').removeClass('block');
    }
    
    function SendEmailNotify(olid, mode) {
        var ctr = 'div_email_product_' + olid;
        var ctr_pop = 'div_email_product_tip_reveal_' + olid;
        
        if(ValidateEmailForm()) {
        
            var recipient_name = $("#txt_recipient_name").val();
            var recipient_email = $("#txt_recipient_email").val();
            var date_to_send = $("#txt_send_date").val();
        
            $.ajax({
                type: "POST",
                url: "emailProduct_backend.aspx",
                data: { olid: olid, recipient_name: recipient_name, recipient_email: recipient_email, date_to_send: date_to_send, mode: mode },
                dataType: "html",
                error: function(jqXHR, textStatus) {                        
                    ShawErrorOnEmailForm("", "Sorry save process fail. (" + textStatus + ")");
                    return;
                },            
                success: function(theResponse) {
                    returnCode = theResponse;
                    
                    switch(returnCode)
                    {
                        case "0":
                        {
                            if(mode=='D') {                                
                                $('#' + ctr).html("Email this Card");
                                $('#' + ctr_pop).html("Left it late? Don’t worry!! You can now send a free online version of the card to the recipient.<div class=\"copy_tip_reveal_arrow\"></div>");
                                $('#' + ctr).removeClass('emailProductItemPending');
                                $('#' + ctr).addClass('emailProductItem');
                                                                
                                $('#emailproduct_hidden_name_' + olid).val("");
                                $('#emailproduct_hidden_email_' + olid).val("");
                                $('#emailproduct_hidden_date_' + olid).val("");                                    
                            } else {
                                $('#' + ctr).html("E-Mail this on - " + $("#txt_send_date").val());
                                $('#' + ctr_pop).html("This product will be email to " + recipient_name + " ( Email : " + recipient_email + ")  on " + $("#txt_send_date").val() + "<div class=\"copy_tip_reveal_arrow\"></div>");
                                $('#' + ctr).removeClass('emailProductItem');
                                $('#' + ctr).addClass('emailProductItemPending');
                                                                
                                $('#emailproduct_hidden_name_' + olid).val(recipient_name);
                                $('#emailproduct_hidden_email_' + olid).val(recipient_email);
                                $('#emailproduct_hidden_date_' + olid).val(date_to_send);                                
                            }
                            
                            CloseOpenEmailForm();                            
                            break;
                        }
                        case "-2":
                        {
                            if(mode=='D') {
                                ShawErrorOnEmailForm("", "Sorry delete process fail. (Input data invalied.)");
                            } else {
                                ShawErrorOnEmailForm("", "Sorry save process fail. (Input data invalied.)");
                            }
                            break;
                        }                            
                        default:
                        {
                            if(mode=='D') {
                                ShawErrorOnEmailForm("", "Sorry delete process fail. (System error occure.)");
                            } else {
                                ShawErrorOnEmailForm("", "Sorry save process fail. (System error occure.)");
                            }                            
                            break;
                        }
                    }
                },
                timeout: 90000
            });                       
        }
    }
    
    function ValidateEmailForm() {
    
        if($("#txt_recipient_name").val().trim().length==0) {
            ShawErrorOnEmailForm("txt_recipient_name", "Please enter recipient name");
            return false;
        }
    
        if($("#txt_recipient_email").val().length==0) {
            ShawErrorOnEmailForm("txt_recipient_email", "Please enter recipient e-mail address");
            return false;
        }
        
        if(!validateForm($("#txt_recipient_email").val().trim())) {
            ShawErrorOnEmailForm("txt_recipient_email", "Please enter valid e-mail address");
            return false;                
        }
        
        if($("#txt_send_date").val().length==0) {
            ShawErrorOnEmailForm("txt_send_date", "Please enter date you wish to send");
            return false;
        }                    
    
        return true;
    }
    
    function validateForm(email) {            
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
            return false;
        }
        return true;
    }
    
    function RemoveErrorInEmailForm(ctr) {
        $(ctr).css({"background-color": ""});
        $("#shortlistPopup_error_message").html("");
    }
    
    function ShawErrorOnEmailForm(ctrn, msg) {
        if(ctrn.length>0) {
            $("#" + ctrn).css({"background-color": "red"});
        }
        
        $("#shortlistPopup_error_message").html(msg);
    }      
    
    /*
    ----------------------------------------------------------------------------------------------------------------------------------------------------------
    -- EMAIL PRODUCT SPECIAL FUNCTIONS  ** END **
    ----------------------------------------------------------------------------------------------------------------------------------------------------------    
    */
    
//     function  getFrameSize(url)
//    {
//        var pos = url.search('Frame_Wrapper_P')
//        if(pos >0) return "P";
//        else
//        {
//            pos = url.search('Frame_Wrapper_L')
//            
//            if(pos >0) return "L";
//            else return "S";
//            
//        }
//        
        //    }    

        //$("input[id$='detect_mobile_vp_wc_tmp']").val($("input[id$='detect_mobile_vp_wc']").val());
        $("input[id$='detect_mobile_vp_wc_tmp']").val("mobile");
            //if (sessionStorage.getItem("mm_mob_editor")) {
            //    $("input[id$='detect_mobile_vp_wc_tmp']").val("mobile_wc");
            //} else {
            //    $("input[id$='detect_mobile_vp_wc_tmp']").val("mobile");
        //}

        function initialiseBraintree(page, method) {
            var data = {};
            $.ajax({
                type: "POST",
                url: "/pages/" + page + "/" + method,
                data: data,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                error: function (jqXHR, textStatus) {
                    //setMessage(true, 'Error occure while calling Server method ' + method, "");
                    //alert('error');
                    return;
                },
                success: function (msg) {
                    //alert(msg.d);
                    var clientToken = msg.d; //'';
                    if (clientToken.length > 0) {
                        braintree.client.create({ authorization: clientToken }, function (clientErr, clientInstance) {
                            if (clientErr) {
                                console.error('Error creating client:', clientErr);
                                return;
                            }

                            braintree.paypalCheckout.create({
                                client: clientInstance
                            }, function (paypalErr, paypalInstance) {
                                paypal.Button.render({
                                    commit: true,
                                    env: 'production', // specify 'production' in live environment
                                    style: {
                                        label: 'checkout',
                                        size:  'responsive',    // small | medium | large | responsive
                                        shape: 'rect',     // pill | rect
                                        color: 'blue'      // gold | blue | silver | black
                                    },
                                    locale: 'en_GB',
                                    payment: function () {
                                        // Set up the payment here, when the buyer clicks on the button
                                        return paypalInstance.createPayment({
                                            flow: 'checkout', //vault
                                            amount: '58.72',
                                            currency: 'GBP',
                                            intent: "sale",
                                            displayName: 'funkypigeon.com Limited',
                                        });
                                    },

                                    onAuthorize: function (data, actions) {
                                        // Execute the payment here, when the buyer approves the transaction
                                        return paypalInstance.tokenizePayment(data).then(function (payload) {
                                            CreateOrder(payload.nonce, actions);
                                        })
                                    },

                                    onCancel: function (data) {
                                        // Handle closing the payment window or clicking the cancel link
                                        //location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=Payment cancel";
                                    },

                                    onError: function (err) {
                                        console.log(err.stack);
                                    }
                                }, '#paypal-button'); $('.paypal_loader').hide();
                            });                        
                        });

                    } else {
                        alert("Error!");
                    }
                }
            });
        }

        function CreateOrder(nonce, ac) {
            $('.paypal_loader').show();
            var data = '{"mode": 1, "nonce": "' + nonce + '", "amount": "0"}';
            $.ajax({
                type: "POST",
                url: "/Pages/Payment/PaypalOrderPayment.aspx/CreateTransaction",
                data: data,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                error: function (jqXHR, textStatus) {
                    location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=Error in Create Order!";
                },
                success: function (msg) {
                    var res = eval(msg.d);
                    if (res.ErrorCode == "0") {
                        location.href = "/pages/payment/OrderConfirmation.aspx";
                    } else if (res.ErrorCode == "2074") {
                        $('.paypal_loader').hide();
                        var nod = $("#txt_no_of_decline").val();
                        nod = parseInt(nod) + 1;
                        $("#txt_no_of_decline").val(nod);
                        if (nod < 3) {
                            ac.restart();
                        } else {
                            location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=Decline!";
                        }
                    } else {
                        var errorString = res.Error;
                        location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=" + errorString;
                    }
                }
            });
            GTMcheckoutChoice('paypal');
        }

        var Ids="10391,10391,10391,133247,149009,163747";
        //orderedProduct(Ids);
        //console.log('prod is is' +Ids);

        //console.log('LAST THING TO LOAD');

        function onVisaCheckoutReady(){
            V.init( {"apikey": "SHFXEEENG1DRM9V4G3JH21uxRhUQ0i6a_hIpXk4FJCDC7CIzc","paymentRequest":{"currencyCode": "GBP","total": "58.72","orderId": "29027503"},"settings": {"locale": "en_GB","displayName": "Funky Pigeon"}});
                     
            V.on("payment.success", function(payment)
            {
               $.ajax({
                    type: "POST",
                    url: "/Pages/payment/PaymentReview.aspx/GetVisaPaymentData",
                    data: JSON.stringify({ visaPayment: JSON.stringify(payment) }),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (msg) {
                        console.log(msg);
                        var res = eval(msg.d);
                        if (res.ErrorCode == "1") {
                            location.href = "/pages/payment/PaymentReview.aspx";
                        }
                        else
                        {                            
                            var errorString = res.Error;
                            location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=" + errorString;
                        }
                    }
                });    
        });

        V.on("payment.cancel", function(payment)
        {
            //
        });

        V.on("payment.error", function(payment, error)
        {
            var errorString = error;
           // location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=" + errorString;
        });
       }


        //LayBuy Payment
        function LayBuyOrderCreate() {
            var phoneNo = $("#ctl00_ContentPlaceHolder1_layBuyPhoneNo").val();
            //console.log(phoneNo);           
            if (phoneNo == null || phoneNo == 'undefined' || phoneNo == '') {
                $('body').append("<div id='laybuy-pop'></div>");
                $('#laybuy-pop').load('/Pages/Payment/LayBuy/LaybuyPhoneNo.aspx');
                //location.href = "http://localhost:1728/Pages/Payment/LayBuy/LaybuyPhoneNo.aspx";
                $('#ctl00_ContentPlaceHolder1_divLayBuyButton .laybuy_checkout_btn').addClass('popup_activated');
            }
            else {
                 $.ajax({
                    type: "POST",
                    url: "/Pages/payment/Laybuy/LaybuyOrderPayment.aspx/Createorder",
                    data: '{"LayBuyPhoneNo": "' + phoneNo + '"}',
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (msg) {
                        var res = eval(msg.d);
                        //console.log(res.result);
                       //var res = eval(msg.d);
                        if (res.result.toUpperCase() == "SUCCESS") {
                            location.href = res.paymentUrl;
                        }
                        else
                        {                            
                            //var errorString = res.error;
                            location.href = "/pages/payment/PaymentError.aspx?IssueDetails=&ErrorDetails=" + res.error;
                        }
                    }
               });
            }

            //FADE POPUP BACK IN
            $('#ctl00_ContentPlaceHolder1_divLayBuyButton .laybuy_checkout_btn').click(function () {
                if ($(this).hasClass('popup_activated')) {
                    $('#laybuy-pop').fadeIn(200);
                }
            });

        }