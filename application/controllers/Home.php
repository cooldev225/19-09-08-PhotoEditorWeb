<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {
	public function __construct()
	{
		//$this->CI =& get_instance();
		parent::__construct();
		$this->load->model('users_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->mViewData['photomenu'] = $this->users->execute_query("select * from menu");
	}
	public function index()
	{
		
		$this->mViewData['bestproducts'] = $this->users->execute_query("select * from products where typex<4 order by (avgmarks*reviewcnt+viewcnt/10) desc limit 20");
		$this->mViewData['browse_cards'] = $this->users->execute_query("select a.* from products a join menu b on a.menus=b.names where b.kinds='card' group by a.categories order by (a.avgmarks*a.reviewcnt+ a.viewcnt/10)");
		$this->mViewData['browse_gifts'] = $this->users->execute_query("select a.* from products a join menu b on a.menus=b.names where b.kinds='gift' group by a.categories order by (a.avgmarks*a.reviewcnt+ a.viewcnt/10)");
		
		$this->mViewData['search_blog']=array(
			explode(",","Trending,Bestselling,Calendars,Flowers"),
			explode(",","Christmas,Photo Upload,Create Your Own,Invitations"),
			explode(",","Birthday Age,Kids Birthday,Mugs,Postcards"),
			explode(",","Wedding cards,Thank you Cards,Anniversary,Congratulations Cards"),
			explode(",","Christmas Gifts,Birthday Gifts,Personalised Gifts,Photo Gifts"),
			explode(",","Gifts for Her,Gifts for Him,Gifts for Kids,Gifts for Babies"));

		$this->render('home', 'full_width');
	}

	public function personal(){
		$sss="";
		foreach ($this->session->all_userdata() as $key => $val) {
			if(!is_array($val)&&!is_object($val))$sss.="{$key}---{$val}<br>";
		}
		//echo $sss;

		if(isset($_POST['__EVENTTARGET']))if($_POST['__EVENTTARGET']==='ctl00$ContentPlaceHolder1$uclGiftCardMall1$imgNextSetp2')$_POST['page_stage']=3;

		if(!$this->session->has_userdata('current_user')){
			$this->mViewData['current_user']='';
		}else{
			$this->mViewData['current_user']=$this->session->userdata('current_user');
		}
		foreach ($_GET as $key => $val) {
			$_POST[$key]=$val;
		}

		if(!isset($_POST['product_id'])){
			//$this->render('errors/custom/error_404','full_width');
			redirect('index');
			return;
		}
		$pid=$_POST['product_id'];
		$rows = $this->users->execute_query("select * from products where ids='{$pid}'");
		if(!count($rows)){
			//$this->render('errors/custom/error_404','full_width');
			redirect('index');
			return;
		}
		if(!isset($_POST['page_stage'])||$_POST['page_stage']==0){
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_front_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_front_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_right_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_right_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_back_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_back_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image__124');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_left_{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text__{$pid}');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_left_{$pid}');
			$this->session->unset_userdata('edit_product_id');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hiddenProductSize');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$txtQuantity');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenQPrice');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenQOldPrice');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product');
			$this->session->unset_userdata('ctl00$ContentPlaceHolder1$CardFlow1$page_complete');
			$this->session->unset_userdata('ddd');
			$this->session->unset_userdata('ddd');
		}
		
		if($this->session->has_userdata('product_id'))if($this->session->userdata('product_id')!=$_POST['product_id']){
			//$this->session->sess_destroy();
		}
		$this->mViewData['PAGE_PREPARE_STAGE']=0;
		$this->mViewData['PAGE_PERSONAL_STAGE']=1;
		$this->mViewData['PAGE_CHOCO_STAGE']=2;
		$this->mViewData['PAGE_DELIV_STAGE']=3;
		$this->mViewData['PAGE_POSTA_STAGE']=4;
		$this->mViewData['PAGE_CONFI_STAGE']=5;
		
		$this->mViewData['data']['photo_product_row']=$rows[0];

		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice']=3.29;
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice']=3.29;
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$AW']=96;
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$AH']=97;
		$this->mViewData['data']['__VIEWSTATEFIELDCOUNT']=3;
		$this->mViewData['data']['__VIEWSTATE']='9R83prcEPAqJZsHpqD4mRev';
		
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$page_complete']='1=1,2=1,3=1,4=1';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$is_music_card']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$is_video_card']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$is_preview']='1';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$is_final_process']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$hidden_badward_list']='[]';
		$this->mViewData['data']['MM_test']='1';
		$this->mViewData['data']['MM_test_drag']='1';
		$this->mViewData['data']['MM_test_drag_v']='0';
		$this->mViewData['data']['MM_guide_test']='1';
		$this->mViewData['data']['MM_test_fb']='1';
		$this->mViewData['data']['MM_test_done']='1';
		$this->mViewData['data']['MM_return_to_photos']='0';
		$this->mViewData['data']['giant_popup']='1';
		$this->mViewData['data']['preview_proceed']='0';
		$this->mViewData['data']['SimilarC_count']='0';
		

		//delivery
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_main_section']='A';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type_ischange']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_is_address_select']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_address']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_address_country']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_potage_despatch_selected_date']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_potage_despatch_customer_selected_date']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_potage_donotopen_selected_date']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_validation_iscardhascontent']='1';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_validation_multidirect']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_validation_highstreet_direct_avoid']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_validation_weddingstationary_direct_avoid']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_validation_delivery_not_available_for_selected_country']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_special_postage_message']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_special_postage']='0';
		$this->mViewData['data']['letter_drop']='';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$form_add_edit_addresses_ctr_select_country']='United Kingdom';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$popup_add_edit_addresses_ctr_select_country']='United Kingdom';

		$json_key='ctl00$ContentPlaceHolder1$CardFlow1$json_session_';
		$this->mViewData['data'][$json_key.'text_front']=$this->session->has_userdata($json_key.'text_front_'.$pid)?$this->session->userdata($json_key.'text_front_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'image_front']=$this->session->has_userdata($json_key.'image_front_'.$pid)?$this->session->userdata($json_key.'image_front_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'text_cardinside_left']=$this->session->has_userdata($json_key.'text_cardinside_left')?$this->session->userdata($json_key.'text_cardinside_left'):'[]';
		$this->mViewData['data'][$json_key.'image_cardinside_left']=$this->session->has_userdata($json_key.'image_cardinside_left_'.$pid)?$this->session->userdata($json_key.'image_cardinside_left_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'text_cardinside_right']=$this->session->has_userdata($json_key.'text_cardinside_right_'.$pid)?$this->session->userdata($json_key.'text_cardinside_right_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'image_cardinside_right']=$this->session->has_userdata($json_key.'image_cardinside_right_'.$pid)?$this->session->userdata($json_key.'image_cardinside_right_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'text_back']=$this->session->has_userdata($json_key.'text_back_'.$pid)?$this->session->userdata($json_key.'text_back_'.$pid):'[]';
		$this->mViewData['data'][$json_key.'image_back']=$this->session->has_userdata($json_key.'image_back_'.$pid)?$this->session->userdata($json_key.'image_back_'.$pid):'[]';

		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template']=$this->session->has_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template_'.$pid)?$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template_'.$pid):'cardinside_template_blank';

		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template']=$this->session->has_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template_'.$pid)?$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template_'.$pid):'cardinside_template_1';

		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template']=$this->session->has_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template_'.$pid)?$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template_'.$pid):'cardback_1';

		$this->mViewData['data']['countries']=array();
		$rows = $this->users->execute_query("select * from countries order by ids");
		if(count($rows)){
			$this->mViewData['data']['countries']=$rows;
		}
		//common
		$this->mViewData['hidden_card_total_Count']='0';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$detect_mobile_vp']='normal_vp';
		if(!isset($_POST['paper_size']))$_POST['paper_size']='A5';
		foreach($_POST as $key=>$val){
			//if($key=='ct100$ContentPlaceHolder1$hidden_current_active_product')$key='$ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product';
			$this->mViewData['data'][$key]=$val;
			//str_replace("\"", "\\\"",$val);
		//echo $key.":".str_replace("\"", "&quot;",$val)."<br>";
			//if(!is_numeric($key))if(!$this->session->has_userdata($key))$this->session->set_flashdata($key,$val);//session->set_userdata($key,$val);
			//ctl00_ContentPlaceHolder1_CardFlow1_txtQuantity
			
			if(
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$page_complete'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_curre_product'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$txtQuantity'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$HiddenQPrice'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$HiddenQOldPrice'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$hiddenProductSize'
			){
				$this->session->set_userdata($key,$val);
			}else if(
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template'||
				$key==='ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template'||
				strpos($key,'ctl00$ContentPlaceHolder1$CardFlow1$json_session_')!==false
			){
				$this->session->set_userdata($key."_".$pid,$val);
			}
		}//exit();s_selected_card_sizecardSizeChanged
		//ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product
		//ctl00$ContentPlaceHolder1$hidden_current_active_product
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_current_active_product']=$this->session->has_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product')?$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product'):'[]';
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_current_active_product']=str_replace('"','&quot;',$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_current_active_product']);
		
		$templete_key='ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeCardInside1$hidden_template_cardinside_';
		$this->mViewData['data'][$templete_key.'standard_left']='cardinside_template_blank,cardinside_template_1,cardinside_template_6,cardinside_template_9,cardinside_template_2,cardinside_template_8,cardinside_template_7,cardinside_template_4,cardinside_template_10,cardinside_template_11,cardinside_template_12,cardinside_template_13';
		$this->mViewData['data'][$templete_key.'standard_right']='cardinside_template_1,cardinside_template_6,cardinside_template_9,cardinside_template_2,cardinside_template_8,cardinside_template_7,cardinside_template_4,cardinside_template_10,cardinside_template_11,cardinside_template_12,cardinside_template_13';
		$this->mViewData['data'][$templete_key.'advanced_left']='cardinside_template_4,cardinside_template_10,cardinside_template_11,cardinside_template_12,cardinside_template_13';
		$this->mViewData['data'][$templete_key.'advanced_right']='cardinside_template_4,cardinside_template_10,cardinside_template_11,cardinside_template_12,cardinside_template_13';
		
		$fontstr='';
		$fontrows=$this->users->execute_query("select * from fonts");
		foreach ($fontrows as $r){
			$fontstr.=($fontstr==''?"":",")."{$r['fonts']}^{$r['fonts']}";
		}
		$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$PersonalizeTextUpdate1$hidden_active_font_name']="2:{$fontstr}~3:{$fontstr}~4:";
		//2:margarine^Margarine,aldrich^Aldrich,anton^Anton,cinzel^Cinzel,graduate^Graduate,lato^Lato,librebaskerville^Libre Baskerville,lora^Lora,neuton^Neuton,palatino linotype^Palatino,patrick hand^Patrick Hand,seaweed script^Seaweed Script~3:margarine^Margarine,aldrich^Aldrich,anton^Anton,cinzel^Cinzel,graduate^Graduate,lato^Lato,librebaskerville^Libre Baskerville,lora^Lora,neuton^Neuton,palatino linotype^Palatino,patrick hand^Patrick Hand,seaweed script^Seaweed Script~4:";

		//$this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$current_sessionid'] = $this->session->userdata('session_id');
		//exit($this->mViewData['data']['ctl00$ContentPlaceHolder1$CardFlow1$current_sessionid']);
		$customer_date='';
		if(isset($_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date']))
			$customer_date=$_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date'];
		$current_date=date("d/m/Y");
		$current_time=date("H:i:s");
		//echo $customer_date.",".$current_date.",".$current_time;
		$this->mViewData['able_delivery_list']=getDeliveryList($current_date,$current_time,$customer_date,'card');

		$delivery_method=0;
		if(isset($_POST['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change'])){
			$delivery_method=str_replace("postage_label", "", $_POST['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change']);
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change']=$_POST['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change'];
		}else 
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_selected_delivery_method_change']='postage_label0';

		$page_stage=$this->mViewData['PAGE_PREPARE_STAGE'];
		if(isset($_POST['page_stage']))
			$page_stage=$_POST['page_stage'];
		//$page_stage=2;
		if($page_stage==$this->mViewData['PAGE_CHOCO_STAGE']){
			$this->mViewData['giftsdata']=array();
			$this->mViewData['chocsdata']=array();
			$this->mViewData['cardsdata']=array();
			$rows = $this->users->execute_query("select * from products where typex='4' and personalx=0 order by ids limit 3");
			if(count($rows))$this->mViewData['giftsdata']=$rows;
			$rows = $this->users->execute_query("select * from products where typex='5' and personalx=0 order by ids limit 3");
			if(count($rows))$this->mViewData['chocsdata']=$rows;
			$rows = $this->users->execute_query("select * from products where typex='6' and personalx=0 order by ids");
			if(count($rows))$this->mViewData['cardsdata']=$rows;
		}else if($page_stage==$this->mViewData['PAGE_DELIV_STAGE']){

			
			


			if(!$this->session->has_userdata('identity')){
				//$this->mViewData['prodId']="";
				//$this->mViewData['prodtype']="";
				//$this->mViewData['sizeId']="";
				//$this->mViewData['flowTrackingId']="";
				//$sss="";
				//foreach ($this->session->all_userdata() as $key => $val) {
				//	$sss.="{$key}---{$val}<br>";
				//}
				$url="";
				$apdobj=array();
				if($this->session->has_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product')){
					//echo $this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product');
					$apdobj=json_decode($this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product'));
					$url="?prodId={$apdobj->ProductId}&prodtype={$apdobj->ProductTypeId}&sizeId=".$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$hiddenProductSize')."&flowTrackingId=deli";
				}
				//echo ("<br>>>>".$url);
				//$url = '/auth?prodId='+$_POST['product_id']+'&prodtype='+pty+'&sizeId=' + sizeid + '&flowTrackingId=' + flowTrackingId;
				redirect('auth'.$url);
			}else if($this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_main_section']==='P'){
				$page_stage=4;	
			}
		}//echo "<br>>>>".$page_stage.">>>".$this->mViewData['PAGE_CONFI_STAGE'];
		if(isset($_POST['__EVENTTARGET']))if($page_stage==$this->mViewData['PAGE_CONFI_STAGE']||($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lbtConfirm')){
			//if(isset($_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date'])&&$_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date']!=''){
			if(!isset($_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date']))
				$_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date']='';
			if($this->session->has_userdata('edit_product_id')){
				//edit_product_id---15,124
				//edit_product_gid---19,20,21@124	
				//ctl00$ContentPlaceHolder1$hidden_selected_delivery_type=='B'
				$toname=$this->session->userdata('current_user_obj')->first_name;
				if(isset($_POST['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type'])&&$_POST['ctl00$ContentPlaceHolder1$hidden_selected_delivery_type']!="B"){
					//
				}
				$arr=explode(',',$this->session->userdata('edit_product_id'));
				$id=$arr[0];
				//echo $id.">>>".$this->mViewData['able_delivery_list'][$delivery_method]['cost'];
				$photo_product_row=array(
					'ids'=>$id,
					'_price_delivery'=>$this->mViewData['able_delivery_list'][$delivery_method]['cost'],
					'_price_currency'=>$this->mViewData['currency_symbol'],
					'_price_delivery_currency'=>$this->mViewData['currency_symbol'],
					'_deliverydate'=>$_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date'],
					'_toname'=>$toname,
					'_status'=>2
				);
				if($id!=''){
					$this->users->execute_update('products_custom','ids',$photo_product_row);
				}

				if($this->session->has_userdata('edit_product_gid')){
					$arr=explode('@',$this->session->userdata('edit_product_gid'));
					$ddd=getDeliveryList($current_date,$current_time,$customer_date,'gift');
					foreach(explode(',',$arr[0]) as $id){
						$photo_product_row=array(
							'ids'=>$id,
							'_price_delivery'=>$ddd[$delivery_method]['cost'],
							'_price_currency'=>$this->mViewData['currency_symbol'],
							'_price_delivery_currency'=>$this->mViewData['currency_symbol'],
							'_deliverydate'=>$_POST['ctl00$ContentPlaceHolder1$hidden_potage_delivery_customer_selected_date'],
							'_toname'=>$toname,
							'_status'=>2
						);
						if($id!=''){
							$this->users->execute_update('products_custom','ids',$photo_product_row);
						}
					}
				}
			}
			redirect(lang_url($this->mLanguage,'basket'));
		}

		//save choco product save
		if($this->session->has_userdata('current_user')&&isset($_POST['chkFp_1'])||isset($_POST['chkFp_2'])||isset($_POST['chkFp_3'])){
			$ids='';
			for($i=1;$i<4;$i++)if(isset($_POST["chkFp_{$i}"]))if($_POST["chkFp_{$i}"]!==''){
				foreach($_POST["chkFp_{$i}"] as $gid)if(isset($_POST["ctrName{$gid}"])&&isset($_POST["ctrPrice{$gid}"])){
					//ctrName75:Chocolate Baked Beans on Toast
					//ctrPrice75:11.99
					$rows = $this->users->execute_query("select * from products where ids='{$gid}'");
					if(count($rows)){
						$ddd=getDeliveryList($current_date,$current_time,$customer_date,'gift');
						$id='';
						$photo_product_row=array(
							'ids'=>$id,
							'_user'=>$this->session->userdata('current_user'),
							'ids_temp'=>"{$gid}",
							'_title'=>$_POST["ctrName{$gid}"],
							'_type'=>"4",
							'_producttype'=>"{$rows[0]['typex']}",
							'_barcode'=>"{$rows[0]['barcodex']}",
							'_ilist_cil'=>$this->mViewData['data'][$json_key.'image_cardinside_left'],
							'_ilist_cir'=>$this->mViewData['data'][$json_key.'image_cardinside_right'],
							'_ilist_cb'=>$this->mViewData['data'][$json_key.'image_back'],
							'_ilist_cf'=>$this->mViewData['data'][$json_key.'image_front'],
							'_tlist_cf'=>$this->mViewData['data'][$json_key.'text_front'],
							'_tlist_cil'=>$this->mViewData['data'][$json_key.'text_cardinside_left'],
							'_tlist_cir'=>$this->mViewData['data'][$json_key.'text_cardinside_right'],
							'_tlist_cb'=>$this->mViewData['data'][$json_key.'text_back'],
							'_temp_cil'=>$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template_'.$pid),
							'_temp_cir'=>$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template_'.$pid),
							'_temp_cb'=>$this->session->userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template_'.$pid),
							'_giftbagprice'=>isset($_POST["ctrGiftWrap{$gid}"])?$_POST["ctrGiftWrap{$gid}"]:"0.00",
							'_giftbagtype'=>"1",
							'_direct'=>"0",
							'_quantity'=>"1",
							/*'_price'=>number_format($_POST["ctrPrice{$gid}"]*$currency_rate,2,'.', ''),
							'_price_currency'=>$this->mViewData['currency_symbol'],
							'_price_delivery'=>number_format(getDeliveryList($current_date,$current_time,$customer_date,'gift')*$currency_rate,2,'.', ''),
							'_price_delivery_currency'=>$this->mViewData['currency_symbol'],*/
							'_price'=>$_POST["ctrPrice{$gid}"],
							'_price_currency'=>$this->mViewData['currency_symbol'],
							'_price_delivery'=>$ddd[0]['cost'],
							'_price_delivery_currency'=>$this->mViewData['currency_symbol'],
							'_addressid'=>"",
							'_deliverydate'=>"",
							'_frontsrc'=>$rows[0]['backgrounds'],
							'_leftinsidesrc'=>"",
							'_rightinsidesrc'=>"",
							'_backinsidesrc'=>"",
							'_active_product'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$hidden_current_active_product'],
							'_status'=>0
						);
						if($id!=''){
							$this->users->execute_update('products_custom','ids',$photo_product_row);
						}else{
							$id=$this->users->execute_insert('products_custom',$photo_product_row);
						}
						$ids.=($ids==''?'':',').$id;
					}
				}
			}
			if($ids!=''){
				$this->session->set_userdata('edit_product_gid',"{$ids}@{$_POST['product_id']}");
			}
		}

		//
		if(isset($_POST['ctl00$ContentPlaceHolder1$hidden_is_address_select'])&&$_POST['ctl00$ContentPlaceHolder1$hidden_is_address_select']!=''){
			if($this->session->has_userdata('edit_product_id')){
				//edit_product_id---15,124
				//edit_product_gid---19,20,21@124	
				$arr=explode(',',$this->session->userdata('edit_product_id'));
				$id=$arr[0];
				$photo_product_row=array(
					'ids'=>$id,
					'_addressid'=>$_POST['ctl00$ContentPlaceHolder1$hidden_is_address_select'],
					'_status'=>1
				);
				
				if($id!=''){
					$this->users->execute_update('products_custom','ids',$photo_product_row);
				}

				if($this->session->has_userdata('edit_product_gid')){
					$arr=explode('@',$this->session->userdata('edit_product_gid'));
					foreach(explode(',',$arr[0]) as $id){
						$photo_product_row=array(
							'ids'=>$id,
							'_addressid'=>$_POST['ctl00$ContentPlaceHolder1$hidden_is_address_select'],
							'_status'=>1
						);
						if($id!=''){
							$this->users->execute_update('products_custom','ids',$photo_product_row);
						}
					}
				}
			}else{
				///////////////////////////////////////////////////////////////////////////////////
			}
		}

		$this->mViewData['page_stage']=$page_stage;
		$this->mViewData['product_id']=$pid;
		$this->mViewData['bestproducts'] = $this->users->execute_query("select * from products where typex<4 order by (avgmarks*reviewcnt+viewcnt/10) desc limit 20");

		//$page_stage=3;
		//echo 'personal_0'.$page_stage;
		if($page_stage==1){
			$url = "https://barcode.tec-it.com/barcode.ashx?data=".($pid*123456%1000000)."&code=Code128&dpi=96&dataseparator=";
			$img = "assets/dist/barcodes/{$pid}.png";
			file_put_contents($img, file_get_contents($url));
		}
		$this->render('personal_0'.$page_stage, 'full_width');
		
		//echo str_replace("\"", "\\\"", $_POST['ctl00$ContentPlaceHolder1$CardFlow1$image_front']);
	}

	public function findview(){
			if(isset($_GET['menu']))$_POST['filter_menu']=$_GET['menu'];
			if(isset($_GET['cat']))$_POST['filter_category']=$_GET['cat'];
			$this->mViewData['page_size']=isset($_POST['page_size'])?$_POST['page_size']:12;
			$this->mViewData['page_start']=isset($_POST['page_start'])?$_POST['page_start']:1;
			$this->mViewData['page_current']=isset($_POST['page_current'])?$_POST['page_current']:1;
			$this->mViewData['page_order']=isset($_POST['page_order'])?$_POST['page_order']:"ids";
			$this->mViewData['filter_category']=(isset($_POST['filter_category']))?$_POST['filter_category']:"";
			$this->mViewData['filter_menu']=(isset($_POST['filter_menu']))?$_POST['filter_menu']:"";
			$this->mViewData['filter_flag']=(isset($_POST['filter_flag']))?$_POST['filter_flag']:-1;
			foreach ($_POST as $key => $value) {
				//echo "{$key}-----{$value}<br>";
			}

			$sql="select * from products where typex=0 ";
			if($this->mViewData['filter_menu']!=''){
				$sss="";
				foreach(explode(" ", $this->mViewData['filter_menu']) as $s){
					$sss.=($sss==""?"":" or ")." menus like \"%{$s}%\" ";
				}
				$sql.=" and ({$sss}) ";
			}
			//echo "string=".$this->mViewData['filter_category'];
			if($this->mViewData['filter_category']!='')$sql.=" and categories='{$this->mViewData['filter_category']}' ";
			if($this->mViewData['filter_flag']>=0)$sql.=" and flag1='{$this->mViewData['filter_flag']}' ";
			if(isset($_GET['sch'])){
				$sql.=" and (menus like \"%{$_GET['sch']}%\" or categories like \"%{$_GET['sch']}%\" or titles like \"%{$_GET['sch']}%\" or descriptions like \"%{$_GET['sch']}%\") ";
				$this->mViewData['_sch_']=$_GET['sch'];
			}

			$this->mViewData['mincost']=1;
			$this->mViewData['maxcost']=20;
			$rows=$this->users->execute_query($sql);
			if(count($rows)){
			//	$this->mViewData['mincost']=$rows[0]['mincost'];
			//	$this->mViewData['maxcost']=$rows[0]['maxcost'];
			}
			$this->mViewData['page_totalcount']=count($rows);
			$start=($this->mViewData['page_current']-1)*$this->mViewData['page_size'];
			$sql="{$sql} order by {$this->mViewData['page_order']} limit {$start},{$this->mViewData['page_size']}";
			//echo $sql;
			$this->mViewData['products']=$this->users->execute_query($sql);

			$this->mViewData['filtercategories']=array();
			$rows=$this->users->execute_query("select * from categories where parents>0 ");
			foreach($rows as $r){
				if(isset($index[$r['names']]))continue;
				$index[$r['names']]=1;
				$rs=$this->users->execute_query("select count(*) as cnt from products where categories=\"{$r['names']}\" ");
				$r['_count_']=0;
				if(count($rs))$r['_count_']=$rs[0]['cnt'];
				$this->mViewData['filtercategories'][]=$r;
			}
			$this->mViewData['search_tag']=explode(",","Non-Personalized,Upload-Only Personalized,Text-Only Personalized,Photo & Text Personalized");//
			$this->render('home_items.php', 'full_width');
		} 

	public function GetVolumePrice()
	{
	//var newVar =  cardSize + "," + quantity + "," + selectedProductOutputSizeId + "," + 164649 + "," +  true;	
		//{{'volPricearg': 'A5,10,11,133762,true'}
		$prices=explode(',', '9.99,5.59,3.29,2.29');
		$prices=explode(',', '9.99,3.29,1.69,1.39');
		$sizes=explode(',', 'A3,A4,A5,A6');
		$request_body = file_get_contents('php://input');
		//echo $request_body;
		$data=json_decode("{$request_body}");
		$data = explode(',',$data->volPricearg);
		//echo $data[0].">".$data[1];
		for($i=0;$i<count($sizes);$i++)if($sizes[$i]==$data[0])
			exit("{\"d\":\"{$prices[$i]}\"}");
		echo "{d:{$prices[2]}}";
	}
	public function personal_giftsList(){
		//catList: ",28,290"
		//currentPage: "1"
		//displayName: "Gifts"
		//fpCatId: "2689"
		//productsPerPage: "16"
		$request_body = file_get_contents('php://input');
		$data = json_decode($request_body);
		$fpCatId=array('2689'=>4,'2693'=>5);
		$typex=$fpCatId[$data->fpCatId];
		$from=$data->productsPerPage*($data->currentPage-1);
		$to=$data->productsPerPage*$data->currentPage;
		$sql="from products where typex='{$typex}' and personalx=0 order by ids ";
		$rows = $this->users->execute_query("select count(*) as cnt {$sql}");
		$cnt=$rows[0]['cnt'];
		$rows = $this->users->execute_query("select * {$sql} limit {$from},{$to}");
		$pagecnt=$cnt/$data->fpCatId+($cnt%$data->fpCatId?1:0);
		$html="";
		foreach($rows as $r){
		$html.="
		<div class=\"qg_product\">
			<div class=\"gift_card_title\">{$r['names']}
				<input type=\"hidden\" id=\"ctrName{$r['ids']}\" name=\"ctrName{$r['ids']}\" value=\"{$r['names']}\" />
			</div>
			<div class=\"gift_card_thumb\">
				<img src=\"{$r['backgrounds']}\" alt=\"{$r['names']}\" title=\"{$r['names']}\" />
				<div class=\"item_inside3\">
					<a href=\"javascript://\" onclick=\"getProductInfo('154111', '1')\">More Info</a>
				</div>
			</div>
			<div class=\"item_inside1\">
				<div class=\"gift_card_select\">
				</div>
			</div>
			<div class=\"qg_price\">
				<div class=\"qg_price_right\">
					<div class=\"styledRadio FPCheckBox\" onclick=\"javascript:addGiftToPurchase({$r['ids']}, false);\">
						<input type=\"checkbox\" class=\"FPCheckBox\" alt=\"{$r['names']}\" name=\"chkFp_1\" value=\"{$r['ids']}\" >
					</div>
					<div class=\"item_price_wc\">{$this->mViewData['currency_symbol']}".($r['costs1']*$this->mViewData['currency_rate'])."
						<input type=\"hidden\" id=\"ctrPrice{$r['ids']}\" name=\"ctrPrice{$r['ids']}\" value=\"{$r['costs1']}\"/>
					</div>
					<label>Add</label>
				</div>
				<div style=\"clear:both;\"></div>
			</div>
			<div class=\"qg_gift_wrapp\">
				<input type=\"checkbox\" value=\"2.99\" name=\"ctrGiftWrap{$r['ids']}\" id=\"ctrGiftWrap{$r['ids']}\" /> : Gift Wrap (+ {$this->mViewData['currency_symbol']}".(2.29*$this->mViewData['currency_rate']).")
			</div>
			<div class=\"qg_gift_message_wrapper\">
				<div class=\"qg_gift_message_heading\">Gift Message</div>
				<div class=\"qg_gift_message_body\">
					<textarea name=\"ctrMessage154111\" id=\"ctrMessage154111\" cols=\"10\" rows=\"3\"></textarea>
				</div>
			</div>
		</div>";
		}
		$res = array('d'=>array(
			"productListString" => $html,
			"__type"=> "SpiltInkStudioRetail.Pages.GiftCard.GiftCardMall_WC+NppList",
			"noOfAvailablePages"=> $pagecnt
		));
		echo json_encode($res);
	}
	public function newFlow_ProductSave(){
		$res=0;
		$pobj=json_decode($_POST['currentActiveProduct']);
		if($pobj->ProductId!=$_POST['productid'])exit('-1');
		//echo $this->session->userdata('identity');
		/*
		type: 1, 
        productid: pid, 
        producttypeid: pty, 
        barcode: 'UKT7SMIYIHPV', 
        customizeImageListFront: customizeImageListFront, 
        customizeImageListCIL: customizeImageListCIL,
        customizeImageListCIR: customizeImageListCIR, 
        customizeImageListBack: customizeImageListBack, 
        customizeTextListFront: customizeTextListFront, 
        customizeTextListCIL: customizeTextListCIL, 
        customizeTextListCIR: customizeTextListCIR, 
        customizeTextListBack: customizeTextListBack, 
        cardinsideLeftTemplate: cardinsideLeftTemplate, 
        cardinsideRightTemplate: cardinsideRightTemplate, 
        cardinsideBackTemplate: cardinsideBackTemplate, 
        sizeid: sizeid, 
        quantity: quantity, 
        browser_infor: browser_infor, 
        mobile: mobile, 
        currentActiveProduct: currentActiveProduct*/
        if((!isset($_POST['type']))||(!isset($_POST['productid']))||(!isset($_POST['producttypeid']))||(!isset($_POST['barcode']))||(!isset($_POST['customizeImageListFront']))||(!isset($_POST['customizeImageListCIL']))||(!isset($_POST['customizeImageListCIR']))||(!isset($_POST['customizeImageListBack']))||(!isset($_POST['customizeTextListFront']))||(!isset($_POST['customizeTextListCIL']))||(!isset($_POST['customizeTextListCIR']))||(!isset($_POST['customizeTextListBack']))||(!isset($_POST['cardinsideLeftTemplate']))||(!isset($_POST['cardinsideRightTemplate']))||(!isset($_POST['cardinsideBackTemplate']))){
        	exit('-1');
        }
        if(!$this->session->has_userdata('identity'))exit('1');
		$currentActiveProduct=json_decode($_POST['currentActiveProduct']);
		/*'ids'=>'123',
			'_title'=>"Lily O'Brien's Ultimate Chocolate Collection",
			'_type'=>4,
			'_giftbagprice'=>'0.00',
			'_giftbagtype'=>'0',
			'_direct'=>0,
			'_size'=>'A5',
			'_price'=>13.29,
			'_toname'=>'Sasha S.',
			'_addressline1'=>'C O S',
			'_addressline2'=>'28 Brushfield Street',
			'_city'=>'LONDON',
			'_postcode'=>'E1 6AN',
			'_country'=>'United Kingdom',
			'_deliverydate'=>'Wednesday, October 23, 2019',
			'_disaccount'=>'0.00',
			'_frontsrc'=>'/assets/dist/images/146818.jpg',
			'_leftinsidesrc'=>'',
			'_rightinsidesrc'=>'',
			'_backinsidesrc'=>'',
			'_addressid'=>'2'*/
		$id='';
		if($this->session->has_userdata('edit_product_id')){
			$arr=explode(",",$this->session->userdata('edit_product_id'));
			if($arr[1]==$_POST['productid'])$id=$arr[0];
		}
		$prices=array('128'=>9.99,'8'=>5.99,'11'=>3.29,'10'=>2.29);
		$photo_product_row=array(
			'ids'=>$id,
			'_user'=>$this->session->userdata('current_user'),
			'ids_temp'=>"{$_POST['productid']}",
			'_title'=>"{$currentActiveProduct->ProductName}",
			'_type'=>"{$_POST['type']}",
			'_producttype'=>"{$_POST['producttypeid']}",
			'_barcode'=>"{$_POST['barcode']}",
			'_ilist_cf'=>"{$_POST['customizeImageListFront']}",
			'_ilist_cil'=>"{$_POST['customizeImageListCIL']}",
			'_ilist_cir'=>"{$_POST['customizeImageListCIR']}",
			'_ilist_cb'=>"{$_POST['customizeImageListBack']}",
			'_tlist_cf'=>"{$_POST['customizeTextListFront']}",
			'_tlist_cil'=>"{$_POST['customizeTextListCIL']}",
			'_tlist_cir'=>"{$_POST['customizeTextListCIR']}",
			'_tlist_cb'=>"{$_POST['customizeTextListBack']}",
			'_temp_cil'=>"{$_POST['cardinsideLeftTemplate']}",
			'_temp_cir'=>"{$_POST['cardinsideRightTemplate']}",
			'_temp_cb'=>"{$_POST['cardinsideBackTemplate']}",
			'_giftbagprice'=>"0.00",
			'_giftbagtype'=>"0",
			'_direct'=>"0",
			'_size'=>"{$_POST['sizeid']}",
			'_quantity'=>"{$_POST['quantity']}",
			'_price'=>"{$prices[$_POST['sizeid']]}",
			'_addressid'=>"",
			'_deliverydate'=>"",
			'_frontsrc'=>"{$_POST['frontsrc']}",
			'_leftinsidesrc'=>"{$_POST['leftinsidesrc']}",
			'_rightinsidesrc'=>"{$_POST['rightinsidesrc']}",
			'_backinsidesrc'=>"{$_POST['backinsidesrc']}",
			'_active_product'=>$_POST['currentActiveProduct'],
			'_status'=>0
		);
		
		if($id!=''){
			$this->users->execute_update('products_custom','ids',$photo_product_row);
			$this->session->set_userdata('edit_product_id',"{$id},{$_POST['productid']}");
		}else{
			$id=$this->users->execute_insert('products_custom',$photo_product_row);
			$this->session->set_userdata('edit_product_id',"{$id},{$_POST['productid']}");
		}
		echo 0;
	}

	public function newFlow_SessionUpdateBulk(){
		$json_key='ctl00$ContentPlaceHolder1$CardFlow1$json_session_';
		$page=explode(",",",front,cardinside_left,cardinside_right,back");
		if($_POST['page']<0){
			$this->session->set_userdata($json_key.'image_'.$page[0]."_".$_POST['productid'],$_POST['customizeImageListFront']);
			$this->session->set_userdata($json_key.'image_'.$page[1]."_".$_POST['productid'],$_POST['customizeImageListCIL']);
            $this->session->set_userdata($json_key.'image_'.$page[2]."_".$_POST['productid'],$_POST['customizeImageListCIR']);
            $this->session->set_userdata($json_key.'image_'.$page[3]."_".$_POST['productid'],$_POST['customizeImageListBack']);
            $this->session->set_userdata($json_key.'text_'.$page[0]."_".$_POST['productid'],$_POST['customizeTextListFront']);
            $this->session->set_userdata($json_key.'text_'.$page[1]."_".$_POST['productid'],$_POST['customizeTextListCIL']);
            $this->session->set_userdata($json_key.'text_'.$page[2]."_".$_POST['productid'],$_POST['customizeTextListCIR']);
            $this->session->set_userdata($json_key.'text_'.$page[3]."_".$_POST['productid'],$_POST['customizeTextListBack']);

		}else{
			if(isset($_POST['page'])&&isset($_POST['customizeTextList']))
				$this->session->set_userdata($json_key.'text_'.$page[$_POST['page']]."_".$_POST['productid'],$_POST['customizeTextList']);
			if(isset($_POST['page'])&&isset($_POST['customizeImageList'])){
				$this->session->set_userdata($json_key.'image_'.$page[$_POST['page']]."_".$_POST['productid'],$_POST['customizeImageList']);
				//echo $json_key.'image_'.$page[$_POST['page']].','.$_POST['customizeImageList'];
			}
		}
		$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_left_template_'.$_POST['productid'],$_POST['cardinsideLeftTemplate']);
		$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_right_template_'.$_POST['productid'],$_POST['cardinsideRightTemplate']);
		$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$current_activate_cardinside_back_template_'.$_POST['productid'],$_POST['cardinsideBackTemplate']);
		echo "0";



	}

	public function newFlow_SessionUpdateBackendaaa(){
		echo '0';
	}

	public function newFlow_SessionCardPreview(){
		//$this->mViewData['c_front']=$_POST['c_front'];
		//$this->mViewData['c_left']=$_POST['c_left'];
		//$this->mViewData['c_right']=$_POST['c_right'];
		//$this->mViewData['c_back']=$_POST['c_back'];
		$this->render('personal_01_preview', 'empty');	
	}

	
	public function adsview(){
		if($this->mViewData['current_user']=='')redirect('auth');//home_ads.php
		$this->render('home_items.php', 'full_width');
	}

	public function contact(){
		$this->render('blog/contact.php', 'full_width');
	}	

	public function privacy(){
		$this->render('blog/privacy.php', 'full_width');
	}	


	public function delivery(){
		$this->render('blog/deliveryinfo.php', 'full_width');
	}	

	public function career(){
		$this->render('blog/career.php', 'full_width');
	}


	/*
	public function personal_next(){
		if(!isset($_POST['product_id'])){
			redirect('index');
			return;
		}
		$pid=$_POST['product_id'];
		$rows = $this->users->execute_query("select * from products where ids='{$pid}'");
		if(!count($rows)){
			redirect('index');
			return;
		}
		$this->mViewData['data']['photo_product_row']=$rows[0];

		$rows = $this->users->execute_query("select * from products where typex='1' and personalx=0 ");
		if(!count($rows)){
			//$this->render('personal_0'.$page_stage, 'full_width');
			return;
		}
		$this->mViewData['chocol']['photo_product_row']=$rows[0];

		foreach($_POST as $key=>$val){
			$this->mViewData['data'][$key]=$val;
		}

		$page_stage=0;
		if(isset($_POST['page_stage']))
			$page_stage=$_POST['page_stage'];
		$this->mViewData['page_stage']=$page_stage;
		$this->mViewData['product_id']=$pid;
		$this->mViewData['bestproducts'] = $this->users->execute_query("select * from products where typex<4 order by (avgmarks*reviewcnt+viewcnt/10) desc");
		$this->render('personal_0'.$page_stage, 'full_width');
	}
	*/
}
