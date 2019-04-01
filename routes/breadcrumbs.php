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

Breadcrumbs::for('categoriesIndex', function ($trail) {
    $trail->parent('home');
    $trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categoriesCreate', function ($trail) {
    $trail->parent('categoriesIndex');
    $trail->push('Create', route('categories.create'));
});

Breadcrumbs::for('categoriesShow', function ($trail, \App\Category $category) {
    $trail->parent('categoriesIndex');
    $trail->push($category->name, route('categories.show', ['category' => $category]));
});
