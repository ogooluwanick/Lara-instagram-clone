@extends('layouts.app')

@section('content')
        <div class="container ">
                <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="offset-2">
                                <h1>
                                        Add New Post
                                </h1>

                        </div>
                        <div class="row">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="caption" class="col-md-4 col-form-label">Caption</label>
                                                <input id="caption" type="text" placeholder="Enter caption..." class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                                @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                </div>
                        </div>
                        {{-- <div class="mb-6">
                                <label for="image" class="inline-block text-lg mb-2">
                                        Image
                                </label>
                                <input
                                    type="file"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="image"
                                />
                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                               @enderror
                        </div> --}}

                        <div class="row ">
                                <div class="col-8 offset-2">
                                        <div class="form-group row">
                                                <label for="image" class="col-md-4 col-form-label">Image</label>
                                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                
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