@extends('main')
@section('title', 'Cart')
<style>
    body{
        background-color: rgb(243, 243, 243) !important;
    }
    img{
        width: 150px;
        height: 150px;
    }
    .cart_command{
        height: 200px;
    }
    .description{
        text-align: justify
    }

</style>
@section("content")
    <section class="my-4 container mx-auto row d-flex justify-content-between">
        <div class="col-8 bg-white rounded-1 p-4">
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('images/img_3.jpg')}}" alt="">
                </div>
                <div class="col-7">
                    <h4 class="fw-bolder">Product 1</h4>
                    <p class="mt-3 lh-lg col-11 description">Consectetur adipisicing elit. Doloremque, nihil ex? Nisi laboriosam odit assumenda sunt! Quidem commodi deserunt corporis?</p>
                </div>
                <div class="col-2 text-end">
                    <h4 class="text-warning ">430.00dh</h4>
                    <h6 class="text-danger "><del>600.00dh</del> </h6>
                </div>
            </div>
            <div class="d-flex justify-content-between">                
                <div>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </div>
                <div>
                    <button class="btn btn-warning">+</button>
                    <span class="px-4">1</span>
                    <button class="btn btn-warning">-</button>
                </div>
                
            </div>
        </div>
        <div class="cart_command col-3 bg-white rounded-1 p-4">
            <h5 class="fw-bolder">Résumer du panier</h5>
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="my-4">Total</h5>
                <h4 class="text-warning">430.00dh</h4>
            </div>
            <button class="btn btn-warning">Command</button>
        </div>
    </section>
   
@endsection
