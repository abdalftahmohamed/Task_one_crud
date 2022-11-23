<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5',
            'body' => 'required|min:5'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'من فضلك ادخل البيانات',
            'title.min' => 'من فضلك ادخل علي الاقل 5 احرف',

            'body.required' => 'من فضلك ادخل البيانات',
            'body.min' => 'من فضلك ادخل علي الاقل 5 احرف'

        ];
    }
}
