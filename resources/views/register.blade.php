@extends('layouts.main')

@push('title')
    <title>Register-WsCube</title>
@endpush

@section('main-section')


<div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6">Registration</h1>

    <form action="{{route('register')}}" method="POST">
        @csrf

        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md" required>
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md" required>
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md"
                required>
        </div>

        <!-- Confirm Password Input -->
        {{-- <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm
                Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="w-full px-3 py-2 border rounded-md" required>
        </div> --}}

        <!-- Register Button -->
        <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Register
        </button>
    </form>

    {{-- <p class="text-gray-600 mt-4">Already have an account? <a href="/login" class="text-blue-500">Login here</a> --}}
    </p>
</div>
    
@endsection

