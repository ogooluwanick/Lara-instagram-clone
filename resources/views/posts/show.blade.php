@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row  post_Row">
                <div class="col-8">
                        <img src="{{asset("storage/".$post["image"])}}" class="w-75" alt="post img">
                </div>
                <div class="col-4">
                        <div class="">
                                <div class="d-flex  align-items-center">
                                        <div class="pr-4">
                                                <img src="{{asset("storage/".$post->user->profile->image) }}" class="w-100 rounded-circle" style="max-width:50px;" alt="post image">
                                        </div>
                                        <div class="d-flex">
                                                <div class="font-weight-bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></div>
                                                <span class="ml-2 font-weight-bold " >• </span>
                                                <a href="#" class="ml-2 font-weight-bold "  style="color:#0095f6;">Follow</a>
                                        </div>
                                </div>
                        </div>
                        <hr>
                        <p>
                                <span class="font-weight-bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>
                                {{$post->caption}}
                        </p>
                </div>
        </div>
</div>

@endsection