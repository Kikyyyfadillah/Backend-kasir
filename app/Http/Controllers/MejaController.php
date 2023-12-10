<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Meja;
use App\Http\Requests\StoreMejaRequest;

class MejaController extends Controller
{

    public function index()
    {
        try {
            $data = Meja::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function create()
    {
        //
    }
    public function store(StoreMejaRequest $request)
    {
        try {
            $data = Meja::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function show(Meja $Meja)
    {
        //
    }
    public function edit(Meja $Meja)
    {
        //
    }
    public function update(StoreMejaRequest $request, Meja $meja)
    {
        try {
            $data = $meja->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data']);
        }
    }
    public function destroy(Meja $meja)
    {

        try {
            $data = $meja->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
