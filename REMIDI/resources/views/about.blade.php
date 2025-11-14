@extends('layouts.layout2')

@section('title', 'Home')

@section('content')

<div class="row g-4">

    <!-- CARD 1 -->
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <img src="{{ asset('images/carte.png') }}" class="card-img-top" alt="isal">

            <div class="card-body">
                <h5 class="card-title fw-bold">RAHARDI RAHMAT PAISAL</h5>
                <p class="card-text">
                    begandang is in my blood cause all the projects wont solve itself 😎
                </p>
                <p class="text-muted small mb-0">2301010084</p>
            </div>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <img src="{{ asset('images/jaya.jpg') }}" class="card-img-top" alt="jayek">

            <div class="card-body">
                <h5 class="card-title fw-bold"> I KETUT BAGUS PURNAJAYA</h5>
                <p class="card-text">wibuuu nolep</p>
                <p class="text-muted small mb-0">2301010082</p>
            </div>
        </div>
    </div>

</div>

@endsection
