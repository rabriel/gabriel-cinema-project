<header>
    <div class="collapse bg-primary" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About {{ env('APP_NAME') }} App</h4>
                    <p class="text-muted">Film booking application to demonstrate my understanding and best practices of web development processes, technologies through the following technologies used in this app, UI/UX Design, Bootstrap Frame, CSS, JAVAScript, PHP/Laravel and MySQL.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    @guest
                        <h4 class="text-white">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)" class="text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                            <li><a href="javascript:void(0)" class="text-white" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
                        </ul>
                    @else

                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>{{ env('APP_NAME') }} App</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
        </div>
    </div>
</header>
