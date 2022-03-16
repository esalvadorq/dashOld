@extends('backend.layouts.app')

@section('title', __('View Product'))

{{-- @section('breadcrumb-links')
    @include('backend.includes.partials.breadcrumbs')
@endsection --}}

@section('content')
    <x-backend.card>
        <x-slot name="header">
            <i class="cil-layers"></i>
            @lang('List Product')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link icon="c-icon cil-plus" class="card-header-action" :href="route('admin.product')"
                    :text="__('Create Product')" />
            </x-slot>
        @endif

        <x-slot name="body">
            {{-- <livewire:backend.users-table /> --}}
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="card">

                            <div class="card-body" style="height: 210px;">
                                <div class="col-md-2">
                                    {{-- <a href="{{ route('admin.cliente.create') }}"></a> --}}
                                    <input type="text" id='find' placeholder="Search..." class="form-control mb-2">
                                    <input type="text" id='descripcion' placeholder="" class="form-control mb-2" readonly>
                                    <input type="text" id='contenido' placeholder="" class="form-control mb-2" readonly>
                                    <input type="text" id='fecha' placeholder="" class="form-control mb-2" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection
