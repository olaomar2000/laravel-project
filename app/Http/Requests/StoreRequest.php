<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|numeric',
            'category_id' => 'required|numeric|min:1',
            'logo' => 'required'
        ];
    }

    public function messages () {
        return [
            'name.required' => 'name is required',
            'name.string' => 'name must be a string',
            'address.required' => 'address is required',
            'address.string' => 'address must be a string',

            'phone.required' => 'phone is required',
            'phone.numeric' => 'The field of phone is a number',

            'category_id.required' => 'You must choose a category',
            'category_id.numeric' => 'The field of category is a number',
            'category_id.min:1' => 'Wrong value for category selected',
            'logo.required' => 'You must attach an image',
        ];
    }
}
