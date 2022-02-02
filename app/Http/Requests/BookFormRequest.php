<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'page' => 'required|min:1|max:100',
            'price' => 'required|min:1|max:100',
            'author_id' => 'required|min:1|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Please provide book Book Title!",
            'title.min' => "Title at least 5 character long!",
            "title.max" => "Title can't not longer than 100 character!",
            'page.required' => "Please provide number of page!",
            'page.min' => "Page at least 5 character long!",
            "page.max" => "Page can't not longer than 100 character!",
            'price.required' => "Please set the price!",
            'price.min' => "Price at least 5 character long!",
            "price.max" => "Price can't not longer than 100 character!",
            'author_id.required' => "Please select author!",
            'author_id.min' => "Author at least 1 character long!",
            "author_id.max" => "Author can't not longer than 100 character!",
        ];
    }
}
