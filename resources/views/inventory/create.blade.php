@extends('pages.master')
@section('title')
    Create Item
@endsection
@section('content')
    <form action="{{ route('item.store') }}" method="post" class="mt-3">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="like apple,orange,etc" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Price</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                        placeholder="like 1000, 2000, etc" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                        placeholder="like 1,2,3,4,etc" value="{{ old('stock') }}">
                    @error('stock')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
