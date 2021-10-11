<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Todo;
use App\Models\User;

class CreateTodoRequest extends FormRequest
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
     * 
     */
    public function rules()
    {
        return [
            'title'         => ['required', 'string'],
            'complete'      => ['sometimes', 'required', 'boolean'], 
            'description'   => ['sometimes', 'required', 'string'],
            'user_id'       => ['prohibited'],
        ];
    }
}
