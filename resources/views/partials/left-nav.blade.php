<div class="row bg-dark content-container text-light border border-left-0 border-blueish-dark border-light">
    <div class="col-12">
        @if($categories = \App\Category::all())
            @foreach($categories as $category)
                @if($category->active)
                    <div class="row">
                        <div class="col-12 p-3 border-bottom border-blueish-dark">
                            {{ $category->name }}
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
