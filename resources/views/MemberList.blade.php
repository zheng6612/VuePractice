@extends('layout.layout')
@section('title')
    <title>會員列表</title>
    @endsection

@section('content')
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4" v-for="product in products">
                            <product-item
                                v-bind:made_in="product.made"
                                v-bind:name="product.productName"
                                :price = "product.productPrice"
                                :img ="product.src"
                            >

                            </product-item>
                        </div>
                    </div>

                </div>
            </div>
        </div>






    </div>
@endsection



