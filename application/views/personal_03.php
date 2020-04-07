<form method="post" action="home/personal" id="aspnetForm">
<script src="/assets/dist/frontend/ScriptResource.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/js/jquery-ui1.12.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/choco/mobile-style.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/choco/style.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />  
<meta name="keywords" content="Choose Delivery Method" />
<!--script type="text/javascript" src="/JS/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="/JS/jquery-migrate-3.0.1.min.js"></script-->
<script src="https://wchat.eu.freshchat.com/js/widget.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-144562062-1"></script-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  //gtag('config', 'UA-144562062-1');
</script>
<!--link href="/assets/dist/frontend/cardflow/blitzer/jquery-ui-1.8.17.custom.css" type="text/css" rel="stylesheet"/-->
<!--link href="/assets/dist/frontend/cardflow/content.css" type="text/css" rel="stylesheet" /-->
<!--link href="/assets/dist/frontend/cardflow/content_IE.css" type="text/css" rel="stylesheet" /-->
<!--link href="/assets/dist/frontend/cardflow/custom-font.css" type="text/css" rel="stylesheet" /-->
<link href="/assets/dist/frontend/cardflow/drag.css" type="text/css" rel="stylesheet" />
<!--link href="/assets/dist/frontend/cardflow/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet" /-->
<!--link href="/assets/dist/frontend/cardflow/jquery.fileupload-ui.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/cardflow/jquery.fileupload-ui-android.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/cardflow/jquery.fileupload-ui-IE.css" type="text/css" rel="stylesheet" /-->
<link href="/assets/dist/frontend/choco/enlarge.css" type="text/css" rel="stylesheet" />
<link href="/assets/dist/frontend/choco/common-style.css" type="text/css" rel="stylesheet" />
<meta name="description" content="Buy &amp; send a gift card along with any greetings card at BuddyWisher." />

<body>    
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATEFIELDCOUNT" id="__VIEWSTATEFIELDCOUNT" value="19" />
<input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>" />
<input type="hidden" name="page_stage" id="page_stage" value="<?php echo $data['page_stage'];?>" />
<input type="hidden" id="PAGE_PREPARE_STAGE" value="<?php echo $PAGE_PREPARE_STAGE;?>" />
<input type="hidden" id="PAGE_PERSONAL_STAGE" value="<?php echo $PAGE_PERSONAL_STAGE;?>" />
<input type="hidden" id="PAGE_CHOCO_STAGE" value="<?php echo $PAGE_CHOCO_STAGE;?>" />
<input type="hidden" id="PAGE_DELIV_STAGE" value="<?php echo $PAGE_DELIV_STAGE;?>" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="dfgre23:'o" />
</div>
<input type="hidden" name="ctl00$ScriptManager1" id="ctl00_ScriptManager1" />
<script type="text/javascript">
//if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
Sys.Application.setServerId("ctl00_ScriptManager1", "ctl00$ScriptManager1");
Sys.Application._enableHistoryInScriptManager();
</script>
<div class="aspNetHidden">
	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="<?php echo rand(100000,999999);?>" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="<?php echo "qwesdaaf24asfsdgffgr1se5t<rterto!";?>" />
</div>
<!--TEMPLATE WRAPPER STYLE-->	
<style>
    #template_wrapper {position:relative;}
    .superblockcss { display: block !important; }
    .supernonecss { display: none !important; }
    .manualAddressEntry{text-decoration: underline !important;}
</style>

<div id="mobile" class="clearfix"> 
    <div id="template_wrapper"><!--TEMPLATE WRAPPER-->
		<!-- HEADER -->
		<div id="newFlowHeader">
		    <div class="contentHolder clearfix">
		        <!-- SITE LOGO -->
		        <a href="home" class="logo left" title="title">
		            <img class="siteLogo" src="/assets/dist/images/logo.png">
		            <!--div class="link_text_promp">Go to homepage</div-->
		        </a>
		        <!-- FLOW PROGRESS -->
		        <ul class="FlowProgressBar right">
		            <li class="active"><div>Welcome/Register</div><span></span></li>
		            <li><div>Delivery</div><span></span></li>
		            <li><div>Basket</div><span></span></li>
		            <li><div>Payment</div><span></span></li>
		        </ul>
		    </div>
		</div>
		<div id="fb-root"></div>
		<input type="hidden" id="hidden_card_total_Count" value="<?php echo $hidden_card_total_Count;?>" />
		<input name="ctl00$ContentPlaceHolder1$hidden_main_section" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_main_section" value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_main_section'];?>" /><!-- Choose delivery method = A | Select a postage date and option = P | Edit selected Delivary Address = E -->
		<input name="ctl00$ContentPlaceHolder1$hidden_selected_delivery_type" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_delivery_type" value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type'];?>"/><!-- Back to me = B | Direct = D -->
		<input name="ctl00$ContentPlaceHolder1$hidden_selected_delivery_type_ischange" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_delivery_type_ischange"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type_ischange'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_is_address_select" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_is_address_select"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_is_address_select'];?>"/><!-- YES = 1 | NO = 0 or NULL -->
		<input name="ctl00$ContentPlaceHolder1$hidden_selected_address" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_address"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_selected_address'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_selected_address_country" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_address_country"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_selected_address_country'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_current_active_product" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_current_active_product"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_current_active_product'];?>"/>

		<input name="ctl00$ContentPlaceHolder1$hidden_potage_despatch_selected_date" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_potage_despatch_selected_date"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_potage_despatch_selected_date'];?>" />
		<input name="ctl00$ContentPlaceHolder1$hidden_potage_despatch_customer_selected_date" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_potage_despatch_customer_selected_date"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_potage_despatch_customer_selected_date'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_potage_delivery_customer_selected_date"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_potage_donotopen_selected_date" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_potage_donotopen_selected_date"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_potage_donotopen_selected_date'];?>"/>

		<input name="ctl00$ContentPlaceHolder1$hidden_validation_iscardhascontent" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_validation_iscardhascontent"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_validation_iscardhascontent'];?>""/>
		<input name="ctl00$ContentPlaceHolder1$hidden_validation_multidirect" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_validation_multidirect"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_validation_multidirect'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_validation_highstreet_direct_avoid" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_validation_highstreet_direct_avoid"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_validation_highstreet_direct_avoid'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_validation_weddingstationary_direct_avoid" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_validation_weddingstationary_direct_avoid"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_validation_weddingstationary_direct_avoid'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_validation_delivery_not_available_for_selected_country" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_validation_delivery_not_available_for_selected_country"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_validation_delivery_not_available_for_selected_country'];?>"/>

		<input name="ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_delivery_method_change"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_special_postage_message" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_special_postage_message"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_special_postage_message'];?>"/>
		<input name="ctl00$ContentPlaceHolder1$hidden_special_postage" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_special_postage"  value="<?php echo $data['ctl00$ContentPlaceHolder1$hidden_special_postage'];?>"/>

		<input type="hidden" id="letter_drop" name="letter_drop"  value="<?php echo $data['letter_drop'];?>"/>
		<input type="hidden" id="current_user" value="<?php echo $current_user;?>" />
		<input type="hidden" name="ctl00$ContentPlaceHolder1$detect_mobile_vp" id="ctl00_ContentPlaceHolder1_detect_mobile_vp"  value="<?php echo $data['ctl00$ContentPlaceHolder1$detect_mobile_vp'];?>"/>

		<!-- BASKET FLOW LEAVE WARNING -->
		<div class="LogOutWarning deliveryOptionsPage" style="display:none;">
		    <div id="LogOutWarningContent">
		        <div class="popUpCloseBtn"><span></span><span></span></div>
		        <h1>Your item is not yet in the Basket</h1>
		        <p>Please add an address and choose a delivery option to save your order in the basket.</p>
		        <a href="/" class="flowGreyBtn left">Leave</a>
		        <a class="flowPurpleBtn right">Continue</a>
		    </div>
		</div>

		<!-- NO CARD INSIDE TEXT POPUP -->
		<div class="validation_error_wrapper CardError1" style="display:none;">
		    <div class="CardErrorContents">
		        <h1>Warning!</h1>
		        <p><strong>WARNING</strong> the card you are sending has <strong>NO text inside</strong>. Please go back and amend or send Back to Yourself</p>
		        <a class="flowPurpleBtn" onclick="CloseCardErrorPopUp();">OK</a>
		    </div>
		</div>

		<!-- MULTIPLE CARD ORDER POPUP -->
		<div class="validation_error_wrapper CardError2" style="display:none;">
		    <div class="CardErrorContents">
		        <h1>Warning!</h1>
		        <p><strong>WARNING</strong> this option is not available as you have selected a multiple quantity of the same product. Please select <strong>Back to Yourself</strong></p>
		        <a class="flowPurpleBtn" onclick="CloseCardErrorPopUp();">OK</a>
		    </div>
		</div>

		<div class="validation_error_wrapper CardError3" style="display:none;">
		    <div class="CardErrorContents">
		        <h1>Warning!</h1>
		        <p><strong>WARNING</strong> this option is not available as you have selected high street card. Please select <strong>Back to Yourself</strong></p>
		        <a class="flowPurpleBtn" onclick="CloseCardErrorPopUp();">OK</a>
		    </div>
		</div>

		<div class="validation_error_wrapper CardError4" style="display:none;">
		    <div class="CardErrorContents">
		        <h1>Warning!</h1>
		        <p><strong>WARNING</strong> this option is not available for this product. Please select <strong>Back to Yourself</strong></p>
		        <a class="flowPurpleBtn" onclick="CloseCardErrorPopUp();">OK</a>
		    </div>
		</div>



		<div class="SpecialPostageOption" style="display:none;">
		    <div class="CardErrorContents">
		        <h1>Get <i>SPEEDY</i> delivery!</h1>
		        <p>Need your card soon? We can post it today for only <strong>99p</strong> or you can choose another day from 70p.</p>
		        <a class="flowPurpleBtn no_speedy_delivery" onclick="CloseCardErrorPopUp();">Choose another</a>
		        <a class="flowPurpleBtn yes_speedy_delivery" onclick="SetPostage('');">Post it today</a>
		    </div>
		</div>

		<div id="common_message_wrapper" class="CardError2" style="display:none;"></div>
		<!--CONTENT-->
		<div id="wrapper_main" class="MainContent mm_CAT_camp" data-prod-id="prodID_20">
		    <!-- PAGE LOADER -->
		    <div id="wraper_waiting_effect" style="display:none;">
		        <div class="wraper_waiting_effect_holder">
		            <div class="circle">&nbsp;</div>
		            <div class="circle">&nbsp;</div>
		            <div class="circle">&nbsp;</div>
		            <div class="circle">&nbsp;</div>
		        </div>
		    </div>
		    <div id="wrapper_choose_delivery_method">    
		    	<div id="ctl00_ContentPlaceHolder1_wrapper_choose_delivery_method_body_active">
		            <div id="container_choose_delivery_method_selection" class="contentHolder clearfix">
		                <h1>1. Choose Delivery Method</h1>
		                <!-- SEND BACK TO ME --> 
		                <div id="btn_send_to_me" class="deliveryOption left" style="display: block;" onclick="javascript:clickBackToMe();">
		                    <div class="purpleTop"></div>
		                    <h2 style="width: 92%;">Send back to yourself to sign</h2>
		                    <p><span id="ctl00_ContentPlaceHolder1_lblBacktoMe" class="envelope_label">With extra envelope(s)</span></p>
		                </div>
		                <div style="display: none;" class="CenterGap left"></div>
		            
		                <!-- SEND DIRECT --> 
		                <div style="display: block;" id="btn_send_to_direct" class="deliveryOption right" onclick="javascript:clickDirect();">
		                    <div class="purpleTop"></div>
			                <h2>Send it direct to their door</h2>
		                    <p><span id="ctl00_ContentPlaceHolder1_lblDirectTo" class="envelope_label_direct">NO EXTRA ENVELOPES INCLUDED</span></p>
		                </div>
		            </div>
		            <!-- CONTACT AND ADDRESSES -->
		            <div class="contentHolder clearfix">                
		                <div class="deliveryStage clearfix">
		                    <!-- ADDRESS ADD/EDIT FORM -->
		                    <div id="form_edit_addresses" style="display:none;">
		                        <div class="AddressListHeader">
		                            <h2 class="left">Send to:</h2>
		                        </div>            
		                        
		                        <div class="NC_AddressLookUp clearfix">
		                            <input type="hidden" id="form_add_edit_addresses_ctr_hid_mode" name="form_add_edit_addresses_ctr_hid_mode" />
		                            <input type="hidden" id="form_add_edit_addresses_ctr_hid_address_id" name="form_add_edit_addresses_ctr_hid_address_id" />
		                            <input type="hidden" id="form_add_edit_addresses_ctr_hid_contact_id" name="form_add_edit_addresses_ctr_hid_contact_id" />
		                            
		                            <div class="FieldHolder PostCodeLook left">
		                                <label for="postcodeSearch">Post code:</label>
		                                <input type="text" id="form_add_edit_addresses_ctr_text_postcode" name="form_add_edit_addresses_ctr_text_postcode" placeholder="enter postcode" maxlength="50" />
		                                <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickPostCodeLookUpInAddressForm();">Look up address</a>
		                                <a class="manualAddressEntry" href="javascript://" onclick="javascript:clickEnterAddressManually();">Click to enter address manually</a>
		                            </div>
		                            
		                            <div id="NC_PostCodeLookUpHelpMessage" class="postCodeLookForm left">
		                                <div class="tip"><img src="/assets/dist/images/tip_edge.png" />Find the address quicker with our post code look up feature</div>
		                            </div>

		                            <div id="form_edit_addresses_body_address_list" class="postCodeLookForm right"></div>
		                            <div id="form_edit_addresses_body_address" class="postCodeLookForm right" style="display:none;">
		                                <!-- CONTACT NAME --> 
		                                <div id="form_edit_addresses_body_address_name" class="FieldHolder">
		                                    <label>Name:</label> 
		                                    <div class="TitleNameSurname left">
		                                        <select id="form_add_edit_addresses_ctr_select_title" class="left" name="form_add_edit_addresses_ctr_text_title" placeholder="title">
		                                            <option value="Mr">Mr</option>
		                                            <option value="Mrs">Mrs</option>
		                                            <option value="Miss">Miss</option>
		                                            <option value="Ms">Ms</option>
		                                            <option value="Dr">Dr</option>
		                                            <option value="Prof">Prof</option>
		                                            <option value=""></option>
		                                        </select>                    
		                                        <input type="text" id="form_add_edit_addresses_ctr_text_firstname" class="left" name="form_add_edit_addresses_ctr_text_firstname" placeholder="first name" />
		                                        <input type="text" id="form_add_edit_addresses_ctr_text_lastname" class="left" name="form_add_edit_addresses_ctr_text_lastname" placeholder="last name" />
		                                    </div>
		                                </div>
		                                <!-- ADDRESS LINE 1 -->
		                                <div class="FieldHolder">
		                                    <label>Address Line 1*:</label>
		                                    <input type="text" id="form_add_edit_addresses_ctr_text_addressline1" name="form_add_edit_addresses_ctr_text_addressline1" maxlength="50" placeholder="Address Line 1" />
		                                </div>
		                                <!-- ADDRESS LINE 2 -->
		                                <div class="FieldHolder">
		                                    <label>Address Line 2:</label>
		                                    <input type="text" id="form_add_edit_addresses_ctr_text_addressline2" name="form_add_edit_addresses_ctr_text_addressline2" maxlength="50" placeholder="Address Line 2" />
		                                </div>
		                                <!-- CITY -->
		                                <div class="FieldHolder shorter">
		                                    <label>City*:</label>
		                                    <input type="text" id="form_add_edit_addresses_ctr_text_city" name="form_add_edit_addresses_ctr_text_city" maxlength="50" placeholder="city" />
		                                </div>
		                                <!-- COUNTY -->
		                                <div class="FieldHolder shorter">
		                                    <label>County:</label>
		                                    <input type="text" id="form_add_edit_addresses_ctr_text_county" name="form_add_edit_addresses_ctr_text_county" maxlength="50" placeholder="county" />
		                                </div>
		                                <!--COUNTRY-->
		                                <div class="FieldHolder shorter">
		                                    <label>Country*:</label>
		                                    <select name="ctl00$ContentPlaceHolder1$form_add_edit_addresses_ctr_select_country" id="ctl00_ContentPlaceHolder1_form_add_edit_addresses_ctr_select_country">
											<?php 
											foreach ($data['countries'] as $country) {
												if($data['ctl00$ContentPlaceHolder1$form_add_edit_addresses_ctr_select_country']==$country['names'])echo "<option selected>{$country['names']}</option>";
												else echo "<option>{$country['names']}</option>";
											}
											?>
											</select>
		                                </div>

		                                <!-- ADDRESS NAME -->     
		                                <div id="form_edit_addresses_body_address_address_name" class="FieldHolder shorter">
		                                    <label for="form_add_edit_addresses_ctr_text_addressname">Address Name:</label>
		                                    <input type="text" id="form_add_edit_addresses_ctr_text_addressname" name="form_add_edit_addresses_ctr_text_addressname" placeholder="My Home Address" />
		                                </div>

		                                <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickDeliverToThisAddressInFormEdit();" id="form_add_edit_addresses_ctr_a_save"><span class="DesktopLabel">Deliver to this Address</span><span class="MobileLabel">Select</span></a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div id="container_choose_delivery_method_my_addresses" class="deliveryStage clearfix"></div>
                		<div id="container_choose_delivery_method_my_contacts" class="deliveryStage clearfix"></div>
                	</div>
                </div>
                <!-- INACTIVE SECTION -->  
            </div>

            <!-- POSTAGE DATE AND OPTIONS -->
		    <div id="wrapper_select_postage_date_and_option">               
		        
		        
		        <!-- INACTIVE SECTION -->
		        <div id="ctl00_ContentPlaceHolder1_wrapper_select_postage_date_and_option_body_inactive">
		            <div class="contentHolder clearfix">            
		                <h1>2. Select a postage date and option</h1>
		            </div>
		            
		            <!-- BACK BUTTON -->
		            <div class="contentHolder backAndContinue clearfix">
		                <a class="flowGreyBtn left" href="javascript://" onclick="javascript:clickBack();" id="A1">Back</a>
		            </div>
		        </div>            
		    </div>

		    <!-- POPUP VIEWS-->    
		    <div id="popup_add_edit_addresses" style="display:none;">
		        <div class="popup_holder">
		            <input type="hidden" id="popup_add_edit_addresses_ctr_hid_mode" name="popup_add_edit_addresses_ctr_hid_mode" />
		            <input type="hidden" id="popup_add_edit_addresses_ctr_hid_address_id" name="popup_add_edit_addresses_ctr_hid_address_id" />
		            <input type="hidden" id="popup_add_edit_addresses_ctr_hid_contact_id" name="popup_add_edit_addresses_ctr_hid_contact_id" />
		            <!-- POPUP HEADING -->
		            <div id="popup_add_edit_addresses_heading">
		                <div id="popup_add_edit_addresses_heading_content"></div>
		                <div class="popUpCloseBtn"><span></span><span></span></div>
		            </div>
		            <!-- POSTCODE SEARCH LINE -->
		            <div class="popup_add_edit_addresses_body_postcode_search">
		                <label for="popup_add_edit_addresses_ctr_text_postcode" class="mm_CAT">Use the post code look up feature. <span class="highlight_purple">Sending abroad? Enter the address manually.</span></label>
		                <div class="postcodeSearchLine">
		                    <label for="popup_add_edit_addresses_ctr_text_postcode" class="mm_hide">Post code:</label>
		                    <input type="text" class="mm_CAT" id="popup_add_edit_addresses_ctr_text_postcode" name="popup_add_edit_addresses_ctr_text_postcode" placeholder="post code" maxlength="50" />
		                    <a class="flowPurpleBtn mm_CAT" href="javascript://" onclick="javascript:clickPostCodeLookUpInAddressPopup();">Look up address</a>
		                </div>
		                <div class="mm_CAT lbl_or">OR</div>
		                <a class="manualAddressEntry mm_hide" href="javascript://" onclick="javascript:clickEnterAddressManuallyPopup();">Click to enter address manually</a>
		                <a class="manualAddressEntry mm_CAT" href="javascript://" onclick="javascript:clickEnterAddressManuallyPopupMM_CAT();">Enter Address Manually</a>
		            </div>

		            <!-- ADDRESS LOOKUP BOX -->
		            <div id="popup_add_edit_addresses_body_address_list"></div>     
		            <!-- ADDRESS FORM -->
		            <div id="popup_add_edit_addresses_body_address">
		                <!-- CONTACT NAME --> 
		                <div id="popup_add_edit_addresses_body_address_name" class="AddAddressFromLine">
		                    <label>Name:</label> 
		                    <div class="TitleNameSurname">
		                        <select id="popup_add_edit_addresses_ctr_select_title" name="popup_add_edit_addresses_ctr_text_title" placeholder="title">
		                            <option value="Mr">Mr</option>
		                            <option value="Mrs">Mrs</option>
		                            <option value="Miss">Miss</option>
		                            <option value="Ms">Ms</option>
		                            <option value="Mr & Mrs">Mr & Mrs</option>
		                            <option value="Dr">Dr</option>
		                            <option value="Prof">Prof</option>
		                            <option value=""></option>
		                        </select>                    
		                        <input type="text" id="popup_add_edit_addresses_ctr_text_firstname" name="popup_add_edit_addresses_ctr_text_firstname" maxlength="50" placeholder="first name" />
		                        <input type="text" id="popup_add_edit_addresses_ctr_text_lastname" name="popup_add_edit_addresses_ctr_text_lastname" maxlength="50" placeholder="last name" />
		                    </div>
		                </div>

		                <!-- ADDRESS LINE 1 -->
		                <div class="AddAddressFromLine">
		                    <label>Address Line 1*:</label>
		                    <input type="text" id="popup_add_edit_addresses_ctr_text_addressline1" name="popup_add_edit_addresses_ctr_text_addressline1" maxlength="50" placeholder="Address Line 1" />
		                </div>
		                <!-- ADDRESS LINE 2 -->
		                <div class="AddAddressFromLine">
		                    <label>Address Line 2:</label>
		                    <input type="text" id="popup_add_edit_addresses_ctr_text_addressline2" name="popup_add_edit_addresses_ctr_text_addressline2" maxlength="50" placeholder="Address Line 2" />
		                </div>
		                <!-- CITY -->
		                <div class="AddAddressFromLine">
		                    <label>City*:</label>
		                    <input type="text" id="popup_add_edit_addresses_ctr_text_city" name="popup_add_edit_addresses_ctr_text_city" maxlength="50" placeholder="city" />
		                </div>
		                <!-- COUNTY -->
		                <div class="AddAddressFromLine mm_CAT_county">
		                    <label>County:</label>
		                    <input type="text" id="popup_add_edit_addresses_ctr_text_county" name="popup_add_edit_addresses_ctr_text_county" maxlength="50" placeholder="county" />
		                </div>
		                <div class="AddAddressFromLine mm_CAT_postcode">
		                    <label>Post Code:</label>
		           
		                </div>

		                <!-- COUNTRY -->
		                <div class="AddAddressFromLine">
		                    <label>Country*:</label>
		                    <select name="ctl00$ContentPlaceHolder1$popup_add_edit_addresses_ctr_select_country" id="ctl00_ContentPlaceHolder1_popup_add_edit_addresses_ctr_select_country">
							<?php 
							foreach ($data['countries'] as $country) {
								if($data['ctl00$ContentPlaceHolder1$popup_add_edit_addresses_ctr_select_country']==$country['names'])echo "<option selected>{$country['names']}</option>";
								else echo "<option>{$country['names']}</option>";
							}
							?>
							</select>
		                </div>

		                <!-- ADDRESS NAME -->     
		                <div id="popup_add_edit_addresses_body_address_address_name" class="AddAddressFromLine">
		                    <label>Address Name:</label>
		                    <input type="text" id="popup_add_edit_addresses_ctr_text_addressname" name="popup_add_edit_addresses_ctr_text_addressname" placeholder="Address Name" />
		                </div>
		                
		                <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickAddThisAddressPopup();" id="popup_add_edit_addresses_ctr_a_save"></a>
		            </div>
		        </div>
		    </div>

		    <div class="CalendarDatePicker_error">
		        <div id="CalendarDatePicker_errorContent">
		            <h1>Sorry, you cannot select this date</h1>
		            <p>Please click OK and choose another date.</p>
		            <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickChangeDateDispatch();">OK</a>
		        </div>
		    </div>
		    
		    <div id="popup_common_datepicker" style="display:none;">
		       <div class="popup_common_datepicker_holder">
		            <div class="popUpCommonDatepickerCloseBtn"><span></span><span></span></div>
		            <div id="wrapper_popup_common_datepicker"></div>
		      </div>
		    </div>

		</div>
		<script type="text/javascript" src="/assets/dist/frontend/delivery_wrapper.js"></script> 
    </div>
    <!-- COMMON JQUERY -->
    
    <script type="text/javascript">
    
// LEAVE BASKET POPUP
$('.logo').click(function(){
    $('.LogOutWarning').show();
});
    // CLOSE 'LEAVE BASKET' POPUP
    $('#LogOutWarningContent .flowPurpleBtn').click(function(){
        $('.LogOutWarning').fadeOut(200);
    });
        
    $('#LogOutWarningContent .popUpCloseBtn').click(function(){
        $('.LogOutWarning').fadeOut(200);
    });

    var currentURL = document.location.href;
    var checkREG = currentURL.indexOf('CustomerAdd') > -1;
    var checkREGsocial = currentURL.indexOf('CustomerAdd') > -1;
    if (checkREG || checkREGsocial) {
        sessionStorage.checkReg = 1;
    }
   
    // MOBILE FLOW ACTIVE STATE
    $('.FlowProgressBar li.active:last').addClass('current_active');

    // COPYRIGHT DATE //
    $("#year").text((new Date).getFullYear());

    </script>
    <!-- COMMON JQUERY -->
</div>
<!--MOBILE MENU-->
<?php $this->load->view('common/mobilemenu.php'); ?>
</form>

<!-- Remarketing Tag-->
<script type="text/javascript">
    var google_tag_params = {
        ecomm_prodid: '',
        ecomm_pagetype: 'other',
        ecomm_totalvalue: '',
    };
</script>
<!-- Google Code for Remarketing Tag --
 http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1048322468;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<!--img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1048322468/?value=0&amp;guid=ON&amp;script=0"/-->
</div>
</noscript> 
<!-- End Remarketing Tag-->
<!-- CS Tag-->

<script type="text/javascript">
(function () {
  window._uxa = window._uxa || [];
  try{
    if (typeof dataLayer !== 'undefined'){
        for (var i=0; i<dataLayer.length; i++){
            if (typeof dataLayer[i].pageCategory !== undefined){
                window._uxa.push(['setCustomVariable', 1, 'Page Category', dataLayer[i].pageCategory, 3]);
            }
        }
    }
  }
  catch(error){}
  if (typeof CS_CONF === 'undefined') {
    window._uxa.push(['setPath', window.location.pathname+window.location.hash.replace('#','?__')]);
    var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
    mt.src = "//t.contentsquare.net/uxa/2cb7e78297509.js";
    document.getElementsByTagName("head")[0].appendChild(mt);
  }
  else {
    window._uxa.push(['trackPageview', window.location.pathname+window.location.hash.replace('#','?__')]);
  }
})();

</script> 
<!-- End CS Tag-->
<!-- AF Tag-->

<script>
(function(w,e,b,g,a,i,n,s){w['ITCLKOBJ']=a;w[a]=w[a]||function(){(w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();i=e.createElement(b),n=e.getElementsByTagName(b)[0];i.async=1;i.src=g;n.parentNode.insertBefore(i,n)})(window,document,'script','https://analytics.webgains.io/clk.min.js','ITCLKQ');
ITCLKQ('set', 'internal.cookie', true);
ITCLKQ('set', 'internal.api', true);
ITCLKQ('click');
</script> 
<!-- End AF Tag-->
<!-- Freshchat integration -->
<!-- Twitter Tracking-->
<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o1wc3');
twq('track','PageView');
</script>