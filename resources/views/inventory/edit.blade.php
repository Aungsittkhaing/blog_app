@extends('pages.master')
@section('title')
    Edit Item
@endsection
@section('content')
    <form action="{{ route('item.update', $item->id) }}" method="post" class="mt-3 p-2">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" value="{{ old('name', $item->name) }}" name="name"
                        class="form-control @error('name') is-invalid @enderror" placeholder="like apple,orange,etc">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Price</label>
                    <input type="number" value="{{ old('price', $item->price) }}" name="price"
                        class="form-control @error('price') is-invalid @enderror" placeholder="like 1000, 2000, etc">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" value="{{ old('stock', $item->stock) }}" name="stock"
                        class="form-control @error('stock') is-invalid @enderror" placeholder="like 1,2,3,4,etc">
                    @error('stock')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-info">Update</button>
            </div>
        </div>
    </form>
@endsection
