<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultsRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titolo'=>'required | min:4', 'marcatori'=>'required', 'giornata'=>'required | numeric', 'riassunto'=>'required', 'img'=>'image'
        ];
    }

    public function messages(){
        return [
            'titolo.required'=>'Il titolo è obbligatorio',
            'titolo.min'=>'Nel titolo si devono inserire piu di 4 caratteri',
            'marcatori.required'=>'I marcatore\i è\sono obbligatorio\i',
            'giornata.required'=>'la giornata è obbligatoria',
            'giornata.numeric'=>'Inserire solo numeri nella sezione giornata',
            'riassunto.required'=>'Il riassunto è obbligatorio',
            'img.image'=>'è possibile soltanto caricare delle imagini'
        ];
    }
}
