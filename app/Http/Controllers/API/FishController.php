<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fish;

class FishController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 10);
        $nama_ikan = $request->input('nama_ikan');
        $slug = $request->input('slug');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');


        if ($id) {
            $fish = Fish::find($id);

            if ($fish)
                return ResponseFormatter::success($fish, 'Data ikan berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data ikan tidak ada', 404);
        }

        if ($slug) {
            $fish = Fish::where('slug', $slug)->first();

            if ($fish)
                return ResponseFormatter::success($fish, 'Data ikan berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data ikan tidak ada', 404);
        }

        $fish = Fish::all();

        return ResponseFormatter::success(
            $fish,
            'Data list ikan berhasil diambil'
        );
    }
}
