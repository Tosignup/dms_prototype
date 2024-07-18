@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>
    <section class="flex flex-col gap-2 m-6 rounded-md p-4  bg-white shadow-md">
        <h1 class="text-3xl font-bold mb-6">Appointment Submissions</h1>
        <table class="">
            <thead>
                <tr class="border">
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Birth date</th>
                    <th class="py-2 px-4 border">Phone number</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Zip code</th>
                    <th class="py-2 px-4 border">Appointment Date</th>
                    <th class="py-2 px-4 border">Preferred time</th>
                    <th class="py-2 px-4 border">Notes</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($appointments as $submission)
                    <tr class="text-center">
                        <td class="py-2 px-4 border">{{ $submission->firstname }} {{ $submission->lastname }}</td>
                        <td class="py-2 px-4 border">{{ $submission->date_of_birth}}</td>
                        <td class="py-2 px-4 border text-left max-w-2xl">{{ $submission->phone_number }}</td>
                        <td class="py-2 px-4 border">{{ $submission->email }}</td>
                        <td class="py-2 px-4 border">{{ $submission->zip_code}}</td>
                        <td class="py-2 px-4 border">{{ $submission->appointment_date }}</td>
                        <td class="py-2 px-4 border">{{ $submission->preferred_time}}</td>
                        <td class="py-2 px-4 border">{{ $submission->notes }}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </section>
@endsection
