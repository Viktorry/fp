@extends('layouts.app')
@section('content')
<h1>{{$data['title']}}</h1>
     <?php  $services = $data['services']; ?>
        @if(count($services)>0)
            <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
@endsection