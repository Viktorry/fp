@extends('layouts.app')

@section('content')
        <h1 style="margin-top: 50px">Ovo moras da mi ispises</h1>
        @if(count($posts)>0)
      @foreach($posts as $post)
                <div class = "card card-body bg-light">
               <h4> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <small>Written at {{$post->created_at}}</small>
                </div>
               <br>
        @endforeach
                {{$posts->links()}}
        @else
                <p>No posts found</p>
        @endif
@endsection