@extends('layouts.main')

@push('title')
    <title>Customer-WsCube</title>
@endpush

@section('main-section')
<div class="bg-white p-8 rounded shadow-md w-full max-w-3xl m-auto">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold mb-6">{{$title}}</h1>
        <a href="{{ route('customer.index') }}">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                View Customer
            </button>
        </a>
    </div>

    <form action="{{$url}}" method="POST">
        @csrf

        <div class="mb-4">
            <!-- Row 1 -->
            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 mb-4">
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" value="{{ old('name', isset($customer) ? $customer->name : '') }}" id="name" name="name" class="w-full px-3 py-2 border rounded-md" required>
                        @error('name')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full px-2 mb-4">
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" value="{{ old('email', isset($customer) ? $customer->email : '') }}" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required>
                        @error('email')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md">
                        @error('password')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded-md">
                        @error('password_confirmation')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Gender -->
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                        <div class="flex">
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="gender" value="M" class="form-radio" {{ old('gender', isset($customer) ? $customer->gender : '') === 'M' ? 'checked' : '' }}>
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="gender" value="F" class="form-radio" {{ old('gender', isset($customer) ? $customer->gender : '') === 'F' ? 'checked' : '' }}>
                                <span class="ml-2">Female</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="O" class="form-radio" {{ old('gender', isset($customer) ? $customer->gender : '') === 'O' ? 'checked' : '' }}>
                                <span class="ml-2">Others</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth</label>
                        <input type="date" value="{{ old('dob', isset($customer) ? $customer->dob : '') }}" id="dob" name="dob" class="w-full px-3 py-2 border rounded-md" required>
                        @error('dob')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 mb-4">
                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                        <input type="text" value="{{ old('address', isset($customer) ? $customer->address : '') }}" id="address" name="address" class="w-full px-3 py-2 border rounded-md" required>
                        @error('address')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- State -->
                    <div class="mb-4">
                        <label for="state" class="block text-gray-700 text-sm font-bold mb-2">State</label>
                        <input type="text" value="{{ old('state', isset($customer) ? $customer->state : '') }}" id="state" name="state" class="w-full px-3 py-2 border rounded-md" required>
                        @error('state')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country</label>
                        <input type="text" value="{{ old('country', isset($customer) ? $customer->country : '') }}" id="country" name="country" class="w-full px-3 py-2 border rounded-md" required>
                        @error('country')
                            <span class="p-1 text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Submit
        </button>
    </form>
</div>
@endsection
