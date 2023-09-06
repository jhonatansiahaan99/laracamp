@extends('layouts.app') {{-- template html awal, memanggil folder layouts, dan file app.blade.php --}}

{{-- setiap content dibuat section di buat content karna agar di panggil oleh app.blade.php karna app.blade.php adalah html utama nya --}}
@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{ asset('images/ill_register.png') }}" height="400" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        WHAT A DAY!
                    </p>
                    <h2 class="primary-header ">
                        Berhasil Checkout
                    </h2>
                    <a href="#" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
