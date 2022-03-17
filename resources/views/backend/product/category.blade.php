@extends('backend.layouts.app')

@section('title', __('Create Category Product'))

@section('content')
    {{-- <x-forms.post :action="route('admin.auth.user.store')"> --}}
    <x-forms.post :action="route('admin.auth.user.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Category Product')
            </x-slot>

            <x-slot name="headerActions">
                {{-- <x-utils.link class="card-header-action" :href="route('admin.auth.user.index')" :text="__('Cancel')" /> --}}
                <x-utils.link class="card-header-action" :href="route('admin.CategoryProduct')" :text="__('Cancel')" />
            </x-slot>




            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Category Product')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
