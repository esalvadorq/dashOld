{{--Vista Panel control User --}}

@extends('frontend.layouts.app')

@section('title', __('cambia titut'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Panel de Control')
                    </x-slot>

                    <x-slot name="body">
                        @lang('dfd')
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
