@extends('admin.dashboard')
@section('content')
    <section class="flex m-4 flex-col gap-4">
        @include('components.search')
        <div class="rounded-xl shadow-lg p-7 bg-white my-4 gap-4">
            <h1 class="text-5xl font-bold my-2">Good day, {{ Auth::user()->name }}!</h1>
            <h1>Have a nice working day!</h1>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-5">
            <div class="mb-8">
                <h1 class="text-4xl font-semibold">Patient Statistics</h1>
                <h1>Lorem ipsum dolor sit amet, consectetur</h1>
            </div>
            <div class="flex gap-8">
                <div
                    class="flex w-max h-48 py-4 px-2 justify-start border border-gray-700 items-center flex-col gap-2 rounded-md ">
                    <h1 class="text-md font-semibold">Total of patients</h1>
                    <h1 class="text-4xl font-bold">
                        
                        {{$totalPatients > 0 ? $totalPatients : 0}}
                        
                    </h1>
                </div>
                <div
                    class="flex w-max h-48 py-4 px-2 justify-start border border-gray-700 items-center flex-col gap-2 rounded-md ">
                    <h1 class="text-md font-semibold">New patients</h1>
                    <h1 class="text-4xl font-bold">
                        {{$newPatients > 0 ? $newPatients : 0}}

                    </h1>
                </div>
                <div
                    class="flex w-max h-48 py-4 px-2 justify-start border border-gray-700 items-center flex-col gap-2 rounded-md ">
                    <h1 class="text-md font-semibold">Satisfied Patients</h1>
                    <h1 class="text-4xl font-bold">N</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
