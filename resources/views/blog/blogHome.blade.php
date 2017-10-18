@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Blog Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>L'auteur</th>
        <th>La description</th>
        <th>La lien</th>
        <th>Le photo</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_blogs as $data_blog)
      <tr>
        <th><a href="{{ url('blog/admin/'.$data_blog->id) }}" > {{ $data_blog->author }} </a></th>
        <th>{{ $data_blog->description }}</th> 
        <th>{{ $data_blog->link }}</th> 
        <th><img  src="<?php echo asset("../public/img/$data_blog->thumbnail")?>" alt="{{ $data_blog->author }}" height="50" width="50"></th>
        <th class="danger">
            <a href="{{ url('blog/delete/'.$data_blog->id) }}" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true">
                    Effacer
                </span>
            </a>
        </th>
      </tr>
    @endforeach
    </tbody>
  </table>

  <h3>Ajouter un nouveau blog </h3>

  <form method="POST" action="/server.php/blog/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>L'auteur </label>
      <input type="text" name="authorBlog" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Le lien</label>
      <input type="text" name="linkBlog" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>La description</label>
      <textarea name="descriptionBlog" class="form-control" required="required"></textarea>
    </div>


    <div class="form-group">
        <label>Sélectionnez l'image à télécharger:</label>
        <input type="file" name="img_file">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">S'ajouter</button>
    </div>

  </form> 


</div>

@endsection