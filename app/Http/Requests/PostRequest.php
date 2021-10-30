<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.team_id' => 'required',
            'post.title' => 'required|string|max:50',
            'post.body' => 'required|string|max:4000',
        ];
    }
}
