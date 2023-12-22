@extends('layouts.main')

@push('title')
    <title>Customer-WsCube</title>
@endpush

@section('main-section')


<div class="bg-white p-8 rounded shadow-md w-full max-w-3xl m-auto">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold mb-6">Customer</h1>

        <a href="{{route('viewCustomerDetails')}}">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                View Customer
            </button>
        </a>
    </div>

    <form action="{{ route('customerInsert') }}" method="POST">
        @csrf

        <div class="mb-4">
            <!-- Row 1 -->
            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 mb-4">
                    <!-- Name -->
                    <x-input type="text" id="name" name="name" label="Name" />
                </div>
                <div class="w-full px-2 mb-4">
                    <!-- Email -->
                    <x-input type="email" id="email" name="email" label="Email" />
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Password -->
                    <x-input type="password" id="password" name="password" label="Password" />
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Confirm Password -->
                    <x-input type="password" id="password_confirmation" name="password_confirmation" label="Confirm Password" />
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Gender -->
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                        <div class="flex">
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="gender" value="M" class="form-radio" />
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="gender" value="F" class="form-radio" />
                                <span class="ml-2">Female</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="O" class="form-radio" />
                                <span class="ml-2">Others</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Date of Birth -->
                    <x-input type="date" id="dob" name="dob" label="Date of Birth" />
                </div>
            </div>
            <!-- Row 2 -->
            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 mb-4">
                    <!-- Address -->
                    <x-input type="text" id="address" name="address" label="Address" />
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- State -->
                    <x-input type="text" id="state" name="state" label="State" />
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Country -->
                    <x-input type="text" id="country" name="country" label="Country" />
                </div>
            </div>
        </div>

        <!-- Register Button -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Register
        </button>
    </form>

    <p class="text-gray-600 mt-4">Already have an account? <a href="/login" class="text-blue-500">Login here</a></p>
</div>

@endsection
