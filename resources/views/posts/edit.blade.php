@extends ('layouts.app')

@section('content')

    <h1>Edit Post</h1>
    

    {!! Form::open(['action' => [ 'PostsController@update' , $post->id ] , 'method'=>'POST' , 'class' => 'form']) !!} 
        @method('PUT')
    

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            
            {{ Form::text('title', $post->title , ['class' => 'form-control' , 'placeholder'=>'Enter the title']) }}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}

            {{Form::textarea('body', $post->body , ['class' => 'form-control' , 'placeholder' => 'Content here' , 'id' => 'article-ckeditor'])}}

            
        </div>
        <div class="form-group">
            {{Form::submit('Submit this form' , ['class'=>'btn btn-primary'])}}

        </div>

    {!! Form::close() !!}

@endsection
