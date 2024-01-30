@extends('pelanggan.layout.index')

@section('content')
    <h4 class="mt-5">Best Seller</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0">  S | M | L | XL |</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
            <!-- Repeat the similar card structure for other items in the Best Seller section -->
        </div>
    </div>

    <h4 class="mt-5">New Product</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4">
        <div class="card" style="width:220px;">
            <div class="card-header m-auto" style="border-radius: 5px;">
                <img src="{{ asset('assets/images/blouse.png') }}" alt="baju 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0"> Blouse Women Purple </p>
                <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp. 175.000</p>
                <button class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
        <!-- Repeat the similar card structure for other items in the New Product section -->
    </div>
@endsection
