<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="{{url('dashboard/profile')}}" class="navbar-brand font-weight-bold"><i class="fa fa-briefcase fa-fw fa-lg"></i> Portfolio Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{url('dashboard/profile')}}"><i class="fa fa-wrench fa-fw"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{url('/')}}"><i class="fa fa-graduation-cap fa-fw"></i> Portfolio</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{url('logout')}}" class="form-inline">
                        @csrf
                        <button class="btn btn-link nav-link font-weight-bold"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
