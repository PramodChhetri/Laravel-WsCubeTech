@extends('layouts.main')

@push('title')
    <title>CustomerTrash-WsCube</title>
@endpush

@section('main-section')

<div class="bg-white p-8 rounded shadow-md w-full">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold mb-6">Customer Trash</h1>
        <a href="{{ route('customer.index') }}">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Back
            </button>
        </a>
    </div>
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
                    <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td class="py-2 px-4">{{ $customer->customer_id }}</td>
                        <td class="py-2 px-4">{{ $customer->name }}</td>
                        <td class="py-2 px-4">{{ $customer->email }}</td>
                        <td class="py-2 px-4">{{ $customer->gender }}</td>
                        <td class="py-2 px-4">{{ $customer->dob }}</td>
                        <td class="py-2 px-4">{{ $customer->address }}</td>
                        <td class="py-2 px-4">{{ $customer->state }}</td>
                        <td class="py-2 px-4">{{ $customer->country }}</td>
                        <td class="py-2 px-4">
                            @if ($customer->status==1)
                                <a href="">
                                    <span class="bg-green-500 text-white p-1 ">Active</span>
                                </a>
                            @else
                                <a href="">
                                    <span class="bg-red-500 text-white p-1 ">Inactive</span>
                                </a>
                            @endif
                        </td>
                        <td class="py-2 px-4">
                            <a href="{{ route('customer.restore',$customer->customer_id)}}">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                                    Restore
                                </button>
                            </a>
                            <a href="{{ route('customer.forcedelete',$customer->customer_id)}}">
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:shadow-outline-blue active:bg-red-800">
                                    Delete
                                </button>
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection


