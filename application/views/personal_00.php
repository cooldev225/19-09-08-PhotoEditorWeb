<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_all.css"/>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_stage_01.css"/>
<div id="content-area"> 
	<section class="shop-page padding-top-10 padding-bottom-20">
	  <div class="container">
	    <div class="row"> 
	    	<div class="col-sm-12">  
				<div class="nav-history-menu">
					<?php 
					echo"<a href=''>back&nbsp;</a>><a href=''>&nbsp;{$data['photo_product_row']['menus']}&nbsp;</a>><a href=''>&nbsp;{$data['photo_product_row']['categories']}&nbsp;</a>";
					?>
				</div>
			</div>
		</div>
		<div class="row" style="min-height: 550px;">
			<div class="working-area">
				<div class="magnify_large"></div>
				<div class="previewer">
		        	<img id="workarea-img" style="position:absolute;z-index:1000;width: 323px;height: 459px;" src="<?php echo $data['photo_product_row']['photo9'];?>"/>
				</div>
			</div>
			<div class="control-area" >
				<div class="title-detail-area">
					<?php 
						echo "<h1>{$data['photo_product_row']["titles"]}</h1>";
					?>

					<div id="averageCustomerReviews" class="a-spacing-none" data-asin="B0799Y92ZB" data-ref="dpx_acr_pop_">
						<a><i class="a-icon a-icon-star a-star-4"><span class="a-icon-alt">3.8 out of 5 stars</span></i></a>

						<span class="a-letter-space"></span>

						<a id="acrCustomerReviewLink" class="a-link-normal">
                        <span id="acrCustomerReviewText" class="a-size-base">&nbsp;713 customer reviews</span>
                    </a>
                    <hr>
					</div>
					<div class="price-detail-area" id="price" class="a-section a-spacing-small">
      					<div id="ctl00_ContentPlaceHolder1_Product1_CardSizeSelection" class="card_size_selection size_check">
      						<ul class="sizes_normal">
      							<li class="size_list" data-size="128" data-name="A3" data-price=" £9.99"> <?php echo $currency_symbol.number_format(9.99*$currency_rate,2,'.', '');?> <br><span>Giant </span></li>
      							<li class="size_list" data-size="8" data-name="A4" data-price=" £5.99"> <?php echo $currency_symbol.number_format(5.99*$currency_rate,2,'.', '');?> <br><span>large</span></li>
      							<li class="size_list selected_size" data-size="11" data-name="A5" data-price=" £3.29"> <?php echo $currency_symbol.number_format(3.29*$currency_rate,2,'.', '');?> <br><span>standard</span></li>
      							<li class="size_list" data-size="10" data-name="A6" data-price=" £2.29"><?php echo $currency_symbol.number_format(2.29*$currency_rate,2,'.', '');?> <br><span>small</span></li>
      						</ul>
      					</div>
      				</div>

      				<div class="order_by_message countdown CD-first-class">
		                <div class="deliveryCountdown">
		                    <p>Get it tomorrow - <span>order in the next<br><span class="countdown_time">1 hrs 54 mins</span></span></p>
		                    <p class="obm_more_info"><span class="NDtext">Next day and </span>1st class delivery available<br><span class="FCtext">93% delivered next working day</span> - <span class="obm_more_info_click">more info</span></p>
		                </div>
		                <div class="deliveryOptions" style="display:none;">
		                    <p><span style="color:#835A94;">Delivery Options:</span></p>
		                    <ul>
		                        <li>Next Day Guaranteed<br><span><span> -</span> Signature Required</span></li>
		                        <li>Royal Mail First Class<br><span><span> -</span> 93% arrive next working day</span></li>
		                    </ul>
		                </div>
		            </div>

		            <a class="personalise_btn" title="Personalise this card" onclick="gotoNextStage();">Personalise this <span>Card</span></a>

      				<div class="product-description-area">
  					<?php
  						echo "<b>Description:</b>";
      					echo str_replace('\n', '</p><p>',"<p>{$data['photo_product_row']['descriptions']}</p>");	
  					?>
      				</div>
				</div>
			</div>
	  	</div>
	  	<div class="row">
	  		<hr>
	  		<div class="col-sm-6">
			  	<!--similar product-->
			  	<div class="similar_products">
                	<h2>More like this...</h2>
					<div class="similar_products_holder">
					    <div class="current_card"><a class="" onclick="javascript:similarSelect($(this));" data-prod-ref="<?php echo $product_id;?>">
					    	<img src="<?php echo $data['photo_product_row']["photo9"];?>"></a>
					    </div>
					    <div id="similar_card_content">
					    	<ul id="similar_card_items">
					    		<?php $i=1;foreach($bestproducts as $row)if($row['ids']!=$product_id){?>
					    		<li>
					    			<a onclick="javascript:similarSelect($(this));" data-prod-ref="<?php echo $row['ids'];?>" href="/home/personal?product_id=<?php echo $row['ids'];?>" >
				    				<img src="<?php echo $row['photo9']?>" style="width:91px;"></a>
					    		</li>
					    		<?php }?>
					    	</ul>
					    </div>
					    <div class="sc_pag_next" onclick="navigatePage(1);">load more...</div>
					</div>
	            </div>
			</div>
			<div class="col-sm-6">
			  	<div class="product_seo">
	                <ul>
	                    <li class="active" data-tab="delivery_text">Delivery Info</li>
	                    <li data-tab="product_review" class="">Reviews</li>
	                </ul>

                	<!-- DELIVERY INFO -->
                	<div class="delivery_text tab_holder open_tab">
                    	<div class="delivery_text_holder">
							<div>
							    <table cellpadding="0" cellspacing="0">
							        <tbody>
							        	<tr>
							            	<td>Standard First Class Post<span>(1-3 days for delivery)</span></td>
							            	<td>£0.70 - £1.00<span>(depending on card size)</span></td>
							        	</tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 1pm</span></td>
								            <td>£6.75</td>
								        </tr>
								        <tr>
							            	<td>Standard First Class Post<span>(1-3 days for delivery)</span></td>
							            	<td>£0.70 - £1.00<span>(depending on card size)</span></td>
							        	</tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 1pm</span></td>
								            <td>£6.75</td>
								        </tr>
								        <tr>
							            	<td>Standard First Class Post<span>(1-3 days for delivery)</span></td>
							            	<td>£0.70 - £1.00<span>(depending on card size)</span></td>
							        	</tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 1pm</span></td>
								            <td>£6.75</td>
								        </tr>
								        <tr>
							            	<td>Standard First Class Post<span>(1-3 days for delivery)</span></td>
							            	<td>£0.70 - £1.00<span>(depending on card size)</span></td>
							        	</tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 1pm</span></td>
								            <td>£6.75</td>
								        </tr>
							    	</tbody>
							    </table>
							    <p class="mm_extra_delivery_text">Orders received by 5pm Monday to Friday will be in the post the same day. However, please note during busy periods we reserve the right to adjust daily order cut-off times. </p>
							    <p>Orders placed after 5pm Monday to Friday and orders placed over the weekend or on public holidays will be despatched on the next available working day. Please note, during busy periods we reserve the right to adjust the daily order cut-off times.</p>
							    <p>All orders for guaranteed Next Day delivery need to be placed before 2pm Monday to Friday for guaranteed delivery the next working day.</p>
							    <p>Our cards can be sent directly to the recipient or back to yourself to sign and deliver.</p>
							    <p><strong>Please note</strong> Royal Mail state that they aim to deliver 93% of 1st Class mail the next working day after posting but they are unable to provide a guaranteed service. This delivery can take up to 3 working days. For a guaranteed next day delivery Royal Mail recommend Special Delivery. Items that have not been delivered by Royal Mail 5 working days after the posting date will be either replaced or refunded.</p>
							    <p>You can also send your cards to Europe and the Rest of the World by selecting Royal Mail's Airmail service. <a href="/PersonalisedDelivery.aspx" class="footer_link">View full delivery information here.</a>
							    </p>
							</div>
                    	</div>
                    	<a class="read_more_delivery">Read more</a>
                	</div>         
                	<!-- PRODUCT REVIEWS -->
                	<div class="product_review tab_holder">
                		<div id="trustbox" class="trustpilot-widget" data-locale="en-GB" data-template-id="5717796816f630043868e2e8" data-businessunit-id="4bedb38600006400050ba480" data-style-height="440px" data-style-width="100%" data-theme="light" data-sku="148362" data-name="" style="position: relative;">
                			<iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/5717796816f630043868e2e8/index.html?templateId=5717796816f630043868e2e8&amp;businessunitId=4bedb38600006400050ba480#locale=en-GB&amp;styleHeight=440px&amp;styleWidth=100%25&amp;theme=light&amp;sku=148362&amp;name=" style="position: relative; height: 440px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                		</div>
                	</div>
				</div>
			</div>
		</div>
	</section>
</div>
<form id="refresh_frm" method="post" action="home/personal">
	<input type="hidden" value="1" id="page_stage" name="page_stage"/>
	<input type="hidden" id="paper_size" name="paper_size"/>
	<input type="hidden" value="<?php echo $product_id;?>" id="product_id" name="product_id"/>
</form>
<script type="text/javascript">
	var image_over_flag=0;
	var side_arr=new String("front-left-right-back").split('-');
	$(document).ready(function(){
		resize_screen();
		zoomRollover();
	});
	$(window).resize(function(){resize_screen();});
	function resize_screen(){
		var w=eval($(".container").css('width').replace('px',''));
		$(".control-area").css('width',(w-364));
	}

	$(".card_size_selection li").click(function(){
		$(".card_size_selection li").each(function(){
			$(this).removeClass('selected_size');
		});
		$(this).addClass("selected_size");
		ChangeCardSize();
	});


	function loadSimilarSelect(thisObj) {

        //STORE SELECTED PRODUCT SET
        var selectedImageURL = $(thisObj).find('img').attr('src').split('/');
        var selectedImageURL = selectedImageURL[selectedImageURL.length-1].replace('.jpg', '');

        $('#currentProductSetName').val(selectedImageURL);
        $('#card_front_preview').trigger('click');

        //add active state
        $('.similar_products_holder a').removeClass('current_card_active');
        $(thisObj).addClass('current_card_active');


        //title
        $('#ctl00_ContentPlaceHolder1_Product1_ProductTitle h1').html(thisObj.find('img').attr('alt'));

        //Card Img
        $('.product_image_holder img').attr('src', thisObj.find('img').attr('src'));
        $('.magnify_large').css('background-image', 'url("' + thisObj.find('img').attr('src') + '")');

        //Btn URL
        var selectedProdId = thisObj.data('prod-ref');
        $('#ProductId').attr('value', selectedProdId);
        $('#ProductSmilarUsed').attr('value', '1');
        $('.shortlistsave').attr('href', 'javascript:updatesession(' + selectedProdId + ');');

        //Trustpilot
        TPprodLookup();

        //CHANGE PRICE BUTTONS
        //if ($(thisObj).find('img').data('cardsize') === 'square-card') {
        //    //console.log('Sqaure Card');
        //    $('.card_size_selection').html('<ul class="sizes_normal"><li class="selected_size" data-size="40">£5.99<br><span>large square</span></li><li data-size="17">£2.99<br><span>square</span></li></ul>');
        //} else {
        //    //console.log('Normal Card');
        //    $('.card_size_selection').html('<ul class="sizes_normal"><li data-size="8">£5.99<br><span>large</span></li><li class="selected_size" data-size="11">£3.29<br><span>standard</span></li><li data-size="10">£1.99<br><span>small</span></li></ul>');
        //}

        var data = "{'productId':'" + selectedProdId + "'}";
        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetProductSizePrice",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    var address_line_html;
                    var price_list = eval(msg.d);

                    var list = "";
                    var selected = "";
                    for (i = 0; i < price_list.length; i++) {
                        //console.log(price_list[i].Id + " - " + price_list[i].SizeName + " - " + price_list[i].Size + " - " + price_list[i].Price);
                        selected = "";
                        if (price_list[i].Id == "11" || price_list[i].Id == "40") {
                            selected = "selected_size";
                        }
                        list += '<li class="size_list ' +selected + '" data-size="' + price_list[i].Id + '" data-price="' + price_list[i].Price.trim() + '" data-name="' + price_list[i].SizeName.trim() + '"> ' + price_list[i].Price + ' <br><span>' + price_list[i].SizeName + '</span></li>';
                    }
                    $('.card_size_selection').html('<ul class="sizes_normal">' + list + '</ul>');
                    changeSizeText();
                    ChangeCardSize();
                }
            }
        });

        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetHSBackImage",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    $('#ProductCardBack').val(msg.d);
                }
            }
        });

        var data = "{'productId':'" + selectedProdId + "'}";
        var price = "";
        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetProductSetting",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    var settings = eval(msg.d);
                    $(".product_description").html('<p>' + settings.Dsc + '</p>');
                }
            }
        });

        $('#ctl00_ContentPlaceHolder1_Product1_IsActive').val('1');
        $(".personalise_btn").removeClass("prod-inactive");
        $(".personalise_btn").addClass("fixed-btn");
        
        if($('.highstreet').length == 0) {
            $('.personalise_btn').text('Personalise this Card');
        } else {
            $('.personalise_btn').text('Write Your Message Inside');
        }

        createBtnUrl();
        squareCheck();
    }

	//DELIVERY READ MORE
    $('.read_more_delivery').click(function () {
        if ($(this).hasClass('read_less')) {
            $(this).html('Read more');
            $(this).removeClass('read_less');
            $('.delivery_text_holder').removeClass('expanded_text');

        } else {
            $(this).html('Read less');
            $(this).addClass('read_less');
            $('.delivery_text_holder').addClass('expanded_text');
        }
    });

    $('.product_seo ul li').click(function () {
        $(".product_seo ul li").each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass("active");
		$(".product_seo .delivery_text.tab_holder").removeClass('open_tab');
		$(".product_seo .product_review.tab_holder").removeClass('open_tab');
		$(".product_seo ."+$(this).attr('data-tab')).addClass('open_tab'); 
    });

    function gotoNextStage(){
    	$(".card_size_selection li").each(function(){
			if($(this).attr('class')=='size_list selected_size'){
				$("#paper_size").val($(this).attr('data-name'));
				return;
			}
		});
    	$("#refresh_frm").submit();
    }

    //ZOOM FUNCTION
    function zoomRollover() {
        var native_width = 0;
        var native_height = 0;
        var zoomImageSrc = $('#workarea-img').attr('src');


        $('.magnify_large').css('background-image', 'url(' + zoomImageSrc + ')');

        //START ZOOM FEATURE
        $(".working-area").bind('mousemove touchmove', function (e) {
            if (!native_width && !native_height) {

                var image_object = new Image();
                image_object.src = $(".working-area img").attr("src");
                native_width = image_object.width;
                native_height = image_object.height;
            }
            else {
                var magnify_offset = $(this).offset();
                var mx = e.pageX - magnify_offset.left;
                var my = e.pageY - magnify_offset.top;

                if (mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
                    $(".magnify_large").fadeIn(100);
                }
                else {
                    $(".magnify_large").fadeOut(100);
                }

                if ($(".magnify_large").is(":visible")) {

                    var rx = Math.round(mx / $(".working-area img").width() * native_width - $(".magnify_large").width() / 2) * -1;
                    var ry = Math.round(my / $(".working-area img").height() * native_height - $(".magnify_large").height() / 2) * -1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - $(".magnify_large").width() / 2;
                    var py = my - $(".magnify_large").height() / 2;

                    $(".magnify_large").css({
                     left: px,
                     top: py,
                     backgroundPosition: bgp,
                     opacity:1
                    });
                }
            }
        });
        $(".working-area").bind('mouseleave touchleave', function (e) {
        	$(".magnify_large").css({
                     opacity:0
                    });
        });
    }



    var pageNumber = 0;
    $(document).ready(function () {
        pageNumber = 0;
        getData();
    });
     
    function navigatePage(direction) {
        if (direction == 0) {
            pageNumber--;
        }
        else {
            pageNumber++;
        }

        getData();
    }

    function sizeCalculate() {

        $("#similar_card_items").promise().done(function () {
            //console.log('similar cards loaded');

            $('#similar_card_items li img').each(function () {
                var imageName = $(this).attr('src');
                imageName = imageName.replace('.jpg', '');
                if (imageName[imageName.length -1] == 'S') {
                    $(this).attr('data-cardSize', 'square-card');
                }
                //console.log('sq card found');
                //console.log(imageName);
            });
        });
    }
    function getData() {
        /*$.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "/pages/newFlow_ServerCallBack.aspx/LoadSimilarProducts",
            data: "{'productId':148362, 'productTypeId':5, 'pageNumber':" + pageNumber + ", 'urlSegment':'card', 'onlyNpp' :'False'}",
            dataType: "json",
            success: function (theResponse) {
                var returnedData = JSON.parse(theResponse.d);

                pageNumber = returnedData.page;
                var html = $("#similar_card_content").html();
                html = html.replace("<ul id=\"similar_card_items\">", "").replace("</ul>", "");
                html += returnedData.html;
                $("#similar_card_content").html("<ul id=\"similar_card_items\">" + html + "</ul>");
                sizeCalculate();
            }
        });*/
    }

    function similarSelect(thisObj) {
        var urlPath = thisObj.data('prod-url');
        if ($(location).attr('href').indexOf("?back=1") > -1) {
            if (urlPath !== undefined) {
                window.location.href = urlPath;
            }
        } else {
            loadSimilarSelect(thisObj);
            if (urlPath !== undefined) {
                history.replaceState({}, document.title, $(location).attr('origin') + urlPath);
            }
        }
    }

    //CREATE BTN URL
    function createBtnUrl() {
        var currentProductID = $('#ProductId').val();
        if ($("input[id$='IsMobile']").val() === '1') {
            $('.personalise_btn, #product_image_link').attr('href', "/" + 'pages/customisecardsmobile_wc.aspx?productid=' + currentProductID);
            // Sticky Button
            stickyPersonalise();
            $('.add_to_basket_btn').attr('onclick', 'addToBasket("' + currentProductID +'", 1)');
        } else {
            $('.personalise_btn').attr('href', "/" + 'pages/customisecards.aspx?productid=' + currentProductID);
            $('.add_to_basket_btn').attr('onclick', 'addToBasket("' + currentProductID +'", 1)');
        }
        activeProdCheck();
    }

    function activeProdCheck() {
        if ($('#ctl00_ContentPlaceHolder1_Product1_IsActive').val() != 1) {
            $('.personalise_btn').text('Sorry, Out of Stock').addClass('prod-inactive').removeAttr('href');
            $('#product_image_link').removeAttr('href');
            $('.hidden_prices link').attr('href', 'http://schema.org/OutOfStock');
        }

    }

    function squareCheck() {
        var checkImage = new Image();
        checkImage.src = $('.product_image_holder img').attr("src");
        var cardSizeDifference = checkImage.naturalHeight - checkImage.naturalWidth;
        //console.log('card size difference - ' + cardSizeDifference);

        $('.product_images').removeClass('portrait').removeClass('landscape').removeClass('square');

        if (checkImage.naturalHeight < 285) {
            $('.product_images').addClass('landscape');
        }
        else if (checkImage.naturalHeight > 285 && checkImage.naturalHeight < 300) {
            $('.product_images').addClass('square');
        }
        else {
            $('.product_images').addClass('portrait');
        }
    }

    //CARD SIZE SELECT
    function ChangeCardSize() {

        $('.card_size_selection li').click(function () {
            var selectedSize = $(this).data('size');
            //alert(selectedSize);
            $('.card_size_selection li').removeClass('selected_size');
            $(this).addClass('selected_size');
            $("input[id$='ProductSizeSelected']").val(selectedSize);
            sessionStorage.s_selected_card_size = selectedSize;
            //alert(sessionStorage.s_selected_card_size);
        });
    }

    //DELIVERY INFO SCROLL
    $('.obm_more_info_click').click(function () {
        $('html, body').animate({
            scrollTop: $('.product_seo').offset().top
        }, 500);
        $('.product_seo li[data-tab="delivery_text"]').trigger('click');
    });

    //SEO TABS
    $('.product_seo li').click(function () {
        var selectedTab = $(this).data('tab');
        $('.product_seo li').removeClass('active');
        $(this).addClass('active');

        $('.tab_holder').removeClass('open_tab');
        $('.' + selectedTab).addClass('open_tab');
    });

    //DELIVERY READ MORE
    $('.read_more_delivery').click(function () {
        if ($(this).hasClass('read_less')) {
            $(this).html('Read more');
            $(this).removeClass('read_less');
            $('.delivery_text_holder').removeClass('expanded_text');

        } else {
            $(this).html('Read less');
            $(this).addClass('read_less');
            $('.delivery_text_holder').addClass('expanded_text');
        }
    });

    //TRUSTPILOT SCROLL DOWN
    function trustpilotScrollDown() {
        $('.product_content .tp-wrapper').click(function () {
            $('html, body').animate({
                scrollTop: $('.product_seo').offset().top
            }, 500);
            $('.product_seo li[data-tab="product_review"]').trigger('click');
        });
    }

    function selectLowCost() {
        var sizeAvailableCount = $('.sizes_normal li').length;
        var currentURL = document.location.href;
        var checkGShop = currentURL.indexOf('gclsrc') > -1;
        if (checkGShop) {
            if (sizeAvailableCount == 4) {
                $('.sizes_normal li[data-size="10"]')[0].click();
                $('.card_size_selection').addClass('size_check');
            }
            else {
                $('.sizes_normal li[data-size="17"]')[0].click();
                $('.card_size_selection').addClass('size_check');
            }
            GshopMob();
        }
        else {
            if (sizeAvailableCount == 4) {
                $('.sizes_normal li[data-size="11"]')[0].click();
                $('.card_size_selection').addClass('size_check');
            }
            else {
                $('.sizes_normal li[data-size="17"]')[0].click();
                $('.card_size_selection').addClass('size_check');
            }
        }
        //console.log('CALL selectLowCost ' + sizeAvailableCount);
    }

    function GshopMob() {
            sessionStorage.ppcLanding = '1';
    }

    function loadSimilarSelect(thisObj) {

        //STORE SELECTED PRODUCT SET
        var selectedImageURL = $(thisObj).find('img').attr('src').split('/');
        var selectedImageURL = selectedImageURL[selectedImageURL.length-1].replace('.jpg', '');

        $('#currentProductSetName').val(selectedImageURL);
        $('#card_front_preview').trigger('click');

        //add active state
        $('.similar_products_holder a').removeClass('current_card_active');
        $(thisObj).addClass('current_card_active');


        //title
        $('#ctl00_ContentPlaceHolder1_Product1_ProductTitle h1').html(thisObj.find('img').attr('alt'));

        //Card Img
        $('.product_image_holder img').attr('src', thisObj.find('img').attr('src'));
        $('.magnify_large').css('background-image', 'url("' + thisObj.find('img').attr('src') + '")');

        //Btn URL
        var selectedProdId = thisObj.data('prod-ref');
        $('#ProductId').attr('value', selectedProdId);
        $('#ProductSmilarUsed').attr('value', '1');
        $('.shortlistsave').attr('href', 'javascript:updatesession(' + selectedProdId + ');');

        //Trustpilot
        TPprodLookup();

        //CHANGE PRICE BUTTONS
        //if ($(thisObj).find('img').data('cardsize') === 'square-card') {
        //    //console.log('Sqaure Card');
        //    $('.card_size_selection').html('<ul class="sizes_normal"><li class="selected_size" data-size="40">£5.99<br><span>large square</span></li><li data-size="17">£2.99<br><span>square</span></li></ul>');
        //} else {
        //    //console.log('Normal Card');
        //    $('.card_size_selection').html('<ul class="sizes_normal"><li data-size="8">£5.99<br><span>large</span></li><li class="selected_size" data-size="11">£3.29<br><span>standard</span></li><li data-size="10">£1.99<br><span>small</span></li></ul>');
        //}

        var data = "{'productId':'" + selectedProdId + "'}";
        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetProductSizePrice",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    var address_line_html;
                    var price_list = eval(msg.d);

                    var list = "";
                    var selected = "";
                    for (i = 0; i < price_list.length; i++) {
                        //console.log(price_list[i].Id + " - " + price_list[i].SizeName + " - " + price_list[i].Size + " - " + price_list[i].Price);
                        selected = "";
                        if (price_list[i].Id == "11" || price_list[i].Id == "40") {
                            selected = "selected_size";
                        }
                        list += '<li class="size_list ' +selected + '" data-size="' + price_list[i].Id + '" data-price="' + price_list[i].Price.trim() + '" data-name="' + price_list[i].SizeName.trim() + '"> ' + price_list[i].Price + ' <br><span>' + price_list[i].SizeName + '</span></li>';
                    }
                    $('.card_size_selection').html('<ul class="sizes_normal">' + list + '</ul>');
                    changeSizeText();
                    ChangeCardSize();
                }
            }
        });

        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetHSBackImage",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    $('#ProductCardBack').val(msg.d);
                }
            }
        });

        var data = "{'productId':'" + selectedProdId + "'}";
        var price = "";
        $.ajax({
            type: "POST",
            url: "/Pages/newFlow_ServerCallBack.aspx/GetProductSetting",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            error: function (jqXHR, textStatus) {
                return;
            },
            success: function (msg) {
                if (msg.d != "") {
                    var settings = eval(msg.d);
                    $(".product_description").html('<p>' + settings.Dsc + '</p>');
                }
            }
        });

        $('#ctl00_ContentPlaceHolder1_Product1_IsActive').val('1');
        $(".personalise_btn").removeClass("prod-inactive");
        $(".personalise_btn").addClass("fixed-btn");
        
        if($('.highstreet').length == 0) {
            $('.personalise_btn').text('Personalise this Card');
        } else {
            $('.personalise_btn').text('Write Your Message Inside');
        }

        createBtnUrl();
        squareCheck();
    }

    function createCurrentProduct() {
        var currentProductID = $('#ProductId').val();
        var productURL = $('.product_image_holder img').attr('src');
        var productTitle = $('#ctl00_ContentPlaceHolder1_Product1_ProductTitle h1').text();
        $('.current_card a').attr('data-prod-ref', currentProductID);
        $('.current_card img').attr('src', productURL);
        $('.current_card img').attr('alt', productTitle);

        $('.current_card img[src*="_S.jpg"]').attr('data-cardsize', 'square-card');
    }

    //function bgImgGenerate() {
    //    $('.product_image_holder').css('background-image', 'url(/Images/productPage/' + Math.floor(Math.random() * 6) + '_product_bg.jpg');
    //}

    //bgImgGenerate();

    // BACK BUTTON LOGIC
    function backBtnLogic() {
        var previousPageURL = document.referrer;
        var checkInternalRefferal = previousPageURL.indexOf('funkypigeon.com') > -1;
        //var checkInternalRefferal = previousPageURL.indexOf('local') >-1;
        //var checkInternalRefferal = previousPageURL.indexOf('aws') > -1;
        var checkPreviousPageURL = previousPageURL.indexOf('/cards/') > -1;
        var checkPreviousPageURLGifts = previousPageURL.indexOf('/gifts/') > -1;
        var checkPreviousPageURLEditor = previousPageURL.indexOf('customiseCards.aspx') > -1;
        var ReferrerSearch = previousPageURL.indexOf('search') > -1;

        //IF INTERNAL REFFERAL
        if (checkInternalRefferal) {

            // IF PREVIOUS PAGE IS SEARCH RESULT PAGE
            if (checkPreviousPageURL || checkPreviousPageURLGifts) {
                sessionStorage.prevCategoryURLCategory = previousPageURL;
                sessionStorage.checkPreviousPageURL = previousPageURL;
                $('.product_back_btn a').attr('href', previousPageURL);
            } else if (sessionStorage.prevCategoryURLCategory) {
                $('.product_back_btn a').attr('href', sessionStorage.prevCategoryURLCategory);
            } else {
                sessionStorage.prevCategoryURL = '/personalised-cards.aspx';
            }
        }

        //IF INTERNAL SEARCH
        if (checkInternalRefferal && ReferrerSearch) {
            $('.product_back_btn a').attr('href', sessionStorage.searchURL);
            $('.product_back_btn a').text('Back to search results');
            //console.log('true')
        }
    }

    backBtnLogic();

    //ON LOAD 
    function onLoadItems() {
        var currentProductID = $('#ProductId').val();
        $('.trustpilot-widget').attr('data-sku', currentProductID); //TRUSTPILOT
        createBtnUrl();
        //$('.similar_products_holder').dragScroll({}); //DRAG SIMILAR PRODUCTS
        changeSizeText();
        createCurrentProduct();
    }

    //COUNTDOWN TIMER
    var countDownDelivery = function () {
        var now = new Date();
        var nowDay = now.getDay();
        var isWeekend = (nowDay === 6) || (nowDay === 0);
        var countdownVal = new Date(now.getFullYear(), now.getMonth(), now.getDate(), $('#sw-next-day-del-cutoff').val(), 0, 0, 0) - now;
        var countdownValFirstClass = new Date(now.getFullYear(), now.getMonth(), now.getDate(), $('#sw-standard-del-cutoff').val(), 0, 0, 0) - now;
        if (isWeekend) {
            // do nothing
            $('.order_by_message').addClass('no-countdown');
        }
        else {
            if (countdownVal > 0) {
                console.log('its before 3pm');

                countdownValFirstClass /= 1000; // from ms to seconds

                countdownValFirstClass--;

                var days = component(countdownValFirstClass, 24 * 60 * 60),
                    hours = component(countdownValFirstClass, 60 * 60) % 24,
                    minutes = component(countdownValFirstClass, 60) % 60;
                //seconds = component(countdownVal, 1) % 60;

                $('.countdown_time').html("" + hours + " hrs " + minutes + " mins");
                $('.order_by_message').addClass('countdown');
            }
            else if (countdownValFirstClass > 0) {
                console.log('its after 5pm');

                countdownValFirstClass /= 1000; // from ms to seconds

                countdownValFirstClass--;

                var days = component(countdownValFirstClass, 24 * 60 * 60),
                    hours = component(countdownValFirstClass, 60 * 60) % 24,
                    minutes = component(countdownValFirstClass, 60) % 60;
                //seconds = component(countdownVal, 1) % 60;

                $('.countdown_time').html("" + hours + " hrs " + minutes + " mins");
                $('.order_by_message').addClass('countdown CD-first-class');
            }
            else {
                $('.order_by_message').addClass('no-countdown');
            }
        }
        //console.log(countdownVal);
    };

    function stickyPersonalise() {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 180) {
                $(".personalise_btn").addClass("fixed-btn");
                $("html").addClass("add_bottom_padding");
            } else {
                $(".personalise_btn").removeClass("fixed-btn");
                $("html").removeClass("add_bottom_padding");
            }
        });
    }
    

    //CREATE BTN URL
    function createBtnUrl() {
        var currentProductID = $('#ProductId').val();
        if ($("input[id$='IsMobile']").val() === '1') {
            $('.personalise_btn, #product_image_link').attr('href', "/" + 'pages/customisecardsmobile_wc.aspx?productid=' + currentProductID);
            // Sticky Button
            stickyPersonalise();
            $('.add_to_basket_btn').attr('onclick', 'addToBasket("' + currentProductID +'", 1)');
        } else {
            $('.personalise_btn').attr('href', "/" + 'pages/customisecards.aspx?productid=' + currentProductID);
            $('.add_to_basket_btn').attr('onclick', 'addToBasket("' + currentProductID +'", 1)');
        }
        activeProdCheck();
    }

</script>

<script async type="text/javascript">
    var TPprodLookup = function() {
        var TPlookup;
        $.ajax({
            type: "GET",
            url: "https://api.trustpilot.com/v1/product-reviews/business-units/4bedb38600006400050ba480/?apikey=DA9xCjmbSTo6fFm5ewIKPkDic92G11ax&sku=" + $('#ProductId').val(),
            dataType: "json",
            success: function(json) {
                    
                TPlookup = json;
                var TPnum = json.numberOfReviews.total;
                var TPav = json.starsAverage;

                //$('.tp-wrapper').empty();
                //$('.product_review').empty();

                //console.log('number of reviews is: '+TPnum);
                //console.log('average star rating is: '+TPav);

                if (TPnum == '0') {
                    $(".tp-wrapper").addClass("no_reviews");
                    $('.tp-wrapper').empty();
                    $('.product_review').empty();
                    //console.log('No reviews');
                    //$('.trustpilot-widget').remove();
                    //$('.tab_similar_cards[data-tab="product_description"]').trigger('click');
                    //$('.tab_similar_cards[data-tab="product_review"]').remove();
                }
                else if (TPav >= 3) {
                    //$('html').addClass('TPprodReview');
                    $('.tp-wrapper').attr('data-tp', $('#ProductId').val());
                    $('.tp-wrapper').html('<div id="trustbox_star" class="trustpilot-widget star_rating" data-locale="en-GB" data-template-id="577258fb31f02306e4e3aaf9" data-businessunit-id="4bedb38600006400050ba480" data-style-height="24px" data-style-width="220px" data-theme="light" data-sku="' + $('#ProductId').val() + '"><a href="https://uk.trustpilot.com/review/www.funkypigeon.com" target="_blank">Trustpilot</a></div>');
                    $('.product_review').html('<div id="trustbox" class="trustpilot-widget" data-locale="en-GB" data-template-id="5717796816f630043868e2e8" data-businessunit-id="4bedb38600006400050ba480" data-style-height="440px" data-style-width="100%" data-theme="light" data-sku="' + $('#ProductId').val() + '" data-name="' + $('#ProductName').val() + '" data-price="2.29" data-price-currency="GBP" data-availability="InStock"><a href="https://uk.trustpilot.com/review/www.funkypigeon.com" target="_blank">Trustpilot</a></div>');
                    var trustbox = document.getElementById('trustbox');
                    var trustbox_star = document.getElementById('trustbox_star');
                    window.Trustpilot.loadFromElement(trustbox);
                    window.Trustpilot.loadFromElement(trustbox_star);
                    
                }
                else {
                    //$('.tab_similar_cards[data-tab="product_description"]').trigger('click');
                    //$('.tab_similar_cards[data-tab="product_review"]').remove();
                }
            }
        });
    };

    TPprodLookup();
</script>
