<x-layout>
    <x-slot:title>
        Jobs Page
    </x-slot:title>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Jobs List.</h1>

    <p><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.</p>
    
    
</x-layout>