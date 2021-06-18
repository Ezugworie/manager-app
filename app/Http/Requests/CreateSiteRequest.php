<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSiteRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'location' => 'required|string',
            'phone' => 'required',
            'status' => 'required|in:ACTIVE,INACTIVE',
            'address_id' => 'required|string',
            'created_by' => 'required|string',
        ];
    }
}
