<x-layout>
    <x-slot:title>
        Jobs Page
    </x-slot:title>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Jobs List.</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{$job['id']}}">
                    <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
    
</x-layout>