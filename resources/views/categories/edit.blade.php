@extends("layouts.default")

@section('breadcrumbs')
    <div class="row breadcrumbs-wrapper">
        <div class="col-12">
            {{ Breadcrumbs::render("categoriesCreate") }}
        </div>
    </div>
@endsection

@section('content')
    <div class="card col-12">
        <div class="card-header row">
            <legend class="card-title">Edit {{ $category->name }}</legend>
        </div>

        <div class="card-body">
            @include('categories._form')
        </div>
    </div>
@endsection
