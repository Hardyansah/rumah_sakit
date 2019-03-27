<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use session;
class PasienRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->pasien;
        return [ 
            'nik' => 'required|unique:pasiens,nik|max:15', 
            'nama' => 'required'
        ];
    
    }
    public function messages() 
    { 
        return [ 
            'nik.required' => 'NIK harus Diisi',
            'nik.unique' => 'NIK sudah digunakan',
            'nama.required' => 'Nama harus Diisi'
            ]; 
    }
}
