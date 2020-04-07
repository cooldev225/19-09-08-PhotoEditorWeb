<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_all.css"/>
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
			<div class="page-side-view-area">
				<div id="page-side-item-front" class="page-side-item selected"><span><img src="/assets/dist/images/book-front-side.png"/></span></div>
				<div id="page-side-item-left" class="page-side-item"><span><img src="/assets/dist/images/book-left-inside.png"/></span></div>
				<div id="page-side-item-right" class="page-side-item"><span><img src="/assets/dist/images/book-right-inside.png"/></span></div>
				<div id="page-side-item-back" class="page-side-item"><span><img src="/assets/dist/images/book-back-side.png"/></span></div>
			</div>
			<div class="working-area">
				<div class="previewer" >
		        	<img id="workarea-img" ondragover="allowDrop(event)" ondrop="drop(event)" style="position:absolute;z-index:1000;width: 323px;height: 459px;" src="<?php echo $data['photo_product_row']['backgrounds'];?>"/>
		        	
		        	<?php
		        		$tag_trans['ING']="IMG";
		        		$tag_trans['img']="IMG";
		        		$tag_trans['INPUT']="LABEL";
		        		$tag_trans['input']="LABEL";
		        		for($i=0;$i<5;$i++){$j=$i+1;
		        			if($data['photo_product_row']["phototag{$j}"]=='IMG'||$data['photo_product_row']["phototag{$j}"]=='img'){
		        				echo "<img id=\"custom_text_{$i}\" src=\"{$data['photo_product_row']["photo{$j}"]}\" style=\"{$data['photo_product_row']["photostyle{$j}"]}\" onclick=\"frontObjOnClick({$i});\"/>";
		        			}else if($data['photo_product_row']["phototag{$j}"]=='INPUT'||$data['photo_product_row']["phototag{$j}"]=='input'){
		        				echo "<label id=\"custom_text_{$i}\" style=\"{$data['photo_product_row']["photostyle{$j}"]}\" onclick=\"frontObjOnClick({$i});\" onmouseenter=\"selectFrontObjsClass({$i});\" onmouseleave=\"clearFrontObjsClass();\"/>{$data['photo_product_row']["photo{$j}"]}</label>";
		        			}
		        		}
		        	?>
				</div>
				<!--/*left inside*/-->
				<div class="previewer left-inside" style="display:none;">
		        	<img id="workarea-img-left" ondragover="allowDrop(event)" ondrop="drop(event)" style="position:absolute;z-index:1000;width: 323px;height: 459px;" src="/assets/dist/images/templates/cardinside_template_blank.jpg"/>
		        	
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
      					<table class="a-lineitem">
							<tbody>
								<tr id="priceblock_ourprice_row">
    								<td id="priceblock_ourprice_lbl" class="a-color-secondary a-size-base a-text-right a-nowrap">Price:</td>
    								<td class="a-span12">
                						<span id="priceblock_ourprice" class="a-size-medium a-color-price priceBlockBuyingPriceString">
                							<?php echo $currency_symbol.number_format($data['photo_product_row']["photo{$j}"]*$currency_rate,2,'.', '');?>
            							</span>
										<span id="ourprice_shippingmessage">
											<span id="price-shipping-message" class="a-size-base a-color-base">Giant(A3)</span>
										</span>
										<span class="a-letter-space"></span>
									</td>
									<!--//-->
    								<td class="a-span12">
                						<span id="priceblock_ourprice" class="a-size-medium a-color-price priceBlockBuyingPriceString">
                							£<?php echo "{$data['photo_product_row']["photo{$j}"]}";?>
            							</span>
										<span id="ourprice_shippingmessage">
											<span id="price-shipping-message" class="a-size-base a-color-base">Large(A4)</span>
											<span class="a-letter-space"></span>
										</span>
									</td>
									<!--//-->
    								<td class="a-span12" style="border-style: dotted;border-width: 1px;">
                						<span id="priceblock_ourprice" class="a-size-medium a-color-price priceBlockBuyingPriceString">
                							£<?php echo "{$data['photo_product_row']["photo{$j}"]}";?>
            							</span>
										<span id="ourprice_shippingmessage">
											<span id="price-shipping-message" class="a-size-base a-color-base">Standard(A5)</span>
											<span class="a-letter-space"></span>
										</span>
									</td>
									<!--//-->
    								<td class="a-span12">
                						<span id="priceblock_ourprice" class="a-size-medium a-color-price priceBlockBuyingPriceString">
                							£<?php echo "{$data['photo_product_row']["photo{$j}"]}";?>
            							</span>
										<span id="ourprice_shippingmessage">
											<span id="price-shipping-message" class="a-size-base a-color-base">Small(A6)</span>
											<span class="a-letter-space"></span>
										</span>
									</td>
								</tr>
								<!--tr id="priceblock_snsupsell_row" class="aok-hidden">
    								<td colspan="2">
        								<span class="a-size-base a-color-price">
        								</span>
    								</td>
								</tr-->  
          					</tbody>
      					</table>
      				</div>

      				<div class="product-edit-area" style="min-height:20px;">

      				<?php
      					echo "<p><b style=\"font-size: 21px;    font-weight: unset;\">Card Front:</b></p><p>";
      					$img_cnt=0;
      					for($i=0;$i<5;$i++){$j=$i+1;
		        			if($data['photo_product_row']["phototag{$j}"]=='INPUT'||$data['photo_product_row']["phototag{$j}"]=='input'){
		        				echo "<input id=\"e_custom_text_{$i}\" value=\"{$data['photo_product_row']["photo{$j}"]}\" onclick=\"editTextObjOnClick({$i});\" maxlength=\"".(strlen($data['photo_product_row']["photo{$j}"]))."\"/>";
		        			}else if($data['photo_product_row']["phototag{$j}"]=='IMG'||$data['photo_product_row']["phototag{$j}"]=='img'){
		        				$img_cnt++;
		        			}
		        		}
		        		echo "<span style=\"float: right;color: #e77600;font-weight: unset;\" id=\"text_validated_alert_area\"></span></p>";
		        		if($img_cnt){
		        		?>
		        		<div id="uploadimgarea">
			            	<img id="e_temp_img" src="/assets/dist/images/blank.png" style="width: 150px;height: 150px;" />
	            		<?php 
	            	    }
		        		for($i=0;$i<5;$i++){$j=$i+1;
		        			if($data['photo_product_row']["phototag{$j}"]=='IMG'||$data['photo_product_row']["phototag{$j}"]=='img'){
		        		?>
		        			<span id="e_upload_btn_<?php echo $i;?>" class="btn red btn-outline btn-file" >
			            		<span class="fileinput-new"> Select </span>
			                    <input type="file" src="/assets/dist/images/blank.png" name="set-post-thumbnail" id="e_set-post-upload-img_<?php echo"{$i}";?>">
			                </span>	
			                <span class="btn red btn-outline btn-file" style="float: right;top: -31px;" onclick="saveBtnAction()">
			                	<span class="save-btn"> Save </span>
			                </span>
		        		<?php
		        			}
		        		}
      					?>	
      					</div>
      				</div>

      				<div class="product-description-area">
  					<?php
  						echo "<b>Description:</b>";
      					echo str_replace('\n', '</p><p>',"<p>{$data['photo_product_row']['descriptions']}</p>");	
  					?>
      				</div>
				</div>
			</div>
	  	</div>
	  	<div class="like-product-view-area">
	  		<hr>
	  		<h2 class="a-carousel-heading">Similar Products</h2>

	  		<form id="refresh_frm" method="post" action="home/personal">
            	<input type="hidden" id="product_id" name="product_id"/>
			    <div id="inner">
				    <div id="carousel" style="margin-left:20px;">
				    	<?php $i=1;foreach($bestproducts as $row){
				    		$menus_arr[$row['menus']]=!isset($menus_arr[$row['menus']])?1:$menus_arr[$row['menus']]+1;
			              $html= "<div class=\"{$row['menus']}\">".
			              				"<img onclick=\"goPersonalPage('{$row['ids']}');\"  src=\"{$row['backgrounds']}\" width=\"140\" height=\"200\"/><em style=\"height: 26px;line-height:23px;font-size: 12px;font-family: cursive;font-style: normal;text-align: center;\" onclick=\"goPersonalPage('{$row['ids']}');\">{$row['titles']}</em>".
			              		  "</div>";
			              echo $html;
			              $i++;
			            }?>
		      			
				    </div>
				    <div id="pager">
						<strong></strong> &nbsp;
						<?php $i=0;foreach($menus_arr as $key=>$val){
			              $html= "<a href=\"#{$key}\">{$key}</a>";
			              echo ($i?'&bull;':'').$html;
			              $i++;
			            }?>
					</div>
					<a href="#" id="prev"></a>
					<a href="#" id="next"></a>
				</div>
			    </form>
	  	</div>
	</section>
</div>
<script type="text/javascript">
	var image_over_flag=0;
	var side_arr=new String("front-left-right-back").split('-');
	$(document).ready(function(){
		resize_screen();
		$(".owl-carousel").owlCarousel({
			items:6,
			margin:10,
		    loop:true,
		});
	});
	$(window).resize(function(){resize_screen();});
	function resize_screen(){
		//alert($("#wrap").css('width')+","+window.screen.width+','+$(".home-slider").css('width'));
		var w=eval($(".container").css('width').replace('px',''));
		$(".control-area").css('width',(w-364));
		_visible=(w-50)/160;
		if(_visible>9)_visible=9;
		setCarousel();
	}
	$("#e_set-post-upload-img_0").on('change',function(){
	//	alert();
	   if (this.files && this.files[0]) {
    	var FR= new FileReader();
	    FR.addEventListener("load", function(e) {
	      $("#e_temp_img").attr('src',e.target.result);
	    }); 
	    FR.readAsDataURL( this.files[0] );
	   }
	});
	function saveBtnAction(){
		for(var i=0;i<5;i++){
			if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
			if($("#custom_text_"+i).prop("tagName")=='IMG'||$("#custom_text_"+i).prop("tagName")=='img'){
				if($("#e_temp_img").attr('src')!='/assets/dist/images/blank.png'){
					$("#custom_text_"+i).attr('src',$("#e_temp_img").attr('src'));
				}
			}else{
				$("#custom_text_"+i).html($("#e_custom_text_"+i).val());
			}
		}
	}
	
	$(".page-side-item").on('click',function(){
		if($(this).attr('class')=='page-side-item selected')return;
		var prev_side=0;
		for(var side=0;side<4;side++){
			if($("#page-side-item-"+side_arr[side]).attr('class')=='page-side-item selected'){
				prev_side=side;
				break;
			}
		}
		for(var side=0;side<4;side++){
			if($("#page-side-item-"+side_arr[side]).attr('class')=='page-side-item selected')
			$("#page-side-item-"+side_arr[side]).removeClass('selected');
			if($(this).attr('id')=='page-side-item-'+side_arr[side]){
				$(this).addClass('selected');

			}
		}
	});
	$("#workarea-img").on('mousemove',function(e){
		var x=e.pageX,y=e.pageY;
		var i=0;
		for(;i<5;i++){
    		if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')==''){
    		}else{
    			var x2=$("#custom_text_"+i).offset().left;
				var y2=$("#custom_text_"+i).offset().top;
				var w2=eval($("#custom_text_"+i).css('width').replace('px',''));
				var h2=eval($("#custom_text_"+i).css('height').replace('px',''));
    			if($("#custom_text_"+i).prop("tagName")=='IMG'||$("#custom_text_"+i).prop("tagName")=='img'){
					if(x>=x2&&x<=eval(x2+w2)&&y>=y2&&y<=eval(y2+h2)){
						$("#custom_text_"+i).css('border-color', 'rgba(212, 17, 17, 0.51)');
						$("#workarea-img").css('z-index',1);
						$("#custom_text_"+i).css('z-index',1000);
						$("#custom_text_"+i).css('opacity',0.6);
						if(!image_over_flag){
							image_over_flag=1;
							flash_uploading_button(3,i);
						}

					}else{
						$("#custom_text_"+i).css('border-color', 'rgba(0, 0, 0, 0.04)');
						$("#custom_text_"+i).css('opacity',1);
						$("#workarea-img").css('z-index',1000);
						$("#custom_text_"+i).css('z-index',1);
						if(image_over_flag){
							image_over_flag=0;
							flash_uploading_button(0,i);
						}
					}
						//alert('('+x+","+y+'),('+x2+","+y2+','+w2+','+h2+')');
    				//}
    			}else{
					
    			}
    		}
    	}
				
		
		return true;
	});
	function flash_uploading_button(f,id){
		$("#e_upload_btn_"+id).css('box-shadow','0 0 3px 2px rgba(228,121,17,.'+f);
		if(!image_over_flag){
			$("#e_upload_btn_"+id).css('box-shadow','none');
			return;
		}//alert($("#e_upload_btn_"+id).css('box-shadow'));
		setTimeout(function(){flash_uploading_button((f+1)%10,id); }, 100);
	}
	function frontObjOnClick(id){
		$("#e_custom_text_"+id).focus();
		$("#e_custom_text_"+id).select();
	}
	function clearFrontObjsClass(){
		for(var i=0;i<5;i++){
			$("#custom_text_"+i).css('border-style','none');
		}
	}
	var flash_validated_alert_flag=0;
	function selectFrontObjsClass(id){
		clearFrontObjsClass();
		$("#custom_text_"+id).css('border-style','solid');
		$("#custom_text_"+id).css('border-color','rgb(231, 118, 0)');
		$("#custom_text_"+id).css('border-width','1px');
		//$("#custom_text_"+id).active();
		$("#e_custom_text_"+id).focus();
		flash_validated_alert_flag++;
		flash_validated_alert(1,id);

	}
	function editTextObjOnClick(id){
		selectFrontObjsClass(id);
	}

	function flash_validated_alert(f,id){
		if(flash_validated_alert_flag>1&&f<1){
			flash_validated_alert_flag--;
			return;
		}
		if(f<=0){
			flash_validated_alert_flag--;
			$("#text_validated_alert_area").html('');
			return;
		}else if(f==1)
			$("#text_validated_alert_area").html('max-length: '+$("#e_custom_text_"+id).attr('maxlength'));
		$("#text_validated_alert_area").html('max-length: '+$("#e_custom_text_"+id).attr('maxlength'));
		setTimeout(function(){flash_validated_alert(f-0.1,id); }, 200);
	}







	var _visible = 5;
	var $pagers = $('#pager a');
	var _onBefore = function() {
		$(this).find('img').stop().fadeTo( 300, 1 );
		$pagers.removeClass( 'selected' );
	};
	function setCarousel(){
		$('#carousel').carouFredSel({
			items: _visible,
			loop:true,
			
			width: '100%',
			auto: false,
			scroll: {
				duration: 750
			},
			prev: {
				button: '#prev',
				items: 1,
				onBefore: _onBefore
			},
			next: {
				button: '#next',
				items: 1,
				onBefore: _onBefore
			},
		});
	}
	
	$pagers.click(function( e ) {
		e.preventDefault();
		var group = $(this).attr( 'href' ).slice( 1 );
		var slides = $('#carousel div.' + group);
		var deviation = Math.floor( ( _visible - slides.length ) / 2 );
		if ( deviation < 0 ) {
			deviation = 0;
		}
		$('#carousel').trigger( 'slideTo', [ $('#' + group), -deviation ] );
		$('#carousel div img').stop().fadeTo( 300, 0.3 );
		slides.find('img').stop().fadeTo( 300, 1 );

		$(this).addClass( 'selected' );
	});
</script>