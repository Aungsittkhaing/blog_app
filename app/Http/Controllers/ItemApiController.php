<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::when(request()->has('keyword'), function ($query) {
            $keyword = request()->keyword;
            $query->where("name", "like", "%" . $keyword . "%");
            $query->orWhere("price", "like", "%" . $keyword . "%");
            $query->orWhere("stock", "like", "%" . $keyword . "%");
        })
            ->when(request()->has('name'), function ($query) {
                $sortType = request()->name ?? 'asc';
                $query->orderBy('name', $sortType);
            })
            ->paginate(7)->withQueryString();
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|min:3|max:50|unique:items,name",
            "price" => "required|numeric|gte:50",
            "stock" => "required|numeric|gt:3"
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 442);
        }
        // $item = Item::create([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock,
        // ]);
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        return response()->json($item);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message" => "Not Found"], 404);
        }
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {

        $validator = Validator::make($request->all(), [
            "name" => "required|min:3|max:50|unique:items,name",
            "price" => "required|numeric|gte:50",
            "stock" => "required|numeric|gt:3"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 442);
        }
        // $item = Item::find($id);
        // $item->update([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock,
        // ]);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();
        return response()->json($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(["message" => "Not Found"], 404);
        }
        $item->delete();
        return response()->json([], 204);
    }
}
