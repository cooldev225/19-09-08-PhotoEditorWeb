<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Home page
 */
class Basket extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->mViewData['photomenu'] = $this->users->execute_query("select * from menu");
	}
	public function index()
	{
		foreach ($this->session->all_userdata() as $key => $value) {
			//echo "{$key}-{$value}<br>";
		}
		$pid='';
		if(!isset($_POST['__EVENTTARGET']))$_POST['__EVENTTARGET']='';
		if(!isset($_POST['__EVENTARGUMENT']))$_POST['__EVENTARGUMENT']='';
		if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$butDeleteItem'){
			//ctl00$ContentPlaceHolder1$lstBasket$ctrl0$ctl01$butDeleteItem----------------delete
			$this->users->execute_delete('products_custom','ids',$_POST['__EVENTARGUMENT']);
		}
		else if($_POST['__EVENTTARGET']!=''&&$_POST['__EVENTARGUMENT']!=''){
			$sql="select a.*,b.addressline1 _addressline1,b.addressline2 _addressline2,b.city _city,b.postcode _postcode,b.country _country from products_custom a left join addresses b on a._addressid=b.ids where a.ids='".$_POST['__EVENTARGUMENT']."' order by a.ids";
			$rows = $this->users->execute_query($sql);
			if(count($rows)){
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_front',$rows[0]['_tlist_cf']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_back',$rows[0]['_tlist_cb']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_left',$rows[0]['_tlist_cil']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_front',$rows[0]['_tlist_cir']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_right',$rows[0]['_ilist_cf']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_back',$rows[0]['_ilist_cb']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_image_cardinside_left',$rows[0]['_ilist_cil']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$json_session_text_cardinside_right',$rows[0]['_ilist_cir']);
				
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hiddenProductSize',$rows[0]['_size']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$txtQuantity',$rows[0]['_quantity']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenPrice',$rows[0]['_price']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$HiddenOldPrice',$rows[0]['_price']);
				$this->session->set_userdata('ctl00$ContentPlaceHolder1$CardFlow1$hidden_active_product',$rows[0]['_active_product']);


				$pobj=json_decode($rows[0]['_active_product']);
				$pid=$pobj->ProductId;

				$this->session->set_userdata('edit_product_id',$rows[0]['ids'].",".$pid);
			}
		}
		//echo $_POST['__EVENTTARGET'];
		if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnDownloadCard'){
			if(isset($_POST['__EVENTARGUMENT'])){
				$rows = $this->users->execute_query("select * from products_custom where ids='".$_POST['__EVENTARGUMENT']."'");
				if(count($rows))$this->mViewData['downloading_card']=$rows[0];
				$this->mViewData['__EVENTTARGET']='';
			}
		}else if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$butEditAddress'){
			//ctl00$ContentPlaceHolder1$lstBasket$ctrl0$ctl01$butEditAddress---------------address
			redirect('home/personal?product_id='.$pid.'&page_stage=3');

		}else if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$lblEditPostOn'){
			//ctl00$ContentPlaceHolder1$lstBasket$ctrl0$ctl01$lblEditPostOn----------------dete
			redirect('home/personal?product_id='.$pid.'&page_stage=3');
		}else if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnEditPersonalation'){
			//ctl00$ContentPlaceHolder1$lstBasket$ctrl0$ctl01$btnEditPersonalation---------photoedit
			redirect('home/personal?product_id='.$pid.'&page_stage=1');
		}else if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lstBasket$ctrl$ctl01$btnEditFeatureProducts'){
			//ctl00$ContentPlaceHolder1$lstBasket$ctrl0$ctl01$btnEditFeatureProducts-------gift
			redirect('home/personal?product_id='.$pid.'&page_stage=2');
		}//ctl00$ContentPlaceHolder1$lnkDebitCreditCheckou else if()

		if($this->session->userdata('current_user')=='')redirect('auth');
		$arr[0]=array(
			'ids'=>'123',
			'_title'=>"Full Photo No Text Portrait Card",
			'_type'=>1,
			'_giftbagprice'=>'0.00',
			'_giftbagtype'=>'0',
			'_direct'=>0,
			'_size'=>'A5',
			'_price'=>3.29,
			'_toname'=>'Sasha S.',
			'_addressline1'=>'C O S',
			'_addressline2'=>'28 Brushfield Street',
			'_city'=>'LONDON',
			'_postcode'=>'E1 6AN',
			'_country'=>'United Kingdom',
			'_deliverydate'=>'Wednesday, October 23, 2019',
			'_disaccount'=>'0.00',
			'_frontsrc'=>'https://s3-eu-west-1.amazonaws.com/photoupload.funkypigeon.com/HTML/UK7C85O74RRL191018110918_LMD.jpg',
			'_leftinsidesrc'=>'',
			'_rightinsidesrc'=>'',
			'_backinsidesrc'=>'',
			'_addressid'=>'1'
		);
		$arr[1]=array(
			'ids'=>'123',
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
			'_addressid'=>'2'
		);
		$arr=array();
		$rows = $this->users->execute_query("select a.*,b.addressline1 _addressline1,b.addressline2 _addressline2,b.city _city,b.postcode _postcode,b.country _country from products_custom a left join addresses b on a._addressid=b.ids where a._user='".$this->session->userdata('current_user')."' order by a.ids");
		if(count($rows))$arr=$rows;
		$this->mViewData['products']=$arr;
		$this->mViewData['producttype']=explode(',',"Photo Upload and Text personalized Card,Photo Upload Card,Text personalized Card,NonPersonalisedProducts,NonPersonalisedProducts");
		$this->mViewData['producttypetitle']=explode(',',"Full Photo and Text,Full Photo No Text,Personalized Text No Upload,Non Personalized,NonPersonalisedProducts");
		$this->mViewData['productdirect']=explode(',',"Portrait,Landscope");
		$this->mViewData['disaccount']=0;
		$this->render('basket/index', 'full_width');
	}
	public function CardPreview(){
		//exit($_GET['olid']);
		$res[0]='';
		$res[1]='';
		$res[2]='';
		$res[3]='';
		if(isset($_GET['olid'])){
			$rows = $this->users->execute_query("select * from products_custom where ids='".$_GET['olid']."' ");
			if(count($rows)){
				$res[0]=$rows[0]['_frontsrc'];
				$res[1]=$rows[0]['_leftinsidesrc'];
				$res[2]=$rows[0]['_rightinsidesrc'];
				$res[3]=$rows[0]['_backinsidesrc'];
			}
		}
		$this->load->view('basket/preview_body',array('data'=>$res));
	}
}
