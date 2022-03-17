<?php
/* Ruta y miga de pan  */
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'cliente.'.
Route::redirect('/', '/admin/dashboard', 301);
/* Route::redirect('/', '/admin/dashboard', 301); */
Route::get('cliente', [ClienteController::class, 'index'])
    ->name('cliente')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.dashboard')
            ->push(__('View Customer'), route('admin.cliente'));
    });

Route::get('create', [ClienteController::class, 'create'])
    ->name('create')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.cliente')
            ->push(__('Create Customer'), route('admin.create'));
    });

Route::post('store', [ClienteController::class, 'store'])->name('store');



