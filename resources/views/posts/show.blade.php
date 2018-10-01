@extends('layouts.app')

@section('content')

    <h1 style="margin-top: 50px">{{$post->title}}</h1>
            <div class = "card card-body bg-light">
                <h4>{{$post->body}}</h4>
                <small>Written at {{$post->created_at}}</small>
            </div>
    <a href="/posts" class="btn btn-dark"> Back</a>

        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
        {!! Form::open (['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
        {!!Form::close()  !!}
@endsection