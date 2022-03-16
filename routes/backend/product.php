<!-- Ruta y miga de pan  -->
<?php

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

Route::get('product/create', [ProductController::class, 'create'])
    ->name('create')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.product')
        ->push(__('Create Product'), route('admin.product'));
    });

