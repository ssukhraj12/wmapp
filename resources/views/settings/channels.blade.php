@extends('layouts.app')

@section('content')
    <div class="row py-2 bg-white shadow-sm">
        <div class="col-md-6">
            <h2> <i class="iconify" data-icon="bi:shop"></i>All Channels</h2>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addStore">
                <i class="iconify" data-icon="fa-plus"></i>
                Add New Store
            </a>
        </div>
    </div>
@endsection
