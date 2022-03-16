{{-- View Dashboard Admin --}}

@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            <h1>
                @lang('Welcome :Name', ['name' => $logged_in_user->name])
            </h1>
        </x-slot>

        <x-slot name="body">
            @lang('Welcome to the rsdsdDashboard')
        </x-slot>
    </x-backend.card>
@endsection
