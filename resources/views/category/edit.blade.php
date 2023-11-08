@extends('pages.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post" class="mt-3 p-2">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" value="{{ old('title', $category->title) }}" name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="like news, political, economics, technology, etc">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" placeholder="Enter Description"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $category->description) }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-info">Update</button>
            </div>
        </div>
    </form>
@endsection
