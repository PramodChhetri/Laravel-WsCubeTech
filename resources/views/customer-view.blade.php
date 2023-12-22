@extends('layouts.main')

@push('title')
    <title>CustomerView-WsCube</title>
@endpush

@section('main-section')

<div class="bg-white p-8 rounded shadow-md w-full">

    <h1 class="text-2xl font-bold mb-6">Customer View</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Gender</th>
                    <th class="py-2 px-4">Date of Birth</th>
                    <th class="py-2 px-4">Address</th>
                    <th class="py-2 px-4">State</th>
                    <th class="py-2 px-4">Country</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Created At</th>
                    <th class="py-2 px-4">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td class="py-2 px-4">{{ $customer->id }}</td>
                        <td class="py-2 px-4">{{ $customer->name }}</td>
                        <td class="py-2 px-4">{{ $customer->email }}</td>
                        <td class="py-2 px-4">{{ $customer->gender }}</td>
                        <td class="py-2 px-4">{{ $customer->dob }}</td>
                        <td class="py-2 px-4">{{ $customer->address }}</td>
                        <td class="py-2 px-4">{{ $customer->state }}</td>
                        <td class="py-2 px-4">{{ $customer->country }}</td>
                        <td class="py-2 px-4">
                            @if ($customer->status==1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $customer->created_at->format('Y-m-d') }}</td>
                        <td class="py-2 px-4">{{ $customer->updated_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection


