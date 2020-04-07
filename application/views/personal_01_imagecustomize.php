 <!-- =============================================== PERSONALIZE IMAGE CUSTOMIZATION =============================================== -->
<input type="hidden" id="selected_imagecustomization_tab" name="selected_imagecustomization_tab" />
<input type="hidden" id="cach_image_object_list" name="cach_image_object_list" />


<div class="tab_container" id="common_personalize_imagecustomize" style="display: none;">
  
  <!--<ul class="menu">
    <li id="image_customize_standard" class="active">Standard</li>
    <li id="image_customize_advanced">Advanced</li>
  </ul>
  <ul class="menu_mini">
    <li id="image_customize_advanced_effects">Effects</li>
    <li id="image_customize_advanced_enhance">Enhance</li>
    
  </ul>-->                       
  
  
  <!------------------ TAB STANDARD ------------------>
  <div class="heading_underline btns_edit_options">
     <h2>Edit Photo</h2>
     <div class="standardPurpleBtn BtnDone BtnNextImage right" onclick="selectNextImage();">Next Image</div>
     <div class="standardPurpleBtn BtnDone right" onclick="javascript:backFromPersonalizeImageuploader(); leave_fb_upload();">Done</div>
  </div>
  
  <div class="content image_customize_standard" style="">
  <!--<div class="btn_pull_up"><img src="../../../Images/Structure/Mobile/icon_mob_ice_pull_up.gif" /></div>-->
    <div class="wrapper_move_control editPhotoRow clearfix">
        <!--IMAGE ZOOM-->
        <div class="size_zoom">
            <h2 class="left">Size</h2> 
            <div class="zoom_wrapper left">
                <img src="/assets/dist/images/zoom_image.gif" class="smallerZoom left">
                <div id="sliderZoom1" class="left ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                <img src="/assets/dist/images/zoom_image.gif" class="left">
            </div>
        </div>
    </div>
    
    <div class="wrapper_move_control editPhotoRow editor_1of2 clearfix">              
         <!--IMAGE ROTATE--> 
         <h2 class="rotate_text">Rotate</h2>        
         <a href="javascript://" class="standardWhiteBtn btn_rotate_anticlockwise" onclick="javascript:rotateImageAntiClockwise();">Rotate Anticlockwise</a>
         <a href="javascript://" class="standardWhiteBtn btn_rotate_clockwise" onclick="javascript:rotateImageClockwise();">Rotate Clockwise</a>

        <!-- Brightness -->
        <div class="btn_mini_bright" style="display:none"> 
         <h2>Brightness</h2>        
         <a href="javascript://" class="standardWhiteBtn btn_mini_bright" onclick="javascript:loadPersonalizeImageCustomizeTabHandle(4);">Brightness</a>
        </div>

        <div class="rotate-feature" style="display:none;">
            <div class="rotate-tip-left"><img src="/assets/dist/images/rotate-tip-left.png"></div>
            <div class="rotate-dial"><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div><div style="display:inline;width:90px;height:200px;"><canvas width="90" height="200"></canvas><input class="knob" data-width="90" data-cursor="true" value="0" data-fgcolor="#a481b5" data-bgcolor="#efebeb" data-thickness=".2" data-displayprevious="false" data-max="360" data-step="3.6" data-displayinput="false" style="display: none; width: 0px; visibility: hidden;"></div>
                <!--input class="knob" data-width="90" data-cursor=true value="100" data-fgColor="#a481b5" data-bgColor="#efebeb" data-thickness=".2" data-displayPrevious="true" data-max="360" data-step="3.6" data-displayInput="true"-->
                <div class="rotate-tip">Click or drag</div>
            
            </div>
            <div class="rotate-tip-right"><img src="/assets/dist/images/rotate-tip-right.png"></div>
        </div>
         
         <!--IMAGE FLIP-->
         <h2 class="hide flip_controls">Flip</h2>
         <a href="javascript://" id="btnFlipVertical" class="standardWhiteBtn btn_flip_horiz" onclick="javascript:flipImageHorizontally()">Horizontal</a>            
         <a href="javascript://" id="btnFlipHorizontal" class="standardWhiteBtn btn_flip_vert" onclick="javascript:flipImageVertically()">Verticle</a>            
    </div>
    
    <div class="editPhotoRow clearfix editor_1of2">
        <h2>Effects</h2>
        <div id="btnBlackAndWhite1" class="btn_black_white standardWhiteBtn" onclick="javascript:addImageEffectBlackAndWhite()">Black &amp; White</div>           
        <div id="btnSepia1" class="btn_sepia standardWhiteBtn" onclick="javascript:addImageEffectSepia()">Sepia</div>
        
        <div id="Button3" class="btn_enhance standardWhiteBtn" type="button" onclick="javascript:loadPersonalizeImageCustomizeTabHandle(4);"><span style="display:none">Brightness &amp; </span>Enhance</div>
        <!--<div id="Button2" class="btn_effects" type="button" onclick="javascript:loadPersonalizeImageCustomizeTabHandle(3);" >More...</div>-->   
    </div>

    <div class="editPhotoRow EditPhotoBottom">
        <input id="Button13" class="standardWhiteBtn" type="button" value="RESET" onclick="javascript:resetImage();">
        <a class="standardWhiteBtn redoBtn right disabled" onclick="javascript:Redo();">Redo</a>
        <a class="standardWhiteBtn undoBtn right disabled" onclick="javascript:Undo();">Undo</a>
    </div>
    
    <!--<div class="forms" id="personalize_image_customize_controls_advance">
         
    </div>-->
    <!--<input class="formsinputtype2 btn_cancel" id="Button1" type="button" value="Back" onclick="javascript:loadPersonalizeImageCustomizeBack();" />-->
    <!--<input class="formsinputtype2 btn_confirm_large" id="Button1" type="button" value="Next" onclick="javascript:ConfirmImagesCustomize();" />-->
      
  </div>
  <div class="btn_images_complete standardPurpleBtn" onclick="javascript:backFromPersonalizeImageuploader(); leave_fb_upload();">Finished Adding &amp; Editing Photos</div>
  
  <!------------------ TAB EFFECTS ------------------>
  <div class="content image_customize_advanced_effects" style="display: none;">
        
        <input class="btn_cancel right" id="Button5" type="button" value="" onclick="javascript:loadPersonalizeImageCustomizeBack(true);">
        
        <!--<div class="editPhotoRow">         
            <div id="btnBlackAndWhite2" type="button" class="standardWhiteBtn btn_black_white" onClick="javascript:addImageEffectBlackAndWhite()">Black and White</div>            
        </div>-->
        
        <div id="btnSepia2" type="button" class="standardWhiteBtn btn_sepia" value="Sepia" onclick="javascript:addImageEffectSepia()">Sepia</div>
        
        <div class="editPhotoRow EditPhotoBottom">
            <input id="Button11" class="btn_reset standardWhiteBtn" type="button" value="RESET" onclick="javascript:resetImage();">
            <a class="standardWhiteBtn redoBtn right disabled" onclick="javascript:Redo();">Redo</a>
            <a class="standardWhiteBtn undoBtn right disabled" onclick="javascript:Undo();">Undo</a>
        </div>

  </div>
  
  <!------------------ TAB ENHANCE ------------------>
    <div class="content image_customize_advanced_enhance" style="display: none;">
        
        <input id="Button7" class="btn_cancel right" type="button" value="" onclick="javascript:loadPersonalizeImageCustomizeBack(true);">
        
        <div id="hue_wrapper" class="editPhotoRow btn_hue">
            <h2>Hue</h2>
            <div id="sliderHue" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 50%;"></a></div>
        </div> 
        
        <div id="contrast_wrapper" class="btn_contrast editPhotoRow">
            <h2>Contrast</h2>
            <div id="sliderContrast" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 25%;"></a></div>
        </div>
        
        <div id="brightness_wrapper" class="editPhotoRow btn_brightness">
            <h2>Brightness</h2>
            <div id="sliderBrightness" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 50%;"></a></div>
        </div>
        
        <div id="sharpen_wrapper" class="editPhotoRow btn_sharpen">
            <h2>Sharpen</h2>
            <div id="sliderSharpen" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
        </div>
        
        <div id="saturation_wrapper" class="editPhotoRow btn_sharpen">
            <h2>Saturation</h2>
            <div id="sliderSaturation" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 50%;"></a></div>
        </div>

        
        <div class="editPhotoRow EditPhotoBottom">
            <input id="Button12" class="btn_reset standardWhiteBtn" type="button" value="RESET" onclick="javascript:resetImage();">
            <a class="standardWhiteBtn redoBtn right disabled" onclick="javascript:Redo();">Redo</a>
            <a class="standardWhiteBtn undoBtn right disabled" onclick="javascript:Undo();">Undo</a>     
        </div>
               
    </div>

  
  <!------------------ TAB MORPH ------------------>
  <div class="content image_customize_advanced_morph" style="display: none;">
        <div style="height:400px;">
            Morph place here
            <div style="padding-bottom:50px;"></div>
            <div class="forms">
                <input class="formsinputtype2" id="Button9" type="button" value="Back" onclick="javascript:loadPersonalizeImageCustomizeBack(true);">
                <input class="formsinputtype2" id="Button10" type="button" value="Next" onclick="javascript:ConfirmImagesCustomize(true);">
                <div class="clear"></div>
            </div>
        </div>
  </div>  
                                                
</div>


















<script type="text/javascript">
   //var cach_image_object_list = [];
    var cach_image_state = -1;

    $(document).ready(function() {
        $("div[id^=sliderZoom]").slider({
            value: 1,
            min: 1,
            max: 4,
            step: 0.01,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.zoomTo(ui.value);
                keepTrack(false);
            }
        });

        $("#sliderHue").slider({
            value: 1,
            min: -180,
            max: 180,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.setHue(ui.value);
                keepTrack(false);
            }
        });

        $("#sliderContrast").slider({
            value: 0,
            min: -1,
            max: 3,
            step: 0.01,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.setContrast(ui.value);
                keepTrack(false);
            }
        });

        $("#sliderBrightness").slider({
            value: 0,
            min: -150,
            max: 150,
            step: 1,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.setBrightness(ui.value);
                keepTrack(false);
            }
        });

        $("#sliderSharpen").slider({
            value: 0,
            min: 0,
            max: 1,
            step: 0.005,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.setSharpness(ui.value);
                keepTrack(false);
            }
        });

        $("#sliderSaturation").slider({
            value: 0,
            min: -100,
            max: 100,
            step: 1,
            slide: function(event, ui) {
                var controller = ImageManager.getInstance().getController();
                if (controller) controller.setSaturation(ui.value);
                keepTrack(false);
            }
        });

        var capabilities = ImageManager.getInstance().getCapabilities();
        if (!capabilities.rotate) $('#btnRotateClockwise').attr("disabled", "disabled");
        if (!capabilities.rotate) $('#btnRotateAntiClockwise').attr("disabled", "disabled");
        if (!capabilities.sepia) $('input[id^=btnSepia]').attr("disabled", "disabled");
        if (!capabilities.blackAndWhite) $('input[id^=btnBlackAndWhite]').attr("disabled", "disabled");
        if (!capabilities.flipHorizontal) $('#btnFlipHorizontal').attr("disabled", "disabled");
        if (!capabilities.flipVertical) $('#btnFlipVertical').attr("disabled", "disabled");
        if (!capabilities.brightnes) $("#sliderBrightness").slider("disable");
        if (!capabilities.contrast) $("#sliderContrast").slider("disable");
        if (!capabilities.sharpen) $("#sliderSharpen").slider("disable");
        if (!capabilities.hue) $("#sliderHue").slider("disable");
        if (!capabilities.saturation) $("#sliderSaturation").slider("disable");
    });
    
    var windowwidth = $(window).width();
    var ua = navigator.userAgent;
    var checker = {
            android: ua.match(/Android/),
            applePhone: ua.match(/iPhone/),
            apple: ua.match(/iPad/),
            blackberry: ua.match(/BB10/)

    };
             
    if ( checker.applePhone || checker.apple || checker.android || checker.blackberry ) {
        // MOVE LEFT
        $('.moveleft').on('touchstart', function () {
            moveImageLeft();
        });
        // MOVE UP LEFT
        $('.moveleftcornertop').on('touchstart', function () {
            moveImageLeftUp();
        });
        // MOVE UP
        $('.moveup').on('touchstart', function () {
            moveImageUp();
        });
        // MOVE UP RIGHT
        $('.moverightcornertop').on('touchstart', function () {
            moveImageRightUp();
        });
        // MOVE RIGHT
        $('.moveright').on('touchstart', function () {
            moveImageRight();
        });
        // MOVE RIGHT DOWN
        $('.moverightcornerbottom').on('touchstart', function () {
            moveImageRightDown();
        });
        // MOVE DOWN
        $('.movedown').on('touchstart', function () {
            moveImageDown();
        });
        // MOVE DOWN LEFT
        $('.moveleftcornerbottom').on('touchstart', function () {
            moveImageLeftDown();
        });
    }
    else {
        $('.moveleft').click(function () {
            moveImageLeft();
        });
        $('.moveleftcornertop').click(function () {
            moveImageLeftUp();
        });
        $('.moveup').click(function () {
            moveImageUp();
        });
        $('.moverightcornertop').click(function () {
            moveImageRightUp();
        });
        $('.moveright').click(function () {
            moveImageRight();
        });
        $('.moverightcornerbottom').click(function () {
            moveImageRightDown();
        });
        $('.movedown').click(function () {
            moveImageDown();
        });
        $('.moveleftcornerbottom').click(function () {
            moveImageLeftDown();
        });
    }
            
    function moveImageLeft() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveLeftBy(10);
        }
        else {
            if (controller) controller.moveLeftBy(10);
        }
        //keepTrack(false);
    }

    function moveImageLeftUp() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveLeftUpBy(10, 10);
        }
        else {
            if (controller) controller.moveLeftUpBy(10, 10);
        }
        //keepTrack(false);
    }

    function moveImageUp() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveUpBy(10);
        }
        else {
            if (controller) controller.moveUpBy(10);
        }
        //keepTrack(false);
    }

    function moveImageRightUp() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveRightUpBy(10, 10);
            }
        else {
            if (controller) controller.moveRightUpBy(10, 10);
        }
        //keepTrack(false);
    }

    function moveImageRight() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveRightBy(10);
            }
        else {
            if (controller) controller.moveRightBy(10);
        }
        //keepTrack(false);
    }

    function moveImageRightDown() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveRightDownBy(10, 10);
        }
        else {
            if (controller) controller.moveRightDownBy(10, 10);
        }
        //keepTrack(false);
    }

    function moveImageDown() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveDownBy(10);
        }
        else {
            if (controller) controller.moveDownBy(10);
        }
        //keepTrack(false);
    }

    function moveImageLeftDown() {
        var windowwidth = $(window).width();
        var controller = ImageManager.getInstance().getController();
        if ( windowwidth <= 650 ) {
            if (controller) controller.moveLeftDownBy(10, 10);
        }
        else {
            if (controller) controller.moveLeftDownBy(10, 10);
        }
        //keepTrack(false);
    }


    var tmrHdl;


    function stopRef() {
        clearInterval(tmrHdl);
    }

    function rotateImageClockwiseTimer() {
        stopRef();
        tmrHdl = setInterval(rotateImageClockwise, 20);
        console.log(rotateImageClockwise);
    }

    function rotateImageAntiClockwiseTimer() {
        stopRef();
        tmrHdl = setInterval(rotateImageAntiClockwise, 20);
    }

    function rotateImageClockwise() {
        //        if(confirm("Do you really want to rotate this image?"))
        //        {
        //alert(this);     

         this.rotateImage("C", -1);
        

        


        //        }
        //var controller = ImageManager.getInstance().getController();        
        //if (controller) controller.rotateBy(-5);
    }

    function rotateImageAntiClockwise() {
        //        if(confirm("Do you really want to rotate this image?"))
        //        {     

        this.rotateImage("A", -1);
        

        keepTrack(false);
        //        }
        //var controller = ImageManager.getInstance().getController();
        //if (controller) controller.rotateBy(5);
    }

    function rotateImage(type, angle) {
        var controller = ImageManager.getInstance().getController();
        if (controller) controller.rotateBy90(type, angle);
    }

    function flipImageVertically() {
//        if(confirm("Do you really want to flip this image?"))
//        {    
            var controller = ImageManager.getInstance().getController();
            if (controller) controller.flipVertical();
            keepTrack(false);
//        }
    }

    function flipImageHorizontally() {
//        if(confirm("Do you really want to flip this image?"))
//        {    
            var controller = ImageManager.getInstance().getController();
            if (controller) controller.flipHorizontal();
            keepTrack(false);
//        }
    }

    function addImageEffectBlackAndWhite() {
        var controller = ImageManager.getInstance().getController();
        if (controller) controller.setGrayscale();
        keepTrack(false);
    }

    function addImageEffectSepia() {
        var controller = ImageManager.getInstance().getController();
        if (controller) controller.setSepia();
        keepTrack(false);
    }

    function addImageEffects() { }

    function enhanceImage() { }

    function morphImage() { }

    function Undo() {
        MakeUndoOrRedo("-1");
    }

    function Redo() {
        MakeUndoOrRedo("1");
    }
    
    function updateUI(imageInfo) {
        if (imageInfo) {
            $("div[id^=sliderZoom]").slider("option", "value", imageInfo.zoomLevel);
            $("#sliderHue").slider("option", "value", imageInfo.hue);
            $("#sliderContrast").slider("option", "value", imageInfo.contrast);
            $("#sliderBrightness").slider("option", "value", imageInfo.brightness);
            $("#sliderSharpen").slider("option", "value", imageInfo.sharpness);
            $("#sliderSaturation").slider("option", "value", imageInfo.saturation);
        }
    }

    function resetImage() {
        var controller = ImageManager.getInstance().getController();
        if (controller) {
            controller.reset();
            rotateImage("C", 0);
            updateUI(controller.getCurrentState());
        }
    }

    function getCachImageList() {
        var customizeImageList = [];
        var temp = $("input[name$='cach_image_object_list']").val();
        if (temp != "") customizeImageList = eval(temp);
        return customizeImageList;
    }
    
    function setCachImageList(imageList) {
        $("input[name$='cach_image_object_list']").val(JSON.stringify(imageList));
    }

    function keepTrack(isFirst) {
        //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  
        var cach_image_object_list = [];      
        if(isFirst) {            
            cach_image_state = -1;
            
        } else {
            current_image_object_list = getCachImageList();
            $('.editPhotoRow').addClass('undoAvailable');
        }
        
        setCodination();
        ImageManager.getInstance().updateImageInfoField();                
        
        var new_object_list = [];
        if(cach_image_state>-1) {
            var new_object_list = [];
            for (var i = 0; i < current_image_object_list.length; i++) {
                if (i <= cach_image_state) {
                    new_object_list.push(current_image_object_list[i]);
                }
            }        
        }
    
        new_object_list.push(GetCurrentActiveImageObject());
        setCachImageList(new_object_list);
        
        cach_image_state = new_object_list.length-1;
        
        DesableUndoRedoButtons();                
        //console.log(cach_image_state);
        //console.log(JSON.stringify(new_object_list));        
    }

    function MakeUndoOrRedo(val) {
        var current_image_object_list = getCachImageList();
        var tmp_current_image_object;
        var doApply = false;
        //alert(cach_image_state+','+current_image_object_list.length);
        if(cach_image_state>-1 && current_image_object_list.length>0) {
            if (val == "-1") {
                if(cach_image_state<1) {
                    // Can not undo, state in first posission.
                    //console.log('Can not undo, state in first posission.');
                } else {
                    cach_image_state = cach_image_state-1;
                    tmp_current_image_object = current_image_object_list[cach_image_state];
                    doApply = true;
                }
            } else {
                if (cach_image_state+1 >= current_image_object_list.length) { 
                    // Can not redo, state in last posission.
                    //console.log('Can not redo, state in last posission.');
                } else {
                    cach_image_state = cach_image_state + 1;
                    tmp_current_image_object = current_image_object_list[cach_image_state];
                    doApply = true;
                }            
            }
                        
            if(doApply) {
                resetImage();
                SetCurrentActiveImageObject(tmp_current_image_object);                
                ImageManager.getInstance().initializeImage($("input[name$='activeControl']").val());
                               
                $("#" + tmp_current_image_object.ImageId).css("width", tmp_current_image_object.CW);
                $("#" + tmp_current_image_object.ImageId).css("height", tmp_current_image_object.CH);  
                $("#" + tmp_current_image_object.ImageId).css("top", tmp_current_image_object.Y);
                $("#" + tmp_current_image_object.ImageId).css("left", tmp_current_image_object.X);                
            }
            
            DesableUndoRedoButtons();
        }
    }
    
    function DesableUndoRedoButtons() {
        var current_image_object_list = getCachImageList();
        
        $('.undoBtn').removeClass('disabled');
        $('.redoBtn').removeClass('disabled');
                
        if (current_image_object_list.length > 0) {
            if(cach_image_state<1 || current_image_object_list.length<2) {
                $('.undoBtn').addClass('disabled');
            }
            
            if(cach_image_state>=current_image_object_list.length-1 || current_image_object_list.length<2) {
                $('.redoBtn').addClass('disabled');
            }
        }        
    }
    
    function GetCurrentActiveImageObject() {
        var current_page = $("input[name$='current_activate_cardpage']").val();
        var customizeImageList;
        var current_active_image_object;

        var current_active_imageid = $("input[name$='activeControl']").val();

        if ($("input[name$='json_session_image_front']").val() == undefined) {
            var customizeTemplate = getCurrentTemplate(current_page);
            customizeImageList = customizeTemplate.CustomizeImageList;

            if (customizeImageList.length > 0) {
                for (i = 0; i < customizeImageList.length; i++) {
                    if (current_active_imageid == customizeImageList[i].ImageId) {
                        current_active_image_object = customizeImageList[i];
                    }
                }
            }

        } else {

            switch (current_page) {
                case "1":
                    {
                        customizeImageList = { "CustomizeImage": JSON.parse($("input[name$='json_session_image_front']").val()) };   
                        break;
                    }
                case "2":
                    {
                        customizeImageList = { "CustomizeImage": JSON.parse($("input[name$='json_session_image_cardinside_left']").val()) };                    
                        break;
                    }
                case "3":
                    {
                        customizeImageList = { "CustomizeImage": JSON.parse($("input[name$='json_session_image_cardinside_right']").val()) };
                        break;
                    }
                case "4":
                    {
                        customizeImageList = { "CustomizeImage": JSON.parse($("input[name$='json_session_image_back']").val()) };
                        break;
                    }                
                default: { break; }
            }

            if (customizeImageList.CustomizeImage.length > 0) {
                for (i = 0; i < customizeImageList.CustomizeImage.length; i++) {
                    if (current_active_imageid == customizeImageList.CustomizeImage[i].ImageId) {
                        current_active_image_object = customizeImageList.CustomizeImage[i];
                    }
                }
            }
        }                             

        //console.log("DD - " + JSON.stringify(current_active_image_object));
        return current_active_image_object;
    }
    
    function SetCurrentActiveImageObject(current_active_image_object) {
        var current_page = $("input[name$='current_activate_cardpage']").val();
        var customizeImageList;
        var temp;
        
        switch (current_page) {
            case "1":
                {
                    temp = $("input[name$='json_session_image_front']").val();
                    break;
                }
            case "2":
                {
                    temp = $("input[name$='json_session_image_cardinside_left']").val();                  
                    break;
                }
            case "3":
                {
                    temp = $("input[name$='json_session_image_cardinside_right']").val();
                    break;
                }
            case "4":
                {
                    temp = $("input[name$='json_session_image_back']").val();
                    break;
                }                
            default: { break; }
        }          
        
        if (temp != "") customizeImageList = eval(temp);
        var current_active_imageid = $("input[name$='activeControl']").val();

        if (customizeImageList.length > 0) {
            for (i = 0; i < customizeImageList.length; i++) {
                if (current_active_imageid==customizeImageList[i].ImageId) {
                    customizeImageList[i] = current_active_image_object;
                }
            }
        }
        
        ImageManager.getInstance().initializeCurrentPageImages(customizeImageList);       
    }
        
    function checkAndResizeImageAfterRotate(customizeImageList) {        
        
        for(i=0; i<customizeImageList.length; i++) {
        
            var iw = 0;
            var ih = 0;
            var dw = 0;
            var dh = 0;
            
            var x = 0;
            var y = 0;
            
            var isRotate =false;
                    
            var actionHistory = customizeImageList[i].ActionHistory;
            var rot = 0.0;
            if (actionHistory && actionHistory instanceof Array) {
                for (var j = 0; j < actionHistory.length; j++) {
                    switch (actionHistory[j].action) {
                        case "rotate":
                            {
                                rot = parseFloat(actionHistory[j].value);
                            if (parseInt(actionHistory[j].value)==90 || parseInt(actionHistory[j].value)==270/* rot > 0*/) { isRotate = true; }
                            break;
                        }
                    }
                }
            }

            dw = customizeImageList[i].DragWidth;
            dh = customizeImageList[i].DragHeight;
            
            iw = customizeImageList[i].CW;
            ih = customizeImageList[i].CH;
            
            x = customizeImageList[i].X;
            y = customizeImageList[i].Y;            
            
            //console.log("----------------------------------------------------------");
            //console.log("Image ID - " + i);

            if(isRotate) {                                      
                /*iw = customizeImageList[i].CH * Math.sin(rot * (Math.PI / 180)) + customizeImageList[i].CW * Math.cos(rot * (Math.PI / 180));
                ih = customizeImageList[i].CW * Math.sin(rot * (Math.PI / 180)) + customizeImageList[i].CH * Math.cos(rot * (Math.PI / 180));*/

                iw = customizeImageList[i].CH;
                ih = customizeImageList[i].CW;
                
                // Check image is fix to the placeholder
                if(parseInt(dw)> parseInt(iw)) {
                    DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                    GAlogError('Space not filled by photo');
                    return false;
                }
                
                if(parseInt(dh)> parseInt(ih)) {
                    DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                    GAlogError('Space not filled by photo');
                    return false;
                }
                                    
                if (parseInt(iw) != parseInt(ih)) {                                        
                    //console.log("Drag [ width : " + dw + ", height : " + dh + "]");
                    //console.log("Actual Image  [ width : " + customizeImageList[i].AW + ", height : " + customizeImageList[i].AH + "]");
                    //console.log("Current Image [ width : " + iw + ", height : " + ih + "]");
                    //console.log("Current Image [ X : " + customizeImageList[i].X + ", Y : " + customizeImageList[i].Y + "]");
                    //console.log("Current Image [ CX : " + customizeImageList[i].CX + ", CY : " + customizeImageList[i].CY + "]");                    
                    //console.log(parseInt(iw)>parseInt(ih));                

                    if(parseInt(ih)>parseInt(iw)) {
                        var gap_w = parseInt(iw)-parseInt(ih);                        
                        var should_left = parseInt(parseInt(gap_w)/2);                        
                        var drag_gap_w = parseInt(ih) - parseInt(dw) - parseInt(should_left*-1);
                        
                        //console.log("x- " + x + " | wp-gap-w   -> " + (parseInt(should_left)));
                        //console.log("x- " + x + " | drag-gap-w -> " + (parseInt(drag_gap_w*-1)));
                        
                        if((parseInt(x)>parseInt(should_left)+3)) {
                            DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                            GAlogError('Space not filled by photo');
                            return false;
                        }
                        
                        if((parseInt(x)<parseInt(drag_gap_w*-1))) {
                            DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                            GAlogError('Space not filled by photo');
                            return false;
                        }
                    } else {
                        var gap_h = parseInt(ih)-parseInt(iw);
                        var should_top = parseInt(parseInt(gap_h)/2);  
                        var drag_gap_y = parseInt(iw) - parseInt(dh) - parseInt(should_top*-1);
                        
                        //console.log("y- " + y + " | wp-gap-y   -> " + (parseInt(should_top)));
                        //console.log("y- " + y + " | drag-gap-y -> " + (parseInt(drag_gap_y*-1)));                        
                        
                        if((parseInt(y)> parseInt(should_top))) {
                            DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                            GAlogError('Space not filled by photo');
                            return false;
                        }
                        
                        if((parseInt(y)<parseInt(drag_gap_y*-1))) {
                            DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                            GAlogError('Space not filled by photo');
                            return false;
                        }                        
                    }
                }
            } else {
            
                // Check image is fix to the placeholder
                if(parseInt(dw)> parseInt(iw)) {
                    DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                    GAlogError('Space not filled by photo');
                    return false;
                }
                
                if(parseInt(dh)> parseInt(ih)) {
                    DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                    GAlogError('Space not filled by photo');
                    return false;
                }
                
                //console.log("Current Image [ X : " + customizeImageList[i].X + ", Y : " + customizeImageList[i].Y + "]");
                
                if(parseInt(x)<0) {
                    if((parseInt(iw) + parseInt(x)) < parseInt(dw)) {
                        DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                        GAlogError('Space not filled by photo');
                        return false;
                    }
                }
                
                if(parseInt(y)<0) {
                    if((parseInt(ih) + parseInt(y)) < parseInt(dh)) {
                        DisplayError("Check your photos...", "<p>One or more of your photos are not filling the space provided. Please take a look and zoom in or adjust the position slightly.</p>", true);
                        GAlogError('Space not filled by photo');
                        return false;
                    }
                }
            }                                                                    
        }

        return true;
    }
        
    $('.menu_mini li').click(function() {
        $('.tab_container #image_customize_advanced').addClass('active_mini');
    });

    $('.menu li#image_customize_standard').click(function() {
        $('.tab_container #image_customize_advanced').removeClass('active_mini');
    });

    $('#sliderHue a').click(function() {
        $('#hue_wrapper .tick_hue img').css('visibility', 'visible');
        $('#hue_wrapper').addClass('effect_active');
        alert("pin clicked");
    });

    $('.btn_reset').click(function() {
        $('.formsinputtype2').removeClass('effect_active');
        $('.tick').css('display', 'none');
        $('#hue_wrapper .tick_hue img').css('visibility', 'hidden');
    });

    function resetRotation(deg) {
        $('.rotate-dial').prepend('<input class="knob" data-width="90" data-cursor=true value="' + deg + '" data-fgColor="#a481b5" data-bgColor="#efebeb" data-thickness=".2" data-displayPrevious="false" data-max="360" data-step="3.6" data-displayInput="false">');
        IMGRotate();
    }

    function IMGRotate() {
        $(".knob").knob({
            change: function (value) {
                var controller = ImageManager.getInstance().getController();
                //console.log("change : " + parseInt(value));
                //console.log(controller);

                if (controller) {
                    controller.rotateByCenter(parseInt(value));
                    //controller.roteteAndCrop(controller.getRotation()); 
                }
                //console.log(value);
                keepTrack(false);
            },
            release: function (value) {
                //console.log(this.$.attr('value'));
                var controller = ImageManager.getInstance().getController();

                if (controller) {
                    controller.rotateByCenter(parseInt(value));
                    //controller.roteteAndCrop(controller.getRotation()); 
                }
                keepTrack(false);
                //console.log("release : " + parseInt(value));
            },
            cancel: function () {
                console.log("cancel : ", this);
            },
            /*format : function (value) {
                return value + '%';
            },*/
            draw: function () {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    this.cursorExt = 0.3;

                    var a = this.arc(this.cv)  // Arc
                        , pa                   // Previous arc
                        , r = 1;

                    this.g.lineWidth = this.lineWidth;

                    if (this.o.displayPrevious) {
                        pa = this.arc(this.v);
                        this.g.beginPath();
                        this.g.strokeStyle = this.pColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }

        });

        //console.log(controller);
        
        //$('input.knob').addClass('CHANGETHISINPUTNOW').value('0');
    }

</script>