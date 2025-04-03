@extends('dashboard')

@section('content')
<main class="list-user w-full">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Like</th>
                <th>Facebook</th>
                <th>Avatar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <th>{{ $user->name }}</th>
                <th>{{ $user->phone }}</th>
                <th>{{ $user->address }}</th>
                <th>{{ $user->email }}</th>
                <th>{{ $user->like }}</th>
                <th>{{ $user->facebook }}</th>
                <th>
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="">
                </th>
                <th class="action-links">
                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                </th>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</main>
@endsection