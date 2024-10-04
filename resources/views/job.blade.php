<x-layout>
    <x-slot:heading>
        job listings
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
