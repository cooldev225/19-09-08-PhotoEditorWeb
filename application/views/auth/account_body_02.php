<div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
	
            
<!--JS SCRIPTS-->
<script language="javascript" src="/assets/dist/frontend/account/passwordStrengthMeterPWReset.js"></script>



<div id="wrapper_whole" class="myDetails clearfix"><!--WRAPPER-->
    
    <!-- TOP PURPLE SECTION -->
    

    <div class="content_wrapper clearfix">  
        <div id="editMyDetails" class="CommonWhiteBox left">
            
            <!-- ACCOUNT NUMBER -->
            <div class="FieldHolder AccountNumber">
                <label for="title">Account Number</label>
                <span id="ctl00_ContentPlaceHolder1_uc_customer_change1_lblAccountNumber"><?php echo $data['account_id'];?></span>   
            </div>
            
            <!-- TITLE -->
            <div class="FieldHolder title">
                <label for="title">Title*</label>
                <select name="ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle" id="ctl00_ContentPlaceHolder1_uc_customer_change1_dropTitle" name="title">
            		<option selected="selected" value="Mr">Mr</option>
            		<option value="Mrs">Mrs</option>
            		<option value="Miss">Miss</option>
            		<option value="Ms">Ms</option>
            		<option value="Master">Master</option>
            		<option value="Dr">Dr</option>
            		<option value="Prof">Prof</option>
	            </select>
            </div>
            <!-- FIRST NAME -->
            <div class="FieldHolder">
                <label for="firstName">First Name*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName" type="text" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName'];?>" id="ctl00_ContentPlaceHolder1_uc_customer_change1_txtFirstName" name="firstName" placeholder="first name" />  
                <div class="iosHiddenFix"><span id="ctl00_ContentPlaceHolder1_uc_customer_change1_RequiredFieldValidator2" class="RedErrorStar" style="visibility:hidden;">*</span></div>
            </div>    
                
            <!-- LAST NAME -->   
            <div class="FieldHolder">
                <label for="lastName">Last Name*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName" type="text" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName'];?>" id="ctl00_ContentPlaceHolder1_uc_customer_change1_txtLastName" name="lastName" placeholder="last name" />
                <div class="iosHiddenFix"><span id="ctl00_ContentPlaceHolder1_uc_customer_change1_RequiredFieldValidator3" class="RedErrorStar" style="visibility:hidden;">*</span></div>
            </div>
            
            <!-- EMAIL ADDRESS -->
            <div class="FieldHolder">
                <label for="emailAddress">Email Address*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail" type="email" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail'];?>" id="ctl00_ContentPlaceHolder1_uc_customer_change1_txtEmail" name="emailAddress" placeholder="email address" />
                <div class="iosHiddenFix"><span id="ctl00_ContentPlaceHolder1_uc_customer_change1_RequiredFieldValidator8" style="visibility:hidden;">*</span></div>
                <div class="iosHiddenFix"><span id="ctl00_ContentPlaceHolder1_uc_customer_change1_regExVal_Email" style="visibility:hidden;">*</span></div>
            </div>
            
            <!-- MOBILE NUMBER --->
            <div class="FieldHolder">
                <label for="mobileNumber">Mobile Number</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone" type="text" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone'];?>" id="ctl00_ContentPlaceHolder1_uc_customer_change1_txtPhone" name="mobileNumber" placeholder="mobile number" />
            </div>
            
            <!-- PASSWORD --->
            <div class="FieldHolder fieldWithEditbtn">
                <label for="password">Password*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword" type="password" readonly="readonly" id="ctl00_ContentPlaceHolder1_uc_customer_change1_txtPassword" name="password" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword'];?>" />
                <a class="FieldEditBtn ChangePasswordBtn">Edit</a>
            </div>
            
            <!-- SECURITY QUESTION --->
            <div class="FieldHolder fieldWithEditbtn">
                <label for="password">Security Question*</label>
                <select name="ctl00$ContentPlaceHolder1$uc_customer_change1$drpListQuestion" id="ctl00_ContentPlaceHolder1_uc_customer_change1_drpListQuestion" disabled="disabled" class="aspNetDisabled">
            		<option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==-1)echo "selected=\"selected\"";?> value="-1">--Select the Question--</option>
            		<option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==1)echo "selected=\"selected\"";?> value="1">What is your mother&#39;s maiden name?</option>
            		<option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==3)echo "selected=\"selected\"";?> value="3">In which city were you born?</option>
            		<option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==4)echo "selected=\"selected\"";?> value="4">What is the name of your favourite pet?</option>
            	</select>
                <a class="FieldEditBtn ChangeSecurityQuestionBtn">Edit</a>
            </div>
            
            <div class="emailPreferencesMobile"></div>
            
            <!-- FORM ERRORS --->
            <div class="my_details_error">
                <div id="ctl00_ContentPlaceHolder1_uc_customer_change1_ValidationSummary1" style="display:none;">

	</div>
                
            </div>
            
            <!-- SAVE BUTTON --->
            <a id="ctl00_ContentPlaceHolder1_uc_customer_change1_lnkSave" class="buttonSave" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$uc_customer_change1$lnkSave&quot;, &quot;&quot;, true, &quot;vgType&quot;, &quot;&quot;, false, true))">Update Details</a>

        </div>
    
        <div id="editEmailPreferences" class="left" style="display: none;">
            <div class="editEmailPreferencesContent">
            <!-- EMAIL PREFERENCES --->
            <h1>Email Preferences</h1>
            <h2>Receive special offers</h2>
            <p><strong><input id="ctl00_ContentPlaceHolder1_uc_customer_change1_ckbEmail" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_change1$ckbEmail" checked="checked" /> by Email <input id="ctl00_ContentPlaceHolder1_uc_customer_change1_ckbSms" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_change1$ckbSms" /> by SMS</strong></p>
            
            <div class="line"></div>
            
            <h2>Please DO NOT send me emails</h2>
            <p><input id="ctl00_ContentPlaceHolder1_uc_customer_change1_ckbFathersday" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_change1$ckbFathersday" /> featuring <strong>Father's Day</strong>.</p>
            <p><input id="ctl00_ContentPlaceHolder1_uc_customer_change1_ckbMothersday" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_change1$ckbMothersday" /> featuring <strong>Mother's Day</strong>.</p>
            <!--<li><div class="email_option"><div class="left">Send me reminders</div><div class="right"><input id="ctl00_ContentPlaceHolder1_uc_customer_change1_ckbReminders" type="checkbox" name="ctl00$ContentPlaceHolder1$uc_customer_change1$ckbReminders" checked="checked" /></div></div></li>-->
            </div>
        </div>

        <script type="text/javascript">
           $(document).ready(function() {
               //ADD BIRTHDAY CLASS STYLE TO TD       
               $(".event_date").closest('td').addClass('cal_event_date');
               
               //CLOSE ERROR MESSAGES
               $('#ctl00_ContentPlaceHolder1_uc_customer_change1_ValidationSummary1').click(function() {
                    $('#ctl00_ContentPlaceHolder1_uc_customer_change1_ValidationSummary1').fadeOut();
               });
               
               //CLOSE POPUPS
               $('.ClosePopup').click(function() {
                    $('.passwordPopup').fadeOut(200);
                    $('.securityQuestionPopup').fadeOut(200);
               });
               
               //OPEN PASSWORD POPUP
               $('.ChangePasswordBtn').click(function() {
                    $('.passwordPopup').fadeIn(200);
               });
               
               //OPEN SECURITY POPUP
               $('.ChangeSecurityQuestionBtn').click(function() {
                    $('.securityQuestionPopup').fadeIn(200);
               });
               
               //FADE OUT DETAIL CHANGE MESSAGES
               $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_lblMessage.suc_msg').delay(2000).fadeOut(400);

               var updateMyDetails = document.referrer;
               var checkRefURL = updateMyDetails.indexOf('UpdateEmailVision.aspx') > -1;

               if (checkRefURL) {
                   $('.informationUpdatedMessage').show().delay(2000).fadeOut(400);
                   //alert('updated');
               }
               
           });
        </script> 
        
    </div>

</div>
<!-- ACCOUNT UPDATED MESSAGE -->
<div class="informationUpdatedMessage">Information Updated</div>
            
            <!-- CHANGE PASSWORD POPUP -->
            <span id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_lblMessage" style="color:Red;"></span>
<div class="passwordPopup" style="display:none;">
    <div class="myDetailsPopup">
        <h1>Change Password</h1>
        <a class="ClosePopup"><span></span><span></span></a>
        <div class="myDetailsPopup_Content">
            <!-- NEW PASSWORD --> 
            <div class="FieldHolder">
                <label>New Password*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword" type="password" id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtNewPassword" class="password" placeholder="new password" />
                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_RequiredFieldValidator5" class="RedErrorStar" style="visibility:hidden;">*</span></div>
                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_ValidateLength" class="RedErrorStar" style="visibility:hidden;">*</span></div>
            </div>
            <!-- END PASSWORD FIELD -->
            <div class="passwordStrengthHolder">password strength</div>
            <!-- CONFIRM NEW PASSWORD --> 
            <div class="FieldHolder">
                <label>Confirm Password*</label>
                <input name="ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword" type="password" id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtConfirmPassword" class="confirmpassword" placeholder="confirm password" />
                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_RequiredFieldValidator1" class="RedErrorStar" style="visibility:hidden;">*</span></div>
                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_CompareValidator1" class="RedErrorStar" style="visibility:hidden;"><img src="/assets/dist/images/input_cross.png"></span></div>
                                                           
            </div>
            <!-- ERRORS --> 
            <div class="change_pass_error clearfix">
                <div id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_ValidationSummary2" style="display:none;">

	</div>
            </div>
            <!-- SAVE BUTTON --> 
            <a id="ctl00_ContentPlaceHolder1_uc_customer_password_change1_lnkSave" class="flowPurpleBtn" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$uc_customer_password_change1$lnkSave&quot;, &quot;&quot;, true, &quot;vgChange&quot;, &quot;&quot;, false, true))">Update Password</a>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript">

    // PASSWORD STRENGTH
    $('.password').keyup(function(){
			$('.passwordStrengthHolder').html(passwordStrength( $('.password').val()) )
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
		
		//PASSWORD MATCH COLOURS - CLICK EVENTS
		$('.password').click(function() { ConfirmPasswordCheck(); });
		$('.confirmpassword').click(function() { ConfirmPasswordCheck(); });
		
		$('.password').focusout(function() { ConfirmPasswordCheck(); });
		$('.confirmpassword').focusout(function() { ConfirmPasswordCheck(); ConfirmPasswordFocusOutCheck(); });
		
		//PASSWORD MATCH COLOURS FUNCTION
		function ConfirmPasswordCheck() {
		    if ($('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_CompareValidator1').css('visibility') == 'visible') {
                $('.confirmpassword').parent().addClass('passwordsDontMatch');
            }
            else {
                $('.confirmpassword').parent().removeClass('passwordsDontMatch');
            }
		}
		
		//CHECK IF BOTH PASSWORDS MATCH
		function ConfirmPasswordFocusOutCheck() {
		    var pass1 = $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtNewPassword').val();
            var pass2 = $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtConfirmPassword').val();
            
            if (pass1) {
                if(pass1 == pass2){
                    $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtNewPassword').addClass('valid');
                    $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtConfirmPassword').addClass('valid');
                }
                else {
                    $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtNewPassword').removeClass('valid');
                    $('#ctl00_ContentPlaceHolder1_uc_customer_password_change1_txtConfirmPassword').removeClass('valid');
                }
            }
            
		}
		
</script>
            
            <!-- SECURITY QUESTION POPUP -->
            
<div class="securityQuestionPopup" style="display:none;">
    <div class="myDetailsPopup">
        <h1>Change Security Question</h1>
        <a class="ClosePopup"><span></span><span></span></a>
        <div class="myDetailsPopup_Content">
            <!-- SECURITY QUESTION --> 
            <div class="FieldHolder">
                <label>Security Question *</label>
                <select name="ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion" id="ctl00_ContentPlaceHolder1_uc_security_question1_drpListQuestion">
            		<option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==-1)echo "selected=\"selected\"";?> value="-1">--Select the Question--</option>
                    <option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==1)echo "selected=\"selected\"";?> value="1">What is your mother&#39;s maiden name?</option>
                    <option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==3)echo "selected=\"selected\"";?> value="3">In which city were you born?</option>
                    <option <?php if($data['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']==4)echo "selected=\"selected\"";?> value="4">What is the name of your favourite pet?</option>

            	</select>

                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_security_question1_RequiredFieldValidator10" class="RedErrorStar" style="visibility:hidden;">*</span></div>
            </div>
            <!-- SECURITY QUESTION ANSWER -->
            <div class="FieldHolder">
                <label>Answer *</label>
                <input name="ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer" type="text" id="ctl00_ContentPlaceHolder1_uc_security_question1_txtAnswer" placeholder="security question answer" value="<?php echo $data['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer'];?>" align="left" />
                <div class="validateHolder"><span id="ctl00_ContentPlaceHolder1_uc_security_question1_RequiredFieldValidator1" class="RedErrorStar" style="visibility:hidden;">*</span></div>
            </div>
            <!-- ERRORS -->
            <div class="change_pass_error clearfix">
                <div id="ctl00_ContentPlaceHolder1_uc_security_question1_ValidationSummary1" style="display:none;">

	</div>
            </div>
            <!-- SAVE BUTTON -->
            <a id="ctl00_ContentPlaceHolder1_uc_security_question1_lnkSave" class="flowPurpleBtn" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$uc_security_question1$lnkSave&quot;, &quot;&quot;, true, &quot;vgQuestionChange&quot;, &quot;&quot;, false, true))">Update Security Question</a>
        </div>
    </div>
</div> 

</div>
            
        