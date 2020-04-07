

<form method="post" action="auth/account" id="aspnetForm" enctype="multipart/form-data">
<!--script src="/assets/dist/frontend/ScriptResource.js" type="text/javascript"></script-->

<script src="/assets/dist/frontend/responsive-all/WebValidResource1.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource2.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource3.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/jquery-ui.css"/>



<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mobile-flow.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mobile-main.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/common-flow.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/common-main.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/mediaqueries.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/hintandtips.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/headerface.css" />
<link id="ctl00_irelandStyles" rel="stylesheet" type="text/css" href="/assets/dist/frontend/responsive-all/ireland.css" />

<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/account/MyAccount-mobile.css" media="screen and (min-device-width:1px) and (min-width:1px)" />
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/account/MyAccount.css" media="screen and (min-device-width:737px) and (min-width:737px), print, projection" />

<script type="text/javascript" src="/assets/dist/frontend/responsive-all/blazy.min.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/responsive-all/js.cookie.min.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/responsive-all/autoscaling.min.js"></script>

<style type="text/css">
a:hover{
	color:black !important; 
}
.add_prepay_btn_desktop:hover{
    color:white !important; 
}

@media screen and (min-device-width: 737px) and (min-width: 737px), print, projection{
.bg_myAccount {
    width: 100%;
    background: white;/*#ebebeb;*/
    height: 125px;
}
.details_top_holder {
    width: 100%;
}
.content_wrapper.details_bar {
    padding-top: 15px!important;
}
.content_wrapper {
    width: 994px;
    margin: 0 auto;
    padding: 30px 0 0 0;
}
.details_top {
    font-family: Arial,sans-serif;
    color: #203750;
    width: 50%;
    margin: 0 0 0 10px;
    padding-right: 25px;
}
.account_top {
    width: 555px;
}
.left {
    float: left;
}
.details_top_holder h1, .my_name h1 {
    font-size: 25px;
    font-family: Arial,sans-serif;
    font-weight: 700;
    color: #203750;
    font-size: 24px;
    line-height: 46px;
    margin-bottom: 0;
}
.ma_prepay_balance {
    color: #203750;
    margin-top: 5px;
}
.add_prepay_btn_desktop {
    color: #203750;
    border: 2px solid #203750;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    padding: 7px 16px;
    font-size: 14px;
    margin-left: 8px;
}
.add_prepay_btn_desktop:hover {
    background: #203750;
    color: white;
}
.details_top_btns {
    margin-right: 60px;
}
.right {
    float: right;
}
.my_details_btns {
    width: 70px;
    height: 110px;
    float: right;
    background: white;/*#ebebeb;*/
    margin-left: 10px;
    padding: 0 15px;
    display: block;
    color: #203750;
    font-size: 12px;
    text-align: center;
    font-weight: 700;
}
a {
    text-decoration: none;
    color: #232f3e;
    font-family: Arial,sans-serif;
}
}
body {
    background: white;
}
.line-row{
	width: 100%;
    height: 0px;
    border-style: groove;
    border-color: #203750;
    border-width: 1px;
}
a img{
    border: 0;
}
.my_details_btns img{
    padding-left: 7px;
    padding-bottom: 3px;
    height:44px;
}
.AddContactPopContent {
    top: 15%;
}
#popup_add_edit_addresses .flowEditBtn, #popup_add_edit_addresses .flowGreyBtn, #popup_add_edit_addresses .flowPurpleBtn {
    display: inline-block;
    width: auto;
    height: 46px;
    font-family: 'Passion One',cursive!important;
    color: #fff!important;
    line-height: 46px;
    font-size: 26px!important;
    background: #203750;
    padding: -1px 65px!important;
    border-radius: 4px;
    -webkit-transition: all .2s;
    transition: all .2s;
    text-align: center;
    cursor: pointer;
}
</style>

<script type="text/javascript">
    $(document).ready(function () {
        var img = $('.my_thumb img');

        var width = img.width(); 
        var height = img.height();

        if (width > height) {
            img.addClass('my_thumb_ls');
        }
    });
    function showProgress(retvalue) {
        if (document.getElementById("chkTC").checked == true) {
            if (retvalue) {
                document.getElementById("nextProgressDiv2").style.display = "block";
            }
            else {
                document.getElementById("nextProgressDiv2").style.display = "none";
            }
            return retvalue;
        }
        else {
            alert("You should accept terms and conditions before process!");
            return false;
        }
    }

</script>

    <div class="aspNetHidden">
    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="accountstatus"/>
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

<!--script src="/assets/dist/frontend/responsive-all/WebValidResource1.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource2.js" type="text/javascript"></script>
<script src="/assets/dist/frontend/responsive-all/WebValidResource3.js" type="text/javascript"></script-->
<script type="text/javascript">
//<![CDATA[
function CallServer(arg,context){WebForm_DoCallback('ctl00$uclHeader1',arg,displayResult,"",null,true);}//]]>
</script>
<input type="hidden" name="ctl00$ScriptManager1" id="ctl00_ScriptManager1">
<script type="text/javascript">
//<![CDATA[
Sys.Application.setServerId("ctl00_ScriptManager1", "ctl00$ScriptManager1");
Sys.Application._enableHistoryInScriptManager();
//]]>
</script>
<div id="fb-root"></div>
<input type="hidden" id="hidden_card_total_Count" value="7" />
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
<input type="hidden" id="current_user" value="<?php echo $current_user;?>" />
<input type="hidden" name="page_id" value="<?php echo $page_id;?>" />
<!--NEW FIXED NAV BAR-->
<!-- MM TEST IDENTIFY -->
<input hidden name="MM_QG_test" id="MM_QG_test" value="0" />

<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>

<?php $this->load->view('auth/login_reminder.php'); ?>
<div class="bg_myAccount">
    <div class="content_wrapper clearfix details_bar">
        <!-- ACCOUNT DETAILS TOP -->
		<div class="details_top_holder left">
		    <div class="details_top left">
		        <div class="account_top left"> 
		            <div class="my_name left">
		                <h1><span id="ctl00_ContentPlaceHolder1_uclMyAccountDetail1_lblCutomerName">Welcome back, <?php echo $current_user_obj->first_name;?> </span></h1>
		            </div>
		        </div>  
		               
		        <div class="column_horiz border_dashed_bottom clearfix">
		            <div class="column_166 left ma_prepay_balance"><span>Prepay Balance:&nbsp;</span><span id="ctl00_ContentPlaceHolder1_uclMyAccountDetail1_lblACBalance">€<?php echo $data['trans_amount'];?></span> <a class="add_prepay_btn_desktop" href="auth/account?p=3">Add Prepay</a></div>
		        </div>
		    </div>
		    
		    <div class="details_top_btns right">
		    	<?php if($page_id!=2){?>
		    		<a href="auth/account?p=2" title="My Addresses" class="my_details_btns"><img src="/assets/dist/images/icon_myDetails.gif">
		        	<img src="/assets/dist/images/space.png" style="height: 1px;width: 1px;">&nbsp;Details&nbsp;</a>
		        <?php }if($page_id!=0){?>
		        	<a href="auth/account?p=0" title="My Reminder" class="my_details_btns"><img src="/assets/dist/images/icon_reminders-1.gif"><img src="/assets/dist/images/space.png" style="    height: 1px;width: 1px;">Reminder</a>
		    	<?php }if($page_id!=1){?>
		        	<a href="auth/account?p=1" title="My Address" class="my_details_btns"><img src="/assets/dist/images/icon_myAddresses.gif"><img src="/assets/dist/images/space.png" style="    height: 1px;width: 1px;">Address</a>
		        <?php }?>
		    </div>
		</div> 

	</div>
	<div class="line-row"></div>
	<?php $this->load->view("auth/account_body_0{$page_id}.php"); ?>
</div>
</form>

<script src="/assets/dist/frontend/js/jquery-ui1.12.1.min.js" type="text/javascript"></script>
