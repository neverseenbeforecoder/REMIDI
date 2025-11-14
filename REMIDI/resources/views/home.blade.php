@extends('layouts.layout2')

@section('title', 'Halaman Beranda')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-12 mb-5">
                <div class="card border-0 shadow-sm">
                    <img src="{{ $post['image'] }}" class="card-img-top" alt="{{ $post['title'] }}">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold">{{ $post['title'] }}</h4>
                        <p class="card-text text-muted">{{ $post['subtitle'] }}</p>
                        <a href="/post/{{ $post['id'] }}" class="text-decoration-none">Read More →</a>
                    </div>
                </div>
            </div>
        @endforeach
        <h3> total post yang ada disini: {{$totalposts}}</h3>
    </div>
</div>
@endsection
