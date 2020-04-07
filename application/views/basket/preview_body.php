<input name="card_preview_width" type="hidden" id="card_preview_width" value="323" />
<div id="div_content">
    <div id="card_preview_wrapper" class="card_preview_portrait"><!--CARD PREVIEW CONTAINER-->
        <div id="card_preview_panel"><!--CARD PREVIEW PANEL CONTAINER-->
            <div id="absPanel" class="card-list-border1">
	                
                    <img src="<?php echo $data[1];?>" class="turn-n-imgPort" alt="" onclick="javascript:imgClick(&#39;R&#39;)" id="final_preview_image_left"/>
                    <img src="<?php echo $data[3];?>" class="turn-n-imgPort" alt="" onclick="javascript:imgClick(&#39;R&#39;)" id="final_preview_image_back"/>
                    <img src="<?php echo $data[2];?>" class="turn-n-imgPort" alt="" onclick="javascript:imgClick(&#39;L&#39;)" id="final_preview_image_right"/> 
                    <img src="<?php echo $data[0];?>" class="turn-n-imgPort" alt="" onclick="javascript:imgClick(&#39;L&#39;)" id="final_preview_image_front"/>                                  
            
</div>
        </div><!--END CARD PREVIEW PANEL CONTAINER-->
    </div>
    <div id="div_content_control">
        <div class="forms clearfix">
            <input name="lnkRight" type="button" id="lnkRight" class="formsinputtype2 right btn_preview_right" value="Turn Right" onclick="javascript:imgClick(&#39;L&#39;); return false;" />
            <input name="lnkLeft" type="button" id="lnkLeft" class="formsinputtype2 left btn_preview_left" value="Turn Left" onclick="javascript:imgClick(&#39;R&#39;); return false;" />
             
            <div class="clear"></div>
        </div>
    </div>
</div>
