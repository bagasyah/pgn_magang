<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'idstudents' => 'required|unique:students,idstudents|min:1|max:10',
            'fullname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'emailaddress' => 'required|email|unique:students,emailaddress',
            'phone' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'idstudents.required' => ':attribute Tidak Boleh Kosong',
            'idstudents.unique' => ':attribute Sudah Ada Didalam Tabel',
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
            'idstudents' => 'Id Students',
            'fullname' => 'Nama Lengkap',
            'gender' => 'Gender',
            'address' => 'Alamat',
            'emailaddress' => 'Alamat Email',
            'phone' => 'No Telpon',
        ];
    }
}