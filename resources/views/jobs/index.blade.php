<x-layout>
    <x-slot name="title">Create new Job</x-slot>
    <h1>Available Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{$job}}</li>
        @empty
            <p>No jobs available</p>
        @endforelse
    </ul> 
</x-layout>

    