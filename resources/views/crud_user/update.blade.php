@extends('dashboard')

@section('content')
<main class="form-login mb-5 w-full px-5">
    <form class="w-full" enctype="multipart/form-data" method="POST" action="{{ route('user.postUpdateUser') }}">
        @csrf
        <input name="id" type="hidden" value="{{ $user->id }}">
        <h4 class="text-center mb-4">Màn hình cập nhật</h4>

        <div class="mb-3 row">
            <label for="name" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="mt-3 d-flex align-items-center gap-3">
            <label for="avatar">Chọn Avatar:</label>
            <input type="file" name="avatar" accept="image/*" required>
            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="Avatar" width="100">
        </div>
        <div class="mb-3 row">
            <label for="like" class="col-sm-4 col-form-label">Like</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="like" name="like" value="{{ $user->like }}" required>
                @if ($errors->has('like'))
                <span class="text-danger">{{ $errors->first('like') }}</span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="facebook" class="col-sm-4 col-form-label">Facebook</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $user->facebook }}" required>
                @if ($errors->has('facebook'))
                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="phone" class="col-sm-4 col-form-label">Phone</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="address" class="col-sm-4 col-form-label">Address</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
                @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-end gap-5 align-items-center mt-4">
            <a href="#" class="text-primary">Đã có tài khoản</a>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</main>
@endsection