@extends('dashboard.index')

@section('content')
    @include('dashboard.partials._message')
    <div class="card mb-5">
        <div class="card-header font-weight-bold">
            Create Project
        </div>
        <div class="card-body">
            @include('dashboard.partials._errors')
            <form method="POST" action="{{route('project_store', auth()->user()->id)}}">
                @include('dashboard.project._form')
                <div class="form-group text-center mt-3">
                    <button type="submit" valu="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-check-circle-o fa-fw"></i>Create Project
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
