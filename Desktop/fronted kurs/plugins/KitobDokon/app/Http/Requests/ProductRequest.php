<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_eng'=>'required',
            'body_price'=>'required',
            'count'=>'required',
            'image'=>'required',
            'description_uz'=>'required',
            'description_eng'=>'required',
            'description_ru'=>'required',
            'category_id'=>'required',
        ];
    }
}
