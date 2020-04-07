//$(document).ready(function () {
    //unselectAll();
//});

// Global variable to keep track of the current paginated page
var currentPaginatedPage = 1;
var totalNumberOfPaginatePages = 0;

var MoreInfoFeatures = function () {
    //ACTIVATE POPUP
    $('.item_inside3 a[rel]').click(function () {
        var selectedProductID = $(this).attr('rel').replace('#', '');
        $('#' + selectedProductID + '.apple_overlay').addClass('active_info_popup');
        $('.popup_screen_fadeout').fadeIn(200);

        //CREATE THUMB IMAGES
        var popup_thumb_image_src_1 = $('#' + selectedProductID + ' #thumb_image_1').attr('value');
        var popup_thumb_image_src_2 = $('#' + selectedProductID + ' #thumb_image_2').attr('value');
        var popup_thumb_image_src_3 = $('#' + selectedProductID + ' #thumb_image_3').attr('value');

        $('#' + selectedProductID + ' #imgProductImage').attr('src', popup_thumb_image_src_1);
        $('#' + selectedProductID + ' .np_thumb_1 img').attr('src', popup_thumb_image_src_1);
        $('#' + selectedProductID + ' .np_thumb_2 img').attr('src', popup_thumb_image_src_2);
        $('#' + selectedProductID + ' .np_thumb_3 img').attr('src', popup_thumb_image_src_3);

    });

    //CLOSE POPUP
    $('.close_popup_btn').click(function () {
        $('.apple_overlay').removeClass('active_info_popup');
        $('.popup_screen_fadeout').fadeOut(200);
    });

    //SWITCH IMAGE
    $('.ProductImageWrapper a').click(function () {
        var selectedThumbSrc = $(this).find('img').attr('src');
        $('.active_info_popup #imgProductImage').attr('src', selectedThumbSrc);
        $('.ProductImageWrapper a').removeClass('active_thumb');
        $(this).addClass('active_thumb');
    });

    //NEXT IMAGE BTN
    $('.np_next_btn').click(function () {
        var selectedNextThumbSrc = $('.active_info_popup .active_thumb').next().find('img').attr('src');
        var selectedNextThumb = $('.active_info_popup .active_thumb').next();

        if ($('.active_info_popup .np_thumb_3').hasClass('active_thumb')) {
            $('.active_info_popup .np_thumb_1').trigger('click');
        } else {
            $('.active_info_popup #imgProductImage').attr('src', selectedNextThumbSrc);
            $('.ProductImageWrapper a').removeClass('active_thumb');
            $(selectedNextThumb).addClass('active_thumb');
        }
    });

    //PREVIOUS IMAGE BTN
    $('.np_prev_btn').click(function () {
        var selectedPrevThumbSrc = $('.active_info_popup .active_thumb').prev().find('img').attr('src');
        var selectedPrevThumb = $('.active_info_popup .active_thumb').prev();

        if ($('.active_info_popup .np_thumb_1').hasClass('active_thumb')) {
            $('.active_info_popup .np_thumb_3').trigger('click');
        } else {
            $('.active_info_popup #imgProductImage').attr('src', selectedPrevThumbSrc);
            $('.ProductImageWrapper a').removeClass('active_thumb');
            $(selectedPrevThumb).addClass('active_thumb');
        }
    });

    //POPUP ADD BTN
    $('.add_btn').click(function () {
        var selectedProductClick = $(this).attr('data-productid');
        $('.FPCheckBox [value="' + selectedProductClick + '"]').trigger('click');
        $('.apple_overlay').removeClass('active_info_popup');
        $('.popup_screen_fadeout').fadeOut(200);
    });
};

var addGiftToPurchase = function (agpId, isAgeVerify) {
    
    $('input.FPCheckBox[value="' + agpId + '"]')[0].click();
    var readout = $('input[name="ctrName' + agpId + '"]').parent().parent().find('.qg_feedback_tick').length;
    //console.log(readout);
    giftChosenFeedback(agpId, isAgeVerify);
    if ($('input[name="ctrName' + agpId + '"]').parent().parent().parent().parent().hasClass('GC_IMG')) {
        $('.qg_product .qg_feedback_tick').remove();
    }

    $('input[name="ctrName' + agpId + '"]').parent().parent().find('.gift_card_thumb').prepend("<div class='qg_feedback_tick'></div>");
    //$('input[name="ctrName' + agpId + '"]').parent().parent().addClass('qgItemSelected');

    if (readout == 0)
    {
        if (isAgeVerify) {
            setUnsetAgeVerification(agpId, true);
        }
    }

    if ($('#ctrGiftWrap' + agpId).length && $('#giftWrapActive').val() == 1) {
        if (readout > 0) {
           // do nothing as removing item
        }
        else {
            var selectedGWrap = $('#ctrGiftWrap' + agpId).val();
            var giftWrapImageExt = '';
            if (giftWrapImageExt.length > 0) {
                giftWrapImageExt = "-" + giftWrapImageExt;
            }
            //console.log('OFFER GIFT WRAP UPSELL');
            $('body').append('<div class="div_product_more_info QG_GWrap"><div class="apple_overlay black active_info_popup" data-giftbagtype="gb' + giftWrapImageExt + '"><h2>Add a Gift Bag</h2><div class="close_popup_btn" onclick="javascript:GW_hide();"></div><div class="gift_bag" style="display: block;"><img src="/assets/dist/images/NPP-gift-bags-pop' + giftWrapImageExt + '.jpg"></div><div class="hs_right_section"><p class="gb-everyday">Your gift will be hand packed in one of our gorgeous black or white patterned gift bags complete with ribbon handles, to ensure that special someone receives the perfect present!</p><p class="gb-birthday">Your gift will be hand packed in one of our gorgeous multi-coloured patterned gift bags complete with ribbon handles, to ensure that special someone receives the perfect present!</p><input id="price_of_' + agpId + '" type="hidden" value="' + selectedGWrap + '" /><div class="purple_btn" onclick="javascript:GWAddWrap(' + agpId + ');">Add Gift Bag (+£' + selectedGWrap + ')</div></div></div>');
            $('.popup_screen_fadeout').show();
        } 
    }
    
};

var setUnsetAgeVerification = function (agpId, set) {
    if (set) {
        var age_verify_string = parseInt($("#ageVerify").val()) + 1;
        $("#ageVerify").val(age_verify_string);
    } else {
        var age_verify_count = parseInt($("#ageVerify").val()) - 1;
        $("#ageVerify").val(age_verify_count);
    }

    if (parseInt($("#ageVerify").val()) > 0) {
        $("#div_age_confirm").show();
    } else {
        $("#div_age_confirm").hide();
    }
    
    //console.log("addGiftToPurchase - " + $("#ageVerify").val());
}

var GW_hide = function () {
    $('.div_product_more_info.QG_GWrap').remove();
    $('.popup_screen_fadeout').hide();
};

var GWAddWrap = function (agpId) {
    $('#ctrGiftWrap' + agpId)[0].click();
    var gift_bag_price = $('#price_of_' + agpId).val();
    var current_selected_gift = $('.select_product_title_' + agpId).html();

    $('.select_product_title_' + agpId).html(current_selected_gift + '<div class="gift_bag_added">Gift Bag Added (£' + gift_bag_price +')</div>');
    //console.log(current_selected_gift);
    //console.log(gift_bag_price);
    GW_hide();
};

$(document).ready(function () {
    $(function() {
        $('.GC_IMG .gc_wrapper .qg_product:last-child').appendTo($('.itunes_card_holder'));
        $('.itunes_terms').appendTo($('.GC_IMG .gc_wrapper'));
        
    });

    if ($('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_giantCard').hasClass('giantShow')) {
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').addClass('two-column-gifts');
    }

    MoreInfoFeatures();
    
    $('.gift_card_thumb').click(function(){
        $('.qg_body_loader').before($('.apple_overlay'));
        console.log('GC INFO');
    });
    
    // ADD CLASS TO DIVS //
    $('.qg_holder[alt=qg_number_7]').addClass('GC_IMG');
    $('.qg_holder[alt=qg_number_8]').addClass('CHOC_IMG');
    $('.qg_holder[alt=qg_number_9]').addClass('BEAR_IMG');
    $('.qg_holder[alt=qg_number_22]').addClass('OTHER_IMG');
    $('.qg_holder[alt=qg_number_2689]').addClass('OTHER_IMG');
    $('.qg_holder[alt=qg_number_2693]').addClass('CHOC_IMG');
    
    var countryCode='';
    if (countryCode != '') {
        $('.qg_holder[alt=qg_number_7]').hide();
    }

    // MOVE TABS TO TAB HOLDER //
    var count_qg_products = $('.gc_wrapper').length;
    $('.qg_tab_holder').addClass('qg_display_' + count_qg_products);
    $('.qg_body_wrapper').addClass('qg_display_' + count_qg_products);
	
	$('.qg_body_wrapper').fadeIn();
    $('.qg_body_loader').fadeOut();
    
    $('.qg_holder:nth-child(even)').css('margin-right','0');

    addFromBasket();

    // ADD CHOCOLATE NON PHOTO UPSELL //
    $('body').addClass('mm-hide');
    if (sessionStorage.ChocAdd == 'scoffy' || sessionStorage.ChocAdd == 'lilly') {
        // do nothing
    }
    else {
        $('#mobile').css('visibility', 'visible');
        $('body').removeClass('mm-hide');
    }
    console.log("Pick Choc");
    
    

});


$(window).load(function () {
    if (sessionStorage.ChocAdd == 'scoffy' || sessionStorage.ChocAdd == 'lilly') {
        $('.qg_number_2693')[0].click();
        checkChoc();
    }
});

var chooseChoc = function () {
    
    console.log('Choose Choccy');
    if (sessionStorage.ChocAdd == 'scoffy') {
        addGiftToPurchase(146827);
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_imgNextSetp2')[0].click();
    }
    if (sessionStorage.ChocAdd == 'lilly') {
        addGiftToPurchase(146818);
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_imgNextSetp2')[0].click();
    }
    sessionStorage.removeItem('ChocAdd');
    
}
var checkCount = 0;

var checkChoc = function () {
    setTimeout(function () {
        var chocCount = $('.qg_number_2693 .qg_product').length;
        if (chocCount > 0) {
            chooseChoc();
        }
        else {
            if (checkCount < 6) {
                var checkCount = +1;
                checkChoc();
                console.log(chocCount);
                console.log(checkCount);
            }
            else {
                $('#mobile').css('visibility', 'visible');
                $('body').removeClass('mm-hide');
            }
        }
    }, 500);
};

var addFromBasket = function () {
    var GCPrevious = document.referrer;
    var GCPreviousCheck = GCPrevious.indexOf('Basket') > -1;
    if (GCPreviousCheck) {
        $('.page_title_wrapper h1').text('Gift Cards & Quick Gifts');
        $('.qg_tab[alt=qg_number_7]')[0].click();
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_imgBack2, #ctl00_ContentPlaceHolder1_uclGiftCardMall1_imgBack').hide();
    }
    else {
        //console.log('cant find document referer');
    }
    //console.log('FUNCTION addFromBasket');
};

function unselectAll() {
    $(".FPCheckBox").prop('checked', false);
    $(".block_remove_qg_selection").slideUp();
    $(".block_selected").remove();
    $('.FPCheckBox').removeClass('checked selected');
    $('.qg_product .qg_feedback_tick').remove();
}


//ADD AND REMOVE ACTIVE CLASS
$('.qg_viewmore_btn').click(function() {
    $('.qg_holder').removeClass('active');
    $('.qg_viewmore_btn').parent().removeClass('active');
	$(this).parent().addClass('active');
	// FIND ALT TAG AND STORE //
	var qg_active = $(this).parent().attr('alt');
	$('.qg_tab_holder .'+ qg_active).addClass('active');					
	$('.qg_viewmore_btn').hide();
				
	//ADJUST HEIGHT OF CONTENT HOLDER
	var QGheight = $('.qg_holder.active').height();
	$('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height(QGheight);	
		
});
	
// OPEN FROM TABS
$('.qg_tab').click(function () {        
    if ($(this).parent().hasClass('active')) {
        tabs_close();
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').removeClass().addClass('qg_body_wrapper').addClass("qg_display_" + $('.gc_wrapper').length);

        //GIANT CARD
        if ($('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_giantCard').hasClass('giantShow')) {
            $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').addClass('two-column-gifts');
        }

    }
    else {
        var fpCatId = $(this).siblings('.fpCatId').val();
        var displayName = $(this).siblings('.displayName').val();
        if (fpCatId != undefined && displayName != undefined) {
            $(this).siblings('.gc_wrapper').html("<img class='qg_load' src='/assets/dist/images/mm_loading.gif' />");
            $(this).siblings('.npp_pagination').remove();
            getData(displayName, fpCatId, 1);
        }
        $('.qg_viewmore_btn').hide();
        $(this).find('.qg_close_btn').show();
        $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').removeClass().addClass('qg_body_wrapper').addClass($(this).attr('alt'));
        tab_open_f($(this));

        //GIANT CARD
        if ($('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_giantCard').hasClass('giantShow')) {
            $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').addClass('two-column-gifts');
        }
                  
    }        
});

function getData(displayName, fpCatId, currentPage) {
    var productsPerPage = 16;
    var page = "/home/personal_giftsList";
    var data = '{"displayName": "' + displayName + '", "fpCatId":"' + fpCatId + '", "catList":"", "currentPage":"' + currentPage + '", "productsPerPage":"' + productsPerPage + '"}';
    
    $.ajax({
        type: "POST",
        url: page,
        data: data,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function (jqXHR, textStatus) {
            alert('Error occure while calling Server method npplist');
            return;
        },
        success: function (msg) {
            $('.qg_holder.active').children('.gc_wrapper').append(msg.d.productListString);
            var QGheight = $('.qg_holder.active').height();
            $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height(QGheight);
            setPagination(msg.d.noOfAvailablePages);
            //addGiftToPurchase();
            //giftChosenFeedback();
            mobileAdd();
            $('.qg_load').remove();
            $('#view_more_btn').removeClass("loading_more_gifts");
        }
    });
}

function setPagination(numberOfPages) {
    // Setting global value for total paginate pages
    totalNumberOfPaginatePages = numberOfPages;        
    if ($('.qg_holder.active').children('.npp_pagination').length === 0 && numberOfPages > 1) {
        var id = Date.now();
        var displayName = ($('.qg_holder.active').children('.displayName').val()).replace(/\s/g, "-");
        $('.qg_holder.active').append("<div id=\"" + id + "\" class=\"npp_pagination load_more_gifts\"></div>");
        var paginationElement = $('.qg_holder.active').children('.npp_pagination');            
        var viewMoreElement = '<a href="' + displayName + '\\page-2" class="active" id="view_more_btn" onclick="return selectNppPage(2, this)"><div class="continue_loader"></div>' + "View more " + displayName.replace(/-/g, " ") + '</a>';
        paginationElement.append(viewMoreElement);
    }
}

function handleArrowNaviagtion(direction) {
    var currentPage = Number($('.qg_holder.active > .npp_pagination > .active').html());
    var totalPages = ($('.qg_holder.active > .npp_pagination').children().length) - 2;
    if (direction == '0' && ((currentPage - 1) != 0)) {
        selectNppPage(currentPage - 1);
    } else if (direction == '1' && (currentPage) != totalPages) {
        selectNppPage(currentPage + 1);
    }
    return false;
}

function selectNppPage(page, element) {
    //setting global current page value
    currentPaginatedPage = page;
    var viewMoreBtn = $(".qg_holder.active > .npp_pagination > a");
    var viewMoreHrefVal = viewMoreBtn.attr("href");
    var viewMoreOnclickVal = viewMoreBtn.attr("onclick");

    if (page < totalNumberOfPaginatePages) {
        var viewMoreHrefValNew = viewMoreHrefVal.replace("page-" + page, "page-" + (page + 1));
        viewMoreBtn.attr("href", viewMoreHrefValNew);
        var viewMoreOnclickValNew = viewMoreOnclickVal.replace("selectNppPage(" + page + ",", "selectNppPage(" + (page + 1) + ",");
        viewMoreBtn.attr("onclick", viewMoreOnclickValNew);
        viewMoreBtn.addClass("loading_more_gifts");
    } else {
        viewMoreBtn.removeClass("active").addClass("disable");
        viewMoreBtn.attr('onclick','return false;');
    }
    var fpCatId = $('.qg_holder.active').children('.fpCatId').val();
    var displayName = $('.qg_holder.active').children('.displayName').val();
    if (fpCatId != undefined && displayName != undefined) {
        console.log(fpCatId + " " + displayName + " " + page);
        getData(displayName, fpCatId, page);
        //viewMoreBtn.removeClass("loading_more_gifts");
    }
    return false;
}

function tab_open_f ( thisObj ) {
    var tab_selected = thisObj.attr('alt');
    var windowwidth = $(window).width();
        
    $('.qg_holder').removeClass('active');
    $('.qg_tab').removeClass('active');
    $('.qg_tab').hide();
    $('.qg_close_btn').hide();
    thisObj.show();
    $('.qg_ca_text').hide();
    thisObj.find('.qg_ca_text').show();
    $('.qgHeader3 .'+ tab_selected).addClass('active');
    $('.qgHeader4 .'+ tab_selected).addClass('active');
    $('.qg_holder[alt='+ tab_selected +']').addClass('active');
    //$('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height('4000px');
    var QGheight = $('.qg_holder.active').height();
    $('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height(QGheight);
}

function tab_open() {
    $('.qg_holder').removeClass('active');
    $('.qg_tab').removeClass('active');
    var tab_selected = $(this).attr('alt');
    $('.qg_tab_holder .'+ tab_selected).addClass('active');
    $('.qg_holder[alt='+ tab_selected +']').addClass('active');
    
    //ADJUST HEIGHT OF CONTENT HOLDER
	var QGheight = $('.qg_holder.active').height();
	$('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height(QGheight);
}
	
//ADD AND REMOVE ACTIVE CLASS
$('.qg_close_btn').click(function() {
    tabs_close();
});

function tabs_close() {
    $('.qg_holder').removeClass('active');
	$('.qg_close_btn').hide();
		
	//ADJUST HEIGHT OF CONTENT HOLDER
	//var QGheightClose = $('.qg_body_wrapper').height();
	$('#ctl00_ContentPlaceHolder1_uclGiftCardMall1_div_featured_product_body').height(185);
    $('.qg_tab').show();
    $('.qg_tab').removeClass('active');
    $('.qg_ca_text').hide();
}

var removeSelectedQG = function (agpId, isAgeVerify) {
    if (isAgeVerify) {
        setUnsetAgeVerification(agpId, false);
    }

    $('input.FPCheckBox[value="' + agpId + '"]').parent().parent().parent().parent().removeClass('qgItemSelected');
    $('input.FPCheckBox[value="' + agpId + '"]')[0].click();
    $('.FPCheckBox[value="' + agpId + '"]').prop('checked', false);

    $('input[name="ctrName' + agpId + '"]').parent().parent().find('.qg_feedback_tick').remove();
    
    $(".block_selected[data-QG-selected=gq_chosen_" + agpId + "]").remove();
    //console.log(agpId);	    
}

var giftChosenFeedback = function (agpId, isAgeVerify) {
    var recentlySelected = $('input[name="ctrName' + agpId + '"]').val();
    //console.log('GIVE FEEDBACK');

    if ($('input[name="ctrName' + agpId + '"]').parent().parent().parent().parent().hasClass('GC_IMG')) {
        $('.GC_selected').remove();
        $(".qg_selections").append("<div class='block_selected GC_selected' data-QG-selected='gq_chosen_" + agpId + "'><span class='select_product_title_" + agpId + "'>" + recentlySelected + " <Strong>SELECTED</strong></span><span class='removeQG' onclick='javascript:removeSelectedQG(" + agpId + ", " + isAgeVerify + ");' style='float:right'>remove</span></div>");
        console.log('ADDED');
    }
    else {
        if ($('[data-QG-selected^="gq_chosen_' + agpId + '"]').length < 1) {
            $(".qg_selections").append("<div class='block_selected' data-QG-selected='gq_chosen_" + agpId + "'><span class='select_product_title_" + agpId + "'>" + recentlySelected + " <Strong>SELECTED</strong></span><span class='removeQG' onclick='javascript:removeSelectedQG(" + agpId + ", " + isAgeVerify + ");' style='float:right'>remove</span></div>");
        }
    }

    $(".qg_selections").show();
    $(".block_remove_qg_selection").slideDown();
};
	   
$('.help_icon').click(function() {
    $('#help').slideToggle();
});

var theForm;
$(window).load(function () {
theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
});
function __doPostBack(eventTarget, eventArgument) {
    if(theForm===undefined){
        $('#__EVENTTARGET').val(eventTarget);
        $('#__EVENTARGUMENT').val(eventArgument);
        $('#aspnetForm').submit();
    }else if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}

    
function clickBack() {
    var qs = "";

    if ($("input[id$='detect_mobile_vp']").val() == "mobile_vp") {
        qs = "?mobile=true";
        if (sessionStorage.getItem("mm_mob_editor")) {
            qs += "&mobile_vp_wc=true";
        }
    }
    $("#page_stage").val($("#PAGE_PERSONAL_STAGE").val());
    __doPostBack();
    //window.location.href = "../newFlow_Back.aspx" + qs;
}

//$('input:radio').screwDefaultButtons({ 
//    checked: "",
//    unchecked:	"",
//    width: 53,
//    height: 53
//});

// DETECT MOBILE BROWSER AND STORE HIDDEN VALUE //
var mobileAdd = function () {
    var windowwidth = $(window).width();
    if (windowwidth <= 736) {
        $("input[id$='detect_mobile_vp']").val("mobile_vp");
        $('.FPCheckBox').append("<label class='lbl_add'>Add</label>");
        $('.block_remove_qg_selection').text('');
    }
};

mobileAdd();

function nextOnClick() {

    if (parseInt($("#ageVerify").val()) > 0) {
        if ($("#chkAgeConfirm").length) {
            if (!$("#chkAgeConfirm").is(":checked")) {
                //alert("Please confirm your age!");
                $('#age_verification_popup').fadeIn(100);
                return false;
            }
        }
    }
    
    showProgress();
    addLoader();
    return true;
}

function closeAgeError() {
    $('#age_verification_popup').fadeOut(100);
}

function showProgress() {  }

function addLoader() {
    $('.qg_next').addClass('show_loader');
}

function showMe(selectedProductID) {
    //var selectedProductID = $(this).attr('rel').replace('#', '');
    $('#' + selectedProductID + '.apple_overlay').addClass('active_info_popup');
    $('.popup_screen_fadeout').fadeIn(200);

    //CREATE THUMB IMAGES
    var popup_thumb_image_src_1 = $('#' + selectedProductID + ' #thumb_image_1').attr('value');
    var popup_thumb_image_src_2 = $('#' + selectedProductID + ' #thumb_image_2').attr('value');
    var popup_thumb_image_src_3 = $('#' + selectedProductID + ' #thumb_image_3').attr('value');

    $('#' + selectedProductID + ' #imgProductImage').attr('src', popup_thumb_image_src_1);
    $('#' + selectedProductID + ' .np_thumb_1 img').attr('src', popup_thumb_image_src_1);
    $('#' + selectedProductID + ' .np_thumb_2 img').attr('src', popup_thumb_image_src_2);
    $('#' + selectedProductID + ' .np_thumb_3 img').attr('src', popup_thumb_image_src_3);
}

function hideMe() {
    $("#div_product_more_info").removeClass('active_info_popup');
    $("#div_product_more_info").html("");
    $('.popup_screen_fadeout').fadeOut(200);
}

function getProductInfo(productid, catid) {
    var page = "/home/GetProductInfo";
    var data = '{"ProductId": "' + productid + '", "FpCatId":"' + catid + '"}';
    
    $.ajax({
        type: "POST",
        url: page,
        data: data,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function (jqXHR, textStatus) {
            alert('Error occure while calling Server method GetProductInfo');
            return;
        },
        success: function (msg) {
            $("#div_product_more_info").html(msg.d);
            $("#div_product_more_info").addClass('active_info_popup');
            showMe("photo_" + productid);
            MoreInfoFeatures();
        }
    });
}