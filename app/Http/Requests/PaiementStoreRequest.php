<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaiementStoreRequest extends FormRequest
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
            'reservation_id' => ['required', 'string'],
            'methode_de_paiement' => ['required', 'in:carte_de_crédit,paypal,virement_bancaire,espèces'],
            'statut_du_paiement' => ['required', 'in:en_attente,complété,échoué,remboursé'],
            'montant' => ['required', 'string'],
            'date_du_paiement' => ['required'],
        ];
    }
}
