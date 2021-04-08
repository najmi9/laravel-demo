@extends('base')

@section('title')
    Post Lists
@endsection

@section('body')
    <div class="d-flex justify-content-between bg-light pd-2 rounded text-primary">
        <h1> Posts:  </h1> 
        <div>
            <a href="{{ route('post_new') }}" class="btn btn-primary">New Post</a>
        </div>
    </div>    
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1>  {{ $post->title }} </h1>
                    </div>
                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('post_edit', $post) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                        <a href="{{ route('post_show', $post) }}" class="btn btn-sm btn-success mr-2">Show</a>
                        <a href="{{ route('post_delete', $post) }}" class="btn btn-sm btn-danger mr-2">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop