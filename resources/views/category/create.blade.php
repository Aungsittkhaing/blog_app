@extends('pages.master')
@section('title')
    Create Category
@endsection
@section('content')
    <form action="{{ route('category.store') }}" method="post" class="mt-5 pt-3">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input
                        type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="like news, political, economics, IT, etc"
                        value="{{ old('title') }}"
                    >
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea
                        name="description"
                        cols="30"
                        rows="10"
                        class="form-control @error('description') is-invalid @enderror"
                    >
                    </textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
