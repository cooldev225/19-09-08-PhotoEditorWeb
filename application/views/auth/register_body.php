<script language="javascript" src="/assets/dist/frontend/login/passwordStrengthMeter.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/login/NewFlowLoginReg.css"/>
<input type="hidden" name="ctl00$ContentPlaceHolder1$emailOptMessage" id="ctl00_ContentPlaceHolder1_emailOptMessage" value="0">
<script type="text/javascript">
    function showProgressContinue() {
        $('#ctl00_ContentPlaceHolder1_emailOptMessage').attr('value', '1');
        $('.promo_popup').fadeOut();
        $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail')[0].click();
        $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail').addClass('promo_ticked');
        $('#ctl00_ContentPlaceHolder1_lnkSave').trigger('click');
        $('#ctl00_ContentPlaceHolder1_lnkSave')[0].click();
        console.log('CALL showProgressContinue');

    }
    function showProgress() {

        // document.getElementById("nextProgressDiv").style.display = "block";

        retvalue = Page_ClientValidate();
        //if (retvalue) {
            
        //    document.getElementById("nextProgressDiv").style.display = "block";
        //}
        //else
            //document.getElementById("nextProgressDiv").style.display = "none";

        return retvalue;
    }

    function AcceptTermsCheckBoxValidation(oSrouce, args) {
        var myCheckBox = document.getElementById('ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkTerms');
        if (!myCheckBox.checked) {
            args.IsValid = false;
        }
        else {
            args.IsValid = true;
        }
    }

    function showProgressPop() {
        $('#ctl00_ContentPlaceHolder1_emailOptMessage').attr('value', '1');
        $('#ctl00_ContentPlaceHolder1_lnkSave')[0].click();
    }

    function validationInProg () {
        //console.log('validation in progress');
        $('.promo_popup').show();
        $('.conf-email').text($('.CreateAccount_email').val());
    }

    function showProgressEmailConf(email_status) {
        if (email_status == 'confirm_email') {//alert(1);
            if ($('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmailNo').is(':checked')) {//alert(2);
                $('.promo_popup_content h1 span').addClass('opacity-fade-out');
                $('.email-optin-header').removeClass('opacity-fade-out').addClass('opacity-fade-in');
                $('.conf-email-wrapper').addClass('slide-left-exit');
                $('.conf-email-optin').addClass('slide-left-enter');
                console.log('out out is selected');
            }
            else {
                showProgressContinue();
            }
        }
        else {
            $('#ctl00_ContentPlaceHolder1_emailOptMessage').attr('value', '0');
            $('.promo_popup').hide();
            console.log('edit email');
        }
        
    }

</script>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('.reg_account_number').hide();
    $('.reg_refer .ref_check').click(function(){
       $('.reg_account_number').toggle();
    });
});
</script>

<!-- DISABLE ENTER KEY PRESS -->
<script language="javascript" type="text/javascript">
    function stopRKey(evt) {
        var evt  = (evt) ? evt : ((event) ? event : null);
        var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
        if ((evt.keyCode == 13) || (evt.keyCode == 10) && (node.type=="text")) { return false; }
    }
    document.onkeypress = stopRKey;
</script>

<div id="fancierbox_ppsso" style="display:none;"></div>

<div class="promo_popup" style="display:<?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail!='')echo 'block';else echo 'none';?>;">
    <div class="promo_popup_content">
        <!--div class="popUpCloseBtn"><span></span><span></span></div-->
        <h1><span>Please Confirm Your Details</span><span class="email-optin-header">Receive Discounts</span></h1>
        
        <div class="conf-email-wrapper">
             <p>Please confirm the email address is correct:<br><strong><span class="conf-email"><?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail;?></span></strong></p>
             <a class="yes_promo_emails flowPurpleBtn" onclick="javascript:showProgressEmailConf('confirm_email');">I Confirm</a>
             <br>
             <a onclick="javascript:showProgressEmailConf('edit_email');"><u>Edit Email Address</u></a>
        </div>
        <div class="conf-email-optin">
            <p>You haven't opted into receiving emails. Would you like to receive <strong>discounts by email</strong>?</p>
            <a class="no_promo_emails flowGreyBtn" onclick="javascript:showProgressPop();">No thanks</a>
            <a class="yes_promo_emails flowPurpleBtn" onclick="javascript:showProgressContinue();">Yes please</a>
        </div>  
    </div>
</div>

<div class="fancierbox_hat FPW" style="display:none;">
    <div id="shortlistPopup">
        <div class="hat_header">Reset Your Password</div>
        <div id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_login_page_wrapper" class="clearfix reset_pw">
		    <div class="loginscreen_left">
		    
		        <div class="form_label_new"><strong>Enter your email</strong><span class="red-ast">*</span></div>
		        <div class="loginscreen_input">
		            <input name="ctl00$ContentPlaceHolder1$uc_customer_password_reset1$txtLoginEmail" type="email" id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail" placeholder="email address"> 
		            
		            <span id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_lblMessage"></span>
		        </div>
		        <div class="btn_submit">
		            <a id="ctl00_ContentPlaceHolder1_uc_customer_password_reset1_lnkCheckEmail" class="buttonChangePwd" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$uc_customer_password_reset1$lnkCheckEmail','')">Retrieve Password</a>
		            
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
    	<div class="fancier_close_btn" onclick="javascript:closePasswordReset();"></div>
    </div>
</div>


<div id="wrapper_whole" class="MainContent clearfix"><!--WRAPPER-->
    <div class="contentHolder clearfix">
        
        <!-- LOGIN WITH PAYPAL OR FB -->
        <div style="display: none;" class="registerWithHolder">
	        <h2 class="left">Create an Account with...</h2>
	        <!-- FACEBOOK SSO -->
	        <div id="ctl00_ContentPlaceHolder1_div_fb_login_button" class="right reg_fb_btn">
	            <a href="javascript://" onclick="LoginWithFB()"><img src="/assets/dist/images/fb_login_reg.jpg" alt="Login with Facebook"></a>
	        </div>
	        <!-- END FACEBOOK SSO -->  
	        <!-- PAYPAL SSO -->
	        <div id="ctl00_ContentPlaceHolder1_div_paypal_login_button" class="right reg_pp_btn">               
	            <a href="javascript://" onclick="OpenPaypallogin()" alt="Login with Paypal"><img src="/assets/dist/images/pp_login_reg.jpg" alt="Login with Paypal"></a>
	        </div>
	        <!-- END PAYPAL SSO --> 
	      
	        <!-- AMAZON SSO -->
	        <!---->    
	        <!-- END AMAZON SSO -->   
	    </div>
  
        <h1>Create an Account</h1> 
        <span id="ctl00_ContentPlaceHolder1_lblfacebookError" style="color:Red;font-size:Medium;font-weight:bold;"></span>
        <!-- REGISTER FORM -->
        <div id="CreateAccountPanel" class="left">
            <div class="CommonWhiteBox">
				<script language="javascript" type="text/javascript">

				    function CreateAccountCheck1(sender, args) {
				        if (args.Value == "First Name*")
				                return args.IsValid = false;
				            else
				                return args.IsValid = true;
				    }
				    function CreateAccountCheck2(sender, args) {
				        if (args.Value == "Last Name*")
				                return args.IsValid = false;
				            else
				                return args.IsValid = true;
				    }

				    function leadsCheck(email) {
				        var cur_url = $(location).attr('protocol') + "//" + $(location).attr('host') + "/";
				        $.ajax({
				            type: "POST",
				            url: cur_url + "ServerCall.aspx" + "/CheckLeads",
				            data: '{"email": "' + email + '"}',
				            contentType: "application/json; charset=utf-8",
				            dataType: "json",
				            error: function (jqXHR, textStatus) {
				                return;
				            },
				            success: function (msg) {
				                var html_message = "";
				                var leads_res = eval(msg.d);
				                if (leads_res.Id > 0) {
				                    console.log(leads_res.OptedId);
				                    if (leads_res.OptedId == true) {
				                        $("input[name$='ckbEmail']").attr("checked", true);
				                    }
				                }
				            }
				        });
				    }
				</script>

				<!-- TITLE FIELD -->
				<div class="FieldHolder title">
				    <label for="title">Title*</label>
				    <select name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$dropTitle" id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle">
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Mr')echo ' selected';?> value="Mr">Mr</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Mrs')echo ' selected';?> value="Mrs">Mrs</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Miss')echo ' selected';?> value="Miss">Miss</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Ms')echo ' selected';?> value="Ms">Ms</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Master')echo ' selected';?> value="Master">Master</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Dr')echo ' selected';?> value="Dr">Dr</option>
						<option <?php if($ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle=='Prof')echo ' selected';?> value="Prof">Prof</option>

					</select>
				</div>
				<!-- END TITLE FIELD -->
				<!-- FIRST NAME FIELD -->
				<div class="FieldHolder">
				    <label for="firstName">First Name*</label>
				    <input name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$txtFirstName" type="text" id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName" class="CreateAccount_firstName" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName;?>" placeholder="first name" required="">
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator2" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">First Name field is required</span></div>
				    <span class="tip"><img src="/assets/dist/images/tip_edge.png">Fields marked with * are required</span>
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator1" style="color:Red;visibility:hidden;">*</span></div>
				</div>
				<!-- END FIRST NAME FIELD -->
				<!-- LAST NAME FIELD -->
				<div class="FieldHolder">
				    <label for="lastName">Last Name*</label>
				    <input name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$txtLastName" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName;?>" type="text" id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName" class="CreateAccount_lastName" placeholder="last name" required="">
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator3" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">Last Name field is required</span></div>
				    <span class="tip"><img src="/assets/dist/images/tip_edge.png">Fields marked with * are required</span>
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_Customvalidator2" style="color:Red;visibility:hidden;">*</span></div>
				</div>
				<!-- END LAST NAME FIELD -->
				<!-- EMAIL FIELD -->
				<div class="FieldHolder">
				    <label for="email">Email Address*</label>
				    <input name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$txtEmail" type="email" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail;?>" id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail" class="CreateAccount_email" placeholder="email address" required="">
				    <span class="error"><img src="/assets/dist/images/error_edge.png">Email field not complete or invalid</span>
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator8" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">An email address is required</span></div>
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_regExVal_Email" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">Email address entered is not vaild</span></div>
				    <span class="tip"><img src="/assets/dist/images/tip_edge.png">Fields marked with * are required</span>
				    <span class="error_register sameEmail"><img src="/assets/dist/images/error_edge.png">An account with this email address already exists!<br><a href="/Pages/CustomerLogin.aspx">Login</a> or <a class="reset_password_link">reset your password</a>.</span>
				</div>
				<!-- END EMAIL FIELD -->
				<!-- CONFIRM EMAIL FIELD -->

				<!-- END CONFIRM EMAIL FIELD -->
				<!-- PASSWORD FIELD -->
				<div class="FieldHolder">
				    <label for="password">Password*</label>
				    <input name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$txtPassword" type="password"  id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword" class="password" autocomplete="off" placeholder="password" required="" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword;?>">
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_RequiredFieldValidator9" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">A password is required</span></div>
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValidateLength" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">Your password must be longer than 5 characters</span></div>
				    <span class="tipLarge"><img src="/assets/dist/images/tip_edge_large.png">hint: a strong password must contain numbers and special characters.</span>
				</div>
				<!-- END PASSWORD FIELD -->
				<!-- PASSWORD STRENGTH -->
				<div class="passwordStrengthHolder">password strength</div>
				<!-- ENDPASSWORD STRENGTH -->
				<!-- CONFIRM PASSWORD FIELD -->
				<div class="FieldHolder">
				    <label for="confirmPassword">Confirm Password*</label>
				    <input name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$txtPassword2" type="password" id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2" class="confirmpassword" onpaste="return false" placeholder="confirm password" required="" value="<?php echo $ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2;?>"> 
				    <div class="mobileErrorHide"><span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword" style="visibility:hidden;"><img src="/assets/dist/images/input_cross.png"></span></div>
				    <span class="error"><img src="/assets/dist/images/error_edge.png">This field is required</span>
				    <span class="tip"><img src="/assets/dist/images/tip_edge.png">Confirm your password, both must match.</span>
				</div>

				<!-- RECIEVE SPECIAL OFFERS -->
				<div class="FieldHolder SpecialOffers">
				    <div class="CreateAccountLabel left">Would you like to receive discounts and special offers by email?</div>
				    <div class="CreateAccountInput right">
				        <label>Yes</label>
				        <span name="offersByEmail"><input id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$ckbEmail"></span><br>
				        <label>No</label>
				        <span name="offersByEmailNo"><input id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmailNo" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$ckbEmailNo"></span>
				        <!--input ID="ckbEmailNo" type="checkbox" /-->
				        
				        <!--<input id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkSms" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$chkSms" />-->
				    </div>  
				</div>
				<!-- END RECIEVE SPECIAL OFFERS -->   
				<!-- AGREE TO TERMS AND CONDITIONS -->             
				<div class="termsBox">
				    <span name="agreeToTerms"><input id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkTerms" <?php if($registered_user_id>0)echo " checked";?> type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_add_new1$chkTerms"></span>
				    <label for="agreeToTerms">I agree to the <a href="/TC/TermsAndConditions.pdf" target="_blank">terms &amp; conditions</a> of the website</label>
				    <span id="ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms" class="error_register" style="visibility:hidden;"><img src="/assets/dist/images/error_edge.png">Please tick to continue</span>
				</div>
				<!-- END AGREE TO TERMS AND CONDITIONS -->    

	            <!-- CREATE ACCOUNT BUTTON -->
	            <div class="FieldHolder">
	                <a onclick="showProgress();" id="ctl00_ContentPlaceHolder1_lnkSave" class="flowPurpleBtn right" href="javascript:gotosubmit();">Create Account</a>
	            </div>
	                
	                <!-- ERROR MESSAGES -->
	            <div id="ctl00_ContentPlaceHolder1_ValidationSummary1" style="display:none;">
				</div>
	            <span id="ctl00_ContentPlaceHolder1_lblMessage" style="color:Red;font-size:Small;font-weight:bold;"></span>
	        </div>
        </div>
        <!-- END REGISTER FORM -->
        <!-- TO BE REMOVED -->
    </div>
</div>
<input name="registered_user_id" id="registered_user_id" value="<?php echo $registered_user_id;?>"/>
<input name="ctl00$ContentPlaceHolder1$blank_customerother_obj" type="hidden" id="ctl00_ContentPlaceHolder1_blank_customerother_obj" value="{
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
}">

<script type="text/javascript" language="javascript">
$(document).ready(function () {
	var el = $('input[type=text]');
	el.focus(function(e) {
		if (e.target.value == e.target.defaultValue)
			e.target.value = '';
	});
	
	el.blur(function(e) {
		if (e.target.value == '')
			e.target.value = e.target.defaultValue;
	});
	
});
function gotosubmit(){//alert();
	//showProgressEmailConf('confirm_email');
	WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions('ctl00$ContentPlaceHolder1$lnkSave','', true,'vgCAddNew','',false,true));
}
window.fbAsyncInit = function() {
    FB.init({ appId: '167260339461', status: true, cookie: false, xfbml: true, oauth: true });
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
            }, {scope: 'public_profile,email,user_birthday,user_about_me,user_photos'})        //,friends_photos,friends_birthday  
        }
    });
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
    $('#ctl00_ContentPlaceHolder1_div_fb_login_button').removeClass('block');
    CloseError();
}

function getUserInfor(res) {
    console.log(res);
    temp = $("#ctl00_ContentPlaceHolder1_blank_customerother_obj").val();    
    if (temp != "") 
    {
        ShawloginProcessOngoing();
    
        var new_cs = JSON.parse(temp);        
        new_cs.Name = res.name;
        new_cs.FirstName = res.first_name;
        new_cs.LastName = res.last_name;
        new_cs.BirthDay = res.birthday;
        new_cs.AgeRange = res.age_range;
        new_cs.Email = res.email;
        new_cs.Origin = "FB";
        new_cs.PayerId = res.id;        
        var str_cs = JSON.stringify(new_cs);
         
        //window.location.href = 'FBLoginReturn.aspx?cs=' + str_cs;
        
        $.ajax({
            type: "POST",
            url: "FBLoginReturn.aspx",
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
</script>



<script type="text/javascript" language="javascript">
        
        // FORM VALIDATION
        $('.FieldHolder input').click(function() {
			$('.FieldHolder').removeClass('activeField');
			$(this).parent().addClass('activeField');
			$(this).next('span').fadeOut();
			$('.error_register.sameEmail').removeClass('showError');
		});
		
		$('.FieldHolder input').blur(function() {
			$('.FieldHolder').removeClass('activeField');
		});
  		
  		// PASSWORD STRENGTH
		$('.password').keyup(function(){
			$('.passwordStrengthHolder').html(passwordStrength($('.password').val(),$('.CreateAccount_firstName').val(),$('.CreateAccount_lastName').val()))
			checkPasswordStrengthValue();	
		})
		
		function checkPasswordStrengthValue() {
			var PasswordStrengthValue = $('.passwordStrengthHolder').html()
			removePasswordStates();
			$('.passwordStrengthHolder').addClass(PasswordStrengthValue);
			//alert(PasswordStrengthValue);
		}
		
		function removePasswordStates() {
			$('.passwordStrengthHolder').removeClass('too');
			$('.passwordStrengthHolder').removeClass('short');
			$('.passwordStrengthHolder').removeClass('weak');
			$('.passwordStrengthHolder').removeClass('can');
			$('.passwordStrengthHolder').removeClass('not');
			$('.passwordStrengthHolder').removeClass('use');
			$('.passwordStrengthHolder').removeClass('good');
			$('.passwordStrengthHolder').removeClass('strong');
		}

		function yesNOSelection() {
		    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail').click(function () {
		        $(this).prop('checked', true);
		        $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmailNo').prop('checked', false);
		    });

		    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmailNo').click(function () {
		        $(this).prop('checked', true);
		        $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail').prop('checked', false);
		    });
		}
		
		$(document).ready(function () {

		    //FIRST NAME VALIDATION
		    $('.CreateAccount_firstName').on('input', function () {
		        var input = $(this);
		        var is_name = input.val();
		        if (is_name) { input.removeClass("invalid").addClass("valid"); }
		        else { input.removeClass("valid").addClass("invalid"); }
		    });

		    //LAST NAME VALIDATION
		    $('.CreateAccount_lastName').on('input', function () {
		        var input = $(this);
		        var is_name = input.val();
		        if (is_name) { input.removeClass("invalid").addClass("valid"); }
		        else { input.removeClass("valid").addClass("invalid"); }
		    });

		    //Email must be an email
		    $('.CreateAccount_email').on('input', function () {
		        var input = $(this);
		        var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		        var is_email = re.test(input.val());
		        if (is_email) { input.removeClass("invalid").addClass("valid"); }
		        else { input.removeClass("valid").addClass("invalid"); }
		    });

		    $('.CreateAccount_email').blur(function () {
		        $('.conf-email').text($('.CreateAccount_email').val());
		    });

		    //PASSWORD MATCH COLOURS - CLICK EVENTS
		    $('.password').click(function () { ConfirmPasswordCheck(); });
		    $('.confirmpassword').click(function () { ConfirmPasswordCheck(); });

		    $('.password').focusout(function () { ConfirmPasswordCheck(); });
		    $('.confirmpassword').focusout(function () { ConfirmPasswordCheck(); ConfirmPasswordFocusOutCheck(); });

		    //$('.CreateAccount_emailconfirm').click(function () { MatchEmailFocusOut(); });
		    //$('.CreateAccount_emailconfirm, .CreateAccount_email').focusout(function () { MatchEmailFocusOut(); });


		    // After Form Submitted Validation
		    $('#ctl00_ContentPlaceHolder1_lnkSave').click(function (event) {
		        var form_data = $('.createAccount').serializeArray();
		        var error_free = true;

		        for (var input in form_data) {
		            var element = $('.CreateAccount_' + form_data[input]['name']);
		            var valid = element.hasClass("valid");
		            var error_element = $('span', element.parent());
		            if (!valid) {
		                error_element.removeClass('error').addClass('error_show');
		                error_free = false;
		            }
		            else {
		                error_element.removeClass('error_show').addClass('error');
		            }
		        }

		        if (!error_free) {
		            event.preventDefault();
		            //$('.promo_popup').hide();
		            console.log('ERRORS');
		        }

		        else {

		        }

		    });

		    yesNOSelection();

		});
		
		//PASSWORD MATCH COLOURS FUNCTION
		function ConfirmPasswordCheck() {
		    if ($('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_cmpValPassword').css('visibility') == 'visible') {
                $('.confirmpassword').parent().addClass('passwordsDontMatch');
            }
            else {
                $('.confirmpassword').parent().removeClass('passwordsDontMatch');
            }
		}

		//CHECK IF BOTH PASSWORDS MATCH
		function ConfirmPasswordFocusOutCheck() {
		    var pass1 = $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword').val();
            var pass2 = $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2').val();
            
            if (pass1) {
                if(pass1 == pass2){
                    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword').addClass('valid');
                    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2').addClass('valid');
                }
                else {
                    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword').removeClass('valid');
                    $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2').removeClass('valid');
                }
            }
            
		}

		//CHECK EMAIL ADDRESS MATCH
		function MatchEmailFocusOut() {
		    var email1 = $('.CreateAccount_email').val();
		    var email2 = $('.CreateAccount_emailconfirm').val();

		    if (email1) {
		        if (email1 == email2) {
		            $('.CreateAccount_email').addClass('valid').removeClass('invalid');
		            $('.CreateAccount_emailconfirm').addClass('valid').removeClass('invalid');
		            console.log('Email Match');
		        }
		        else {
		            $('.CreateAccount_email').removeClass('valid').addClass('invalid');
		            $('.CreateAccount_emailconfirm').removeClass('valid').addClass('invalid');
		            console.log('Email MISS match');
		        }
		    }
		    console.log('CALL MatchEmailFocusOut');

		}
        
        //DISPLAY SAME EMAIL ERROR
        if( $('.err_msg:contains("Email address already exists!")').length > 0) {
            $('.error_register.sameEmail').addClass('showError');
            $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail').addClass('invalid');
            $('.err_msg').addClass('DisplayNone');
        }
		
		//MOBILE HIDE ERRORS
		$('#ctl00_ContentPlaceHolder1_ValidationSummary1').click(function() { 
		     $('#ctl00_ContentPlaceHolder1_ValidationSummary1').css('display','none');
		});
		
		//MOBILE HIDE ERRORS
		$('.sameEmail.showError').click(function() { 
		     $('.sameEmail.showError').hide();
		});
		
		//HIDE SOCIAL LOGIN BUTTONS
		if ( document.location.href.indexOf('&email=') > -1 ) {
            $('.registerWithHolder').hide();
        }
        
		$('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail').click(function () {
		    $(this).toggleClass('promo_ticked');
		});

        //HIDE TERMS TICK BOX ERROR
		$('.termsBox input').click(function() { 
		     $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ValTerms').css('visibility','hidden');
		});

    //PROMO NO
	$('.no_promo_emails, .popUpCloseBtn').click(function () {
        $('.promo_popup').fadeOut();
        $('#ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail').addClass('promo_ticked');
        $('#ctl00_ContentPlaceHolder1_lnkSave').trigger('click');
        $('#ctl00_ContentPlaceHolder1_lnkSave')[0].click();
        $('#ctl00_ContentPlaceHolder1_emailOptMessage').attr('value', '1');
        showProgressPop();
    });

    //PASSWORD RESET
	$('.reset_password_link').click(function () {
	    $('.fancierbox_hat.FPW').fadeIn(300);
	});

	function closePasswordReset() {
	    $('.fancierbox_hat.FPW').fadeOut(300);
	}

    window.fbAsyncInit = function() {
    FB.init({ appId: '167260339461', status: true, cookie: false, xfbml: true, oauth: true });
};
</script>


<script type="text/javascript" language="javascript">
    var str = window.location.href;
    if (str.includes("&email=")) {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('set', 'location', 'http://example.com/example?a=b');
    }
</script>
<!--END WRAPPER-->