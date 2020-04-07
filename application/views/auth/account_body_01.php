<input name="ctl00$ContentPlaceHolder1$hidden_selected_delivery_type" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_selected_delivery_type" value="B" />
<input name="ctl00$ContentPlaceHolder1$hidden_highstreet_backurl" type="hidden" id="ctl00_ContentPlaceHolder1_hidden_highstreet_backurl" />

<style type="text/css">
.address_box {
    width: 99%;
}
#CalendarDatePicker_errorContent h1, #LogOutWarningContent h1, .CardErrorContents h1, .popup_holder h1 {
    padding: 12px 5%;
    width: 100%;
}
</style>
<div id="common_message_wrapper" class="CardError2" style="display:none;"></div>

<!-- END PAGE TITLE AND BUTTON SPACE -->
<div id="wrapper_whole" class="clearfix"><!--WRAPPER-->
    
    <!-- TOP PURPLE SECTION -->


    <div class="content_wrapper myAccount_wrappper clearfix">
    	<div class="tabs_reminders">
	        <div class="myaccount_header" id="#reminders">My Addresses</div>
	        <div class="ViewOptionsRight">
                <!-- CHANGE VIEW -->
                <div class="changeView">
                    <p>change view:</p>
                    <div class="blockView left">
                        <span></span><span></span>
                    </div>
                    <div class="lineView selectedView left">
                        <span></span><span></span>
                    </div>
                </div>
            </div>
	    </div>

	    <div id="mycontacts_left" class="address_wrapper">
            <!-- ADDRESS LIST -->
            <div id="container_choose_delivery_method_my_addresses" class="clearfix">        	
    		</div>   
        </div>
        
        <!-- ADD ADDRESS BTN -->
        <a class="bottomGreyButton addNewAddress" href="javascript://" onclick="javascript:clickAddNewAddress();" >+ Add New Address</a>
    </div>
</div>

<!-- POPUP VIEWS-->    
<div id="popup_add_edit_addresses" style="display:none;">
    <div class="AddContactPopContent">
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
            <div class="postcodeSearchLine">
                <label for="popup_add_edit_addresses_ctr_text_postcode">Post code:</label>
                <input type="text" id="popup_add_edit_addresses_ctr_text_postcode" name="popup_add_edit_addresses_ctr_text_postcode" placeholder="post code" maxlength="50" />
                <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickPostCodeLookUpInAddressPopup();">Look up address</a>
            </div>
            <a class="manualAddressEntry" href="javascript://" onclick="javascript:clickEnterAddressManuallyPopup();">Click to enter address manually</a>
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
            <div class="AddAddressFromLine">
                <label>County:</label>
                <input type="text" id="popup_add_edit_addresses_ctr_text_county" name="popup_add_edit_addresses_ctr_text_county" maxlength="50" placeholder="county" />
            </div>
            <!-- COUNTRY -->
            <div class="AddAddressFromLine lastField">
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
            <div id="popup_add_edit_addresses_body_address_address_name" class="AddAddressFromLine lastField AddressName">
                <label>Address Name:</label>
                <input type="text" id="popup_add_edit_addresses_ctr_text_addressname" name="popup_add_edit_addresses_ctr_text_addressname" placeholder="Address Name" />
            </div>
            
            <a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickAddThisAddressPopup();" id="popup_add_edit_addresses_ctr_a_save"></a>
        </div>            
    </div>
</div>

<script type="text/javascript">
var global_obj_address_default_values = {"select_title":"Mr","text_firstname":"First Name *","text_lastname":"Surname *","text_addressline1":"Address Line 1 *","text_addressline2":"Address Line 1","text_city":"City *","text_county":"County","text_postcode":"Post Code *","select_country":"United Kingdom"};

function initializePage() {  
    getAddresses($("input[id$='hidden_selected_delivery_type']").val(), "");
}

function getCallServerMethod(page, method, data, callback, callbackparam) {
    setWaiting(true);
    var default_page = "/delivery";
    //console.log(page + " - " + method + " - " + data + " - " + callback + " - " + callbackparam);
    //alert('!!!='+page + " - " + method + " - " + data + " - " + callback + " - " + callbackparam);
    $.ajax({
        type: "POST",
        url: ((page.length>0) ? page : default_page) + "/" + method,
        data: data,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function(jqXHR, textStatus) {
            setWaiting(false);
            setMessage(true, 'Error occure while calling Server method ' + method, "");
            return;
        },        
        success: function(msg) {
            setWaiting(false);
            switch(callback)
            {
                case "setAddress":
                {
                    setAddress(msg.d, callbackparam);
                    break;
                }
                case "listAddressesRelatedToPostcodeInPopup":
                {
                    listAddressesRelatedToPostcodeInPopup(msg.d);
                    break;
                }
                case "listAddressesRelatedToPostcodeInForm":
                {
                    listAddressesRelatedToPostcodeInForm(msg.d);
                    break;
                }
                case "displayResutsOfAddressSavePopup":
                {
                    displayResutsOfAddressSavePopup(msg.d);
                    break;
                }
                case "displayResutsOfAddressSaveForm":
                {
                    displayResutsOfAddressSaveForm(msg.d);
                    break;
                }
                case "setResultSelectedDispathDate":
                {
                    setResultSelectedDispathDate(msg.d, callbackparam);
                    break;
                }
                case "setEstimatedDeliveryDate":
                {
                    setEstimatedDeliveryDate(msg.d);
                    break;
                }
                case "setResultSelectedDeliveryDate":
                {
                    setResultSelectedDeliveryDate(msg.d, callbackparam);
                    break;
                }
                case "displayResutsOfAddressDelete":
                {
                    displayResutsOfAddressDelete(msg.d);
                    break;
                }
                default:
                {
                    break;
                }
            }            

        }
    });   
}

function validateAddressForm(origin) {
    var common_control_name = '';
    switch(origin) 
    {
        case "P": // Popup
        {
            common_control_name = 'popup_add_edit_addresses_ctr_';
            break;
        }
        case "F": // Form
        {
            common_control_name = 'form_add_edit_addresses_ctr_';
            break;
        }
    }
        
    if($("#" + common_control_name + "text_addressline1").val() == "" || $("#" + common_control_name + "text_addressline1").val() == global_obj_address_default_values.text_addressline1) {
        $("#" + common_control_name + "text_addressline1").focus();
        $("#" + common_control_name + "text_addressline1").addClass('AddressFieldNotComplete');
        removeRedOutline();
        //setMessage(true, "Please enter Address Line 1", "");
        return false;
    }
    
    if($("#" + common_control_name + "text_city").val() == "" || $("#" + common_control_name + "text_city").val() == global_obj_address_default_values.text_city) {
        $("#" + common_control_name + "text_city").focus();
        $("#" + common_control_name + "text_city").addClass('AddressFieldNotComplete');
        removeRedOutline();
        //setMessage(true, "Please enter City", "");
        return false;
    }
    
    if($("select[id$='" + common_control_name + "select_country']").val() == "United Kingdom")
    {
        if ($("#" + common_control_name + "text_postcode").val() == "" || $("#" + common_control_name + "text_postcode").val() == global_obj_address_default_values.text_postcode || $("#" + common_control_name + "text_postcode").val().length < 5) {
            $("#" + common_control_name + "text_postcode").focus();
            $("#" + common_control_name + "text_postcode").addClass('AddressFieldNotComplete');
            removeRedOutline();
            //setMessage(true, "Please enter Post Code", "");
            return false;
        }
    }
    
    if($("select[id$='" + common_control_name + "select_country']").val() == "" || $("select[id$='" + common_control_name + "select_country']").val() == undefined) {
        $("select[id$='" + common_control_name + "select_country']").focus();
        $("select[id$='" + common_control_name + "select_country']").addClass("AddressFieldNotComplete");
        removeRedOutline();
        //setMessage(true, "Please select country", "");
        return false;
    }    
    
    return true;
}

function updateAddress(origin, callback) {
    var common_control_name = '';
        
    switch(origin) 
    {
        case "P": // Popup
        {
            common_control_name = 'popup_add_edit_addresses_ctr_';                                   
            break;
        }
        case "F": // Form
        {
            common_control_name = 'form_add_edit_addresses_ctr_';
            break;
        }
    }
    
    var userId = $('#current_user').val(); 
    var deliveryType = $("input[id$='hidden_selected_delivery_type']").val(); 

    var mode = $("#" + common_control_name + "hid_mode").val();
    var addressId = $("#" + common_control_name + "hid_address_id").val(); 
    var contactId = $("#" + common_control_name + "hid_contact_id").val();    
    
    var title = '';
    var firstName = '';
    var lastName = '';
    var fullName = '';
    
    if(deliveryType == "D") {
        title = $("#" + common_control_name + "select_title").val();
        firstName = $("#" + common_control_name + "text_firstname").val().replace("'", "");
        lastName = $("#" + common_control_name + "text_lastname").val().replace("'", "");    
        fullName = title + ' ' + firstName + ' ' +lastName;
    } else {
        fullName = $("#" + common_control_name + "text_addressname").val().replace("'", "");
    }
    
    var addressLine1 = $("#" + common_control_name + "text_addressline1").val().replace("'", "");
    var addressLine2 = ($("#" + common_control_name + "text_addressline2").val() == global_obj_address_default_values.text_addressline2) ? "" : $("#" + common_control_name + "text_addressline2").val().replace("'", "");
    var city = $("#" + common_control_name + "text_city").val().replace("'", "");
    var county = ($("#" + common_control_name + "text_county").val() == global_obj_address_default_values.text_county) ? "" : $("#" + common_control_name + "text_county").val().replace("'", "");
    var postcode = $("#" + common_control_name + "text_postcode").val().replace("'", "");
    var country = $("select[id$='" + common_control_name + "select_country']").val();
    var method = "UpdateAddress";
    var data = '{"userId":"' + userId + '", "deliveryType":"' + deliveryType + '","mode":"' + mode + '","addressId":"' + addressId + '","contactId":"' + contactId + '", "title":"' + title + '", "firstName":"' + firstName + '","lastName":"' + lastName + '","fullName":"' + fullName + '","addressLine1":"' + addressLine1 + '","addressLine2":"' + addressLine2 + '", "city":"' + city + '","county":"' + county + '","postcode":"' + postcode + '","country":"' + country + '"}';
    
    getCallServerMethod("", method, data, callback);
}

function deleteAddress(addressid) {
    var method = "DeleteAddress";
    var data = "{\"addressId\":\"" + addressid + "\"}";
    getCallServerMethod("", method, data, "displayResutsOfAddressDelete");
}

function getAddresses(type, letter) {
    var method = "GetAddresses";
    var data = '{"selectedDeliveryType": "' + type + '","userId":"'+$('#current_user').val()+'","letter":"' + letter + '"}';
    getCallServerMethod("", method, data, "setAddress", letter);      
}

function getAddressesUsingPostCode(postcode, callback) {
    var method = "GetAddressUsingPostcode";
    var data = '{"postcode": "' + postcode + '"}';    
    getCallServerMethod("", method, data, callback);    
}

function setAddress(result, letter) {    
    clearAddressScreen();
    switch($("input[id$='hidden_selected_delivery_type']").val())
    {
        case "B":
        {
            $("#container_choose_delivery_method_my_addresses").html(getMyAddressListHtml(result));
            break;
        }
        default: { break; }
    }
}

function getMyAddressListHtml(data) {
    //console.log(data);
    var contact_html = "";
      
    //EXISTING CUSTOMER - ADDRESS LIST
    contact_html += '<div class="AddressList">';
//    contact_html += '<div class="AddressListHeader">';
//    contact_html += '<h2 class="left">Your Addresses</h2>';
//    contact_html += '<a href="javascript://" class="AddNewAddressLink right" onclick="javascript:clickAddNewAddress()">+Add New Address</a>';
//    contact_html += '</div>';
    
    var is_having_addresses = false;
    
    if(data!="") {
        var address_line_html;
        var addressList = eval(data);    
        
        for (i = 0; i < addressList.length; i++) {
            is_having_addresses = true;
        
            var title = '';
            var address_id = addressList[i].AddressID;
            var full_name = addressList[i].FullName;
            var address_line1 = addressList[i].Line1;
            var address_line2 = addressList[i].Line2;
            var city = addressList[i].City;
            var county = addressList[i].County;
            var country = addressList[i].Country;
            var postcode = addressList[i].PostCode;
            
            if(!isObjectHavingRealValue(full_name)) {
                full_name = "My Address " + (i+1);
            }
            
            var contact_id = "0";
            var first_name = full_name; //"";
            var last_name = ""; //"";              
            var contactList = eval(addressList[i].ContactList);
                                            
            contact_html += getAddressListItem(address_id, contact_id, title, first_name, last_name, full_name, address_line1, address_line2, city, county, postcode, country);
        }     
    }         
    
    contact_html += '</div>';
    
    if(!is_having_addresses) { 
        initializePage(); 
        contact_html = "";
    }
    
    return contact_html;
}

function getAddressListItem(address_id, contact_id, title, first_name, last_name, full_name, address_line1, address_line2, city, county, postcode, country) {
    var tmp_address_string = title + "|" + first_name + "|" + last_name + "|" + address_line1 + "|" + address_line2 + "|" + city + "|" + county + "|" + postcode + "|" + country;
    var address_line_html = '';
    address_line_html  = '<div class="address_box">';
        address_line_html += '<div class="address_box_content">';
        address_line_html += '<h1>' + full_name + '</h1>';
        address_line_html += '<p>' + address_line1 + ((address_line2.length>0) ? ', ' + address_line2 : '') + ', ' + city + ', ' + postcode + '</p>';
        address_line_html += '</div>';
        address_line_html += '<div class="ContactOptions">';
        address_line_html += '<a class="contactEditBtn left" href="javascript://" onclick="javascript:clickEditThisAddress(\'' + address_id + '\', \'' + contact_id + '\', \'' + escapeSpecialCharactors(tmp_address_string) + '\');">Edit</a><a class="contactDeleteBtn left" href="javascript://" onclick="javascript:clickDeleteThisAddress(\'' + address_id + '\', \'' + contact_id + '\', \'' + escapeSpecialCharactors(tmp_address_string) + '\');">Delete</a>';
        address_line_html += '</div>';
    address_line_html += '</div>';
    
    return address_line_html;
}

function listAddressesRelatedToPostcodeInPopup(result) {
    showAddressList(result, "popup_add_edit_addresses_body_address_list", "clickSelectThisAddress");        
}

function clearAddressScreen() {
    $("#container_choose_delivery_method_my_addresses").html("");
}

function showAddressList(data, container, clickevent) {
    var is_found_addresses = false;
    var address_list_html = '';
    
    if(data!="") {
        var addressList = eval(data);
        for (i = 0; i < addressList.length; i++) {
            is_found_addresses = true;
            var tmp_address_string = "|||" + addressList[i].Key + "|United Kingdom";
            var tmp_address_string_display = addressList[i].Value;
            
            tmp_address_string = tmp_address_string.replace(/'/g, '');

            address_list_html = address_list_html + '<li>';
            address_list_html = address_list_html + '<div id="popup_add_edit_addresses_body_address_list_vr_address_' + i + '" onclick="javascript:' + clickevent + '(\'' + tmp_address_string + '\');">' + tmp_address_string_display + '</div>';
            address_list_html = address_list_html + '</li>'
        }
    } else {
        address_list_html = address_list_html + '<li>No addresses found for the given postcode</li>';
    }
    
    address_list_html = '<p>Please Select the correct address below:</p><ul id="popup_add_edit_addresses_body_address_list_vr">' + address_list_html + '</ul>';
    
    $("#" + container).html(address_list_html);
    $("#" + container).show();
}

function activeDeactiveAddressPopup(active, showaddress, address) {
    $("#popup_add_edit_addresses").hide();    
    $("#popup_add_edit_addresses_body_address_list").hide();
    $("#popup_add_edit_addresses_body_address").hide();
    
    if(active) {
        var popup_heading = "";
        
        if($("#popup_add_edit_addresses_ctr_hid_mode").val() == "N") {
            popup_heading = "Add a New ";
            $("#popup_add_edit_addresses_ctr_a_save").text('Add this address');
        } else {
            popup_heading = "Edit Existing ";
            $("#popup_add_edit_addresses_ctr_a_save").text('Save this address');
        }
        
        popup_heading += "Address";
        
        $("#popup_add_edit_addresses_heading_content").html("<h1>" + popup_heading + "</h1>");
        
        $("#popup_add_edit_addresses").show();
        
        if(showaddress) {            
            $("#popup_add_edit_addresses_body_address").show();
            address = unescapeSpecialCharactors(address);
            var res = address.split("|");
            $("#popup_add_edit_addresses_ctr_text_postcode").val(res[7]);
            $("#popup_add_edit_addresses_ctr_select_title").val(res[0]);
            $("#popup_add_edit_addresses_ctr_text_firstname").val(res[1]);
            $("#popup_add_edit_addresses_ctr_text_lastname").val(res[2]);
            $("#popup_add_edit_addresses_ctr_text_addressline1").val(res[3]);
            $("#popup_add_edit_addresses_ctr_text_addressline2").val(res[4]);
            $("#popup_add_edit_addresses_ctr_text_city").val(res[5]);
            $("#popup_add_edit_addresses_ctr_text_county").val(res[6]);
            $("select[id$='popup_add_edit_addresses_ctr_select_country']").val(res[8]);
            
            $("#popup_add_edit_addresses_body_address_name").hide();
            $("#popup_add_edit_addresses_body_address_address_name").hide();
            
            $("#popup_add_edit_addresses_body_address_address_name").show();
            $("#popup_add_edit_addresses_ctr_text_addressname").val(res[1]);
            
        } else {            
            $("#popup_add_edit_addresses_body_address_list").html('<span class="PostCodeHint"><img src="/assets/dist/images/point_PostCodeHint.gif" />Find the address quicker with our post code look up feature</span>');
            $("#popup_add_edit_addresses_body_address_list").show();
        }
    }
}

function displayResutsOfAddressSavePopup(result) {
    //console.log("result - " + result);
    var iserror = true;
    var msg = "";
    switch(result)
    {
        case '100':
        {
            //msg = "Address Successfully saved!";
            iserror = false;            
            //activeDeactiveAddressPopup(false, false, "");
            getAddresses($("input[id$='hidden_selected_delivery_type']").val(), "");            
            $('#popup_add_edit_addresses').fadeOut(200);

            if ($("input[id$='hidden_highstreet_backurl']").val().length > 0) {
                window.location.href = "/" + $("input[id$='hidden_highstreet_backurl']").val();
            }
            break;
        }
        case '-2':
        {
            msg = "Address already exists";
            break;
        }
        case '-3':
        {
            msg = "Address Cannot be found";
            break;
        }
        case '-200':
            {
                msg = "Please enter first name";
                break;
            }
        case '-201':
            {
                msg = "Please enter last name";
                break;
            }
        case '-202':
            {
                msg = "Please enter address line 1";
                break;
            }

        case '-203':
            {
                msg = "Please enter city";
                break;
            }
        
        case '-205':
            {
                msg = "Please enter postcode";
                break;
            }
        default:
        {
            msg = "Error occure while saving data, please try again!";
            break;
        }
    }
    
    if(iserror) { setMessage(true, msg, null); }
}

function displayResutsOfAddressDelete(result) {
    //console.log("result - " + result);
    var iserror = true;
    var msg = "";

    switch (result) {
        case '100':
            {
                iserror = false;
                msg = "Address Successfully deleted!";
                getAddresses($("input[id$='hidden_selected_delivery_type']").val(), "");
                break;
            }
        case '-2':
            {
                msg = "Address already exists";
                break;
            }
        case '-3':
            {
                msg = "Address Cannot be found";
                break;
            }
        default:
            {
                msg = "Error occure while saving data, please try again!";
                break;
            }
    }

    setMessage(iserror, msg, null);
}

//----------------------------------------------------
// UTILITY FUNCTIONS
function isObjectHavingRealValue(obj){
    return obj && obj !== "null" && obj!== "undefined";
}

function setMessage(iserror, msg, ctr) {
    //alert(msg);
    
    var msgHtml = '<div class="CardErrorContents">';
                msgHtml += '<h1>' + ((iserror) ? 'Error!' : 'Warning!') + '</h1>';
                msgHtml += '<p>' + msg + '</p>';
                msgHtml += '<a class="flowPurpleBtn" onclick="hideMessage();">OK</a>';
            msgHtml += '</div>';
            
    $("#common_message_wrapper").html(msgHtml);
    $('#common_message_wrapper').show();
}

function hideMessage() {
    $('#common_message_wrapper').hide();
}

function setWaiting(mode) {
    if(mode) {
        $("#wraper_waiting_effect").show();
    } else {
        $("#wraper_waiting_effect").hide();
    }
}

function escapeSpecialCharactors(val) {
    return escape(val);
}

function unescapeSpecialCharactors(val) {
    return unescape(val);
}

//---------------------------------------------------------------------------------------------


//---------------------------------------------------------------------------------------------
// EVENT RELATED FUNCTIONS
//---------------------------------------------------------------------------------------------

$(document).ready(function() {
    activeDeactiveAddressPopup(false);

    initializePage();
    
    $('.popUpCloseBtn').click(function() { $('#popup_add_edit_addresses').fadeOut(200); });
});

function clickAddNewAddress() {
    $("#popup_add_edit_addresses_ctr_hid_mode").val("N");
    $("#popup_add_edit_addresses_ctr_hid_address_id").val("0");
    $("#popup_add_edit_addresses_ctr_hid_contact_id").val("0");
    activeDeactiveAddressPopup(true, false, '');
}

function clickEditThisAddress(addressid, contactid, addressstring) {
    $("#popup_add_edit_addresses_ctr_hid_mode").val("E");
    $("#popup_add_edit_addresses_ctr_hid_address_id").val(addressid);
    $("#popup_add_edit_addresses_ctr_hid_contact_id").val(contactid);
    activeDeactiveAddressPopup(true, true, addressstring);
}

function clickDeleteThisAddress(addressid, contactid, addressstring) {
    var msgHtml = '<div class="CardErrorContents">';
    msgHtml += '<h1>Warning!</h1>';
    msgHtml += '<p>Do you really want to delete this address ?</p>';
    msgHtml += '<a class="flowPurpleBtn" onclick="hideMessage();">NO</a>';
    msgHtml += '<a class="flowPurpleBtn" onclick="deleteAddress(\'' + addressid + '\');">YES</a>';
    msgHtml += '</div>';

    $("#common_message_wrapper").html(msgHtml);
    $('#common_message_wrapper').show();    
}

function clickEnterAddressManuallyPopup() {
    $('#popup_add_edit_addresses_body_address_list').hide();
    $("#popup_add_edit_addresses_body_address").show();         
     
    $("#popup_add_edit_addresses_ctr_text_addressname").val("");
    $("#popup_add_edit_addresses_ctr_text_firstname").val("");    
    $("#popup_add_edit_addresses_ctr_text_firsttname").val("");
    $("#popup_add_edit_addresses_ctr_text_lastname").val("");
    $("#popup_add_edit_addresses_ctr_text_postcode").val("");
     
    $("#popup_add_edit_addresses_ctr_text_addressline1").val("");
    $("#popup_add_edit_addresses_ctr_text_addressline2").val("");
    $("#popup_add_edit_addresses_ctr_text_city").val("");
    $("#popup_add_edit_addresses_ctr_text_county").val("");
    $("select[id$='ctl00_ContentPlaceHolder1_popup_add_edit_addresses_ctr_select_country']").val("United Kingdom");
    
    $("#popup_add_edit_addresses_body_address_name").hide();
}

function clickPostCodeLookUpInAddressPopup() {
    var postcode = $("#popup_add_edit_addresses_ctr_text_postcode").val();
    activeDeactiveAddressPopup(true, false, "");
    if(postcode.length>0) {
        getAddressesUsingPostCode(postcode, "listAddressesRelatedToPostcodeInPopup");
    } else {
        $('#popup_add_edit_addresses_body_address_list span.PostCodeHint').addClass('errorRed');        
        $('#popup_add_edit_addresses_body_address_list span.PostCodeHint').html('<img src="/assets/dist/images/point_PostCodeHint.gif">Please enter a Post code to get the relevant addresses or enter an address manually.');
    }
}

function clickSelectThisAddress(addressstring) {
    activeDeactiveAddressPopup(true, true, addressstring);
}

function clickAddThisAddressPopup() {
    if(validateAddressForm("P")) {
        updateAddress("P", "displayResutsOfAddressSavePopup");
    }
}
//---------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------
// STYLE RELATED FUNCTIONS
//---------------------------------------------------------------------------------------------
function removeRedOutline() {
    $('.AddressFieldNotComplete').click(function() {
        $(this).removeClass('AddressFieldNotComplete');
    });
}
//---------------------------------------------------------------------------------------------
//ADDED BY ROBBY
$('body').addClass('MyAddressesPage');
$('.nav').remove();

//CHANGE VIEW - CONTACT VIEW
$('.changeView div').click(function() {
    $('.changeView div').removeClass('selectedView');
    $(this).addClass('selectedView');
                        
    if ( $('.blockView').hasClass('selectedView') ) {
        $('.address_wrapper').addClass('BlockView');
    }
    else {
        $('.address_wrapper').removeClass('BlockView');
    }
});

//STICKY NAV SCROLL
var stickyTop = $('.myAddressesEditPanel').offset().top;                 
$(window).scroll(function() {
    if ( $(window).scrollTop() >= stickyTop ) {
        $('.myAddressesEditPanel').addClass('fixedMyAccountNav');
    } else {
        $('.myAddressesEditPanel').removeClass('fixedMyAccountNav');
    }
})

</script>
    
            
            <!--END WRAPPER-->
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