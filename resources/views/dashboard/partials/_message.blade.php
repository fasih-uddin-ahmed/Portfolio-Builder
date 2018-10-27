@if(session('success'))
    <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session('success')}}
    </div>
@endif
