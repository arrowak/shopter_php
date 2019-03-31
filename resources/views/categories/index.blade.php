@extends('layouts.default')
@section('title')
    Shopter - Categories
@endsection
@section('content')
    <div class="row">
        <div class="page-actions" id="page-actions">
            <a href="{{ route('categoriesCreate') }}" class="action"><i class="fas fa-plus"></i> New Category</a>
        </div>
    </div>

    <div class="card col-12">
        <div class="card-header row">
            <div class="card-title">
                <legend>Categories</legend>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-dark table-neon">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Is Active</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->active ? "Active" : "Inactive" }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection