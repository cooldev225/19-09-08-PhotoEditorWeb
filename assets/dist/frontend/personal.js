var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    /*if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }*///alert();
    $('#__EVENTTARGET').val(eventTarget);
    $('#__EVENTARGUMENT').val(eventArgument);
    $('#aspnetForm').submit();
}


// if traffic land directly on desktop version from mobile //
	function redirectMobile() {
        if ($(window).width() <= 736) {
            //__doPostBack();
            //window.location.href = '/home/personal';//?productId=' + '131370' + '&src=TSSE';            
        }
	}
	redirectMobile(); 	
	function similarItemsLayout() {
        var URLGshopSearch = document.location.href;
        var checkGshopSearch = URLGshopSearch.indexOf('size') >-1;
        var checkReferrer =  document.referrer;
        var ReferrerSearch =  checkReferrer.indexOf('search') >-1;
        if (checkGshopSearch && !ReferrerSearch) {
            $('#SimilarC_count').attr('value','5');
            $('#wrapper_whole').addClass('GShopLayout');
            $('#mobile').addClass('GShopLayout');
            $('.page_title_wrapper').prepend("<a class='backToResults' href='/personalised-cards.aspx'>Browse Cards</a>");
        }
    } 

    function changeSizeLabels() {
        $('.card_size_8 span').html('Large <span>(A4)</span>');
        $('.card_size_10 span').html('Small <span>(A6)</span>');
        $('.card_size_11 span').html('Standard <span>(A5)</span>');
        $('.card_size_128 span').html('Giant <span>(A3)</span>');
    }

    changeSizeLabels();
    similarItemsLayout();

    $('.trustpilot-widget').attr('data-sku', "131370");
    $('.product_review .trustpilot-widget').attr('data-name', $('.page_title_wrapper h1').text());
    ///window.onload = function() {
    
    function CardSizeChange() {
        UpdateProductPrice();
        SetSelectedSizeStyle();   
          
    }
    function enhancedTrigger() {
        $('.btn_enhance')[0].click();
    }

    function PreviewProceed() {
        $('#preview_proceed').attr('value','1');
    }
    
    function UpdateProductPrices(prices)
    {
        productPrises = prices;
    }
    function UpdateProductOldPrices(oldprices)
     {
        productOldPrises = oldprices;
     }
    
    function UpdateProductSizes(sizes,type,_supplierId,_personalized)
    {
        productSizes = sizes;
        productTypeId = type;
        supplierId = _supplierId;
        personalized = _personalized;
    }  
     function show2DecimalPlaces(value)
    {
        //return (Math.floor(value * 100) / 100).toFixed(2);
        return (value).toFixed(2);
    }
    function UpdateProductPrice()
    {
        var productOutputSizeId = $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val();
        UpdateProductPriceBySizeID(productOutputSizeId);
    } 
    
     function UpdateProductOldPrices(oldprices)
     {
        productOldPrises = oldprices;
     }
    
    function UpdateProductSizes(sizes,type,_supplierId,_personalized)
    {
        productSizes = sizes;
        productTypeId = type;
        supplierId = _supplierId;
        personalized = _personalized;
    }
    function mandatoryLabels() {
    
        var mandLabelsComplete = 0;
        var mandTxtField = $('.txt_field_left.mandatory_text');
        var CardWidth = $('#templateimage').width() + 40;
        
        mandTxtField.each(function(){
            var mtfPosition = $(this).position();
            var mtfWidth = $(this).width();
            var mtfAttr = $(this).attr('id');
            var mtfLeft = mtfPosition.left + mtfWidth;
            if ( $(this).height() >= 30 ) {
                var mtfTop = mtfPosition.top + ($(this).height()/2) - 23;
            }
            else {
                var mtfTop = mtfPosition.top;
            }
            
            $( "#main_card_wrapper" ).append( "<div class='mandTxtLabel notComplete' data-relatedTxtField='"+ mtfAttr +"' style='left:"+ CardWidth +"px; top:"+ mtfTop +"px'><img class='point_left' src='/assets/dist/images/bg_label_point.png'/><img class='icon' src='/assets/dist/images/icon_pencil.png'/>Personalise card front text</div>" );
        }).promise().done(function() {
            mandLabelsComplete++;
            mandLabelsCheck();
        });
        
        var mandImgField = $('.pu_area.mandatory_image');
        mandImgField.each(function(){
            var mifPosition = $(this).position();
            var mifWidth = $(this).width();
            var mifAttr = $(this).attr('id');
            var mifLeft = mifPosition.left + mifWidth;
            if ( $(this).height() >= 46 ) {
                var mifTop = mifPosition.top + ($(this).height()/2) - 23;
            }
            else {
                var mifTop = mifPosition.top;
            }
            $( "#main_card_wrapper" ).append( "<div class='mandImgLabel notComplete' data-relatedImgField='"+ mifAttr +"' style='left:"+ CardWidth +"px; top:"+ mifTop +"px'><img class='point_left' src='/assets/dist/images/bg_label_point.png'/><img class='icon' src='/assets/dist/images/icon_camera.png'/>Upload a photo to the card front</div>" );
        }).promise().done(function() {
            mandLabelsComplete++;
            singlePUCard();
            mandLabelsCheck();
        }); 
        
        function mandLabelsCheck () {
            if ( mandLabelsComplete == 2 ) {
                ShowMandatoryLabels(); 
                arrowClick(); 
                 //alert('lables have been created'); 
            } 
            else {
                var checkTXTfields = $('.txt_field_left').length; 
                if (checkTXTfields == '0') {
                    $('.mandImgLabel.notComplete').eq(0).fadeIn();
                    arrowClick();
                }
                var checkPUareas = $('.pu_area').length; 
                if (checkPUareas == '0') {
                    $('.mandTxtLabel.notComplete').eq(0).fadeIn();
                    //alert(checkPUareas);
                    arrowClick();
                }
                //alert('call mandLabelsCheck ELSE');
            }                        
        }                
    }    
    function singlePUCard () {
        var checkTXTfields = $('.txt_field_left').length; 
                if (checkTXTfields == '0') {
                    $('.mandImgLabel.notComplete').eq(0).fadeIn();
                    arrowClick();
                }
    }   
     function ShowMandatoryLabels() {
        var firstTxtLabel = (($('.txt_field_left.mandatory_text').eq(0).position() == undefined) ? 0 : $('.txt_field_left.mandatory_text').eq(0).position().top);
        var firstImgLabel = (($('.pu_area.mandatory_image').eq(0).position() == undefined) ? 0 : $('.pu_area.mandatory_image').eq(0).position().top);
        
            if ( firstTxtLabel <= firstImgLabel  ) {
                var lableDifference = firstImgLabel - firstTxtLabel;
                if ( lableDifference <= 46 ) {
                    if($('.pu_area.mandatory_image').eq(0).position()) {
                        var firstImgLabelNow = $('.pu_area.mandatory_image').eq(0).position().top + 48;
                        $('.mandImgLabel').eq(0).css('top', firstImgLabelNow);
                    }
                }
            }
            else if ( firstImgLabel <= firstTxtLabel ) {
                 var lableDifference =  firstTxtLabel - firstImgLabel;
                 if ( lableDifference <= 46 ) {
                     if($('.txt_field_left.mandatory_text').eq(0).position()) {
                         var firstTxtLabelNow = $('.txt_field_left.mandatory_text').eq(0).position().top + 48;
                         $('.mandTxtLabel').eq(0).css('top', firstTxtLabelNow);
                     }
                }
            }
            
            $('.mandImgLabel.notComplete').eq(0).fadeIn();
            $('.mandTxtLabel.notComplete').eq(0).fadeIn();
            
            function CountNumberOfPhotos() {
                var NumberOfPUFields = $('.pu_area').length;
                if ( NumberOfPUFields > 1 ) {
                   $('.mandImgLabel').html('<img class="point_left" src="/assets/dist/images/bg_label_point.png"><img class="icon" src="/assets/dist/images/icon_camera.png">Upload photos to the card front'); 
                }
            }
            
            CountNumberOfPhotos();            
    }
    function arrowClick () {
        $('.notComplete').click(function(){
            var arrowRelatedItem = $(this).attr('data-relatedtxtfield');
            var arrowRelatedItemImg = $(this).attr('data-relatedimgfield');
            //alert(arrowRelatedItem);
            if ( arrowRelatedItem == undefined ) {
                $("#"+arrowRelatedItemImg).trigger('click');
            }
            else {
                $("#"+arrowRelatedItem).trigger('click');
            }
            //alert('call arrowClick');
        });
    }
    function goBack() {
        //$('.browseBack a').trigger('click');
        //$('.browseBack a').hide();
        //alert('GO BACK');
        window.history.back();
    }

    // SIZE SELECTOR POPUP REFERAL LOGIC
    function SizeSelectorReferalLogic() {
        if ( document.location.href.indexOf('aafp') > -1 ) {
            if ( $('#main_control_wrapper').hasClass('square') ) {
                // do nothing as square card so no chocolate option available
                $('.hat_header h1').text('Chocolate Option NOT Available');
                $('.content_choc_card').html("You have chosen a square card. Only standard (A5) size cards can be made into a chocolate card. Close this message to continue or <span style='color:#232f3e; font-weight:bold; cursor:pointer;' onclick='goBack();'>click here</span> to choose another card");
                $('.content_choc_card').css({
                    'font-size':'16px',
                    'line-height':'20px',
                    'padding':'30px'
                });          
                $('.AddOnHolder').addClass('notAvailable');
                //ChocAddon();
                $(".fancierbox_addons.choc_large_popup").css({display:'block'});
            }
            else {

                var mmMobilEditReferal = document.referrer;
                var mmMobileEditCurrent = window.location.href; 
                if ( mmMobilEditReferal == mmMobileEditCurrent ) {
                    //nothing
                    ChocAddon();
                    $(".AddOnHolder .hat_header h1").text('Choose a Chocolate Design...');
                    $(".fancierbox_addons.choc_large_popup").css({display:'block'});
                    $('.BTNaddChoc').show();
                }
                else{
                    ChocAddon();
                    $(".AddOnHolder .hat_header h1").text('Choose a Chocolate Design...');
                    $(".fancierbox_addons.choc_large_popup").css({display:'block'});
                   // $('.AddOnHolder').css('height','485px !important;');
                    $('.BTNaddChoc').hide();
                    $('.AddOnHolder').addClass('no_remove_option');

                }

            }
        }
    }


    
	$(window).resize(function(){resize_screen();});
	function resize_screen(){
		var w=eval($(".container").css('width').replace('px',''));
		//$(".control-area").css('width',(w-364));
	}

	function editFrontText(id){
		$(".mandImgLabel.notComplete").css('display','none');
		$(".mandTxtLabel.notComplete").css('display','none');
		$("#main_tab_front").css('display','block');
	}
	function editFrontImg(id){
		$(".mandImgLabel.notComplete").css('display','none');
		$(".mandTxtLabel.notComplete").css('display','none');
		$("#main_tab_front").css('display','block');
	}
	function hideAllCommonMainTabs() {
        $("#common_imageupload_button_panel").css("display", "none");
        $("#common_personalize_imageuploader").css("display", "none");
        $("#common_personalize_imagecustomize").css("display", "none");
        $("#common_personalize_textupdater").css("display", "none");    
    }         
    function mandatoryLabelsFadeOut(){        
        $('.mandTxtLabel.notComplete').eq(0).fadeOut('fast');
        $('.mandImgLabel.notComplete').eq(0).fadeOut('fast');
    }
    
    function mandatoryLabelsHide(){
        $('.mandTxtLabel.notComplete').eq(0).hide();
        $('.mandImgLabel.notComplete').eq(0).hide();
    }
    
    function mandatoryLabelsFadeIn(){
        $('.mandImgLabel.notComplete').eq(0).fadeIn();
        $('.mandTxtLabel.notComplete').eq(0).fadeIn();
        //ShowMandatoryLabels();
    }
    function cardFadeIn() {
	    $('#ctl00_contentMain_tpFirstPage').css('background','#efefef');
	    $('#templateimage').removeClass('CardImageFadeBack');
	    $('#main_card_wrapper').removeClass();
	    $('#main_card_wrapper').removeClass('CardElementSelected');
	    $('.ui-droppable').removeClass('selected');
    }
    function cardFadeOut(imageid) {
	    $('#ctl00_contentMain_tpFirstPage').css('background','#000');
	    $('#templateimage').addClass('CardImageFadeBack');
        $('#main_card_wrapper').addClass('CardElementSelected');
	    var NEWimageid = imageid;
	    var droppableClassName = NEWimageid.replace("im", "drag");
	    $("#"+ droppableClassName).addClass('selected');
	    // Maxymiser test
	    if ( $('#MM_test_done').val() == 1 ) {
	        $(".ui-droppable").removeClass('selected');
	        $("#"+ droppableClassName).addClass('selected');
	    }
	    
    }
    function numberOfPhotosUsed() {
        var PhotosUsedArrayCheck;
        $('#photoArrayCheck').attr('value', '');

        var PhotoUsedArrayVal = $('#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front').val();
        var PhotoUsedArray = jQuery.parseJSON(PhotoUsedArrayVal);
        $.each(PhotoUsedArray, function () {
            var PhotosUsedArrayCheck = $('#photoArrayCheck').attr('value');
            $('#photoArrayCheck').attr('value', ''+PhotosUsedArrayCheck+', '+this.ImagePath+this.Src+'');
        });

        $('.thumbs li .thumb_wrapper').each(function(){
            var PhotosUsedCheckA = $('#photoArrayCheck').attr('value');
            var thumbs_src = $(this).find('img').attr('src');
            var PhotoUsedCheckThumb = PhotosUsedCheckA.indexOf(thumbs_src) >-1;
            if ( PhotoUsedCheckThumb ) {
                $(this).find('.amount_used').show().html('&#10004;');
            }
            else {
                $(this).find('.amount_used').hide();
            }

        });
        //numberOfPhotosUsedFromInput();
    }
    function updateUI(imageInfo) {
        if (imageInfo) {
            $("div[id^=sliderZoom]").slider("option", "value", imageInfo.zoomLevel);
            $("#sliderHue").slider("option", "value", imageInfo.hue);
            $("#sliderContrast").slider("option", "value", imageInfo.contrast);
            $("#sliderBrightness").slider("option", "value", imageInfo.brightness);
            $("#sliderSharpen").slider("option", "value", imageInfo.sharpness);
            $("#sliderSaturation").slider("option", "value", imageInfo.saturation);
        }
    }
    function resetImage() {
        var controller = ImageManager.getInstance().getController();
        if (controller) {
            controller.reset();
            rotateImage("C", 0);
            updateUI(controller.getCurrentState());
        }
    }
    function checkMandatoryFieldProgress(puProcess) {
        if ( puProcess == 'active' ) {  
        }
        else {
            if ( $('.notComplete').length == 0 ) {
                hideAllCommonMainTabs();
                if ( $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val() == '1' ) {
                    $('#next_steps_front').show();
                    $('#main_heading h2').text('Next Steps');
                    $('.card_nav_prompt').fadeIn();
                    $('.BtnNextImage').addClass('nextImageInactive');
                }
                // FADE OUT AND REMOVE AFTER 8 SECS
                setTimeout(function() {
                    $('.card_nav_prompt').fadeOut( function(){
                       $('.card_nav_prompt').remove();
                    });
                }, 8000);
            }
        
        }        
    }
    function backFromPersonalizeImageuploader() {
        //== HINTS AND TIPS - CHANGE BODY CLASS ==//
        $('body').removeClass().addClass('standard');
        
        $("#current_activate_activity").val("");
        $("#common_personalize_imageuploader").css("display", "none");
        
        hideAllCommonMainTabs();
        cardFadeIn();
        $('.pu_area').removeClass('pu_selected');
        $('.BtnNextImage').show();
        $('#btnShowSimple').fadeIn();
        if(objDragTouchImage instanceof dragObject) { objDragTouchImage.Dispose(); }
        
        switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()) {
            case "1":
                {
                    $('#main_heading h2').text('Card Front');
                    //$('#main_tab').animate({ width: "486px" });
                    //LANDSCAPE CONDITION//
                    if ($('#main_wrapper').hasClass('landscape')) {
                        $('#main_tab').animate({ width: "380px" });
                    }
                    else {
                        $('#main_tab').animate({ width: "486px" });
                    }
                    $('.help_link').animate({ right: "40px" });
                    mandatoryLabelsFadeIn();
                    //$("#main_tab_front").fadeIn();
                    checkMandatoryFieldProgress();
                    $('#product_stage').val('card_front');
                    loadHelpSection();
                    break;
                }
            case "2":
                {
                    $('#main_heading h2').text('Inside Left');
                    $("#main_tab_inside").fadeIn();
                    loadCardinsideTabHandle((($("#" + $("#cardinside_tab_controlname").val()).val()=="A") ? 2 : 1), 2);
                    //mandatoryLabelsFadeIn();
                    $('#next_steps_front').hide();
                    $('#product_stage').val('inside_left');
                    loadHelpSection();
                    break;
                }
            case "3":
                {
                    $('#main_heading h2').text('Inside Right');
                    $("#main_tab_inside").fadeIn();
                    loadCardinsideTabHandle((($("#" + $("#cardinside_tab_controlname").val()).val()=="A") ? 2 : 1), 3);
                    //mandatoryLabelsFadeIn();
                    //$('#next_steps_front').css('display','none');
                    $('#next_steps_front').hide();
                    //AutoloadTextEditerForSelectedCardInside("3");
                    $('#product_stage').val('inside_right');
                    loadHelpSection();
                    break;
                }
            case "4":
                {
                    $('#main_heading h2').text('Card Back');
                    $("#main_tab_inside").fadeIn();
                    $('#product_stage').val('card_back');
                    loadHelpSection();
                    //$('#next_steps_front').hide();
                    break;
                }
            default: { break; }
        }     
        
        leave_fb_upload();
    }
    function RemoveAllHighlightedDiv() {   
        var current_page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
        var customizeTextList;
        var customizeImageList;
                
        switch (current_page) {
            case "1":
                {//alert($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val());
                    var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) }; 
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };   
                    break;
                }
            case "2":
                {
                    var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val()) }; 
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val()) };                    
                    break;
                }
            case "3":
                {
                    var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val()) };
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val()) };
                    break;
                }
            case "4":
                {
                    var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back").val()) };
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val()) };
                    break;
                }                
            default: { break; }
        }  
        
        for (i = 0; i < customizeTextList.CustomizeText.length; i++) { 
            if(current_page=="1") {
                $("#skeleton_" + customizeTextList.CustomizeText[i].TextId).removeClass('cardInsideDivHighlighter');
            }
            else {
                $("#" + customizeTextList.CustomizeText[i].LableId + '_' + current_page).removeClass('cardInsideDivHighlighter');
            }
        }
        
        for (i = 0; i < customizeImageList.CustomizeImage.length; i++) { 
            $("#" + customizeImageList.CustomizeImage[i].DragId).removeClass('cardInsideDivHighlighter');
        }
    }
	function SetFocusText(ct1, ct2) {                        
        if($("#current_activate_activity").val()!="T") {
            hideAllCommonMainTabs();
            backFromPersonalizeImageuploader();
        }
        $("#current_activate_activity").val("T");
        // Ipad specific go button
        if ( $('html').hasClass('touch') ) {
            $(this).keyup(function(e){ 
                var code = e.which; // recommended to use e.which, it's normalized across browsers
                if(code==13)e.preventDefault();
                if(code==13){
                    $(".updateMessage").trigger('click');
                } // missing closing if brace
            });
        }     

        // Highlight selected
        RemoveAllHighlightedDiv();
        $('.updateMessage').show()
        $('#accordion li').removeClass('activeField')
        $("#" + ct1).addClass('cardInsideDivHighlighter'); 
        $("#" + ct2).parent().parent().addClass('activeField');
        $('#main_card_wrapper').addClass('txt_field_selected');
        $('#main_tab_front').show();
        mandatoryLabelsFadeOut();
        $('#next_steps_front').hide();
        $('#main_heading h2').text('Personalise Message');
        $("#" + ct2).focus(function() {
	  		if($(this).val().trim().toLowerCase() == "name") { 
	            $(this).val(""); 
	        }
		});			
		$('.BtnChangeTemp').show();
        $('.text_customize_standard').show();
        // Dispose of drag event for touch devices
        if(objDragTouchImage instanceof dragObject) { 
        	objDragTouchImage.Dispose(); 
        }
        $('#product_stage').val('edit_text');
        loadHelpSection();
    }
     function InitializeControls(imageid) {
        var customizeImageList;
        switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()) {
            case "1":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };
                    break;
                }
            case "2":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val()) };
                    break;
                }
            case "3":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val()) };
                    break;
                }
            case "4":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val()) };
                    break;
                }                
            default: { break; }
        }

        var rotate_deg = 0;
        for (i = 0; i < customizeImageList.CustomizeImage.length; i++) {
            if(customizeImageList.CustomizeImage[i].ImageId == imageid) {
                if(customizeImageList.CustomizeImage[i].ActionHistory != undefined) {
                    for (j = 0; j < customizeImageList.CustomizeImage[i].ActionHistory.length; j++) {
                        if(customizeImageList.CustomizeImage[i].ActionHistory[j]) {
                            if(customizeImageList.CustomizeImage[i].ActionHistory[j].action == "rotate") {
                                rotate_deg += parseInt(customizeImageList.CustomizeImage[i].ActionHistory[j].value);
                            }
                        }
                    }
                }
            }
        }

        resetRotation(rotate_deg);
    }
    function SetFocusImage(imageid, dragid, w, h, x, y, imageurl) {     

    	InitializeControls(imageid);    
        setCodination();
        ImageManager.getInstance().updateImageInfoField();
        //alert('!!!=,>'+JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val())[0].X);
        cardFadeOut(imageid);
        $('#next_steps_front').hide();
        $('#main_heading h2').text('Upload Photo');
        $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val(imageid);
        $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControlDrag").val(dragid);        
        $("#ctl00_ContentPlaceHolder1_CardFlow1_AW").val(w);
        $("#ctl00_ContentPlaceHolder1_CardFlow1_AH").val(h);
        $("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CW").val(document.getElementById($("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val()).offsetWidth);
        $("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CH").val(document.getElementById($("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val()).offsetHeight);

        var selectedImage = "<div class=\"left\" id=\"image_selected\"><img height=\"50\" src=\"" + imageurl + "\" width=\"50\"></DIV>";
        switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()) {
            case "1": { $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_front_wrapper").html(selectedImage); break; }
            case "2": { $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideleft_wrapper").html(selectedImage); break; }
            case "3": { $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideright_wrapper").html(selectedImage); $('.BtnNextImage').hide(); break; }
            case "3": { $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_back_wrapper").html(selectedImage); break; }
            default: { break; }
        }
        ImageManager.getInstance().setSelectedItem(dragid);
        updateUI(ImageManager.getInstance().getCurrentStatus(dragid));
        var imageelement = document.getElementById(dragid).getElementsByTagName('*');   
        var el = document.getElementById(imageelement[0].id);
        if(document.getElementById('skeleton_' + imageid)!=null) {
            var el_ac = document.getElementById('skeleton_' + imageid);
        } else {
            var el_ac = document.getElementById(dragid);
        }                
        var leftEdge = el.parentNode.clientWidth - el.clientWidth;
        var topEdge = el.parentNode.clientHeight - el.clientHeight;
        if(objDragTouchImage instanceof dragObject) { objDragTouchImage.Dispose(); }
        objDragTouchImage = new dragObject(el, el_ac, new Position(leftEdge, topEdge), new Position(0, 0));     
        RemoveAllHighlightedDiv();
        $('#product_stage').val('upload_panel');
        if($("#current_activate_activity").val()!="I") {
            hideAllCommonMainTabs();
            if( $('#uploaded_from_facebook').val() == '1'){loadPersonalizeImageUploader(3); fb_upload(); }
            else{loadPersonalizeImageUploader(1); numberOfPhotosUsed();}
        }
        $('#main_tab_front').hide();
        mandatoryLabelsFadeOut();
        $("#common_personalize_imageuploader").fadeIn();     
        $(".web_dialog").css('display','block');      

        if ( $("input[name='NumberOfPhotoUploadFields']").val()==1 ) {
            $(".BtnNextImage").remove();
        }    
        if ($('#dialog').is(':visible')) {
            $('#product_stage').val('upload_location');
        } else {
            $('#product_stage').val('upload_panel');
        }
        loadHelpSection();
        //Custom_Initialize_UploadMyComputer_Slider();
        if (parseInt($("#" + $("#image_count_mycomputer_name").val()).val()) > 0) {
            $('#dialog').hide();
            $('#fbdialog').hide();
            $("#instagramdialog").hide();
        } 
    }

    //image uploading
    function setCodination() {                
        try {
            if(parseInt(document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).offsetWidth)==0) { return; }

            document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "CW").value = document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).offsetWidth;
            document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "CH").value = document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).offsetHeight;

            if (document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).style.left == '') {
                document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "X").value = 0;
                document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "Y").value = 0;
            } else {
                document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "X").value = parseInt(document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).style.left) * -1;
                document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value + "Y").value = parseInt(document.getElementById(document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_activeControl").value).style.top) * -1;
            }

            if(parseInt($("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CW").val())>0 && parseInt($("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CH").val())>0) {
                ImageManager.getInstance().updateImageCurrentWidthAndHeight(
                	$("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val(),
                	$("#ctl00_ContentPlaceHolder1_CardFlow1_activeControlDrag").val(), 
                	$("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CW").val(), 
                	$("#" + $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() + "CH").val()
            	);
            }
        } catch (Error) { }
    }
    function loadPersonalizeImageUploader(val) {
    
        //== HINTS AND TIPS - CHANGE BODY CLASS ==//
        $('body').removeClass().addClass('upload_image');
    
        $("#current_activate_activity").val("I");
        $("#common_imageupload_button_panel").css("display", "none"); // Hide if visable
        switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val())
        {
            case "1":
            {
                //LANDSCAPE CONDITION//
                if ($('#main_wrapper').hasClass('landscape')) {
                    $('#main_tab').animate({ width: "330px" });
                }
                else {
                    $('#main_tab').animate({ width: "422px" });
                }
                $('.help_link').animate({ right: "106px" });
                $("#main_tab_front").css("display", "none");
                
                break;
            }
            case "2":
            {
                $("#main_tab_inside").css("display", "none");               
                break;
            }
            case "3":
            {
                $("#main_tab_inside").css("display", "none");
                break;
            }
            case "4":
            {
                $("#main_tab_inside").css("display", "none");
                break;
            }      
            default: { break; }                              
        }
        $("#common_personalize_imageuploader").fadeIn();            
        loadPersonalizeImageUploaderTabHandle(val);        
    }
    
    function makesortable() {
        if ( $('#MM_test_drag').val() == '0' ) {
            $(".btn_add_image").css("display", "block");

            sortlist = $(".gallery-list ul");
            $('li', sortlist).css('cursor', 'move');
            sortlist.sortable({
                cursor: 'move',
                helper: 'clone'
            }).disableSelection();  
         
            setTimeout(function() {
                scaleThumbImages();
            }, 1000);

            noDragVariant();

        }
        else {
            sortlist = $(".gallery-list ul");
            $('li', sortlist).css('cursor', 'move');
            sortlist.sortable({
                cursor: 'move',
                helper: 'clone'
            }).disableSelection();  
         
            setTimeout(function() {
                scaleThumbImages(); 
            }, 1000);
            }     
        // LOGIC FOR SHOWING DELETE IMAGES BUTTON
        countThumbsSortable();
    }
    function countThumbsSortable(){
        // LOGIC FOR SHOWING DELETE IMAGES BUTTON
        var thumbnailmcCount = $('.thumbnailmc').length;
        if ( thumbnailmcCount > 4 ) {
            $('.GreyBtn').css('display','block');
        }
        else {
            $('.GreyBtn').css('display','none');
        }
    }

    function noDragVariant(){
        // drag variant
        if ( $('#MM_test_drag_v').val() == '1' ) {
            $("#common_personalize_imageuploader").addClass("MM_test_drag_v");
            $(".btn_add_image span").text("Click to add");
        }
        $(".gallery-list ul").sortable( "disable" );
    }     
    function initializeImageSliders(numThumbs) {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({ 'width': '350px' });
        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        
       //== HINTS AND TIPS - CHANGE BODY CLASS ==//
        //$('body').removeClass().addClass('edit_image');
        
        var onMouseOutOpacity = 1.0;
        $('#' + $("#current_activate_thumb_slide").val() + ' ul.' + $("#current_activate_imagepanel").val() + ' li').opacityrollover({
            mouseOutOpacity: onMouseOutOpacity,
            mouseOverOpacity: 1.0,
            fadeSpeed: 'fast',
            exemptionSelector: '.selected' 
        });

        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#' + $("#current_activate_thumb_slide").val()).galleriffic({
            delay: 2500,
            numThumbs: numThumbs,
            preloadAhead: 10,
            enableTopPager: true,
            enableBottomPager: true,
            maxPagesToShow: 7,
            imageContainerSel: '#slideshow',
            controlsContainerSel: '#controls',
            captionContainerSel: '#caption',
            loadingContainerSel: '#loading',
            renderSSControls: true,
            renderNavControls: true,
            playLinkText: 'Play Slideshow',
            pauseLinkText: 'Pause Slideshow',
            prevLinkText: '&lsaquo; Previous Photo',
            nextLinkText: 'Next Photo &rsaquo;',
            nextPageLinkText: 'Next;',
            prevPageLinkText: 'Prev',
            enableHistory: false,
            autoStart: false,
            syncTransitions: false,
            defaultTransitionDuration: 900,
            onSlideChange: function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.' + $("#current_activate_imagepanel").val() + '').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
				.eq(nextIndex).fadeTo('fast', 1.0);
            },
            onPageTransitionOut: function(callback) {
                this.fadeTo('fast', 0.0, callback);
            },
            onPageTransitionIn: function() {
                this.fadeTo('fast', 1.0);
            }
        });

        //$("a.fancybox_zoom").fancybox();
    }

    function scaleThumbImages () {
        var DraggableThumb = $('.thumbnailmc');
        DraggableThumb.each(function(){
            if ( $(this).height() < 120 ) {
              $(this).addClass('RESIZE_landscape');
            }
        }); 
    }


    
    function loadPersonalizeImageUploaderFromTextEditor()
    {
        hideAllCommonMainTabs();
        loadPersonalizeImageUploader(1);
    }
    

    function loadPersonalizeImageCustomize(val) {
        hideAllCommonMainTabs();
        loadPersonalizeImageCustomizeTabHandle(val);
        $('#common_personalize_imageuploader').css('display','block');
    }  

    function SelectFrontPageTextOnRightPane(ct1, ct2) {
        $("#current_activate_activity").val("T");               
        // Highlight selected
        RemoveAllHighlightedDiv();
        $("#" + ct1).addClass('cardInsideDivHighlighter');   
        txtFieldUpdateCountdown();
        $('.activeField input').change(txtFieldUpdateCountdown);
        $('.activeField input').keyup(txtFieldUpdateCountdown);
        
    }

    function txtFieldUpdateCountdown() {
        // 140 is the max message length
        var remainingFind = $('.activeField input').attr('maxlength');
        var remaining = remainingFind - $('.activeField input').val().length;
        $('.activeField li span').text(remaining);
        if (remaining == 0) {
            $('.tip_txt_char_limit').fadeIn();
            $('.activeField input').addClass('border_red');
            $('.activeField li span').addClass('txt_red');
        }
        else {
            $('.tip_txt_char_limit').hide();
            $('.activeField input').removeClass('border_red');
            $('.activeField li span').removeClass('txt_red');
        }
        //console.log('max limit:'+remainingFind+' countdown:'+remaining);
    }

    function loading(state, type, x, y, w, h) {
        if (state) {
            switch (type) {
                case 1:
                    {
                        $("#loading_mask_container_common").css("top", x-20);
                        $("#loading_mask_container_common").css("left", y);
                        $("#loading_mask_container_common").css("width", w);
                        $("#loading_mask_container_common").css("height", h); 
                        
                        showMask(true, 'loading_mask_container_common');             
                        break;
                    }
                default:
                    {
                        showMask(true, 'loading_mask_container_common');
                        break;
                    }
            }                        
        } else {        
            switch (type) {
                case 1:
                    {
                        closeMask('loading_mask_container_common');                       
                        break;
                    }
                default:
                    {
                        closeMask('loading_mask_container_common');
                        break;
                    }
            }             
        }                
    }

    

    var seoTabs = function() {
        // SHOW PROD DESC IF AVAILABLE
        if ( $('.product_description').is(':empty') ) {
            // DO NOTHING
        }
        else {
            $('.seo_tab_wrapper').show();
        }
        $('.seo_tab').click(function(){
            var activeTab = $(this).data('tab');
            $('.seo_tab').removeClass('seo_tab_active');
            $(this).addClass('seo_tab_active');
            $('.seo_tab_info').hide();
            $('.'+activeTab).show();
        });

        $('.mm_seo_read_more.more').click(function() {
            $('.delivery_text div').addClass('seo_show_more');
            $(this).hide();
            $('.mm_seo_read_more.less').css('display','block');
        });
      
        $('.mm_seo_read_more.less').click(function() {
            $('.delivery_text div').removeClass('seo_show_more');
            $(this).hide();
            $('.mm_seo_read_more.more').show();
        });
    }
    
	function getRotationDegrees(ob) {
	    var matrix = ob.css("-webkit-transform") ||
	    ob.css("-moz-transform")    ||
	    ob.css("-ms-transform")     ||
	    ob.css("-o-transform")      ||
	    ob.css("transform");
	    if(matrix !== 'none') {
	        var values = matrix.split('(')[1].split(')')[0].split(',');
	        var a = values[0];
	        var b = values[1];
	        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
	    } else { var angle = 0; }
	    return (angle+360)%360;
	}
	function viewCanvasAction(){
		canvas.width = $('#workarea-img').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#workarea-img').height();

		ctx.clearRect(0,0,canvas.width,canvas.height);
		//
		var obj=null;
		var x,y,y1,fsz,w,h,deg;

		
		ctx.drawImage($('#workarea-img').get(0), 0, 0, canvas.width,canvas.height);
		for(var i=0;i<5;i++){
			obj=$("#custom_text_"+i);
			if(obj.prop('id')==undefined)continue;
			x=eval(obj.css('left').replace('px',''));
			y=eval(obj.css('top').replace('px',''));
			if(obj.prop('tagName')=="IMG"){
				
			}else{
				deg=getRotationDegrees(obj);
				w=eval(obj.css('width').replace('px',''));
				h=eval(obj.css('height').replace('px',''));
				

				fsz=eval(obj.css('font-size').replace('px',''));
				ctx.textBaseline = 'top';
				ctx.font=obj.css('font-size')+' '+obj.css('font-family');
				ctx.fillStyle=obj.css('color');
				y1=Math.pow(fsz-21,(1/1.5));
				y=y+y1;

				ctx.save();
				ctx.translate(x+w/2, y+h/2);
			    ctx.rotate(Math.PI * deg/ 180);

				if(obj.css('text-shadow')!='none'){
					ctx.strokeStyle = 'white';
			    	ctx.lineWidth = 2;
			    	ctx.strokeText(obj.val(),-w/2, -h/2);
			    }
				ctx.fillText(obj.val(),-w/2, -h/2);
			    ctx.restore();
			}
		}
	}
	function previewfront() {
		loading(true, 2, 0, 0, 0, 0);
        try
        {         //$("#templateimage").attr('src', canvas.toDataURL());
            $("#templateimage").attr('src', GetCardFrontImageUrl());
            loading(false, 2, 0, 0, 0, 0);
        }
        catch(Error) { alert(Error.toString());loading(false, 2, 0, 0, 0, 0); }  
        // HIDE FIELDS ON PREVIEW OF TEXT  
        $('#main_tab_front').css('display','none');
        
        // Set special css class for un-updated text & images.
        SetMandatoryStyle();
        mandatoryLabelsFadeIn();
    }
    function GetCardFrontImageUrl(){
        //var original_url = $("#templateimage").attr('src');
        /*var temp_url_1 = original_url.substring(original_url.indexOf("?")+1, original_url.length);
        var temp_url_2 = original_url.substring(0, original_url.indexOf("?")+1);
        var arr_qs = temp_url_1.split('&');
        var temp_url_text = "";
        var new_url = temp_url_2;
        var front_customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) };
        for (var i = 0; i < front_customizeTextList.CustomizeText.length; i++)
        {
            if (i > 0) { temp_url_text = temp_url_text + "\\#"; }
            temp_url_text = temp_url_text + removeBadWord($("#" + front_customizeTextList.CustomizeText[i].TextId).val());
        }
        
        for(var i=0; i<arr_qs.length; i++)
        {    
            if(arr_qs[i].substring(0, 2).trim()=='t=')
            {
                arr_qs[i] = 't=' + escape(temp_url_text);
            }
            new_url += ((i==0)?'':'&') + arr_qs[i]; 
        } */
        canvas.width = $('#_templateimage').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#_templateimage').height();
		ctx.clearRect(0,0,canvas.width,canvas.height);
		var obj=null;
		var x,y,y1,fsz,w,h,deg;
		ctx.drawImage($('#_templateimage').get(0), 0, 0, canvas.width,canvas.height);
		var front_customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) };
        for (var i = 0; i < front_customizeTextList.CustomizeText.length; i++)
        {
            obj=$("#"+front_customizeTextList.CustomizeText[i].LableId);
			if(obj.prop('id')==undefined)continue;
			x=eval(obj.css('left').replace('px',''));
			y=eval(obj.css('top').replace('px',''));
			if(obj.prop('tagName')=="IMG"){
				
			}else{
				deg=getRotationDegrees(obj);
				w=eval(obj.css('width').replace('px',''));
				h=eval(obj.css('height').replace('px',''));
				

				fsz=eval(obj.css('font-size').replace('px',''));
				ctx.textBaseline = 'top';
				ctx.font=obj.css('font-size')+' '+obj.css('font-family');
				ctx.fillStyle=obj.css('color');
				y1=Math.pow(fsz-21,(1/1.5));
				y=y+y1;

				ctx.save();
				ctx.translate(x+w/2, y+h/2);
			    ctx.rotate(Math.PI * deg/ 180);

				if(obj.css('text-shadow')!='none'){
					ctx.strokeStyle = 'white';
			    	ctx.lineWidth = 2;
			    	ctx.strokeText(front_customizeTextList.CustomizeText[i].Text,-w/2, -h/2);
			    }
				ctx.fillText(front_customizeTextList.CustomizeText[i].Text,-w/2, -h/2);
			    ctx.restore();
			}
        }
        return canvas.toDataURL();
    }   
    function PreserveEnteredData() {            
        mandatoryLabelsFadeIn();
        cardFadeIn();
        $('.txt_field_left').removeClass('cardInsideDivHighlighter');
        $('.formsinputtype1').blur();
        var page = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage').val();
        var isDoneImage = UpdateImagesSession(page, true);
        var isDoneText = UpdateTextSession(page, true);
        //alert('PreserveEnteredData, page='+page+',isDoneImage='+isDoneImage+',isDoneText='+isDoneText);
        if (isDoneImage && isDoneText) {
            setCompleteHiddenValue(page);
        }
        else {
            unsetCompleteStyle(page);
        }
        
        if(page=="1") {
            previewfront();
            $('#main_heading h2').text('Card Front');
            $('#product_stage').val('card_front');
            loadHelpSection();
        }
    }

    function navigatePage(direction) {
        if (direction == 0) {
            pageNumber--;
        }
        else {
            pageNumber++;
        }

        getData();
    }

///////////////////inside script////////////////////////////
    function FillTemplate(page) {
        var template_arr_cardinside_standard_left = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_left").val().split(','); 
        var template_arr_cardinside_advanced_left = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_advanced_left").val().split(',');
        var template_arr_cardinside_standard_right = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_right").val().split(',');
        var template_arr_cardinside_advanced_right = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_advanced_right").val().split(',');
        
        var template_arr_cardback_standard = new Array("cardinside_template_2");        
        var template_arr_cardback_advanced = new Array("cardinside_template_2");
        var body_html_standard = '<ul class="thumbs noscript thumbs_cardinside_standars">';
        var body_html_advanced = '<ul class="thumbs noscript thumbs_cardinside_advanced">';

        var template_thum_folder = 'P'
        // Hide Advance TAB in card back Special change
        if (page == 4) {
            $("#cardinside_advanced").css("display", "none");
        }
        else {
            $("#cardinside_advanced").css("display", "block");
        }                
        
        var selected_style = "";
        
        switch (page) {
            case 2:
                {//alert('!!!righttemplete2='+","+$("#" + $("#current_activate_cardinside_right_template_controlename").val()).val());
                    for (i = 0; i < template_arr_cardinside_standard_left.length; i++) {
                        selected_style = "";
                        if($("#" + $("#current_activate_cardinside_left_template_controlename").val()).val() == template_arr_cardinside_standard_left[i]) { selected_style="selected_n"; }
                        body_html_standard += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardinside_standard_left[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardinside_standard_left[i] + '.jpg" > </a> </li>';
                    }

                    for (i = 0; i < template_arr_cardinside_advanced_left.length; i++) {
                        selected_style = "";
                        if($("#" + $("#current_activate_cardinside_left_template_controlename").val()).val() == template_arr_cardinside_advanced_left[i]) { selected_style="selected_n"; }
                        body_html_advanced += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardinside_advanced_left[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardinside_advanced_left[i] + '.jpg" > </a> </li>';
                    }

                    if (template_arr_cardinside_standard_left.length > 1) { $("#div_template_wraper_standard").fadeIn(); } else { $("#div_template_wraper_standard").css("display", "none"); }
                    if (template_arr_cardinside_advanced_left.length > 1) { $("#div_template_wraper_advanced").fadeIn(); } else { $("#div_template_wraper_advanced").css("display", "none"); }
                    
                    break;
                }
            case 3:
                {//alert('!!!righttemplete='+","+$("#" + $("#current_activate_cardinside_right_template_controlename").val()).val());
                    for (i = 0; i < template_arr_cardinside_standard_right.length; i++) {
                        selected_style = "";
                        
                        if($("#" + $("#current_activate_cardinside_right_template_controlename").val()).val() == template_arr_cardinside_standard_right[i]) { selected_style="selected_n"; }
                        body_html_standard += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardinside_standard_right[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardinside_standard_right[i] + '.jpg" > </a> </li>';
                        //alert($("#" + $("#current_activate_cardinside_right_template_controlename").val()).val() +'=='+ template_arr_cardinside_standard_right[i]+','+selected_style);
                    }

                    for (i = 0; i < template_arr_cardinside_advanced_right.length; i++) {
                        selected_style = "";
                        if($("#" + $("#current_activate_cardinside_right_template_controlename").val()).val() == template_arr_cardinside_advanced_right[i]) { selected_style="selected_n"; }
                        body_html_advanced += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardinside_advanced_right[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardinside_advanced_right[i] + '.jpg" > </a> </li>';
                    }

                    if (template_arr_cardinside_standard_right.length > 1) { $("#div_template_wraper_standard").fadeIn(); } else { $("#div_template_wraper_standard").css("display", "none"); }
                    if (template_arr_cardinside_advanced_right.length > 1) { $("#div_template_wraper_advanced").fadeIn(); } else { $("#div_template_wraper_advanced").css("display", "none"); }
                    
                    break;
                }
            case 4:
                {
                    for (i = 0; i < template_arr_cardback_standard.length; i++) {
                        selected_style = "";
                        if($("#" + $("#current_activate_cardinside_back_template_controlename").val()).val() == template_arr_cardback_standard[i]) { selected_style="selected_n"; }
                        body_html_standard += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardback_standard[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardback_standard[i] + '.jpg" > </a> </li>';
                    }

                    for (i = 0; i < template_arr_cardback_advanced.length; i++) {
                        selected_style = "";
                        if($("#" + $("#current_activate_cardinside_back_template_controlename").val()).val() == template_arr_cardback_advanced[i]) { selected_style="selected_n"; }
                        body_html_advanced += '<li class="' + selected_style + '"> <a class="thumb" href="#" onclick="javascript:selectCardInsideTemplate(\'' + template_arr_cardback_advanced[i] + '\', false);"> <img src="/assets/dist/images/' + template_thum_folder + '/thum/' + template_arr_cardback_advanced[i] + '.jpg" > </a> </li>';
                    }

                    if (template_arr_cardback_standard.length > 1) { $("#div_template_wraper_standard").fadeIn(); } else { $("#div_template_wraper_standard").css("display", "none"); }
                    if (template_arr_cardback_advanced.length > 1) { $("#div_template_wraper_advanced").fadeIn(); } else { $("#div_template_wraper_advanced").css("display", "none"); }

                    break;
                }
        }

        body_html_standard += '</ul><div class="clear"></div>';
        body_html_advanced += '</ul><div class="clear"></div>';

        $("#thumb_slide_cardinside_standars").html(body_html_standard);
    }
    
    $('.inside_bound').click(function(){
        $('.inside_bound').removeClass('bound_active');
        $(this).addClass('bound_active');
    });

    $('#cardinside_text_control_textarea').click(function(){
        $(this).addClass('control_textarea_active');
    });

    $('.menu_mini li').click(function(){
        $('.tab_container#common_personalize_textupdater').addClass('active_mini');
    });

    $('.menu li#image_customize_standard').click(function(){
        $('.tab_container #common_personalize_textupdater').removeClass('active_mini');
    });
    $('.btn_reset').click(function(){
        $('.formsinputtype2').removeClass('effect_active');
        $('.tick').css('display', 'none');
        $('#hue_wrapper .tick_hue img').css('visibility', 'hidden');
    });        
    // Create a closure
    (function(){
        // Your base, I'm in it!
        var originalAddClassMethod = jQuery.fn.addClass;
        jQuery.fn.addClass = function(){
            // Execute the original method.
            var result = originalAddClassMethod.apply( this, arguments );
            // trigger a custom event
            jQuery(this).trigger('cssClassChanged');
            // return the original result
            return result;
        }
    })();  
    $('<div class="icon_edit_image ICE_edit_image" onclick="javascript:loadPersonalizeImageCustomize(1);">Edit</div>').appendTo('.ui-droppable');



///////////simular get//////////////////////////////
    function getData() {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "newFlow_ServerCallBack.aspx/LoadSimilarCards",
            data: "{'IsMobile':" +0 +",'productId':" +9632 +",'productTypeId':" +20 +",'pageNumber':" + pageNumber + "}",
            dataType: "json",
            success: function (theResponse) {
                var returnedData = JSON.parse(theResponse.d);
                pageNumber = returnedData.page;
                $("#similar_card_content").html(returnedData.html);
            }
        });
    }
    $('.sc_pag_next').click(function () {
        $('.sc_pag_prev').show();
    });

//upgrad your card------------------------------
	
	

	function setImage(url_thum, url, imageid, dragid, w, h, x, y, width, height) {
        var zoomfactor = 0.01;
        var aw = width;
        var ah = height;
        w=eval((new String(w)).replace('px',''));
        h=eval((new String(h)).replace('px',''));
        //width=eval(width.replace('px',''));
        //height=eval(height.replace('px',''));

        if(width>w && height>h)
        {
            while (parseInt(width) > parseInt(w)) {
                width = parseInt(width) - 1;//parseInt((width * zoomfactor));                                    
            }       
            height = parseInt(width/aw * ah);
            
            if(height<parseInt(h))
            {
                height = ah;
                //while (((parseInt(height) - (parseInt(height) * zoomfactor)) > parseInt(h))) {
                while (parseInt(height)  > parseInt(h)) {
                    height = parseInt(height) - parseInt((height * zoomfactor));                                      
                }
                width =  parseInt(height/ah * aw);
            }        
            
            $("#" + imageid).css("width", width);
            $("#" + imageid).css("height", height);
        }
        else
        {
            //alert(w+','+h+','+width+','+height);return;
            while (parseInt(width) < parseInt(w)+20) {//(parseInt(width) * zoomfactor))
                width = parseInt(width) + 1;                                    
            }       
            height = parseInt(width/aw * ah);
            
            if(height<parseInt(h))
            {
                height = ah;
                //while (parseInt(height) + (parseInt(height) * zoomfactor)) < parseInt(h)+20)) {
                while (parseInt(height) < parseInt(h)+20) {
                    height = parseInt(height) + 1;                                      
                }
                width =  parseInt(height/ah * aw);
            }        
            
            $("#" + imageid).css("width", width);
            $("#" + imageid).css("height", height);            
        }
        
        var isAdminUpload = false;
        if('False' == 'True') {
            isAdminUpload = true;
        }
        ImageManager.getInstance().updateImage(imageid, dragid, url, aw, ah, width, height, "0", "0", true, isAdminUpload);
        setCodination();
        ImageManager.getInstance().updateImageInfoField(); 
    }

function SetMandatoryStyleForImages() {
        var current_page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
        var customizeImageList;
        
        switch (current_page) {
            case "1":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };
                    for (i = 0; i < customizeImageList.CustomizeImage.length; i++) {
                        $("#skeleton_" + customizeImageList.CustomizeImage[i].ImageId).addClass("mandatory_image");

                        if (customizeImageList.CustomizeImage[i].IsUpload) {
                            $("#skeleton_" + customizeImageList.CustomizeImage[i].ImageId).removeClass("mandatory_image").addClass("mandatory_complete");
                            $(".mandImgLabel[data-relatedimgfield='skeleton_" + customizeImageList.CustomizeImage[i].ImageId + "']").removeClass("notComplete").hide();
                            $('.BtnNextImage').removeClass('nextImageInactive');
                            puProcess = 'active';
                            checkMandatoryFieldProgress(puProcess);
                            if ( $('#common_personalize_imageuploader').is(':visible') ) {
                                // do nothing
                                //alert('call SetMandatoryStyleForImages');
                            }
                            else {
                                checkMandatoryFieldProgress();
                                mandatoryLabelsFadeIn();
                            }
                            
                            //console.log('call SetMandatoryStyleForImages');
                            numberOfPhotosUsed();
                        }
                    }
                    
                    break;
                }
            default: { break; }
        }        
    }
function checkdownloadingurl(u){
	uu='userImgUploading';return u.indexOf(uu)==-1?u:'/newFlowImageUpload/userImgDownloading?url='+u.substr(u.lastIndexOf("/") + 1);
}
function dobackendprocess(url_thum, url, imageid, dragid, w, h, x, y, imageurl) {
		url_thum=checkdownloadingurl(url_thum);url=url_thum;
        $('body').removeClass().addClass('edit_image');
        
        var offset = $("#" + dragid).offset();//alert(offset.top+'!!!'+eval(offset.top-70));
        loading(true, 1, eval(offset.top-70), offset.left, $("#" + dragid).css("width"), $("#" + dragid).css("height"));
        $("#thum_" + imageid).attr('src', checkdownloadingurl(url_thum)); // Set thum on selected thum image
        // Set selected thum here
        if ($("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val() == imageid) {
            $("#image_selected").html("<img width=\"50px\" height=\"50px\" src=\"" + url_thum + "\">");
        }
        
        var source = "0";
        switch($("#current_activate_imagepanel").val())
        {
            case "thumbs_mc":
            {
                source = "MC";
                break;
            }
            case "thumbs_ml":
            {
                source = "ML";
                break;
            }
            case "thumbs_fb":
            {
                source = "FB";
                break;
            }
            case "thumbs_fl":
            {
                source = "FL";
                break;
            }  
            default:
            {
                source = "XX";
                break;                
            }                                              
        }

        updateSessionWithSelectedDragImage(url_thum, url, imageid, dragid, w, h, x, y, source, "0");
    }
    
    function addThisImage(url_thum, url) { 
        $('body').removeClass().addClass('edit_image');
        if($("#current_activate_activity").val()=="T")
        {
            // This block will execute in signature insert process.
            // Signatures design to insert into text block even it's an image.
            
            // Following function locate in 'PersonalizeTextUpdate.ascx'
            cardinside_text_control_imageselect(url);
        }
        else
        {
            var customizeImageList;
            var image_obj;
            
            switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()) {
                case "1":
                    {
                        var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };
                        break;
                    }
                case "2":
                    {
                        var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val()) };
                        break;
                    }
                case "3":
                    {
                        var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val()) };
                        break;
                    }
                case "4":
                    {
                        var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val()) };
                        break;
                    }                
                default: { break; }
            }
            if (customizeImageList.CustomizeImage.length > 0) {
                for (i = 0; i < customizeImageList.CustomizeImage.length; i++) {
                	//alert(customizeImageList.CustomizeImage[i].ImageId+',??,'+$("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val());
                    if (url_thum != undefined && url != undefined && $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val()==customizeImageList.CustomizeImage[i].ImageId) {
                        if($("#uploaded_first_image").val()=="1" && customizeImageList.CustomizeImage[i].IsUpload) { return; } // No need to auto set image when uploading if there is an image available. 
                        //alert('!!!='+customizeImageList.CustomizeImage[i].ImageId+',tu url='+url_thum+',url='+url+',x='+customizeImageList.CustomizeImage[i].DragWidth+',y='+customizeImageList.CustomizeImage[i].DragHeight);
                        dobackendprocess(url_thum, url, customizeImageList.CustomizeImage[i].ImageId, customizeImageList.CustomizeImage[i].DragId, customizeImageList.CustomizeImage[i].DragWidth, customizeImageList.CustomizeImage[i].DragHeight, customizeImageList.CustomizeImage[i].X, customizeImageList.CustomizeImage[i].Y, customizeImageList.CustomizeImage[i].ImagePath);
                    }
                }
            }  
        }  
    }
function imageAutofillingWhenUploadComplete() {
    if($("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val().length>0) {
        var ctr = $("#ctl00_ContentPlaceHolder1_CardFlow1_activeControl").val();
        image_autofilling_isprocess = false;
        image_autofilling_current_id = parseInt(ctr.replace("cardtype2_im", ""))-1;    
        imageAutofillingProcess();
    }        
}

function imageAutofilling() {
    image_autofilling_isprocess = false;
    image_autofilling_current_id = 0;    
    imageAutofillingProcess();
}

function CheckAndRecallAutoFilling()
{
    // Set special css class for un-updated images.
    SetMandatoryStyleForImages();
    if(image_autofilling_isprocess) {
        image_autofilling_isprocess = false;
        image_autofilling_current_id++;
        imageAutofillingProcess();
    }     
}   

function loadPersonalizeImageCustomizeBack(callfromsub) {
    if(callfromsub) {
        loadPersonalizeImageCustomizeTabHandle((($("#selected_imagecustomization_tab").val()=="A")?2:1));
    } else {
        loadPersonalizeImageCustomizeBackTabHandle(); }
}  
    
function imageAutofillingProcess() {            
    var doprocess = false;
    var customizeImageList;
    var thum_class_name = "";
    var image_obj;        
    
    switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()) {
        case "1":
            {
                var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };
                break;
            }
        case "2":
            {
                var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val()) };
                break;
            }
        case "3":
            {
                var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val()) };
                break;
            }
        case "4":
            {
                var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val()) };
                break;
            }                
        default: { break; }
    }

    switch ($("#current_activate_imagepanel").val()) {
        case "thumbs_mc":
            {
                doprocess = true;
                thum_class_name = "thumbnailmc";
                break;
            }
        case "thumbs_ml":
            {
                doprocess = true;
                thum_class_name = "thumbnailml";
                break;
            }
        case "thumbs_fb":
            {
                doprocess = true;
                thum_class_name = "thumbnailfb";
                break;
            }
        case "thumbs_fl":
            {
                doprocess = true;
                thum_class_name = "thumbnailfl";
                break;
            }
                            
        default: { break; }           
    }

    if (doprocess) {
        if (customizeImageList.CustomizeImage.length > 0) {
            if(image_autofilling_current_id<customizeImageList.CustomizeImage.length)
            {
                for (i = image_autofilling_current_id; i < customizeImageList.CustomizeImage.length; i++) {                        
                    if(!image_autofilling_isprocess) {
                        image_obj = $("." + thum_class_name);
                        if (image_obj[i] != undefined) {
                            var url_thum = image_obj[i].src;
                            var url = image_obj[i].getAttribute('rel');
                            if (url_thum != undefined && url != undefined) {
                                image_autofilling_isprocess = true;
                                if(url.indexOf('userImgUploading')>-1){
						        	//url='/newFlowImageUpload/userImgDownloading?url='+url.substr(url.lastIndexOf("/") + 1);
						        	//url_thum='/newFlowImageUpload/userImgDownloading?url='+url_thum.substr(url_thum.lastIndexOf("/") + 1);

						        }
                                //alert('!!!!!!!!!!!!!!!!!!!!!!!'+url);
                                dobackendprocess(checkdownloadingurl(url_thum), checkdownloadingurl(url), customizeImageList.CustomizeImage[i].ImageId, customizeImageList.CustomizeImage[i].DragId, customizeImageList.CustomizeImage[i].DragWidth, customizeImageList.CustomizeImage[i].DragHeight, customizeImageList.CustomizeImage[i].X, customizeImageList.CustomizeImage[i].Y, customizeImageList.CustomizeImage[i].ImagePath);
                            }
                        }
                    }
                }
            }
        }
    }
}

function updateSessionWithSelectedDragImage(url_thum, url, imageid, dragid, w, h, x, y, source, forceprocess)
{
    try
    {
        var page = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage').val();
        var userid = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_userid').val();
        var sessionid = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_sessionid').val();
        var upload_image_url = url;
        if(source=="MC" && forceprocess=="0")
        {
            
            var img = new Image();
            img.crossOrigin = 'anonymous';
			
            img.onload = function() {
            	//alert(url+'>!!!>'+this.width+','+this.height+','+w+','+h);
                if(((parseFloat(this.width)< parseFloat(w)) || (parseFloat(this.height)< parseFloat(h))) &&  (forceprocess=="0"))
                {
                    var error_heading ='Check your photo!';
                    var message = '<p>This is a poor quality photo. If you use this photo the printed card will be blurry.</p>';
                    message += '<div class="btn_close_error" onclick="javascript:updateSessionWithSelectedDragImage(\'' + url_thum + '\', \'' + url + '\', \'' + imageid + '\', \'' + dragid + '\', \'' + w + '\', \'' + h + '\', \'' + x + '\', \'' + y + '\', \'' + source + '\', \'1\');CloseError();">Use</div><div class="btn_close_error" onclick="loading(false, 1, 0, 0, 0, 0);$(\'#error\').hide();">Replace</div><a class="photoTips_btn" onclick="javascript:openPhotoTipsQuality();">View Photo Hints &amp; Tips</a>'
                    DisplayError(error_heading, message, false);
                    GAlogError('Low Res Image');
                }
                //else
                //{
                	ImageManager.getInstance().resetItem(dragid, true);
                    //alert(w+','+h+','+this.width+','+this.height);
                    setImage(url_thum, upload_image_url, imageid, dragid, w, h, x, y, this.width, this.height);                   
                    SetFocusImage(imageid, dragid, w, h, x, y, upload_image_url);
                    keepTrack(true);
                //}
            }         
                                   
            img.src = upload_image_url;
            //-----------------------------------------------------------------------------------------------   
   
            $("#" + imageid).attr('src', upload_image_url);                                
            setTimeout(function() { $("#" + imageid).attr('src', upload_image_url); loading(false, 1, 0, 0, 0, 0); CheckAndRecallAutoFilling(); }, 3000);
        }
        else
        {//alert('newFlow_SessionUpdateBackend');
            $.ajax({
                type: "POST",
                url: "home/newFlow_SessionUpdateBackend",
                data: { page: page, imageid: imageid, userid: userid, sessionid: sessionid, url: url, source: source, forceprocess: forceprocess },
                dataType: "html",
                success: function(theResponse) {
                    var upload_image_url = theResponse;
                    switch (upload_image_url) {
                        case "-1": { alert("Error !"); loading(false, 1, 0, 0, 0, 0); break; }
                        case "-2": { alert("Error - Missing input information!"); loading(false, 1, 0, 0, 0, 0); GAlogError('Missing input information'); break; }
                        case "-3": { alert("Error - Could not get the selected image from FB!"); loading(false, 1, 0, 0, 0, 0); GAlogError('Could not get the selected image from FB'); break; }
                        case "-4": { alert("Error - Image session is blank!"); loading(false, 1, 0, 0, 0, 0); GAlogError('Image session is blank'); break; }
                        case "-5": { alert("Error - Could not get the selected image from My Photos!"); loading(false, 1, 0, 0, 0, 0); GAlogError('Could not get the selected image from My Photos'); break; }
                        case "100":
                            {
                                var error_heading ='Check your photo!';
                                var message = '<p>This is a poor quality photo. If you use this photo the printed card will be blurry.</p>';
                                message += '<div class="btn_close_error" onclick="javascript:updateSessionWithSelectedDragImage(\'' + url_thum + '\', \'' + url + '\', \'' + imageid + '\', \'' + dragid + '\', \'' + w + '\', \'' + h + '\', \'' + x + '\', \'' + y + '\', \'' + source + '\', \'1\');CloseError();">OK</div><div class="btn_close_error btn_cross" onclick="loading(false, 1, 0, 0, 0, 0);$(\'#error\').hide();">CLOSE</div><a class="photoTips_btn" onclick="javascript:openPhotoTipsQuality();">View Image Hints &amp; Tips</a>'
                                DisplayError(error_heading, message, false);
                                GAlogError('Low Res Image');
                                break;
                            }
                         default:
                            {
                                //-----------------------------------------------------------------------------------------------
                                // Reset image width & height according to the corespondant image wraper                                    
                                var img = new Image();
                                img.crossOrigin = 'anonymous';
                                img.onload = function() {         
                                    ImageManager.getInstance().resetItem(dragid, true);
                                    setImage(url_thum, upload_image_url, imageid, dragid, w, h, x, y, this.width, this.height);                   
                                    SetFocusImage(imageid, dragid, w, h, x, y, upload_image_url);
                                    keepTrack(true);
                                }                                    
                                img.src = upload_image_url;
                                //-----------------------------------------------------------------------------------------------   
                            
                                $("#" + imageid).attr('src', upload_image_url);                                
                                setTimeout(function() { $("#" + imageid).attr('src', upload_image_url); loading(false, 1, 0, 0, 0, 0); CheckAndRecallAutoFilling(); }, 3000);
                                break;
                            }
                    }
                }                                
            }); 
        }
    }
    catch(Error)
    {
        loading(false, 1, 0, 0, 0, 0);
    }        
}   



function GetCardPage(page) {
    var result = "";
    switch(page)
    {
        case 1: { result="Card Front"; break; }
        case 2: { result="Card Left"; break; }
        case 3: { result="Card Right"; break; }
        case 4: { result="Card Back"; break; }
        default: { break; }
    }
    return result;
}

function makeThisIntoGiant() {
    $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val("128");
    savepagesessionsintodb('0');
}

function GetLoadProductName() {        
    var product_name = "";
       
    switch(GetLoadProductType())
    {
        case 5:
        {
            product_name = "Card";
            break;
        }
        case 11:
        {
            product_name = "Box Set";
            $('.christmas_boxsets_message').show();
            $('.price_info_popup').hide();
            break;
        }
        case 20:
        {
            product_name = "Card";
            break;
        }
        default: { break; }                        
    }
    
    return product_name;
}

function GetLoadProductType() {
    var currentActiveProduct = { "CurrentActiveProduct": JSON.parse($("#" +  $("#hidden_active_product_controlname").val()).val()) };
    return currentActiveProduct.CurrentActiveProduct.ProductTypeId;
}

function GetLoadProductId() {
    var currentActiveProduct = { "CurrentActiveProduct": JSON.parse($("#" +  $("#hidden_active_product_controlname").val()).val()) };
    return currentActiveProduct.CurrentActiveProduct.ProductId;
}    

function GetCurentFileName(){
    var pagePathName= window.location.pathname;
    return pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
}

function Redirect(url) {
    window.location.href = url;
}
function mainTabCardFrontClick() {   
    //== HINTS AND TIPS - CHANGE BODY CLASS ==//
    $('body').removeClass().addClass('card_front');
    $('#main_tab_front').css('display','none');
         
    //== DETECT LANDSCAPE CARD ==/
    if ($('#main_wrapper').hasClass('landscape')) {
        $('#main_tab').animate({ width: "380px" });
    }
    else {
        $('#main_tab').animate({ width: "486px" });
    }
            
    //backFromPersonalizeImageuploader();

    $('input.btn_choose_music').val('Next');
    $('.help_link').animate({ right: "40px" });
    $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_top").hide();
    $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_bottom").hide();
    $("#main_card_wrapper").css('padding-top', '20px');
    
    // Set page heading
    $("#main_heading").html("<h2>" + GetLoadProductName() + " Front</h2>");
    // Change the heading if page doesn't have any personaliza stuff.
    $('.hat_dd select option#set1').hide();
    if( !ispagepersonalizable(1) ) {
        $('#main_wrapper').addClass('non_personalised');
        $("#main_heading").html("<h2>Card Front</h2>");
        //$(".no_text_message").show();
        $('.hat_dd select option#set1').show();
        $('body').removeClass().addClass('standard_non_personalised');
    }

    hsc_check();

    $("#main_tab_front").fadeIn();

    activeDeactiveCardWrapper('ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_front');
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_front_wrapper").fadeIn(); // Show personalize image list
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_front_wrapper").fadeIn(); // Show selected image
    
//        // if loading after template change then re-run mandatory field detection
//        var referrer =  document.referrer;
//        if (referrer.indexOf('CustomiseCards') > -1) {
//            mandatoryLabels();
//        }        
    
    // Set special css class for un-updated text & images.
    SetMandatoryStyle();
    
    ClearVerses(); // Should initialize verses
    
    ReloadtoFront();
} 

function ReloadtoFront() {
    setTimeout(function() {
          //alert('TEST');
          if (document.referrer.indexOf('CustomiseCards') > -1) {
              mandatoryLabels();
              //checkMandatoryFieldProgress();
          } 
    }, 500);
    
}

function mainTabCardInsideLeftClick() {
    //== DETECT LANDSCAPE CARD ==/
    
    if ($('#main_wrapper').hasClass('landscape')) {
        $('#main_tab').animate({ width: "320px" });
    }
    else {
        $('#main_tab').animate({ width: "422px" });
    }
    
        $('input.btn_choose_music').val('Next');
        
    $('.BtnChangeTemp').show();  
    $('.text_customize_standard').show(); 
    
    $('.help_link').animate({ right: "105px" });
    // Hide image upload buttons if selected template doesn't have any images
    enableCardInsideImageUploadButton(1);
    
    $("#main_heading").html("<h2>Inside Left</h2>");
    $("#main_tab_inside").fadeIn();
    $('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_div_no_personalize_msg').hide();
    
    loadCardinsideTabHandle((($("#" + $("#cardinside_tab_controlname").val()).val()=="A") ? 2 : 1), 2);
    activeDeactiveCardWrapper('ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideleft');
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideleft_wrapper").fadeIn(); // Show personalize image list
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideleft_wrapper").fadeIn(); // Show selected image        
    
    //LANDSCAPE CONDITION//
    if ($('#main_wrapper').hasClass('landscape')) {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right").hide();
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_bottom").show();
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_top").hide();
        $("#main_card_wrapper").css('padding-top', '21px');
    }
    
    else if ($('#main_wrapper').hasClass('square')) {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right").fadeIn();
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right').css('margin','-6px 0 0 21px');
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right').animate({width:'8px'});
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right img').animate({left:'8px'});
    }
    
    else {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right").fadeIn();
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right').animate({width:'12px'});
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right img').animate({left:'12px'});
    }
    
    ClearVerses(); // Should initialize verses
}

function mainTabCardInsideRightClick() {
    //== DETECT LANDSCAPE CARD ==/
    if ($('#main_wrapper').hasClass('landscape')) {
        $('#main_tab').animate({ width: "320px" });
    }
    else {
        $('#main_tab').animate({ width: "422px" });
    }
    
    //== HINTS AND TIPS - CHANGE BODY CLASS ==//
    $('body').removeClass().addClass('inside_right');

        $('input.btn_choose_music').val('Next');
    $('.BtnChangeTemp').show();
    $('.text_customize_standard').show();
    
    $('.help_link').animate({ right: "105px" });
    // Hide image upload buttons if selected template doesn't have any images
    enableCardInsideImageUploadButton(2);
        
    $("#main_heading").html("<h2>Inside Right</h2>");
    $("#main_tab_inside").fadeIn();
    $('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_div_no_personalize_msg').hide();

    loadCardinsideTabHandle((($("#" + $("#cardinside_tab_controlname").val()).val()=="A") ? 2 : 1), 3);
    activeDeactiveCardWrapper('ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideright');
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideright_wrapper").fadeIn(); // Show personalize image list
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideright_wrapper").fadeIn(); // Show selected image       
    //LANDSCAPE CONDITION//
    if ($('#main_wrapper').hasClass('landscape')) {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left").hide();
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_top").show();
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_bottom").hide();
        $("#main_card_wrapper").css('padding-top', '60px');
    }
    else if ($('#main_wrapper').hasClass('square')) {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left").fadeIn();
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left').animate({width:'8px'});
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left img').animate({left:'8px'});
    }
    else {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left").fadeIn();
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left').animate({width:'12px'});
        $('#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left img').animate({left:'12px'});
    }
    
    ClearVerses(); // Should initialize verses
}

function mainTabCardBackClick() {
    //== HINTS AND TIPS - CHANGE BODY CLASS ==//
    $('body').removeClass().addClass('card_back');
    
    //== DETECT LANDSCAPE CARD ==/
    if ($('#main_wrapper').hasClass('landscape')) {
        $('#main_tab').animate({ width: "320px" });
    }
    else {
        $('#main_tab').animate({ width: "422px" });
    }
    
    if ($('#ctl00_ContentPlaceHolder1_CardFlow1_is_music_card').val() == 1) {
        $('input.btn_choose_music').val('Choose Music');
        $('input.btn_preview_ice').val('Preview ' + GetLoadProductName() + ' & Choose Music');
        $('input.btn_preview_ice').addClass('music_padding');
        //lert('music card');
    }
    else if ($('#ctl00_ContentPlaceHolder1_CardFlow1_is_video_card').val() == 1) {
        $('input.btn_choose_music').val('Choose Video');
        $('input.btn_preview_ice').val('Preview ' + GetLoadProductName() + ' & Choose Video');
        $('input.btn_preview_ice').addClass('music_padding');
        //lert('music card');
    }
    else {
        $('input.btn_choose_music').val('Next');
        $('input.btn_preview_ice').val('Preview ' + GetLoadProductName() + ' & Next');
    }
    
    $('.help_link').animate({ right: "105px" });
    $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_bottom").hide();
    $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_top").hide();
    $("#main_card_wrapper").css('padding-top', '20px');
    // Hide image upload buttons if selected template doesn't have any images
    enableCardInsideImageUploadButton(3);

    $("#main_heading").html("<h2>Card Back</h2>");
    $("#main_tab_inside").fadeIn();

    loadCardinsideTabHandle(1, 4);
    activeDeactiveCardWrapper('ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_back');
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_back_wrapper").fadeIn(); // Show personalize image list
    $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_back_wrapper").fadeIn(); // Show selected image
    $('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_div_no_personalize_msg').show();
    //$('.BtnChangeTemp').hide();
    //$('.text_customize_standard').hide();
    ClearVerses(); // Should initialize verses
}

function loadmusictab() {
    $("#main_wrapper").hide();
    $("#main_musiccard_wrapper").fadeIn();
    $("#music_card_demo_show").fadeIn();
}    

function loadmaincardtab() {
    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("0");
    $("#main_musiccard_wrapper").hide();
    $("#main_wrapper").fadeIn();
}

function loadCommonImageUploadButtonPanel() {
    
    hideAllCommonMainTabs();
    
    switch ($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val())
    {
        case "1":
        {
            $("#main_tab_front").css("display", "none");
            
            break;
        }
        case "2":
        {
            $("#main_tab_inside").css("display", "none");               
            break;
        }
        case "3":
        {
            $("#main_tab_inside").css("display", "none");
            break;
        }
        case "4":
        {
            $("#main_tab_inside").css("display", "none");
            break;
        }      
        default: { break; }                              
    }
        
    $("#common_imageupload_button_panel").fadeIn();        
}

function enableCardInsideImageUploadButton(page) {
    $("#btn_upload_inside").css("display", "none");        
    
    var control_name = "";
    switch (page) {
        case 1: { control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left'; break; }
        case 2: { control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right'; break; }
        case 3: { control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back'; break; }
    }

    var cardinside_customizeImageList = { "CustomizeImage": JSON.parse($("#" + control_name).val()) };
    if (cardinside_customizeImageList.CustomizeImage.length > 0) {
        $("#btn_upload_inside").css("display", "block");
    }
    //alert('call enableCardInsideImageUploadButton');
}

function ispagepersonalizable(page) {
    var result = false;
    
    //var image_control_name = "";
    var text_control_name = "";
    
    switch (page) {
        case 1: 
        { 
            text_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front';
            //image_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left'; 
            break; 
        }
        case 2: 
        {
            text_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left';
            //image_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right'; 
            break; 
        }
        case 3: 
        {
            text_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right';
            //image_control_name = 'ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back'; 
            break; 
        }
    }
    
    var customizeTextList = { "CustomizeText": JSON.parse($("#" + text_control_name).val()) };    
    //var customizeImageList = { "CustomizeImage": JSON.parse($("#" + image_control_name).val()) };
    if (customizeTextList.CustomizeText.length > 0) {
        result = true;
    }
    
    return result;
}
function loadmaincardtab() {
    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("0");
    $("#main_musiccard_wrapper").hide();
    $("#main_wrapper").fadeIn();
}
function mainTabClick(val) {
	//alert('!!!'+$('#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_tab').val()+','+$("#cardinside_tab_controlname").val()+','+$("#" + $("#cardinside_tab_controlname").val()).val()+','+($("#" + $("#cardinside_tab_controlname").val()).val()=="A"));
    loadmaincardtab();
    //alert('!!!-loading-templete-changed?'+$("#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change").val());
    if($("#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change").val()=="")
    { 
        /* Before move into next tab save user entered data. */
        PreserveEnteredData();
    }
    $(".forms_card_back").css("display", "none");
    if(val==4) { $(".forms_card_back").css("display", "block"); }
        
    /* Set currenty active card page [1=Front, 2=Left, 3=Left, 4=Back] */
    $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val(val);
    /* Hide all main tabs */
    $("#main_tab_front").css("display", "none");
    $("#main_tab_inside").css("display", "none");
    
    /* Black current activity (Image upload or Text update) */
    $("#current_activate_activity").val(""); 
    
    /* Hide other common main tabs */
    hideAllCommonMainTabs();
    
    $("#tab_main_card_front").removeClass("tab_active");
    $("#tab_main_cardinside_left").removeClass("tab_active");
    $("#tab_main_cardinside_right").removeClass("tab_active");
    $("#tab_main_card_back").removeClass("tab_active");
    
    switch(val)
    {
        case "1": { mainTabCardFrontClick(); $("#tab_main_card_front").addClass("tab_active"); mandatoryLabelsFadeIn(); numberOfPhotosUsed(); $('#main_tab_front').hide(); $('.card_nav_prompt').hide(); csCustomE('cardFront'); $('#product_stage').val('card_front'); loadHelpSection(); hsc_check(); break; }
        case "2": {
        	 mainTabCardInsideLeftClick(); $("#tab_main_cardinside_left").addClass("tab_active"); mandatoryLabelsHide(); $('.card_nav_prompt').hide(); $('#next_steps_front').hide(); SelectedTemplateBlockClick(); csCustomE('cardInsideLeft'); $('#product_stage').val('inside_left'); loadHelpSection(); $('.no_text_message').hide(); break; 
        	}
        case "3": { mainTabCardInsideRightClick();
        	$("#tab_main_cardinside_right").addClass("tab_active"); 
        	mandatoryLabelsHide(); 
        	$('.card_nav_prompt').hide(); 
        	$('#next_steps_front').hide(); 
        	$('.card_nav_prompt').hide(); 
        	removeInsideTemplateLabels(); 
        	SelectedTemplateBlockClick(); 
        	csCustomE('cardInsideRight'); 
        	$('#product_stage').val('inside_right'); 
        	loadHelpSection(); 
        	$('.no_text_message').hide(); break; 
        }
        case "4": { mainTabCardBackClick(); $("#tab_main_card_back").addClass("tab_active"); mandatoryLabelsHide(); $('#next_steps_front').hide(); $('.card_nav_prompt').hide(); csCustomE('cardBack'); $('#product_stage').val('card_back'); loadHelpSection(); $('.no_text_message').hide(); break; }
    }
     
    if($("#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change").val()!="")
    { 
        AutoloadTextEditerForSelectedCardInside(val);
        $("#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change").val("");
    }
    else
    {
        // Special request from Jack on 28-07-2015
        if(val=="3") {AutoloadTextEditerForSelectedCardInside(val);}
        
    }
    
    /* Set style for completed page tab heading */
    setCompleteStyle();
    ImageManager.getInstance().initializePage();    
}

////////////////////////////////////////////////////////////////
function loadHelpSection() {
    switch ($("#product_stage").val())
        {
        case "card_front":
            {                
                $('.help_tab').css('right','0px');
                $('.help_popup_content').html('<div class="tip_holder" style="right:0;top:350px;" data-tip="1"><h2>Adding Images/Text</h2><p>Click the arrows to upload an image or change the text on your card front.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div> <div class="tip_holder" style="left:380px;top:115px;display:none;" data-tip="2"><h2>Navigating your card</h2><p>Edit each part of your card by using the card tabs located here</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="left:320px;top:0;display:none;" data-tip="3"><h2>Choose a card size</h2><p>Pick the right card size for you by selecting one from the size tabs located here.</p><div class="done_tip_btn">Got it</div></div>')
                //console.log('You are on the card front');
                break;
            }
        case "edit_text":
            {
                $('.help_tab').css('right','0px');
                $('.help_popup_content').html('<div class="tip_holder" style="right:240px;bottom:140px;" data-tip="1"><h2>Changing the Card Text</h2><p>To change the card front text, type in the field and press Update Message. The card will then preview.</p><div class="done_tip_btn">Got it</div></div>');
                //console.log('You are editing Text');
                break;
            }
        case "upload_location":
            {
                $('.help_tab').css('right','0px');
                $('.help_popup_content').html('<div class="tip_holder" style="left:50px;top:220px;" data-tip="1"><h2>Upload Photos from your Device</h2><p>Click or tap anywhere in this area to upload a photo from you device or computer.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div> <div class="tip_holder" style="left:50px;top:433px;display:none;" data-tip="2"><h2>Upload Photos from Facebook</h2><p>Alternatively, you can upload photos from your facebook account by clicking/tapping here.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div> <div class="tip_holder" style="left:0; right:0; margin:auto; top:300px; display:none;" data-tip="3"><h2>Image Quality & Tips</h2><p>For more information on photo quality and the dos and donts, click the more info button below.</p><div class="more_info_btn" onclick="javascript:openPhotoTipsHelp();">More Info</div><div class="done_tip_btn">Got it</div></div>');
                //console.log('Choose your photo loaction');
                break;
            }  
        case "upload_panel":
            { 
                $('.help_tab').css('right','0px');
                $('.help_popup_content').html('<div class="tip_holder" style="left:70px;top:200px;" data-tip="1"><h2>Uploaded photos</h2><p>The photos you have uploaded will appear in this area.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="right:280px;top:120px;display:none;" data-tip="2"><h2>Moving/Resizing your photo</h2><p>You can adjust the photo by dragging the image to fit the space available. You can also use the size slider to zoom in.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="left:60px;top:365px;display:none;" data-tip="3"><h2>Photo Edit Panel</h2><p>You can also your rotate and add effects using Black & White, Sepia or control the brightness and contrast in Enhance.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="right:270px;top:125px;display:none;" data-tip="4"><h2>Uploading more photos</h2><p>If you need to upload more photos, you can hit the Upload more photos button located here.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="right:580px;bottom:60px;display:none;" data-tip="5"><h2>All Finished?</h2><p>Once you are finished adding photos to your card, hit the Finished Adding & Editing Photos button.</p><div class="skip_btn">Skip</div><div class="done_tip_btn">Got it</div></div>');
                //console.log('Customise your photos');
                break;
            }
        case "inside_left":
            {
                $('.help_tab').css('right','-80px');
                $('.help_popup_content').html('');
                //console.log('You are on the card inside left');
                break;
            }
        case "inside_right":
            {
                $('.help_tab').css('right','0px');
                $('.help_popup_content').html('<div class="tip_holder" style="left:390px;top:320px;" data-tip="1"><h2>Adding Inside Text</h2><p>There are three boxes for you to write a message in. Spread out your message for best results.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="right:140px;top:370px;display:none;" data-tip="2"><h2>Change your text style</h2><p>Using the panel above, you are able to change the font, size, colour and more. Making it that much more special.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="right:280px;top:80px;display:none;" data-tip="3"><h2>Change card template</h2><p>If you wish change the card layout or even add photos, you can change the template by clicking here.</p><div class="done_tip_btn">Got it</div></div>');
                //console.log('You are on the card inside right');
                break;
            }
        case "card_back":
            {
                //IF EDITABLE CARD BACK
                if ( $('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_back .ui-droppable').length ) {
                    $('.help_tab').css('right','0px');
                    $('.help_popup_content').html('<div class="tip_holder" style="left:280px;top:180px;" data-tip="1"><h2>Add a Photo to the Card back</h2><p>With this card, you can add a photo to the back! Just click box with camera symbol.</p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="left:370px;top:290px;display:none;" data-tip="2"><h2>Add a message</h2><p>You can also add a small message on the back. Just click in the dashed box. </p><div class="skip_btn">Skip</div><div class="next_btn">Next tip</div></div><div class="tip_holder" style="left:70px;top:160px;display:none;" data-tip="3"><h2>Card Complete?</h2><p>If your card is complete, you can continue to the basket or preview it first. Once the card is in the basket it will be saved and you can continue to shop for more products.</p><div class="done_tip_btn">Got it</div></div>');
                } else {
                    $('.help_tab').css('right','-80px');
                    //$('.help_tab').css('right','0px');
                    //$('.help_popup_content').html('<div class="tip_holder custom_back" style="left:70px;top:160px;" data-tip="1"><h2>Card Complete?</h2><p>If your card is complete, you can continue to the basket or preview it first. Once the card is in the basket it will be saved and you can continue to shop for more products.</p><div class="done_tip_btn">Got it</div></div>');
                }
                //console.log('You are on the card back');
                break;
            }
            default: { break; }                              
        }

}

//OPEN HELP
function openHelpPopups() {
    $('.help_popup_holder').fadeIn();
    $('.help_tab').text('Close');
    $('.help_tab').addClass('helpActive');
    $('.help_tab').attr('onclick', 'javascript:closeHelpPopups();');

    var currentCardSection = $('#product_stage').val();
    $('.content_wrapper').attr('id', currentCardSection + '_step1');
    $('.tip_holder:nth-of-type(1)').fadeIn(300);
    nextBtnClick();
    skipNextBtnClick();
}

//CLOSE HELP
function closeHelpPopups() {
    $('.help_popup_holder').fadeOut();
    $('.help_tab').text('Help');
    $('.help_tab').removeClass('helpActive');
    $('.help_tab').attr('onclick', 'javascript:openHelpPopups();');
    $('.content_wrapper').removeAttr('id');
    $('.tip_holder').hide();
}

//HELP NEXT
function nextBtnClick() {
    $('.next_btn').click(function(){
        var currentCardSection = $('#product_stage').val();
        var nextTipNumber = $(this).parent().next().data('tip');

        $('.content_wrapper').attr('id', currentCardSection + '_step' + nextTipNumber);

        $(this).parent().fadeOut(300);
        $(this).parent().next().fadeIn(300);
    });
}

//HELP SKIP/DONE
function skipNextBtnClick() {
    $('.done_tip_btn, .skip_btn').click(function(){
        closeHelpPopups();
    });
}














////////////////////////////back process/////////////////////////////////
$('.main_tab_navigation li').click(function() {
	$('.main_tab_navigation li').removeClass('tab_active');
	$(this).addClass('tab_active');
	$('.navigation').css('background', 'none');
});
$('.pu_area').click(function() {
	$('.pu_area').removeClass('pu_selected');
	$(this).addClass('pu_selected');
});
$('.txt_field_left').click(function() {
	$('.pu_area').removeClass('pu_selected');
});

$('<div class="icon_edit_image"><img src="/assets/dist/images/icon_drag.png"/>Drag/Move</div>').appendTo('.pu_area');
/*== SIZE POPUP ==*/
function cardSizePopup() {
    $('.card_size_popup').show();
}
function ChocAddon(){
    clickLoadChocos(1);
    if ( $('.chocCardSelected').hasClass('chocCardSelected') ) {
        $('.AddOnHolder').addClass('largeCardActive');
    }
    $(".hat_header h1").text("Luxury Chocolate Card");
    if ( $('#choc_remove_option').val() == '1' ) {
        $('.AddOnHolder').removeClass('no_remove_option');
        $('#btnRemoveChoco').show();
    }
}
function LargeAddon(){
    clickLoadChocos(2);
    $(".hat_header h1").text("Large Card");
}
function closeOrderPopup() {
    $(".fancierbox_addons").css({display:'none'});
}
function DupeCardThumb () {
    var thumbSrc = $('.google_rich img').attr('src');
    if(thumbSrc!=undefined) {
        $('.card_dupe').attr('src',thumbSrc.toLowerCase());
    }
    //alert(thumbSrc);
}
function chocCardSwitch () {
    $('.content_choc_card').show();
    $('.content_large_card').hide();
    $('.half_header').removeClass('CSactive');
    $('.choc_card_tab').addClass('CSactive');
    if ( $('.content_wrapper').hasClass('chocCardSelected') ) {
        $('.AddOnHolder').addClass('largeCardActive');
    }
    else {
        $('.AddOnHolder').removeClass('largeCardActive');
    }
}
function largeCardSwitch () {
    $('.content_large_card').show();
    $('.content_choc_card').hide();
    $('.half_header').removeClass('CSactive');
    $('.large_card_tab').addClass('CSactive');
    $('.AddOnHolder').addClass('largeCardActive');
}
function chocSwitch () {
    $('.switch').click(function(){
        var switchVal = $(this).data('switch');
        var switchVal = $(this).data('switch');
        $('.chocolatePreview').hide();
        $('.'+switchVal+'Choc').show();
        $('.switch').removeClass('active');
        $(this).addClass('active');
    });
    var chocCat = $('.chocSelected').val();
    if ( chocCat.indexOf("Birthday") >= 0 ) {
        $('.chocolatePreview').hide();
        $('.birthdayChoc').show();
        $('.chocCardText:last-of-type').html('...OR');
    }
    if ( chocCat.indexOf("Valentine") >= 0 ) {
        $('.chocolatePreview').hide();
        $('.valentinesChoc').show();
        $('.chocCardText:last-of-type').html('...OR');
    }
    if ( chocCat.indexOf("Mothers") >= 0 ) {
        $('.chocolatePreview').hide();
        $('.mothersdayChoc').show();
        $('.chocCardText:last-of-type').html('...OR');
    }
}
function csCustomE(csSection) {
    window._uxa = window._uxa || [];
    window._uxa.push(['trackPageview', window.location.pathname+window.location.hash.replace('#','?__') + '?cs-card-step='+csSection+'']);
}
function clickLoadChocos(mode) {
    var cur_url = $(location).attr('protocol') + "//" + $(location).attr('host') + "/";

    $.ajax({
        type: "POST",
        url: cur_url + "ServerCall.aspx" + "/GetAutoFeatureProducts",
        data: '{"productId": 134377}',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function (jqXHR, textStatus) {
            return;
        },
        success: function (msg) {
            listChocoCards(msg.d);
            $(".fancierbox_addons.choc_large_popup").css({display:'block'});
            
            if(mode==1) 
            {
                chocCardSwitch();
            }
            else
            {
                largeCardSwitch();
            }
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
            var selected_id = ($("input[id$='is_fp_selected']").val().length==0) ? 0 : parseInt($("input[id$='is_fp_selected']").val());
            if(selected_id==chocoList[i].FpId) {
                style_set += " SelectedChocolate";
            }
            remonder_body += "<span id=\"" + chocoList[i].Name + "\" title=\"" + chocoList[i].Name + "\" class=\"" + style_set + "\" onclick=\"selectChoco('" + chocoList[i].FpId + "')\"></span>";
        }
    }
    $("#chocList").html(remonder_body);
    var choc_count = chocoList.length;
    $("#chocList").addClass('chocCount'+ choc_count);
    $('.AddOnHolder').addClass('chocCount'+ choc_count);
    ChangeChocolateIDName();
}
function selectChoco(id) {
    if ( $('#ctl00_ContentPlaceHolder1_CardFlow1_is_fp_selected').val() == id ) {
        closeOrderPopup();
        $('#choc_remove_option').val('1');
    }
    else {
        SelectedChocolate();
        $("input[id$='is_fp_selected']").val(id);
        $('#active_fp_' + id).trigger('click');
    }
}
function fathersDayChocOptions() {
    if ( $('#ctl00_ContentPlaceHolder1_CardFlow1_hidden_active_product').val().indexOf('fathersday01') != -1 ) {
        $('.AddOnHolder').addClass('fathersDayChocolateOptions');
    }
}
//ADD SELECTED CLASS TO CHOSEN CHOCOLATE
function SelectedChocolate() {
    $('.choco_').click(function () {     
        $('.choco_').removeClass('SelectedChocolate');
        $(this).addClass('SelectedChocolate');
    });
}
//CHANGE CHOCOLATE ID NAMES
function ChangeChocolateIDName() {
    $('.choco_').each(function () {
        var storedChocolateID = $(this).attr('id');
        var storedChocolateIDNew = storedChocolateID.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');

        $(this).attr('id', storedChocolateIDNew);
    });
}
function AddFeatureProduct(id, price) {    
    PreserveEnteredData();
    $('input[id$="is_fp_selected"]').val(id);
    __doPostBack();
}
function RemoveFeatureProduct() {
    PreserveEnteredData(); 
    $('input[id$="is_fp_selected"]').val("0");
    __doPostBack();
}
function addChoc () {
    //$('.chocInput').trigger('click');
}

function goLarge () {
    $('.card_size_8').trigger('click');
    $('.fancierbox_addons').css("display", "none");
}
function chocCheck() {
    var selected_fp = ($("input[id$='is_fp_selected']").val().length==0) ? "0" : $("input[id$='is_fp_selected']").val();
    //if ( $('.chocInput').prop('checked') ) {
    if ( selected_fp != "0" ) {
        $('.chocTick').addClass('chocSelected');
        $('.chocCardText:first-of-type').html('this card will be sent as a ');
        $('.chocCardText:last-of-type').hide();
        $('.chocRemove').show();
        $('#btnRemoveChoco').show();
        $('.BTNaddChoc').html('Remove this option');
        $('.content_wrapper').addClass('chocCardSelected');
        $('.AddOnHolder').addClass('largeCardActive');
        //alert('call choc check');
    }
    else {
        $('#btnRemoveChoco').hide();
        $('.chocCardText:first-of-type').html('<span class="txt_upper">Enhance your card -   </span> Make this a');
        $('.chocCardText:last-of-type').show();
        $('.chocRemove').hide();        
    }
    // check if chocolate card is available
    if ($('#ctl00_ContentPlaceHolder1_CardFlow1_feature_product_wrapper').is(':empty')){
    //do something
    }
    else {
    //    $('.content_wrapper').addClass('chocCardAvailable');
    //    $('#ctl00_ContentPlaceHolder1_CardFlow1_feature_product_wrapper').fadeIn();
    }
    
}
function dumi() {
    $('.chocInput').trigger('click');
}
//!!!!!!!!!


$(window).scroll(function() {

    //MOBILE HEADER CONDENSE
    var mmscroll = $(window).scrollTop();

    if (mmscroll >= 47) {
        $('#header, #mobile_search_sub_menu, #mobile').addClass('mm_head_condense');
        $('#RemindersSiteWide').addClass('condenseTop');
    } else {
        $('#header, #mobile_search_sub_menu, #mobile').removeClass('mm_head_condense');
        $('#RemindersSiteWide').removeClass('condenseTop');
    }

    //== FIXED NAV
    var ScrollHeightNav = $('#left-col').height();
    
    //== ADD CLASS FIXED NAV
    if ($(window).scrollTop() > 130) {
        $('#top_nav').addClass('fixed_top_nav');
        $('.new_search').addClass('fixed_top_nav_search');
    }
    else {
        $('#top_nav').removeClass('fixed_top_nav');
        $('.new_search').removeClass('fixed_top_nav_search');
    }

    //== ADD CLASS SCROLL (TABLET LEFT NAV)
    if ($(window).scrollTop() > 245) {
        $('.mobileLeftNavBtn').addClass('scroll');
    }
    else {
       $('.mobileLeftNavBtn').removeClass('scroll');
    } 
    //== ADD CLASS CLOSEFIXED (TABLET LEFT NAV)
    if ($(window).scrollTop() > ScrollHeightNav + 245 ) {
        $('.mobileLeftNavBtn').addClass('closeFixed');
    }
    else {
       $('.mobileLeftNavBtn').removeClass('closeFixed');
    }
		
});
















 function hsc_check() {
        var numberOfPhotoFields = $('.pu_area').length;
        var numberOfTextFields = $('.txt_field_left').length;

        if( numberOfTextFields == '0' && numberOfPhotoFields == '0' ) {
            $('.no_text_message').show();
        } else {
            $('.no_text_message').hide();
        }
    }

    function GameCardCheck() {
        var gameCardImage = $('#templateimage').attr('src');
        //console.log(gameCardImage);
        if ( gameCardImage.indexOf("/HS_CARD/GameCard_") != -1 || gameCardImage.indexOf("/hs_card/GameCard_") != -1 ) {
            $('#template_wrapper').addClass('game_card');
            $('.seo_tab[data-tab="delivery_text"]').trigger('click');
            $('.qnty_price, #btnSaveMe, .seo_tab[data-tab="product_description"]').remove();
            $('.dvBreadCrump a:nth-of-type(3)').text('Game Selection');
            $('.dvBreadCrump a.last').text('Personalise Your Game Card');
            $('.no_text_message').prepend($('.product_description').html());
            $('.delivery_text table tbody tr:nth-of-type(1) td:nth-of-type(2)').text('£0.70');
            $('.delivery_text p:nth-of-type(6)').remove();
        } 
    }

    

//== COUNT NUMBER OF PHOTO UPLOAD FIELDS ==//
    function CountNumberOfPhotos() {
            var NumberOfPUFields = $('.pu_area').length;
            $("input[name='NumberOfPhotoUploadFields']").val(NumberOfPUFields);
            $('#main_wrapper').addClass('photos'+NumberOfPUFields);
            $('body').append("<div id='mmPUloaded'></div>");
    }



function activeDeactiveCardWrapper(id) {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_front").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideleft").css("display", "none");
    
        $("#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideright").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_back").css("display", "none");
        
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_right").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_card_page_left").css("display", "none");

        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_front_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideleft_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideright_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_back_wrapper").css("display", "none");

        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_front_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideleft_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideright_wrapper").css("display", "none");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_back_wrapper").css("display", "none");     
        
        $("#" + id).fadeIn();
    }

    function SetMandatoryStyle() {
        SetMandatoryStyleForText();
        SetMandatoryStyleForImages();
    }

    function SetMandatoryStyleForText() {
        var current_page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
        var customizeTextList;

        switch (current_page) {
            case "1":
                {
                    var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) };                  
                    for (i = 0; i < customizeTextList.CustomizeText.length; i++) {
                        if (customizeTextList.CustomizeText[i].IsMandetory == "1") {
                            $("#skeleton_" + customizeTextList.CustomizeText[i].TextId).addClass("mandatory_text");
                        }

                        if (customizeTextList.CustomizeText[i].IsChange && customizeTextList.CustomizeText[i].IsMandetory == "1") {
                            $("#skeleton_" + customizeTextList.CustomizeText[i].TextId).removeClass("mandatory_text").addClass("mandatory_complete");
                            $(".mandTxtLabel[data-relatedtxtfield='skeleton_" + customizeTextList.CustomizeText[i].TextId + "']").removeClass("notComplete").hide();
                            checkMandatoryFieldProgress();
                            //alert(customizeTextList.CustomizeText[i].TextId);
                        }
                    }                    
                    break;
                }
            default: { break; }
        }
    }
    
    function SetMandatoryStyleForImages() {
        var current_page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
        var customizeImageList;
        
        switch (current_page) {
            case "1":
                {
                    var customizeImageList = { "CustomizeImage": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val()) };
                    for (i = 0; i < customizeImageList.CustomizeImage.length; i++) {
                        $("#skeleton_" + customizeImageList.CustomizeImage[i].ImageId).addClass("mandatory_image");

                        if (customizeImageList.CustomizeImage[i].IsUpload) {
                            $("#skeleton_" + customizeImageList.CustomizeImage[i].ImageId).removeClass("mandatory_image").addClass("mandatory_complete");
                            $(".mandImgLabel[data-relatedimgfield='skeleton_" + customizeImageList.CustomizeImage[i].ImageId + "']").removeClass("notComplete").hide();
                            $('.BtnNextImage').removeClass('nextImageInactive');
                            puProcess = 'active';
                            checkMandatoryFieldProgress(puProcess);
                            if ( $('#common_personalize_imageuploader').is(':visible') ) {
                                // do nothing
                                //alert('call SetMandatoryStyleForImages');
                            }
                            else {
                                checkMandatoryFieldProgress();
                                mandatoryLabelsFadeIn();
                            }
                            
                            //console.log('call SetMandatoryStyleForImages');
                            numberOfPhotosUsed();
                        }
                    }
                    
                    break;
                }
            default: { break; }
        }        
    }


function selectCardInsideTemplate(template, process) {
        var page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
        //alert('!!!'+template+','+process);
        $("#ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change").val(page)        
        if(!process) {
            if(CheckCardInsideTemplateAlreadyCustomized(page))
            {
                var message = '<p>If you select a new inside template you will lose all personalisation on the inside of this card</p><div class="btn_close_error" onclick="javascript:selectCardInsideTemplate(\'' + template + '\', true);">OK</div><div class="btn_close_error btn_cross" onclick="javascript:CloseError();">CLOSE</div>'
                DisplayError("Warning!", message, false);
                return false;
            }
        }
        var doprocess=false;
        switch (page) {
            case "1":
                {
                    break;
                }
            case "2":
                {
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val(template);
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val('[]');
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val('[]');
                    doprocess=true;
                    break;
                }
            case "3":
                {
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val(template);
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val('[]');
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val('[]');
                    doprocess=true;
                    break;
                }
            case "4":
                {
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val(template);
                    break;
                }
            default: { break; }
        }
        if(doprocess){
	        $.ajax({
	            type: "POST",
	            url: "home/newFlow_SessionUpdateBulk",
	            data: { 
                    page: page, 
                    productid: GetLoadProductId(), 
                    customizeTextList: '[]', 
                    customizeImageList: '[]',
                    cardinsideLeftTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val(), 
                    cardinsideRightTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val(), 
                    cardinsideBackTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val(),  
                },
	            dataType: "html",
	            success: function(theResponse) {
	                returnCode = theResponse;
	                //alert('home/newFlow_SessionUpdateBulk');
	                __doPostBack();
	            }
	        });
        }else{
        	__doPostBack();
        }
    }
// prevent user clicking already selected template and triggering page load
    function SelectedTemplateBlockClick() {
        $( ".thumbs .selected_n" ).prepend( "<div class='templateBlocker'></div>" );
    }

    function CheckCardInsideTemplateAlreadyCustomized(page) {
        var IsCustomized = false;
        
        var stringCustomizeTextList;
        var customizeTextList;
        var stringCustomizeImageList;
        var customizeImageList;
          
        switch(page)
        {
            case "2":
            {
                stringCustomizeTextList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();
                stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val();
                break;
            }
            case "3":
            {
                stringCustomizeTextList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val();
                stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val();
                break;
            }
            default: { return; }            
        }
            
        if (stringCustomizeTextList != "")
        {
            customizeTextList = eval(stringCustomizeTextList);
            
            for (i = 0; i < customizeTextList.length; i++) {
                if(customizeTextList[i].IsChange)
                {
                    IsCustomized = true;
                }                
                
                var text_1 = customizeTextList[i].Text;
                var text_2 = $("#ci_div_lable_" + customizeTextList[i].Id + "_" + page).html();
                try{
                if(text_1!=null&&text_1.length>0) { text_1 = text_1.toLowerCase(); }
                if(text_2!=null&&text_2.length>0) { text_2 = text_2.toLowerCase(); }               
                
                if (text_1!=null&&text_2!=null&&text_1.substring(text_1.indexOf('<cj>') + 4, text_1.indexOf('</cj>')) != text_2.substring(text_2.indexOf('<cj>') + 4, text_2.indexOf('</cj>'))) {
                    IsCustomized = true;
                }
            	}catch(Error){}
            }  
        }

        if(stringCustomizeImageList != "")
        {
            customizeImageList = eval(stringCustomizeImageList);
            for (i = 0; i < customizeImageList.length; i++) {
                if(customizeImageList[i].IsUpload)
                {
                    IsCustomized = true;
                }                
            }              
        }        
        
        return IsCustomized;
    }

function ValidateImagesBeforFinalSave() {
    var issuccess = true;
                           
    for(j=1; j<=4; j++)
    {
        var json_ct_name = "";
        switch(j)
        {
            case 1: { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front"; break; }
            case 2: { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left"; break; }
            case 3: { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right"; break; }
            case 4: { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back"; break; }
            default: {break; }
        }                 
                 
        if(json_ct_name != "")
        {
            if(issuccess) {                
                var customizeImageList;
                var customizeImageList_string = $("#" + json_ct_name).val();
                if (customizeImageList_string != "") customizeImageList = eval(customizeImageList_string);
                for (i = 0; i < customizeImageList.length; i++) {
                    if (parseInt(customizeImageList[i].CW)<=0 || parseInt(customizeImageList[i].CH)<=0) {
                        DisplayError('Error!', '<p>Please re-set image(s) in ' + GetCardPage(j) + '</p><div class="btn_close_error" onclick="javascript:CloseError();mainTabClick(\'' + j + '\');">OK</div>', false);
                        mainTabClick(String(j));
                        return false;
                    }
                }
                
                if(customizeImageList.length>0) {
                    if(!checkAndResizeImageAfterRotate(customizeImageList)) {
                        mainTabClick(String(j));
                        return false;
                    }
                }                    
            }
        }
    }
 
    return issuccess;
}

function setCompleteStyle() { 
    var temp = $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val();
    var tempArr = temp.split(",");

    $("#tab_main_card_front").removeClass("tab_process_complete");
    $("#tab_main_cardinside_left").removeClass("tab_process_complete");
    $("#tab_main_cardinside_right").removeClass("tab_process_complete");
    $("#tab_main_card_back").removeClass("tab_process_complete");
    
    for (i = 0; i < tempArr.length; i++) {
        if (tempArr[i].substring(2, 3) == "1") {
            switch (tempArr[i].substring(0, 1)) {
                case "1":
                    {
                        $("#tab_main_card_front").addClass("tab_process_complete");
                        break;
                    }
                case "2":
                    {
                        $("#tab_main_cardinside_left").addClass("tab_process_complete");
                        break;
                    }
                case "3":
                    {
                        $("#tab_main_cardinside_right").addClass("tab_process_complete");
                        break;
                    }
                case "4":
                    {
                        $("#tab_main_card_back").addClass("tab_process_complete");
                        break;
                    }
            }
        }
    }
}

function removeInsideTemplateLabels(ct) {
     $("#" + ct).parent().find('.insideLabel').remove();
}
function ValidateFrontText(event, source, max) {
    if(max == 0) { return true; }
    
    if (source.value.length >= max) {
        return false;
    }
    else {
        return true;
    }
}
function AutoloadTextEditerForSelectedCardInside(page) {
    var stringCustomizeTextList;
    var customizeTextList;
    switch(page)
    {
        case "2":
        {
            stringCustomizeTextList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();                
            break;
        }
        case "3":
        {
            stringCustomizeTextList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val();               
            break;
        }
        default: { return; }            
    }
    
    if (stringCustomizeTextList != "")
    {
        customizeTextList = eval(stringCustomizeTextList);
        if(customizeTextList.length>0) {
            var ct_id = customizeTextList[0].LableId + "_" + page;
            //$("#current_activate_activity").val("T");
            $("#" + ct_id).trigger('click');                
        }
        else
        {
            AutoloadImageUploadForSelectedCardInside(page);
        }  
    }
    else
    {
        AutoloadImageUploadForSelectedCardInside(page);
    }
}

function AutoloadImageUploadForSelectedCardInside(page) {        
    var stringCustomizeImageList;
    var customizeImagetList;
    switch(page)
    {
        case "2":
        {
            stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val();                
            break;
        }
        case "3":
        {
            stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val();               
            break;
        }
        default: { return; }            
    }
    
    if (stringCustomizeImageList != "")
    {
        customizeImagetList = eval(stringCustomizeImageList);
        if(customizeImagetList.length>0) {
            var ci_id = customizeImagetList[0].DragId;
            //$("#current_activate_activity").val("I");
            $("#" + ci_id).trigger('click');                
        }  
    }         
}
var insideTemplateLabelCount = 0;
function loadPersonalizeTextCustomize(ct) {
    $("#current_activate_cardinside_text_controler").val(ct);
    hideAllCommonMainTabs();
    var opt = (($("#texteditor_selected_tab").val()=="A")?5:1);
    opt = (($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()=="4")?1:opt);
    loadPersonalizeTextCustomizeTabHandle(opt);
    
    // Function locate in "PersonalizeTextUpdate.ascx"
    LoadTextIntoEditer($("#" + $("#current_activate_cardinside_text_controler").val()).html(), GetMaxLength());
    $("#current_activate_activity").val("T");
    
    // Highlight selected
    RemoveAllHighlightedDiv();
    $("#" + ct).addClass('cardInsideDivHighlighter');  
    
    //== HINTS AND TIPS - CHANGE BODY CLASS ==//
    $('body').removeClass().addClass('text_formatting');      
    //alert('call loadPersonalizeTextCustomize');
    if ( insideTemplateLabelCount == '0' ) {
        insideTemplateLabels(ct);
        insideTemplateLabelCount++;
    }
    else {
        removeInsideTemplateLabels(ct);
    }
    
    if ( $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val()=="4" ) {
        $('.text_customize_standard').hide();
    }
    else {
        $('.text_customize_standard').show();
    }

    fontSessionSelect(ct);
    //console.log('call loadPersonalizeTextCustomize value is '+ct);
 
}
function insideTemplateLabels(ct) {
    var insideTxtTemplate = $('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideright cj');
    insideTxtTemplate.each(function(){
        var countCJ = insideTxtTemplate.length;
        //alert(countCJ);
        if (document.location.href.indexOf('back') > -1 || document.referrer.indexOf('CustomiseCards') > -1) {
            // do not create labels as inside personalised
        }
        else {
            //$(this).parent().parent().parent().parent().parent().parent().before( "<div class='insideLabel'>Write a message here - optional</p>" );
            //$(this).parent().parent().parent().parent().parent().parent().parent().css('position','relative');
        }
    });
    removeInsideTemplateLabels(ct);
}
function GetMaxLength() {
    var current_page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
    var customizeTextList;
    var max_length = 0;
            
    switch (current_page) {
        case "1":
            {
                var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) };
                break;
            }
        case "2":
            {
                var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val()) };
                break;
            }
        case "3":
            {
                var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val()) };
                break;
            }
        case "4":
            {
                var customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back").val()) };
                break;
            }                
        default: { break; }
    }  
    
    for (i = 0; i < customizeTextList.CustomizeText.length; i++) { 
        if($("#current_activate_cardinside_text_controler").val()== customizeTextList.CustomizeText[i].LableId + "_" + current_page) {
            max_length = parseInt(customizeTextList.CustomizeText[i].MaxLength);
            max_length = ((typeof(max_length)=="number") ? parseInt(max_length) : 0);            
        }
    }

    return max_length;
}





// Fix for IE version under 9 doesn't support indexOf in array.    
if (!Array.prototype.indexOf)
{
	Array.prototype.indexOf = function(elt /*, from*/)
	{
		var len = this.length >>> 0;
		var from = Number(arguments[1]) || 0;
		from = (from < 0)
		 ? Math.ceil(from)
		 : Math.floor(from);
		if (from < 0)
		from += len;

		for (; from < len; from++)
		{
			if (from in this &&
			  this[from].toLowerCase().trim() === elt.toLowerCase().trim())
			return from;
		}
		return -1;
	};
}  

var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
		    || this.searchVersion(navigator.appVersion)
		    || "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
		    var dataString = data[i].string;
		    var dataProp = data[i].prop;
		    this.versionSearchString = data[i].versionSearch || data[i].identity;
		    if (dataString) {
			    if (dataString.indexOf(data[i].subString) != -1)
				    return data[i].identity;
		    }
		    else if (dataProp)
			    return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
	{
	    string: navigator.userAgent,
	    subString: "Chrome",
	    identity: "Chrome"
	},
	{ 	string: navigator.userAgent,
	    subString: "OmniWeb",
	    versionSearch: "OmniWeb/",
	    identity: "OmniWeb"
	},
	{
	    string: navigator.vendor,
	    subString: "Apple",
	    identity: "Safari",
	    versionSearch: "Version"
	},
	{
	    prop: window.opera,
	    identity: "Opera",
	    versionSearch: "Version"
	},
	{
	    string: navigator.vendor,
	    subString: "iCab",
	    identity: "iCab"
	},
	{
	    string: navigator.vendor,
	    subString: "KDE",
	    identity: "Konqueror"
	},
	{
	    string: navigator.userAgent,
	    subString: "Firefox",
	    identity: "Firefox"
	},
	{
	    string: navigator.vendor,
	    subString: "Camino",
	    identity: "Camino"
	},
	{		// for newer Netscapes (6+)
	    string: navigator.userAgent,
	    subString: "Netscape",
	    identity: "Netscape"
	},
	{
	    string: navigator.userAgent,
	    subString: "MSIE",
	    identity: "Explorer",
	    versionSearch: "MSIE"
	},
	{
	    string: navigator.userAgent,
	    subString: "Gecko",
	    identity: "Mozilla",
	    versionSearch: "rv"
	},
	{ 		// for older Netscapes (4-)
	    string: navigator.userAgent,
	    subString: "Mozilla",
	    identity: "Netscape",
	    versionSearch: "Mozilla"
	}
	],
	dataOS : [
	{
	    string: navigator.platform,
	    subString: "Win",
	    identity: "Windows"
	},
	{
	    string: navigator.platform,
	    subString: "Mac",
	    identity: "Mac"
	},
	{
	       string: navigator.userAgent,
	       subString: "iPhone",
	       identity: "iPhone/iPod"
	},
	{
	    string: navigator.platform,
	    subString: "Linux",
	    identity: "Linux"
	}
	]

};
BrowserDetect.init();   

function removeBadWord(source) {
    // Remove emoji
    source = removeEmojiChars(source);

    if ($("#ctl00_ContentPlaceHolder1_CardFlow1_hidden_badward_list").val() == "") { return source; } // If the bad word list blank no need to further process.

    var badword_string = $("#ctl00_ContentPlaceHolder1_CardFlow1_hidden_badward_list").val();
    var badWordList = eval(badword_string);
                    
    for (var i = 0; i < badWordList.length; i++) {
        var reg = new RegExp('\\b' + badWordList[i].Word + '\\b', 'ig');
        source = source.replace(reg, badWordList[i].ReplaceWord);
    }        

    source = source.trim();
    return source;
}
function ConfirmPageAndPreview() {
    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_preview").val("1");
    ProcessConfirmPage();
    $('.CardLeftPanel').fadeOut();
    $('#main_control_wrapper').fadeOut();
    
    if ( $('#main_wrapper').hasClass('landscape') ) {
        $('#main_wrapper').addClass('preview_extend_height');
    }
}
function ProcessConfirmPage() {
    var page = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage').val();
    $('#ICE_preloader').fadeIn();
    
    var nextpage = page;
    var imageResultCode;
    var textResultCode;

    var error_heading = '';
    var error_msg = '';
        
    if (!UpdateTextSession(page, true)) {
        $('#ICE_preloader').fadeOut();
                    
        switch(page)
        {
            case "1":
            {
                error_heading = 'Whoops!<br>You have forgotten something on the ' + GetLoadProductName() + ' front...';
                error_msg = '<p>Please change the text before you move to the ' + GetLoadProductName() + ' inside.</p>';
                if($("#current_activate_activity").val()=="I") { backFromPersonalizeImageuploader(); }
                $('.mandTxtLabel.notComplete').eq(0).trigger('click');
                break;
            }
            case "2":
            {
                error_heading = 'Whoops!<br>You have forgotten something on the ' + GetLoadProductName() + ' inside left...';
                error_msg = '<p>Please change all required text personalisation!</p>';
                break;
            }
            case "3":
            {
                error_heading = 'Whoops!<br>You have forgotten something on the ' + GetLoadProductName() + ' inside right...';
                error_msg = '<p>Please change all required text personalisation!</p>';
                break;
            }
            case "4": 
            {
                error_heading = 'Whoops!<br>You have forgotten something on the ' + GetLoadProductName() + ' back...';
                error_msg = '<p>Please change all required text personalisation!</p>';
                break;
            }    
            default: {break;}                                            
        }
        
        DisplayError(error_heading, error_msg, true);
        unsetCompleteStyle(page);          
        return;
    }

    if (!UpdateImagesSession(page, true)) {
        $('#ICE_preloader').fadeOut();
        error_msg = '<p>Please add all photos before you move to the next step.</p>';
        
        switch(page)
        {
            case "1":
            {
                error_heading = 'Whoops!<br>You have forgotten to add a photo to the ' + GetLoadProductName() + ' front...';
                if($("#current_activate_activity").val()!="I") { loadPersonalizeImageUploader(1); }
                $('.mandImgLabel.notComplete').eq(0).trigger('click');
                break;
            }
            case "2":
            {
                error_heading = 'Whoops!<br>You have forgotten to add a photo to the ' + GetLoadProductName() + ' inside left...';
                break;
            }
            case "3":
            {
                error_heading = 'Whoops!<br>You have forgotten to add a photo to the ' + GetLoadProductName() + ' inside right...';
                break;
            }
            case "4":
            {
                error_heading = 'Whoops!<br>You have forgotten to add a photo to the ' + GetLoadProductName() + ' back...';
                break;
            }    
            default: {break;}                                            
        }
        
        DisplayError(error_heading, error_msg, true);
        unsetCompleteStyle(page);
        return;
    }        
    
    setCompleteHiddenValue(page);
    
    switch (page) {
        case "1": 
        { 
            nextpage = "3";
            previewfront();
            //alert('card complete'); 
            break; 
        }
        case "2": { nextpage = "3"; break; }
        case "3": { nextpage = "4"; break; }
        case "4": { nextpage = "4"; break; }
        default: { break; }
    }
    
    var validatefinal_result = ValidateFinal();
    //alert(validatefinal_result);
    if(validatefinal_result=="0") {
        if(ValidateImagesBeforFinalSave()) {
            if ($('#giant_popup').val()=='1') {
                var gid = "128";
                if(gid.length>0)
                {
                    if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=="8" || $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=="40") {
                        var cardImageURL = '/uimg/' + $('#CurrentProduct_ProductGroup').val().toLowerCase() + '/' + $('#CurrentProduct_SetName').val().toLowerCase() + '.jpg';
                        $('#error').addClass('giant_card_upsell');
                        //DisplayError('Upgrade to a Giant card for £9.99', '<p>Show that you really care by upgrading to a <strong>Giant card</strong>!</p><div class="giant_card_img"><div class="large_card_size"><img src="'+ cardImageURL +'" /></div><div class="giant_card_size"><img src="'+ cardImageURL +'" /></div><div class="gcu_card_size_labels"><span>Large Card (A4)</span><span>Giant Card (A3)</span></div></div><div class="btn_close_error grey_error_btn" onclick="javascript:CloseError();savepagesessionsintodb(\'0\');">No Thanks</div><div class="btn_close_error" onclick="javascript:CloseError();makeThisIntoGiant();">Yes, Upgrade My Card</div>', false); return false;
                        DisplayError('Upgrade to a Giant card for £9.99', '<p>Show that you really care by upgrading to a <strong>Giant card</strong>!</p><div class="giant_card_img"><div class="large_card_size"></div><div class="giant_card_size"></div><div class="gcu_card_size_labels"><span>Large Card (A4)</span><span>Giant Card (A3)</span></div></div><div class="btn_close_error grey_error_btn" onclick="javascript:CloseError();savepagesessionsintodb(\'0\');">No Thanks</div><div class="btn_close_error" onclick="javascript:CloseError();makeThisIntoGiant();">Yes, Upgrade My Card</div>', false); return false;
                    }
                    else
                    {
                        savepagesessionsintodb('0');
                    }
                }
                else
                {
                    savepagesessionsintodb('0');
                }

            }
            else {
                savepagesessionsintodb('0');
            }

            //savepagesessionsintodb('0');
            //alert('card complete');
        } else {
            $('#ICE_preloader').fadeOut();
            return false;
        }
    } 
    else  {
        nextpage=validatefinal_result;
        
        var page_name = "";
        switch(validatefinal_result)
        {
            case "1": { page_name = "Front"; break; }
            case "2": { page_name = "Inside Left"; break; }
            case "3": { page_name = "Inside Right"; break; }
            case "4": { page_name = "Back"; break; }
        }
        $('#ICE_preloader').fadeOut();
        DisplayError('No Message Inside...', '<p>You have left the ' + page_name + ((validatefinal_result!="1") ? ' of your ' + GetLoadProductName() + ' blank. Would you like to continue, preview or edit the inside.' : '') + '</p><div class="btn_close_error margin_bottom_ten" onclick="PreviewProceed();CloseError();mainTabClick(\'' + nextpage + '\');ConfirmPageWITHOUTPreview();">Continue</div><div class="btn_close_error MM_btn_hide margin_bottom_ten" onclick="javascript:PreviewProceed();CloseError();mainTabClick(\'' + nextpage + '\');ConfirmPageAndPreview();">Preview</div><div class="btn_close_error margin_bottom_ten" onclick="javascript:CloseError();mainTabClick(\'' + nextpage + '\');">Edit Card</div>', false);
    }        
                    
    //mainTabClick(nextpage);
}

function UpdateTextSession(page, isConfirm) {
    var doprocess = false;
    var customizeTextListVal;
    var returnCode = "0";
    var json_ct_name = "";
    switch(page)
    {
        case "1": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front"; break; }
        case "2": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left"; break; }
        case "3": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right"; break; }
        case "4": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back"; break; }
        default: {break; }
    }
    if(json_ct_name != "")
    {
        doprocess = true;
        var customizeTextList;
        var customizeTextList_string = $("#" + json_ct_name).val();//alert(customizeTextList_string);
        if (customizeTextList_string != "") customizeTextList = eval(customizeTextList_string);

        for (i = 0; i < customizeTextList.length; i++) {                
            if(page == "1")
            {   try{
	                if(customizeTextList[i].DefaultText.trim().toLowerCase() == $("#" + customizeTextList[i].TextId).val().trim().toLowerCase() || $("#" + customizeTextList[i].TextId).val().trim().length==0 || $("#" + customizeTextList[i].TextId).val().trim().toLowerCase() == "name" || $("#" + customizeTextList[i].TextId).val().trim().toLowerCase() == "surname" || $("#" + customizeTextList[i].TextId).val().trim().toLowerCase().indexOf(" name ")!= -1) {
	                    customizeTextList[i].IsChange = false;
	                } else {
	                    customizeTextList[i].IsChange = true;
	                }
                }catch(Error){customizeTextList[i].IsChange = false;}     

                $("#" + customizeTextList[i].TextId).val(removeBadWord($("#" + customizeTextList[i].TextId).val()));
                //alert(customizeTextList[i].TextId+','+$("#" + customizeTextList[i].TextId).val());           
                customizeTextList[i].Text = $("#" + customizeTextList[i].TextId).val();
                if (!customizeTextList[i].IsChange && isConfirm && customizeTextList[i].IsMandetory=="1") { doprocess = false; }
            }
            else
            {
            	try{
	                if(customizeTextList[i].DefaultText.trim().toLowerCase() == $("#ci_div_lable_" + customizeTextList[i].Id + "_" + page).html().toLowerCase().trim()) {
	                    customizeTextList[i].IsChange = false;
	                } else {
	                    customizeTextList[i].IsChange = true;
	                }       
	                customizeTextList[i].Text = $("#ci_div_lable_" + customizeTextList[i].Id + "_" + page).html();
	                if (!customizeTextList[i].IsChange && isConfirm && customizeTextList[i].IsMandetory=="1") { doprocess = false; }
                }catch(Error){customizeTextList[i].IsChange = false;}   
            }
        }
        //alert('!!!json_ct_name='+json_ct_name);
        $("#" + json_ct_name).val(JSON.stringify(customizeTextList));
        customizeTextListVal = $("#" + json_ct_name).val();            
		//alert('!!!customizeTextListVal='+JSON.stringify(customizeTextList));
    }        
    if (doprocess) {//alert('!!!='+page+','+customizeTextListVal);
        $.ajax({
            type: "POST",
            url: "home/newFlow_SessionUpdateBulk",
            data: { 
                page: page, 
                productid: GetLoadProductId(), 
                customizeTextList: customizeTextListVal,
                cardinsideLeftTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val(), 
                    cardinsideRightTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val(), 
                    cardinsideBackTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val(),   
            },
            dataType: "html",
            success: function(theResponse) {
                returnCode = theResponse;
            }
        });
    }
//        // Set special css class for un-updated text.
//        SetMandatoryStyleForText();
	//alert('UpdateTextSession'+page+',doprocess='+doprocess+',isConfirm='+isConfirm);
    if (isConfirm) {//alert("isConfirm="+doprocess+','+returnCode);
        if(page=="4") { return true; } /* Card Back page text not mandatory */
        return doprocess;
    }
    else {
        return returnCode;
    }
}

function UpdateImagesSession(page, isConfirm) {
    var doprocess = false;
    var customizeImageListVal;
    var returnCode = "0";
    setCodination();
    ImageManager.getInstance().updateImageInfoField();
             
    var json_ct_name = "";

    switch(page)
    {
        case "1": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front"; break; }
        case "2": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left"; break; }
        case "3": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right"; break; }
        case "4": { json_ct_name = "ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back"; break; }
        default: {break; }
    }                 
       //alert('UpdateImagesSession='+json_ct_name);    
    if(json_ct_name != "")
    {
        doprocess = true;
        
        var customizeImageList;
        var customizeImageList_string = $("#" + json_ct_name).val();
        if (customizeImageList_string != "") customizeImageList = eval(customizeImageList_string);
        //alert('UpdateImagesSession='+customizeImageList_string);
        for (i = 0; i < customizeImageList.length; i++) {
            if (!customizeImageList[i].IsUpload && isConfirm) { doprocess = false; }
			//                if(isConfirm && doprocess) {
			//                    doprocess = checkAndResizeImageAfterRotate(customizeImageList);
			//                }
			
        }
        
        $("#" + json_ct_name).val(JSON.stringify(customizeImageList));
        customizeImageListVal = $("#" + json_ct_name).val();              
    }

    if (doprocess) {
        $.ajax({
            type: "POST",
            url: "home/newFlow_SessionUpdateBulk",
            data: { 
                page: page, 
                productid: GetLoadProductId(), 
                customizeImageList: customizeImageListVal,
                cardinsideLeftTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val(), 
                    cardinsideRightTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val(), 
                    cardinsideBackTemplate: $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val(),   
            },
            dataType: "html",
            success: function(theResponse) {
                returnCode = theResponse;
            }
        });
    }

//        // Set special css class for un-updated images.
//        SetMandatoryStyleForImages();
    //alert('!!!'+page+','+doprocess+'!!!');  
    if (isConfirm) {
        if(page=="4") { return true; } /* Card Back page image not mandatory */
        return doprocess;
    }
    else {
        return returnCode;
    }
}

function SetMandatoryStyle() {
    SetMandatoryStyleForText();
    SetMandatoryStyleForImages();
}

function setCompleteHiddenValue(page) {
    var temp = $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val();
    var tempArr = temp.split(",");
    
    var newString = "";
    
    for (i = 0; i < tempArr.length; i++) {            
        if(i>0) { newString= newString + ","; }
        
        if(tempArr[i].substring(0, 1)==page)
        {
            newString = newString + tempArr[i].substring(0, 1) + "=1";
        }
        else
        {
            newString = newString + tempArr[i];
        }
        
    }
    //alert('setCompleteHiddenValue='+newString+',---page='+page);
    $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val(newString) 
}

function ValidateFinal() {    
    var temp = $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val();
    var tempArr = temp.split(",");
    
    var page_1_complete = false;
    var page_2_complete = false;
    var page_3_complete = false;
    var page_4_complete = true;
    
    for (i = 0; i < tempArr.length; i++) {
        if (tempArr[i].substring(2, 3) == "1") {
            switch (tempArr[i].substring(0, 1)) {
                case "1":
                    {
                        page_1_complete = true;
                        break;
                    }
                case "2":
                    {
                        page_2_complete = true;
                        break;
                    }
                case "3":
                    {
                        page_3_complete = true;
                        break;
                    }
                case "4":
                    {
                        page_4_complete = true;
                        break;
                    }
            }
        }
    } 
                    
    //if(!page_1_complete) { return "1"; } else { return "0"; }
    
    if(page_1_complete && page_2_complete && page_3_complete && page_4_complete)
    {
        return "0";
    }
    else{
        if(!page_1_complete) { return "1"; }
        if(!page_3_complete) { return "3"; }
        if(!page_2_complete) 
        {
            if(UpdateImagesSession("2", true)) 
            {
                setCompleteHiddenValue("2");
                return "0";
            }
            else
            { 
                return "2";
            }   
        }            

        return "0";
    }        
}

function DisplayError(heading, message, isOkbt)
{
    var erHtml = '<div class="error_wrapper">';
                   erHtml += '<h1>' + heading + '</h1>';
                   erHtml += message
                   if(isOkbt) { erHtml += '<div class="btn_close_error" onclick="javascript:CloseError();">OK</div>'; }
                erHtml += '</div>';
                
    $("#error").html(erHtml);
    $('#error').show();
}


function UpdateProductPriceBySizeIDWithPageRefresh(theRadio) {
    PreserveEnteredData();
    $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val(theRadio);
    __doPostBack();
    // local storage value to say that size has been changed
    //sessionStorage.cardSizeChanged = '1';
}
    
function NumericOnly(e)
    {
        var key;
        if(window.event)
            key = window.event.keyCode;
        else
            key = e.which;

        if (key <48 || key >57) 
        {
            if(key != 8)
            {
                if(window.event) window.event.returnValue = false; 
                else
                    e.preventDefault();
            }
        }
            
    }
 function AjaxServerCallbackPrice(para) {
        $.ajax({
            type: "POST",
            url: "/home/GetVolumePrice",
            data: "{\"volPricearg\": \"" + para + "\"}",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(msg) {                
        $("#ctl00_ContentPlaceHolder1_CardFlow1_lblPrice").text(show2DecimalPlaces((parseFloat(msg.d) + parseFloat(selectedPosterFrameValue)) *  $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val(), 2)); 
        $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenQPrice").val(show2DecimalPlaces((parseFloat(msg.d) + parseFloat(selectedPosterFrameValue)) *  $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val(), 2));    
                     
        $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenQOldPrice").val(show2DecimalPlaces((parseFloat($("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice").val()) + parseFloat(selectedPosterFrameValue)) *  $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val(), 2));                
                    
        if($("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenQOldPrice").val() != $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenQPrice").val()) {                  
            $("#ctl00_ContentPlaceHolder1_CardFlow1_lblOldPrice").text(show2DecimalPlaces((parseFloat($("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice").val()) + parseFloat(selectedPosterFrameValue)) *  $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val(), 2)); 
            $("#ctl00_ContentPlaceHolder1_CardFlow1_divOldPrice").show();
        }
        else
        {
            $("#ctl00_ContentPlaceHolder1_CardFlow1_divOldPrice").hide();
        }
              
                var divQuanMsg1 = document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_divCalQuantity");                
                divQuanMsg1.style.display = "none";
            }
        });
    }   
function UpdateProductPriceBySizeID(theRadio)
{    
    var oldprices = productOldPrises.split(':');
    for(var i=0; i<oldprices.length; i++)
    {
        var oldpriceElemts = oldprices[i].split(',');                 
        if(oldpriceElemts[2] == theRadio)
        {
            $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice").val(oldpriceElemts[1]);                                        
            break;
        }
    }
            
    $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val(theRadio);
    SetSelectedSizeStyle();
        
    var is_volume_price_available = true;
    
    // No volume price for Box Sets
    if(GetLoadProductType() == 11) {
       is_volume_price_available = false; 
    }
    
    selectedProductOutputSizeId = theRadio;
    var cardSize = getSelectedProductSize();        
    
    if(cardSize=="A5")
    {
   //     $("#ctl00_ContentPlaceHolder1_CardFlow1_feature_product_wrapper").show();
    }
    else
    {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_feature_product_wrapper").hide();
    }

    var prices = productPrises.split(':');                            
    for(var i=0; i<prices.length; i++)
    {
        var priceElemts = prices[i].split(',');                    
        if(priceElemts[2] == theRadio)
        {
            $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenPrice").val(priceElemts[1]);                                 
            break;
        }
    }
    
    // Set feature product price      
    selectedPosterFrameValue = 0;
            
    $('input[name="active_fp"]:checked').each(function() {            
        var selected_fp_val = this.value;
        var fp_obj = selected_fp_val.split('|');
        selectedPosterFrameValue = parseFloat(fp_obj[1]);
    });
    
    // reveal val offer banner
    revealLargeCardOffer(cardSize);
     
    //alert(selectedPosterFrameValue);
    var quantity = $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val();

    if (quantity.trim() == "") {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_lblPrice").innerHTML = "0.00";
        $("#ctl00_ContentPlaceHolder1_CardFlow1_lblOldPrice").innerHTML = "0.00";
    } else  {
        var volQuantity = 10;
        var volStopSupID = 1002;
        //alert(supplierId);
        if ((volQuantity <= quantity && supplierId != volStopSupID) || !is_volume_price_available  ) {
            var divQuanMsg = document.getElementById("ctl00_ContentPlaceHolder1_CardFlow1_divCalQuantity");
            divQuanMsg.style.display = "block";
            
            if(cardSize == "") {
                cardSize = "Large Square";
            }
            
            if(!is_volume_price_available) {
                cardSize = "";
            }
            
            var newVar =  cardSize + "," + quantity + "," + selectedProductOutputSizeId + "," + $('#product_id').val() + "," +  true;
               
            AjaxServerCallbackPrice(newVar);                                                                                  
        } else {
            var oldprices = productOldPrises.split(':');
            for(var i=0; i<oldprices.length; i++)
            {
                var oldpriceElemts = oldprices[i].split(',');                 
                if(oldpriceElemts[2] == theRadio)
                {
                    if(oldpriceElemts[1] != $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenPrice").val())
                    {
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_divOldPrice").show();
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_lblOldPrice").text(show2DecimalPlaces((parseFloat(oldpriceElemts[1]) + parseFloat(selectedPosterFrameValue)) * quantity, 2)) ; 
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice").val(oldpriceElemts[1]);
                        break;
                    }
                    else
                    {
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice").val(oldpriceElemts[1]);
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_divOldPrice").hide();
                    }
                }
            }
                            
            var prices = productPrises.split(':');
                            
            for(var i=0; i<prices.length; i++)
            {
                var priceElemts = prices[i].split(',');                    
                if(priceElemts[2] == theRadio)
                {
                    if(priceElemts[3] == productTypeId)
                    {
                        if(priceElemts[4] == supplierId)
                        {
                            if(priceElemts[5] == personalized)
                            {
                                $("#ctl00_ContentPlaceHolder1_CardFlow1_lblPrice").text(show2DecimalPlaces((parseFloat(priceElemts[1]) + parseFloat(selectedPosterFrameValue)) * quantity, 2)) ;   
                                $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenPrice").val(priceElemts[1]);                                 
                                break;
                            }
                            else
                            {
                                 $("#ctl00_ContentPlaceHolder1_CardFlow1_HiddenPrice").val(priceElemts[1]); 
                            }
                        }    
                    }
                }
            }
        }
    }        
 }

function SetSelectedSizeStyle() {
    var selected_id = $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val();
    
    
    $('#div_size li').removeClass('selectedSize');
    $('#div_size li.card_size_' + selected_id).addClass('selectedSize');          
}

function getSelectedProductSize() {
    if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='8')  return "A4";
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='10')  return "A6";
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='11')  return "A5";        
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='17')  return "Square";
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='40')  return "Large Square";
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='128')  return "Giant";
    else if($("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val()=='129')  return "Giant Square";
    else return "";
}
function CheckImageRes(a, b) { }

function revealLargeCardOffer(thisObj) {
    if ( thisObj == 'A4' ) {
        if ( $('.a4_offer').hasClass('revealOffer_active') ) {
            // do nothing
        }
        else {
           $('.a4_offer').animate({height:"toggle"}, 200, function() {});
           //$('.a4_offer img').fadeIn('slow');
           $('.a4_offer').addClass('revealOffer_active'); 
        }
    }
    else if ( thisObj != 'A4' ) {
        if ( $('.a4_offer').hasClass('revealOffer_active') ) {
            $('.a4_offer').animate({height:"toggle"}, 200, function() {});
           //$('.a4_offer img').fadeOut('slow');
            $('.a4_offer').removeClass('revealOffer_active'); 
        }
        else {
            // do nothing
        }
    }
    //alert(thisObj);
}

function PreviewProceed() {
    $('#preview_proceed').attr('value','1');
}

function CloseError() {
    $('#error').hide();
    $('.CardLeftPanel').show();
    $('#main_control_wrapper').show();
    countThumbsSortable();
}

function unsetCompleteStyle(page) {
    unsetCompleteHiddenValue(page);
    
    /* Set style for completed page tab heading */
    setCompleteStyle();    
} 
function unsetCompleteHiddenValue(page) {
    var temp = $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val();
    var tempArr = temp.split(",");
    
    var newString = "";
    
    for (i = 0; i < tempArr.length; i++) {            
        if(i>0) { newString= newString + ","; }
        
        if(tempArr[i].substring(0, 1)==page)
        {
            newString = newString + tempArr[i].substring(0, 1) + "=0";
        }
        else
        {
            newString = newString + tempArr[i];
        }
        
    }       
    
    $("#ctl00_ContentPlaceHolder1_CardFlow1_page_complete").val(newString) 
}

function ConfirmPageWITHOUTPreview() {
    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_preview").val("0");
    ProcessConfirmPage();
    $('.CardLeftPanel').fadeOut();
    $('#main_control_wrapper').fadeOut();
    
    if ( $('#main_wrapper').hasClass('landscape') ) {
        $('#main_wrapper').addClass('preview_extend_height');
    }
}
   
function renderFrontView(){
        canvas.width = $('#templateimage').width();
        canvas.crossOrigin = "Anonymous";
        canvas.height = $('#templateimage').height();
        ctx.clearRect(0,0,canvas.width,canvas.height);
        
        $("#ctl00_contentMain_tpFirstPage").find('img').each(function(){
            var id=$(this).attr('id');
            if(id&&id.indexOf('cardtype2_im')>-1){
                var obj=$(this);
                x=eval(obj.parent().css('left').replace('px',''));
                y=eval(obj.parent().css('top').replace('px',''));

                deg=0;
                w=eval(obj.css('width').replace('px',''));
                h=eval(obj.css('height').replace('px',''));
                ctx.save();//alert(w+','+h);
                ctx.translate(x+w/2, y+h/2);
                ctx.rotate(Math.PI * deg/ 180); // rotate
                ctx.drawImage(obj.get(0),-w/2, -h/2,w,h); 
                ctx.restore();
            }
        });
        ctx.drawImage($('#_templateimage').get(0), 0, 0, canvas.width,canvas.height);
        var front_customizeTextList = { "CustomizeText": JSON.parse($("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val()) };
        for (var i = 0; i < front_customizeTextList.CustomizeText.length; i++)
        {
            obj=$("#"+front_customizeTextList.CustomizeText[i].LableId);
            if(obj.prop('id')==undefined)continue;
            x=eval(obj.css('left').replace('px',''));
            y=eval(obj.css('top').replace('px',''));
            if(obj.prop('tagName')=="IMG"){
                
            }else{
                deg=getRotationDegrees(obj);
                w=eval(obj.css('width').replace('px',''));
                h=eval(obj.css('height').replace('px',''));
                

                fsz=eval(obj.css('font-size').replace('px',''));
                ctx.textBaseline = 'top';
                ctx.font=obj.css('font-size')+' '+obj.css('font-family');
                ctx.fillStyle=obj.css('color');
                y1=Math.pow(fsz-21,(1/1.5));
                y=y+y1;

                //y=y+(h-ctx.measureText(front_customizeTextList.CustomizeText[i].Text).height)/2;
                //alert(eval(obj.css('top').replace('px',''))+',h='+h+',mh='+ctx.measureText(front_customizeTextList.CustomizeText[i].Text).height+','+y);

                ctx.save();
                ctx.translate(x+w/2, y+h/2);
                ctx.rotate(Math.PI * deg/ 180);

                if(obj.css('text-shadow')!='none'){
                    ctx.strokeStyle = 'white';
                    ctx.lineWidth = 2;
                    ctx.strokeText(front_customizeTextList.CustomizeText[i].Text,-w/2, -h/2);
                }
                ctx.fillText(front_customizeTextList.CustomizeText[i].Text,-w/2, -h/2);
                ctx.restore();
            }
        }
        var res=canvas.toDataURL();
        $('#final_preview_image_front').attr('src',res);
        return res;
    }
    function renderLeftView(){
        /*html2canvas($('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsiderleft'), {
            onrendered: function(c) {
                $('#final_preview_image_left').attr('src',c.toDataURL());
            }
        });*/
        canvas.width = $('#templateimage').width();
        canvas.crossOrigin = "Anonymous";
        canvas.height = $('#templateimage').height();
        ctx.clearRect(0,0,canvas.width,canvas.height);
        ctx.fillStyle = "white";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        /*var stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();
        var activedTem=$('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template').val();
        var templeteList=$('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_left').val().split(',');
        var heightList=(new String(',40/200/420,10,220,10,,10/220,,,,,200/400')).split(',');
        var idx=0;
        for(var i=0;i<templeteList.length;i++)if(templeteList[i]==activedTem){
            idx=i;break;
        }
        var hList,w;
        if(stringCustomizeImageList!=''){
            customizeTextList = eval(stringCustomizeImageList);
            hList=heightList[idx].split('/');
            if(hList.length>0){
                for(var i=0;i<customizeTextList.length;i++){
                    var txt=customizeTextList[i].Text;
                    txt=txt.substring(txt.indexOf('<cj>') + 4, txt.indexOf('</cj>'));
                    ctx.fillStyle='black';
                    //ctx.textAlign = "center";
                    //ctx.textBaseline = 'middle';
                    w=(canvas.width - ctx.measureText(txt).width) * 0.5;
                    ctx.fillText(txt,w, hList[i]);
                }
            }
        }*/
        var stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();
        var activedTem=$('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template').val();
        var templeteList=$('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_left').val().split(',');
        var heightList=(new String(',0/127/305,0,217,0,0,0/217,0,0,0,0,166/375')).split(',');
        var idx=0;
        for(var i=0;i<templeteList.length;i++)if(templeteList[i]==activedTem){
            idx=i;break;
        }
        var hList,w,h,mh=15,mw=15,txtobj,txt;
        if(stringCustomizeImageList!=''){//alert(stringCustomizeImageList);
            customizeTextList = eval(stringCustomizeImageList);
            hList=heightList[idx].split('/');
            if(hList.length>0){
                for(var i=0;i<customizeTextList.length;i++){
                    txtobj=getTextObjByHtml(customizeTextList[i].Text);
                    txt=txtobj.txt;
                    ctx.fillStyle=txtobj.color;
                    ctx.font=txtobj.fontsize+'px '+txtobj.font;
                    w=(canvas.width - ctx.measureText(txt).width) * 0.5;
                    if(txtobj.align=='left')w=mw;
                    else if(txtobj.align=='right')w=280-ctx.measureText(txt).width;
                    ctx.textBaseline = 'top';
                    h=eval(mh)+eval(hList[i]);
                    if(txtobj.valign=='middle'){
                        h=h+eval(customizeTextList[i].AH/2);
                        ctx.textBaseline = 'middle';
                    }else if(txtobj.valign=='bottom')h=h+eval(customizeTextList[i].AH)-eval(txtobj.fontsize);
                    //ctx.textAlign = "center";
                    //ctx.textAlign = "center";
                    //ctx.textBaseline = 'middle';
                    ctx.fillText(txt,w, h);
                }
            }
        }

        var widthList;
        stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val();
        widthList=(new String( ',0,0,0,0,0,0,0/0,0/0/146/0/146,0/186/186/0,0/0/143,0/0')).split(',');
        heightList=(new String( '0,0,0,0,217,0,0,0/217,0/216/216/320/320,0/0/77/158,0/229/229,0/202')).split(',');
        if(stringCustomizeImageList!=''){
            customizeTextList = eval(stringCustomizeImageList);
            wList=widthList[idx].split('/');
            hList=heightList[idx].split('/');//alert(idx+','+heightList[idx]);
            if(hList.length>0){
                for(var i=0;i<customizeTextList.length;i++){
                    ctx.drawImage($('#'+customizeTextList[i].ImageId).get(0), mw+eval(wList[i]), mh+eval(hList[i]), customizeTextList[i].DragWidth,customizeTextList[i].DragHeight);
                }
            }
        }
        var res=canvas.toDataURL();
        $('#final_preview_image_left').attr('src',res);
        return res;
    }
    function getTextObjByHtml(htm){
        var res='[]';
        var txt=htm.substring(htm.indexOf('<cj>') + 4, htm.indexOf('</cj>'));
        htm=htm.replace(/ /g,'').replace(/\n/g,'');
        var align=htm.substring(eval(htm.indexOf('text-align:') + 11), htm.indexOf(';',htm.indexOf('text-align:')));
        //alert(align);
        var valign=htm.substring(htm.indexOf('vertical-align:') + 15, htm.indexOf(';',htm.indexOf('vertical-align:')));
        //alert(valign);
        var color=htm.indexOf('color:')<0?'#000':htm.substring(htm.indexOf('color:') + 6, htm.indexOf(';',htm.indexOf('color:')));
        //alert(color);
        var font=htm.indexOf('font-family:')<0?'Arial':htm.substring(htm.indexOf('font-family:') + 12, htm.indexOf(';',htm.indexOf('font-family:')));
        //alert(font);
        var fontsize=htm.indexOf('font-size:')<0?12:htm.substring(htm.indexOf('font-size:') + 10, htm.indexOf(';',htm.indexOf('font-size:'))).replace('px','');
        //alert(fontsize);
        var s="[{\"txt\":\""+txt+"\",\"align\":\""+align+"\",\"valign\":\""+valign+"\",\"color\":\""+color+"\",\"font\":\""+font+"\",\"fontsize\":\""+fontsize+"\"}]";
        return eval(s)[0];
        
    }
    function renderRightView(){
        canvas.width = $('#templateimage').width();
        canvas.crossOrigin = "Anonymous";
        canvas.height = $('#templateimage').height();
        ctx.clearRect(0,0,canvas.width,canvas.height);
        ctx.fillStyle = "white";
        ctx.fillRect(0, 0, canvas.width, canvas.height);//
        var stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val();
        var activedTem=$('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template').val();
        var templeteList=$('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_right').val().split(',');
        var heightList=(new String('0/127/305,0,217,0,0,0/217,0,0,0,0,166/375')).split(',');
        var idx=0;
        for(var i=0;i<templeteList.length;i++)if(templeteList[i]==activedTem){
            idx=i;break;
        }
        var hList,w,h,mh=15,mw=15,txtobj,txt;
        if(stringCustomizeImageList!=''){//alert(stringCustomizeImageList);
            customizeTextList = eval(stringCustomizeImageList);
            hList=heightList[idx].split('/');
            if(hList.length>0){
                for(var i=0;i<customizeTextList.length;i++){
                    txtobj=getTextObjByHtml(customizeTextList[i].Text);
                    txt=txtobj.txt;
                    ctx.fillStyle=txtobj.color;
                    ctx.font=txtobj.fontsize+'px '+txtobj.font;
                    w=(canvas.width - ctx.measureText(txt).width) * 0.5;
                    if(txtobj.align=='left')w=mw;
                    else if(txtobj.align=='right')w=280-ctx.measureText(txt).width;
                    ctx.textBaseline = 'top';
                    h=eval(mh)+eval(hList[i]);
                    if(txtobj.valign=='middle'){
                        h=h+eval(customizeTextList[i].AH/2);
                        ctx.textBaseline = 'middle';
                    }else if(txtobj.valign=='bottom')h=h+eval(customizeTextList[i].AH)-eval(txtobj.fontsize);
                    //ctx.textAlign = "center";
                    //ctx.textAlign = "center";
                    //ctx.textBaseline = 'middle';
                    ctx.fillText(txt,w, h);
                }
            }
        }

        var widthList;
        stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val();
        widthList=(new String( ',0,0,0,0,0,0,0/0,0/0/146/0/146,0/186/186/0,0/0/143,0/0')).split(',');
        heightList=(new String( '0,0,0,0,217,0,0,0/217,0/216/216/320/320,0/0/77/158,0/229/229,0/202')).split(',');
        if(stringCustomizeImageList!=''){
            customizeTextList = eval(stringCustomizeImageList);
            wList=widthList[idx].split('/');
            hList=heightList[idx].split('/');
            if(hList.length>0){
                for(var i=0;i<customizeTextList.length;i++){
                    ctx.drawImage($('#'+customizeTextList[i].ImageId).get(0), eval(mw)+eval(wList[i]), eval(mh)+eval(hList[i]), customizeTextList[i].DragWidth,customizeTextList[i].DragHeight);
                }
            }
        }
        var res=canvas.toDataURL();
        $('#final_preview_image_right').attr('src',res);
        return res;
    }
    function renderBacView(){
        canvas.width = $('#templateimage').width();
        canvas.crossOrigin = "Anonymous";
        canvas.height = $('#templateimage').height();
        ctx.clearRect(0,0,canvas.width,canvas.height);
        ctx.drawImage($('#hidden_back_img').get(0), 0, 0, canvas.width,canvas.height);
        var stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back").val();
        var hList,w;//alert(stringCustomizeImageList);
        if(stringCustomizeImageList!=''){
            customizeTextList = eval(stringCustomizeImageList);
            hList=(new String("127,0,0,0,0")).split(',');
            for(var i=0;i<customizeTextList.length;i++){
                var txt=customizeTextList[i].Text;
                ctx.fillStyle='black';
                //ctx.textAlign = "center";
                //ctx.textBaseline = 'middle';
                w=(canvas.width - ctx.measureText(txt).width) * 0.5;
                ctx.fillText(txt,w, hList[i]);
            }
        }
        var stringCustomizeImageList = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val();
        var posList=(new String('111/16,100/100,100/100,100/100,100/100')).split(',');
        if(stringCustomizeImageList!=''){
            customizeTextList = eval(stringCustomizeImageList);
            for(var i=0;i<customizeTextList.length;i++){
                hList=posList[i].split('/');
                ctx.drawImage($('#'+customizeTextList[i].ImageId).get(0), hList[0], hList[1], customizeTextList[i].DragWidth,customizeTextList[i].DragHeight);
            }
        }
        var res=canvas.toDataURL();
        $('#final_preview_image_back').attr('src',res);
        return res;
    }

function saveme() {
    PreserveEnteredData();
            
    var customizeImageListFront;
    var customizeImageListCIL;
    var customizeImageListCIR;
    var customizeImageListBack;

    var customizeTextListFront;
    var customizeTextListCIL;
    var customizeTextListCIR;
    var customizeTextListBack;

    var currentActiveProduct;
    
    customizeImageListFront = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val();
    customizeImageListCIL = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val();
    customizeImageListCIR = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val();
    customizeImageListBack = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val();

    customizeTextListFront = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val();
    customizeTextListCIL = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();
    customizeTextListCIR = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val();
    customizeTextListBack = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back").val();
    
    cardinsideLeftTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val();
    cardinsideRightTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val();
    cardinsideBackTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val();

    var browser_infor = "Browser : " +  BrowserDetect.browser + ", Version : " + BrowserDetect.version + ", OS : " + BrowserDetect.OS;
    var sizeid = $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val();
    var sizetext = '';
    var quantity = $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val();
            
    var size_arr = productSizes.split(':');
    for(var i=0; i<size_arr.length; i++)
    {
        var size_arr_element_arr = size_arr[i].split(',');            
        if(size_arr_element_arr[0] == sizeid)
        {
            sizetext = size_arr_element_arr[1];
        }
    }

    var frontsrc=renderFrontView();
    var leftinsidesrc=renderLeftView();
    var rightinsidesrc=renderRightView();
    var backinsidesrc=renderBacView();

    var mobile = 'false';

    var currentActiveProduct = $("#" +  $("#hidden_active_product_controlname").val()).val();
    var pid=$('#product_id').val();
    var pty=20;
    $.ajax({
        type: "POST",
        url: "/home/newFlow_ProductSave",
        data: { 
            type: 1, 
            productid: pid, 
            producttypeid: pty, 
            barcode: 'UKT7SMIYIHPV', 
            customizeImageListFront: customizeImageListFront, 
            customizeImageListCIL: customizeImageListCIL,
            customizeImageListCIR: customizeImageListCIR, 
            customizeImageListBack: customizeImageListBack, 
            customizeTextListFront: customizeTextListFront, 
            customizeTextListCIL: customizeTextListCIL, 
            customizeTextListCIR: customizeTextListCIR, 
            customizeTextListBack: customizeTextListBack, 
            cardinsideLeftTemplate: cardinsideLeftTemplate, 
            cardinsideRightTemplate: cardinsideRightTemplate, 
            cardinsideBackTemplate: cardinsideBackTemplate, 
            sizeid: sizeid, 
            quantity: quantity, 
            browser_infor: browser_infor, 
            mobile: mobile, 

            currentActiveProduct: currentActiveProduct ,
            frontsrc:frontsrc,
            leftinsidesrc:leftinsidesrc,
            rightinsidesrc:rightinsidesrc,
            backinsidesrc:backinsidesrc
        },
        dataType: "html",
        error: function(jqXHR, textStatus) {                        
            $('#ICE_preloader').fadeOut();
            DisplayError('Error!', '<p>Sorry save process fail. (' + textStatus + ')</p>', true);
            return;
        },            
        success: function(theResponse) {
            returnCode = theResponse;
                    
            switch(returnCode)
            {
                case "0":
                {
                    $('#ICE_preloader').fadeOut();
                    DisplayError('Your Card has been successfully saved!', '<p>Click the <a href="/Pages/MyAccount.aspx?type=join">View Account</a> button to access your saved Card(s) at a later date, select the Card to continue completing!</p>', true);
                    DisplaySaveSuccessMessage();
                    break;
                } 
                case "-1":
                {
                    $('#ICE_preloader').fadeOut();
                    DisplayError('Error!', '<p>Sorry save process fail. (Input data mismatch.)</p>', true);
                    break;
                }
                case "-2":
                {
                    $('#ICE_preloader').fadeOut();
                    DisplayError('Error!', '<p>Sorry save process fail. (System error occure.)</p>', true);
                    break;
                }
                case "-3":
                {
                    $('#ICE_preloader').fadeOut();
                    DisplayError('Error!', '<p>Sorry save process fail. (Data saving error.)</p>', true);
                    break;
                }
                default: 
                {
                    var flowTrackingId = parseInt(returnCode);
                            
                    if(flowTrackingId>0) // User hasn't log yet so send user to login form
                    {
                        window.location.href = '/auth?prodId='+pid+'&prodtype='+pty+'&sizeId=' + sizeid + '&flowTrackingId=' + flowTrackingId;
                    }
                    else // Unspecific error
                    {
                        $('#ICE_preloader').fadeOut();
                        DisplayError('Error!', '<p>Sorry save process fail. (Unspecific error.)</p>', true);                                
                    }
                            
                    break; 
                }
            }
        },
        timeout: 90000
    });
} 
function DisplaySaveSuccessMessage() {
    DisplayError('Your Card has been successfully saved!', '<p>Click the <a href="/basket?type=join">View Account</a> button to access your saved Card(s) at a later date, select the Card to continue completing!</p>', true);
    var currentCardPage = $('.main_tab_navigation .tab_active a').text();
    if (currentCardPage === 'Front'){}else{
        $('#main_card_wrapper .notComplete').hide();
    }
}

function savepagesessionsintodb(duplicateImageProcess) {
    var customizeImageListFront;
    var customizeImageListCIL;
    var customizeImageListCIR;
    var customizeImageListBack;

    var customizeTextListFront;
    var customizeTextListCIL;
    var customizeTextListCIR;
    var customizeTextListBack;

    var currentActiveProduct;
    var error_heading='';
    customizeImageListFront = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front").val();
    customizeImageListCIL = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left").val();
    customizeImageListCIR = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right").val();
    customizeImageListBack = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back").val();

    customizeTextListFront = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front").val();
    customizeTextListCIL = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left").val();
    customizeTextListCIR = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right").val();
    customizeTextListBack = $("#ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back").val();
    
    cardinsideLeftTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template").val();
    cardinsideRightTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template").val();
    cardinsideBackTemplate = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template").val();
    
//        TestJunkData();
    
    currentActiveProduct = $("#" +  $("#hidden_active_product_controlname").val()).val();        
    
//        cardinsideRightTemplate = "SQ_cardinside_template_3";
    
    //var sizeid = $("# option:selected").val();
    //var sizetext = $("# option:selected").text();
    var sizeid = $("#ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize").val();
    var sizetext = '';
            
    var size_arr = productSizes.split(':');
    for(var i=0; i<size_arr.length; i++)
    {
        var size_arr_element_arr = size_arr[i].split(',');            
        if(size_arr_element_arr[0] == sizeid)
        {
            sizetext = size_arr_element_arr[1];
        }
    }        
    
    var frame = 0;
    var quantity = $("#ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity").val();
    var directSmile =  GetCardFrontImageUrl();
    
    var browser_infor = "Browser : " +  BrowserDetect.browser + ", Version : " + BrowserDetect.version + ", OS : " + BrowserDetect.OS;
    
    var is_preview = $("#ctl00_ContentPlaceHolder1_CardFlow1_is_preview").val();
    
    var fp_id = "";
    $('input[name="active_fp"]:checked').each(function() {
       var selected_fp_val = this.value;
       //var fp_obj = selected_fp_val.split('|');
       fp_id = selected_fp_val + "|" + quantity;
    });         
    
    //var page = $("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val();
    
    $.ajax({
        type: "POST",
        url: "home/newFlow_SessionUpdateBulk",
        data: { 
            page: -1, 
            productid: GetLoadProductId(), 
            orderid: 0, 
            barcode: 'UKO6AGMYGGBR', 
            sizeid: sizeid, 
            sizetext:sizetext, 
            frame:frame, 
            customizeImageListFront: customizeImageListFront, 
            customizeImageListCIL: customizeImageListCIL, 
            customizeImageListCIR: customizeImageListCIR, 
            customizeImageListBack: customizeImageListBack, 
            customizeTextListFront: customizeTextListFront, 
            customizeTextListCIL: customizeTextListCIL, 
            customizeTextListCIR: customizeTextListCIR, 
            customizeTextListBack: customizeTextListBack, 
            directSmile: directSmile, 
            currentActiveProduct: currentActiveProduct,
            quantity: quantity, 
            cardinsideLeftTemplate: cardinsideLeftTemplate, 
            cardinsideRightTemplate: cardinsideRightTemplate, 
            cardinsideBackTemplate: cardinsideBackTemplate, 
            browser_infor: browser_infor, is_preview: is_preview, 
            is_wc: 1, fp_id: fp_id, 
            duplicate_image_process: duplicateImageProcess, 
            isAdmin: 'False' 
        }, //, duplicate_image_process: duplicateImageProcess
        dataType: "html",
        error: function(jqXHR, textStatus) {
            $('#ICE_preloader').fadeOut();
            DisplayError('Error!', '<p>Sorry process fail.</p><br /><p>Error : System error!</p>', true);
            GAlogError('Sorry process fail');
            return;
        },             
        success: function(theResponse) {
            returnCode = theResponse;
            if(returnCode=="0") 
            { 
                if(is_preview=="1") {
                    $('#ICE_preloader').fadeOut();
                    //$("#Final_preview_A").trigger('click');
                    // Condition to trigger MM test to bypass preview
                    //alert('!!!mmtest='+$('#MM_test').val()+','+$('#preview_proceed').val())
                    if ( $('#MM_test').val()== '1' && $('#preview_proceed').val()== '0' ) {
                        DisplayError('Continue to Next Step','<p>You have edited everything on your card. Would you like to continue or preview your card?</p><div class="btn_close_error" onclick="javascript:CloseError();MoveNextPage(); false;">Continue</div><div class="btn_close_error" onclick="javascript:CloseError();choosePreview();">Preview Card</div>', false);
                    }
                    else {
                        showPreview();
                    }
                } else if ($("#ctl00_ContentPlaceHolder1_CardFlow1_is_music_card").val()=="1") {
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("1");
                    __doPostBack();
                } else if ($("#ctl00_ContentPlaceHolder1_CardFlow1_is_video_card").val()=="1") {
                    $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("1");
                    __doPostBack();
                } else {
                    //Redirect('home/personal_next');
                    $("#page_stage").val($('#PAGE_CHOCO_STAGE').val());
                    __doPostBack();
                }
            } 
            else 
            {                    
                var error_msg = "";
                var reload_button = '<div class="btn_close_error" onclick="Redirect(\'' + GetCurentFileName() + '?ProductId=' + GetLoadProductId() + '\')">OK</div>';

                switch(returnCode)
                {
                    case "95":
                        {
                            error_heading = 'Whoops! Something has gone wrong...'; 
                            error_msg += '<p>Please select valid quantity!</p><div class="btn_close_error" onclick="CloseError();">OK</div>';
                            break;
                        }
                    case "96":
                        {
                            error_heading = 'Whoops! Something has gone wrong...';
                            error_msg += '<p>You cannot not leave <strong>"name"</strong> or <strong>"surname"</strong> in the personalised text! Click the link below to <strong>edit</strong> your card.</p><div class="btn_close_error" onclick="mainTabClick(\'1\');CloseError();">Edit Text</div>';
                            GAlogError('Cannot leave name');
                            break;
                        }
                    case "97":
                        {
                            error_heading = 'Whoops! Something has gone wrong...';
                            error_msg += '<p>Description: Data mismatch, this could be cause due to session expire, please re-load the product and process again.</p>' + reload_button + '<div class="btn_close_error" onclick="mainTabClick(\'1\');CloseError();">CLOSE</div>';
                            GAlogError('Data mismatch');
                            break;
                        }
                    case "98":
                        {
                            error_heading = 'Whoops! Something has gone wrong...';
                            error_msg += '<p>Description: Inside LEFT template data does not match with selected template, Please select the template again! </p><div class="btn_close_error" onclick="mainTabClick(\'2\');CloseError();">OK</div>';     
                            GAlogError('Template does not match');
                            break;
                        }
                    case "99":
                        {
                            error_heading = 'Whoops! Something has gone wrong...';
                            error_msg += '<p>Description: Inside RIGHT template data does not match with selected template, Please select the template again! </p><div class="btn_close_error" onclick="mainTabClick(\'3\');CloseError();">OK</div>';
                            GAlogError('Template does not match');
                            break;
                        } 
                    case "200":
                        {
                            error_heading = 'Admin edit';
                            error_msg += '<p>Make sure you select Save Changes in the order management page to save the amendments</p><div class="btn_close_error" onclick="CloseError();">OK</div>';
                            break;
                        }
                    case "-1":
                        {
                            error_heading = 'Whoops! Something has gone wrong...';
                            error_msg += '<p>Please reload the page to continue.</p>' + reload_button + '<div class="btn_close_error" onclick="javascript:CloseError();">Reload</div>';
                            GAlogError('Data has corrupted');
                            break;                            
                        }
                    default:
                        {
                            if(returnCode.indexOf("-")>-1)
                            {
                                //console.log(returnCode);
                                var retArr = returnCode.split('-');
                                $(".pu_area").removeClass("pu_selected");
                                switch(retArr[0])
                                {
                                    case "100":
                                        {
                                            error_heading = 'Check your photos...'; 
                                            error_msg += '<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p><div class="btn_close_error" onclick="javascript:CloseError();">OK</div>';
                                            mainTabClick(retArr[1]);
                                            GAlogError('Space not filled by photo');
                                            if(retArr[1] == "1") {
                                                //$("#skeleton_" + retArr[2]).addClass("pu_selected");
                                                $("#skeleton_" + retArr[2]).trigger("click");
                                            }
                                            break;
                                        }
                                    case "101":
                                        {
                                            error_heading = 'Check your photos...'; 
                                            error_msg += '<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p><div class="btn_close_error" onclick="javascript:CloseError();">OK</div>';
                                            mainTabClick(retArr[1]);
                                            GAlogError('Space not filled by photo');
                                            break;
                                        }
                                    case "102":
                                        {
                                            error_heading = 'Check your photos...'; 
                                            error_msg += '<p>You have used the same photo more than once on this card. Do you wish to continue ?</p><div class="btn_close_error" onclick="javascript:savepagesessionsintodb(\'1\'); CloseError();$(\'#ICE_preloader\').fadeIn();">YES</div><div class="btn_close_error" onclick="javascript:CloseError();">NO</div>';
                                            mainTabClick(retArr[1]);
                                            GAlogError('Duplicate photos');
                                            break;
                                        }
                                    case "103":
                                        {
                                            error_heading = 'Whoops! Something has gone wrong...'; 
                                            error_msg += '<p>Sorry, but one or more of your images has not saved correctly. Please add your images and text to the product again.</p>' + reload_button;
                                            GAlogError('Images not saved correctly');
                                            break;
                                        }
                                    default:
                                        {
                                            error_heading = 'Check your photos...'; 
                                            error_msg += '<p>Description: ' + returnCode + '</p><div class="btn_close_error" onclick="javascript:CloseError();">OK</div>';
                                            break;
                                        }
                                }
                            }

                            break;
                        }
                }                    
                
                $('#ICE_preloader').fadeOut();
                //alert('DisplayError error_heading'+error_heading);
                if(error_heading!='')DisplayError(error_heading, error_msg, false);                    
                //return;
            }                
        }
    });
}

 function loadPersonalizeTextCustomizeBack() {
    loadPersonalizeTextCustomizeBackTabHandle();
}  
function b64toBlob(b64Data, contentType='', sliceSize=512){
  var byteCharacters = atob(b64Data.toString().replace(/^data:image\/(png|jpeg|jpg);base64,/, ''));
  var byteArrays = [];

  for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
    var slice = byteCharacters.slice(offset, offset + sliceSize);

    var byteNumbers = new Array(slice.length);
    for (let i = 0; i < slice.length; i++) {
      byteNumbers[i] = slice.charCodeAt(i);
    }

    var byteArray = new Uint8Array(byteNumbers);
    byteArrays.push(byteArray);
  }

  var blob = new Blob(byteArrays, {type: contentType});
  return blob;
}
function showPreview() {    
       /*var data = "<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'>" +
       "<foreignObject width='100%' height='100%'>" +
       "<div xmlns='http://www.w3.org/1999/xhtml'>" + 
       document.getElementById('html').innerHTML +
       "</div>" +
       "</foreignObject>" +
       "</svg>";
		//ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_front
       var DOMURL = self.URL || self.webkitURL || self;
		var img = new Image();
		var svg = new Blob([data], {type: "image/svg+xml;charset=utf-8"} );

		/// create an url that we can use for the image tag
		var url = DOMURL.createObjectURL(svg);
		img.onload = function () {
		    /// now we can draw the "html" to canvas.
		    //ctx.drawImage(img, 0, 0);
		    //DOMURL.revokeObjectURL(url);
		};
		img.src = url;
        alert(url);
		*/
       /*
       var obj=$('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_front');
       obj.css('display','block');
       html2canvas(obj, {
		    onrendered: function(c) {
		    	obj.css('display','none');
		    	//var c_front=b64toBlob(c.toDataURL());
		        obj=$('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideleft');
       			obj.css('display','block');
		        html2canvas(obj, {
				    onrendered: function(c) {
				    	//var c_left=b64toBlob(c.toDataURL());
				    	obj.css('display','none');
				    	obj=$('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideright');
       					obj.css('display','block');
				        html2canvas(obj, {
						    onrendered: function(c) {
						    	obj.css('display','none');
						    	//var c_right=b64toBlob(c.toDataURL());
						    	obj=$('#ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_back');
       							obj.css('display','block');
						        html2canvas(obj, {
								    onrendered: function(c) {
								        //var c_back=b64toBlob(c.toDataURL());
								        $.ajax({
								            cache: false,
								            type: "POST",
								            url: "home/newFlow_SessionCardPreview",
								            data: { //call: 'f', olid: 'sss',
								            	//c_front:c_front,
								            	//c_left:c_left,
								            	//c_right:c_right,
								            	//c_back:c_back
								            },
								            dataType: "html",
								            error: function(jqXHR, textStatus) { },             
								            success: function(theResponse) {
								                $("#product_final_preview").html(theResponse);
								                $('#wrapper_whole').addClass('preview-active');
								            }
								        });
								    },width: 323,height:460
								});
						    },width: 323,height:460
						});
				    },width: 323,height:460
				});
		    },
		    width: 323,
		    height:460
		});
		*/
		$('#ICE_preloader').fadeIn();
		$.ajax({
            cache: false,
            type: "POST",
            url: "home/newFlow_SessionCardPreview",
            data: { //call: 'f', olid: 'sss',
            	//c_front:c_front,
            	//c_left:c_left,
            	//c_right:c_right,
            	//c_back:c_back
            },
            dataType: "html",
            error: function(jqXHR, textStatus) { },             
            success: function(theResponse) {
                $("#product_final_preview").html(theResponse);
                $('#wrapper_whole').addClass('preview-active');
            }
        });
        
        $('.btn_continue_preview.settings_top').show();
        //alert('call showPreview');
    }
    
    function choosePreview() {
        $('#MM_test').attr('value','0');
        showPreview();
        //ConfirmPageAndPreview();
    }
    
    function chooseContinue() {
        $('#MM_test').attr('value','0');
        $("#ctl00_ContentPlaceHolder1_CardFlow1_is_preview").attr('value','0');
        //savepagesessionsintodb('0');
        ProcessConfirmPage();
        $('#ICE_preloader').fadeIn();
    }
    
    function closePreview() {
    	__doPostBack();
    	return;
        $("#product_final_preview").html("");
        $('.CardLeftPanel').fadeIn();
        $('#main_control_wrapper').fadeIn();
        if ( $('#main_wrapper').hasClass('landscape') ) {
            $('#main_wrapper').removeClass('preview_extend_height');
        }
        $('.btn_continue_preview.settings_top').hide();
        $('#absPanel img').removeAttr('style');
        final_preview_lCount = 1;
        final_preview_rCount = 0;
        $('#wrapper_whole').removeClass('preview-active');
    }

    function MoveNextPage() {
        saveme();
        $("#ctl00_ContentPlaceHolder1_CardFlow1_is_preview").val("");
        if($("#ctl00_ContentPlaceHolder1_CardFlow1_is_music_card").val()=="1") {
            $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("1");
            __doPostBack();
        } 
        else if($("#ctl00_ContentPlaceHolder1_CardFlow1_is_video_card").val()=="1") {
            $("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val("1");
            __doPostBack();
        }
        else {
        	$("#page_stage").val($('#PAGE_CHOCO_STAGE').val());
            __doPostBack();
            //Redirect('home/personalnext');
            $('#ICE_preloader').show();
        }
    }
    
    function TestJunkData() {        
        var currentActiveProduct = { "CurrentActiveProduct": JSON.parse($("#" +  $("#hidden_active_product_controlname").val()).val()) };
        currentActiveProduct.CurrentActiveProduct.ProductId=100;
        $("#" +  $("#hidden_active_product_controlname").val()).val(JSON.stringify(currentActiveProduct.CurrentActiveProduct));
    }   
    function GAlogError(err_name) {
        //ga('send', 'event', 'Editor_error', 'action', {
       //     'dimension15': err_name
       // });
    }




