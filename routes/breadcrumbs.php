<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 2019-03-28
 * Time: 16:29
 */

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', '/');
});

Breadcrumbs::for('CategoryController#index', function ($trail) {
    $trail->parent('home');
    $trail->push('Categories', route('categoriesIndex'));
});

Breadcrumbs::for('CategoryController#create', function ($trail) {
    $trail->parent('CategoryController#index');
    $trail->push('Create', route('categoriesCreate'));
});