<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:200',
            'thumb' => 'required',
            'series' => 'required|min:6|max:200',
            'sale_date' => 'required',
            'price' => 'required',
            'type' => 'required',
            'description' => 'nullable'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'A title is required',
            'title.min' => 'The title must be at least :min characters long',
            'title.max' => 'The title must be no longer than :max characters',
            'thumb.required' => 'An image is required',
            'series.required' => 'A series title is required',
            'series.min' => 'The series title must be at least :min characters long',
            'series.max' => 'The series title must be no longer than :max characters',
            'sale_date.required' => 'A sale date is required',
            'price.required' => 'A price is required',
            'type.required' => 'A type is required'
        ];
    }
}
