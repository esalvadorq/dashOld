<?php
/* Ruta y miga de pan */
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'cliente.'.
Route::redirect('/', '/admin/dashboard', 301);
/* Route::redirect('/', '/admin/dashboard', 301); */
Route::get('product', [ProductController::class, 'index'])
    ->name('product')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.dashboard')
            ->push(__('View Product'), route('admin.product'));
    });

Route::get('CreateProduct', [ProductController::class, 'create'])
    ->name('CreateProduct')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.product')
            ->push(__('Create Product'), route('admin.CreateProduct'));
    });

Route::get('CategoryProduct', [ProductController::class, 'category'])
    ->name('CategoryProduct')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.product')
            ->push(__('Category Product'), route('admin.CategoryProduct'));
    });

Route::get('CreateCategoryProduct', [ProductController::class, 'createcategory'])
    ->name('CreateCategoryProduct')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.CategoryProduct')
            ->push(__('Create Category Product'), route('admin.CategoryProduct'));
    });
