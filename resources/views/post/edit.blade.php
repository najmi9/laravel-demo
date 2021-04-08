@extends('base')
@section('title')
    Edit Post
@endsection

@section('body')
    <div class="card">
        <div class="card-header">
            Edit Post
        </div>
        <div class="card-body bg-light">
            @include('post.form')
        </div>
    </div>
@endsection