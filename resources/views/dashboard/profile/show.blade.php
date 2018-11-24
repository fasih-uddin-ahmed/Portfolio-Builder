@extends('dashboard.index')

@section('content')
    @include('dashboard.partials._message')
    <div class="card mb-5">
        <div class="card-header font-weight-bold">
            User Profile
        </div>
        <div class="card-body">
            @include('dashboard.partials._errors')
            <form method="POST" action="{{route('profile_update', auth()->user()->id)}}">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="{{old('first_name', $profile->first_name)}}" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="{{old('last_name', $profile->last_name)}}"class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="tagline">Tag line</label>
                        <input type="text" id="tagline" name="tagline" value="{{old('tagline', $profile->tagline)}}"class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="qualification">Qualification</label>
                        <textarea id="qualification" name="qualification" class="form-control">{{old('qualification', $profile->qualification)}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="skills">Skills</label>
                        <textarea id="skills" name="skills" class="form-control">{{old('skills', $profile->skills)}}</textarea>
                    </div>
                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" valu="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-check-circle-o fa-fw"></i>Create/Update Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
