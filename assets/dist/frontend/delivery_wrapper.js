
//---------------------------------------------------------------------------------------------
// COMMON FUNCTIONS
//---------------------------------------------------------------------------------------------
var global_obj_address_default_values = {"select_title":"Mr","text_firstname":"First Name *","text_lastname":"Surname *","text_addressline1":"Address Line 1 *","text_addressline2":"Address Line 1","text_city":"City *","text_county":"County","text_postcode":"Post Code *","select_country":"United Kingdom"};
var global_arr_month = ["", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
var global_datepicker_mode = 0;

function __doPostBackCustom() {
    //var theform = document.getElementById("aspnetForm");
    //theform.submit();
    document.forms[0].submit();
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
    
    if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
        if($("#" + common_control_name + "text_firstname").val() == "" || $("#" + common_control_name + "text_firstname").val() == global_obj_address_default_values.text_firstname) {
            $("#" + common_control_name + "text_firstname").focus();
            $("#" + common_control_name + "text_firstname").addClass('AddressFieldNotComplete');
            removeRedOutline();
            //setMessage(true, "Please enter a First Name!", "");
            return false;
        }
        
        if($("#" + common_control_name + "text_lastname").val() == "" || $("#" + common_control_name + "text_lastname").val() == global_obj_address_default_values.text_lastname) {
            $("#" + common_control_name + "text_lastname").focus();
            $("#" + common_control_name + "text_lastname").addClass('AddressFieldNotComplete');
            removeRedOutline();
            //setMessage(true, "Please enter a Surname!", "");
            return false;
        }        
    } else {
        
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

function postCodeCharacters() {
    $('#popup_add_edit_addresses_ctr_text_postcode').keydown(function() {
        //console.log("Typing Postcode");
        
        var postCodeInput = $(this).val();
        var postCodeInput = postCodeInput.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, ' ');
        $(this).val(postCodeInput);
        //console.log(postCodeInput);
    });
    $('#popup_add_edit_addresses_ctr_text_postcode').blur(function () {
        var postCodeInput = $(this).val();
        var postCodeInput = postCodeInput.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, ' ');
        $(this).val(postCodeInput);
    });
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

function openDateTimePicker(mode) {
    global_datepicker_mode = mode;
    $("#popup_common_datepicker").show();    
}

function getProductTypeId() {
    var current_active_product = { "CurrentActiveProduct": JSON.parse($("input[id$='hidden_current_active_product']").val()) };
    return current_active_product.CurrentActiveProduct.ProductTypeId;
}

function getProductId() {
    var current_active_product = { "CurrentActiveProduct": JSON.parse($("input[id$='hidden_current_active_product']").val()) };
    return current_active_product.CurrentActiveProduct.ProductId;
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
                
                if (ctr) {
                    msgHtml += ctr
                } else {
                    msgHtml += '<a class="flowPurpleBtn" onclick="hideMessage();">OK</a>';
                }
                    
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
    //console.log(val);
    //return val.replace(/'/g, '');
    return escape(val);
    //return val;
}

function unescapeSpecialCharactors(val) {
    return unescape(val);
}

function RemoveSpecialCharactors(ctr) {
    var regex = /(?:[\u2700-\u27bf]|(?:\ud83c[\udde6-\uddff]){2}|[\ud800-\udbff][\udc00-\udfff]|[\u0023-\u0039]\ufe0f?\u20e3|\u3299|\u3297|\u303d|\u3030|\u24c2|\ud83c[\udd70-\udd71]|\ud83c[\udd7e-\udd7f]|\ud83c\udd8e|\ud83c[\udd91-\udd9a]|\ud83c[\udde6-\uddff]|\ud83c[\ude01-\ude02]|\ud83c\ude1a|\ud83c\ude2f|\ud83c[\ude32-\ude3a]|\ud83c[\ude50-\ude51]|\u203c|\u2049|[\u25aa-\u25ab]|\u25b6|\u25c0|[\u25fb-\u25fe]|\u00a9|\u00ae|\u2122|\u2139|\ud83c\udc04|[\u2600-\u26FF]|\u2b05|\u2b06|\u2b07|\u2b1b|\u2b1c|\u2b50|\u2b55|\u231a|\u231b|\u2328|\u23cf|[\u23e9-\u23f3]|[\u23f8-\u23fa]|\ud83c\udccf|\u2934|\u2935|[\u2190-\u21ff])/g;
    ctr.value = ctr.value.replace(regex, '');
}

//---------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------
// FUNCTIONS RELATED TO CHOOSE DELIVERY METHOD
//---------------------------------------------------------------------------------------------

function initializeDeliveryAddressSelectingView() {
    if($("input[id$='hidden_selected_delivery_type_ischange']").val() == "1") {    
        $("input[id$='hidden_selected_delivery_type_ischange']").val("");
    }
    
    switch($("input[id$='hidden_selected_delivery_type']").val())
    {
        case "B":
        {
            $('#container_choose_delivery_method_selection').removeClass('DIRECT_selected');
            $('#container_choose_delivery_method_selection').addClass('BTM_selected');            
            break;
        }
        case "D":
        {
            $('#container_choose_delivery_method_selection').removeClass('BTM_selected');
            $('#container_choose_delivery_method_selection').addClass('DIRECT_selected');
            AddressLettersSticky();         
            break;
        }
        default:
        {
            $('#container_choose_delivery_method_selection').removeClass('BTM_selected');
            $('#container_choose_delivery_method_selection').removeClass('DIRECT_selected');
            break;
        }
    }
        
    getAddresses($("input[id$='hidden_selected_delivery_type']").val(), "");
    // CS subsection
    csCustomE('addressOptions');
}

function initializeDeliveryAddressFormView() {
    $("#form_edit_addresses").show();
    $("#form_edit_addresses").addClass('no_addresses');
    $("#form_edit_addresses_body_address").hide();
    noAddressLookup();
    //$(".manualAddressEntry").hide();
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
        case "D":
        {
            $("#container_choose_delivery_method_my_contacts").html(getMyContactListHtml(result, letter));
            AddressLettersSticky();
            MobileOnlyFuncs();
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
    contact_html += '<div class="AddressListHeader">';
    contact_html += '<h2 class="left">Your Addresses</h2>';
    contact_html += '<a href="javascript://" class="AddNewAddressLink right" onclick="javascript:clickAddNewAddress()">+Add New Address</a>';
    contact_html += '</div>';
    
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
        initializeDeliveryAddressFormView(); 
        contact_html = "";
    }
    
    return contact_html;
}

function getMyContactListHtml(data, letter) { 
    //console.log(data);    
    var contact_html = "";
    
    //EXISTING CUSTOMER - ADDRESS LIST
    contact_html += '<div class="AddressList">';
    
        contact_html += '<div class="AddressListHeader">';
            contact_html += '<h2 class="left">Your Addresses</h2>';
            contact_html += '<a href="javascript://" class="AddNewAddressLink right" onclick="javascript:clickAddNewAddress()">+Add New Address</a>';
        contact_html += '</div>';
    
        contact_html += '<div class="AddressLetters">';
            contact_html += '<div class="refineResultsTitle MobileLabel">Refine your addresses:</div>';
            contact_html += getAddressBookHeaderHtml(letter);
        contact_html += '</div>';
    
    var is_having_addresses = false;
    
    if(data!="") {
        var address_line_html;
        var addressList = eval(data);
        
        for (i = 0; i < addressList.length; i++) {
            is_having_addresses = true;
        
            var title = addressList[i].title;
            var address_id = addressList[i].AddressID;
            var full_name = addressList[i].FullName;
            var address_line1 = addressList[i].Line1;
            var address_line2 = addressList[i].Line2;
            var city = addressList[i].City;
            var county = addressList[i].County;
            var country = addressList[i].Country;
            var postcode = addressList[i].PostCode;
            
            var contact_id = "";
            var first_name = "";
            var last_name = "";              
            var contactList = eval(addressList[i].ContactList);
            
            if(contactList.length>0) {
                contact_id = contactList[0].ContactID;
                title = contactList[0].Title;
                first_name = contactList[0].FirstName;
                last_name = contactList[0].LastName;                  
            }            
            
            contact_html += getAddressListItem(address_id, contact_id, title, first_name, last_name, full_name, address_line1, address_line2, city, county, postcode, country);            
        }     
    }         
    
    contact_html += '</div>';
    
    if(!is_having_addresses) { 
        if(letter == "")
        {
            initializeDeliveryAddressFormView();
            contact_html = "";
        }
        else
        {
            contact_html += "<div class=\"address-book-noresults\">No Contacts Found</div>";
        }
    }
    
    return contact_html;
}

function getAddressListItem(address_id, contact_id, title, first_name, last_name, full_name, address_line1, address_line2, city, county, postcode, country) {
    var tmp_address_string = title + "|" + first_name + "|" + last_name + "|" + address_line1 + "|" + address_line2 + "|" + city + "|" + county + "|" + postcode + "|" + country;
    //var tmp_address_string =  full_name + "|" + address_line1 + "|" + address_line2 + "|" + city + "|" + county + "|" + postcode + "|" + country;
    //alert(tmp_address_string);
    var address_line_html = '';
    address_line_html  = '<div class="addressHolder">';
        address_line_html += '<div class="left">';
        address_line_html += '<h1>' + full_name + '</h1>';
        address_line_html += '<p>' + address_line1 + ((address_line2.length>0) ? ', ' + address_line2 : '') + ', ' + city + ', ' + postcode + '</p>';
        address_line_html += '</div>';
        address_line_html += '<div class="right">';
        address_line_html += '<a class="flowEditBtn" href="javascript://" onclick="javascript:clickEditThisAddress(\''+address_id+'\',\'' + address_id + '\', \'' + contact_id + '\', \'' + escapeSpecialCharactors(tmp_address_string) + '\');">Edit</a><a class="flowPurpleBtn" href="javascript://" onclick="javascript:clickDeliverToThisAddress(\''+address_id+'\',\'' + escapeSpecialCharactors(tmp_address_string) + '\', \'' + country + '\');"><span class="DesktopLabel">Deliver to this Address</span><span class="MobileLabel">Select</span></a>';
        address_line_html += '</div>';
    address_line_html += '</div>';
    
    return address_line_html;
}

function listAddressesRelatedToPostcodeInPopup(result) {
    showAddressList(result, "popup_add_edit_addresses_body_address_list", "clickSelectThisAddress");        
}

function listAddressesRelatedToPostcodeInForm(result) {
    showAddressList(result, "form_edit_addresses_body_address_list", "clickSelectThisAddressInForm");
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

function getAddressBookHeaderHtml(letter) {
    var header_html = "";
    header_html += '<ul>';
        header_html += '<li onclick="javascript:clickAddressBookLetter(\'\');" class=\"' + ((letter=="") ? 'letter-selected' : '') + '\">All</li>';                  
        
        for(var i=65;i<=90;i++) {
            header_html += '<li onclick="javascript:clickAddressBookLetter(\'' + String.fromCharCode(i) + '\');" class=\"' + ((letter==String.fromCharCode(i)) ? 'letter-selected' : '') + '\">' + String.fromCharCode(i) + '</li>';
        }            
        
    header_html += '</ul>'; 
    header_html += '<div class="changeView right">';
    header_html += '<h2 class="left">change view</h2>';
    header_html += '<div class="blockView left" onclick="changeViewBlock();"><span></span><span></span></div>'; 
    header_html += '<div class="lineView selectedView left" onclick="changeViewList();"><span></span><span></span></div>'; 
    header_html += '</div>';  
    
    return header_html;

}

function clearAddressScreen() {
    $("#container_choose_delivery_method_my_addresses").html("");
    $("#container_choose_delivery_method_my_contacts").html("");
    
}

function selectDeliveryType(type) {
    $("input[id$='hidden_selected_delivery_type']").val(type);
    $("input[id$='hidden_selected_delivery_type_ischange']").val("1");
    __doPostBackCustom();
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
        
        if($("input[id$='hidden_selected_delivery_type']").val()== "D") {
            popup_heading += "Contact";
        } else {
            popup_heading += "Address";
        }
        
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
            
            if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
                $("#popup_add_edit_addresses_body_address_name").show();
            } else {
                $("#popup_add_edit_addresses_body_address_address_name").show();
                $("#popup_add_edit_addresses_ctr_text_addressname").val(res[1]);                
            }
            
        } else {            
            $("#popup_add_edit_addresses_body_address_list").html('<span class="PostCodeHint"><img src="/assets/dist/images/point_PostCodeHint.gif" />Find the address quicker with our post code look up feature</span>');
            $("#popup_add_edit_addresses_body_address_list").show();
        }
    }
}

function fillAddressForm(address) {
    $("#form_edit_addresses_body_address_list").hide();
    $("#form_edit_addresses_body_address").show();
    $(".manualAddressEntry").show();
            
    if(address.length>0) {
        var res = address.split("|");
        $("#form_add_edit_addresses_ctr_text_postcode").val(res[7]);
        $("#form_add_edit_addresses_ctr_select_title").val(res[0]);
        $("#form_add_edit_addresses_ctr_text_firstname").val(res[1]);
        $("#form_add_edit_addresses_ctr_text_lastname").val(res[2]);
        $("#form_add_edit_addresses_ctr_text_addressname").val(res[1]);       
        $("#form_add_edit_addresses_ctr_text_addressline1").val(res[3]);
        $("#form_add_edit_addresses_ctr_text_addressline2").val(res[4]);
        $("#form_add_edit_addresses_ctr_text_city").val(res[5]);
        $("#form_add_edit_addresses_ctr_text_county").val(res[6]);
        $("select[id$='form_add_edit_addresses_ctr_select_country']").val(res[8]);
        
        $("#form_edit_addresses_body_address_name").hide();
        $("#form_edit_addresses_body_address_address_name").hide();
        
        if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
            $("#form_edit_addresses_body_address_name").show();
        } else {
            $("#form_edit_addresses_body_address_address_name").show();
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
            break;
        }
        case '-2':
        {
            msg = "Contact already exists.";
            break;
        }
        case '-3':
        {
            msg = "Address Cannot be found!";
            break;
        }
        case '-99':
            {
                msg = "Insufficient address information. Please re-enter your address.";
                break;
            }
        case '-200' :
            {
                msg = "Please enter first name";
                break;
            }
        case '-201' :
            {
                msg = "Please enter last name";
                break;
            }
        case '-202' :
            {
                msg = "Please enter address line 1";
                break;
            }

        case '-203' :
            {
                msg = "Please enter city";
                break;
            }
        case '-204' :
            {
                msg = "Please enter county";
                break;
            }
        case '-205' :
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

function displayResutsOfAddressSaveForm(result) {
    //console.log("result - " + result);
    var iserror = true;
    var msg = "";
    
    switch(result)
    {
        case 100:
        {
            iserror = false;           
            makeDeliverToGivenAddress()
            break;
        }
        case -2:
        {
            msg = "Address already exists";
            break;
        }
        case -3:
        {
            msg = "Address Cannot be found";
            break;
        }
        case -200:
            {
                msg = "Please enter first name";
                break;
            }
        case -201:
            {
                msg = "Please enter last name";
                break;
            }
        case -202:
            {
                msg = "Please enter address line 1";
                break;
            }

        case -203:
            {
                msg = "Please enter city";
                break;
            }
        
        case -205:
            {
                msg = "Please enter postcode";
                break;
            }
        default:
        {
            msg = "Error occure while saving data, please try again!";
            break;
        }
        
        if(iserror) { setMessage(true, msg, null); }
    }
}

function makeDeliverToGivenAddress() {
    var title = "";
    var first_name = "";
    var last_name = "";
    var country = $("select[id$='form_add_edit_addresses_ctr_select_country']").val();
    
    if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
        title = $("#form_add_edit_addresses_ctr_select_title").val();
        first_name = $("#form_add_edit_addresses_ctr_text_firstname").val();
        last_name = $("#form_add_edit_addresses_ctr_text_lastname").val();
    } else {
        first_name = $("#form_add_edit_addresses_ctr_text_addressname").val();
    }    
    
    var tmp_address_string = title + "|" + first_name + "|" + last_name + "|" + $("#form_add_edit_addresses_ctr_text_addressline1").val() + "|" + $("#form_add_edit_addresses_ctr_text_addressline2").val() + "|" + $("#form_add_edit_addresses_ctr_text_city").val() + "|" + $("#form_add_edit_addresses_ctr_text_county").val() + "|" + $("#form_add_edit_addresses_ctr_text_postcode").val() + "|" + country;
    //alert('!!!!='+tmp_address_string);
    clickDeliverToThisAddress(tmp_address_string, country);
}

function blankCardWarning() {
    if ($("input[id$='hidden_validation_iscardhascontent']").val() == "1") {
        //alert("WARNING the card you are sending has NO text inside.  Please go back and amend or send Back to Yourself")
        $('.CardError1').show();
        return false;
    }
    
    if ($("input[id$='hidden_validation_multidirect']").val() == "1") {
        //alert("WARNING this option is not available as you have selected a multiple quantity of the same product.  Please select Back to Yourself ")
        $('.CardError2').show();
        return false;
    }

    if ($("input[id$='hidden_validation_highstreet_direct_avoid']").val() == "1") {
        $('.CardError3').show();
        return false;
    }
    
    if ($("input[id$='hidden_validation_weddingstationary_direct_avoid']").val() == "1") {
        $('.CardError4').show();
        return false;
    }       

    if ($("input[id$='hidden_validation_delivery_not_available_for_selected_country']").val() == "1") {
        $('.CardError5').show();
        return false;
    }

    return true;
}

function checkSpecialPostage() {
    //console.log("HHHH-1");
    //if ($("input[id$='hidden_special_postage_message']").val() == "1") {
    //    $('.SpecialPostageOption').show();
    //}
}
//---------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------
// FUNCTIONS RELATED TO SELECT A POSTAGE DATE AND OPTION
//---------------------------------------------------------------------------------------------

function initializePostageOptionView() {
    var address_string = $("input[id$='hidden_selected_address']").val();
    //console.log("Address - " + address_string);
    if(address_string.length>0) {
        var res = address_string.split("|");
        var display_address_string = "";
        var display_name_string_envolop = "";
        var display_address_string_envolop = "";
        
        if ($("input[id$='hidden_selected_delivery_type']").val() == "D") {
            
            display_address_string = res[0] + " " + res[1] + " " + res[2] + " - " + res[3] + ((res[4].length>0)? ", " + res[4] : "") + ", " + res[5] + ((res[6].length>0)? ", " + res[6] : "") + ", " + res[7] + ", " + res[8]
            display_name_string_envolop = res[0] + " " + res[1] + " " + res[2];
            display_address_string_envolop = res[3] + ((res[4].length>0)? ", <br />" + res[4] : "") + ", <br />" + res[5] + ((res[6].length>0)? ", <br />" + res[6] : "") + ", <br />" + res[7] + ", <br />" + res[8]
            
            $("#donotopen_envolop_name_container").html(display_name_string_envolop);
            $("#donotopen_envolop_address_container").html(display_address_string_envolop);
            
        } else {
            display_address_string = res[1] + " - " + res[3] + ((res[4].length>0)? ", " + res[4] : "") + ", " + res[5] + ((res[6].length>0)? ", " + res[6] : "") + ", " + res[7] + ", " + res[8]
        }                

        checkSpecialPostage();

        $("#container_choose_delivery_method_selected_address").html('<p>' + display_address_string + '</p><img src="/assets/dist/images/bg_btm.png" class="BTM_selected_img left" /><img src="/assets/dist/images/bg_direct.png" class="Direct_selected_img left" /><a href="javascript://" onclick="javascript:clickEditThisAddressInPostageOption();" class="flowEditBtn right">Edit</a>');
            
        switch($("input[id$='hidden_selected_delivery_type']").val())
        {
            case "B":
            {
                $('#container_choose_delivery_method_selected_address').removeClass('DIRECT_ADDRESS');
                $('#container_choose_delivery_method_selected_address').addClass('BTM_ADDRESS');
                
                $('#wrapper_select_postage_date_and_option').removeClass('DIRECT_ADDRESS');
                $('#wrapper_select_postage_date_and_option').addClass('BTM_ADDRESS');
                $('.BTM_selected_img').addClass('superblockcss');//.css('display','block '); 
                $('.Direct_selected_img').addClass('supernonecss');          
                break;
            }
            case "D":
            {
                $('#container_choose_delivery_method_selected_address').removeClass('BTM_ADDRESS');
                $('#container_choose_delivery_method_selected_address').addClass('DIRECT_ADDRESS');
                
                $('#wrapper_select_postage_date_and_option').removeClass('BTM_ADDRESS');
                $('#wrapper_select_postage_date_and_option').addClass('DIRECT_ADDRESS');              
                
                $('.BTM_selected_img').addClass('supernonecss');//.css('display','block '); 
                $('.Direct_selected_img').addClass('superblockcss'); 
                break;
            }
            default:
            {
                break;
            }
        }        
    }
    
    // Set dispatch date in view
    //setDispathDateView($("input[id$='hidden_potage_despatch_selected_date']").val());
    
    // Set do not open date in view
    setSelectedDoNotOpenDateView($("input[id$='hidden_potage_donotopen_selected_date']").val());
    
    // Set selected dilevery option text
    var selected_delivery_option_id = $("input[name$='rbtPostageOptions']:checked").attr("id");
    $("#selected_dispatch_option_info").html($("label[for='" + selected_delivery_option_id + "']").text());

    $("#wrapper_popup_common_datepicker").datepicker(
        {
            minDate: 0,
            dateFormat: "dd/mm/yy",
            onSelect: function(selected,evnt) {
                 onSelectDatePicker(selected);
            }            
        }    
    );       
    
    // Style postage options
    despatchList();
    //despatchListClick();
    
    // Set Estimated delivery date
    //getEstimatedDeliveryDate();

    // Set delivery date in view
    setDispathDateView($("input[id$='hidden_potage_delivery_customer_selected_date']").val());
    // CS subsection
    csCustomE('postageOptions');
}

function getEstimatedDeliveryDate() {
    return;
    var so = $("input[name$='rbtPostageOptions']:checked").val();
    var d = $("input[id$='hidden_potage_despatch_selected_date']").val();
    var method = "GetEstimatedDeliveryDate";
    //alert('!!!val=');
    var data = '{"shippingOptionId": "' + so + '","dispatchDate":"' + d + '","productTypeId":"' + getProductTypeId() + '"}';
    //alert('!!!val='+data);
    getCallServerMethod("", method, data, "setEstimatedDeliveryDate");    
}

function setEstimatedDeliveryDate(result) {
    //$("#potage_despatch_estimated_delivery_date").html(result);
    $("input[id$='hidden_potage_delivery_customer_selected_date']").val(result);
    setDispathDateView(result);
    //setDispathDateView(result);

}

function onSelectDatePicker(selected) {
    $('#popup_common_datepicker').fadeOut(200);

    switch(global_datepicker_mode)
    {
        case 1:
        {
            setSelectedDispathDateView(selected);
            break;
        }
        case 2:
        {
            $("input[id$='hidden_potage_donotopen_selected_date']").val(selected);            
            setSelectedDoNotOpenDateView(selected);
            break;
        } 
        default: { break; }       
    }
}

function setSelectedDispathDateView(selectedDate) {
    if(selectedDate.length>0) {
        //getValidateSelectedDispathDate(selectedDate);
        getValidateSelectedDeliveryDate(selectedDate);
    }
}

function setSelectedDoNotOpenDateView(selectedDate) {
    if(selectedDate.length>0) {
        var date_arr = selectedDate.split('/');
        var date_string = date_arr[0] + " " + global_arr_month[parseInt(date_arr[1])] + " " + date_arr[2];
        $(".doNotOpenUntilSelectBtn").text(date_string);
    }
}

function getValidateSelectedDispathDate(selectedDate) {
    var method = "IsSelectableDate";
    var data = '{"selectedDate": "' + selectedDate + '","productType":"' + getProductTypeId() + '","productId":"' + getProductId() + '"}';
    //console.log(data);
    getCallServerMethod("", method, data, "setResultSelectedDispathDate", selectedDate);    
}

function setResultSelectedDispathDate(result, selectedDate) {
    switch(result)
    {
        case 100:
        {
            $("input[id$='hidden_potage_despatch_customer_selected_date']").val(selectedDate);
            $("input[id$='hidden_potage_despatch_selected_date']").val(selectedDate);
            setDispathDateView(selectedDate);
            __doPostBackCustom();
            break;
        }
        default:
        {
            //alert("Can not select this date");
            $(".CalendarDatePicker_error").show();
            break;
        }
    }    
}

function setDispathDateView(selectedDate) {
    if (selectedDate.length > 0) {
        var date_arr = selectedDate.split('/');
        $("#potage_despatch_month").html(global_arr_month[parseInt(date_arr[1])]);
        $("#potage_despatch_day").html(date_arr[0]);
        $(".del-month").html(global_arr_month[parseInt(date_arr[1])]);
        $(".del-day").html(date_arr[0]);
        //console.log('current days' + date_arr[0]);

        var FEnow = new Date();
        var monthVal = global_arr_month[parseInt(date_arr[1])];
        var MonthNow = global_arr_month[parseInt(FEnow.getMonth()+1)];
        var FEnow = ("0" + FEnow.getDate()).slice(-2);
        if ((date_arr[0] - FEnow) >= 2 || MonthNow != monthVal) {
            $('#wrapper_select_postage_date_and_option').addClass('future-date');
            //console.log('future date');
            //console.log(monthVal);
            //console.log(MonthNow);
        }
        //console.log(FEnow);
    }
}

function getValidateSelectedDeliveryDate(selectedDate) {
    var method = "IsSelectableDeliveryDate";
    var so = $("input[name$='rbtPostageOptions']:checked").val();
    //alert('!!!val=');
    var data = '{"selectedDate": "' + selectedDate + '","productType":"' + getProductTypeId() + '","productId":"' + getProductId() + '","shippingOptionId": "' + so + '"}';
    //alert('!!!val=');
    //console.log(data);
    //alert('data'+data);
    getCallServerMethod("", method, data, "setResultSelectedDeliveryDate", selectedDate);
}

function setResultSelectedDeliveryDate(result, selectedDate) {
    var result_data = eval(result);
    switch (result_data.result) {
        case 100:
            {
                $("input[id$='hidden_potage_despatch_customer_selected_date']").val(result_data.despatchDate);
                $("input[id$='hidden_potage_despatch_selected_date']").val(result_data.despatchDate);
                $("input[id$='hidden_potage_delivery_customer_selected_date']").val(selectedDate); // result_data.deliveryDate
                setDispathDateView(selectedDate); // result_data.deliveryDate
                __doPostBackCustom();
                break;
            }
        default:
            {
                //alert("Can not select this date");
                $(".CalendarDatePicker_error").show();
                break;
            }
    }
}

function DeliveryOptionsChanged(selectedInfo) {
    var selected_dispacth_info_string = String(selectedInfo) + " selected.";
    $("#selected_dispatch_option_info").html(selected_dispacth_info_string);
    //console.log('call DeliveryOptionsChanged');
}

function ToggleEdit(val) {
    if (val) {  
        var address_string = $("input[id$='hidden_selected_address']").val();

        if(address_string.length>0) {
            var res = address_string.split("|");
            $("#donotopen_envolop_address_ctr_text_title").val(res[0]);
            $("#donotopen_envolop_address_ctr_text_firstname").val(res[1]);
            $("#donotopen_envolop_address_ctr_text_lastname").val(res[2]);
            $("#donotopen_envolop_address_ctr_text_addressline1").val(res[3]);
            $("#donotopen_envolop_address_ctr_text_addressline2").val(res[4]);
            $("#donotopen_envolop_address_ctr_text_city").val(res[5]);
            $("#donotopen_envolop_address_ctr_text_county").val(res[6]);
            $("#donotopen_envolop_address_ctr_text_postcode").val(res[7]);
            $("#donotopen_envolop_address_ctr_text_country").val(res[8]);
        }    
            
        $("#donotopen_envolop_name_container").hide();
        $("#donotopen_envolop_address_container").hide();
        $("#donotopen_envolop_addresstext_container").show();
    }
    else {
        $("#donotopen_envolop_addresstext_container").hide();
        $("#donotopen_envolop_name_container").show();
        $("#donotopen_envolop_address_container").show();
        
        var new_address_string = $("#donotopen_envolop_address_ctr_text_title").val() + "|" + $("#donotopen_envolop_address_ctr_text_firstname").val() + "|" + $("#donotopen_envolop_address_ctr_text_lastname").val() + "|" + $("#donotopen_envolop_address_ctr_text_addressline1").val() + "|" + $("#donotopen_envolop_address_ctr_text_addressline2").val() + "|" + $("#donotopen_envolop_address_ctr_text_city").val() + "|" + $("#donotopen_envolop_address_ctr_text_county").val() + "|" + $("#donotopen_envolop_address_ctr_text_postcode").val() + "|" + $("#donotopen_envolop_address_ctr_text_country").val();        
        var display_name_string_envolop = (($("#donotopen_envolop_address_ctr_text_title").val().length>0)? $("#donotopen_envolop_address_ctr_text_title").val() + " " : "") + $("#donotopen_envolop_address_ctr_text_firstname").val() + " " + $("#donotopen_envolop_address_ctr_text_lastname").val();
        var display_address_string_envolop = $("#donotopen_envolop_address_ctr_text_addressline1").val() + (($("#donotopen_envolop_address_ctr_text_addressline2").val().length>0)? ", <br />" + $("#donotopen_envolop_address_ctr_text_addressline2").val() : "") + ", <br />" + $("#donotopen_envolop_address_ctr_text_city").val() + (($("#donotopen_envolop_address_ctr_text_county").val().length>0)? ", <br />" + $("#donotopen_envolop_address_ctr_text_county").val() : "") + ", <br />" + $("#donotopen_envolop_address_ctr_text_postcode").val() + ", <br />" + $("#donotopen_envolop_address_ctr_text_country").val();        
        
        $("input[id$='hidden_selected_address']").val(new_address_string);   
        $("#donotopen_envolop_name_container").html(display_name_string_envolop);
        $("#donotopen_envolop_address_container").html(display_address_string_envolop);             
    }
}

function despatchList() {
    var postageOptions = $('.postingOptions label');
    postageOptions.each(function (i) {
        $(this).next('b').addClass("p_price postage_price" + i + "");
        $(this).wrapAll("<div class='postage_option postage_label" + i + "' onclick='javascript:clickPostageOption(\"postage_label" + i + "\");' />");
        $(".postage_price" + i + "").appendTo($(".postage_label" + i + ""));
        $("#ctl00_ContentPlaceHolder1_rbtPostageOptions_" + i + "").appendTo($(".postage_label" + i + ""));
        //$(this).append('<img class="postage-img" src="/assets/dist/images/StampFirstClass.png" />');
        //$( ".postage_table b:eq(1)" ).appendTo( $( ".postage_label1" ) );
        //$( ".postage_table input#ctl00_ContentPlaceHolder1_rbtPostageOptions_0" ).appendTo( $( ".postage_label1" ) );
    });
    var DespatchCountOptions = $('.postage_options div').length;
    $(".postingOptions").addClass('po_' + DespatchCountOptions + '');
    $(".postingOptions br").remove();
    if (DespatchCountOptions == '1') {
        $('.btn-guarantee').remove();
    }

    // Set initial style
    $('.postage_options input:checked').parent('div').addClass('active');

    // Wrap the phrase "before 9am" to change font size 
    $(".postage_option b:contains('Before 9am. Signature required.')").html(function (_, html) {
        return html.replace(/(Before 9am. Signature required.)/g, "<span class='text_ten'>Signature required.</span>");

    });
    //$(".postage_option b:contains('before 1pm')").html(function (_, html) {
    //    return html.replace(/(Before 1pm. Signature required.)/g, "<span class='text_ten'>Signature required.</span>");

    //});
    
    $(".postage_option b:contains('Royal Mail 24 Tracked')").html(function (_, html) {
        return html.replace(/(. Signature required)/g, "<span class='text_ten'>Signature required.</span>");
    });
    $(".postage_option b:contains('Airmail Rest')").html(function (_, html) {
        return html.replace(/\(|\)/g, '').replace(/(allow 7-10 working days)/g, "<span class='text_ten'>Allow 7-10 working days</span>");
    });
    $(".postage_option b:contains('Airmail Euro')").html(function (_, html) {
        return html.replace(/\(|\)/g, '').replace(/(allow 3-5 working days)/g, "<span class='text_ten'>Allow 3-5 working days</span>");
    });

    $(".postage_option b:contains('Australia Airmail')").html(function (_, html) {
        return html.replace(/\(|\)/g, '').replace(/(allow 7-10 working days)/g, "<span class='text_ten'>Allow 7-10 working days</span>");
    });

    // $(".postage_option b:contains('Same Day Dispatch')").parent().append("<br><span class='text_ten'>Posted today, <u>deliverd tomorrow!</u></span>");
    $(".postage_option b:contains('Same Day Dispatch')").html(function (_, html) {
        return html.replace(/\(|\)/g, '').replace(/Same Day Dispatch/g, "Fast Track<br><span class='text_ten'>Posted today, <u>delivered tomorrow!</span>");
    });

    var DayNow = new Date();
    var nowDayCAT = DayNow.getDay();

    if ($(".postage_option b:contains('Fast Track')").length == '1') {
        //var isFridayCAT = (nowDayCAT === 5);
        console.log(nowDayCAT);
        if (nowDayCAT == 5) {
                $(".postage_option b:contains('Standard First Class Post')").parent().append("<br><span class='text_ten'>Posted Monday</span>");
        }
        else {
                $(".postage_option b:contains('Standard First Class Post')").parent().append("<br><span class='text_ten'>Posted Tomorrow</span>");
        }

    }

    //$(".postage_option b:contains('UK Next Working Day')").html(function(_, html) {
    //return html.replace(/(UK Next Working Day)/g, "<span>UK Next Working Day</span>");
    //});
    $(".postage_option b:contains('before 9am')").parent().find('img').attr('src', '/Images/NewFlow/Special-Delivery-9am.png');
    $(".postage_option b:contains('before 1pm')").parent().find('img').attr('src', '/Images/NewFlow/Special-Delivery-1pm.png');
    $(".postage_option b:contains('Royal Mail Second Class')").parent().find('img').attr('src', '/Images/NewFlow/StampSecondClass.png');
    //$(".postage_option b:contains('Saturday Guaranteed')").parent().find('img').attr('src', '/Images/NewFlow/Special-Delivery-1pm.png');
    $(".postage_option b:contains('before 9am')").html(function (_, html) {
        return html.replace(/(before 9am)/g, "<span class='purple-hl'><u>before 9am</u></span>");
    });
    $(".postage_option b:contains('before 1pm')").html(function (_, html) {
        return html.replace(/(before 1pm)/g, "<span class='purple-hl'><u>before 1pm</u></span>");
    });
    $(".postage_option b:contains('Saturday Guaranteed'), .postage_option b:contains('Next Working Day')").append("<span class='text_ten'>Signature required.</span>");
    //$(".postage_option b:contains('Saturday Guaranteed')").parent().html('<b>Saturday Guaranteed</b><br><span class="text_ten">Signature required.</span>');
    //$(".postage_option b:contains('Saturday Guaranteed')").parent().append('<img class="postage-img" src="/Images/NewFlow/Special-Delivery-1pm.png" />');
    $(".postage_option b:contains('Hermes Delivery')").parent().find('img').attr('src', '/Images/NewFlow/hermes-logo.jpg').css('width','140px');
    //$(".postage_option b:contains('Saturday Guaranteed')").html(function (_, html) {
    //    return html.replace(/(. Signature required)/g, "<span class='text_ten'>Signature required.</span>");
    //});

    checkProductType();
    despatchListClick();
    postageDestination();
};

function despatchListClick() {
    $('.postage_option').click(function(){
        $('.postage_options div').removeClass('active');
        $(this).addClass('active');
        $('.md_delivery_option').removeClass('active');
        //$(this).find('label').trigger('click');
        //$(this).find('input').prop( "checked", true );
        $('.del-cost span').html($('.postage_option.active').find('.p_price').text());

        postageDestination();
    });

    //postageDestination();
    
}
    //---------------------------------------------------------------------------------------------

var guaranteeQuickButton = function () {
    $('.btn-guarantee').click(function () {
        if ($(this).hasClass('btn-revert')) {
            clickPostageOption("postage_label0");
        }
        else {
            var DayNow = new Date();
            var nowDayCAT = DayNow.getDay();
            if (nowDayCAT == 5) {
                $(".postage_option b:contains('Saturday Guaranteed')").parent().parent()[0].click();
            }
            else {
                $(".postage_option b:contains('before 1pm')").parent().parent()[0].click();
            }
        }
        
        //$(".postage_option b:contains('Before 1pm. Signature required.')").parent().parent()[0].click();
    });
    //$('.btn-revert').click(function () {
        //clickPostageOption("postage_label0");
        //$(".postage_option b:contains('Standard First Class Post')").parent().parent()[0].click();
        //$(".postage_option b:contains('Standard First Class Post')").parent().parent()[0].click();
    //});
    //console.log('call guaranteeQuickButton');
};

var guaranteeCheck = function () {
    var DayNow = new Date();
    var nowDayCAT = DayNow.getDay();
    var currentLowestPostage = $('.postage_price0').text().replace('+','');
    if ($('.postingOptions').hasClass('UKND')) {
        $('.btn-guarantee').html('Revert back to First Class <span>' + currentLowestPostage + '</span>');
        
    }
    if ($('.postingOptions').hasClass('UKS')) {
        if (nowDayCAT == 5) {
            $('.btn-guarantee span').text('£7.95');
        }
        else {
            $('.btn-guarantee span').text('£6.75');
        }
    }
    //guaranteeQuickButton();
    // change guarantee it text if friday
    
    console.log('call guaranteeCheck now');
    console.log(nowDayCAT);
};

//---------------------------------------------------------------------------------------------
// EVENT RELATED FUNCTIONS
//---------------------------------------------------------------------------------------------

$(document).ready(function () {
    //console.log('page load'+$.now());
    activeDeactiveAddressPopup(false);
    guaranteeQuickButton();

    switch($("input[id$='hidden_main_section']").val())
    {
        case "A":
        {
            initializeDeliveryAddressSelectingView();
            break;
        }
        case "P":
        {
            initializePostageOptionView();
            break;
        }
        default: { break; }
    }
    
    $('.popUpCloseBtn').click(function () {
        $('#popup_add_edit_addresses').fadeOut(200);
        if ($('.MainContent').hasClass('mm_CAT_camp')) {
            $('.popup_add_edit_addresses_body_postcode_search').show();
            $('.postcodeSearchLine label').after($('#popup_add_edit_addresses_ctr_text_postcode'));
        }

    });
    $('.popUpCommonDatepickerCloseBtn').click(function() { $('#popup_common_datepicker').fadeOut(200); });

    //alert('!!!='+$("input[id$='hidden_main_section']").val());
});

function clickBackToMe() {
    $('#container_choose_delivery_method_selection').removeClass('DIRECT_selected');
    $('#container_choose_delivery_method_selection').addClass('BTM_selected');
    selectDeliveryType("B");
}

function clickDirect() {
    if(blankCardWarning()) {
        $('#container_choose_delivery_method_selection').removeClass('BTM_selected');
        $('#container_choose_delivery_method_selection').addClass('DIRECT_selected'); 
            
        selectDeliveryType("D");
        AddressLettersSticky();
    }
}

function clickAddressBookLetter(letter) {
    if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
        getAddresses($("input[id$='hidden_selected_delivery_type']").val(), letter);
    }
    console.log('call clickAddressBookLetter ' + letter);
    $('.AddressLetters select').val(letter);
    $('.AddressLetters select option.feedback-opt').text(letter);
    $('#letter_drop').val(letter);

    //alert('clicked');
}

function clickPostCodeLookUpInAddressPopup() {
    var postcode = $("#popup_add_edit_addresses_ctr_text_postcode").val();
    activeDeactiveAddressPopup(true, false, "");
    if(postcode.length>0) {
        getAddressesUsingPostCode(postcode, "listAddressesRelatedToPostcodeInPopup");
    } else {
        //setMessage(true, "Please enter a Postcode to get relevant addresses", "");
        $('#popup_add_edit_addresses_body_address_list span.PostCodeHint').addClass('errorRed');
        
        $('#popup_add_edit_addresses_body_address_list span.PostCodeHint').html('<img src="../../../Images/NewFlow/point_PostCodeHint_red.gif">Please enter a Post code to get the relevant addresses or enter an address manually.');
    }
}

function clickPostCodeLookUpInAddressForm() {
    var postcode = $("#form_add_edit_addresses_ctr_text_postcode").val();    
    if(postcode.length>0) {        
        $("#form_edit_addresses_body_address").hide();
        getAddressesUsingPostCode(postcode, "listAddressesRelatedToPostcodeInForm");
        $('#NC_PostCodeLookUpHelpMessage').hide();
    } else {
        setMessage(true, "Please enter a Postcode to get relevant addresses", "");
    }
}

function clickEnterAddressManually() {
    $('#NC_PostCodeLookUpHelpMessage').hide();
    $('#form_edit_addresses_body_address_list').hide();
    $("#form_edit_addresses_body_address").show();         
     
    $("#form_add_edit_addresses_ctr_text_addressname").val("");
    $("#form_add_edit_addresses_ctr_select_title").val("");    
    $("#form_add_edit_addresses_ctr_text_firstname").val("");
    $("#form_add_edit_addresses_ctr_text_lastname").val("");
    $("#form_add_edit_addresses_ctr_text_postcode").val("");
    $("#form_add_edit_addresses_ctr_text_addressname").val("");       
    $("#form_add_edit_addresses_ctr_text_addressline1").val("");
    $("#form_add_edit_addresses_ctr_text_addressline2").val("");
    $("#form_add_edit_addresses_ctr_text_city").val("");
    $("#form_add_edit_addresses_ctr_text_county").val("");
    $("select[id$='form_add_edit_addresses_ctr_select_country']").val("United Kingdom");
    
    if($('#container_choose_delivery_method_selection').hasClass('DIRECT_selected')) {
        $("#form_edit_addresses_body_address_address_name").hide();
    } else {
        $("#form_edit_addresses_body_address_name").hide();    
    }
        
//    if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
//        $("#form_add_edit_addresses_ctr_select_title").val("");    
//        $("#form_add_edit_addresses_ctr_text_firstname").val("");
//        $("#form_add_edit_addresses_ctr_text_lastname").val("");
//    } else {
//        $("#form_add_edit_addresses_ctr_text_addressname").val("");
//    }

}

function clickEnterAddressManuallyPopup() {
    $('#popup_add_edit_addresses_body_address_list').hide();
    //$('#form_edit_addresses_body_address_list').hide();
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
    
    if($('#container_choose_delivery_method_selection').hasClass('DIRECT_selected')) {
        $("#popup_add_edit_addresses_body_address_address_name").hide();
    } else {
        $("#popup_add_edit_addresses_body_address_name").hide();    
    }
        
//    if($("input[id$='hidden_selected_delivery_type']").val() == "D") {
//        $("#form_add_edit_addresses_ctr_select_title").val("");    
//        $("#form_add_edit_addresses_ctr_text_firstname").val("");
//        $("#form_add_edit_addresses_ctr_text_lastname").val("");
//    } else {
//        $("#form_add_edit_addresses_ctr_text_addressname").val("");
//    }

}

function clickEnterAddressManuallyPopupMM_CAT() {
    $('.popup_add_edit_addresses_body_postcode_search').hide();
    $('.mm_CAT_postcode').append($('#popup_add_edit_addresses_ctr_text_postcode'));
    $('.mm_CAT_postcode').append("<div class='mm_pc_back' onclick='javascript:backtoPClookupMM_CAT();'>Use post code look up</div>");
    clickEnterAddressManuallyPopup();
    postCodeCharacters();
}

function backtoPClookupMM_CAT() {
    $('.popup_add_edit_addresses_body_postcode_search').show();
    $('#popup_add_edit_addresses_body_address').hide();
    $('.postcodeSearchLine label').after($('#popup_add_edit_addresses_ctr_text_postcode'));
    //clickAddNewAddress();

    activeDeactiveAddressPopup(true, false, '');
}

function clickAddNewAddress() {
    $("#popup_add_edit_addresses_ctr_hid_mode").val("N");
    $("#popup_add_edit_addresses_ctr_hid_address_id").val("0");
    $("#popup_add_edit_addresses_ctr_hid_contact_id").val("0");
    //removeRedOutline();
    activeDeactiveAddressPopup(true, false, '');
}

function clickEditThisAddress(addressid, contactid, addressstring) {
    $("#popup_add_edit_addresses_ctr_hid_mode").val("E");
    $("#popup_add_edit_addresses_ctr_hid_address_id").val(addressid);
    $("#popup_add_edit_addresses_ctr_hid_contact_id").val(contactid);
    activeDeactiveAddressPopup(true, true, addressstring);
    if ($('.MainContent').hasClass('mm_CAT_camp')) {
        $('.popup_add_edit_addresses_body_postcode_search').hide();
        $('.mm_CAT_postcode').append($('#popup_add_edit_addresses_ctr_text_postcode'));
        $('.mm_CAT_postcode').append("<div class='mm_pc_back' onclick='javascript:backtoPClookupMM_CAT();'>Use post code look up</div>");
    }
}

function clickEditThisAddressInPostageOption() {
    $("input[id$='hidden_main_section']").val("A");
    __doPostBackCustom();
}

function clickSelectThisAddress(addressstring) {
    activeDeactiveAddressPopup(true, true, addressstring);
    if ($('.MainContent').hasClass('mm_CAT_camp')) {
        $('.popup_add_edit_addresses_body_postcode_search').hide();
        $('.mm_CAT_postcode').append($('#popup_add_edit_addresses_ctr_text_postcode'));
        $('.mm_CAT_postcode').append("<div class='mm_pc_back' onclick='javascript:backtoPClookupMM_CAT();'>Use post code look up</div>");
    }
}

function clickSelectThisAddressInForm(addressstring) {
    fillAddressForm(addressstring);
}

function clickAddThisAddressPopup() {
    var cnf='0';
    var msg = "Please be aware these products are only available to mainland UK. If you have entered an overseas address unfortunately the delivery will not be made.";

    if (validateAddressForm("P")) {
        if (cnf == "1") {
            setMessage(false, msg, '<p><a class="flowPurpleBtn" style="margin-right:10px;" onclick="updateProcess();">Continue</a><a class="flowPurpleBtn" onclick="hideMessage();">Cancel</a></p>');
            //setMessage(false, msg, '<a class="flowPurpleBtn" onclick="hideMessage();">Edit Address</a>');
            $('.CardErrorContents').addClass('bigger_height');
            //if (confirm(msg)) {
            //    updateAddress("P", "displayResutsOfAddressSavePopup");
            //    if ($('.MainContent').hasClass('mm_CAT_camp')) {
            //        $('.popup_add_edit_addresses_body_postcode_search').show();
            //        $('.postcodeSearchLine label').after($('#popup_add_edit_addresses_ctr_text_postcode'));
            //    }
        }
        else {
            updateAddress("P", "displayResutsOfAddressSavePopup");
            if ($('.MainContent').hasClass('mm_CAT_camp')) {
                $('.popup_add_edit_addresses_body_postcode_search').show();
                $('.postcodeSearchLine label').after($('#popup_add_edit_addresses_ctr_text_postcode'));
            }
        }
    }
}

function updateProcess() {
    hideMessage();
    updateAddress("P", "displayResutsOfAddressSavePopup");
    if ($('.MainContent').hasClass('mm_CAT_camp')) {
        $('.popup_add_edit_addresses_body_postcode_search').show();
        $('.postcodeSearchLine label').after($('#popup_add_edit_addresses_ctr_text_postcode'));
    }
}

function clickDeliverToThisAddress(address_id,addressstring, country) {
    if (addressstring.length > 0 && country.length>0) {
        $("input[id$='hidden_main_section']").val("P");
        $("input[id$='hidden_is_address_select']").val(address_id);
        $("input[id$='hidden_selected_address']").val(unescapeSpecialCharactors(addressstring));
        $("input[id$='hidden_selected_address_country']").val(country);
        //$("input[id$='hidden_potage_despatch_selected_date']").val("");
        __doPostBackCustom();
    }
}

function clickDeliverToThisAddressInFormEdit() {
    if(validateAddressForm("F")) {
        $("#form_add_edit_addresses_ctr_hid_mode").val("N");
        $("#form_add_edit_addresses_ctr_hid_address_id").val("0");
        $("#form_add_edit_addresses_ctr_hid_contact_id").val("0");
            
        updateAddress("F", "displayResutsOfAddressSaveForm");
    }
}

function changeViewBlock() {
    $('.lineView').removeClass('selectedView'); 
    $('#container_choose_delivery_method_my_contacts').addClass('AddressBlockView');
    $('.blockView').addClass('selectedView');
}

function clickChangeDateDispatch() {
    openDateTimePicker(1);
    $('.CalendarDatePicker_error').hide();  
}

function clickSelectDateDoNotOpen() {
    openDateTimePicker(2);
}

function changeViewList() {
    $('.blockView').removeClass('selectedView'); 
    $('#container_choose_delivery_method_my_contacts').removeClass('AddressBlockView');
    $('.lineView').addClass('selectedView'); 
}

function checkedAddDoNotOpen() {
    $(".postingOptions").hide();
    if($("#select_postage_date_and_option_donotopen_select_ctr_checkbox").is(":checked")) {
        $(".postingOptions").hide();
        $(".evelopeOptions").show();
    } else {
        $(".postingOptions").show();
        $(".evelopeOptions").hide();
        $('.edit_DNO_date').hide();
    }
    
    $(".edit_DNO_date").click(function(){
        $(".postingOptions").hide();
        $(".evelopeOptions").show();
    });
}

function DoNotOpenUntilClose() {
    $(".evelopeOptions").hide();
    $(".postingOptions").show();
    $('.edit_DNO_date').fadeIn();
}

function clickBack() {
    var qs = "";

    if ($("input[id$='detect_mobile_vp']").val() == "mobile_vp") {
        qs = "?mobile=true";

        if ($("input[id$='detect_mobile_vp_wc']").val() == "mobile_wc") {
            qs += "&mobile_vp_wc=true";
        }
    }

    //window.location.href = "" + (($("input[id$='detect_mobile_vp']").val()=="mobile_vp") ? "?mobile=true" : ""); //?flow=WC
    //window.location.href = "newFlow_Back.aspx" + qs;
    $('#page_stage').val($('#PAGE_DELIV_STAGE').val());
    __doPostBackCustom();
}

function validateFinal() {
    var result = true;
    if ($("input[id$='select_postage_date_and_option_phone_ctr_text']").length > 0) {
        if($("input[id$='select_postage_date_and_option_phone_ctr_text']").val().length==0) {
            result = false;
            setMessage(true, "Please enter a phone number!", null);
            $("input[id$='select_postage_date_and_option_phone_ctr_text']").focus();
        }
    }

    $('#ctl00_ContentPlaceHolder1_lbtConfirm').addClass('loader_active');
    //kcs
    $('#page_stage').val($('#PAGE_CONFI_STAGE').val());
    //alert('QQQ='+result);
    return result; 
}

function clickConfirm() { }

function clickPostageOption(cls) {
    $("." + cls).find('label').each(function(j, element)
    {
        DeliveryOptionsChanged($(element).html());              
    }); 
            
    $(".postage_options").find('input').each(function(j, element)
    {
        $(element).attr( "checked", false );            
    });
    
    $("." + cls).find('input').each(function(j, element)
    {
        $(element).attr( "checked", true );            
    });
    
    $("input[id$='hidden_selected_delivery_method_change']").val(cls);
    __doPostBackCustom();
    //getEstimatedDeliveryDate();

    //setTimeout(postageDestination, 2000);
    //postageDestination();
    //console.log('call clickPostageOption');
}

function postageDestination() {
    var activePostageOption = $('.postage_option.active b').text();
    var DespatchCountOptions = $('.postage_options div').length;
    if ( activePostageOption.indexOf('Standard First Class') !== -1 ) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " UKS");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate UKS left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Royal Mail aim to deliver 93% of 1st Class mail the next working day however, this can take 1-3 working days.');
    }
    if (activePostageOption.indexOf('Hermes Delivery') !== -1) {
        //$('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " UKS");
        //$('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate UKS left');
        //$('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Your package will be left in a safe place if no one is at home. On rare occasions delivery may take up to 2 days');
        $('.postage-option-info img').attr('src', '../../Images/NewFlow/hermes-logo.jpg').css('width','140px');
        $('.AddDoNotOpenMessage').hide();
    }
    if (activePostageOption.indexOf('Fast Track') !== -1) {
        $('.postage-option-info i').text('Royal Mail aim to deliver 93% of 1st Class mail the next working day however, this can take 1-3 working days.');
        $('.AddDoNotOpenMessage').hide();
    }
    if (activePostageOption.indexOf('Next Working Day') !== -1 || activePostageOption.indexOf('Saturday Guaranteed') !== -1) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " UKND");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate UKND left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Available for orders placed before 3pm on day of despatch. Signature required');
    }
    if ( activePostageOption.indexOf('Next Working Day Before 9am') !== -1 ) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " UKND9");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate UKND9 left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Available for orders placed before 3pm on day of despatch. Signature required');
    }
    if (activePostageOption.indexOf('Royal Mail 24 Tracked') !== -1) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + "");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Royal Mail 24 tracked delivery service aims to deliver 1 working day after your item has been posted. A signature is required upon receipt.');
    }
    if (activePostageOption.indexOf('Royal Mail Second Class') !== -1) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + "");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Royal Mail Second Class delivery service aims to deliver 2-3 working days after your item has been posted.');
    }
    if (activePostageOption.indexOf('Royal Mail First Class') !== -1) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + "");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate left');
        $('.postingOptions h2').text('Royal Mail Delivery Options');
        $('.postage-option-info i').text('Royal Mail First Class delivery service aims to deliver 1 working day after your item has been posted.');
    }
    if ( activePostageOption.indexOf('Airmail Rest') !== -1 ) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " AMROW");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate AMROW left');
        $('.postingOptions h2').text('Airmail Rest Of World Delivery');
        $('.postage-img').remove();
        $('.postage-option-info i').text('Please allow 7-10 working days for items to arrive.');
    }
    if ( activePostageOption.indexOf('Airmail Europe') !== -1 ) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " AMEU");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate AMEU left');
        $('.postingOptions h2').text('Airmail Europe Delivery');
        $('.postage-img').remove();
        $('.postage-option-info i').text('Please allow 3-5 working days for items to arrive.');
    }
    if (activePostageOption.indexOf('Australia Airmail') !== -1) {
        $('.postingOptions').removeClass().addClass("postingOptions left po_" + DespatchCountOptions + " AMROW");
        $('#wrapper_select_postage_date_and_option_despatch_post_date').removeClass().addClass('ChooseDeliveryDate AMROW left');
        $('.postingOptions h2').text('Australia Airmail');
        $('.postage-img').remove();
        $('.postage-option-info i').text('Please allow 7-10 working days for items to arrive.');
    }
    if (activePostageOption.indexOf('CANVAS 1ST CLASS') !== -1) {
        $('.po_text').text('');
    }
    if (activePostageOption.indexOf('Same Day Dispatch') !== -1) {
        $('.AddDoNotOpenMessage').hide();
    }
    //console.log('call activePostageOption');
    guaranteeCheck();
}

//BREADCRUMBS
$('.FlowProgressBar li:nth-of-type(2)').addClass('active');

//// SWITCH BETWEEN LOGIN AND REGISTER
//$('#btn_send_to_me').click(function() {
//    $('#container_choose_delivery_method_selection').removeClass('DIRECT_selected');
//    $('#container_choose_delivery_method_selection').addClass('BTM_selected');
//});
//	
//$('#btn_send_to_direct').click(function() {
//    $('#container_choose_delivery_method_selection').removeClass('BTM_selected');
//    $('#container_choose_delivery_method_selection').addClass('DIRECT_selected'); 
//});

function removeRedOutline() {
    $('.AddressFieldNotComplete').click(function() {
        $(this).removeClass('AddressFieldNotComplete');
    });
}

// MAKE ADDRESS LETTERS FIXED
function AddressLettersSticky() {	 
    $(window).scroll(function() {
        var stickyNavTop = $('.AddressList').offset().top;
		var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) { 
            $('.AddressListHeader').addClass('stickTop');
            $('.AddressLetters').addClass('stickTop');
            $('.AddressLetters').next().addClass('stickTop');
        } else {
            $('.AddressListHeader').removeClass('stickTop');
            $('.AddressLetters').removeClass('stickTop');
            $('.AddressLetters').next().removeClass('stickTop');
        }
    });
}

// CLOSE CARD ERROR POPUPS
function CloseCardErrorPopUp() {
    $('.CardError1').hide();
    $('.CardError2').hide();
    $('.CardError3').hide();
    $('.CardError4').hide();
    $('.SpecialPostageOption').hide();    
}

function SetPostage(po) {
    $("input[id$='hidden_special_postage']").val(po);
    __doPostBackCustom();
}

// CHANGE LIST TO DROPDOWN
function ChangeLetterList() {
    $('.AddressLetters ul').each(function() {
        var list = $(this), select = $(document.createElement('select')).insertBefore($(this).hide());

        $('>li', this).each(function () {
            var target = $(this).attr('onclick'),
            option = $(document.createElement('option'))
                .appendTo(select)
                .attr('onClick', target)
                .attr('value', $(this).html())
                .html($(this).html()
                ) 
        });
        list.remove();
    });

    //console.log('call ChangeLetterList');
    $('.AddressLetters select option[value="' + $('#letter_drop').val() + '"]').attr('selected', 'selected');
    $('.AddressLetters select option[value="All"]').attr('value','');
    
    //$('.AddressLetters select option:first-child').hide();
    if ($('#letter_drop').val()) {
        //$('.AddressLetters select').prepend($('<option class="feedback-opt">' + $('#letter_drop').val() + '</option>'));
    }
 
    $('.AddressLetters select').change(function() {
        var SelectedLetter = $(this).val();
        clickAddressBookLetter(SelectedLetter);

        var SelectedAll = 'ALL';
            
            //if( SelectedLetter == SelectedAll ){
            //    clickAddressBookLetter('');
            //    //alert('ALL');
            //}
            //else {
            //    clickAddressBookLetter(SelectedLetter);
            //}
        //alert(SelectedLetter); 

            
    });
}

// MOBILE ONLY FUNCTIONS
function MobileOnlyFuncs() {
    var windowwidth = $(window).width();
    if( windowwidth <= 735 ) {
        ChangeLetterList();
        //$('.AddressLetters').css('height','100px');
    }
}

checkProductType();

// CHECK FOR PRODUCT TYPE //
function checkProductType() {
    $('.del-cost span').html($('.postage_option.active').find('.p_price').text());
    //$('.btn-revert span').html($('.postage_option.active').find('.p_price').text());
    //CARDS
    if ($('#wrapper_main').data('prod-id') === 'prodID_5' || $('#wrapper_main').data('prod-id') === 'prodID_11' || $('#wrapper_main').data('prod-id') === 'prodID_20' || $('#wrapper_main').data('prod-id') === 'prodID_11' || $('#wrapper_main').data('prod-id') === 'prodID_139') {
        $('body').addClass('card_item');
        if (window.location.href.toUpperCase().indexOf("/IE/") > -1 || window.location.href.indexOf("/ie/") > -1) {
            $('.postage-option-info i').html('90% will be delivered within 1 day, but please allow up to 3 working days.');
        }
    }
    //POSTCARDS
    if ( $('#wrapper_main').data('prod-id') === 'prodID_37' || $('#wrapper_main').data('prod-id') === 'prodID_38' ) {
        $('body').addClass('postcard_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post postcard on:');
        $('.envelope_label').hide();
        $('.envelope_label_direct').hide();
    }
    //CALENDARS
    if ( $('#wrapper_main').data('prod-id') === 'prodID_7' || $('#wrapper_main').data('prod-id') === 'prodID_30' ) {
        $('body').addClass('calendar_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post calendar on:');
    }
    //WALL ART
    if ($('#wrapper_main').data('prod-id') === 'prodID_6' || $('#wrapper_main').data('prod-id') === 'prodID_29' || $('#wrapper_main').data('prod-id') === 'prodID_65' || $('#wrapper_main').data('prod-id') === 'prodID_90' || $('#wrapper_main').data('prod-id') === 'prodID_112' || $('#wrapper_main').data('prod-id') === 'prodID_114' || $('#wrapper_main').data('prod-id') === 'prodID_174') {
        $('body').addClass('wallart_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post wall art on:');
    }
    //FLOWERS
    if ($('#wrapper_main').data('prod-id') === 'prodID_13' || $('#wrapper_main').data('prod-id') === 'prodID_36' || $('#wrapper_main').data('prod-id') === 'prodID_64' ) {
        $('body').addClass('flowers_item');
        $('body').addClass('giftInFlow');
        $('.ChooseDeliveryDate .EsitimatedDeliveryDate h2').text('DELIVERY Date:');
        $('.postage-option-info img').remove();
        $('.postage-img').remove();
        //replaceDeliveryTitles();
        //$('.ChooseDeliveryDate p').text('The flowers will be delivered on:');
        //$('.deliveryStage h2:first').text('Deliver flowers on:');
        //$('.EsitimatedDeliveryDate ').hide();
        
        //$('.postingOptions h2').html('Courier Delivery Options');
        $('.postage-option-info i').html('Please note: Your flowers will be delivered by a courier between 7am and 7pm on your chosen delivery date.');
        //$('#wrapper_select_postage_date_and_option .contentHolder h1').text('2. Select a delivery date and option');

        $('.do_tel_no .do_tel_no_title').html('Mobile telephone number');
        $('.do_tel_no .do_hint').html('Our Courier will send a text to this Mobile No. to confirm the delivery slot for your flowers or use it to contact you about any issues related to this order (it will be included on the packaging).');

    }
    //Food Gifts
    if ($('#wrapper_main').data('prod-id') === 'prodID_77' ) {
        $('body').addClass('foodGift_item');
         $('body').addClass('giftInFlow');
        //replaceDeliveryTitles();
        $('.ChooseDeliveryDate p').text('The Food Gift will be delivered on:');
        $('.deliveryStage h2:first').text('Deliver Food Gift on:');
        $('.postage-img').remove();
        //$('.EsitimatedDeliveryDate ').hide();

        $('.postingOptions h2').html('Courier Delivery Options');
        $('.postage-option-info i').html('Please note: Your Food Gift will be delivered by a courier between 7am and 7pm on your chosen delivery date.');
        //$('#wrapper_select_postage_date_and_option .contentHolder h1').text('2. Select a delivery date and option');
    }
    //ALCOHOL
    if ( $('#wrapper_main').data('prod-id') === 'prodID_18' || $('#wrapper_main').data('prod-id') === 'prodID_75' || $('#wrapper_main').data('prod-id') === 'prodID_57' ) {
        $('body').addClass('alcohol_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post alcohol on:');
        $('.postage-img').remove();
        
        $('.postingOptions h2').html('Courier Delivery Options');
        $('.postingOptions p.po_text').hide();
    }
    //NOTEBOOKS
    if ($('#wrapper_main').data('prod-id') === 'prodID_24' || $('#wrapper_main').data('prod-id') === 'prodID_26' || $('#wrapper_main').data('prod-id') === 'prodID_137' || $('#wrapper_main').data('prod-id') === 'prodID_138' || $('#wrapper_main').data('prod-id') === 'prodID_175') {
        $('body').addClass('notebook_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post notebook on:');
    }
    //EXPERIENCE GIFTS
    if ($('#wrapper_main').data('prod-id') === 'prodID_33') {
        $('body').addClass('experience_item');
        $('body').addClass('giftInFlow');
        $('.btn-guarantee span').text('£7.49');
        replaceDeliveryTitles();
    }
    //MUGS
    if ($('#wrapper_main').data('prod-id') === 'prodID_25' || $('#wrapper_main').data('prod-id') === 'prodID_27' || $('#wrapper_main').data('prod-id') === 'prodID_123') {
        $('body').addClass('mug_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post mug on:');
    }
    //CHINA MUGS
    if ($('#wrapper_main').data('prod-id') === 'prodID_123') {
        $('body').addClass('mug_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post mug on:');
        $('.postage-option-info i').html('Royal Mail Second Class delivery service aims to deliver 2-3 working days after your item has been posted.');
    }
    //BEARS
    if ($('#wrapper_main').data('prod-id') === 'prodID_35' || $('#wrapper_main').data('prod-id') === 'prodID_39' || $('#wrapper_main').data('prod-id') === 'prodID_40') {
        $('body').addClass('bear_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post bear on:');
    }
    //T-SHIRTS
    if ($('#wrapper_main').data('prod-id') === 'prodID_58' || $('#wrapper_main').data('prod-id') === 'prodID_59' || $('#wrapper_main').data('prod-id') === 'prodID_107' || $('#wrapper_main').data('prod-id') === 'prodID_108') {
        $('body').addClass('tshirt_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post t-shirt on:');
    }
    //STAG HEN T-SHIRTS
    if ($('#wrapper_main').data('prod-id') === 'prodID_107' || $('#wrapper_main').data('prod-id') === 'prodID_108') {
        $('body').addClass('tshirt_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post t-shirt on:');
        $('..postage-option-info i').html('Available for order placed before 11am on the day of despatch. Signature required.');

    }
    //PHONE CASES
    if ( $('#wrapper_main').data('prod-id') === 'prodID_60' || $('#wrapper_main').data('prod-id') === 'prodID_61' || $('#wrapper_main').data('prod-id') === 'prodID_62' || $('#wrapper_main').data('prod-id') === 'prodID_63' ) {
        $('body').addClass('cases_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post case on:');
        $('.postage-option-info i').html('Please note: Your ballon will be delivered by a courier between 7am and 7pm on your chosen delivery date.');
    }
    //TOTE BAGS
    if ( $('#wrapper_main').data('prod-id') === 'prodID_69' || $('#wrapper_main').data('prod-id') === 'prodID_72' ) {
        $('body').addClass('totebag_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post tote bag on:');

    }
    //CUSHIONS
    if ( $('#wrapper_main').data('prod-id') === 'prodID_70' || $('#wrapper_main').data('prod-id') === 'prodID_73' ) {
        $('body').addClass('cushions_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post cushion on:');        
    }
    //APRONS
    if ($('#wrapper_main').data('prod-id') === 'prodID_71' || $('#wrapper_main').data('prod-id') === 'prodID_74' || $('#wrapper_main').data('prod-id') === 'prodID_97' || $('#wrapper_main').data('prod-id') === 'prodID_96') {
        $('body').addClass('aprons_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post apron on:');
    }  
    //BOOKS
    if ($('#wrapper_main').data('prod-id') === 'prodID_76') {
        $('body').addClass('books_item');
        $('body').addClass('giftInFlow');
        $('.postage-img').remove();
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post book on:');
        $('.postage-option-info i').html('Royal Mail Second Class delivery service aims to deliver 2-3 working days after your item has been posted.');
    }
    //BOOKS
    if ($('#wrapper_main').data('prod-id') === 'prodID_136') {
        $('body').addClass('books_item');
        $('body').addClass('giftInFlow');
        $('.postage-img').remove();
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post book on:');
    }
    //MONEY BOX
    if ( $('#wrapper_main').data('prod-id') === 'prodID_78' || $('#wrapper_main').data('prod-id') === 'prodID_79' ) {
        $('body').addClass('moneybox_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post money box on:');
    }
    //LUNCH BAG
    if ($('#wrapper_main').data('prod-id') === 'prodID_85' || $('#wrapper_main').data('prod-id') === 'prodID_84') {
        $('body').addClass('lunchbag_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post lunch bag on:');
    }
    //BACK PACK
    if ($('#wrapper_main').data('prod-id') === 'prodID_83' || $('#wrapper_main').data('prod-id') === 'prodID_82') {
        $('body').addClass('backpack_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post backpack on:');
    }
    //PENCIL CASE
    if ($('#wrapper_main').data('prod-id') === 'prodID_86' || $('#wrapper_main').data('prod-id') === 'prodID_87') {
        $('body').addClass('pencil_case_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post pencil case on:');
    }
    //GYM BAG
    if ($('#wrapper_main').data('prod-id') === 'prodID_88' || $('#wrapper_main').data('prod-id') === 'prodID_89') {
        $('body').addClass('gym_bag_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post gym bag on:');
    }
    //WATER BOTTLE
    if ( $('#wrapper_main').data('prod-id') === 'prodID_92' || $('#wrapper_main').data('prod-id') === 'prodID_94' || $('#wrapper_main').data('prod-id') === 'prodID_125')  {
        $('body').addClass('water_bottle_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post water bottle on:');
    }
    //BOOK BAG
    if ($('#wrapper_main').data('prod-id') === 'prodID_95' || $('#wrapper_main').data('prod-id') === 'prodID_96') {
        $('body').addClass('book_bag_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post book bag on:');
    }
    //TABARD
    if ($('#wrapper_main').data('prod-id') === 'prodID_100' || $('#wrapper_main').data('prod-id') === 'prodID_99') {
        $('body').addClass('tabard_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post tabard on:');
    }
    //CHILDS FLASK
    if ($('#wrapper_main').data('prod-id') === 'prodID_91' || $('#wrapper_main').data('prod-id') === 'prodID_93') {
        $('body').addClass('waterbottle_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post water bottle on:');
    }
    //BALLOONS
    if ($('#wrapper_main').data('prod-id') === 'prodID_103' || $('#wrapper_main').data('prod-id') === 'prodID_104') {
        $('body').addClass('balloon_item');
        $('body').addClass('giftInFlow');
        $('.ChooseDeliveryDate .EsitimatedDeliveryDate h2').text('DELIVERY Date:');
        $('.postage-img').remove();
        //replaceDeliveryTitles();
        //$('.ChooseDeliveryDate p').text('The balloon will be delivered on:');
        //$('.deliveryStage h2:first').text('Deliver balloon on:');
        //$('.EsitimatedDeliveryDate ').hide();

        $('.postingOptions h2').html('Courier Delivery Options');
        $('.postage-option-info i').html('Please note: Your ballon will be delivered by a courier between 7am and 7pm on your chosen delivery date.');
        $('#wrapper_select_postage_date_and_option .contentHolder h1').text('2. Select a delivery date and option');
    }
    //NON PERS GIFTS
    if ($('#wrapper_main').data('prod-id') === 'prodID_109') {
        $('body').addClass('giftInFlow');
        $('body').addClass('NPPInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post gift on:');
    }
    //NEW PERS GIFTS
    if ($('#wrapper_main').data('prod-id') === 'prodID_124') {
        $('body').addClass('giftInFlow');
        $('body').addClass('NPPInFlow');
        $('.btn-guarantee').remove();
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post gift on:');
    }
    //KEYRINGS
    if ($('#wrapper_main').data('prod-id') === 'prodID_116' || $('#wrapper_main').data('prod-id') === 'prodID_115') {
        $('body').addClass('keyring_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post Keyring on:');
    }

    //COASTERS
    if ($('#wrapper_main').data('prod-id') === 'prodID_117' || $('#wrapper_main').data('prod-id') === 'prodID_118') {
        $('body').addClass('coaster_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post Coasters on:');
    }

    //CHOCOLATE BOXES
    if ($('#wrapper_main').data('prod-id') === 'prodID_120' || $('#wrapper_main').data('prod-id') === 'prodID_122') {
        $('body').addClass('chocBox_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        //$('.deliveryStage h2:first').text('Post Photo Chocolate Box on:');
    }

    //GLASSES
    if ($('#wrapper_main').data('prod-id') === 'prodID_121' || $('#wrapper_main').data('prod-id') === 'prodID_173') {
        $('body').addClass('glasses_item');
        $('body').addClass('giftInFlow');
        $('.postage-img').remove();
        replaceDeliveryTitles();
        $('.postage-option-info i').html('Royal Mail Second Class delivery service aims to deliver 2-3 working days after your item has been posted.');
    }

    //BAUBLES
    if ($('#wrapper_main').data('prod-id') === 'prodID_132' || $('#wrapper_main').data('prod-id') === 'prodID_133') {
        $('body').addClass('bauble_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //SANTA LETTERS
    if ($('#wrapper_main').data('prod-id') === 'prodID_130' || $('#wrapper_main').data('prod-id') === 'prodID_131') {
        $('body').addClass('letter_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //MAGNETS
    if ($('#wrapper_main').data('prod-id') === 'prodID_141' || $('#wrapper_main').data('prod-id') === 'prodID_142') {
        $('body').addClass('magnet_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //CANDLES
    if ($('#wrapper_main').data('prod-id') === 'prodID_151' || $('#wrapper_main').data('prod-id') === 'prodID_152') {
        $('body').addClass('candle_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //PHOTO BLOCK
    if ($('#wrapper_main').data('prod-id') === 'prodID_170') {
        $('body').addClass('photoblock_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //PENS
    if ($('#wrapper_main').data('prod-id') === 'prodID_171') {
        $('body').addClass('pen_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //SOCKS
    if ($('#wrapper_main').data('prod-id') === 'prodID_176') {
        $('body').addClass('sock_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //SNOW GLOBES
    if ($('#wrapper_main').data('prod-id') === 'prodID_177') {
        $('body').addClass('snowglobe_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
    }

    //WRAPPING PAPER
    if ($('#wrapper_main').data('prod-id') === 'prodID_178') {
        $('body').addClass('wrappingpaper_item');
        $('body').addClass('giftInFlow');
        replaceDeliveryTitles();
        $('.postage_label0 label').html('<b>Standard First Class Post</b><span class="wrapping-paper-delivery">Your wrapping paper will arrive <u>folded</u>.</span><img class="postage-img" src="/assets/dist/images/StampFirstClass.png">');
        $('.postage_label1 label').html('<b>Hermes Delivery</b><span class="wrapping-paper-delivery">Your wrapping paper will arrive <u>rolled in a tube</u>.</span><img style="width:110px;" class="postage-img" src="/assets/dist/images/hermes-logo.jpg">');
    }

    //WEDDING STATIONERY
    if ($('#wrapper_main').data('prod-id') === 'prodID_143' ||
        $('#wrapper_main').data('prod-id') === 'prodID_144' ||
        $('#wrapper_main').data('prod-id') === 'prodID_145' ||
        $('#wrapper_main').data('prod-id') === 'prodID_146' ||
        $('#wrapper_main').data('prod-id') === 'prodID_147' ||
        $('#wrapper_main').data('prod-id') === 'prodID_148' ||
        $('#wrapper_main').data('prod-id') === 'prodID_149' ||
        $('#wrapper_main').data('prod-id') === 'prodID_150' ||
        $('#wrapper_main').data('prod-id') === 'prodID_153' ||
        $('#wrapper_main').data('prod-id') === 'prodID_154' ||
        $('#wrapper_main').data('prod-id') === 'prodID_155' ||
        $('#wrapper_main').data('prod-id') === 'prodID_156' ||
        $('#wrapper_main').data('prod-id') === 'prodID_157' ||
        $('#wrapper_main').data('prod-id') === 'prodID_158' ||
        $('#wrapper_main').data('prod-id') === 'prodID_159' ||
        $('#wrapper_main').data('prod-id') === 'prodID_160' ||
        $('#wrapper_main').data('prod-id') === 'prodID_161' ||
        $('#wrapper_main').data('prod-id') === 'prodID_162' ||
        $('#wrapper_main').data('prod-id') === 'prodID_163' ||
        $('#wrapper_main').data('prod-id') === 'prodID_164' ||
        $('#wrapper_main').data('prod-id') === 'prodID_165' ||
        $('#wrapper_main').data('prod-id') === 'prodID_166' ||
        $('#wrapper_main').data('prod-id') === 'prodID_167' ||
        $('#wrapper_main').data('prod-id') === 'prodID_168' ) {

            $('body').addClass('weddingstationery_item');
            $('body').addClass('giftInFlow');
            $('#btn_send_to_direct').addClass('disabled_option');
            //clickBackToMe();
            replaceDeliveryTitles();
            $('.postage-option-info p').html('Please allow 1-3 days for delivery. Signature may be required.');
    }

    function replaceDeliveryTitles() {
        $('#btn_send_to_me h2').text('Send back to yourself');
        //$('.ChooseDeliveryDate p').text('First available date we can send your item is:');
    }

}

var currentDeliverDate = $('#ctl00_ContentPlaceHolder1_hidden_potage_despatch_selected_date').val();
var currentDeliverDay = currentDeliverDate.substr(0, 2);
var currentDeliverMonth = $('#potage_despatch_month').html();
//console.log(currentDeliverDay + currentDeliverMonth);

var AddMDDelivery = function () {

    if ($('body').hasClass('flowers_item')) {

        $('<div class="md_delivery_option left"><p>Deliver on Mother&apos;s Day</p><p class="mm_sub_text">Free courier delivery on Sunday 11th March</p><p class="mm_price">+£0.00</p></div>').insertAfter('#ctl00_ContentPlaceHolder1_rbtPostageOptions');

        if (currentDeliverDate == '11/03/2018') {
            $('.postage_option').removeClass('active');
            $('.md_delivery_option').addClass('active');
        }

    }

}

//AddMDDelivery();

var SelectMDOption = function () {
    $('.postage_option').removeClass('active');
    $('.md_delivery_option').addClass('active');
    $('#ctl00_ContentPlaceHolder1_hidden_potage_despatch_selected_date').attr('value', '11/03/2018');
    $('#potage_despatch_day').html('11');
    $('#potage_despatch_month').html('MAR');
}

$('.md_delivery_option').click(function () {
    SelectMDOption();
});

//$('.postage_options').click(function () {
//    $('.md_delivery_option').removeClass('active');
//    $('#ctl00_ContentPlaceHolder1_hidden_potage_despatch_selected_date').attr('value', currentDeliverDate);
//    $('#potage_despatch_day').html(currentDeliverDay);
//    $('#potage_despatch_month').html(currentDeliverMonth);
//});

function noAddressLookup() {
    //CHECK IF ADDRESSES EXISTS
    if ($('#form_edit_addresses').hasClass('no_addresses')) {
        $('.deliveryStage h2:first').text('Send to:');
    }
}

// DETECT MOBILE BROWSER AND STORE HIDDEN VALUE //
var windowwidth = $(window).width();
if ( windowwidth <= 736 ) {
    $("input[id$='detect_mobile_vp']").val("mobile_vp");
}
//---------------------------------------------------------------------------------------------
function csCustomE(csSection) {
    window._uxa = window._uxa || [];
    window._uxa.push(['trackPageview', window.location.pathname + window.location.hash.replace('#', '?__') + '?cs-delivery-type=' + csSection + '']);
    console.log(csSection);
}
