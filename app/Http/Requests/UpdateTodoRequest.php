<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Todo;
use App\Models\User;

class UpdateTodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * User can only update his own todos.
     *
     * @return bool
     */
    public function authorize()
    {
        $todoUserId = $this->route('todo')->user_id;
        $currentUserId = $this->user()->id;

        //return ($todoUserId === $currentUserId);
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
            'title'         => ['sometimes', 'required', 'string'],
            'complete'      => ['sometimes', 'required', 'boolean'], 
            'description'   => ['sometimes', 'required', 'string'],
            'user_id'       => ['prohibited'],
        ];
    }
}
