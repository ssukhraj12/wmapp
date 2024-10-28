@extends('layouts.app')

@section('content')
    <div class="row bg-white shadow-sm py-3">
        <div class="col-12">
            <h2><i class="iconify" data-icon="cil:settings"></i>Settings</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="d-flex align-items-start">
                <div class="nav flex-column bg-dark me-3 w-25" id="settings-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">General Settings
                    </button>
                    <button class="nav-link" id="taxes-tab" data-bs-toggle="pill" data-bs-target="#taxes" type="button" role="tab" aria-controls="taxes" aria-selected="false">Country Taxes
                    </button>
                    <button class="nav-link" id="brands-tab" data-bs-toggle="pill" data-bs-target="#brands" type="button" role="tab" aria-controls="brands" aria-selected="false">Product Brands
                    </button>
                    <button class="nav-link" id="inventory-tab" data-bs-toggle="pill" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory
                    </button>
                    <button class="nav-link" id="listlinking-tab" data-bs-toggle="pill" data-bs-target="#listlinking" type="button" role="tab" aria-controls="listlinking" aria-selected="false">Listings Linking
                    </button>
                </div>
                <div class="tab-content w-75" id="settingsContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
                        <div class="card">
                            Set
                        </div>
                    </div>
                    <div class="tab-pane fade" id="taxes" role="tabpanel" aria-labelledby="taxes-tab" tabindex="0"></div>
                    <div class="tab-pane fade" id="brands" role="tabpanel" aria-labelledby="brands-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <add-brand></add-brand>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-decoration-underline">Inventory Settings</h4>
                                <form action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="changestock">
                                        <label class="form-check-label" for="changestock">
                                            Require a reason when user changes stock level manually
                                        </label>
                                        <div class="small text-danger">Once the setting is turned on, any users who change stock quantity will be required to provide a reason.</div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="autoallocate" checked>
                                        <label class="form-check-label" for="autoallocate">
                                            Automatically allocate available inventory to orders
                                        </label>
                                    </div>
                                    <button class="btn btn-info btn-sm mt-3 ms-5">Save Inventory Settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="listlinking" role="tabpanel" aria-labelledby="listlinking-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-decoration-underline">Listings Linking</h4>
                                <form action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amarket" checked>
                                        <label class="form-check-label" for="amarket">
                                            Automatic linking of matching listings within an Amazon marketplace
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="aregion" checked>
                                        <label class="form-check-label" for="aregion">
                                            Automatic linking of matching listings within an Amazon region
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="afba">
                                        <label class="form-check-label" for="afba">
                                            Automatic linking of matching Amazon listings across FBA and FBM
                                        </label>
                                    </div>
                                    <button class="btn btn-info btn-sm mt-3 ms-5">Save Inventory Settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
