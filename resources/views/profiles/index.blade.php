@extends('layouts.app')

@section('content')
<div class="container ">
        <div class="profile_topRow row ">
                <div class="col-3 d-flex justify-content-center align-items-center">
                       {{-- <img src=" {{$user->profile->image}}" alt=""> --}}
                        <img class="rounded-circle "  :width="[200]" :height="[200]" src="{{asset("storage/".$user->profile?->image)}}" alt="user logo">
                </div>
                <div class="col-9">
                        <div class="profile_headName">
                                <h1>{{$user["username"]}}</h1>
                                @can('update', $user->profile)
                                        <a class="d-flex justify-concent-center align-items-center " href="/p">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18v-10h-2.51l4.51-5.01 4.51 5.01h-2.51v10h-4zm-2 2h8v-10h5l-9-10-9 10h5v10zm11-1v3h-14v-3h-2v5h18v-5h-2z"/></svg>
                                                Post
                                        </a>
                                @endcan
                                @if (auth()->user()->id!==$user->id)
                                                <follow-button user-id="{{auth()->user()->id}}" follows="{{$follows}}"></follow-button>
                                @endif
                                </div>
                        @can('update', $user->profile)
                                <div class="my-2">
                                        <a class="d-flex justify-concent-center align-items-center " href="/profile/{{$user["id"]}}/edit">
                                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M8.071 21.586l-7.071 1.414 1.414-7.071 14.929-14.929 5.657 5.657-14.929 14.929zm-.493-.921l-4.243-4.243-1.06 5.303 5.303-1.06zm9.765-18.251l-13.3 13.301 4.242 4.242 13.301-13.3-4.243-4.243z"/></svg>
                                                &nbsp;Edit Profile
                                        </a>
                                </div>
                        @endcan
                        <div class="d-flex ">
                                <div class="mr-4 "><strong class="font-weight-bold">{{$user->posts->count()}} </strong>posts</div>
                                <div class="mr-4"><strong class="font-weight-bold">{{$user->profile->followers->count()}} </strong>followers</div>
                                <div class="mr-4"><strong class="font-weight-bold">{{$user->following->count()}} </strong>following</div>
                        </div>
                        <div class="">
                                <strong class="font-weight-bold pt-4">{{$user->profile?->title}}</strong>
                                <div class="">{{$user->profile?->desc}}</div>
                                <a class="profile_URL " href={{"https://" . $user->profile?->url}} target="_blank">{{$user->profile?->url}} </a>
                        </div>
                </div>
        </div>
        <div class="row pt-5">
                @foreach ($user->posts->sortBy("created_at",SORT_REGULAR,true) as $item)                                {{-- sortBy to sort by latest post --}}
                    <x-post-card :item="$item"/>
                @endforeach
        </div>
    </div>
</div>
@endsection
