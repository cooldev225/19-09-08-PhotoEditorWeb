<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class NewFlowImageUpload extends MY_Controller {
	private $_uploading_path='UPLOADED_FILES/user_photos_00/';
	private $_resizing_path='UPLOADED_FILES/user_photos_01/';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model', 'users');
	}
	public function index()
	{
		//$this->mViewData['product_id'] json_encode($res);
		$this->load->view('newFlow_ImageUpload_WC');
	}

	public function getUploadSettings(){
		//header('Content-type: application/json; charset=utf-8');
		$res = array('d'=>array(
			"IsS3DirectUpload" => 'true',
			"IsS3LambdaImageResize" => 'true',
			"Url" => "/NewFlowImageUpload/userImgUploading/",
			"UploadFolder" => $this->_uploading_path
		));
		echo json_encode($res);
	}

	public function getUploadData(){
		$res = array('d'=>array(
			"Barcode" => '123456789',
			"MaxWidth" => '323',
			"MaxHeight" => "465",
			"ProductTypeId" => "card",
			"UploadFolder" => $this->_uploading_path
		));
		echo json_encode($res);
	}

	public function ResizeImage()
	{
		

		ob_start();
		$request_body = file_get_contents('php://input');
		$data = json_decode($request_body);
		# code..._resizing_path
		header('Content-type: application/json; charset=utf-8');
		$size = getimagesize($this->_uploading_path.$data->ImageName);
		$res = array('d'=>array(
			"ImageName" => $data->ImageName,
			"thumUrl" => '/NewFlowImageUpload/userImgDownloading',
			'IsSuccess'=>true,
			'filetype'=>$size[2]//,
			//'resized'=>$resized
		));
		echo json_encode($res);
		return;


		if(!file_exists($this->_resizing_path))mkdir($this->_resizing_path, 0700);
		list($width, $height) = getimagesize($this->_uploading_path.$data->ImageName);
		//copy($this->_uploading_path.$data->ImageName,$this->_resizing_path.$data->ImageName);
		$neww=$width;//150;
		$newh=$height;//$neww*($height/$width);
		$thumb = imagecreatetruecolor($neww, $newh);
		//$image_data = file_get_contents($this->_uploading_path.$data->ImageName);
		//$source = imagecreatefromstring($image_data);
		$imageTypeArray = explode(',','UNKNOWN,GIF,JPEG,PNG,SWF,PSD,BMP,TIFF_II,TIFF_MM,JPC,JP2,JPX,JB2,SWC,IFF,WBMP,XBM,ICO,COUNT');
		$source="eee";
		$size = getimagesize($this->_uploading_path.$data->ImageName);
		if($size[2]==1)$source = imagecreatefromgif($this->_uploading_path.$data->ImageName);
		else if($size[2]==2)$source = imagecreatefromjpeg($this->_uploading_path.$data->ImageName);
		else if($size[2]==3)$source = imagecreatefrompng($this->_uploading_path.$data->ImageName);
		else if($size[2]==4)$source = imagecreatefromswf($this->_uploading_path.$data->ImageName);
		else if($size[2]==5)$source = imagecreatefrompsd($this->_uploading_path.$data->ImageName);
		else if($size[2]==6)$source = imagecreatefrompsd($this->_uploading_path.$data->ImageName);
		else{
			delete($this->_uploading_path.$data->ImageName);
			$res = array('d'=>array(
				"ImageName" => $data->ImageName,
				'IsSuccess'=>false
			));
			ob_end_clean();
			echo json_encode($res);
			return;
		}

		imagecopyresized($thumb, $source, 0, 0, 0, 0, $neww, $newh, $width, $height);
		imagejpeg($thumb);
		$tempfile = fopen($this->_resizing_path.$data->ImageName, "w+");
		$resized=ob_get_contents();
		fwrite($tempfile, $resized);
		fclose($tempfile);
		imagedestroy($thumb);
		ob_end_clean();
		//echo $resized;
		$res = array('d'=>array(
			"ImageName" => $data->ImageName,
			"thumUrl" => '/NewFlowImageUpload/userImgDownloading',
			'IsSuccess'=>true,
			'filetype'=>$size[2]//,
			//'resized'=>$resized
		));
		echo json_encode($res);
	}

	public function userImgUploading(){//1569808403_376990_123456789_MC_300x200_.jpg
		//if($key==""){
			header('Content-type: application/json; charset=utf-8');
			//blob:http://localhost/2a3c95dd-7580-41da-85e7-e5f3c6643897
			$Location=str_replace($this->_uploading_path, '', $_POST['key']);///(.*\/)([0-9]*)_([0-9]*)_(.*)/i;
			header("Access-Control-Expose-Headers: {$Location}");
			//header("Location: {$Location}");
			if(!file_exists($this->_uploading_path))mkdir($this->_uploading_path, 0700);
			move_uploaded_file($_FILES['file']['tmp_name'],$_POST['key']);
			$res = array(
				"context" => 'true',
				'isValidated'=>true
			);
			echo json_encode($res);
		//}else{
			//header('Content-type: text/html; charset=utf-8');
			//echo file_get_contents($this->_uploading_path.$key);
		//}
	}
	public function userImgDownloading(){
		$key=$_GET['url'];
		header('Content-type: text/html; charset=utf-8');
		echo file_get_contents($this->_uploading_path.$key);//_resizing_path.$key);
	}
}
