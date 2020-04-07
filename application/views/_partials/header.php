<style>
.navbar {
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5050;
    background-color: #fafafb;
    transition: box-shadow cubic-bezier(.165, .84, .44, 1) .25s;
    height: 95px;
    box-sizing: border-box;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
    border-top: 3px solid #F48024;
}
.navbar-fixed-top {
    position: fixed;
    min-width: auto;
    box-shadow: 0 1px 0 rgba(12,13,14,0.1), 0 1px 6px rgba(59,64,69,0.1);
}
.logo-nav{
    position: absolute;
    display: inline-block;
    margin: -23px 0px 0px 0px;
}
.logo-icon-nav{
    width: 205px;
    margin-top: 3px;
}
.search-nav{
    position: absolute;
    margin: 6px 0px 0px 93px;
    width: 42%;
    display: inline-block;
    box-shadow: 0 0 black;
}

.search-icon-nav{
    position: absolute;
        margin-left: 219px;
    margin-top: 15px;
    display: inline-block;
}
.search-nav input{
    width: 81%;
    margin-left: 148px;
    background: 0 0;
    text-indent: 0;
    font-size: 22px;
    height: 40px;
    margin-bottom: -10px;
    border: none;
    outline: none;
}
.search-nav input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #eb8549;
  opacity: 0.2; /* Firefox */
}
.search-nav:after {
    content: '';
    width: 100%;
    height: 2px;
    display: block;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(-90deg,#dc5683,#f4b6e3 53%,#f4802552 89%);
}
.lang-nav{
    position:absolute;
    margin: 30px 0px 0px 6px;
    width: 208px;
    display: inline-block;
}
.navbar-collapse.collapse{
    position:sticky;
    margin: 29px 0px 0px 194px;
    font-size: 15px;
    text-align: center;
    border-bottom: 1px solid #dfdfdf;
    height: auto;
    padding-top: 2px;
}
.menu-nav{
        background: 0 0;
    width: 994px;
    max-width: 1440px;
    max-width: 994px;
    height: 40px;
    display: inline-block;
    padding: 0;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}
.menu-nav li{
    display: inline-block;
    float: none;
    list-style: none;
}
.menu-nav li a {
    height: auto;
    color: #000;
    font-family: Arial;
    font-size: 16px;
    font-weight: 700;
    line-height: 47px;
    padding: 0;
    padding: 0;
    margin: 0 6px;
    text-align: center;
    border-bottom: 3px solid transparent;
}
.container, .container-fluid {
    padding-right: 0px; 
    padding-left: 0px; 
}
.menu-nav li a:hover, .menu-nav li.active a.TNLink,.menu-nav li:hover a.TNLink {
    background: 0 0;
    border-bottom: 3px solid #ba2734;
    color: #c63f5b;
    text-decoration: none;
    padding-bottom: 5px;
}

.btn_register, .btn_register a, .middleOr {
    height: 16px;
    line-height: 16px;
}
#ctl00_uclHeader1_linkLoadReminder, .btn_register, .hat_link, .hat_link+li {
    margin-top: 10px;
}

.btn_register {
    position: relative;
}
.btn_register,  .ntn_list{
    float: right;
}
.left{float:left;}
.right{float:right;}
.ntn_list li {
    border: none;
    height: auto;
    float: left;
    cursor: pointer;
}
.new_search_submit input, .ntn_list .notification_holder, .ntn_list_myshortlist {
    display: none!important;
}
.ntn_list_myshortlist {
    padding: 0 6px;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.ntn_list, .ntn_list a, .ntn_list li.non_purple_hover:hover a, .ntn_list li.non_purple_hover:hover span {
    color: #717072;
}
.ntn_list {
    margin: 0;
    padding: 0;
    list-style: none;
    display: block;
}
.notification_holder .notification {
    width: 17px;
    height: 16px;
    padding-top: 1px;
    background: #e31c23;
    border-radius: 50%;
    color: #fff;
    font-family: Arial,sans-serif,Helvetica,sans-serif;
    font-size: 12px;
    text-align: center;
    vertical-align: middle;
    line-height: 15px;
    opacity: 1!important;
    margin: 9px 4px 0 4px;
}
.btn_register, .btn_register a, .middleOr {
    height: 16px;
    line-height: 16px;
}

.btn_register a, .middleOr {
    padding-right: 6px;
    float: left;
}
.btn_register a {
    width: auto;
    border: none;
    background: 0 0;
    height: auto;
    color: #203750;
    font-weight: 700;
    cursor: pointer;
}
.ntn_list a {
    text-decoration: none;
    padding: 0 6px;
    /* height: 37px; */
}
.flag {
    width: auto;
    display: inline-block;
    height: 23px;
    padding: 9px 6px 5px 6px;
}
.ntn_list li.hat_link {
    border-left: 1px solid #dfdfdf;
    border-right: 1px solid #dfdfdf;
}

.flag img {
    width: 23px;
}
a img, img {
    border: 0;
}
.ntn_list li #flag_reveal ul li input {
    float: left;
    width: 25px;
}
ul#countryList {
    margin: 0;
    padding: 0;
    display: block;
    margin-bottom: 10px;
}
#flag_reveal {
    display: none;
    width: 60px;
    margin: 0px 0 0 -2px;
    border-left: 1px solid #f2f2f2;
    border-right: 1px solid #f2f2f2;
    border-bottom: 1px solid #f2f2f2;
    background: #fff;
    position: absolute;
    z-index: 999;
}
.ntn_list li #flag_reveal ul li a {
    text-decoration: none;
    line-height: 20px;
    font-weight: 700;
    float: left;
}
.country_selection a, .country_selection_roi a {
    padding: 0 2px;
}
.ntn_list li #flag_reveal ul li {
    border: none;
    height: 25px;
    width: 60px;
}
ul#countryList li {
    list-style: none;
}
.ntn_list li .country_selection {
    float: left;
    border-top: 1px solid #fff;
    padding: 8px 0 0 6px;
    width: 25px;
    color: #111169;
    text-align: center;
}
</style>

<nav class="navbar navbar-default navbar-fixed-top" id="nav-header-area" role="navigation">
    <div class="container" style="margin-top: -7px;font-size: 12px;height: 28px;">
        <ul class="ntn_list">
            <li class="notification_holder" style="display:none !important;"><div class="notification SC" style="display: none;"></div></li>
            <li class="hat_link"><a href="/faqs.aspx">Help</a></li>
            <li><a href="/contact-us.aspx">Contact</a></li>
            <li class="ntn_list_flag">
                <!--COUNTRY FLAG-->
                <div class="flag">
        	        <div id="flag">
                        <div style="cursor: pointer;" onclick="showCountryList();return false;" class="tndd">
                            <img src="/assets/imgs/flag_<?php echo $language; ?>.png" id="ctl00_uclHeader1_imgFlag">
                        </div>
                    </div>
                </div>
                <!--END COUNTRY FLAG-->
                <!--COUNTRY FLAG DROP DOWN-->
                <div id="flag_reveal">
                    <ul id="countryList" class="clearfix">
                        <?php foreach ($available_languages as $abbr => $item)if($abbr!=$language){ //$item['value']$item['label']?>
                        <li class="country_selection twelve">
                            <a id="ctl00_uclHeader1_linkButton<?php echo $abbr; ?>" href="<?php echo lang_url($abbr); ?>"><input type="image" src="/assets/imgs/flag_<?php echo $abbr; ?>.png" style="cursor:pointer"><?php echo "&nbsp;".$abbr; ?></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <!--END COUNTRY FLAG DROP DOWN-->
            </li>
        </ul>
        <div class="btn_register">
            <a id="A2" class="loginBtn" style="cursor: pointer;" onclick="TopMenuClick('login', 'tdTopMenuLogin');">Login</a>
            <span class="middleOr">or</span>
            <a class="registerBtn" onclick="TopMenuClick('register', 'tdTopMenuJoin');" id="A1"> Register</a>
        </div>
    </div>    
    <div class="container header-nav">
        <div class="logo-nav">
            <img class="logo-icon-nav" src="/assets/imgs/logo.png" style=""/>
        </div>
        
        <div class="search-icon-nav">
            <img class="" src="/assets/imgs/icon_search.png" style=" width: 16px;height: 23px;"/>
        </div>
        <div class="search-nav">
            <input type="text" class="nav-search-input clearfix" id="header-search" name="header-search" placeholder="I'm searching for..." autocomplete="off">
        </div>
        <!--div class="lang-nav">
            <?php //$this->load->view('_partials/language_switcher'); ?>    
        </div-->
        
        <div class="navbar-collapse collapse">
    		<ul class="menu-nav">
    			<?php foreach ($menu as $parent => $parent_params): ?>
    
    				<?php if (empty($parent_params['children'])): ?>
    
    					<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
    					<li <?php if ($active) echo 'class="active"'; ?>>
    						<a href='<?php echo $parent_params['url']; ?>'>
    							<?php echo $parent_params['name']; ?>
    						</a>
    					</li>
    
    				<?php else: ?>
    
    					<?php $parent_active = ($ctrler==$parent); ?>
    					<li class='dropdown <?php if ($parent_active) echo 'active'; ?>'>
    						<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
    							<?php echo $parent_params['name']; ?> <span class='caret'></span>
    						</a>
    						<ul role='menu' class='dropdown-menu'>
    							<?php foreach ($parent_params['children'] as $name => $url): ?>
    								<li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
    							<?php endforeach; ?>
    						</ul>
    					</li>
    
    				<?php endif; ?>
    
    			<?php endforeach; ?>
    		</ul>
    	</div>
    </div>
</nav>

<script src="/assets/dist/frontend/superplaceholder.js"></script>
<script src="/assets/dist/jquery.min.js"></script>
<script>
$("ui.menu-nav li").on('click',function(){alert();
    $(".menu-nav").css('background-color','white');
});
function showCountryList() {
    setTimeout(function(){ document.getElementById('flag_reveal').style.display = "block"; }, 300);
}
$("#nav-header-area").on('click',function(){//alert();
    //setTimeout(function(){ document.getElementById('flag_reveal').style.display = "none"; }, 3000);
    document.getElementById('flag_reveal').style.display = "none";
    
});
$(document).ready(function(){
    $("#header-search").focus();
    document.getElementById('header-search').value = '';
});
superplaceholder({
    el: document.getElementById('header-search'),
    sentences: ['I am searching for...','rose','happy birthday'],
    options: {
        loop: true,
        startOnFocus: false
    }
});
</script>