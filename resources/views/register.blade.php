@extends('layouts.main')

@push('title')
    <title>Register-WsCube</title>
@endpush

@section('main-section')


<div class="bg-white p-8 rounded shadow-md w-full max-w-3xl m-auto">
    <h1 class="text-2xl font-bold mb-6">Registration</h1>

    <form action="{{route('register.store')}}" method="POST">
        @csrf

        @php
            $demo = 1;
        @endphp
        <x-input type="text" id="name" name="name" label="Name" :demo="$demo" />
        <x-input type="email" id="email" name="email" label="Email"/>
        <x-input type="password" id="password" name="password" label="Password"/>
        <x-input type="password" id="password_confirmation" name="password_confirmation" label="Confirm Password"/>

        <!-- Register Button -->
        <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Register
        </button>
    </form>

    <p class="text-gray-600 mt-4">Already have an account? <a href="/login" class="text-blue-500">Login here</a>
    </p>
</div>
    
@endsection

