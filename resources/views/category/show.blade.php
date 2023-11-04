@extends('pages.master')
@section('title')
    Category Details
@endsection
@section('content')
    <div class="mt-3">
        <h4>Category Details</h4>
        <table class="table table-primary table-bordered">
            <tr class="text-center">
                <td class="text-center">Title</td>
                <td>{{ $category->title }}</td>
            </tr>
            <tr class="text-center">
                <td>Description</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>Created_At</td>
                <td>{{ $category->created_at }}</td>
            </tr>
            <tr>
                <td>Updated_At</td>
                <td>{{ $category->updated_at }}</td>
            </tr>
        </table>
    </div>
@endsection
