<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Stok;
use App\Http\Requests\StoreStokRequest;
use App\Http\Requests\UpdateStokRequest;

class StokController extends Controller
{
    public function index()
    {
        try {
            $data = Stok::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function store(StoreStokRequest $request)
    {
        try {
            $data = Stok::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function update(StoreStokRequest $request, $stok)
    {
        try {
            $stok = Stok::findOrFail($stok);
            $data = $stok->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data / data tidak ada']);
        }
    }
    public function destroy(Stok $stok)
    {
        try {
            $data = $stok->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
