<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mobile-flow.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mobile-main.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/common-flow.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/common-main.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mediaqueries.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/hintandtips.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/headerface.css" />
<link id="ctl00_irelandStyles" rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/ireland.css" />
    
<script type="text/javascript" src="/assets/dist/frontend/responsive-all/blazy.min.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/responsive-all/js.cookie.min.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/responsive-all/autoscaling.min.js"></script>

<link href="/assets/dist/frontend/cardflow/drag.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/cardflow/jquery.fileupload-ui.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/choco/enlarge.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/responsive-all/style.css" type="text/css" rel="stylesheet" />


<form method="post" action="auth?prodId=<?php echo $prodId;?>&amp;prodtype=<?php echo $prodtype;?>&amp;sizeId=<?php echo $sizeId;?>&amp;flowTrackingId=<?php echo $flowTrackingId;?>" onsubmit="javascript:return WebForm_OnSubmit();" id="aspnetForm">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="ssssdffds" />
<input type="hidden" name="prodId" id="prodId" value="<?php echo $prodId;?>" />
<input type="hidden" name="prodtype" id="prodtype" value="<?php echo $prodtype;?>" />
<input type="hidden" name="sizeId" id="sizeId" value="<?php echo $sizeId;?>" />
<input type="hidden" name="flowTrackingId" id="flowTrackingId" value="<?php echo $flowTrackingId;?>" />
<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A02261F9" />
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="vbcgdfgf" />
<input type="hidden" name="ctl00$ScriptManager1" id="ctl00_ScriptManager1" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource1.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource2.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource3.js" type="text/javascript"></script>
<script type="text/javascript">
function CallServer(arg,context){WebForm_DoCallback('ctl00$uclHeader1',arg,displayResult,"",null,true);}
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
Sys.Application.setServerId("ctl00_ScriptManager1", "ctl00$ScriptManager1");
Sys.Application._enableHistoryInScriptManager();
</script>
<!--TEMPLATE WRAPPER STYLE-->	
<style>
    #template_wrapper {position:relative;}
    header {display: block;}
</style>
<?php $this->load->view('auth/login_reminder.php'); ?>
<div id="mobile" class="clearfix"> 
    <div id="template_wrapper"><!--TEMPLATE WRAPPER-->
        <div class="mobileMenuFadeOut"></div><!--MOBILE MENU FADEOUT--> 
        <!--HEADER-->
        <div id="fb-root">
        	<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js" async="">        		
        	</script>
        </div>    
		<input type="hidden" id="hidden_card_total_Count" value="0" />
		<input type="hidden" id="recentlyViewed" />
		<input type="hidden" id="mm_shortlist" value="1" />
		<input type="hidden" id="lsSup" value="1" />
		<input type="hidden" id="lsLoop54SearchEnable" value="1" />
		<input type="hidden" id="nci-active" value="1" />
		<input type="hidden" id="leads-active" value="0" />
		<input type="hidden" name="standard-del-cutoff" id="standard-del-cutoff" value="15" />
		<input type="hidden" name="next-day-del-cutoff" id="next-day-del-cutoff" value="15" />
		<input type="hidden" name="sw-standard-del-cutoff" id="sw-standard-del-cutoff" value="19" />
		<input type="hidden" name="sw-next-day-del-cutoff" id="sw-next-day-del-cutoff" value="15" />
		<input hidden name="MM_QG_test" id="MM_QG_test" value="0" />

		<?php $this->load->view('common/_facebookpixel.php'); ?>
		<!--BREADCRUMBS-->
        <div id="ctl00_SiteBreadCrump">
            <div id="dvBreadCrump"></div>
        </div>
        <!--END BREADCRUMBS-->
        <!--WRAPPER-->   
        
        <?php $this->load->view('auth/register_body.php'); ?>
	</div> 
    <div class="fancierbox_hat" style="display:none;"></div>

	<!-- DELIVERY POPUP -->
	<div class="mm-del-info-pop" style="display:none;">
		<div class="mm-del-info-wrap">
	        <div class="popUpCloseBtn"><span></span><span></span></div>
	      <h1><img width="46px" src="/assets/dist/images/icon-delivery-white.png"> Delivery Options</h1>
	        <ul>
	          <li>Next Day Guaranteed<br><span>Signature required</span></li>
	          <li>Royal Mail First Class<br><span>93% arrive next day</span></li>
	      	</ul>
	        <p><strong>Product information:</strong></p>
	        <p>Excludes glasses, china mugs, book and a small selection of other gifts (see product pages for details).<br>Flowers include FREE courier delivery 7 days a week.<br>
	          <a href="/delivery-information.aspx">Click here</a> for delivery information per product.
	        </p>
	    </div>
	</div>

	<!-- COOKIES -->
	<div class="fp_cookies" style="display:none;">
	  <div class="fp_cookies_wrapper">
	    <img class="fp_cookies_icon" src="/assets/dist/images/icon_cookies.png" />We use cookies to give you the best possible experience. By continuing, you are accepting our <a href="/auth/privacy?about=cookies">cookies policy</a>.
	    <div class="fp_btn_close" onclick="javascript:FPCPclose();">close<div class="fp_cookies_cross"></div></div>
	  </div>
	</div>
	<!--newcustomer-->
	<?php $this->load->view('common/newcustomer.php'); ?>

<script type="text/javascript">
        var FPCPclose = function () {
            $('.fp_cookies').remove();
            console.log('remove');
        }
        //LAZY LOADING
        var bLazy = new Blazy({
            breakpoints: [{
                width: 736 // Max-width
              , src: 'data-src-small'
            }]
         , success: function (element) {
             setTimeout(function () {
                 var parent = element.parentNode;
                 parent.className = parent.className.replace(/\bloading\b/, '');
             }, 200);
         }
        });

        //window.onload = function() {
        $(document).ready(function(){
		    //alert('s');
		    // TABLET TOUCH NAV //
            //$('html').TouchNav();

            $('.mobile_search').click(function () {
                $('body').toggleClass('mob-search-active');
            });

            // ANDROID SPECIFIC CODE //
            var ua = navigator.userAgent;
            var checker = { android: ua.match(/Android/), apple: ua.match(/iPad/) };

            //userBand();----------------------real---------------------------

            //if ($('#ctl00_uclHeader1_detect_mobile_vp').val() == 'mobile_vp' || $('#ctl00_uclHeader1_detect_mobile_vp').val() == 'normal_vp') {
            //    bannerLocation();
            //}
            bannerLocation();

            $('.mm-nci-min').click(function () {
                $('.mm_nu_offer').addClass('mm-nci-minimised').removeClass('mm-nci-expanded');;
                sessionStorage.nciMinimised = '1';
                //console.log('minimise');
            });

            $('.mm-nci-min-label').click(function () {
                $('.mm_nu_offer').removeClass('mm-nci-minimised').addClass('mm-nci-expanded');
                //console.log('expand');
            });

            if (userBand >= '1') {
                if ($('#ctl00_uclHeader1_is_having_orders').val() == 'true') {
                    $('.mm_nu_offer').addClass('mm-ret-user');
                    var currentURL = document.location.href;
                    var checkBASKET = currentURL.indexOf('Basket') > -1;
                    if (checkBASKET) {
                        sessionStorage.nciMinimised = '0';
                    }
                    //console.log('returning');
                }
                else {
                    var currentURL = document.location.href;
                    var checkBASKET = currentURL.indexOf('Basket') > -1;
                    if (checkBASKET) {
                        sessionStorage.nciMinimised = '0';
                    }
                }
            }
		    
		    if ( checker.apple ) {
		        $('html').addClass('ipad');
		        $('#A3.myaccountBtn').removeAttr('onclick');
                //alert('ipad');
		    }

		    $('.ui-autocomplete-input').keypress(function (event) {
                if (event.keyCode == 13) {
                    searchFieldValidationNEW();
                    event.preventDefault();
                }
            });
		    
		    $('.new_search_input input#ctl00_uclHeader1_tbSearch').keypress(function(event){
              if (event.keyCode == 13){
                searchFieldValidation();
                event.preventDefault();
              }
		    });

		    $('#imageButtontomMenuSearchNEW').click(function () {
		        searchFieldValidation();
		        //alert('adfasf');
		    });
            
            $('input#popup_add_edit_addresses_ctr_text_postcode').keypress(function(event){
              if(event.keyCode == 13 || event.keyCode == 176){
                event.preventDefault();
                //$('.flowPurpleBtn').trigger('click');
                clickPostCodeLookUpInAddressPopup();
              }
            });
            
            // Promocode Return Key
            $('input.FormTextbox_code').keypress(function(event){
              if(event.keyCode == 13 || event.keyCode == 176){
                event.preventDefault();
                $('.btn_redeem').trigger('click');
              }
            });
            
            // Card Reuse
            $('input.CVinput').keypress(function(event){
              if(event.keyCode == 13 || event.keyCode == 176){
                event.preventDefault();
                //$('.btn_redeem').trigger('click');
              }
            });
            
            // Quantity Return Key
            $('.popup_qnty input').keypress(function(event){
              if(event.keyCode == 13 || event.keyCode == 176){
                event.preventDefault();
              }
            });
            
            // Select contact PC Lookup
            $('input#ctl00_ContentPlaceHolder1_uc_contact_add_change_new1_txtPostCode').keypress(function(event){
              if(event.keyCode == 13 || event.keyCode == 176){
                event.preventDefault();
                $('#ctl00_ContentPlaceHolder1_uc_contact_add_change_new1_lnkPostcode').trigger('click');
              }
            });
            
            // COPYRIGHT DATE //
            $("#year").text((new Date).getFullYear());

            //== dropdown fadeout ==//
            var ddFadeIn = function () {
                $('.mobileMenuFadeOut').css('opacity', '1');
                $('.mobileMenuFadeOut').css('visibility', 'visible');
                //console.log('CALL ddFadeIn');
            };

            var ddFadeOut = function () {
                $('.mobileMenuFadeOut').css('opacity', '0');
                $('.mobileMenuFadeOut').css('visibility', 'hidden');
                //console.log('CALL ddFadeOut');
            };
		        
            // QUICK LINKS FUNCTION //
            quickLinksTabs();

            //TOP MENU HOVER - TABLET
            if ( $('html').hasClass('touch') ) {

                $('#top_nav ul li a.TNLink').removeAttr('href');
                $('#top_nav ul li a.TNLink').removeAttr('onclick');

                //TABLET MENU CLICK
                $('.TNLink').click(function () {

                    //IF ACTIVE
                    if ($(this).parent().hasClass('activeTab')) {
                        $('.activeTab .dd_header h2 a').trigger('click');
                    }

                    $('#top_nav ul li').removeClass('activeTab');
                    $(this).parent().addClass('activeTab');

                    ddFadeIn();
                });
		    }	
		    else {

                //TOP MENU HOVER
                $('#top_nav ul li').mouseover(function () {
                    $('#top_nav ul li').removeClass('nav_hover_active');
                    $(this).addClass('nav_hover_active');
                    ddFadeIn();
                });

                $('#top_nav ul li').mouseout(function () {
                    $('#top_nav ul li').removeClass('nav_hover_active');
                    ddFadeOut();
                });
            }

            //TABLET CLOSE BUTTON
            $('.close_touch_menu').click(function () {
                $('.mobileMenuFadeOut').css('opacity', '0');
                $('.mobileMenuFadeOut').css('visibility', 'hidden');
                $('#top_nav ul li').removeClass('activeTab');
                ddFadeOut();
            });
            
			//OPEN - WHATS THIS POPUP (MY SHORTLIST) //
            $(".ntn_list_myshortlist .left").click(function () {
			    $('.shortlist').addClass('block')
		    });
		    
            //CLOSE - WHATS THIS POPUP (MY SHORTLIST) //
		    $(".fancierbox").click(function() {
			    $('.shortlist').removeClass('block')
		    });
		    
		    //OPEN - WHATS THIS POPUP//
			$(".copy_function").click(function() {
			    $('.copy_feature').addClass('block')
		    });
		    //CLOSE - WHATS THIS POPUP//
		    $(".fancierbox").click(function() {
			    $('.copy_feature').removeClass('block')
		    });
		    
            function quickLinksTabs () {
		        $('.qltabs li a').click(function() {
			        $('.qltabs li a').removeClass('active');
			        $(this).addClass('active');
			        $('.tab_links').hide();
			        var tab_link_name = $(this).attr('id');
			        $(tab_link_name).show();
			        //alert(tab_link_name);
					
		        });	
				
		        $('.qltabs li').click(function() {
			        $('.qltabs li').removeClass('active_li');
			        $(this).addClass('active_li');
		        });    				
		    }
		
		    //REVEAL MOBILE ACCOUNT MENU//
		    $('.mobile_account_show').hide();
		    $('.mobile_myaccount').click(function() {
			    $('.mobile_account_show').slideToggle();
		    });
                        
            //FLAG REVEAL ON MOBILE
            $('.mobile_flags #flag').click(function(){
                //$('.mobile_flags_reveal').show();
                $('.mobile_flags_reveal').toggleClass('ShowFlagsMobile');
            }); 

            // COUNT CARRDS IN SHORTLIST
            var CountSavedCardsCurrent = $('.ntn_list_myshortlist ul li').length;

            // IF BREADCRUMB IS EMPTY - FIRE AFTER CODE BEHIND HAS POPULATED
            setTimeout(function() {
            // IF BREADCRUMB IS EMPTY, AUTO HEIGHT THE DIV
            var breadCrumbCheck = $('#dvBreadCrump').html();
            //alert(breadCrumbCheck);
            if ( !breadCrumbCheck ) {
                $('#dvBreadCrump').addClass('breadAuto');
                
            }
            else {$('.dymanticCrumbs').hide();}
            }, 100);
     
            // STAGE TWO SIDE MENU REVEAL
            $('.column_768').prepend('<div class="mobileLeftNavBtn"><div class="menuOpen left"><div class="menuLine"></div><div class="menuLine"></div><div class="menuLine"></div></div><div class="menuClose left"><div class="menuLine"></div>CLOSE<div class="menuLine"></div></div><span>I&#39;m Looking For...</span></div>');

            $('.menuOpen').click(function() {
                $('html.responsive_stage2 #left-col').animate({'left':'0px'}, { "duration": 200 });
                $(this).hide();
                $('.menuClose').css({'display':'block'});
            });
			            
            $('.menuClose').click(function() {
                $('html.responsive_stage2 #left-col').animate({'left':'-260px'}, { "duration": 200 });
                $(this).hide();
                $('.menuOpen').css({'display':'block'});
            });
     
            //== OPEN/CLOSE MENU FUNCTIONS
            function openMobileMenu () {
                $('#mobile').css({ 'position': 'relative' });
                $('#mobile, .mm-del-prompt').animate({ 'right': '275px' }, { "duration": 250 });
                $('#mobile_side_menu').animate({ 'right': '0px' }, { "duration": 250 });
                $('.mobile_search_hint.refine_fixed, #RemindersSiteWide, #mobile_search_sub_menu').animate({ 'left': '-274px' }, { "duration": 250 });

                $('.mobile_menu').hide();
                $('.mobile_menu_close').css({ 'display': 'block' });
                $('#mobile_side_menu').addClass('full_height');
                $('.mobileMenuFadeOut').fadeIn();
		    }
		    
		    function closeMobileMenu () {
		        $('#mobile_side_menu').animate({ 'right': '-275px' }, { "duration": 250 });
		        $('#mobile, .mm-del-prompt').animate({ 'right': '0px' }, { "duration": 250 });
		        $('.mobile_search_hint.refine_fixed, #RemindersSiteWide, #mobile_search_sub_menu').animate({ 'left': '0px' }, { "duration": 250 });

                $('.mobile_menu_close').removeClass('refine_menu_close');
                $('.mobile_menu_close').hide();
                $('.mobile_menu').css({ 'display': 'block' });
                $('.mobileMenuFadeOut').fadeOut();
		    }
		    
		    function openRefineMenu () {
		        $('.MobileNavHolder').hide();
                $('#left_nav_home').show();
                openMobileMenu();
                
                $('.search_refine_grey').animate({ 'left': '-274px' }, { "duration": 400 });
                $('.search_refine_grey').fadeIn();
                $('.mobile_search_hint.refine_fixed').animate({ 'left': '-274px' }, { "duration": 400 });
                $('.mobile_search_hint.refine_fixed').addClass('menuOpen');
                
                $('.search_refine_btn').hide();
                $('.search_refine_btn_active').show();
                
                $('.mobile_menu_close').addClass('refine_menu_close');
                $('.msm_header').show();
                $('.msm_header .msm_header_title').show();
                $('.msm_header .msm_header_title').html('Browse Category...');
                $('.msm_header .msm_header_title').append('<div class="RefineCloseBtn">Close</div>');
                
                $('.RefineCloseBtn').click(function(){
                    closeMobileMenu();
                    closeRefineMenu(); 
                });
		    }
            
            function closeRefineMenu () {
                $('.search_refine_grey').animate({ 'left': '0px' }, { "duration": 400 });
                $('.search_refine_grey').fadeOut();
                $('.mobile_search_hint.refine_fixed').animate({ 'left': '0px' }, { "duration": 400 });
                $('.mobile_search_hint.refine_fixed').removeClass('menuOpen');
                
                $('.search_refine_btn_active').hide();
                $('.search_refine_btn').show();
                $('.msm_header_title').hide();
                $('.msm_header').hide();
		        
		        setTimeout(function() {
                    $('.MobileNavHolder').show();
                    $('.msm_header .msm_header_title').html("I'm Looking For...");
                    $('.RefineCloseBtn').remove();
		        }, 500);
		        
            }

		    //== MOBILE MENU FADE OUT
            $('.mobileMenuFadeOut').click(function(){
                closeMobileMenu();
                closeRefineMenu();
            });

            //== MOBILE MENU FADE OUT
            $('.mobile_reminders').click(function () {
                closeMobileMenu();
                $('#RemindersSiteWide').removeClass('remindersClosed');
                $('#RemindersSiteWide').animate({ 'left': '0' }, { "duration": 400 });
            });
            
            //== TOP SEARCHES CLOSE
		    $('.closeTopSearches').click(function() {
                $('#mobile_search_sub_menu').hide();
                $('.mobile_search').removeClass('active');
            });
  
		    //== OPEN REFINE MENU
            $('.refine_btn').click(function(){
                openRefineMenu();
            });
            
            //== OPEN REFINE MENU - SEARCH PAGE
            $('.search_refine_btn').click(function(){
                openRefineMenu();
            });
		    
             //== OPEN MOBILE MENU
            $('.mobile_menu').css({'display':'block'});
            $('.mobile_menu_close').hide();
            
            $('.mobile_menu').click(function(){
                openMobileMenu();
            });
    	    
    	    //== CLOSE MOBILE/REFINE MENUS
            $('.mobile_menu_close').click(function(){
                //== REFINE MENU
                if($('.mobile_menu_close').hasClass('refine_menu_close')) {
	               closeMobileMenu();
	               closeRefineMenu(); 
                } 
                //== NORMAL MENU
                else {
	                closeMobileMenu();
                    $('#mobile_side_menu').removeClass('full_height');
                }
            });
            
            //== CLOSE REFINE MENU - SEARCH
            $('.search_refine_btn_active').click(function () {
                closeMobileMenu();
	            closeRefineMenu(); 
            });

            //== CLOSE REFINE MENU - SEARCH BG
            $('.search_refine_grey').click(function () {
                closeMobileMenu();
                closeRefineMenu();
            });
            
            //NEW MOBILE MENU
            $('.mobile_account').click(function(){
                $('.mobile_search').removeClass('active');
                $(this).toggleClass('active');
                $('#mobile_account_sub_menu').toggle();
                $('#mobile_search_sub_menu').hide();
            });
            
            $('.mobile_search').click(function(){
                $('.mobile_account').removeClass('active');
                $(this).toggleClass('active');
                $('#mobile_search_sub_menu').toggle();
                $('#mobile_account_sub_menu').hide();
                mobileMenuCloseReminders();
            });
	                          
        });
        
		//}
		
	        //NEW PAGE MENU
	        $('.mobile_menu_new ul li ul').hide();
	        $('.mobile_menu_new ul li h3').click(function() {
	            $(this).next('ul').slideToggle(arrow);
    					
	            function arrow(){
		            $(this).is(":visible") ? $(this).prev('h3').addClass('arrow') : 
		            $(this).prev('h3').removeClass('arrow');
	            }    	
	        });
    		
	        //HIDE MOBILE MENUS
	        $( window ).resize(function() {
                if ($(window).width() > 650) {
                   $('#mobile_account_sub_menu').hide();
                   $('#mobile_search_sub_menu').hide(); 
                }
            });
    		
            //== HIDE NOTIFICATION ROUNDAL IF EMPTY (SAVED CARDS)  
	        var savedcard_items = $('.notification.SC ').text();
            if ( savedcard_items == '0 ' || savedcard_items == null || savedcard_items == '' ) {
                $('.notification.SC').hide();
            }
            
            //== HIDE NOTIFICATION ROUNDAL IF EMPTY (DESKTOP)  
            var desktop_basket_items = $('#ctl00_uclHeader1_lblNoOfItems').text();
            var desktop_basket_items_trimmed = desktop_basket_items.replace(/\s+/g, '');

            if (desktop_basket_items_trimmed > '0') {
                $('.notification').css('opacity','1');
            }

            //== HIDE NOTIFICATION ROUNDAL IF EMPTY (MOBILE)  
            var basket_items = $('#ctl00_uclHeader1_lblNoOfItemsMob').text();
            var basket_items_trimmed = basket_items.replace(/\s+/g, '');

            if (basket_items_trimmed > '0') {
                $('.notification_roundal').show();
            }

	        
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
    		
            //== OPEN/CLOSE STICKY SEARCH
	        $('.fixed_menu_search_btn a').click(function() {
	            $('.new_search').addClass('fixed_search_on');
	        });

	        $('.fixed_menu_search_close_btn').click(function () {
	            $('.new_search').removeClass('fixed_search_on');
	        });

	        //== SEARCH WHEN YOU PRESS ENTER
	        
	        //SEARCH BAR TEXT REMOVE
	        function searchFieldValidation() {
                var searchValue = $('#ctl00_uclHeader1_tbSearch').val();
		        if ( searchValue == "I'm searching for..." || ($.trim( searchValue )).length==0 ) {
		            $('.search_tip_reveal').fadeIn();
		            //alert('type a search term');
		        }
		        else {$('#ctl00_uclHeader1_imageButtontomMenuSearch').trigger('click');}
		        //alert(searchValue);
            
	        }

	        function searchFieldValidationNEW() {
	            var searchValueNEW = $('#loop54-search-box').val();
	            if (searchValueNEW == "I'm searching for..." || ($.trim(searchValueNEW)).length == 0) {
	                $('.search_tip_reveal').fadeIn();
	                //alert('type a search term');
	            }
	            else { $('#loop54-search-button').trigger('click'); }
	            //alert(searchValue);

	        }
    		
	        //== FIXED NAV
	        $('input.fixed_nav_search').keypress(function(event){
              if(event.keyCode == 13){
                $('#ctl00_uclHeader1_imageButtontomFixedMenuSearch').trigger('click');
              }
            });
            
            //== MOBILE SEARCH
	        $('input.topMenuSearchText').keypress(function(event){
              if(event.keyCode == 13){
                $('#ctl00_uclHeader1_imageButtontomMobileSearch').click();
                event.preventDefault();
              }
	        });

	        $('#mobile_loop54search #loop54-search-box').keypress(function (event) {
	            if (event.keyCode == 13) {
	                $('#mobile_loop54search #loop54-search-button').trigger('click');
	                event.preventDefault();
	           } 
	        });
            
            // detect touch
           if(('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0)){
                  document.documentElement.className += " touch";
           }
           
           // CHECK IF FACEBOOK LOGIN EXISTS
           function FBSignOnExists() {
                if ($('.facebook_bday_list').length > 0){
                    $('#template_wrapper').addClass('fb_login');
                    //alert('Facebook Login Exists');
                }
           }

           FBSignOnExists();

           // MOBILE SHORTLIST
           $('.mobile_shortlist_holder .shortlist_icon').click(function () {
               $('.mobile_shortlist').fadeIn(300);
           });

           $('.mobile_shortlist_holder .closeShortlist').click(function () {
               $('.mobile_shortlist').fadeOut(300);
           });

           function CountSavedCardsMobile() {
               var CountSavedCardsCurrent = $('.mobile_shortlist ul li').length;
               if (CountSavedCardsCurrent >= '1') {
                   setTimeout(function () {
                       $('.shortlist_icon').show();
                       $('.shortlist_icon').html(CountSavedCardsCurrent);
                       $('.shortlist_icon').addClass('expandOpen'); 
                   }, 100);
                   setTimeout(function () {
                       $('.shortlist_icon').removeClass('expandOpen');
                   }, 500);

               }
               else {
                   $('.shortlist_icon').html();
                   $('.shortlist_icon').hide();
               }
           }

           if ( $('#mm_shortlist').val() == '1') {
               CountSavedCardsMobile();
           }

    

       //}
</script>

<script type="text/javascript" async >
    $(document).ready(function () {
        var fpCookies = function () {
            var FPB_val = Cookies.get('userTitleGroup');
            var FPCP_val = Cookies.get('FPCP');
            if (FPB_val != 1 && FPB_val != 2) {
                if (FPCP_val != 1) {
                    Cookies.set('FPCP', '1');
                    $('.fp_cookies').show();
                }
            }
        }
        fpCookies();
    });
</script>
     
</div>
     
<!--MOBILE MENU-->
<?php $this->load->view('common/mobilemenu.php'); ?>
<!--END MOBILE MENU-->

<script type="text/javascript">
//<![CDATA[
var Page_ValidationSummaries =  new Array(document.getElementById("ctl00_ContentPlaceHolder1_ValidationSummary1"));
var Page_Validators =  new Array(document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword"), document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms"));
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2.errormessage = "First Name field is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2.initialvalue = "";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1.errormessage = "First Name is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1.evaluationfunction = "CustomValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1.clientvalidationfunction = "CreateAccountCheck1";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3.errormessage = "Last Name field is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3.initialvalue = "";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2.errormessage = "Last Name is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2.evaluationfunction = "CustomValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2.clientvalidationfunction = "CreateAccountCheck2";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8.errormessage = "An email address is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8.initialvalue = "";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email.errormessage = "Wrong Email Address";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email.validationexpression = "\\w+([-+.\']\\w+)*(-)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9 = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9.errormessage = "A password is required";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9.initialvalue = "";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength.errormessage = "Your password must be longer than 5 characters";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength.validationexpression = "[^ \\t\\n\\r]{6,}";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.controltovalidate = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.errormessage = "Passwords do not match";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.evaluationfunction = "CompareValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.controltocompare = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword.controlhookup = "ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2";
var ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms = document.all ? document.all["ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms"] : document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms");
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms.errormessage = "Please tick the terms and conditions to proceed";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms.validationGroup = "vgCAddNew";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms.evaluationfunction = "CustomValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms.clientvalidationfunction = "AcceptTermsCheckBoxValidation";
var ctl00_ContentPlaceHolder1_ValidationSummary1 = document.all ? document.all["ctl00_ContentPlaceHolder1_ValidationSummary1"] : document.getElementById("ctl00_ContentPlaceHolder1_ValidationSummary1");
ctl00_ContentPlaceHolder1_ValidationSummary1.validationGroup = "vgCAddNew";
//]]>
</script>

<script type="text/javascript">
WebForm_InitCallback();
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}
function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
</script>
</form>