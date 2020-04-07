<!-- ============ PERSONALIZE IMAGE UPLOAD ==============-->
<style type="text/css">
#closePUPanel {
    width: 88px;
    float: right;
    background: url(/assets/dist/images/icon_close.png) 61px center no-repeat #203750;
    background-size: 18px auto;
    padding: 0 40px 0 10px;
    position: absolute;
    top: 19px;
    right: 20px;
}
</style>
<div class="tab_container" id="common_personalize_imageuploader" style="display: none;">
		<!------------------ TAB MY COMPUTER ------------------>
		<div class="content upload_from_mycomputer">
		<input id="btnShowSimple" type="button" class="formsinputtype2 right standardPurpleBtn uploadMorePhotosBtn" value="Upload more photos" style="display: block;">
		<a class="btn_autofill btn_repeat_photo right btn_cal_autofill_whole" onclick="javascript:imageRepeat();" style="display: none; opacity: 1; visibility: visible;">Repeat Photo 
		</a>
		<div id="deleteImagesBtn" class="standardPurpleBtn GreyBtn" onclick="javascript:deleteAllImages();" style="display: none;">Delete Images</div>
		<div id="closePUPanel" class="standardPurpleBtn" style="display: none;">Close</div>
		<div class="ICE_mob_gallery_list">
            <div class="formsinner">
               <div class="clear"></div>
            </div>
            <div class="pu_show_count" style="display: block;">
              Show
              <select id="ddlPageCount_mc" onchange="javascript:ChangePageCount_MyComputer();">
                <option value="4" selected="">4</option>
                <option value="16">16</option>
                <option value="24">24</option>
                <option value="32">32</option>
                <option value="40">40</option>
                <option value="48">48</option>
              </select>
              images
            </div>
            <div id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_photolistmc" class="thumb_slide navigation gallery-list" style="display: none;"><ul class="thumbs thumbs_mc ui-sortable"></ul><div class="clear"></div></div>
    	</div>
        <input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeImageUplaad1$image_body_html_mycomputer" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_body_html_mycomputer">
        <input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeImageUplaad1$image_list_mycomputer" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_list_mycomputer" value="">
        <input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeImageUplaad1$image_count_mycomputer" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_count_mycomputer" value="0">
        
        <input type="hidden" name="photolistmc_name" id="photolistmc_name" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_photolistmc">
        <input type="hidden" name="image_body_html_mycomputer_name" id="image_body_html_mycomputer_name" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_body_html_mycomputer">
        <input type="hidden" name="image_list_mycomputer_name" id="image_list_mycomputer_name" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_list_mycomputer">
        <input type="hidden" name="image_count_mycomputer_name" id="image_count_mycomputer_name" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_count_mycomputer">
        <input type="hidden" name="uploaded_first_image" id="uploaded_first_image" value="">
        <input type="hidden" name="uploaded_from_facebook" id="uploaded_from_facebook" value="0">
        <div class="formsinner"></div>         
    </div>
    
    <!------------------ TAB FACEBOOK ------------------>
    <div class="content upload_from_facebook" style="display: none;"> 
        <div class="fb_api_header left">
            <div class="fb_api_logo left"><img src="/assets/dist/images/ice_logo_facebook.png"></div>
            <div class="fb-login-button left" onlogin="checkFbLogin()" onlogout="checkFbLogin()" style="padding-top:10px;" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true" data-scope="public_profile,user_photos"></div>
            <input id="btnShowSimpleFB" type="button" class="right standardPurpleBtn uploadMorePhotosBtn" value="Upload more photos">
        </div>
        <div class="formsselect clearfix">
            <div id="friendlistfb"></div>
            <div id="albumlistfb"></div>
        </div>
        <div class="pu_show_count_fb" id="photolistfb_page_control">
              Show
            <select id="ddlPageCount_fb" onchange="javascript:ChangePageCount_Facebook();">
                <option value="4" selected="">4</option>
                <option value="16">16</option>
                <option value="24">24</option>
                <option value="32">32</option>
                <option value="40">40</option>
                <option value="48">48</option>
              </select>
              images
         </div>
         <div class="fb_relative_wrapper">
            <div id="photolistfb" class="thumb_slide navigation gallery-list" style="width: 350px;"></div>
            <div class="fb_tip">
                <span class="fb_login_change">Login &amp; select</span> an album from the list above<br><span class="txt_12">Album availability is dependent on your privacy settings.</span>
                <img src="/assets/dist/images/ice_fb_tip_arrow.png">
            </div>
         </div>
         <input type="hidden" name="image_count_fb" id="image_count_fb" value="0">
         <br><br>     
    </div>
		<!------------------ TAB FACEBOOK END ------------->

    <!------------------ TAB INSTAGRAM ------------------>
    <div class="content upload_from_instagram" style="display: none;"> 
        <div class="instagram_api_header left">
            <div class="instagram_api_logo left"><a href="javascript:void(0)" onclick="instagramLogin();">Login with Instagram</a></div>             
            <input id="btnShowSimpleInstagram" type="button" class="right standardPurpleBtn uploadMorePhotosBtn" value="Upload more photos">
        </div>   
        <div class="instagram_relative_wrapper">
            <div id="photolistinstagram" class="thumb_slide navigation gallery-list" style="width: 350px; display: block;"></div>
            <div class="instagram_tip">
                
                <span class="instagram_login_change">Login &amp; select</span> an image to upload<br>
                <span class="txt_12">Album availability is dependent on your privacy settings.</span>
            </div>
        </div>
        <input type="hidden" name="image_count_instagram" id="image_count_instagram" value="0">
        <br><br>     
    </div>
    <!------------------ TAB INSTAGRAM END ------------->

	<!--
	#########################   
	Note : Following code use to display image upload popup and it's being use as a popup to avoid conflict forms
	-->
	<div id="dialog" class="web_dialog" style="height: 120px; display: none;">
	    <div class="photo_browse_options">
	        <div class="uploaded_photos_title">Upload more photos</div>
	        <div class="view_uploaded_photos">View uploaded photos</div>
	    </div>
	    <iframe class="ice_card_upload" src="newFlowImageUpload?a=b" frameborder="0" height="420px" style="width: 100%; height: 120px;"></iframe>
	</div> 

	<div id="fbdialog" class="web_dialog" style="display: none; height: 120px;">
	    <div style="width:100%; height:190px" onclick="loadPersonalizeImageUploader(3); fb_upload();"> 
	        <p>CLICK TO UPLOAD FROM FACEBOOK</p>
	    </div>
	</div>
	<div id="instagramdialog" class="web_dialog" style="height: 120px; display: none;">
	    <div style="width:100%; height:190px" onclick="loadPersonalizeImageUploader(5); instagram_upload();"> 
	        <p>CLICK TO UPLOAD FROM INSTAGRAM</p>
	    </div>
	</div>                   
</div>









<!--
[{
&quot;Id&quot;:&quot;4&quot;,
&quot;ImageId&quot;:&quot;cardtype2_im4&quot;,
&quot;Src&quot;:&quot;1569720729_684688_UKT1YH8UWUJL_MC.jpg&quot;,
&quot;ImagePath&quot;:&quot;https://photouploads.funkypigeon.com/PHOTOUPLOAD/&quot;,
&quot;DragId&quot;:&quot;cardtype2_drag4&quot;,
&quot;DragWidth&quot;:&quot;104&quot;,
&quot;DragHeight&quot;:&quot;128&quot;,
&quot;AW&quot;:323,&quot;AH&quot;:459,
&quot;CW&quot;:&quot;115&quot;,
&quot;CH&quot;:&quot;163&quot;,
&quot;X&quot;:0,&quot;Y&quot;:0,
&quot;CX&quot;:null,&quot;CY&quot;:null,
&quot;DragX&quot;:&quot;0&quot;,&quot;DragY&quot;:&quot;128&quot;,
&quot;IsUpload&quot;:true,&quot;IsResized&quot;:true,&quot;CropImageSrc&quot;:null,&quot;Rotate&quot;:0,&quot;Zoom&quot;:1,&quot;OAW&quot;:0,&quot;OAH&quot;:0,&quot;ActionHistory&quot;:[{&quot;action&quot;:&quot;rotate&quot;,&quot;value&quot;:0}],&quot;MessageLog&quot;:null,&quot;IsAdminUpload&quot;:false,&quot;isAdminUpload&quot;:false}]

-->

<script type="text/javascript">
	
///////////////////////////////image uploading //////////////////////////////////////////
/*------------------ SCRIPT MY COMPUTER START ------------------*/
    //var __autofill_call_once = false;

    $(document).ready(function () {
        $('.upload_from_instagram').hide();

        $("#btnShowSimple").click(function (e) {
            ShowDialog(false);
            e.preventDefault();
            $('#common_personalize_imagecustomize').hide();
            $(this).hide();
            $('#closePUPanel').fadeIn();
            $('.GreyBtn').hide();
            $('.btn_repeat_photo').css('opacity', '0').css('visibility', 'hidden');

            $(".fb_api_header").fadeOut();
            $("#main_heading h2, .main_heading h2").css("display", "block");

            $('#product_stage').val('upload_location');
            loadHelpSection();
        });
        
        $('#btnShowSimple').click(function () {
            var pu_container_height = $('#common_personalize_imageuploader').height();
            $('.thumb_slide ').hide();
            $('#main_tab').addClass('temporary_height');

            //SHOW RETURN TO UPLOADS BUTTON
            if ($('#MM_return_to_photos').val() == 1) {
                $('.photo_browse_options').show();
                $('#dialog').addClass('extra_buttons');
            }

        });

        $("#btnShowSimpleFB").click(function (e) {
            $(".upload_from_mycomputer").show();
            $('#btnShowSimple').hide();

            $('.upload_from_facebook').hide();

            ShowDialog(false);
            e.preventDefault();
            $('#common_personalize_imagecustomize').hide();
            $(this).hide();
            $('#closePUPanel').fadeIn();
            $('.GreyBtn').hide();
            $('.btn_repeat_photo').css('opacity', '0').css('visibility', 'hidden');

            $(".fb_api_header").fadeOut();
            $("#main_heading h2, .main_heading h2").css("display", "block");

            var pu_container_height = $('#common_personalize_imageuploader').height();
            $('.thumb_slide ').hide();
            $('#main_tab').addClass('temporary_height');

            $(".fb_api_header").prependTo(".upload_from_facebook");
            $("#main_heading h2, .main_heading h2").css("display", "block");

            leave_fb_upload();
            
        });

        $("#btnShowSimpleInstagram").click(function (e) {

            $(".upload_from_mycomputer").show();
            $('#btnShowSimple').hide();

            $('.upload_from_instagram').hide();

            ShowDialog(false);
            e.preventDefault();
            $('#common_personalize_imagecustomize').hide();
            $(this).hide();
            $('#closePUPanel').fadeIn();
            $('.GreyBtn').hide();
            $('.btn_repeat_photo').css('opacity', '0').css('visibility', 'hidden');

            $(".instagram_api_header").fadeOut();
            $("#main_heading h2, .main_heading h2").css("display", "block");

            var pu_container_height = $('#common_personalize_imageuploader').height();
            $('.thumb_slide ').hide();
            $('#main_tab').addClass('temporary_height');

            $(".instagram_api_header").prependTo(".upload_from_instagram");
            $("#main_heading h2, .main_heading h2").css("display", "block");

            leave_fb_upload();

        });
        
        $('#closePUPanel').click(function(){
            if (parseInt($("#" + $("#image_count_mycomputer_name").val()).val()) > 0 && $('#uploaded_from_facebook').val() == '0') {
                HideDialog();
                $('#product_stage').val('upload_panel');
                loadHelpSection();
            }
            else if ($('#uploaded_from_facebook').val() == '1') { loadPersonalizeImageUploader(3); fb_upload(); }
            else {
                backFromPersonalizeImageuploader();
            }
            $(this).hide();
            $('.btn_repeat_photo').css('opacity', '1').css('visibility', 'visible');

            //MUGS EDITOR
            //$('#main_wrapper').removeClass('photo_panel_open');
        });

       //VIEW UPLOAD IMAGES
        $('.view_uploaded_photos').click(function () {
            if (parseInt($("#" + $("#image_count_mycomputer_name").val()).val()) > 0) {
                HideDialog();
            }
        });
        
        $('#btn_webdialog').click(function(){
            var pu_container_height = $('#common_personalize_imageuploader').height();
            $('.thumb_slide ').show();
        });         
        
        $("#btnShowModal").click(function(e) {
            ShowDialog(true);
            e.preventDefault();
        });

        $("#btnSubmit").click(function(e) {
            var brand = $("#brands input:radio:checked").val();
            $("#output").html("<b>Your favorite mobile brand: </b>" + brand);
            HideDialog();
            e.preventDefault();
        });

        other_pu_conditional();

    });
    
    function other_pu_conditional() {
        if ($('#MM_test_fb').val() == '1') {
            $("#dialog .ice_card_upload").css("height", "120px");
            $("#dialog").css("height", "120px");
            $("#fbdialog").fadeIn(300);

            $("#fbdialog").css("height", "120px");
            $("#instagramdialog").css("height", "120px");
            $("#instagramdialog").fadeIn(300);

        } else {
            $("#dialog .ice_card_upload").css("height", "190px");
            $("#dialog").css("height", "190px");
            $("#instagramdialog").css("height", "190px");
            $("#instagramdialog").fadeIn(300);
        }
    }

    function hidepuselection() {
        $("#dialog").fadeOut(300);
        $("#fbdialog").fadeOut(300);
        $("#instagramdialog").fadeOut(300);
        $(".formsselect").insertAfter(".fb_api_logo");

        loadPersonalizeImageCustomize(1);
        $('.thumb_slide ').show();
        $('#main_heading, .main_heading').hide();
    }

    function fb_upload(){
        hidepuselection();

        $("#btnShowSimpleFB").fadeIn();
        checkFbLogin();
        $('#uploaded_from_facebook').val(1);
    }

    function instagram_upload() {
        hidepuselection();

        $('#main_heading, .main_heading').hide();
        $('.upload_from_mycomputer').hide();
        $("#btnShowSimpleInstagram").fadeIn();
        $('.upload_from_instagram').fadeIn();
        checkInstagramLogin();
        $('#image_count_instagram').val(1);
    }

    function checkFbLogin() {
        FB.getLoginStatus(function (response) {
            if (response.status === 'connected') {
                $(".fb-login-button").css("float", "left").css("width", "70px");
                $(".fb_api_logo").show();
                $(".fb_login_change").text('Select');                
            } else {
                $(".fb-login-button").css("float", "right").css("width", "150px");
                $(".fb_api_logo").hide();
            }
        });
    }

    function checkInstagramLogin() {

    }

    function leave_fb_upload() {
        $('#main_heading, .main_heading').show();
        $('#main_wrapper').removeClass('fb_photo_upload');
        $('.upload_from_instagram').hide();
    }
    /*function getCookie(cname) {


        //var name = cname + "=";
        //var decodedCookie = decodeURIComponent(document.cookie);
        //var ca = decodedCookie.split(';');
        //for (var i = 0; i < ca.length; i++) {
        //    var c = ca[i];
        //    while (c.charAt(0) == ' ') {
        //        c = c.substring(1);
        //    }
        //    if (c.indexOf(name) == 0) {
        //        return c.substring(name.length, c.length);
        //    }
        //}
        //return "";

        var match = document.cookie.match(new RegExp('(^| )' + cname + '=([^;]+)'));
        if (match) {
            return match[2];
        } else {
            return "";
        }
    }*/
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function ShowDialog(modal) {
        $("#overlay").show();
        $("#dialog").fadeIn(300);
        other_pu_conditional();
        //$("#fbdialog").fadeIn(300);
        
        if (modal) {
            $("#overlay").unbind("click");
        }
        else {
            $("#overlay").click(function(e) {
                HideDialog();
            });
        }
    }

    function NotifyStartImageUpload() {
        $("#uploaded_first_image").val("1");
    }

    function NotifyCompleteImageUpload(url) {
        if ($("#uploaded_first_image").val() == "1") {
            addThisImage(url, url);
            $("#uploaded_first_image").val("");
            $("#uploaded_from_facebook").val(0);
            //loadPersonalizeImageUploader(1);
        }

        if (typeof numberOfPhotosUsed === 'function') { numberOfPhotosUsed(); }
        //if ($('.mandatory_image').length <= $('.thumbs_mc li').length && $('#autofillCalled').val() != 1) {
        //    if ($("#uploaded_first_image").val() != "1") {
        //        imageAutofilling();
        //    }
        //}
    }

    function TriggerAutoFill() {
        if (!isAdmin()) {
            if (typeof imageAutofillingWhenUploadComplete == 'function') {
                //if ($('.mandatory_image').length <= $('.thumbs_mc li').length && !__autofill_call_once) { }
                if (!__autofill_call_once) {
                    imageAutofillingWhenUploadComplete();
                    __autofill_call_once = true;
                }
            }
        }
    }
    
    function HideDialog() {
        $("#overlay").hide();
        $("#dialog").fadeOut(300);
        $("#fbdialog").fadeOut(300);
        $("#instagramdialog").fadeOut(300);
        $('#common_personalize_imagecustomize').fadeIn();
        
        Custom_Initialize_UploadMyComputer_Slider();
        //alert('HideDialog CALL');
    } 
            
    function Custom_Initialize_UploadMyComputer_Slider() {
        //var image_body_html = $("#" + $("#image_body_html_mycomputer_name").val()).val();
        var image_body_html = GetUplaodedImageListInHtml();
        $("#" + $("#photolistmc_name").val()).html('<ul class="thumbs thumbs_mc">' + image_body_html + '</ul><div class="clear"></div>');
        //$('.ui-sortable').removeClass('noscript');
        makesortable();
        // remove temporay height class from main tab
        $('#main_tab').removeClass('temporary_height');
        $('#main_tab').removeClass('fb_active');
        if (parseInt($("#" + $("#image_count_mycomputer_name").val()).val()) > 0) {
            initializeImageSliders(parseInt($("#ddlPageCount_mc").val()));
            loadPersonalizeImageCustomize(1);
            $('#btnShowSimple').fadeIn();
            $('.ice-socks .btn_repeat_photo').css('opacity', '1').css('visibility', 'visible').show();
            $('#closePUPanel').hide();
            $('#dialog').hide();
            $('#fbdialog').hide();
            $("#instagramdialog").hide();
            $('.gallery-list').show();
        }   
        else {$('#btnShowSimple').hide(); $('#closePUPanel').show();}    
        //alert('thumbs created'); 

    }
    
    function GetUplaodedImageListInHtml() {
        var image_body_html = '';
        var image_list_mycomputer = "";
        var image_list_mycomputer_txt = $("#" + $("#image_list_mycomputer_name").val()).val();
        var image_list_mycomputer_cookie = "";

        if (isAdmin()) {
            //Clear cookie
            document.cookie = "ck_buddy_pu_imagelist=;path=/";
        } else {
            image_list_mycomputer_cookie = getCookie("ck_buddy_pu_imagelist").replace(/~/g, ';');
        }
        
        if (image_list_mycomputer_txt.length > 0) {
            image_list_mycomputer = image_list_mycomputer_txt;
        }

        if (image_list_mycomputer_cookie.length > 0) {
            var arrImages = image_list_mycomputer_cookie.split(";");
            for (var i = 0; i < arrImages.length; i++) {
                if (image_list_mycomputer.length > 0) {
                    if (image_list_mycomputer.indexOf(arrImages[i]) == -1) {
                        image_list_mycomputer = image_list_mycomputer + ";" + arrImages[i];
                    }
                } else {
                    image_list_mycomputer = arrImages[i];
                }
            }

            $("#" + $("#image_list_mycomputer_name").val()).val(image_list_mycomputer);
            var arrTmp = image_list_mycomputer.split(";");
            $("#" + $("#image_count_mycomputer_name").val()).val(arrTmp.length.toString());
        }

        if(image_list_mycomputer.length>0)
        {
            image_arr = image_list_mycomputer.split(';');
            var image_count = 0;
            var image_url = "";
            for(i=0; i<image_arr.length; i++)
            {
                if(image_arr[i].length>0)
                {
                    //image_url = '' + image_arr[i].replace('', '');
                    image_url = ((image_arr[i].toLowerCase().indexOf("https://") >-1) ? image_arr[i] : '/newFlowImageUpload/userImgDownloading?url=' + image_arr[i]);                    
                    image_body_html += '<li style="cursor: move;"><div class="thumb_wrapper">';
                    image_body_html += '<a href="javascript://" onclick="javascript:addThisImage(\'' + image_url + '\', \'' + image_url + '\');"><span class="amount_used"></span><img crossOrigin="anonymous" src="' + image_url + '"  class=\"thumbnail thumbnailmc\" rel="' + image_url + '"></a></div>';
                    image_body_html += '<a class="fancybox_zoom" href="' + image_url + '">Zoom</a>';
                    image_body_html += '<div class="btn_add_image"><a href="javascript://" onclick="javascript:addThisImage(\'' + image_url + '\', \'' + image_url + '\');"> <b>+</b> <span> Add Photo</span> </a></div>';
                    image_body_html += '</li>';
                    image_count++;
                }
            }
            //alert(image_body_html);
            $("#" + $("#image_count_mycomputer_name").val()).val(image_count.toString());

            $(".pu_show_count").css('display','block');
             
        }
        
        return image_body_html;
    }
    
    function deleteAllImages(process) {
        
        if(!process) {
            var message = '<p>Are you sure you want to delete all uploaded images</p><div class="btn_close_error" onclick="javascript:deleteAllImages(true);">YES</div><div class="btn_close_error" onclick="javascript:CloseError();">NO</div>'
            DisplayError("Warning!", message, false);
            return false;
        }        
        
        CloseError();

        // Clear textbox
        $("#" + $("#image_list_mycomputer_name").val()).val("");
        $("#" + $("#image_count_mycomputer_name").val()).val("0");

        // Clear cookie
        document.cookie = "ck_buddy_pu_imagelist=" + ";path=/";

        $.ajax({
            type: "POST",
            url: "newFlow_ImageUpload.aspx",
            data: { il: '', ic: '0' },
            dataType: "html",
            success: function(theResponse) {
                // returnCode = theResponse;
                $('#btnShowSimple').trigger('click');

                // REMOVE VIEW UPLOADED BUTTON
                $('.photo_browse_options').hide();
                $('#dialog').removeClass('extra_buttons');
            }
        });
        
        Custom_Initialize_UploadMyComputer_Slider();
        $(".pu_show_count").css('display', 'none');
        
    }
    
    function deleteThisImage(url_thum, url) {
        var image_list_mycomputer = $("#" + $("#image_list_mycomputer_name").val()).val();
        var imageCount = 0;
        var doProcess = false;
        
        if(image_list_mycomputer.length>0) {
            image_arr = image_list_mycomputer.split(';');
            image_list_mycomputer = "";
           
            for(i=0; i<image_arr.length; i++) {
                if(image_arr[i].indexOf(url_thum)==-1) {
                    image_list_mycomputer += ";" + image_arr[i];
                    imageCount++;
                }
                else {
                    doProcess = true;
                }
            }
        }
        
        if(doProcess) {
            // Set image count
            $("#" + $("#image_count_mycomputer_name").val()).val(imageCount);
            //alert('call - doProcess');

            
            
            $.ajax({
                type: "POST",
                url: "newFlow_ImageUpload.aspx",
                data: { il: image_list_mycomputer, ic: imageCount },
                dataType: "html",
                success: function(theResponse) {
                    // returnCode = theResponse;
                }
            });

        }       
        
        $("#" + $("#image_list_mycomputer_name").val()).val(image_list_mycomputer);
        Custom_Initialize_UploadMyComputer_Slider();
    }
    
    function CheckAndAutoloadMyComputerPUpopup() {
        if($('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_count_mycomputer').val().length>0) {
            if(parseInt($('#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_image_count_mycomputer').val())==0) {
                ShowDialog(false);
                $('.thumb_slide ').hide();
                $('#main_tab').addClass('temporary_height');
                //alert('auto filling now');
            }
        }    
    }
       
/*------------------ SCRIPT MY COMPUTER END ------------------*/


/*------------------ SCRIPT MY LIBRARY START ------------------*/
    function Custom_Initialize_UploadMyLibrary_Slider() {
        var image_body_html = $("#" + $("#image_body_html_mylibrary_name").val()).val();
        $("#" + $("#photolistml_name").val()).html('<ul class="thumbs noscript thumbs_ml">' + 0 + '</ul><div class="clear"></div>');                
        makesortable();
        if (parseInt($("#" + $("#image_count_mylibrary_name").val()).val()) > 0) {
            initializeImageSliders(parseInt($("#ddlPageCount_ml").val()));
        }                
    }
/*------------------ SCRIPT MY LIBRARY END ------------------*/


/*------------------ SCRIPT FACEBOOK START ------------------*/
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
          login();
        } 
//        else if (response.status === 'not_authorized') {
//          // The person is logged into Facebook, but not your app.
//          document.getElementById('status').innerHTML = 'Please log ' +
//            'into this app.';
//        } else {
//          // The person is not logged into Facebook, so we're not sure if
//          // they are logged into this app or not.
//          document.getElementById('status').innerHTML = 'Please log ' +
//            'into Facebook.';
//        }
    }  
        
    window.fbAsyncInit = function () {
        FB.init({ 
            appId: '167260339461', 
            status: true,
            cookie: true, 
            xfbml: true,
            oauth: true,
            version: 'v2.9' 
        });

        //FB.UIServer.setLoadedNode = function(a, b) { FB.UIServer._loadedNodes[a.id] = b; };

        /* All the events registered */
        FB.Event.subscribe('auth.login', function(response) {
            // do something with response
            statusChangeCallback(response);
        });

        FB.Event.subscribe('auth.logout', function(response) {
            // do something with response                        
            logout();
        });

//        FB.login(function(response){
//            statusChangeCallback(response);
        //        });


        FB.getLoginStatus(function(response) {
            HideControlsInFBLogoutStatus("");            
            statusChangeCallback(response);
        });
    };     
    
//    (function() {
//        var e = document.createElement('script');
//        e.type = 'text/javascript';
//        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
//        e.async = true;
//        document.getElementById('fb-root').appendChild(e);
//    } ());
    
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        //js.src = "//connect.facebook.net/en_US/sdk.js";
        js.src = "/assets/dist/frontend/facebook-sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));    

    function triggerwhenloading() {
        HideControlsInFBLogoutStatus(""); // Connection fail!
    }

    function login() {        
        FB.api('/me', function(response) {
            //getFriends(response.id, response.first_name);
            getAlbums(response.id);
        });
    }
    function logout() {
        HideControlsInFBLogoutStatus("");
    }

    function sortByName(a, b) {
        var x = a.name.toLowerCase();
        var y = b.name.toLowerCase();
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    }

    function getFriends(myid, myname) {
        loading(true, 100, 0, 0, 0, 0);
        try
        {         
            FB.api('/me/friends', function(response) {
                if (response.data.sort(sortByName)) {
                    var friend_dropdown_html = '<div class="fb_api_heading">My Friend List</div><span class="selectdrop"><select id="cmdFriendlistfb" name="cmdFriendlistfb" onchange="getAlbums(document.getElementById(\'cmdFriendlistfb\').value);">';
                    friend_dropdown_html += '<option value="0">Select a Friend</option>';
                    friend_dropdown_html += '<option value="' + myid + '">You (' + myname + ')</option>';
                    $.each(response.data, function(index, friend) {
                        friend_dropdown_html += '<option value="' + friend.id + '">' + friend.name + '</option>';
                    });
                    friend_dropdown_html += '</select></span>';
                    $("#friendlistfb").html(friend_dropdown_html);
                    loading(false, 100, 0, 0, 0, 0);
                } else {
                    loading(false, 100, 0, 0, 0, 0);                    
                    alert("Error!");
                }
            });
        }
        catch(Error) {loading(false, 100, 0, 0, 0, 0); }        
    }

    function getAlbums(uid) {
        loading(true, 100, 0, 0, 0, 0);
        $("#photolistfb").html("");
        $("#albumlistfb").html("");
                           
        if (uid == "0") {                        
            loading(false, 100, 0, 0, 0, 0);
            return false;
        }                                        
        try
        {        
            FB.api('/' + uid + '/albums?fields=count,id,name', function (response) {
                var ul = document.getElementById('albums');
                var album_dropdown_html = '<div class="fb_api_heading">Album List</div><span class="selectdrop"><select id="cmdAlbumlistfb" name="cmdAlbumlistfb" onchange="getPhotos(document.getElementById(\'cmdAlbumlistfb\').value);">';
                album_dropdown_html += '<option value="0">Select an Album</option>';
                album_dropdown_html += '<option value="Me">Photos of you</option>';

                for (var i = 0, l = response.data.length; i < l; i++) {
                    //console.log(response.data[i]);
                    if (response.data[i].count != undefined) {
                        album_dropdown_html += '<option value="' + response.data[i].id + '">' + response.data[i].name + '(' + response.data[i].count + ')' + '</option>';
                    }
                }

                album_dropdown_html += '</select></span>';
                $("#albumlistfb").html(album_dropdown_html);
                getPhotos("me");
                loading(false, 100, 0, 0, 0, 0);
            });
        }
        catch (Error) { loading(false, 100, 0, 0, 0, 0); }

        
    }
   
    function getPhotos(albumid) {

        loading(true, 100, 0, 0, 0, 0);
        $("#photolistfb").html("");

        // Select "Select an album"
        if (albumid == "0") {
            loading(false, 100, 0, 0, 0, 0);
            return false;
        }

        try {
            FB.api("/" + albumid + "/photos?limit=100&fields=source,picture", function (response) {
                var photos = response["data"];
                //document.getElementById("photos_header").innerHTML = "Photos(" + photos.length + ")";
                var subImages_text2 = '';
                var imagefound = false;
                for (var v = 0; v < photos.length; v++) {                    
                    imagefound = true;
                    var thum_src = photos[v]["picture"];
                    var image_src = photos[v]["source"];

                    //console.log(image_arr);
                    var subImages_text1 = "Photo " + (v + 1);

                    //this is for the small picture that comes in the second column
                    subImages_text2 += '<li style="cursor: move;" onclick=\"javascript:addThisImage(\'' + thum_src + '\', \'' + image_src + '\');\"><div class="thumb_wrapper">';
                    subImages_text2 += '<img src="' + thum_src + '" class=\"thumbnail thumbnailfb\" rel="' + image_src + '" /></div>';
                    subImages_text2 += '<a class="fancybox_zoom" href="' + image_src + '">Zoom</a>';
                    subImages_text2 += '<div class="btn_add_image"><a href=\"javascript://\" onclick=\"javascript:addThisImage(\'' + thum_src + '\', \'' + image_src + '\');\"><b>+</b> <span> Add Photo</span></a></div>';
                    subImages_text2 += '</li>';

                    //this is for the third column, which holds the links other size versions of a picture
                    var subImages_text3 = "";

                    //gets all the different sizes available for a given image 
                    //for (var j = 0; j < image_arr.length; j++) {
                    //    subImages_text3 += '<a target="_blank" href="' + image_arr[j]["source"] + '">Photo(' + image_arr[j]["width"] + "X" + image_arr[j]["height"] + ')</a><br/>';
                    //}
                    //addNewRow(subImages_text1, subImages_text2, subImages_text3);  
                    $(".pu_show_count_fb").css('display', 'block');
                }


                $("#photolistfb").html('<ul class="thumbs noscript thumbs_fb">' + subImages_text2 + '</ul><div class="clear"></div>');
                if (imagefound) { ActiveDeactiveFBImageControlButtons('block'); }
                initializeImageSliders(parseInt($("#ddlPageCount_fb").val()));
                makesortable();
                loading(false, 100, 0, 0, 0, 0);

                // remove FB album tip
                $('.fb_tip').fadeOut().remove();
            });

        }
        catch (Error) { loading(false, 100, 0, 0, 0, 0); }
    }

    function getPhotos_XX(albumid) {

        loading(true, 100, 0, 0, 0, 0);
        $("#photolistfb").html("");
                            
        // Select "Select an album"
        if (albumid == "0") {
            loading(false, 100, 0, 0, 0, 0);
            return false;
        }
        
        try
        {
            //console.log("/" + albumid + "/photos?limit=100&fields=source");
            FB.api("/" + albumid + "/photos?limit=100&fields=source", function (response) {
                //console.log(response);
                var photos = response["data"];
                //console.log(photos);
                //document.getElementById("photos_header").innerHTML = "Photos(" + photos.length + ")";
                var subImages_text2 = '';
                var imagefound = false;
                for (var v = 0; v < photos.length; v++) {
                    imagefound = true;
                    var image_arr = photos[v]["images"];
                    //console.log(image_arr);
                    var subImages_text1 = "Photo " + (v + 1);

                    //this is for the small picture that comes in the second column
                    subImages_text2 += '<li style="cursor: move;" onclick=\"javascript:addThisImage(\'' + image_arr[(image_arr.length - 1)]["source"] + '\', \'' + image_arr[0]["source"] + '\');\"><div class="thumb_wrapper">';
                    //subImages_text2 += '<a class="thumb" href="#"><img src="' + image_arr[(image_arr.length - 1)]["source"] + '" class=\"thumbnail\"/></a>';
                    subImages_text2 += '<img src="' + image_arr[(image_arr.length - 1)]["source"] + '" class=\"thumbnail thumbnailfb\" rel="' + image_arr[0]["source"] + '" /></div>';
                    subImages_text2 += '<a class="fancybox_zoom" href="' + image_arr[0]["source"] + '">Zoom</a>';
                    subImages_text2 += '<div class="btn_add_image"><a href=\"javascript://\" onclick=\"javascript:addThisImage(\'' + image_arr[(image_arr.length - 1)]["source"] + '\', \'' + image_arr[0]["source"] + '\');\"><b>+</b> <span> Add Photo</span></a></div>';
                    subImages_text2 += '</li>';
                    
                    //this is for the third column, which holds the links other size versions of a picture
                    var subImages_text3 = "";

                    //gets all the different sizes available for a given image 
                    for (var j = 0; j < image_arr.length; j++) {
                        subImages_text3 += '<a target="_blank" href="' + image_arr[j]["source"] + '">Photo(' + image_arr[j]["width"] + "X" + image_arr[j]["height"] + ')</a><br/>';
                    }
                    //addNewRow(subImages_text1, subImages_text2, subImages_text3);  
                    $(".pu_show_count_fb").css('display','block');                                          
                }
                

                $("#photolistfb").html('<ul class="thumbs noscript thumbs_fb">' + subImages_text2 + '</ul><div class="clear"></div>');
                if (imagefound) { ActiveDeactiveFBImageControlButtons('block'); }
                initializeImageSliders(parseInt($("#ddlPageCount_fb").val()));
                makesortable();
                loading(false, 100, 0, 0, 0, 0);

                
                // remove FB album tip
                $('.fb_tip').fadeOut().remove();
            });

        }
        catch (Error) { loading(false, 100, 0, 0, 0, 0); }

        
    }

    function HideControlsInFBLogoutStatus(message) {
        //alert(message);
        ActiveDeactiveFBImageControlButtons('none');
        
        $("#friendlistfb").html('');
        $("#albumlistfb").html('');
        $("#photolistfb").html('');

        $("#photolistfb").html('<div style="height:200px;">' + message + '</div>');
        
    }

    function ActiveDeactiveFBImageControlButtons(val) { $('#photolistfb_page_control').css('display', val); }


/*------------------ SCRIPT FACEBOOK END ------------------*/


/*------------------ SCRIPT FLICKR START ------------------*/
    /*$(document).ready(function() {
        $(".flickr-login").live("click", function() {
            newwindow = window.open('http://flickr.com/services/auth/?api_key=552d8fce97f193298decb05987b939dc&perms=read&api_sig=872799C7412F3ED6430C9F35809AC9AB', 'FlickrAuth', 'scrollbars=yes, menubar=no, resizable=no,location=no,toolbar=no,width=700px,height=300px');
            if (window.focus) { newwindow.focus() }
        });

        $(".flickr-logout").live("click", function() {
            // Remove session when user logout
            $.ajax({
                type: "POST",
                url: "newFlow_FlickrBackend.aspx",
                data: { m: 'logout' },
                dataType: "html",
                success: function(theResponse) {
                    var FlickrActionResult = JSON.parse(theResponse);
                    if (FlickrActionResult.ResultMode == "1") { // Successfully logoff
                        // Clear user infor
                        $("#friendlistfl").html("");
                        $("#albumlistfl").html("");
                        $("#photolistfl").html("");

                        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").removeClass("flickr-logout");
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").addClass("flickr-login");
                        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").html("Flickr Login");
                    } else {
                        alert(FlickrActionResult.Result);
                    }
                }
            });
        });
    });*/

    function FlickrCallBack() {
        loading(true, 100, 0, 0, 0, 0);
        
        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").removeClass("flickr-login");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").addClass("flickr-logout");
        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").html("Flickr Logout");

        getFlickrContacts();
        getPeoplePhotos("");
    }

    function getFlickrContacts() {
        $.ajax({
            type: "POST",
            url: "newFlow_FlickrBackend.aspx",
            data: { m: 'get-contacts' },
            dataType: "html",
            success: function(theResponse) {
                var FlickrActionResult = JSON.parse(theResponse);
                if (FlickrActionResult.ResultMode == "1") { // Successfully logoff
                    // Clear user infor
                    $("#friendlistfl").html(FlickrActionResult.Result);
                } else {
                    alert(FlickrActionResult.Result);
                }
            }
        });                
    }

    function getFlickrGallaries(userid) {
        $.ajax({
            type: "POST",
            url: "newFlow_FlickrBackend.aspx",
            data: { m: 'get-galleries', userid: userid },
            dataType: "html",
            success: function(theResponse) {
                var FlickrActionResult = JSON.parse(theResponse);
                if (FlickrActionResult.ResultMode == "1") { // Successfully logoff
                    // Clear user infor
                    $("#albumlistfl").html(FlickrActionResult.Result);
                } else {
                    alert(FlickrActionResult.Result);
                }
            }
        });        
    }

    function getGallaryPhotos(userid, galleryid) {
        $.ajax({
            type: "POST",
            url: "newFlow_FlickrBackend.aspx",
            data: { m: 'get-galleries-photos', userid: userid, galleryid: galleryid },
            dataType: "html",
            success: function(theResponse) {
                var FlickrActionResult = JSON.parse(theResponse);
                if (FlickrActionResult.ResultMode == "1") { // Successfully logoff
                    // Clear user infor
                    $("#photolistfl").html(FlickrActionResult.Result);
                } else {
                    alert(FlickrActionResult.Result);
                }                            
            }
        });                  
    }

    function getPeoplePhotos(userid) {                    
        // Clear pic loading div before set new images
        $("#photolistfl").html("");

        $.ajax({
            type: "POST",
            url: "newFlow_FlickrBackend.aspx",
            data: { m: 'get-people-photos', u: userid },
            dataType: "html",
            success: function(theResponse) {
                var FlickrActionResult = JSON.parse(theResponse);
                if (FlickrActionResult.ResultMode == "1") { // Successfully logoff
                    // Clear user infor
                    $("#photolistfl").html(FlickrActionResult.Result);
                    $("#image_count_fl").val(FlickrActionResult.ImageCount);

                    if ($("#image_count_fl").val() != "0") {
                        initializeImageSliders(6);
                        makesortable();
                    }
                } else {
                    alert(FlickrActionResult.Result);
                }
                loading(false, 100, 0, 0, 0, 0);
            },
            error: function(theResponse) {
                alert("Undefine error!");
                loading(false, 100, 0, 0, 0, 0);
            }
        });
    }

    function OnflickrContactSelect(uid) {
        loading(true, 100, 0, 0, 0, 0);
        getPeoplePhotos(uid);
    }
/*------------------ SCRIPT FLICKR END ------------------*/

/*------------------ SCRIPT INSTAGRAM START ------------------*/

    // Access token is required to make any endpoint calls,
    // http://instagram.com/developer/endpoints/
    var _access_token_instagram = null;
    var authenticateInstagram = function (instagramClientId, instagramRedirectUri, callback) {
        // Pop-up window size, change if you want
        var popupWidth = 700,
            popupHeight = 500,
            popupLeft = (window.screen.width - popupWidth) / 2,
            popupTop = (window.screen.height - popupHeight) / 2;
        // Url needs to point to instagram_auth.php
        var popup = window.open('/pages/instagram.aspx', '', 'width=' + popupWidth + ',height=' + popupHeight + ',left=' + popupLeft + ',top=' + popupTop + '');
        popup.onload = function () {
            // Open authorize url in pop-up
            if (window.location.hash.length == 0) {
                popup.open('https://instagram.com/oauth/authorize/?client_id=' + instagramClientId + '&redirect_uri=' + instagramRedirectUri + '&response_type=token', '_self');
            }
            // An interval runs to get the access token from the pop-up
            var interval = setInterval(function () {
                try {
                    // Check if hash exists
                    if (popup.location.hash.length) {
                        // Hash found, that includes the access token
                        clearInterval(interval);
                        _access_token_instagram = popup.location.hash.slice(14); //slice #access_token= from string
                        popup.close();
                        if (callback != undefined && typeof callback == 'function') {
                            callback();
                        }
                    }
                }
                catch (evt) {
                    // Permission denied
                }
            }, 100);
        };
    };

    function login_callback() {
        //alert("You are successfully logged in! Access Token: "+_access_token_instagram);
        $.ajax({
            type: "GET",
            dataType: "jsonp",
            url: "https://api.instagram.com/v1/users/self/?access_token=" + _access_token_instagram,
            success: function (response) {
                // Change button and show status
                $('.instagram_api_logo a').attr('onclick', 'instagramLogout()');
                $('.instagram_api_logo a').text('Logout from Instagram');
                $('#status').text('Thanks for logging in, ' + response.data.username + '!');
                // remove FB album tip
                $('.instagram_tip').fadeOut().remove();

                // Display user data
                //displayUserProfileData(response.data);

                getImages(response.data);

                // Save user data
                //saveUserData(response.data);

                // Store user data in sessionStorage
                sessionStorage.setItem("userLoggedIn", "1");
                sessionStorage.setItem("provider", "instagram");
                sessionStorage.setItem("userData", JSON.stringify(response.data));
            }
        });
    }

    // Authenticate instagram
    function instagramLogin() {
        authenticateInstagram(
            '05c42904a3ca4923a7e5df5281799114',
            'https://www.buddywisher.com/auth/instagramlogin',
            login_callback //optional - a callback function
        );
        return false;
    }

    // Logout from instagram
    function instagramLogout() {
        // Remove user data from sessionStorage
        sessionStorage.removeItem("userLoggedIn");
        sessionStorage.removeItem("provider");
        sessionStorage.removeItem("userData");
        sessionStorage.clear();

        $("#photolistinstagram").html('');
        $(".instagram_api_logo").html('<a href="javascript:void(0)" onclick="instagramLogin();">Login with Instagram</a>');

        //$('.instagramLoginBtn').attr('onclick', 'instagramLogin()');
        //$('.btn-text').text('Login with Instagram');
        //$('#status').text('You have successfully logout from Instagram.');
        //$('#userData').html('');
    }

    //function displayUserProfileData(userData) {
    //    //$('#userData').html('<p><b>Instagram ID:</b> ' + userData.id + '</p><p><b>Name:</b> ' + userData.full_name + '</p><p><b>Picture:</b> <img src="' + userData.profile_picture + '"/></p><p><b>Instagram Profile:</b> <a target="_blank" href="https://www.instagram.com/' + userData.username + '">click to view profile</a></p>');
    //}

    function getImages(userData) {
        $("#photolistinstagram").html("");
        var num_photos = 30;
        $.ajax({
            url: 'https://api.instagram.com/v1/users/' + userData.id + '/media/recent', // or /users/self/media/recent for Sandbox
            dataType: 'jsonp',
            type: 'GET',
            data: { access_token: _access_token_instagram, count: num_photos },
            success: function (data) {

                //console.log("Intagram");
                //console.log(data.data);

                var count = 0;
                var image_list_html = "";

                $.each(data.data, function (key, val) {
                    //console.log("item");
                    var thum_src = val.images.thumbnail.url;
                    var image_src = val.images.standard_resolution.url;
                    //var hrefobj = val.link;
                    //var captobj = val.caption.text;
                    //console.log(captobj);
                    //console.log(itemobj);
                    //var suatpaket = "<a target='_blank' href='" + hrefobj + "'><img src='" + itemobj + "'/><br>" + captobj + "<br></a>";
                    //$("#userImages").append(suatpaket);

                    image_list_html += '<li style="cursor: move;" onclick=\"javascript:addThisImage(\'' + thum_src + '\', \'' + image_src + '\');\"><div class="thumb_wrapper">';
                    image_list_html += '<img src="' + thum_src + '" class=\"thumbnail thumbnailinstagram\" rel="' + image_src + '" /></div>';
                    image_list_html += '<a class="fancybox_zoom" href="' + image_src + '">Zoom</a>';
                    image_list_html += '<div class="btn_add_image"><a href=\"javascript://\" onclick=\"javascript:addThisImage(\'' + thum_src + '\', \'' + image_src + '\');\"><b>+</b> <span> Add Photo</span></a></div>';
                    image_list_html += '</li>';

                    count++;
                });

                $("#photolistinstagram").html('<ul class="thumbs thumbs_instagram">' + image_list_html + '</ul><div class="clear"></div>');
                $("#image_count_instagram").val(count);

                //console.log($("#photolistinstagram").html());

                if ($("#image_count_instagram").val() != "0") {
                    initializeImageSliders(4);

                    makesortable();
                    //console.log(count);
                }
            },
            error: function (data) {
                console.log(data); // send the error notifications to console
            }
        });
    }

    //$(document).ready(function () {
    //    if (typeof (Storage) !== "undefined") {
    //        var userLoggedIn = sessionStorage.getItem("userLoggedIn");
    //        if (userLoggedIn == '1') {
    //            // Get user data from session storage
    //            var provider = sessionStorage.getItem("provider");
    //            var userInfo = sessionStorage.getItem("userData");
    //            var userData = $.parseJSON(userInfo);

    //            // Change button and show status
    //            $('.instagramLoginBtn').attr('onclick', 'instagramLogout()');
    //            $('.btn-text').text('Logout from Instagram');
    //            $('#status').text('Thanks for logging in, ' + userData.username + '!');

    //            // Display user data
    //            displayUserProfileData(userData);
    //            getImages(userData);
    //        }
    //    } else {
    //        console.log("Sorry, your browser does not support Web Storage...");
    //    }
    //});

/*------------------ SCRIPT INSTAGRAM END ------------------*/



/***************************************************************************************************************/
/*------------------ OTHER SCRIPTS START------------------*/

    function EnableDisableUploadSource(source, type) {
        
        switch(source)
        {
            case "mc":
            {
                if(type) {
                    $('#upload_from_mycomputer').css('display','block');
                } else {
                    $('#upload_from_mycomputer').css('display','none');
                }
                
                break;
            }
            case "ml":
            {
                if(type) {
                    $('#upload_from_library').css('display','block');
                } else {
                    $('#upload_from_library').css('display','none');
                }

                break;
            }
            case "fb":
            {
                if(type) {
                    $('#upload_from_facebook').css('display','block');
                } else {
                    $('#upload_from_facebook').css('display','none');
                }

                break;
            }
            case "fl":
            {
                if(type) {
                    $('#upload_from_flickr').css('display','block');
                } else {
                    $('#upload_from_flickr').css('display','none');
                }

                break;
            }

            case "is":
                {
                    if (type) {
                        $('#instagramdialog').css('display', 'block');
                    } else {
                        $('#instagramdialog').css('display', 'none');
                    }

                    break;
                }
        }
    }

    function ChangePageCount_MyComputer() {
        Custom_Initialize_UploadMyComputer_Slider();
    }

    function ChangePageCount_MyLibrary() {
        Custom_Initialize_UploadMyLibrary_Slider();
    }

    function ChangePageCount_Facebook() {
        getPhotos($("#cmdAlbumlistfb").val());

    }
    
    function ChangePageCount_Flicker() {
        
    }

    $('.fb_upload').click(function() {
        $('.web_dialog').fadeOut();
    });
    $('.flickr_upload').click(function() {
        $('.web_dialog').fadeOut();

        if ($("#image_count_fl").val() != "0") {
            initializeImageSliders(6);
            makesortable();
        }
    });
    $('#upload_from_facebook').click(function() {
        $('.web_dialog').fadeOut();
    });
    $('#upload_from_flickr').click(function() {
        $('.web_dialog').fadeOut();
    });
    $('#instagramdialog').click(function () {
        $('.web_dialog').fadeOut();
    });
    $('#upload_from_library').click(function() {
        $('.web_dialog').fadeOut();
    });
    $('#image_customize_advanced_effects').click(function() {
        $('.tab_container').addClass('active');
    });
    // HIDE HELP GRAPHIC ON BUTTON PRESS
    $('#upload_from_facebook').click(function() {
        $('.navigation').removeClass('help_active');
    });
    $('.fb_upload').click(function() {
        $('.navigation').removeClass('help_active');
    });
    
    $(document).bind('dragover', function (e) {
        var dropZone = $('.pu_area'),
            timeout = window.dropZoneTimeout;
        if (!timeout) {
            dropZone.addClass('over');
        } else {
            clearTimeout(timeout);
        }
        if (e.target === dropZone[0]) {
            dropZone.addClass('over');
        } else {
            dropZone.removeClass('over');
        }
        window.dropZoneTimeout = setTimeout(function () {
            window.dropZoneTimeout = null;
            dropZone.removeClass('over');
        }, 100);
    });   
    
    if ($("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeImageUplaad1_flickr_button").html() == "Flickr Logout") {
        getFlickrContacts();
        getPeoplePhotos("");
    }

    $(function () {
        if (document.location.href.indexOf('CustomiseLetter') > -1) {
            $('#ddlPageCount_mc option[value="4"]').attr('value', '3');
        }
    });


/*------------------ OTHER SCRIPTS END------------------*/

</script>