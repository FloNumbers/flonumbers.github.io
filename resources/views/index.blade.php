@extends('layout')

@section('content')
<div class="index_text">
        <h1>HELLO WORLD</h1>

        <h4>Het HBO-niveau past bij mij omdat het bij mij tijdens mijn middelbare school tijd heel erg bleek dat een
            praktische werkomgeving veel beter voor mij werkt.<br> Tijdens mijn havo periode kreeg ik steeds meer het gevoel dat
            theorie uit mijn hoofd stampen niet voor mij was.<br> Dat is ook een reden waarom ik vind dat deze opleiding bij
            mij past. want tot nu toe zijn alle lessen heel praktisch geweest en daardoor leer ik veel beter.<br> Na 2
            weken vind ik HBO-ICT steeds leuker!
        </h4>
        <img src="{{secure_asset('/images/afbeelding.png')}}" class="pasfoto" />
        <img src="{{secure_asset('/images/C_Language_meme.jpg')}}" class="meme" />
    </div>
@endsection
