<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:50',
            'description' => 'nullable|string|max:300',
            'price' => 'required|decimal:0,2'
        ];
    }

    public function messages() {

        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'title.max' => 'Il titolo deve avere massimo 50 caratteri',

            'description.string' => 'La descrizione deve essere una stringa',
            'description.max' => 'La descrizione deve avere massimo 300 caratteri',

            'price.required' => "Il prezzo e' obbligatorio",
            'price.decimal' => "Il prezzo puo' contenere solo 2 cifre dopo la virgola",
        ];
    }
}
