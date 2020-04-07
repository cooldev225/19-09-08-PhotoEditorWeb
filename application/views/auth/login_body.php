<!--login page start-->
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/login/NewFlowLoginReg.css"/>
<script language="javascript" type="text/javascript">
    function showProgress() {
        //document.getElementById("nextProgressDiv").style.display = "block";
        //document.getElementById("nextProgressDiv").style.display = "block";
        //document.getElementById("nextProgressDiv2").style.display = "block";
        return true;
    }
</script>
<div id="fancierbox_ppsso" style="display:none;"></div>
<!-- FACEBOOK BENEFITS -->
<div class="fancierbox_hat fb_sso" style="display:none;">
    <div id="shortlistPopup">
        <div class="hat_header">The Benefits of Logging in with Facebook</div>
        <p>Use your Facebook account to log into buddywisher to see your friends' upcoming birthdays and speed up registration and log in. Existing buddywisher member? Don’t worry - you can link your accounts!</p>
        <div class="fancier_close_btn" onclick="$('.fancierbox_hat').removeClass('block');"></div>
    </div>
</div>
<!-- PAYPAL BENEFITS -->
<div class="fancierbox_hat pp_sso" style="display:none;">
    <div id="shortlistPopup">
        <div class="hat_header">The Benefits of Logging in with Paypal</div>
        <p>Use your PayPal e-mail address and password to create a buddywisher account with the ability to utilise the seamless checkout function. Existing buddywisher member? Don’t worry - you can link your accounts!</p>
        <div class="fancier_close_btn" onclick="$('.fancierbox_hat').removeClass('block');"></div>
    </div>
</div>
<!-- AMAZON BENEFITS -->
<!--div class="fancierbox_hat amazon_sso" style="display:none;">
    <div id="shortlistPopup">
        <div class="hat_header">The Benefits of Logging in with Amazon</div>
        <p>Use your Amazon e-mail address and password to create a buddywisher account, you will also have access to Amazon Payments, meaning you can securely pay with your credit or debit card attached to your Amazon account. Existing buddywisher member? Don’t worry - you can link your accounts!</p>
        <div class="fancier_close_btn" onclick="$('.fancierbox_hat').removeClass('block');"></div>
    </div>
</div-->

<div id="wrapper_whole" class="MainContent clearfix"><!--WRAPPER-->
    <!--CONTENT WRAPPER-->
    <div class="contentHolder LoginPage clearfix">
        <h1>Login/Register</h1>
        <!-- REGISTER (NEW LOGIN) -->
        <div class="new_login_half" style="display:none;">
            <h2>New to buddywisher?</h2>
            <a href="/pages/customeradd.aspx?type=register" class="flowPurpleBtn register">Sign me up now!</a>
        </div>
        <!--LOGIN SECTION-->
        <div id="LoginPanelLeft" class="left">
            <h2>Sign in or register as a new customer</h2>
            <div id="ctl00_ContentPlaceHolder1_uc_customer_login21_loginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_ContentPlaceHolder1_uc_customer_login21_imgbutton&#39;)">
                <div class="CommonWhiteBox">  
                    <!-- LOGOUT MESSAGE -->    
                    <span id="ctl00_ContentPlaceHolder1_uc_customer_login21_lblLogOutMsg" class="itemDescription"></span>  
                    <!--EMAIL ADDRESS FIELD-->
                    <h4>What is your email address?</h4>
                    <div class="loginField">
                        <div class="red-ast"><span></span></div>
                        <input name="ctl00$ContentPlaceHolder1$uc_customer_login21$txtLoginEmail" type="email" id="ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail" name="email" placeholder="Email Address" required="" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail;?>" />
                        <label for="email" style="display:none;">Enter email address</label>
                        <span id="ctl00_ContentPlaceHolder1_uc_customer_login21_RequiredFieldValidator4" class="error_show" style="visibility:hidden;">A email address is required</span>
                    </div>
                    <!-- NEW CUSTOMER RADIO BUTTON -->
                    <div class="radioButtonLine clickNewCustomer">
                        <span><input id="NewCustomer" name="LoginOption" type="radio" /></span>
                        <span><label for="NewCustomer">I am a new customer</label></span>
                        <p>You will create a password when in register</p>
                    </div>
                    <!-- RETURNING CUSTOMER RADIO BUTTON -->
                    <div class="radioButtonLine clickPassword">
                        <span><input checked id="ReturningCustomer" name="LoginOption" type="radio" /></span>
                        <span><label for="ReturningCustomer">I am a returning customer and my password is...</label></span>
                    </div>
                    <div class="returningCustomerOptions">
                        <div class="cover"></div>
                        <!-- PASSWORD FIELD -->
                        <div class="loginField">
                            <div class="red-ast"><span></span></div>
                            
                            <input name="ctl00$ContentPlaceHolder1$uc_customer_login21$txtLoginPassword" type="password" id="ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword" placeholder="password" autocomplete="off" required="" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword;?>" />
                            <label for="password" style="display:none;">Enter password</label>
                            <div class="LoginErrorHolder"><span id="ctl00_ContentPlaceHolder1_uc_customer_login21_RequiredFieldValidator5" class="error_show" style="visibility:hidden;">Password is required</span></div>
                        </div> 

                        <!-- FORGOTTEN PASSWORD LINK -->
	                    <a class="smallPurpleLink forgottenPW">Forgotten password?</a>
                        
                        <!-- SHOW PASSWORD -->
                        <div class="showPasswordFeature">Show Password</div>
                          
                    </div>
                  
                    <!--LOGIN BTN-->
                    <a id="ctl00_ContentPlaceHolder1_uc_customer_login21_imgbutton" class="flowPurpleBtn signin" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions('ctl00$ContentPlaceHolder1$uc_customer_login21$imgbutton','', true,'vgLogin','', false, true))">
                        <div class="checkout_loader"></div>Login
                    </a>

                    <a id="ctl00_ContentPlaceHolder1_uc_customer_login21_lbtNewCustomer" class="flowPurpleBtn register" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$uc_customer_login21$lbtNewCustomer','')"><div class="checkout_loader"></div>Register as New Customer</a>
                    <div id="ctl00_ContentPlaceHolder1_uc_customer_login21_ValidationSummary2" style="display:none;">
					</div>
                    <div class="InvalidDetails">
                    	<span id="ctl00_ContentPlaceHolder1_uc_customer_login21_lblMessage2"><?php echo $error_email_mssage;?></span>
                    </div>                  
                </div>            
			</div>
        </div>
        <div class="CenterOR left">Or</div>
        <div id="RegisterPanelRight" class="right">
	        <h2><span>Save time! </span>Login using your favourite website</h2>
	        <div class="CommonWhiteBox">
	            <p>Logging in using another website means you won’t have to fill out our registration forms.</p>
	            <!-- PAYPAL LOGIN -->
	            <div id="ctl00_ContentPlaceHolder1_uc_customer_login21_div_paypal_login_button" class="paypal_btn">   
	                <a class="btn_login_ppsso" onclick="javascript:OpenPaypallogin()" style="cursor:pointer;">
	                    <img src="/assets/dist/images/paypal_btn.gif" id="btn_paypal_login" alt="Login with Paypal" />
	                </a>
	                <span class="paypalSSO_benefits">?</span>
	            </div>
	            <!-- FACEBOOK LOGIN -->
	            <div id="ctl00_ContentPlaceHolder1_uc_customer_login21_div_fb_login_button" class="fb_btn">
	                <a href="javascript://" onclick="LoginWithFB()" class="btn_login_fbsso">
	                    <img src="/assets/dist/images/fb_btn.gif" />
	                </a>
	                <span class="fb_sso_benefits">?</span>
	            </div>
	            <!--div class="sso_Amazon">
	                <div id="AmazonPayButton"></div>                
	            </div-->
	        </div>
	    </div>
    </div><!--END CONTENT WRAPPER--> 
</div><!--END WRAPPER-->
<input name="ctl00$ContentPlaceHolder1$uc_customer_login21$blank_customerother_obj" type="hidden" id="ctl00_ContentPlaceHolder1_uc_customer_login21_blank_customerother_obj" value="{
  &quot;Name&quot;: null,
  &quot;FirstName&quot;: null,
  &quot;LastName&quot;: null,
  &quot;BirthDay&quot;: null,
  &quot;AgeRange&quot;: null,
  &quot;Email&quot;: null,
  &quot;Phone&quot;: null,
  &quot;Origin&quot;: null,
  &quot;RegUserID&quot;: 0,
  &quot;PayerId&quot;: null,
  &quot;UserAddress&quot;: null
}" />
<input type="hidden" name="ctl00$ContentPlaceHolder1$uc_customer_login21$detect_mobile_vp" id="ctl00_ContentPlaceHolder1_uc_customer_login21_detect_mobile_vp" value="normal_vp" />
<script type="text/javascript">
window.onload = function() {
    var val = '';
    var val_btn = '';
    var message = '';
    
    var windowwidth = $(window).width();
    if ( windowwidth <= 737 ) {
        //window.location.href = 'CustomiseCardsMobile.aspx';
        $('#ctl00_ContentPlaceHolder1_uc_customer_login21_detect_mobile_vp').attr('value','mobile_vp');
    }  

    if("0" == "1") {
        val = 'Paypal'
        val_btn = '<div class="fancier_box_ppsso"><img src="/assests/dist/images/btn_paypalSSO.png" id="btn_paypal_login" alt="Login with Paypal" style="cursor:pointer;" onclick="javascript:OpenPaypallogin();" /></div>';
    }
    
    if("0" == "1") {
        val = 'Facebook'
        val_btn = '<div><a href="javascript://" onclick="LoginWithFB()"><img src="/assets/dist/images/fb_sso.png" /></a></div>';
    }
    
    if(val.length>0) {
        //message = '<p>You have login to buddywisher using ' + val + ' before. Do you want to log with ' + val + ' </p>';
        message = '<p>You have previously logged in with ' + val + ' .Click the "log in with ' + val + '" button and enter your ' + val + ' e-mail and password to log in to buddywisher.com</p>';
        message += val_btn;
        message += '<div class="fancier_close_btn" onclick="$(\'#fancierbox_ppsso\').removeClass(\'block\');"></div>'; 
        DisplayError("Warning!", message, false);    
        $('#shortlistPopup').removeClass('fb_login');
    }
}

window.fbAsyncInit = function() {
    FB.init({ appId: '167260339461', status: true, cookie: false, xfbml: true, oauth: true });
    
    FB.getLoginStatus(function(response) {
        if (response.status == 'connected') {                                    
            if("" == "true") {
                FB.logout(function(response) { });
            }
        }    
    });
};

(function() {
    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.src = document.location.protocol +
    '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
} ());

function LoginWithFB() {
    FB.getLoginStatus(function(response) {
        if (response.status == 'connected') {                                    
            FB.api('/me?fields=first_name, last_name, gender, email, name, birthday', function (response) {
                //console.log(response); return;
                ShawMessageFBAlredyLog(response);
            });
        }
        else {        
            FB.login(function(response) {
                if (response.authResponse) {
                    FB.api('/me?fields=first_name, last_name, gender, email, name, birthday', function (response) {
                        getUserInfor(response);                        
                    });
                } else { }
            }, {scope: 'public_profile,email,user_birthday,user_photos'})    //,friends_photos,friends_birthday      
        }
    });
}

function GoToRegisterPage() {
    var em = $("#ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail").val();
    window.location.href = "/Pages/CustomerAdd.aspx?type=register&email=" + em;
}

function ShawMessageFBAlredyLog(response) {    
    message = '<p>You are currently logged into facebook with the account using email address <strong>' + response.email + '</strong>. To use this account, click the <strong>"Continue with Current Account"</strong> button below.</p>';
    message += '<div class="btn_purple fb_login_currentAccount" onclick="javascript:DoLogWithFB();">Continue with Current Account</div>';
    message += '<div class="fb_or_devide"><p>or</p></div>';
    message += '<div class="btn_purple fb_logout_currentAccount" onclick="javascript:LogOffWithFB();">Sign out of current Facebook account</div>';
    message += '<div class="btn_purple fb_close" onclick="javascript:CancelLogWithFB();"></div>';    
    message += '<div><br /></div>';
    DisplayError("Hi " + response.first_name + ' ' + response.last_name, message, false);
}

function DoLogWithFB() {
    CloseError();
    
    FB.getLoginStatus(function(response) {
        if (response.status == 'connected') {                                  
            FB.api('/me?fields=first_name, last_name, gender, email, name, birthday', function (response) {
                 getUserInfor(response);
            });
        }
    });
}

function LogOffWithFB() {
    FB.logout(function(response) { window.location.reload(); });
}

function CancelLogWithFB() {
    $('#ctl00_ContentPlaceHolder1_uc_customer_login21_div_fb_login_button').removeClass('block');
    CloseError();
}

function getUserInfor(res) {
    console.log(res);
    console.log(res.birthday);
    temp = $("#ctl00_ContentPlaceHolder1_uc_customer_login21_blank_customerother_obj").val();    
    if (temp != "") 
    {
        ShawloginProcessOngoing();
        
        var new_cs = JSON.parse(temp);        
        new_cs.Name = res.name;
        new_cs.FirstName = res.first_name;
        new_cs.LastName = res.last_name;
        new_cs.BirthDay = ((res.birthday === undefined) ? "" : res.birthday);
        new_cs.AgeRange = ((res.age_range === undefined) ? "" : res.age_range);
        new_cs.Email = res.email;
        new_cs.Origin = "FB";
        new_cs.PayerId = res.id;
        
        var str_cs = JSON.stringify(new_cs);
        
        //window.location.href = 'FBLoginReturn.aspx?cs=' + str_cs;

        $.ajax({
            type: "POST",
            url: "/Pages/FBLoginReturn.aspx",
            data: { cs: str_cs },
            dataType: "html",
            success: function(theResponse) {
            
                //console.log(theResponse);
                
                switch(theResponse)
                {
                    case "-1":
                    {
                        CloseloginProcessOngoing();
                        DisplayError("Unauthorized access!", "System could not process your request. Some of your requesting data not in expected manner. Please try to process again.", true);
                        break;
                    }
                    case "-2":
                    {
                        CloseloginProcessOngoing();
                        DisplayError("System Error!", "An error occurs while processing your request. Please try to process it again.", true);
                        break;
                    }
                    default:
                    {
                        window.location.href = theResponse;
                        break;
                    }                    
                }
            }
        });
    }
}

function OpenPaypallogin() {
    var paypal_mode = "live";
    var string_paypal_url = ((paypal_mode=="sandbox") ? "https://www.sandbox.paypal.com" : "https://www.paypal.com") + "/webapps/auth/protocol/openidconnect/v1/authorize?client_id=AR3ZnxC16i8vqAlGYmy6c_sX6JdtSsrLPCRo9xFsIhtPR25PQinrEITj0qpF&response_type=code&scope=profile+email+address+phone+https%3A%2F%2Furi.paypal.com%2Fservices%2Fpaypalattributes+https%3A%2F%2Furi.paypal.com%2Fservices%2Fexpresscheckout&redirect_uri=https://www.buddywisher.com/auth/paypalLogin";    
    var w = window.innerWidth;
    var h = window.innerHeight;
    var popW = 400, popH = 550;
    var popT = ((h/2) - (popH/2)), popL = ((w/2) - (popW/2));
    window.open(string_paypal_url, "_blank", "toolbar=no, scrollbars=no, resizable=no, width=" + popW + ", height=" + popH + ", top=" + popT + ", left=" + popL);
}

function DisplayError(heading, message, isOkbt)
{
    var erHtml = '<div id="shortlistPopup" class="fb_login">';
                   erHtml += '<div class="hat_header">' + heading + '</div>';
                   erHtml += message
                   if(isOkbt) { erHtml += '<div class="btn_close_div_popop_message" onclick="javascript:CloseError();">OK</div>'; }
                erHtml += '</div>';
                
    $("#fancierbox_ppsso").html(erHtml);
    $('#fancierbox_ppsso').addClass('block');
}

function CloseError() {
    $('#fancierbox_ppsso').removeClass('block');
}

function ShawloginProcessOngoing() {
    $("#fancierbox_ppsso").html('<div class="login_in_prograss"><div id="shortlistPopup" class="fb_login fb_connection"><div class="hat_header">Connecting with Facebook</div><p>Connecting...</p><div class="meter"><span><span></span></span></div></div></div>');
    $('#fancierbox_ppsso').addClass('block');
}

function CloseloginProcessOngoing() {
    CloseError();
}

removeFieldDefault();

function removeFieldDefault () {
//    var txInputSelect = $('#ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail');
//    txInputSelect.focus(function(){
//          if ($(this).val() == "Email"){
//                   $(this).val("");
//          }
//          //var test = $(this).val("");
//          //alert(test);
//    });
            
//    txInputSelect.blur(function(){
//          if ($(this).val() == ""){
//                   $(this).val("Email");
//          }
//    });
    var txtInputPW = $('#ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword');
    txtInputPW.focus(function(){
        if ($(this).val() == ""){
                   $('.reg_label_pw').hide();
          }
    });
            
    txtInputPW.blur(function(){
          if ($(this).val() == "" ){
                   $('.reg_label_pw').show();
          }
    });    
}

$('.paypalSSO_benefits').click(function(){
    $('.fancierbox_hat.pp_sso').addClass('block');
});
$('.fb_sso_benefits').click(function(){
    $('.fancierbox_hat.fb_sso').addClass('block');
});
$('.AmazonSSO_benefits').click(function(){
    $('.fancierbox_hat.amazon_sso').addClass('block');
});

//amazon.Login.logout();
</script>
<script type="text/javascript">
    
    $( window ).load(function() {
      PWResetCheck();
    });
    
    // SWITCH BETWEEN LOGIN AND REGISTER
    $('.radioButtonLine input').click(function() {
        if($(this).attr('id') == 'NewCustomer') {
            $('#LoginPanelLeft').addClass('newCustomer');           
        }
        else {
            $('#LoginPanelLeft').removeClass('newCustomer');   
        }
    });
		         
    // HIDE INPUT ERROR STYLES
    $('.loginField input').click(function() {
        $(this).next('span').delay(2000).fadeOut();
        $(this).parent().removeClass('errorInput');
    });

    $('.touch .returningCustomerOptions .loginField input').focus(function () {
        $('.showPasswordFeature').show();
    });
    
    // ADD INPUT ERROR STYLE
    $('#ctl00_ContentPlaceHolder1_uc_customer_login21_imgbutton').click(function() {
        var ErrorMessage = $('.error_show');
        ErrorMessage.each(function () {
            if ($(this).is(':visible')) {
                $(this).parent().addClass('errorInput');
            }
        });

        $(this).addClass('loader_active');

    });
    
    // NO PADDING ON LOGIN MESSAGE
    if ($('.InvalidDetails span').is(':empty')){
        $('.InvalidDetails').addClass('noPadding');
    }

    // BENEFITS POPUPS
    $('.paypalSSO_benefits').click(function(){
        $('.fancierbox_hat.pp_sso').addClass('block');
    });
    $('.fb_sso_benefits').click(function(){
        $('.fancierbox_hat.fb_sso').addClass('block');
    });
    
    // FORGOTTEN PW POPUP
    $('.forgottenPW').click(function(){
        $('.fancierbox_hat.FPW').addClass('block');
        var email_add_input = $('#ctl00_ContentPlaceHolder1_uc_customer_login_wc_1_txtLoginEmail').val();
        $('#ctl00_ContentPlaceHolder1_uc_customer_password_reset_WC1_txtLoginEmailPwdReset').val(email_add_input);
    });
    
    // Check if password reset has been triggered
    function PWResetCheck() {
        if ($('#ctl00_ContentPlaceHolder1_uc_customer_password_reset1_login_page_wrapper').hasClass('PWSent')) {
            $('.forgottenPW').trigger('click');
        }
    }
    
    // CLICK RADIO BUTTONS - TABLET FIX
    //$('.clickNewCustomer').click(function() {
    //    $('input#NewCustomer').prop('checked', true).trigger('click');
    //});
    
    //$('.clickPassword').click(function() {
    //    $('input#ReturningCustomer').prop('checked', true).trigger('click');
    //});


    //SHOW PASSWORD FEATURE
    $("#ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword").each(function (index, input) {
        var $input = $(input);
        $(".showPasswordFeature").click(function () {
            var change = "";
            if ($(this).html() === "Show Password") {
                $(this).html("Hide Password")
                change = "text";
            } else {
                $(this).html("Show Password");
                change = "password";
            }
            var rep = $("<input type='" + change + "' />")
              .attr("id", $input.attr("id"))
              .attr("name", $input.attr("name"))
              .attr("placeholder", $input.attr("placeholder"))
              .val($input.val())
              .insertBefore($input);
            $input.remove();
            $input = rep;
        }).insertAfter($input);
    });

    var loggedOutClear = function () {
        //STORE BASKET VALUES
        var checkIfLoggedOut = document.location.href.indexOf('&type=logout') > -1;
        var checkIfROI = document.location.href.toUpperCase().indexOf('/IE/') > -1;

        if (checkIfLoggedOut) {
            $('#ctl00_uclHeader1_lblNoOfItems').html('0');
            $('#ctl00_uclHeader1_lblItemTotalPrice').text('£0.00');
        } else if (checkIfLoggedOut && checkIfROI) {
            $('#ctl00_uclHeader1_lblNoOfItems').html('0');
            $('#ctl00_uclHeader1_lblItemTotalPrice').text('€0.00');
        }
    };

    loggedOutClear();

    function inputHasContent() {

    }


    $(document).ready(function () {
        //var userGroupCheck = Cookies.get('userTitleGroup');
        //if (!userGroupCheck) {
        //    $('#NewCustomer').trigger('click');
        //    console.log('NEW CUSTOMER');
        //}
        //else {
        //    console.log('returning CUSTOMER');
        //}
    });

//    $('.AmazonSSO_benefits').click(function(){
//        $('.fancierbox_hat.amazon_sso').addClass('block');
//    });
</script>
    
<!--FORGOTTEN PASSWORD POPUP-->
<div class="fancierbox_hat FPW" style="display:none;">
    <div id="shortlistPopup">
        <div class="hat_header">Reset Your Password</div>
        <div id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_login_page_wrapper" class="clearfix reset_pw">
		    <div class="loginscreen_left">
		        <div class="form_label_new"><strong>Enter your email</strong><span class="red-ast">*</span></div>
		        <div class="loginscreen_input">
		            <input name="ctl00$ContentPlaceHolder1$uc_customer_password_reset1$txtLoginEmail" type="email" id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail" placeholder="email address" /> 
		            
		            <span id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_lblMessage"></span>
		        </div>
		        <div class="btn_submit">
		            <a id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_lnkCheckEmail" class="buttonChangePwd" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$uc_customer_password_reset1$lnkCheckEmail&#39;,&#39;&#39;)">Retrieve Password</a>
		        </div>
		    </div>

		    <div class="loginscreen_right">
                <div class="password_info">
                    <p><strong>Help with resetting your password</strong></p>
                    <p>Enter your email address and select "Retrieve Password" to receive a password reset email.</p>
                </div>
		    </div>
			<div>&nbsp;</div>
		</div>
		<script type="text/javascript">
		function validateResetPwd() {
		    if(document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail").value == "") {
		        document.getElementById("ctl00_ContentPlaceHolder1_uc_customer_password_reset1_lblMessage").innerHTML  = "Please enter correct email address!";
		        return false;
		    }
		    
		    return true;
		}  
		</script>
		<div class="fancier_close_btn" onclick="$('.fancierbox_hat').removeClass('block');"></div>
    </div>
</div>
<!--END WRAPPER-->