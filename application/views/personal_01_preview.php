<input name="card_preview_width" type="hidden" id="card_preview_width" value="323"/>
<div id="div_content">
    <div class="CardPreviewHolder">
        
        <!-- CARD NAVIGATION -->
        <div class="PreviewCardNavigation">
            <!-- PORTRAIT AND SQUARE CARDS -->
            <a onclick="javascript:imgClick('R')"  class="PreviewCardTurnLeft left">Turn Card</a>
            <a onclick="javascript:imgClick('L')" class="PreviewCardTurnRight left">Turn Card</a>
            <!-- LANDSCAPE CARDS -->
            <a onclick="javascript:imgClick('U')" class="PreviewCardTurnUp left">Turn Card</a>
            <a onclick="javascript:imgClick('D')" class="PreviewCardTurnDown left">Turn Card</a>
        </div>
        <!-- END CARD NAVIGATION -->
        
        <div id="card_preview_wrapper" class="card_preview_portrait"><!--CARD PREVIEW CONTAINER-->
            <div id="card_preview_panel"><!--CARD PREVIEW PANEL CONTAINER-->
                <!-- CHOC CARD PREVIEW -->
                <div class="preview_choc_card" style="display:none;">
                   <div class="pc_prompt">Click the card to open</div>
                   <div class="pc_txt">Your chocolate card will look like this...</div>
                   <div class="pc_card_dupe">
                    <img class="pc_card_dupe_over" src="/assets/dist/images/choc_box_preview.png" />
                    <img class="pc_card_dupe_img" src="" />
                   </div>
                </div>
                <!-- END CHOCH CARD PREVIEW -->
				<div id="absPanel" class="card-list-border1">
                    <img src="<?php //base64_encode($c_front);?>" id="final_preview_image_left" class="turn-n-imgPort" alt="" onclick="javascript:imgClick('R')"  width="0px">
                    <img src="<?php //$c_back;?>" id="final_preview_image_back" class="turn-n-imgPort" alt="" onclick="javascript:imgClick('R')" >
                    <img src="<?php //$c_left;?>" id="final_preview_image_right" class="turn-n-imgPort" alt="" onclick="javascript:imgClick('L')" > 
                    <img src="<?php //$c_right;?>" id="final_preview_image_front" class="turn-n-imgPort" alt="" onclick="javascript:imgClick('L')">
				</div>
            </div><!--END CARD PREVIEW PANEL CONTAINER-->
        </div>
        <!--ERROR MESSAGE-->
        
        <!--END ERROR MESSAGE-->
    </div>
    <!--CONTINUE PERSONALISATION-->
    <div class="PreviewBottomSection">
        <a id="imgPreviewClose" class="standardPurpleBtn" onclick="closePreview();mainTabClick('1');">Edit Card</a>
        <div id="div_content_control">
            <div class="forms clearfix">
                <!--<input name="lnkRight" type="button" id="lnkRight" class="standardPurpleBtn right btn_preview_right" value="Turn Right" onclick="javascript:imgClick(&#39;L&#39;); return false;" />-->
                <!--<input name="lnkLeft" type="button" id="lnkLeft" class="standardPurpleBtn left btn_preview_left" value="Turn Left" onclick="javascript:imgClick(&#39;R&#39;); return false;" />-->
                <input name="btnNext" type="button" id="btnNext" class="confirm_tab btn_full btn_continue_preview" value="Continue" onclick="javascript:MoveNextPage(); false;" /> 
            </div>
        </div>
    </div>
    <!--CONTINUE PERSONALISATION-->
</div>

<script type="text/javascript">
    
    $(document).ready(function() {
        //$('#final_preview_image_front').attr('src',$('#canvas_preview_front_page').toDataURL());
        //$('#final_preview_image_left').attr('src',$('#preview_left_page').val());
        //$('#final_preview_image_right').attr('src',$('#preview_right_page').val());
        //$('#final_preview_image_back').attr('src',$('#preview_back_page').val());
        
        renderFrontView();
        renderLeftView();
        renderRightView();
        renderBacView();
        $('#ICE_preloader').fadeOut();
        var PrevCardDupe = $('#final_preview_image_front').attr('src');
        $('.pc_card_dupe_img').attr('src',PrevCardDupe);
        //alert(PrevCardDupe);
    });
    /*
    ---------------------------------------------------------------------------------------------------------------------------------------------
    -- Scripts related to final preview --
    ---------------------------------------------------------------------------------------------------------------------------------------------
    */
    var final_preview_lCount = 1;
    var final_preview_rCount = 0;
    var final_preview_image;
    var final_preview_image_left;     
    var final_preview_width;
    var final_preview_height;    
    var final_preview_isRunnig = false;
        
    function ClickPreview(olid) {
        final_preview_lCount = 1;
        final_preview_rCount = 0;
    }        
    
    function imgClick(dir) {       
        var orgWidth = document.getElementById('card_preview_width').value;       
        var orgHeight = 316;

        if (final_preview_isRunnig) return;
        
        switch(dir)
        {
            case "L":
            {
                if (final_preview_lCount == 0) return;
                final_preview_width = orgWidth;
                
                if (final_preview_lCount == 1) {
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_lCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }

                final_preview_lCount++; 
                final_preview_rCount++;
                
                if (final_preview_lCount > 2) {
                    final_preview_lCount = 0;
                    final_preview_rCount = 2;
                }                              
                final_preview_image_left.style.width = (0) + 'px';
                turnLeft();            
                final_preview_image.style.width = (0) + 'px';
                break;
            }
            case "R":
            {
                if (final_preview_rCount == 0) return;
                final_preview_width = -orgWidth;
                
                if (final_preview_rCount == 1) {
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_rCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }

                if (final_preview_rCount == 1) {
                    final_preview_rCount = 0; final_preview_lCount = 1;
                } else if (final_preview_rCount == 2) {
                    final_preview_rCount = 1; final_preview_lCount = 2;
                }
                
                turnRight();            
                
                break;
            }
            case "U":
            {
                if (final_preview_lCount == 0) return;
                final_preview_height = orgHeight;
                
                if (final_preview_lCount == 1){
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_lCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }
                
                final_preview_lCount++; 
                final_preview_rCount++;
                
                if(final_preview_lCount > 2) {
                    final_preview_lCount = 0;
                    final_preview_rCount = 2;
                }
                
                turnUp();
                
                break;
            }
            case "D":
            {
                if(final_preview_rCount == 0) return;
                final_preview_height = -orgHeight;
                
                if (final_preview_rCount == 1){
                    final_preview_image = $get('final_preview_image_front');
                    final_preview_image_left = $get('final_preview_image_left');
                } else if (final_preview_rCount == 2) {
                    final_preview_image = $get('final_preview_image_right');
                    final_preview_image_left = $get('final_preview_image_back');
                }
                
                if (final_preview_rCount == 1){
                    final_preview_rCount = 0; final_preview_lCount = 1;
                } else if(final_preview_rCount == 2) {
                    final_preview_rCount = 1; final_preview_lCount = 2;
                }
                
                turnDown();
                          
                break;
            }                                    
        }
                         
        final_preview_isRunnig = true;
    }
    
    function turnLeft() {       
        var orgWidth = document.getElementById('card_preview_width').value;       
        var orgLeft = 325;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_width -= sChng;
        if (final_preview_width <= 0 && final_preview_width > -orgWidth) {
            final_preview_image_left.style.left = (orgLeft + final_preview_width) + 'px';
            final_preview_image_left.style.width = (-final_preview_width) + 'px';
            final_preview_image_left.style.visibility = 'visible';
            final_preview_image.style.visibility = 'hidden';
        } else if (final_preview_width > 0) {
            final_preview_image.style.width = final_preview_width + 'px';
        } else {
            final_preview_image.style.visibility = 'hidden';
            final_preview_image_left.style.left = (orgLeft - orgWidth) + 'px';
            final_preview_image_left.style.width = orgWidth + 'px';
            stopCount();
            return;
        }
        t = setTimeout("turnLeft()", interval);
    }
    
    function turnRight() {       
        var orgWidth = document.getElementById('card_preview_width').value;     
        var orgLeft = 325;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_width += sChng;
        if (final_preview_width >= 0 && final_preview_width < orgWidth) {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.visibility = 'visible';
            final_preview_image.style.width = final_preview_width + 'px';
        } else if (final_preview_width < 0) {
            final_preview_image_left.style.left = (orgLeft + final_preview_width) + 'px';
            final_preview_image_left.style.width = (-final_preview_width) + 'px';
        } else {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.width = orgWidth + 'px';
            stopCount();
            return;
        }
        t = setTimeout("turnRight()", interval);
    }
    
    function turnUp() {
        var orgHeight = 316;     
        var orgTop = 520;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_height -= sChng;
        if (final_preview_height <= 0 && final_preview_height > -orgHeight) {
            final_preview_image_left.style.top = (orgTop + final_preview_height) + 'px';
            final_preview_image_left.style.height = (-final_preview_height) + 'px';
            final_preview_image_left.style.visibility = 'visible';
            final_preview_image.style.visibility = 'hidden';
        } else if (final_preview_height > 0) {
            final_preview_image.style.height = final_preview_height + 'px';
        } else {
            final_preview_image.style.visibility = 'hidden';
            final_preview_image_left.style.top = (orgTop - orgHeight) + 'px';
            final_preview_image_left.style.height = orgHeight + 'px';
            stopCount();
            return;
        }    
        t=setTimeout("turnUp()",interval);
    }
    
    function turnDown(){
        var orgHeight = 316;     
        var orgTop = 520;
        var sChng = 25;
        var interval = 20; 
            
        final_preview_height += sChng;
        if (final_preview_height >= 0 && final_preview_height < orgHeight) {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.visibility = 'visible';
            final_preview_image.style.height = final_preview_height + 'px';
        } else if (final_preview_height < 0){
            final_preview_image_left.style.top = (orgTop+final_preview_height) + 'px';
            final_preview_image_left.style.height = (-final_preview_height) + 'px';
        } else {
            final_preview_image_left.style.visibility = 'hidden';
            final_preview_image.style.height = orgHeight + 'px';
            stopCount();
            return;
        }    
        t=setTimeout("turnDown()",interval);
    }    
    
    function stopCount() {
        final_preview_isRunnig = false;
        clearTimeout(t);
    }    
    /*
    ---------------------------------------------------------------------------------------------------------------------------------------------
    */       
</script>