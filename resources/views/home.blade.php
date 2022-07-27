@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2> <b>สวัสดีคุณ : </b>{{ Auth::user()->name }}</h2>
                    <h2> <b>Email : </b>{{ Auth::user()->email }}</h2>
                    <h2> <b>phone : </b>{{ Auth::user()->phone }}</h2>
                    <h2> <b>address : </b>{{ Auth::user()->address }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
