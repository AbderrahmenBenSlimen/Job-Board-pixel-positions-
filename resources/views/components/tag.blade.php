@props(['size' => 'base'])
@php
$classes = 'bg-white/10 rounded-lg font-bold p-x-3 hover:bg-white/25
transition-colors duration-300';

if($size === 'base'){
$classes .= ' px-5 py-1 text-sm ';
}
if($size === 'small'){
$classes .= ' px-2 py-1 text-2xs ';
}

@endphp

<a {{ $attributes->merge(['class' => $classes ]) }}>{{$slot}}
</a>