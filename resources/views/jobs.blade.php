
<x-layout>
    <x-slot:heading>
        job listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/1">
                <strong>{{$job ['title'] }}</strong> : pays {{$job ['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
