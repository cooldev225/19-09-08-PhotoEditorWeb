<style type="text/css">
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
</style>
<?php if ( !empty($available_languages) ): ?>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a onclick="return false;" style="line-height: 36px;height: 36px;">
				<img class="multi-lang-img" style="width: 28px;" src="/assets/dist/images/flag/flag_<?php echo $language; ?>.png"/>
				<?php //echo lang('current_language'); ?> 
			</a>
		</li>
		<li class="dropdown">
			<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
				<span class="nav-line-2" style="color:white;font-weight: 700;font-size: 14px;"><?php echo $language; ?></span>
				<span class='nav caret'></span>
			</a>
			<ul role='menu' class='dropdown-menu'>
				<?php foreach ($available_languages as $abbr => $item): if($language!=$abbr){?>
				<li>
					<a href="<?php echo lang_url($abbr); ?>">
						<img class="multi-lang-img" style="width: 28px;" src="/assets/dist/images/flag/flag_<?php echo $abbr;?>.png"/>
						<span class="nav-line-2" style="padding: 0px 10px;font-weight: 700;font-size: 14px;"><?php echo $abbr; ?></span>
						<?php //echo $item['label']; ?></a>
					</li>
				<?php } endforeach; ?>
			</ul>
		</li>
	</ul>
<?php endif; ?>
<!--a style="line-height: 36px;height: 36px;">
<img class="multi-lang-img" src="/assets/dist/images/flag/flag_uk.png"/>
            <span class="nav-line-2" style="color:white;font-weight: 700;font-size: 14px;">uk</span>