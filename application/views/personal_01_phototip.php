<!-- PHOTO TIPS -->
<div id="photo_tips">
    <div class="popup_container">
        <h3>Photo Tips</h3>
        <div class="close_photo_tips"></div>
        <p class="tips_line">Here are a few tips to help you create the best possible products.</p>
        <ul class="tips_nav">
            <li id="photo_quality" class="active">Photo Quality</li>
            <li id="photo_size">Photo Size</li>
            <li id="zooming_in">Zooming In</li>
            <li id="dark_images">Dark Images</li>
        </ul>
        <div class="photo_tips_content">
            <!-- Photo Quality -->
            <div class="section_photo_quality active_section">
                <!-- Scroll for more tab -->
                <div class="scroll_for_more">Scroll for more <img src="/assets/dist/images/scroll_down_arrow.png"></div>
                <p class="cross">Don’t use a screenshot.</p>
                <img src="/assets/dist/images/photo_quality_1.jpg">
                <div class="bg_grey">
                    <p class="tick">Always use the original photo where possible.</p>
                    <p class="cross">Don’t use a thumbnail.</p>
                    <img src="/assets/dist/images/photo_quality_2.jpg">
                </div>
                <div class="photo_social clearfix">
                    <p><img class="left" src="/assets/dist/images/photo_quality_facebook.jpg"><b>Facebook photos can be very poor quality.</b> Always save Photo from Facebook and then re-upload the photo from your computer or mobile device.</p>
                </div>
                <div class="bg_grey photo_social clearfix">
                    <p><img class="right" src="/assets/dist/images/photo_quality_whatsapp.png"><b>WhatsApp Images</b> WhatsApp images sent to you by other people are very poor quality. If possible, ask for the original image to be sent via e-mail to ensure the quality is retained.</p>
                </div>
                <p class="cross">Don’t use a photo of another photo - always try to use an original photo</p>
                <img src="/assets/dist/images/photo_quality_3.jpg">
            </div>
            <!-- Photo Size -->
            <div class="section_photo_size">
                <ul>
                    <li><p>The maximum size photo that can be uploaded is <b>20Mb</b>.</p></li>
                    <li><p>To check the size of your image if on your computer, just move your mouse over the photo and right click. If you’re using <b>Windows</b> you’ll find the size under ‘<b>Properties</b>’. <b>MacOS (Apple)</b> users can find the same information under ‘<b>Show Info</b>’.</p></li>
                    <li><p>The photo needs to be a <b>JPG</b> format.</p></li>
                </ul>
            </div>
            <!-- Zooming In -->
            <div class="section_zooming_in">
                <p class="cross"><b>Don’t zoom in too far on a photo</b> - this will reduce the quality of the photo.</p>
                <img src="/assets/dist/images/zooming_in_1.jpg">
            </div>
            <!-- Dark Images -->
            <div class="section_dark_images">
                <ul>
                    <li><p>Please be aware that backgrounds in photos will affect the quality of the printed product eg. Bright lights, windows.</p></li>
                    <li><p>Photos taken at night or in a dark room with a flash will also reduce the quality of the finished product.</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    //TABS
    $('.tips_nav li').click(function () {
        var selectedSection = $(this).attr('id');

        $('.tips_nav li').removeClass();
        $(this).addClass('active');

        $('.photo_tips_content div').removeClass('active_section');
        $('.section_' + selectedSection).addClass('active_section');

    });

    //CLOSE
    $('.close_photo_tips').click(function () {
        $('#photo_tips').fadeOut(200);

        //IF HELP SECTION
        if ($('#photo_tips').hasClass('help_section')) {
            $('#photo_tips').removeClass('help_section');
            $('#photo_tips .popup_container h3').html('Photo Tips');
        }

    });

    //GENERAL OPEN FUNCTION
    function openPhotoTips() {
        $('#photo_tips').fadeIn(200);
    }

    //HELP OPEN FUNCTION
    function openPhotoTipsHelp() {
        $('#photo_tips').fadeIn(200);
        $('#photo_tips').addClass('help_section');
        $('#photo_tips .popup_container h3').html('Help');
    }

    //OPEN QUALITY SECTION
    function openPhotoTipsQuality() {
        openPhotoTips();
        $('#photo_quality').trigger('click');
        //console.log('Quality Section');
    }

    //OPEN SIZE SECTION
    function openPhotoTipsSize() {
        openPhotoTips();
        $('#photo_size').trigger('click');
        //console.log('Size Section');
    }

    //OPEN ZOOM SECTION
    function openPhotoTipsZoom() {
        openPhotoTips();
        $('#zooming_in').trigger('click');
        //console.log('quality clicked');
    }
    //OPEN DARK SECTION
    function openPhotoTipsDark() {
        openPhotoTips();
        $('#dark_images').trigger('click');
        //console.log('quality clicked');
    }

    //FADE IN/OUT SCROLL MESSAGE
    $('.photo_tips_content').scroll(function () {
        var height = $('.photo_tips_content').scrollTop();
        if (height > 200) {
            $('.scroll_for_more').fadeOut(300);
        } else {
            $('.scroll_for_more').fadeIn(300);
        }
    });

</script>