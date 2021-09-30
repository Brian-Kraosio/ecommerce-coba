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
            'name' => 'required|unique:shops',
            'address' => 'required',
            'photo' => 'nullable',
            'shop_status' => Rule::in(ShopStatusEnum::getValues())
        ];
    }
}
