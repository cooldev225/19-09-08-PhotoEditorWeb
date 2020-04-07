<!-- REMINDERS SITE WIDE -->
<div id="RemindersSiteWide">
    <div class="RemindersSiteWide_holder">
        <div id="RemindersSiteWideWrapper"></div>
    </div>
</div>

<script type="text/javascript">
        //MOVE REMINDER TITLE
        function MoveReminderTitle() {
            var windowwidth = $(window).width();
            if (windowwidth <= 736) {
                $('.reminderList li:first-child').after($('.dontForgetTitle'));
            } else {
                $('.nextReminderTitle').after($('.dontForgetTitle'));
            }
        }

        $(window).resize(function () {
            MoveReminderTitle();
        });

        //CLOSE REMINDERS
        function CloseReminders() {
            $('#RemindersSiteWide').css('height', '0px');
            $('#ctl00_uclHeader1_linkLoadReminder').removeClass('activeReminders');
            $('#RemindersSiteWide').addClass('remindersClosed');
        }

        function clickLoadReminders() {
            var cur_url = $(location).attr('protocol') + "//" + $(location).attr('host') + "/";
            $.ajax({
                type: "POST",
                url: cur_url + "ServerCall.aspx" + "/GetUpCommingReminders",
                data: '{}',
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                error: function(jqXHR, textStatus) {
                    return;
                },
                success: function (msg) {
                    listReminders(msg.d);
                    shortenDateNames();
                }
            });


        }

        function listReminders(data) {
            var site_url = $(location).attr('protocol') + "//" + $(location).attr('host') + "/";
            var remonder_body = "";

            remonder_body += "<div class=\"reminders_closeBtn\" onclick=\"javascript:CloseReminders();\" >close</div>";
            remonder_body += "<div class=\"mobile_reminders_closeBtn\" onclick=\"javascript:mobileMenuCloseReminders();\"></div>";

            var display_count = 0;
            var style = "RemLone";

            if (data != "") {
                remonder_body += "<h2 class=\"nextReminderTitle\">Next Reminder</h2>";
                remonder_body += "<h2 class=\"dontForgetTitle\">Don't forget</h2>";
                remonder_body += "<ul class=\"reminderList\">";

                var reminderList = eval(data);

                if (reminderList.length > 0) {
                    total_count = reminderList.length;
                }
                if (reminderList.length == 1) {
                    $('#RemindersSiteWideWrapper').addClass('RemLoneSingle');
                }

                for (i = 0; i < reminderList.length; i++) {
                    var reminderNameToChange = "" + reminderList[i].Name + "";
                    var reminderNameToChangeAlerted = reminderNameToChange.replace("'s Birthday", "").replace("'s Anniversary", "").replace('Christmas Day', '').replace('Halloween', '').replace("Father’s Day", "").replace("Mother’s Day", "").replace("Valentine’s Day", "").replace("Grandparent’s Day", "").replace('s Birthday', '').replace("s Anniversary", "");
                    //remonder_body += "<li><span class=\"ReminderDate\">" + reminderList[i].EventDate + "</span><a href=\"" + site_url + "personalised-cards.aspx\" class=\"ReminderTitle\">" + ((reminderList[i].Editable === 1) ? reminderList[i].Name + " " + reminderList[i].Occasion : reminderList[i].Occasion) + "</a><a href=\"" + site_url + "PersonalisedCards.aspx?type=card\" data-RemName =\"" + reminderList[i].Name + "\" class=\"ShopNow_btn\">Shop Now</a></li>";
                    remonder_body += "<li><span class=\"ReminderDate\">" + reminderList[i].EventDate + "</span><a class='remTitle' href=\"" + site_url + "Pages/Reminders.aspx?URL=reminders\" class=\"ReminderTitle\">" + ((reminderList[i].Editable === 1) ? reminderNameToChangeAlerted + " " + reminderList[i].Occasion : reminderList[i].Occasion) + "</a><a href=\"" + site_url + "PersonalisedCards.aspx?type=card\" data-RemName =\"" + reminderList[i].Name + "\" class=\"ShopNow_btn\">Shop Now</a></li>";
                    display_count = i;
                    if (reminderList.length < 5) {
                        if (i == 2) {
                            style = "RemLtwo"; break;
                        }
                    }
                    else {
                        if (i == 4) { style = "RemLthree"; break; }
                    }
                }

                remonder_body += "</ul>";

                if (display_count == 0) {
                    remonder_body += "<p class=\"reminderTextMessage\">Never forget that special occasion!</p> <a href=\"" + site_url + "Pages/Reminders.aspx?URL=reminders\" class=\"ViewAllReminders\">Add A Reminders</a>";
                }
                else if (display_count >= 1 && display_count <= 2) {
                    remonder_body += "<a href=\"" + site_url + "Pages/Reminders.aspx?URL=reminders\" class=\"ViewAllReminders\">Add More Reminders Now</a>";
                }
                else {
                    remonder_body += "<a href=\"" + site_url + "Pages/Reminders.aspx?URL=reminders\" class=\"ViewAllReminders\">View All</a>";
                }
                //alert(display_count);
            } else {
                remonder_body += "<div class='RemLWrapper'><span class=\"ReminderTitle\">You currently don't have any reminders setup.</span> <a href=\"" + site_url + "Pages/Reminders.aspx?URL=reminders\" class=\"AddReminderButton\">Add a Reminder</a> <span class=\"ReminderTitle\">and never forget that special occasion!</span></div>";
            }


            $("#RemindersSiteWideWrapper").html(remonder_body);
            $("#RemindersSiteWideWrapper").addClass(style);
            $('#RemindersSiteWide').addClass('remindersOpen');
            MoveReminderTitle();
        }

        function shortenDateNames() {

            $('.ReminderDate').each(function (index) {

                // JANUARY
                if ($(this).is(':contains("January")')) {
                    var text = $(this).text().replace('January', 'Jan');
                    $(this).text(text);
                    //alert(text)
                }

                // FEBRUARY
                if ($(this).is(':contains("February")')) {
                    var text = $(this).text().replace('February', 'Feb');
                    $(this).text(text);
                }

                // MARCH
                if ($(this).is(':contains("March")')) {
                    var text = $(this).text().replace('March', 'Mar');
                    $(this).text(text);
                }

                // APRIL
                if ($(this).is(':contains("April")')) {
                    var text = $(this).text().replace('April', 'Apr');
                    $(this).text(text);
                }

                // JUNE
                if ($(this).is(':contains("June")')) {
                    var text = $(this).text().replace('June', 'Jun');
                    $(this).text(text);
                }

                // JULY
                if ($(this).is(':contains("July")')) {
                    var text = $(this).text().replace('July', 'Jul');
                    $(this).text(text);
                }

                // AUGUST
                if ($(this).is(':contains("August")')) {
                    var text = $(this).text().replace('August', 'Aug');
                    $(this).text(text);
                }

                // SEPTEMBER
                if ($(this).is(':contains("September")')) {
                    var text = $(this).text().replace('September', 'Sep');
                    $(this).text(text);
                }

                // OCTOBER
                if ($(this).is(':contains("October")')) {
                    var text = $(this).text().replace('October', 'Oct');
                    $(this).text(text);
                }

                // NOVEMBER
                if ($(this).is(':contains("November")')) {
                    var text = $(this).text().replace('November', 'Nov');
                    $(this).text(text);
                }

                // DECEMBER
                if ($(this).is(':contains("December")')) {
                    var text = $(this).text().replace('December', 'Dec');
                    $(this).text(text);
                }

            });
        }
</script>