@extends('dashboard')

@section('content')
<main class="view-form row justify-content-center mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="text-center mb-4">Màn hình chi tiết</h4>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">{{ $messi->name }}</p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext">{{ $messi->email }}</p>
                    </div>
                </div>
                <p>{{ $messi }}</p>
                <div class="text-end mt-4">
                    <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection