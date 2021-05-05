<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_user' => 'required|integer',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'jumlah_pesanan' => 'required|integer',
            'harga_total' => 'required|integer',
            'status_transaksi' => 'nullable|string|in:DIPROSES,DIKIRIM,SUKSES',
            'transaction_details' => 'required|array',
            'transaction_details.*' => 'integer|exists:fish,id'
        ];
    }
}
