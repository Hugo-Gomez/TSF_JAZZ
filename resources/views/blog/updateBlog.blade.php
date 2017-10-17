@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('blog/admin') }}" > Return Back </a></p>
<h3>Update The Blog </h3>

  <form method="POST" action="/server.php/blog/admin/{{ $blog->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The author </label>
      <input type="text" name="authorBlog" class="form-control" value="{{ $blog->author }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionBlog" class="form-control"><?php echo $blog->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>

</div>

@endsection