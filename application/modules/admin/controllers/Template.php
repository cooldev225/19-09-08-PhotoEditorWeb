<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends Admin_Controller {

	public function index()
	{
		$photo_menu='';if(isset($_POST['photo_menu']))$photo_menu=$_POST['photo_menu'];
		$photo_category='';if(isset($_POST['photo_category']))$photo_category=$_POST['photo_category'];
		//$photo_category=str_replace(' ', '', $photo_category);
		$photo_product='';if(isset($_POST['photo_product']))$photo_product=$_POST['photo_product'];
		$this->load->model('users_model', 'users');
		$photo_product_row=array(
			'ids'=>'','names'=>'','titles'=>'','descriptions'=>'','menus'=>'','categories'=>'','filters'=>'',
			'costs1'=>'3.26','coins1'=>'£','rates1'=>'1','costs2'=>'','coins2'=>'','rates2'=>'','costs3'=>'','coins3'=>'','rates3'=>'','costs4'=>'',	'coins4'=>'','rates4'=>'','costs5'=>'',	'coins5'=>'','rates5'=>'',
			'backgrounds'=>'',
			'photo1'=>'','photostyle1'=>'','phototag1'=>'',
			'photo2'=>'','photostyle2'=>'','phototag2'=>'',
			'photo3'=>'','photostyle3'=>'','phototag3'=>'',
			'photo4'=>'','photostyle4'=>'','phototag4'=>'',
			'photo5'=>'','photostyle5'=>'','phototag5'=>'',
			'photo6'=>'','photostyle6'=>'','phototag6'=>'',
			'photo7'=>'','photostyle7'=>'','phototag7'=>'',
			'photo8'=>'','photostyle8'=>'','phototag8'=>'',
			'photo9'=>'','photostyle9'=>'','phototag9'=>'',

			'00_backgrounds'=>'',
			'00_photo1'=>'','00_photostyle1'=>'','00_phototag1'=>'',
			'00_photo2'=>'','00_photostyle2'=>'','00_phototag2'=>'',
			'00_photo3'=>'','00_photostyle3'=>'','00_phototag3'=>'',
			'00_photo4'=>'','00_photostyle4'=>'','00_phototag4'=>'',
			'00_photo5'=>'','00_photostyle5'=>'','00_phototag5'=>'',

			'reviewcnt'=>'','likes'=>'','viewcnt'=>'','sellcnt'=>''
		);
		if($photo_product!=''){
			$rows=$this->users->execute_query("select * from products where ids='{$photo_product}'");
			if(count($rows))if($rows[0]['menus']==$photo_menu&&$rows[0]['categories']==$photo_category){
				$photo_product_row=$rows[0];
				$photo_menu=$photo_product_row['menus'];
				$photo_category=$photo_product_row['categories'];
			}
		}
		$card_side=0;
		if(isset($_POST['card_side']))$card_side=$_POST['card_side'];
		$this->mViewData['data'] = array(
			'fonts' => $this->users->execute_query("select * from fonts"),
			'photo_menu' => $photo_menu,
			'photo_category' => $photo_category,
			'photo_product' => $photo_product,
			'photo_product_row' => $photo_product_row,
			'card_side'=>$card_side
		);
		$this->render('template');
	}
	public function save_data(){
		$card_prefix="";
		if($_POST['card_side']==1)$card_prefix="00_";
		$photo_product_row=array(
			'ids'=>$_POST['ids'],'names'=>$_POST['names'],'titles'=>$_POST['titles'],'descriptions'=>$_POST['descriptions'],'menus'=>$_POST['menus'],'categories'=>$_POST['categories'],'filters'=>$_POST['filters'],
			'costs1'=>$_POST['costs1'],'coins1'=>$_POST['coins1'],'rates1'=>$_POST['rates1'],'costs2'=>$_POST['costs2'],'coins2'=>$_POST['coins2'],'rates2'=>$_POST['rates2'],'costs3'=>$_POST['costs3'],'coins3'=>$_POST['coins3'],'rates3'=>$_POST['rates3'],'costs4'=>$_POST['costs4'],	'coins4'=>$_POST['coins4'],'rates4'=>$_POST['rates4'],'costs5'=>$_POST['costs5'],	'coins5'=>$_POST['coins5'],'rates5'=>$_POST['rates5'],
			$card_prefix.'backgrounds'=>$_POST['backgrounds'],
			$card_prefix.'photo1'=>$_POST['photo1'],$card_prefix.'photostyle1'=>$_POST['photostyle1'],$card_prefix.'phototag1'=>$_POST['phototag1'],
			$card_prefix.'photo2'=>$_POST['photo2'],$card_prefix.'photostyle2'=>$_POST['photostyle2'],$card_prefix.'phototag2'=>$_POST['phototag2'],
			$card_prefix.'photo3'=>$_POST['photo3'],$card_prefix.'photostyle3'=>$_POST['photostyle3'],$card_prefix.'phototag3'=>$_POST['phototag3'],
			$card_prefix.'photo4'=>$_POST['photo4'],$card_prefix.'photostyle4'=>$_POST['photostyle4'],$card_prefix.'phototag4'=>$_POST['phototag4'],
			$card_prefix.'photo5'=>$_POST['photo5'],$card_prefix.'photostyle5'=>$_POST['photostyle5'],$card_prefix.'phototag5'=>$_POST['phototag5'],

			'reviewcnt'=>$_POST['reviewcnt'],'likes'=>$_POST['likes'],'viewcnt'=>$_POST['viewcnt'],'sellcnt'=>$_POST['sellcnt'],
			$card_prefix.'photo8'=>$_POST['photo8'],
			$card_prefix.'photo9'=>$_POST['photo9']
		);
		

		$id=$_POST['ids'];
		$this->load->model('users_model', 'users');
		if($id!=''){
			$this->users->execute_update('products','ids',$photo_product_row);
		}else{
			$id=$this->users->execute_insert('products',$photo_product_row);
		}

		$res=array(
			'ids'=>$id,
			'msg'=>'ok',
			'$prev_ids'=>$_POST['ids']
		);
		echo json_encode($res);
	}

	public function save_file_data(){
		/*$path = 'myfolder/myimage.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
*/
		$photo_product_row=array(
			//'ids'=>$_POST['iiddss'],$_POST['ffiieelldd']=>$_FILES['ffiillee'],'backgrounds'=>$_POST['bbaaccgg']
		);
		$id=$_POST['iiddss'];
		$this->load->model('users_model', 'users');
		if($id!=''){
			//$this->users->execute_update('products','ids',$photo_product_row);
		}
		$res=array(
			'ids'=>$id,
			'msg'=>'ok',
			'val'=>$_FILES['ffiillee']['tmp_name']
		);
		echo json_encode($res);
	}
}
