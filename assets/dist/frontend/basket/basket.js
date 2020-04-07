
$(function () {
    
    

    //get cust image
    if (localStorage.mmImgUsed) {
        var basketImgUsed = localStorage.mmImgUsed;
    }

    /* UPSELL BLOCKS */
	var keyringBlock = '<div class="upsell_block keyring_upsell_half">\
	                      <div class="mm_product_thumb mm_keyring_thumb left">\
	                            <div class="mm_keyring_thumb_image" style="background-image:url(' + basketImgUsed + ')"></div>\
	                      </div>\
	                      <div class="upsell_text_button_holder left">\
	                            <p>Personalised Keyring<br>\
	                            <span class="upsell_end_text">1 for &pound;3.99, 2 for &pound;6 and 3 for &pound;7.50</span></p>\
	                            <a class="editor_link" href="/pages/customisekeyring.aspx?productid=147098&basket=1">Make a Keyring Now</a>\
	                        </div>\
	                    </div>';

	var photoblockBlock = '<div class="upsell_block photoblock_upsell_half">\
                            <div class="mm_product_thumb mm_photoblock_thumb left">\
                                <div class="mm_overlay_wrap photoblocks_wrap"><img class="mm_overlay" src="/assets/dist/images/photoblock_overlay_basket.png"/><div class="mm_overlay_thumb_image" style="background-image:url(' + basketImgUsed + ')"> </div></div>\
                            </div>\
                            <div class="upsell_text_button_holder left">\
                                <p>6x4" Photo Block<br>\
                                <span class="upsell_end_text">only £9.99</span></p>\
                                <a class="editor_link" href="/pages/CustomisePhotoBlock.aspx?productid=162200&basket=1">Make a Photo Block Now</a>\
                            </div>\
                        </div>';

	var cushionBlock = '<div class="upsell_block cushion_upsell_half">\
                            <div class="mm_product_thumb mm_cushion_thumb left">\
                                <div class="mm_cushion_thumb_image" style="background-image:url(' + basketImgUsed + ')"></div>\
                            </div>\
                            <div class="upsell_text_button_holder left">\
                                <p>Personalised Cushion<br>\
                                <span class="upsell_end_text">only £19.99</span></p>\
                                <a class="editor_link" href="/pages/CustomiseCushions.aspx?productid=124753&basket=1">Make a Cushion Now</a>\
                            </div>\
                        </div>';

	var magnetBlock = '<div class="upsell_block magnet_upsell_half">\
                            <div class="mm_product_thumb mm_magnet_thumb left">\
                                <div class="mm_magnet_thumb_image" style="background-image:url(' + basketImgUsed + ')"></div>\
                            </div>\
                            <div class="upsell_text_button_holder left">\
                                <p>Personalised Magnet<br>\
                                <span class="upsell_end_text">1 for &pound;3.99, 2 for &pound;6 and 3 for &pound;7.50</span></p>\
                                <a class="editor_link" href="/pages/customisefridgemagnet.aspx?productid=158187&basket=1">Make a Magnet Now</a>\
                            </div>\
                        </div>';

	var coasterBlock = '<div class="mm_keyring"><img src="/Images/Basket/CoasterBlank.png"/></div>\
							<p>Your photos would make great coasters!<br>\
							<span class="upsell_end_text">Buy 1 for &pound;3.99, 2 for &pound;6, 4 for &pound;10</span></p>\
					   		<a class="editor_link" href="../../pages/customisecoaster.aspx?productid=147172&basket=1">Make a Coaster Now</a>';

	var coasterGenericBlock = '<div class="mm_keyring"><img src="/Images/Basket/CoasterBlank.png"/></div>\
							    <p>Create a coaster to go with this!<br>\
							    <span class="upsell_end_text">Buy 1 for &pound;3.99, 2 for &pound;6, 4 for &pound;10</span></p>\
					   		    <a class="editor_link" href="../../pages/customisecoaster.aspx?productid=147172">Make a Coaster Now</a>';

	var chocolateBlock = '<img src="/Images/Basket/choc_box_mobile.png" class="frame_upsell_image"/>\
										 <div class="upsell_card chocCard"></div>\
		                                 <p><span class="upsell_wow">Give your card a chocolate twist.</span></p>\
										 <a class="mm_choc_trigger">Click Here</a>\
										 <span class="upsell_end_text">&amp; make it a luxury chocolate card.</span>';

	var npScoffyBlock = '<div class="mob-all dt-1of2 letter-box-no"> \
                                  <div class="upsell_thumb" data-ad-type="scoffy"> \
                                      <picture> \
                                           <source media="(min-width:737px)" srcset="/assets/dist/images/choccy-scoffy.jpg" /> \
                                           <source media="(min-width:1px)" srcset="/assets/dist/images/choccy-scoffy.jpg" /> \
                                           <img src="/assets/dist/images/choccy-scoffy.jpg" alt="" /> \
                                      </picture> \
									  <div class="mm_ingreds">i</div> \
                                  </div> \
                                  <div class="upsell_info"> \
                                      <span class="txt_purple_22">Choccy Scoffy</span><br> \
                                      <span class="txt_black_12">only £4.99 extra</span> \
                                  </div> \
                                  <a class="btn-add" data-ad-type="scoffy">+ Add</a> \
                              </div>';

	var npLilly = '<div class="mob-all dt-1of2"> \
                                  <div class="upsell_thumb" data-ad-type="lilly"> \
                                      <picture> \
                                           <source media="(min-width:737px)" srcset="/assets/dist/images/lilly-obriens.jpg" /> \
                                           <source media="(min-width:1px)" srcset="/assets/dist/images/lilly-obriens.jpg" /> \
                                           <img src="/assets/dist/images/lilly-obriens.jpg" alt="" /> \
                                      </picture> \
									  <div class="mm_ingreds">i</div> \
                                  </div> \
                                  <div class="upsell_info"> \
                                      <span class="txt_purple_22">Lilly Obriens</span><br> \
                                      <span class="txt_black_12">only £12.99 extra</span> \
                                  </div> \
                                  <a class="btn-add" data-ad-type="lilly">+ Add</a> \
                              </div>';


    /* UPSELL BLOCKS */
	function npUpsell(thisObj) {
	    thisObj.append('<div class="frame_upsell_wrapper"></div>');
	    thisObj.find('.frame_upsell_wrapper').append(npScoffyBlock + npLilly);
	}

	function chocolateUpsell(thisObj) {

	    if (thisObj.find('.chocoCardBtn').length == 1) {
	        var cardDupe = thisObj.find('.item_thumb').attr('src');
	        var cardDupeHeight = thisObj.find('.item_thumb').height();
	        var cardDupeWidth = thisObj.find('.item_thumb').width();
	        thisObj.find('.frame_upsell_wrapper').remove();

	        if ($('input[id="chocolateUpsell"]').val() > 0) {
	            moveUpsellsMobile(thisObj);
	            thisObj.find('.frame_upsell_wrapper').addClass('choc');
	            thisObj.find(".frame_upsell_wrapper").append(chocolateBlock);

	            if ($("input#ctl00_uclHeader1_detect_mobile_vp").val() == "mobile_vp") {
	                $(".mm_choc_trigger").text("Make this a Chocolate Card");
	            }

	            thisObj.find('.chocoCardBtn').hide();
	            thisObj.find('.upsell_card').append("<img src='" + cardDupe + "'/>");
	            if (cardDupeHeight < cardDupeWidth) { thisObj.find('.upsell_card').addClass("ChocLandscape"); }
	            
	        }
	    }
	    else {
	        thisObj.addClass('MM_show_frame_button');
	    }
	};

    //input checks for multi upsells	
	function inputChecks(thisObj) {

	        if ($('input[id="keyringBlock"]').val() > 0) {
                thisObj.find(".frame_upsell_wrapper").append(keyringBlock);
	        }
	        if ($('input[id="photoBlock"]').val() > 0) {
	            thisObj.find(".frame_upsell_wrapper").append(photoblockBlock);
	        }
	        if ($('input[id="magnetBlock"]').val() > 0) {
	            thisObj.find(".frame_upsell_wrapper").append(magnetBlock);
	        }
	        if ($('input[id="cushionBlock"]').val() > 0) {
	            thisObj.find(".frame_upsell_wrapper").append(cushionBlock);
	        }
	}

    // blocks to use in case of band
	function bandUpsells(thisObj) {
	    if ($('input[id="keyringBlock"]').val() > 0) {
	        thisObj.find(".frame_upsell_wrapper").append(keyringBlock);
	    }
	    if ($('input[id="photoBlock"]').val() > 0) {
	        thisObj.find(".frame_upsell_wrapper").append(photoblockBlock);
	    }
	    thisObj.find(".frame_upsell_wrapper").append(cushionBlock);
	}

    // count multi upsells for styles
	function countUpsells(thisObj) {
	    var countBlocks = thisObj.find(".upsell_block").length;

	    if (countBlocks == 3)
	    {
	        $(".frame_upsell_wrapper").addClass('three_upsells');
	    }
	    if (countBlocks == 2) {
	        $(".frame_upsell_wrapper").addClass('two_upsells');
	    }
	    if (countBlocks == 1) {
	        $(".frame_upsell_wrapper").addClass('single_upsell');
	    }
	}

    // multiple upsell blocks
	function multiUpsell(thisObj) {
	    thisObj.find('.keyring_upsell').remove();

	    if ($('input[name="multiupsellblock"]').val() > 0) {

            moveUpsellsMobile(thisObj);
            thisObj.find('.frame_upsell_wrapper').addClass('keyring_upsell');
            thisObj.find('.frame_upsell_wrapper').append("<h3>Your photos would make a great...</h3>")
	    }

	    bandCheck(thisObj);

	    countUpsells(thisObj);
	};

    // check higher price band
	function bandCheck(thisObj) {
	    if ($('input[id="bandCheck"]').val() > 0) {
	        
	        if ($('#ctl00_uclHeader1_averageOrderBand').val() >= '5') {
	            bandUpsells(thisObj);
	        }
	        else {
	            inputChecks(thisObj);
	        }
	    }
	    else {
	        inputChecks(thisObj);
	    }
	}

	// coaster upsell
	function coasterUpsell(thisObj){
	    // Portrait Card
	    thisObj.find('.frame_upsell_wrapper').remove();
	    if ($('input[id="coasterUpsell"]').val() > 0) {
	        moveUpsellsMobile(thisObj);
	        thisObj.find('.frame_upsell_wrapper').addClass('coaster_upsell');
	        thisObj.find('.frame_upsell_wrapper').append(coasterBlock);
	    }
	};
	
	function coasterUpsellGeneric(thisObj){
	    // Portrait Card
	    thisObj.find('.frame_upsell_wrapper').remove();
	    if ($('input[id="coasterUpsell"]').val() > 0) {
	        moveUpsellsMobile(thisObj);
	        thisObj.find('.frame_upsell_wrapper').addClass('coaster_upsell');
	        thisObj.find('.frame_upsell_wrapper').append(coasterGenericBlock);
	    }
	};

    // wrap and move upsells for mobile 
	function moveUpsellsMobile(thisObj) {
	    if ($("input#ctl00_uclHeader1_detect_mobile_vp").val() == "mobile_vp") {
	        thisObj.find('.basket_options_holder').before('<div class="frame_upsell_wrapper"></div>');

	    }
	    else {
	        thisObj.append('<div class="frame_upsell_wrapper"></div>');
	    }
	}

    // change links for mobile
	function changeLinksMobile() {
	    if ($("input#ctl00_uclHeader1_detect_mobile_vp").val() == "mobile_vp") {
	        $('.frame_upsell_wrapper a.editor_link').each(function () {
	            this.href = this.href.replace('.aspx', 'mobile.aspx');
	        });
	    }
	}
	

    // Keyring Check
	var keyringCheck = $(".BasketItemContents[data-product-type='KeyRing']").length;
	var keyringPUCheck = $(".BasketItemContents[data-product-type='KeyRing PU']").length;
	console.log('non pu keyring count is ' + keyringCheck + '');

    // Magnet Check 
	var magnetCheck = $(".BasketItemContents[data-product-type='Fridge Magnet']").length;
	var magnetPUCheck = $(".BasketItemContents[data-product-type='Fridge Magnet PU']").length;
	console.log('mag count is ' + magnetCheck + '');

	console.log('pu keyring count is ' + keyringPUCheck + '');
    // Coaster Check
	var coasterPUCheck = $(".BasketItemContents[data-product-type='Coaster_PU']").length;
	var coasterCheck = $(".BasketItemContents[data-product-type='Coaster']").length;
	console.log('pu coaster count is ' + coasterPUCheck + '');
	console.log('coaster count is ' + coasterCheck + '');

	var nonPUCheck = $(".BasketItemContents[data-product-type='Card']").length;
	var giftcardCheck = $(".BasketItemContents[data-product-type='Gift Card']").length;
	var nppCheck = $(".BasketItemContents[data-product-type='NonPersonalisedProducts']").length;
	var addonZoom = function () { console.log('Zoom'); $('#mm-flowers-add').toggle().fadeIn(); };


    // check if photo upload card
	$(".BasketItemContents[data-product-type*='Photo Upload']").each(function () {
	    
	    if (keyringCheck >= 1 || keyringPUCheck >= 1) {
	        chocolateUpsell($(this));
	    }
	    else {
	        multiUpsell($(this));
	    }
	});
    // check for calendar
    // check if photo upload card
	$(".BasketItemContents[data-product-type='Photo Upload Calendar']").each(function () {
	    if (coasterPUCheck >= 1 || coasterCheck >= 1) {
	        // do nothing
	    }
	    else {
	        multiUpsell($(this));
	    }
	});
    // check for mug
	$(".BasketItemContents[data-product-type='Photo Upload Mug']").each(function () {
	    if (coasterPUCheck >= 1 || coasterCheck >= 1) {
	        // do nothing
	    }
	    else {
	        coasterUpsell($(this));
	    }
	});
	$(".BasketItemContents[data-product-type='Mug']").each(function () {
	    if (coasterPUCheck >= 1 || coasterCheck >= 1) {
	        // do nothing
	    }
	    else {
	        coasterUpsellGeneric($(this));
	    }
	});
    // check for glasses
	$(".BasketItemContents[data-product-type='Personalised Glasses']").each(function () {
	    if (coasterPUCheck >= 1 || coasterCheck >= 1) {
	        // do nothing
	    }
	    else {
	        coasterUpsellGeneric($(this));
	    }
	});
    // check for glasses
	$(".BasketItemContents[data-product-type='Personalised Alcohol']").each(function () {
	    if (coasterPUCheck >= 1 || coasterCheck >= 1) {
	        // do nothing
	    }
	    else {
	        coasterUpsellGeneric($(this));
	    }
	});

	$('.mm_frame_trigger').click(function () {
	    //$(this).find('.frameCardBtn').trigger('click');
	    $(this).parent().parent().parent().find('.frameCardBtn').trigger('click');
	});

	$('.mm_choc_trigger').click(function () {
	    //$(this).find('.frameCardBtn').trigger('click');
	    $(this).parent().parent().parent().find('.chocoCardBtn').trigger('click');
	});

    // non photo card check
	if (!giftcardCheck >= 1 && !nppCheck >= 1) {
	    $(".BasketItemContents[data-product-type='Card']").each(function () {
	        npUpsell($(this));//kcs_coding
	    });
	}

    // store choc and redirect to add gift page
	$('.frame_upsell_wrapper .btn-add').click(function () {
	    var addType = $(this).data('ad-type');
	    //console.log(addType);
	    sessionStorage.ChocAdd = addType;
	    $(this).parent().parent().parent().find('.giftCardBtn')[0].click();
	});

    // info panel open
	$('.upsell_thumb').click(function () {
	    var popItem = $(this).data('ad-type');
	    $("#mm-flowers-add").removeClass().addClass(popItem);
	    console.log(popItem);
	    $(this).parent().parent().parent().addClass('flower-p-active');

	    $('#mm-flowers-add').toggle().fadeIn();
	    $('.mm-choc-add').attr('data-ad-type', popItem);
	    $('.btn-add').attr('data-ad-type', popItem);
	    
	});

    // add gift from info pop up btn
	$('.mm-flower-add, .mm-flowers-add-wrap .btn-add, .mm-choc-add').click(function () {
	    var addOnType = $('.mm-choc-add').data('ad-type');
	    sessionStorage.ChocAdd = addOnType;
	    $('.flower-p-active').find('.giftCardBtn')[0].click();
	});

    // close gift info btn
	$('.mm-flowers-close img').click(function(){
	    
	    $('#mm-flowers-add').hide();
	    $('.BasketItemContents').removeClass('flower-p-active');
	    console.log('close click');
	});




	changeLinksMobile();
	
});
console.log('BASKET UPSELL CUSHIONS');
