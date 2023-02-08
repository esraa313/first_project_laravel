<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreRequest extends FormRequest
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
            'title' => ['required','min:3',Rule::unique('posts', 'title')->ignore($this->post)],
            'description' => ['required','min:10'],
            
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'This message is changed',
            'title.min' => 'min override message',
        ];
    }
}
