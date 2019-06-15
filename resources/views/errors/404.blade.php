@extends('layout')

@section('content')

<style>
    body {
        background-image: url('images/starTrekError.jpg');
    }

    .H1404 {
        text-align: center;
        color: #ffffff;
    }

    .Container404 {
        text-align: center;
    }
</style>

<br>
<br>
<br>
<br>
<br>
<br>

<h1 class="H1404">404 error</h1>
<h3 class="H1404">You have warped to the wrong kwadrant</h3>
<div class="Container404">
    <a href="/"><h3>click here to go back to the home page</h3></a>
</div>
@endsection
