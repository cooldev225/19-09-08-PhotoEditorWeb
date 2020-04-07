<link rel="stylesheet" href="/assets/dist/frontend/theme-other/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/dist/frontend/theme-other/css/plugins.css">
<link rel="stylesheet" href="/assets/dist/frontend/theme-other/style.css">
<!-- Cusom css -->
<link rel="stylesheet" href="/assets/dist/frontend/theme-other/css/custom.css">
<script src="/assets/dist/frontend/theme-other/js/vendor/modernizr-3.5.0.min.js"></script>
<style type="text/css">
.product .product__thumb .hot__box {
    background: #203750 none repeat scroll 0 0;
}
.product .product__thumb .hot__box::after {
    border-color: transparent transparent transparent #203750;
}
.bi {
    line-height: 38px;
}
.fa {
    margin-top: 8px;
}
.product .product__content .action .actions_inner .add_to_links li a:hover {
    background-color: #203750;
}
.rating li.on i {
    color: #203750;
}
.list__view .content .cart__action li.cart a:hover {
    background: #203750 none repeat scroll 0 0;
}
.list__view .content .cart__action li.wishlist a:hover {
    background-position: 108% 0;
    border: 2px solid #232f3e;
    background-color: #203750;
}
header #nav-cart img{
	margin-left:-97px;
}

.dropdown-menu {
    position: absolute!important;
    top: 100%;
    left: 6px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
.navbar-nav{
    margin-top: -37px;
}
.nav{
    display: inline-block;
}
.navbar-nav>li>a {
    padding-top: 0px;
}
.nav>li>a {
    padding: 10px 8px;
}
.nav .caret{
    color: white;
}
.dropdown-menu {
    min-width: 85px;
    padding: 2px 0;
}
.dropdown-menu>li>a {
    padding: 3px 7px;
}
.navbar-nav {
    display: inline-block!important;
}

.dropdown-menu .show{
    left:6px;
}
</style>
<!-- Main wrapper -->
<form action="home/findview" id="searchfrm" method="post">
<input type="hidden" name="page_size" id="page_size" value="<?php echo $page_size;?>"/>
<input type="hidden" name="page_start" id="page_start" value="<?php echo $page_start;?>"/>
<input type="hidden" name="page_current" id="page_current" value="<?php echo $page_current;?>"/>
<input type="hidden" name="page_order" id="page_order" value="<?php echo $page_order;?>"/>
<input type="hidden" name="filter_menu" id="filter_menu" value="<?php echo $filter_menu;?>"/>
<input type="hidden" name="filter_category" id="filter_category" value="<?php echo $filter_category;?>"/>
<input type="hidden" name="filter_flag" id="filter_flag" value="<?php echo $filter_flag;?>"/>
<script type="text/javascript">
function filteraction(v,n){
	if(!n)return;
	$('#page_start').val(1);
	$('#page_current').val(1);
	$('#filter_category').val(v);
	$('#searchfrm').submit();
}
function tagaction(v){
	$('#page_start').val(1);
	$('#page_current').val(1);
	$('#filter_flag').val(v);
	$('#searchfrm').submit();
}
</script>
<div class="wrapper" id="wrapper">
	<!-- Start Shop Page -->
    <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
    				<div class="shop__sidebar">
    					<aside class="wedget__categories poroduct--cat">
    						<h3 class="wedget__title">Categories</h3>
    						<ul>
    							<?php 
    							foreach($filtercategories as $f){
    								echo "<li style=\"cursor:pointer;\" onclick='filteraction(\"{$f['names']}\",{$f['_count_']});'><a ".($f['_count_']?"style=\"font-weight: bold;\"":"").">{$f['names']} <span>({$f['_count_']})</span></a></li>";
    							}
    							?>	
    						</ul>
    					</aside>
    					<?php if($mincost>$maxcost){?>
    					<aside class="wedget__categories pro--range">
    						<h3 class="wedget__title">Filter by price</h3>
    						<div class="content-shopby">
    						    <div class="price_filter s-filter clear">
    						            <div id="slider-range"></div>
    						            <div class="slider__range--output">
    						                <div class="price__output--wrap">
    						                    <div class="price--output">
    						                        <span>Price :</span>
    						                        <input type="text" id="amount" readonly="">
    						                    </div>
    						                    <div class="price--filter">
    						                        <a href="#">Filter</a>
    						                    </div>
    						                </div>
    						            </div>
    						    </div>
    						</div>
    					</aside>
    					<?php }?>
                        <aside class="wedget__categories poroduct--tag">
                            <h3 class="wedget__title">I'm looking for</h3>
                            <ul>
                                <?php 
                                $search_for=explode(",","Birthday Age,Christmas,Toy,Alcohol");
                                for($i=0;$i<count($search_for);$i++){
                                    echo "<li style=\"cursor:pointer;\"><a onclick=\"tagaction({$i});\">{$search_for[$i]}</a></li>";    
                                }?>
                            </ul>
                        </aside>
                        <aside class="wedget__categories poroduct--tag">
                            <h3 class="wedget__title">Who's It For?</h3>
                            <ul>
                                <?php 
                                $search_for=explode(",","Boyfriend,Girlfriend,Mother,Father");
                                for($i=0;$i<count($search_for);$i++){
                                    echo "<li style=\"cursor:pointer;\"><a onclick=\"tagaction({$i});\">{$search_for[$i]}</a></li>";    
                                }?>
                            </ul>
                        </aside>
    					<aside class="wedget__categories poroduct--tag">
    						<h3 class="wedget__title">By Theme</h3>
    						<ul>
    							<?php 
    							for($i=1;$i<count($search_tag);$i++){
    								echo "<li style=\"cursor:pointer;\"><a onclick=\"tagaction({$i});\">{$search_tag[$i]}</a></li>";	
    							}?>
    						</ul>
    					</aside>
    					<!--aside class="wedget__categories sidebar--banner">
							<img src="/assets/dist/images/s2.jpg" alt="banner images">
							<div class="text">
								<h2>new products</h2>
								<h6>save up to <br> <strong>40%</strong>off</h6>
							</div>
    					</aside-->
    				</div>
    			</div>
    			<div class="col-lg-9 col-12 order-1 order-lg-2">
    				<div class="row">
    					<div class="col-lg-12">
							<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
								<div class="shop__list nav justify-content-center" role="tablist">
		                            <a style="display: none;" class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
		                            <a style="display: none;" class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
		                            <?php echo $filter_menu.($filter_menu==""?'':'/').$filter_category;?>
		                        </div>
		                        <p><?php 
		                        	$pstartcnt=($page_current-1)*$page_size+1;
		                        	$pendcnt=$pstartcnt+count($products)-1;
		                        	echo "Showing {$pstartcnt}–{$pendcnt} of {$page_totalcount} result";
		                        ?></p>
		                        <!--div class="orderby__wrapper">
		                        	<span>Sort By</span>
		                        	<select class="shot__byselect">
		                        		<option>Default sorting</option>
		                        		<option>HeadPhone</option>
		                        		<option>Furniture</option>
		                        		<option>Jewellery</option>
		                        		<option>Handmade</option>
		                        		<option>Kids</option>
		                        	</select>
		                        </div-->
	                        </div>
    					</div>
    				</div>
    				<div class="tab__container">
        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
        					<div class="row">
        						<!-- Start Single Product -->
        						<?php foreach($products as $p){?>
	        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
		        					<div class="product__thumb">
										<a class="first__img" href="home/personal?product_id=<?php echo $p['ids'];?>">
											<img src="<?php echo $p['photo9'];?>" alt="product image">
										</a>
										<a class="second__img animation1" href="home/personal?product_id=<?php echo $p['ids'];?>"><img src="<?php echo $p['photo9'];?>" alt="product image"></a>
										<div class="hot__box">
											<span class="hot-label"><?php echo $search_tag[$p['flag1']];?></span>
										</div>
									</div>
									<div class="product__content content--center">
										<h4><a><?php echo $p['titles'];?></a></h4>
										<ul class="prize d-flex">
											<li><?php echo $currency_symbol.number_format($p['costs1']*$currency_rate,2,'.', '');?></li>
											<?php if($p['costs2']>0)echo "<li class=\"old_prize\">".$currency_symbol.number_format($p['costs2']*$currency_rate,2,'.', '')."</li>";?>
										</ul>
										<div class="action">
											<div class="actions_inner">
												<ul class="add_to_links">
													<!--li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
													<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
													<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
													<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li-->
													<li><?php echo $p['titles'];?></li>	

												</ul>

											</div>
										</div>
										<div class="product__hover--content" >
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
									</div>
	        					</div>
        						<?php }?>
	        					<!-- End Single Product -->
        					</div>
        					<ul class="wn__pagination">
        						<?php 
        							$n=5;
        							for($i=$page_start;;$i++){
        								$j=$i-$page_start+1;
        								
        								if($j>$n||($i-1)*$page_size+1>$page_totalcount)break;
    									echo "<li style=\"cursor: pointer;\" ".($i==$page_current?"class=\"active\"":"")."><a onclick=\"$('#page_current').val({$i});$('#searchfrm').submit();\">{$i}</a></li>";

    									if($j==$n-1){
        									echo "<li><a onclick=\"$('#page_start').val(".($i+1).");$('#page_current').val(".($i+1).");$('#searchfrm').submit();\"><i class=\"zmdi zmdi-chevron-right\"></i></a></li>";
        								}
        							}
        						?>
        						
        					</ul>
        				</div>
        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
        					<div class="list__view__wrapper">
        						<!-- Start Single Product -->
        						<?php foreach($products as $p){?>
        						<div class="list__view">
        							<div class="thumb">
        								<a class="first__img" href="home/personal?product_id=<?php echo $p['ids'];?>">
        									<img src="<?php echo $p['photo9'];?>" alt="product images"></a>
        								<a class="second__img animation1" href="home/personal?product_id=<?php echo $p['ids'];?>">
        									<img src="<?php echo $p['photo9'];?>" alt="product images"></a>
        							</div>
        							<div class="content">
        								<h2><a href="single-product.html"><?php echo $p['titles'];?></a></h2>
        								<ul class="rating d-flex">
        									<li class="on"><i class="fa fa-star-o"></i></li>
        									<li class="on"><i class="fa fa-star-o"></i></li>
        									<li class="on"><i class="fa fa-star-o"></i></li>
        									<li class="on"><i class="fa fa-star-o"></i></li>
        									<li class="on"><i class="fa fa-star-o"></i></li>
        									<li class="on"><i class="fa fa-star-o"></i></li>
        								</ul>
        								<ul class="prize__box">
        									<li><?php echo $currency_symbol.number_format($p['costs1']*$currency_rate,2,'.', '');?></li>
											<?php if($p['costs2']>0)echo "<li class=\"old_prize\">".$currency_symbol.number_format($p['costs2']*$currency_rate,2,'.', '')."</li>";?>
        								</ul>
        								<p><?php 
        										echo $p['titles'];
        									?></p>
        								<ul class="cart__action d-flex">
        									<li class="cart"><a href="home/personal?product_id=<?php echo $p['ids'];?>">Now Personalise </a></li>
        									<!--li class="wishlist"><a href="cart.html"></a></li>
        									<li class="compare"><a href="cart.html"></a></li-->
        								</ul>

        							</div>
        						</div>
        						<?php }?>
        						<!-- End Single Product -->
        					</div>
        				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<script src="/assets/dist/frontend/theme-other/js/popper.min.js"></script>
<script src="/assets/dist/frontend/theme-other/js/bootstrap.min.js"></script>
<script src="/assets/dist/frontend/theme-other/js/plugins.js"></script>
<script src="/assets/dist/frontend/theme-other/js/active.js"></script>