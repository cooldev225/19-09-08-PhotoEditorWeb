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
      							<li class="size_list" data-size="128" data-name="Giant" data-price=" £9.99"> <?php echo $currency_symbol.number_format(9.99*$currency_rate,2,'.', '');?> <br><span>Giant </span></li>
      							<li class="size_list" data-size="8" data-name="A4" data-price=" £5.99"> <?php echo $currency_symbol.number_format(5.99*$currency_rate,2,'.', '');?> <br><span>large</span></li>
      							<li class="size_list selected_size" data-size="11" data-name="A5" data-price=" £3.29"> <?php echo $currency_symbol.number_format(3.29*$currency_rate,2,'.', '');?> <br><span>standard</span></li>
      							<li class="size_list" data-size="10" data-name="A6" data-price=" £2.29"> £2.29 <br><span>small</span></li>
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
					    <div class="current_card"><a class="" onclick="javascript:similarSelect($(this));" data-prod-ref="148362">
					    	<img src="<?php echo $data['photo_product_row']["photo9"];?>"></a>
					    </div>
					    <div id="similar_card_content">
					    	<ul id="similar_card_items">
					    		<?php $i=1;foreach($bestproducts as $row){?>
					    		<li>
					    			<a onclick="javascript:similarSelect($(this));" data-prod-ref="148388" data-prod-url="/card/all-night-long-personalised-card/148388" class="current_card_active">
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
</script>