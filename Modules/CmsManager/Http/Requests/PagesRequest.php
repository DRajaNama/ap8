<?php

namespace Modules\CmsManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Http\Request;

class PagesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        //dd($request->input());
        //dd($request->segment(3));
        return [
            'title' => 'required|min:5|max:150',
            'slug' => 'required|unique:pages,slug,' . $request->segment(3),
            'description' => 'required|min:5',
            'meta_title' => 'required|max:150',
            'meta_keyword' => 'required|max:150',
            'meta_description' => 'required|max:150',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'  => 'Please enter page title!',
            'title.min'  => 'Page Title must be at least 5 characters long!',
            'slug.required' => 'Please enter page slug!',
            'slug.unique' => 'Each cms pages must have a unique slug! this page slug already created!!',
            'description.required'  => 'Please enter description!',
            'description.min'  => 'Description must be at least 5 characters long!',
            'meta_title.required'  => 'Please enter meta title!',
            'meta_keyword.required'  => 'Please enter meta keyword!',
            'meta_description.required'  => 'Please enter meta description!',
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
