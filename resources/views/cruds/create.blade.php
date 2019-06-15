@extends('layout')

@section('content')

<form id='crudForm' action="{{'/crud/store'}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="EC"> EC </label>
        <input type="number" class="form-control" id="EC" name="EC" placeholder="Voer EC in" required>
    </div>

    <div class="row">
        <button type="submit">verstuur</button>
    </div>
@endsection
