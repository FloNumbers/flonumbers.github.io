@extends('layout')

@section('content')
<h1>Profile</h1>
    <h2>Florian Sole</h2>
    <img src='{{asset('/images/afbeelding.png')}}' width="100" height="100" class="pasfoto" />
    <br>
    <br>
    <br>
    <br>
    <br>
    <p class=parProfile>Bio</p>
    <p class=parProfile>kenmerken :</p>
    <div class="kenmerken">
        <ul>
            <li>Naam: Florian Jean Solé</li>
            <li>Leeftijd: 17 jaar</li>
            <li>Woonplaats: Vlissingen</li>
            <li>Favoriete artiesten: "Coheed and Cambria" en "The Dear Hunter"</li>
            <li>houdt van watersport</li>
        </ul>
    </div>
    <p class=parProfile>Hobby's :</p>
    <div class="hobbys">
        <ul class="UlProfile">
            <li>waterpoloër (keepertje)</li>
            <li>ex-wedstrijdzwemmer (oftewel ben best wel snel)</li>
            <li>gamer</li>
            <li>windsurfer</li>
            <li>pizza lover</li>
        </ul>
    </div>
@endsection
