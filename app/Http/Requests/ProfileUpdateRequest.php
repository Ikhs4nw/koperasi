<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'lowercase', 'max:15', 'alpha_num', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50', Rule::unique(User::class)->ignore($this->user()->id)],
            'alamat' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9.,\s]+$/u'],
            'no_telp' => ['required', 'string', 'numeric','digits_between:1,14,'],
        ];
    }
}
