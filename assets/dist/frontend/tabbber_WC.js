$(document).ready(function() {
    $(".menu > li").click(function(e) {
        switch (e.target.id) {
            case "upload_from_mycomputer":
                $("#current_activate_thumb_slide").val($("#photolistmc_name").val());
                $("#current_activate_imagepanel").val("thumbs_mc");

                //change status & style menu
                $("#upload_from_mycomputer").addClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_mycomputer").fadeIn();
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");               

                Custom_Initialize_UploadMyComputer_Slider();

                // Function will check whether user has already upload images, if not directly open image upload popup.
                CheckAndAutoloadMyComputerPUpopup();

                break;
            case "upload_from_library":
                $("#current_activate_thumb_slide").val($("#photolistml_name").val());
                $("#current_activate_imagepanel").val("thumbs_ml");

                //change status & style menu
                $("#upload_from_library").addClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_library").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");

                // Remove this when make this dynamic
                //                initializeImageSliders(6);
                //                makesortable();
                Custom_Initialize_UploadMyLibrary_Slider();
                break;
            case "upload_from_facebook":
                $("#current_activate_thumb_slide").val("photolistfb");
                $("#current_activate_imagepanel").val("thumbs_fb");

                //change status & style menu
                $("#upload_from_facebook").addClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_facebook").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");

                break;
            case "upload_from_flickr":
                $("#current_activate_thumb_slide").val("photolistfl");
                $("#current_activate_imagepanel").val("thumbs_fl");

                //change status & style menu
                $("#upload_from_flickr").addClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_flickr").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");

                // Remove this when make this dynamic
                initializeImageSliders(6);
                makesortable();
                break;
            case "upload_from_instagram":
                $("#current_activate_thumb_slide").val("photolistinstagram");
                $("#current_activate_imagepanel").val("thumbs_instagram");

                //change status & style menu
                $("#upload_from_instagram").addClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_flickr").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_instagram").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");

                // Remove this when make this dynamic
                initializeImageSliders(6);
                makesortable();
                break;

            //------------------------------------------------------------------------------- 
            case "image_customize_standard":
                $("#selected_imagecustomization_tab").val("S");
                hideAllSubMiniTabs_ImageCustomize(true);

                $("#image_customize_standard").addClass("active");
                $("#image_customize_advanced").removeClass("active");

                $("#personalize_image_customize_controls_advance").css("display", "none");

                $("div.image_customize_standard").fadeIn();
                break;

            case "image_customize_advanced":
                $("#selected_imagecustomization_tab").val("A");
                hideAllSubMiniTabs_ImageCustomize(false);

                $("#image_customize_advanced").addClass("active");
                $("#image_customize_standard").removeClass("active");

                $("#image_customize_advanced_effects").css("display", "block");
                $("#image_customize_advanced_enhance").css("display", "block");
                $("#image_customize_advanced_morph").css("display", "block");

                $("#personalize_image_customize_controls_advance").fadeIn();
                $("div.image_customize_standard").fadeIn();
                break;

            //------------------------------------------------------------------------------    
            case "cardinside_standard":
                $("#current_activate_thumb_slide").val("thumb_slide_cardinside_standars");
                $("#current_activate_imagepanel").val("thumbs_cardinside_standars");

                $("#cardinside_standard").addClass("active");
                $("#cardinside_advanced").removeClass("active");

                $("div.cardinside_standard").fadeIn();
                $("div.cardinside_advanced").css("display", "none");

                $("#" + $("#cardinside_tab_controlname").val()).val("S");
                
                initializeImageSliders(3);
                break;

            case "cardinside_advanced":
//                $("#current_activate_thumb_slide").val("thumb_slide_cardinside_advanced");
//                $("#current_activate_imagepanel").val("thumbs_cardinside_advanced");

//                $("#cardinside_advanced").addClass("active");
//                $("#cardinside_standard").removeClass("active");

//                $("div.cardinside_advanced").fadeIn();
//                $("div.cardinside_standard").css("display", "none");

//                $("#" + $("#cardinside_tab_controlname").val()).val("A");
//                initializeImageSliders(6);
                break;

            case "text_customize_standard":
                $("#texteditor_selected_tab").val("");
                hideAllSubMiniTabs_CardInsideText(true);
                $("#text_customize_standard").addClass("active");
                $("#text_customize_advanced").removeClass("active");

                $("#cardinside_text_controls_advance").css("display", "none");

                $("div.text_customize_standard").fadeIn();
                break;

            case "text_customize_advanced":
                $("#texteditor_selected_tab").val("A");
                hideAllSubMiniTabs_CardInsideText(true);
                $("#text_customize_advanced").addClass("active");
                $("#text_customize_standard").removeClass("active");

                $("#text_customize_advanced_verses").css("display", "block");
                $("#text_customize_advanced_smilieys").css("display", "block");
                $("#text_customize_advanced_signatures").css("display", "block");

                $("#cardinside_text_controls_advance").fadeIn();
                $("div.text_customize_standard").fadeIn();
                break;

        }
        //alert(e.target.id);

        return false;
    });

    $(".menu_mini > li").click(function(e) {
        $("#image_customize_advanced").removeClass("active");
        $("#text_customize_advanced").removeClass("active");

        switch (e.target.id) {
            case "image_customize_advanced_effects":
                $("#image_customize_advanced_effects").addClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_advanced_effects").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;

            case "image_customize_advanced_enhance":
                $("#image_customize_advanced_enhance").addClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_advanced_enhance").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;

            case "image_customize_advanced_morph":
                $("#image_customize_advanced_morph").addClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");

                $("div.image_customize_advanced_morph").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                break;

            case "text_customize_advanced_verses":
                $("#current_activate_thumb_slide").val("photolistvr");
                $("#current_activate_imagepanel").val("thumbs_vr");

                $("#text_customize_advanced_verses").addClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("div.text_customize_advanced_verses").fadeIn();
                $("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");

                LoadVerses();
                break;

            case "text_customize_advanced_smilieys":
                $("#text_customize_advanced_smilieys").addClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("div.text_customize_advanced_smilieys").fadeIn();
                $("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");
                break;

            case "text_customize_advanced_signatures":
                $("#current_activate_thumb_slide").val($("#photolistsg_name").val());
                $("#current_activate_imagepanel").val("thumbs_sg");

                $("#text_customize_advanced_signatures").addClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");

                $("div.text_customize_advanced_signatures").fadeIn();
                $("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");

                initializeImageSliders(6);
                makesortable();
                break;

        }
        //alert(e.target.id);
        //initializeImageSliders();
        return false;
    });
});

function hideAllSubMiniTabs_ImageCustomize(hidetabmenu) {
    if (hidetabmenu) {
        $("#image_customize_advanced_effects").css("display", "none");
        $("#image_customize_advanced_enhance").css("display", "none");
        $("#image_customize_advanced_morph").css("display", "none");
    }

    $("#image_customize_advanced_effects").removeClass("active");
    $("#image_customize_advanced_enhance").removeClass("active");
    $("#image_customize_advanced_morph").removeClass("active");

    $("div.image_customize_advanced_effects").css("display", "none");
    $("div.image_customize_advanced_enhance").css("display", "none");
    $("div.image_customize_advanced_morph").css("display", "none");
}

function hideAllSubMiniTabs_CardInsideText(hidetabmenu) {
    if (hidetabmenu) {
        $("#text_customize_advanced_verses").css("display", "none");
        $("#text_customize_advanced_smilieys").css("display", "none");
        $("#text_customize_advanced_signatures").css("display", "none");
    }

    $("#text_customize_advanced_verses").removeClass("active");
    $("#text_customize_advanced_smilieys").removeClass("active");
    $("#text_customize_advanced_signatures").removeClass("active");

    $("div.text_customize_advanced_verses").css("display", "none");
    $("div.text_customize_advanced_smilieys").css("display", "none");
    $("div.text_customize_advanced_signatures").css("display", "none");
}

function loadPersonalizeImageCustomizeBackTabHandle() {
    $("#common_personalize_imagecustomize").css("display", "none");
    switch ($("#current_activate_imagepanel").val()) {
        case "thumbs_mc":
            {
                loadPersonalizeImageUploader(1);
                break;
            }
        case "thumbs_ml":
            {
                loadPersonalizeImageUploader(2);
                break;
            }
        case "thumbs_fb":
            {
                loadPersonalizeImageUploader(3);
                break;
            }
        case "thumbs_fl":
            {
                loadPersonalizeImageUploader(4);
                break;
            }
    }
}

function loadPersonalizeImageUploaderTabHandle(val) {
    
    switch (val) {
        case 1:
            {

                $("#current_activate_thumb_slide").val($("#photolistmc_name").val());
                $("#current_activate_imagepanel").val("thumbs_mc");

                $("#upload_from_mycomputer").addClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_mycomputer").fadeIn();
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");
                Custom_Initialize_UploadMyComputer_Slider();
                // Function will check whether user has already upload images, if not directly open image upload popup.
                CheckAndAutoloadMyComputerPUpopup();
                break;
            }
        case 2:
            {
                $("#current_activate_thumb_slide").val($("#photolistml_name").val());
                $("#current_activate_imagepanel").val("thumbs_ml");

                $("#upload_from_library").addClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_library").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");

                // Remove this when make this dynamic
                //                initializeImageSliders(6);
                //                makesortable();
                Custom_Initialize_UploadMyLibrary_Slider();

                break;
            }
        case 3:
            {
                $("#current_activate_thumb_slide").val("photolistfb");
                $("#current_activate_imagepanel").val("thumbs_fb");

                $("#upload_from_facebook").addClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_flickr").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_facebook").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");
                break;
            }
        case 4:
            {
                $("#current_activate_thumb_slide").val("photolistfl");
                $("#current_activate_imagepanel").val("thumbs_fl");

                //change status & style menu
                $("#upload_from_flickr").addClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_instagram").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_flickr").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_instagram").css("display", "none");
                break;
            }
        case 5:
            {
                $("#current_activate_thumb_slide").val("photolistinstagram");
                $("#current_activate_imagepanel").val("thumbs_instagram");

                //change status & style menu
                $("#upload_from_instagram").addClass("active");
                $("#upload_from_facebook").removeClass("active");
                $("#upload_from_mycomputer").removeClass("active");
                $("#upload_from_library").removeClass("active");
                $("#upload_from_flickr").removeClass("active");

                //display selected division, hide others
                $("div.upload_from_instagram").fadeIn();
                $("div.upload_from_mycomputer").css("display", "none");
                $("div.upload_from_library").css("display", "none");
                $("div.upload_from_facebook").css("display", "none");
                $("div.upload_from_flickr").css("display", "none");
                break;
            }
    }

    //initializeImageSliders(6);
}

function loadCardinsideTabHandle(val, page) {
    FillTemplate(page); // Call the function which fill selected page related available templates.
    switch (val) {
        case 1: // Standard
            {
                $("#current_activate_thumb_slide").val("thumb_slide_cardinside_standars");
                $("#current_activate_imagepanel").val("thumbs_cardinside_standars");

                $("#cardinside_standard").addClass("active");
                $("#cardinside_advanced").removeClass("active");
                $("div.cardinside_standard").fadeIn();
                $("div.cardinside_advanced").css("display", "none");
                initializeImageSliders(3);

                break;
            }
        case 2: // Advanced
            {
                $("#current_activate_thumb_slide").val("thumb_slide_cardinside_advanced");
                $("#current_activate_imagepanel").val("thumbs_cardinside_advanced");

                $("#cardinside_advanced").addClass("active");
                $("#cardinside_standard").removeClass("active");
                $("div.cardinside_advanced").fadeIn();
                $("div.cardinside_standard").css("display", "none");

                initializeImageSliders(6);
                break;
            }
    }
}

//function loadPersonalizeImageCustomizeTabHandle(val) {
//    hideAllSubMiniTabs_ImageCustomize(true);
//    $("#common_personalize_imageuploader").css("display", "none");
//    $("#common_personalize_imagecustomize").fadeIn();

//    switch (val) {
//        case 5:
//            {
//                $("#image_customize_standard").addClass("active");
//                $("#image_customize_advanced").removeClass("active");

//                $("div.image_customize_standard").fadeIn();
//                $("div.image_customize_advanced").css("display", "none");
//                break;
//            }
//        case 6:
//            {
//                $("#image_customize_advanced").addClass("active");
//                $("#image_customize_standard").removeClass("active");

//                $("div.image_customize_advanced").fadeIn();
//                $("div.image_customize_standard").css("display", "none");
//                break;
//            }
//    }
//}

function loadPersonalizeImageCustomizeTabHandle(val) {
    hideAllSubMiniTabs_ImageCustomize(true);
    //$("#common_personalize_imageuploader").css("display", "none");
    $("#common_personalize_imagecustomize").fadeIn();

    switch (val) {
        case 1:
            {
                $("#image_customize_standard").addClass("active");
                $("#image_customize_advanced").removeClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_standard").fadeIn();
                $("div.image_customize_advanced").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;
            }
        case 2:
            {
                $("#image_customize_advanced_effects").css("display", "block");
                $("#image_customize_advanced_enhance").css("display", "block");
                $("#image_customize_advanced_morph").css("display", "block");

                $("#image_customize_advanced").addClass("active");
                $("#image_customize_standard").removeClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_standard").fadeIn();
                $("#personalize_image_customize_controls_advance").fadeIn();
                //$("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;
            }
        case 3: // Effects
            {
                $("#image_customize_advanced_effects").css("display", "block");
                $("#image_customize_advanced_enhance").css("display", "block");
                $("#image_customize_advanced_morph").css("display", "block");

                $("#image_customize_advanced_effects").addClass("active");
                $("#image_customize_standard").removeClass("active");
                $("#image_customize_advanced").removeClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_advanced_effects").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;
            }
        case 4: // Enhance
            {
                $("#image_customize_advanced_effects").css("display", "block");
                $("#image_customize_advanced_enhance").css("display", "block");
                $("#image_customize_advanced_morph").css("display", "block");

                $("#image_customize_advanced_enhance").addClass("active");
                $("#image_customize_standard").removeClass("active");
                $("#image_customize_advanced").removeClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_morph").removeClass("active");

                $("div.image_customize_advanced_enhance").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_morph").css("display", "none");
                break;
            }
        case 5: // Morph
            {
                $("#image_customize_advanced_effects").css("display", "block");
                $("#image_customize_advanced_enhance").css("display", "block");
                $("#image_customize_advanced_morph").css("display", "block");

                $("#image_customize_advanced_morph").addClass("active");
                $("#image_customize_standard").removeClass("active");
                $("#image_customize_advanced").removeClass("active");
                $("#image_customize_advanced_effects").removeClass("active");
                $("#image_customize_advanced_enhance").removeClass("active");

                $("div.image_customize_advanced_morph").fadeIn();
                $("div.image_customize_standard").css("display", "none");
                $("div.image_customize_advanced_effects").css("display", "none");
                $("div.image_customize_advanced_enhance").css("display", "none");
                break;
            }
    }
}

function loadPersonalizeTextCustomizeTabHandle(val) {
    hideAllSubMiniTabs_CardInsideText(true);
    $("#main_tab_inside").css("display", "none");
    $("#common_personalize_textupdater").fadeIn();    
    $("#cardinside_text_control_textarea").css("display", "none");
    
    switch (val) {
        case 1: // Standard
            {
                $("#text_customize_standard").addClass("active");
                $("#text_customize_advanced").removeClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("#cardinside_text_controls_advance").css("display", "none");

                $("div.text_customize_standard").fadeIn();
                $("#cardinside_text_control_textarea").fadeIn();
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");
                break;
            }
        case 2: // Verses
            {
                $("#current_activate_thumb_slide").val("photolistvr");
                $("#current_activate_imagepanel").val("thumbs_vr");

                $("#text_customize_advanced_verses").css("display", "block");
                $("#text_customize_advanced_smilieys").css("display", "block");
                $("#text_customize_advanced_signatures").css("display", "block");

                $("#text_customize_advanced_verses").addClass("active");
                $("#text_customize_standard").removeClass("active");
                $("#text_customize_advanced").removeClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("div.text_customize_advanced_verses").fadeIn();
                //$("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");

                LoadVerses();
                break;
            }
        case 3: // Smilieys
            {
                $("#text_customize_advanced_verses").css("display", "block");
                $("#text_customize_advanced_smilieys").css("display", "block");
                $("#text_customize_advanced_signatures").css("display", "block");

                $("#text_customize_advanced_smilieys").addClass("active");
                $("#text_customize_standard").removeClass("active");
                $("#text_customize_advanced").removeClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("div.text_customize_advanced_smilieys").fadeIn();
                //$("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");
                break;
            }
        case 4: // Signatures
            {
                $("#current_activate_thumb_slide").val($("#photolistsg_name").val());
                $("#current_activate_imagepanel").val("thumbs_sg");

                $("#text_customize_advanced_verses").css("display", "block");
                $("#text_customize_advanced_smilieys").css("display", "block");
                $("#text_customize_advanced_signatures").css("display", "block");

                $("#text_customize_advanced_signatures").addClass("active");
                $("#text_customize_standard").removeClass("active");
                $("#text_customize_advanced").removeClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");

                $("div.text_customize_advanced_signatures").fadeIn();
                //$("div.text_customize_standard").css("display", "none");
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");

                initializeImageSliders(6);
                makesortable();

                break;
            }
        case 5: // Advance
            {
                $("#text_customize_advanced_verses").css("display", "block");
                $("#text_customize_advanced_smilieys").css("display", "block");
                $("#text_customize_advanced_signatures").css("display", "block");

                $("#text_customize_advanced").addClass("active");
                $("#text_customize_standard").removeClass("active");
                $("#text_customize_advanced_verses").removeClass("active");
                $("#text_customize_advanced_smilieys").removeClass("active");
                $("#text_customize_advanced_signatures").removeClass("active");

                $("div.text_customize_standard").fadeIn();
                $("div.text_customize_advanced_verses").css("display", "none");
                $("div.text_customize_advanced_smilieys").css("display", "none");
                $("div.text_customize_advanced_signatures").css("display", "none");
                break;
            }
    }
}

function loadPersonalizeTextCustomizeBackTabHandle() {
    $("#common_personalize_textupdater").css("display", "none");
    $("#cardinside_text_control_textarea").css("display", "none");
    $("#main_tab_inside").fadeIn();
}
