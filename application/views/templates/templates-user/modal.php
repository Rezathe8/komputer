<!-- login modal -->

<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your username & password to login</p>
                        </div>

                        <form class="row g-3 needs-validation" action="<?= base_url('member'); ?>" method="post" novalidate>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="username" class="form-control" id="username" required>
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0">Don't have account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Create an account</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end login-->

<!-- register modal -->

<div class="modal fade" id="registerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                            <p class="text-center small">Enter your personal details to create account</p>
                        </div>

                        <form class="row g-3 needs-validation" action="<?= base_url('member/daftar'); ?>" method="post" novalidate>
                            <div class="col-12">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Your Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="username" class="form-control" id="username" required>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Create Account</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end register-->