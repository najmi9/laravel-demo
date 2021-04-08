@extends('base')
@section('title')
    New Post
@endsection

@section('body')
    <div class="card">
        <div class="card-header">
            New Post
        </div>
        <div class="card-body bg-light">
            @include('post.form')
        </div>
    </div>
@endsection