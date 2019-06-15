@extends('layout')

@section('content')

<div class="TableCrud">
<table border="1" cellspacing="0">
    <tbody>
        <tr class="tabletop">
            <th class="tabletop">EC</th>
        </tr>
        @foreach ($crud as $cruds)
        <tr onclick="window.location.href='/crud/{{$cruds->id}}'">
            <td class="crudTD">{{ $cruds->EC }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<a href="/crud/create">Toevoegen</a>
@endsection
