<?php

namespace App\Http\Requests\BreezePlus;

use App\Rules\BreezePlus\CurrentPasswordRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules(): array
    {
        return [
            'password' => ['required', 'confirmed', 'min:6'],
            'current_password' => ['required', new CurrentPasswordRule ],
        ];
    }
}
