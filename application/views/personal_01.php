<script type="text/javascript">
	var __autofill_call_once = false;
	var productPrises="";
    var productOldPrises="";
    var productSizes="";
    var productTypeId="";
    var selectedProductOutputSizeId="";
    var selectedPosterFrameValue = 0;
      
    var pinchZoomMode="";    
    var objDragTouchImage = null;
	var pageNumber = 0;
	var image_autofilling_isprocess = false;
    var image_autofilling_current_id = 0;	
    var isFirst=1;
    var sortlist;
    var canvas = null;
	var ctx = null;
</script>
<style type="text/css">
.PreviewBottomSection {
    /*margin-top: 29px;*/
}
</style>
<div style="display: none;">
	<img id="hidden_back_img" src="/assets/dist/images/FunkyPigeon_Back_P.jpg">
</div>
<?php
$templete_key='ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_';
$temp_left_idx=0;
$cnt_arr = explode(',', '0,3,1,1,1,0,2,0,0,0,0,2');
foreach (explode(',', $data[$templete_key.'standard_left']) as $val){
	if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']==$val)break;
	$temp_left_idx++;
}
$temp_left_idx=$temp_left_idx%count($cnt_arr);
$temp_right_idx=0;
$cnt_arr = explode(',', '3,1,1,1,0,2,0,0,0,0,2');
foreach (explode(',', $data[$templete_key.'standard_right']) as $val){
	if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']==$val)break;
	$temp_right_idx++;
}
$temp_right_idx=$temp_right_idx%count($cnt_arr);
//echo "{$temp_left_idx}-{$temp_right_idx}<br>";

	$json_key='ctl00$ContentPlaceHolder1$CardFlow1$';
	if($data[$json_key.'json_session_text_front']=='[]'){
		$obj = [];
		for($html="",$i=1;$i<6;$i++){
			$style=explode(";",str_replace(" ", "", $data['photo_product_row']['photostyle'.$i]));
			if($data['photo_product_row']['phototag'.$i]=='INPUT'){
				foreach($style as $sl){
					$ss=explode(":",$sl);
					if(isset($ss[1]))$style_[$ss[0]]=$ss[1];
				}
				$l=0;if(isset($style_['left']))$l=$style_['left'];
				$t=0;if(isset($style_['top']))$t=$style_['top'];
				$w=0;if(isset($style_['width']))$w=$style_['width'];
				$h=0;if(isset($style_['height']))$h=$style_['height'];
				array_push($obj, array(
					'Id' => $i,
					'TextId' => "cardtype1_tx{$i}",
					'Name' => $data['photo_product_row']['photo'.$i],
					'MaxLength' => strlen($data['photo_product_row']['photo'.$i])+1,
					'DefaultText' => "<input id='custom_text_{$i}' type='hidden' style=\"".$data['photo_product_row']['photostyle'.$i]."\" value='{$data['photo_product_row']['photo'.$i]}'>",
					'Text' => $data['photo_product_row']['photo'.$i],
					'TextAlign' => 'center',
					'TextVAlign' => 'middle',
					'Style' => $data['photo_product_row']['photostyle'.$i],
					'LableId' => "custom_text_{$i}",
					'IsChange' => false,
					'X' => $l,
					'Y' => $t,
					'AW' => $w,
					'AH' => $h,
					'IsMandetory' => 1,
				));
			}
		}
		$data[$json_key.'json_session_text_front']=json_encode($obj);
	}
	if($data[$json_key.'json_session_image_front']=='[]'){
		$obj = [];
		for($i=1,$j=0;$i<6;$i++){
			$style=explode(";",str_replace(" ", "", $data['photo_product_row']['photostyle'.$i]));
			if($data['photo_product_row']['phototag'.$i]=='IMG'){
				foreach($style as $sl){
					$ss=explode(":",$sl);
					if(isset($ss[1]))$style_[$ss[0]]=$ss[1];
				}
				$l=0;if(isset($style_['left']))$l=$style_['left'];
				$t=0;if(isset($style_['top']))$t=$style_['top'];
				$w=0;if(isset($style_['width']))$w=$style_['width'];
				$h=0;if(isset($style_['height']))$h=$style_['height'];
				array_push($obj, array(//$obj[$j] = array(
					'Id' => $i,
					'ImageId' => "cardtype2_im{$i}",
					'Src' => $data['photo_product_row']['photo'.$i],
					'ImagePath' => $data['photo_product_row']['photo'.$i],
					'DragId' => "cardtype2_drag{$i}",
					'DragWidth' => $w,
					'DragHeight' => $h,
					'AW' => $w,
					'AH' => $h,
					'CW' => $w,
					'CH' => $h,
					'X' => $l,
					'Y' => $t,
					'CX' => 0,
					'CY' => 0,
					'DragX' => $l,
					'DragY' => $t,
					'IsUpload' => false,
					'CropImageSrc' => null,
					'IsResized' => false,
					'Rotate' => 0,
					'Zoom' => 0.0,
					'OAW' => 0.0,
					'ActionHistory' => null,
					'MessageLog' => null,
					'IsAdminUpload' => false,
				));
			}
		}
		$data[$json_key.'json_session_image_front']=json_encode($obj);
	}
	
	$_jobj_text_cardinside_left=json_decode($data[$json_key.'json_session_text_cardinside_left']);
	$cnt_arr = explode(',', '0,3,1,1,1,0,2,0,0,0,0,2');
	if(count($_jobj_text_cardinside_left)<$cnt_arr[$temp_left_idx]){
		
		$idx=$temp_left_idx;
		$obj=[];
		$height_arr = explode(',', '0,/125/176/125,/430,/215,/215,0,/215/215,0,0,0,0,/42/42');
		$h=explode('/', $height_arr[$idx]);
		//echo "---{$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']}-----{$cnt_arr[$idx]}---------";
		for($i=1;$i<$cnt_arr[$idx]+1;$i++){
			array_push($obj, array(
				'Id' => $i,
				'TextId' => "Text_{$i}_2",
				'Name' => "Text_{$i}_2",
				'MaxLength' => 0,
				'DefaultText' => "<table style=\"width: 100%; height: 100%;\"><tbody><tr><td style=\"vertical-align: middle;\"><div style=\"text-align: center;\"><cj></cj></div></td></tr></tbody></table>",
				'Text' => "<table style=\"width: 100%; height: 100%;\"><tbody><tr><td style=\"vertical-align: middle;\"><div style=\"text-align: center;\"><cj></cj></div></td></tr></tbody></table>",
				'TextAlign' => 'center',
				'TextVAlign' => 'middle',
				'Style' => '',
				'LableId' => "ci_div_lable_{$i}",
				'IsChange' => false,
				'X' => 50,
				'Y' => 50,
				'AW' => 292,
				'AH' => $h[$i],
				'IsMandetory' => 0
			));
		}
		$data[$json_key.'json_session_text_cardinside_left']=json_encode($obj);
	}
	if($data[$json_key.'json_session_image_cardinside_left']=='[]'){
		$obj=[];$i=1;
		if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_9'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_2'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_8'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x430.jpg',
				'ImagePath' => '/assets/dist/images/292x430.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 430,
				'AW' => 292,        'AH' => 430,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_4'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_10'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_11'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/186x158.jpg',
				'ImagePath' => '/assets/dist/images/186x158.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 186, 'DragHeight' => 158,
				'AW' => 186,        'AH' => 158,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/100x77.jpg',
				'ImagePath' => '/assets/dist/images/100x77.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 100, 'DragHeight' => 77,
				'AW' => 100,        'AH' => 77,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/100x77.jpg',
				'ImagePath' => '/assets/dist/images/100x77.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 100, 'DragHeight' => 77,
				'AW' => 100,        'AH' => 77,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x268.jpg',
				'ImagePath' => '/assets/dist/images/292x268.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 268,
				'AW' => 292,        'AH' => 268,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_12'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x227.jpg',
				'ImagePath' => '/assets/dist/images/292x227.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 227,
				'AW' => 292,        'AH' => 227,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/143x200.jpg',
				'ImagePath' => '/assets/dist/images/143x200.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 143, 'DragHeight' => 200,
				'AW' => 143,        'AH' => 200,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/143x200.jpg',
				'ImagePath' => '/assets/dist/images/143x200.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 143, 'DragHeight' => 200,
				'AW' => 143,        'AH' => 200,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_13'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x166.jpg',
				'ImagePath' => '/assets/dist/images/292x166.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 166,
				'AW' => 292,        'AH' => 166,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_2",
				'Src' => '/assets/dist/images/292x166.jpg',
				'ImagePath' => '/assets/dist/images/292x166.jpg',
				'DragId' => "cardtype_drag{$i}_2",
				'DragWidth' => 292, 'DragHeight' => 166,
				'AW' => 292,        'AH' => 166,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}
		$data[$json_key.'json_session_image_cardinside_left']=json_encode($obj);
		//echo "<script>alert('{$data[$json_key.'json_session_image_cardinside_left']}');</script>";
	}
	//echo $data[$json_key.'json_session_image_cardinside_right'];
	$_jobj_text_cardinside_right=json_decode($data[$json_key.'json_session_text_cardinside_right']);
	$cnt_arr = explode(',', '3,1,1,1,0,2,0,0,0,0,2');
	if(count($_jobj_text_cardinside_right)<$cnt_arr[$temp_right_idx]){
		
		$idx=$temp_right_idx;
		$obj=[];
		$height_arr = explode(',', '/125/176/125,/430,/215,/215,0,/215/215,0,0,0,0,/42/42');
		$h=explode('/', $height_arr[$idx]);
		for($i=1;$i<$cnt_arr[$idx]+1;$i++){
			array_push($obj, array(
				'Id' => $i,
				'TextId' => "Text_{$i}_3",
				'Name' => "Text_{$i}_3",
				'MaxLength' => 0,
				'DefaultText' => "<table style=\"width: 100%; height: 100%;\"><tbody><tr><td style=\"vertical-align: middle;\"><div style=\"text-align: center;\"><cj></cj></div></td></tr></tbody></table>",
				'Text' => "<table style=\"width: 100%; height: 100%;\"><tbody><tr><td style=\"vertical-align: middle;\"><div style=\"text-align: center;\"><cj></cj></div></td></tr></tbody></table>",
				'TextAlign' => 'center',
				'TextVAlign' => 'middle',
				'Style' => '',
				'LableId' => "ci_div_lable_{$i}",
				'IsChange' => false,
				'X' => 50,
				'Y' => 50,
				'AW' => 292,
				'AH' => $h[$i],
				'IsMandetory' => 0
			));
		}
		$idx=$idx%count($cnt_arr);
		$data[$json_key.'json_session_text_cardinside_right']="".json_encode($obj);
	}
	//$data[$json_key.'json_session_text_cardinside_left']="[{$data[$json_key.'json_session_text_cardinside_left']}]";
	//$data[$json_key.'json_session_text_cardinside_right']="[{$data[$json_key.'json_session_text_cardinside_right']}]";
	if($data[$json_key.'json_session_image_cardinside_right']=='[]'){
		$obj=[];$i=1;
		if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_9'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_2'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_8'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x430.jpg',
				'ImagePath' => '/assets/dist/images/292x430.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 430,
				'AW' => 292,        'AH' => 430,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_4'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_10'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x214.jpg',
				'ImagePath' => '/assets/dist/images/292x214.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 214,
				'AW' => 292,        'AH' => 214,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/144x102.jpg',
				'ImagePath' => '/assets/dist/images/144x102.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 144, 'DragHeight' => 102,
				'AW' => 144,        'AH' => 102,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_11'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/186x158.jpg',
				'ImagePath' => '/assets/dist/images/186x158.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 186, 'DragHeight' => 158,
				'AW' => 186,        'AH' => 158,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/100x77.jpg',
				'ImagePath' => '/assets/dist/images/100x77.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 100, 'DragHeight' => 77,
				'AW' => 100,        'AH' => 77,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/100x77.jpg',
				'ImagePath' => '/assets/dist/images/100x77.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 100, 'DragHeight' => 77,
				'AW' => 100,        'AH' => 77,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x268.jpg',
				'ImagePath' => '/assets/dist/images/292x268.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 268,
				'AW' => 292,        'AH' => 268,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_12'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x227.jpg',
				'ImagePath' => '/assets/dist/images/292x227.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 227,
				'AW' => 292,        'AH' => 227,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/143x200.jpg',
				'ImagePath' => '/assets/dist/images/143x200.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 143, 'DragHeight' => 200,
				'AW' => 143,        'AH' => 200,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/143x200.jpg',
				'ImagePath' => '/assets/dist/images/143x200.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 143, 'DragHeight' => 200,
				'AW' => 143,        'AH' => 200,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}else if ($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_13'){
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x166.jpg',
				'ImagePath' => '/assets/dist/images/292x166.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 166,
				'AW' => 292,        'AH' => 166,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
			array_push($obj, array(
				'Id' => ++$i,
				'ImageId' => "cardtype_im{$i}_3",
				'Src' => '/assets/dist/images/292x166.jpg',
				'ImagePath' => '/assets/dist/images/292x166.jpg',
				'DragId' => "cardtype_drag{$i}_3",
				'DragWidth' => 292, 'DragHeight' => 166,
				'AW' => 292,        'AH' => 166,
				'CW' => 50,         'CH' => 30,
				'X' => 0,           'Y' => 0,
				'CX' => 0,          'CY' => 0,
				'DragX' => 0,       'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}
		$data[$json_key.'json_session_image_cardinside_right']=json_encode($obj);
	}
	//echo "<br>".$data[$json_key.'json_session_image_cardinside_right'];
	if($data[$json_key.'json_session_text_back']=='[]'){
		$obj = [];$f=0;
		for($html="",$i=1,$j=0;$i<6;$i++){
			$style=explode(";",str_replace(" ", "", $data['photo_product_row']['00_photostyle'.$i]));
			if($data['photo_product_row']['00_phototag'.$i]=='INPUT'){$f=1;
				foreach($style as $sl){
					$ss=explode(":",$sl);
					if(isset($ss[1]))$style_[$ss[0]]=$ss[1];
				}
				$l=0;if(isset($style_['left']))$l=$style_['left'];
				$t=0;if(isset($style_['top']))$t=$style_['top'];
				$w=0;if(isset($style_['width']))$w=$style_['width'];
				$h=0;if(isset($style_['height']))$h=$style_['height'];
				array_push($obj, array(
					'Id' => $i,
					'TextId' => "cardtype1_tx{$i}_4",
					'Name' => $data['photo_product_row']['00_photo'.$i],
					'MaxLength' => strlen($data['photo_product_row']['00_photo'.$i])+1,
					'DefaultText' => "<input id='00_custom_text_{$i}' type='hidden' style=\"".$data['photo_product_row']['00_photostyle'.$i]."\" value='{$data['photo_product_row']['00_photo'.$i]}'>",
					'Text' => $data['photo_product_row']['00_photo'.$i],
					'TextAlign' => 'center',
					'TextVAlign' => 'middle',
					'Style' => $data['photo_product_row']['00_photostyle'.$i],
					'LableId' => "00_custom_text_{$i}",
					'IsChange' => false,
					'X' => $l,
					'Y' => $t,
					'AW' => $w,
					'AH' => $h,
					'IsMandetory' => 1,
				));
			}
		}
		if(!$f){
			$i=1;
			array_push($obj, array(
				'Id' => $i,
				'TextId' => "Text_{$i}",
				'Name' => '',
				'MaxLength' => 10,
				'DefaultText' => "",
				'Text' => '',
				'TextAlign' => 'center',
				'TextVAlign' => 'middle',
				'Style' => '',
				'LableId' => "ci_div_lable_{$i}_4",
				'IsChange' => false,
				'X' => 50,
				'Y' => 50,
				'AW' => 200,
				'AH' => 58,
				'IsMandetory' => 0
			));
			
		}
		$data[$json_key.'json_session_text_back']=json_encode($obj);
	}
	if($data[$json_key.'json_session_image_back']=='[]'){
		$obj = [];$f=0;
		for($i=1,$j=0;$i<6;$i++){
			$style=explode(";",str_replace(" ", "", $data['photo_product_row']['00_photostyle'.$i]));
			if($data['photo_product_row']['00_phototag'.$i]=='IMG'){$f=1;
				foreach($style as $sl){
					$ss=explode(":",$sl);
					if(isset($ss[1]))$style_[$ss[0]]=$ss[1];
				}
				$l=0;if(isset($style_['left']))$l=$style_['left'];
				$t=0;if(isset($style_['top']))$t=$style_['top'];
				$w=0;if(isset($style_['width']))$w=$style_['width'];
				$h=0;if(isset($style_['height']))$h=$style_['height'];
				array_push($obj, array(
					'Id' => $i,
					'ImageId' => "cardtype_im{$i}_4",
					'Src' => $data['photo_product_row']['00_photo'.$i],
					'ImagePath' => '/',
					'DragId' => "cardtype_drag{$i}_4",
					'DragWidth' => $w,
					'DragHeight' => $h,
					'AW' => $w,
					'Ah' => $h,
					'CW' => $w,
					'CH' => $h,
					'X' => $l,
					'Y' => $t,
					'CX' => 0,
					'CY' => 0,
					'DragX' => 0,
					'DragY' => 0,
					'IsUpload' => false,
					'CropImageSrc' => null,
					'IsResized' => false,
					'Rotate' => 0,
					'Zoom' => 0.0,
					'OAW' => 0.0,
					'ActionHistory' => null,
					'MessageLog' => null,
					'IsAdminUpload' => false,
				));
			}
		}
		if(!$f){
			$i=1;
			array_push($obj, array(
				'Id' => $i,
				'ImageId' => "cardtype_im{$i}_4",
				'Src' => '/assets/dist/images/100x100.jpg',
				'ImagePath' => '/',
				'DragId' => "cardtype_drag{$i}_4",
				'DragWidth' => 100,
				'DragHeight' => 100,
				'AW' => 100,
				'Ah' => 100,
				'CW' => 50,
				'CH' => 30,
				'X' => 50,
				'Y' => 30,
				'CX' => 0,
				'CY' => 0,
				'DragX' => 0,
				'DragY' => 0,
				'IsUpload' => false,
				'CropImageSrc' => null,
				'IsResized' => false,
				'Rotate' => 0,
				'Zoom' => 0.0,
				'OAW' => 0.0,
				'ActionHistory' => null,
				'MessageLog' => null,
				'IsAdminUpload' => false,
			));
		}
		$data[$json_key.'json_session_image_back']=json_encode($obj);
	}//echo $data[$json_key.'json_session_image_back'];

	$_jobj_text_front=json_decode($data[$json_key.'json_session_text_front']);
	$_jobj_image_front=json_decode($data[$json_key.'json_session_image_front']);
	$_jobj_text_cardinside_left=json_decode($data[$json_key.'json_session_text_cardinside_left']);
	$_jobj_image_cardinside_left=json_decode($data[$json_key.'json_session_image_cardinside_left']);
	$_jobj_text_cardinside_right=json_decode($data[$json_key.'json_session_text_cardinside_right']);
	$_jobj_image_cardinside_right=json_decode($data[$json_key.'json_session_image_cardinside_right']);
	$_jobj_text_back=json_decode($data[$json_key.'json_session_text_back']);
	$_jobj_image_back=json_decode($data[$json_key.'json_session_image_back']);
	foreach ($_jobj_text_cardinside_left as $img)foreach ($img as $key => $val) {
		//echo "{$key}----------------------->{$val}<br>";
	}
	//$data[$json_key.'json_session_text_front'];
?>
<!--link rel="stylesheet" href="/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" type="text/css" /-->
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/cardflow/main.css"/>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/cardflow/landing.css"/><link rel="stylesheet" type="text/css" href="/assets/dist/frontend/cardflow/HintsAndTips.css"/>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_all.css"/>
<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_stage_02.css"/>

<link rel="stylesheet" type="text/css" href="/assets/dist/frontend/cardflow/enlarge.css"/>


<!--link id="pu_stylesheet" rel="stylesheet" href="/assets/dist/frontend/cardflow/ICE.css" type='text/css'-->
<link id="pu_stylesheet" rel="stylesheet" href="/assets/dist/frontend/cardflow/Jquery.fileupload-ui.css" type='text/css'>
<link rel="stylesheet" href="/assets/dist/frontend/cardflow/photo_upload_panels.css" /> 
<link rel="stylesheet" href="/assets/dist/frontend/cardflow/drag.css" type="text/css" />


<!--script defer type="text/javascript" src="/assets/dist/frontend/cardflow/include.js"></script-->
<script  type="text/javascript" src="/assets/dist/frontend/cardflow/jquery-1.7.2.min.js"></script>


<!--script type="text/javascript" src="/assets/dist/frontend/cardflow/jquery-migrate-3.1.0.min.js"></script-->
<script type="text/javascript">/*
jQuery.browser = {};
(function () {
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
        jQuery.browser.msie = true;
        jQuery.browser.version = RegExp.$1;
    }
})();
(function($) {
    if (!$.curCSS) {
       $.curCSS = $.css;
    }
})(jQuery);*/
</script>

<script type="text/javascript" src="/assets/dist/frontend/cardflow/blazy.min.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/js.cookie.min.js"></script>

<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.galleriffic.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.opacityrollover.js"></script>
<!--Fancybox-->
<!--Script use for emotion handle-->
<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.emotions.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/tabbber_WC.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/cardflow/json2.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/cardflow/201a.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/mask-loading.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/ImageDragWithTouch.js"></script>

<script type="text/javascript" src="/assets/dist/frontend/pixastic.core.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/rotate.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/hflip.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/vflip.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/desaturate.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/sepia.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/brightness.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/sharpen.js"></script>
<script defer type="text/javascript" src="/assets/dist/frontend/hsl.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/ImageController.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/ImageManager.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/jQueryRotate.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/easypaginate.js"></script>

<script type="text/javascript" src="/assets/dist/frontend/cardflow/ddslick.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="/assets/dist/frontend/jquery.hintsAndTipsICE.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/common.util.js"></script>

<script type="text/javascript" src="/assets/dist/frontend/cardflow/jquery.knob.min.js"></script>
<script  type="text/javascript" src="/assets/dist/frontend/jquery-ui.js"></script>
<script  type="text/javascript" src="/assets/dist/frontend/cardflow/microsoftAjax.debug.js"></script>
<script  type="text/javascript" src="/assets/dist/frontend/cardflow/microsoftAjaxWebForms.debug.js"></script>
<script  type="text/javascript" src="/assets/dist/frontend/cardflow/webForm_PostBackOption.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script type="text/javascript">
	
</script>
<style type="text/css">
	.nav {
        width: auto;
        height: auto;
        position: relative;
        top: 0px;
        display: inline-block!important;
    }
</style>


<div class="preview_card_area" style="display: none;">
	<div class="preview_card_area background"></div>
	<div style="z-index: 1000001;
    right: 25px;
    position: absolute;
    top: 10px;
    font-size: 30px;color: white;
    cursor: pointer;"><span class="close_btn" onclick="$('.preview_card_area').css('display','none');">close</span></div>
	<canvas id="_canvas" />
</div>
<!--link rel="stylesheet" type="text/css" href="/assets/dist/frontend/css/personal/_stage_01.css"/-->

<form method="post" action="home/personal" id="aspnetForm">
<div class="aspNetHidden">
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="<?php if(isset($data['__EVENTTARGET']))echo $data['__EVENTTARGET'];?>" />
	<input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>" />
	<input type="hidden" name="page_stage" id="page_stage" value="<?php echo $data['page_stage'];?>" />
	<input type="hidden" id="PAGE_PREPARE_STAGE" value="<?php echo $PAGE_PREPARE_STAGE;?>" />
	<input type="hidden" id="PAGE_PERSONAL_STAGE" value="<?php echo $PAGE_PERSONAL_STAGE;?>" />
	<input type="hidden" id="PAGE_CHOCO_STAGE" value="<?php echo $PAGE_CHOCO_STAGE;?>" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="<?php if(isset($data['__EVENTARGUMENT']))echo $data['__EVENTARGUMENT'];?>" />
	<input type="hidden" name="__VIEWSTATEFIELDCOUNT" id="__VIEWSTATEFIELDCOUNT" value="<?php if(isset($data['__VIEWSTATEFIELDCOUNT']))echo $data['__VIEWSTATEFIELDCOUNT'];?>"/>
	<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="<?php if(isset($data['__VIEWSTATE']))echo $data['__VIEWSTATE'];?>" />
</div>


<div id="content-area"> 
	<section class="shop-page padding-top-10 padding-bottom-20">
	  <div class="container">
	    <div class="row"> 
	    	<div class="col-sm-12">  
				<div class="nav-history-menu">
					<?php 
					echo"<a href=''>back&nbsp;</a>><a href=''>&nbsp;{$data['photo_product_row']['menus']}&nbsp;</a>><a href=''>&nbsp;{$data['photo_product_row']['categories']}&nbsp;</a>";
					?>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div itemscope="" itemtype="http://schema.org/Product">
				<div class="help_tab" onclick="javascript:openHelpPopups();" style="right: 0px;">Help</div>

				<?php $this->load->view('personal_01_pagetitle'); ?>

				<div id="wrapper_whole" class="clearfix MM_test_PUdone"><!--WRAPPER-->
				    <div class="content_wrapper chocCardAvailable">
				        <!-- HELP -->
				        <div class="help_popup_holder">
				            <div class="help_popup_content">
				            	<div class="tip_holder" style="right:0;top:350px;" data-tip="1">
				            		<h2>Adding Images/Text</h2>
				            		<p>Click the arrows to upload an image or change the text on your card front.</p>
				            		<div class="skip_btn">Skip</div>
				            		<div class="next_btn">Next tip</div>
				            	</div>
				            	<div class="tip_holder" style="left:380px;top:115px;display:none;" data-tip="2">
				            		<h2>Navigating your card</h2>
				            		<p>Edit each part of your card by using the card tabs located here</p>
				            		<div class="skip_btn">Skip</div>
				            		<div class="next_btn">Next tip</div>
				            	</div>
				            	<div class="tip_holder" style="left:320px;top:0;display:none;" data-tip="3">
				            		<h2>Choose a card size</h2>
				            		<p>Pick the right card size for you by selecting one from the size tabs located here.</p>
				            		<div class="done_tip_btn">Got it</div>
				            	</div>
				            </div>
				        </div>
				        <!--/*size-price-top-area*/-->
					    <div class="border_box">
				            <div id="common_setting">
				                <div id="ctl00_ContentPlaceHolder1_CardFlow1_divSizeArea"> 
				                    <!--div class="left">Size:</!--div-->
				                    <div id="div_size" class="left">
				                        <div id="ctl00_ContentPlaceHolder1_CardFlow1_div_size_selecter"><ul class="sizes_normal"><li class="card_size_128  <?php if($data['paper_size']=='A3')echo "selectedSize";?>" onclick="javascript:UpdateProductPriceBySizeID('128');CheckImageRes('128',false);"><span>Giant <span>(A3)</span></span><br> <?php echo $currency_symbol.number_format(9.99*$currency_rate,2,'.', '');?><div class="priceToolTip"><img src="/assets/dist/images/tooltip_arrow.png">290x410mm | <strong> <?php echo $currency_symbol.number_format(9.99*$currency_rate,2,'.', '');?></strong></div></li><li class="card_size_8  <?php if($data['paper_size']=='A4')echo "selectedSize";?>" onclick="javascript:UpdateProductPriceBySizeID('8');CheckImageRes('8',false);"><span>Large <span>(A4)</span></span><br> <?php echo $currency_symbol.number_format(5.99*$currency_rate,2,'.', '');?><div class="priceToolTip"><img src="/assets/dist/images/tooltip_arrow.png">297x210mm | <strong> <?php echo $currency_symbol.number_format(5.99*$currency_rate,2,'.', '');?></strong></div></li><li class="card_size_11 <?php if($data['paper_size']=='A5')echo "selectedSize";?>" onclick="javascript:UpdateProductPriceBySizeID('11');CheckImageRes('11',false);"><span>Standard <span>(A5)</span></span><br> <?php echo $currency_symbol.number_format(3.29*$currency_rate,2,'.', '');?><div class="priceToolTip"><img src="/assets/dist/images/tooltip_arrow.png">148x210mm | <strong> <?php echo $currency_symbol.number_format(3.29*$currency_rate,2,'.', '');?></strong></div></li><li class="card_size_10  <?php if($data['paper_size']=='A6')echo "selectedSize";?>" onclick="javascript:UpdateProductPriceBySizeID('10');CheckImageRes('10',false);"><span>Small <span>(A6)</span></span><br> <?php echo $currency_symbol.number_format(2.29*$currency_rate,2,'.', '');?><div class="priceToolTip"><img src="/assets/dist/images/tooltip_arrow.png">148x105mm | <strong> <?php echo $currency_symbol.number_format(2.29*$currency_rate,2,'.', '');?></strong></div></li></ul></div>
				                        <input name="ctl00$ContentPlaceHolder1$CardFlow1$hiddenProductSize" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_hiddenProductSize" value="<?php $cardpapersizes=array("A3"=>'128',"A4"=>'8',"A5"=>11,"A6"=>10);echo $cardpapersizes[$data['paper_size']];?>">                
				                        
				                        
				                    </div>
				                    <a class="qnty_price left" onclick="javascript:cardSizePopup();">Size &amp; Pricing</a>
				                </div>
				                
				                <div id="div_boarder" style="float:left"></div><!--ADD FRAME-->
				                
				                <a class="confirm_tab btn_full btn_continue_preview settings_top" onclick="javascript:MoveNextPage(); false;">Continue</a>
				                <a onclick="javascript:ConfirmPageAndPreview();" class="standardPurpleBtn previewAndBuy right">Continue</a><!--PREVIEW AND BUY-->
				                
				                <!-- QUANTITY -->
				                <div class="right">
				                    <div class="left">QTY:</div>
				                    <input name="ctl00$ContentPlaceHolder1$CardFlow1$txtQuantity" value="1" maxlength="4" id="ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity" class="qnt_input left" type="text" onkeypress="javascript:NumericOnly(event)" onkeyup="javascript:UpdateProductPrice();">
				                    <div id="ctl00_ContentPlaceHolder1_CardFlow1_divCalQuantity" class="left qnt_calc_spinner"></div>
				                </div>
				                <!-- END QUANTITY -->
				                
				                <!-- PRICE -->
				                <div class="right priceQuantityCombo" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
				                    <meta itemprop="priceCurrency" content="GBP">
				                    <div class="left">Price:</div>
				                    <div class="ItemPrice left">
				                        <span id="ctl00_ContentPlaceHolder1_CardFlow1_divOldPrice" style="display:none"><span class="ice_size">£<span id="ctl00_ContentPlaceHolder1_CardFlow1_lblOldPrice"></span></span></span>
				                        £<span id="ctl00_ContentPlaceHolder1_CardFlow1_lblPrice" itemprop="price">3.29</span>
				                    </div>
				                    
				                    <input name="ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_HiddenPrice" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice'];?>">
				                    <input name="ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_HiddenOldPrice" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice'];?>">
				                    <input name="ctl00$ContentPlaceHolder1$CardFlow1$HiddenQPrice" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_HiddenQPrice" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenQPrice']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenQPrice'];?>">
				                    <input name="ctl00$ContentPlaceHolder1$CardFlow1$HiddenQOldPrice" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_HiddenQOldPrice" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenQOldPrice']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$HiddenQOldPrice'];?>">
				                    <link itemprop="availability" href="http://schema.org/InStock">
				                </div>
				                <!-- END PRICE -->
				            </div>
				        </div>

				        <!--upgrade your card----->
				        <div id="ctl00_ContentPlaceHolder1_CardFlow1_feature_product_wrapper" class="chocCardsWrapper A4Combo" style="display: none;">
				        	<input type="hidden" id="fp_cat_type" value="">
				        	<input type="checkbox" class="chocInput" name="active_fp" id="active_fp_218" value="218|8.7000" onclick="AddFeatureProduct('218', '8.7000')">
				        	<input type="checkbox" class="chocInput" name="active_fp" id="active_fp_243" value="243|8.7000" onclick="AddFeatureProduct('243', '8.7000')">
				        	<input type="checkbox" class="chocInput" name="active_fp" id="active_fp_222" value="222|8.7000" onclick="AddFeatureProduct('222', '8.7000')">
				        	<input type="checkbox" class="chocInput" name="active_fp" id="active_fp_281" value="281|8.7000" onclick="AddFeatureProduct('281', '8.7000')">
				        	<div class="new_upgrades" style="">
				        		<h1>Upgrade your card:</h1>
				        		<div class="chocCardUpgrade" onclick="javascript:ChocAddon();">
				        			<div class="upgradeTick" onclick="javascript:ChocAddon();"><img src="/assets/dist/images/ChocTick.png">
				        			</div>
				        			<span>Luxury Chocolate Card</span>
				        			<span class="upgraded_choc_message">You have selected a Luxury Chocolate Card</span>
				        		</div>
				        		<span class="lineDevide">|</span><div class="largeCardUpgrade" onclick="javascript:LargeAddon();">
				        			<div class="upgradeTick" onclick="javascript:LargeAddon();"><img src="/assets/dist/images/ChocTick.png">
				        			</div>
				        			<span>Large Card</span>
				        		</div>
			        			<div class="upgradeRemove" onclick="javascript:RemoveFeatureProduct();">
			        				<img src="/assets/dist/images/remove_btn.png"> Remove
			        			</div>
		        				<input type="hidden" class="chocSelected" value="birthday">
		        			</div>
		        		</div>

		        		<div id="SquareCardsOnlyMessage" class="chocCardsWrapper">Square cards cannot be upgraded to luxury chocolate cards<a class="chocCardMoreInfo" >Click here for more information</a></div><!--href="/ChocolateCards"-->

		        		<!--PAGE PRELOADER-->
		        		<div id="ICE_preloader" style="display: none;">
				            <div class="ICE_preloader_wrapper">
				                <img style="width: 280px;" src="/assets/dist/images/waiting.gif">
				                <h1><span style="color:#203750;">Preparing your product
				            </div>
				        </div>

				        <div id="error" style="display: none;">
				        	<div class="error_wrapper">
				        		<h1>Check your photos...</h1>
				        		<p>You have used the same photo more than once on this card. Do you wish to continue ?</p>
				        		<div class="btn_close_error" onclick="javascript:savepagesessionsintodb('1'); CloseError();$('#ICE_preloader').fadeIn();">YES</div>
				        		<div class="btn_close_error" onclick="javascript:CloseError();">NO</div>
				        	</div>
				        </div>

				        <!--main area-->
		        		<div id="main_wrapper" class="card-editor photos1">
		        			<!--main left side-->
		        			<div class="CardLeftPanel left">
				                <!--CARD NAVIGATION-->
				                <div class="CardNavigation">
				                    <ul class="main_tab_navigation">
				                        <li class="tab_front tab_active" id="tab_main_card_front">
				                        	<a  onclick="javascript:mainTabClick('1'); return false;">Front</a>
				                        </li>
				                        <li class="tab_il" id="tab_main_cardinside_left"><a  onclick="javascript:mainTabClick('2'); return false;">Inside Left</a>
				                        </li>
				                        <li class="tab_ir" id="tab_main_cardinside_right"><a  onclick="javascript:mainTabClick('3'); return false;">Inside Right</a>
				                        </li>
				                        <li class="tab_back" id="tab_main_card_back"><a  onclick="javascript:mainTabClick('4'); return false;">Back</a>
				                        </li>
				                    </ul>
				                    <div class="card_nav_prompt" style="display: none;">
				                        <img class="point" src="/assets/dist/images/bg_label_point_top.png">
				                        <img class="icon" src="/assets/dist/images/icon_pencil.png">
				                        Select a side to personalise
				                    </div>
				                </div>
				                <!--END CARD NAVIGATION-->
				                <div id="ctl00_ContentPlaceHolder1_CardFlow1_card_page_left" class="left" style="display:none;">
				                	<img src="/assets/dist/images/page_left.gif"/>
				                </div>
				                <div id="ctl00_ContentPlaceHolder1_CardFlow1_card_page_top" style="display:none;">
				                	<img src="/assets/dist/images/page_top.gif">
				                </div>
				                <div id="main_card_wrapper" style="float: left; padding-top: 20px;">
				                    <!--template-front-->
				                    <div id="ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_front" style="">
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$AW" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_AW" value="96" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$CW" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_CW" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$AH" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_AH" value="97" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$CH" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_CH" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$activeControl" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_activeControl" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$activeControl']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$activeControl'];?>" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$activeControlDrag" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_activeControlDrag"  value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$activeControlDrag']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$activeControlDrag'];?>" />   
				                    	<div id="ctl00_contentMain_tpFirstPage" style="border: 1px solid rgb(204, 204, 204); overflow: hidden; background: rgb(239, 239, 239); height: 459px; width: 323px; position: relative;">
				                    		
				                    		<?php foreach ($_jobj_image_front as $img){?>
				                    		<div id="<?php echo $img->DragId;?>" class="ui-droppable" style="position:absolute;width:<?php echo $img->DragWidth;?>; height:<?php echo $img->DragHeight;?>; top:<?php echo $img->DragY;?>;left:<?php echo $img->DragX;?>;overflow: hidden;">
			                    				<img id="<?php echo $img->ImageId;?>" src="<?php echo $img->Src;?>" style="position:relative;width:<?php echo $img->DragWidth;?>; height:<?php echo $img->DragHeight;?>; background: rgb(221, 255, 204); cursor: move; transform: rotate(0deg); "/>
				                    		</div>
				                    		<?php }?>
				                    		
				                    		
											<!--//background-->
				                    		<img id="templateimage" itemprop="image" src="<?php echo $data['photo_product_row']['photo8'];?>" style="border-width: 0px; position: relative; left: 0mm; top: 0mm; height: 460px; width: 323px; cursor: pointer;" alt="<?php echo $data['photo_product_row']['titles'];?>"/>
				                    		<img style="display: none;" id="_templateimage" src="<?php echo $data['photo_product_row']['backgrounds'];?>"/>
				                    		<!--//img-->

				                    		<?php foreach ($_jobj_image_front as $img){?>
				                    		<div id="skeleton_<?php echo $img->ImageId;?>" class="pu_area mandatory_image" style="position:absolute; z-index:998; cursor: pointer; width:<?php echo $img->DragWidth;?>; height:<?php echo $img->DragHeight;?>; top:<?php echo $img->DragY;?>;left:<?php echo $img->DragX;?>;overflow: hidden;" onclick="SetFocusImage('<?php echo $img->ImageId;?>','<?php echo $img->DragId;?>','<?php echo $img->DragWidth;?>','<?php echo $img->DragHeight;?>','<?php echo $img->DragX;?>','<?php echo $img->DragY;?>',$('#thum_<?php echo $img->ImageId;?>').attr('src'));">
				                    		</div>
				                    		<?php }?>
			                    		    <!--//text-->

			                    		    <?php foreach ($_jobj_text_front as $txt){?>
				                    		<div id="skeleton_<?php echo $txt->TextId;?>" class="txt_field_left mandatory_text" style="position:absolute; z-index:999; cursor: pointer; width:<?php echo $txt->AW;?>; height:<?php echo $txt->AH;?>; top:<?php echo $txt->Y;?>;left:<?php echo $txt->X;?>;" onclick="SetFocusText('skeleton_<?php echo $txt->TextId;?>','<?php echo $txt->TextId;?>');">
			                    				<div class="mm_txtHighlight">
			                    					<div class="mm_txt">T</div>
			                    					<div class="dot"></div>
			                    				</div>
			                    			</div>
			                    			<?php echo $txt->DefaultText;}?>
			                    		</div>
			                    	</div>
		                    		
			                    	<!--template-left-->
				                    <div id="ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideleft" style="display:none;">
				                    	<div style="border:1px solid #ccc; width:323px; height:459px;">
										  <div style="padding:4%;">  
			                    		  <?php 
			                    		  $html='';
			                    		  $objs=explode(',', ',1/1/1,1,0/1,1/0,0,1/1,0/0,0/0/0/0/0,0/0/0/0,0/0/0,0/1/0/1');
			                    		  $tcnt=0;$icnt=0;
			                    		  $objs_code=explode('/', $objs[$temp_left_idx]);
			                    		  for($ti=0;$ti<count($objs_code);$ti++){
			                    		        if($objs_code[$ti]=='1'){
			                    		        	$txt=$_jobj_text_cardinside_left[$tcnt];
			                    		    	    $html.="<div style=\"position:relative; margin:0% 0% 1% 1%; float:left;width:{$txt->AW}px; height:{$txt->AH}px; border:1px dashed #ccc;\">".
											      		"<div id=\"{$txt->LableId}_2\" style=\"height:{$txt->AH}px; width:{$txt->AW}px; overflow:hidden; cursor:text;\" onclick=\"javascript:loadPersonalizeTextCustomize('{$txt->LableId}_2');\">".
											      			$txt->Text.
											      		"</div>".      
									    			"</div>";
									    			$tcnt++;
									    		}else if($objs_code[$ti]=='0'){
			                    		        	$img=$_jobj_image_cardinside_left[$icnt];
			                    		    	    $html.="<div style=\"position:relative; margin:0% 0% 1% 1%;float:left; width:{$img->DragWidth}px; height:{$img->DragHeight}px; border:1px dashed #ccc;\">".
											      		"<div id=\"{$img->DragId}\" style=\"position:relative; width:{$img->DragWidth}px; height:{$img->DragHeight}px; overflow:hidden;\" onclick=\"javascript:SetFocusImage('{$img->ImageId}', '{$img->DragId}', '{$img->DragWidth}', '{$img->DragHeight}', '0', '0', '{$img->Src}');\" class=\"ui-droppable\">".
											      			"<img crossorigin=\"anonymous\" id=\"{$img->ImageId}\" src=\"{$img->Src}\" style=\"position:relative; left:0px; top:0px; width:".($img->DragWidth-2)."px; height:".($img->DragHeight-2)."px; background:#DFC; cursor:move;\">".
											      		"</div>".      
									    			"</div>";
									    			$icnt++;
									    		}
									    	}	
									    	echo "{$html}";
										    ?>  
											</div>
										</div>
									</div>



									<!--template-right-->
				                    <div id="ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_cardinsideright" style="display:none;">
				                    	<div style="border:1px solid #ccc; width:323px; height:459px;">
										  <div style="padding:4%;">  
			                    		  <?php 
			                    		  $html='';
			                    		  $objs=explode(',', '1/1/1,1,0/1,1/0,0,1/1,0/0,0/0/0/0/0,0/0/0/0,0/0/0,0/1/0/1');
			                    		  $tcnt=0;$icnt=0;
			                    		  $objs_code=explode('/', $objs[$temp_right_idx]);
			                    		  for($ti=0;$ti<count($objs_code);$ti++){
			                    		        if($objs_code[$ti]=='1'){
			                    		        	$txt=$_jobj_text_cardinside_right[$tcnt];
			                    		    	    $html.="<div style=\"position:relative; margin:0% 0% 1% 1%; float:left;width:{$txt->AW}px; height:{$txt->AH}px; border:1px dashed #ccc;\">".
											      		"<div id=\"{$txt->LableId}_3\" style=\"height:{$txt->AH}px; width:{$txt->AW}px; overflow:hidden; cursor:text;\" onclick=\"javascript:loadPersonalizeTextCustomize('{$txt->LableId}_3');\">".
											      			$txt->Text.
											      		"</div>".      
									    			"</div>";
									    			$tcnt++;
									    		}else if($objs_code[$ti]=='0'){
			                    		        	$img=$_jobj_image_cardinside_right[$icnt];
			                    		    	    $html.="<div style=\"position:relative; margin:0% 0% 1% 1%;float:left; width:{$img->DragWidth}px; height:{$img->DragHeight}px; border:1px dashed #ccc;\">".
											      		"<div id=\"{$img->DragId}\" style=\"position:relative; width:{$img->DragWidth}px; height:{$img->DragHeight}px; overflow:hidden;\" onclick=\"javascript:SetFocusImage('{$img->ImageId}', '{$img->DragId}', '{$img->DragWidth}', '{$img->DragHeight}', '0', '0', '{$img->Src}');\" class=\"ui-droppable\">".
											      			"<img crossorigin=\"anonymous\" id=\"{$img->ImageId}\" src=\"{$img->Src}\" style=\"position:relative; left:0px; top:0px; width:".($img->DragWidth-2)."px; height:".($img->DragHeight-2)."px; background:#DFC; cursor:move;\">".
											      		"</div>".      
									    			"</div>";
									    			$icnt++;
									    		}
									    	}	
									    	echo "{$html}";
										    ?>  
											</div>
										</div>
									</div>
									<!--template-back-->
				                    <div id="ctl00_ContentPlaceHolder1_CardFlow1_main_card_wrapper_back" style="display:none;">
				                    	<div id="back-background-img" style="border:1px solid #ccc; width:323px; height:459px; position: relative; background:url(/assets/dist/images/FunkyPigeon_Back_P.jpg) no-repeat;">
				                    	  <div style="padding:2%;">
										    <?php
												$html="";
												foreach($_jobj_image_back as $img){
													$html.="<div class=\"inside_bound ui-droppable\" id=\"{$img->DragId}\" style=\"margin:10px auto; width:{$img->DragWidth}px; height:{$img->DragHeight}px; overflow:hidden; border:dashed #FFCCFF 1px;\" onclick=\"javascript:SetFocusImage('{$img->ImageId}', '{$img->DragId}', '{$img->DragWidth}', '{$img->DragHeight}', '{$img->DragX}', '{$img->DragY}', $('#thum_{$img->ImageId}').attr('src'));\">".
														"<img crossorigin=\"anonymous\" id=\"{$img->ImageId}\" src=\"{$img->Src}\" style=\"position:relative; left:{$img->DragY}px; top:{$img->DragY}px; width:{$img->DragWidth}px; height:{$img->DragHeight}px; background:#DFC; cursor:move;\">".
														"</div>";
												}
												echo $html;

												$html="";
												foreach($_jobj_text_back as $txt){
													$html.="<div style=\"padding:1%; margin-bottom:4%; position:relative;\" class=\"inhouseBack\">".
														"<div id=\"{$txt->LableId}\" style=\"margin:0px auto; border:1px dashed #ccc; height:{$txt->AH}px; width:93%; overflow:hidden; cursor:text; text-align:center;\" onclick=\"javascript:loadPersonalizeTextCustomize('{$txt->LableId}');\">{$txt->Text}</div>".
														"</div>";
												}
												echo $html;
											?>    
										    <div id="loading_mask_container_card_4"></div>
										  </div>
										</div>
									</div>
									
									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_front_wrapper" style="">
										<?php foreach ($_jobj_image_front as $img){?>
			                    		<div class="left">
											<img style="display: none!Important;" id="thum_<?php echo $img->ImageId;?>" src="<?php echo $img->Src;?>" width="50px" height="50px" onclick="javascript:SetFocusImage('<?php echo $img->ImageId;?>','<?php echo $img->DragId;?>','<?php echo $img->DragWidth;?>','<?php echo $img->DragHeight;?>','<?php echo $img->DragX;?>','<?php echo $img->DragY;?>',$('#thum_<?php echo $img->ImageId;?>').attr('src'));">
											<input type="hidden" id="<?php echo $img->ImageId;?>X" name="<?php echo $img->ImageId;?>X" value="<?php echo $img->X;?>">
											<input type="hidden" id="<?php echo $img->ImageId;?>Y" name="<?php echo $img->ImageId;?>Y" value="<?php echo $img->Y;?>">
											<input type="hidden" id="<?php echo $img->ImageId;?>CW" name="<?php echo $img->ImageId;?>CW" value="<?php echo $img->DragWidth;?>">
											<input type="hidden" id="<?php echo $img->ImageId;?>CH" name="<?php echo $img->ImageId;?>CH" value="<?php echo $img->DragHeight;?>">
											<input type="hidden" id="<?php echo $img->ImageId;?>RT" name="<?php echo $img->ImageId;?>RT" value="0">
										</div>
										<div class="left">&nbsp;</div>
			                    		<?php }?>
										<div style="clear:both;"></div>
									</div>

									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideleft_wrapper" style="display:none;">
										<div style="clear:both;">
											
										</div>
									</div>

									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_cardinsideright_wrapper" style="display:none;">
										<div style="clear:both;">
											
										</div>
									</div>

									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_image_back_wrapper" style="display:none;">
										<?php
											$html="";
											foreach($_jobj_image_back as $img){
												$html.="<div class=\"left\">".
												    "<img style=\"display: none!Important;\" id=\"thum_{$img->ImageId}\" src=\"{$img->Src}\" width=\"50px\" height=\"50px\" onclick=\"javascript:SetFocusImage('{$img->ImageId}', '{$img->DragId}', '{$img->DragWidth}', '{$img->DragHeight}', '{$img->DragX}', '{$img->DragY}', $('#thum_{$img->ImageId}').attr('src'));\">".
													"<input type=\"hidden\" id=\"{$img->ImageId}X\" name=\"{$img->ImageId}X\" value=\"0\">".
													"<input type=\"hidden\" id=\"{$img->ImageId}Y\" name=\"{$img->ImageId}Y\" value=\"0\">".
													"<input type=\"hidden\" id=\"{$img->ImageId}CW\" name=\"{$img->ImageId}CW\" value=\"\">".
													"<input type=\"hidden\" id=\"{$img->ImageId}CH\" name=\"{$img->ImageId}CH\" value=\"\">".
													"<input type=\"hidden\" id=\"{$img->ImageId}RT\" name=\"{$img->ImageId}RT\" value=\"0\">".
													"</div>".
													"<div class=\"left\">&nbsp;</div>";
											}
											echo $html;
										?>
										<!--<div class="left">
											<img style="display: none;" id="thum_cardtype_im1_4" src="/assets/dist/images/100x100.jpg" width="50px" height="50px" onclick="javascript:SetFocusImage('cardtype_im1_4', 'cardtype_drag1_4', '100', '100', '0', '0', $('#thum_cardtype_im1_4').attr('src'));">
											<input type="hidden" id="cardtype_im1_4X" name="cardtype_im1_4X" value="0">
											<input type="hidden" id="cardtype_im1_4Y" name="cardtype_im1_4Y" value="0">
											<input type="hidden" id="cardtype_im1_4CW" name="cardtype_im1_4CW" value="">
											<input type="hidden" id="cardtype_im1_4CH" name="cardtype_im1_4CH" value="">
											<input type="hidden" id="cardtype_im1_4RT" name="cardtype_im1_4RT" value="0">
										</div>
										<div class="left">&nbsp;</div>
										-->
										<div style="clear:both;"></div>
									</div>
									<br>
									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_front_wrapper" style="display: none;">
									</div>
									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideleft_wrapper" style="display:none;">
										<div class="left" id="image_selected">

										</div>
									</div>
									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_cardinsideright_wrapper" style="display:none;"></div>
									<div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_selected_image_back_wrapper" style="">
										<div class="left" id="image_selected">
											<img src="/assets/dist/images/100x100.jpg" width="50px" height="50px">
										</div>
									</div>
				            	</div>

				                <div id="ctl00_ContentPlaceHolder1_CardFlow1_card_page_right" class="left" style="display:none;">
				                	<img src="/assets/dist/images/page_right.gif">
				                </div>
				                <div id="ctl00_ContentPlaceHolder1_CardFlow1_card_page_bottom" style="display:none;">
				                	<img src="/assets/dist/images/page_bottom.gif">
				                </div>			            
				            </div>

				            <div id="main_control_wrapper" style="float:right;" class="main_tab">
				                <div id="main_tab" style="width: 486px;">
				                    <div>
				                        <span id="main_heading">
				                        	<h2>Card Front</h2>
				                        </span>
				                    </div>
				                    <div id="main_tab_front" style="display: none;">
				                        <div class="tab_container" id="sub_tab_front_personalize_main">
				                            <div class="forms">
				                             <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_text_wrapper" style="">
				                             	<div id="fields" style="height: 0px;">
				                             		<ul id="accordion">
				                             			<?php foreach ($_jobj_text_front as $txt){?>
						                    			<li class="activeField">
				                             				<a class="heading">
				                             					<input type="text" class="formsinputtype1" id="<?php echo $txt->TextId;?>" name="<?php echo $txt->TextId;?>" maxlength="<?php echo $txt->MaxLength;?>" autocomplete="off" value="<?php echo $txt->Text;?>" size="30"  onclick="javascript:SelectFrontPageTextOnRightPane('skeleton_<?php echo $txt->TextId;?>', '<?php echo $txt->TextId;?>');"
				                             					>
				                             				</a>
				                             				<ul>
				                             					<li>
				                             						Max Characters: <span></span>
				                             					</li>
				                             				</ul>
				                             			</li>
						                    			<?php }?>
				                             		</ul>
				                             	</div>
				                             </div>
				                             <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_js_wrapper_front" style="display:none;">
				                             	<script type="text/javascript">
				                             	<?php 
				                             	$html="";
			                             		for($i=1;$i<6;$i++){
					                    			$style=explode(";",str_replace(" ", "", $data['photo_product_row']['photostyle'.$i]));
					                    			foreach($style as $sl){
					                    				$ss=explode(":",$sl);
					                    				if(isset($ss[1]))$style_[$ss[0]]=$ss[1];
					                    			}
					                    			$l=0;if(isset($style_['left']))$l=$style_['left'];
					                    			$t=0;if(isset($style_['top']))$t=$style_['top'];
					                    			$w=0;if(isset($style_['width']))$w=$style_['width'];
					                    			$h=0;if(isset($style_['height']))$h=$style_['height'];
					                    			if($data['photo_product_row']['phototag'.$i]=='IMG'){
				                    			
					                    			$html.="var album_thumb_holder_{$i} = $(\"#cardtype2_drag{$i}\");album_thumb_holder_{$i}.droppable({ accept: '.gallery-list ul li', activeClass: 'active', hoverClass: 'hover', tolerance: 'touch', drop: album_thumb_drop_{$i} });function album_thumb_drop_{$i}(event, ui) {dobackendprocess($(\"img\", ui.draggable).attr('src'), $(\"img\", ui.draggable).attr('rel'), 'cardtype2_im{$i}', 'cardtype2_drag{$i}', '{$w}', '{$h}', '0', '0', '".($data['photo_product_row']['photo'.$i])."');album_thumb_holder_{$i}.removeClass(\"loading\");sortlist.sortable(\"cancel\");}";
					                    		}}
				                    			echo $html;
					                    		?>	
				                             	</script>
				                             </div>
				                             <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_js_wrapper_cardinside_left" style="display:none;"></div>
				                             <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_js_wrapper_cardinside_right" style="display:none;"></div>
				                             <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_js_wrapper_back" style="display:none;"></div>
				                             <div class="tip_txt_char_limit">
				                             	<span><i>i</i></span> You have reached the character limit. 
				                             </div>
				                             <input name="ctl00$ContentPlaceHolder1$CardFlow1$btnPreview" type="button" id="ctl00_ContentPlaceHolder1_CardFlow1_btnPreview" class="formsinputtype2 updateMessage standardPurpleBtn" value="Update Message" onclick="PreserveEnteredData('<?php echo $i;?>');" style="display: inline-block;">
				                            </div>
				                        </div>            
			                    	</div>

			                    	<!--##################################################### -- TAB INSIDE -- #########################################################-->
				                    <div id="main_tab_inside" style="display:none;">
				                        <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_text_wrapper_cardinsideleft">
				                        	<?php 
					                    	if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_1'){?>
				                        	<table cellpadding='0' cellspacing='0' width='100%' border='0'>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_1_2_hidden' name='ci_div_lable_1_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_2_2_hidden' name='ci_div_lable_2_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_3_2_hidden' name='ci_div_lable_3_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        	</table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_2'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_6'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_9'){?>
				                        	<table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td><input type="hidden" id="ci_div_lable_1_2_hidden" name="ci_div_lable_1_2_hidden" value=""></td></tr></tbody></table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_blank'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_4'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_8'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_10'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_11'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_12'){?>
				                        	<table cellpadding="0" cellspacing="0" width="100%" border="0"></table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_7'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=='cardinside_template_13'){?>
						                    <table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td><input type="hidden" id="ci_div_lable_1_2_hidden" name="ci_div_lable_1_2_hidden" value=""></td></tr><tr><td><input type="hidden" id="ci_div_lable_2_2_hidden" name="ci_div_lable_2_2_hidden" value=""></td></tr></tbody></table>
				                        	<?php }?>
				                        </div>
				                        <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_text_wrapper_cardinsideright">
				                        	<?php 
					                    	if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_1'){?>
				                        	<table cellpadding='0' cellspacing='0' width='100%' border='0'>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_1_3_hidden' name='ci_div_lable_1_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_2_3_hidden' name='ci_div_lable_2_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_3_3_hidden' name='ci_div_lable_3_3_hidden' value='<table style="width: 100%; height: 100%;"><tbody><tr><td style="vertical-align: middle;"><div style="text-align: center;"><cj></cj></div></td></tr></tbody></table>'>
				                        			</td>
				                        		</tr>
				                        	</table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_2'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_6'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_9'){?>
				                        	<table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td><input type="hidden" id="ci_div_lable_1_3_hidden" name="ci_div_lable_1_3_hidden" value=""></td></tr></tbody></table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_blank'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_4'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_8'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_10'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_11'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_12'){?>
				                        	<table cellpadding="0" cellspacing="0" width="100%" border="0"></table>
				                        	<?php }else if($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_7'||$data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=='cardinside_template_13'){?>
						                    <table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td><input type="hidden" id="ci_div_lable_1_3_hidden" name="ci_div_lable_1_3_hidden" value=""></td></tr><tr><td><input type="hidden" id="ci_div_lable_2_3_hidden" name="ci_div_lable_2_3_hidden" value=""></td></tr></tbody></table>
				                        	<?php }?>
				                        </div>
				                        <div id="ctl00_ContentPlaceHolder1_CardFlow1_personalize_text_wrapper_back">
				                        	<table cellpadding='0' cellspacing='0' width='100%' border='0'>
				                        		<tr>
				                        			<td>
				                        				<input type='hidden'  id='ci_div_lable_1_4_hidden' name='ci_div_lable_1_4_hidden' value=''>
				                        			</td>
				                        		</tr>
				                        	</table>
				                        </div>
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_standard_left" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_left" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_standard_left'];?>" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_standard_right" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_standard_right" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_standard_right'];?>" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_advanced_left" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_advanced_left" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_advanced_left'];?>" />
										<input name="ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_advanced_right" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_PersonalizeCardInside1_hidden_template_cardinside_advanced_right" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_advanced_right'];?>" />
			                			
			                			<div class="tab_container" id="cardinside_personalise_main">      
											<!------------------ TAB STANDARD ------------------>
											<div class="content cardinside_standard">
										    	<!-- CARD TEMPLATES -->
										    	<div id="div_template_wraper_standard">
										        	<div id="thumb_slide_cardinside_standars" class="thumb_slide navigation"></div>   
									    		</div>         
										    	<!-- CARD BACK -->
										    	<div class="forms_card_back"> 
											        <p>Preview your card before purchasing</p>
											        <input id="btnConfirmAndPreview" type="button"  class="confirm_tab standardPurpleBtn"  value="Preview your card" onclick="javascript:ConfirmPageAndPreview();" />
											        <a id="Final_preview_A" href="newFlow_FinalPreview_WC.aspx?call=f&olid=FH8DXWNvIg4%2fNyectH8FtA%3d%3d" onclick="javascript:ClickPreview();" style="display:none;"></a>
											        <p><i>or personalise further...</i></p>
											        <a href="#main_tab" onclick="javascript:mainTabClick('1'); return false;" class="CardBackLink">Front</a>
											        <a href="#main_tab" onclick="javascript:mainTabClick('2'); return false;" class="CardBackLink">Card Inside Left</a>
											        <a herf="#main_tab" onclick="javascript:mainTabClick('3'); return false;" class="CardBackLink">Card Inside Right</a>
										    	</div>             
										    </div>
										</div>
									</div>

									<!--INPUT RESPONSE WHEN CLICKED-->
									<div id="common_imageupload_button_panel" style="display:none;">
				                        <div>
				                            <h2>Upload an Image From</h2>
				                            <input id="Button12" type="button" class="formsinputtype2 btn_inside_mycomp" value="My Computer" onclick="javascript:loadPersonalizeImageUploader(1);">
				                            <input id="Button13" type="button" class="formsinputtype2 btn_inside_img_upload btn_mylib" value="My Photos" onclick="javascript:loadPersonalizeImageUploader(2);">

				                            <input id="Button1" type="button" class="formsinputtype2 inside_fb_upload" value="" onclick="javascript:loadPersonalizeImageUploader(3);">
				                            <input id="Button16" type="button" class="formsinputtype2 inside_flickr_upload" value="" onclick="javascript:loadPersonalizeImageUploader(4);">
				                            <div class="clear"></div>
				                        </div>
				                        <div style="height:150px;">&nbsp;</div>
				            	        <div class="formsinner">
				                            <input id="Button2" type="button" class="formsinputtype2 btn_cancel" value="Back" onclick="javascript:backFromPersonalizeImageuploader();">
				                            <div class="clear"></div>
				                        </div>
				                    </div>

				                    <?php $this->load->view('personal_01_imageuploader'); ?>

									<?php $this->load->view('personal_01_imagecustomize'); ?>

									<?php $this->load->view('personal_01_textcustomize'); ?>

									<!-- =============================================== NEXT STEP PROMPT =============================================== -->
									<div id="next_steps_front" style="display:none;">
				                        <div class="left column_60perc">
				                            <p>Write a message inside your card or preview and buy.</p>
				                            <div class="standardPurpleBtn" onclick="javascript:mainTabClick('3'); return false;">Write a message</div>
				                            <p class="text_align_center"><strong>or</strong></p>
				                            <div class="standardPurpleBtn" onclick="javascript:ConfirmPageAndPreview();">Preview and Buy</div>
				                        </div>
				                        <div class="right column_40perc">
				                            <img class="prompt_portrait" src="/assets/dist/images/prompt_portrait.gif">
				                            <img class="prompt_landscape" src="/assets/dist/images/prompt_landscape.gif">
				                            <img class="prompt_square" src="/assets/dist/images/prompt_square.gif">
				                        </div>
				                    </div>
			                	</div>
				            </div>

				            <div class="google_rich">
				            	<!--img src="../uimg/External02/Card_BDay18_Danilo_LS_PULO02_PU_P.jpg" id="ctl00_ContentPlaceHolder1_CardFlow1_google_rich_img" itemprop="image"-->
				            </div>

				            <div id="product_final_preview"></div>
		        		</div>

		        		<div class="border_box bottom">
				            <div id="common_setting">
				                <a onclick="javascript:ConfirmPageAndPreview();" class="standardPurpleBtn previewAndBuy right">Continue</a><!--PREVIEW AND BUY-->
				            </div>
				        </div>
				        <!-- card size popup -->
				        <div class="fancierbox_addons card_size_popup">
					        <div class="AddOnHolder">
					            <div class="hat_header">
					                <h1>Card Sizes &amp; Pricing</h1>
					                <div class="btn_cancel" onclick="javascript:closeOrderPopup()"><img src="/assets/dist/images/icon_send_email_close.png"></div>
					                <!-- FLOWER ADD-ONS -->
					            </div>
					            <!-- =============================================== SIZE AND PRICE INFO - UK =============================================== -->
				                <div id="SIZE_help">
					                <img class="pricing_image" src="/assets/dist/images/CardSizeTypes.jpg">
					                <!--SMALL A6 PRICES-->
					                <div class="discount_table ITF_table left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Small (A6) Prices £1.99</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">10 - 20</td>
					                            <td class="cdp">£1.39</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">21 - 40</td>
					                            <td class="cdp">£1.09</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">41 - 60</td>
					                            <td class="cdp">£0.89</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">61 +</td>
					                            <td class="cdp">£0.79</td>
					                        </tr>
					                    </tbody></table>
					                </div>
					                <!--STANDARD A5 PRICES-->
					                <div class="discount_table ITF_table left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Standard (A5) Prices £3.29</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">10 - 20</td>
					                            <td class="cdp">£1.69</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">21 - 40</td>
					                            <td class="cdp">£1.49</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">41 - 60</td>
					                            <td class="cdp">£0.99</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">61 +</td>
					                            <td class="cdp">£0.89</td>
					                        </tr>
					                    </tbody></table>
					                </div>
					                <!--Large A4 PRICES-->
					                <div class="discount_table ITF_table ITF_noright left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Large (A4) Prices £5.99</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">10 - 20</td>
					                            <td class="cdp">£3.29</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">21 - 40</td>
					                            <td class="cdp">£2.99</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">41 - 60</td>
					                            <td class="cdp">£2.49</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">61 +</td>
					                            <td class="cdp">£1.99</td>
					                        </tr>
					                    </tbody></table>
					                </div>
					                <!--SQUARE PRICES-->
					                <div class="discount_table ITF_table left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Square Prices £2.99</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">10 - 20</td>
					                            <td class="cdp">£1.69</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">21 - 40</td>
					                            <td class="cdp">£1.49</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">41 - 60</td>
					                            <td class="cdp">£0.99</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">61 - 100</td>
					                            <td class="cdp">£0.89</td>
					                        </tr>
					                    </tbody></table>
					                </div>
					                <!--LARGE SQUARE PRICES-->
					                <div class="discount_table ITF_table left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Large Square card £5.99</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">10 - 20</td>
					                            <td class="cdp">£3.29</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">21 - 40</td>
					                            <td class="cdp">£2.99</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">41 - 60</td>
					                            <td class="cdp">£2.49</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">61 +</td>
					                            <td class="cdp">£1.99</td>
					                        </tr>
					                    </tbody></table>
					                </div>
					                <!--Postcard PRICES-->
					                <div class="discount_table ITF_table ITF_noright left">
					                    <table cellpadding="0" cellspacing="0">
					                        <tbody><tr><th colspan="2">Postcard Prices</th></tr>
					                        <tr>
					                            <td><strong>Qty of Cards</strong></td>
					                            <td><strong>Price Per Card</strong></td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">6 - 10</td>
					                            <td class="cdp">£1.39</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">11 - 30</td>
					                            <td class="cdp">£1.29</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">31 - 50</td>
					                            <td class="cdp">£1.19</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">51 - 100</td>
					                            <td class="cdp">£1.09</td>
					                        </tr>
					                        <tr>
					                            <td class="cdp">101+</td>
					                            <td class="cdp">£0.99</td>
					                        </tr>
					                    </tbody></table>
					                </div>
				                </div>
					        </div>
					    </div>

					    <div id="ctl00_ContentPlaceHolder1_CardFlow1_DivDscWrapper" class="seo_tab_wrapper">
					        <div class="tab_similar_cards seo_tab" data-tab="product_description">Description</div>
					        <div class="tab_similar_cards seo_tab seo_tab_active" data-tab="delivery_text">Delivery Information</div>
					        <!-- TRUSTPILOT PROD REVIEW -->
					        <div class="product_review seo_tab_info" style="display: none;">
				            	<div class="trustpilot-widget" data-locale="en-GB" data-template-id="5717796816f630043868e2e8" data-businessunit-id="4bedb38600006400050ba480" data-style-height="440px" data-style-width="100%" data-theme="light" data-sku="9632" data-name="HAP-PEA-NESS - Baby Boy" style="position: relative;">
				            		<iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/5717796816f630043868e2e8/index.html?templateId=5717796816f630043868e2e8&amp;businessunitId=4bedb38600006400050ba480#locale=en-GB&amp;styleHeight=440px&amp;styleWidth=100%25&amp;theme=light&amp;sku=9632&amp;name=%0A%20%20%20%20%20%20%20%20HAP-PEA-NESS%20-%20Baby%20Boy%0A%20%20%20%20" style="position: relative; height: 440px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
				        	</div>
				        	<!--SEO TEXT-->
				        	<div id="ctl00_ContentPlaceHolder1_CardFlow1_product_text" class="product_description seo_tab_info" style="display: none;"><p itemprop="description">Personalised HAP-PEA-NESS New Baby Card with photo upload</p></div>
				        	<!--DELIVERY INFORMATION-->
				        	<div class="delivery_text seo_tab_info" style="display: block;">
								<div class="seo_show_more">
								    <table cellpadding="0" cellspacing="0">
								        <tbody><tr>
								            <td>Standard First Class Post<span>(1-3 days for delivery)</span></td>
								            <td>£0.70 - £1.00<span>(depending on card size)</span></td>
								        </tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 1pm</span></td>
								            <td>£6.75</td>
								        </tr>
								        <tr>
								            <td>UK Next Working Day<span>delivery before 9am</span></td>
								            <td>£10.95</td>
								        </tr>
								        <tr>
								            <td>Saturday Guaranteed</td>
								            <td>£7.95</td>
								        </tr>
								        <tr>
								            <td>HERMES Courier<span>giant cards only - UK only</span></td>
								            <td>£2.99</td>
								        </tr>
								        <tr>
								            <td>Airmail (Europe)<span>delivery 3-5 days</span></td>
								            <td>£1.50 to £1.95<span>(depending on card size)</span></td>
								        </tr>
								        <tr>
								            <td>Airmail (Rest of World)<span>delivery 7-10 days</span></td>
								            <td>£1.50 to £3.75<span>(depending on card size)</span></td>
								        </tr>
								        <tr>
								            <td>Australia<span>delivery 7-10 days</span></td>
								            <td>£2.00 to £4.75<span>(depending on card size)</span><span>(£20.00 for Giant cards)</span></td>
								        </tr>
								    </tbody></table>
								    <p class="mm_extra_delivery_text">Orders received by 5pm Monday to Friday will be in the post the same day. However, please note during busy periods we reserve the right to adjust daily order cut-off times. </p>
								    <p>Orders placed after 5pm Monday to Friday and orders placed over the weekend or on public holidays will be despatched on the next available working day. Please note, during busy periods we reserve the right to adjust the daily order cut-off times.</p>
								    <p>All orders for guaranteed Next Day delivery need to be placed before 2pm Monday to Friday for guaranteed delivery the next working day.</p>
								    <p>Our cards can be sent directly to the recipient or back to yourself to sign and deliver.</p>
								    <p><strong>Please note</strong> Royal Mail state that they aim to deliver 93% of 1st Class mail the next working day after posting but they are unable to provide a guaranteed service. This delivery can take up to 3 working days. For a guaranteed next day delivery Royal Mail recommend Special Delivery. Items that have not been delivered by Royal Mail 5 working days after the posting date will be either replaced or refunded.</p>
								    <p>You can also send your cards to Europe and the Rest of the World by selecting Royal Mail's Airmail service. <a href="/PersonalisedDelivery.aspx" class="footer_link">View full delivery information here.</a></p>
								</div>
					            <a class="mm_seo_read_more more" style="display: none;">read more</a>
					            <a class="mm_seo_read_more less" style="display: block;">read less</a>
				        	</div>
					    </div>

					    <div class="similar_cards">
							<div id="similar_card_content">
								<div class="tab_similar_cards">Similar Products</div>
								<ul id="similar_card_items">
									<?php $i=1;foreach($bestproducts as $row)if($i<3){?>
									<li>
										<a href="home/persional?product_id=<?php echo $row['ids'];?>">
											<img src="<?php echo $row['photo9']?>" alt="<?php echo $row['titles'];?>" style="width:91px;">
											<span class="sp_product_name" style="display:none;"><?php echo $row['titles'];?></span>
										</a>
									</li>
									<?php $i++;}?>
								</ul>
							</div>
							<div class="sc_pag_prev" onclick="navigatePage(0);">Previous</div>
							<div class="sc_pag_next" onclick="navigatePage(1);">Next</div>
					    </div>

					    <div class="recently_viewed" style="display: none;">
					        <!--div id="ctl00_ContentPlaceHolder1_CardFlow1_UserClickedProducts1_user_clicked_products">
					        	<div class="tab_similar_cards">Recently Viewed</div>
					        	<ul id="user_clicked_items">
					        		<li>
					        			<a href="CustomiseCards.aspx?ProductId=150780&amp;selected=recently">
					        				<img src="/uimg/external02/card_bday18_danilo_ls_pulo02_pu_p.jpg" alt="LOL Surprise Photo Upload Daughter Personalised Birthday Card" style="width:91px;">
					        			</a>
					        		</li>
					        		<li>
					        			<a href="CustomiseCards.aspx?ProductId=164649&amp;selected=recently">
					        				<img src="/uimg/external04/card_icg_bbear_bday19_daddy_p.jpg" alt="Barley Bear Amazing Daddy Personalised Card" style="width:91px;">
					        			</a>
				        			</li>
			        			</ul>
			        		</div>
							<script type="text/javascript">
					    		jQuery(function($) {
					    			$('ul#user_clicked_items').easyPaginate({ step: 3 });
					    		}); 
							</script-->
					    </div>
					    <!-- CHOC CARD ADD ON -->
					    <div class="fancierbox_addons choc_large_popup">
					        <div class="AddOnHolder">
					            <div class="hat_header">
					                <h1></h1>
					                <div class="btn_cancel" onclick="javascript:closeOrderPopup()"><img src="/assets/dist/images/icon_send_email_close.png"></div>
					                <!-- FLOWER ADD-ONS -->
					            </div>
					            <!-- CHOCOLATE CARD CONTENT -->
					            <div class="content_choc_card">
					                <div class="chocCardStrap">
					                    <h1>Your card with a chocolate twist</h1>
					                    <p>Hand crafted luxury 150g dark chocolate, to accompany your card. <strong>For £8.70 extra</strong></p>
					                </div>
					                <div class="chocCardInfoWrapper">
					                    <div class="chocCardProduct left">
					                        <div class="chocBoxMask">
					                            <img class="PortraitCardMask" src="/assets/dist/images/CardboxMaskWithArrow.png">
					                            <!--img class="card_dupe" src="../uimg/general%20birthday/card_essentials_bday16_simplecircle_p.jpg"-->
					                        </div>
					                    </div>
					                    <div class="ChocCardSelector right">
					                        <h2>Choose a Chocolate</h2>
					                        <div id="chocList"></div>
					                        <p>(Chocolate size: 11.4cm x 19.4cm)</p>
					                    </div>
					                </div>
					                <div id="btnRemoveChoco" class="BTNaddChoc" onclick="javascript:RemoveFeatureProduct();" style="display: none;"></div>
					            </div>
					            <!-- LARGE CARD CONTENT -->
					            <div class="content_large_card">
					                <div class="chocCardStrap"><h1>LARGE CARD <span class="txt_red">ONLY £5.99</span></h1></div>
					                <div class="chocCardInfoWrapper">
					                    <div class="LC_small_card"><!--img class="card_dupe" src="../uimg/general%20birthday/card_essentials_bday16_simplecircle_p.jpg"--></div>
					                    <div class="LC_large_card"><!--img class="card_dupe" src="../uimg/general%20birthday/card_essentials_bday16_simplecircle_p.jpg"--></div>
					                    <img class="LC_roundel" src="/assets/dist/images/A4_roundel.png">
					                    <img class="LC_arrow" src="/assets/dist/images/A4_cardArrow.png">
					                </div>
					                <div class="BTNaddChoc" onclick="javascript:goLarge();">Make this a large card</div>
					            </div>
					        </div>
					    </div>
					    
						<?php $this->load->view('personal_01_phototip'); ?>
				    </div>
				    <div class="browser_warning">
				    	<!-- BROWSER WARNING -->
				        <span class="red_important">Important message - </span>You are using an old, unsupported browser. Some features may not work correctly.  <a href="http://whatbrowser.org/" target="_blank">Click here</a> to choose a modern browser.
				    </div>
				    <div id="loading_mask_container_common"></div>
				</div>
		    </div>
		</div>
		<div class="fancierbox_hat" style="display:none;"></div>
		<div class="mm-del-info-pop" style="display:none;">
			<div class="mm-del-info-wrap">
		        <div class="popUpCloseBtn"><span></span><span></span></div>
		      <h1><img width="46px" src="/assets/dist/images/icon-delivery-white.png"> Delivery Options</h1>
		        <ul>
		          <li>Next Day Guaranteed<br><span>Signature required</span></li>
		          <li>Royal Mail First Class<br><span>93% arrive next day</span></li>
		      	</ul>
		        <p><strong>Product information:</strong></p>
		        <p>Excludes glasses, china mugs, book and a small selection of other gifts (see product pages for details).<br>Flowers include FREE courier delivery 7 days a week.<br>
		          <a href="/delivery-information.aspx">Click here</a> for delivery information per product.
		        </p>
		    </div>
		</div>
    </section>
</div>

<input name="ctl00$ContentPlaceHolder1$CardFlow1$error_loading" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_error_loading" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$error_loading']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$error_loading'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$error_loading_msg" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_error_loading_msg" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$error_loading_msg']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$error_loading_msg'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_sessionid" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_sessionid" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$current_sessionid']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$current_sessionid'];else echo 'no';?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_userid" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_userid" value="<?php echo $current_user;?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardpage" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardpage']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardpage'];else echo '1';?>" />
<input type="hidden" name="current_activate_cardpage_controlename" id="current_activate_cardpage_controlename" value="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage"  />
<input type="hidden" name="current_activate_thumb_slide" id="current_activate_thumb_slide" value="<?php if(isset($data['current_activate_thumb_slide']))echo $data['current_activate_thumb_slide'];?>" /><!--value="thumb_slide"-->
<input type="hidden" name="current_activate_imagepanel" id="current_activate_imagepanel" value="<?php if(isset($data['current_activate_imagepanel']))echo $data['current_activate_imagepanel'];?>" />
<input type="hidden" name="current_activate_activity" id="current_activate_activity" value="<?php if(isset($data['current_activate_activity']))echo $data['current_activate_activity'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$cardinside_template_change" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_cardinside_template_change" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$cardinside_template_change']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$cardinside_template_change'];?>" />
<!-- Session objects write to hidden by converting JSON -->

<!-- Active Card inside left template -->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template'];?>" /><!--cardinside_template_blank-->
<input type="hidden" name="current_activate_cardinside_left_template_controlename" id="current_activate_cardinside_left_template_controlename" value="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_left_template" />
<!-- Active Card inside right template -->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template'];?>" /><!--cardinside_template_1-->
<input type="hidden" name="current_activate_cardinside_right_template_controlename" id="current_activate_cardinside_right_template_controlename" value="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_right_template" />
<!-- Active Card inside right template -->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template" value="<?php echo $data['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template'];?>" /><!--cardback_1-->
<input type="hidden" name="current_activate_cardinside_back_template_controlename" id="current_activate_cardinside_back_template_controlename" value="ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardinside_back_template" />



<!-- Active card inside text controler -->
<input type="hidden" name="current_activate_cardinside_text_controler" id="current_activate_cardinside_text_controler" value="<?php if(isset($data['current_activate_cardinside_text_controler']))echo $data['current_activate_cardinside_text_controler'];?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_hidden_active_product" value="{
  &quot;ProductId&quot;: <?php echo $data['photo_product_row']['ids'];?>,
  &quot;CardSetName&quot;: &quot;<?php echo $data['photo_product_row']['titles'];?>&quot;,
  &quot;DefaultPersonalization&quot;: null,
  &quot;ProductOutputId&quot;: 2,
  &quot;ProductGroup&quot;: 68,
  &quot;ProductGroupName&quot;: &quot;<?php echo $data['photo_product_row']['categories'];?>&quot;,
  &quot;AU_CODE&quot;: &quot;B964D162EAD7195DC9796A6253615889&quot;,
  &quot;ProductTypeId&quot;: 20,
  &quot;ProductOutputSizeId&quot;: 0,
  &quot;Barcode&quot;: &quot;UKHMT18O8DYP&quot;,
  &quot;SupplierId&quot;: 1453,
  &quot;CategoryId&quot;: 0,
  &quot;IsInsideRightText&quot;: false,
  &quot;InsideRightText&quot;: &quot;&quot;,
  &quot;IsInsideLeftText&quot;: false,
  &quot;InsideLeftText&quot;: null,
  &quot;CardBackImage&quot;: &quot;<?php echo $data['photo_product_row']['00_backgrounds'];?>&quot;,
  &quot;ProductName&quot;: &quot;<?php echo $data['photo_product_row']['titles'];?>&quot;,
  &quot;IsPersonalizable&quot;: true,
  &quot;IsNewPersonalization&quot;: true,
  &quot;IsMultifield&quot;: false,
  &quot;NameOnCover&quot;: &quot;Name&quot;,
  &quot;MaxLength&quot;: 15,
  &quot;IsHighStreet&quot;: false,
  &quot;SetNameOriginal&quot;: null,
  &quot;ProductOptionsId&quot;: 0,
  &quot;FontGroupId&quot;: 0
}" />
<input type="hidden" id="hidden_active_product_controlname" name="hidden_active_product_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_hidden_active_product"/>

<!-- Session objects write to hidden by converting JSON -->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_front" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_front" value="<?php echo str_replace("\"", "&quot;",$data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_front']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_front" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_front" value="<?php echo str_replace("\"", "&quot;",$data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_front']);?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_left" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_left" value="<?php echo str_replace("\"", "&quot;", $data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_left']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_left" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_left" value="<?php echo str_replace("\"", "&quot;", $data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_left']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_right" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_cardinside_right" value="<?php echo str_replace("\"", "&quot;", $data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_right']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_right" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_cardinside_right" value="<?php echo str_replace("\"", "&quot;", $data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_right']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_back" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_text_back" value="<?php echo str_replace("\"", "&quot;",$data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_back']);?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_back" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_json_session_image_back" value="<?php echo str_replace("\"", "&quot;",$data['ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_back']);?>"/>

<!-- PU count -->
<input type="hidden" name="NumberOfPhotoUploadFields" value="" />

<!-- Complete page tracking -->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$page_complete" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_page_complete" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$page_complete']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$page_complete'];?>" /><!--1=0,2=0,3=0,4=0-->
<input name="ctl00$ContentPlaceHolder1$CardFlow1$cardinside_tab" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_cardinside_tab" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$cardinside_tab']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$cardinside_tab'];?>"/>
<input type="hidden" name="cardinside_tab_controlname" id="cardinside_tab_controlname" value="ctl00_ContentPlaceHolder1_CardFlow1_cardinside_tab"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$is_music_card" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_is_music_card" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$is_music_card']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$is_music_card'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$is_video_card" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_is_video_card" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$is_video_card']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$is_video_card'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$is_preview" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_is_preview" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$is_preview']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$is_preview'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$is_final_process" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_is_final_process" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$is_final_process']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$is_final_process'];?>" />
<input name="ctl00$ContentPlaceHolder1$CardFlow1$is_fp_selected" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_is_fp_selected" value="<?php if(isset($data['ctl00$ContentPlaceHolder1$CardFlow1$is_fp_selected']))echo $data['ctl00$ContentPlaceHolder1$CardFlow1$is_fp_selected'];?>"/>
<input name="ctl00$ContentPlaceHolder1$CardFlow1$hidden_badward_list" type="hidden" id="ctl00_ContentPlaceHolder1_CardFlow1_hidden_badward_list" value="[
  <?php 
  	$html="";
  	foreach(explode(",","Fuck,Fucking,Cunt,fucker,CUNT,fuck!,fucks,fuck*,fucking!,fucking*,cunt!,cunts,cunt*,cunting,cunts!,fucker!,fuckers,fucker*,fuckers!,wanker,wankers,wanker*,wankers!,twat!,Twats,twat*,bastard!,bastards,bastard*,bastards!,twat,bastard") as $badword){
  		$html=$html==""?"{":",{";
  			$html.="&quot;Word&quot;: &quot;{$badword}&quot;,";
  			$html.="&quot;ReplaceWord&quot;: &quot;&quot;";
  		$html.="}";
  	}
  ?>
]" />
<input type="hidden" id="choc_remove_option" name="choc_remove_option" value="<?php if(isset($data['choc_remove_option']))echo($data['choc_remove_option'])?>" />

<!-- MM input -->
<input type="hidden" name="MM_test" id="MM_test" value="<?php if(isset($data['MM_test']))echo $data['MM_test'];else echo '1';?>" /><!---->
<input type="hidden" name="MM_test_drag" id="MM_test_drag" value="<?php if(isset($data['MM_test_drag']))echo $data['MM_test_drag'];?>" /><!---->
<input type="hidden" name="MM_test_drag_v" id="MM_test_drag_v" value="<?php if(isset($data['MM_test_drag_v']))echo $data['MM_test_drag_v'];?>" /><!---->
<input type="hidden" name="MM_guide_test" id="MM_guide_test" value="<?php if(isset($data['MM_guide_test']))echo $data['MM_guide_test'];?>" /><!---->
<input type="hidden" name="MM_test_fb" id="MM_test_fb" value="<?php if(isset($data['MM_test_fb']))echo $data['MM_test_fb'];?>" /> <!---->
<input type="hidden" name="MM_test_done" id="MM_test_done" value="<?php if(isset($data['MM_test_done']))echo $data['MM_test_done'];?>" /><!---->
<input type="hidden" name="MM_return_to_photos" id="MM_return_to_photos" value="<?php if(isset($data['MM_return_to_photos']))echo $data['MM_return_to_photos'];?>" /> <!---->
<input type="hidden" name="giant_popup" id="giant_popup" value="<?php if(isset($data['giant_popup']))echo $data['giant_popup'];?>" /><!---->

<input type="hidden" name="preview_proceed" id="preview_proceed" value="<?php if(isset($data['preview_proceed']))echo $data['preview_proceed'];?>" /> <!---->
<input type="hidden" name="SimilarC_count" id="SimilarC_count" value="<?php if(isset($data['SimilarC_count']))echo $data['SimilarC_count'];?>" /> <!---->

<input type="hidden" name="photoArrayCheck" id="photoArrayCheck" value="<?php if(isset($data['photoArrayCheck']))echo $data['photoArrayCheck'];?>" /><!---->
<input type="hidden" name="prodIdHead" id="prodIdHead" value="<?php echo $data['photo_product_row']['ids'];?>" /> <!---->

<input type="hidden" name="product_stage" id="product_stage" value="<?php if(isset($data['product_stage']))echo $data['product_stage'];?>" /><!--card_front-->

<!-- PRODUCT DETAILS -->
<input type="hidden" id="CurrentProduct_ID" name="CurrentProduct_ID" value="<?php echo $data['photo_product_row']['ids'];?>" />
<input type="hidden" id="CurrentProduct_SetName" name="CurrentProduct_SetName" value="<?php echo $data['photo_product_row']['names'];?>" />
<input type="hidden" id="CurrentProduct_ProductGroup" name="CurrentProduct_ProductGroup" value="<?php echo $data['photo_product_row']['menus'].'/'.$data['photo_product_row']['categories'];?>" />
<input type="hidden" id="CurrentProduct_ProductName" name="CurrentProduct_ProductName" value="<?php echo $data['photo_product_row']['titles'];?>" />
<input type="hidden" name="autofillCalled" id="autofillCalled" value="<?php if(isset($data['autofillCalled']))echo $data['autofillCalled'];?>"/>


<script type="text/javascript" src="/assets/dist/frontend/cardflow/facebook-pixel.js"></script>
<script type="text/javascript" src="/assets/dist/frontend/personal.js"></script>

<?php
echo"<script>";
echo "WebForm_InitCallback();UpdateProductSizes('128,Giant,Giant (290x410mm) £9.99:129,Giant Square,Giant Square (300x300mm) £9.99:8,A4,A4 (297x210mm) £5.99:40,Large Square,Large Square (210x210mm) £5.99:11,A5,A5 (148x210mm) £3.29:17,Square,Square (135x135mm) £2.99:10,A6,A6 (148x105mm) £2.29', '20','1916','True');
var google_tag_params = { ecomm_prodid: '{$data['photo_product_row']['ids']}', ecomm_pagetype: 'product', ecomm_totalvalue: 3.29, };
UpdateProductPrices('28401,3.29,11,20,1916,True:28406,5.99,8,20,1916,True:28409,2.29,10,20,1916,True:28412,5.99,40,20,1916,True:28415,2.99,17,20,1916,True:34825,9.99,128,20,1916,True:37425,9.99,129,20,1916,True');
UpdateProductOldPrices('28401,3.29,11,20,1916,True:28406,5.99,8,20,1916,True:28409,2.29,10,20,1916,True:28412,5.99,40,20,1916,True:28415,2.99,17,20,1916,True:34825,9.99,128,20,1916,True:37425,9.99,129,20,1916,True');";
echo "</script>";
?>


</form>

<div style="display:block;    height: 0px;">
<img id="barcode_img" src="/assets/dist/barcodes/<?php echo $product_id.".png";?>" style="display: none;"/>
<img id="barcode_background" src="/assets/dist/images/card_back_img.png" />
</div>
<script type="text/javascript">
	$(document).ready(function () {
        pageNumber = 0;
        //getData();
        resize_screen();
		seoTabs();

		canvas = document.getElementById('_canvas');
		canvas.crossOrigin = "Anonymous";
		ctx = canvas.getContext('2d');
		var pid=eval($("#product_id").val())*123456%1000000;
		//$("#barcode_img").attr('src',"https://barcode.tec-it.com/barcode.ashx?data="+pid+"&code=Code128&dpi=96&dataseparator=");
		
			var myImg = new Image();
			myImg.crossOrigin = 'anonymous';//'*'
			myImg.src = $("#barcode_img").attr('src');
myImg.onload = function() {
   ctx.drawImage(myImg, 0, 0);
};


		canvas.width = $('#barcode_background').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#barcode_background').height();
		ctx.clearRect(0,0,canvas.width,canvas.height);

		ctx.drawImage($('#barcode_background').get(0), 0, 0, canvas.width,canvas.height);
		ctx.drawImage($('#barcode_img').get(0), 215,400,80, 40);
		$("#back-background-img").css('background-image',"url("+canvas.toDataURL()+")");
		$("#barcode_background").attr('src',canvas.toDataURL());
		ctx.clearRect(0,0,canvas.width,canvas.height);
		

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
   
		

        if ($("#ctl00_ContentPlaceHolder1_CardFlow1_error_loading").val() == "1") {
            DisplayError("Sorry!", $("#ctl00_ContentPlaceHolder1_CardFlow1_error_loading_msg").val(), false);
        }
        else {
            
            if($("#ctl00_ContentPlaceHolder1_CardFlow1_is_final_process").val()=="1") {
                setCompleteStyle();
            } else {
            	//alert($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val());
                mainTabClick($("#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage").val());
            }
            
            ImageManager.getInstance().initializePage();
            CardSizeChange();       
        }

        $('#ICE_preloader').fadeOut();

        var ua = navigator.userAgent;
        var checker = {android: ua.match(/Android/)}; 
        if ( checker.android ) {
            $('#ctl00_viewport_id').attr('content', 'user-scalable=yes');
		}
    	GameCardCheck();
    
    	mandatoryLabels();
        SizeSelectorReferalLogic();
		
        //CHECK CARD FRONT STATUS
        if (!$('#tab_main_card_front').hasClass('tab_process_complete')) {
            $('#next_steps_front').hide();
            $('#main_heading h2').text('Card Front');
        }
        var page = $('#ctl00_ContentPlaceHolder1_CardFlow1_current_activate_cardpage').val();
        if(page>1){
        	$('.mandImgLabel.notComplete').eq(0).fadeOut();
            $('.mandTxtLabel.notComplete').eq(0).fadeOut();
        }
    });

$(document).ready(function() {
	// Remve this when set all image upload dynamic
	sortlist = $(".gallery-list ul");
	$('li', sortlist).css('cursor', 'move');
	sortlist.sortable({
		cursor: 'move'
	}).disableSelection();
});

$(document).ready(function() {
		 // FROM MY ACCOUNT LOGIC
        function fromMyAccount() {
            var previousPageURL = document.referrer;
            var checkMyAccountRefferal = previousPageURL.indexOf('MyAccount') >-1;
            var checkSavedProductsRefferal = previousPageURL.indexOf('MySaveProducts') >-1;
    	
            //IF INTERNAL REFFERAL
            if ( checkMyAccountRefferal || checkSavedProductsRefferal) {
                //$('#error').hide();
                CloseError();
                mainTabClick('1');
            }
        }

        fromMyAccount();
        fathersDayChocOptions();

        //jQuery('#accordion').accordion();
        //$('a.ui-accordion-header').click(function() {
                //$(this).find("input").focus();
        //});

        // MM TEST INITIALISE
        if ( $('#MM_test_done').val() == 1 ) {
            $('#wrapper_whole').addClass('MM_test_PUdone');
            var testval = $('#MM_test_done').val();
        }

        CountNumberOfPhotos();

        var n = $('.ui-accordion-li-fix').length;
        var field_height = n * 43;
        $('.formsinput_multi_field_opt').hide();
        $('#fields').css('height', field_height);
        $('.ui-accordion-content-wrap').css('height', '16px');

        if (n > 6) {
            $('.formsinput_multi_field_opt').show();
            $('.front').hide();
        }
        else {
            $('.formsinput_multi_field_opt').hide();
        }
        //== MOVE PREVIEW AND CONFIRM BUTTONS TO THE BOTTOM ==//
        var total_height = $('#templateimage').height();
        var pu_panel = $('.btn_mycomp').length;
        var substract_distance = field_height + 335;
        var substract_distance_no_pu = field_height + 170;
        if ( total_height <= 458 ){
            var preview_btn_margin_top = 0;
        }
        else {
            var preview_btn_margin_top = total_height - substract_distance;
        }
        
            /*== CHANGE TOP MARGIN FOR NON PERSONALISED CARDS (NO TEXT FIELD) ==*/
            var confirm_btn_margin_top = total_height - 150;
            /*== CHANGE TOP MARGIN FOR NON PERSONALISED CARDS (ONLY PU, NO TEXT FIELDS) ==*/
            var confirm_btn_margin_top_pu = total_height - 320;  
            /*== CHANGE TOP MARGIN FOR PERSONALISED CARDS (ONLY TEXT FIELDS) ==*/
            var confirm_btn_margin_top_onlytext = total_height - substract_distance_no_pu;               
        
        if ( n==0 && pu_panel == 0 ) {
           //alert(preview_btn_margin_top);
           $('.btn_confirm').css('margin-top', confirm_btn_margin_top);
           $('.btn_confirm').addClass('btn_full');
        }
        else if ( n==0 && pu_panel == 1 ) {
           //alert(confirm_btn_margin_top_pu);
           $('.btn_confirm').css('margin-top', confirm_btn_margin_top_pu);
           $('.btn_confirm').addClass('btn_full');
        }
        else if ( n<=3 && pu_panel == 0 ) {
           //alert(confirm_btn_margin_top_onlytext);
           $('.btn_confirm').css('margin-top', confirm_btn_margin_top_onlytext);
           $('.btn_confirm').addClass('btn_full');
        }
        else if ( n<=3 && pu_panel == 1 ) {
           //alert(substract_distance);
           $('.btn_confirm').css('margin-top', preview_btn_margin_top);
           $('.btn_confirm').addClass('btn_full');
        }
        else if ( n>=4 && pu_panel == 0 ) {
           //alert(confirm_btn_margin_top_onlytext);
           $('.btn_confirm').css('margin-top', '0');
           $('.btn_confirm').addClass('btn_full');
        }
        //var windowwidth = $(window).width();
        //if ( windowwidth <= 650 ) {
			// PREPEND TO BEFORE CONTENT WRAPPER //
				//$('#ctl00_viewport_id').attr('content', 'initial-scale=0.9');
			//}
        
        
        //== DETECT LANDSCAPE CARD ==/
        var card_side = $('#templateimage').width();
        //console.log('CARD WIDTH IS '+card_side);
        if (card_side >= 346) {
            $('#main_control_wrapper').addClass('landscape');
            $('iframe.ice_card_upload .container').addClass('landscape');
            $('#main_wrapper').addClass('landscape');
            $('.btn_mycomp').attr('value', 'My Computer');
            $('.btn_mylib').attr('value', 'My Photos');
            $('.fancierbox_addons.choc_large_popup').addClass('landscapeChocCard');
            $('.help_popup_holder').addClass('landscape');
            $('#error').addClass('landscape');
            //alert(card_side);
            //console.log('LANDSCAPE CARD');
        }
        else if (card_side == 345) {
            $('#main_control_wrapper').addClass('square');
            $('#main_wrapper').addClass('square');
            $('.border_box').addClass('square');
            $('.content_wrapper').addClass('square');
           
            //IF CARD IS SQUARE AND COMES FROM CHOC CARD LP
            if (document.location.href.indexOf('&aafp=1') > -1 ) {
                $('#SquareCardsOnlyMessage').show();
                $('#ICE_preloader').addClass('chocCardNotAvailable');
            }
            //alert(card_side);
        }

    
        // BACK BUTTON LOGIC
        function backBtnLogic() {
            var previousPageURL = document.referrer;
            var checkInternalRefferal = previousPageURL.indexOf('buddywisher.com') >-1;
            //var checkInternalRefferal = previousPageURL.indexOf('localhost') >-1;
            var checkPreviousPageURL = previousPageURL.indexOf('/cards/') >-1;
            var checkPreviousPageURLProdPrev = previousPageURL.indexOf('/card/') >-1;
            var checkPreviousPageURLEditor = previousPageURL.indexOf('customisecards.aspx') >-1;
            var ReferrerSearch =  previousPageURL.indexOf('search') >-1;
    	
            //IF INTERNAL REFFERAL
            if ( checkInternalRefferal ) {
          
                // IF PREVIOUS PAGE IS SEARCH RESULT PAGE
                if ( ReferrerSearch ) {
                    $('.backToResults').attr('href', sessionStorage.searchURL);
                }

                // IF PREVIOUS PAGE IS SEARCH RESULT PAGE
                if ( checkPreviousPageURL ) {
                    sessionStorage.prevCategoryURL = previousPageURL;
                    $('.backToResults').attr('href', sessionStorage.prevCategoryURL);
                } 
                else if (checkPreviousPageURLProdPrev) {
                    sessionStorage.PreviousPageURLProdPrev = previousPageURL;
                    $('.backToResults').attr('href', sessionStorage.PreviousPageURLProdPrev);
                    //console.log('from new product page');
                }
                else if ( checkPreviousPageURLEditor ) {
                    $('.backToResults').attr('href', sessionStorage.prevCategoryURL);
                }
                else {
                    sessionStorage.prevCategoryURL = '/personal';
                }
            }
            
            //console.log('call backBtnLogic');
        }

        backBtnLogic();

        //CHECK FOR PRE-SELECTED SIZE
        function checkForPreSelectedSize() {
            if (sessionStorage.getItem('s_selected_card_size') === null) {
                //DO NOTHING
            } else {
                var selectedSizeValue = sessionStorage.s_selected_card_size;
                $('.card_size_'+ selectedSizeValue).trigger('click');
                sessionStorage.removeItem('s_selected_card_size');
                //console.log(selectedSizeValue);
                //alert(selectedSizeValue);
            }
        }

        checkForPreSelectedSize();

        //== HIDE FRAME DROPDOWN ==/
        $('#ctl00_ContentPlaceHolder1_CardFlow1_ddlBoarder').show();
        //$('#ctl00_ContentPlaceHolder1_CardFlow1_ddlBoarder').is(':disabled').hide();
        
        //== CHANGE LABELS FOR LANDSCAPE CARD ==/
        function LandscapeTabNames() {
            if ($('#main_wrapper').hasClass('landscape')) {
              $('#tab_main_cardinside_left a').html('Inside Top');
              $('#tab_main_cardinside_right a').html('Inside Btm');
              $('.forms_card_back a:nth-of-type(3)').html('Card Inside Top');
              $('.forms_card_back a:nth-of-type(4)').html('Card Inside Bottom');
              //alert('landscape');
            }
        }
        
        //== RESIZE PHOTOUPLOAD MOVE LABEL ==/
        function EditMoveLabel() {
            var EditMoveLabelSize = $('.icon_edit_image').width();
            if (EditMoveLabelSize >= 70) {
                $('.icon_edit_image').addClass('SmallLabel');
            }
        }
        
        EditMoveLabel();
        LandscapeTabNames();
        
        //$("a#Final_preview_A").fancybox({
	    //    'scrolling':'no'
        //});
        
        // Return Key on text fields
        $('#accordion li input').keypress(function(event){
          if(event.keyCode == 13 || event.keyCode == 176){
             event.preventDefault();
             $('.updateMessage').trigger('click');
          }
        });

        //$('#main_control_wrapper input').keypress(function(event){
        //    if(event.keyCode == 13 || event.keyCode == 176){
        //        event.preventDefault();
        //    }
        //});
        
        DupeCardThumb();
        //chocSwitch();
        chocCheck();
        
        // TEXT FIELD HIGHLIGHT -------------------- //
          var txtField = $('.txt_field_left');
          txtField.each(function(){
            //var txtPos = $(this).position();
            //var txtTop = txtPos.top;
            //alert(txtTop);
	        $(this).append( "<div class='mm_txtHighlight'><div class='mm_txt'>T</div><div class='dot'></div></div>" );

          });

        // GET LARGE CARD PRICE
        var LargeCardPriceString = $('.card_size_8 .priceToolTip strong').html();
        $('.content_large_card .chocCardStrap h1 .txt_red').html('ONLY' + LargeCardPriceString);

        // IF CARD PART OF THE CHOC CARD ECLUSION LIST
        if ( $('.chocCardsWrapper').is(':empty') ) {
            $('.chocCardsWrapper').remove();
        }

        // SEO DESC AND DELIVERY TEXT
        seoTabs();

        $('.standardPurpleBtn').click(function(){
            var mmImgUsed = $('.amount_used:first-child').next().attr('src');
            localStorage.mmImgUsed = mmImgUsed;
        });


    });
</script>