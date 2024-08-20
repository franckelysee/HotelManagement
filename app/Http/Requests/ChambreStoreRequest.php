<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChambreStoreRequest extends FormRequest
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
            'numero_de_chambre' => ['required', 'string'],
            'type_de_chambre' => ['required', 'in:standard,deluxe,suite'],
            'prix_par_nuit' => ['required', 'string'],
            'capacite' => ['required', 'integer'],
            'est_disponible' => ['required'],
            'description' => ['required', 'string'],
        ];
    }
}
