<div class="modal fade" id="signIn" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signInLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26" height="26"
                        class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="text-center mb-3">Welcome</h2>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <a class="w-100 btn btn-lg btn-outline-dark" type="button" href="/job">Sign in</a>
                <label class="mt-2">Don't have an account? <a href="" data-bs-toggle="modal"
                        data-bs-target="#register" style="text-decoration: none;">Register now</a></label>
                <label><a href="" data-bs-toggle="modal" data-bs-target="#forgot" style="text-decoration: none;">Forgot
                        password?</a></label>
            </div>
            <div class="modal-footer">
                <label class="me-auto">&COPY; 2022 PEDEBRO.</label>
            </div>
        </div>
    </div>
</div>
@include('log.register')
@include('log.forgot')
