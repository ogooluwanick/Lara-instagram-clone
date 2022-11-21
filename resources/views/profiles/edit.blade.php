@extends('layouts.app')

@section('content')
        <div class="container ">
                <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">                          {{--<enctype="multipart/form-data"> is important for file upload--}}
                        @csrf
                        @method("PATCH")

                        <div class="offset-2">
                                <h1>
                                        Edit my Profile
                                </h1>

                        </div>
                        <div class="row">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="title" class="col-md-4 col-form-label">Title</label>
                                                <input id="title" type="text" placeholder="Enter title..." class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title" autofocus>

                                                @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="desc" class="col-md-4 col-form-label">Description</label>
                                                <input id="desc" type="text" placeholder="Enter description..." class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') ?? $user->profile->desc }}" required autocomplete="desc" autofocus>

                                                @error('desc')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="url" class="col-md-4 col-form-label">Url</label>
                                                <input id="url" type="text" placeholder="Enter url..." class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                                                @error('url')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>

                        <div class="row ">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"    >
                
                                                @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>
                        
                        <div class="row pt-4  post-btn">
                                <button class="btn btn-primary   " type="submit">New Post</button>
                        </div>
                </form>
        </div>

@endsection