
<x-layout>
    <x-slot:heading>
        job listings
    </x-slot:heading>

    <h2>{{$job ['title']}}</h2>

    <p>
        this job pay { $job ['salary'] }} per year.
    </p>
</x-layout>
