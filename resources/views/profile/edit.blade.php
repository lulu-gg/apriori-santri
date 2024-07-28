@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="h4 text-primary">Profile</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small class="form-text text-muted">Leave blank to keep current password</small>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>

        <form method="POST" action="{{ route('profile.destroy') }}" class="mt-4">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
@endsection
