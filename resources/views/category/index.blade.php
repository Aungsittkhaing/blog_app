@extends('pages.master')
@section('title')
    Category List
@endsection
@section('content')
    <div class="mt-5 pt-4">
        <h4>Category Lists</h4>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-primary">
            <thead>
            <tr>
                <td>#</td>
                <td>title</td>
                <td>description</td>
                <td>Control</td>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($category->description, 20, '...') }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-list-check"></i>
                        </a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('category.destroy', $category->id) }}" class="d-inline-block"  method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete?')">
                                <i class="bi bi-trash2"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        There is no record <br>
                        <a href="{{ route('category.create') }}" class="btn btn-outline-primary btn-sm">Create</a>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $categories->onEachSide(1)->links() }}
    </div>
@endsection
