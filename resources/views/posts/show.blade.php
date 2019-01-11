@extends('layouts.app')


@section('content')

    <div class="well">
        <a href="/posts" class="btn btn-defaut">Go Back</a>
        <h1>{{$post->title}}</h1>
        

        <p>{!!$post->body!!}</p>
        <hr> 
        <small>written on {{$post->created_at}}</small>

        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        
        {!! Form::open(['action' => ['PostsController@destroy' , $post->id] , 'method' => 'POST' , 'class' => 'pull-right' ])!!}
            @method('DELETE')

            {!! Form::submit('Delete' ,  ['class' => 'btn btn-danger' ]) !!}

        {!! Form::close() !!}

    </div>

@endsection