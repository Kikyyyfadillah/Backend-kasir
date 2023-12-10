<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Category;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Contracts\Cache\Store;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $data = category::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function create()
    {
        //
    }
    public function store(StoreCategoryRequest $request)
    {
        try {
            $data = category::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        //
    }
    public function update(StoreCategoryRequest $request, Category $category)
    {
        try {
            $data = $category->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data']);
        }
    }
    public function destroy(Category $category)
    {
        try {
            $data = $category->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
