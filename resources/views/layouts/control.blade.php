<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.control.head')
</head>
<body id="app" class="theme-light bg-dark">
<div class="container-fluid top-nav sticky-top">
    @include('partials.control.nav')
</div>
<div class="container-fluid content-container">
    <div class="row">
        <div class="col-2">
            @include('partials.control.left-nav')
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
