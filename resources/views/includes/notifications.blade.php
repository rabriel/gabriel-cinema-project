<div class="container mt-5">
    <!--begin:: check if session has success -->
    @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible animated flipInX" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!--end:: check if session has success -->

    <!--begin:: error notifications -->
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible animated flipInX" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
<!--begin:: end notifications -->
</div>
