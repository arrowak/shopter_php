@extends('layouts.control')

@section('breadcrumbs')
    <div class="row breadcrumbs-wrapper">
        <div class="col-12 p-0">
            {{ Breadcrumbs::render("categoriesIndex") }}
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="page-actions" id="page-actions">
            <a href="{{ route('categories.create') }}" class="action btn-outline-light"><i class="fas fa-plus"></i> New
                Category</a>
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
                    <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->active ? "Active" : "Inactive" }}</td>
                        <td><a href="{{ route('categories.show', ['category' => $category]) }}"
                               class="text-light text-link">View</a></td>
                        <td><a href="{{ route('categories.edit', ['category' => $category]) }}"
                               class="text-light text-link">Edit</a></td>
                        <td><a href="{{ route('categories.delete', ['category' => $category]) }}"
                               class="text-light text-link" data-prompt="true"
                               data-prompt-message="Are you sure you want to delete {{ $category->name }}?">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
