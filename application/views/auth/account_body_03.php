<style type="text/css">
	#reminders tr:nth-child(2) {
        border: none;
    	    height: 50px!important;
	    background: #fff;
	    padding: 8px 0;
	    border-bottom: 1px solid #f5f5f5;
	    color: #7d7b7e;
	    padding: 0;
	    font-size: 16px!important;
	    font-family: Arial,sans-serif;
    }
    #reminders tr:nth-child(2) span{
    	font-size: 18px!important;
    }

   .reminders_wrapper {
	    height: 560px;
    	width: 61%;
	}
</style>
<div class="reminders_wrapper myaccount_rightad_holder left">
    <div id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_divErrorMessage" style="display:none;"></div>
    <div id="common_message_wrapper" class="CardError2" style="display:none;"></div>
    <div class="tabs_reminders">
        <div class="myaccount_header" id="#reminders">Transfer Histories</div>
        <a class="quick_remind_btn right" onclick="addReminder();">

        </a>
    </div>
    
    <div id="reminders" class="clearfix tab_links_reminders" style="">
        <div class="reminders_holder">
	        <div>
            	<table cellspacing="0" cellpadding="0" rules="all" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders" style="border-width:0px;width:100%;border-collapse:collapse;">
                    <tbody>
                        <tr><td></td></tr>
                        <?php 
                        foreach($data['trans'] as $r){?>
                        <tr>
        			        <td>
                                <div id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_remItemDiv" class="Halloween ">
                                    <span id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_lblEventDate" class="table_date">
                                    	<?php echo "€".number_format($r['_credit']+$r['_debit'],2,'.', '');?></span>
                                    <span style="float: right;" id="ctl00_ContentPlaceHolder1_uclMyAccountMyReminders1_grvReminders_ctl02_Label2" class="event_name"><?php echo "{$r['_date']}";?> </span>
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

<div class="my_orders border_none left" style="    overflow: auto;">
    <div class="myaccount_header" id="#orders">Now Add Prepay</div>
    <div class="form-row">
    	<label>Amount: </label>
    	<input type="text" name="payamount" id="payamount" style="    width: 98px;font-size: 15px;" value="20.00" />
    </div>
	<div id="orders" class="clearfix tab_links" style="">
		<div id="paypal-button"></div>
		<!--button id="confirm-button">confirm</button-->

	    <table cellpadding="0" cellspacing="0" style="font-size:12px; width:100%;">
	       <!-- <tr>
	           <th width="120" height="35px" align="left">
	                Order No.
	           </th>
	           <th width="90" height="35px" align="left">
	                Order Date
	           </th>
	           <th height="35px" align="left">
	                Recipient
	           </th>
	       </tr> -->
	    </table>
	</div>
	<div id="payments" class="clearfix tab_links" style="font-size: 12px; display: none;">
		<div>
	</div>
	    <a class="btn_view_full" href="/Pages/MyPaymentHistory.aspx"></a>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
		
	$('.tab_links').hide();
	$('#orders').show();
	

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
	
});
</script>

<input type="hidden" name='_date' id='_date'/>
<input type="hidden" name='_currency' id='_currency'/>
<input type="hidden" name='_acc_email' id='_acc_email'/>
<input type="hidden" name='_identity'id='_identity'/>
<input type="hidden" name='_card_info'id='_card_info'/>

<!--script src="https://www.paypalobjects.com/api/checkout.js"></script-->
<script src="https://www.paypal.com/sdk/js?client-id=ASBfENfWWv4KFqFkHq6rkIxChSJyy4AfyF2g5mS83kYXuUOwufu_Wci6G_MH509DXcTzjvOulVDfT8uN&commit=true&currency=EUR">
  </script>

<script>
  paypal.Buttons({
   
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'ASBfENfWWv4KFqFkHq6rkIxChSJyy4AfyF2g5mS83kYXuUOwufu_Wci6G_MH509DXcTzjvOulVDfT8uN&currency=EUR',
      production: 'qrq123'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },
	
    // Enable Pay Now checkout flow (optional)
    commit: true,
	 /**/

	
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          "amount": {
          	"currency":"EUR",
	        "value": $('#payamount').val()
	      }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        $('#_date').val(details.create_time);
        $('#_currency').val(details.purchase_units[0].amount.currency_code);
        $('#_acc_email').val(details.payer.email_address);
        $('#payamount').val(details.purchase_units[0].amount.value);
        $('#_identity').val(details.id);
        
        __doPostBack('paymentcomplete','');

        return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    },

    onError: function (err) {
	    // Show an error page here, when an error occurs
	    alert(err.message);
	}

  }).render('#paypal-button');

</script>