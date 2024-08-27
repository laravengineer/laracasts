{{-- Esta é uma forma de passar atributos para um component, ao declarar um <x-nav-link href=""></x-nav-link>, o href automaticamente passará para essa tag. --}}
<a {{ $attributes }}>{{ $slot }}</a>