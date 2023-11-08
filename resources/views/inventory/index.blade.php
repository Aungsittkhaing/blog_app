@extends('pages.master')
@section('title')
    Item List
@endsection
@section('content')
    <div class="mt-3 p-2">
        <h4>
            Item Lists
            @if (request()->has('keyword'))
                [Search result by '{{ request()->keyword }}']
            @endif
        </h4>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-primary">
            <thead>
                <tr>
                    <td>#</td>
                    <td>
                        Name
                        <a href="{{ route('item.index', ['name' => 'asc']) }}" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-bar-up"></i>
                        </a>
                        <a href="{{ route('item.index', ['name' => 'desc']) }}" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-bar-down"></i>
                        </a>
                        <a href="{{ route('item.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-x-circle"></i>
                        </a>
                    </td>
                    <td>Price</td>
                    <td>Stock</td>
                    <td>Control</td>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <a href="{{ route('item.show', $item->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-list-check"></i>
                            </a>
                            <a href="{{ route('item.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('item.destroy', $item->id) }}" class="d-inline-block" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure to delete?')">
                                    <i class="bi bi-trash2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            There is no record <br>
                            <a href="{{ route('item.create') }}" class="btn btn-outline-primary btn-sm">Create</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $items->onEachSide(1)->links() }}
    </div>
@endsection
