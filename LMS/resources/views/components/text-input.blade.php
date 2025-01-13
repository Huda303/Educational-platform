@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:ring-0 focus:border-emerald-500 rounded-md shadow-md ']) !!}>
