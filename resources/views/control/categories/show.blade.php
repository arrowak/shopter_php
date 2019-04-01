@extends('layouts.control')

@section('breadcrumbs')
    <div class="row breadcrumbs-wrapper">
        <div class="col-12">
            {{ Breadcrumbs::render("categoriesShow", $category) }}
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="page-actions">
            <a href="{{ route('categories.delete', ["category" => $category]) }}" class="action">
                <i class="fas fa-times"></i> Delete
            </a>
            <a href="{{ route('categories.edit', ["category" => $category]) }}" class="action">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <legend>{{ $category->name }}</legend>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2 text-right">Name</div>
                <div class="col-10">{{ $category->name }}</div>
            </div>

            <div class="row">
                <div class="col-2 text-right">Is Active</div>
                <div class="col-10">{{ $category->active ? "Active": "Inactive" }}</div>
            </div>
        </div>
    </div>
@endsection
