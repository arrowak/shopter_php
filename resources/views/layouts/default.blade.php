<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body id="app-root" class="theme-light bg-dark">
<div class="container-fluid top-nav sticky-top">
    @include('partials.nav')
</div>
<div class="container content-container bg-dark">
    <div class="row breadcrumbs-wrapper">
        <div class="col-12">
            {{ Breadcrumbs::render("$controller#$action") }}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>