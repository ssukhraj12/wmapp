@extends('layouts.app')

@section('content')
    <div class="row py-2 bg-white shadow-sm">
        <div class="col-6">
            <h2><v-icon>mdi-view-list</v-icon>All Products</h2>
        </div>
        <div class="col-6">
            <a href="{{route('product.add')}}">
                <v-btn color="primary">Add Product</v-btn>
            </a>
        </div>
    </div>
    <product-list></product-list>
@endsection

