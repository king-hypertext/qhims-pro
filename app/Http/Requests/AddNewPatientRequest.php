<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewPatientRequest extends FormRequest
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
            "id" => "required|string",
            "first_name" => "required|string",
            "mid_name" => "string",
            "last_name" => "required|string",
            "address" => "required|string",
            "phone" => "required",
            "date_of_birth" => "date|required",
            "email" => "email|unique:patient,email",
            "gender" => "required",
            "religion" => "string",
            "blood_type" => "string",
            "e_firstname" => "required",
            "e_lastname" => "required",
            "e_phone" => "required",
            "e_relation" => "required",
            "e_address" => "required"
        ];
    }
    public function messages()
    {
        return [
            "first_name.required" => "First name is required",
            "last_name.required" => "Last name is required",
            "address.required" => "Patient address is required",
            "phone.required" => "Patient phone number is required",
            "date_of_birth.required" => "Date of birth is required",
            "gender.required" => "Gender is required",
            "email.unique" => "Email already exists in the system",
            "e_firstname.required" => "Emergency Contact first name is required",
            "e_lastname.required" => "Emergency Contact last name is required",
            "e_phone.required" => "Emergency Contact phone is required",
            "e_relation.required" => "Relationship field is required",
            "e_address.required" => "Emergency Contact address is required",
        ];
    }
}
