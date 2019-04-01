<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body id="app-root" class="theme-light bg-dark">
<div class="container-fluid top-nav sticky-top">
    @include('partials.nav')
</div>
<div class="container-fluid content-container bg-dark pt-4">
    <div class="row">
        <div class="col-1">
            @include('partials.left-nav')
        </div>
        <div class="col-8">
            @yield('breadcrumbs')
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>
