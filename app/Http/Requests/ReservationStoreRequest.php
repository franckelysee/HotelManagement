<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
            'chambre_id' => ['required', 'string'],
            'client_id' => ['required', 'string'],
            'date_d_arrivee' => ['required'],
            'date_de_depart' => ['required'],
            'prix_total' => ['required', 'string'],
            'statut' => ['required', 'in:en_attente,confirmé,annulé,enregistré,parti'],
        ];
    }
}
