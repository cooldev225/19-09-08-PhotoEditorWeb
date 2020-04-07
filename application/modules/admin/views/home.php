<div class="row">

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/box_open', 'Shortcuts'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-user', 'Account', 'panel/account'); ?>
			<?php echo modules::run('adminlte/widget/app_btn', 'fa fa-sign-out', 'Logout', 'panel/logout'); ?>
		<?php echo modules::run('adminlte/widget/box_close'); ?>
	</div>

	<div class="col-md-4">
		<?php echo modules::run('adminlte/widget/info_box', 'yellow', $count['users'], 'Users', 'fa fa-users', 'user'); ?>
	</div>
</div>


<div class="row">

	<div class="col-md-8">
		<?php echo modules::run('adminlte/widget/box_open', 'Postcade Lockup API Status'); ?>
		<?php https://ws.postcoder.com/pcw/PCW45-12345-12345-1234X/status?format=json
			$POSTCODE_API_KEY="PCWH7-KWBRB-MRGLR-XSHCV";
			$query = "https://ws.postcoder.com/pcw/{$POSTCODE_API_KEY}/status?format=json";
			$res=json_decode(file_get_contents($query));
			foreach($res as $k=>$v){
				echo "<div class=\"row\"><label class=\"col-md-6\">{$k}</label><label class=\"col-md-6\">{$v}</label></div>";
			}
		?>
		<?php echo modules::run('adminlte/widget/box_close'); ?>
	</div>
</div>
