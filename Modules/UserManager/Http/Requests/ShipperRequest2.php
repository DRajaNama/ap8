<?php

namespace Modules\UserManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Request;
class ShipperRequest2 extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $passReq = "nullable";
        if($this->method() == "POST"){
            $passReq = "required";
        }
        $rules=[
            'username' => 'required|unique:users,username,' . $request->segment(3),
            'term'=>'required',
            'user_profiles.*.trasport_type'=>'required',
         /*   'user_profiles.*.email_notification'=>'required',
            'user_profiles.*.phone_notification'=>'required',
            'user_profiles.*.email_for_notification'=>'required',
            'user_profiles.*.phone_for_notification'=>'required',*/
        ];

        if($this->has('password')){
            $rules['password'] = $passReq.'|sometimes|min:6|regex:/^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/';
        }
        return $rules;
    }
    
     public function messages()
    {
        return [
           
            'username.required'  => 'Please enter username.',
            'password.required'  => 'Please enter password.',
            'user_profiles.*.trasport_type.required' => 'Please select transport type ',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        \Illuminate\Support\Facades\Session::flash('ValidatorError', 'Oops something went wrong. Please check the required fields and complete them.');
        return parent::failedValidation($validator);
    }
}
