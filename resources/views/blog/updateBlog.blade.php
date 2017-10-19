@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('blog/admin') }}" >Retour</a></p>
<h3>Mettre à jour le blog de {{ $blog->author }}</h3>

  <form method="POST" action="/server.php/blog/admin/{{ $blog->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Auteur </label>
      <input type="text" name="authorBlog" class="form-control" value="{{ $blog->author }}">
    </div>

    <div class="form-group">
      <label>Lien </label>
      <input type="text" name="linkBlog" class="form-control" value="{{ $blog->link }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionBlog" class="form-control"><?php echo $blog->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

</div>

@endsection