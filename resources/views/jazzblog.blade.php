@extends('structure')

<link rel="stylesheet" type="text/css" href="../public/css/jazzblog.css">

@section('titre')
    <h2>Jazz Blog</h2>
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

