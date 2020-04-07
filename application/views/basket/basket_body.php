<div id="fancierbox_ppsso" style="display:none;"></div>
<script defer type="text/javascript" src="/assets/dist/frontend/basket/jquery.scrollTo-min.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/basket/jquery.scrollTo.js"></script>  
    
<style type="text/css">
    @media \0screen\,screen\9 {
    #ctl00_ContentPlaceHolder1_rblChoice label {margin:-63px 0 0 80px;}
    }
    @media screen\0 {
    #ctl00_ContentPlaceHolder1_rblChoice label {margin:-63px 0 0 80px;}
    }
    .dymanticCrumbs {display:none !important;}
    #ctl00_ContentPlaceHolder1_VisaCheckoutButton .vco-inactive                         img {pointer-events:none;}
    @media screen and (min-width: 737px) {
        .btn_pay {
            cursor: pointer !important;
        }
    }
    .nav {
        width: auto;
        height: auto;
        position: relative;
        top: 0px;
        display: inline-block;
    }

    .downloadCard{
        width: auto;
        display: block;
        line-height: 20px;
        text-decoration: none;
        color: #154a8c;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        clear: both;
        text-indent: 25px;
        float: none;
        text-align: left;
        border: none;

        background: url(/assets/dist/images/scroll_down_arrow.png) left center no-repeat #fff;
        background-size: 16px auto;
    }
    .downloadCard:hover{
        color: #452483;
        text-decoration: underline;
    }
</style>

    <!-- PAYPAL LOADER -->
    <div class="paypal_loader" style="display:none;"></div>
    <!-- MM TRIGGER -->
    <input type="hidden" name="mm_test" id="mm_test" value="0" />
    <!--LEFT NAV-->
    <div class="no_display">
        <div id="dvBreadCrump"></div>
        <input type="hidden" name="ctl00$ContentPlaceHolder1$Bread1$strItemName" id="ctl00_ContentPlaceHolder1_Bread1_strItemName" value="Happy Birthday Handsome Photo Card" />
        <input type="hidden" name="ctl00$ContentPlaceHolder1$Bread1$strAbsoluteUri" id="ctl00_ContentPlaceHolder1_Bread1_strAbsoluteUri" />
        <script language="javascript" type="text/javascript">
            $(function (){
                var breadCrump = '';                
                var obj = ((breadCrump.length > 0) ? $.parseJSON(breadCrump) : null);
                var bsData = null;
                var s = '';
                var strItemName = '';
                var strAbsoluteUri = '';
                
                strItemName = document.getElementById('ctl00_ContentPlaceHolder1_Bread1_strItemName').value;
                strAbsoluteUri = document.getElementById('ctl00_ContentPlaceHolder1_Bread1_strAbsoluteUri').value;
                
                if(obj != null){
                    for (var i = 0; i < 3;i++){
                        if (i == 2)
                        {                        
                               s += '<a href="'+ strAbsoluteUri +'">' + strItemName + "</a>";  
                        }
                        else
                        {    
                                s += '<a href="'+obj[i].Url+'">' +obj[i].DispText + "</a>";
                             
                        };
                    }
                    $('#dvBreadCrump').html(s.substring(0, s.length - 4));
                }
            });
        </script>
    </div>
    <!-- PRODUCT PREVIEW -->
    <div id="div_content" class="prodPreviewOverlay" style="display:none;">
        <div class="CardPreviewHolder">
            <!--HEADER AND CLOSE BTN-->
            <h1>Preview</h1><div class="close_highstreet_cards_popup" onclick="closehighstreetpopup();"></div>
            <p>Click the card to open and close your preview.</p>  
            <div id="prodPreviewHolder"></div>      
        </div>
    </div>

    <!--BREADCRUMBS-->
    <div class="dymanticCrumbs">
        <div class="dvBreadCrump">
             <a href="/">Home</a><a href="#" class="last">Basket</a>
        </div>
    </div>
    <!--END BREADCRUMBS-->
    <!-- PAGE TITLE AND BUTTON SPACE -->
    <div class="page_title_wrapper">
        <h1 class="left">Basket</h1>
    </div>

    <!-- END PAGE TITLE AND BUTTON SPACE -->
    <div id="wrapper_whole" class="clearfix"><!--WRAPPER-->
        <!-- CONTENT WRAPPER -->
        <div class="content_wrapper roi clearfix">
            <ul class="FlowProgressBar inBasket"><li>Login<span></span></li><li>Delivery<span></span></li><li class="current_active">Basket<span></span></li><li>Payment<span></span></li></ul>
            <div id="basket"><!--BASKET WRAPPER-->  
                <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
                <!--BASKET TITLE-->
                <div class="title clearfix"><h1>Basket</h1></div><!--END BASKET TITLE-->
                <p class="top_basket_text">The following item(s) are in your basket. Please check all the details are correct...</p>  
        
                <!--PAYMENT OPTIONS TOP--> 
        
                <!--ALL PAYMENTS BLOCK--> 
                <div id="ctl00_ContentPlaceHolder1_pnlNoPrepayButtons41">
                    <div class="payment_btns">
                        <div class="btn_pay right">
                            <a id="ctl00_ContentPlaceHolder1_imgbutPaypalCheckout1" class="basket_paypal_btn" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$imgbutPaypalCheckout1&#39;,&#39;&#39;)">Paypal</a>
                        </div>

                        <div class="btn_pay right">
                            <a id="ctl00_ContentPlaceHolder1_lnkDebitCreditCheckout2" class="light_puple_btn darkPurple" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lnkDebitCreditCheckout2&#39;,&#39;&#39;)">Credit/Debit Card</a>
                        </div>
                        <!----> 
                    </div>
                </div><!--END ALL PAYMENTS BLOCK--> 
                <!--PREPAY ONLY PAYMENT BLOCK--> 
                <!--END PREPAY ONLY PAYMENT BLOCK--> 
                <!--BASKET MESSAGE-->
                <div class="basket_message" style="display:none;">
                    <div class="basket_message_center left">
                        <a class="continue_shopping_btn" href="/home/personal" alt="Continue Shopping" title="Continue Shopping">Continue Shopping</a><p>Remember.. you can pick the delivery date.</p>
                    </div>
                </div>
                <!--END BASKET MESSAGE--> 
                <!--BASKET PROMO MESSAGE--> 
            </div>    
            <!--END BASKET PROMO MESSAGE--> 
            <!--BASKET ITEM--> 
            <table cellpadding="0" cellspacing="0" style="padding:0 0 0 0; border-top:1px solid #e5e5e5; width:100%;" class="basket_table_mainholder">
                <tr id="ctl00_ContentPlaceHolder1_lstBasket_Tr1">
                    <td id="ctl00_ContentPlaceHolder1_lstBasket_Td1">
                        <table id="ctl00_ContentPlaceHolder1_lstBasket_groupPlaceholderContainer" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <?php 
                            $i=0;
                            $address_cnt=0;
                            $prev_address=0;
                            $order_price=0;
                            $shipping_price=0;
                            foreach($products as $p){
                                if($p['_addressid']!=$prev_address){
                                    $address_cnt++;
                                    $prev_address=$p['_addressid'];
                                }
                            ?>
                            <tr id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_itemPlaceholderContainer">
                                <!--BASKET CONTENT-->
                                <td id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_Td2" data-prod-occ="" data-giftbag="" class="BasketItemContents" data-giftbagprice="<?php echo $p['_giftbagprice'];?>" data-giftbagtype="<?php echo $p['_giftbagtype'];?>" data-prodid="<?php echo $p['ids'];?>" style="width:100%;" data-product-type="<?php echo $producttype[$p['_type']]?>" data-qtyinbatch="">
                                    <!--BASKET ITEM HEADER-->
                                    <div class="basket_table_header">
                                        <div class="basket_product_title left"><span><?php if($p['_type']<4)echo "{$producttypetitle[$p['_type']]} {$productdirect[$p['_direct']]} Card";else echo $p['_title'];?></span>, <?php echo $p['_size'];?></div>
                                        <!-- REMOVE ITEM -->
                                        <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_butDeleteItem" class="deleteItem right" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$butDeleteItem&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Remove</a>
                                        <!-- REMOVE ITEM -->
                                        <div class="basket_min right">Minimize</div>
                                        <div class="basket_max right" style="display:none;">
                                            <span class="basket_top_price"><?php echo $currency_symbol.number_format($p['_price']*$currency_rate,2,'.', '');?></span>
                                            <?php if($p['_type']<4){?><span class="basket_top_discount"></span><?php }?>
                                            Maximize
                                        </div>
                                    </div>
                                    <div class="purple_underline"></div>
                                    <!-- END BASKET ITEM HEADER-->
                                    <!--BASKET ITEM HOLDER-->
                                    <div class="basket_table_holder "><!--chocolate_added-->
                                        <!--CHOCOLATE CARDS MESSAGE-->
                                        <div class="ChocolateCardsMessage right"><h1>Your card is now a Luxury Chocolate Card!</h1><p><strong>Hand crafted</strong> luxury chocolate | <strong>150g</strong> of dark chocolate | Exclusive to <strong>buddywisher.com</strong></p></div>
                                
                                        <!--ITEM PREVIEW IMAGE-->
                                        <div class="basket_itemPreview left">
                                            <?php if($p['_type']<4){?>
                                            <a id="Final_preview_A" onclick="javascript:openProdPreview('<?php echo $p['ids'];?>');" style="display:block">Preview</a>
                                            <?php }?>
                                            <div class="ChocCardOverlay"><img src="/assets/dist/images/chocolateCardBox_overlay_birthday.png" /></div>
                                            <div class="ChocCardOverlayLandscape"><img src="/assets/dist/images/chocolateCardBoxLS_overlay_birthday.png" /></div>
                                            <div class="CardFrameOverlay"><img src="/assets/dist/images/frame_overlay.png" /></div>
                                            <div class="CardFrameOverlayLandscape"><img src="/assets/dist/images/frame_overlay_landscape.png" /></div>
                                            <div class="CardFrameOverlaySquare"><img src="/assets/dist/images/frame_overlay_square.png" /></div>
                                            <div class="BalloonOverlay"></div>
                                            <input type="image" name="ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$ImageButton1" id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_ImageButton1" disabled="disabled" class="aspNetDisabled item_thumb left img_p" src="<?php echo $p['_frontsrc'];?>" style="width:130px;" />
                                            <div style='display:none;'></div>
                                        </div>
                                        <!--SEND TO SECTION-->
                                        <div class="basket_sendto left">
                                            <h2>Send to:</h2>
                                            <p><?php echo $p['_toname'];?><br/><?php echo $p['_addressline1'];?><br/><?php echo $p['_addressline2'];?><br/><?php echo $p['_city'];?><br/><?php echo $p['_postcode'];?><br/><?php echo $p['_country'];?><br/></p>
                                            <div class="EditAddress_link">
                                                <div id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_pnlEditAddress">
                                                    <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_butEditAddress" class="editAddress" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$butEditAddress&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Edit</a>
                                                </div>
                                            </div>        
                                        </div><!--END SEND TO SECTION-->
                                
                                        <!--SEND DATE SECTION-->
                                        <div class="basket_sendon left">
                                            <h2>Estimated Delivery Date:</h2>
                                            <p><?php echo $p['_deliverydate'];?></p>
                                            <div class="EditAddress_link">
                                                <?php if($p['_type']<4){?>
                                                <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_lblEditPostOn" class="editPostOn" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$lblEditPostOn&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Edit</a>
                                                <?php }?>
                                            </div>
                                            <div class="mm-product-addons">
                                                <?php if($p['_type']<4){?>
                                                <!--CARD ADD ON-->
                                                <h2 class="addOnTitle">Add On:</h2>
                                                <!--
                                                <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_butFrame" class="frameCardBtn" DSURL="https://s3-eu-west-1.amazonaws.com/photoupload.funkypigeon.com/HTML/UK7C85O74RRL191018110918_LMD.jpg" orderLineItemId="48525412" frameHeading="A5 Black Frame - £ 9.99" FrameSize="P" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$butFrame&#39;,&#39;&#39;)">Add a Frame</a>-->
                                                <!--FRAME SIZE-->
                                                <!-- CHOCO CARD BUTTON -->  
                                                <!--  
                                                <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_butChoco" class="chocoCardBtn father" orderLineItemId="48525412" productId="10391" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$butChoco&#39;,&#39;&#39;)">Make this a Chocolate Card</a>
                                                -->
                                                <!-- ADD GIFT CARD BTN -->
                                                <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_btnEditFeatureProducts" class="giftCardBtn" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnEditFeatureProducts&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Add a Gift Card</a>
                                                <?php }?>
                                            </div>
                                        </div><!--END SEND DATE SECTION-->
                                        <div id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_div_basket_options_holder" class="basket_options_holder left">
                                            <div class="basket_options clearfix">    <?php if($p['_type']<4){?>
                                                <h2>Options:</h2>
                                                <!-- EDIT OPTIONS -->
                                                <div id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_pnlEditPersonalation" class="EditPersonalationHolder">
                                                    <!-- EDIT CARD -->
                                                    <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_btnEditPersonalation" class="editPersonalation" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnEditPersonalation&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Edit Card</a>
                                                    <!-- END EDIT CARD -->  
                                                    <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_btnDownloadCard" class="downloadCard" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnDownloadCard&#39;,&#39;<?php echo $p['ids'];?>&#39;);">Download Card</a>
                                                    <!-- PREVIEW CARD -->
                                                    <!---->    
                                                    <!-- END PREVIEW CARD -->
                                                </div>
                                                <!-- GIFT SECTION -->
                           
                                                <!-- END GIFT SECTION -->
                                       
                                                <!-- END EDIT OPTIONS --> 
                                                <!--
                                                <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_butCopy" class="copyCardItem" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$butCopy&#39;,&#39;&#39;)">Copy</a>
                                                <div class="copy_tip_reveal">This will duplicate the item, you can then select <strong>'edit item'</strong> and make any changes you wish! You can even change the delivery address &amp; postage date!<div class="copy_tip_reveal_arrow"></div></div>
                                                -->
                                               <!-- GO LARGE >
                                               <div id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_editSizePnl">
                                                    <a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_lnkGoLarge" class="editPersonalation_go_large" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$lnkGoLarge&#39;,&#39;&#39;)">Go LARGE</a>
                                                </div>
                                                <!-- GO LARGE -->
                                                 <!-- EMAIL CARD >
                                                <div id="ctl00_ContentPlaceHolder1_lstBasket_ctrl<?php echo $i;?>_ctl01_divEmailCardWraper" class="EmailCardWrapper">
                                                    <div id="div_email_product_48525412" class="emailProductItem" onclick="javascript:OpenEmailForm('48525412');">Email this Card</div>
                                                    <div id="div_email_product_tip_reveal_48525412" class="emailcard_tip_reveal">Left it late? Don’t worry!! You can now send a free online version of the card to the recipient.
                                                        <div class="copy_tip_reveal_arrow"></div>
                                                    </div>

                                                    <input type="hidden" id="emailproduct_hidden_name_48525412" />
                                                    <input type="hidden" id="emailproduct_hidden_email_48525412" />
                                                    <input type="hidden" id="emailproduct_hidden_date_48525412" />
                                                </div>-->
                                                <?php }?>
                                            </div>
                                        </div>
                                        <!-- CHOCOLATES AND STAMPS --> 
                                        <!-- END CHOCOLATES AND STAMPS -->
                                        <!-- ITEM QUANTITY AND PRICES --> 
                                        <div class="basket_item_prices right">
                                            <div class="basket_qnty">
                                                <h2 class="left">Quantity:</h2>
                                                <span class="left">1</span>
                                                <div class="EditAddress_link left">
                                                    <?php if($p['_type']<4){?>
                                                    <!--<a id="ctl00_ContentPlaceHolder1_lstBasket_ctrl0_ctl01_lbnEditQty" class="editQty" orderid="29027503" orderlineitemid="48525412" quantity="1" mult="0" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lstBasket$ctrl<?php echo $i;?>$ctl01$lbnEditQty&#39;,&#39;&#39;)">Edit</a>-->
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="total_discounts_holder">
                                                <div class="basket_price">
                                                    <?php echo $currency_symbol.number_format(($p['_price']+$p['_price_delivery'])*$currency_rate,2,'.', '');?><br />
                                                </div>
                                                    
                                                
                                                <div class="basket_figures">Discount: <span class="basket_grey"><?php echo $currency_symbol.number_format($p['_disaccount']*$currency_rate,2,'.', '');?></span></div>
                                                <div class="basket_figures" style="display:none;">P&P Costs: <span class="basket_grey"><?php echo $currency_symbol.number_format(1.01*$currency_rate,2,'.', '');?></span></div>
                                                <div class="basket_figures" style="display:none;">P&P Discount: <span class="basket_grey"><?php echo $currency_symbol.number_format(0*$currency_rate,2,'.', '');?></span></div>
                                            </div>
                                        </div> 
                                    </div><!--END BASKET ITEM HOLDER-->
                                </td>
                            </tr>
                            <?php 
                                $i++;
                                $order_price+=$p['_price'];
                                $shipping_price+=$p['_price_delivery'];
                            }
                            
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- UPSELL STUFF -->
            <!-- upsell input controlls -->
            <input name="multiupsellblock" id="keyringBlock" type="hidden" value="0" />
            <input name="multiupsellblock" id="magnetBlock" type="hidden" value="1" />
            <input name="multiupsellblock" id="photoBlock" type="hidden" value="1" />
            <input name="multiupsellblock" id="cushionBlock" type="hidden" value="0" />

            <input name="singleupsellblock" id="coasterUpsell" type="hidden" value="1" />
            <input name="singleupsellblock" id="chocolateUpsell" type="hidden" value="1" />
            <input name="bandcheck" id="bandCheck" type="hidden" value="1" />
            <link rel="stylesheet" type="text/css" href="/assets/dist/frontend/basket/basketUpsell.css" />
            <script type="text/javascript" src="/assets/dist/frontend/basket/basket.js"></script>
            <div id="mm-flowers-add" style="display:none;">
                <div class="mm-flowers-add-wrap">
                    <div class="hat_header">
                      <h1><span class="mm-scoffy-title">Monty Bojangles Choccy Scoffy - &pound;4.99 </span><span class="mm-lilly-title">Lily O'Brien's - &pound;12.99</span>
                            <a class="mm-choc-add" data-ad-type="">+ Add</a>
                            <div class="mm-flowers-close"><img id="butChocoClose" src="/assets/dist/images/icon_send_email_close.png"></div>
                        </h1>
                    </div>
                    <img class="img-scoffy" style="display:none;" src="/assets/dist/images/choccy-scoffy.jpg" />
                    <img class="img-lilly" style="display:none;" src="/assets/dist/images/lilly-obriens.jpg" />
                    <div class="ingred-info">
                        
                    </div>
                    <a class="btn-add" data-ad-type="scoffy">+ Add to Order</a>
                </div>
            </div>
            <!-- BASKET SUMMARY --> 
            <table id="ctl00_ContentPlaceHolder1_tblTotal" cellpadding="0" cellspacing="0" width="100%">
                <tr id="ctl00_ContentPlaceHolder1_Tr11">
                    <td id="ctl00_ContentPlaceHolder1_Td11">
                        <table id="ctl00_ContentPlaceHolder1_groupPlaceholderContainer" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tr id="ctl00_ContentPlaceHolder1_groupPlaceholder">
                                <td id="ctl00_ContentPlaceHolder1_Td2" style="width:100%">
                                    <div class="basket_table_holder" style="border-top:1px solid #e5e5e5;margin-top:20px;">
                                        <!--PROMO CODE SECTION-->
                                        <div id="basket_code_wrapper" class="left">
                                            <h2>Enter a Promo Code</h2>
                                            <div class="promocode_holder">
                                                <div id="ctl00_ContentPlaceHolder1_pnlPromoCode">
                                                    <input name="ctl00$ContentPlaceHolder1$txtPromotionalCode" type="text" id="ctl00_ContentPlaceHolder1_txtPromotionalCode" class="FormTextbox_code left" onkeyUp="javascript: OnTextCange(this)" placeholder="Promo Code*" />
                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$lnkApply" value="Redeem" id="ctl00_ContentPlaceHolder1_lnkApply" class="btn_redeem left" />         
                                                </div>
                                            </div>
                                            <div style="margin-bottom:10px; font-size:12px;"><sup>*</sup>Please type your promo code. Do not copy and paste.</div>
                                            <span id="ctl00_ContentPlaceHolder1_lblMsg" style="color:Red;font-weight:700; line-height:20px;"></span> 
                                        </div>
                                        <!--END PROMO CODE SECTION-->
                                        <!-- TOTALS TABLE -->
                                        <div class="right basket_totals_holder">
                                            <!-- ORDER TOTAL AND POSTAGE -->
                                            <h2>Order Summary</h2>
                                            <div class="order_summary_line">
                                                <div class="left">Order Total:</div>
                                                <div class="right amount"><?php echo $currency_symbol.number_format($order_price*$currency_rate,2,'.', '');?></div>
                                            </div>
                                    
                                            <div class="order_summary_line">
                                                <div class="left">P&P Costs:</div>
                                                <div class="right amount"><?php echo $currency_symbol.number_format($shipping_price*$currency_rate,2,'.', '');?></div>
                                            </div>
                                            <!-- END ORDER TOTAL AND POSTAGE -->

                                            <!-- DISCOUNTS -->
                                            
                                            <!-- END DISCOUNTS -->
                                            <div id="ctl00_ContentPlaceHolder1_pnlPrepay2">
                                                <!-- PREPAY -->
                                                <div class="order_summary_line">
                                                    <div class="left">Your Prepay Balance:</div>
                                                    <div class="right amount"><?php echo $currency_symbol.number_format($disaccount*$currency_rate,2,'.', '');?></div>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- END TOTALS TABLE -->
                                    </div>
                                    <div class="summary_bottom">
                                        <!-- BASKET TOTAL -->  
                                        <div class="total right">
                                            <div class="order_summary_line">
                                                <div class="left">Total:</div>
                                                <div class="right dl_basketTotal"><?php echo $currency_symbol.number_format(($order_price+$shipping_price-$disaccount)*$currency_rate,2,'.', '');?></div>
                                                <div class="dl_currency"></div>
                                            </div>
                                        </div>
                                        <!-- END BASKET TOTAL -->

                                        <!--PREPAY INFO BUBBLE-->
                                        
                                        <!--END PREPAY INFO BUBBLE-->
                                
                                        <!--PAY SECURELY-->
                                        <div class="basket_cards left">
                                                
                                        </div>
                                        <!--END PAY SECURELY-->
                                    </div>
                                    <!-- Charity Donation -->
                                    
                                    <!-- End Charity donation -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- BASKET SUMMARY -->

            <!--BOTTOM PAYMENT OPTIONS-->
            <div style="display: none;;" id="ctl00_ContentPlaceHolder1_pnlNoPrepayButtons4">
                <div class="payment_method_title">Pay Securely by</div>
                <div class="payment_btns">
                    <div id="ctl00_ContentPlaceHolder1_VisaCheckoutButton" class="btn_pay" data-co-method="vco">
                        <a class="vco-inactive visa-checkout-link"><img alt="Visa Checkout" class="v-button" role="button" src="https://secure.checkout.visa.com/wallet-services-web/xo/button.png"/></a>
                        <a class="v-learn v-learn-default" data-locale="en_GB">Tell Me More</a>
                    </div>

                    <div class="btn_pay" data-co-method="card">
                        <a id="ctl00_ContentPlaceHolder1_lnkDebitCreditCheckout" class="light_puple_btn card_checkout_btn" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$lnkDebitCreditCheckout&#39;,&#39;<?php echo $p['ids'];?>&#39;)">Credit/Debit Card</a>
                    </div>

                    <div class="btn_pay" data-co-method="paypal" style="position:relative;">
                        
                        <div id="paypal-button"></div>
                    </div>

                    <div id="ctl00_ContentPlaceHolder1_divLayBuyButton" class="btn_pay" data-co-method="laybuy">
                        <a onclick="LayBuyOrderCreate();" title="Checkout with LayBuy" class="light_puple_btn laybuy_checkout_btn">
                            <img src="/assets/dist/images/logo-laybuy-white.png" alt="Checkout with LayBuy" />
                        </a>
                        <p class="laybuy_textline"></p>
                    </div>

                </div>
            </div>

             <!--END BOTTOM PAYMENT OPTIONS-->
 

            <table id="ctl00_ContentPlaceHolder1_Table1" cellpadding="0" cellspacing="0" style="width:960px;">
                <tr id="ctl00_ContentPlaceHolder1_Tr3">
                    <td id="ctl00_ContentPlaceHolder1_Td4">
                        <table id="ctl00_ContentPlaceHolder1_Table3" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tr id="ctl00_ContentPlaceHolder1_Tr4">
                                <td id="ctl00_ContentPlaceHolder1_Td5" valign="middle" style="padding-right:2px; padding-bottom:2px; width:100%">
                                    <table cellspacing="0" cellpadding="0" style="width:100%; padding:0 0 0 0;" border="0">
                                        <tr style="background-color:White" >
                                            <td style="background-color:White">&nbsp;</td>
                                            <td style="background-color:White">&nbsp;</td>
                                            <td style="background-color:White">&nbsp;</td>
                                        </tr>
                                        <div id="ctl00_ContentPlaceHolder1_pnlNoPrepayButtons">
                                            <tr style="width: 100%;">
                                                <td align="left" style="width:65%;">
                                                </td>
                                                <td align="right">
                                                  
                                                </td>
                                            </tr>
                                        </div>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--
                    </td>
                </tr>
            </table>
                    </td>
                </tr>
            </table>
            -->

            <!--QUANTITY POPUP-->
            <div id="dialogCopy">
                <div class="BasketQuantityPopupHolder">
                    <input id="butClose" class="myaccount_edit"  src="/App_Themes/Remind4u/Images/Buttons/btn_cancel.gif" value="Cancel" />
                    <h6>Edit Quantity</h6>
                    <div class="popup_qnty">
                        <div class="basket_quantity_title_holder">Quantity:</div>
                        <div class="basket_quantity_holder">
                            <input name="ctl00$ContentPlaceHolder1$txtQuantity" type="text" maxlength="3" id="ctl00_ContentPlaceHolder1_txtQuantity" />
                            <div id="divQtyUpdate">
                                <a href="javascript://" onclick="increaseQty()">+</a>
                                <a href="javascript://" onclick="decreaseQty()">-</a>
                            </div>
                        </div>
                    </div>
                    <a id="ctl00_ContentPlaceHolder1_butYes" class="update_quantity right" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$butYes&#39;,&#39;&#39;)">Update Basket</a>
                </div>
            </div>
            <!--END QUANTITY POPUP-->

            <!--ADD FRAME POPUP-->
            <div id="dialogAddFrame">
                <div class="AddFrameHolder">
                    <div class="hat_header">
                        <h1>Portrait Black Frame</h1>
                        <div class="btn_cancel"><img id="butFrameClose" src="/assets/dist/images/icon_send_email_close.png"></div>
                    </div>
                    <div class="AddFrameContent">
                        <div class="AddFrameImage left">
                            <img src="/assets/dist/images/PortraitPreview.jpg" class="PortraitPreviewImg" />
                            <img src="/assets/dist/images/landscapePreview.jpg" class="LandscapePreviewImg" />
                            <img src="/assets/dist/images/SquarePreview.jpg" class="SquarePreviewImg" />
                        </div>
                
                        <div class="SmallFramePreview">
                            <!-- PORTRAIT FRAMES -->
                            <img class="A4P_Frame" src="/assets/dist/images/portraitA4.png" />
                            <img class="A5P_Frame" src="/assets/dist/images/portraitA5.png" />
                            <img class="A6P_Frame" src="/assets/dist/images/portraitA6.png" />
                            <!-- LANDSCAPE FRAMES -->
                            <img class="A4L_Frame" src="/assets/dist/images/landscapeA4.png" />
                            <img class="A5L_Frame" src="/assets/dist/images/landscapeA5.png" />
                            <img class="A6L_Frame" src="/assets/dist/images/landscapeA6.png" />
                            <!-- SQUARE FRAMES -->
                            <img class="SQR_Frame" src="/assets/dist/images/squareSmall.png" />
                            <img class="LSQR_Frame" src="/assets/dist/images/squareLarge.png" />
                            <!-- FRAME PREVIEW -->
                            <div class="AddFrameImageLoader"></div>
                            <img id="ctl00_ContentPlaceHolder1_frameDSUrl" class="cardThumbPreview" />
                        </div>
                
                        <p>Why not add a frame and turn your card into a special gift! Our unique, toughened glass frames can be used either Portrait or Landscape. You will receive 2 cards, 1 already framed!</p>
                        <a id="ctl00_ContentPlaceHolder1_btnAddFrame" class="btn_purple" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$btnAddFrame&#39;,&#39;&#39;)">Add Frame to your card</a>
                    </div>
                </div>
            </div>
            <!--END ADD FRAME POPUP-->

            <!--ADD CHOCO POPUP-->
            <div id="dialogAddChoco">
                <div class="AddChocoHolder">    
                    <div class="hat_header">
                        <h1>Luxury Chocolate Card - only <?php echo $currency_symbol.number_format(8.70*$currency_rate,2,'.', '');?> extra</h1>
                        <div class="btn_cancel"><img id="butChocoClose" src="/assets/dist/images/icon_send_email_close.png"></div>
                    </div> 
            
                    <div class="chocCardStrap">
                        <h1>Your card with a chocolate twist</h1>
                        <p>Hand crafted luxury 150g dark chocolate, to accompany your card.</p>
                    </div>

                    <div class="chocCardInfoWrapper">
                        <div class="chocCardProduct left">
                            <div class="chocBoxMask">
                                <img class="PortraitCardMask" src="/assets/dist/images/CardboxMaskWithArrow.png">
                                <img class="card_dupe" src="">
                            </div>
                        </div>

                        <div class="ChocCardSelector right">
                            <h2>Choose a Chocolate</h2>
                            <div id="chocList"></div>
                            <p>(Chocolate size: 11.4cm x 19.4cm)</p>
                        </div>

                    </div>
            
                    <a id="ctl00_ContentPlaceHolder1_LinkButton2" class="BTNaddChoc" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$LinkButton2&#39;,&#39;&#39;)">Add Chocolate to your card</a>            
                </div>
            </div>
            <!--END ADD CHOCO POPUP-->

            <div id="ctl00_ContentPlaceHolder1_dialog_removed_items" class="OOS_basket">
                <div class="basket_removed_product_view"></div>
            </div>

            <input type="hidden" name="ctl00$ContentPlaceHolder1$txtOrderLineItemId" id="ctl00_ContentPlaceHolder1_txtOrderLineItemId" />
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hidQuantity" id="ctl00_ContentPlaceHolder1_hidQuantity" />
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hidOrderId" id="ctl00_ContentPlaceHolder1_hidOrderId" />
            <input type="hidden" name="ctl00$ContentPlaceHolder1$hidFpid" id="ctl00_ContentPlaceHolder1_hidFpid" />
        </div>
    </div><!-- END BASKET WRAPPER -->    
</div><!-- END CONTENT WRAPPER -->

<!-- BASKET WIZARD -->
<div style="display:none">
    <div id="survey_container">
        <h1>Sorry you are leaving...</h1>
        <h2>Please tell us your reason for leaving:</h2>
        <table id="ctl00_ContentPlaceHolder1_rblChoice">
            <tr>
                <td><input id="ctl00_ContentPlaceHolder1_rblChoice_0" type="radio" name="ctl00$ContentPlaceHolder1$rblChoice" value="2" checked="checked" onclick="javascript:ShowHideTextBox(&#39;2&#39;);" /><label for="ctl00_ContentPlaceHolder1_rblChoice_0">Postage cost is too expensive.</label></td>
            </tr><tr>
                <td><input id="ctl00_ContentPlaceHolder1_rblChoice_1" type="radio" name="ctl00$ContentPlaceHolder1$rblChoice" value="8" onclick="javascript:ShowHideTextBox(&#39;8&#39;);" /><label for="ctl00_ContentPlaceHolder1_rblChoice_1">Price isn't as expected</label></td>
            </tr><tr>
                <td><input id="ctl00_ContentPlaceHolder1_rblChoice_2" type="radio" name="ctl00$ContentPlaceHolder1$rblChoice" value="9" onclick="javascript:ShowHideTextBox(&#39;9&#39;);" /><label for="ctl00_ContentPlaceHolder1_rblChoice_2">Worried about the security of my payment details</label></td>
            </tr><tr>
                <td><input id="ctl00_ContentPlaceHolder1_rblChoice_3" type="radio" name="ctl00$ContentPlaceHolder1$rblChoice" value="7" onclick="javascript:ShowHideTextBox(&#39;7&#39;);" /><label for="ctl00_ContentPlaceHolder1_rblChoice_3">Some other reason – please write in here</label></td>
            </tr>
        </table>

        <div class="basket_message_area">
            <!-- MESSAGE 1 -->
            <div class="message1">
                <div class="static_bw_btn btn1">Postage cost is too expensive.</div>
                <h2>We have removed your Postage!</h2>
                <p>As a gesture of good will, we have removed the postage cost from your first order. Make your order now!</p>
            </div>
            <!-- END MESSAGE 1 -->
            
            <!-- MESSAGE 2 -->
            <div class="message2">
                <div class="static_bw_btn btn2">Price isn't as expected</div>
                <h2>Have you entered your promotion code?</h2>
                <p>Our current promotion is <?php echo $currency_symbol.number_format(1*$currency_rate,2,'.', '');?> off when you pay by PayPal - just enter the code <strong>Paypal1</strong> in the Promo Code box and click ‘Redeem’</p>
            </div>
            <!-- END MESSAGE 2 -->
            
            <!-- MESSAGE 3 -->
            <div class="message3">
                <div class="static_bw_btn btn3">Worried about the security of my payment details</div>
                <h2>Payments are <strong>securely</strong> taken and verified using the following... </h2>
            </div>
            <!-- END MESSAGE 3 -->
            
            <!-- END MESSAGE 4 -->
            <div class="message4">
                <div class="static_bw_btn btn4">Other...</div>
                <h2>We hope to see you again soon...</h2>
                <p>...remember your items are saved in your basket and will be there next time you log in.</p>
            </div>
            <!-- END MESSAGE 4 -->
            
            <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Return to Basket" id="ctl00_ContentPlaceHolder1_btnSubmit" class="btn_light_purple_basket" />
            <a onclick="TopMenuClick('logout', 'tdTopMenuJoin');" class="exit_survey">No Thanks, Let me <span>Exit</span></a>
            
        </div>
        
        <div id="divNotes" style="display:none" >
            <textarea name="ctl00$ContentPlaceHolder1$txtNotes" rows="10" cols="100" id="ctl00_ContentPlaceHolder1_txtNotes"></textarea>
        </div>
        <span id="ctl00_ContentPlaceHolder1_lblStatus"></span>
    
    </div>
</div>
<!-- END BASKET WIZARD -->

<div style="display:none">
    <div id="Final_preview">
        This is Card Final Preview HTML
    </div>
</div>

<!-- LAYBUY POPUP -->
<div id="laybuy_popup" style="display:none;">
    <link rel="stylesheet" href="/assets/dist/frontend/basket/laybuy_popup.css" />
    <div class="laybuy_info_content">
        <div class="close_laybuy_info_popup"></div>
        <div class="laybuy_info_content_scroll">
            <div class="laybuy_header">
                <img src="/assets/dist/images/logo-laybuy-white.png" alt="Laybuy" />
            </div>
        
            <h2>Shop now. Get it now. <br />Pay it in 6 weekly payments.</h2>
            <p>Laybuy lets you receive your purchase now and spread the total cost over 6 weekly automatic payments. <span>Interest Free.</span></p>

            <h3>So why shop with Laybuy? <br />Glad you asked.</h3>

            <ul class="clearfix">
                <li><strong>No fees, no interest</strong> use Laybuy for your purchases, completely interest free</li>
                <li><strong>Payment day flexibility</strong> the freedom to choose your payment day</li>
                <li><strong>6 weekly payments</strong> to better suit weekly budgeting and pay cycles</li>
                <li><strong>Laybuy Boost</strong> allowing you the freedom to buy larger items by paying the difference up front</li>
            </ul>

            <p class="laybuy_terms">*Available for purchases of <?php echo $currency_symbol.number_format(20*$currency_rate,2,'.', '');?> or more. Predicted weekly repayment amount excudes chosen delivery costs. See terms and conditions for full details.</p>

        </div>
    </div>
    <script type="text/javascript">
        //CLOSE POPUP
        $('.close_laybuy_info_popup').click(function () {
            $('#laybuy_popup').fadeOut(200);
        });

        //OPEN POPUP
        $('.laybuy_banner, .laybuy_payment_text, .laybuy_textline').click(function () {
            $('#laybuy_popup').fadeIn(200);
        });
    </script>
</div>

<input type="hidden" name="ctl00$ContentPlaceHolder1$detect_mobile_vp" id="ctl00_ContentPlaceHolder1_detect_mobile_vp" value="normal_vp" />
<input type="hidden" name="ctl00$ContentPlaceHolder1$detect_mobile_vp_wc_tmp" id="ctl00_ContentPlaceHolder1_detect_mobile_vp_wc_tmp" />


<script type="text/javascript" src="/assets/dist/frontend/basket/basket_body.js"></script>

<input type="hidden" id="txt_no_of_decline" value="0" />  
<input name="ctl00$ContentPlaceHolder1$layBuyPhoneNo" type="hidden" id="ctl00_ContentPlaceHolder1_layBuyPhoneNo" />

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
<canvas id='downloading_canvas' style="display: none;"></canvas>
<script type="text/javascript" src="/assets/dist/frontend/jszip.js"></script>

<?php 
if(isset($downloading_card)){?>
<div style="height: 0px;">
    <img id="_frontsrc" src="<?php echo $downloading_card['_frontsrc'];?>">
    <img id="_leftinsidesrc" src="<?php echo $downloading_card['_leftinsidesrc'];?>">
    <img id="_rightinsidesrc" src="<?php echo $downloading_card['_rightinsidesrc'];?>">
    <img id="_backinsidesrc" src="<?php echo $downloading_card['_backinsidesrc'];?>">
</div>
<?php }?>
<?php 
if(isset($downloading_card)){
    //echo base64_decode($downloading_card['_frontsrc']);
    $htm="<script>
        $(function (){";
    $htm.=" var w=eval($('#_frontsrc').css('width').replace('px',''));
            var h=eval($('#_frontsrc').css('height').replace('px',''));
            var canvas = document.getElementById('downloading_canvas');
            var ctx = canvas.getContext('2d');
            var padding=1;
            canvas.width = w*4+padding*17;
           canvas.height = h+padding*3;
           canvas.crossOrigin = \"Anonymous\";
           
           ctx.clearRect(0,0,w*4+padding*17,h+padding*3);
           ctx.fillStyle = \"#696969\";
           ctx.fillRect(0,0,canvas.width,canvas.height);
           ctx.drawImage($('#_frontsrc').get(0), padding, padding, w+padding,h+padding);

           /*if(this.width==0||this.height==0){
                ctx.fillStyle = \"#ffffff\";
                ctx.fillRect(w+padding*3, padding, w+padding*2,h+padding);
           }else*/
                ctx.drawImage($('#_leftinsidesrc').get(0), w+padding*3, padding, w+padding*2,h+padding);
           //}
           
            ctx.drawImage($('#_rightinsidesrc').get(0), w*2+padding*6, padding, w+padding*5,h+padding);
           
           ctx.drawImage($('#_backinsidesrc').get(0), w*3+padding*12, padding, w+padding*4,h+padding);

           var url = canvas.toDataURL().replace(/^data:image\/[^;]+/, 'data:application/octet-stream');
            //window.open(url);
           var a = document.createElement(\"a\"); 
            a.href = url; 
            a.download = \"buddywisher{$downloading_card['ids']}.png\"; 
            a.click(); 
    ";
    //$htm.="location.href = url;";
    /*$htm.="var zip = new JSZip();";
    $img = str_replace('data:image/png;base64,', '', $downloading_card['_frontsrc']);
    $htm.="zip.add(\"front-side.png\", \"{$img}\",{base64: true});";
    $img = str_replace('data:image/png;base64,', '', $downloading_card['_leftinsidesrc']);
    $htm.="zip.add(\"left-side.png\", \"{$img}\",{base64: true});";
    $img = str_replace('data:image/png;base64,', '', $downloading_card['_rightinsidesrc']);
    $htm.="zip.add(\"right-side.png\", \"{$img}\",{base64: true});";
    $img = str_replace('data:image/png;base64,', '', $downloading_card['_backinsidesrc']);
    $htm.="zip.add(\"back-side.png\", \"{$img}\",{base64: true});";
    $htm.="content = zip.generate();";
    $htm.="location.href = \"data:application/zip;base64,\" + content;";
    $htm.="$('#__EVENTTARGET').val('');";*/
    $htm.="});</script>";
    echo $htm;
}
?>
</SCRIPT>


