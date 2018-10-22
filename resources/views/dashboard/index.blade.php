@extends('layouts.base')

@section('main')
    <header>
        @include('dashboard.partials._header')
    </header>
    <main class="container">
        <div class="row mt-5">
            <aside class="col-sm-3">
                @include('dashboard.partials._menu')
            </aside>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        User Profile
                    </div>
                    <div class="card-body">
                        hello user
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-primary pt-2">
        @include('dashboard.partials._footer')
    </footer>
@endsection
