<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'emailaddress' => [
                'required',
                Rule::unique('students', 'emailaddress')->ignore($this->idstudents, 'idstudents'),
                'email'
            ],
            'phone' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'fullname.required' => ':attribute Tidak Boleh Kosong',
            'gender.required' => ':attribute Tidak Boleh Kosong',
            'address.required' => ':attribute Tidak Boleh Kosong',
            'emailaddress.required' => ':attribute Tidak Boleh Kosong',
            'phone.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'fullname' => 'Nama Lengkap',
            'gender' => 'Gender',
            'address' => 'Alamat',
            'emailaddress' => 'Alamat Email',
            'phone' => 'No Telpon',
        ];
    }
}