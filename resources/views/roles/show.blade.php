@extends('dashboard')

@section('content')
<main class="role-detail w-full">
    <h2>Chi tiết Role: {{ $role->name }}</h2>

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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($role->users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->like }}</td>
                <td>{{ $user->facebook }}</td>
                <td>
                    @if($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="50">
                    @else
                    No image
                    @endif
                </td>
                <td>
                    {{-- Hiển thị tất cả role của user, nếu có nhiều hơn 1 thì mỗi role sẽ là 1 link --}}
                    @foreach($user->roles as $role)
                    <a href="" class="badge bg-info text-white" style="text-decoration: none;">
                        {{ $role->name }}
                    </a>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn">View</a>
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn">Edit</a>
                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</main>
@endsection