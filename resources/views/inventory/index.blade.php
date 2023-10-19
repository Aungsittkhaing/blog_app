@extends('pages.master')
@section('title')
    Index Page
@endsection
@section('content')
    <div class="mt-5 pt-4">
        <h4>Item Lists</h4>
        <table class="table table-primary">
            <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
            </tr>
            </thead>
            <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        There is no record <br>
                        <a href="{{ route('item.create') }}" class="btn btn-outline-primary btn-sm">Create</a>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
