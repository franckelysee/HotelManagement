<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AviStoreRequest extends FormRequest
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
            'hotel_id' => ['required', 'string'],
            'client_id' => ['required', 'string'],
            'note' => ['required', 'integer'],
            'commentaire' => ['required', 'string'],
        ];
    }
}
