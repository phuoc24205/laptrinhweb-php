@extends('dashboard')

@section('content')
<main class="form-login mb-5">
    <form class="w-full" method="POST" action="{{ route('user.postUser') }}">
        @csrf
        <h4 class="text-center">Màn hình đăng ký</h4>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="form-button mt-5">
            <button class="btn text-primary">Đã có tài khoản</button>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
    </form>
</main>
@endsection