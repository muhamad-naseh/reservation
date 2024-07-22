<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
                'user_id' => 'required',
                'menu_id' => 'required',
                'qty' => 'required',
                'price' => 'required',
            ];
        }elseif(request()->isMethod('PUT')){
            $data = [
//                'user_id' => 'required',
//                'menu_id' => 'required',
                'qty' => 'required|numeric|min:1',
//                'price' => 'required',
            ];
        }

        return $data;
    }
}
