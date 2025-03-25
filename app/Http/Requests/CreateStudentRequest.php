<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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

            "first_name" => "required|string|min:2",
            "last_name" => "required",
            "phone_number" => "required|max:9",
            "birth_date" => "required|date|before:today",
        ];
    }
    public function messages(): array{
        return [
            "first_name.required" => "Le prenom est obligatoire 😡",
                "last_name.required" => " Le Nom est obligatoire imbécile 😡",
                "phone_number.required" => "Votre numéro est obligatoire",
                "phone_number.max" => "Votre numero de telephone ne doit pas depassé 9 numero stp ",
                "birth_date.required" => "Votre date de naissance est obligatoire",
                "birth_date.date" => " c'est censé être une date idiot 😡",
                "birth_date.before" => "est ce que tu es né demain hein imbecile ",

        ];
    }
}
