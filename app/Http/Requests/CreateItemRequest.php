<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateItemRequest extends FormRequest
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
            'title'=>['required','between:3,100'],
            'description'=>'nullable|max:3000',
            'status'=>[
                'required',
                 Rule::in(['Pending', 'Wait', 'reminding','done']),
             ],
            'createTime'=>'required',
            'statusTime'=>'required',
            'category'=>'required',
            
        ];
    }
}
