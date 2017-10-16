@extends('structure')

@section('titre')
    <h2>Jazz Blog</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/blog.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endsection

@section('contenu')
<div class="row">
	@foreach ($blog as $blogs)

    		<div class="col m4 s10 offset-s1 blog-cards">
    			<div class="card-panel">
    				<a href="#!"><img src="../public/img/{{ $blogs->thumbnail }}"></a>
       				<br><br>
        			<p>{{ $blogs->author }}</p>
        			<p>{{ $blogs->description }}</p>
        			<br>
    			</div>
    		</div>

    @endforeach
</div>
@endsection
