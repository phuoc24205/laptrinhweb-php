@extends('dashboard')

@section('content')
<main class="form-login mb-5">
    <form enctype="multipart/form-data" class="w-full" action="{{ route('user.createUser') }}" method="POST">
        @csrf
        <h4 class="text-center">Màn hình đăng ký</h4>

        <!-- Username Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center gap-3">
            <label for="avatar">Chọn Avatar:</label>
            <input type="file" name="avatar" accept="image/*" required>
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="like" class="form-label">Like</label>
            <input type="text" class="form-control" id="like" name="like" value="{{ old('like') }}" required>
            @if ($errors->has('like'))
            <span class="text-danger">{{ $errors->first('like') }}</span>
            @endif
        </div>
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}" required>
            @if ($errors->has('facebook'))
            <span class="text-danger">{{ $errors->first('facebook') }}</span>
            @endif
        </div>

        <!-- Phone Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>

        <!-- Address Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
            @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>

        <!-- Email Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <!-- Password Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <!-- Confirm Password Input -->
        <div class="mt-3 d-flex align-items-center justify-content-between gap-3">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="form-button mt-5">
            <button type="button" class="btn text-primary">Đã có tài khoản</button>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
    </form>
</main>
@endsection