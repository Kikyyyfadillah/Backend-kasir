<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePemesananRequest extends FormRequest
{
    public function authorize(): bool
     {
        return true;
    }

    public function rules(): array
    {
        return [
            'meja_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_pemesan' => 'required',
            'jumlah_pelanggan' => 'required',
        ];
    }
     public function failedValidation(Validator $validator): array
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors()
        ]));
    }
}
  