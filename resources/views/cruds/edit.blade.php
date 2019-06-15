@extends('layout')

@section('content')

<form id='crudForm'  method="POST" action="{{ url("/crud/$crud->id") }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="EC"> EC </label>
        <input type="number" class="form-control" id="EC" name="EC" placeholder="Voer EC in" value="{{$crud->EC}}">
    </div>

    <div class="row">
        <button type="submit">verstuur</button>
    </div>
</form>
@endsection
