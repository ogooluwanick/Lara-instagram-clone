@extends('layouts.app')

@section('content')
<div class="container ">
        <div class="profile_topRow row ">
                <div class="col-3 d-flex justify-content-center align-items-center">
                        <img class="rounded-circle "  :width="[200]" :height="[200]" src="https://i.pinimg.com/564x/b0/16/0b/b0160be02faa7261a6ce5b124d381aa1.jpg" alt="user logo">
                </div>
                <div class="col-9">
                        <div class="profile_headName">
                                <h1>{{$user["username"]}}</h1>
                                <a class="d-flex justify-concent-center align-items-center" href="/p">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18v-10h-2.51l4.51-5.01 4.51 5.01h-2.51v10h-4zm-2 2h8v-10h5l-9-10-9 10h5v10zm11-1v3h-14v-3h-2v5h18v-5h-2z"/></svg>
                                        Post
                                </a>
                        </div>
                        <div class="d-flex ">
                                <div class="mr-4 "><strong class="font-weight-bold">0 </strong>posts</div>
                                <div class="mr-4"><strong class="font-weight-bold">355 </strong>followers</div>
                                <div class="mr-4"><strong class="font-weight-bold">386 </strong>following</div>
                        </div>
                        <div class="">
                                <strong class="font-weight-bold pt-4">{{$user->profile->title}}</strong>
                                <div class="">{{$user->profile->desc}}</div>
                                <a href="{{$user->profile->url}}">{{$user->profile->url}} </a>
                        </div>
                </div>
        </div>
        <div class="row pt-5">
                <div class="col-4">
                        <img class="w-100 "  :height="[400]"  src="https://i.pinimg.com/564x/79/ac/48/79ac48d1be9469326d70e07f8886fd6f.jpg" alt="post">
                </div>
                <div class="col-4">
                        <img class="w-100 " :height="[400]" src="https://i.pinimg.com/474x/33/f9/2d/33f92dca18e403854d07930e340e08bd.jpg" alt="post">
                </div>
                <div class="col-4">
                        <img class="w-100 h-1" :height="[400]" src="https://i.pinimg.com/474x/38/5c/79/385c79f3ba9b6cd59c5c4c987a90cf2c.jpg" alt="post">
                </div>
        </div>
    </div>
</div>
@endsection
