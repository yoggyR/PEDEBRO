<div class="modal fade" id="register" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26" height="26"
                        class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <h2 class="mb-4">Register</h2>
                <p>Please fill in the actual data.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Full name">
                            <label for="floatingInput">Full name</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Id card number">
                            <label for="floatingInput">ID card number</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Phone number">
                            <label for="floatingInput">Phone number</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Email address">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Password">
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Confirm password">
                            <label for="floatingInput">Confirm password</label>
                        </div>
                    </div>
                </div>
                <a class="w-100 btn btn-lg btn-outline-dark mt-3" type="button" href="" data-bs-toggle="modal"
                data-bs-target="#verification">Sign up</a>
                <label class="mt-2">Already have an account? <a href="" data-bs-toggle="modal"
                        data-bs-target="#signIn" style="text-decoration: none;">Sign in</a></label>
            </div>
            <div class="modal-footer">
                <label class="me-auto">&COPY; 2022 PEDEBRO.</label>
            </div>
        </div>
    </div>
</div>
@include('log.emailVerification')
