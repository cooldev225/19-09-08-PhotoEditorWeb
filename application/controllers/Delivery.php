<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Delivery extends MY_Controller {
	protected $POSTCODE_API_KEY="PCWH7-KWBRB-MRGLR-XSHCV";//"PCW45-12345-12345-1234X";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model', 'users');
	}
	public function index(){}
	public function GetAddresses(){
		//{"selectedDeliveryType": "B","userId":"14","letter":""}
		//resplonse
		//{"d":[{"ContactID":0,"AddressID":20666866,"Line1":"2-4 Brushfield Street","Line2":"","City":"LONDON","County":"","PostCode":"E1 6AN","Country":"United Kingdom","FullName":"My Addreswe","ContactList":[]},{"ContactID":0,"AddressID":20667015,"Line1":"C O S","Line2":"28 Brushfield Street","City":"LONDON","County":"","PostCode":"E1 6AN","Country":"United Kingdom","FullName":"","ContactList":[]},{"ContactID":0,"AddressID":20667025,"Line1":"6 Brushfield Street","Line2":"","City":"LONDON","County":"","PostCode":"E1 6AN","Country":"United Kingdom","FullName":"","ContactList":[]}]}
		$request_body = file_get_contents('php://input');
		$data=json_decode("{$request_body}");
		$arr=array();
		$rows = $this->users->execute_query("select * from addresses where deliveryType='{$data->selectedDeliveryType}' and user_id='{$data->userId}' order by ids");
		$i=0;
		foreach ($rows as $r) {
			$arr[$i]['ContactID']=$r['contactID'];
			$arr[$i]['AddressID']=$r['ids'];
			$arr[$i]['Line1']=$r['addressLine1'];
			$arr[$i]['Line2']=$r['addressLine2'];
			$arr[$i]['City']=$r['city'];
			$arr[$i]['County']=$r['county'];
			$arr[$i]['PostCode']=$r['postcode'];
			$arr[$i]['Country']=$r['country'];
			$arr[$i]['FullName']=$r['fullName'];
			$arr[$i]['ContactList']=array();
			$i++;
		}
		$res = array('d'=>$arr);
		echo json_encode($res);
	}
	public function setResultSelectedDispathDate(){

	}
	public function IsSelectableDeliveryDate(){
		$ok=100;
		///
		$res=array('d'=>array(
			'result'=>$ok
		));
		exit(json_encode($res));
	}
	public function GetAddressUsingPostcode(){
		$request_body = file_get_contents('php://input');
		$data=json_decode("{$request_body}");
		$postcode=$data->postcode;
		 /*
		 // Get the latitude & longitude of submitted postcode
		  $postcode = urlencode($postcode);
		  $query = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $postcode . '&sensor=false';

		  $result = json_decode(file_get_contents($query));
		  $lat = $result->results[0]->geometry->location->lat;
		  $lng = $result->results[0]->geometry->location->lng;
		  echo "<br>>>{$lat},{$lng}";
		  // Get the address based on returned lat & long
		  $address_url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng . '&sensor=false';
		  $address_json = json_decode(file_get_contents($address_url));
		  $address_data = $address_json->results[0]->dress_components;
		  foreach($address_data as $data):
		    $array[$data->types[0]] = $data->long_name;
		    echo "<br>>>{$data->long_name}";
		  endforeach;

		  echo json_encode($array);*/

		  //validate postcode
		  //api.postcodes.io/postcodes/:postcode/validate
		//$query = 'http://api.postcodes.io/postcodes/'.$postcode;
		//$result = json_decode(file_get_contents($query));
		//$lat = $result->result->european_electoral_region;
		//echo $lat;

/*
		{"d":[
			{"Key":"2-4 Brushfield Street||LONDON||E1 6AN","Value":"2-4 Brushfield Street,,LONDON,,E1 6AN"},
			{"Key":"6 Brushfield Street||LONDON||E1 6AN","Value":"6 Brushfield Street,,LONDON,,E1 6AN"},
			{"Key":"8-10 Brushfield Street||LONDON||E1 6AN","Value":"8-10 Brushfield Street,,LONDON,,E1 6AN"},
			{"Key":"City Skin Klinic|12 Brushfield Street|LONDON||E1 6AN","Value":"City Skin Klinic,12 Brushfield Street,LONDON,,E1 6AN"},
			{"Key":"Longlife Health Ltd|12 Brushfield Street|LONDON||E1 6AN","Value":"Longlife Health Ltd,12 Brushfield Street,LONDON,,E1 6AN"},
			{"Key":"14 Brushfield Street||LONDON||E1 6AN","Value":"14 Brushfield Street,,LONDON,,E1 6AN"},
			{"Key":"Edward Holland|16-18 Brushfield Street|LONDON||E1 6AN","Value":"Edward Holland,16-18 Brushfield Street,LONDON,,E1 6AN"},
			{"Key":"16-18 Brushfield Street||LONDON||E1 6AN","Value":"16-18 Brushfield Street,,LONDON,,E1 6AN"},
			{"Key":"C O S|28 Brushfield Street|LONDON||E1 6AN","Value":"C O S,28 Brushfield Street,LONDON,,E1 6AN"}
		]}


		url//
		https://postcoder.com/sign-up
		https://postcoder.com/docs/status

		api check
		https://ws.postcoder.com/pcw/PCW45-12345-12345-1234X/status?format=json

		*///address street nyb addressbase
		$query = "https://ws.postcoder.com/pcw/{$this->POSTCODE_API_KEY}/address/UK/{$postcode}?format=json&lines=2";
		$res=file_get_contents($query);
		
		//$res='[{"addressline1":"C O S","addressline2":"28 Brushfield Street","summaryline":"C O S, 28 Brushfield Street, London, Greater London, E1 6AN","organisation":"C O S","number":"28","premise":"28","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"City Skin Klinic","addressline2":"12 Brushfield Street","summaryline":"City Skin Klinic, 12 Brushfield Street, London, Greater London, E1 6AN","organisation":"City Skin Klinic","number":"12","premise":"12","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"Edward Holland","addressline2":"16-18 Brushfield Street","summaryline":"Edward Holland, 16-18 Brushfield Street, London, Greater London, E1 6AN","organisation":"Edward Holland","number":"16-18","premise":"16-18","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"Longlife Health Ltd","addressline2":"12 Brushfield Street","summaryline":"Longlife Health Ltd, 12 Brushfield Street, London, Greater London, E1 6AN","organisation":"Longlife Health Ltd","number":"12","premise":"12","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"Organic Hairdressing by Paula Bedwell","addressline2":"16-18 Brushfield Street","summaryline":"Organic Hairdressing by Paula Bedwell, 16-18 Brushfield Street, London, Greater London, E1 6AN","organisation":"Organic Hairdressing by Paula Bedwell","number":"16-18","premise":"16-18","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"2-4 Brushfield Street","summaryline":"2-4 Brushfield Street, London, Greater London, E1 6AN","number":"2-4","premise":"2-4","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"6 Brushfield Street","summaryline":"6 Brushfield Street, London, Greater London, E1 6AN","number":"6","premise":"6","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"8-10 Brushfield Street","summaryline":"8-10 Brushfield Street, London, Greater London, E1 6AN","number":"8-10","premise":"8-10","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"},{"addressline1":"14 Brushfield Street","summaryline":"14 Brushfield Street, London, Greater London, E1 6AN","number":"14","premise":"14","street":"Brushfield Street","posttown":"London","county":"Greater London","postcode":"E1 6AN"}]';

		$result = json_decode($res);
		$arr=array();$i=0;
		foreach ($result as $r) {
			$addr1=empty($r->addressline1)?'':$r->addressline1;
			$addr2=empty($r->addressline2)?'':$r->addressline2;
			$town=empty($r->posttown)?'':$r->posttown;
			$county=empty($r->county)?'':$r->county;
			$pcode=empty($r->postcode)?'':$r->postcode;
			//{"Key":"C O S|28 Brushfield Street|LONDON||E1 6AN","Value":"C O S,28 Brushfield Street,LONDON,,E1 6AN"}
			$key="{$addr1}|{$addr2}|{$town}|{$county}|{$pcode}";
			$val="{$addr1},{$addr2},{$town},{$county},{$pcode}";
			$arr[$i]['Key']=$key;
			$arr[$i++]['Value']=$val;
		}
		echo json_encode(array("d"=>$arr));
	}

	public function UpdateAddress(){
		//{'userId':'9155812', 'deliveryType':'B', 'mode':'N', 'addressId':'0', 'contactId':'0', 'title':'', 'firstName':'', 'lastName':'', 'fullName':'', 'addressLine1':'8-10 Brushfield Street', 'addressLine2':'', 'city':'London', 'county':'Greater London', 'postcode':'E1 6AN', 'country':'United Kingdom'}
		//{"d":100}

		//edit
		//{'userId':'9165389', 'deliveryType':'B', 'mode':'E', 'addressId':'20666866', 'contactId':'0', 'title':'', 'firstName':'', 'lastName':'', 'fullName':'My Addreswe', 'addressLine1':'2-4 Brushfield Street', 'addressLine2':'', 'city':'LONDON', 'county':'', 'postcode':'E1 6AN', 'country':'United Kingdom'}
		//{"d":100}
		$request_body = file_get_contents('php://input');
		$data=json_decode("{$request_body}");
		$userId=$data->userId;
		$identity=$this->session->userdata('identity');
		$current_user=$this->session->userdata('current_user');
		if($userId===null||$userId!=$current_user)exit('{"d":0}');
		$deliveryType=$data->deliveryType;
		$mode=$data->mode;
		$addressId=$data->addressId;
		$contactId=$data->contactId;
		$title=$data->title;
		$firstName=$data->firstName;
		$lastName=$data->lastName;
		$fullName=$data->fullName;
		$addressLine1=$data->addressLine1;
		$addressLine2=$data->addressLine2;
		$city=$data->city;
		$county=$data->county;
		$postcode=$data->postcode;
		$country=$data->country;

		$address=array('user_id'=>$userId,'contactId'=>$contactId,'deliveryType'=>$deliveryType,'user_identity'=>$identity,'firstName'=>$firstName,'lastName'=>$lastName,'fullName'=>$fullName,'addressLine1'=>$addressLine1,'addressLine2'=>$addressLine2,'city'=>$city,'county'=>$county,'postcode'=>$postcode,'country'=>$country,'datex'=>date("Y-m-d"));
		if($addressId!=''&&$addressId>0){
			$address['ids']=$addressId;
			$this->users->execute_update('addresses','ids',$address);
		}else{
			$addressId=$this->users->execute_insert('addresses',$address);
		}
		echo '{"d":"100"}';
	}

	public function DeleteAddress(){//{'addressId':'17'}
		$request_body = file_get_contents('php://input');
		$data=json_decode("{$request_body}");
		$addressId=$data->addressId;
		$this->users->execute_delete('addresses','ids',$addressId);
		echo '{"d":"100"}';
	}
}
?>