@extends('layouts.app')

@section('content')
    <div class="row py-2 bg-white shadow-sm">
        <div class="col-6">
            <h2><v-icon>mdi-plus</v-icon> Add Product</h2>
        </div>
        <div class="col-6">
            <a href="{{route('product.list')}}">
                <v-btn color="primary">Product list</v-btn>
            </a>
        </div>
    </div>
    <product-add></product-add>
@endsection
