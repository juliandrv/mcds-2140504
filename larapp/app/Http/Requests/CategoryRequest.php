<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            // Edit Form
            return [
                'name'        => 'required|unique:categories,name,'.$this->id,                                         
                'image'       => 'max:1000',
                'description' => 'max:255|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',                                
            ];
        } else {
            // Create Form
            return [
                'name'        => 'required|unique:categories,name,'.$this->id,                            
                'image'       => 'max:1000',
                'description' => 'max:255|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            ];
        }
    }
}
