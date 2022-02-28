<!-- begin:: register modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <form method="post" action="{{ route('frontend.register') }}">
            @csrf
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title text-primary py-3" id="exampleModalLabel">Register to Book</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-md-12 text-center">
                            <p>Have account already, <a href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal"> click here</a> to login.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-primary m-auto mb-4">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end:: register modal -->


<!-- begin:: login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title text-primary py-3" id="exampleModalLabel">Login to Book</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="col-md-12 text-center">
                            <p>No account yet, <a href="#registerModal" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal"> click here</a> to register.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-primary m-auto border-0 mb-4">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end:: login modal -->


