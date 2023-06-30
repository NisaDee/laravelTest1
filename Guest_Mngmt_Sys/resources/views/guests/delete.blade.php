@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h1>Delete Guest</h1>

    <p>Are you sure you want to delete this guest?</p>
    <p><strong>Name:</strong> {{ $guest->name }}</p>
    <p><strong>Email:</strong> {{ $guest->email }}</p>

    <form action="{{ route('guests.destroy', $guest->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
</div>
</div>
</div>

@endsection