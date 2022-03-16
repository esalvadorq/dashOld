@props(['active' => '', 'text' => '', 'hide' => false, 'icon' => false, 'permission' => false])

@if ($permission)
    @if ($logged_in_user->can($permission))
        @if (!$hide)
        {{-- <img src="{{ asset('img/brand/icon.png') }}" style="width:150px" alt=""> --}}
            <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>@if ($icon)<i class="{{ $icon }}"></i> @endif{{ strlen($text) ? $text : $slot }}</a>
        @endif
    @endif
@else
    @if (!$hide)
        <a {{ $attributes->merge(['href' => '#', 'class' => $active]) }}>@if ($icon)<i class="{{ $icon }}"></i> @endif{{ strlen($text) ? $text : $slot }}</a>
    @endif
@endif
