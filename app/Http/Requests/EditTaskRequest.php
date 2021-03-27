<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTaskRequest extends FormRequest
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
        switch ($this->getMethod())
        {
            case 'PUT':
                return [
                    'completed' => 'required|boolean',
                ];
            case 'PATCH':
                return [
                    'message' => 'required|max:255',
                ];
        }
    }
}
