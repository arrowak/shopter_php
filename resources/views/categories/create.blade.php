@extends("layouts.default")
@section('content')
    <div class="card col-12">
        <div class="card-header row">
            <legend class="card-title">Create New Category</legend>
        </div>

        <div class="card-body">
            <form action="{{ route('categoriesStore') }}" method="POST" class="col-8">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="categoryName">Name</label>
                    <input type="text" class="form-control col-12" id="categoryName" name="name"
                           placeholder="Enter the name for new category">
                </div>

                <div class="form-group">
                    <input type="checkbox" class="form-control" id="categoryActive" data-toggle="toggle"
                           name="active" data-on="Active" data-off="Inactive" data-onstyle="success"
                           data-offstyle="danger" data-size="normal">

                </div>

                <div class="form-group float-right">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection