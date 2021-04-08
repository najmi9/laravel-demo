<form action="{{ !empty($post)? route('post_update', ['id' => $post->id]) : route('post_store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ !empty($post)? $post->title: '' }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="textarea" name="content" id="content" class="form-control" value="{{ !empty($post)? $post->content: '' }}">
    </div>
    <div class="form-group">
    <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ !empty($post)? $post->author: '' }}">
    </div>
    <div class="form-group">
        <button class="btn btn-success">Save Post</button>
    </div>
</form>