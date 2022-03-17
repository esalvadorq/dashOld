@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create User'))

@section('content')
    {{-- <x-forms.post :action="route('admin.auth.user.store')"> --}}
{{--     <x-forms.post :action="route('admin.store')">
 --}}        <form method="POST" action="{{ route('admin.store') }}">
            @csrf

        <x-backend.card>
            <x-slot name="header">
                @lang('Create Customer')
            </x-slot>

            <x-slot name="headerActions">
                {{-- <x-utils.link class="card-header-action" :href="route('admin.auth.user.index')" :text="__('Cancel')" /> --}}
                <x-utils.link class="card-header-action" :href="route('admin.cliente')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                {{-- <div x-data="{userType : '{{ $model::TYPE_USER }}'}"> --}}
                    <div class="form-group row">
                        <label for="dni" class="col-md-2 col-form-label">@lang('DNI')</label>

                        <div class="col-md-10">
                            <input type="text" name="dni" class="form-control" placeholder="DNI"
                                value="{{ old('dni') }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-md-2 col-form-label">@lang('Name')</label>

                        <div class="col-md-10">
                            <input type="text" name="nombre" class="form-control" placeholder="{{ __('Name') }}"
                                value="{{ old('nombre') }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-md-2 col-form-label">@lang('Address')</label>

                        <div class="col-md-10">
                            <input type="text" name="direccion" class="form-control" placeholder="Address"
                                value="{{ old('direccion') }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-md-2 col-form-label">@lang('Phone')</label>

                        <div class="col-md-10">
                            <input type="text" name="telefono" class="form-control" placeholder="Phone"
                                value="{{ old('telefono') }}" maxlength="100" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">@lang('Email')</label>

                        <div class="col-md-10">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                value="{{ old('email') }}" maxlength="100" required />
                        </div>
                    </div>
                {{-- </div> --}}

            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Customer')</button>
            </x-slot>
        </x-backend.card>
       </form>

    {{-- </x-forms.post> --}}
@endsection
