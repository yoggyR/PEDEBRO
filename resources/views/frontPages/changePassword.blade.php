@extends('frontLayouts.main')
@section('frontContent')
    <div class=" mt-4 mb-5 bg-white">
        <div class="container py-5">
            <h2 class="mb-4 fw-bold">Change password</h2>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Your current password">
                <label for="floatingInput">Your current password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="New password">
                <label for="floatingPassword">New password</label>
            </div>
            <button type="button" class="btn btn-outline-dark">Save changes</button>
        </div>
    </div>
@endsection
