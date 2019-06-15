@extends('layout')

@section('content')

<div class="TableCrud">
<table border="1" cellspacing="0">
    <tbody>
        <tr class="tabletop">
            <th class="tabletop">EC</th>
        </tr>
        {{-- @foreach ($crud as $cruds) --}}
        <tr>
            <td class="crudTD">{{ $crud->EC }}</td>
        </tr>
        {{-- @endforeach --}}
    </tbody>
</table>
</div>
<a href="/crud/{{$crud->id}}/edit">aanpassen</a>
<a href="/crud/create">Toevoegen</a>
@endsection
