@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if (auth()->user()->hasRoles(['moderador']))
                        {{-- expr --}}
                        <div class="alert alert-success">You are a Moderator</div>

                    @elseif (auth()->user()->is_Admin)

                        <div class="alert alert-danger">you are an ADMINISTRATOR</div>

                    @else

                    <div class="alert-info alert">You are an USER</div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
