@extends('base')

@section('title')
    Post Details
@endsection

@section('body')
    {{ dd($post->id ) }}
    @if (!@empty($post->title))
        <div class="card">
            <div class="card-header">
                <h1> {{ $post->title }} </h1>
            </div>
            <div class="card-body">
                {{ $post->content }} 
            </div>
        </div>
    @else
        <h1> Post Is Empty </h1>
    @endif
@endsection