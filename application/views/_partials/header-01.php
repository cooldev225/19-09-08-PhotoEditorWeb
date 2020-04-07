<header>
  <div class="web-view">
    <div class="sticky">
      <div id="nav-firstline">
        <div class="hnav-left">
          <div class="filter"><a href="#"><img class="img-responsive" src="/assets/dist/images/filter.png" alt="" ></a></div>
          <!-- Logo -->
          <div class="logo"><a href="home"><img style="margin-left:16px;height: 44px;" class="img-responsive" src="/assets/dist/images/logo.png" alt="" ></a></div>
        </div>
        <div class="hnav-right">
          <div id="nav-tools" class="layoutToolbarPadding">
            <?php if($current_user==''){?>
            <a href="auth/account" class="nav-a nav-a-2" data-nav-ref="nav_ya_signin" data-nav-role="signin" data-ux-jq-mouseenter="true" id="nav-link-accountList" tabindex="12">
              <span class="nav-line-1"><?php echo lang('Hello').', ';//.lang('sign_in');?></span>
              <span class="nav-line-2 "><?php echo lang('account_list');?><span class="nav-icon nav-arrow" style="visibility: visible;"></span>
              </span>
            </a>
            <a href="auth" class="nav-a nav-a-2 nav-single-row-link" id="nav-orders" tabindex="14">
              <span class="nav-line-1"></span>
              <span class="nav-line-2"></span>
            </a>  
            <?php }else{?>
            <a href="auth/account" class="nav-a nav-a-2" data-nav-ref="nav_ya_signin" data-nav-role="signin" data-ux-jq-mouseenter="true" id="nav-link-accountList" tabindex="12">
              <span class="nav-line-1"><?php echo lang('Hi').", ".$current_user_obj->first_name;?></span>
              <span class="nav-line-2 "><?php echo lang('view')." ".lang('account');?><span class="nav-icon nav-arrow" style="visibility: visible;"></span>
            <a href="auth/logout" class="nav-a nav-a-2 nav-single-row-link" id="nav-orders" tabindex="14">
              <span class="nav-line-1"><?php echo lang('logout');?></span>
              <span class="nav-line-1"></span>
            </a> 
            <?php }?> 
          </div>
        </div>
        <div class="hnav-fill">
          <div id="nav-search">
              <div id="nav-bar-left"></div>
                <div class="nav-left">
                  <div id="nav-search-dropdown-card">
                    <div class="nav-search-scope nav-sprite">
                      <div class="nav-search-facade" data-value="search-alias=aps">
                        <span class="nav-search-label" style="width: auto;">All </span>
                        <i class="nav-icon"></i>
                      </div>
                      <select class="nav-search-dropdown searchSelect" id="searchDropdownBox" name="url" style="display: block; top: 0px;" title="Search in">
                          <option value="search-alias=aps">Anniversary</option>
                          <option value="search-alias=alexa-skills">Birthday</option>
                          <option selected="selected" value="search-alias=amazon-devices">Wedding</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="nav-right" style="margin-top: 0px;">
                  <div class="nav-search-submit nav-sprite">
                    <i class="icon-magnifier"></i>
                  </div>
                </div>
                <div class="nav-fill">
                  <div class="nav-search-field ">
                    <label id="nav-search-label" for="twotabsearchtextbox" class="aok-offscreen">
                      Search
                    </label>
                    <input type="text" id="twotabsearchtextbox" value="<?php echo $_sch_;?>" name="field-keywords" autocomplete="off" placeholder="" class="nav-input" dir="auto" tabindex="9">
                  </div>
                  <div id="nav-iss-attach"></div>
                </div>
          </div>
        </div>
      </div>
    </div>
  
    <div id="nav-secondline">
      <div class="hnav-left" style="">
        <div id="nav-global-location-slot">
          <a class="nav-a nav-a-2 a-popover-trigger a-declarative" tabindex="20">
            <div class="nav-sprite" id="nav-packard-glow-loc-icon">
              <img style="    margin-top: -17px;" src="/assets/dist/images/location.png"/>
            </div>
            <div id="glow-ingress-block">
              <span class="nav-line-2" id="glow-ingress-line2" style="margin-top: 14px;">Delivery & Shipping</span>
            </div>
          </a>
        </div>
      </div>
      <div class="hnav-right">
        <div id="nav-tools" class="layoutToolbarPadding"> 
          <!--data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"-->
          <a href="basket" class="nav-a nav-a-2 dropdown-toggle" id="nav-cart" tabindex="17">
            <img style="position: absolute;" src="/assets/dist/images/basket.png"/>
            <span class="nav-line-2" style="margin-top: 10px;margin-left: 44px;"><?php echo lang('basket');?></span>
            <span id="nav-cart-count" aria-hidden="true" class="nav-cart-count nav-cart-1"><?php if($current_user_ordercnt)echo $current_user_ordercnt;?></span>
          </a>
          <?php $this->load->view('_partials/language_switcher.php');?>
          <!--a style="line-height: 36px;height: 36px;">
            <img class="multi-lang-img" src="/assets/dist/images/flag/flag_uk.png"/>
            <span class="nav-line-2" style="color:white;font-weight: 700;font-size: 14px;">uk</span>
          </a-->
        </div>
      </div>
      <div class="hnav-fill">
        <div id="nav-xshop-container" class="">
          <div id="nav-xshop">
            <?php $i=1;foreach($photomenu as $row){
              echo "<a href=\"home/findview?menu={$row['names']}\" class=\"nav-a\" tabindex=\"{$i}\">{$row['names']}</a>";$i++;
            }?> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-view">
    <div class="sticky">
      <div id="nav-firstline">
        <div class="hnav-left">
          <div class="filter mobile_menu"><a><img class="img-responsive" src="/assets/dist/images/filter.png" alt="" ></a></div>
          <!-- Logo -->
          <div class="logo"><a href="home"><img class="img-responsive" src="/assets/dist/images/logo.png" style="height: 44px;" alt="" ></a></div>
        </div>
        <div class="hnav-right">
          <div id="nav-tools" class="layoutToolbarPadding"> 
            <a href="auth/account" class="nav-a nav-a-2" data-nav-ref="nav_ya_signin" data-nav-role="signin" data-ux-jq-mouseenter="true" id="nav-link-accountList" tabindex="12">
              <span class="nav-line-2"><i class="icon-user" style="font-size: 23px;"></i></span>
            </a>
            
            <a href="basket" class="nav-a nav-a-2 dropdown-toggle" id="nav-cart" tabindex="17">
              <img style="" src="/assets/dist/images/basket.png"/>
            </a> 
            <a href="auth" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" class="nav-a nav-a-2 dropdown-toggle"  tabindex="17">
              <img class="multi-lang-img" src="/assets/dist/images/flag/flag_uk.png"/>
              <span style="    margin-left: -65px;" id="nav-cart-count" aria-hidden="true" class="nav-cart-count nav-cart-1"><?php if($current_user_ordercnt)echo $current_user_ordercnt;?></span>
            </a> 
          </div>  
        </div>
        <div class="hnav-fill">
          <div id="nav-search">
              <div id="nav-bar-left"></div>
                <div class="nav-left">
                  <div id="nav-search-dropdown-card">
                    <div class="nav-search-scope nav-sprite">
                      <div class="nav-search-facade" data-value="search-alias=aps">
                        <span class="nav-search-label" style="width: auto;">All </span>
                        <i class="nav-icon"></i>
                      </div>
                      <select class="nav-search-dropdown searchSelect" id="searchDropdownBox" name="url" style="display: block; top: 0px;" title="Search in">
                          <option value="search-alias=aps">Anniversary</option>
                          <option value="search-alias=alexa-skills">Birthday</option>
                          <option selected="selected" value="search-alias=amazon-devices">Wedding</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="nav-right" style="margin-top: 0px;">
                  <div class="nav-search-submit nav-sprite">
                    <i class="icon-magnifier"></i>
                  </div>
                </div>
                <div class="nav-fill">
                  <div class="nav-search-field ">
                    <label id="nav-search-label" for="twotabsearchtextbox" class="aok-offscreen">
                      Search
                    </label>
                    <input type="text" id="twotabsearchtextbox" value="<?php echo $_sch_;?>" name="field-keywords" autocomplete="off" placeholder="" class="nav-input" dir="auto" tabindex="9">
                  </div>
                  <div id="nav-iss-attach"></div>
                </div>
          </div>
        </div>
      </div>
     </div>
      <div id="nav-secondline">
        <div class="hnav-left">
          
        </div>
        <div class="hnav-right">
          
        </div>
        <div class="hnav-fill">
          <div id="nav-xshop-container" class="">
            <div id="nav-xshop">
              <?php $i=1;foreach($photomenu as $row){
                echo "<a href=\"home/findview?menu={$row['names']}\" class=\"nav-a\" tabindex=\"{$i}\">{$row['names']}</a>";$i++;
              }?>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>
<script type="text/javascript">   
$(document).ready(function(){
  $("#twotabsearchtextbox").on('keyup',function(e){
    if(e.keyCode==13)location.href='home/findview?sch='+$(this).val();
  });
  $(".nav-search-submit").on('click',function(e){
    location.href='home/findview?sch='+$("#twotabsearchtextbox").val();
  });
  function ___search(v){

  }
});
</script>