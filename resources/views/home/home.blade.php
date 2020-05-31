@extends('welcome')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="text-center">
            <h1 class="display-4">Life of <i style='color: red;'>Cin</i></h1>
            <p class="lead">Chronicling the life and adventures of one of the world's most distinguished travelers..</p>
            <br>
            <br>
            <br>
            <br>

            <h1>COMING SOON</h1>
        </div>
    </div>
</div>

<style>
    .jumbotron {
        background-image: url('https://images4.alphacoders.com/909/909591.jpg');
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 600px;
        color: white;
    }
</style>

@include('home.recent_countries')

@endsection