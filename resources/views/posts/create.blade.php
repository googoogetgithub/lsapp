@extends ('layouts.app')

@section('content')

    <h1>Create Post</h1>
    

    {!! Form::open(['action' => 'PostsController@store' , 'method'=>'POST' , 'class' => 'form']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            
            {{ Form::text('title', '' , ['class' => 'form-control' , 'placeholder'=>'Enter the title']) }}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}

            {{Form::textarea('body', '' , ['class' => 'form-control' , 'placeholder' => 'Content here' , 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Submit this form' , ['class'=>'btn btn-primary'])}}

        </div>

        {{csrf_field()}}
    {!! Form::close() !!}

@endsection
