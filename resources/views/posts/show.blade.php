@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-8">
                        <img src="{{asset("storage/".$post["image"])}}" alt="post img">
                </div>
                <div class="col-4">
                        <h3>{{$post->user->username}}</h3>
                        <p>{{$post->caption}}</p>
                </div>
        </div>
</div>

@endsection