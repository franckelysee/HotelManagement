<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'prenom' => ['required', 'string'],
            'nom' => ['required', 'string'],
            'email' => ['required', 'email'],
            'telephone' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'ville' => ['required', 'string'],
            'etat' => ['required', 'string'],
            'pays' => ['required', 'string'],
            'code_postal' => ['required', 'string'],
        ];
    }
}
