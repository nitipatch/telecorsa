<?php
namespace App\Http\Controllers\Admins;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\User;
use View;

function MailSend($strTo, $Subject, $Message, $Files = false, $From )
	{
		$Uniqid  	= md5(uniqid(time()));
		//$Subject 	= "=?utf-8?B?".base64_encode($Subject)."?=";
		$eol 		= PHP_EOL;

		$sHeaders	= array();
		$sHeaders[]	= "From: ".$From;
		$sHeaders[]	= "Reply-To: ".$From;
		$sHeaders[]	= "X-Priority: 1 (Higuest)"; 
		$sHeaders[]	= "X-MSMail-Priority: High"; 
		$sHeaders[]	= "Importance: High"; 
		$sHeaders[]	= "X-Mailer: CuEiHzO/Chinakron";
		$sHeaders[]	= "MIME-Version: 1.0";
		$sHeaders[]	= "Content-Type: multipart/mixed; boundary=\"".$Uniqid."\"";

		// message
		$sBody = '';
		$sBody .= "--".$Uniqid.$eol;
		$sBody .= "Content-Type: text/html; charset=\"UTF-8\"".$eol;
		$sBody .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
		$sBody .= $Message.$eol;

		// attachment
		if( $Files )
		{
			foreach( (array)$Files as $i => $File )
			{
				$Content = chunk_split(base64_encode(file_get_contents($File))); 
				$sBody .= "--".$Uniqid.$eol;
				$sBody .= "Content-Type: application/octet-stream; name=\"".$File."\"".$eol; 
				$sBody .= "Content-Transfer-Encoding: base64".$eol;
				$sBody .= "Content-Disposition: attachment".$eol.$eol;
				$sBody .= $Content.$eol;
				$sBody .= "--".$Uniqid."--";
			}
		}
		
		return mail($strTo, $Subject, $sBody, implode($eol, $sHeaders));  // @ = No Show Error //
	}


class TestController extends BaseController
{

	public function index(){ return View::make('home.index'); }

	public function account(){ MailSend("nitipatchaiprasert@gmail.com", "test", "testtest", "", "nitipatch@hotmail.com" ); return View::make('home.account'); }

	public function logout(){
		session_start();
		session_destroy();
		return Redirect::to('/');
	}

	public function connectus(){ return View::make('home.connectus'); }
	public function contactus(){ return View::make('home.contactus'); }
	public function news(){ return View::make('home.news'); }
	public function video(){ return View::make('home.video'); }


	public function loginForm(){ return View::make('home.login'); }

	public function changeAccountInfo()
	{
		session_start();
		DB::table('users')->where('emailAddr',$_SESSION['emailAddr'])
						  ->update(['fname'=>Input::get('name'),
						  			'lname'=>Input::get('name'),
						  			'emailAddr'=>Input::get('emailAddr'),
						  			'gender'=>Input::get('gender'),
						  			'locale'=>Input::get('locale')]);
		$_SESSION['name'] = Input::get('name');
		$_SESSION['emailAddr'] = Input::get('emailAddr');
		$_SESSION['gender'] = Input::get('gender');
		$_SESSION['locale'] = Input::get('locale');
		return Redirect::to('/');
	}

	public function loginCreate()
	{
		$user = DB::table('users')->where('emailAddr',Input::get('emailAddr'))->get();
				
		if(count($user)==1 && strcmp(Input::get('password'),$user[0]->password)==0)
		{
			session_start();
			$_SESSION['accountType'] = 'Telecorsa';
			$_SESSION['id'] = '';
			$_SESSION['name'] = $user[0]->fname.' '.$user[0]->lname;
			$_SESSION['emailAddr'] = $user[0]->emailAddr;
			$_SESSION['gender'] = $user[0]->gender;
			$_SESSION['locale'] = $user[0]->locale;			
			$_SESSION['link'] = $user[0]->link;
			$_SESSION['picture'] = $user[0]->picture;	
			return Redirect::to('/');
		}
		else return Redirect::to('login')->with('flash_notice','อีเมลหรือรหัสผ่านไม่ถูกต้อง');
	}


	public function registerForm(){ return View::make('home.register'); }


	public function registerCreate()
	{
		session_start();
		$validator = Validator::make(Input::all() 
									 , array(
									 		'emailAddr'=>'email|unique:users',
									 		'password_confirmation'=>'same:password'
									 		)
									 , array(
									 		'emailAddr.email'=>'รูปแบบอีเมลไม่ถูกต้อง', 
									 		'emailAddr.unique'=>'อีเมลนี้มีอยู่ในระบบแล้ว',
									 		'password_confirmation.same'=>'กรุณายืนยันรหัสผ่านให้ถูกต้อง'
									 		)
		);

		if ($validator->passes()) 
		{ 
			$addUser = new User();
			date_default_timezone_set('Asia/Bangkok');
			$datetime = date("Y-m-d H:i:s",time());

			$addUser->accountType = "Telecorsa";
			$addUser->fname = Input::get('fname');
			$addUser->lname = Input::get('lname');
			$addUser->emailAddr = Input::get('emailAddr');
			$addUser->password = Input::get('password');
			$addUser->gender = Input::get('gender');
			$addUser->locale = Input::get('country');
			$addUser->link = "";
			$addUser->picture = "";
			$addUser->created = $datetime;
			$addUser->modified = $datetime;
			$addUser->save();

			$_SESSION['accountType'] = 'Telecorsa';
			$_SESSION['id'] = '';
			$_SESSION['name'] = Input::get('fname').' '.Input::get('lname');
			$_SESSION['emailAddr'] = Input::get('emailAddr');
			$_SESSION['gender'] = Input::get('gender');
			$_SESSION['locale'] = Input::get('country');			
			$_SESSION['link'] = "";
			$_SESSION['picture'] = "";	

			return Redirect::to('register')->with('flash_notice' , 'Registration Successful');
		}
		else
		{
			return Redirect::to('register')->withErrors($validator)
			//->withInput(Input::except('password'))
			//->withInput(Input::except('password_confirmation'))
			->withInput();
		}
	}

}

?>