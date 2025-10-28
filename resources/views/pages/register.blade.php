@extends('layouts.auth')

@push('styles')
    @vite('resources/css/app.css')
@endpush

@section('title', 'NoteTracker - Registration')

@section('content')

<div class="text-white min-h-screen grid grid-cols-2">
    <div class="bg-stone-700">
    </div>
    <div class="bg-violet-950 flex items-center justify-center">
        <form method="POST" action="{{ route('register') }}" class="border-2 rounded border-slate-500 p-4 flex flex-col gap-4 ">
            @csrf
            <div class="flex flex-col gap-4 ">
                <label for="name" class="font-bold">Username:</label>
                <input class="border border-slate-600 px-2 py-1  text-black" type="text" name="name" id="name" value="{{ old('name') }}" >

                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col gap-4">
                <label for="email" class="font-bold">Email:</label>
                <input class="border border-slate-600 px-2 py-1 text-black" type="text" name="email" id="email" value="{{ old('email') }}" >
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col gap-4">
                <label for="password" class="font-bold">Password:</label>
                <input class="border border-slate-600 px-2 py-1 text-black" type="password" name="password" id="password">
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>


            <div class="flex flex-col gap-4">
                <label for="confirm_password" class="font-bold">Confirm Password:</label>
                <input class="border border-slate-600 px-2 py-1 text-black" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="flex items-center gap-2">
                <button class="border border-slate-200 text-white px-2 py-1 cursor-pointer" type="submit">Register</button>
                <a href="{{ route('login.form') }}" class="border border-slate-200 text-white px-2 py-1 cursor-pointer">Login</a>
            </div>
        </form>
    </div>
</div>

@endsection
