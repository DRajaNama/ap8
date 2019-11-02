<?php

namespace Modules\UserManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Request;

class CarrierRequest1 extends FormRequest
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
        $rules= [
            'company_name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users,email,' . $request->segment(3),
            'mobile' => 'required|numeric|digits_between:6,16',
            'phone' => 'required|numeric|digits_between:6,16',
            'abn' => 'required',
            'street.address'=>'required|max:150',
            'street.state_id'=>'required',
            'street.suburb'=>'required|max:150',
            'street.pincode'=>'required|max:150',
            'postal.address'=>'required|max:150',
            'postal.suburb'=>'required|max:150',
            'postal.pincode'=>'required|max:150',
            'postal.state_id'=>'required',
            'contact_name'=>'required',
            'username'=>'required|unique:users,username,' . $request->segment(3),
            'agree'=>'required',
            'acknowledge'=>'required',
            'term'=>'required',
        ];
        if($this->has('password')){
            $rules['password'] = $passReq.'|sometimes|min:6|regex:/^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/';
        }
                return $rules;
    }
    
     public function messages()
    {
        return [
            'company_name.required' => 'Please enter company name.',
            'abn.required'  => 'Please enter your abn number.',
            'contact_name.required'  => 'Please enter contact name.',
            'email.required'  => 'Please enter email address.',
            'email.email'  => 'Please enter valid email format.',
            'mobile.required'  => 'Please enter mobile number.',
            'phone.required'  => 'Please enter phone number.',
            'username.required'  => 'Please enter username.',
            'password.required'  => 'Please enter password.',
            'street.address.required' => 'Please enter address ',
            'street.state_id.required'=>'please select state',
            'street.suburb.required' => 'Please enter suburb',
            'street.pincode.required' => 'Please enter pincode',
            'postal.address.required' => 'Please enter address ',
            'postal.suburb.required' => 'Please enter suburb',
            'postal.pincode.required' => 'Please enter pincode',
            'postal.state_id.required'=>'please select state',
            'contact_name.required'=>'please enter contact name',
            'username.required'=>'please enter username',
            'agree.required'=>'please agree on our policy first.',
            'acknowledge.required'=>'please acknowledge first.',
            'term.required'=>'please accept our terms',
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
