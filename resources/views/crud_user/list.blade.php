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
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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
                    @if($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="50">
                    @else
                    No image
                    @endif
                </th>
                <th>
                    {{-- Danh sách role với link --}}
                    @foreach($user->roles as $role)
                    <a href="/read-role?id={{ $role->id }}" class="badge bg-info text-white" style="text-decoration: none;">
                        {{ $role->name }}
                    </a>

                    @endforeach
                </th>
                <th class="action-links">
                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</main>
{{ $users->links('pagination::bootstrap-5') }}
@endsection