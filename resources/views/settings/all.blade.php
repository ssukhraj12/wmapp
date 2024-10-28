@extends('layouts.app')

@section('content')
    <div class="row bg-white shadow-sm py-3">
        <div class="col-12">
            <h2><i class="iconify" data-icon="cil:settings"></i>Settings</h2>
        </div>
    </div>
    <div id="sett" class="row px-lg-4 mt-3 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center g-4">
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.general')}}">
                <div class="card-header h4">
                    <i class="iconify" data-icon="cil:settings"></i>
                    <span class="fw-semibold">General</span>
                </div>
                <div class="card-body">
                    Set company wide settings like currency, weight units, logo, tax numbers and more
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="bi:shop"></i>
                    <span class="fw-semibold">Marketplaces</span>
                </div>
                <div class="card-body">
                    Connect and sync your products and orders from your marketplaces and ecommerce platforms.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="la:shipping-fast"></i>
                    <span class="fw-semibold">Shipping Carriers</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="carbon:delivery-parcel"></i>
                    <span class="fw-semibold">Delivery Methods</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="carbon:subnet-acl-rules"></i>
                    <span class="fw-semibold">Rules</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="cil:print"></i>
                    <span class="fw-semibold">Printing Templates</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="mdi:email-fast-outline"></i>
                    <span class="fw-semibold">Email Templates</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="la:users-cog"></i>
                    <span class="fw-semibold">Customers</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card text-decoration-none" href="{{route('settings.all')}}">
                <div class="card-header h3">
                    <i class="iconify" data-icon="material-symbols:warehouse-outline"></i>
                    <span class="fw-semibold">Warehouses</span>
                </div>
                <div class="card-body">
                    Connect your shipping carriers so you can create shipping labels.
                </div>
            </a>
        </div>


    </div>
@endsection
