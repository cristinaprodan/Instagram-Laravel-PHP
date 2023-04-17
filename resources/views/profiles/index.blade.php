@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
           <div class="col-3 p-5">
               <img src="https://www.w3schools.com/images/w3schools_green.jpg" class="rounded-circle">

           </div>

        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/Laravel/laravel/public/p/create">Add new post</a>

            </div>
            <div class="d-flex">
                <a href="/Laravel/laravel/public/profile/{{$user->id}}/ edit">Edit Profile</a>
            <div class="p-3"><strong>{{$user->posts->count()}}</strong> posts</div>
            <div class="p-3"><strong>2.3k</strong> followers</div>
            <div class="p-3"><strong>956</strong> following</div>
            </div>
            <div clas="p-3"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href ="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>

        </div>
        <div class="row p-5">
            @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/Laravel/laravel/public/p/{{$post->id}}">
                    <img src="/storage/app/public/uploads/{{$post->image}}" class="w-100">
                </a>
            </div>
            @endforeach

        </div>
    </div>


@endsection
