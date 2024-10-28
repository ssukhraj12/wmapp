@extends('layouts.app')

@section('content')
    <example-component></example-component>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="text-h1">Vuetify Class</div>
                    <v-btn color="primary">Hello</v-btn>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
