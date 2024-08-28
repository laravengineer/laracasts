{{-- Esta é uma forma de passar atributos para um component, ao declarar um <x-nav-link href=""></x-nav-link>, o href automaticamente passará para essa tag. --}}
{{-- <a {{ $attributes }}>{{ $slot }}</a> --}}

@props([
    'active' => false,
    'type'   => 'web'
])

@if ($type === 'web')
    <a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? "page": "false" }}" {{ $attributes }}> <!--Funciona para leitores de páginas saberem se o link levará para a pasta atual a página atual-->
        {{ $slot }}
    </a>
@else
    <a class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} block rounded-md px-3 py-2 text-base font-medium"
        aria-current="{{ $active ? "page": "false" }}" {{ $attributes }}> <!--Funciona para leitores de páginas saberem se o link levará para a pasta atual a página atual-->
        {{ $slot }}
    </a>
@endif

