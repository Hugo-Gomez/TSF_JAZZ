@extends('structure')

@section('titre')
    <h2>Programme</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/program.css">
@endsection

@section('contenu')

	<div class="container">
	  <ul class="tiles">
	    @foreach ($programs as $program)
	    	<li class="tile" style="background-image: url('../public/img/{{ $program->thumbnail }}');">
		    </li>
	    @endforeach
	  </ul>
	</div>

@endsection

<!-- id // id_program // thumbnail // title // date // subtitle // description // sub_description_title // sub_description -->