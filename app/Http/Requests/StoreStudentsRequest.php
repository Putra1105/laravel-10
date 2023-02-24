<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtid' => 'required|unique:students,idstudents|min:7|max:7',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required|email|unique:students,email',
            'txtphone' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute Tidak Boleh Kosong',
            'txtid.unique' => ':attribute Sudah Terpakai',
            'txtfullname.required' => ':attribute Tidak Boleh Kosong',
            'txtgender.required' => ':attribute Tidak Boleh Kosong',
            'txtaddress.required' => ':attribute Tidak Boleh Kosong',
            'txtemail.required' => ':attribute Tidak Boleh Kosong',
            'txtemail.unique' => ':attribute Sudah Terpakai',
            'txtemail.email' => ':attribute Harus Berupa Email',
            'txtphone.required' => ':attribute Tidak Boleh Kosong',
            'txtphone.numeric' => ':attribute Harus Berupa Angka',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtid' => 'ID Students',
            'txtfullname' => 'Nama Lengkap',
            'txtgender' => 'Jenis Kelamin',
            'txtaddress' => 'Alamat Lengkap',
            'txtemail' => 'Email',
            'txtphone' => 'Nomor Telepon',
        ];
    }
}
