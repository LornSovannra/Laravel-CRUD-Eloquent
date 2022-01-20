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
            'image' => 'required',
            'page' => 'required|min:1|max:100',
            'price' => 'required|min:1|max:100',
            'author' => 'required|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Please provide book Book Title!",
            'title.min' => "Title at least 5 character long!",
            "title.max" => "Title can't not longer than 100 character!",
            "image.required" => "Please select one image!",
            'page.required' => "Please provide number of page!",
            'page.min' => "Page at least 5 character long!",
            "page.max" => "Page can't not longer than 100 character!",
            'price.required' => "Please set the price!",
            'price.min' => "Price at least 5 character long!",
            "price.max" => "Price can't not longer than 100 character!",
            'author.required' => "Please select author!",
            'author.min' => "Author at least 5 character long!",
            "author.max" => "Author can't not longer than 100 character!",
        ];
    }
}
