@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 class="font-bold text-3xl flex-1">Link</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Address
                    <br><br>
                    1. Go to >>><a href = "https://dandooshake.github.io/laravel_new/" target="_blank"> Github </a><<<
                    <br>
                    2. Go to >>><a href = "http://www.magice.co/" target="_blank"> Where I worked </a><<<
                    <br>
                    3. Go to >>><a href = "https://laracasts.com/series/laravel-from-scratch-2018" target="_blank"> Laracast </a><<<
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
