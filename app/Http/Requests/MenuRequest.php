<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
        if(request()->isMethod('POST')){
            $data = [
                'category_id' => 'required',
                'name' => 'required|unique:menus',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'price' => 'required',
                'description' => 'required',
            ];
        }elseif(request()->isMethod('PUT')){
            $data = [
                'category_id' => 'required',
                'name' => 'required','unique:menus,name'.$this->id,
                'image' => 'mimes:png,jpg,jpeg|max:2048',
                'price' => 'required',
                'description' => 'required',
            ];
        }

        return $data;
    }
}
