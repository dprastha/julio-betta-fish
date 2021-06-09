<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
   public function get(Request $request)
   {
      $id = $request->input('id');
      $nama = $request->input('nama');
      $email = $request->input('email');
      $password = $request->input('password');

      if ($id) {
         $pengguna = Pengguna::find($id);

         if ($pengguna)
            return ResponseFormatter::success($pengguna, 'Data berhasil diambil');
         else
            return ResponseFormatter::error(null, 'Data tidak ada', 404);
      }

      $pengguna = Pengguna::all();

      return ResponseFormatter::success(
         $pengguna,
         'Data list pengguna berhasil diambil'
      );
   }

   public function post(Request $request)
   {
      $data = $request->all();

      $pengguna = Pengguna::create($data);

      $pengguna->nama = $request->nama;
      $pengguna->email = $request->email;
      $pengguna->password = $request->password;

      return ResponseFormatter::success(
         'Data berhasil ditambahkan'
      );
   }
}
