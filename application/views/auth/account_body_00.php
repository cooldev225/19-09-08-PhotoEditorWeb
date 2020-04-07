<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.galleriffic.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.opacityrollover.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/cardflow/mask-loading.js"></script> 
<script type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.lettering.js"></script>          

<style type="text/css">


        .tab_container { width:100%; position:relative; }
        .content { background: #fff;  text-align: left; padding: 10px; padding-bottom: 20px; font-size: 11px;}
        .content strong { color:#879AC0; font-size: 12px; font-weight:bolder; padding: 10px 5px; }
        
        .gallery_container { width:85%; position:relative; }
        
        .tab_container .forms .formsinputtype2 { float:left; padding:10px 20px; width:230px; margin:2px 3px; background:#fff; border:1px solid #000; -webkit-border-radius: 6px; -moz-border-radius: 6px; border-radius: 6px; cursor:pointer; }     
        .formsselect .selectdrop { border:1px solid #879AC0; display:block; padding:2px 20px; text-align:center; -webkit-border-radius: 6px; moz-border-radius: 6px; border-radius: 6px; margin:0 0 4px; }
        .formsselect .selectdrop select { width:100%; padding:10px 5px; border:0; color:#879AC0;}   
        
        .formsselect 
        {
        	width:208px;
        	padding:0;
        	background:none;
        	height:auto;
        }
        
        /* Gallery Inside */
        div#page { width: 900px; background-color: #fff; margin: 0 auto; text-align: left; border-color: #ddd; border-style: none solid solid; border-width: medium 1px 1px; }
        div#ads { clear: both; padding: 12px 0 12px 66px; }
        div#footer { clear: both; color: #777; margin: 0 auto; text-align: center; }
        div.content { width: 90%; border:1px solid #ccc; }
        div.content a, div.navigation a { text-decoration: none; color: #777; }
        div.content a:focus, div.content a:hover, div.content a:active { text-decoration: underline; }
        div.controls { margin-top: 5px; height: 23px; }
        div.controls a { padding: 5px; }
        div.ss-controls { float: left; }
        div.nav-controls { float: right; }
        div.slideshow-container { position: relative; clear: both; height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */ }
        div.loader { position: absolute; top: 0; left: 0; background-image: url('loader.gif'); background-repeat: no-repeat; background-position: center; width: 550px; height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */ }
        div.slideshow { }
        div.slideshow span.image-wrapper { display: block; position: absolute; top: 0; left: 0; }
        div.slideshow a.advance-link { display: block; width: 550px; height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */ line-height: 502px; /* This should be set to be at least the height of the largest image in the slideshow */ text-align: center; }
        div.slideshow a.advance-link:hover, div.slideshow a.advance-link:active, div.slideshow a.advance-link:visited { text-decoration: none; }
        div.slideshow img { vertical-align: middle; border: 1px solid #ccc; }
        div.download { float: right; }
        div.caption-container { position: relative; clear: left; height: 75px; }
        span.image-caption { display: block; position: absolute; width: 550px; top: 0; left: 0; }
        div.caption { padding: 12px; }
        div.image-title { font-weight: bold; font-size: 1.4em; }
        div.image-desc { line-height: 1.3em; padding-top: 12px; }
        div.navigation { position:relative; margin-left:0; margin-bottom:15px; margin-top:10px;}
        ul.thumbs { /*clear: both;*/ margin: 0; padding: 0; margin-left:2px; /*float:left;*/ }
        ul.thumbs li { /*float: left;*/ padding: 0; margin: 0; list-style: none; border-bottom: 1px dashed #D5D4D5; }
        ul.thumbs li:hover {background:#e4e2e5;}
        ul.thumbs li table {width:208px;}
        a.thumb { padding: 2px; display: block; border: 1px solid #ccc; }
        ul.thumbs li.selected a.thumb { background: #000; }
        a.thumb:focus { outline: none; }
        ul.thumbs img { border: none; display: block; }
        div.pagination { clear: both; border-bottom: 1px dashed #D5D4D5; padding-bottom:8px;}
        div.navigation div.top { margin-bottom: 12px; height: 11px; text-align:right; padding-right: 4px; }
        div.navigation div.bottom { margin-top: 12px; top:50%; left:-30px; width:106%; height:28px; display:none; }
        div.navigation div.bottom a, div.navigation div.bottom span { display:none; width:11px; height:28px; }
        div.navigation div.bottom a.mainarrowleft { display:block; float:left; background:url(/assets/dist/images/icon_prev.png) 0 0 no-repeat; text-indent:-1000px; }
        div.navigation div.bottom a.mainarrowright { float:right; text-indent:10000px; display:block; background:url(/assets/dist/images/icon_next.png) 0 0 no-repeat; }
        div.pagination a, div.pagination span.current, div.pagination span.ellipsis { margin-right:3px; color:#31518c; }
        div.pagination a:hover { text-decoration: none; }
        div.pagination span.current { font-weight: bold; }
        div.pagination span.ellipsis { border: none; padding: 5px 0 3px 2px; }    
        
        div#loading_mask_container_common { padding:40px 0 0 0; width:208px; height:150px; display:none; background-color:#fff; z-index:100001; text-align:center; background:url(/assets/dist/images/loading.gif) center center no-repeat;}
        
        input#btnSave {width:174px; cursor:pointer; margin:10px 0 10px 16px; font-family:Arial; font-size:14px; background:#9777a7; color:#fff; display:block; padding:8px; border:none;}
        
        #ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_divErrorMessage 
        {
        	margin:0 0 0 0;
            padding:8px 4px;
            color:#9777a7;
            background:#fff;
            font-weight:bold;
        }

        #reminders tr:nth-child(2) {
            border: 1px solid #203750;
        }



</style>

<div class="reminders_wrapper myaccount_rightad_holder left">
    <div id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_divErrorMessage" style="display:none;"></div>
    <div id="common_message_wrapper" class="CardError2" style="display:none;"></div>
    <div class="tabs_reminders">
        <div class="myaccount_header" id="#reminders">Reminders</div>
        <a class="quick_remind_btn right" onclick="addReminder();"><img class="quick_remind_icon" src="/assets/dist/images/quick_remind.jpg">Quick Add</a>
    </div>
    <div id="popup_add_edit_addresses" style="display:none;">
        <div class="popup_holder RIF">
            <input name="ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_name" type="hidden" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_hid_rec_name">
            <input name="ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_date" type="hidden" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_hid_rec_date">
            <input name="ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_month" type="hidden" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_hid_rec_month">
            <input name="ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_event" type="hidden" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_hid_rec_event">
            <!-- POPUP HEADING -->
            <div id="popup_add_edit_addresses_heading">
                <div id="popup_add_edit_addresses_heading_content"></div>
                <div class="popUpCloseBtn" onclick="javascript:closeEditReminderPopup();"><span></span><span></span></div>
            </div>

            <div id="popup_reminder_edit">
                <div class="reminder_slide hide_save_btn">
                    <!-- REMINDER FIELDS-->
                    <div class="popup_reminder_fields">
                        <div class="RIF_input_container">
                            <label>First Name:</label>
                            <input id="RIF_first_name" name="RIF_first_name">
                        </div>
                        <div class="RIF_input_container odd">
                            <label>Surname:</label>
                            <input id="RIF_surname" name="RIF_surname">
                        </div>
                        <div class="RIF_input_container">
                            <label>Occasion:</label>
                            <select id="RIF_occasion">
                                <option value="1">Birthday</option>
                                <option value="89">Anniversary</option>
                            </select>
                        </div>
                        <div class="RIF_input_container RIF_date odd">
                            <label>Date:</label>
                            <input id="RIF_date" name="RIF_date" onclick="javascript:reminderDateSelect();">
                            <a onclick="javascript:reminderDateSelect();" class="RIF_CalendarIconBtn">
                                <img class="icon_cal" onclick="javascript:reminderDateSelect();" src="/assets/dist/images/icon_calendar_reminder.png">
                            </a>
                        </div>
                        <div class="RIF_text" style="display: none;">
                            <img src="/assets/dist/images/envelope_reminder.png">
                            <div class="RIF_text_content">
                                <input class="confirm_email_signup" type="checkbox">
                                <p>e-mail me a reminder for this event.</p>
                            </div>
                        </div>
                        <!-- POPUP CONTINUE BUTTON -->
                        <div class="RIF_save_btn_cover"></div>
                        <a onclick="return validateForm();" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_lnkSave2" class="flowPurpleBtn centered" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$lnkSave2','')">Save</a>
                    </div>
                    <!-- DATE PICKER -->

                    <div class="date_picker">
                        <div id="wrapper_popup_common_datepicker"></div>
                        
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div id="reminders" class="clearfix tab_links_reminders" style="">
        <div class="reminders_holder">
	        <div>
            	<table cellspacing="0" cellpadding="0" rules="all" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders" style="border-width:0px;width:100%;border-collapse:collapse;">
                    <tbody>
                        <tr><td></td></tr>
                        <?php $months=explode(",",",Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec");foreach($reminders as $r){?>
                        <tr>
        			        <td>
                                <div id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_remItemDiv" class="Halloween ">
                                    <span id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_lblEventDate" class="table_date"><?php echo "{$r['_day']} {$months[$r['_month']]}";?></span>
                                    <span id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_Label2" class="event_name"><?php echo "{$r['firstname']} {$r['surname']}";?> </span>
                                    <!--a class="reminder_btn right" href="/home/personal">Shop NOW</a-->
                                </div>
                            </td>
            		    </tr>
                    <?php }?>
            	    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    /* POP UP */ 
    function editReminder() {
        $("#hid_popup_activity").val("E");
        //fillFormWithHidden();        
        $('#popup_add_edit_addresses_heading_content').html("<h1>Edit Reminder</h1>");
        $("#ctl00_ContentPlaceHolder1_lnkSave2").text("Confirm & Continue");
        $('#popup_add_edit_addresses').show();
    }
    
    function addReminder() {
        clearForm();
        $("#hid_popup_activity").val("A");
        $("#hid_popup_addnew_id").val("");
        $('#popup_add_edit_addresses_heading_content').html("<h1>Add Reminder</h1>");
        $("#ctl00_ContentPlaceHolder1_lnkSave2").text("Add Reminder");
        $('#popup_add_edit_addresses').show();
    }  
    
    function closeEditReminderPopup() {
        $('#popup_add_edit_addresses').hide();
        resetDateSlide();
    }
           
    function reminderDateSelect() {
        if ( $(window).width() < 737 ) {
                $('.reminder_slide').animate({left: '-100%'}, 300 );
        }
        else {
                $('.reminder_slide').animate({left: '-585px'}, 300 );
        }
    }
    
    function resetDateSlide() {
        if ( $(window).width() < 737 ) {
            $('.reminder_slide').css('left', '20px');
        }
        else {
            $('.reminder_slide').css('left', '30px');
        }
    }
    
    function reminderDateChanged() {
        if ( $(window).width() < 737 ) {
            $('.reminder_slide').animate({left: '20px'}, 300 );
        }
        else {
            $('.reminder_slide').animate({left: '30px'}, 300 );
        }
    }   
    
    function onSelectDatePicker(selected) {
        var res = selected.split("/");
                        
//        if($("#hid_popup_activity").val()=="E") {        
            $("input[id$='hid_rec_date']").val(res[0]);
            $("input[id$='hid_rec_month']").val(res[1]);
        
        $("input[id$='RIF_date']").val(getDateDisplayMode());
        
        reminderDateChanged();
    }
    
    function clearForm() {
        $("input[id$='RIF_first_name']").val("");
        $("input[id$='RIF_surname']").val("");
        $("select[id$='RIF_occasion']").val("1");
        $("input[id$='RIF_date']").val("");        
    }
    
    function fillHiddenWithForm() {
        var name = $("input[id$='RIF_first_name']").val() + " " + $("input[id$='RIF_surname']").val();
        
        $("input[id$='hid_rec_name']").val(name);
        $("input[id$='hid_rec_event']").val($("select[id$='RIF_occasion']").val());
    }   
    
    function getDateDisplayMode() {
        var t_date = $("input[id$='hid_rec_date']").val();
        var t_month = $("input[id$='hid_rec_month']").val();
        
//        if($("#hid_popup_activity").val()=="E") {        
//            t_date = $("input[id$='hid_rec_date']").val();
//            t_month = $("input[id$='hid_rec_month']").val();
//        }    
        return  getOrdinal(t_date) + " " + getMonth(t_month);
    }
    
    function getOrdinal(val) {
        var num = parseInt(val);
        if (num <= 0) return num;

        switch (num % 100)
        {
            case 11:
            case 12:
            case 13:
                return num + "th";
        }

        switch (num % 10)
        {
            case 1:
                return num + "st";
            case 2:
                return num + "nd";
            case 3:
                return num + "rd";
            default:
                return num + "th";
        }

    }    
    
    function getMonth(val) {
        var month = "";
        switch(parseInt(val))
        {
            case 1: { month = "January"; break }
            case 2: { month = "February"; break }
            case 3: { month = "March"; break }
            case 4: { month = "April"; break }
            case 5: { month = "May"; break }
            case 6: { month = "June"; break }
            case 7: { month = "July"; break }
            case 8: { month = "August"; break }
            case 9: { month = "September"; break }
            case 10: { month = "October"; break }
            case 11: { month = "November"; break }
            case 12: { month = "December"; break }
        }

        return month;
    }    
    
    function validateForm() {
        var result = true;
        
        if($("input[id$='RIF_first_name']").val().length==0) {
            $("input[id$='RIF_first_name']").addClass('AddressFieldNotComplete');
            $("input[id$='RIF_first_name']").focus();
            removeRedOutline();
            return false;
        }
        
        if($("input[id$='RIF_surname']").val().length==0) {
            $("input[id$='RIF_surname']").addClass('AddressFieldNotComplete');
            $("input[id$='RIF_surname']").focus();
            removeRedOutline();
            return false;
        }
        
        if($("input[id$='RIF_date']").val().length==0) {
            $("input[id$='RIF_date']").addClass('AddressFieldNotComplete');
            $("input[id$='RIF_date']").focus();
            removeRedOutline();
            return false;
        }          
    
        //if($("#hid_popup_activity").val()=="E") {
        fillHiddenWithForm();
            return true;
        //}
        //updateNewReminderList();
        
        //closeEditReminderPopup();
        
        //return false;
    }
    function GetActiveEventName(id) {
        var event = "";
        switch(parseInt(id)) { case 1: { event = "Birthday"; break; } case 89: { event = "Anniversary"; break; } }
        return event;
    }
    
    function removeRedOutline() {
        $('.AddressFieldNotComplete').click(function() {
            $(this).removeClass('AddressFieldNotComplete');
        });
    }
    
    function setMessage(iserror, msg, ctr) {
        var msgHtml = '<div class="CardErrorContents">';
                    msgHtml += '<h1>' + ((iserror) ? 'Error!' : 'Warning!') + '</h1>';
                    msgHtml += '<p>' + msg + '</p>';
                    msgHtml += '<a class="flowPurpleBtn" onclick="hideMessage();">OK</a>';
                msgHtml += '</div>';
                
        $("#common_message_wrapper").html(msgHtml);
        $('#common_message_wrapper').show();
    }
    
    // TOGGLE SLIDER
    function toggleReminderSlider () {
        if ( $('.MainEvent .RIF_toggle_slide').hasClass('remindMe') ) {
            $('.MainEvent .RIF_on').addClass('slideLeftToggle').removeClass('slideRightToggle').text('No');
            $('.MainEvent .RIF_toggle_slide').removeClass('remindMe');
            $('.MainEvent .RIF_toggle_slide').addClass('dontRemindMe');
            $('.MainEvent .RIF_toggle_text').text("Don't Remind Me");
            
            $("select[id$='ddlRemindMe']").val("0");
        }
        else {
            $('.MainEvent .RIF_on').addClass('slideRightToggle').removeClass('slideLeftToggle').text('Yes');
            $('.MainEvent .RIF_toggle_slide').removeClass('dontRemindMe');
            $('.MainEvent .RIF_toggle_slide').addClass('remindMe');
            $('.MainEvent .RIF_toggle_text').text("Remind Me");
            
            $("select[id$='ddlRemindMe']").val("1");
        }
    }
    
    // TOGGLE SLIDERS IN LIST
    function toggleReminderSliderList(id) {
        if ( $('#RIF_toggle_slide_' + id).hasClass('remindMe') ) {
            $('#RIF_on_' + id).addClass('slideLeftToggle').removeClass('slideRightToggle').text('No');
            $('#RIF_toggle_slide_' + id).removeClass('remindMe');
            $('#RIF_toggle_slide_' + id).addClass('dontRemindMe');
            $('#RIF_toggle_text_' + id).text("Don't Remind Me");            
            
            updateStatus(id, 0);
        }
        else {
            $('#RIF_on_' + id).addClass('slideRightToggle').removeClass('slideLeftToggle').text('Yes');
            $('#RIF_toggle_slide_' + id).removeClass('dontRemindMe');
            $('#RIF_toggle_slide_' + id).addClass('remindMe');
            $('#RIF_toggle_text_' + id).text("Remind Me");
            
            updateStatus(id, 1);
        }        
    }
    
    function ocassionTitle() {
        var findOcassion = $('.RIF_event:first').text();
        if ( findOcassion == 0 ) {
            $('.title_ocassion').text('ocassion');
        }
        else {
            $('.title_ocassion').text(findOcassion);
        }
    }
    
    function directOrBTM() {
        if ( $('#ctl00_ContentPlaceHolder1_wraper_info_text_content .RIF_event').length == 0 ) {
            $('.RIF_toggle_slide').hide();
        }
    }
    
    function sliderState() {
        if ( $('#ctl00_ContentPlaceHolder1_ddlRemindMe').val() == 0 ) {
            $('.RIF_on').addClass('slideLeftToggle').removeClass('slideRightToggle').text('No');
            $('.RIF_toggle_slide').removeClass('remindMe');
            $('.RIF_toggle_slide').addClass('dontRemindMe');
            $('.RIF_toggle_text').text("Don't Remind Me");
        }
    }
    
$(document).ready(function(){
	
    $("#wrapper_popup_common_datepicker").datepicker(
        {
            //minDate: 0,
            dateFormat: "dd/mm/yy",
            onSelect: function(selected,evnt) {
                onSelectDatePicker(selected);
            }            
        }    
    );
	
	$('.tab_links').hide();
	$('#orders').show();
	$('.tab_links_reminders').hide();
	$('#reminders').show();
	

	$('.tabs li a').click(function() {
		$('.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.tab_links').hide();
		var tab_link_name = $(this).attr('id');
		$(tab_link_name).show();
		
	});	
	
	$('.tabs li').click(function() {
		$('.tabs li').removeClass('active_li');
		$(this).addClass('active_li');
	});
	
	$('.tabs_reminders li a').click(function() {
		$('.tabs_reminders li a').removeClass('active');
		$(this).addClass('active');
		$('.tab_links_reminders').hide();
		var tab_link_name = $(this).attr('id');
		$(tab_link_name).show();
		
	});	
	
	$('.tabs_reminders li').click(function() {
		$('.tabs_reminders li').removeClass('active_li');
		$(this).addClass('active_li');
	});
	
	//$('#reminders tr:nth-child(2) td div').append("<a class='reminder_btn right' href='/personal'>Shop NOW</a>");
	
	
	if($(window).width() >= 768){
	$("#reminders tr:gt(8)").hide();
	}else{
	$("#reminders tr:gt(5)").hide();
	}
	
	
	$('span.table_date').each(function() {
	       var newText = ($(this).text()).substr(0, 6);
            $(this).text(newText);
	});

	var eventReminderName = $('.en_lookup');
	    eventReminderName.each(function () {
	    var eventReminderNameText = $(this).html();
	    var eventReminderNameTextNew = eventReminderNameText.replace("'s Birthday", "").replace("'s Anniversary", "").replace('Christmas Day', '').replace('Halloween', '').replace("Father’s Day", "").replace("Mother’s Day", "").replace("Valentine’s Day", "").replace("Grandparent’s Day", "").replace('s Birthday', '').replace('Diwali', '');

	    $(this).html(eventReminderNameTextNew);
	    //alert(eventReminderNameTextNew);
	    })


	//HIDE AND SHOW SAVE REMINDER BTN
    $(".RIF_text_content").change(function() {
        $(".reminder_slide").toggleClass("hide_save_btn", this.checked)
    }).change();

});
</script>
