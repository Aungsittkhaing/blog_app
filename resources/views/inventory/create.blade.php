@extends('pages.master')
@section('title')
    Create Page
@endsection
@section('content')
    <form action="{{ route('item.store') }}" method="post" class="mt-5 pt-3">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" name="name" class="form-control" placeholder="like apple,orange,etc">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Price</label>
                    <input type="number" name="price" class="form-control" placeholder="like 1000, 2000, etc">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" placeholder="like 1,2,3,4,etc">
                </div>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
