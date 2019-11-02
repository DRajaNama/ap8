<?php

namespace Modules\EnquiryManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:4',
            'email_address'=>'required',
            'message'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'  => 'Enter Your Name.',
            'name.min'  => 'Name length should atleast 4.',
            'email_address.required'  => 'Enter email address.',
            'message.required'  => 'Please enter your message.',
            
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
       // \Illuminate\Support\Facades\Session::flash('ValidatorError', 'Oops something went wrong. Please check the required fields and complete them.');
        return parent::failedValidation($validator);
    }
}
