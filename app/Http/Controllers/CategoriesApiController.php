<?php

namespace App\Http\Controllers;

use App\Models\Category;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CategoriesApiController extends Controller
{
    public function index() {
        $categories = Category::all();
        return response()->json(['message' => 'Success','data' => $categories]);
    }

    public function show($id) {
        $categories = Category::find($id);
        return response()->json(['message' => 'Success','data' => $categories]);
    }

    public function store(Request $request) {
        $categories = Category::create($request->all());
        return response()->json(['message' => 'Data berhasil ditambahkan','data' => $categories]);
    }

    public function update(Request $request,$id) {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json(['message' => 'Success','data' => $category]);
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['message' => 'Success','data' => null]);
    }
}
