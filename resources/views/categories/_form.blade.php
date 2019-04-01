<form action="{{ empty($category) ? route('categories.store') : route('categories.update', ['category' => $category])}}"
      method="POST" class="col-8">
    {{ csrf_field() }}
    @if(!empty($category))
        {{ method_field('PUT') }}
    @endif
    <div class="form-group">
        <label for="categoryName">Name</label>
        <input type="text" class="form-control col-12" id="categoryName" name="name"
               placeholder="Enter the name for new category" value="{{ !empty($category) ? $category->name : "" }}">
    </div>

    <div class="form-group">
        <input type="checkbox" class="form-control" id="categoryActive" data-toggle="toggle"
               name="active" data-on="Active" data-off="Inactive" data-onstyle="success"
               data-offstyle="danger" data-size="normal" {{ !empty($category) && $category->active ? "checked" : "" }}>

    </div>

    <div class="form-group float-right">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

