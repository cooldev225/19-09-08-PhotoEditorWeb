<style>
	#upload-img{
        background-image: url(/assets/dist/images/blank.png);
	}
	#master-preview{
        padding: 0px !important;
            background: #fff;
	    -moz-box-shadow: 0 5px 0 #e3e3e3;
	    -webkit-box-shadow: 0 5px 0 #e3e3e3;
	    box-shadow: 0 5px 0 #e3e3e3;
	    float: left;
    }
    #master-preview img{
    	    border: 1px solid rgb(204, 204, 204);
	    overflow: hidden;
	    background: rgb(239, 239, 239);
	    height: 459px;
	    width: 323px;
	    position: relative;
    }
    .btn.btn-outline.red {
        border-color: #e7505a;
        color: #e7505a;
        background: 0 0;
    }
    .btn.red:not(.btn-outline).active, .btn.red:not(.btn-outline):active, .btn.red:not(.btn-outline):hover, .open>.btn.red:not(.btn-outline).dropdown-toggle {
        color: #fff;
        background-color: #e12330;
        border-color: #dc1e2b;
    }
    .btn.red:not(.btn-outline) {
        color: #fff;
        background-color: #e7505a;
        /*border-color: #e7505a;*/
    }
    .btn.btn-outline.red.active, .btn.btn-outline.red:active, .btn.btn-outline.red:active:focus, .btn.btn-outline.red:active:hover, .btn.btn-outline.red:focus, .btn.btn-outline.red:hover {
        border-color: #e7505a;
        color: #fff;
        background-color: #e7505a;
    }
    
    .btn.green:not(.btn-outline).active, .btn.green:not(.btn-outline):active, .btn.green:not(.btn-outline):hover, .open>.btn.green:not(.btn-outline).dropdown-toggle {
        color: #FFF;
        background-color: #26a1ab;
        border-color: #2499a3;
    }
    .btn.green:not(.btn-outline) {
        color: #FFF;
        background-color: #32c5d2;
        border-color: #32c5d2;
    }
    .btn-file > input {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        font-size: 23px;
        cursor: pointer;
        filter: alpha(opacity=0);
        opacity: 0;
        direction: ltr;
    }

#temp_text::first-letter {
    font-size: 130%;
}
/*
.colorpicker-saturation {
    width: 189px !important;
    height: 189px !important;
}
.colorpicker-alpha, .colorpicker-hue {
    width: 30px !important;
    height: 189px !important;
}
.colorpicker-color div {
    height: 30px !important;
}*/
.backimgbutton{
	top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    opacity: 0;
    outline: 0;
    background: #fff;
    cursor: inherit;
}
.box-body{
	min-height: 538px;
}
.fileinput-delete{
	position: absolute;
    top: 466px;
    left: 169px;
    border-color: #e7505a;
    color: #e7505a;
    background: 0 0;
    border: 1px solid #e7505a;
    border-radius: 3px;
    line-height: 33px;
    padding-left: 10px;
    padding-right: 10px;
}
.box-header .row{
	padding-top: 10px;
	padding-bottom: 10px;
}
.box-header .row input[type=text]{
	font-size: 18px;
	width: 100%;
}
#save_btn,#preview_btn{
	border-radius: 8px;
    background-color: #dd4b39;
    color: white;
    font-size: 21px;
        float: right;
}
#front_btn,#back_btn{
	border-radius: 8px;
    background-color: #b7bbbd;
    color: white;
    font-size: 21px;
        float: left;
}
#front_btn.selected,#back_btn.selected{
	background-color: #6c7b84;
}

.a-letter-space {
    display: inline-block;
    width: .385em;
}


</style>
<?php 
$side_prefix="";
if($data['card_side']==1)$side_prefix="00_";
?>
<form id="refresh_frm" action="template" method="post">
	<input type="hidden" id="ids" name="ids" value="<?php echo $data['photo_product'];?>"/>
	<input type="hidden" id="reviewcnt" name="reviewcnt" value="<?php echo $data['photo_product_row']['reviewcnt'];?>"/>
	<input type="hidden" id="card_side" name="card_side" value="<?php echo $data['card_side'];?>"/>
	<input type="hidden" id="likes" name="likes" value="<?php echo $data['photo_product_row']['likes'];?>"/>
	<input type="hidden" id="viewcnt" name="viewcnt" value="<?php echo $data['photo_product_row']['viewcnt'];?>"/>
	<input type="hidden" id="sellcnt" name="sellcnt" value="<?php echo $data['photo_product_row']['sellcnt'];?>"/>

<div class='box box-primary'>
	<div class='box-header with-border'>
		<!--h3 class='box-title'><?php //echo $title; ?></h3$data['photo_category']-->
		<?php //echo ">>>>".$data['photo_category'];?>
		<div class="row">
			<div class="col-md-3">
			<?php echo modules::run('adminlte/widget/menu_element',$data['photo_menu']); ?>
			</div>
			<div class="col-md-3">
				<?php echo modules::run('adminlte/widget/categories_element',$data['photo_category']); ?>
			</div>
			<div class="col-md-6">
				<?php echo modules::run('adminlte/widget/products_select_element',$data['photo_menu'],$data['photo_category'],$data['photo_product']); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label class="col-md-2">Title(<font style="color:red;">*</font>):</label>
				<div class="col-md-10">
					<input type="text" id="p-title" name="p-title" value="<?php echo $data['photo_product_row']['titles'];?>"/>
				</div>
			</div>
			<div class="col-md-8">
				<label class="col-md-3">Description:(<font style="color:red;">*</font>)</label>
				<div class="col-md-9">
					<input type="text" style="width:100%;" id="p-description" name="p-description" value="<?php echo $data['photo_product_row']['descriptions'];?>"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label class="col-md-5">From Cost(<font style="color:red;">*</font>):</label>
				<div class="col-md-7">
					<input type="text" id="p-cost" name="p-cost" value="<?php echo $data['photo_product_row']['costs1'];?>"/>
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6">
				<input type="button" value="Save" id="save_btn" name="save_btn"/>
				<input type="button" value="Preview" id="preview_btn" name="preview_btn"/>&nbsp;
				<span class="a-letter-space"></span>
				<input type="button" <?php if($data['card_side']==0)echo " class=\"selected\"";?> value="Front Card" id="front_btn" name="front_btn"/>
				<input type="button" <?php if($data['card_side']==1)echo " class=\"selected\"";?> value="Back Card" id="back_btn" name="back_btn"/>
				
				
			</div>
		</div>
	</div>	
	
	<div class='box-body'>
		<div class="previewer col-md-6">
        	<img id="workarea-img"  ondragover="allowDrop(event)" ondrop="drop(event)" style="position:absolute;z-index:1000;width: 323px;height: 459px;left:0px;" src="<?php echo $data['photo_product_row'][$side_prefix.'backgrounds'];?>"/>
        	<span style="left: 0px;top: 462px;margin-top: 4px;position: absolute;display: block;" class="btn red btn-outline btn-file" >
        		<span class="fileinput-new"> upload background</span>
                <input type="file" src="/assets/dist/images/blank.png" name="set-post-thumbnail" id="upload-back-img-btn">
        	</span>
        	<span class="fileinput-delete" ondragover="allowDrop(event)" ondrop="dropdel(event)"> remove text or image</span>
        	<?php
        		for($i=0;$i<5;$i++){$j=$i+1;
        			if($data['photo_product_row'][$side_prefix."phototag{$j}"]=='IMG'||$data['photo_product_row'][$side_prefix."phototag{$j}"]=='img'){
        				echo "<img id=\"custom_text_{$i}\" src=\"{$data['photo_product_row'][$side_prefix."photo{$j}"]}\" style=\"{$data['photo_product_row'][$side_prefix."photostyle{$j}"]}\" draggable=true ondragstart=\"drag(event)\" onclick=\"objOnClick({$i});\" onkeydown=\"objOnKeyDown(event,{$i});\"/>";
        			}else if($data['photo_product_row'][$side_prefix."phototag{$j}"]=='INPUT'||$data['photo_product_row'][$side_prefix."phototag{$j}"]=='input'){
        				echo "<input type=\"text\" id=\"custom_text_{$i}\" value=\"{$data['photo_product_row'][$side_prefix."photo{$j}"]}\" style=\"{$data['photo_product_row'][$side_prefix."photostyle{$j}"]}\" draggable=true ondragstart=\"drag(event)\" onkeyup=\"inputOnKeyUp({$i});\" onclick=\"objOnClick({$i});\" onkeydown=\"objOnKeyDown(event,{$i});\"/>";
        			}
        		}
        	?>
		</div>
		<div class="col-md-6" >
			<div class="row">
				<div class="form-group col-md-8">
					<input type="text" onmousemove = 'return false' onselectstart = 'return false' unselectable="on" draggable = "true" id="temp_text" ondragstart="drag(event)" value="Text Box" style="cursor:pointer;" />
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<div class="input-group">
	                  <div class="input-group-addon">
	                    Font
	                  </div>
	                  <select id="font-family" style="font-size: 30px !important;max-width: 183px;">
						<?php foreach ($data['fonts'] as $font) {
							echo "<option style=\"font-size:33px;font-family:'".$font['fonts']."'\">{$font['fonts']}</option>";
						};?>
						</select>
	                </div>
				</div>
				<div class="form-group col-md-4">
	                <div class="input-group">
	                  <div class="input-group-addon">
	                    Size
	                  </div>
	                  <input type="text" id="font-size" value="33" class="form-control">
	                   <!--input type="text" id="font-size" value="33" class="form-control" data-inputmask='"mask": "999"' data-mask-->
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="form-group col-md-8">
	                <div class="input-group my-colorpicker2" style="max-width: 237px;">
	                  <input type="text" id="font-color"  value="#000000" placeholder="Color" class="form-control">

	                  <div class="input-group-addon">
	                    <i style="width:70px;">Color</i>
	                  </div>
	                </div>
	                <!-- /.input group -->
	              </div>
	              <div class="form-group col-md-4">
					<div class="input-group">
	                  <div class="input-group-addon">
	                    Bold
	                  </div>
	                  <select id="font-weight" style="min-width:79px;">
						<option>100</option>
						<option>200</option>
						<option>300</option>
						<option>400</option>
						<option>500</option>
						<option>600</option>
						<option>700</option>
						<option>bold</option>
						</select>
	                </div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					<input type="checkbox" id="isstroke"/>Stroke
	                <div class="input-group my-colorpicker2" style="max-width: 237px;">
	                  <input type="text" id="stroke-color" value="#ffffff" placeholder="Color" class="form-control">

	                  <div class="input-group-addon">
	                    <i style="width:70px;"></i>
	                  </div>
	                </div>
	                <!-- /.input group -->
	              </div>
				<div class="form-group col-md-4">
					Rotation
					<div class="input-group" style="max-width: 130px;">
	                  <div class="input-group-addon" onclick="rotationclk(10)">
	                    +
	                  </div>
	                  <input type="text" id="text-rotation" class="form-control" name="text-rotation" value="0" onkeydown="rotationkey(event);" />
						<div class="input-group-addon" onclick="rotationclk(-10);">
	                    -
	                  </div>
	                </div>
				</div>
	        </div>
        	<div class="row" style="margin-left: 0px;">
	            <div id="uploadimgarea">
	            	<img id="temp_img" src="/assets/dist/images/blank.png" ondragstart="drag(event)" style="width: 150px;height: 150px;" />
	            	<span style="margin-top: 4px;position: absolute;display: block;" class="btn red btn-outline btn-file">
	            		<span class="fileinput-new"> Select </span>
	                    <input type="file" src="/assets/dist/images/blank.png" name="set-post-thumbnail" id="set-post-upload-img"> 
	                </span>
	                
	            </div>

	        </div>
			<div class="row" style="margin-top: 41px;">
	            	<a onclick="imgResizeSize(1); " style="font-size:50px;width:50px;cursor:pointer;">+</a>
	                <a onclick="imgResizeSize(-1);" style="font-size:50px;width:50px;cursor:pointer;">-</a>
	                <select id="img_resize_check">
	                	<option>both</option>
	                	<option>width only</option>
	                	<option>height only</option>
	                </select>
            </div>
			<div class="row">
				<div class="col-md-12">
					<input type="hidden" id="status"/>
				</div>
		    </div>
		</div>
	</div>
</div>
</form>
<form id="fileuploadfrm" style="display: block;" action="template/save_file_data" method="post" enctype="multipart/form-data">
	<input type="hidden" name="iiddss" id="iiddss"/>
	<input type="hidden" name="ffiieelldd" id="ffiieelldd"/>
	<input type="file" name="bbaaccgg" id="bbaaccgg"/>
	<input type="file" name="ffiillee" id="ffiillee"/>
</form>
<script type="text/javascript">
	 var text_cnt=5;
	 var current_drag_text=0;
	 var isloaded=0;
	 var dx=new String("-1,0,1,0").split(',');
	 var dy=new String("0,-1,0,1").split(',');

	 var canvas = document.getElementById('_canvas');
	 var ctx = canvas.getContext('2d');

	 function imgResizeSize(k){
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'&&$("#custom_text_"+i).prop('tagName')=='IMG'){
	    		var obj=$("#custom_text_"+i);
	    		var w=obj.css('width').replace('px','');
	    		var h=obj.css('height').replace('px','');
	    		w=eval(w);h=eval(h);
	    		if($('#img_resize_check').val()=='width only'||$('#img_resize_check').val()=='both')
	    			obj.css('width',eval(w+k));
	    		if($('#img_resize_check').val()=='height only'||$('#img_resize_check').val()=='both')
	    			obj.css('height',eval(h+k));
	    		//alert(obj.css('width'));
	    		break;
	    	}
	    }
	 }
	 function getRotationDegrees(ob) {
	    var matrix = ob.css("-webkit-transform") ||
	    ob.css("-moz-transform")    ||
	    ob.css("-ms-transform")     ||
	    ob.css("-o-transform")      ||
	    ob.css("transform");
	    if(matrix !== 'none') {
	        var values = matrix.split('(')[1].split(')')[0].split(',');
	        var a = values[0];
	        var b = values[1];
	        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
	    } else { var angle = 0; }
	    return (angle+360)%360;
	}
	function viewCanvasAction(){
		canvas.width = $('#workarea-img').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#workarea-img').height();

		ctx.clearRect(0,0,canvas.width,canvas.height);
		//

		var obj=null;
		var x,y,y1,fsz,w,h,deg;

		for(var i=0;i<5;i++){
			obj=$("#custom_text_"+i);
			if(obj.prop('id')==undefined)continue;
			x=eval(obj.css('left').replace('px',''));
			y=eval(obj.css('top').replace('px',''));
			
			if(obj.prop('tagName')=="IMG"){
				deg=getRotationDegrees(obj);
				w=eval(obj.css('width').replace('px',''));
				h=eval(obj.css('height').replace('px',''));
				ctx.save();
				ctx.translate(x+w/2, y+h/2);
			    ctx.rotate(Math.PI * deg/ 180); // rotate
			    ctx.drawImage(obj.get(0),-w/2, -h/2,w,h); 
			    ctx.restore();
			}
		}
		ctx.drawImage($('#workarea-img').get(0), 0, 0, canvas.width,canvas.height);
		for(var i=0;i<5;i++){
			obj=$("#custom_text_"+i);
			if(obj.prop('id')==undefined)continue;
			x=eval(obj.css('left').replace('px',''));
			y=eval(obj.css('top').replace('px',''));
			if(obj.prop('tagName')=="IMG"){
				
			}else{
				deg=getRotationDegrees(obj);
				w=eval(obj.css('width').replace('px',''));
				h=eval(obj.css('height').replace('px',''));
				

				fsz=eval(obj.css('font-size').replace('px',''));
				ctx.textBaseline = 'top';
				ctx.font=obj.css('font-size')+' '+obj.css('font-family');
				ctx.fillStyle=obj.css('color');
				y1=Math.pow(fsz-21,(1/1.5));
				y=y+y1;

				ctx.save();
				ctx.translate(x+w/2, y+h/2);
			    ctx.rotate(Math.PI * deg/ 180);

				if(obj.css('text-shadow')!='none'){
					ctx.strokeStyle = 'white';
			    	ctx.lineWidth = 2;
			    	ctx.strokeText(obj.val(),-w/2, -h/2);
			    }
				ctx.fillText(obj.val(),-w/2, -h/2);
			    ctx.restore();
			}
		}
	}
	function workCanvasAction(){
		canvas.width = $('#workarea-img').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#workarea-img').height();

		ctx.clearRect(0,0,canvas.width,canvas.height);
		//

		var obj=null;
		var x,y,y1,fsz,w,h,deg;
		ctx.drawImage($('#workarea-img').get(0), 0, 0, canvas.width,canvas.height);
		for(var i=0;i<5;i++){
			obj=$("#custom_text_"+i);
			if(obj.prop('id')==undefined)continue;
			x=eval(obj.css('left').replace('px',''));
			y=eval(obj.css('top').replace('px',''));
			if(obj.prop('tagName')=="IMG"){
				
			}else{
				deg=getRotationDegrees(obj);
				w=eval(obj.css('width').replace('px',''));
				h=eval(obj.css('height').replace('px',''));
				

				fsz=eval(obj.css('font-size').replace('px',''));
				ctx.textBaseline = 'top';
				ctx.font=obj.css('font-size')+' '+obj.css('font-family');
				ctx.fillStyle=obj.css('color');
				y1=Math.pow(fsz-21,(1/1.5));
				y=y+y1;

				ctx.save();
				ctx.translate(x+w/2, y+h/2);
			    ctx.rotate(Math.PI * deg/ 180);

				if(obj.css('text-shadow')!='none'){
					ctx.strokeStyle = 'white';
			    	ctx.lineWidth = 2;
			    	ctx.strokeText(obj.val(),-w/2, -h/2);
			    }
				ctx.fillText(obj.val(),-w/2, -h/2);
			    ctx.restore();
			}
		}
	}
	 $("#preview_btn").click(function(){
		$(".preview_card_area").css('display','block');
		viewCanvasAction();
	 });
	 function b64toBlob(b64Data, contentType='', sliceSize=512){
		  
		  var byteCharacters = atob(b64Data.toString().replace(/^data:image\/(png|jpeg|jpg);base64,/, ''));
		  var byteArrays = [];

		  for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
		    var slice = byteCharacters.slice(offset, offset + sliceSize);

		    var byteNumbers = new Array(slice.length);
		    for (let i = 0; i < slice.length; i++) {
		      byteNumbers[i] = slice.charCodeAt(i);
		    }

		    var byteArray = new Uint8Array(byteNumbers);
		    byteArrays.push(byteArray);
		  }

		  var blob = new Blob(byteArrays, {type: contentType});
		  return blob;
		}
	 function save_all_data(fff){
	 	if($('#p-title').val()==''){$('#p-title').focus();return;}
	 	if($('#p-description').val()==''){$('#p-description').focus();return;}
	 	if($('#p-cost').val()==''){$('#p-cost').focus();return;}
	 	var photo_arr=new Array(text_cnt);
	 	for(var i=0,j=0;i<text_cnt;i++){
	    	photo_arr[i]=new Array(3);
	    	photo_arr[i][0]='';
	    	photo_arr[i][1]='';
	    	photo_arr[i][2]='';
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).prop('tagName')=='IMG'||$("#custom_text_"+i).prop('tagName')=='img'){
	    		photo_arr[j][0]=$("#custom_text_"+i).attr('src');
	    	}else{
	    		photo_arr[j][0]=$("#custom_text_"+i).val();
	    	}
	    	photo_arr[j][1]=$("#custom_text_"+i).attr('style');
	    	photo_arr[j][2]=$("#custom_text_"+i).prop('tagName');
	    	j++;
	    }

	    
	    canvas.width = $('#workarea-img').width();
		canvas.crossOrigin = "Anonymous";
		canvas.height = $('#workarea-img').height();
		ctx.clearRect(0,0,canvas.width,canvas.height);
		ctx.drawImage($('#workarea-img').get(0), 0, 0, canvas.width,canvas.height);
		var bgdata=canvas.toDataURL();

	    workCanvasAction();
	    var wkdata=canvas.toDataURL();
	    if(wkdata=='')return;
	    viewCanvasAction();
	    var fd = new FormData();
	    fd.append('ids', $('#ids').val());
        fd.append('card_side',$("#card_side").val());
        fd.append('names',$('#photo_menu').val()+'/'+$('#photo_category').val());
        fd.append('titles',$('#p-title').val());
        fd.append('descriptions',$('#p-description').val());
        fd.append('menus',$('#photo_menu').val());
        fd.append('categories',$('#photo_category').val());
        fd.append('filters','');
		fd.append('costs1',$('#p-cost').val());
		fd.append('coins1','£');
		fd.append('rates1','1');
		fd.append('costs2','');
		fd.append('coins2','');
		fd.append('rates2','');
		
		fd.append('costs3','');
		fd.append('coins3','');
		fd.append('rates3','');
		fd.append('costs4','');
		fd.append('coins4','');
		fd.append('rates4','');
		fd.append('costs5','');
		fd.append('coins5','');
		fd.append('rates5','');
		var val=b64toBlob($('#workarea-img').attr('src'));
		//var vvv=atob($('#workarea-img').attr('src').toString().replace(/^data:image\/(png|jpeg|jpg);base64,/, '')).toString();
		//alert(vvv);
		fd.append('backgrounds',bgdata);
		fd.append('photo1',photo_arr[0][0]);
		fd.append('photostyle1',photo_arr[0][1]);
		fd.append('phototag1',photo_arr[0][2]);
		fd.append('photo2',photo_arr[1][0]);
		fd.append('photostyle2',photo_arr[1][1]);
		fd.append('phototag2',photo_arr[1][2]);
		fd.append('photo3',photo_arr[2][0]);
		fd.append('photostyle3',photo_arr[2][1]);
		fd.append('phototag3',photo_arr[2][2]);
		fd.append('photo4',photo_arr[3][0]);
		fd.append('photostyle4',photo_arr[3][1]);
		fd.append('phototag4',photo_arr[3][2]);
		fd.append('photo5',photo_arr[4][0]);
		fd.append('photostyle5',photo_arr[4][1]);
		fd.append('phototag5',photo_arr[4][2]);
		fd.append('reviewcnt',$('#reviewcnt').val());
		fd.append('likes',$('#likes').val());
		fd.append('viewcnt',$('#viewcnt').val());
		fd.append('sellcnt',$('#sellcnt').val());
		fd.append('photo8',wkdata);
		fd.append('photo9',(canvas.toDataURL()));

	 	res = $.ajax({
            url: "template/save_data",
            type: 'post',
            data: fd,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function( $data ) {
                $("#ids").val($data['ids']);
                if($data['ids']>0&&fff){
                	//$("#iiddss").val($data['ids']);
                	//$("#ffiieelldd").val('photo9');
                	//$("#ffiillee").attr('value',canvas.toDataURL());
                	//$("#bbaaccgg").attr('src',$('#workarea-img').attr('src'));
                	//var frm=$("#fileuploadfrm");
                	//$("#fileuploadfrm").ajaxSubmit();
                	alert('Success!');
                }
			},
            error: function(e) {
                alert(e.toString());
            }
        });
	 }
	 $("#save_btn").on('click',function(){
	 	save_all_data(1);
	 });
	 $("#front_btn").on('click',function(){
	 	if($("#card_side").val()==0)return;
	 	$("#card_side").val(0);
	 	$("#refresh_frm").submit();
	 });
	 $("#back_btn").on('click',function(){
	 	if($("#card_side").val()==1)return;
	 	$("#card_side").val(1);
	 	$("#refresh_frm").submit();
	 });
	 $("#photo_menu").on('change',function(){
	 	$("#refresh_frm").submit();
	 });
	 $("#photo_category").on('change',function(){
	 	$("#refresh_frm").submit();
	 });
	 $("#photo_product").on('change',function(){
	 	$("#refresh_frm").submit();
	 });
	 $.fn.textWidth = function(text, font) {
	    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
	    
	    $.fn.textWidth.fakeEl.text(text || this.val() || this.text() || this.attr('placeholder')).css('font', font || this.css('font'));
	    //alert($.fn.textWidth.fakeEl.width()+3);
	    return $.fn.textWidth.fakeEl.width()+3;
	};
	$.fn.textHeight = function(text, font) {
	    if (!$.fn.textHeight.fakeEl) $.fn.textHeight.fakeEl = $('<span>').hide().appendTo(document.body);
	    
	     $.fn.textHeight.fakeEl.text(text || this.val() || this.text() || this.attr('placeholder')).css('font', font || this.css('font'));
	    //alert(this.attr('placeholder').css('height'));
	    return $.fn.textHeight.fakeEl.height();
	    /*var span = document.createElement("span");
		$(span).html(this.val()); 
		$(span).attr('style',this.attr('style'));
		alert($(span).html());
		return span.offsetHeight;*/
	};
	function objtranscss(obj){
		if(obj.css('textShadow')=='none'){
			$("#isstroke").prop('checked',false);
		}else{
			$("#isstroke").prop('checked',true);
		}
		$("#font-family").val(obj.css('font-family'));
		$("#font-size").val(obj.css('font-size').replace(/px/g,""));
		$("#font-color").val(obj.css('color'));
		$("#font-color").trigger("keyup");
		$("#font-weight").val(obj.css('font-weight')).trigger('change');
		var deg=0;
		var matrix = obj.css("-webkit-transform") ||
	    obj.css("-moz-transform")    ||
	    obj.css("-ms-transform")     ||
	    obj.css("-o-transform")      ||
	    obj.css("transform");
	    if(matrix !== 'none') {
	        var values = matrix.split('(')[1].split(')')[0].split(',');
	        var a = values[0];
	        var b = values[1];
	        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
	    } else { var angle = 0; }
	    deg= (angle < 0) ? angle + 360 : angle;
		$("#text-rotation").val(deg);
		//alert(obj.css('font-weight'));
	}
	function objchgcss(obj){
		if($("#isstroke").prop('checked')){
			obj.css('textShadow',$("#stroke-color").val()+' 0px 1px 0px,'+$("#stroke-color").val()+' -1px -1px 0px,'+$("#stroke-color").val()+' 1px -1px 0px,'+$("#stroke-color").val()+' -1px 1px 0px,'+$("#stroke-color").val()+' 1px 1px 0px');
		}else{
			obj.css('text-shadow','none');
		}
		obj.css('font-family',"'"+$("#font-family").val()+"'");
		obj.css('font-size',$("#font-size").val().replace(/_/g,"")+'px');
		obj.css('color',$("#font-color").val());
		obj.css('font-weight',$("#font-weight").val());
		if(obj.textWidth()>1){
			obj.css('width',obj.textWidth());
			obj.css('height',obj.textHeight());
		}
		
	} 
	var temp_img_w=150,temp_img_h=150;
	$("#set-post-upload-img").on('change',function(){
	   if (this.files && this.files[0]) {
    	var FR= new FileReader();
	    FR.addEventListener("load", function(e) {
	    	var w=$("#workarea-img").css('width');
	    	w=w.replace('px','');
	    	var h=$("#workarea-img").css('height');
	    	h=(h.replace('px',''));
	    	var img = new Image();
	    	img.src = e.target.result;
	    	img.onload = function() {
		        console.log(this.width);
		        //if(this.width>0){
		        	var ww=this.width;
		        	var hh=this.height;
		        	setTimeout(function(){ 
		        		if(ww>w||hh>h){
			        		$("#temp_img").css('width',w);
							$("#temp_img").css('height',h);
			        	}else{
			        		$("#temp_img").css('width',ww);
							$("#temp_img").css('height',hh);
			        	}
		        	}, 10);
		        	
		    	//}
		        $('#temp_img').attr('src', this.src);

		    };
	    	
	      //$("#temp_img").attr('src',e.target.result);
	    }); 
	     FR.readAsDataURL( this.files[0] );
	   }
	});
	$("#upload-back-img-btn").on('change',function(){
		if (this.files && this.files[0]) {
    	var FR= new FileReader();
	    FR.addEventListener("load", function(e) {
	      document.getElementById("workarea-img").src       = e.target.result;
	      //document.getElementById("b64").innerHTML = e.target.result;
	      
	      //if(isloaded)save_all_data(0);
	    }); 	    
	     FR.readAsDataURL( this.files[0] );
	   }

	});
	//$('#master-preview').click(function(){return false;});
	//$('.fileinput-preview').click(function(){return false;});
	//$('#master-preview').find("img").click(function(){alert();return false;});
	 $(document).ready(function(){
		//$("#font-family").select2();
		$("#font-weight").select2();
		$('[data-mask]').inputmask();
		$('.my-colorpicker2').colorpicker();
		$("#temp_text").attr('unselectable', 'on')
                 .css('user-select', 'none')
                 .on('selectstart', false);
        $("#temp_text").select();
		objchgcss($("#temp_text"));
		$("#temp_text").css('border-width','1px');
    	$("#temp_text").css('border-color', '#0000000a');
    	$("#temp_text").css('background-color', 'transparent');
    	$("#temp_text").css('z-index', '10000');
    	$("#temp_img").css('border-style','solid');
		$("#temp_img").css('border-width','1px');
		$("#temp_img").css('border-color', '#0000000a');
		$("#workarea-img").attr("draggable",false);
		$("#temp_text").attr("draggable",true);
		$("#temp_img").attr("draggable",true);
		for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	$("#custom_text_"+i).bind("drop", function () {
	            return false;
	        });
	    }
	    //alert($("#temp_text").textHeight());
    	//$('.box-body').attr('ondragover','allowDrop(event)');
    	//$('.box-body').attr('ondrop','dropdel(event)');
    	isloaded=1;
    	//save_all_data(0);
	 });
	 function rotationkey(e){
	 	if(e.keyCode==38||e.keyCode==39)rotationclk(1);
	 	if(e.keyCode==40||e.keyCode==37)rotationclk(-1);
	 }
	 function rotationclk(f){
	 	var v=(eval($("#text-rotation").val())+f)%360;
	 	$("#text-rotation").val(v);
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		$("#custom_text_"+i).css('transform', 'rotate('+v+'deg)');
	    		//save_all_data(0);
	    		break;
	    	}
	    }
	 }
	 $("#temp_text").on('keyup',function(ee){
	 	if($("#temp_text").textWidth()>1){
	 		$("#temp_text").css('width',$("#temp_text").textWidth());
	 		$("#temp_text").css('height',$("#temp_text").textHeight());
	 	}
	 });
	 $("#temp_text").on('click',function(){
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	$("#custom_text_"+i).css('border-color','rgba(0, 0, 0, 0.04)');
	    	if($("#custom_text_"+i).prop("tagName")=='IMG'||$("#custom_text_"+i).prop("tagName")=='img'){
	    		$("#workarea-img").css('z-index',1000);
				$("#custom_text_"+i).css('z-index',1);
				$("#custom_text_"+i).css('opacity',1);
	    	}
	    }
	    objtranscss($("#temp_text"));
	 	$("#temp_text").select();
	 	return false;
	 });
	 $("#isstroke").on('click',function(){
	 	objchgcss($("#temp_text"));
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		objchgcss($("#custom_text_"+i));
	    		break;
	    	}
	    }
	    //save_all_data(0);
	 });
	 $("#font-family").on('change',function(){
	 	if(!isloaded)return;
	 	objchgcss($("#temp_text"));
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		objchgcss($("#custom_text_"+i));

	    		break;
	    	}
	    }
	    //save_all_data(0);
	 });
	 $("#font-size").on('keyup',function(e){
	 	if(!isloaded)return;
	 	objchgcss($("#temp_text"));
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		objchgcss($("#custom_text_"+i));
	    		break;
	    	}
	    }
	    //save_all_data(0);
	 });
	 $("#font-color").on('change',function(){
	 	if(!isloaded)return;
	 	objchgcss($("#temp_text"));
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		objchgcss($("#custom_text_"+i));
	    		break;
	    	}
	    }
	    //save_all_data(0);
	 });
	 $("#font-weight").on('change',function(){
	 	if(!isloaded)return;
	 	objchgcss($("#temp_text"));
	 	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).val()==null)continue;
	    	if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
	    		objchgcss($("#custom_text_"+i));
	    		break;
	    	}
	    }
	    //save_all_data(0);
	 });
	 
	 function dragimg(ev) {
	 	/*event.dataTransfer.setData("offset-img-x", ev.x-$(ev.target).offset().left);
		event.dataTransfer.setData("offset-img-y", ev.y-$(ev.target).offset().top);
		//alert($(ev.target).prop("id")+","+$(ev.target).prop("tagName"));*/
		if($(ev.target).prop('id')=="undefined"||$(ev.target).prop('id')==''){
			$(ev.target).prop('id','temp_img');	
		}
		drag(ev);
	 }
	 function drag(ev){
	 	/*var img = document.createElement("img");
	    img.src = '/assets/dist/images/drag.png';
	    ev.dataTransfer.setDragImage(img, 10, 10);
	    ev.dataTransfer.setData("ori", ev.target.id);*/
		//alert(ev.x-$(ev.target).offset().left);
		event.dataTransfer.setData("offset-x", ev.x-$(ev.target).offset().left);
		event.dataTransfer.setData("offset-y", ev.y-$(ev.target).offset().top);
		event.dataTransfer.setData("tagName", $(ev.target).prop('tagName'));
		if($(ev.target).attr('id')=="temp_text"||$(ev.target).attr('id')=="temp_img"){
			event.dataTransfer.setData("mode", 'add');
			event.dataTransfer.setData("current_id", text_cnt-1);

	    	var i=0;
	    	for(;i<text_cnt;i++){
		    	//if($("#custom_text_"+i).val()==null){
		    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')==''){
		    		event.dataTransfer.setData("current_id", i);break;
		    	}
		    }
		    if(i==text_cnt){
		    	//$("#temp_text").attr("draggable",false);
		    	//$("#temp_img").attr("draggable",false);
		    }
		}else{
			event.dataTransfer.setData("mode", 'update');
			event.dataTransfer.setData("current_id", $(ev.target).attr('id').replace('custom_text_',''));
		}
	}
	document.body.addEventListener('click', function(e){
		var x=e.x,y=e.y;
		var x1=$( ".previewer" ).offset().left;
		var y1=$( ".previewer" ).offset().top;
		var w1=eval($( "#workarea-img" ).css('width').replace('px',''));
		var h1=eval($( "#workarea-img" ).css('height').replace('px',''));
		if(x>=x1&&x<=eval(x1+w1)){
			if(y>=y1&&y<=eval(y1+h1)){
				var i=0;
	    		for(;i<text_cnt;i++){
		    		if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')==''){
		    		}else{
		    			if($("#custom_text_"+i).prop("tagName")=='IMG'||$("#custom_text_"+i).prop("tagName")=='img'){
		    				//if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
		    					var x2=$("#custom_text_"+i).offset().left;
								var y2=$("#custom_text_"+i).offset().top;
								var w2=eval($("#custom_text_"+i).css('width').replace('px',''));
								var h2=eval($("#custom_text_"+i).css('height').replace('px',''));
								if(x>=x2&&x<=eval(x2+w2)&&y>=y2&&y<=eval(y2+h2)){
									$("#custom_text_"+i).css('border-color', 'rgba(212, 17, 17, 0.51)');
									$("#workarea-img").css('z-index',1);
									$("#custom_text_"+i).css('z-index',1000);
									$("#custom_text_"+i).css('opacity',0.5);
								}else{
									$("#custom_text_"+i).css('border-color', 'rgba(0, 0, 0, 0.04)');
									$("#custom_text_"+i).css('opacity',1);
									$("#workarea-img").css('z-index',1000);
									$("#custom_text_"+i).css('z-index',1);
								}
								//return true;
								//alert('('+x+","+y+'),('+x1+","+y1+','+w1+','+h1+'),('+x2+","+y2+','+w2+','+h2+')');
		    				//}
		    			}
		    		}
		    	}
				
			}
		}
		return true;
	});
	document.body.addEventListener('keydown', function(e){
  		if(e.keyCode>=37&&e.keyCode<=40){
  			var i=0;
	    	for(;i<text_cnt;i++){
		    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')==''){
		    		
		    	}else{
		    		if($("#custom_text_"+i).prop("tagName")=='IMG'||$("#custom_text_"+i).prop("tagName")=='img'){
		    			if($("#custom_text_"+i).css('border-color')=='rgba(212, 17, 17, 0.51)'){
		    				$("#custom_text_"+i).css('top',eval($("#custom_text_"+i).css('top').replace('px',''))+eval(dy[3-40+e.keyCode]));
	 						$("#custom_text_"+i).css('left',eval($("#custom_text_"+i).css('left').replace('px',''))+eval(dx[3-40+e.keyCode]));
	 						break;
		    			}
		    		}
		    	}
		    }
	 		
	 		
 		}else{
 			
 		}
 		return true;
  	});


  	function inputOnKeyUp(objid){
	 	if($("#custom_text_"+objid).textWidth()>1){
	 		$("#custom_text_"+objid).css('width',$("#custom_text_"+objid).textWidth());
	 		$("#custom_text_"+objid).css('height',$("#custom_text_"+objid).textHeight());
	 	}
	 }
	 function objOnClick(objid){
    	for(var i=0;i<text_cnt;i++){
	    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')=='')continue;
	    	$("#custom_text_"+i).css('border-color', 'rgba(0, 0, 0, 0.04)');
	    	//$("#custom_text_"+i).css('border-style', 'hidden');
	    }
	    objtranscss($("#custom_text_"+objid));
	    $("#custom_text_"+objid).css('border-color','rgba(212, 17, 17, 0.51)');
	    
    	$("#custom_text_"+objid).select();
    }
    function objOnKeyDown(ek,objid){
	 	if(ek.keyCode>=37&&ek.keyCode<=40){
	 		$("#custom_text_"+objid).css('top',eval($("#custom_text_"+objid).css('top').replace('px',''))+eval(dy[3-40+ek.keyCode]));
	 		$("#custom_text_"+objid).css('left',eval($("#custom_text_"+objid).css('left').replace('px',''))+eval(dx[3-40+ek.keyCode]));
	 		
			}else{
				return true;
			}
			//if(objtype==0)$(event.target).css('width',$(event.target).textWidth());
			$("#custom_text_"+objid).select();
	 }
	 function drop(ev) {
		//ev.target.innerText = ev.target.innerText +" "+ event.dataTransfer.getData("Text");
		current_drag_text = event.dataTransfer.getData("current_id");
		if(event.dataTransfer.getData("mode")=='add'){
			var obj=null;
			var prev_obj=null;
			var objtype=0;
			if($("#temp_text").attr("draggable")=='false')return;
			if(event.dataTransfer.getData("tagName")=='INPUT'||event.dataTransfer.getData("tagName")=='input'){
				$( ".previewer" ).append( "<input id=\"custom_text_"+current_drag_text+"\" type=\"text\"></span>" );
				obj=$("#custom_text_"+current_drag_text);
				prev_obj=$('#temp_text');
				obj.val(prev_obj.val());
				
				obj.attr('draggable',true);
				obj.attr('ondragstart','drag(event)');

				obj.on('keyup',function(event){
				 	//setTimeout(function(){ }, 3000);
				 	if($(event.target).textWidth()>1){
				 		$(event.target).css('width',$(event.target).textWidth());
				 		$(event.target).css('height',$(event.target).textHeight());
				 	}
				 });
			}else{
				objtype=1;
				$( ".previewer" ).append( "<img id=\"custom_text_"+current_drag_text+"\"/>" );
				obj=$("#custom_text_"+current_drag_text);
				prev_obj=$('#temp_img');
				obj.prop('src',prev_obj.prop('src'));
				obj.attr('ondragstart','drag(event)');
				
			}
		    obj.attr('style',prev_obj.attr('style'));
		    obj.css('position','absolute');
		    obj.css('left',ev.x-$( ".previewer" ).offset().left-eval(event.dataTransfer.getData("offset-x")));
		    obj.css('top',ev.y-$( ".previewer" ).offset().top-eval(event.dataTransfer.getData("offset-y")));
		    
		    obj.on('click',function(event){
		    	//alert($(event.target).attr('id'));
		    	//var current_drag_text = event.dataTransfer.getData("current_id");
		    	for(var i=0;i<text_cnt;i++){
			    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')=='')continue;
			    	$("#custom_text_"+i).css('border-color', 'rgba(0, 0, 0, 0.04)');
			    	//$("#custom_text_"+i).css('border-style', 'hidden');
			    }
			    
			    //10-21
			    //objtranscss($(event.target));
			    $(event.target).css('border-color','rgba(212, 17, 17, 0.51)');
			    
		    	$(event.target).select();
		    	return false;
		    });
	        
		    obj.on('keydown',function(ek){
			 	if(ek.keyCode>=37&&ek.keyCode<=40){
			 		$(event.target).css('top',eval($(event.target).css('top').replace('px',''))+eval(dy[3-40+ek.keyCode]));
			 		$(event.target).css('left',eval($(event.target).css('left').replace('px',''))+eval(dx[3-40+ek.keyCode]));
			 		
		 		}else{
		 			return true;
		 		}
		 		//if(objtype==0)$(event.target).css('width',$(event.target).textWidth());
		 		$(event.target).select();
			 });

		    var i=0,j=0;
	    	for(;i<text_cnt;i++){
		    	if($("#custom_text_"+i).prop('id')==undefined||$("#custom_text_"+i).prop('id')==''){

		    	}else{j++;}
		    	
		    }
		    if(j==text_cnt){
		    	$("#temp_text").attr("draggable",false);
		    	//for(;i<text_cnt;i++){
			    //	if($("#custom_text_"+i).val()==null)continue;
			    //	$("#custom_text_"+i).attr("draggable",false);
			    //}
			}
			//pre select
			for(var i=0;i<text_cnt;i++){
		    	if($("#custom_text_"+i).val()==null)continue;
		    	$("#custom_text_"+i).css('border-color', 'rgba(0, 0, 0, 0.04)');
		    }
		    obj.css('border-color','rgba(212, 17, 17, 0.51)');
	    	obj.select();
		}else{
			var obj=$("#custom_text_"+current_drag_text);
			obj.css('left',ev.x-$( ".previewer" ).offset().left-eval(event.dataTransfer.getData("offset-x")));
		    obj.css('top',ev.y-$( ".previewer" ).offset().top-eval(event.dataTransfer.getData("offset-y")));
		}
		//save_all_data(0);
	}

	function dropdel(ev) {
		//alert(current_drag_text+','+event.dataTransfer.getData("mode"));
		current_drag_text = event.dataTransfer.getData("current_id");
		if(event.dataTransfer.getData("mode")=='update'){
			$("#custom_text_"+current_drag_text).remove();
			$("#temp_text").attr("draggable",true);
	    	$("#temp_img").attr("draggable",true);
	    	//save_all_data(0);
    	}
	}

	 function allowDrop(ev) {
	    ev.preventDefault();
	}

</script>