@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create User'))

@section('content')
    {{-- <x-forms.post :action="route('admin.auth.user.store')"> --}}
    <x-forms.post :action="route('admin.auth.user.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Customer')
            </x-slot>

            <x-slot name="headerActions">
                {{-- <x-utils.link class="card-header-action" :href="route('admin.auth.user.index')" :text="__('Cancel')" /> --}}
                <x-utils.link class="card-header-action" :href="route('admin.cliente')" :text="__('Cancel')" />
            </x-slot>




            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Customer')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
