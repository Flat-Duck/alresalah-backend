<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
            'title' => 'required|max:255|string',
            'ISBN' => 'required|max:255|string',
            'edition' => 'required|max:255|string',
            'format' => 'required|max:255|string',
            'level_id' => 'required|exists:levels,id',
            'Author' => 'required|max:255|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'description' => 'required|max:255|string',
            'featured' => 'required|boolean',
            'on_sale' => 'required|boolean',
            'publisher_id' => 'required|exists:publishers,id',
            'cover_image' => 'image|max:1024|required',
            'tags' => ['array'],
        ];
    }
}
