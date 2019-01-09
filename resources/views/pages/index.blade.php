@extends('layouts.app')

@section('content')

        <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Is Laravel good as they said? </p>


        <a href="/login">login</a> || 
        <a href="/register">register</a>
        </div>


@endsection        