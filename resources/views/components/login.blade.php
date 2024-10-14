<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->

                <form method="POST" class="md-float-material form-material" action="{{ route('login') }}">
                @csrf  
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Sign In</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 form-primary">
                                <input type="email" name="email" id="email" class="form-control" required
                                    placeholder="Your Email Address">
                                <span class="form-bar"></span>
                            </div>
                            <div class="mb-3 form-primary">
                                <input type="password" name="password" id="password" class="form-control" required
                                    placeholder="Password">
                                <span class="form-bar"></span>
                            </div>
                            <div class="row m-t-25 text-start">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <label class="form-label">
                                            <input type="checkbox" value="">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-end f-right">
                                        <a href="auth-reset-password.html" class="text-end f-w-600"> Forgot
                                            Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-md waves-effect waves-light text-center m-b-20">
                                            Sign in
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                </form>
                <!-- end of form -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>