<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::when(request()->has('title'), function ($query) {
            $sortType = request()->title ?? 'asc';
            $query->orderBy('title', $sortType);
        })
            ->paginate(7)->withQueryString();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            "title" => "required|min:3|max:50|unique:categories,title",
            "description" => "required|min:10",
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 442);
        }
        // $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return response()->json($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(['message' => 'is not found'], 404);
        }
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            "title" => "required|min:3|max:50|unique:categories,title",
            "description" => "required|min:10",
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 442);
        }

        $category->title = $request->title;
        $category->description = $request->description;
        $category->update();
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(["message" => "Not Found"], 404);
        }
        $category->delete();
        return response()->json([], 204);
    }
}
