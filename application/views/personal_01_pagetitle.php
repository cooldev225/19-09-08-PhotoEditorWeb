<!-- PAGE TITLE AND BUTTON SPACE -->
<div class="page_title_wrapper">
    <h1 class="left" itemprop="name">
        <?php echo $data['photo_product_row']['titles'];?>
    </h1>
    <div class="trustpilot-widget left" data-locale="en-GB" data-template-id="577258fb31f02306e4e3aaf9" data-businessunit-id="4bedb38600006400050ba480" data-style-height="24px" data-style-width="220px" data-theme="light" data-sku="134377" style="position: relative;">
    	<iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/577258fb31f02306e4e3aaf9/index.html?templateId=577258fb31f02306e4e3aaf9&amp;businessunitId=4bedb38600006400050ba480#locale=en-GB&amp;styleHeight=24px&amp;styleWidth=220px&amp;theme=light&amp;sku=134377" style="position: relative; height: 24px; width: 220px; border-style: none; display: block; overflow: hidden;"></iframe></div>
    <div class="right">
        <input type="submit" name="ctl00$ContentPlaceHolder1$CardFlow1$btnAddToFavorite" value="Add to Favourites" id="ctl00_ContentPlaceHolder1_CardFlow1_btnAddToFavorite" class="btn_addToFavourites">
        
    </div>

    <!-- SAVE BUTTON -->
    <div id="ctl00_ContentPlaceHolder1_CardFlow1_div_save_me" class="right">
        <input type="button" id="btnSaveMe" value="Save" name="btnSaveMe" onclick="javascript:saveme();" class="btn_SaveProduct">

        <!-- SAVE BUTTON ROLLOVER INFO-->
        <div class="saveMe_info">
            <div class="saveMe_info_arrow"></div>
            <p>You can now save your Card if you’re running out of time! Once saved you can access your Card in the <strong>My Account</strong> section (you need to be registered and logged in first).</p>
        </div>
    </div>
</div>