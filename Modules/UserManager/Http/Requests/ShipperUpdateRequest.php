<?php

namespace Modules\UserManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Request;
class ShipperUpdateRequest extends FormRequest
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
            'contact_name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users,email,' . \Auth::guard('user')->user()->id,
            'mobile' => 'required|numeric|digits_between:6,16',
            'phone' => 'required|numeric|digits_between:6,16',
             'shipper.state_id'=>'required',
            'shipper.address'=>'required|max:150',
            'shipper.suburb'=>'required|max:150',
            'shipper.suburb'=>'required|max:150',
            'shipper.pincode'=>'required|max:150',
            'postal.state_id'=>'required',
            'postal.address'=>'required|max:150',
            'postal.suburb'=>'required|max:150',
            'postal.pincode'=>'required|max:150',
            'profle_photo' => 'image|mimes:jpg,png,jpeg|max:5000',
            'user_profiles.*.trasport_type'=>'required',
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
            'contact_name.required'  => 'Please enter contact name.',
            'email.required'  => 'Please enter email address.',
            'email.email'  => 'Please enter valid email format.',
            'mobile.required'  => 'Please enter mobile number.',
            'phone.required'  => 'Please enter phone number.',
            'username.required'  => 'Please enter username.',
            'password.required'  => 'Please enter password.',
            'street.address.required' => 'Please enter address ',
            'street.suburb.required' => 'Please enter suburb',
            'street.pincode.required' => 'Please enter pincode',
            'postal.address.required' => 'Please enter address',
            'postal.suburb.required' => 'Please enter suburb',
            'postal.pincode.required' => 'Please enter pincode',
            'street.state_id.required' => 'Please select state',
            'postal.state_id.required' => 'Please enter state',
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
