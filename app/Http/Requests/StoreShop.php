<?php

namespace App\Http\Requests;

use App\Enums\ShopStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreShop extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:shops',
            'domain' => 'required',
            'address' => 'required',
            'photo' => 'nullable',
            'status' => Rule::in(ShopStatusEnum::Closed),
        ];
    }
}
