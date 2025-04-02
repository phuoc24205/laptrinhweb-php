@extends('dashboard')

@section('content')
<main class="form-login mb-5 w-full">
    <form class="w-full" method="POST" action="{{ route('user.authUser') }}">
        @csrf
        <h4 class="text-center">Màn hình đăng nhập</h4>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="email" class="form-label">Username</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mb-3 form-check input-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
        </div>
        <div class="form-button d-flex justify-content-between">
            <button type="button" class="btn text-primary">Quên mật khẩu</button>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </div>
    </form>
</main>
@endsection