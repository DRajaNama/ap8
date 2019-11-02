<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Session;
use Hash;
use App\Register;
use DB;

class RegisterController extends Controller
{


    public function index(){
		$data['success'] = true;
		echo json_encode($data);
	}
	
	public function send_otp(Request $request){
		$validator = \Validator::make($request->all(), [
            'mobile' => 'required|unique:users,mobile',
		]);
		
		if ($validator->fails())
        {
            return response()->json([
			'success'=>false,
			'message'=>'',
			'errors'=>$validator->getMessageBag()->toArray()
			]);

        }else{
			/* 
				match otp script 
			*/  
			$digits = 6;
			$otp =  rand(pow(10, $digits-1), pow(10, $digits)-1);
			Session::put('OTP', $otp);
			return response()->json([
				'success'=>true,
				'message'=>'OTP send',
				'OTP'=> $otp
			]);
		}
	}

	public function submit_otp(Request $request){
		$validator = \Validator::make($request->all(), [
            'otp_number' => 'required',
		]);
        
        if ($validator->fails())
        {
            return response()->json([
			'success'=>false,
			'message'=>'',
			'errors'=>$validator->getMessageBag()->toArray()
			]);

        }else{
			/* 
				match otp script 
			*/  
			$OTP = Session::get('OTP');
			//print_R(Session::get('OTP'));die;
			if($OTP === $request->otp_number){
				return response()->json([
					'success'=>true,
					'message'=>'OTP matched',
				]);
			}else{
				return response()->json([
					'success'=>false,
					'message'=>'OTP not matched',
					'OTP'=>$OTP
				]);
			}
		}
	}

	public function register(Request $request){
		
		$validator = \Validator::make($request->all(), [
			'agreement' => 'required',
			'mobile' => 'required|unique:users,mobile',
			'email' => 'required|unique:users,email',
			'password'=> ['required','min:6', 
			'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/', 
			'confirmed'],
			'password_confirmation'=> 'required',
        ]);
        
        if ($validator->fails())
        {
			return response()->json([
				'success'=>false,
				'message'=>'',
				'errors'=>$validator->getMessageBag()->toArray()
			]);

        }else{
			$register 					= new Register();
			$register->mobile 			= $request->mobile;
			$register->user_agrement 	= $request->agreement?'1':'0';
			$register->password 		= Hash::make($request->password);
			$register->email 			= $request->email;
			$register->created_at 		= time();
			$register->updated_at 		= time();
			$register->status 			= 1; 
			$register->save(); 

			/* 
				send otp script 
			*/
			return response()->json([
				'success'=>true,
				'message'=>'Record is successfully added',
				'insert_id'=>$register->id
				]);
		}
        
	}


	public function register_kyc(Request $request){
		
		$validator = \Validator::make($request->all(), [
			'id'		 		=> 'required',
			'first_name' 		=> 'required',
			'middle_name' 		=> 'required',
			'last_name' 		=> 'required',
			'dob'				=> 'required',
			'emp_status'		=> 'required',
			'emp_post'			=> 'required',
			'address'			=> 'required',
			'tax_status'		=> 'required',
			'document'			=> 'required',
			'document_number'	=> 'required',
        ]);
        
        if ($validator->fails())
        {
			return response()->json([
				'success'=>false,
				'message'=>'',
				'errors'=>$validator->getMessageBag()->toArray()
			]);

        }else{
					
			/* 
				document verifications script 
			*/

			$register 					= Register::find($request->id);
			$register->first_name 		= $request->first_name;
			$register->middle_name 		= $request->middle_name;
			$register->last_name 		= $request->last_name;
			$register->dob 				= $request->dob;
			$register->tax_paid 		= $request->tax_status;
			$register->position 	 	= $request->emp_post;
			$register->save(); 

			$document_varification_data = json_encode(array('document'=>$request->document,'document_number'=>$request->document_numer));
		
			
			$data	=	array(
				'user_id'				=> $request->id,
				'doc_title' 			=> $request->document,
				'doc_number' 			=> $request->document_number,
				'doc_verification_data' => $document_varification_data,
				'doc_kyc_status' 		=> '1',
				'status' 				=> '1',
			);
			
			DB::table('user_documents')->insert($data);
			
			return response()->json([
				'success'=>true,
				'message'=>'Record is successfully added',
				'insert_id'=>$register->id
				]);
		}
        
	}
	

}
