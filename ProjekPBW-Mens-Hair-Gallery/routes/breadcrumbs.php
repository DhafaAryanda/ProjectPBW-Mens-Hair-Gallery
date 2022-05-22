<?php // routes/breadcrumbs.php

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Dashboard > Home
Breadcrumbs::for('dashboard_home', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});

// Dashboard > Posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Posts', route('posts.index'));
});

// Dashboard > Posts > Add
Breadcrumbs::for('add_post', function ($trail) {
    $trail->parent('posts');
    $trail->push('Add', route('posts.create'));
});

// Dashboard > Posts > Detail > [title]
Breadcrumbs::for('detail_post', function ($trail, $post) {
    $trail->parent('posts');
    $trail->push('Detail', route('posts.show', ['post' => $post]));
    $trail->push($post->title, route('posts.show', ['post' => $post]));
});

// Dashboard > Posts > Edit > [title]
Breadcrumbs::for('edit_post', function ($trail, $post) {
    $trail->parent('posts');
    $trail->push('Edit', route('posts.edit', ['post' => $post]));
    $trail->push($post->title, route('posts.edit', ['post' => $post]));
});

// Dashboard > Product
Breadcrumbs::for('products', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Products', route('products.index'));
});

// Dashboard > Product > Add
Breadcrumbs::for('add_product', function ($trail) {
    $trail->parent('products');
    $trail->push('Add', route('products.create'));
});

// Dashboard > Product > Detail > [title]
Breadcrumbs::for('detail_product', function ($trail, $product) {
    $trail->parent('products');
    $trail->push('Detail', route('products.show', ['product' => $product]));
    $trail->push($product->title, route('products.show', ['product' => $product]));
});

// Dashboard > Product > Edit > [title]
Breadcrumbs::for('edit_product', function ($trail, $product) {
    $trail->parent('products');
    $trail->push('Edit', route('products.edit', ['product' => $product]));
    $trail->push($product->title, route('products.edit', ['product' => $product]));
});
