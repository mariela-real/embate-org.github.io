<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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
        return 
        [
            'firstname'=>'required|min:3|max:25',
            'lastname'=>'required|min:3|max:25',
            'email'=>'required|string|email|max:50|unique:subscribers'
        ];

      /*  if($this->method() !== 'PUT')
        {
            $rules ['email' ] = 'required|string|email|max:255|unique:subscribers,email,' . $this->id;

        }

        return $rules; */
    }
}
