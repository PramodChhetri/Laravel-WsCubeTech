@extends('layouts.main')

@push('title')
    <title>Contact-WsCube</title>
@endpush

@section('main-section')

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    {!! Form::open([
        'route' => 'contact.submit', 
        'method' => 'POST',
        'id' => 'contact',
        'role' => 'form',
    ]) !!}

        @csrf

        <div class="mb-4">
            {!! Form::label('name', 'Name', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::text('name', null, ['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500']) !!}
        </div>

        <div class="mb-4">
            {!! Form::label('email', 'Email', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::email('email', null, ['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500', 'required'=>'', 'placeholder'=>'Enter Email']) !!}
        </div>

        <div class="mb-4">
            {!! Form::label('phone', 'Phone', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::tel('phone', null, ['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500']) !!}
        </div>

        <div class="mb-4">
            {!! Form::label('website', 'Website Name', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::text('website', null, ['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500']) !!}
        </div>

        <div class="mb-4">
            {!! Form::label('country', 'Country', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::select('country', ['USA' => 'United States', 'CA' => 'Canada', 'UK' => 'United Kingdom', 'IN' => 'India'], null, ['class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500']) !!}
        </div>

        <div class="mb-4">
            {!! Form::label('message', 'Message', ['class' => 'block text-gray-700 font-bold mb-2']) !!}
            {!! Form::textarea('message', null, ['rows' => 4, 'class' => 'w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500']) !!}
        </div>

        <div class="mb-4">
            {!! Form::submit('Submit', ['class' => 'bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800']) !!}
        </div>
        
    {!! Form::close() !!}
</div>

@endsection
