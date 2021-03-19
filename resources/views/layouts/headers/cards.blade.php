<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">



            @if (session()->has('status'))
            <div class="row mt-3 mb--4">
                <div class="col-xl-3 col-lg-6 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-text"><strong>{{ session('status') }}</strong></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
