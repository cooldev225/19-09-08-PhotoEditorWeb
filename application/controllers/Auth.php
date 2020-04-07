<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth page
 */
class Auth extends MY_Controller {
	public function __construct()
	{
		//$this->CI =& get_instance();
		parent::__construct();
		$this->load->model('users_model', 'users');
		//$this->load->library('system_message');
		$this->load->library('system_message');
		$this->load->library('verify_email');
		$this->load->library('email');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->mViewData['photomenu'] = $this->users->execute_query("select * from menu");
		
	}
	public function index($flowTrackingId='')
	{
	//echo 'flowTrackingId='.$flowTrackingId;
		//$logout = $this->ion_auth->logout();
		//$this->session->set_flashdata('message', $this->ion_auth->messages());
		//echo ">>>".$this->ion_auth->messages();
		//echo ">>>".$this->ion_auth->logged_in();

				/*$sss="";
				foreach ($this->session->all_userdata() as $key => $val) {
					$sss.="{$key}---{$val}<br>";
				}
				echo $sss;
				*/
		$this->mViewData['prodId']="";
		$this->mViewData['prodtype']="";
		$this->mViewData['sizeId']="";
		$this->mViewData['flowTrackingId']="";
		//login
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword']="";
		//register
		$this->mViewData['ctl00_ContentPlaceHolder1_emailOptMessage']="0";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail']="";
		$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkTerms']="";
		$this->mViewData['error_email_mssage']='';
		$this->mViewData['registered_user_id']=0;
		foreach($_GET as $key=>$val){
			$key=str_replace('$', '_', $key);
			$this->mViewData[$key]=$val;//echo "{$key}:{$val}<br>";
		}
		foreach($_POST as $key=>$val){
			$key=str_replace('$', '_', $key);
			$this->mViewData[$key]=$val;//echo "{$key}:{$val}<br>";
		}
		
		$page="login";
		if(isset($_POST['__EVENTTARGET'])){
			if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uc_customer_login21$lbtNewCustomer'||$_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lnkSave'){
				$page="register";
			}else if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uc_customer_password_reset1$lnkCheckEmail'){
				$page="reset";
			}
		}
		if($page=='register'){
			/*ctl00_ContentPlaceHolder1_emailOptMessage:0
			ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail:
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle:Mr
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName:Yelena
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName:Y.
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail:asd@asd.asd
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword:tempP@ss123
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2:tempP@ss123
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail:on
			ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkTerms:on
			ctl00_ContentPlaceHolder1_blank_customerother_obj:{ "Name": null, "FirstName": null, "LastName": null, "BirthDay": null, "AgeRange": null, "Email": null, "Phone": null, "Origin": null, "RegUserID": 0, "PayerId": null, "UserAddress": null }
			0:{ "Name": null, "FirstName": null, "LastName": null, "BirthDay": null, "AgeRange": null, "Email": null, "Phone": null, "Origin": null, "RegUserID": 0, "PayerId": null, "UserAddress": null }*/
			$emailopt=$this->mViewData['ctl00_ContentPlaceHolder1_emailOptMessage'];
			$reset_pswd=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail'];
			$dear_name=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_dropTitle'];
			$firs_name=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtFirstName'];
			$last_name=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtLastName'];
			$email=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail'];
			$password=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword'];
			$conf_pswd=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtPassword2'];
			$chec_email=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_ckbEmail'];
			$chec_term=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_chkTerms'];
			
			if($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$lnkSave'){
				$identity = $email;
				$additional_data = array(
					'_dear'	=> $dear_name,
					'first_name'	=> $firs_name,
					'last_name'		=> $last_name,
				);
				//$groups = $this->input->post('groups');
				$this->ion_auth_model->tables = array(
					'users'				=> 'users',
					'groups'			=> 'groups',
					'users_groups'		=> 'users_groups',
					'login_attempts'	=> 'login_attempts',
				);
				if($this->mViewData['registered_user_id']>0){
					if($this->mViewData['prodId']==''||$this->mViewData['prodtype']==''||$this->mViewData['sizeId']==''){
						redirect('home');
					}else{
						if($this->mViewData['flowTrackingId']=='deli'){
							redirect('home/personal'."?product_id=".$this->mViewData['prodId']."&page_stage=1");
						}
						redirect('home');
					}
				}
				$user_id = $this->ion_auth->register($identity, $password, $email, $additional_data);
				if ($user_id)
				{
					
					// success
					$messages = $this->ion_auth->messages();
					$this->system_message->set_success($messages);
					//
					$pref=explode(',',',0,00,000,0000,00000,000000');
					$data=array('username'=>$pref[abs(6-strlen($user_id))].$user_id);
					$this->ion_auth->update($user_id, $data);
					$this->session->set_userdata('user_name',$data['username']);
					// directly activate user
					$this->ion_auth->activate($user_id);
					$this->distroy_session();
					$this->ion_auth->login($email, $password);
					
					$this->mViewData['registered_user_id']=$user_id;

					
				}
				else
				{
					// failed
					
				}
				//
			}//$target = $this->users->get($user_id);
		}else if($page=='login'){
			//ctl00$ContentPlaceHolder1$uc_customer_login21$txtLoginEmail
			//ctl00$ContentPlaceHolder1$uc_customer_login21$txtLoginPassword
			//LoginOption:on
			//ctl00$ContentPlaceHolder1$uc_customer_login21$blank_customerother_obj:{ "Name": null, "FirstName": null, "LastName": null, "BirthDay": null, "AgeRange": null, "Email": null, "Phone": null, "Origin": null, "RegUserID": 0, "PayerId": null, "UserAddress": null }
			//ctl00$ContentPlaceHolder1$uc_customer_login21$detect_mobile_vp:normal_vp
			//ctl00$ContentPlaceHolder1$uc_customer_password_reset1$txtLoginEmail:
			$email=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail'];
			$pswd=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword']; 
			//$rows = $this->users->execute_query("select * from products where ids='{$pid}'");


			//verification email
			$this->verify_email->setStreamTimeoutWait(20);
			$this->verify_email->Debug= false;
			$this->verify_email->Debugoutput= 'html';
			// Set email address for SMTP request
			$this->verify_email->setEmailFrom('from@email.com');
			// Check if email is valid and exist
			if($this->verify_email->check($email)){ 
			    //echo 'Email &lt;'.$email.'&gt; is exist!'; 
			}elseif($this->verify_email->validate($email)){
				//$this->mViewData['error_email_mssage']='Sorry, The email address you have entered is incorrect.';

			    //echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
			}else{
				$this->mViewData['error_email_mssage']='Sorry, The email address is wrong. Please type corret format \'xxx@email.com\'.'; 
			    //echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
			}
			//empty_login,timeout_login,inactive_login,wrong_password,invalid_email
			$this->distroy_session();
			$this->ion_auth->login($email, $pswd);
			$msg=$this->ion_auth->messages();
			if(strpos($msg,'login_successful')!==false||strpos($msg,'Successfully')!==false||$msg=='Logged In Successfully'){
				//exit($this->mViewData['prodId'].'>>>home/personal'."?product_id=".$this->mViewData['prodId']);
				if($this->mViewData['prodId']==''||$this->mViewData['prodtype']==''||$this->mViewData['sizeId']==''){
						redirect('home');
					} 
				else{
					if($this->mViewData['flowTrackingId']=='deli'){
						redirect('home/personal'."?product_id=".$this->mViewData['prodId']."&page_stage=1");
					}
					redirect('home/personal'."?product_id=".$this->mViewData['prodId']."&page_stage=1");
				}
			}else if(strpos($msg,'timeout_login')!==false){
				$this->mViewData['error_email_mssage']="Sorry, You had attempted several times. Please, try again later.";
			}else if(strpos($msg,'inactive_login')!==false){
				$this->mViewData['error_email_mssage']="Sorry, Your access is deny. Please contact as support team.";
			}else if(strpos($msg,'invalid_email')!==false){
				$this->mViewData['error_email_mssage']="Sorry, The email address you have entered is incorrect.";
				$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginEmail']='';
				$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword']=''; 
			}else if(strpos($msg,'wrong_password')!==false){
				$this->mViewData['error_email_mssage']="Wrong password!";
				$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_login21_txtLoginPassword']=''; 
			}
//=='':ctl00$ContentPlaceHolder1$uc_customer_login21$imgbutton)
			if(!isset($_POST['__EVENTTARGET']))
				$this->mViewData['error_email_mssage']="";
		}else if($page=='reset'){
			$reset_email=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_password_reset1_txtLoginEmail'];
			$email=$this->mViewData['ctl00_ContentPlaceHolder1_uc_customer_add_new1_txtEmail'];
			//password_change_successful
			$reset_pswd=$this->getRandomPassword();
			//echo "<br>???".$reset_pswd;
			//echo 'ENVIRONMENT='.ENVIRONMENT.'<br>'.$_SERVER['CI_ENV'];
			$msgdata=array('identity'=>$email,'forgotten_password_code'=>$reset_pswd);
			//$this->email->send_email_template($reset_email, 'dear', 'message from buddywisher', 'auth/forgot_password',$msgdata);

			$page='login';
		}
		//if($this->ion_auth->logged_in())redirect('home');
		$this->mViewData['__EVENTTARGET']='';
		$this->render("auth/{$page}", 'full_width');
	}
	public function distroy_session(){
		// Destroy the session
		$this->session->sess_destroy();
		//Recreate the session
		if (substr(CI_VERSION, 0, 1) == '2')
		{
			$this->session->sess_create();
		}
		else
		{
			if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
				session_start();
			}
			$this->session->sess_regenerate(TRUE);
		}
	}
	public function account(){
		//foreach($_POST as $k=>$v)echo "{$k}==={$v}<br>";
		if($this->mViewData['current_user']==''){
			redirect('auth/index');
		}
		$p=0;
		if(isset($_GET['p']))$p=$_GET['p'];
		if(isset($_POST['page_id']))$p=$_POST['page_id'];
		$this->mViewData['page_id']=$p;
		if(isset($_POST['__EVENTTARGET'])&&$_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$lnkSave2'){
			if(isset($_POST['RIF_first_name'])&&isset($_POST['RIF_surname'])&&isset($_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_date'])&&isset($_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_month'])){
				$id='';
				$sql="select * from reminders where _user='".$this->session->userdata('current_user')."' and _month={$_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_month']} and _day={$_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_date']}";
				$rows=$this->users->execute_query($sql);
				if(count($rows))$id=$rows[0]['ids'];
				$photo_product_row=array(
					'ids'=>$id,
					'_user'=>$this->session->userdata('current_user'),
					'firstname'=>$_POST["RIF_first_name"],
					'surname'=>$_POST["RIF_surname"],
					'_month'=>$_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_month'],
					'_day'=>$_POST['ctl00$ContentPlaceHolder1$uclMyAccountMyReminders1$hid_rec_date']
				);
				
				if($id!=''){
					$this->users->execute_update('reminders','ids',$photo_product_row);
				}else{
					$id=$this->users->execute_insert('reminders',$photo_product_row);
				}
			}

		}
		
		if($this->mViewData['page_id']==3){
			if(isset($_POST['__EVENTTARGET'])&&($_POST['__EVENTTARGET']=='paymentcomplete')){
				if(isset($_POST['_identity'])&&$_POST['_identity']!=''){
					$id='';
					$rows = $this->users->execute_query("select * from transfer_log where _identity='{$_POST['_identity']}'");
					if(count($rows)){
						$id=$rows[0]['ids'];
					}
					$photo_product_row=array(
						'_date'=>$_POST['_date'],
						'_credit'=>$_POST['payamount'],
						'_debit'=>0,
						'_log'=>"{$this->session->userdata('current_user_obj->first_name')}'s prepay",
						'_currency'=>$_POST['_currency'],
						'_amount'=>$_POST['payamount'],
						'_account'=>$this->session->userdata('current_user_obj')->username,
						'_acc_email'=>$_POST['_acc_email'],
						'_identity'=>$_POST['_identity'],
						'_user'=>$this->session->userdata('current_user'),
						'_card_info'=>$_POST['_card_info'],
						'ids'=>$id
					);
					if($id=='')$this->users->execute_insert('transfer_log',$photo_product_row);
				}
			}

		}else if($this->mViewData['page_id']==2){
			$this->mViewData['data']['account_id']=$this->session->userdata('current_user_obj')->username;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle']=$this->session->userdata('current_user_obj')->_dear;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName']=$this->session->userdata('current_user_obj')->first_name;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName']=$this->session->userdata('current_user_obj')->last_name;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail']=$this->session->userdata('current_user_obj')->email;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone']=$this->session->userdata('current_user_obj')->phone;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword']=$this->session->userdata('ion_auth')['who']['p'];
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']='';
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword']='';
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']=$this->session->userdata('current_user_obj')->_security_q;
			$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer']=$this->session->userdata('current_user_obj')->_security_a;


			if(isset($_POST['__EVENTTARGET'])&&($_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uc_customer_change1$lnkSave'||$_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uc_security_question1$lnkSave'||$_POST['__EVENTTARGET']=='ctl00$ContentPlaceHolder1$uc_customer_password_change1$lnkSave')){
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle'])&&$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle']!='')
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName'])&&$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName']!='')
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail'])&&$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail']!='')
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword'])&&$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword']!='')
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$ckbEmail']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$ckbEmail']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_change1$ckbEmail'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword']=$_POST['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion']=$_POST['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion'];
				if(isset($_POST['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer']))
					$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer']=$_POST['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer'];
//reset_password($identity, $new)
//change_password($identity, $old, $new)
//update($id, array $data)
				$email=$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtEmail'];
				$password=$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword'];
				$photo_product_row=array(
					'_dear'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$dropTitle'],
					'first_name'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtFirstName'],
					'last_name'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtLastName'],
					'phone'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPhone'],
					'_security_q'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$drpListQuestion'],
					'_security_a'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_security_question1$txtAnswer'],
					'_email_offer'=>$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$ckbEmail']
				);
				//foreach($photo_product_row as $a=>$b){echo "<br>{$a}-{$b}";}
				//$arr=$this->ion_auth->forgotten_password($email);
				//foreach($arr as $a=>$b){echo "<br>{$a}-{$b}";}
				//$code=$arr['forgotten_password_code'];
				//$arr= $this->ion_auth->forgotten_password_complete($code);
				//foreach($this->session->all_userdata() as $a=>$b){echo "<br>{$a}-{$b}";}
				if(!$this->ion_auth->email_check($email))
					$photo_product_row['email']=$email;
				$this->ion_auth->update($this->session->userdata('current_user'),$photo_product_row);

				if($this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']!=''&&$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']==$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtConfirmPassword']){
					$this->ion_auth->change_password($email, $this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword'], $this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword']);
					$msg=$this->ion_auth->messages();
					if(strpos($msg,'password_change_successful')!==false||strpos($msg,'Successfully')!==false||$msg=='Account Information Successfully Updated'){
						//echo ">".$msg."<";
						$password=$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_password_change1$txtNewPassword'];
						$this->mViewData['data']['ctl00$ContentPlaceHolder1$uc_customer_change1$txtPassword']=$password;
					}
				}
				
				$this->ion_auth->login($email, $password,false,true);
				$msg=$this->ion_auth->messages();
				//echo "<br>>".$msg."<";
			}
		}

		$this->mViewData['data']['trans']=array();
		$this->mViewData['data']['trans_amount']=0;
		$rows = $this->users->execute_query("select * from transfer_log order by ids");
		if(count($rows)){
			$this->mViewData['data']['trans']=$rows;
			foreach ($rows as $r) {
				$this->mViewData['data']['trans_amount']+=$r['_credit']+$r['_debit'];
			}
		}

		$this->mViewData['data']['countries']=array();
		$rows = $this->users->execute_query("select * from countries order by ids");
		if(count($rows)){
			$this->mViewData['data']['countries']=$rows;
		}
		$sql="select * from reminders where _user='".$this->session->userdata('current_user')."' order by _month,_day";
		$this->mViewData['reminders']=$this->users->execute_query($sql);
		$this->render("auth/account", 'full_width');
		//$this->load->view("auth/account",$this->mViewData);
	}
	public function logout()
	{
		$this->ion_auth->logout();
		redirect('home');
	}
	public function privacy(){
		if(!isset($_GET['about']))redirect('home');
		$this->render("auth/privacy_{$_GET['about']}", 'full_width');
	}

	public function verify($email_address, $email_code) {
	    if($this->user_model->verifyEmail($email_code, $email_address)){
	    $this->load->view('templates/header');
	    $this->load->view('users/email_validated');
	    $this->load->view('templates/footer'); 
	    } else {
	        echo 'error'.$this->config->item('admin_email');    
	    }
	}
	public function getRandomPassword(){
		$res="";
		$alpha=explode('::','ABCDEFGHJKLMNOPQRSTUVWXYZ::abcdefghijklmnopqrstuvwxyz::0123456789::!~@#%^&*()_+-[];::ABCWX];:rstDEMJ#%^&*()KLZabmnoPQRSTUcpqI6789!~@deyz012345NYFG_+-[OfghijklVuvwxH');
		$d=mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y'));
		$exp=explode(',','0,2,4,1,3,3,0,4,2,1');
		for($i=0;$i<10;$i++)$inx[$i]=0;
		for($i=0;$i<10;$i++){
			while(1){
				$p=rand(1,$d%rand(1,100))%10;
				if(!$inx[$p]){
					$r=rand(1,$d)%strlen($alpha[$exp[$i]]);
					$pos[$p]=substr($alpha[$exp[$i]],$r,1);
					$inx[$p]=1;
					break;
				}
			}
		}
		for($i=0;$i<10;$i++)$res.=$pos[$i];
		return $res;
	}

	public function paypalLogin(){
		//https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-2N715361Y53413400
	}

	public function instagramlogin()
	{
		# code...
	}
	//https://www.paypal.com/checkoutnow?locale.x=en_GB&fundingSource=paypal&sessionID=d70eb17907_mje6ndi6mjq&buttonSessionID=0db3f4bfff_mje6ndi6mjg&env=production&fundingOffered=paypal&logLevel=warn&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWxvYmplY3RzLmNvbS9hcGkvY2hlY2tvdXQubWluLmpzIn0%3D&uid=53fe0c909f&version=min&token=EC-83M80040VK1136057&xcomponent=1

	//SANDBOX API CREDENTIALS
//Sandbox account
//sb-p6p1i493432@personal.example.com
//Client ID
//ASBfENfWWv4KFqFkHq6rkIxChSJyy4AfyF2g5mS83kYXuUOwufu_Wci6G_MH509DXcTzjvOulVDfT8uN

}