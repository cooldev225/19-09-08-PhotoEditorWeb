 <!-- =============================================== PERSONALIZE TEXT CUSTOMIZATION =============================================== -->
                    
<script language="javascript" type="text/javascript">
    var iToolbar_Global_var_FontName, iToolbar_Global_var_FontName_Temp, iToolbar_Global_var_FontSize, iToolbar_Global_var_FontSize_Temp, iToolbar_Global_var_FontColor, iToolbar_Global_var_FontColor_Temp;
    var iToolbar_Global_var_B, iToolbar_Global_var_B_Temp, iToolbar_Global_var_I, iToolbar_Global_var_I_Temp, iToolbar_Global_var_U, iToolbar_Global_var_U_Temp
    var iToolbar_Global_var_AL, iToolbar_Global_var_AL_Temp, iToolbar_Global_var_AC, iToolbar_Global_var_AC_Temp, iToolbar_Global_var_AR, iToolbar_Global_var_AR_Temp
    var iToolbar_Global_var_AT, iToolbar_Global_var_AT_Temp, iToolbar_Global_var_AM, iToolbar_Global_var_AM_Temp, iToolbar_Global_var_AB, iToolbar_Global_var_AB_Temp

    var iToolbar_source_control_name = "cardinside_text_control_textarea";
    var iToolbar_destination_control_name = "";

    var iToolbar_Global_var_FontName_default = "Arial";
    var iToolbar_Global_var_FontSize_default = "12";
    var iToolbar_Global_var_FontColor_default = "";
     
    var iCommontag_for_signature = "[signature]";

    var iToolbar_Global_font_Arr_insidepage_2;
    var iToolbar_Global_font_Arr_insidepage_3;
    var iToolbar_Global_font_Arr_insidepage_4;

    var iText_Exceed_Type = "";

    var iText_Max_Length = 0;
</script>
<style type="text/css">
.colorpicker201  
{ 
    visibility:hidden;
    display:none;
    position:absolute;
    background:#FFF;
    border:solid 1px #CCC;
    padding:4px;
    z-index:999;
    filter:progid:DXImageTransform.Microsoft.Shadow(color=#D0D0D0,direction=135);
}
</style>
<input type="hidden" id="hidden_active_page_font_color" name="hidden_active_page_font_color" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_active_font_color" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_active_font_color" value="2:#000000,#ffff00,#ffffff,#ebff03,#f1ef0b,#ffcc99,#ffcc66,#ff6600,#ff6633,#ff6666,#ff9900,#ff9933,#ff9966,#cc6633,#cc6600,#990033,#cc0033,#cc3300,#ff0000,#ff3333,#ff6666,#ff9999,#ffcccc,#cc0066,#cc0099,#ff00cc,#ff00ff,#ff33ff,#ff66ff,#ff99ff,#ffccff,#9966ff,#9933ff,#9900ff,#9900cc,#6600cc,#660066,#993399,#990066,#333399,#3300ff,#3366ff,#0099ff,#33ccff,#33ffff,#33cccc,#66ccff,#336600,#33ff66,#99ff33,#99cc33,#00cc33,#009966,#660000,#663333,#663300,#996666,#cc9966,#cc9933,#b98214,#996600,#1a1a1a,#4d4d4d,#676767,#808080,#999999,#b3b3b3,#cccccc~3:#000000,#ffff00,#ffffff,#ebff03,#f1ef0b,#ffcc99,#ffcc66,#ff6600,#ff6633,#ff6666,#ff9900,#ff9933,#ff9966,#cc6633,#cc6600,#990033,#cc0033,#cc3300,#ff0000,#ff3333,#ff6666,#ff9999,#ffcccc,#cc0066,#cc0099,#ff00cc,#ff00ff,#ff33ff,#ff66ff,#ff99ff,#ffccff,#9966ff,#9933ff,#9900ff,#9900cc,#6600cc,#660066,#993399,#990066,#333399,#3300ff,#3366ff,#0099ff,#33ccff,#33ffff,#33cccc,#66ccff,#336600,#33ff66,#99ff33,#99cc33,#00cc33,#009966,#660000,#663333,#663300,#996666,#cc9966,#cc9933,#b98214,#996600,#1a1a1a,#4d4d4d,#676767,#808080,#999999,#b3b3b3,#cccccc~4:" />
<input type="hidden" id="hidden_active_font_color_controlname" name="hidden_active_font_color_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_active_font_color"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_active_font_name" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_active_font_name" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_active_font_name'];?>" />
<input type="hidden" id="hidden_active_font_name_controlname" name="hidden_active_font_name_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_active_font_name"/>
<input type="hidden" id="hidden_is_load_verses" name="hidden_is_load_verses" />

<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_emotion_notations" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_emotion_notations" value="(artwork-1),(artwork-2),(artwork-3),(artwork-4),(artwork-5),(artwork-6),(artwork-7),(artwork-8),(artwork-9),(artwork-10),(artwork-11),(artwork-12),(artwork-13),(artwork-14),(artwork-15),(artwork-16),(artwork-17),(artwork-18),(artwork-19),(artwork-20),(artwork-21),(artwork-22),(artwork-23),(artwork-24),(artwork-25),(artwork-26),(artwork-27),(artwork-28),(artwork-29),(artwork-30),(artwork-31),(artwork-32),(artwork-33),(artwork-34),(artwork-35),(artwork-36),(artwork-37),(artwork-38),(artwork-39),(artwork-40),(artwork-41),(artwork-42)" />
<input type="hidden" id="hidden_emotion_notations_controlname" name="hidden_emotion_notations_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_emotion_notations" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_emotion_imagenames" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_emotion_imagenames" value="a_0,a_1,a_2,a_3,a_4,a_5,a_6,a_7,a_8,a_9,b_0,b_1,b_2,b_3,b_4,b_5,b_6,b_7,b_8,b_9,c_0,c_1,c_2,c_3,c_4,c_5,c_6,c_7,c_8,c_9,d_0,d_1,d_2,d_3,d_4,d_5,d_6,d_7,d_8,d_9,e_0,e_1" />
<input type="hidden" id="hidden_emotion_imagenames_controlname" name="hidden_emotion_imagenames_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_emotion_imagenames" />

<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_signature_list_2" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_2" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_signature_list_3" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_3" value="ci_div_lable_1_3=,ci_div_lable_2_3=,ci_div_lable_3_3=," />

<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_2_font" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_2_font" value="margarine" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_2_color" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_2_color" value="#000000" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_3_font" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_3_font" value="margarine" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_3_color" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_3_color" value="#000000" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_4_font" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_4_font" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_default_page_4_color" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_4_color" />

<input type="hidden" id="texteditor_selected_tab" name="texteditor_selected_tab" />

<div class="tab_container" id="common_personalize_textupdater" style="display:none;">
  <!--<ul class="menu">
    <li id="text_customize_standard" class="active">Standard</li>
    <li id="text_customize_advanced">Advanced</li>
  </ul>-->
  
  <!--<ul class="menu_mini">
    <li id="text_customize_advanced_verses">Verses</li>
    <li id="text_customize_advanced_smilieys">Clip Art</li>
    <li id="text_customize_advanced_signatures">Signature</li>
  </ul>-->                         
 
  
  <div id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_divChangeTemplate" class="standardPurpleBtn BtnChangeTemp" value="Change Template" onclick="javascript:loadPersonalizeTextCustomizeBack();">Change Template</div>

  <!------------------ TAB STANDARD ------------------>
  <div class="content text_customize_standard">
    <div id="div_iToolbar">
        
        <!-- FONT -->
        <div class="cardinside_text_control_contain ICE_font_choose" id="div_iToolbar_fontname"></div>            
            
        <!-- FONT SIZE -->
        <select id="iToolbar_fontsize" class="ICE_font_size" onchange="javascript:iToolbar_buttonClick('F-S');">
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
            <option value="18">18</option>
            <option value="24">24</option>
            <option value="32">32</option>
        </select> 
        
        <!-- COLOUR SELECTER -->
        <div class="cardinside_text_control_contain ICE_font_color">
            <div class="btn_colour_picker" onclick="showColorGrid2('cardinside_text_control_selectedcolor','cardinside_text_control_selectedcolor_ctr');">
                <div id="cardinside_text_control_selectedcolor_ctr"></div>
                <span class="dd-pointer dd-pointer-down"></span>
            </div>
            <input type="hidden" id="cardinside_text_control_selectedcolor" name="cardinside_text_control_selectedcolor" /><div id="colorpicker201" class="colorpicker201" style="position:absolute;"></div>
        </div>
        
        <!-- FONT SIZE (SLIDER) -->
        <!--<div class="cardinside_text_control_contain control_text_size margin_left_20">
                Size
                <div class="zoom_wrapper">
                    <div id="iToolbar_fontsize"></div> 
                </div>               
            </div>-->

        <!-- FONT STYLES -->
        <div class="ICE_font_styles">
            <a href="javascript://" class="btn_text styleBold" onclick="iToolbar_buttonClick('B')"><span id="iToolbar_property_b" class="iToolbar-nonselect">B</span></a>
            <a href="javascript://" class="btn_text styleItalic" onclick="iToolbar_buttonClick('I')"><span id="iToolbar_property_i" class="iToolbar-nonselect">I</span></a>
            <a href="javascript://" class="btn_text styleUnderline" onclick="iToolbar_buttonClick('U')"><span id="iToolbar_property_u" class="iToolbar-nonselect">U</span></a>
        </div>
              
        <div style="display: inline-block;">
            <!-- ALIGNMENT -->  
            <div class="ICE_font_alignment" style="">
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-L')"><span id="iToolbar_property_al" class="iToolbar-nonselect"></span></a>
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-C')"><span id="iToolbar_property_ac" class="iToolbar-nonselect"></span></a>
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-R')"><span id="iToolbar_property_ar" class="iToolbar-nonselect"></span></a>                   
            </div>
            
            <div class="ICE_font_alignment">
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-T')"><span id="iToolbar_property_at" class="iToolbar-nonselect"></span></a>
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-M')"><span id="iToolbar_property_am" class="iToolbar-nonselect"></span></a>
                <a href="javascript://" class="btn_text_align" onclick="iToolbar_buttonClick('A-B')"><span id="iToolbar_property_ab" class="iToolbar-nonselect"></span></a>
            </div>
            
            <!-- EMOJIS -->
            <div class="ICE_emojis">
                <a class="btn_smilies" id="Button3" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(3);"><img src="/assets/dist/images/btn_emoji.png" /></a>
            </div>
            
            <!-- VERSES -->
            <div class="ICE_verses" style="display: none;">
                <a class="btn_verses" id="Button2" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(2);">"Verses"</a>
            </div>
            
            <!-- SPELL CHECK -->    
            <div class="ICE_spell_check" style="display: none;">
                <a href="javascript://" onclick="$('#cardinside_text_control_textarea').spellCheckInDialog({popUpStyle:'fancybox',theme:'clean'})">ABC</a>
            </div>
        </div>
        <!--<div class="formsinputtype3 btn_signatures" id="Button4" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(4);" >-->
            <!--Signature<div class="btn_icon_sprite_small"><img src="../../../../Images/ICE/bg_btn_sig.gif" /></div>-->
        <!--</div>-->
    
    </div>

    <!--<input class="formsinputtype2 btn_confirm_large right" id="Button15" type="button" value="Next" onclick="javascript:ConfirmPage();" />-->
        
  </div>
  
  <div class="forms">        
        <textarea id="cardinside_text_control_textarea" name="cardinside_text_control_textarea" class="cardinside_text_control_textarea" rows="8" cols="50" onfocus="javascript:cardinside_text_control_textarea_onfocus();" onkeyup="javascript:cardinside_text_control_textarea_onkeyup();" onkeypress="return cardinside_text_control_textarea_onkeypress(event);" onblur="javascript:cardinside_text_control_textarea_onblur();"></textarea>
        <div id="div_warning"></div>
        <div class="formsinputtype3 btn_upload_inside" id="btn_upload_inside" onclick="javascript:loadPersonalizeImageUploaderFromTextEditor();">
            Upload an Image<div class="btn_icon_sprite"><img src="/assets/dist/images/bg_btn_blackwhite.gif"></div>
        </div>
  </div>
  
  <!------------------ TAB ADVANCED ------------------>
  <div class="content image_customize_advanced">                                           
  </div>  
  
  <!------------------ TAB VERSES ------------------>
  <div class="content text_customize_advanced_verses">
    <input class="right" id="Button10" type="button" value="Close" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(5);" />
    <span class="main_heading"><h2>Verses <span>(click to add)</span></h2></span>
    <div class="emoticons_holder">
        <div id="photolistvr" class="thumb_slide navigation gallery-list"></div>
        <input type="hidden" name="image_count_verses" id="image_count_verses" value="0" /> 
    </div>
    <!--<div class="formsinputtype2 btn_change_temp left" id="Button9" type="button" value="Change Template" onclick="javascript:loadPersonalizeTextCustomizeBack();">Change Template</div>-->
  </div>
  
  <!------------------ TAB SMILIEYS ------------------>
  <div class="content text_customize_advanced_smilieys">
    <input class="right" id="Button6" type="button" value="Close" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(5);" />
    <span class="main_heading"><h2>Emoticons <span>(click to add)</span></h2></span>
    <div class="emoticons_holder">
        <div id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_div_emotion_selecter" class="div_emotion_selecter"><div class="emoticon_container"><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_0')">(artwork-1)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_1')">(artwork-2)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_2')">(artwork-3)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_3')">(artwork-4)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_4')">(artwork-5)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_5')">(artwork-6)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_6')">(artwork-7)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_7')">(artwork-8)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_8')">(artwork-9)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('a_9')">(artwork-10)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_0')">(artwork-11)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_1')">(artwork-12)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_2')">(artwork-13)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_3')">(artwork-14)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_4')">(artwork-15)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_5')">(artwork-16)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_6')">(artwork-17)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_7')">(artwork-18)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_8')">(artwork-19)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('b_9')">(artwork-20)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_0')">(artwork-21)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_1')">(artwork-22)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_2')">(artwork-23)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_3')">(artwork-24)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_4')">(artwork-25)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_5')">(artwork-26)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_6')">(artwork-27)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_7')">(artwork-28)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_8')">(artwork-29)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('c_9')">(artwork-30)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_0')">(artwork-31)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_1')">(artwork-32)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_2')">(artwork-33)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_3')">(artwork-34)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_4')">(artwork-35)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_5')">(artwork-36)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_6')">(artwork-37)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_7')">(artwork-38)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_8')">(artwork-39)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('d_9')">(artwork-40)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('e_0')">(artwork-41)</a></div><div><a href="javascript://" onclick="javascript:cardinside_text_control_emotionselect('e_1')">(artwork-42)</a></div><div class="clear"></div></div></div>      
        <!--<div class="formsinputtype2 btn_change_temp left" id="Button5" type="button" value="Change Template" onclick="javascript:loadPersonalizeTextCustomizeBack();">Change Template</div>-->      
        
    </div>
  </div>
  
  <!------------------ TAB SIGNATURES ------------------>
  <div class="content text_customize_advanced_signatures">
    <div style="height:400px;">

        <div id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_photolistsg" class="thumb_slide navigation gallery-list"></div>            
    </div>
    <input type="hidden" name="image_count_signatures" id="image_count_signatures" value="0" />
    <input type="hidden" name="photolistsg_name" id="photolistsg_name" value="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_photolistsg" />        
    <br /><br />
    <div class="forms">
        <div class="formsinputtype2 btn_change_temp left" id="Button7" type="button" value="Change Template" onclick="javascript:loadPersonalizeTextCustomizeBack();"> Change Template</div>
        <input class="formsinputtype2 btn_confirm_large right" id="Button8" type="button" value="Next" onclick="javascript:loadPersonalizeTextCustomizeTabHandle(5);" />
        <div class="clear"></div>
    </div>     
  </div>
    <div>    
        <div style="clear:both;"></div>
    </div>                                   
</div>
<div id="tempSizeMesureDiv" style="display: none; float:left; white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"></div>
<script type="text/javascript">
    /****************************************************************************************************************************************************************************
    EDITER RELATED SCRIPT START
    *****************************************************************************************************************************************************************************/

    /*---------------------------------------------------------------*/
    /* TEXT EDITER EVENTS */

    function LocateTextArea() {        
        //iToolbar_destination_control_name = $("#current_activate_cardinside_text_controler").val();
        $( "#" + iToolbar_destination_control_name ).parent().prepend( $('#cardinside_text_control_textarea') );
    }
    
    function checkSelectedTAlign() {
        if ( iToolbar_Global_var_AT == true ) {
            $('.cardinside_text_control_textarea').addClass('textareaVerticleAlignTop');
        }
    }

    function StyleTextAres() {
        //iToolbar_destination_control_name = $("#current_activate_cardinside_text_controler").val();
        
        var base_ctr = $('#' + iToolbar_destination_control_name);
        var ctr_h = base_ctr.css("height");
        var ctr_w = base_ctr.css("width");
    
        ctr_h = parseInt(ctr_h);
    
        ctr_w = parseInt(ctr_w);
        // slight adjustment for landscape template width
        if ( $('#main_wrapper').hasClass('landscape') ) {
             ctr_w = ctr_w - 11;
        }
        else {
             ctr_w = ctr_w - 6;
        }

        // To set background for HS cards
        var bg_img = $('#' + iToolbar_destination_control_name).parent().parent().parent().css('background-image');
        var bg_img_style = "";
        if (bg_img !== "none") {
            bg_img_style = " background-image:" + 'white;';//bg_img.replace(/"/g, "") + ";";
        }

        var textarea_ctr = $('#cardinside_text_control_textarea');
        var style_string = "white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;" + bg_img_style; //background: transparent;

        style_string = style_string + "position:absolute;";                 
        
        if(iToolbar_Global_var_B) { style_string = style_string + "font-weight:bold;"; }
        if(iToolbar_Global_var_I) { style_string = style_string + "font-style:italic;"; }
        if(iToolbar_Global_var_U) { style_string = style_string + "text-decoration:underline;"; }
        
        if(iToolbar_Global_var_AL) { style_string = style_string + "text-align:left;"; }
        if(iToolbar_Global_var_AC) { style_string = style_string + "text-align:center;"; }
        if(iToolbar_Global_var_AR) { style_string = style_string + "text-align:right;"; }
                
        style_string = style_string + "width:" + ctr_w + "px;";                
                
        var q = VerticallyRemainDistance();
        //alert(q);
        if(q<0)q=0;
        if(iToolbar_Global_var_AM) { 
            q = q/2; 
            style_string = style_string + "padding-top:" + parseInt(q) + "px;"; 
        }
        
        if(iToolbar_Global_var_AB) { 
            style_string = style_string + "padding-top:" + parseInt(q) + "px;"; 
        }
                
//        if(iToolbar_Global_var_AT) { style_string = style_string + "vertical-align:top;"; }
//        if(iToolbar_Global_var_AM) { style_string = style_string + "vertical-align:middle;"; }
//        if(iToolbar_Global_var_AB) { style_string = style_string + "vertical-align:bottom;"; }
                
        if(iToolbar_Global_var_AM || iToolbar_Global_var_AB) {
            style_string = style_string + "height:" + parseInt(ctr_h-q-14) + "px;";
        } else {
            style_string = style_string + "height:" + parseInt(ctr_h-14) + "px;";
        }
        
        style_string = style_string + "color:" + document.getElementById('cardinside_text_control_selectedcolor').value + ";font-family:" + iToolbar_Global_var_FontName + ";font-size:" + iToolbar_Global_var_FontSize + "px;"

        

        textarea_ctr.attr("style", style_string); // textarea_ctr.attr("style") + "; " +

    }

    function LoadTextIntoEditer(input, maxlen) {
        iToolbar_destination_control_name = $("#current_activate_cardinside_text_controler").val();
        iText_Max_Length = maxlen;
        $("#" + iToolbar_source_control_name).val(getPageText(LoadSignature($.fn.convertbackintotag(input), true)));        
        SetEditor($("#" + iToolbar_destination_control_name).html());
        LocateTextArea();
        StyleTextAres();
        checkSelectedTAlign();
        document.getElementById(iToolbar_source_control_name).focus();
        
    }

    function fontSessionSelect(ct) {
        //ADDED BY ROBBY - If stored font is in session, use it.
        if ($('#' + ct + ' cj').text().length > 0) {
            // do nothing
        }
        else {
            if (sessionStorage.getItem('selectedFontInSession') == '1') {
                var fontSessionSelection = sessionStorage.getItem('selectedFontText');
                $('#iToolbar_fontname_live .dd-options li label:contains("' + fontSessionSelection + '")').parent()[0].click();
            }
        }
    }

    function VerticallyRemainDistance() {       
        var sourceObj = getObject(iToolbar_source_control_name);
        var destinationObj = getObject(iToolbar_destination_control_name);
        //alert(iToolbar_destination_control_name);
        var lines;
        
        // Special process to exclude Emojii content
        sourceObj.value = removeEmojiChars(sourceObj.value);
        
        // Special process include to avoid HTML tags from card back
        if($("#" + $('#current_activate_cardpage_controlename').val()).val() == "4") {
            sourceObj.value = sourceObj.value.replace(/<(?:.|\n)*?>/gm, '');
        }
        
        var TA = sourceObj.value;
        if (document.all) { // IE
            lines = TA.split("\r\n");
        }
        else { //Mozilla
            lines = TA.split("\n");
        }        
        
        var y = destinationObj.offsetHeight;
        var y1 = getVerticalWidth(TA, destinationObj);
        //console.log('text-length='+y1);
        var q = parseInt(y) - parseInt(y1);
                
        return q;
    }

    function cardinside_text_control_textarea_onkeypress(event) {
        return ValidateFrontText(event, getObject(iToolbar_source_control_name), iText_Max_Length);
    }

    function cardinside_text_control_textarea_onkeyup() {
        if (!domirror()) {
            $("#" + iToolbar_source_control_name).val(getPageText($.fn.convertbackintotag($("#" + iToolbar_destination_control_name).html())));
        }
    }

    function cardinside_text_control_textarea_onfocus() {
        document.getElementById(iToolbar_source_control_name).select();
        if(objDragTouchImage instanceof dragObject) { objDragTouchImage.Dispose(); }
    }

    function cardinside_text_control_textarea_spellcheckercallback() {
        cardinside_text_control_textarea_onkeyup();
    }
    
    function cardinside_text_control_textarea_onblur() {
        cardinside_text_control_textarea_onkeyup();
        $("#cardinside_text_control_textarea").css("display", "none");        
    }
    /*---------------------------------------------------------------*/

    function InitializeGlobalVariablesSetting() {
        iToolbar_Global_var_FontName = iToolbar_Global_var_FontName_default;
        iToolbar_Global_var_FontSize = iToolbar_Global_var_FontSize_default;
        iToolbar_Global_var_FontColor = iToolbar_Global_var_FontColor_default;

        var page = $("#" + $('#current_activate_cardpage_controlename').val()).val();
        switch (page) {
            case "2":
                {
                    iToolbar_Global_var_FontName = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_2_font").val();
                    iToolbar_Global_var_FontColor = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_2_color").val();
                    break;
                }
            case "3":
                {
                    iToolbar_Global_var_FontName = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_3_font").val();
                    iToolbar_Global_var_FontColor = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_3_color").val();
                    break;
                }
            case "4":
                {
                    iToolbar_Global_var_FontName = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_4_font").val();
                    iToolbar_Global_var_FontColor = $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_default_page_4_color").val();
                    break;
                }
            default: { break; }
        }

        iToolbar_Global_var_B = iToolbar_Global_var_I = iToolbar_Global_var_U = false;
        iToolbar_Global_var_AL = iToolbar_Global_var_AC = iToolbar_Global_var_AR = false;
        iToolbar_Global_var_AT = iToolbar_Global_var_AM = iToolbar_Global_var_AB = false;

        $("#div_iToolbar").show();
        $("#text_customize_advanced").show();
        if ($("#" + $('#current_activate_cardpage_controlename').val()).val() == "4") {
            $("#div_iToolbar").hide();
            $("#text_customize_advanced").hide();
        }
    }

    function InitializeEditor() {
        // Set page related default font color
        // Close color selecting window if open.
        setCCbldSty2('colorpicker201', 'vs', 'hidden'); // Function locate in 201a.js
        setCCbldSty2('colorpicker201', 'ds', 'none'); // Function locate in 201a.js

        InitializeFontColorHidden();
        document.getElementById("cardinside_text_control_selectedcolor_ctr").style.backgroundColor = iToolbar_Global_var_FontColor;
        document.getElementById("cardinside_text_control_selectedcolor").value = iToolbar_Global_var_FontColor;

        // Set page related default font faces  
        InitializeFontDropDown();
        var current_active_font_arr;
        switch ($("#" + $('#current_activate_cardpage_controlename').val()).val()) {
            case "2":
                {
                    current_active_font_arr = iToolbar_Global_font_Arr_insidepage_2;
                    break;
                }
            case "3":
                {
                    current_active_font_arr = iToolbar_Global_font_Arr_insidepage_3;
                    break;
                }
            case "4":
                {
                    current_active_font_arr = iToolbar_Global_font_Arr_insidepage_4;
                    break;
                }
        }
        document.getElementById('iToolbar_fontname').value = iToolbar_Global_var_FontName;
        // Initialize styled jquery font select
        $('#iToolbar_fontname_live').ddslick({
            width: 160,
            defaultSelectedIndex: current_active_font_arr.indexOf(iToolbar_Global_var_FontName),
            onSelected: function(selectedData) {
                $("#iToolbar_fontname").val(selectedData.selectedData.value);
                iToolbar_buttonClick('F-C');
            }
        });

        //SelectFontddl(); // This will select font ddl
        //--------------------------------------------------- END FONT

        // Initialize font size controler
        //$("#sliderFontSize").slider("option", "value", iToolbar_Global_var_FontSize);
        $("#iToolbar_fontsize").val(iToolbar_Global_var_FontSize);
        //InitializeFontSizeSlider();

        document.getElementById('iToolbar_property_b').setAttribute("class", ((iToolbar_Global_var_B) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_i').setAttribute("class", ((iToolbar_Global_var_I) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_u').setAttribute("class", ((iToolbar_Global_var_U) ? "iToolbar-select" : "iToolbar-nonselect"));

        document.getElementById('iToolbar_property_al').setAttribute("class", ((iToolbar_Global_var_AL) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_ac').setAttribute("class", ((iToolbar_Global_var_AC) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_ar').setAttribute("class", ((iToolbar_Global_var_AR) ? "iToolbar-select" : "iToolbar-nonselect"));

        document.getElementById('iToolbar_property_at').setAttribute("class", ((iToolbar_Global_var_AT) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_am').setAttribute("class", ((iToolbar_Global_var_AM) ? "iToolbar-select" : "iToolbar-nonselect"));
        document.getElementById('iToolbar_property_ab').setAttribute("class", ((iToolbar_Global_var_AB) ? "iToolbar-select" : "iToolbar-nonselect"));
    }

    function InitializeFontDropDown() {
        var str_arr = "";
        var ddl_html = "";
        var ddl_html_live = "";

        var page = $("#" + $('#current_activate_cardpage_controlename').val()).val();
        str_arr = $("#" + $("#hidden_active_font_name_controlname").val()).val();

        var t_a = str_arr.split("~");

        ddl_html = '<select id="iToolbar_fontname" name="iToolbar_fontname" class="ice_card_size_dd" onclick="iToolbar_buttonClick(\'F-C\');">';
        ddl_html_live = '<select id="iToolbar_fontname_live" name="iToolbar_fontname_live">';

        for (i = 0; i < t_a.length; i++) {
            if (t_a[i].substr(0, 1) == page) {
                var t_f_a = t_a[i].substring(2).split(",");
                for (j = 0; j < t_f_a.length; j++) {
                    ddl_html += '<option value="' + t_f_a[j].substring(0, t_f_a[j].indexOf('^')) + '">' + t_f_a[j].substring(t_f_a[j].indexOf('^') + 1, t_f_a[j].length) + '</option>';
                    ddl_html_live += '<option value="' + t_f_a[j].substring(0, t_f_a[j].indexOf('^')) + '" data-lablestyle="' + t_f_a[j].substring(0, t_f_a[j].indexOf('^')) + '">' + t_f_a[j].substring(t_f_a[j].indexOf('^') + 1, t_f_a[j].length) + '</option>';
                }
            }

            switch (t_a[i].substr(0, 1)) {
                case "2":
                    {
                        iToolbar_Global_font_Arr_insidepage_2 = t_a[i].substring(2).split(",");
                        for (z = 0; z < iToolbar_Global_font_Arr_insidepage_2.length; z++) {
                            iToolbar_Global_font_Arr_insidepage_2[z] = iToolbar_Global_font_Arr_insidepage_2[z].substring(0, iToolbar_Global_font_Arr_insidepage_2[z].indexOf('^'));
                        }
                        break;
                    }
                case "3":
                    {
                        iToolbar_Global_font_Arr_insidepage_3 = t_a[i].substring(2).split(",");
                        for (z = 0; z < iToolbar_Global_font_Arr_insidepage_3.length; z++) {
                            iToolbar_Global_font_Arr_insidepage_3[z] = iToolbar_Global_font_Arr_insidepage_3[z].substring(0, iToolbar_Global_font_Arr_insidepage_3[z].indexOf('^'));
                        }
                        break;
                    }
                case "4":
                    {
                        iToolbar_Global_font_Arr_insidepage_4 = t_a[i].substring(2).split(",");
                        for (z = 0; z < iToolbar_Global_font_Arr_insidepage_4.length; z++) {
                            iToolbar_Global_font_Arr_insidepage_4[z] = iToolbar_Global_font_Arr_insidepage_4[z].substring(0, iToolbar_Global_font_Arr_insidepage_4[z].indexOf('^'));
                        }
                        break;
                    }
            }
        }

        ddl_html += '</select>';

        ddl_html_live += '</select>';
        ddl_html_live += '<input type="hidden" id="iToolbar_fontname" name="iToolbar_fontname" />';
        //alert(ddl_html_live);
        $('#div_iToolbar_fontname').html(ddl_html_live);
    }

    function SelectFontddl() {
        var val = $("#iToolbar_fontname").val();
        var selected_index = -1;
        switch ($("#" + $('#current_activate_cardpage_controlename').val()).val()) {
            case "2":
                {
                    selected_index = iToolbar_Global_font_Arr_insidepage_2.indexOf(val);
                    break;
                }
            case "3":
                {
                    selected_index = iToolbar_Global_font_Arr_insidepage_3.indexOf(val);
                    break;
                }
            case "4":
                {
                    selected_index = iToolbar_Global_font_Arr_insidepage_4.indexOf(val);
                    break;
                }
        }

        $('#iToolbar_fontname_live').ddslick('select', { index: selected_index });
    }

    function InitializeFontColorHidden() {
        str_arr = $("#" + $("#hidden_active_font_color_controlname").val()).val();
        var t_a = str_arr.split("~");

        for (i = 0; i < t_a.length; i++) {
            if (t_a[i].substr(0, 1) == $("#" + $('#current_activate_cardpage_controlename').val()).val()) {
                $("#hidden_active_page_font_color").val(t_a[i].substring(2))
            }
        }
    }

    function InitializeFontSizeSlider() {
        $("#iToolbar_fontsize").slider({
            value: parseInt(iToolbar_Global_var_FontSize),
            min: 8,
            max: 42,
            step: 2,
            slide: function(event, ui) {
                iToolbar_Global_var_FontSize_Temp = iToolbar_Global_var_FontSize;
                iToolbar_Global_var_FontSize = ui.value;
                return iToolbar_buttonClick('F-S');
            }
        });
    }

    function SetToDefault() {
        InitializeGlobalVariablesSetting();
        InitializeEditor();
    }

    function SetEditor(full_html) {
        InitializeGlobalVariablesSetting();
        try {
            full_html = full_html.toLowerCase();

            var html_style = '';
            var html_text = '';
            var tmp_table = '';
            var tmp_div = '';
            // Identify customer input text

            if (full_html.indexOf("<cj>") != -1 && full_html.lastIndexOf("</cj>") != -1) {
                html_text = full_html.substring(full_html.indexOf("<cj>"), full_html.lastIndexOf("</cj>") + 5);
            }

            // Seperate system generated style html
            if (html_text.length > 0) { html_style = full_html.replace(html_text, ""); } else { html_style = full_html; }

            // Identify system generated style div
            if (html_style.indexOf("<div") != -1 && html_style.lastIndexOf("</div>") != -1) {
                tmp_div = html_style.substring(html_style.indexOf("<div"), html_style.lastIndexOf("</div>") + 6);
            }

            // Read all styles include in system generated style div
            if (tmp_div.length > 0) {

                // -----------------------------------------------------------------------------------------------------------                
                // START
                // Check style Bold
                if (tmp_div.indexOf("<b>") != -1) { iToolbar_Global_var_B = true; }
                // Check style Italic
                if (tmp_div.indexOf("<i>") != -1) { iToolbar_Global_var_I = true; }
                // Check style Underline
                if (tmp_div.indexOf("<u>") != -1) { iToolbar_Global_var_U = true; }
                // Seperate style value in div
                var str_div_style = tmp_div.substring(tmp_div.indexOf("style") + 7, tmp_div.lastIndexOf('">'));
                //console.log(str_div_style);            

                var arr_div_styles = str_div_style.split(";");
                for (i = 0; i < arr_div_styles.length; i++) {
                    //console.log(arr_div_styles[i]);
                    arr_div_style = arr_div_styles[i].split(":");
                    switch (arr_div_style[0].toLowerCase().trim()) {
                        case "text-align": // Text horizontal align
                            {
                                //console.log(arr_div_style[1]);                                                   

                                switch (arr_div_style[1].toLowerCase().trim()) {
                                    case "left":
                                        {
                                            iToolbar_Global_var_AL = true;
                                            break;
                                        }
                                    case "right":
                                        {
                                            iToolbar_Global_var_AR = true;
                                            break;
                                        }
                                    default:
                                        {
                                            iToolbar_Global_var_AC = true;
                                            break;
                                        }
                                }
                                break;
                            }
                        case "color": // font color
                            {
                                //console.log(arr_div_style[1]);
                                iToolbar_Global_var_FontColor = arr_div_style[1].trim();
                                break;
                            }
                        case "font-family": // font type
                            {
                                //console.log(arr_div_style[1]);
                                iToolbar_Global_var_FontName = arr_div_style[1].trim();
                                break;
                            }
                        case "font-size": // font size
                            {
                                //console.log(arr_div_style[1]);
                                iToolbar_Global_var_FontSize = arr_div_style[1].replace("px", "")
                                break;
                            }
                    }
                }

                // END
                // -----------------------------------------------------------------------------------------------------------

                // Seperate system generated style table
                tmp_table = html_style.replace(tmp_div, "");

            }
            else {
                tmp_table = html_style;
            }

            // Read all styles include in system generated style TABLE
            if (tmp_table.length > 0) {
                var tmp_td = '';
                if (tmp_table.indexOf("<td") != -1 && tmp_table.lastIndexOf("</td>") != -1) {
                    tmp_td = tmp_table.substring(tmp_table.indexOf("<td"), tmp_table.lastIndexOf("</td>") + 5);
                    if (tmp_td.indexOf("style") != -1) {
                        var str_td_style = tmp_td.substring(tmp_td.indexOf("style") + 7, tmp_td.lastIndexOf('">'));
                        if (str_td_style.length > 0) {
                            var arr_td_styles = str_td_style.split(";");
                            for (i = 0; i < arr_td_styles.length; i++) {
                                arr_td_style = arr_td_styles[i].split(":");
                                switch (arr_td_style[0].toLowerCase().trim()) {
                                    case "vertical-align": // Text verticle align
                                        {
                                            //console.log(arr_td_style[1]);

                                            switch (arr_td_style[1].toLowerCase().trim()) {
                                                case "middle":
                                                    {
                                                        iToolbar_Global_var_AM = true;
                                                        break;
                                                    }
                                                case "bottom":
                                                    {
                                                        iToolbar_Global_var_AB = true;
                                                        break;
                                                    }
                                                default:
                                                    {
                                                        iToolbar_Global_var_AT = true;
                                                        break;
                                                    }
                                            }
                                            break;
                                        }
                                }
                            }
                        }
                    }
                }
            }
        }
        catch (Error) { }
        InitializeEditor();
    }

    function iToolbar_buttonClick(val) {
    
        var result = false;
        
        switch (val) {
            case 'F-C':
                {
                    iToolbar_Global_var_FontName_Temp = iToolbar_Global_var_FontName;
                    iToolbar_Global_var_FontName = document.getElementById('iToolbar_fontname').value;
                    break;
                }
            case 'F-S':
                {
                    iToolbar_Global_var_FontSize_Temp = iToolbar_Global_var_FontSize;
                    iToolbar_Global_var_FontSize = document.getElementById('iToolbar_fontsize').value;
                    break;
                }
            case 'B':
                {
                    iToolbar_Global_var_B_Temp = iToolbar_Global_var_B;
                    iToolbar_Global_var_B = ((iToolbar_Global_var_B) ? false : true);
                    break;
                }
            case 'I':
                {
                    iToolbar_Global_var_I_Temp = iToolbar_Global_var_I;
                    iToolbar_Global_var_I = ((iToolbar_Global_var_I) ? false : true);
                    break;
                }
            case 'U':
                {
                    iToolbar_Global_var_U_Temp = iToolbar_Global_var_U;
                    iToolbar_Global_var_U = ((iToolbar_Global_var_U) ? false : true);
                    break;
                }
            case 'A-L':
                {
                    iToolbar_Global_var_AL_Temp = iToolbar_Global_var_AL;
                    //iToolbar_Global_var_AL = ((iToolbar_Global_var_AL) ? false : true);
                    iToolbar_Global_var_AL = true;
                    
                    iToolbar_Global_var_AC = false;
                    iToolbar_Global_var_AR = false;
                    break;
                }
            case 'A-C':
                {
                    iToolbar_Global_var_AC_Temp = iToolbar_Global_var_AC;
                    //iToolbar_Global_var_AC = ((iToolbar_Global_var_AC) ? false : true);
                    iToolbar_Global_var_AC = true;
                    
                    iToolbar_Global_var_AL = false;
                    iToolbar_Global_var_AR = false;
                    break;
                }
            case 'A-R':
                {
                    iToolbar_Global_var_AR_Temp = iToolbar_Global_var_AR;
                    //iToolbar_Global_var_AR = ((iToolbar_Global_var_AR) ? false : true);
                    iToolbar_Global_var_AR = true;
                    
                    iToolbar_Global_var_AL = false;
                    iToolbar_Global_var_AC = false;
                    break;
                }
            case 'A-T':
                {
                    iToolbar_Global_var_AT_Temp = iToolbar_Global_var_AT;
                    iToolbar_Global_var_AT = ((iToolbar_Global_var_AT) ? false : true);

                    iToolbar_Global_var_AM = false;
                    iToolbar_Global_var_AB = false;
                    $('.cardinside_text_control_textarea').addClass('textareaVerticleAlignTop');
                    break;
                }
            case 'A-M':
                {
                    iToolbar_Global_var_AM_Temp = iToolbar_Global_var_AM;
                    //iToolbar_Global_var_AM = ((iToolbar_Global_var_AM) ? false : true);
                    iToolbar_Global_var_AM = true;
                    
                    iToolbar_Global_var_AT = false;
                    iToolbar_Global_var_AB = false;
                    $('.cardinside_text_control_textarea').removeClass('textareaVerticleAlignTop');
                    break;
                }
            case 'A-B':
                {
                    iToolbar_Global_var_AB_Temp = iToolbar_Global_var_AB;
                    //iToolbar_Global_var_AB = ((iToolbar_Global_var_AB) ? false : true);
                    iToolbar_Global_var_AB = true;
                    
                    iToolbar_Global_var_AM = false;
                    iToolbar_Global_var_AT = false;
                    $('.cardinside_text_control_textarea').removeClass('textareaVerticleAlignTop');
                    break;
                }
            default: { break; }
        }

        if (domirror()) {
            
            result = true;
            
            switch (val) {
                case 'B':
                    {
                        if (iToolbar_Global_var_B) {
                            document.getElementById('iToolbar_property_b').setAttribute("class", "iToolbar-select");
                        }
                        else {
                            document.getElementById('iToolbar_property_b').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'I':
                    {
                        if (iToolbar_Global_var_I) {
                            document.getElementById('iToolbar_property_i').setAttribute("class", "iToolbar-select");
                        }
                        else {
                            document.getElementById('iToolbar_property_i').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'U':
                    {
                        if (iToolbar_Global_var_U) {
                            document.getElementById('iToolbar_property_u').setAttribute("class", "iToolbar-select");
                        }
                        else {
                            document.getElementById('iToolbar_property_u').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-L':
                    {
                        if (iToolbar_Global_var_AL) {
                            document.getElementById('iToolbar_property_al').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_ac').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_ar').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_al').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-C':
                    {
                        if (iToolbar_Global_var_AC) {
                            document.getElementById('iToolbar_property_ac').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_al').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_ar').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_ac').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-R':
                    {
                        if (iToolbar_Global_var_AR) {
                            document.getElementById('iToolbar_property_ar').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_al').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_ac').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_ar').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-T':
                    {
                        if (iToolbar_Global_var_AT) {
                            document.getElementById('iToolbar_property_at').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_am').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_ab').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_at').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-M':
                    {
                        if (iToolbar_Global_var_AM) {
                            document.getElementById('iToolbar_property_am').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_at').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_ab').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_am').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                case 'A-B':
                    {
                        if (iToolbar_Global_var_AB) {
                            document.getElementById('iToolbar_property_ab').setAttribute("class", "iToolbar-select");

                            document.getElementById('iToolbar_property_at').setAttribute("class", "iToolbar-nonselect");
                            document.getElementById('iToolbar_property_am').setAttribute("class", "iToolbar-nonselect");
                        }
                        else {
                            document.getElementById('iToolbar_property_ab').setAttribute("class", "iToolbar-nonselect");
                        }
                        break;
                    }
                default: { break; }
            }
        }
        else {
            switch (val) {
                case 'F-C':
                    {
                        iToolbar_Global_var_FontName = iToolbar_Global_var_FontName_Temp;
                        document.getElementById('iToolbar_fontname').value = iToolbar_Global_var_FontName;
                        SelectFontddl(); // This will select font ddl 
                        break;
                    }
                case 'F-S':
                    {
                        iToolbar_Global_var_FontSize = iToolbar_Global_var_FontSize_Temp;
                        document.getElementById('iToolbar_fontsize').value = iToolbar_Global_var_FontSize;
                        //InitializeFontSizeSlider();
                        break;
                    }
                case 'B':
                    {
                        iToolbar_Global_var_B = iToolbar_Global_var_B_Temp;
                        break;
                    }
                case 'I':
                    {
                        iToolbar_Global_var_I = iToolbar_Global_var_I_Temp;
                        break;
                    }
                case 'U':
                    {
                        iToolbar_Global_var_U = iToolbar_Global_var_U_Temp;
                        break;
                    }
                case 'A-L':
                    {
                        iToolbar_Global_var_AL = iToolbar_Global_var_AL_Temp;
                        break;
                    }
                case 'A-C':
                    {
                        iToolbar_Global_var_AC = iToolbar_Global_var_AC_Temp;
                        break;
                    }
                case 'A-R':
                    {
                        iToolbar_Global_var_AR = iToolbar_Global_var_AR_Temp;
                        break;
                    }
                case 'A-T':
                    {
                        iToolbar_Global_var_AT = iToolbar_Global_var_AT_Temp;
                        break;
                    }
                case 'A-M':
                    {
                        iToolbar_Global_var_AM = iToolbar_Global_var_AM_Temp;
                        break;
                    }
                case 'A-B':
                    {
                        iToolbar_Global_var_AB = iToolbar_Global_var_AB_Temp;
                        break;
                    }
                default: { break; }
            }
        }
        
//        StyleTextAres();
                       
        return result;
    }

    function iToolbar_wrap_styles(val) {
        var _wrap_style = "white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"

        val = "<cj>" + val + "</cj>";
        val = ((iToolbar_Global_var_B) ? "<B>" + val + "</B>" : val);
        val = ((iToolbar_Global_var_I) ? "<I>" + val + "</I>" : val);
        val = ((iToolbar_Global_var_U) ? "<U>" + val + "</U>" : val);
        val = "<div style=\"" + ((iToolbar_Global_var_AL) ? "text-align:left;" : "") + ((iToolbar_Global_var_AC) ? "text-align:center;" : "") + ((iToolbar_Global_var_AR) ? "text-align:right;" : "") + "color:" + document.getElementById('cardinside_text_control_selectedcolor').value + ";font-family:" + iToolbar_Global_var_FontName + ";font-size:" + iToolbar_Global_var_FontSize + "px; " + _wrap_style + "\">" + val + "</div>";
        if (iToolbar_Global_var_AT || iToolbar_Global_var_AM || iToolbar_Global_var_AB) {
            val = "<table style=\"width:100%; height:100%;\"><tr><td style=\"" + ((iToolbar_Global_var_AT) ? "vertical-align:top;" : "") + ((iToolbar_Global_var_AM) ? "vertical-align:middle;" : "") + ((iToolbar_Global_var_AB) ? "vertical-align:bottom;" : "") + "\">" + val + "</td></tr></table>";
        }
        return val;
    }

    function getPageHtmlFromTextArea(source) {
        var reNewLines = /\r\n|\r|\n/g;
        if ($("#" + $("#current_activate_cardpage_controlename").val()).val() == "4") {
            return source;
        } else {
            return iToolbar_wrap_styles(source.replace(reNewLines, "<br />")); // .replace(/ /g, '\u00a0')
        }
    }

    function getPageText(pageHtmlContent) {
        var reBr = /<br \/>|<br>/gi;
        pageHtmlContent = pageHtmlContent.replace(reBr, "\n"); // .replace(/u00a0/g, ' ')
        var tmp = document.createElement("DIV");
        tmp.innerHTML = pageHtmlContent;
        return tmp.textContent || tmp.innerText;
    }

//    function removeBadWord(source) {
//        if ($("#").val() == "") { return source; } // If the bad word list blank no need to further process.
//        var arr_badword = $("#").val().split(',');
//        var replace_with = "";
//        for (i = 0; i < arr_badword.length; i++) {
//            replace_with = "";
//            if (arr_badword[i].length > 2) {
//                replace_with = arr_badword[i].substring(0, 1);
//                for (j = 1; j < arr_badword[i].length - 1; j++) {
//                    replace_with += "*";
//                }

//                replace_with += arr_badword[i].substr(arr_badword[i].length - 1, 1);
//                source = source.replaceAll(arr_badword[i], replace_with);
//            }
//        }

//        return source;
//    }

    function domirror() {
        if (mirror_validate(iToolbar_source_control_name, iToolbar_destination_control_name, null)) {
            StyleTextAres();
            mirror(iToolbar_source_control_name, iToolbar_destination_control_name, null);
            return true;
        }
        else {
            if (iText_Exceed_Type == "H") {
                $("#div_warning").html("<div class='warning_characters'>You have reached your character limit</div>");
                $('.cardInsideDivHighlighter').addClass('warning_border');
            }
            return false;
        }
    }

    function mirror_validate(source, destination, event) {
        iText_Exceed_Type = "";

        var sourceObj = getObject(source);
        var destinationObj = getObject(destination);
        var lines;
        
//        // Special process to exclude Emojii content
//        sourceObj.value = removeEmojiChars(sourceObj.value);
//        
//        // Special process include to avoid HTML tags from card back
//        if($("#" + $('#current_activate_cardpage_controlename').val()).val() == "4") {
//            sourceObj.value = sourceObj.value.replace(/<(?:.|\n)*?>/gm, '');
//        }

        var TA = sourceObj.value;

        // Special process to exclude Emojii content
        TA = removeEmojiChars(TA);

        // Special process include to avoid HTML tags from card back
        if($("#" + $('#current_activate_cardpage_controlename').val()).val() == "4") {
            TA = TA.replace(/<(?:.|\n)*?>/gm, '');
        }
        
        if (document.all) { // IE
            lines = TA.split("\r\n");
        }
        else { //Mozilla
            lines = TA.split("\n");
        }

        var success = true;

        // Done : Janesh 
        // On   : 15 - 03 - 2013
        // Note :Verticle validation temparary block due to auto wrap request.
        // 
        //    
        //    for (var i = 0; i < lines.length; i++) {
        //        //console.log(validateWidth(lines[i], destinationObj));
        //        if (!validateWidth(lines[i], destinationObj)) {
        //            if (event != null) {
        //                switch (event.keyCode) {
        //                    case 8: { break; }
        //                    case 46: { break; }
        //                    case 13: { break; }
        //                    default: { success = false; break; }
        //                }
        //            }
        //            else {
        //                success = false;
        //                iText_Exceed_Type = "W";
        //            }
        //        }
        //    }

        if (!validateHeight(TA, destinationObj)) {
            if (event != null) {
                switch (event.keyCode) {
                    case 13: { success = false; iText_Exceed_Type = "H"; }
                    default: { break; }
                }
            }
            else {
                success = false;
                iText_Exceed_Type = "H";
            }
        }

        return success;
    }

    function mirror(source, destination, event) {
        var kisses_string = "xxxxxxxxxx";
        var sourceObj = getObject(source);//alert(destination);
        var destinationObjHidden = getObject(destination + '_hidden');
        var destinationObj = getObject(destination);
        sourceObj.value = sourceObj.value.replace(/xxxxxxxxxx/g, "x").replace(/XXXXXXXXXX/g, "X");
        // Put the source content to necessary hidden field and use it for fill div
        destinationObjHidden.value = removeBadWord(sourceObj.value);
        destinationObj.innerHTML = LoadSignature($.fn.convertintoimage(getPageHtmlFromTextArea(destinationObjHidden.value)), false);
        //$("#" + destination).emotions();
        $("#div_warning").html("");
        $('.cardInsideDivHighlighter').removeClass('warning_border');
    }

    function validateWidth(source, destinationObj) {
        if (destinationObj.offsetWidth < getHorizontalWidth(source, destinationObj)) { return false; }
        return true;
    }

    function validateHeight(source, destinationObj) {
        //console.log('Des - ' + destinationObj.offsetHeight);
        //console.log('Sou - ' + getVerticalWidth(source, destinationObj));
        //if (destinationObj.offsetHeight < getVerticalWidth(source, destinationObj)) { return false; }
        return true;
    }

    function getHorizontalWidth(source, destinationObj) {
        var divNitinz = document.getElementById('tempSizeMesureDiv');
        divNitinz.style.display = 'inline';

        // Note : For autowrap change we have to set comparing temp dive width same as destination template div.
        // Which will make both dive auto wrap in same locations.
        divNitinz.setAttribute("style", "width:" + destinationObj.offsetWidth + "px");

        divNitinz.innerHTML = $.fn.convertintoimage(getPageHtmlFromTextArea(source));
        var txtWidth = divNitinz.offsetWidth + 15;
        txtWidth = $("#tempSizeMesureDiv").find('cj:first').width();
        txtWidth = parseInt(txtWidth) - 50;
        divNitinz.style.display = 'none';
        return parseInt(txtWidth);
    }

    function getVerticalWidth(source, destinationObj) {
        var divNitinz = document.getElementById('tempSizeMesureDiv');
        divNitinz.style.display = 'inline';

        // Note : For autowrap change we have to set comparing temp dive width same as destination template div.
        // Which will make both dive auto wrap in same locations.
        divNitinz.setAttribute("style", "width:" + (parseInt(destinationObj.offsetWidth)-25) + "px");
        //divNitinz.setAttribute("style","border:1px solid #000");
        divNitinz.innerHTML = $.fn.convertintoimage(getPageHtmlFromTextArea(source));
//        var txtHeight = divNitinz.offsetHeight + 20;
//        divNitinz.style.display = 'none';
//        return txtHeight;
        
        var txtHeight = 0;
        //console.log(BrowserDetect.OS);
        if(BrowserDetect.OS == "an unknown OS" || BrowserDetect.OS == "iPhone/iPod") {
            txtHeight = divNitinz.offsetHeight + 20;
        }
        else if(BrowserDetect.OS == "Mac")
        {
            txtHeight = divNitinz.offsetHeight + 40;
        }
        else if(BrowserDetect.browser == "Explorer")
        {
            txtHeight = divNitinz.offsetHeight + 40;
        }   
        else {
            txtHeight = divNitinz.offsetHeight + 20;
        }       
        divNitinz.style.display = 'none';        
        return txtHeight;        
    }

    function getObject(obj) {
        var theObj;
        if (document.all) {
            if (typeof obj == "string") {
                return document.all(obj);
            } else {
                return obj.style;
            }
        }
        if (document.getElementById) {
            if (typeof obj == "string") {
                return document.getElementById(obj);
            } else {
                return obj.style;
            }
        }
        return null;
    }

    function cardinside_text_control_emotionselect(selected) {
        var simble = $.fn.emotionselected(selected);
        var sourceObj = getObject(iToolbar_source_control_name);
        var original_content = sourceObj.value;
        var new_content = original_content + ' ' + simble + ' ';

        sourceObj.value = new_content;
        domirror();
    }

    function cardinside_text_control_imageselect(url) {
        var image_tag = '<img src="' + url + '">';
        var sourceObj = getObject(iToolbar_source_control_name);
        var original_content = sourceObj.value;
        var new_content = original_content.replace(iCommontag_for_signature, "") + image_tag;

        sourceObj.value = new_content;
        if (domirror()) {
            UpdateSignatureList(url);
            new_content = new_content.replace(image_tag, iCommontag_for_signature);
            sourceObj.value = new_content;
        }
    }

    function UpdateSignatureList(url) {
        var sSig = '';
        var n_sSig = '';
        var current_active_signature_list_control = '';
        var page = $("#" + $('#current_activate_cardpage_controlename').val()).val();

        switch (page) {
            case "2": { current_active_signature_list_control = 'ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_2'; break; }
            case "3": { current_active_signature_list_control = 'ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_3'; break; }
            default: { break; }
        }

        sSig = $("#" + current_active_signature_list_control).val();

        if (sSig.length > 0) {
            var t_arr = sSig.split(",");
            var i_s = '';
            for (i = 0; i < t_arr.length; i++) {
                if (t_arr[i].length > 0) {
                    i_s = t_arr[i].substring(0, t_arr[i].indexOf('='));
                    if (i_s.indexOf(iToolbar_destination_control_name) > -1) {
                        n_sSig += iToolbar_destination_control_name + "=" + url + ",";
                    }
                    else {
                        n_sSig += t_arr[i] + ",";
                    }
                }
            }

            $("#" + current_active_signature_list_control).val(n_sSig);
        }
    }

    function LoadSignature(input, isBack) {
        var sSig = '';
        var n_sSig = '';
        var current_active_signature_list_control = '';
        var page = $("#" + $('#current_activate_cardpage_controlename').val()).val();

        switch (page) {
            case "2": { current_active_signature_list_control = 'ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_2'; break; }
            case "3": { current_active_signature_list_control = 'ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_hidden_signature_list_3'; break; }
            default: { break; }
        }

        sSig = $("#" + current_active_signature_list_control).val();

        if (sSig != undefined) {
            var t_arr = sSig.split(",");
            var i_s = '';
            var i_u = '';
            var image_tag = '';
            for (i = 0; i < t_arr.length; i++) {
                if (t_arr[i].length > 0) {
                    i_s = t_arr[i].substring(0, t_arr[i].indexOf('='));
                    if (i_s.indexOf(iToolbar_destination_control_name) > -1) {
                        i_u = '';
                        if (t_arr[i].length - 1 > t_arr[i].indexOf('=')) {
                            i_u = t_arr[i].substring(t_arr[i].indexOf('=') + 1, t_arr[i].length);
                            image_tag = '<img src="' + i_u + '">';
                            if (isBack) {
                                input = input.replace(image_tag, iCommontag_for_signature);
                            }
                            else {
                                if (input.indexOf(iCommontag_for_signature) > -1) {
                                    input = input.replace(iCommontag_for_signature, image_tag);
                                } else {
                                    i_u = '';
                                }
                            }
                        }

                        n_sSig += iToolbar_destination_control_name + "=" + i_u + ",";
                    }
                    else {
                        n_sSig += t_arr[i] + ",";
                    }
                }
            }

            $("#" + current_active_signature_list_control).val(n_sSig);
        }

        return input;
    }

    function AddthisVers(vers) {
        $("#" + iToolbar_destination_control_name).html($("#" + vers).html())
        $("#" + iToolbar_source_control_name).val(getPageText($.fn.convertbackintotag($("#" + iToolbar_destination_control_name).html())));
        SetEditor($("#" + iToolbar_destination_control_name).html());
    }

    function LoadVerses() {
        if ($("#hidden_is_load_verses").val() != "1") {
            var active_product;
            var active_page;
            var vHtml;

            active_product = $("#" + $("#hidden_active_product_controlname").val()).val();
            active_page = $("#" + $("#current_activate_cardpage_controlename").val()).val();

            vHtml = "";

            $.ajax({
                type: "POST",
                url: "newFlow_Verses.aspx",
                data: { ActivePage: active_page, ActiveProduct: active_product },
                dataType: "html",
                success: function(theResponse) {
                    vHtml = theResponse;
                    $("#photolistvr").html('<ul class="thumbs noscript thumbs_vr">' + vHtml + '</ul><div class="clear"></div>');
                    makesortable();
                    initializeImageSliders(2);
                    $("#hidden_is_load_verses").val("1");
                }
            });
        }
    }

    function ClearVerses() {
        $("#hidden_is_load_verses").val("0");
        $("#photolistvr").html('<div style="padding:30%"><img src="/assets/dist/images/loading.gif" width="80px;" height="80px;" /></div>');
    }
	
    String.prototype.replaceAll = function(replace, replacewith) {
        var reg = new RegExp(replace, 'ig');
        return this.replace(reg, replacewith);
    };
    /*****************************************************************************************************************************************************************************
    EDITER RELATED SCRIPT START
    ******************************************************************************************************************************************************************************/


    $('.inside_bound').click(function() {
        $('.inside_bound').removeClass('bound_active');
        $(this).addClass('bound_active');
    });

    $('#' + iToolbar_source_control_name).click(function() {
        $(this).addClass('control_textarea_active');
    });

    $('.menu_mini li').click(function() {
        $('.tab_container#common_personalize_textupdater').addClass('active_mini');
    });

    $('.menu li#image_customize_standard').click(function() {
        $('.tab_container#common_personalize_textupdater').removeClass('active_mini');
    });

    $(document).ready(function() {
        $("#ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeTextUpdate1_div_emotion_selecter").emotions();
        //InitializeFontSizeSlider();
        //SetToDefault();
        $('#iToolbar_fontname_live').ddslick();
    });         
</script>