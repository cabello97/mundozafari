<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class verificarRequest extends FormRequest
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
            'scientific' => 'required|string|max:250',
            'photo' => 'required|string|max:250',
            'description' => 'required|string|max:250',
            'habitat' => 'required|string|max:250',
            'region' => 'required|integer',
            'feeding' => 'required|string|max:250'
        ];
    }
}
