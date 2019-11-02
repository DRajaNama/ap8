<?php

namespace Modules\UserManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ChangePasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $rules=[ 
            'old_password'     => 'required',
            'password' => 'required|string|min:6|confirmed|regex:/^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/',
        ];

       
        return $rules;
    }
     /**
     * Configure the validator instance.
     *
     * @param \Illuminate\Validation\Validator $validator
     *
     * @return void
     */
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            // check old password matches
            if (!empty($this->input('old_password'))) {
                if (!Hash::check($this->input('old_password'), \Auth::guard('user')->user()->password)) {
                    $validator->errors()->add('old_password', trans('You entered wrong old password.'));
                }
            }
        });
    }
    public function messages() {
        return [
            'old_password.required'=>'Please enter your old password',
            'password.required'=>'Please enter your new password',
            'password.regex'        => 'Password contain at least one number, one special character and have a mixture of uppercase and lowercase letters.',
            'password.confirmed'        => 'New password and confirm password does not match.',
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
